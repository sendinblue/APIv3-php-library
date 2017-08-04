# UpdateSmsCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the campaign | [optional] 
**sender** | **string** | Name of the sender. The number of characters is limited to 11 | [optional] 
**content** | **string** | Content of the message. The maximum characters used per SMS is 160, if used more than that, it will be counted as more than one SMS | [optional] 
**recipients** | [**\Swagger\Client\Model\SmsCampaignsRecipients**](SmsCampaignsRecipients.md) |  | [optional] 
**scheduled_at** | **string** | Date and time on which the campaign has to run | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


