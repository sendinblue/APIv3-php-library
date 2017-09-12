# Sendinblue\Client\ProcessApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProcess**](ProcessApi.md#getProcess) | **GET** /processes/{processId} | Return the informations for a process
[**getProcesses**](ProcessApi.md#getProcesses) | **GET** /processes | Return all the processes for your account


# **getProcess**
> \Sendinblue\Client\Model\GetProcess getProcess($processId)

Return the informations for a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\ProcessApi();
$processId = "processId_example"; // string | Id of the process

try {
    $result = $api_instance->getProcess($processId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processId** | **string**| Id of the process |

### Return type

[**\Sendinblue\Client\Model\GetProcess**](../Model/GetProcess.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcesses**
> \Sendinblue\Client\Model\GetProcesses getProcesses($limit, $offset)

Return all the processes for your account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\ProcessApi();
$limit = 10; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.

try {
    $result = $api_instance->getProcesses($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getProcesses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number limitation for the result returned | [optional] [default to 10]
 **offset** | **int**| Beginning point in the list to retrieve from. | [optional] [default to 0]

### Return type

[**\Sendinblue\Client\Model\GetProcesses**](../Model/GetProcesses.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

