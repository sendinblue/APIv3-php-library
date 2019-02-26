# CreateSmtpTemplate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag** | **string** | Tag of the template | [optional] 
**sender** | [**\SendinBlue\Client\Model\CreateSmtpTemplateSender**](CreateSmtpTemplateSender.md) |  | 
**templateName** | **string** | Name of the template | 
**htmlContent** | **string** | Body of the message (HTML version). The field must have more than 10 characters. REQUIRED if htmlUrl is empty | [optional] 
**htmlUrl** | **string** | Url which contents the body of the email message. REQUIRED if htmlContent is empty | [optional] 
**subject** | **string** | Subject of the template | 
**replyTo** | **string** | Email on which campaign recipients will be able to reply to | [optional] 
**toField** | **string** | To personalize the «To» Field. If you want to include the first name and last name of your recipient, add &#x60;{FNAME} {LNAME}&#x60;. These contact attributes must already exist in your SendinBlue account. If input parameter &#39;params&#39; used please use &#x60;{{contact.FNAME}} {{contact.LNAME}}&#x60; for personalization | [optional] 
**attachmentUrl** | **string** | Absolute url of the attachment (no local file). Extension allowed: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps | [optional] 
**isActive** | **bool** | Status of template. isActive &#x3D; true means template is active and isActive &#x3D; false means template is inactive | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


