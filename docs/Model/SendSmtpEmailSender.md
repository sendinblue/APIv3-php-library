# SendSmtpEmailSender

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the sender from which the emails will be sent. Maximum allowed characters are 70. Applicable only when email is passed. | [optional] 
**email** | **string** | Email of the sender from which the emails will be sent. Mandatory if sender id is not passed. | [optional] 
**id** | **int** | Id of the sender from which the emails will be sent. In order to select a sender with specific pool of IP’s, dedicated ip users shall pass id (instead of email). Mandatory if email is not passed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


