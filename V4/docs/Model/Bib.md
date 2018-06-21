# Bib

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the record ID | 
**updatedDate** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deletedDate** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**suppressed** | **bool** | whether the record is suppressed from public display | [optional] 
**available** | **bool** | whether the record is available for checkout | [optional] 
**lang** | [**\III\Sierra\V4\Models\Language**](Language.md) | the language of the material (display value) | [optional] 
**title** | **string** | the title from the bib record | [optional] 
**author** | **string** | the most authoritative available representation of the author&#39;s name | [optional] 
**materialType** | [**\III\Sierra\V4\Models\MaterialType**](MaterialType.md) | the material type, such as book, serial, map, and so forth, based on MARC 21 Leader/06 values, or UNIMARC Label/06 values | [optional] 
**bibLevel** | [**\III\Sierra\V4\Models\BibLevel**](BibLevel.md) | the bibliographic level, based on MARC 21 Leader/07 values or UNIMARC Label/07 values | [optional] 
**publishYear** | **int** | the year of publication | [optional] 
**catalogDate** | [**\DateTime**](\DateTime.md) | the date the record was added to the catalog, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**country** | [**\III\Sierra\V4\Models\Country**](Country.md) | the country of publication (display value) | [optional] 
**orders** | [**\III\Sierra\V4\Models\OrderInfo[]**](OrderInfo.md) | the order information for the bib record | 
**normTitle** | **string** | the normalized form of the most authoritative available version of the title | [optional] 
**normAuthor** | **string** | the normalized form of the most authoritative available representation of the author&#39;s name | [optional] 
**locations** | [**\III\Sierra\V4\Models\Location[]**](Location.md) | the locations associated with the bib | 
**fixedFields** | [**\III\Sierra\V4\Models\map**](map.md) | the fixed-length fields from the bib record | 
**varFields** | [**\III\Sierra\V4\Models\VarField[]**](VarField.md) | the variable-length fields from the bib record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


