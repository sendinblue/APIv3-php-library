# InlineResponse2008Campaigns

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the campaign | 
**name** | **string** | Name of the campaign | 
**subject** | **string** | Subject of the campaign | 
**type** | **string** | Type of campaign | 
**status** | **string** | Status of the campaign | 
**scheduled_at** | **string** | Date on which campaign is scheduled | 
**test_sent** | **bool** | Retrieved the status of test email sending. (true&#x3D;Test email has been sent  false&#x3D;Test email has not been sent) | 
**header** | **string** | Header of the campaign | 
**footer** | **string** | Footer of the campaign | 
**sender** | [**\Swagger\Client\Model\InlineResponse2008Sender**](InlineResponse2008Sender.md) |  | [optional] 
**reply_to** | **string** | Email defined as the \&quot;Reply to\&quot; of the campaign | 
**to_field** | **string** | Customisation of the \&quot;to\&quot; field of the campaign | 
**html_content** | **string** | HTML content of the campaign | 
**share_link** | **string** | Link to share the campaign on social medias | 
**tag** | **string** | Tag of the campaign | 
**created_at** | **string** | Creation date of the campaign | 
**modified_at** | **string** | Date of last modification of the campaign | 
**inline_image_activation** | **bool** | Status of inline image. inlineImageActivation &#x3D; false means image can’t be embedded, &amp; inlineImageActivation &#x3D; true means image can be embedded, in the email. | [optional] 
**mirror_active** | **bool** | Status of mirror links in campaign. mirrorActive &#x3D; false means mirror links are deactivated, &amp; mirrorActive &#x3D; true means mirror links are activated, in the campaign | [optional] 
**recurring** | **bool** | FOR TRIGGER ONLY ! Type of trigger campaign.recurring &#x3D; false means contact can receive the same Trigger campaign only once, &amp; recurring &#x3D; true means contact can receive the same Trigger campaign several times | [optional] 
**recipients** | [**\Swagger\Client\Model\InlineResponse2008Recipients**](InlineResponse2008Recipients.md) |  | [optional] 
**statistics** | [**\Swagger\Client\Model\InlineResponse2008Statistics**](InlineResponse2008Statistics.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


