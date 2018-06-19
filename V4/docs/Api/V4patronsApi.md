# III\Sierra\V4\V4patronsApi

All URIs are relative to *https://library02.tcd.ie/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAllHoldsForTheSpecifiedPatron**](V4patronsApi.md#cancelAllHoldsForTheSpecifiedPatron) | **DELETE** /v4/patrons/{id}/holds | Cancel all holds for the specified patron
[**createAPatronRecord**](V4patronsApi.md#createAPatronRecord) | **POST** /v4/patrons/ | Create a patron record
[**deleteAHoldByHoldID**](V4patronsApi.md#deleteAHoldByHoldID) | **DELETE** /v4/patrons/holds/{holdId} | Delete a hold by hold ID
[**deleteAPatronRecord**](V4patronsApi.md#deleteAPatronRecord) | **DELETE** /v4/patrons/{id} | Delete a patron record
[**filterTheRecordsByAQueryInJSONFormat**](V4patronsApi.md#filterTheRecordsByAQueryInJSONFormat) | **POST** /v4/patrons/query | Filter the records by a query in JSON format
[**getACheckoutByCheckoutID**](V4patronsApi.md#getACheckoutByCheckoutID) | **GET** /v4/patrons/checkouts/{checkoutId} | Get a checkout by checkout ID
[**getAFineRecordByFineID**](V4patronsApi.md#getAFineRecordByFineID) | **GET** /v4/patrons/fines/{fineId} | Get a fine record by fine ID
[**getAHoldRecordByHoldID**](V4patronsApi.md#getAHoldRecordByHoldID) | **GET** /v4/patrons/holds/{holdId} | Get a hold record by hold ID
[**getAListOfPatrons**](V4patronsApi.md#getAListOfPatrons) | **GET** /v4/patrons/ | Get a list of patrons
[**getAPatronByBarcode**](V4patronsApi.md#getAPatronByBarcode) | **GET** /v4/patrons/find | Get a patron by barcode
[**getAPatronByRecordID**](V4patronsApi.md#getAPatronByRecordID) | **GET** /v4/patrons/{id} | Get a patron by record ID
[**getCheckoutDataForASinglePatronRecord**](V4patronsApi.md#getCheckoutDataForASinglePatronRecord) | **GET** /v4/patrons/{id}/checkouts | Get checkout data for a single patron record
[**getCheckoutreadHistoryForASinglePatronRecord**](V4patronsApi.md#getCheckoutreadHistoryForASinglePatronRecord) | **GET** /v4/patrons/{id}/checkouts/history | Get checkout/read history for a single patron record
[**getMetadataList**](V4patronsApi.md#getMetadataList) | **GET** /v4/patrons/metadata | get metadata list
[**getTheFinesDataForASinglePatronRecord**](V4patronsApi.md#getTheFinesDataForASinglePatronRecord) | **GET** /v4/patrons/{id}/fines | Get the fines data for a single patron record
[**getTheHoldsDataForASinglePatronRecord**](V4patronsApi.md#getTheHoldsDataForASinglePatronRecord) | **GET** /v4/patrons/{id}/holds | Get the holds data for a single patron record
[**modifyAHold**](V4patronsApi.md#modifyAHold) | **PUT** /v4/patrons/holds/{holdId} | Modify a hold
[**placeANewHoldRequest**](V4patronsApi.md#placeANewHoldRequest) | **POST** /v4/patrons/{id}/holds/requests | Place a new hold request
[**requestToRenewACheckout**](V4patronsApi.md#requestToRenewACheckout) | **POST** /v4/patrons/checkouts/{checkoutId}/renewal | Request to renew a checkout
[**updateThePatronRecord**](V4patronsApi.md#updateThePatronRecord) | **PUT** /v4/patrons/{id} | Update the Patron record
[**validatePatronByBarcodeAndPIN**](V4patronsApi.md#validatePatronByBarcodeAndPIN) | **POST** /v4/patrons/validate | Validate patron by barcode and PIN


# **cancelAllHoldsForTheSpecifiedPatron**
> \III\Sierra\V4\Models\ErrorCode cancelAllHoldsForTheSpecifiedPatron($id, $acceptLanguage)

Cancel all holds for the specified patron



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$acceptLanguage = "acceptLanguage_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->cancelAllHoldsForTheSpecifiedPatron($id, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->cancelAllHoldsForTheSpecifiedPatron: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **acceptLanguage** | **string**| the Accept-Language header | [optional]

### Return type

[**\III\Sierra\V4\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAPatronRecord**
> \III\Sierra\V4\Models\PatronResult createAPatronRecord($body)

Create a patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \III\Sierra\V4\Models\PatronPatch(); // \III\Sierra\V4\Models\PatronPatch | post request

try {
    $result = $apiInstance->createAPatronRecord($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->createAPatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\III\Sierra\V4\Models\PatronPatch**](../Model/PatronPatch.md)| post request |

### Return type

[**\III\Sierra\V4\Models\PatronResult**](../Model/PatronResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAHoldByHoldID**
> \III\Sierra\V4\Models\ErrorCode deleteAHoldByHoldID($holdId, $acceptLanguage)

Delete a hold by hold ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$holdId = 56; // int | the hold record ID
$acceptLanguage = "acceptLanguage_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->deleteAHoldByHoldID($holdId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->deleteAHoldByHoldID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holdId** | **int**| the hold record ID |
 **acceptLanguage** | **string**| the Accept-Language header | [optional]

### Return type

[**\III\Sierra\V4\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAPatronRecord**
> \III\Sierra\V4\Models\ErrorCode deleteAPatronRecord($id)

Delete a patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID

try {
    $result = $apiInstance->deleteAPatronRecord($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->deleteAPatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |

### Return type

[**\III\Sierra\V4\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filterTheRecordsByAQueryInJSONFormat**
> \III\Sierra\V4\Models\QueryResultSet filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)

Filter the records by a query in JSON format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$limit = 56; // int | the maximum number of results
$json = new \III\Sierra\V4\Models\null(); //  | a query in JSON format (see the Sierra API reference documentation for more information)

try {
    $result = $apiInstance->filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->filterTheRecordsByAQueryInJSONFormat: ', $e->getMessage(), PHP_EOL;
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

[**\III\Sierra\V4\Models\QueryResultSet**](../Model/QueryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getACheckoutByCheckoutID**
> \III\Sierra\V4\Models\Checkout getACheckoutByCheckoutID($checkoutId, $fields)

Get a checkout by checkout ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkoutId = 56; // int | the checkout record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getACheckoutByCheckoutID($checkoutId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getACheckoutByCheckoutID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkoutId** | **int**| the checkout record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\Checkout**](../Model/Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAFineRecordByFineID**
> \III\Sierra\V4\Models\Fine getAFineRecordByFineID($fineId, $fields)

Get a fine record by fine ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fineId = 56; // int | the fine record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAFineRecordByFineID($fineId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getAFineRecordByFineID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fineId** | **int**| the fine record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\Fine**](../Model/Fine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAHoldRecordByHoldID**
> \III\Sierra\V4\Models\Hold getAHoldRecordByHoldID($holdId, $fields)

Get a hold record by hold ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$holdId = 56; // int | the hold record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAHoldRecordByHoldID($holdId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getAHoldRecordByHoldID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holdId** | **int**| the hold record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\Hold**](../Model/Hold.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfPatrons**
> \III\Sierra\V4\Models\PatronResultSet getAListOfPatrons($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $suppressed)

Get a list of patrons



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of patron records to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$createdDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of patron records to retrieve (can be a range)
$updatedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of patron records to retrieve (can be a range)
$deletedDate = new \DateTime("2013-10-20"); // \DateTime | the deletion date of deleted patron records to retrieve (can be a range)
$deleted = true; // bool | whether to retrieve only deleted (true) or non-deleted (false) patron records
$suppressed = true; // bool | the suppressed flag value of patron records to retrieve

try {
    $result = $apiInstance->getAListOfPatrons($limit, $offset, $id, $fields, $createdDate, $updatedDate, $deletedDate, $deleted, $suppressed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getAListOfPatrons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of patron records to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **createdDate** | **\DateTime**| the creation date of patron records to retrieve (can be a range) | [optional]
 **updatedDate** | **\DateTime**| the modification date of patron records to retrieve (can be a range) | [optional]
 **deletedDate** | **\DateTime**| the deletion date of deleted patron records to retrieve (can be a range) | [optional]
 **deleted** | **bool**| whether to retrieve only deleted (true) or non-deleted (false) patron records | [optional]
 **suppressed** | **bool**| the suppressed flag value of patron records to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\PatronResultSet**](../Model/PatronResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPatronByBarcode**
> \III\Sierra\V4\Models\Patron getAPatronByBarcode($barcode, $fields)

Get a patron by barcode



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$barcode = "barcode_example"; // string | the patron barcode
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAPatronByBarcode($barcode, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getAPatronByBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode** | **string**| the patron barcode |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\Patron**](../Model/Patron.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPatronByRecordID**
> \III\Sierra\V4\Models\Patron getAPatronByRecordID($id, $fields)

Get a patron by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAPatronByRecordID($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getAPatronByRecordID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\Patron**](../Model/Patron.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutDataForASinglePatronRecord**
> \III\Sierra\V4\Models\CheckoutResultSet getCheckoutDataForASinglePatronRecord($id, $limit, $offset, $fields)

Get checkout data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getCheckoutDataForASinglePatronRecord($id, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getCheckoutDataForASinglePatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\CheckoutResultSet**](../Model/CheckoutResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutreadHistoryForASinglePatronRecord**
> \III\Sierra\V4\Models\CheckoutHistoryResultSet getCheckoutreadHistoryForASinglePatronRecord($id, $limit, $offset, $fields, $sortField, $sortOrder)

Get checkout/read history for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$sortField = "sortField_example"; // string | a field to sort on
$sortOrder = "sortOrder_example"; // string | the order to sort by desc or asc

try {
    $result = $apiInstance->getCheckoutreadHistoryForASinglePatronRecord($id, $limit, $offset, $fields, $sortField, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getCheckoutreadHistoryForASinglePatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **sortField** | **string**| a field to sort on | [optional]
 **sortOrder** | **string**| the order to sort by desc or asc | [optional]

### Return type

[**\III\Sierra\V4\Models\CheckoutHistoryResultSet**](../Model/CheckoutHistoryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadataList**
> \III\Sierra\V4\Models\Metadata[] getMetadataList($fields, $language)

get metadata list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | list of comma separated metadata fields
$language = "language_example"; // string | an ISO 639-1 language code (default is en)

try {
    $result = $apiInstance->getMetadataList($fields, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getMetadataList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| list of comma separated metadata fields | [optional]
 **language** | **string**| an ISO 639-1 language code (default is en) | [optional]

### Return type

[**\III\Sierra\V4\Models\Metadata[]**](../Model/Metadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheFinesDataForASinglePatronRecord**
> \III\Sierra\V4\Models\FineResultSet getTheFinesDataForASinglePatronRecord($id, $limit, $offset, $fields)

Get the fines data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getTheFinesDataForASinglePatronRecord($id, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getTheFinesDataForASinglePatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\FineResultSet**](../Model/FineResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheHoldsDataForASinglePatronRecord**
> \III\Sierra\V4\Models\HoldResultSet getTheHoldsDataForASinglePatronRecord($id, $limit, $offset, $fields)

Get the holds data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the patron record ID
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getTheHoldsDataForASinglePatronRecord($id, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getTheHoldsDataForASinglePatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the patron record ID |
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V4\Models\HoldResultSet**](../Model/HoldResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyAHold**
> \III\Sierra\V4\Models\ErrorCode modifyAHold($holdId, $body, $acceptLanguage)

Modify a hold



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$holdId = 56; // int | the hold record ID
$body = new \III\Sierra\V4\Models\PatronHoldPut(); // \III\Sierra\V4\Models\PatronHoldPut | the details of the hold
$acceptLanguage = "acceptLanguage_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->modifyAHold($holdId, $body, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->modifyAHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holdId** | **int**| the hold record ID |
 **body** | [**\III\Sierra\V4\Models\PatronHoldPut**](../Model/PatronHoldPut.md)| the details of the hold |
 **acceptLanguage** | **string**| the Accept-Language header | [optional]

### Return type

[**\III\Sierra\V4\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeANewHoldRequest**
> \III\Sierra\V4\Models\ErrorCode placeANewHoldRequest($id, $body)

Place a new hold request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$body = new \III\Sierra\V4\Models\PatronHoldPost(); // \III\Sierra\V4\Models\PatronHoldPost | details of the new hold

try {
    $result = $apiInstance->placeANewHoldRequest($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->placeANewHoldRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **body** | [**\III\Sierra\V4\Models\PatronHoldPost**](../Model/PatronHoldPost.md)| details of the new hold |

### Return type

[**\III\Sierra\V4\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestToRenewACheckout**
> \III\Sierra\V4\Models\Checkout requestToRenewACheckout($checkoutId, $acceptLanguage)

Request to renew a checkout



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkoutId = 56; // int | the checkout ID
$acceptLanguage = "acceptLanguage_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->requestToRenewACheckout($checkoutId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->requestToRenewACheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkoutId** | **int**| the checkout ID |
 **acceptLanguage** | **string**| the Accept-Language header | [optional]

### Return type

[**\III\Sierra\V4\Models\Checkout**](../Model/Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateThePatronRecord**
> \III\Sierra\V4\Models\ErrorCode updateThePatronRecord($id, $body)

Update the Patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$body = new \III\Sierra\V4\Models\PatronPatch(); // \III\Sierra\V4\Models\PatronPatch | patron request

try {
    $result = $apiInstance->updateThePatronRecord($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->updateThePatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **body** | [**\III\Sierra\V4\Models\PatronPatch**](../Model/PatronPatch.md)| patron request |

### Return type

[**\III\Sierra\V4\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePatronByBarcodeAndPIN**
> \III\Sierra\V4\Models\ErrorCode validatePatronByBarcodeAndPIN($body)

Validate patron by barcode and PIN



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V4\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \III\Sierra\V4\Models\PatronValidation(); // \III\Sierra\V4\Models\PatronValidation | post request

try {
    $result = $apiInstance->validatePatronByBarcodeAndPIN($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->validatePatronByBarcodeAndPIN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\III\Sierra\V4\Models\PatronValidation**](../Model/PatronValidation.md)| post request |

### Return type

[**\III\Sierra\V4\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

