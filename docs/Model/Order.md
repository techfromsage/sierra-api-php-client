# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | the order ID | 
**updated_date** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deleted_date** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**suppressed** | **bool** | whether the record is suppressed from public display | [optional] 
**accounting_unit** | **int** | the accounting unit of the order | [optional] 
**estimated_price** | **float** | the estimated price for one copy of the ordered item | [optional] 
**vendor_record_code** | **string** | a library-defined code for the vendor who handles the order | [optional] 
**order_date** | [**\DateTime**](\DateTime.md) | the date the material was ordered, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**charged_funds** | [**\Sierra\Models\ChargedFund[]**](ChargedFund.md) | the list of funds to be charged and related data | [optional] 
**vendor_titles** | **string[]** | the list of the vendor&#39;s identification numbers for this title; the vendor&#39;s identification number is also called the Vendor ID # | [optional] 
**fixed_fields** | [**\Sierra\Models\map**](map.md) | the fixed-length fields from the order record | 
**var_fields** | [**\Sierra\Models\VarField[]**](VarField.md) | the variable-length fields from the order record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


