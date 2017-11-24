# Fine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the ID of the fine | 
**patron** | **string** | the patron record number associated with the fine | [optional] 
**item** | **string** | the item record number associated with the fine | [optional] 
**assessed_date** | [**\DateTime**](\DateTime.md) | the date the fine was assessed, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**description** | **string** | the reason for the charge | [optional] 
**invoice_number** | **int** | the fine&#39;s invoice number | [optional] 
**charge_type** | [**\Sierra\Models\ChargeType**](ChargeType.md) | the code representing the type of charge assessed | [optional] 
**item_charge** | **double** | a fine amount related to the item (the exact meaning depends on the charge code) | 
**processing_fee** | **double** | a processing fee amount (the exact meaning depends on the charge code) | 
**billing_fee** | **double** | a billing fee amount (the exact meaning depends on the charge code) | 
**paid_amount** | **double** | the amount already paid for this fine | 
**location** | [**\Sierra\Models\Location**](Location.md) | the charge location | [optional] 
**initials** | **string** | initials | [optional] 
**creation_method** | **string** | the method that was used to create the fine | [optional] 
**date_paid** | [**\DateTime**](\DateTime.md) | the date the fine was paid | [optional] 
**original_patron** | **string** | the original patron record number associated with the fine | [optional] 
**print_bill** | **bool** | has the bill been printed | [optional] 
**terminal_number** | **int** | the terminal number | [optional] 
**transfer_date** | [**\DateTime**](\DateTime.md) | the original transfer date | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


