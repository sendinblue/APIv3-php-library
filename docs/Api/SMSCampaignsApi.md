# SendinBlue\Client\SMSCampaignsApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSmsCampaign**](SMSCampaignsApi.md#createSmsCampaign) | **POST** /smsCampaigns | Creates an SMS campaign
[**deleteSmsCampaign**](SMSCampaignsApi.md#deleteSmsCampaign) | **DELETE** /smsCampaigns/{campaignId} | Delete the SMS campaign
[**getSmsCampaign**](SMSCampaignsApi.md#getSmsCampaign) | **GET** /smsCampaigns/{campaignId} | Get an SMS campaign
[**getSmsCampaigns**](SMSCampaignsApi.md#getSmsCampaigns) | **GET** /smsCampaigns | Returns the informations for all your created SMS campaigns
[**requestSmsRecipientExport**](SMSCampaignsApi.md#requestSmsRecipientExport) | **POST** /smsCampaigns/{campaignId}/exportRecipients | Exports the recipients of the specified campaign.
[**sendSmsCampaignNow**](SMSCampaignsApi.md#sendSmsCampaignNow) | **POST** /smsCampaigns/{campaignId}/sendNow | Send your SMS campaign immediately
[**sendSmsReport**](SMSCampaignsApi.md#sendSmsReport) | **POST** /smsCampaigns/{campaignId}/sendReport | Send report of SMS campaigns
[**sendTestSms**](SMSCampaignsApi.md#sendTestSms) | **POST** /smsCampaigns/{campaignId}/sendTest | Send an SMS
[**updateSmsCampaign**](SMSCampaignsApi.md#updateSmsCampaign) | **PUT** /smsCampaigns/{campaignId} | Updates an SMS campaign
[**updateSmsCampaignStatus**](SMSCampaignsApi.md#updateSmsCampaignStatus) | **PUT** /smsCampaigns/{campaignId}/status | Update the campaign status


# **createSmsCampaign**
> \SendinBlue\Client\Model\CreateModel createSmsCampaign($createSmsCampaign)

Creates an SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$createSmsCampaign = new \SendinBlue\Client\Model\CreateSmsCampaign(); // \SendinBlue\Client\Model\CreateSmsCampaign | Values to create an SMS Campaign

try {
    $result = $api_instance->createSmsCampaign($createSmsCampaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->createSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSmsCampaign** | [**\SendinBlue\Client\Model\CreateSmsCampaign**](../Model/CreateSmsCampaign.md)| Values to create an SMS Campaign |

### Return type

[**\SendinBlue\Client\Model\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSmsCampaign**
> deleteSmsCampaign($campaignId)

Delete the SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$campaignId = 789; // int | id of the SMS campaign

try {
    $api_instance->deleteSmsCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->deleteSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| id of the SMS campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmsCampaign**
> \SendinBlue\Client\Model\GetSmsCampaign getSmsCampaign($campaignId, $getSmsCampaign)

Get an SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$campaignId = 789; // int | id of the SMS campaign
$getSmsCampaign = new \SendinBlue\Client\Model\GetSmsCampaign(); // \SendinBlue\Client\Model\GetSmsCampaign | Values to update an SMS Campaign

try {
    $result = $api_instance->getSmsCampaign($campaignId, $getSmsCampaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->getSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| id of the SMS campaign |
 **getSmsCampaign** | [**\SendinBlue\Client\Model\GetSmsCampaign**](../Model/GetSmsCampaign.md)| Values to update an SMS Campaign |

### Return type

[**\SendinBlue\Client\Model\GetSmsCampaign**](../Model/GetSmsCampaign.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmsCampaigns**
> \SendinBlue\Client\Model\GetSmsCampaigns getSmsCampaigns($status, $limit, $offset)

Returns the informations for all your created SMS campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$status = "status_example"; // string | Status of campaign.
$limit = 500; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.

try {
    $result = $api_instance->getSmsCampaigns($status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->getSmsCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status of campaign. | [optional]
 **limit** | **int**| Number limitation for the result returned | [optional] [default to 500]
 **offset** | **int**| Beginning point in the list to retrieve from. | [optional] [default to 0]

### Return type

[**\SendinBlue\Client\Model\GetSmsCampaigns**](../Model/GetSmsCampaigns.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestSmsRecipientExport**
> \SendinBlue\Client\Model\CreatedProcessId requestSmsRecipientExport($campaignId, $recipientExport)

Exports the recipients of the specified campaign.

It returns the background process ID which on completion calls the notify URL that you have set in the input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$campaignId = 789; // int | id of the campaign
$recipientExport = new \SendinBlue\Client\Model\RequestSmsRecipientExport(); // \SendinBlue\Client\Model\RequestSmsRecipientExport | Values to send for a recipient export request

try {
    $result = $api_instance->requestSmsRecipientExport($campaignId, $recipientExport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->requestSmsRecipientExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| id of the campaign |
 **recipientExport** | [**\SendinBlue\Client\Model\RequestSmsRecipientExport**](../Model/RequestSmsRecipientExport.md)| Values to send for a recipient export request | [optional]

### Return type

[**\SendinBlue\Client\Model\CreatedProcessId**](../Model/CreatedProcessId.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSmsCampaignNow**
> sendSmsCampaignNow($campaignId)

Send your SMS campaign immediately

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$campaignId = 789; // int | id of the campaign

try {
    $api_instance->sendSmsCampaignNow($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSmsCampaignNow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| id of the campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSmsReport**
> sendSmsReport($campaignId, $sendReport)

Send report of SMS campaigns

Send report of Sent and Archived campaign, to the specified email addresses, with respective data and a pdf attachment in detail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$campaignId = 789; // int | id of the campaign
$sendReport = new \SendinBlue\Client\Model\SendReport(); // \SendinBlue\Client\Model\SendReport | Values for send a report

try {
    $api_instance->sendSmsReport($campaignId, $sendReport);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSmsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| id of the campaign |
 **sendReport** | [**\SendinBlue\Client\Model\SendReport**](../Model/SendReport.md)| Values for send a report |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestSms**
> sendTestSms($campaignId, $sendTestSms)

Send an SMS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$campaignId = 789; // int | Id of the SMS campaign
$sendTestSms = new \SendinBlue\Client\Model\SendTestSms(); // \SendinBlue\Client\Model\SendTestSms | Mobile number to which send the test

try {
    $api_instance->sendTestSms($campaignId, $sendTestSms);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendTestSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| Id of the SMS campaign |
 **sendTestSms** | [**\SendinBlue\Client\Model\SendTestSms**](../Model/SendTestSms.md)| Mobile number to which send the test |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSmsCampaign**
> updateSmsCampaign($campaignId, $updateSmsCampaign)

Updates an SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$campaignId = 789; // int | id of the SMS campaign
$updateSmsCampaign = new \SendinBlue\Client\Model\UpdateSmsCampaign(); // \SendinBlue\Client\Model\UpdateSmsCampaign | Values to update an SMS Campaign

try {
    $api_instance->updateSmsCampaign($campaignId, $updateSmsCampaign);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| id of the SMS campaign |
 **updateSmsCampaign** | [**\SendinBlue\Client\Model\UpdateSmsCampaign**](../Model/UpdateSmsCampaign.md)| Values to update an SMS Campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSmsCampaignStatus**
> updateSmsCampaignStatus($campaignId, $status)

Update the campaign status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new SendinBlue\Client\Api\SMSCampaignsApi();
$campaignId = 789; // int | id of the campaign
$status = new \SendinBlue\Client\Model\UpdateCampaignStatus(); // \SendinBlue\Client\Model\UpdateCampaignStatus | Status of the campaign.

try {
    $api_instance->updateSmsCampaignStatus($campaignId, $status);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSmsCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| id of the campaign |
 **status** | [**\SendinBlue\Client\Model\UpdateCampaignStatus**](../Model/UpdateCampaignStatus.md)| Status of the campaign. |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

