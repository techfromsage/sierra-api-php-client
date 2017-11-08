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
    public function query(JsonQuery $query, $offset = 0, $limit = 20)
    {
        $mandatoryArguments = [
            'offset' => $offset,
            'limit'  => $limit,
        ];

        $request = new Request(
           'POST',
           'bibs/query?' . $this->prepareArguments($mandatoryArguments),
           $this->getDefaultHeaders(),
           $query->toJSON()
        );

        return $this->handleRequest($request);
    }

    /**
     * Search the Sierra 'AWS' index for the text given
     *
     * @see https://techdocs.iii.com/sierraapi/Content/zAppendix/keywordSearchIndexes.htm
     *
     * @param $index
     * @param $text
     * @param int $offset
     * @param int $limit
     * @param array $fields
     *
     * @return \stdClass
     */
    public function search($index, $text, $offset = 0, $limit = 20, $fields = [])
    {
        $mandatoryArguments = [
            'index'  => $index,
            'text'   => $text,
        ];

        $optionalArguments = [
            'offset' => $offset,
            'limit'  => $limit,
            'fields' => join(',', $fields)
        ];

        $request = new Request(
            'GET',
            'bibs/search?' . $this->prepareArguments($mandatoryArguments, $optionalArguments),
            $this->getDefaultHeaders()
        );

        return $this->handleRequest($request);
    }

    /**
     * Get a Bib record by ID
     *
     * @param int $id       The bib id to retrieve
     * @param array $fields Optional fields to retrieve
     *
     * @return \stdClass
     */
    public function getRecordByID($id, array $fields = [])
    {
        $optionalArguments = [
            'fields' => join(',', $fields)
        ];

        $request = new Request(
            'GET',
            'bibs/' . $id . '?' . $this->prepareArguments([], $optionalArguments),
            $this->getDefaultHeaders()
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
    private function prepareArguments(array $mandatory, array $optional = [])
    {
        foreach ($optional as $k => $v) {
            if (!empty($v)) {
                $mandatory[$k] = $v;
            }
        }

        return http_build_query($mandatory);
    }
}
