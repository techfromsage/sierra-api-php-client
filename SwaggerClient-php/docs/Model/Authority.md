# Authority

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | the authority record ID | 
**updated_date** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deleted_date** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**suppressed** | **bool** | whether the record is suppressed from public display | [optional] 
**var_fields** | [**\SierraApi\Model\VarField[]**](VarField.md) | the variable-length fields from the authority record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


