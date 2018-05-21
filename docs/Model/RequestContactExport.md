# RequestContactExport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exportAttributes** | **string[]** | List of all the attributes that you want to export. These attributes must be present in your contact database. For example, [&#39;fname&#39;, &#39;lname&#39;, &#39;email&#39;]. | [optional] 
**contactFilter** | **object** | Set the filter for the contacts to be exported. For example, {&#39;blacklisted&#39;:true} will export all the blacklisted contacts. | 
**notifyUrl** | **string** | Webhook that will be called once the export process is finished | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


