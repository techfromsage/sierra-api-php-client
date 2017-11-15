<?php
namespace Sierra\Routes;

use \Sierra\JsonQuery;

class Bibs extends BaseRoutes
{
    /**
     * Post a query to the /bibs/query endpoint
     *
     * @see https://sandbox.iii.com/iii/sierra-api/swagger/index.html#!/bibs/Filter_the_records_by_a_query_in_JSON_format_post_3
     *
     * @param JsonQuery $query A Query to execute
     * @param int $offset Start at Offset (defaults to 0)
     * @param int $limit Limit to n responses (defaults to 20)
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
     * @see https://sandbox.iii.com/iii/sierra-api/swagger/index.html#!/bibs/Find_bib_information_using_AWS_search_by_author_and_or_title_get_4
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
     * @see https://sandbox.iii.com/iii/sierra-api/swagger/index.html#!/bibs/Get_a_bib_by_record_ID_get_5
     *
     * @param int $id The bib id to retrieve
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

    /**
     * Get the MARC record for a Bib record by ID
     * This API route has different accept headers that you might want to use to get MARC record representations
     *
     * @see https://sandbox.iii.com/iii/sierra-api/swagger/index.html#!/bibs/Get_the_MARC_data_for_a_single_bib_record_get_6
     *
     * @param int   $id          The bib id to retrieve
     * @param null  $contentType A content type to ask for
     *
     * @return \stdClass|string
     */
    public function getMarcRecordByID($id, $contentType = null)
    {
        if (is_null($contentType)) {
            $contentType = self::CONTENT_TYPE_MARC_XML;
        }
        $this->setRequestContentType($contentType);
        return $this->doGetRequest('bibs/' . $id . '/marc', []);
    }
}
