# SendinBlue\Client\ConversationsApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversationsAgentOnlinePingPost**](ConversationsApi.md#conversationsAgentOnlinePingPost) | **POST** /conversations/agentOnlinePing | Sets agent’s status to online for 2-3 minutes
[**conversationsMessagesIdDelete**](ConversationsApi.md#conversationsMessagesIdDelete) | **DELETE** /conversations/messages/{id} | Delete a message sent by an agent
[**conversationsMessagesIdGet**](ConversationsApi.md#conversationsMessagesIdGet) | **GET** /conversations/messages/{id} | Get a message
[**conversationsMessagesIdPut**](ConversationsApi.md#conversationsMessagesIdPut) | **PUT** /conversations/messages/{id} | Update a message sent by an agent
[**conversationsMessagesPost**](ConversationsApi.md#conversationsMessagesPost) | **POST** /conversations/messages | Send a message as an agent
[**conversationsPushedMessagesIdDelete**](ConversationsApi.md#conversationsPushedMessagesIdDelete) | **DELETE** /conversations/pushedMessages/{id} | Delete an automated message
[**conversationsPushedMessagesIdGet**](ConversationsApi.md#conversationsPushedMessagesIdGet) | **GET** /conversations/pushedMessages/{id} | Get an automated message
[**conversationsPushedMessagesIdPut**](ConversationsApi.md#conversationsPushedMessagesIdPut) | **PUT** /conversations/pushedMessages/{id} | Update an automated message
[**conversationsPushedMessagesPost**](ConversationsApi.md#conversationsPushedMessagesPost) | **POST** /conversations/pushedMessages | Send an automated message to a visitor


# **conversationsAgentOnlinePingPost**
> conversationsAgentOnlinePingPost($body)

Sets agent’s status to online for 2-3 minutes

We recommend pinging this endpoint every minute for as long as the agent has to be considered online.

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SendinBlue\Client\Model\Body12(); // \SendinBlue\Client\Model\Body12 | Agent fields.

try {
    $apiInstance->conversationsAgentOnlinePingPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsAgentOnlinePingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SendinBlue\Client\Model\Body12**](../Model/Body12.md)| Agent fields. |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesIdDelete**
> conversationsMessagesIdDelete($id)

Delete a message sent by an agent

Only agents’ messages can be deleted.

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of the message

try {
    $apiInstance->conversationsMessagesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the message |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesIdGet**
> \SendinBlue\Client\Model\ConversationsMessage conversationsMessagesIdGet($id)

Get a message

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of the message

try {
    $result = $apiInstance->conversationsMessagesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the message |

### Return type

[**\SendinBlue\Client\Model\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesIdPut**
> \SendinBlue\Client\Model\ConversationsMessage conversationsMessagesIdPut($id, $body)

Update a message sent by an agent

Only agents’ messages can be edited.

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of the message
$body = new \SendinBlue\Client\Model\Body9(); // \SendinBlue\Client\Model\Body9 | 

try {
    $result = $apiInstance->conversationsMessagesIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the message |
 **body** | [**\SendinBlue\Client\Model\Body9**](../Model/Body9.md)|  | [optional]

### Return type

[**\SendinBlue\Client\Model\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesPost**
> \SendinBlue\Client\Model\ConversationsMessage conversationsMessagesPost($body)

Send a message as an agent

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SendinBlue\Client\Model\Body8(); // \SendinBlue\Client\Model\Body8 | Message fields.

try {
    $result = $apiInstance->conversationsMessagesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SendinBlue\Client\Model\Body8**](../Model/Body8.md)| Message fields. |

### Return type

[**\SendinBlue\Client\Model\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsPushedMessagesIdDelete**
> conversationsPushedMessagesIdDelete($id)

Delete an automated message

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of the message

try {
    $apiInstance->conversationsPushedMessagesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsPushedMessagesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the message |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsPushedMessagesIdGet**
> \SendinBlue\Client\Model\ConversationsMessage conversationsPushedMessagesIdGet($id)

Get an automated message

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of the message sent previously

try {
    $result = $apiInstance->conversationsPushedMessagesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsPushedMessagesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the message sent previously |

### Return type

[**\SendinBlue\Client\Model\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsPushedMessagesIdPut**
> \SendinBlue\Client\Model\ConversationsMessage conversationsPushedMessagesIdPut($id, $body)

Update an automated message

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of the message
$body = new \SendinBlue\Client\Model\Body11(); // \SendinBlue\Client\Model\Body11 | 

try {
    $result = $apiInstance->conversationsPushedMessagesIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsPushedMessagesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the message |
 **body** | [**\SendinBlue\Client\Model\Body11**](../Model/Body11.md)|  |

### Return type

[**\SendinBlue\Client\Model\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsPushedMessagesPost**
> \SendinBlue\Client\Model\ConversationsMessage conversationsPushedMessagesPost($body)

Send an automated message to a visitor

Example of automated messages: order status, announce new features in your web app, etc.

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

$apiInstance = new SendinBlue\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SendinBlue\Client\Model\Body10(); // \SendinBlue\Client\Model\Body10 | 

try {
    $result = $apiInstance->conversationsPushedMessagesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsPushedMessagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SendinBlue\Client\Model\Body10**](../Model/Body10.md)|  |

### Return type

[**\SendinBlue\Client\Model\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

