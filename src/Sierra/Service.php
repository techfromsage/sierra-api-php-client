<?php

namespace Sierra;

use GuzzleHttp\HandlerStack;
use kamermans\OAuth2\OAuth2Middleware;
use kamermans\OAuth2\GrantType\ClientCredentials;
use Sierra\Errors\APIClientError;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Sierra\Errors\SierraAPIClientException;
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
     * Content type of a particular route
     * This is reset to null immediately after use.
     * @var null|string
     */
    protected $routeSpecificContentType = null;

    /**
     * Get the Sierra API
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
     * @param Request $request The request to make
     * @param int $expected_status_code An expected status code
     *
     * @return \stdClass|string
     * @throws SierraAuthorizationException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws SierraAPIClientException
     */
    private function handleRequest(Request $request, $expected_status_code = 200)
    {
        // Guzzle will throw Client or Server Errors as necessary
        $response = $this->getHTTPClient()->send($request);

        $response_status_code = $response->getStatusCode();

        if ($response_status_code == $expected_status_code) {
            $contentType = $response->getHeader('Content-Type');
            if (!empty($contentType)) {
                if (strpos($contentType[0], ';') !== -1) {
                    $contentType = explode(';', $contentType[0]);
                }
                switch ($contentType[0]) {
                    case 'application/json':
                    case 'application/marc-json':
                    case 'application/marc-in-json':
                        return json_decode($response->getBody(), true);
                        break;
                    case 'application/marc-xml':
                        return $response->getBody()->getContents();
                        break;
                    default:
                        return $response->getBody()->getContents();
                }
            } else {
                return $response->getBody()->getContents();
            }
        } else {
            throw new SierraAPIClientException("Response code $response_status_code was unexpected");
        }
    }

    /**
     * Generate default headers
     *
     * @return array
     */
    private function getDefaultHeaders()
    {
        return [
            'User-Agent' => 'sierra-api-php-client/' . Version::VERSION . ' php/' . PHP_VERSION,
            'Accept'     => $this->getContentType()
        ];
    }

    /**
     * Get either a route specific content type or the default content type.
     * @return null|string
     */
    protected function getContentType()
    {
        if (empty($this->routeSpecificContentType)) {
            // we don't have to use a specific content type for this route, so can use whatever the default is.
            return $this->getSierraAPI()->getDefaultAcceptContentType();
        } else {
            // we need to use a specific content type for this request only.
            // So we capture the content type to return, and reset the internal value to null.
            $retVal = $this->routeSpecificContentType;
            $this->routeSpecificContentType = null;
            return $retVal;
        }
    }

    /**
     * Set a content Type to use for this API Route.
     * Some API routes only support one content type which may not be
     * the default content type set in the SierraAPI Client.
     *
     * Resets to default content type after use in getContentType().
     *
     * @param string $contentType Set this Content Type as the value to use in the header for the next request
     */
    protected function setRouteSpecificContentType($contentType)
    {
        $this->routeSpecificContentType = $contentType;
    }

    /**
     * Get an HTTP Client
     * @return Client|null
     * @throws SierraAuthorizationException
     */
    private function getHTTPClient()
    {
        if (empty($this->getSierraAPI()->getClientId()) || empty($this->getSierraAPI()->getClientSecret())) {
            throw new SierraAuthorizationException("No client id or secret has been configured for this instance");
        }

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
