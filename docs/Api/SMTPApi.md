# SendinBlue\Client\SMTPApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSmtpTemplate**](SMTPApi.md#createSmtpTemplate) | **POST** /smtp/templates | Create an smtp template
[**deleteHardbounces**](SMTPApi.md#deleteHardbounces) | **POST** /smtp/deleteHardbounces | Delete hardbounces
[**deleteSmtpTemplate**](SMTPApi.md#deleteSmtpTemplate) | **DELETE** /smtp/templates/{templateId} | Delete an inactive smtp template
[**getAggregatedSmtpReport**](SMTPApi.md#getAggregatedSmtpReport) | **GET** /smtp/statistics/aggregatedReport | Get your SMTP activity aggregated over a period of time
[**getEmailEventReport**](SMTPApi.md#getEmailEventReport) | **GET** /smtp/statistics/events | Get all your SMTP activity (unaggregated events)
[**getSmtpReport**](SMTPApi.md#getSmtpReport) | **GET** /smtp/statistics/reports | Get your SMTP activity aggregated per day
[**getSmtpTemplate**](SMTPApi.md#getSmtpTemplate) | **GET** /smtp/templates/{templateId} | Returns the template informations
[**getSmtpTemplates**](SMTPApi.md#getSmtpTemplates) | **GET** /smtp/templates | Get the list of SMTP templates
[**sendTemplate**](SMTPApi.md#sendTemplate) | **POST** /smtp/templates/{templateId}/send | Send a template
[**sendTestTemplate**](SMTPApi.md#sendTestTemplate) | **POST** /smtp/templates/{templateId}/sendTest | Send a template to your test list
[**sendTransacEmail**](SMTPApi.md#sendTransacEmail) | **POST** /smtp/email | Send a transactional email
[**updateSmtpTemplate**](SMTPApi.md#updateSmtpTemplate) | **PUT** /smtp/templates/{templateId} | Updates an smtp templates


# **createSmtpTemplate**
> \SendinBlue\Client\Model\CreateModel createSmtpTemplate($smtpTemplate)

Create an smtp template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smtpTemplate = new \SendinBlue\Client\Model\CreateSmtpTemplate(); // \SendinBlue\Client\Model\CreateSmtpTemplate | values to update in smtp template

try {
    $result = $apiInstance->createSmtpTemplate($smtpTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->createSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smtpTemplate** | [**\SendinBlue\Client\Model\CreateSmtpTemplate**](../Model/CreateSmtpTemplate.md)| values to update in smtp template |

### Return type

[**\SendinBlue\Client\Model\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHardbounces**
> deleteHardbounces($deleteHardbounces)

Delete hardbounces

Delete hardbounces. To use carefully (e.g. in case of temporary ISP failures)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteHardbounces = new \SendinBlue\Client\Model\DeleteHardbounces(); // \SendinBlue\Client\Model\DeleteHardbounces | values to delete hardbounces

try {
    $apiInstance->deleteHardbounces($deleteHardbounces);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->deleteHardbounces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteHardbounces** | [**\SendinBlue\Client\Model\DeleteHardbounces**](../Model/DeleteHardbounces.md)| values to delete hardbounces | [optional]

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSmtpTemplate**
> deleteSmtpTemplate($templateId)

Delete an inactive smtp template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 789; // int | id of the template

try {
    $apiInstance->deleteSmtpTemplate($templateId);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->deleteSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **int**| id of the template |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAggregatedSmtpReport**
> \SendinBlue\Client\Model\GetAggregatedReport getAggregatedSmtpReport($startDate, $endDate, $days, $tag)

Get your SMTP activity aggregated over a period of time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
$endDate = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$tag = "tag_example"; // string | Tag of the emails

try {
    $result = $apiInstance->getAggregatedSmtpReport($startDate, $endDate, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->getAggregatedSmtpReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate | [optional]
 **endDate** | **\DateTime**| Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **tag** | **string**| Tag of the emails | [optional]

### Return type

[**\SendinBlue\Client\Model\GetAggregatedReport**](../Model/GetAggregatedReport.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailEventReport**
> \SendinBlue\Client\Model\GetEmailEventReport getEmailEventReport($limit, $offset, $startDate, $endDate, $days, $email, $event, $tags, $messageId, $templateId)

Get all your SMTP activity (unaggregated events)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.
$startDate = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
$endDate = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$email = "email_example"; // string | Filter the report for a specific email addresses
$event = "event_example"; // string | Filter the report for a specific event type
$tags = "tags_example"; // string | Filter the report for tags (serialized and urlencoded array)
$messageId = "messageId_example"; // string | Filter on a specific message id
$templateId = 789; // int | Filter on a specific template id

try {
    $result = $apiInstance->getEmailEventReport($limit, $offset, $startDate, $endDate, $days, $email, $event, $tags, $messageId, $templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->getEmailEventReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number limitation for the result returned | [optional] [default to 50]
 **offset** | **int**| Beginning point in the list to retrieve from. | [optional] [default to 0]
 **startDate** | **\DateTime**| Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate | [optional]
 **endDate** | **\DateTime**| Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **email** | **string**| Filter the report for a specific email addresses | [optional]
 **event** | **string**| Filter the report for a specific event type | [optional]
 **tags** | **string**| Filter the report for tags (serialized and urlencoded array) | [optional]
 **messageId** | **string**| Filter on a specific message id | [optional]
 **templateId** | **int**| Filter on a specific template id | [optional]

### Return type

[**\SendinBlue\Client\Model\GetEmailEventReport**](../Model/GetEmailEventReport.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmtpReport**
> \SendinBlue\Client\Model\GetReports getSmtpReport($limit, $offset, $startDate, $endDate, $days, $tag)

Get your SMTP activity aggregated per day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document on the page
$startDate = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD)
$endDate = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD)
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$tag = "tag_example"; // string | Tag of the emails

try {
    $result = $apiInstance->getSmtpReport($limit, $offset, $startDate, $endDate, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->getSmtpReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of documents returned per page | [optional] [default to 50]
 **offset** | **int**| Index of the first document on the page | [optional] [default to 0]
 **startDate** | **\DateTime**| Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD) | [optional]
 **endDate** | **\DateTime**| Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD) | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **tag** | **string**| Tag of the emails | [optional]

### Return type

[**\SendinBlue\Client\Model\GetReports**](../Model/GetReports.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmtpTemplate**
> \SendinBlue\Client\Model\GetSmtpTemplateOverview getSmtpTemplate($templateId)

Returns the template informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 789; // int | id of the template

try {
    $result = $apiInstance->getSmtpTemplate($templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->getSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **int**| id of the template |

### Return type

[**\SendinBlue\Client\Model\GetSmtpTemplateOverview**](../Model/GetSmtpTemplateOverview.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmtpTemplates**
> \SendinBlue\Client\Model\GetSmtpTemplates getSmtpTemplates($templateStatus, $limit, $offset)

Get the list of SMTP templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateStatus = true; // bool | Filter on the status of the template. Active = true, inactive = false
$limit = 50; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document in the page

try {
    $result = $apiInstance->getSmtpTemplates($templateStatus, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->getSmtpTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateStatus** | **bool**| Filter on the status of the template. Active &#x3D; true, inactive &#x3D; false | [optional]
 **limit** | **int**| Number of documents returned per page | [optional] [default to 50]
 **offset** | **int**| Index of the first document in the page | [optional] [default to 0]

### Return type

[**\SendinBlue\Client\Model\GetSmtpTemplates**](../Model/GetSmtpTemplates.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTemplate**
> \SendinBlue\Client\Model\SendTemplateEmail sendTemplate($templateId, $sendEmail)

Send a template

This endpoint is deprecated. Prefer v3/smtp/email instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 789; // int | Id of the template
$sendEmail = new \SendinBlue\Client\Model\SendEmail(); // \SendinBlue\Client\Model\SendEmail | 

try {
    $result = $apiInstance->sendTemplate($templateId, $sendEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->sendTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **int**| Id of the template |
 **sendEmail** | [**\SendinBlue\Client\Model\SendEmail**](../Model/SendEmail.md)|  |

### Return type

[**\SendinBlue\Client\Model\SendTemplateEmail**](../Model/SendTemplateEmail.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestTemplate**
> sendTestTemplate($templateId, $sendTestEmail)

Send a template to your test list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 789; // int | Id of the template
$sendTestEmail = new \SendinBlue\Client\Model\SendTestEmail(); // \SendinBlue\Client\Model\SendTestEmail | 

try {
    $apiInstance->sendTestTemplate($templateId, $sendTestEmail);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->sendTestTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **int**| Id of the template |
 **sendTestEmail** | [**\SendinBlue\Client\Model\SendTestEmail**](../Model/SendTestEmail.md)|  |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTransacEmail**
> \SendinBlue\Client\Model\CreateSmtpEmail sendTransacEmail($sendSmtpEmail)

Send a transactional email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail(); // \SendinBlue\Client\Model\SendSmtpEmail | Values to send a transactional email

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendSmtpEmail** | [**\SendinBlue\Client\Model\SendSmtpEmail**](../Model/SendSmtpEmail.md)| Values to send a transactional email |

### Return type

[**\SendinBlue\Client\Model\CreateSmtpEmail**](../Model/CreateSmtpEmail.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSmtpTemplate**
> updateSmtpTemplate($templateId, $smtpTemplate)

Updates an smtp templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 789; // int | id of the template
$smtpTemplate = new \SendinBlue\Client\Model\UpdateSmtpTemplate(); // \SendinBlue\Client\Model\UpdateSmtpTemplate | values to update in smtp template

try {
    $apiInstance->updateSmtpTemplate($templateId, $smtpTemplate);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->updateSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **int**| id of the template |
 **smtpTemplate** | [**\SendinBlue\Client\Model\UpdateSmtpTemplate**](../Model/UpdateSmtpTemplate.md)| values to update in smtp template |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

