<?php

namespace Sierra;

use GuzzleHttp\HandlerStack;
use kamermans\OAuth2\OAuth2Middleware;
use kamermans\OAuth2\GrantType\ClientCredentials;
use Sierra\Errors\APIClientError;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Sierra\Errors\APIClientException;
use Sierra\Errors\SierraApiConfigurationException;
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
     * @var SierraAPI|null
     */
    protected $sierraAPI = null;


    /**
     * Sierra Constructor
     *
     * @param SierraAPI $sierraAPI
     */
    public function __construct(SierraAPI $sierraAPI)
    {
        $this->sierraAPI = $sierraAPI;
    }

    /**
     * Get a named option from the options
     *
     * @throws SierraApiConfigurationException
     * @internal param string $key
     *
     * @return SierraAPI
     */
    protected function getSierraAPI()
    {
        return $this->sierraAPI;
    }

    /**
     * Handle a response from a service and return the parsed JSON payload
     *
     * @param Request $request
     * @param int $expected_status_code
     *
     * @return string
     * @throws APIClientError
     */
    private function handleRequest(Request $request, $expected_status_code = 200)
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
    private function getDefaultHeaders()
    {
        if (empty($this->getSierraAPI()->getClientId()) || empty($this->getSierraAPI()->getClientSecret())) {
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
    private function getHTTPClient()
    {
        if ($this->httpClient === null) {
            // basic client which will be used when we need to get a new token
            $reAuthClient = new Client([
                'base_uri' => $this->getSierraAPI()->getBaseUrl() . 'token'
            ]);
            $reAuthConfig = [
                'client_id' => $this->getSierraAPI()->getClientId(),
                'client_secret' => $this->getSierraAPI()->getClientSecret(),
            ];

            // setup the oAuth 2 middleware
            $grantType = new ClientCredentials($reAuthClient, $reAuthConfig);
            $oauth = new OAuth2Middleware($grantType);

            $stack = HandlerStack::create();
            $stack->push($oauth);

            // create our actual client
            $this->httpClient = new Client([
                'base_uri' => $this->getSierraAPI()->getBaseUrl(),
                'handler'  => $stack,
                'auth'     => 'oauth'
            ]);
        }

        return $this->httpClient;
    }
}
