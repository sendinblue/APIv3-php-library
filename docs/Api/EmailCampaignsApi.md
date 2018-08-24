# SendinBlue\Client\EmailCampaignsApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmailCampaign**](EmailCampaignsApi.md#createEmailCampaign) | **POST** /emailCampaigns | Create an email campaign
[**deleteEmailCampaign**](EmailCampaignsApi.md#deleteEmailCampaign) | **DELETE** /emailCampaigns/{campaignId} | Delete an email campaign
[**emailExportRecipients**](EmailCampaignsApi.md#emailExportRecipients) | **POST** /emailCampaigns/{campaignId}/exportRecipients | Export the recipients of a campaign
[**getEmailCampaign**](EmailCampaignsApi.md#getEmailCampaign) | **GET** /emailCampaigns/{campaignId} | Get campaign informations
[**getEmailCampaigns**](EmailCampaignsApi.md#getEmailCampaigns) | **GET** /emailCampaigns | Return all your created campaigns
[**sendEmailCampaignNow**](EmailCampaignsApi.md#sendEmailCampaignNow) | **POST** /emailCampaigns/{campaignId}/sendNow | Send an email campaign id of the campaign immediately
[**sendReport**](EmailCampaignsApi.md#sendReport) | **POST** /emailCampaigns/{campaignId}/sendReport | Send the report of a campaigns
[**sendTestEmail**](EmailCampaignsApi.md#sendTestEmail) | **POST** /emailCampaigns/{campaignId}/sendTest | Send an email campaign to your test list
[**updateCampaignStatus**](EmailCampaignsApi.md#updateCampaignStatus) | **PUT** /emailCampaigns/{campaignId}/status | Update a campaign status
[**updateEmailCampaign**](EmailCampaignsApi.md#updateEmailCampaign) | **PUT** /emailCampaigns/{campaignId} | Update a campaign


# **createEmailCampaign**
> \SendinBlue\Client\Model\CreateModel createEmailCampaign($emailCampaigns)

Create an email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailCampaigns = new \SendinBlue\Client\Model\CreateEmailCampaign(); // \SendinBlue\Client\Model\CreateEmailCampaign | Values to create a campaign

try {
    $result = $apiInstance->createEmailCampaign($emailCampaigns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailCampaigns** | [**\SendinBlue\Client\Model\CreateEmailCampaign**](../Model/CreateEmailCampaign.md)| Values to create a campaign |

### Return type

[**\SendinBlue\Client\Model\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailCampaign**
> deleteEmailCampaign($campaignId)

Delete an email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 789; // int | id of the campaign

try {
    $apiInstance->deleteEmailCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->deleteEmailCampaign: ', $e->getMessage(), PHP_EOL;
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

# **emailExportRecipients**
> \SendinBlue\Client\Model\CreatedProcessId emailExportRecipients($campaignId, $recipientExport)

Export the recipients of a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 789; // int | Id of the campaign
$recipientExport = new \SendinBlue\Client\Model\EmailExportRecipients(); // \SendinBlue\Client\Model\EmailExportRecipients | Values to send for a recipient export request

try {
    $result = $apiInstance->emailExportRecipients($campaignId, $recipientExport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->emailExportRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| Id of the campaign |
 **recipientExport** | [**\SendinBlue\Client\Model\EmailExportRecipients**](../Model/EmailExportRecipients.md)| Values to send for a recipient export request | [optional]

### Return type

[**\SendinBlue\Client\Model\CreatedProcessId**](../Model/CreatedProcessId.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaign**
> \SendinBlue\Client\Model\GetEmailCampaign getEmailCampaign($campaignId)

Get campaign informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 789; // int | Id of the campaign

try {
    $result = $apiInstance->getEmailCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| Id of the campaign |

### Return type

[**\SendinBlue\Client\Model\GetEmailCampaign**](../Model/GetEmailCampaign.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaigns**
> \SendinBlue\Client\Model\GetEmailCampaigns getEmailCampaigns($type, $status, $startDate, $endDate, $limit, $offset)

Return all your created campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Filter on the type of the campaigns
$status = "status_example"; // string | Filter on the status of the campaign
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Mandatory if endDate is used. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. Prefer to pass your timezone in date-time format for accurate result ( only available if either 'status' not passed and if passed is set to 'sent' )
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Mandatory if startDate is used. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. Prefer to pass your timezone in date-time format for accurate result ( only available if either 'status' not passed and if passed is set to 'sent' )
$limit = 500; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page

try {
    $result = $apiInstance->getEmailCampaigns($type, $status, $startDate, $endDate, $limit, $offset);
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
 **startDate** | **\DateTime**| Mandatory if endDate is used. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. Prefer to pass your timezone in date-time format for accurate result ( only available if either &#39;status&#39; not passed and if passed is set to &#39;sent&#39; ) | [optional]
 **endDate** | **\DateTime**| Mandatory if startDate is used. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. Prefer to pass your timezone in date-time format for accurate result ( only available if either &#39;status&#39; not passed and if passed is set to &#39;sent&#39; ) | [optional]
 **limit** | **int**| Number of documents per page | [optional] [default to 500]
 **offset** | **int**| Index of the first document in the page | [optional] [default to 0]

### Return type

[**\SendinBlue\Client\Model\GetEmailCampaigns**](../Model/GetEmailCampaigns.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmailCampaignNow**
> sendEmailCampaignNow($campaignId)

Send an email campaign id of the campaign immediately

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 789; // int | Id of the campaign

try {
    $apiInstance->sendEmailCampaignNow($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendEmailCampaignNow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| Id of the campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendReport**
> sendReport($campaignId, $sendReport)

Send the report of a campaigns

A PDF will be sent to the specified email addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 789; // int | Id of the campaign
$sendReport = new \SendinBlue\Client\Model\SendReport(); // \SendinBlue\Client\Model\SendReport | Values for send a report

try {
    $apiInstance->sendReport($campaignId, $sendReport);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| Id of the campaign |
 **sendReport** | [**\SendinBlue\Client\Model\SendReport**](../Model/SendReport.md)| Values for send a report |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestEmail**
> sendTestEmail($campaignId, $emailTo)

Send an email campaign to your test list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 789; // int | Id of the campaign
$emailTo = new \SendinBlue\Client\Model\SendTestEmail(); // \SendinBlue\Client\Model\SendTestEmail | 

try {
    $apiInstance->sendTestEmail($campaignId, $emailTo);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendTestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| Id of the campaign |
 **emailTo** | [**\SendinBlue\Client\Model\SendTestEmail**](../Model/SendTestEmail.md)|  |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCampaignStatus**
> updateCampaignStatus($campaignId, $status)

Update a campaign status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 789; // int | Id of the campaign
$status = new \SendinBlue\Client\Model\UpdateCampaignStatus(); // \SendinBlue\Client\Model\UpdateCampaignStatus | Status of the campaign

try {
    $apiInstance->updateCampaignStatus($campaignId, $status);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->updateCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| Id of the campaign |
 **status** | [**\SendinBlue\Client\Model\UpdateCampaignStatus**](../Model/UpdateCampaignStatus.md)| Status of the campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailCampaign**
> updateEmailCampaign($campaignId, $emailCampaign)

Update a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 789; // int | Id of the campaign
$emailCampaign = new \SendinBlue\Client\Model\UpdateEmailCampaign(); // \SendinBlue\Client\Model\UpdateEmailCampaign | Values to update a campaign

try {
    $apiInstance->updateEmailCampaign($campaignId, $emailCampaign);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->updateEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **int**| Id of the campaign |
 **emailCampaign** | [**\SendinBlue\Client\Model\UpdateEmailCampaign**](../Model/UpdateEmailCampaign.md)| Values to update a campaign |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

