<?php

namespace Sierra;

use GuzzleHttp\HandlerStack;
use kamermans\OAuth2\OAuth2Middleware;
use kamermans\OAuth2\GrantType\ClientCredentials;
use Sierra\Errors\APIClientError;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Sierra\Errors\SierraAuthorizationException;

/**
 * Utility functions which are needed to handle responses from the Sierra API Services.
 *
 * Trait Service
 * @package Sierra
 */
trait Service
{
    /**
     * @var Client
     */
    protected $httpClient;

    /**
     * Get a named option from the options
     *
     * @param string $key
     *
     * @return null|mixed
     */
    protected function getOption($key)
    {
        return empty($this->opts[$key]) ? null : $this->opts[$key];
    }

    /**
     * Handle a response from a service and return the parsed JSON payload
     *
     * @param Request $request
     * @param int $expected_status_code
     *
     * @return \stdClass
     * @throws APIClientError
     */
    public function handleRequest(Request $request, $expected_status_code = 200)
    {
        // Guzzle will throw Client or Server Errors as necessary
        $response = $this->getHTTPClient()->send($request);

        $response_status_code = $response->getStatusCode();

        if ($response_status_code == $expected_status_code) {
            return json_decode($response->getBody());
        } else {
            throw new APIClientError("Response code $response_status_code was unexpected");
        }
    }

    /**
     * Generate default headers to always request JSON and send our API Key.
     *
     * @return array
     * @throws SierraAuthorizationException
     */
    protected function getDefaultHeaders()
    {
        if (empty($this->getOption(SierraAPI::CLIENT_ID)) || empty($this->getOption(SierraAPI::CLIENT_SECRET))) {
            throw new SierraAuthorizationException("No client id or secret has been configured for this instance");
        }

        return [
            'User-Agent'    => 'sierra-api-php-client/' . Version::VERSION . ' php/' . PHP_VERSION,
            'Accept'        => 'application/json'
        ];
    }

    /**
     * Get an HTTP Client
     * @return Client|null
     */
    public function getHTTPClient()
    {
        if ($this->httpClient === null) {

            // basic client which will be used when we need to get a new token
            $reAuthClient = new Client([
                'base_uri' => $this->getOption(SierraAPI::BASE_URL . 'token')
            ]);
            $reAuthConfig = [
                'client_id' => $this->getOption(SierraAPI::CLIENT_ID),
                'client_secret' => $this->getOption(SierraAPI::CLIENT_SECRET),
            ];

            // setup the oAuth 2 middleware
            $grantType = new ClientCredentials($reAuthClient, $reAuthConfig);
            $oauth = new OAuth2Middleware($grantType);

            $stack = HandlerStack::create();
            $stack->push($oauth);

            // create our actual client
            $this->httpClient = new Client([
                'base_uri' => $this->getOption(SierraAPI::BASE_URL),
                'handler'  => $stack,
                'auth'     => 'oauth'
            ]);

        }

        return $this->httpClient;
    }
}
