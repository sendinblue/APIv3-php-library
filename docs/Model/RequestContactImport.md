# RequestContactImport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fileUrl** | **string** | Mandatory if fileBody is not defined. URL of the file to be imported (no local file). Possible file formats: .txt, .csv | [optional] 
**fileBody** | **string** | Mandatory if fileUrl is not defined. CSV content to be imported. Use semicolon to separate multiple attributes | [optional] 
**listIds** | **int[]** | Mandatory if newList is not defined. Ids of the lists in which the contacts shall be imported. For example, [2, 4, 7]. | [optional] 
**notifyUrl** | **string** | URL that will be called once the export process is finished | [optional] 
**newList** | [**\SendinBlue\Client\Model\RequestContactImportNewList**](RequestContactImportNewList.md) |  | [optional] 
**emailBlacklist** | **bool** | To blacklist all the contacts for email | [optional] [default to false]
**smsBlacklist** | **bool** | To blacklist all the contacts for sms | [optional] [default to false]
**updateExistingContacts** | **bool** | To facilitate the choice to update the existing contacts | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


