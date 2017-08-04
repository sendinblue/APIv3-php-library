# Swagger\Client\ProcessApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProcess**](ProcessApi.md#getProcess) | **GET** /processes/{processId} | Return the informations for a process
[**getProcesses**](ProcessApi.md#getProcesses) | **GET** /processes | Return all the processes for your account


# **getProcess**
> \Swagger\Client\Model\InlineResponse2007Processes getProcess($process_id)

Return the informations for a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ProcessApi();
$process_id = "process_id_example"; // string | Id of the process

try {
    $result = $api_instance->getProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **string**| Id of the process |

### Return type

[**\Swagger\Client\Model\InlineResponse2007Processes**](../Model/InlineResponse2007Processes.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcesses**
> \Swagger\Client\Model\InlineResponse2007 getProcesses($limit, $offset)

Return all the processes for your account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ProcessApi();
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

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

