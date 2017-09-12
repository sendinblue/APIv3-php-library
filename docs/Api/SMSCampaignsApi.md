# Sendinblue\Client\SMSCampaignsApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSMSCampaign**](SMSCampaignsApi.md#createSMSCampaign) | **POST** /smsCampaigns | Creates a SMS campaign
[**deleteSMSCampaigns**](SMSCampaignsApi.md#deleteSMSCampaigns) | **DELETE** /smsCampaigns/{campaignId} | Delete the SMS campaign
[**getSMSCampaigns**](SMSCampaignsApi.md#getSMSCampaigns) | **GET** /smsCampaigns | Returns the informations for all your created SMS campaigns
[**getSmsCampaign**](SMSCampaignsApi.md#getSmsCampaign) | **GET** /smsCampaigns/{campaignId} | Get a SMS campaign
[**requestSMSRecipientExport**](SMSCampaignsApi.md#requestSMSRecipientExport) | **POST** /smsCampaigns/{campaignId}/exportRecipients | Exports the recipients of the specified campaign.
[**sendSMSCampaignNow**](SMSCampaignsApi.md#sendSMSCampaignNow) | **POST** /smsCampaigns/{campaignId}/sendNow | Send your SMS campaign immediately
[**sendSMSReport**](SMSCampaignsApi.md#sendSMSReport) | **POST** /smsCampaigns/{campaignId}/sendReport | Send report of SMS campaigns
[**sendTestSms**](SMSCampaignsApi.md#sendTestSms) | **POST** /smsCampaigns/{campaignId}/sendTest | Send an SMS
[**updateSMSCampaignStatus**](SMSCampaignsApi.md#updateSMSCampaignStatus) | **PUT** /smsCampaigns/{campaignId}/status | Update the campaign status
[**updateSmsCampaign**](SMSCampaignsApi.md#updateSmsCampaign) | **PUT** /smsCampaigns/{campaignId} | Updates a SMS campaign


# **createSMSCampaign**
> \Sendinblue\Client\Model\CreateModel createSMSCampaign($createSmsCampaign)

Creates a SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$createSmsCampaign = new \Sendinblue\Client\Model\CreateSmsCampaign(); // \Sendinblue\Client\Model\CreateSmsCampaign | Values to create an SMS Campaign

try {
    $result = $api_instance->createSMSCampaign($createSmsCampaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->createSMSCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSmsCampaign** | [**\Sendinblue\Client\Model\CreateSmsCampaign**](../Model/CreateSmsCampaign.md)| Values to create an SMS Campaign |

### Return type

[**\Sendinblue\Client\Model\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSMSCampaigns**
> deleteSMSCampaigns($campaignId)

Delete the SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$campaignId = "campaignId_example"; // string | id of the SMS campaign

try {
    $api_instance->deleteSMSCampaigns($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->deleteSMSCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| id of the SMS campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMSCampaigns**
> \Sendinblue\Client\Model\GetSmsCampaigns getSMSCampaigns($status, $limit, $offset)

Returns the informations for all your created SMS campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$status = "status_example"; // string | Status of campaign.
$limit = 500; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.

try {
    $result = $api_instance->getSMSCampaigns($status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->getSMSCampaigns: ', $e->getMessage(), PHP_EOL;
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

[**\Sendinblue\Client\Model\GetSmsCampaigns**](../Model/GetSmsCampaigns.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmsCampaign**
> \Sendinblue\Client\Model\GetSmsCampaign getSmsCampaign($campaignId, $getSmsCampaign)

Get a SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$campaignId = "campaignId_example"; // string | id of the SMS campaign
$getSmsCampaign = new \Sendinblue\Client\Model\GetSmsCampaign(); // \Sendinblue\Client\Model\GetSmsCampaign | Values to update an SMS Campaign

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
 **campaignId** | **string**| id of the SMS campaign |
 **getSmsCampaign** | [**\Sendinblue\Client\Model\GetSmsCampaign**](../Model/GetSmsCampaign.md)| Values to update an SMS Campaign |

### Return type

[**\Sendinblue\Client\Model\GetSmsCampaign**](../Model/GetSmsCampaign.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestSMSRecipientExport**
> \Sendinblue\Client\Model\CreatedProcessId requestSMSRecipientExport($campaignId, $recipientExport)

Exports the recipients of the specified campaign.

It returns the background process ID which on completion calls the notify URL that you have set in the input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$campaignId = "campaignId_example"; // string | id of the campaign
$recipientExport = new \Sendinblue\Client\Model\RequestSMSRecipientExport(); // \Sendinblue\Client\Model\RequestSMSRecipientExport | Values to send for a recipient export request

try {
    $result = $api_instance->requestSMSRecipientExport($campaignId, $recipientExport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->requestSMSRecipientExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| id of the campaign |
 **recipientExport** | [**\Sendinblue\Client\Model\RequestSMSRecipientExport**](../Model/RequestSMSRecipientExport.md)| Values to send for a recipient export request | [optional]

### Return type

[**\Sendinblue\Client\Model\CreatedProcessId**](../Model/CreatedProcessId.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSMSCampaignNow**
> sendSMSCampaignNow($campaignId)

Send your SMS campaign immediately

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$campaignId = "campaignId_example"; // string | id of the campaign

try {
    $api_instance->sendSMSCampaignNow($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSMSCampaignNow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| id of the campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSMSReport**
> sendSMSReport($campaignId, $sendReport)

Send report of SMS campaigns

Send report of Sent and Archived campaign, to the specified email addresses, with respective data and a pdf attachment in detail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$campaignId = "campaignId_example"; // string | id of the campaign
$sendReport = new \Sendinblue\Client\Model\SendReport(); // \Sendinblue\Client\Model\SendReport | Values for send a report

try {
    $api_instance->sendSMSReport($campaignId, $sendReport);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSMSReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| id of the campaign |
 **sendReport** | [**\Sendinblue\Client\Model\SendReport**](../Model/SendReport.md)| Values for send a report |

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
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$campaignId = "campaignId_example"; // string | Id of the SMS campaign
$sendTestSms = new \Sendinblue\Client\Model\SendTestSms(); // \Sendinblue\Client\Model\SendTestSms | Mobile number to which send the test

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
 **campaignId** | **string**| Id of the SMS campaign |
 **sendTestSms** | [**\Sendinblue\Client\Model\SendTestSms**](../Model/SendTestSms.md)| Mobile number to which send the test |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSMSCampaignStatus**
> updateSMSCampaignStatus($campaignId, $status)

Update the campaign status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$campaignId = "campaignId_example"; // string | id of the campaign
$status = new \Sendinblue\Client\Model\UpdateCampaignStatus(); // \Sendinblue\Client\Model\UpdateCampaignStatus | Status of the campaign.

try {
    $api_instance->updateSMSCampaignStatus($campaignId, $status);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSMSCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| id of the campaign |
 **status** | [**\Sendinblue\Client\Model\UpdateCampaignStatus**](../Model/UpdateCampaignStatus.md)| Status of the campaign. |

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

Updates a SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new Sendinblue\Client\Api\SMSCampaignsApi();
$campaignId = "campaignId_example"; // string | id of the SMS campaign
$updateSmsCampaign = new \Sendinblue\Client\Model\UpdateSmsCampaign(); // \Sendinblue\Client\Model\UpdateSmsCampaign | Values to update an SMS Campaign

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
 **campaignId** | **string**| id of the SMS campaign |
 **updateSmsCampaign** | [**\Sendinblue\Client\Model\UpdateSmsCampaign**](../Model/UpdateSmsCampaign.md)| Values to update an SMS Campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

