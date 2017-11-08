<?php

namespace Sierra;

use GuzzleHttp\Psr7\Request;

class Items extends SierraAPI
{
    use Service;

    /**
     * Post a query to the /items/query Sierra API endpoint
     *
     * @param JsonQuery $query A Query to Execute
     *
     * @return \stdClass
     */
    public function query(JsonQuery $query)
    {
        $request = new Request(
            'POST',
            'items/query',
            $this->getDefaultHeaders(),
            $query->toJSON()
        );
        return $this->handleRequest($request);
    }
}