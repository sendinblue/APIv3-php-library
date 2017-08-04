# SmtpTemplate1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag** | **string** | Tag of the template | [optional] 
**sender** | [**\Swagger\Client\Model\SmtptemplatestemplateIdSender**](SmtptemplatestemplateIdSender.md) |  | [optional] 
**template_name** | **string** | Name of the template | [optional] 
**html_content** | **string** | Required if htmlUrl is empty. Body of the message (HTML must have more than 10 characters) | [optional] 
**html_url** | **string** | Required if htmlContent is empty. URL to the body of the email (HTML) | [optional] 
**subject** | **string** | Subject of the email | [optional] 
**reply_to** | **string** | Email on which campaign recipients will be able to reply to | [optional] 
**to_field** | **string** | To personalize the «To» Field, e.g. if you want to include the first name and last name of your recipient, add [FNAME] [LNAME]. These attributes must already exist in contacts database | [optional] 
**attachment_url** | **string** | Absolute url of the attachment (no local file). Extension allowed: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff and rtf | [optional] 
**is_active** | **bool** | Status of the template. isActive &#x3D; false means template is inactive, isActive &#x3D; true means template is active | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


