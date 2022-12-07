# SendinBlue\Client\InboundParsingApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInboundEmailAttachment**](InboundParsingApi.md#getInboundEmailAttachment) | **GET** /inbound/attachments/{downloadToken} | Retrieve inbound attachment with download token.
[**getInboundEmailEvents**](InboundParsingApi.md#getInboundEmailEvents) | **GET** /inbound/events | Get the list of all the events for the received emails.
[**getInboundEmailEventsByUuid**](InboundParsingApi.md#getInboundEmailEventsByUuid) | **GET** /inbound/events/{uuid} | Fetch all events history for one particular received email.


# **getInboundEmailAttachment**
> \SplFileObject getInboundEmailAttachment($downloadToken)

Retrieve inbound attachment with download token.

This endpoint will retrieve inbound attachment with download token.

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

$apiInstance = new SendinBlue\Client\Api\InboundParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$downloadToken = "downloadToken_example"; // string | Token to fetch a particular attachment

try {
    $result = $apiInstance->getInboundEmailAttachment($downloadToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundParsingApi->getInboundEmailAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **downloadToken** | **string**| Token to fetch a particular attachment |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundEmailEvents**
> \SendinBlue\Client\Model\GetInboundEmailEvents getInboundEmailEvents($sender, $startDate, $endDate, $limit, $offset, $sort)

Get the list of all the events for the received emails.

This endpoint will show the list of all the events for the received emails.

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

$apiInstance = new SendinBlue\Client\Api\InboundParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender = "sender_example"; // string | Email address of the sender.
$startDate = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Maximum time period that can be selected is one month.
$endDate = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month.
$limit = 100; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document on the page
$sort = "desc"; // string | Sort the results in the ascending/descending order of record creation

try {
    $result = $apiInstance->getInboundEmailEvents($sender, $startDate, $endDate, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundParsingApi->getInboundEmailEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender** | **string**| Email address of the sender. | [optional]
 **startDate** | **\DateTime**| Mandatory if endDate is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Maximum time period that can be selected is one month. | [optional]
 **endDate** | **\DateTime**| Mandatory if startDate is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month. | [optional]
 **limit** | **int**| Number of documents returned per page | [optional] [default to 100]
 **offset** | **int**| Index of the first document on the page | [optional] [default to 0]
 **sort** | **string**| Sort the results in the ascending/descending order of record creation | [optional] [default to desc]

### Return type

[**\SendinBlue\Client\Model\GetInboundEmailEvents**](../Model/GetInboundEmailEvents.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundEmailEventsByUuid**
> \SendinBlue\Client\Model\GetInboundEmailEventsByUuid getInboundEmailEventsByUuid($uuid)

Fetch all events history for one particular received email.

This endpoint will show the list of all events history for one particular received email.

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

$apiInstance = new SendinBlue\Client\Api\InboundParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID to fetch events specific to recieved email

try {
    $result = $apiInstance->getInboundEmailEventsByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundParsingApi->getInboundEmailEventsByUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID to fetch events specific to recieved email |

### Return type

[**\SendinBlue\Client\Model\GetInboundEmailEventsByUuid**](../Model/GetInboundEmailEventsByUuid.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

