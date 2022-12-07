# SendinBlue\Client\TasksApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crmTasksGet**](TasksApi.md#crmTasksGet) | **GET** /crm/tasks | Get all tasks
[**crmTasksIdDelete**](TasksApi.md#crmTasksIdDelete) | **DELETE** /crm/tasks/{id} | Delete a task
[**crmTasksIdGet**](TasksApi.md#crmTasksIdGet) | **GET** /crm/tasks/{id} | Get a task
[**crmTasksIdPatch**](TasksApi.md#crmTasksIdPatch) | **PATCH** /crm/tasks/{id} | Update a task
[**crmTasksPost**](TasksApi.md#crmTasksPost) | **POST** /crm/tasks | Create a task
[**crmTasktypesGet**](TasksApi.md#crmTasktypesGet) | **GET** /crm/tasktypes | Get all task types


# **crmTasksGet**
> \SendinBlue\Client\Model\TaskList crmTasksGet($filterType, $filterStatus, $filterDate, $filterAssignTo, $filterContacts, $filterDeals, $filterCompanies, $dateFrom, $dateTo, $offset, $limit, $sort, $sortBy)

Get all tasks

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

$apiInstance = new SendinBlue\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filterType = "filterType_example"; // string | Filter by task type (ID)
$filterStatus = "filterStatus_example"; // string | Filter by task status
$filterDate = "filterDate_example"; // string | Filter by date
$filterAssignTo = "filterAssignTo_example"; // string | Filter by assignTo id
$filterContacts = "filterContacts_example"; // string | Filter by contact ids
$filterDeals = "filterDeals_example"; // string | Filter by deals ids
$filterCompanies = "filterCompanies_example"; // string | Filter by companies ids
$dateFrom = 56; // int | dateFrom to date range filter type (timestamp in milliseconds)
$dateTo = 56; // int | dateTo to date range filter type (timestamp in milliseconds)
$offset = 789; // int | Index of the first document of the page
$limit = 50; // int | Number of documents per page
$sort = "sort_example"; // string | Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
$sortBy = "sortBy_example"; // string | The field used to sort field names.

try {
    $result = $apiInstance->crmTasksGet($filterType, $filterStatus, $filterDate, $filterAssignTo, $filterContacts, $filterDeals, $filterCompanies, $dateFrom, $dateTo, $offset, $limit, $sort, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filterType** | **string**| Filter by task type (ID) | [optional]
 **filterStatus** | **string**| Filter by task status | [optional]
 **filterDate** | **string**| Filter by date | [optional]
 **filterAssignTo** | **string**| Filter by assignTo id | [optional]
 **filterContacts** | **string**| Filter by contact ids | [optional]
 **filterDeals** | **string**| Filter by deals ids | [optional]
 **filterCompanies** | **string**| Filter by companies ids | [optional]
 **dateFrom** | **int**| dateFrom to date range filter type (timestamp in milliseconds) | [optional]
 **dateTo** | **int**| dateTo to date range filter type (timestamp in milliseconds) | [optional]
 **offset** | **int**| Index of the first document of the page | [optional]
 **limit** | **int**| Number of documents per page | [optional] [default to 50]
 **sort** | **string**| Sort the results in the ascending/descending order. Default order is **descending** by creation if &#x60;sort&#x60; is not passed | [optional]
 **sortBy** | **string**| The field used to sort field names. | [optional]

### Return type

[**\SendinBlue\Client\Model\TaskList**](../Model/TaskList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmTasksIdDelete**
> crmTasksIdDelete($id)

Delete a task

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

$apiInstance = new SendinBlue\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->crmTasksIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmTasksIdGet**
> \SendinBlue\Client\Model\Task crmTasksIdGet($id)

Get a task

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

$apiInstance = new SendinBlue\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->crmTasksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\SendinBlue\Client\Model\Task**](../Model/Task.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmTasksIdPatch**
> crmTasksIdPatch($id, $body)

Update a task

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

$apiInstance = new SendinBlue\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \SendinBlue\Client\Model\Body7(); // \SendinBlue\Client\Model\Body7 | Updated task details.

try {
    $apiInstance->crmTasksIdPatch($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\SendinBlue\Client\Model\Body7**](../Model/Body7.md)| Updated task details. |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmTasksPost**
> \SendinBlue\Client\Model\InlineResponse2011 crmTasksPost($body)

Create a task

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

$apiInstance = new SendinBlue\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SendinBlue\Client\Model\Body6(); // \SendinBlue\Client\Model\Body6 | Task name.

try {
    $result = $apiInstance->crmTasksPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SendinBlue\Client\Model\Body6**](../Model/Body6.md)| Task name. |

### Return type

[**\SendinBlue\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crmTasktypesGet**
> \SendinBlue\Client\Model\TaskTypes crmTasktypesGet()

Get all task types

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

$apiInstance = new SendinBlue\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->crmTasktypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasktypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SendinBlue\Client\Model\TaskTypes**](../Model/TaskTypes.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

