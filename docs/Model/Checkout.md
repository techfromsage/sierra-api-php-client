# Checkout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the ID of the checkout | 
**patron** | **string** | the patron record number associated with the checkout | 
**item** | **string** | the item record number associated with the checkout | 
**barcode** | **string** | the barcode of the associated item | [optional] 
**dueDate** | [**\DateTime**](\DateTime.md) | the due date of the item, in ISO 8601 format | [optional] 
**callNumber** | **string** | the call number of the associated item | [optional] 
**numberOfRenewals** | **int** | the total number of times the item has been renewed | [optional] 
**outDate** | [**\DateTime**](\DateTime.md) | the checkout date and time for the item, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**recallDate** | [**\DateTime**](\DateTime.md) | the date the item was recalled (blank if the item has not been recalled), in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


