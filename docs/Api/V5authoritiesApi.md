# Sierra\V5authoritiesApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filterTheRecordsByAQueryInJSONFormat**](V5authoritiesApi.md#filterTheRecordsByAQueryInJSONFormat) | **POST** /v5/authorities/query | Filter the records by a query in JSON format
[**getAListOfAuthorityRecords**](V5authoritiesApi.md#getAListOfAuthorityRecords) | **GET** /v5/authorities/ | Get a list of authority records
[**getAnAuthorityRecordByRecordID**](V5authoritiesApi.md#getAnAuthorityRecordByRecordID) | **GET** /v5/authorities/{id} | Get an authority record by record ID
[**getTheMARCDataForASingleAuthorityRecord**](V5authoritiesApi.md#getTheMARCDataForASingleAuthorityRecord) | **GET** /v5/authorities/{id}/marc | Get the MARC data for a single authority record


# **filterTheRecordsByAQueryInJSONFormat**
> \Sierra\Models\QueryResultSet filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)

Filter the records by a query in JSON format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5authoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$limit = 56; // int | the maximum number of results
$json = new \Sierra\Models\null(); //  | a query in JSON format (see the Sierra API reference documentation for more information)

try {
    $result = $apiInstance->filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5authoritiesApi->filterTheRecordsByAQueryInJSONFormat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned |
 **limit** | **int**| the maximum number of results |
 **json** | [****](../Model/.md)| a query in JSON format (see the Sierra API reference documentation for more information) |

### Return type

[**\Sierra\Models\QueryResultSet**](../Model/QueryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfAuthorityRecords**
> \Sierra\Models\AuthorityResultSet getAListOfAuthorityRecords($limit, $offset, $id, $fields, $created_date, $updated_date, $deleted_date, $deleted, $suppressed)

Get a list of authority records



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5authoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array(56); // int[] | a comma-delimited list of IDs of authority records to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$created_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of authority records to retrieve (can be a range)
$updated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of authority records to retrieve (can be a range)
$deleted_date = new \DateTime("2013-10-20"); // \DateTime | the deletion date of deleted authority records to retrieve (can be a range)
$deleted = true; // bool | whether to retrieve only deleted (true) or non-deleted (false) authority records
$suppressed = true; // bool | the suppressed flag value of authority records to retrieve

try {
    $result = $apiInstance->getAListOfAuthorityRecords($limit, $offset, $id, $fields, $created_date, $updated_date, $deleted_date, $deleted, $suppressed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5authoritiesApi->getAListOfAuthorityRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **id** | [**int[]**](../Model/int.md)| a comma-delimited list of IDs of authority records to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **created_date** | **\DateTime**| the creation date of authority records to retrieve (can be a range) | [optional]
 **updated_date** | **\DateTime**| the modification date of authority records to retrieve (can be a range) | [optional]
 **deleted_date** | **\DateTime**| the deletion date of deleted authority records to retrieve (can be a range) | [optional]
 **deleted** | **bool**| whether to retrieve only deleted (true) or non-deleted (false) authority records | [optional]
 **suppressed** | **bool**| the suppressed flag value of authority records to retrieve | [optional]

### Return type

[**\Sierra\Models\AuthorityResultSet**](../Model/AuthorityResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnAuthorityRecordByRecordID**
> \Sierra\Models\Authority getAnAuthorityRecordByRecordID($id, $fields)

Get an authority record by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5authoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the authority record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAnAuthorityRecordByRecordID($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5authoritiesApi->getAnAuthorityRecordByRecordID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the authority record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\Sierra\Models\Authority**](../Model/Authority.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheMARCDataForASingleAuthorityRecord**
> \Sierra\Models\ErrorCode getTheMARCDataForASingleAuthorityRecord($id)

Get the MARC data for a single authority record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5authoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the authority record ID

try {
    $result = $apiInstance->getTheMARCDataForASingleAuthorityRecord($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5authoritiesApi->getTheMARCDataForASingleAuthorityRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the authority record ID |

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/marc-json, application/marc-xml, application/marc-in-json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

