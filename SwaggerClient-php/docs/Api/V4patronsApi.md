# SierraApi\V4patronsApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAllHoldsForTheSpecifiedPatron**](V4patronsApi.md#cancelAllHoldsForTheSpecifiedPatron) | **DELETE** /v4/patrons/{id}/holds | Cancel all holds for the specified patron
[**createAPatronRecord**](V4patronsApi.md#createAPatronRecord) | **POST** /v4/patrons/ | Create a patron record
[**deleteAHoldByHoldID**](V4patronsApi.md#deleteAHoldByHoldID) | **DELETE** /v4/patrons/holds/{holdId} | Delete a hold by hold ID
[**deleteAPatronRecord**](V4patronsApi.md#deleteAPatronRecord) | **DELETE** /v4/patrons/{id} | Delete a patron record
[**filterTheRecordsByAQueryInJSONFormat**](V4patronsApi.md#filterTheRecordsByAQueryInJSONFormat) | **POST** /v4/patrons/query | Filter the records by a query in JSON format
[**findAPatronByVarFieldFieldTagAndVarFieldContent**](V4patronsApi.md#findAPatronByVarFieldFieldTagAndVarFieldContent) | **GET** /v4/patrons/find | Find a patron by varField fieldTag and varField content
[**getACheckoutByCheckoutID**](V4patronsApi.md#getACheckoutByCheckoutID) | **GET** /v4/patrons/checkouts/{checkoutId} | Get a checkout by checkout ID
[**getAFineRecordByFineID**](V4patronsApi.md#getAFineRecordByFineID) | **GET** /v4/patrons/fines/{fineId} | Get a fine record by fine ID
[**getAHoldRecordByHoldID**](V4patronsApi.md#getAHoldRecordByHoldID) | **GET** /v4/patrons/holds/{holdId} | Get a hold record by hold ID
[**getAListOfPatrons**](V4patronsApi.md#getAListOfPatrons) | **GET** /v4/patrons/ | Get a list of patrons
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
> \SierraApi\Model\ErrorCode cancelAllHoldsForTheSpecifiedPatron($id, $accept_language)

Cancel all holds for the specified patron



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$accept_language = "accept_language_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->cancelAllHoldsForTheSpecifiedPatron($id, $accept_language);
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
 **accept_language** | **string**| the Accept-Language header | [optional]

### Return type

[**\SierraApi\Model\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAPatronRecord**
> \SierraApi\Model\PatronResult createAPatronRecord($body)

Create a patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SierraApi\Model\PatronPatch(); // \SierraApi\Model\PatronPatch | post request

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
 **body** | [**\SierraApi\Model\PatronPatch**](../Model/PatronPatch.md)| post request |

### Return type

[**\SierraApi\Model\PatronResult**](../Model/PatronResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAHoldByHoldID**
> \SierraApi\Model\ErrorCode deleteAHoldByHoldID($hold_id, $accept_language)

Delete a hold by hold ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hold_id = 56; // int | the hold record ID
$accept_language = "accept_language_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->deleteAHoldByHoldID($hold_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->deleteAHoldByHoldID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hold_id** | **int**| the hold record ID |
 **accept_language** | **string**| the Accept-Language header | [optional]

### Return type

[**\SierraApi\Model\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAPatronRecord**
> \SierraApi\Model\ErrorCode deleteAPatronRecord($id)

Delete a patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
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

[**\SierraApi\Model\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filterTheRecordsByAQueryInJSONFormat**
> \SierraApi\Model\QueryResultSet filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)

Filter the records by a query in JSON format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$limit = 56; // int | the maximum number of results
$json = new \SierraApi\Model\null(); //  | a query in JSON format (see the Sierra API reference documentation for more information)

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

[**\SierraApi\Model\QueryResultSet**](../Model/QueryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAPatronByVarFieldFieldTagAndVarFieldContent**
> \SierraApi\Model\Patron findAPatronByVarFieldFieldTagAndVarFieldContent($var_field_tag, $var_field_content, $fields)

Find a patron by varField fieldTag and varField content



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$var_field_tag = "var_field_tag_example"; // string | the varField fieldTag to search by
$var_field_content = "var_field_content_example"; // string | the varField content to search by
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->findAPatronByVarFieldFieldTagAndVarFieldContent($var_field_tag, $var_field_content, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->findAPatronByVarFieldFieldTagAndVarFieldContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **var_field_tag** | **string**| the varField fieldTag to search by |
 **var_field_content** | **string**| the varField content to search by |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\SierraApi\Model\Patron**](../Model/Patron.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getACheckoutByCheckoutID**
> \SierraApi\Model\Checkout getACheckoutByCheckoutID($checkout_id, $fields)

Get a checkout by checkout ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_id = 56; // int | the checkout record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getACheckoutByCheckoutID($checkout_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getACheckoutByCheckoutID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_id** | **int**| the checkout record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\SierraApi\Model\Checkout**](../Model/Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAFineRecordByFineID**
> \SierraApi\Model\Fine getAFineRecordByFineID($fine_id, $fields)

Get a fine record by fine ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fine_id = 56; // int | the fine record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAFineRecordByFineID($fine_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getAFineRecordByFineID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fine_id** | **int**| the fine record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\SierraApi\Model\Fine**](../Model/Fine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAHoldRecordByHoldID**
> \SierraApi\Model\Hold getAHoldRecordByHoldID($hold_id, $fields)

Get a hold record by hold ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hold_id = 56; // int | the hold record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAHoldRecordByHoldID($hold_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->getAHoldRecordByHoldID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hold_id** | **int**| the hold record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\SierraApi\Model\Hold**](../Model/Hold.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfPatrons**
> \SierraApi\Model\PatronResultSet getAListOfPatrons($limit, $offset, $id, $fields, $created_date, $updated_date, $deleted_date, $deleted, $suppressed, $agency_codes)

Get a list of patrons



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of patron records to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$created_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of patron records to retrieve (can be a range)
$updated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of patron records to retrieve (can be a range)
$deleted_date = new \DateTime("2013-10-20"); // \DateTime | the deletion date of deleted patron records to retrieve (can be a range)
$deleted = true; // bool | whether to retrieve only deleted (true) or non-deleted (false) patron records
$suppressed = true; // bool | the suppressed flag value of patron records to retrieve
$agency_codes = array(56); // int[] | patron data for the specified and valid agencies is returned

try {
    $result = $apiInstance->getAListOfPatrons($limit, $offset, $id, $fields, $created_date, $updated_date, $deleted_date, $deleted, $suppressed, $agency_codes);
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
 **created_date** | **\DateTime**| the creation date of patron records to retrieve (can be a range) | [optional]
 **updated_date** | **\DateTime**| the modification date of patron records to retrieve (can be a range) | [optional]
 **deleted_date** | **\DateTime**| the deletion date of deleted patron records to retrieve (can be a range) | [optional]
 **deleted** | **bool**| whether to retrieve only deleted (true) or non-deleted (false) patron records | [optional]
 **suppressed** | **bool**| the suppressed flag value of patron records to retrieve | [optional]
 **agency_codes** | [**int[]**](../Model/int.md)| patron data for the specified and valid agencies is returned | [optional]

### Return type

[**\SierraApi\Model\PatronResultSet**](../Model/PatronResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPatronByRecordID**
> \SierraApi\Model\Patron getAPatronByRecordID($id, $fields)

Get a patron by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
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

[**\SierraApi\Model\Patron**](../Model/Patron.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutDataForASinglePatronRecord**
> \SierraApi\Model\CheckoutResultSet getCheckoutDataForASinglePatronRecord($id, $limit, $offset, $fields)

Get checkout data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
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

[**\SierraApi\Model\CheckoutResultSet**](../Model/CheckoutResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutreadHistoryForASinglePatronRecord**
> \SierraApi\Model\CheckoutHistoryResultSet getCheckoutreadHistoryForASinglePatronRecord($id, $limit, $offset, $fields, $sort_field, $sort_order)

Get checkout/read history for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$sort_field = "sort_field_example"; // string | a field to sort on
$sort_order = "sort_order_example"; // string | the order to sort by desc or asc

try {
    $result = $apiInstance->getCheckoutreadHistoryForASinglePatronRecord($id, $limit, $offset, $fields, $sort_field, $sort_order);
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
 **sort_field** | **string**| a field to sort on | [optional]
 **sort_order** | **string**| the order to sort by desc or asc | [optional]

### Return type

[**\SierraApi\Model\CheckoutHistoryResultSet**](../Model/CheckoutHistoryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadataList**
> \SierraApi\Model\Metadata[] getMetadataList($fields, $language)

get metadata list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
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

[**\SierraApi\Model\Metadata[]**](../Model/Metadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheFinesDataForASinglePatronRecord**
> \SierraApi\Model\FineResultSet getTheFinesDataForASinglePatronRecord($id, $limit, $offset, $fields, $assessed_date)

Get the fines data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$assessed_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the assessed date of fines to retrieve (can be a range)

try {
    $result = $apiInstance->getTheFinesDataForASinglePatronRecord($id, $limit, $offset, $fields, $assessed_date);
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
 **assessed_date** | **\DateTime**| the assessed date of fines to retrieve (can be a range) | [optional]

### Return type

[**\SierraApi\Model\FineResultSet**](../Model/FineResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheHoldsDataForASinglePatronRecord**
> \SierraApi\Model\HoldResultSet getTheHoldsDataForASinglePatronRecord($id, $limit, $offset, $fields)

Get the holds data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
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

[**\SierraApi\Model\HoldResultSet**](../Model/HoldResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyAHold**
> \SierraApi\Model\ErrorCode modifyAHold($hold_id, $body, $accept_language)

Modify a hold



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hold_id = 56; // int | the hold record ID
$body = new \SierraApi\Model\PatronHoldPut(); // \SierraApi\Model\PatronHoldPut | the details of the hold
$accept_language = "accept_language_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->modifyAHold($hold_id, $body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->modifyAHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hold_id** | **int**| the hold record ID |
 **body** | [**\SierraApi\Model\PatronHoldPut**](../Model/PatronHoldPut.md)| the details of the hold |
 **accept_language** | **string**| the Accept-Language header | [optional]

### Return type

[**\SierraApi\Model\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeANewHoldRequest**
> \SierraApi\Model\ErrorCode placeANewHoldRequest($id, $body)

Place a new hold request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$body = new \SierraApi\Model\PatronHoldPost(); // \SierraApi\Model\PatronHoldPost | details of the new hold

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
 **body** | [**\SierraApi\Model\PatronHoldPost**](../Model/PatronHoldPost.md)| details of the new hold |

### Return type

[**\SierraApi\Model\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestToRenewACheckout**
> \SierraApi\Model\Checkout requestToRenewACheckout($checkout_id, $accept_language)

Request to renew a checkout



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_id = 56; // int | the checkout ID
$accept_language = "accept_language_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->requestToRenewACheckout($checkout_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4patronsApi->requestToRenewACheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_id** | **int**| the checkout ID |
 **accept_language** | **string**| the Accept-Language header | [optional]

### Return type

[**\SierraApi\Model\Checkout**](../Model/Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateThePatronRecord**
> \SierraApi\Model\ErrorCode updateThePatronRecord($id, $body)

Update the Patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$body = new \SierraApi\Model\PatronPatch(); // \SierraApi\Model\PatronPatch | patron request

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
 **body** | [**\SierraApi\Model\PatronPatch**](../Model/PatronPatch.md)| patron request |

### Return type

[**\SierraApi\Model\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePatronByBarcodeAndPIN**
> \SierraApi\Model\ErrorCode validatePatronByBarcodeAndPIN($body)

Validate patron by barcode and PIN



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SierraApi\Model\PatronValidation(); // \SierraApi\Model\PatronValidation | post request

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
 **body** | [**\SierraApi\Model\PatronValidation**](../Model/PatronValidation.md)| post request |

### Return type

[**\SierraApi\Model\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

