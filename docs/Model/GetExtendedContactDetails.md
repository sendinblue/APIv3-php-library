# GetExtendedContactDetails
## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the contact for which you requested the details | 
**id** | **int** | ID of the contact for which you requested the details | 
**emailBlacklisted** | **bool** | Blacklist status for email campaigns (true&#x3D;blacklisted, false&#x3D;not blacklisted) | 
**smsBlacklisted** | **bool** | Blacklist status for SMS campaigns (true&#x3D;blacklisted, false&#x3D;not blacklisted) | 
**createdAt** | **string** | Creation UTC date-time of the contact (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**modifiedAt** | **string** | Last modification UTC date-time of the contact (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**listIds** | **int[]** |  | 
**listUnsubscribed** | **int[]** |  | [optional] 
**attributes** | **object** | Set of attributes of the contact | 
**statistics** | [**\SendinBlue\Client\Model\GetExtendedContactDetailsStatistics**](GetExtendedContactDetailsStatistics.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)