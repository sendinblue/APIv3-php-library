# SendSmtpEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | [**\SendinBlue\Client\Model\SendSmtpEmailSender**](SendSmtpEmailSender.md) |  | [optional] 
**to** | [**\SendinBlue\Client\Model\SendSmtpEmailTo[]**](SendSmtpEmailTo.md) | Mandatory if messageVersions are not passed, ignored if messageVersions are passed. List of email addresses and names (optional) of the recipients. For example, [{\"name\":\"Jimmy\", \"email\":\"jimmy98@example.com\"}, {\"name\":\"Joe\", \"email\":\"joe@example.com\"}] | [optional] 
**bcc** | [**\SendinBlue\Client\Model\SendSmtpEmailBcc[]**](SendSmtpEmailBcc.md) | List of email addresses and names (optional) of the recipients in bcc | [optional] 
**cc** | [**\SendinBlue\Client\Model\SendSmtpEmailCc[]**](SendSmtpEmailCc.md) | List of email addresses and names (optional) of the recipients in cc | [optional] 
**htmlContent** | **string** | HTML body of the message ( Mandatory if &#39;templateId&#39; is not passed, ignored if &#39;templateId&#39; is passed ) | [optional] 
**textContent** | **string** | Plain Text body of the message ( Ignored if &#39;templateId&#39; is passed ) | [optional] 
**subject** | **string** | Subject of the message. Mandatory if &#39;templateId&#39; is not passed | [optional] 
**replyTo** | [**\SendinBlue\Client\Model\SendSmtpEmailReplyTo**](SendSmtpEmailReplyTo.md) |  | [optional] 
**attachment** | [**\SendinBlue\Client\Model\SendSmtpEmailAttachment[]**](SendSmtpEmailAttachment.md) | Pass the absolute URL (no local file) or the base64 content of the attachment along with the attachment name (Mandatory if attachment content is passed). For example, &#x60;[{\"url\":\"https://attachment.domain.com/myAttachmentFromUrl.jpg\", \"name\":\"myAttachmentFromUrl.jpg\"}, {\"content\":\"base64 example content\", \"name\":\"myAttachmentFromBase64.jpg\"}]&#x60;. Allowed extensions for attachment file: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub, eps, odt, mp3, m4a, m4v, wma, ogg, flac, wav, aif, aifc, aiff, mp4, mov, avi, mkv, mpeg, mpg and wmv ( If &#39;templateId&#39; is passed and is in New Template Language format then both attachment url and content are accepted. If template is in Old template Language format, then &#39;attachment&#39; is ignored ) | [optional] 
**headers** | **object** | Pass the set of custom headers (not the standard headers) that shall be sent along the mail headers in the original email. &#39;sender.ip&#39; header can be set (only for dedicated ip users) to mention the IP to be used for sending transactional emails. Headers are allowed in &#x60;This-Case-Only&#x60; (i.e. words separated by hyphen with first letter of each word in capital letter), they will be converted to such case styling if not in this format in the request payload. For example, &#x60;{\"sender.ip\":\"1.2.3.4\", \"X-Mailin-custom\":\"some_custom_header\"}&#x60;. | [optional] 
**templateId** | **int** | Id of the template. Mandatory if messageVersions are passed | [optional] 
**params** | **object** | Pass the set of attributes to customize the template. For example, {\"FNAME\":\"Joe\", \"LNAME\":\"Doe\"}. It&#39;s considered only if template is in New Template Language format. | [optional] 
**messageVersions** | [**\SendinBlue\Client\Model\SendSmtpEmailMessageVersions[]**](SendSmtpEmailMessageVersions.md) | You can customize and send out multiple versions of a templateId. Some global parameters such as **to(mandatory), bcc, cc, replyTo, subject** can also be customized specific to each version. The size of individual params in all the messageVersions shall not exceed 100 KB limit and that of cumulative params shall not exceed 1000 KB. This feature is currently in its beta version. You can follow this **step-by-step guide** on how to use **messageVersions** to batch send emails - https://developers.sendinblue.com/docs/batch-send-transactional-emails | [optional] 
**tags** | **string[]** | Tag your emails to find them more easily | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


