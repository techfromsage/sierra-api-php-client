# Bib

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the record ID | 
**updated_date** | [**\DateTime**](\DateTime.md) | the date and time of the last update to the record, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | the date and time the record was created, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**deleted_date** | [**\DateTime**](\DateTime.md) | the date the record was deleted, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**deleted** | **bool** | whether the record has been deleted | 
**suppressed** | **bool** | whether the record is suppressed from public display | [optional] 
**available** | **bool** | whether the record is available for checkout | [optional] 
**lang** | [**\Sierra\Models\Language**](Language.md) | the language of the material (display value) | [optional] 
**title** | **string** | the title from the bib record | [optional] 
**author** | **string** | the most authoritative available representation of the author&#39;s name | [optional] 
**material_type** | [**\Sierra\Models\MaterialType**](MaterialType.md) | the material type, such as book, serial, map, and so forth, based on MARC 21 Leader/06 values, or UNIMARC Label/06 values | [optional] 
**bib_level** | [**\Sierra\Models\BibLevel**](BibLevel.md) | the bibliographic level, based on MARC 21 Leader/07 values or UNIMARC Label/07 values | [optional] 
**publish_year** | **int** | the year of publication | [optional] 
**catalog_date** | [**\DateTime**](\DateTime.md) | the date the record was added to the catalog, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**country** | [**\Sierra\Models\Country**](Country.md) | the country of publication (display value) | [optional] 
**orders** | [**\Sierra\Models\OrderInfo[]**](OrderInfo.md) | the order information for the bib record | 
**norm_title** | **string** | the normalized form of the most authoritative available version of the title | [optional] 
**norm_author** | **string** | the normalized form of the most authoritative available representation of the author&#39;s name | [optional] 
**locations** | [**\Sierra\Models\Location[]**](Location.md) | the locations associated with the bib | 
**fixed_fields** | [**\Sierra\Models\map**](map.md) | the fixed-length fields from the bib record | 
**var_fields** | [**\Sierra\Models\VarField[]**](VarField.md) | the variable-length fields from the bib record | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


