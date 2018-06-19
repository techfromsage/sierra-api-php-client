# III\Sierra\V5\V5invoicesApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getALineItemRecordByLineID**](V5invoicesApi.md#getALineItemRecordByLineID) | **GET** /v5/invoices/lineItems/{id} | Get a line item record by line ID
[**getAListOfInvoices**](V5invoicesApi.md#getAListOfInvoices) | **GET** /v5/invoices/ | Get a list of invoices
[**getAListOfMetadata**](V5invoicesApi.md#getAListOfMetadata) | **GET** /v5/invoices/metadata | Get a list of metadata
[**getAnInvoiceByRecordID**](V5invoicesApi.md#getAnInvoiceByRecordID) | **GET** /v5/invoices/{id} | Get an invoice by record ID
[**getTheLineItemDataForASingleInvoiceRecord**](V5invoicesApi.md#getTheLineItemDataForASingleInvoiceRecord) | **GET** /v5/invoices/{id}/lineItems | Get the line item data for a single invoice record


# **getALineItemRecordByLineID**
> \III\Sierra\V5\Models\InvoiceLine getALineItemRecordByLineID($login, $id, $fields)

Get a line item record by line ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5invoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = "login_example"; // string | Sierra login to verify user's credentials (whether the user is allowed to read invoice data)
$id = 56; // int | the invoice line ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getALineItemRecordByLineID($login, $id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5invoicesApi->getALineItemRecordByLineID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Sierra login to verify user&#39;s credentials (whether the user is allowed to read invoice data) |
 **id** | **int**| the invoice line ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V5\Models\InvoiceLine**](../Model/InvoiceLine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfInvoices**
> \III\Sierra\V5\Models\InvoiceResultSet getAListOfInvoices($login, $limit, $offset, $id, $invNum, $statusCode, $fields, $invoiceDate, $createdDate, $updatedDate, $suppressed)

Get a list of invoices



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5invoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = "login_example"; // string | Sierra login to verify user's credentials (whether the user is allowed to read invoice data)
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of invoices to retrieve
$invNum = "invNum_example"; // string | a comma-delimited list of invoice numbers (can include a single wildcard '*' to represent one or more final characters, for example, mult* or mul*)
$statusCode = array("statusCode_example"); // string[] | a comma-delimited list of invoice status codes
$fields = array("fields_example"); // string[] | if none provided, data for all fields are returned; otherwise only specified fields are returned
$invoiceDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the date of invoice records (can be a range)
$createdDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of invoice records to retrieve (can be a range)
$updatedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of invoice records to retrieve (can be a range)
$suppressed = true; // bool | the suppressed flag value of invoice records to retrieve

try {
    $result = $apiInstance->getAListOfInvoices($login, $limit, $offset, $id, $invNum, $statusCode, $fields, $invoiceDate, $createdDate, $updatedDate, $suppressed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5invoicesApi->getAListOfInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Sierra login to verify user&#39;s credentials (whether the user is allowed to read invoice data) |
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of invoices to retrieve | [optional]
 **invNum** | **string**| a comma-delimited list of invoice numbers (can include a single wildcard &#39;*&#39; to represent one or more final characters, for example, mult* or mul*) | [optional]
 **statusCode** | [**string[]**](../Model/string.md)| a comma-delimited list of invoice status codes | [optional]
 **fields** | [**string[]**](../Model/string.md)| if none provided, data for all fields are returned; otherwise only specified fields are returned | [optional]
 **invoiceDate** | **\DateTime**| the date of invoice records (can be a range) | [optional]
 **createdDate** | **\DateTime**| the creation date of invoice records to retrieve (can be a range) | [optional]
 **updatedDate** | **\DateTime**| the modification date of invoice records to retrieve (can be a range) | [optional]
 **suppressed** | **bool**| the suppressed flag value of invoice records to retrieve | [optional]

### Return type

[**\III\Sierra\V5\Models\InvoiceResultSet**](../Model/InvoiceResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfMetadata**
> \III\Sierra\V5\Models\Metadata[] getAListOfMetadata($fields, $language)

Get a list of metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5invoicesApi(
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
    echo 'Exception when calling V5invoicesApi->getAListOfMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| list of comma separated metadata fields | [optional]
 **language** | **string**| an ISO 639-1 language code (default is en) | [optional]

### Return type

[**\III\Sierra\V5\Models\Metadata[]**](../Model/Metadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnInvoiceByRecordID**
> \III\Sierra\V5\Models\Invoice getAnInvoiceByRecordID($login, $id, $fields)

Get an invoice by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5invoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = "login_example"; // string | Sierra login to verify user's credentials (whether the user is allowed to read invoice data)
$id = 56; // int | the invoice record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getAnInvoiceByRecordID($login, $id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5invoicesApi->getAnInvoiceByRecordID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Sierra login to verify user&#39;s credentials (whether the user is allowed to read invoice data) |
 **id** | **int**| the invoice record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V5\Models\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheLineItemDataForASingleInvoiceRecord**
> \III\Sierra\V5\Models\InvoiceLineResultSet getTheLineItemDataForASingleInvoiceRecord($login, $id, $fields)

Get the line item data for a single invoice record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new III\Sierra\V5\Api\V5invoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = "login_example"; // string | Sierra login to verify user's credentials (whether the user is allowed to read invoice data)
$id = 56; // int | the invoice record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getTheLineItemDataForASingleInvoiceRecord($login, $id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5invoicesApi->getTheLineItemDataForASingleInvoiceRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Sierra login to verify user&#39;s credentials (whether the user is allowed to read invoice data) |
 **id** | **int**| the invoice record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\III\Sierra\V5\Models\InvoiceLineResultSet**](../Model/InvoiceLineResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

