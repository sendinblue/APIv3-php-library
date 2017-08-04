# SendEmail1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_to** | **string[]** | Email addresses of the recipients | 
**email_bcc** | **string[]** | Email addresses of the recipients in bcc | [optional] 
**email_cc** | **string[]** | Email addresses of the recipients in cc | [optional] 
**reply_to** | **string** | Email on which campaign recipients will be able to reply to | [optional] 
**attachment** | [**\Swagger\Client\Model\SmtptemplatestemplateIdsendAttachment[]**](SmtptemplatestemplateIdsendAttachment.md) | Pass the absolute URL (no local file) or the base64 content of the attachment. Name can be used in both cases to define the attachment name. It is mandatory in case of content. Extension allowed: gif, png, bmp, cgm, jpg, jpeg, tif, tiff, rtf, txt, css, shtml, html, htm, csv, zip, pdf, xml, ods, doc, docx, docm, ics, xls, xlsx, ppt, tar, and ez | [optional] 
**headers** | **map[string,string]** |  | [optional] 
**attributes** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


