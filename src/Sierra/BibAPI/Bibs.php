<?php
namespace Sierra\BibAPI;

use \Sierra\SierraAPI;
use \Sierra\Service;
use \Sierra\JsonQuery;

use GuzzleHttp\Psr7\Request;

class Bibs extends SierraAPI
{
    use Service;

    /**
     * Post a query to the /bibs/query endpoint
     *
     * @param JsonQuery $query  A Query to execute
     * @param int       $offset Start at Offset (defaults to 0)
     * @param int       $limit  Limit to n responses (defaults to 20)
     *
     * @return \stdClass
     */
    public function query(JsonQuery $query, $offset = 0, $limit = 20) {
        $request = new Request(
           'POST',
           'bibs/query?offset=' . $offset . '&limit=' . $limit,
           $this->getDefaultHeaders(),
           $query->toJSON()
        );

        return $this->handleRequest($request);
    }
}
