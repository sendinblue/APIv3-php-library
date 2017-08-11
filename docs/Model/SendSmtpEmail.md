# SendSmtpEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | [**\Swagger\Client\Model\SmtpemailSender**](SmtpemailSender.md) |  | [optional] 
**to** | [**\Swagger\Client\Model\SmtpemailTo[]**](SmtpemailTo.md) | Email addresses and names of the recipients | 
**bcc** | [**\Swagger\Client\Model\SmtpemailBcc[]**](SmtpemailBcc.md) | Email addresses and names of the recipients in bcc | [optional] 
**cc** | [**\Swagger\Client\Model\SmtpemailCc[]**](SmtpemailCc.md) | Email addresses and names of the recipients in cc | [optional] 
**html_content** | **string** | HTML body of the message | 
**text_content** | **string** | Plain Text body of the message | [optional] 
**subject** | **string** | Subject of the message | 
**reply_to** | [**\Swagger\Client\Model\SmtpemailReplyTo**](SmtpemailReplyTo.md) |  | [optional] 
**attachment** | [**\Swagger\Client\Model\SmtpemailAttachment[]**](SmtpemailAttachment.md) | Pass the absolute URL (no local file) or the base64 content of the attachment. Name can be used in both cases to define the attachment name. It is mandatory in case of content. Extension allowed: gif, png, bmp, cgm, jpg, jpeg, tif, tiff, rtf, txt, css, shtml, html, htm, csv, zip, pdf, xml, ods, doc, docx, docm, ics, xls, xlsx, ppt, tar, and ez | [optional] 
**headers** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


