# Fine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the ID of the fine | 
**patron** | **string** | the patron record number associated with the fine | [optional] 
**item** | **string** | the item record number associated with the fine | [optional] 
**assessedDate** | [**\DateTime**](\DateTime.md) | the date the fine was assessed, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**description** | **string** | the reason for the charge | [optional] 
**invoiceNumber** | **int** | the fine&#39;s invoice number | [optional] 
**chargeType** | [**\III\Sierra\V5\Models\ChargeType**](ChargeType.md) | the code representing the type of charge assessed | [optional] 
**itemCharge** | **double** | a fine amount related to the item (the exact meaning depends on the charge code) | 
**processingFee** | **double** | a processing fee amount (the exact meaning depends on the charge code) | 
**billingFee** | **double** | a billing fee amount (the exact meaning depends on the charge code) | 
**paidAmount** | **double** | the amount already paid for this fine | 
**location** | [**\III\Sierra\V5\Models\Location**](Location.md) | the charge location | [optional] 
**initials** | **string** | initials | [optional] 
**creationMethod** | **string** | the method that was used to create the fine | [optional] 
**datePaid** | [**\DateTime**](\DateTime.md) | the date the fine was paid | [optional] 
**originalPatron** | **string** | the original patron record number associated with the fine | [optional] 
**printBill** | **bool** | has the bill been printed | [optional] 
**terminalNumber** | **int** | the terminal number | [optional] 
**transferDate** | [**\DateTime**](\DateTime.md) | the original transfer date | [optional] 
**returnDate** | [**\DateTime**](\DateTime.md) | the date that the item was returned | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


