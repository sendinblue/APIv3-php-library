# Swagger\Client\TransactionalSMSApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSmsEvents**](TransactionalSMSApi.md#getSmsEvents) | **GET** /transactionalSMS/statistics/events | Get all the SMS activity (unaggregated events)
[**getTransacAggregatedSmsReport**](TransactionalSMSApi.md#getTransacAggregatedSmsReport) | **GET** /transactionalSMS/statistics/aggregatedReport | Get your SMS activity aggregated over a period of time
[**getTransacSmsReport**](TransactionalSMSApi.md#getTransacSmsReport) | **GET** /transactionalSMS/statistics/reports | Get your SMS activity aggregated per day
[**sendTransacSms**](TransactionalSMSApi.md#sendTransacSms) | **POST** /transactionalSMS/sms | Send the SMS campaign to the specified mobile number


# **getSmsEvents**
> \Swagger\Client\Model\InlineResponse20022 getSmsEvents($limit, $start_date, $end_date, $offset, $days, $phone_number, $event, $tags)

Get all the SMS activity (unaggregated events)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\TransactionalSMSApi();
$limit = 50; // int | Number of documents per page
$start_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report
$end_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report
$offset = 0; // int | Index of the first document of the page
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$phone_number = "phone_number_example"; // string | Filter the report for a specific phone number
$event = "event_example"; // string | Filter the report for specific events
$tags = "tags_example"; // string | Filter the report for specific tags passed as a serialized urlencoded array

try {
    $result = $api_instance->getSmsEvents($limit, $start_date, $end_date, $offset, $days, $phone_number, $event, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getSmsEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of documents per page | [optional] [default to 50]
 **start_date** | **\DateTime**| Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report | [optional]
 **end_date** | **\DateTime**| Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report | [optional]
 **offset** | **int**| Index of the first document of the page | [optional] [default to 0]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **phone_number** | **string**| Filter the report for a specific phone number | [optional]
 **event** | **string**| Filter the report for specific events | [optional]
 **tags** | **string**| Filter the report for specific tags passed as a serialized urlencoded array | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransacAggregatedSmsReport**
> \Swagger\Client\Model\InlineResponse20023 getTransacAggregatedSmsReport($start_date, $end_date, $days, $tag)

Get your SMS activity aggregated over a period of time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\TransactionalSMSApi();
$start_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report
$end_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with startDate and endDate
$tag = "tag_example"; // string | Filter on a tag

try {
    $result = $api_instance->getTransacAggregatedSmsReport($start_date, $end_date, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getTransacAggregatedSmsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report | [optional]
 **end_date** | **\DateTime**| Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with startDate and endDate | [optional]
 **tag** | **string**| Filter on a tag | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransacSmsReport**
> \Swagger\Client\Model\InlineResponse20024 getTransacSmsReport($start_date, $end_date, $days, $tag)

Get your SMS activity aggregated per day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\TransactionalSMSApi();
$start_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report
$end_date = new \DateTime("2013-10-20"); // \DateTime | Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report
$days = 56; // int | Number of days in the past including today (positive integer). Not compatible with 'startDate' and 'endDate'
$tag = "tag_example"; // string | Filter on a tag

try {
    $result = $api_instance->getTransacSmsReport($start_date, $end_date, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getTransacSmsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report | [optional]
 **end_date** | **\DateTime**| Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report | [optional]
 **days** | **int**| Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; | [optional]
 **tag** | **string**| Filter on a tag | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTransacSms**
> \Swagger\Client\Model\InlineResponse2015 sendTransacSms($send_transac_sms)

Send the SMS campaign to the specified mobile number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\TransactionalSMSApi();
$send_transac_sms = new \Swagger\Client\Model\SendTransacSms1(); // \Swagger\Client\Model\SendTransacSms1 | Values to send a transactional SMS

try {
    $result = $api_instance->sendTransacSms($send_transac_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->sendTransacSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_transac_sms** | [**\Swagger\Client\Model\SendTransacSms1**](../Model/SendTransacSms1.md)| Values to send a transactional SMS |

### Return type

[**\Swagger\Client\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

