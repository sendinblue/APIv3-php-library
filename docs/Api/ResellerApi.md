# Swagger\Client\ResellerApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCredits**](ResellerApi.md#addCredits) | **POST** /reseller/children/{childId}/credits/add | Add Email and/or SMS credits to a specific child account
[**associateIpToChild**](ResellerApi.md#associateIpToChild) | **POST** /reseller/children/{childId}/ips/associate | Associate a dedicated IP to the child
[**createResellerChild**](ResellerApi.md#createResellerChild) | **POST** /reseller/children | Creates a reseller child
[**deleteResellerChild**](ResellerApi.md#deleteResellerChild) | **DELETE** /reseller/children/{childId} | Deletes a single reseller child based on the childId supplied
[**dissociateIpFromChild**](ResellerApi.md#dissociateIpFromChild) | **POST** /reseller/children/{childId}/ips/dissociate | Dissociate a dedicated IP to the child
[**getChildInfo**](ResellerApi.md#getChildInfo) | **GET** /reseller/children/{childId} | Gets the info about a specific child account
[**getResellerChilds**](ResellerApi.md#getResellerChilds) | **GET** /reseller/children | Gets the list of all reseller&#39;s children accounts
[**removeCredits**](ResellerApi.md#removeCredits) | **POST** /reseller/children/{childId}/credits/remove | Remove Email and/or SMS credits from a specific child account
[**updateResellerChild**](ResellerApi.md#updateResellerChild) | **PUT** /reseller/children/{childId} | Updates infos of reseller&#39;s child based on the childId supplied


# **addCredits**
> \Swagger\Client\Model\InlineResponse2003 addCredits($child_id, $add_credits)

Add Email and/or SMS credits to a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();
$child_id = 56; // int | id of reseller's child
$add_credits = new \Swagger\Client\Model\AddCredits1(); // \Swagger\Client\Model\AddCredits1 | Values to post to add credit to a specific child account

try {
    $result = $api_instance->addCredits($child_id, $add_credits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->addCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_id** | **int**| id of reseller&#39;s child |
 **add_credits** | [**\Swagger\Client\Model\AddCredits1**](../Model/AddCredits1.md)| Values to post to add credit to a specific child account |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associateIpToChild**
> associateIpToChild($child_id, $ip_id)

Associate a dedicated IP to the child

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();
$child_id = 56; // int | id of reseller's child
$ip_id = new \Swagger\Client\Model\IpId(); // \Swagger\Client\Model\IpId | IP's id

try {
    $api_instance->associateIpToChild($child_id, $ip_id);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->associateIpToChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_id** | **int**| id of reseller&#39;s child |
 **ip_id** | [**\Swagger\Client\Model\IpId**](../Model/IpId.md)| IP&#39;s id |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createResellerChild**
> \Swagger\Client\Model\InlineResponse201 createResellerChild($reseller_child)

Creates a reseller child

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();
$reseller_child = new \Swagger\Client\Model\ResellerChild(); // \Swagger\Client\Model\ResellerChild | reseller child to add

try {
    $result = $api_instance->createResellerChild($reseller_child);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->createResellerChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reseller_child** | [**\Swagger\Client\Model\ResellerChild**](../Model/ResellerChild.md)| reseller child to add | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteResellerChild**
> deleteResellerChild($child_id)

Deletes a single reseller child based on the childId supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();
$child_id = 56; // int | id of reseller's child

try {
    $api_instance->deleteResellerChild($child_id);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->deleteResellerChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_id** | **int**| id of reseller&#39;s child |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dissociateIpFromChild**
> dissociateIpFromChild($child_id, $ip_id)

Dissociate a dedicated IP to the child

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();
$child_id = 56; // int | id of reseller's child
$ip_id = new \Swagger\Client\Model\IpId1(); // \Swagger\Client\Model\IpId1 | IP's id

try {
    $api_instance->dissociateIpFromChild($child_id, $ip_id);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->dissociateIpFromChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_id** | **int**| id of reseller&#39;s child |
 **ip_id** | [**\Swagger\Client\Model\IpId1**](../Model/IpId1.md)| IP&#39;s id |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildInfo**
> \Swagger\Client\Model\InlineResponse2002 getChildInfo($child_id)

Gets the info about a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();
$child_id = 56; // int | id of reseller's child

try {
    $result = $api_instance->getChildInfo($child_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getChildInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_id** | **int**| id of reseller&#39;s child |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResellerChilds**
> \Swagger\Client\Model\InlineResponse2001 getResellerChilds()

Gets the list of all reseller's children accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();

try {
    $result = $api_instance->getResellerChilds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getResellerChilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCredits**
> \Swagger\Client\Model\InlineResponse2003 removeCredits($child_id, $remove_credits)

Remove Email and/or SMS credits from a specific child account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();
$child_id = 56; // int | id of reseller's child
$remove_credits = new \Swagger\Client\Model\RemoveCredits1(); // \Swagger\Client\Model\RemoveCredits1 | Values to post to remove email or SMS credits from a specific child account

try {
    $result = $api_instance->removeCredits($child_id, $remove_credits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->removeCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_id** | **int**| id of reseller&#39;s child |
 **remove_credits** | [**\Swagger\Client\Model\RemoveCredits1**](../Model/RemoveCredits1.md)| Values to post to remove email or SMS credits from a specific child account |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateResellerChild**
> updateResellerChild($child_id, $reseller_child)

Updates infos of reseller's child based on the childId supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ResellerApi();
$child_id = 56; // int | id of reseller's child
$reseller_child = new \Swagger\Client\Model\ResellerChild1(); // \Swagger\Client\Model\ResellerChild1 | values to update in child profile

try {
    $api_instance->updateResellerChild($child_id, $reseller_child);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->updateResellerChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_id** | **int**| id of reseller&#39;s child |
 **reseller_child** | [**\Swagger\Client\Model\ResellerChild1**](../Model/ResellerChild1.md)| values to update in child profile |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

