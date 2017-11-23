# DbSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor** | **string** | the database vendor | [optional] 
**host** | **string** | the database host | [optional] 
**port** | **int** | the database port | [optional] 
**database** | **string** | the database name | [optional] 
**options** | **string** | the database options | [optional] 
**username** | **string** | the database username | [optional] 
**password** | **string** | the database password | [optional] 
**min_pool_size** | **int** | the database minimum pool size | [optional] 
**max_pool_size** | **int** | the database maximum pool size | [optional] 
**pool_increment** | **int** | the database pool increment | [optional] 
**test_connection_on_checkout** | **bool** | the database connection pool on every connection checkout to verify that the connection is valid | [optional] 
**test_connection_on_checkin** | **bool** | the database connection pool an operation will be performed asynchronously at every connection checkin to verify that the connection is valid | [optional] 
**idle_connection_test_period** | **int** | the database connection pool if this is a number greater than 0, c3p0 will test all idle, pooled but unchecked-out connections, every this number of seconds. | [optional] 
**use_java_melody** | **bool** | whether the database uses java melody | [optional] 
**path** | **string** | the database path | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


