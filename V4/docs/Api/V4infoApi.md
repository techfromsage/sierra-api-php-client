# III\Sierra\V4\V4infoApi

All URIs are relative to *https://library02.tcd.ie/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTokenInformation**](V4infoApi.md#getTokenInformation) | **GET** /v4/info/token | Get token information


# **getTokenInformation**
> \III\Sierra\V4\Models\TokenInfo getTokenInformation()

Get token information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4infoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTokenInformation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4infoApi->getTokenInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\III\Sierra\V4\Models\TokenInfo**](../Model/TokenInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

