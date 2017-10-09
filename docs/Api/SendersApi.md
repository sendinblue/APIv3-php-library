# SendinBlue\Client\SendersApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSender**](SendersApi.md#createSender) | **POST** /senders | Create a new sender
[**deleteSender**](SendersApi.md#deleteSender) | **DELETE** /senders/{senderId} | Delete a sender
[**getIps**](SendersApi.md#getIps) | **GET** /senders/ips | Return all the dedicated IPs for your account
[**getIpsFromSender**](SendersApi.md#getIpsFromSender) | **GET** /senders/{senderId}/ips | Return all the dedicated IPs for a sender
[**getSenders**](SendersApi.md#getSenders) | **GET** /senders | Get the list of all your senders
[**updateSender**](SendersApi.md#updateSender) | **PUT** /senders/{senderId} | Update a sender


# **createSender**
> \SendinBlue\Client\Model\CreateSenderModel createSender($sender)

Create a new sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SendersApi();
$sender = new \SendinBlue\Client\Model\CreateSender(); // \SendinBlue\Client\Model\CreateSender | sender's name

try {
    $result = $api_instance->createSender($sender);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->createSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender** | [**\SendinBlue\Client\Model\CreateSender**](../Model/CreateSender.md)| sender&#39;s name | [optional]

### Return type

[**\SendinBlue\Client\Model\CreateSenderModel**](../Model/CreateSenderModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSender**
> deleteSender($senderId)

Delete a sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SendersApi();
$senderId = 789; // int | Id of the sender

try {
    $api_instance->deleteSender($senderId);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->deleteSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **senderId** | **int**| Id of the sender |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIps**
> \SendinBlue\Client\Model\GetIps getIps()

Return all the dedicated IPs for your account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SendersApi();

try {
    $result = $api_instance->getIps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getIps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SendinBlue\Client\Model\GetIps**](../Model/GetIps.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIpsFromSender**
> \SendinBlue\Client\Model\GetIpsFromSender getIpsFromSender($senderId)

Return all the dedicated IPs for a sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SendersApi();
$senderId = 789; // int | Id of the sender

try {
    $result = $api_instance->getIpsFromSender($senderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getIpsFromSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **senderId** | **int**| Id of the sender |

### Return type

[**\SendinBlue\Client\Model\GetIpsFromSender**](../Model/GetIpsFromSender.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenders**
> \SendinBlue\Client\Model\GetSendersList getSenders($ip, $domain)

Get the list of all your senders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SendersApi();
$ip = "ip_example"; // string | Filter your senders for a specific ip (available for dedicated IP usage only)
$domain = "domain_example"; // string | Filter your senders for a specific domain

try {
    $result = $api_instance->getSenders($ip, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->getSenders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip** | **string**| Filter your senders for a specific ip (available for dedicated IP usage only) | [optional]
 **domain** | **string**| Filter your senders for a specific domain | [optional]

### Return type

[**\SendinBlue\Client\Model\GetSendersList**](../Model/GetSendersList.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSender**
> updateSender($senderId, $sender)

Update a sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SendersApi();
$senderId = 789; // int | Id of the sender
$sender = new \SendinBlue\Client\Model\UpdateSender(); // \SendinBlue\Client\Model\UpdateSender | sender's name

try {
    $api_instance->updateSender($senderId, $sender);
} catch (Exception $e) {
    echo 'Exception when calling SendersApi->updateSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **senderId** | **int**| Id of the sender |
 **sender** | [**\SendinBlue\Client\Model\UpdateSender**](../Model/UpdateSender.md)| sender&#39;s name | [optional]

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

