# ConversationsMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Message ID. It can be used for further manipulations with the message. | [optional] 
**type** | **string** | &#x60;\"agent\"&#x60; for agents’ messages, &#x60;\"visitor\"&#x60; for visitors’ messages. | [optional] 
**text** | **string** | Message text or name of the attached file | [optional] 
**visitorId** | **string** | visitor’s ID | [optional] 
**agentId** | **string** | ID of the agent on whose behalf the message was sent (only in messages sent by an agent). | [optional] 
**agentName** | **string** | Agent’s name as displayed to the visitor. Only in the messages sent by an agent. | [optional] 
**createdAt** | **int** | Timestamp in milliseconds. | [optional] 
**isPushed** | **bool** | &#x60;true&#x60; for pushed messages | [optional] 
**receivedFrom** | **string** | In two-way integrations, messages sent via REST API can be marked with receivedFrom property and then filtered out when received in a webhook to avoid infinite loop. | [optional] 
**file** | [**\SendinBlue\Client\Model\ConversationsMessageFile**](ConversationsMessageFile.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


