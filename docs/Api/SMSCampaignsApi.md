# Swagger\Client\SMSCampaignsApi

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
> \Swagger\Client\Model\InlineResponse201 createSMSCampaign($create_sms_campaign)

Creates a SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$create_sms_campaign = new \Swagger\Client\Model\CreateSmsCampaign1(); // \Swagger\Client\Model\CreateSmsCampaign1 | Values to create an SMS Campaign

try {
    $result = $api_instance->createSMSCampaign($create_sms_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->createSMSCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_sms_campaign** | [**\Swagger\Client\Model\CreateSmsCampaign1**](../Model/CreateSmsCampaign1.md)| Values to create an SMS Campaign |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSMSCampaigns**
> deleteSMSCampaigns($campaign_id)

Delete the SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = "campaign_id_example"; // string | id of the SMS campaign

try {
    $api_instance->deleteSMSCampaigns($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->deleteSMSCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| id of the SMS campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMSCampaigns**
> \Swagger\Client\Model\InlineResponse20021 getSMSCampaigns($status, $limit, $offset)

Returns the informations for all your created SMS campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
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

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmsCampaign**
> \Swagger\Client\Model\InlineResponse20021Campaigns getSmsCampaign($campaign_id, $get_sms_campaign)

Get a SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = "campaign_id_example"; // string | id of the SMS campaign
$get_sms_campaign = new \Swagger\Client\Model\GetSmsCampaign1(); // \Swagger\Client\Model\GetSmsCampaign1 | Values to update an SMS Campaign

try {
    $result = $api_instance->getSmsCampaign($campaign_id, $get_sms_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->getSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| id of the SMS campaign |
 **get_sms_campaign** | [**\Swagger\Client\Model\GetSmsCampaign1**](../Model/GetSmsCampaign1.md)| Values to update an SMS Campaign |

### Return type

[**\Swagger\Client\Model\InlineResponse20021Campaigns**](../Model/InlineResponse20021Campaigns.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestSMSRecipientExport**
> \Swagger\Client\Model\InlineResponse202 requestSMSRecipientExport($campaign_id, $recipient_export)

Exports the recipients of the specified campaign.

It returns the background process ID which on completion calls the notify URL that you have set in the input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = "campaign_id_example"; // string | id of the campaign
$recipient_export = new \Swagger\Client\Model\RecipientExport1(); // \Swagger\Client\Model\RecipientExport1 | Values to send for a recipient export request

try {
    $result = $api_instance->requestSMSRecipientExport($campaign_id, $recipient_export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->requestSMSRecipientExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| id of the campaign |
 **recipient_export** | [**\Swagger\Client\Model\RecipientExport1**](../Model/RecipientExport1.md)| Values to send for a recipient export request | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSMSCampaignNow**
> sendSMSCampaignNow($campaign_id)

Send your SMS campaign immediately

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = "campaign_id_example"; // string | id of the campaign

try {
    $api_instance->sendSMSCampaignNow($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSMSCampaignNow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| id of the campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSMSReport**
> sendSMSReport($campaign_id, $send_report)

Send report of SMS campaigns

Send report of Sent and Archived campaign, to the specified email addresses, with respective data and a pdf attachment in detail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = "campaign_id_example"; // string | id of the campaign
$send_report = new \Swagger\Client\Model\SendReport2(); // \Swagger\Client\Model\SendReport2 | Values for send a report

try {
    $api_instance->sendSMSReport($campaign_id, $send_report);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSMSReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| id of the campaign |
 **send_report** | [**\Swagger\Client\Model\SendReport2**](../Model/SendReport2.md)| Values for send a report |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestSms**
> sendTestSms($campaign_id, $send_test_sms)

Send an SMS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = "campaign_id_example"; // string | Id of the SMS campaign
$send_test_sms = new \Swagger\Client\Model\SendTestSms1(); // \Swagger\Client\Model\SendTestSms1 | Mobile number to which send the test

try {
    $api_instance->sendTestSms($campaign_id, $send_test_sms);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendTestSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Id of the SMS campaign |
 **send_test_sms** | [**\Swagger\Client\Model\SendTestSms1**](../Model/SendTestSms1.md)| Mobile number to which send the test |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSMSCampaignStatus**
> updateSMSCampaignStatus($campaign_id, $status)

Update the campaign status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = "campaign_id_example"; // string | id of the campaign
$status = new \Swagger\Client\Model\Status1(); // \Swagger\Client\Model\Status1 | Status of the campaign.

try {
    $api_instance->updateSMSCampaignStatus($campaign_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSMSCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| id of the campaign |
 **status** | [**\Swagger\Client\Model\Status1**](../Model/Status1.md)| Status of the campaign. |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSmsCampaign**
> updateSmsCampaign($campaign_id, $update_sms_campaign)

Updates a SMS campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMSCampaignsApi();
$campaign_id = "campaign_id_example"; // string | id of the SMS campaign
$update_sms_campaign = new \Swagger\Client\Model\UpdateSmsCampaign1(); // \Swagger\Client\Model\UpdateSmsCampaign1 | Values to update an SMS Campaign

try {
    $api_instance->updateSmsCampaign($campaign_id, $update_sms_campaign);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| id of the SMS campaign |
 **update_sms_campaign** | [**\Swagger\Client\Model\UpdateSmsCampaign1**](../Model/UpdateSmsCampaign1.md)| Values to update an SMS Campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

