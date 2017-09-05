# Swagger\Client\AttributesApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAttribute**](AttributesApi.md#createAttribute) | **POST** /contacts/attributes | Creates contact attributes
[**deleteAttribute**](AttributesApi.md#deleteAttribute) | **DELETE** /contacts/attributes/{attributeId} | Deletes an attribute
[**getAttributes**](AttributesApi.md#getAttributes) | **GET** /contacts/attributes | Lists all attributes


# **createAttribute**
> \Swagger\Client\Model\CreateModel createAttribute($createAttribute)

Creates contact attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\AttributesApi();
$createAttribute = new \Swagger\Client\Model\CreateAttribute(); // \Swagger\Client\Model\CreateAttribute | Values to create an attribute

try {
    $result = $api_instance->createAttribute($createAttribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->createAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createAttribute** | [**\Swagger\Client\Model\CreateAttribute**](../Model/CreateAttribute.md)| Values to create an attribute |

### Return type

[**\Swagger\Client\Model\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAttribute**
> deleteAttribute($attributeId)

Deletes an attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\AttributesApi();
$attributeId = "attributeId_example"; // string | id of the attribute

try {
    $api_instance->deleteAttribute($attributeId);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->deleteAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeId** | **string**| id of the attribute |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttributes**
> \Swagger\Client\Model\GetAttributes getAttributes()

Lists all attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\AttributesApi();

try {
    $result = $api_instance->getAttributes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetAttributes**](../Model/GetAttributes.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

