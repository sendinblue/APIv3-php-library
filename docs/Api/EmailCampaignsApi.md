# Swagger\Client\EmailCampaignsApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmailCampaign**](EmailCampaignsApi.md#createEmailCampaign) | **POST** /emailCampaigns | Create an email campaign
[**deleteEmailCampaigns**](EmailCampaignsApi.md#deleteEmailCampaigns) | **DELETE** /emailCampaigns/{campaignId} | Delete an email campaign
[**emailExportRecipients**](EmailCampaignsApi.md#emailExportRecipients) | **POST** /emailCampaigns/{campaignId}/exportRecipients | Export the recipients of a campaign
[**getEmailCampaign**](EmailCampaignsApi.md#getEmailCampaign) | **GET** /emailCampaigns/{campaignId} | Get campaign informations
[**getEmailCampaigns**](EmailCampaignsApi.md#getEmailCampaigns) | **GET** /emailCampaigns | Return all your created campaigns
[**sendEmailCampaignNow**](EmailCampaignsApi.md#sendEmailCampaignNow) | **POST** /emailCampaigns/{campaignId}/sendNow | Send an email campaign id of the campaign immediately
[**sendReport**](EmailCampaignsApi.md#sendReport) | **POST** /emailCampaigns/{campaignId}/sendReport | Send the report of a campaigns
[**sendTestEmail**](EmailCampaignsApi.md#sendTestEmail) | **POST** /emailCampaigns/{campaignId}/sendTest | Send an email campaign to your test list
[**updateCampaignStatus**](EmailCampaignsApi.md#updateCampaignStatus) | **PUT** /emailCampaigns/{campaignId}/status | Update a campaign status
[**updateEmailCampaigns**](EmailCampaignsApi.md#updateEmailCampaigns) | **PUT** /emailCampaigns/{campaignId} | Update a campaign


# **createEmailCampaign**
> \Swagger\Client\Model\InlineResponse201 createEmailCampaign($email_campaigns)

Create an email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$email_campaigns = new \Swagger\Client\Model\EmailCampaigns(); // \Swagger\Client\Model\EmailCampaigns | Values to create a campaign

try {
    $result = $api_instance->createEmailCampaign($email_campaigns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_campaigns** | [**\Swagger\Client\Model\EmailCampaigns**](../Model/EmailCampaigns.md)| Values to create a campaign |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailCampaigns**
> deleteEmailCampaigns($campaign_id)

Delete an email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$campaign_id = "campaign_id_example"; // string | id of the campaign

try {
    $api_instance->deleteEmailCampaigns($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->deleteEmailCampaigns: ', $e->getMessage(), PHP_EOL;
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

# **emailExportRecipients**
> \Swagger\Client\Model\InlineResponse202 emailExportRecipients($campaign_id, $recipient_export)

Export the recipients of a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$campaign_id = "campaign_id_example"; // string | Id of the campaign
$recipient_export = new \Swagger\Client\Model\RecipientExport(); // \Swagger\Client\Model\RecipientExport | Values to send for a recipient export request

try {
    $result = $api_instance->emailExportRecipients($campaign_id, $recipient_export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->emailExportRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Id of the campaign |
 **recipient_export** | [**\Swagger\Client\Model\RecipientExport**](../Model/RecipientExport.md)| Values to send for a recipient export request | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaign**
> \Swagger\Client\Model\InlineResponse2008Campaigns getEmailCampaign($campaign_id)

Get campaign informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$campaign_id = "campaign_id_example"; // string | Id of the campaign

try {
    $result = $api_instance->getEmailCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Id of the campaign |

### Return type

[**\Swagger\Client\Model\InlineResponse2008Campaigns**](../Model/InlineResponse2008Campaigns.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaigns**
> \Swagger\Client\Model\InlineResponse2008 getEmailCampaigns($type, $status, $limit, $offset)

Return all your created campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$type = "type_example"; // string | Filter on the type of the campaigns
$status = "status_example"; // string | Filter on the status of the campaign
$limit = 500; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page

try {
    $result = $api_instance->getEmailCampaigns($type, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getEmailCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Filter on the type of the campaigns | [optional]
 **status** | **string**| Filter on the status of the campaign | [optional]
 **limit** | **int**| Number of documents per page | [optional] [default to 500]
 **offset** | **int**| Index of the first document in the page | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmailCampaignNow**
> sendEmailCampaignNow($campaign_id)

Send an email campaign id of the campaign immediately

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$campaign_id = "campaign_id_example"; // string | Id of the campaign

try {
    $api_instance->sendEmailCampaignNow($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendEmailCampaignNow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Id of the campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendReport**
> sendReport($campaign_id, $send_report)

Send the report of a campaigns

A PDF will be sent to the specified email addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$campaign_id = "campaign_id_example"; // string | Id of the campaign
$send_report = new \Swagger\Client\Model\SendReport1(); // \Swagger\Client\Model\SendReport1 | Values for send a report

try {
    $api_instance->sendReport($campaign_id, $send_report);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Id of the campaign |
 **send_report** | [**\Swagger\Client\Model\SendReport1**](../Model/SendReport1.md)| Values for send a report |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestEmail**
> sendTestEmail($campaign_id, $email_to)

Send an email campaign to your test list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$campaign_id = "campaign_id_example"; // string | Id of the campaign
$email_to = new \Swagger\Client\Model\EmailTo(); // \Swagger\Client\Model\EmailTo | 

try {
    $api_instance->sendTestEmail($campaign_id, $email_to);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendTestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Id of the campaign |
 **email_to** | [**\Swagger\Client\Model\EmailTo**](../Model/EmailTo.md)|  |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCampaignStatus**
> updateCampaignStatus($campaign_id, $status)

Update a campaign status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$campaign_id = "campaign_id_example"; // string | Id of the campaign
$status = new \Swagger\Client\Model\Status(); // \Swagger\Client\Model\Status | Status of the campaign

try {
    $api_instance->updateCampaignStatus($campaign_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->updateCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Id of the campaign |
 **status** | [**\Swagger\Client\Model\Status**](../Model/Status.md)| Status of the campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailCampaigns**
> updateEmailCampaigns($campaign_id, $email_campaign)

Update a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\EmailCampaignsApi();
$campaign_id = "campaign_id_example"; // string | Id of the campaign
$email_campaign = new \Swagger\Client\Model\EmailCampaign(); // \Swagger\Client\Model\EmailCampaign | Values to update a campaign

try {
    $api_instance->updateEmailCampaigns($campaign_id, $email_campaign);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->updateEmailCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Id of the campaign |
 **email_campaign** | [**\Swagger\Client\Model\EmailCampaign**](../Model/EmailCampaign.md)| Values to update a campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

