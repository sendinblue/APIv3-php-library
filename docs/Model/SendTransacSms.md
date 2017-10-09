# SendTransacSms

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | **string** | Name of the sender. Only alphanumeric characters. No more than 11 characters | 
**recipient** | **string** | Mobile number to send SMS with the country code | 
**content** | **string** | Content of the message. If more than 160 characters long, multiple text messages will be sent | 
**type** | **string** | Type of the SMS | [optional] [default to 'transactional']
**tag** | **string** | Tag of the message | [optional] 
**webUrl** | **string** | Webhook to call for each event triggered by the message (delivered etc.) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


