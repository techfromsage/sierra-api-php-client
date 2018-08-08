<?php
namespace Sierra\Routes;

use \Sierra\JsonQuery;

class Bibs extends BaseRoutes
{
    /**
     * Post a query to the /bibs/query endpoint
     *
     * @param JsonQuery $query A Query to execute
     * @param int $offset Start at Offset (defaults to 0)
     * @param int $limit Limit to n responses (defaults to 20)
     *
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAPIClientException
     * @throws \Sierra\Errors\SierraAuthorizationException
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
     * data is structured like this:
     *
     * }
     *   "count": 1,
     *   "total": 1,
     *   "start": 0,
     *   "entries": [
     *       {
     *           "relevance": 2.4000000953674,
     *           "bib": {
     *               "id": "1000016",
     *               "fixedFields": {...},  // these are Sierra specific fields
     *               "varFields": [...]  // These are the MARC data fields.
     *           }
     *       }
     *   ]
     * }
     *
     * Each MARC field looks like this
     * {
     *   "fieldTag": "a",
     *   "marcTag": "100",
     *   "ind1": "1",
     *   "ind2": " ",
     *   "subfields": [
     *      {
     *          "tag": "a",
     *          "content": "Landau, L. D."
     *      },
     *      {
     *          "tag": "q",
     *          "content": "(Lev Davidovich),"
     *      },
     *      {
     *          "tag": "d",
     *          "content": "1908-1968."
     *      }
     *   ]
     * },
     *
     * @param $index
     * @param $text
     * @param int $offset
     * @param int $limit
     * @param array $fields
     *
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAPIClientException
     * @throws \Sierra\Errors\SierraAuthorizationException
     */
    public function search($index, $text, $offset = 0, $limit = 20, $fields = [])
    {
        $mandatoryArguments = [
            'index' => $index,
            'text'  => $text,
        ];

        $optionalArguments = [
            'offset' => $offset,
            'limit'  => $limit,
            'fields' => implode(',', $fields)
        ];

        return $this->doGetRequest(
            'bibs/search',
            $this->prepareArguments($mandatoryArguments, $optionalArguments)
        );
    }

    /**
     * Get a Bib record by ID
     *
     * @param int $id The bib id to retrieve
     * @param array $fields Optional fields to retrieve
     *
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAPIClientException
     * @throws \Sierra\Errors\SierraAuthorizationException
     */
    public function getRecordByID($id, array $fields = [])
    {
        $optionalArguments = [
            'fields' => implode(',', $fields)
        ];

        return $this->doGetRequest(
            'bibs/' . $id,
            $this->prepareArguments([], $optionalArguments)
        );
    }

    /**
     * Get the MARC record for a Bib record by ID
     * This API route has different accept headers that you might want to use to get MARC record representations
     *
     * @see https://sandbox.iii.com/iii/sierra-api/swagger/index.html#!/bibs/Get_the_MARC_data_for_a_single_bib_record_get_6
     *
     * @param int $id The bib id to retrieve
     * @param string|null $contentType A content type to ask for
     *
     * @return \stdClass|string
     * @throws \Sierra\Errors\APIClientError
     * @throws \Sierra\Errors\SierraAuthorizationException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Sierra\Errors\SierraApiConfigurationException
     */
    public function getMarcRecordByID($id, $contentType = null)
    {
        if (empty($contentType)) {
            $contentType = self::CONTENT_TYPE_MARC_XML;
        }
        $this->setRouteSpecificContentType($contentType);
        return $this->doGetRequest('bibs/' . $id . '/marc', []);
    }
}
