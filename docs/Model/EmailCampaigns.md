# EmailCampaigns

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag** | **string** | Tag of the campaign | [optional] 
**sender** | [**\Swagger\Client\Model\EmailCampaignsSender**](EmailCampaignsSender.md) |  | [optional] 
**name** | **string** | Name of the campaign | 
**html_content** | **string** | Mandatory if htmlUrl is empty. Body of the message (HTML) | [optional] 
**html_url** | **string** | Mandatory if htmlContent is empty. Url to the message (HTML) | [optional] 
**scheduled_at** | **string** | Sending date and time (YYYY-MM-DD HH:mm:ss) | [optional] 
**subject** | **string** | Subject of the campaign | 
**reply_to** | **string** | Email on which the campaign recipients will be able to reply to | [optional] 
**to_field** | **string** | To personalize the «To» Field, e.g. if you want to include the first name and last name of your recipient, use [FNAME] [LNAME]. These attributes must already exist in your contact database | [optional] 
**recipients** | [**\Swagger\Client\Model\EmailCampaignsRecipients**](EmailCampaignsRecipients.md) |  | [optional] 
**attachment_url** | **string** | Absolute url of the attachment (no local file). Extensions allowed xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff and rtf | [optional] 
**inline_image_activation** | **bool** | Use true to embedded the images in your email. Final size of the email should be less than 4MB. Campaigns with embedded images can not be sent to more than 5000 contacts | [optional] [default to false]
**mirror_active** | **bool** | Use true to enable the mirror link | [optional] 
**recurring** | **bool** | For trigger campagins use false to make sure a contact receives the same campaign only once | [optional] [default to false]
**type** | **string** | Type of the campaign | 
**footer** | **string** | Footer of the email campaign | [optional] 
**header** | **string** | Header of the email campaign | [optional] 
**utm_campaign** | **string** | Customize the utm_campaign value. If this field is empty, the campaign name will be used. Only alphanumeric characters and spaces are allowed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


