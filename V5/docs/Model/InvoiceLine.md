# InvoiceLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | system generated line number | 
**invoice** | **string** | link to invoice ID | 
**order** | **string** | link to order ID associated with this line item | [optional] 
**paidAmount** | **double** | paid amount, entered by user | [optional] 
**lienAmount** | **double** | lien amount | [optional] 
**lienFlag** | **int** | lien flag | [optional] 
**listPrice** | **double** | list price | [optional] 
**fund** | **string** | internal fund code | [optional] 
**subFund** | **int** | sub-fund associated with an internal fund code (max 7 per fund) | [optional] 
**noOfCopies** | **int** | number of copies of the material contained in this line item | [optional] 
**externalFund** | **int** | external fund code | [optional] 
**orderStatus** | **string** | status of this line item | [optional] 
**useTax** | **bool** | whether use tax is used for this line item | [optional] 
**lineItemNote** | **string** | note associated with this line item, entered by user | [optional] 
**title** | **string** | title of material, supplied by system | [optional] 
**multiFlag** | **string** | multi-fund group code | 
**vendor** | **string** | 5-char vendor code | [optional] 
**subStartingDate** | [**\DateTime**](\DateTime.md) | subscription starting date, entered by user | [optional] 
**subEndingDate** | [**\DateTime**](\DateTime.md) | subscription end date, entered by user | [optional] 
**tax** | **double** | amount of tax for the line item, system generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


