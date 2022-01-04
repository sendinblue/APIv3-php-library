# UpdateSmsCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the campaign | [optional] 
**sender** | **string** | Name of the sender. **The number of characters is limited to 11 for alphanumeric characters and 15 for numeric characters** | [optional] 
**content** | **string** | Content of the message. The maximum characters used per SMS is 160, if used more than that, it will be counted as more than one SMS | [optional] 
**recipients** | [**\SendinBlue\Client\Model\CreateSmsCampaignRecipients**](CreateSmsCampaignRecipients.md) |  | [optional] 
**scheduledAt** | **string** | UTC date-time on which the campaign has to run (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result. | [optional] 
**unicodeEnabled** | **bool** | Format of the message. It indicates whether the content should be treated as unicode or not. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


