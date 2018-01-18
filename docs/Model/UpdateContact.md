# UpdateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | **map[string,string]** |  | [optional] 
**emailBlacklisted** | **bool** | Blacklist the contact for emails (emailBlacklisted &#x3D; true) | [optional] 
**smsBlacklisted** | **bool** | Blacklist the contact for SMS (smsBlacklisted &#x3D; true) | [optional] 
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional] 
**unlinkListIds** | **int[]** | Ids of the lists to remove the contact from | [optional] 
**smtpBlacklistSender** | **string[]** | SMTP forbidden sender for contact. Use only for email Contact | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


