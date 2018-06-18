# Sierra\V5acquisitionsApi

All URIs are relative to *https://sandbox.iii.com/iii/sierra-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createANewAcquisition**](V5acquisitionsApi.md#createANewAcquisition) | **POST** /v5/acquisitions/orders | Create a new acquisition
[**createANewAcquisition_0**](V5acquisitionsApi.md#createANewAcquisition_0) | **POST** /v5/acquisitions/orders/classic | Create a new acquisition
[**validateTheOrderData**](V5acquisitionsApi.md#validateTheOrderData) | **POST** /v5/acquisitions/orders/validate | Validate the order data


# **createANewAcquisition**
> \Sierra\Models\OrderBibLinks createANewAcquisition($acquisition_order_post)

Create a new acquisition



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5acquisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acquisition_order_post = new \Sierra\Models\AcquisitionOrderPost(); // \Sierra\Models\AcquisitionOrderPost | the order information and the MARC records in: application/marc-json, application/marc-in-json or application/marc-xml

try {
    $result = $apiInstance->createANewAcquisition($acquisition_order_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5acquisitionsApi->createANewAcquisition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acquisition_order_post** | [**\Sierra\Models\AcquisitionOrderPost**](../Model/AcquisitionOrderPost.md)| the order information and the MARC records in: application/marc-json, application/marc-in-json or application/marc-xml |

### Return type

[**\Sierra\Models\OrderBibLinks**](../Model/OrderBibLinks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createANewAcquisition_0**
> \Sierra\Models\OrderBibLinks createANewAcquisition_0($login, $location, $fund, $vendor, $marc, $copies, $price, $acquisition_type, $claim, $code1, $code2, $code3, $code4, $format, $order_note, $order_type, $raction, $rloc, $bloc, $status, $tloc, $odate, $language, $country, $note, $staff_note, $vendor_note, $vendor_id_number, $volume, $selector, $vendor_account, $currency_code, $identity, $ship_to, $requestor, $old_order_number, $paid_note, $vendor_address, $custom_var_field1, $custom_var_field2, $custom_var_field3, $custom_var_field4)

Create a new acquisition



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5acquisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = "login_example"; // string | the Sierra username to associate with created orders
$location = "location_example"; // string | the shelving location or branch for which the order is placed
$fund = "fund_example"; // string | the fund code against which the material is encumbered and paid
$vendor = "vendor_example"; // string | the library-defined code for the vendor who handles the order
$marc = new \Sierra\Models\null(); //  | the MARC records in: application/marc-json, application/marc-in-json or application/marc-xml
$copies = 56; // int | the number of copies ordered
$price = 1.2; // double | the estimated price per copy
$acquisition_type = "acquisition_type_example"; // string | the library-defined acquisition type code or the method of paying for the material
$claim = "claim_example"; // string | the claiming activity code
$code1 = "code1_example"; // string | the library-defined order code 1
$code2 = "code2_example"; // string | the library-defined order code 2
$code3 = "code3_example"; // string | the library-defined order code 3
$code4 = "code4_example"; // string | the library-defined order code 4
$format = "format_example"; // string | a code representing the physical form of the material (any hash mark symbols '#' must be URL encoded
$order_note = "order_note_example"; // string | a code representing an order note to print on the purchase order form
$order_type = "order_type_example"; // string | a code representing the type of order
$raction = "raction_example"; // string | a code representing the receiving action
$rloc = "rloc_example"; // string | a code representing the receiving location
$bloc = "bloc_example"; // string | a code representing the billing location
$status = "status_example"; // string | a system-generated code representing that financial encumbering or disencumbering status of a record
$tloc = "tloc_example"; // string | a code representing a temporary shelving location
$odate = "odate_example"; // string | the date the material was ordered, in the format mm-dd-yy
$language = "language_example"; // string | the language of the material, based on the MARC 21 Code List for Languages (also used by UNIMARC format)
$country = "country_example"; // string | the country of publication, based on the MARC 21 Code List of Countries, or ISO 3166/MA standard for UNIMARC systems
$note = "note_example"; // string | a code representing the note that prints on the purchase order form (repeatable parameter)
$staff_note = "staff_note_example"; // string | a free-text internal (staff) note (repeatable parameter)
$vendor_note = "vendor_note_example"; // string | a free-text note for vendor order information (repeatable parameter)
$vendor_id_number = "vendor_id_number_example"; // string | the vendor's identification number for this title (repeatable parameter)
$volume = "volume_example"; // string | the number of volumes for this title
$selector = "selector_example"; // string | a free text note identifying the selector of the item (repeatable parameter)
$vendor_account = "vendor_account_example"; // string | the vendor account number (repeatable parameter)
$currency_code = "currency_code_example"; // string | the foreign currency code
$identity = "identity_example"; // string | a free text note, used to distinguish between order records (repeatable parameter)
$ship_to = "ship_to_example"; // string | the library address to which the vendor should ship materials (repeatable parameter)
$requestor = "requestor_example"; // string | the requestor (repeatable parameter)
$old_order_number = "old_order_number_example"; // string | the old order number (repeatable parameter)
$paid_note = "paid_note_example"; // string | the paid note (repeatable parameter)
$vendor_address = "vendor_address_example"; // string | the vendor address (repeatable parameter)
$custom_var_field1 = "custom_var_field1_example"; // string | custom var field 1 (repeatable parameter)
$custom_var_field2 = "custom_var_field2_example"; // string | custom var field 2 (repeatable parameter)
$custom_var_field3 = "custom_var_field3_example"; // string | custom var field 3 (repeatable parameter)
$custom_var_field4 = "custom_var_field4_example"; // string | custom var field 4 (repeatable parameter)

try {
    $result = $apiInstance->createANewAcquisition_0($login, $location, $fund, $vendor, $marc, $copies, $price, $acquisition_type, $claim, $code1, $code2, $code3, $code4, $format, $order_note, $order_type, $raction, $rloc, $bloc, $status, $tloc, $odate, $language, $country, $note, $staff_note, $vendor_note, $vendor_id_number, $volume, $selector, $vendor_account, $currency_code, $identity, $ship_to, $requestor, $old_order_number, $paid_note, $vendor_address, $custom_var_field1, $custom_var_field2, $custom_var_field3, $custom_var_field4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5acquisitionsApi->createANewAcquisition_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| the Sierra username to associate with created orders |
 **location** | **string**| the shelving location or branch for which the order is placed |
 **fund** | **string**| the fund code against which the material is encumbered and paid |
 **vendor** | **string**| the library-defined code for the vendor who handles the order |
 **marc** | [****](../Model/.md)| the MARC records in: application/marc-json, application/marc-in-json or application/marc-xml |
 **copies** | **int**| the number of copies ordered | [optional]
 **price** | **double**| the estimated price per copy | [optional]
 **acquisition_type** | **string**| the library-defined acquisition type code or the method of paying for the material | [optional]
 **claim** | **string**| the claiming activity code | [optional]
 **code1** | **string**| the library-defined order code 1 | [optional]
 **code2** | **string**| the library-defined order code 2 | [optional]
 **code3** | **string**| the library-defined order code 3 | [optional]
 **code4** | **string**| the library-defined order code 4 | [optional]
 **format** | **string**| a code representing the physical form of the material (any hash mark symbols &#39;#&#39; must be URL encoded | [optional]
 **order_note** | **string**| a code representing an order note to print on the purchase order form | [optional]
 **order_type** | **string**| a code representing the type of order | [optional]
 **raction** | **string**| a code representing the receiving action | [optional]
 **rloc** | **string**| a code representing the receiving location | [optional]
 **bloc** | **string**| a code representing the billing location | [optional]
 **status** | **string**| a system-generated code representing that financial encumbering or disencumbering status of a record | [optional]
 **tloc** | **string**| a code representing a temporary shelving location | [optional]
 **odate** | **string**| the date the material was ordered, in the format mm-dd-yy | [optional]
 **language** | **string**| the language of the material, based on the MARC 21 Code List for Languages (also used by UNIMARC format) | [optional]
 **country** | **string**| the country of publication, based on the MARC 21 Code List of Countries, or ISO 3166/MA standard for UNIMARC systems | [optional]
 **note** | **string**| a code representing the note that prints on the purchase order form (repeatable parameter) | [optional]
 **staff_note** | **string**| a free-text internal (staff) note (repeatable parameter) | [optional]
 **vendor_note** | **string**| a free-text note for vendor order information (repeatable parameter) | [optional]
 **vendor_id_number** | **string**| the vendor&#39;s identification number for this title (repeatable parameter) | [optional]
 **volume** | **string**| the number of volumes for this title | [optional]
 **selector** | **string**| a free text note identifying the selector of the item (repeatable parameter) | [optional]
 **vendor_account** | **string**| the vendor account number (repeatable parameter) | [optional]
 **currency_code** | **string**| the foreign currency code | [optional]
 **identity** | **string**| a free text note, used to distinguish between order records (repeatable parameter) | [optional]
 **ship_to** | **string**| the library address to which the vendor should ship materials (repeatable parameter) | [optional]
 **requestor** | **string**| the requestor (repeatable parameter) | [optional]
 **old_order_number** | **string**| the old order number (repeatable parameter) | [optional]
 **paid_note** | **string**| the paid note (repeatable parameter) | [optional]
 **vendor_address** | **string**| the vendor address (repeatable parameter) | [optional]
 **custom_var_field1** | **string**| custom var field 1 (repeatable parameter) | [optional]
 **custom_var_field2** | **string**| custom var field 2 (repeatable parameter) | [optional]
 **custom_var_field3** | **string**| custom var field 3 (repeatable parameter) | [optional]
 **custom_var_field4** | **string**| custom var field 4 (repeatable parameter) | [optional]

### Return type

[**\Sierra\Models\OrderBibLinks**](../Model/OrderBibLinks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/marc-json, application/marc-xml, application/marc-in-json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateTheOrderData**
> \Sierra\Models\ErrorCode validateTheOrderData($acquisition_order_post)

Validate the order data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sierra\Api\V5acquisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acquisition_order_post = new \Sierra\Models\AcquisitionOrder(); // \Sierra\Models\AcquisitionOrder | the order information

try {
    $result = $apiInstance->validateTheOrderData($acquisition_order_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V5acquisitionsApi->validateTheOrderData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acquisition_order_post** | [**\Sierra\Models\AcquisitionOrder**](../Model/AcquisitionOrder.md)| the order information |

### Return type

[**\Sierra\Models\ErrorCode**](../Model/ErrorCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

