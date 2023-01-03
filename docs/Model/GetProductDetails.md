# GetProductDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product ID for which you requested the details | 
**name** | **string** | Name of the product for which you requested the details | 
**createdAt** | **string** | Creation UTC date-time of the product (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**modifiedAt** | **string** | Last modification UTC date-time of the product (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**url** | **string** | URL to the product | [optional] 
**imageUrl** | **string** | Absolute URL to the cover image of the product | [optional] 
**sku** | **string** | Product identifier from the shop | [optional] 
**price** | **float** | Price of the product | [optional] 
**categories** | **string[]** | Category ID-s of the product | [optional] 
**parentId** | **string** | Parent product id of the product | [optional] 
**s3Original** | **string** | S3 url of original image | [optional] 
**s3ThumbAnalytics** | **string** | S3 thumbnail url of original image in 120x120 dimension for analytics section | 
**s3ThumbEditor** | **string** | S3 thumbnail url of original image in 600x400 dimension for editor section | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


