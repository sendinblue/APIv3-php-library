# GetExtendedCampaignOverview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**testSent** | **bool** | Retrieved the status of test email sending. (true&#x3D;Test email has been sent  false&#x3D;Test email has not been sent) | 
**header** | **string** | Header of the campaign | 
**footer** | **string** | Footer of the campaign | 
**sender** | [**\SendinBlue\Client\Model\GetExtendedCampaignOverviewSender**](GetExtendedCampaignOverviewSender.md) |  | 
**replyTo** | **string** | Email defined as the \"Reply to\" of the campaign | 
**toField** | **string** | Customisation of the \"to\" field of the campaign | [optional] 
**htmlContent** | **string** | HTML content of the campaign | 
**shareLink** | **string** | Link to share the campaign on social medias | [optional] 
**tag** | **string** | Tag of the campaign | [optional] 
**createdAt** | **string** | Creation UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**modifiedAt** | **string** | UTC date-time of last modification of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**inlineImageActivation** | **bool** | Status of inline image. inlineImageActivation &#x3D; false means image can’t be embedded, &amp; inlineImageActivation &#x3D; true means image can be embedded, in the email. | [optional] 
**mirrorActive** | **bool** | Status of mirror links in campaign. mirrorActive &#x3D; false means mirror links are deactivated, &amp; mirrorActive &#x3D; true means mirror links are activated, in the campaign | [optional] 
**recurring** | **bool** | FOR TRIGGER ONLY ! Type of trigger campaign.recurring &#x3D; false means contact can receive the same Trigger campaign only once, &amp; recurring &#x3D; true means contact can receive the same Trigger campaign several times | [optional] 
**sentDate** | **string** | Sent UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ). Only available if &#39;status&#39; of the campaign is &#39;sent&#39; | [optional] 
**returnBounce** | **int** | Total number of non-delivered campaigns for a particular campaign id. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


