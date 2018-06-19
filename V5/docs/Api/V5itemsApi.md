# III\Sierra\V5\V5itemsApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filterTheRecordsByAQueryInJSONFormat**](V5itemsApi.md#filterTheRecordsByAQueryInJSONFormat) | **POST** /v5/items/query | Filter the records by a query in JSON format
[**getAListOfItems**](V5itemsApi.md#getAListOfItems) | **GET** /v5/items/ | Get a list of items
[**getAnItemByRecordID**](V5itemsApi.md#getAnItemByRecordID) | **GET** /v5/items/{id} | Get an item by record ID


# **filterTheRecordsByAQueryInJSONFormat**
> \III\Sierra\V5\Models\QueryResultSet filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)

Filter the records by a query in JSON format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5itemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$limit = 56; // int | the maximum number of results
$json = new \III\Sierra\V5\Models\null(); //  | a query in JSON format (see the Sierra API reference documentation for more information)

try {
    $result = $apiInstance->filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5itemsApi->filterTheRecordsByAQueryInJSONFormat: ', $e->getMessage(), PHP_EOL;
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

[**\III\Sierra\V5\Models\QueryResultSet**](../Model/QueryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfItems**
> \III\Sierra\V5\Models\ItemResultSet getAListOfItems($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $bibIds, $status, $duedate, $suppressed, $locations)

Get a list of items



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5itemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of items to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$createdDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of items to retrieve (can be a range)
$updatedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of items to retrieve (can be a range)
$deletedDate = new \DateTime("2013-10-20"); // \DateTime | the deletion date of deleted items to retrieve(can be a range)
$deleted = true; // bool | whether to retrieve only deleted (true) or non-deleted (false) items
$bibIds = array("bibIds_example"); // string[] | a comma-delimited list of bib IDs for which to retrieve associated items
$status = "status_example"; // string | the status code of items to retrieve
$duedate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the due date of items to retrieve
$suppressed = true; // bool | the suppressed flag value of items to retrieve
$locations = "locations_example"; // string | a comma-delimited list of location codes (can include a single wildcard '*' to represent one or more final characters, for example, mult* or mul*)

try {
    $result = $apiInstance->getAListOfItems($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $bibIds, $status, $duedate, $suppressed, $locations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5itemsApi->getAListOfItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of items to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **createdDate** | **\DateTime**| the creation date of items to retrieve (can be a range) | [optional]
 **updatedDate** | **\DateTime**| the modification date of items to retrieve (can be a range) | [optional]
 **deletedDate** | **\DateTime**| the deletion date of deleted items to retrieve(can be a range) | [optional]
 **deleted** | **bool**| whether to retrieve only deleted (true) or non-deleted (false) items | [optional]
 **bibIds** | [**string[]**](../Model/string.md)| a comma-delimited list of bib IDs for which to retrieve associated items | [optional]
 **status** | **string**| the status code of items to retrieve | [optional]
 **duedate** | **\DateTime**| the due date of items to retrieve | [optional]
 **suppressed** | **bool**| the suppressed flag value of items to retrieve | [optional]
 **locations** | **string**| a comma-delimited list of location codes (can include a single wildcard &#39;*&#39; to represent one or more final characters, for example, mult* or mul*) | [optional]

### Return type

[**\III\Sierra\V5\Models\ItemResultSet**](../Model/ItemResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnItemByRecordID**
> \III\Sierra\V5\Models\Item getAnItemByRecordID($id, $fields)

Get an item by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5itemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the item record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAnItemByRecordID($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5itemsApi->getAnItemByRecordID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the item record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V5\Models\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

