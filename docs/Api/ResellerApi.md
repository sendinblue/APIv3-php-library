# SendinBlue\Client\ResellerApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCredits**](ResellerApi.md#addCredits) | **POST** /reseller/children/{childAuthKey}/credits/add | Add Email and/or SMS credits to a specific child account
[**associateIpToChild**](ResellerApi.md#associateIpToChild) | **POST** /reseller/children/{childAuthKey}/ips/associate | Associate a dedicated IP to the child
[**createResellerChild**](ResellerApi.md#createResellerChild) | **POST** /reseller/children | Creates a reseller child
[**deleteResellerChild**](ResellerApi.md#deleteResellerChild) | **DELETE** /reseller/children/{childAuthKey} | Deletes a single reseller child based on the childAuthKey supplied
[**dissociateIpFromChild**](ResellerApi.md#dissociateIpFromChild) | **POST** /reseller/children/{childAuthKey}/ips/dissociate | Dissociate a dedicated IP to the child
[**getChildInfo**](ResellerApi.md#getChildInfo) | **GET** /reseller/children/{childAuthKey} | Gets the info about a specific child account
[**getResellerChilds**](ResellerApi.md#getResellerChilds) | **GET** /reseller/children | Gets the list of all reseller&#39;s children accounts
[**removeCredits**](ResellerApi.md#removeCredits) | **POST** /reseller/children/{childAuthKey}/credits/remove | Remove Email and/or SMS credits from a specific child account
[**updateResellerChild**](ResellerApi.md#updateResellerChild) | **PUT** /reseller/children/{childAuthKey} | Updates infos of reseller&#39;s child based on the childAuthKey supplied


# **addCredits**
> \SendinBlue\Client\Model\RemainingCreditModel addCredits($childAuthKey, $addCredits)

Add Email and/or SMS credits to a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childAuthKey = "childAuthKey_example"; // string | auth key of reseller's child
$addCredits = new \SendinBlue\Client\Model\AddCredits(); // \SendinBlue\Client\Model\AddCredits | Values to post to add credit to a specific child account

try {
    $result = $apiInstance->addCredits($childAuthKey, $addCredits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->addCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childAuthKey** | **string**| auth key of reseller&#39;s child |
 **addCredits** | [**\SendinBlue\Client\Model\AddCredits**](../Model/AddCredits.md)| Values to post to add credit to a specific child account |

### Return type

[**\SendinBlue\Client\Model\RemainingCreditModel**](../Model/RemainingCreditModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associateIpToChild**
> associateIpToChild($childAuthKey, $ip)

Associate a dedicated IP to the child

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childAuthKey = "childAuthKey_example"; // string | auth key of reseller's child
$ip = new \SendinBlue\Client\Model\ManageIp(); // \SendinBlue\Client\Model\ManageIp | IP to associate

try {
    $apiInstance->associateIpToChild($childAuthKey, $ip);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->associateIpToChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childAuthKey** | **string**| auth key of reseller&#39;s child |
 **ip** | [**\SendinBlue\Client\Model\ManageIp**](../Model/ManageIp.md)| IP to associate |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createResellerChild**
> \SendinBlue\Client\Model\CreateReseller createResellerChild($resellerChild)

Creates a reseller child

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resellerChild = new \SendinBlue\Client\Model\CreateChild(); // \SendinBlue\Client\Model\CreateChild | reseller child to add

try {
    $result = $apiInstance->createResellerChild($resellerChild);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->createResellerChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resellerChild** | [**\SendinBlue\Client\Model\CreateChild**](../Model/CreateChild.md)| reseller child to add | [optional]

### Return type

[**\SendinBlue\Client\Model\CreateReseller**](../Model/CreateReseller.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteResellerChild**
> deleteResellerChild($childAuthKey)

Deletes a single reseller child based on the childAuthKey supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childAuthKey = "childAuthKey_example"; // string | auth key of reseller's child

try {
    $apiInstance->deleteResellerChild($childAuthKey);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->deleteResellerChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childAuthKey** | **string**| auth key of reseller&#39;s child |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dissociateIpFromChild**
> dissociateIpFromChild($childAuthKey, $ip)

Dissociate a dedicated IP to the child

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childAuthKey = "childAuthKey_example"; // string | auth key of reseller's child
$ip = new \SendinBlue\Client\Model\ManageIp(); // \SendinBlue\Client\Model\ManageIp | IP to dissociate

try {
    $apiInstance->dissociateIpFromChild($childAuthKey, $ip);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->dissociateIpFromChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childAuthKey** | **string**| auth key of reseller&#39;s child |
 **ip** | [**\SendinBlue\Client\Model\ManageIp**](../Model/ManageIp.md)| IP to dissociate |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildInfo**
> \SendinBlue\Client\Model\GetChildInfo getChildInfo($childAuthKey)

Gets the info about a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childAuthKey = "childAuthKey_example"; // string | auth key of reseller's child

try {
    $result = $apiInstance->getChildInfo($childAuthKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getChildInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childAuthKey** | **string**| auth key of reseller&#39;s child |

### Return type

[**\SendinBlue\Client\Model\GetChildInfo**](../Model/GetChildInfo.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResellerChilds**
> \SendinBlue\Client\Model\GetChildrenList getResellerChilds()

Gets the list of all reseller's children accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getResellerChilds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getResellerChilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SendinBlue\Client\Model\GetChildrenList**](../Model/GetChildrenList.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCredits**
> \SendinBlue\Client\Model\RemainingCreditModel removeCredits($childAuthKey, $removeCredits)

Remove Email and/or SMS credits from a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childAuthKey = "childAuthKey_example"; // string | auth key of reseller's child
$removeCredits = new \SendinBlue\Client\Model\RemoveCredits(); // \SendinBlue\Client\Model\RemoveCredits | Values to post to remove email or SMS credits from a specific child account

try {
    $result = $apiInstance->removeCredits($childAuthKey, $removeCredits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->removeCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childAuthKey** | **string**| auth key of reseller&#39;s child |
 **removeCredits** | [**\SendinBlue\Client\Model\RemoveCredits**](../Model/RemoveCredits.md)| Values to post to remove email or SMS credits from a specific child account |

### Return type

[**\SendinBlue\Client\Model\RemainingCreditModel**](../Model/RemainingCreditModel.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateResellerChild**
> updateResellerChild($childAuthKey, $resellerChild)

Updates infos of reseller's child based on the childAuthKey supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childAuthKey = "childAuthKey_example"; // string | auth key of reseller's child
$resellerChild = new \SendinBlue\Client\Model\UpdateChild(); // \SendinBlue\Client\Model\UpdateChild | values to update in child profile

try {
    $apiInstance->updateResellerChild($childAuthKey, $resellerChild);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->updateResellerChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childAuthKey** | **string**| auth key of reseller&#39;s child |
 **resellerChild** | [**\SendinBlue\Client\Model\UpdateChild**](../Model/UpdateChild.md)| values to update in child profile |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

