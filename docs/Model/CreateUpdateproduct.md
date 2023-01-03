# CreateUpdateProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product ID for which you requested the details | 
**name** | **string** | Mandatory in case of creation**. Name of the product for which you requested the details | 
**url** | **string** | URL to the product | [optional] 
**imageUrl** | **string** | Absolute URL to the cover image of the product | [optional] 
**sku** | **string** | Product identifier from the shop | [optional] 
**price** | **float** | Price of the product | [optional] 
**categories** | **string[]** | Category ID-s of the product | [optional] 
**parentId** | **string** | Parent product id of the product | [optional] 
**updateEnabled** | **bool** | Facilitate to update the existing category in the same request (updateEnabled &#x3D; true) | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


