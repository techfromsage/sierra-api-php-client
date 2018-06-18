# III\Sierra\V5infoApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTokenInformation**](V5infoApi.md#getTokenInformation) | **GET** /v5/info/token | Get token information


# **getTokenInformation**
> \III\Sierra\Models\TokenInfo getTokenInformation()

Get token information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\Api\V5infoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTokenInformation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5infoApi->getTokenInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\III\Sierra\Models\TokenInfo**](../Model/TokenInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

