# Swagger\Client\SMTPApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSmtpTemplate**](SMTPApi.md#createSmtpTemplate) | **POST** /smtp/templates | Create an smtp template
[**deleteHardbounces**](SMTPApi.md#deleteHardbounces) | **POST** /smtp/deleteHardbounces | Delete hardbounces
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
> \Swagger\Client\Model\InlineResponse201 createSmtpTemplate($smtp_template)

Create an smtp template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$smtp_template = new \Swagger\Client\Model\SmtpTemplate(); // \Swagger\Client\Model\SmtpTemplate | values to update in smtp template

try {
    $result = $api_instance->createSmtpTemplate($smtp_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->createSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smtp_template** | [**\Swagger\Client\Model\SmtpTemplate**](../Model/SmtpTemplate.md)| values to update in smtp template |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHardbounces**
> deleteHardbounces($delete_hardbounces)

Delete hardbounces

Delete hardbounces. To use carefully (e.g. in case of temporary ISP failures)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$delete_hardbounces = new \Swagger\Client\Model\DeleteHardbounces1(); // \Swagger\Client\Model\DeleteHardbounces1 | values to delete hardbounces

try {
    $api_instance->deleteHardbounces($delete_hardbounces);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->deleteHardbounces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_hardbounces** | [**\Swagger\Client\Model\DeleteHardbounces1**](../Model/DeleteHardbounces1.md)| values to delete hardbounces | [optional]

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAggregatedSmtpReport**
> \Swagger\Client\Model\InlineResponse20010 getAggregatedSmtpReport($start_date, $end_date, $days, $tag)

Get your SMTP activity aggregated over a period of time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$start_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
$end_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$tag = "tag_example"; // string | Tag of the emails

try {
    $result = $api_instance->getAggregatedSmtpReport($start_date, $end_date, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->getAggregatedSmtpReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate | [optional]
 **end_date** | **\DateTime**| Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **tag** | **string**| Tag of the emails | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailEventReport**
> \Swagger\Client\Model\InlineResponse20011 getEmailEventReport($limit, $offset, $start_date, $end_date, $days, $email, $event, $tags, $message_id, $template_id)

Get all your SMTP activity (unaggregated events)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$limit = 50; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.
$start_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
$end_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$email = "email_example"; // string | Filter the report for a specific email addresses
$event = "event_example"; // string | Filter the report for a specific event type
$tags = "tags_example"; // string | Filter the report for tags (serialized and urlencoded array)
$message_id = "message_id_example"; // string | Filter on a specific message id
$template_id = "template_id_example"; // string | Filter on a specific template id

try {
    $result = $api_instance->getEmailEventReport($limit, $offset, $start_date, $end_date, $days, $email, $event, $tags, $message_id, $template_id);
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
 **start_date** | **\DateTime**| Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate | [optional]
 **end_date** | **\DateTime**| Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **email** | **string**| Filter the report for a specific email addresses | [optional]
 **event** | **string**| Filter the report for a specific event type | [optional]
 **tags** | **string**| Filter the report for tags (serialized and urlencoded array) | [optional]
 **message_id** | **string**| Filter on a specific message id | [optional]
 **template_id** | **string**| Filter on a specific template id | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmtpReport**
> \Swagger\Client\Model\InlineResponse2009 getSmtpReport($limit, $offset, $start_date, $end_date, $days, $tag)

Get your SMTP activity aggregated per day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$limit = 50; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document on the page
$start_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD)
$end_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD)
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$tag = "tag_example"; // string | Tag of the emails

try {
    $result = $api_instance->getSmtpReport($limit, $offset, $start_date, $end_date, $days, $tag);
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
 **start_date** | **\DateTime**| Mandatory if endDate is used. Starting date of the report (YYYY-MM-DD) | [optional]
 **end_date** | **\DateTime**| Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD) | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **tag** | **string**| Tag of the emails | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmtpTemplate**
> \Swagger\Client\Model\InlineResponse20012Templates getSmtpTemplate($template_id)

Returns the template informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$template_id = "template_id_example"; // string | id of the template

try {
    $result = $api_instance->getSmtpTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->getSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| id of the template |

### Return type

[**\Swagger\Client\Model\InlineResponse20012Templates**](../Model/InlineResponse20012Templates.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmtpTemplates**
> \Swagger\Client\Model\InlineResponse20012 getSmtpTemplates($template_status, $limit, $offset)

Get the list of SMTP templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$template_status = true; // bool | Filter on the status of the template. Active = true, inactive = false
$limit = 50; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document in the page

try {
    $result = $api_instance->getSmtpTemplates($template_status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->getSmtpTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_status** | **bool**| Filter on the status of the template. Active &#x3D; true, inactive &#x3D; false | [optional]
 **limit** | **int**| Number of documents returned per page | [optional] [default to 50]
 **offset** | **int**| Index of the first document in the page | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTemplate**
> \Swagger\Client\Model\InlineResponse2012 sendTemplate($template_id, $send_email)

Send a template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$template_id = "template_id_example"; // string | Id of the template
$send_email = new \Swagger\Client\Model\SendEmail1(); // \Swagger\Client\Model\SendEmail1 | 

try {
    $result = $api_instance->sendTemplate($template_id, $send_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->sendTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| Id of the template |
 **send_email** | [**\Swagger\Client\Model\SendEmail1**](../Model/SendEmail1.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestTemplate**
> sendTestTemplate($template_id, $send_test_email)

Send a template to your test list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$template_id = "template_id_example"; // string | Id of the template
$send_test_email = new \Swagger\Client\Model\SendTestEmail1(); // \Swagger\Client\Model\SendTestEmail1 | 

try {
    $api_instance->sendTestTemplate($template_id, $send_test_email);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->sendTestTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| Id of the template |
 **send_test_email** | [**\Swagger\Client\Model\SendTestEmail1**](../Model/SendTestEmail1.md)|  |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTransacEmail**
> \Swagger\Client\Model\InlineResponse2013 sendTransacEmail($send_smtp_email)

Send a transactional email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$send_smtp_email = new \Swagger\Client\Model\SendSmtpEmail1(); // \Swagger\Client\Model\SendSmtpEmail1 | Values to send a transactional email

try {
    $result = $api_instance->sendTransacEmail($send_smtp_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_smtp_email** | [**\Swagger\Client\Model\SendSmtpEmail1**](../Model/SendSmtpEmail1.md)| Values to send a transactional email |

### Return type

[**\Swagger\Client\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSmtpTemplate**
> updateSmtpTemplate($template_id, $smtp_template)

Updates an smtp templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\SMTPApi();
$template_id = "template_id_example"; // string | id of the template
$smtp_template = new \Swagger\Client\Model\SmtpTemplate1(); // \Swagger\Client\Model\SmtpTemplate1 | values to update in smtp template

try {
    $api_instance->updateSmtpTemplate($template_id, $smtp_template);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->updateSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| id of the template |
 **smtp_template** | [**\Swagger\Client\Model\SmtpTemplate1**](../Model/SmtpTemplate1.md)| values to update in smtp template |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

