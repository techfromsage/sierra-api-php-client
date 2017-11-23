# PatronHoldPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**record_type** | **string** | the record type code, i.e., bib (b), item (i), or volume (j), associated with the hold | 
**record_number** | **int** | the held record number | 
**pickup_location** | **string** | the pickup location code | 
**needed_by** | [**\DateTime**](\DateTime.md) | the date after which the held item is no longer needed, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**number_of_copies** | **int** | the number of copies to hold | [optional] 
**note** | **string** | an informational note related to the hold | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


