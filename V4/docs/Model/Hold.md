# Hold

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the hold ID | 
**record** | **string** | the bib, item, or volume record number associated with the hold (the endpoint returned for volume holds is not a valid API endpoint; it is returned for volume record ID information only) | [optional] 
**patron** | **string** | the patron record number associated with the hold | 
**frozen** | **bool** | whether the record is frozen | [optional] 
**placed** | [**\DateTime**](\DateTime.md) | the date the hold was placed, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**notNeededAfterDate** | [**\DateTime**](\DateTime.md) | the date the hold expires, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**notWantedBeforeDate** | [**\DateTime**](\DateTime.md) | the date before which the system should not fill the hold, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**location** | [**\III\Sierra\V4\Models\Location**](Location.md) | the code of the location from which to fill the hold, if the hold is set for \&quot;Limit to Location\&quot; (does not apply to item-level holds) | [optional] 
**pickupLocation** | [**\III\Sierra\V4\Models\Location**](Location.md) | the location code of the hold&#39;s pickup location | [optional] 
**status** | [**\III\Sierra\V4\Models\HoldStatus**](HoldStatus.md) | the hold status code and description | [optional] 
**recordType** | **string** | a record type code, i.e., bib (b), item (i), or volume (j) | [optional] 
**priority** | **int** | the priority (place in line) of the hold | [optional] 
**priorityQueueLength** | **int** | the length of the hold queue | [optional] 
**note** | **string** | an informational note related to the hold | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


