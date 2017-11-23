# SierraApi\V4finesApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAListOfFines**](V4finesApi.md#getAListOfFines) | **GET** /v4/fines/ | Get a list of fines


# **getAListOfFines**
> \SierraApi\Model\FineResultSet getAListOfFines($limit, $offset, $id, $fields, $assessed_date, $agency_codes)

Get a list of fines



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4finesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of fine records to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$assessed_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the assessed date of fines to retrieve (can be a range)
$agency_codes = array(56); // int[] | fine data for the specified agencies is returned

try {
    $result = $apiInstance->getAListOfFines($limit, $offset, $id, $fields, $assessed_date, $agency_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4finesApi->getAListOfFines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of fine records to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **assessed_date** | **\DateTime**| the assessed date of fines to retrieve (can be a range) | [optional]
 **agency_codes** | [**int[]**](../Model/int.md)| fine data for the specified agencies is returned | [optional]

### Return type

[**\SierraApi\Model\FineResultSet**](../Model/FineResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

