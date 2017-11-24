# InvoiceLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | system generated line number | 
**invoice** | **string** | link to invoice ID | 
**order** | **string** | link to order ID associated with this line item | [optional] 
**paid_amount** | **double** | paid amount, entered by user | [optional] 
**lien_amount** | **double** | lien amount | [optional] 
**lien_flag** | **int** | lien flag | [optional] 
**list_price** | **double** | list price | [optional] 
**fund** | **string** | internal fund code | [optional] 
**sub_fund** | **int** | sub-fund associated with an internal fund code (max 7 per fund) | [optional] 
**no_of_copies** | **int** | number of copies of the material contained in this line item | [optional] 
**external_fund** | **int** | external fund code | [optional] 
**order_status** | **string** | status of this line item | [optional] 
**use_tax** | **bool** | whether use tax is used for this line item | [optional] 
**line_item_note** | **string** | note associated with this line item, entered by user | [optional] 
**title** | **string** | title of material, supplied by system | [optional] 
**multi_flag** | **string** | multi-fund group code | 
**vendor** | **string** | 5-char vendor code | [optional] 
**sub_starting_date** | [**\DateTime**](\DateTime.md) | subscription starting date, entered by user | [optional] 
**sub_ending_date** | [**\DateTime**](\DateTime.md) | subscription end date, entered by user | [optional] 
**tax** | **double** | amount of tax for the line item, system generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


