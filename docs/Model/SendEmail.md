# SendEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emailTo** | **string[]** | Email addresses of the recipients | 
**emailBcc** | **string[]** | Email addresses of the recipients in bcc | [optional] 
**emailCc** | **string[]** | Email addresses of the recipients in cc | [optional] 
**replyTo** | **string** | Email on which campaign recipients will be able to reply to | [optional] 
**attachmentUrl** | **string** | Absolute url of the attachment (no local file). Extension allowed: gif, png, bmp, cgm, jpg, jpeg, tif, tiff, rtf, txt, css, shtml, html, htm, csv, zip, pdf, xml, ods, doc, docx, docm, ics, xls, xlsx, ppt, tar, and ez | [optional] 
**attachment** | [**\Sendinblue\Client\Model\SendEmailAttachment[]**](SendEmailAttachment.md) | Pass the base64 content of the attachment. Extension allowed: gif, png, bmp, cgm, jpg, jpeg, tif, tiff, rtf, txt, css, shtml, html, htm, csv, zip, pdf, xml, ods, doc, docx, docm, ics, xls, xlsx, ppt, tar, and ez | [optional] 
**headers** | **map[string,string]** |  | [optional] 
**attributes** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


