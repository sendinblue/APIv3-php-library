# GetInboundEmailEventsByUuid

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receivedAt** | [**\DateTime**] | Date when email was received on SMTP relay | [optional] 
**deliveredAt** | [**\DateTime**] | Date when email was delivered successfully to client’s webhook | [optional] 
**recipient** | **string** | Recipient’s email address | [optional] 
**sender** | **string** | Sender’s email address | [optional] 
**messageId** | **string** | Value of the Message-ID header. This will be present only after the processing is done. | [optional] 
**subject** | **string** | Value of the Subject header. This will be present only after the processing is done. | [optional] 
**attachments** | [**\SendinBlue\Client\Model\GetInboundEmailEventsByUuidAttachments[]**](GetInboundEmailEventsByUuidAttachments.md) | List of attachments of the email. This will be present only after the processing is done. | [optional] 
**logs** | [**\SendinBlue\Client\Model\GetInboundEmailEventsByUuidLogs[]**](GetInboundEmailEventsByUuidLogs.md) | List of events/logs that describe the lifecycle of the email on SIB platform | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


