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
     * @var array|null
     */
    private $query;

    public function __construct(array $opts)
    {
        switch ($opts) {
            case 'isbn':
                if (!empty($opts['isbn'])) {
                    $this->query = $this->buildIsbnQuery($opts['isbn']);
                }
                break;
            case 'lcn':
                if (!empty($opts['lcn'])) {
                    $this->query = $this->buildLcnQuery($opts['lcn']);
                }
                break;
            default:
                $this->query = null;
        }
    }

    /**
     * Return JSON encoded query
     * @return string
     */
    public function toJSON()
    {
        if (!is_null($this->query)) {
            return json_encode($this->query);
        }
    }

    /**
     * Build a query to look for an ISBN
     *
     * @param string $isbn The Value to search for
     *
     * @return array
     */
    private function buildIsbnQuery($isbn)
    {
        // TODO: These tag codes are guessed. this bit of documentation is behind a login which we don't have access to.
        return $this->buildTagQuery('i', $isbn);
    }

    /**
     * Build a query to look for an LCN
     *
     * @param string $lcn The Value to search for
     *
     * @return array
     */
    private function buildLcnQuery($lcn)
    {
        // TODO: These tag codes are guessed. this bit of documentation is behind a login which we don't have access to.
        return $this->buildTagQuery('l', $lcn);
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
