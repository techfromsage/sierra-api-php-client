# PatronHoldPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recordType** | **string** | the record type code, i.e., bib (b), item (i), or volume (j), associated with the hold | 
**recordNumber** | **int** | the held record number | 
**pickupLocation** | **string** | the pickup location code | 
**neededBy** | [**\DateTime**](\DateTime.md) | the date after which the held item is no longer needed, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**numberOfCopies** | **int** | the number of copies to hold | [optional] 
**note** | **string** | an informational note related to the hold | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


