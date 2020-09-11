# RemoveContactFromList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emails** | **string[]** | Required if &#39;all&#39; is false. Emails to remove from a list. You can pass a maximum of 150 emails for removal in one request. | [optional] 
**ids** | **int[]** | Mandatory if Emails are not passed, ignored otherwise. Emails to add to a list. You can pass a maximum of 150 emails for addition in one request. If you need to add the emails in bulk, please prefer /contacts/import api. | [optional] 
**all** | **bool** | Required if none of &#39;emails&#39; or &#39;ids&#39; are passed. Remove all existing contacts from a list.  A process will be created in this scenario. You can fetch the process details to know about the progress | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


