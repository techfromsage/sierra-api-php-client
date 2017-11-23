# TokenInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**patron_id** | **string** | the associated patron ID (applies only to authorization code grant sessions) | [optional] 
**key_id** | **string** | the key ID | 
**grant_type** | **string** | the grant type, i.e., authorization code grant or client credentials grant | [optional] 
**authorization_scheme** | **string** | the authorization scheme, such as &#39;Bearer&#39; or &#39;Basic&#39; | 
**expires_in** | **int** | the remaining time (in seconds) after which the token expires | 
**roles** | [**\SierraApi\Model\TokenInfoRole[]**](TokenInfoRole.md) | the user role associated with the token | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


