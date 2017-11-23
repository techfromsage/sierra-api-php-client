# SierraApi\V4branchesApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getABranchByBranchID**](V4branchesApi.md#getABranchByBranchID) | **GET** /v4/branches/{id} | Get a branch by branch ID
[**getAListOfBranches**](V4branchesApi.md#getAListOfBranches) | **GET** /v4/branches/ | Get a list of branches
[**getListOfPickupLocations**](V4branchesApi.md#getListOfPickupLocations) | **GET** /v4/branches/pickupLocations | get list of pickup locations


# **getABranchByBranchID**
> \SierraApi\Model\Branch getABranchByBranchID($id, $fields)

Get a branch by branch ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4branchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the branch ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getABranchByBranchID($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4branchesApi->getABranchByBranchID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the branch ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\SierraApi\Model\Branch**](../Model/Branch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfBranches**
> \SierraApi\Model\BranchResultSet getAListOfBranches($limit, $offset, $fields)

Get a list of branches



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4branchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAListOfBranches($limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4branchesApi->getAListOfBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\SierraApi\Model\BranchResultSet**](../Model/BranchResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfPickupLocations**
> \SierraApi\Model\Location[] getListOfPickupLocations($language)

get list of pickup locations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4branchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = "language_example"; // string | an ISO 639-1 language code (default is en)

try {
    $result = $apiInstance->getListOfPickupLocations($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4branchesApi->getListOfPickupLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| an ISO 639-1 language code (default is en) | [optional]

### Return type

[**\SierraApi\Model\Location[]**](../Model/Location.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

