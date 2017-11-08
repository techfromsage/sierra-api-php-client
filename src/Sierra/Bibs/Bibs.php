<?php
namespace Sierra;

use GuzzleHttp\Psr7\Request;

class Bibs extends SierraAPI
{
    use Service;

    /**
     * Post a query to the /bibs/query endpoint
     *
     * @param JsonQuery $query A Query to execute
     *
     * @return \stdClass
     */
    public function query(JsonQuery $query) {
        $request = new Request(
           'POST',
           'bibs/query',
           $this->getDefaultHeaders(),
           $query->toJSON()
        );

        return $this->handleRequest($request);
    }


}