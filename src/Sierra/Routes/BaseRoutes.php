<?php
/**
 * Created by PhpStorm.
 * User: tatty
 * Date: 09/11/17
 * Time: 12:34
 */

namespace Sierra\Routes;

use GuzzleHttp\Psr7\Request;
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
        $this->defaultContentType = self::CONTENT_TYPE_JSON;
    }

    /**
     * @param string $uri The URI to GET
     * @param array $args The arguments to add to the query string
     *
     * @return \stdClass|string
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
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAuthorizationException
     * @return \StdClass|string
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
     * @param array $optional  Parameters that may be sent if they have a value
     *
     * @return array
     */
    protected function prepareArguments(array $mandatory, array $optional = [])
    {
        foreach ($optional as $k => $v) {
            if (!empty($v)) {
                $mandatory[$k] = $v;
            }
        }

        return $mandatory;
    }
}
