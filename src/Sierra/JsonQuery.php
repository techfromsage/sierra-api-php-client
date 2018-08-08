<?php

namespace Sierra;

/**
 * JSON Query's are a Sierra API thang.
 * It is a particular structured JSON object specific to Sierra.
 *
 * This class provides some builders to build a query for simple things like ISBN search or LCN search.
 *
 * ==== example ====
 * Set up the query.
 *
 * $jsonQuery = new JsonQuery(['isbn' => '0123456789]);
 *
 * When ready to use the query in a request body
 * $jsonQuery->toJSON();
 *
 * @package Sierra
 */
class JsonQuery
{
    /**
     * @var array
     */
    private $opts = [];

    /**
     * Return JSON encoded query
     * @return string
     */
    public function toJSON()
    {
        $query = $this->buildQuery();
        return json_encode($query);
    }

    /**
     * Build a query to look for an ISBN
     *
     * @param string $isbn The Value to search for
     */
    public function addIsbn($isbn)
    {
        $this->opts['isbn'][] = $isbn;
    }

    /**
     * Build a query to look for an LCN
     *
     * @param string $lcn The Value to search for
     */
    public function addLcn($lcn)
    {
        $this->opts['lcn'][] = $lcn;
    }

    /**
     * Build a query using the Sierra 'Tags'
     * @return array|null
     */
    private function buildQuery()
    {
        // TODO: These tag codes are guessed. this bit of documentation is behind a login which we don't have access to.
        $query = null;
        if (!empty($this->opts['isbn'])) {
            $query = $this->buildTagQuery('i', $this->opts['isbn']);
        } elseif (!empty($this->opts['lcn'])) {
            $query = $this->buildTagQuery('l', $this->opts['lcn']);
        }
        return $query;
    }

    /**
     * Build a Query Array to search using a single non-marc tag field.
     *
     * @param string       $tag      The tag to search for
     * @param string|array $operands The value or values to search for
     *
     * @return array
     */
    private function buildTagQuery($tag, $operands)
    {
        $query = [
            'target' => [
                'record' => [ 'type' => 'bib'],
                'field'  => [ 'tag' => $tag],
            ],
            'expr'   => [
                'op'       => 'equals',
                'operands' => $operands,
            ],
        ];
        return $query;
    }
}
