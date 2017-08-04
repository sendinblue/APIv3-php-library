# CreateSmtpTemplate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag** | **string** | Tag of the template | [optional] 
**sender** | [**\Swagger\Client\Model\SmtptemplatesSender**](SmtptemplatesSender.md) |  | [optional] 
**template_name** | **string** | Name of the template | 
**html_content** | **string** | Body of the message (HTML version). The field must have more than 10 characters. REQUIRED if htmlUrl is empty | [optional] 
**html_url** | **string** | Url which contents the body of the email message. REQUIRED if htmlContent is empty | [optional] 
**subject** | **string** | Subject of the template | 
**reply_to** | **string** | Email on which campaign recipients will be able to reply to | [optional] 
**to_field** | **string** | This is to personalize the «To» Field. If you want to include the first name and last name of your recipient, add [FNAME] [LNAME]. To use the contact attributes here, these must already exist in SendinBlue account | [optional] 
**attachment_url** | **string** | Absolute url of the attachment (no local file). Extensions allowed xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff and rtf | [optional] 
**is_active** | **bool** | Status of template. isActive &#x3D; true means template is active and isActive &#x3D; false means template is inactive | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


