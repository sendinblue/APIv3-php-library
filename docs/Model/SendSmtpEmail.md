# SendSmtpEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | [**\SendinBlue\Client\Model\SendSmtpEmailSender**](SendSmtpEmailSender.md) |  | [optional] 
**to** | [**\SendinBlue\Client\Model\SendSmtpEmailTo[]**](SendSmtpEmailTo.md) | Email addresses and names of the recipients | 
**bcc** | [**\SendinBlue\Client\Model\SendSmtpEmailBcc[]**](SendSmtpEmailBcc.md) | Email addresses and names of the recipients in bcc | [optional] 
**cc** | [**\SendinBlue\Client\Model\SendSmtpEmailCc[]**](SendSmtpEmailCc.md) | Email addresses and names of the recipients in cc | [optional] 
**htmlContent** | **string** | HTML body of the message ( Mandatory if &#39;templateId&#39; is not passed, ignored if &#39;templateId&#39; is passed ) | [optional] 
**textContent** | **string** | Plain Text body of the message ( Ignored if &#39;templateId&#39; is passed ) | [optional] 
**subject** | **string** | Subject of the message. Mandatory if &#39;templateId&#39; is not passed | [optional] 
**replyTo** | [**\SendinBlue\Client\Model\SendSmtpEmailReplyTo**](SendSmtpEmailReplyTo.md) |  | [optional] 
**attachment** | [**\SendinBlue\Client\Model\SendSmtpEmailAttachment[]**](SendSmtpEmailAttachment.md) | Pass the absolute URL (no local file) or the base64 content of the attachment. Name can be used in both cases to define the attachment name. It is mandatory in case of content. Extension allowed: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps ( Ignored if &#39;templateId&#39; is passed ) | [optional] 
**headers** | **map[string,string]** |  | [optional] 
**templateId** | **int** | Id of the template | [optional] 
**params** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


