<?php

namespace Sierra;

use Sierra\Routes\Bibs;
use Sierra\Routes\Items;

/**
 * The Sierra API is used to interact with Innovative Sierra APIs.
 *
 * Before you start
 * - You will need a Client ID and Secret
 * - You will need to know the BASE URL of your Sierra API service.
 *
 * ===== Using the class =====
 *
 * TODO: Insert example of usage
 *
 * @package Sierra
 */
class SierraAPI
{

    /** @var  $baseUrl */
    protected $baseUrl;

    /** @var $clientId  */
    protected $clientId;

    /** @var  $clientSecret */
    protected $clientSecret;

    /**
     * @var string
     */
    protected $version;

    /**
     * Sierra Constructor
     * @param $baseUrl
     * @param $clientId
     * @param $clientSecret
     * @internal param array $opts A optional array of options to pass to the client
     */
    public function __construct($baseUrl = null, $clientId = null, $clientSecret = null)
    {
        $this->setBaseURL($baseUrl);
        $this->setClientID($clientId);
        $this->setClientSecret($clientSecret);
    }

    /**
     * @param string $clientID
     */
    public function setClientID($clientID)
    {
        $this->clientId = $clientID;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * @param string $baseURL Base URL of the Sierra API being used.
     */
    public function setBaseURL($baseURL)
    {
        if (substr($baseURL, strlen($baseURL) - 1, 1) != '/') {
            $baseURL = $baseURL . '/';
        }
        $this->baseUrl = $baseURL;
    }

    /**
     * Get the BaseUrl
     *
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Get the Client ID
     *
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Get the Client Secret
     *
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Access bibs routes
     * @return Bibs
     */
    public function bibs()
    {
        return new Bibs($this);
    }

    /**
     * Access bibs routes
     * @return Items
     */
    public function items()
    {
        return new Items($this);
    }
}
