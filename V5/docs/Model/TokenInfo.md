# TokenInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**patronId** | **string** | the associated patron ID (applies only to authorization code grant sessions) | [optional] 
**keyId** | **string** | the key ID | 
**grantType** | **string** | the grant type, i.e., authorization code grant or client credentials grant | [optional] 
**authorizationScheme** | **string** | the authorization scheme, such as &#39;Bearer&#39; or &#39;Basic&#39; | 
**expiresIn** | **int** | the remaining time (in seconds) after which the token expires | 
**roles** | [**\III\Sierra\V5\Models\TokenInfoRole[]**](TokenInfoRole.md) | the user role associated with the token | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


