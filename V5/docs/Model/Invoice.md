# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | the record ID | 
**accountingUnit** | **int** | the accounting unit | [optional] 
**invDate** | [**\DateTime**](\DateTime.md) | the invoice date and time as entered by the customer, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**invNum** | **string** | invoice number as entered by the customer | [optional] 
**taxType** | **string** | tax information if your library has enabled the feature to pay invoices using GST or VAT | [optional] 
**vendors** | [**\III\Sierra\V5\Models\Vendor[]**](Vendor.md) | a list of vendor details for the invoice | 
**paidDate** | [**\DateTime**](\DateTime.md) | the date and time that the invoice was paid, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**forCurrency** | [**\III\Sierra\V5\Models\ForeignCurrency**](ForeignCurrency.md) | the invoice&#39;s foreign currency code, rate and format | [optional] 
**invTotal** | [**\III\Sierra\V5\Models\InvoiceTotal**](InvoiceTotal.md) | the invoice totals | [optional] 
**useTax** | [**\III\Sierra\V5\Models\UseTax**](UseTax.md) | the invoice&#39;s use tax percentage rate and fund | [optional] 
**lineItems** | **string[]** | a list of links to line item ids for the invoice | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


