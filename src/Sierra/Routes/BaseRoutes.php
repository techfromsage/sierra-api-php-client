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

abstract class BaseRoutes
{

    use Service;

    /**
     * @param $uri
     * @param array $args
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAuthorizationException
     * @return string
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
     * @param $uri
     * @param array $args
     * @param $body
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAuthorizationException
     * @return string
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
     * @return string
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
