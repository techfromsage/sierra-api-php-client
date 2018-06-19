# III\Sierra\V5\V5fundsApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAListOfFunds**](V5fundsApi.md#getAListOfFunds) | **GET** /v5/funds/ | Get a list of funds


# **getAListOfFunds**
> \III\Sierra\V5\Models\Fund[] getAListOfFunds($login, $code, $fields)

Get a list of funds



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5fundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = "login_example"; // string | the Sierra username associated with the fund records
$code = array("code_example"); // string[] | a comma-delimited list of fund codes to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAListOfFunds($login, $code, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5fundsApi->getAListOfFunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| the Sierra username associated with the fund records |
 **code** | [**string[]**](../Model/string.md)| a comma-delimited list of fund codes to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V5\Models\Fund[]**](../Model/Fund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

