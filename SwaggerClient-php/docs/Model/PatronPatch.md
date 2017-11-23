# PatronPatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emails** | **string[]** | a list of the patron&#39;s emails (must include all applicable email addresses for the patron) | [optional] 
**names** | **string[]** | a list of the patron&#39;s names (must include all applicable names for the patron) | [optional] 
**addresses** | [**\SierraApi\Model\Address[]**](Address.md) | a list of the patron&#39;s addresses (must include all applicable addresses for the patron) | [optional] 
**phones** | [**\SierraApi\Model\Phone[]**](Phone.md) | a list of the patron&#39;s phone numbers (must include all applicable phone numbers for the patron) | [optional] 
**pin** | **string** | the patron&#39;s Personal Identification Number | [optional] 
**barcodes** | **string[]** | patron&#39;s barcode | [optional] 
**patron_type** | **int** | the patron type code | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | the expiration date of the patron&#39;s borrowing privileges in ISO 8601 format (yyyy-MM-dd) | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | the patron&#39;s date of birth in ISO 8601 format (yyyy-MM-dd) | [optional] 
**patron_codes** | [**\SierraApi\Model\Codes**](Codes.md) | a list of patron codes | [optional] 
**block_info** | [**\SierraApi\Model\Block**](Block.md) | patron block information | [optional] 
**unique_ids** | **string[]** | the patron&#39;s unique IDs | [optional] 
**p_message** | **string** | the patron&#39;s message | [optional] 
**home_library_code** | **string** | the patron&#39;s home library | [optional] 
**lang_pref** | **string** | the patron&#39;s language preference | [optional] 
**fixed_fields** | [**\SierraApi\Model\map**](map.md) | the fixed-length fields from the patron record | [optional] 
**var_fields** | [**\SierraApi\Model\VarField[]**](VarField.md) | the variable-length fields from the patron record | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


