# SendSmtpEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | [**\SendinBlue\Client\Model\SendSmtpEmailSender**](SendSmtpEmailSender.md) |  | [optional] 
**to** | [**\SendinBlue\Client\Model\SendSmtpEmailTo[]**](SendSmtpEmailTo.md) | Email addresses and names of the recipients | 
**bcc** | [**\SendinBlue\Client\Model\SendSmtpEmailBcc[]**](SendSmtpEmailBcc.md) | Email addresses and names of the recipients in bcc | [optional] 
**cc** | [**\SendinBlue\Client\Model\SendSmtpEmailCc[]**](SendSmtpEmailCc.md) | Email addresses and names of the recipients in cc | [optional] 
**htmlContent** | **string** | HTML body of the message | 
**textContent** | **string** | Plain Text body of the message | [optional] 
**subject** | **string** | Subject of the message | 
**replyTo** | [**\SendinBlue\Client\Model\SendSmtpEmailReplyTo**](SendSmtpEmailReplyTo.md) |  | [optional] 
**attachment** | [**\SendinBlue\Client\Model\SendSmtpEmailAttachment[]**](SendSmtpEmailAttachment.md) | Pass the absolute URL (no local file) or the base64 content of the attachment. Name can be used in both cases to define the attachment name. It is mandatory in case of content. Extension allowed: gif, png, bmp, cgm, jpg, jpeg, tif, tiff, rtf, txt, css, shtml, html, htm, csv, zip, pdf, xml, ods, doc, docx, docm, ics, xls, xlsx, ppt, tar, and ez | [optional] 
**headers** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


