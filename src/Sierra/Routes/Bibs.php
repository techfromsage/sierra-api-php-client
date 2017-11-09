<?php
namespace Sierra\Routes;

use \Sierra\JsonQuery;

class Bibs extends BaseRoutes
{
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

        return $this->doPostRequest(
            'bibs/query',
            $this->prepareArguments($mandatoryArguments),
            $query->toJSON()
        );
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

        return $this->doGetRequest(
            'bibs/search',
            $this->prepareArguments($mandatoryArguments, $optionalArguments)
        );
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

        return $this->doGetRequest(
            'bibs/' . $id,
            $this->prepareArguments([], $optionalArguments)
        );
    }
}
