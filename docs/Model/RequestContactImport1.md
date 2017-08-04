# RequestContactImport1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_url** | **string** | Mandatory if fileBody not defined. URL of the file to be imported (no local file). Possible file types: .txt, .csv | [optional] 
**file_body** | **string** | Mandatory if fileUrl is not defined. CSV content to be imported. Use semicolon to separate multiple attributes | [optional] 
**list_ids** | **int[]** | Manadatory if newList is not defined. Ids of the lists in which to add the contacts | [optional] 
**notify_url** | **string** | URL that will be called once the export process is finished | [optional] 
**new_list** | [**\Swagger\Client\Model\ContactsimportNewList**](ContactsimportNewList.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


