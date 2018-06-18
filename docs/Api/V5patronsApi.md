# Sierra\V5patronsApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAllHoldsForTheSpecifiedPatron**](V5patronsApi.md#cancelAllHoldsForTheSpecifiedPatron) | **DELETE** /v5/patrons/{id}/holds | Cancel all holds for the specified patron
[**createAPatronRecord**](V5patronsApi.md#createAPatronRecord) | **POST** /v5/patrons/ | Create a patron record
[**deleteAHoldByHoldID**](V5patronsApi.md#deleteAHoldByHoldID) | **DELETE** /v5/patrons/holds/{holdId} | Delete a hold by hold ID
[**deleteAPatronRecord**](V5patronsApi.md#deleteAPatronRecord) | **DELETE** /v5/patrons/{id} | Delete a patron record
[**filterTheRecordsByAQueryInJSONFormat**](V5patronsApi.md#filterTheRecordsByAQueryInJSONFormat) | **POST** /v5/patrons/query | Filter the records by a query in JSON format
[**findAPatronByVarFieldFieldTagAndVarFieldContent**](V5patronsApi.md#findAPatronByVarFieldFieldTagAndVarFieldContent) | **GET** /v5/patrons/find | Find a patron by varField fieldTag and varField content
[**getACheckoutByCheckoutID**](V5patronsApi.md#getACheckoutByCheckoutID) | **GET** /v5/patrons/checkouts/{checkoutId} | Get a checkout by checkout ID
[**getAFineRecordByFineID**](V5patronsApi.md#getAFineRecordByFineID) | **GET** /v5/patrons/fines/{fineId} | Get a fine record by fine ID
[**getAHoldRecordByHoldID**](V5patronsApi.md#getAHoldRecordByHoldID) | **GET** /v5/patrons/holds/{holdId} | Get a hold record by hold ID
[**getAListOfMetadata**](V5patronsApi.md#getAListOfMetadata) | **GET** /v5/patrons/metadata | Get a list of metadata
[**getAListOfPatrons**](V5patronsApi.md#getAListOfPatrons) | **GET** /v5/patrons/ | Get a list of patrons
[**getAPatronByRecordID**](V5patronsApi.md#getAPatronByRecordID) | **GET** /v5/patrons/{id} | Get a patron by record ID
[**getCheckoutDataForASinglePatronRecord**](V5patronsApi.md#getCheckoutDataForASinglePatronRecord) | **GET** /v5/patrons/{id}/checkouts | Get checkout data for a single patron record
[**getCheckoutreadHistoryForASinglePatronRecord**](V5patronsApi.md#getCheckoutreadHistoryForASinglePatronRecord) | **GET** /v5/patrons/{id}/checkouts/history | Get checkout/read history for a single patron record
[**getTheFinesDataForASinglePatronRecord**](V5patronsApi.md#getTheFinesDataForASinglePatronRecord) | **GET** /v5/patrons/{id}/fines | Get the fines data for a single patron record
[**getTheHoldsDataForASinglePatronRecord**](V5patronsApi.md#getTheHoldsDataForASinglePatronRecord) | **GET** /v5/patrons/{id}/holds | Get the holds data for a single patron record
[**modifyAHold**](V5patronsApi.md#modifyAHold) | **PUT** /v5/patrons/holds/{holdId} | Modify a hold
[**placeANewHoldRequest**](V5patronsApi.md#placeANewHoldRequest) | **POST** /v5/patrons/{id}/holds/requests | Place a new hold request
[**requestToRenewACheckout**](V5patronsApi.md#requestToRenewACheckout) | **POST** /v5/patrons/checkouts/{checkoutId}/renewal | Request to renew a checkout
[**updateThePatronRecord**](V5patronsApi.md#updateThePatronRecord) | **PUT** /v5/patrons/{id} | Update the Patron record
[**validatePatronByBarcodeAndPIN**](V5patronsApi.md#validatePatronByBarcodeAndPIN) | **POST** /v5/patrons/validate | Validate patron by barcode and PIN


# **cancelAllHoldsForTheSpecifiedPatron**
> \Sierra\Models\ErrorCode cancelAllHoldsForTheSpecifiedPatron($id, $accept_language)

Cancel all holds for the specified patron



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->cancelAllHoldsForTheSpecifiedPatron: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **accept_language** | **string**| the Accept-Language header | [optional]

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAPatronRecord**
> \Sierra\Models\PatronResult createAPatronRecord($body)

Create a patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Sierra\Models\PatronPatch(); // \Sierra\Models\PatronPatch | post request

try {
    $result = $apiInstance->createAPatronRecord($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5patronsApi->createAPatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sierra\Models\PatronPatch**](../Model/PatronPatch.md)| post request |

### Return type

[**\Sierra\Models\PatronResult**](../Model/PatronResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAHoldByHoldID**
> \Sierra\Models\ErrorCode deleteAHoldByHoldID($hold_id, $accept_language)

Delete a hold by hold ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->deleteAHoldByHoldID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hold_id** | **int**| the hold record ID |
 **accept_language** | **string**| the Accept-Language header | [optional]

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAPatronRecord**
> \Sierra\Models\ErrorCode deleteAPatronRecord($id)

Delete a patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID

try {
    $result = $apiInstance->deleteAPatronRecord($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5patronsApi->deleteAPatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filterTheRecordsByAQueryInJSONFormat**
> \Sierra\Models\QueryResultSet filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)

Filter the records by a query in JSON format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->filterTheRecordsByAQueryInJSONFormat: ', $e->getMessage(), PHP_EOL;
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

# **findAPatronByVarFieldFieldTagAndVarFieldContent**
> \Sierra\Models\Patron findAPatronByVarFieldFieldTagAndVarFieldContent($var_field_tag, $var_field_content, $fields)

Find a patron by varField fieldTag and varField content



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->findAPatronByVarFieldFieldTagAndVarFieldContent: ', $e->getMessage(), PHP_EOL;
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

[**\Sierra\Models\Patron**](../Model/Patron.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getACheckoutByCheckoutID**
> \Sierra\Models\Checkout getACheckoutByCheckoutID($checkout_id, $fields)

Get a checkout by checkout ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getACheckoutByCheckoutID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_id** | **int**| the checkout record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\Sierra\Models\Checkout**](../Model/Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAFineRecordByFineID**
> \Sierra\Models\Fine getAFineRecordByFineID($fine_id, $fields)

Get a fine record by fine ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getAFineRecordByFineID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fine_id** | **int**| the fine record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\Sierra\Models\Fine**](../Model/Fine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAHoldRecordByHoldID**
> \Sierra\Models\Hold getAHoldRecordByHoldID($hold_id, $fields)

Get a hold record by hold ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getAHoldRecordByHoldID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hold_id** | **int**| the hold record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\Sierra\Models\Hold**](../Model/Hold.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfMetadata**
> \Sierra\Models\Metadata[] getAListOfMetadata($fields, $language)

Get a list of metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | list of comma separated metadata fields
$language = "language_example"; // string | an ISO 639-1 language code (default is en)

try {
    $result = $apiInstance->getAListOfMetadata($fields, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5patronsApi->getAListOfMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| list of comma separated metadata fields | [optional]
 **language** | **string**| an ISO 639-1 language code (default is en) | [optional]

### Return type

[**\Sierra\Models\Metadata[]**](../Model/Metadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfPatrons**
> \Sierra\Models\PatronResultSet getAListOfPatrons($limit, $offset, $id, $fields, $created_date, $updated_date, $deleted_date, $deleted, $suppressed, $agency_codes)

Get a list of patrons



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getAListOfPatrons: ', $e->getMessage(), PHP_EOL;
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

[**\Sierra\Models\PatronResultSet**](../Model/PatronResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPatronByRecordID**
> \Sierra\Models\Patron getAPatronByRecordID($id, $fields)

Get a patron by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getAPatronByRecordID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\Sierra\Models\Patron**](../Model/Patron.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutDataForASinglePatronRecord**
> \Sierra\Models\CheckoutResultSet getCheckoutDataForASinglePatronRecord($id, $limit, $offset, $fields)

Get checkout data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getCheckoutDataForASinglePatronRecord: ', $e->getMessage(), PHP_EOL;
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

[**\Sierra\Models\CheckoutResultSet**](../Model/CheckoutResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutreadHistoryForASinglePatronRecord**
> \Sierra\Models\CheckoutHistoryResultSet getCheckoutreadHistoryForASinglePatronRecord($id, $limit, $offset, $fields, $sort_field, $sort_order)

Get checkout/read history for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getCheckoutreadHistoryForASinglePatronRecord: ', $e->getMessage(), PHP_EOL;
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

[**\Sierra\Models\CheckoutHistoryResultSet**](../Model/CheckoutHistoryResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheFinesDataForASinglePatronRecord**
> \Sierra\Models\FineResultSet getTheFinesDataForASinglePatronRecord($id, $limit, $offset, $fields, $assessed_date)

Get the fines data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getTheFinesDataForASinglePatronRecord: ', $e->getMessage(), PHP_EOL;
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

[**\Sierra\Models\FineResultSet**](../Model/FineResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheHoldsDataForASinglePatronRecord**
> \Sierra\Models\HoldResultSet getTheHoldsDataForASinglePatronRecord($id, $limit, $offset, $fields)

Get the holds data for a single patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->getTheHoldsDataForASinglePatronRecord: ', $e->getMessage(), PHP_EOL;
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

[**\Sierra\Models\HoldResultSet**](../Model/HoldResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyAHold**
> \Sierra\Models\ErrorCode modifyAHold($hold_id, $body, $accept_language)

Modify a hold



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hold_id = 56; // int | the hold record ID
$body = new \Sierra\Models\PatronHoldPut(); // \Sierra\Models\PatronHoldPut | the details of the hold
$accept_language = "accept_language_example"; // string | the Accept-Language header

try {
    $result = $apiInstance->modifyAHold($hold_id, $body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5patronsApi->modifyAHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hold_id** | **int**| the hold record ID |
 **body** | [**\Sierra\Models\PatronHoldPut**](../Model/PatronHoldPut.md)| the details of the hold |
 **accept_language** | **string**| the Accept-Language header | [optional]

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeANewHoldRequest**
> \Sierra\Models\ErrorCode placeANewHoldRequest($id, $body)

Place a new hold request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$body = new \Sierra\Models\PatronHoldPost(); // \Sierra\Models\PatronHoldPost | details of the new hold

try {
    $result = $apiInstance->placeANewHoldRequest($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5patronsApi->placeANewHoldRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **body** | [**\Sierra\Models\PatronHoldPost**](../Model/PatronHoldPost.md)| details of the new hold |

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestToRenewACheckout**
> \Sierra\Models\Checkout requestToRenewACheckout($checkout_id, $accept_language)

Request to renew a checkout



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
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
    echo 'Exception when calling V5patronsApi->requestToRenewACheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_id** | **int**| the checkout ID |
 **accept_language** | **string**| the Accept-Language header | [optional]

### Return type

[**\Sierra\Models\Checkout**](../Model/Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateThePatronRecord**
> \Sierra\Models\ErrorCode updateThePatronRecord($id, $body)

Update the Patron record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the patron record ID
$body = new \Sierra\Models\PatronPatch(); // \Sierra\Models\PatronPatch | patron request

try {
    $result = $apiInstance->updateThePatronRecord($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5patronsApi->updateThePatronRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the patron record ID |
 **body** | [**\Sierra\Models\PatronPatch**](../Model/PatronPatch.md)| patron request |

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePatronByBarcodeAndPIN**
> \Sierra\Models\ErrorCode validatePatronByBarcodeAndPIN($body)

Validate patron by barcode and PIN



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5patronsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Sierra\Models\PatronValidation(); // \Sierra\Models\PatronValidation | post request

try {
    $result = $apiInstance->validatePatronByBarcodeAndPIN($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5patronsApi->validatePatronByBarcodeAndPIN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sierra\Models\PatronValidation**](../Model/PatronValidation.md)| post request |

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

