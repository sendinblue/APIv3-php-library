# GetEmailCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the campaign | 
**name** | **string** | Name of the campaign | 
**subject** | **string** | Subject of the campaign. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;false&#x60; | [optional] 
**type** | **string** | Type of campaign | 
**status** | **string** | Status of the campaign | 
**scheduledAt** | [**\DateTime**] | UTC date-time on which campaign is scheduled (YYYY-MM-DDTHH:mm:ss.SSSZ) | [optional] 
**abTesting** | **bool** | Status of A/B Test for the campaign. abTesting = false means it is disabled, &amp; abTesting = true means it is enabled. | [optional] 
**subjectA** | **string** | Subject A of the ab-test campaign. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**subjectB** | **string** | Subject B of the ab-test campaign. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**splitRule** | **int** | The size of your ab-test groups. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**winnerCriteria** | **string** | Criteria for the winning version. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**winnerDelay** | **int** | The duration of the test in hours at the end of which the winning version will be sent. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**sendAtBestTime** | **bool** | It is true if you have chosen to send your campaign at best time, otherwise it is false | [optional] 
**testSent** | **bool** | Retrieved the status of test email sending. (true=Test email has been sent  false=Test email has not been sent) | 
**header** | **string** | Header of the campaign | 
**footer** | **string** | Footer of the campaign | 
**sender** | [**\SendinBlue\Client\Model\GetExtendedCampaignOverviewSender**](GetExtendedCampaignOverviewSender.md) |  | 
**replyTo** | **string** | Email defined as the \"Reply to\" of the campaign | 
**toField** | **string** | Customisation of the \"to\" field of the campaign | [optional] 
**htmlContent** | **string** | HTML content of the campaign | 
**shareLink** | **string** | Link to share the campaign on social medias | [optional] 
**tag** | **string** | Tag of the campaign | [optional] 
**createdAt** | [**\DateTime**] | Creation UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**modifiedAt** | [**\DateTime**] | UTC date-time of last modification of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**inlineImageActivation** | **bool** | Status of inline image. inlineImageActivation = false means image can’t be embedded, &amp; inlineImageActivation = true means image can be embedded, in the email. | [optional] 
**mirrorActive** | **bool** | Status of mirror links in campaign. mirrorActive = false means mirror links are deactivated, &amp; mirrorActive = true means mirror links are activated, in the campaign | [optional] 
**recurring** | **bool** | FOR TRIGGER ONLY ! Type of trigger campaign.recurring = false means contact can receive the same Trigger campaign only once, &amp; recurring = true means contact can receive the same Trigger campaign several times | [optional] 
**sentDate** | [**\DateTime**] | Sent UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ). Only available if &#39;status&#39; of the campaign is &#39;sent&#39; | [optional] 
**returnBounce** | **int** | Total number of non-delivered campaigns for a particular campaign id. | [optional] 
**recipients** | **object** |  | 
**statistics** | **object** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


