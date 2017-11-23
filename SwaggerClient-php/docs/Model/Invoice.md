# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | the record ID | 
**accounting_unit** | **int** | the accounting unit | [optional] 
**inv_date** | [**\DateTime**](\DateTime.md) | the invoice date and time as entered by the customer, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**inv_num** | **string** | invoice number as entered by the customer | [optional] 
**tax_type** | **string** | tax information if your library has enabled the feature to pay invoices using GST or VAT | [optional] 
**vendors** | [**\SierraApi\Model\Vendor[]**](Vendor.md) | a list of vendor details for the invoice | 
**paid_date** | [**\DateTime**](\DateTime.md) | the date and time that the invoice was paid, in ISO 8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ssZZ) | [optional] 
**for_currency** | [**\SierraApi\Model\ForeignCurrency**](ForeignCurrency.md) | the invoice&#39;s foreign currency code, rate and format | [optional] 
**inv_total** | [**\SierraApi\Model\InvoiceTotal**](InvoiceTotal.md) | the invoice totals | [optional] 
**use_tax** | [**\SierraApi\Model\UseTax**](UseTax.md) | the invoice&#39;s use tax percentage rate and fund | [optional] 
**line_items** | **string[]** | a list of links to line item ids for the invoice | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


