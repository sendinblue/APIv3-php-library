# SendinBlue\Client\ResellerApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCredits**](ResellerApi.md#addCredits) | **POST** /reseller/children/{childIdentifier}/credits/add | Add Email and/or SMS credits to a specific child account
[**associateIpToChild**](ResellerApi.md#associateIpToChild) | **POST** /reseller/children/{childIdentifier}/ips/associate | Associate a dedicated IP to the child
[**createChildDomain**](ResellerApi.md#createChildDomain) | **POST** /reseller/children/{childIdentifier}/domains | Create a domain for a child account
[**createResellerChild**](ResellerApi.md#createResellerChild) | **POST** /reseller/children | Creates a reseller child
[**deleteChildDomain**](ResellerApi.md#deleteChildDomain) | **DELETE** /reseller/children/{childIdentifier}/domains/{domainName} | Delete the sender domain of the reseller child based on the childIdentifier and domainName passed
[**deleteResellerChild**](ResellerApi.md#deleteResellerChild) | **DELETE** /reseller/children/{childIdentifier} | Delete a single reseller child based on the child identifier supplied
[**dissociateIpFromChild**](ResellerApi.md#dissociateIpFromChild) | **POST** /reseller/children/{childIdentifier}/ips/dissociate | Dissociate a dedicated IP to the child
[**getChildAccountCreationStatus**](ResellerApi.md#getChildAccountCreationStatus) | **GET** /reseller/children/{childIdentifier}/accountCreationStatus | Get the status of a reseller&#39;s child account creation, whether it is successfully created (exists) or not based on the identifier supplied
[**getChildDomains**](ResellerApi.md#getChildDomains) | **GET** /reseller/children/{childIdentifier}/domains | Get all sender domains for a specific child account
[**getChildInfo**](ResellerApi.md#getChildInfo) | **GET** /reseller/children/{childIdentifier} | Get a child account&#39;s details
[**getResellerChilds**](ResellerApi.md#getResellerChilds) | **GET** /reseller/children | Get the list of all children accounts
[**getSsoToken**](ResellerApi.md#getSsoToken) | **GET** /reseller/children/{childIdentifier}/auth | Get session token to access Sendinblue (SSO)
[**removeCredits**](ResellerApi.md#removeCredits) | **POST** /reseller/children/{childIdentifier}/credits/remove | Remove Email and/or SMS credits from a specific child account
[**updateChildAccountStatus**](ResellerApi.md#updateChildAccountStatus) | **PUT** /reseller/children/{childIdentifier}/accountStatus | Update info of reseller&#39;s child account status based on the childIdentifier supplied
[**updateChildDomain**](ResellerApi.md#updateChildDomain) | **PUT** /reseller/children/{childIdentifier}/domains/{domainName} | Update the sender domain of reseller&#39;s child based on the childIdentifier and domainName passed
[**updateResellerChild**](ResellerApi.md#updateResellerChild) | **PUT** /reseller/children/{childIdentifier} | Update info of reseller&#39;s child based on the child identifier supplied


# **addCredits**
> \SendinBlue\Client\Model\RemainingCreditModel addCredits($childIdentifier, $addCredits)

Add Email and/or SMS credits to a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$addCredits = new \SendinBlue\Client\Model\AddCredits(); // \SendinBlue\Client\Model\AddCredits | Values to post to add credit to a specific child account

try {
    $result = $apiInstance->addCredits($childIdentifier, $addCredits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->addCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **addCredits** | [**\SendinBlue\Client\Model\AddCredits**](../Model/AddCredits.md)| Values to post to add credit to a specific child account |

### Return type

[**\SendinBlue\Client\Model\RemainingCreditModel**](../Model/RemainingCreditModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associateIpToChild**
> associateIpToChild($childIdentifier, $ip)

Associate a dedicated IP to the child

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$ip = new \SendinBlue\Client\Model\ManageIp(); // \SendinBlue\Client\Model\ManageIp | IP to associate

try {
    $apiInstance->associateIpToChild($childIdentifier, $ip);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->associateIpToChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **ip** | [**\SendinBlue\Client\Model\ManageIp**](../Model/ManageIp.md)| IP to associate |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChildDomain**
> createChildDomain($childIdentifier, $addChildDomain)

Create a domain for a child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$addChildDomain = new \SendinBlue\Client\Model\AddChildDomain(); // \SendinBlue\Client\Model\AddChildDomain | Sender domain to add for a specific child account. This will not be displayed to the parent account.

try {
    $apiInstance->createChildDomain($childIdentifier, $addChildDomain);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->createChildDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **addChildDomain** | [**\SendinBlue\Client\Model\AddChildDomain**](../Model/AddChildDomain.md)| Sender domain to add for a specific child account. This will not be displayed to the parent account. |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

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
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

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

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChildDomain**
> deleteChildDomain($childIdentifier, $domainName)

Delete the sender domain of the reseller child based on the childIdentifier and domainName passed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$domainName = "domainName_example"; // string | Pass the existing domain that needs to be deleted

try {
    $apiInstance->deleteChildDomain($childIdentifier, $domainName);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->deleteChildDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **domainName** | **string**| Pass the existing domain that needs to be deleted |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteResellerChild**
> deleteResellerChild($childIdentifier)

Delete a single reseller child based on the child identifier supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or child id of reseller's child

try {
    $apiInstance->deleteResellerChild($childIdentifier);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->deleteResellerChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or child id of reseller&#39;s child |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dissociateIpFromChild**
> dissociateIpFromChild($childIdentifier, $ip)

Dissociate a dedicated IP to the child

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$ip = new \SendinBlue\Client\Model\ManageIp(); // \SendinBlue\Client\Model\ManageIp | IP to dissociate

try {
    $apiInstance->dissociateIpFromChild($childIdentifier, $ip);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->dissociateIpFromChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **ip** | [**\SendinBlue\Client\Model\ManageIp**](../Model/ManageIp.md)| IP to dissociate |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildAccountCreationStatus**
> \SendinBlue\Client\Model\GetChildAccountCreationStatus getChildAccountCreationStatus($childIdentifier)

Get the status of a reseller's child account creation, whether it is successfully created (exists) or not based on the identifier supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child

try {
    $result = $apiInstance->getChildAccountCreationStatus($childIdentifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getChildAccountCreationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |

### Return type

[**\SendinBlue\Client\Model\GetChildAccountCreationStatus**](../Model/GetChildAccountCreationStatus.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildDomains**
> \SendinBlue\Client\Model\GetChildDomains getChildDomains($childIdentifier)

Get all sender domains for a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child

try {
    $result = $apiInstance->getChildDomains($childIdentifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getChildDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |

### Return type

[**\SendinBlue\Client\Model\GetChildDomains**](../Model/GetChildDomains.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildInfo**
> \SendinBlue\Client\Model\GetChildInfo getChildInfo($childIdentifier)

Get a child account's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child

try {
    $result = $apiInstance->getChildInfo($childIdentifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getChildInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |

### Return type

[**\SendinBlue\Client\Model\GetChildInfo**](../Model/GetChildInfo.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResellerChilds**
> \SendinBlue\Client\Model\GetChildrenList getResellerChilds($limit, $offset)

Get the list of all children accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of documents for child accounts information per page
$offset = 0; // int | Index of the first document in the page

try {
    $result = $apiInstance->getResellerChilds($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getResellerChilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of documents for child accounts information per page | [optional] [default to 10]
 **offset** | **int**| Index of the first document in the page | [optional] [default to 0]

### Return type

[**\SendinBlue\Client\Model\GetChildrenList**](../Model/GetChildrenList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSsoToken**
> \SendinBlue\Client\Model\GetSsoToken getSsoToken($childIdentifier)

Get session token to access Sendinblue (SSO)

It returns a session [token] which will remain valid for a short period of time. A child account will be able to access a white-labeled section by using the following url pattern => https:/email.mydomain.com/login/sso?token=[token]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child

try {
    $result = $apiInstance->getSsoToken($childIdentifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getSsoToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |

### Return type

[**\SendinBlue\Client\Model\GetSsoToken**](../Model/GetSsoToken.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCredits**
> \SendinBlue\Client\Model\RemainingCreditModel removeCredits($childIdentifier, $removeCredits)

Remove Email and/or SMS credits from a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$removeCredits = new \SendinBlue\Client\Model\RemoveCredits(); // \SendinBlue\Client\Model\RemoveCredits | Values to post to remove email or SMS credits from a specific child account

try {
    $result = $apiInstance->removeCredits($childIdentifier, $removeCredits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->removeCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **removeCredits** | [**\SendinBlue\Client\Model\RemoveCredits**](../Model/RemoveCredits.md)| Values to post to remove email or SMS credits from a specific child account |

### Return type

[**\SendinBlue\Client\Model\RemainingCreditModel**](../Model/RemainingCreditModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChildAccountStatus**
> updateChildAccountStatus($childIdentifier, $updateChildAccountStatus)

Update info of reseller's child account status based on the childIdentifier supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$updateChildAccountStatus = new \SendinBlue\Client\Model\UpdateChildAccountStatus(); // \SendinBlue\Client\Model\UpdateChildAccountStatus | values to update in child account status

try {
    $apiInstance->updateChildAccountStatus($childIdentifier, $updateChildAccountStatus);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->updateChildAccountStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **updateChildAccountStatus** | [**\SendinBlue\Client\Model\UpdateChildAccountStatus**](../Model/UpdateChildAccountStatus.md)| values to update in child account status |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChildDomain**
> updateChildDomain($childIdentifier, $domainName, $updateChildDomain)

Update the sender domain of reseller's child based on the childIdentifier and domainName passed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$domainName = "domainName_example"; // string | Pass the existing domain that needs to be updated
$updateChildDomain = new \SendinBlue\Client\Model\UpdateChildDomain(); // \SendinBlue\Client\Model\UpdateChildDomain | value to update for sender domain

try {
    $apiInstance->updateChildDomain($childIdentifier, $domainName, $updateChildDomain);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->updateChildDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **domainName** | **string**| Pass the existing domain that needs to be updated |
 **updateChildDomain** | [**\SendinBlue\Client\Model\UpdateChildDomain**](../Model/UpdateChildDomain.md)| value to update for sender domain |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateResellerChild**
> updateResellerChild($childIdentifier, $resellerChild)

Update info of reseller's child based on the child identifier supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childIdentifier = "childIdentifier_example"; // string | Either auth key or id of reseller's child
$resellerChild = new \SendinBlue\Client\Model\UpdateChild(); // \SendinBlue\Client\Model\UpdateChild | values to update in child profile

try {
    $apiInstance->updateResellerChild($childIdentifier, $resellerChild);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->updateResellerChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childIdentifier** | **string**| Either auth key or id of reseller&#39;s child |
 **resellerChild** | [**\SendinBlue\Client\Model\UpdateChild**](../Model/UpdateChild.md)| values to update in child profile |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

