# SendEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emailTo** | **string[]** | Email addresses of the recipients | 
**emailBcc** | **string[]** | Email addresses of the recipients in bcc | [optional] 
**emailCc** | **string[]** | Email addresses of the recipients in cc | [optional] 
**replyTo** | **string** | Email on which campaign recipients will be able to reply to | [optional] 
**attachmentUrl** | **string** | Absolute url of the attachment (no local file). Extension allowed: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps | [optional] 
**attachment** | [**\SendinBlue\Client\Model\SendEmailAttachment[]**](SendEmailAttachment.md) | Pass the base64 content of the attachment. Extension allowed: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps | [optional] 
**headers** | **map[string,string]** |  | [optional] 
**attributes** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


