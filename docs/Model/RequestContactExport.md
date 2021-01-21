# RequestContactExport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exportAttributes** | **string[]** | List of all the attributes that you want to export. These attributes must be present in your contact database. For example, [&#39;fname&#39;, &#39;lname&#39;, &#39;email&#39;]. | [optional] 
**contactFilter** | **object** | This attribute has been deprecated and will be removed by January 1st, 2021. Only one of the two filter options (contactFilter or customContactFilter) can be passed in the request. Set the filter for the contacts to be exported. For example, &#x60;{\"blacklisted\":true}&#x60; will export all the blacklisted contacts. | [optional] 
**customContactFilter** | [**\SendinBlue\Client\Model\RequestContactExportCustomContactFilter**](RequestContactExportCustomContactFilter.md) |  | [optional] 
**notifyUrl** | **string** | Webhook that will be called once the export process is finished. For reference, https://help.sendinblue.com/hc/en-us/articles/360007666479 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


