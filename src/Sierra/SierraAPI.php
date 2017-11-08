<?php

namespace Sierra;

use Sierra\Errors\APIClientError;
use Sierra\BibAPI\Bibs;

/**
 * The Sierra API is used to interact with Innovative Sierra APIs.
 *
 * Before you start
 * - You will need a Client ID and Secret
 * - You will need to know the BASE URL of your Sirra API service.
 *
 * ===== Using the class =====
 *
 * TODO: Insert example of usage
 *
 * @package Sierra
 */
class SierraAPI
{

    const CLIENT_ID = 'client_id';
    const CLIENT_SECRET = 'client_secret';
    const BASE_URL = 'baseURL';
    const HEADERS = 'headers';

    /**
     * An array of options will include at a minimum:
     * $opts = [
     *   'client_id' => 'someID',
     *   'client_secret' => 'someSecret',
     *   'baseURL' => 'https://example.com'
     * ]
     * @var array
     */
    protected $opts;

    /**
     * @var string
     */
    protected $version;

    /**
     * Sierra Constructor
     * @param array $opts A optional array of options to pass to the client
     */
    public function __construct(array $opts = [])
    {
        $this->opts = $opts;

        if (isset($opts[self::BASE_URL])) {
            // make sure we set the base url correctly
            $this->setBaseURL($opts[self::BASE_URL]);
        }
    }

    /**
     * @param string $clientID
     */
    public function setClientID($clientID)
    {
        $this->opts[self::CLIENT_ID] = $clientID;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret($clientSecret)
    {
        $this->opts[self::CLIENT_SECRET] = $clientSecret;
    }

    /**
     * @param string $baseURL Base URL of the Sierra API being used.
     */
    public function setBaseURL($baseURL)
    {
        if (substr($baseURL, strlen($baseURL) - 1, 1) != '/') {
            $baseURL = $baseURL . '/';
        }
        $this->opts[self::BASE_URL] = $baseURL;
    }

    /**
     * Access bibs routes
     * @return Bibs
     */
    public function bibs()
    {
        return new Bibs($this->getOptions());
    }

    /**
     * Get the options for this API client instance.
     * Throw an error if the important options are not present.
     *
     * @return array
     * @throws APIClientError
     */
    protected function getOptions()
    {
        if (empty($this->opts[self::CLIENT_ID])) {
            throw new APIClientError("client id must be set");
        }
        if (empty($this->opts[self::CLIENT_SECRET])) {
            throw new APIClientError("client secret must be set");
        }
        if (empty($this->opts[self::BASE_URL])) {
            throw new APIClientError("base url must be set");
        }

        return $this->opts;
    }
}
