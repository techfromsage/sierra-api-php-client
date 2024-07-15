<?php

namespace Sierra\Routes;

use GuzzleHttp\Psr7\Request;
use Sierra\Errors\SierraAPIClientException;
use Sierra\Service;
use Sierra\SierraAPI;

abstract class BaseRoutes
{

    use Service;

    const CONTENT_TYPE_MARC_XML      = 'application/marc-xml';
    const CONTENT_TYPE_MARC_JSON     = 'application/marc-json';
    const CONTENT_TYPE_MARC_IN_JSON  = 'application/marc-in-json';
    const CONTENT_TYPE_JSON          = 'application/json';

    /**
     * Constructor
     *
     * @param SierraAPI $sierraAPI Contains all the config we shall need
     */
    public function __construct(SierraAPI $sierraAPI)
    {
        $this->sierraAPI = $sierraAPI;
    }

    /**
     * @param string $uri The URI to GET
     * @param array $args The arguments to add to the query string
     *
     * @return array|string
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAuthorizationException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function doGetRequest($uri, array $args)
    {
        $request = new Request(
            'GET',
            $uri . '?' . http_build_query($args),
            $this->getDefaultHeaders()
        );

        return $this->handleRequest($request);
    }

    /**
     * @param string $uri The URI to get
     * @param array $args Any arguments to add to the query string
     * @param string $body The body of the request
     *
     * @return array|string
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAuthorizationException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function doPostRequest($uri, array $args, $body)
    {
        $request = new Request(
            'POST',
            $uri . '?' . http_build_query($args),
            $this->getDefaultHeaders(),
            $body
        );

        return $this->handleRequest($request);
    }

    /**
     * Prepare optional and mandatory arguments, making sure that only optional arguments with values are included
     *
     * @param array $mandatory Parameters which must be sent in the URL
     *                         It is valid that some API routes may have no mandatory parameters required
     * @param array $optional Parameters that may be sent if they have a value
     *
     * @return array
     * @throws SierraAPIClientException
     */
    protected function prepareArguments(array $mandatory, array $optional = [])
    {
        // if mandatory parameters are required, then check that we have a value for them.
        if (!empty($mandatory) && (count(array_filter($mandatory, [$this, 'argumentFilter'])) <> count($mandatory))) {
            throw new SierraAPIClientException("Mandatory parameter is missing a value");
        }

        $out = array_filter(array_merge($mandatory, $optional), [$this, 'argumentFilter']);

        return $out;
    }

    /**
     * We might legitimately be passing a mandatory argument
     * (for example 'offset') where '0' should not be filtered out.
     * So we create our own filter here.
     *
     * @param null|string|integer|boolean $value The value to test
     *
     * @return boolean
     */
    private function argumentFilter($value)
    {
        return ($value !== null && $value !== false && $value !== '');
    }
}
