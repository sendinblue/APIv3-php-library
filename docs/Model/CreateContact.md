# CreateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the user. Mandatory if &#x60;attributes.sms&#x60; is not passed | [optional] 
**attributes** | **object** | Values of the attributes to fill. The attributes must exist in you contact database | [optional] 
**emailBlacklisted** | **bool** | Blacklist the contact for emails (emailBlacklisted &#x3D; true) | [optional] 
**smsBlacklisted** | **bool** | Blacklist the contact for SMS (smsBlacklisted &#x3D; true) | [optional] 
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional] 
**updateEnabled** | **bool** | Facilitate to update existing contact in same request (updateEnabled &#x3D; true) | [optional] [default to false]
**smtpBlacklistSender** | **string[]** | SMTP forbidden sender for contact. Use only for email Contact ( only available if updateEnabled &#x3D; true ) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


