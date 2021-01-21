# SendSmtpEmailMessageVersions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | [**\SendinBlue\Client\Model\SendSmtpEmailTo1[]**](SendSmtpEmailTo1.md) | List of email addresses and names (_optional_) of the recipients. For example, [{\"name\":\"Jimmy\", \"email\":\"jimmy98@example.com\"}, {\"name\":\"Joe\", \"email\":\"joe@example.com\"}] | 
**params** | **map[string,object]** | Pass the set of attributes to customize the template. For example, {\"FNAME\":\"Joe\", \"LNAME\":\"Doe\"}. It&#39;s considered only if template is in New Template Language format. | [optional] 
**bcc** | [**\SendinBlue\Client\Model\SendSmtpEmailBcc[]**](SendSmtpEmailBcc.md) | List of email addresses and names (optional) of the recipients in bcc | [optional] 
**cc** | [**\SendinBlue\Client\Model\SendSmtpEmailCc[]**](SendSmtpEmailCc.md) | List of email addresses and names (optional) of the recipients in cc | [optional] 
**replyTo** | [**\SendinBlue\Client\Model\SendSmtpEmailReplyTo1**](SendSmtpEmailReplyTo1.md) |  | [optional] 
**subject** | **string** | Custom subject specific to message version | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


