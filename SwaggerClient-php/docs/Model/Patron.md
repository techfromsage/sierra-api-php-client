# Patron

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | the patron record ID | 
**updated_date** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deleted_date** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**suppressed** | **bool** | whether the record is suppressed from public display | [optional] 
**names** | **string[]** | a list of the patron&#39;s names | [optional] 
**barcodes** | **string[]** | the patron&#39;s barcode(s) | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | the expiration date of the patron&#39;s borrowing privileges in ISO 8601 format (yyyy-MM-dd) | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | the patron&#39;s date of birth in ISO 8601 format (yyyy-MM-dd) | [optional] 
**emails** | **string[]** | the patron&#39;s email addresses | [optional] 
**patron_type** | **int** | the patron type code | [optional] 
**patron_codes** | [**\SierraApi\Model\Codes**](Codes.md) | the library-defined pcodes associated with the patron | [optional] 
**home_library_code** | **string** | the patron&#39;s home library | [optional] 
**message** | [**\SierraApi\Model\Message**](Message.md) | message-related data for the patron | [optional] 
**block_info** | [**\SierraApi\Model\Block**](Block.md) | patron block information | [optional] 
**addresses** | [**\SierraApi\Model\Address[]**](Address.md) | the patron&#39;s addresses | [optional] 
**phones** | [**\SierraApi\Model\Phone[]**](Phone.md) | the patron&#39;s telephone numbers | [optional] 
**unique_ids** | **string[]** | the patron&#39;s unique IDs | [optional] 
**money_owed** | **double** | the amount of money the patron owes in fines and charges | [optional] 
**p_message** | **string** | the patron&#39;s message | [optional] 
**lang_pref** | **string** | the patron&#39;s language preference | [optional] 
**fixed_fields** | [**\SierraApi\Model\map**](map.md) | the fixed-length fields from the patron record | 
**var_fields** | [**\SierraApi\Model\VarField[]**](VarField.md) | the variable-length fields from the patron record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


