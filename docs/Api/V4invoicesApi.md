# Sierra\V4invoicesApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getALineItemRecordByLineID**](V4invoicesApi.md#getALineItemRecordByLineID) | **GET** /v4/invoices/lineItems/{id} | Get a line item record by line ID
[**getAListOfInvoices**](V4invoicesApi.md#getAListOfInvoices) | **GET** /v4/invoices/ | Get a list of invoices
[**getTheLineItemDataForASingleInvoiceRecord**](V4invoicesApi.md#getTheLineItemDataForASingleInvoiceRecord) | **GET** /v4/invoices/{id}/lineItems | Get the line item data for a single invoice record


# **getALineItemRecordByLineID**
> \Sierra\Models\InvoiceLine getALineItemRecordByLineID($login, $id, $fields)

Get a line item record by line ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V4invoicesApi(
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
    echo 'Exception when calling V4invoicesApi->getALineItemRecordByLineID: ', $e->getMessage(), PHP_EOL;
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

[**\Sierra\Models\InvoiceLine**](../Model/InvoiceLine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfInvoices**
> \Sierra\Models\InvoiceResultSet getAListOfInvoices($login, $limit, $offset, $id, $inv_num, $status_code, $fields, $invoice_date, $created_date, $updated_date, $suppressed)

Get a list of invoices



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V4invoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = "login_example"; // string | Sierra login to verify user's credentials (whether the user is allowed to read invoice data)
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of invoices to retrieve
$inv_num = "inv_num_example"; // string | a comma-delimited list of invoice numbers (can include a single wildcard '*' to represent one or more final characters, for example, mult* or mul*)
$status_code = array("status_code_example"); // string[] | the status value of invoice record to retrieve
$fields = array("fields_example"); // string[] | if none provided, data for all fields are returned; otherwise only specified fields are returned
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the date of invoice records (can be a range)
$created_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of invoice records to retrieve (can be a range)
$updated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of invoice records to retrieve (can be a range)
$suppressed = true; // bool | the suppressed flag value of invoice records to retrieve

try {
    $result = $apiInstance->getAListOfInvoices($login, $limit, $offset, $id, $inv_num, $status_code, $fields, $invoice_date, $created_date, $updated_date, $suppressed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4invoicesApi->getAListOfInvoices: ', $e->getMessage(), PHP_EOL;
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
 **inv_num** | **string**| a comma-delimited list of invoice numbers (can include a single wildcard &#39;*&#39; to represent one or more final characters, for example, mult* or mul*) | [optional]
 **status_code** | [**string[]**](../Model/string.md)| the status value of invoice record to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| if none provided, data for all fields are returned; otherwise only specified fields are returned | [optional]
 **invoice_date** | **\DateTime**| the date of invoice records (can be a range) | [optional]
 **created_date** | **\DateTime**| the creation date of invoice records to retrieve (can be a range) | [optional]
 **updated_date** | **\DateTime**| the modification date of invoice records to retrieve (can be a range) | [optional]
 **suppressed** | **bool**| the suppressed flag value of invoice records to retrieve | [optional]

### Return type

[**\Sierra\Models\InvoiceResultSet**](../Model/InvoiceResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheLineItemDataForASingleInvoiceRecord**
> \Sierra\Models\InvoiceLineResultSet getTheLineItemDataForASingleInvoiceRecord($login, $id, $fields)

Get the line item data for a single invoice record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V4invoicesApi(
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
    echo 'Exception when calling V4invoicesApi->getTheLineItemDataForASingleInvoiceRecord: ', $e->getMessage(), PHP_EOL;
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

[**\Sierra\Models\InvoiceLineResultSet**](../Model/InvoiceLineResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

