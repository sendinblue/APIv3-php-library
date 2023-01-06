# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of the order. | 
**createdAt** | **string** | Event occurrence UTC date-time (YYYY-MM-DDTHH:mm:ssZ), when order is actually created. | 
**updatedAt** | **string** | Event updated UTC date-time (YYYY-MM-DDTHH:mm:ssZ), when the status of the order is actually changed/updated. | 
**status** | **string** | State of the order. | 
**amount** | **float** | Total amount of the order, including all shipping expenses, tax and the price of items. | 
**products** | [**\SendinBlue\Client\Model\OrderProducts[]**](OrderProducts.md) |  | 
**email** | **string** | Email of the contact, Mandatory if \"phone\" field is not passed in \"billing\" parameter. | [optional] 
**billing** | [**\SendinBlue\Client\Model\OrderBilling**](OrderBilling.md) |  | [optional] 
**coupons** | **string[]** | Coupons applied to the order. Stored case insensitive. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


