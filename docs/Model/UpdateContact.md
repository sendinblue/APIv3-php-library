# UpdateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | **object** | Pass the set of attributes to be updated. These attributes must be present in your account. To update existing email address of a contact with the new one please pass EMAIL in attributes. For example, &#x60;{ \"EMAIL\":\"newemail@domain.com\", \"FNAME\":\"Ellie\", \"LNAME\":\"Roger\"}&#x60;. Keep in mind transactional attributes can be updated the same way as normal attributes. Mobile Number in \"SMS\" field should be passed with proper country code. For example {\"SMS\":\"+91xxxxxxxxxx\"} or {\"SMS\":\"0091xxxxxxxxxx\"} | [optional] 
**emailBlacklisted** | **bool** | Set/unset this field to blacklist/allow the contact for emails (emailBlacklisted &#x3D; true) | [optional] 
**smsBlacklisted** | **bool** | Set/unset this field to blacklist/allow the contact for SMS (smsBlacklisted &#x3D; true) | [optional] 
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional] 
**unlinkListIds** | **int[]** | Ids of the lists to remove the contact from | [optional] 
**smtpBlacklistSender** | **string[]** | transactional email forbidden sender for contact. Use only for email Contact | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


