# AcquisitionOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**login** | **string** | the Sierra username to associate with created orders | 
**copies** | **int** | the number of copies ordered | [optional] 
**allocation** | [**\SierraApi\Model\AcquisitionOrderAllocation[]**](AcquisitionOrderAllocation.md) | a list of data describing how the order is allocated | 
**vendor** | **string** | the library-defined code for the vendor who handles the order | 
**price** | **double** | the estimated price per copy | [optional] 
**acquisition_type** | **string** | the library-defined acquisition type code or the method of paying for the material | [optional] 
**claim** | **string** | the claiming activity code | [optional] 
**code1** | **string** | the library-defined order code 1 | [optional] 
**code2** | **string** | the library-defined order code 2 | [optional] 
**code3** | **string** | the library-defined order code 3 | [optional] 
**code4** | **string** | the library-defined order code 4 | [optional] 
**format** | **string** | a code representing the physical form of the material (any hash mark symbols &#39;#&#39; must be URL encoded | [optional] 
**order_note** | **string** | a code representing an order note to print on the purchase order form | [optional] 
**order_type** | **string** | a code representing the type of order | [optional] 
**raction** | **string** | a code representing the receiving action | [optional] 
**rloc** | **string** | a code representing the receiving location | [optional] 
**bloc** | **string** | a code representing the billing location | [optional] 
**status** | **string** | a system-generated code representing the financial encumbering or disencumbering status of a record | [optional] 
**tloc** | **string** | a code representing a temporary shelving location | [optional] 
**odate** | **string** | the date the material was ordered, in the format mm-dd-yy | [optional] 
**language** | **string** | the language of the material, based on the MARC 21 Code List for Languages (also used by UNIMARC format) | [optional] 
**country** | **string** | the country of publication, based on the MARC 21 Code List of Countries, or ISO 3166/MA standard for UNIMARC systems | [optional] 
**volume** | **int** | the number of volumes for this title | [optional] 
**note** | **string[]** | a free-text note (repeatable parameter) | 
**staff_note** | **string[]** | a free-text internal (staff) note (repeatable parameter) | 
**vendor_note** | **string[]** | a free-text note for vendor order information (repeatable parameter) | 
**vendor_id_number** | **string[]** | the vendor&#39;s identification number for this title (repeatable parameter) | 
**selector** | **string[]** | a free text note identifying the selector of the item (repeatable parameter) | 
**vendor_account** | **string[]** | the vendor account number (repeatable parameter) | 
**currency_code** | **string** | the foreign currency code | [optional] 
**identity** | **string[]** | a free text note, used to distinguish between order records (repeatable parameter) | 
**ship_to** | **string[]** | the library address to which the vendor should ship materials (repeatable parameter) | 
**requestor** | **string[]** | the requestor (repeatable parameter) | 
**old_order_number** | **string[]** | the old order number (repeatable parameter) | 
**paid_note** | **string[]** | the paid note (repeatable parameter) | 
**vendor_address** | **string[]** | the vendor address (repeatable parameter) | 
**custom_var_field1** | **string[]** | custom var field 1 (repeatable parameter) | 
**custom_var_field2** | **string[]** | custom var field 2 (repeatable parameter) | 
**custom_var_field3** | **string[]** | custom var field 3 (repeatable parameter) | 
**custom_var_field4** | **string[]** | custom var field 4 (repeatable parameter) | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


