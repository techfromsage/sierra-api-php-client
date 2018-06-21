# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | the order ID | 
**updatedDate** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deletedDate** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**suppressed** | **bool** | whether the record is suppressed from public display | [optional] 
**accountingUnit** | **int** | the accounting unit of the order | [optional] 
**estimatedPrice** | **float** | the estimated price for one copy of the ordered item | [optional] 
**vendorRecordCode** | **string** | a library-defined code for the vendor who handles the order | [optional] 
**orderDate** | [**\DateTime**](\DateTime.md) | the date the material was ordered, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**chargedFunds** | [**\III\Sierra\V5\Models\ChargedFund[]**](ChargedFund.md) | the list of funds to be charged and related data | [optional] 
**vendorTitles** | **string[]** | the list of the vendor&#39;s identification numbers for this title; the vendor&#39;s identification number is also called the Vendor ID # | [optional] 
**fixedFields** | [**\III\Sierra\V5\Models\map**](map.md) | the fixed-length fields from the order record | 
**varFields** | [**\III\Sierra\V5\Models\VarField[]**](VarField.md) | the variable-length fields from the order record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


