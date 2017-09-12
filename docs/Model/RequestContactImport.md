# RequestContactImport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fileUrl** | **string** | Mandatory if fileBody not defined. URL of the file to be imported (no local file). Possible file types: .txt, .csv | [optional] 
**fileBody** | **string** | Mandatory if fileUrl is not defined. CSV content to be imported. Use semicolon to separate multiple attributes | [optional] 
**listIds** | **int[]** | Manadatory if newList is not defined. Ids of the lists in which to add the contacts | [optional] 
**notifyUrl** | **string** | URL that will be called once the export process is finished | [optional] 
**newList** | [**\SendinBlue\Client\Model\RequestContactImportNewList**](RequestContactImportNewList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


