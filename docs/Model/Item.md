# Item

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the item record ID | 
**updatedDate** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deletedDate** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**bibIds** | **string[]** | the IDs of the bibliographic records to which this item is linked | 
**location** | [**\III\Sierra\Models\Location**](Location.md) | the location of the item, with the location code and name | [optional] 
**status** | [**\III\Sierra\Models\ItemStatus**](ItemStatus.md) | the status of the item, with the code and display value, and a due date if the item is checked out | [optional] 
**barcode** | **string** | the barcode found in the item record | [optional] 
**callNumber** | **string** | the call number found in the item record | [optional] 
**itemType** | **string** | the type of the item record | [optional] 
**fixedFields** | [**\III\Sierra\Models\map**](map.md) | the fixed-length fields from the item record | 
**varFields** | [**\III\Sierra\Models\VarField[]**](VarField.md) | the variable-length fields from the item record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


