# Patron

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | the patron record ID | 
**updatedDate** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deletedDate** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**suppressed** | **bool** | whether the record is suppressed from public display | [optional] 
**names** | **string[]** | a list of the patron&#39;s names | [optional] 
**barcodes** | **string[]** | the patron&#39;s barcode(s) | [optional] 
**expirationDate** | [**\DateTime**](\DateTime.md) | the expiration date of the patron&#39;s borrowing privileges in ISO 8601 format (yyyy-MM-dd) | [optional] 
**birthDate** | [**\DateTime**](\DateTime.md) | the patron&#39;s date of birth in ISO 8601 format (yyyy-MM-dd) | [optional] 
**emails** | **string[]** | the patron&#39;s email addresses | [optional] 
**patronType** | **int** | the patron type code | [optional] 
**patronCodes** | [**\III\Sierra\V4\Models\Codes**](Codes.md) | the library-defined pcodes associated with the patron | [optional] 
**homeLibraryCode** | **string** | the patron&#39;s home library | [optional] 
**message** | [**\III\Sierra\V4\Models\Message**](Message.md) | message-related data for the patron | [optional] 
**blockInfo** | [**\III\Sierra\V4\Models\Block**](Block.md) | patron block information | [optional] 
**addresses** | [**\III\Sierra\V4\Models\Address[]**](Address.md) | the patron&#39;s addresses | [optional] 
**phones** | [**\III\Sierra\V4\Models\Phone[]**](Phone.md) | the patron&#39;s telephone numbers | [optional] 
**uniqueIds** | **string[]** | the patron&#39;s unique IDs | [optional] 
**moneyOwed** | **double** | the amount of money the patron owes in fines and charges | [optional] 
**fixedFields** | [**\III\Sierra\V4\Models\map**](map.md) | the fixed-length fields from the patron record | 
**varFields** | [**\III\Sierra\V4\Models\VarField[]**](VarField.md) | the variable-length fields from the patron record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


