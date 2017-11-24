# Item

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the item record ID | 
**updated_date** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deleted_date** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**bib_ids** | **string[]** | the IDs of the bibliographic records to which this item is linked | 
**location** | [**\Sierra\Models\Location**](Location.md) | the location of the item, with the location code and name | [optional] 
**status** | [**\Sierra\Models\ItemStatus**](ItemStatus.md) | the status of the item, with the code and display value, and a due date if the item is checked out | [optional] 
**barcode** | **string** | the barcode found in the item record | [optional] 
**call_number** | **string** | the call number found in the item record | [optional] 
**item_type** | **string** | the type of the item record | [optional] 
**fixed_fields** | [**\Sierra\Models\map**](map.md) | the fixed-length fields from the item record | 
**var_fields** | [**\Sierra\Models\VarField[]**](VarField.md) | the variable-length fields from the item record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


