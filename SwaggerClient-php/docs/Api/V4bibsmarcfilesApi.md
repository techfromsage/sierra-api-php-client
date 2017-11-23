# SierraApi\V4bibsmarcfilesApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filterTheRecordsByAQueryInJSONFormat**](V4bibsmarcfilesApi.md#filterTheRecordsByAQueryInJSONFormat) | **POST** /v4/bibs/query | Filter the records by a query in JSON format
[**findBibInformationUsingAWSSearchByAuthorAndorTitle**](V4bibsmarcfilesApi.md#findBibInformationUsingAWSSearchByAuthorAndorTitle) | **GET** /v4/bibs/search | Find bib information using AWS search by author and/or title
[**generateABinaryMARCDataFileOfBibs**](V4bibsmarcfilesApi.md#generateABinaryMARCDataFileOfBibs) | **GET** /v4/bibs/marc | Generate a binary MARC data file of bibs
[**getABibByRecordID**](V4bibsmarcfilesApi.md#getABibByRecordID) | **GET** /v4/bibs/{id} | Get a bib by record ID
[**getAListOfBibs**](V4bibsmarcfilesApi.md#getAListOfBibs) | **GET** /v4/bibs/ | Get a list of bibs
[**getTheGeneratedBinaryMARCDataFile**](V4bibsmarcfilesApi.md#getTheGeneratedBinaryMARCDataFile) | **GET** /v4/bibs/marc/files/{id} | Get the generated binary MARC data file
[**getTheMARCDataForASingleBibRecord**](V4bibsmarcfilesApi.md#getTheMARCDataForASingleBibRecord) | **GET** /v4/bibs/{id}/marc | Get the MARC data for a single bib record


# **filterTheRecordsByAQueryInJSONFormat**
> \SierraApi\Model\QueryResultSet filterTheRecordsByAQueryInJSONFormat($offset, $limit, $json)

Filter the records by a query in JSON format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4bibsmarcfilesApi(
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
    echo 'Exception when calling V4bibsmarcfilesApi->filterTheRecordsByAQueryInJSONFormat: ', $e->getMessage(), PHP_EOL;
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

# **findBibInformationUsingAWSSearchByAuthorAndorTitle**
> \SierraApi\Model\BibSearchResultSet findBibInformationUsingAWSSearchByAuthorAndorTitle($index, $text, $limit, $offset, $fields)

Find bib information using AWS search by author and/or title



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4bibsmarcfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = "index_example"; // string | keyword index to be searched
$text = "text_example"; // string | the text to search for
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->findBibInformationUsingAWSSearchByAuthorAndorTitle($index, $text, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4bibsmarcfilesApi->findBibInformationUsingAWSSearchByAuthorAndorTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index** | **string**| keyword index to be searched |
 **text** | **string**| the text to search for |
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\SierraApi\Model\BibSearchResultSet**](../Model/BibSearchResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateABinaryMARCDataFileOfBibs**
> \SierraApi\Model\MarcSummary generateABinaryMARCDataFileOfBibs($limit, $id, $mapping)

Generate a binary MARC data file of bibs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4bibsmarcfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$id = array("id_example"); // string[] | a comma-delimited list of IDs of bibs to retrieve (can be a range)
$mapping = "mapping_example"; // string | the suffix of the Innovative-to-MARC mapping file to apply (a blank entry uses the default mapping file)

try {
    $result = $apiInstance->generateABinaryMARCDataFileOfBibs($limit, $id, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4bibsmarcfilesApi->generateABinaryMARCDataFileOfBibs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of bibs to retrieve (can be a range) | [optional]
 **mapping** | **string**| the suffix of the Innovative-to-MARC mapping file to apply (a blank entry uses the default mapping file) | [optional]

### Return type

[**\SierraApi\Model\MarcSummary**](../Model/MarcSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getABibByRecordID**
> \SierraApi\Model\Bib getABibByRecordID($id, $fields)

Get a bib by record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4bibsmarcfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the bib record ID
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve

try {
    $result = $apiInstance->getABibByRecordID($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4bibsmarcfilesApi->getABibByRecordID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the bib record ID |
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]

### Return type

[**\SierraApi\Model\Bib**](../Model/Bib.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAListOfBibs**
> \SierraApi\Model\BibResultSet getAListOfBibs($limit, $offset, $id, $fields, $created_date, $updated_date, $deleted_date, $deleted, $suppressed, $locations)

Get a list of bibs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4bibsmarcfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the maximum number of results
$offset = 56; // int | the beginning record (zero-indexed) of the result set returned
$id = array("id_example"); // string[] | a comma-delimited list of IDs of bibs to retrieve
$fields = array("fields_example"); // string[] | a comma-delimited list of fields to retrieve
$created_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the creation date of bibs to retrieve (can be a range)
$updated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | the modification date of bibs to retrieve (can be a range)
$deleted_date = new \DateTime("2013-10-20"); // \DateTime | the deletion date of deleted bibs to retrieve (can be a range)
$deleted = true; // bool | whether to retrieve only deleted (true) or non-deleted (false) bibs
$suppressed = true; // bool | the suppressed flag value of bibs to retrieve
$locations = "locations_example"; // string | a comma-delimited list of location codes (can include a single wildcard '*' to represent one or more final characters, for example, mult* or mul*)

try {
    $result = $apiInstance->getAListOfBibs($limit, $offset, $id, $fields, $created_date, $updated_date, $deleted_date, $deleted, $suppressed, $locations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4bibsmarcfilesApi->getAListOfBibs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the maximum number of results | [optional]
 **offset** | **int**| the beginning record (zero-indexed) of the result set returned | [optional]
 **id** | [**string[]**](../Model/string.md)| a comma-delimited list of IDs of bibs to retrieve | [optional]
 **fields** | [**string[]**](../Model/string.md)| a comma-delimited list of fields to retrieve | [optional]
 **created_date** | **\DateTime**| the creation date of bibs to retrieve (can be a range) | [optional]
 **updated_date** | **\DateTime**| the modification date of bibs to retrieve (can be a range) | [optional]
 **deleted_date** | **\DateTime**| the deletion date of deleted bibs to retrieve (can be a range) | [optional]
 **deleted** | **bool**| whether to retrieve only deleted (true) or non-deleted (false) bibs | [optional]
 **suppressed** | **bool**| the suppressed flag value of bibs to retrieve | [optional]
 **locations** | **string**| a comma-delimited list of location codes (can include a single wildcard &#39;*&#39; to represent one or more final characters, for example, mult* or mul*) | [optional]

### Return type

[**\SierraApi\Model\BibResultSet**](../Model/BibResultSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheGeneratedBinaryMARCDataFile**
> getTheGeneratedBinaryMARCDataFile($id)

Get the generated binary MARC data file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4bibsmarcfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the ID of the MARC data file to retrieve

try {
    $apiInstance->getTheGeneratedBinaryMARCDataFile($id);
} catch (Exception $e) {
    echo 'Exception when calling V4bibsmarcfilesApi->getTheGeneratedBinaryMARCDataFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the ID of the MARC data file to retrieve |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml, application/marc-json, application/marc-xml, application/marc-in-json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheMARCDataForASingleBibRecord**
> \SierraApi\Model\ErrorCode getTheMARCDataForASingleBibRecord($id)

Get the MARC data for a single bib record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SierraApi\Api\V4bibsmarcfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | the bib record ID

try {
    $result = $apiInstance->getTheMARCDataForASingleBibRecord($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4bibsmarcfilesApi->getTheMARCDataForASingleBibRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the bib record ID |

### Return type

[**\SierraApi\Model\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/marc-json, application/marc-xml, application/marc-in-json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

