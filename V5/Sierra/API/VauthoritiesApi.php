<?php
/**
 * VauthoritiesApi
 * PHP version 5
 *
 * @category Class
 * @package  III\Sierra\V5
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace API;

use \III\Sierra\V5\Configuration;
use \III\Sierra\V5\ApiClient;
use \III\Sierra\V5\ApiException;
use \III\Sierra\V5\ObjectSerializer;

/**
 * VauthoritiesApi Class Doc Comment
 *
 * @category Class
 * @package  III\Sierra\V5
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VauthoritiesApi
{

    /**
     * API Client
     * @var \III\Sierra\V5\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \III\Sierra\V5\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://sandbox.iii.com/iii/sierra-api');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \III\Sierra\V5\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \III\Sierra\V5\ApiClient $apiClient set the API client
     * @return VauthoritiesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getAListOfAuthorityRecords
     *
     * Get a list of authority records
     *
     * @param int $limit the maximum number of results (optional)
     * @param int $offset the beginning record (zero-indexed) of the result set returned (optional)
     * @param int[] $id a comma-delimited list of IDs of authority records to retrieve (optional)
     * @param string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @param \DateTime $createdDate the creation date of authority records to retrieve (can be a range) (optional)
     * @param \DateTime $updatedDate the modification date of authority records to retrieve (can be a range) (optional)
     * @param \DateTime $deletedDate the deletion date of deleted authority records to retrieve (can be a range) (optional)
     * @param bool $deleted whether to retrieve only deleted (true) or non-deleted (false) authority records (optional)
     * @param bool $suppressed the suppressed flag value of authority records to retrieve (optional)
     * @return \Models\AuthorityResultSet
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     */
    public function getAListOfAuthorityRecords($limit = null, $offset = null, $id = null, $fields = null, $createdDate = null, $updatedDate = null, $deletedDate = null, $deleted = null, $suppressed = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getAListOfAuthorityRecordsWithHttpInfo ($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $suppressed);
        return $response; 
    }


    /**
     * getAListOfAuthorityRecordsWithHttpInfo
     *
     * Get a list of authority records
     *
     * @param int $limit the maximum number of results (optional)
     * @param int $offset the beginning record (zero-indexed) of the result set returned (optional)
     * @param int[] $id a comma-delimited list of IDs of authority records to retrieve (optional)
     * @param string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @param \DateTime $createdDate the creation date of authority records to retrieve (can be a range) (optional)
     * @param \DateTime $updatedDate the modification date of authority records to retrieve (can be a range) (optional)
     * @param \DateTime $deletedDate the deletion date of deleted authority records to retrieve (can be a range) (optional)
     * @param bool $deleted whether to retrieve only deleted (true) or non-deleted (false) authority records (optional)
     * @param bool $suppressed the suppressed flag value of authority records to retrieve (optional)
     * @return Array of \Models\AuthorityResultSet, HTTP status code, HTTP response headers (array of strings)
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     */
    public function getAListOfAuthorityRecordsWithHttpInfo($limit = null, $offset = null, $id = null, $fields = null, $createdDate = null, $updatedDate = null, $deletedDate = null, $deleted = null, $suppressed = null)
    {
        
  
        // parse inputs
        $resourcePath = "/v5/authorities/";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/xml'));
  
        // query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        
        if (is_array($id)) {
            $id = $this->apiClient->getSerializer()->serializeCollection($id, 'csv', true);
        }
        
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }// query params
        
        if (is_array($fields)) {
            $fields = $this->apiClient->getSerializer()->serializeCollection($fields, 'csv', true);
        }
        
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }// query params
        
        if ($createdDate !== null) {
            $queryParams['createdDate'] = $this->apiClient->getSerializer()->toQueryValue($createdDate);
        }// query params
        
        if ($updatedDate !== null) {
            $queryParams['updatedDate'] = $this->apiClient->getSerializer()->toQueryValue($updatedDate);
        }// query params
        
        if ($deletedDate !== null) {
            $queryParams['deletedDate'] = $this->apiClient->getSerializer()->toQueryValue($deletedDate);
        }// query params
        
        if ($deleted !== null) {
            $queryParams['deleted'] = $this->apiClient->getSerializer()->toQueryValue($deleted);
        }// query params
        
        if ($suppressed !== null) {
            $queryParams['suppressed'] = $this->apiClient->getSerializer()->toQueryValue($suppressed);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Models\AuthorityResultSet'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Models\AuthorityResultSet', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Models\AuthorityResultSet', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * filterTheRecordsByAQueryInJSONFormat
     *
     * Filter the records by a query in JSON format
     *
     * @param int $offset the beginning record (zero-indexed) of the result set returned (required)
     * @param int $limit the maximum number of results (required)
     * @param  $json a query in JSON format (see the Sierra API reference documentation for more information) (required)
     * @return \Models\QueryResultSet
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     */
    public function filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)
    {
        list($response, $statusCode, $httpHeader) = $this->filterTheRecordsByAQueryInJSONFormatWithHttpInfo ($offset, $limit, $json);
        return $response; 
    }


    /**
     * filterTheRecordsByAQueryInJSONFormatWithHttpInfo
     *
     * Filter the records by a query in JSON format
     *
     * @param int $offset the beginning record (zero-indexed) of the result set returned (required)
     * @param int $limit the maximum number of results (required)
     * @param  $json a query in JSON format (see the Sierra API reference documentation for more information) (required)
     * @return Array of \Models\QueryResultSet, HTTP status code, HTTP response headers (array of strings)
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     */
    public function filterTheRecordsByAQueryInJSONFormatWithHttpInfo($offset, $limit, $json)
    {
        
        // verify the required parameter 'offset' is set
        if ($offset === null) {
            throw new \InvalidArgumentException('Missing the required parameter $offset when calling filterTheRecordsByAQueryInJSONFormat');
        }
        // verify the required parameter 'limit' is set
        if ($limit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limit when calling filterTheRecordsByAQueryInJSONFormat');
        }
        // verify the required parameter 'json' is set
        if ($json === null) {
            throw new \InvalidArgumentException('Missing the required parameter $json when calling filterTheRecordsByAQueryInJSONFormat');
        }
  
        // parse inputs
        $resourcePath = "/v5/authorities/query";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/xml'));
  
        // query params
        
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($json)) {
            $_tempBody = $json;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Models\QueryResultSet'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Models\QueryResultSet', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Models\QueryResultSet', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getAnAuthorityRecordByRecordID
     *
     * Get an authority record by record ID
     *
     * @param int $id the authority record ID (required)
     * @param string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @return \Models\Authority
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     */
    public function getAnAuthorityRecordByRecordID($id, $fields = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getAnAuthorityRecordByRecordIDWithHttpInfo ($id, $fields);
        return $response; 
    }


    /**
     * getAnAuthorityRecordByRecordIDWithHttpInfo
     *
     * Get an authority record by record ID
     *
     * @param int $id the authority record ID (required)
     * @param string[] $fields a comma-delimited list of fields to retrieve (optional)
     * @return Array of \Models\Authority, HTTP status code, HTTP response headers (array of strings)
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     */
    public function getAnAuthorityRecordByRecordIDWithHttpInfo($id, $fields = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getAnAuthorityRecordByRecordID');
        }
  
        // parse inputs
        $resourcePath = "/v5/authorities/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/xml'));
  
        // query params
        
        if (is_array($fields)) {
            $fields = $this->apiClient->getSerializer()->serializeCollection($fields, 'csv', true);
        }
        
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Models\Authority'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Models\Authority', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Models\Authority', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getTheMARCDataForASingleAuthorityRecord
     *
     * Get the MARC data for a single authority record
     *
     * @param int $id the authority record ID (required)
     * @return \Models\ErrorCode
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     */
    public function getTheMARCDataForASingleAuthorityRecord($id)
    {
        list($response, $statusCode, $httpHeader) = $this->getTheMARCDataForASingleAuthorityRecordWithHttpInfo ($id);
        return $response; 
    }


    /**
     * getTheMARCDataForASingleAuthorityRecordWithHttpInfo
     *
     * Get the MARC data for a single authority record
     *
     * @param int $id the authority record ID (required)
     * @return Array of \Models\ErrorCode, HTTP status code, HTTP response headers (array of strings)
     * @throws \III\Sierra\V5\ApiException on non-2xx response
     */
    public function getTheMARCDataForASingleAuthorityRecordWithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTheMARCDataForASingleAuthorityRecord');
        }
  
        // parse inputs
        $resourcePath = "/v5/authorities/{id}/marc";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/marc-json', 'application/marc-xml', 'application/marc-in-json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/xml'));
  
        
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Models\ErrorCode'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Models\ErrorCode', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Models\ErrorCode', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}