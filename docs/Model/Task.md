# Task

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstContact** | [**\SendinBlue\Client\Model\Contact**](Contact.md) |  | [optional] 
**id** | **string** | Unique task id | [optional] 
**taskTypeId** | **string** | Id for type of task e.g Call / Email / Meeting etc. | 
**name** | **string** | Name of task | 
**contactsIds** | **int[]** | Contact ids for contacts linked to this task | [optional] 
**contacts** | [**\SendinBlue\Client\Model\Contact[]**](Contact.md) | Contact details for contacts linked to this task | [optional] 
**dealsIds** | **string[]** | Deal ids for deals a task is linked to | [optional] 
**companiesIds** | **string[]** | Companies ids for companies a task is linked to | [optional] 
**assignToId** | **string** | User id to whom task is assigned | [optional] 
**date** | [**\DateTime**] | Task date/time | 
**duration** | **int** | Duration of task | [optional] 
**notes** | **string** | Notes added to a task | [optional] 
**done** | **bool** | Task marked as done | [optional] 
**reminder** | [**\SendinBlue\Client\Model\TaskReminder**](TaskReminder.md) | Task reminder date/time for a task | [optional] 
**createdAt** | [**\DateTime**] | Task created date/time | [optional] 
**updatedAt** | [**\DateTime**] | Task update date/time | [optional] 
**refs** | **object** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


