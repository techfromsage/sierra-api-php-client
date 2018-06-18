# PatronPatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emails** | **string[]** | a list of the patron&#39;s emails (must include all applicable email addresses for the patron) | [optional] 
**names** | **string[]** | a list of the patron&#39;s names (must include all applicable names for the patron) | [optional] 
**addresses** | [**\III\Sierra\Models\Address[]**](Address.md) | a list of the patron&#39;s addresses (must include all applicable addresses for the patron) | [optional] 
**phones** | [**\III\Sierra\Models\Phone[]**](Phone.md) | a list of the patron&#39;s phone numbers (must include all applicable phone numbers for the patron) | [optional] 
**pin** | **string** | the patron&#39;s Personal Identification Number | [optional] 
**barcodes** | **string[]** | patron&#39;s barcode | [optional] 
**patronType** | **int** | the patron type code | [optional] 
**expirationDate** | [**\DateTime**](\DateTime.md) | the expiration date of the patron&#39;s borrowing privileges in ISO 8601 format (yyyy-MM-dd) | [optional] 
**birthDate** | [**\DateTime**](\DateTime.md) | the patron&#39;s date of birth in ISO 8601 format (yyyy-MM-dd) | [optional] 
**patronCodes** | [**\III\Sierra\Models\Codes**](Codes.md) | a list of patron codes | [optional] 
**blockInfo** | [**\III\Sierra\Models\Block**](Block.md) | patron block information | [optional] 
**uniqueIds** | **string[]** | the patron&#39;s unique IDs | [optional] 
**pMessage** | **string** | the patron&#39;s message | [optional] 
**homeLibraryCode** | **string** | the patron&#39;s home library | [optional] 
**langPref** | **string** | the patron&#39;s language preference | [optional] 
**fixedFields** | [**\III\Sierra\Models\map**](map.md) | the fixed-length fields from the patron record | [optional] 
**varFields** | [**\III\Sierra\Models\VarField[]**](VarField.md) | the variable-length fields from the patron record | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


