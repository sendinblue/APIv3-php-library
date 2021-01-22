# CreateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the user. Mandatory if \"SMS\" field is not passed in \"attributes\" parameter. Mobile Number in \"SMS\" field should be passed with proper country code. For example {&#39;SMS&#39;:&#39;+91xxxxxxxxxx&#39;} or {&#39;SMS&#39;:&#39;0091xxxxxxxxxx&#39;} | [optional] 
**attributes** | **object** | Pass the set of attributes and their values. These attributes must be present in your SendinBlue account. For eg. &#x60;{\"FNAME\":\"Elly\", \"LNAME\":\"Roger\"}&#x60; | [optional] 
**emailBlacklisted** | **bool** | Set this field to blacklist the contact for emails (emailBlacklisted = true) | [optional] 
**smsBlacklisted** | **bool** | Set this field to blacklist the contact for SMS (smsBlacklisted = true) | [optional] 
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional] 
**updateEnabled** | **bool** | Facilitate to update the existing contact in the same request (updateEnabled = true) | [optional] [default to false]
**smtpBlacklistSender** | **string[]** | transactional email forbidden sender for contact. Use only for email Contact ( only available if updateEnabled = true ) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


