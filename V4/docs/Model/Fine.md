# Fine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the ID of the fine | 
**patron** | **string** | the patron record number associated with the fine | [optional] 
**item** | **string** | the item record number associated with the fine | [optional] 
**assessedDate** | [**\DateTime**](\DateTime.md) | the date the fine was assessed, in ISO 8601 format (yyyy-MM-dd) | [optional] 
**description** | **string** | the reason for the charge | [optional] 
**invoiceNumber** | **int** | the fine&#39;s invoice number | [optional] 
**chargeType** | [**\III\Sierra\V4\Models\ChargeType**](ChargeType.md) | the code representing the type of charge assessed | [optional] 
**itemCharge** | **double** | a fine amount related to the item (the exact meaning depends on the charge code) | 
**processingFee** | **double** | a processing fee amount (the exact meaning depends on the charge code) | 
**billingFee** | **double** | a billing fee amount (the exact meaning depends on the charge code) | 
**paidAmount** | **double** | the amount already paid for this fine | 
**location** | [**\III\Sierra\V4\Models\Location**](Location.md) | the charge location | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


