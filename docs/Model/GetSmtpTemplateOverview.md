# GetSmtpTemplateOverview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the template | 
**name** | **string** | Name of the template | 
**subject** | **string** | Subject of the template | 
**isActive** | **bool** | Status of template (true=active, false=inactive) | 
**testSent** | **bool** | Status of test sending for the template (true=test email has been sent, false=test email has not been sent) | 
**sender** | [**\SendinBlue\Client\Model\GetSmtpTemplateOverviewSender**](GetSmtpTemplateOverviewSender.md) |  | 
**replyTo** | **string** | Email defined as the \"Reply to\" for the template | 
**toField** | **string** | Customisation of the \"to\" field for the template | 
**tag** | **string** | Tag of the template | 
**htmlContent** | **string** | HTML content of the template | 
**createdAt** | **string** | Creation UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**modifiedAt** | **string** | Last modification UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**doiTemplate** | **bool** | It is true if template is a valid Double opt-in (DOI) template, otherwise it is false. This field will be available only in case of single template detail call. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


