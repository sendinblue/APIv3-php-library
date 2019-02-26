# CreateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the user. Mandatory if \&quot;sms\&quot; field is not passed in \&quot;attributes\&quot; parameter&#39; | [optional] 
**attributes** | **object** | Pass the set of attributes and their values. These attributes must be present in your SendinBlue account. For example, &#x60;{\&quot;FNAME\&quot;:\&quot;Elly\&quot;, \&quot;LNAME\&quot;:\&quot;Roger\&quot;}&#x60; | [optional] 
**emailBlacklisted** | **bool** | Set this field to blacklist the contact for emails (emailBlacklisted &#x3D; true) | [optional] 
**smsBlacklisted** | **bool** | Set this field to blacklist the contact for SMS (smsBlacklisted &#x3D; true) | [optional] 
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional] 
**updateEnabled** | **bool** | Facilitate to update the existing contact in the same request (updateEnabled &#x3D; true) | [optional] [default to false]
**smtpBlacklistSender** | **string[]** | SMTP forbidden sender for contact. Use only for email Contact ( only available if updateEnabled &#x3D; true ) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


