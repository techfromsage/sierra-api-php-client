# Sierra\V5usersApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateASierraUserByUsernameAndPassword**](V5usersApi.md#validateASierraUserByUsernameAndPassword) | **POST** /v5/users/validate | Validate a sierra user by username and password


# **validateASierraUserByUsernameAndPassword**
> \Sierra\Models\ErrorCode validateASierraUserByUsernameAndPassword($body)

Validate a sierra user by username and password



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5usersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Sierra\Models\User(); // \Sierra\Models\User | post request

try {
    $result = $apiInstance->validateASierraUserByUsernameAndPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5usersApi->validateASierraUserByUsernameAndPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sierra\Models\User**](../Model/User.md)| post request |

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

