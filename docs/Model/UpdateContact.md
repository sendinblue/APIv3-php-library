# UpdateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | **object** | Pass the set of attributes to be updated. These attributes must be present in your account. For eg. {&#39;FNAME&#39;:&#39;Ellie&#39;, &#39;LNAME&#39;:&#39;Roger&#39;} | [optional] 
**emailBlacklisted** | **bool** | Set/unset this field to blacklist/allow the contact for emails (emailBlacklisted &#x3D; true) | [optional] 
**smsBlacklisted** | **bool** | Set/unset this field to blacklist/allow the contact for SMS (smsBlacklisted &#x3D; true) | [optional] 
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional] 
**unlinkListIds** | **int[]** | Ids of the lists to remove the contact from | [optional] 
**smtpBlacklistSender** | **string[]** | SMTP forbidden sender for contact. Use only for email Contact | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


