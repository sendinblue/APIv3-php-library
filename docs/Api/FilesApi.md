# SendinBlue\Client\FilesApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crmFilesGet**](FilesApi.md#crmFilesGet) | **GET** /crm/files | Get all files
[**crmFilesIdDataGet**](FilesApi.md#crmFilesIdDataGet) | **GET** /crm/files/{id}/data | Get file details
[**crmFilesIdDelete**](FilesApi.md#crmFilesIdDelete) | **DELETE** /crm/files/{id} | Delete a file
[**crmFilesIdGet**](FilesApi.md#crmFilesIdGet) | **GET** /crm/files/{id} | Download a file
[**crmFilesPost**](FilesApi.md#crmFilesPost) | **POST** /crm/files | Upload a file


# **crmFilesGet**
> \SendinBlue\Client\Model\FileList crmFilesGet($entity, $entityIds, $dateFrom, $dateTo, $offset, $limit, $sort)

Get all files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = "entity_example"; // string | Filter by file entity type
$entityIds = "entityIds_example"; // string | Filter by file entity IDs
$dateFrom = 56; // int | dateFrom to date range filter type (timestamp in milliseconds)
$dateTo = 56; // int | dateTo to date range filter type (timestamp in milliseconds)
$offset = 789; // int | Index of the first document of the page
$limit = 50; // int | Number of documents per page
$sort = "sort_example"; // string | Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed

try {
    $result = $apiInstance->crmFilesGet($entity, $entityIds, $dateFrom, $dateTo, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->crmFilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | **string**| Filter by file entity type | [optional]
 **entityIds** | **string**| Filter by file entity IDs | [optional]
 **dateFrom** | **int**| dateFrom to date range filter type (timestamp in milliseconds) | [optional]
 **dateTo** | **int**| dateTo to date range filter type (timestamp in milliseconds) | [optional]
 **offset** | **int**| Index of the first document of the page | [optional]
 **limit** | **int**| Number of documents per page | [optional] [default to 50]
 **sort** | **string**| Sort the results in the ascending/descending order. Default order is **descending** by creation if &#x60;sort&#x60; is not passed | [optional]

### Return type

[**\SendinBlue\Client\Model\FileList**](../Model/FileList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmFilesIdDataGet**
> \SendinBlue\Client\Model\FileData crmFilesIdDataGet($id)

Get file details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | File id to get file data.

try {
    $result = $apiInstance->crmFilesIdDataGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->crmFilesIdDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| File id to get file data. |

### Return type

[**\SendinBlue\Client\Model\FileData**](../Model/FileData.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmFilesIdDelete**
> crmFilesIdDelete($id)

Delete a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | File id to delete.

try {
    $apiInstance->crmFilesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->crmFilesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| File id to delete. |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmFilesIdGet**
> \SendinBlue\Client\Model\FileDownloadableLink crmFilesIdGet($id)

Download a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | File id to download.

try {
    $result = $apiInstance->crmFilesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->crmFilesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| File id to download. |

### Return type

[**\SendinBlue\Client\Model\FileDownloadableLink**](../Model/FileDownloadableLink.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmFilesPost**
> \SendinBlue\Client\Model\FileData crmFilesPost($file, $dealId, $contactId, $companyId)

Upload a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File data to create a file.
$dealId = "dealId_example"; // string | Deal id linked to a file
$contactId = 789; // int | Contact id linked to a file
$companyId = "companyId_example"; // string | Company id linked to a file

try {
    $result = $apiInstance->crmFilesPost($file, $dealId, $contactId, $companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->crmFilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File data to create a file. |
 **dealId** | **string**| Deal id linked to a file | [optional]
 **contactId** | **int**| Contact id linked to a file | [optional]
 **companyId** | **string**| Company id linked to a file | [optional]

### Return type

[**\SendinBlue\Client\Model\FileData**](../Model/FileData.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

