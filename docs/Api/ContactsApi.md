# Swagger\Client\ContactsApi

All URIs are relative to *https://api.sendinblue.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactToList**](ContactsApi.md#addContactToList) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list
[**createAttribute**](ContactsApi.md#createAttribute) | **POST** /contacts/attributes | Creates contact attributes
[**createContact**](ContactsApi.md#createContact) | **POST** /contacts | Create a contact
[**createFolder**](ContactsApi.md#createFolder) | **POST** /contacts/folders | Create a folder
[**createList**](ContactsApi.md#createList) | **POST** /contacts/lists | Create a list
[**deleteAttribute**](ContactsApi.md#deleteAttribute) | **DELETE** /contacts/attributes/{attributeId} | Deletes an attribute
[**deleteFolder**](ContactsApi.md#deleteFolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists)
[**deleteList**](ContactsApi.md#deleteList) | **DELETE** /contacts/lists/{listId} | Delete a list
[**getAttributes**](ContactsApi.md#getAttributes) | **GET** /contacts/attributes | Lists all attributes
[**getContactInfo**](ContactsApi.md#getContactInfo) | **GET** /contacts/{email} | Retrieves contact informations
[**getContactStats**](ContactsApi.md#getContactStats) | **GET** /contacts/{email}/campaignStats | Get the campaigns statistics for a contact
[**getContacts**](ContactsApi.md#getContacts) | **GET** /contacts | Get all the contacts
[**getContactsFromList**](ContactsApi.md#getContactsFromList) | **GET** /contacts/lists/{listId}/contacts | Get the contacts in a list
[**getFolder**](ContactsApi.md#getFolder) | **GET** /contacts/folders/{folderId} | Returns folder details
[**getFolderLists**](ContactsApi.md#getFolderLists) | **GET** /contacts/folders/{folderId}/lists | Get the lists in a folder
[**getFolders**](ContactsApi.md#getFolders) | **GET** /contacts/folders | Get all the folders
[**getList**](ContactsApi.md#getList) | **GET** /contacts/lists/{listId} | Get the details of a list
[**getLists**](ContactsApi.md#getLists) | **GET** /contacts/lists | Get all the lists
[**importContacts**](ContactsApi.md#importContacts) | **POST** /contacts/import | Import contacts
[**removeContactToList**](ContactsApi.md#removeContactToList) | **POST** /contacts/lists/{listId}/contacts/remove | Remove existing contacts from a list
[**requestContactExport**](ContactsApi.md#requestContactExport) | **POST** /contacts/export | Export contacts
[**updateContact**](ContactsApi.md#updateContact) | **PUT** /contacts/{email} | Updates a contact
[**updateFolder**](ContactsApi.md#updateFolder) | **PUT** /contacts/folders/{folderId} | Update a contact folder
[**updateList**](ContactsApi.md#updateList) | **PUT** /contacts/lists/{listId} | Update a list


# **addContactToList**
> \Swagger\Client\Model\InlineResponse2014 addContactToList($list_id, $contact_emails)

Add existing contacts to a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$list_id = "list_id_example"; // string | Id of the list
$contact_emails = new \Swagger\Client\Model\ContactEmails(); // \Swagger\Client\Model\ContactEmails | Emails addresses of the contacts

try {
    $result = $api_instance->addContactToList($list_id, $contact_emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| Id of the list |
 **contact_emails** | [**\Swagger\Client\Model\ContactEmails**](../Model/ContactEmails.md)| Emails addresses of the contacts |

### Return type

[**\Swagger\Client\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAttribute**
> \Swagger\Client\Model\InlineResponse201 createAttribute($create_attribute)

Creates contact attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$create_attribute = new \Swagger\Client\Model\CreateAttribute1(); // \Swagger\Client\Model\CreateAttribute1 | Values to create an attribute

try {
    $result = $api_instance->createAttribute($create_attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_attribute** | [**\Swagger\Client\Model\CreateAttribute1**](../Model/CreateAttribute1.md)| Values to create an attribute |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContact**
> \Swagger\Client\Model\InlineResponse201 createContact($create_contact)

Create a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$create_contact = new \Swagger\Client\Model\CreateContact1(); // \Swagger\Client\Model\CreateContact1 | Values to create a contact

try {
    $result = $api_instance->createContact($create_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_contact** | [**\Swagger\Client\Model\CreateContact1**](../Model/CreateContact1.md)| Values to create a contact |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFolder**
> \Swagger\Client\Model\InlineResponse201 createFolder($name)

Create a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$name = new \Swagger\Client\Model\Name(); // \Swagger\Client\Model\Name | Name of the folder

try {
    $result = $api_instance->createFolder($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**\Swagger\Client\Model\Name**](../Model/Name.md)| Name of the folder |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createList**
> \Swagger\Client\Model\InlineResponse201 createList($create_list)

Create a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$create_list = new \Swagger\Client\Model\CreateList1(); // \Swagger\Client\Model\CreateList1 | Values to create a list

try {
    $result = $api_instance->createList($create_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_list** | [**\Swagger\Client\Model\CreateList1**](../Model/CreateList1.md)| Values to create a list |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAttribute**
> deleteAttribute($attribute_id)

Deletes an attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$attribute_id = "attribute_id_example"; // string | id of the attribute

try {
    $api_instance->deleteAttribute($attribute_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **string**| id of the attribute |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolder**
> deleteFolder($folder_id)

Delete a folder (and all its lists)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$folder_id = "folder_id_example"; // string | Id of the folder

try {
    $api_instance->deleteFolder($folder_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of the folder |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteList**
> deleteList($list_id)

Delete a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$list_id = "list_id_example"; // string | Id of the list

try {
    $api_instance->deleteList($list_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| Id of the list |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttributes**
> \Swagger\Client\Model\InlineResponse20016 getAttributes()

Lists all attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();

try {
    $result = $api_instance->getAttributes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactInfo**
> \Swagger\Client\Model\InlineResponse20014Contacts getContactInfo($email)

Retrieves contact informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$email = "email_example"; // string | Email (urlencoded) of the contact

try {
    $result = $api_instance->getContactInfo($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email (urlencoded) of the contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20014Contacts**](../Model/InlineResponse20014Contacts.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactStats**
> \Swagger\Client\Model\InlineResponse20015 getContactStats($email)

Get the campaigns statistics for a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$email = "email_example"; // string | Email address (urlencoded) of the contact

try {
    $result = $api_instance->getContactStats($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address (urlencoded) of the contact |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Swagger\Client\Model\InlineResponse20014 getContacts($limit, $offset)

Get all the contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page

try {
    $result = $api_instance->getContacts($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of documents per page | [optional] [default to 50]
 **offset** | **int**| Index of the first document of the page | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsFromList**
> \Swagger\Client\Model\InlineResponse20014 getContactsFromList($list_id, $modified_since, $limit, $offset)

Get the contacts in a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$list_id = "list_id_example"; // string | Id of the list
$modified_since = "modified_since_example"; // string | Filter the contacts modified after a given date (YYYY-MM-DD HH:mm:ss)
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page

try {
    $result = $api_instance->getContactsFromList($list_id, $modified_since, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsFromList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| Id of the list |
 **modified_since** | **string**| Filter the contacts modified after a given date (YYYY-MM-DD HH:mm:ss) | [optional]
 **limit** | **int**| Number of documents per page | [optional] [default to 50]
 **offset** | **int**| Index of the first document of the page | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolder**
> \Swagger\Client\Model\InlineResponse20017Folders getFolder($folder_id)

Returns folder details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$folder_id = "folder_id_example"; // string | id of the folder

try {
    $result = $api_instance->getFolder($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| id of the folder |

### Return type

[**\Swagger\Client\Model\InlineResponse20017Folders**](../Model/InlineResponse20017Folders.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolderLists**
> \Swagger\Client\Model\InlineResponse20018 getFolderLists($folder_id, $limit, $offset)

Get the lists in a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$folder_id = "folder_id_example"; // string | Id of the folder
$limit = 10; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page

try {
    $result = $api_instance->getFolderLists($folder_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFolderLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of the folder |
 **limit** | **int**| Number of documents per page | [optional] [default to 10]
 **offset** | **int**| Index of the first document of the page | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolders**
> \Swagger\Client\Model\InlineResponse20017 getFolders($limit, $offset)

Get all the folders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$limit = 10; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page

try {
    $result = $api_instance->getFolders($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of documents per page | [default to 10]
 **offset** | **int**| Index of the first document of the page | [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getList**
> \Swagger\Client\Model\InlineResponse20020 getList($list_id)

Get the details of a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$list_id = "list_id_example"; // string | Id of the list

try {
    $result = $api_instance->getList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| Id of the list |

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLists**
> \Swagger\Client\Model\InlineResponse20019 getLists($limit, $offset)

Get all the lists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$limit = 10; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page

try {
    $result = $api_instance->getLists($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of documents per page | [optional] [default to 10]
 **offset** | **int**| Index of the first document of the page | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importContacts**
> \Swagger\Client\Model\InlineResponse202 importContacts($request_contact_import)

Import contacts

It returns the background process ID which on completion calls the notify URL that you have set in the input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$request_contact_import = new \Swagger\Client\Model\RequestContactImport1(); // \Swagger\Client\Model\RequestContactImport1 | Values to import contacts in Sendinblue. To know more about the expected format, please have a look at ``https://help.sendinblue.com/hc/en-us/articles/209499265-Build-contacts-lists-for-your-email-marketing-campaigns``

try {
    $result = $api_instance->importContacts($request_contact_import);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->importContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_contact_import** | [**\Swagger\Client\Model\RequestContactImport1**](../Model/RequestContactImport1.md)| Values to import contacts in Sendinblue. To know more about the expected format, please have a look at &#x60;&#x60;https://help.sendinblue.com/hc/en-us/articles/209499265-Build-contacts-lists-for-your-email-marketing-campaigns&#x60;&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeContactToList**
> \Swagger\Client\Model\InlineResponse2014 removeContactToList($list_id, $contact_emails)

Remove existing contacts from a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$list_id = "list_id_example"; // string | Id of the list
$contact_emails = new \Swagger\Client\Model\ContactEmails1(); // \Swagger\Client\Model\ContactEmails1 | Emails adresses of the contact

try {
    $result = $api_instance->removeContactToList($list_id, $contact_emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->removeContactToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| Id of the list |
 **contact_emails** | [**\Swagger\Client\Model\ContactEmails1**](../Model/ContactEmails1.md)| Emails adresses of the contact |

### Return type

[**\Swagger\Client\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestContactExport**
> \Swagger\Client\Model\InlineResponse202 requestContactExport($request_contact_export)

Export contacts

It returns the background process ID which on completion calls the notify URL that you have set in the input. File will be available in csv.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$request_contact_export = new \Swagger\Client\Model\RequestContactExport1(); // \Swagger\Client\Model\RequestContactExport1 | Values to request a contact export

try {
    $result = $api_instance->requestContactExport($request_contact_export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->requestContactExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_contact_export** | [**\Swagger\Client\Model\RequestContactExport1**](../Model/RequestContactExport1.md)| Values to request a contact export |

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> updateContact($email, $update_contact)

Updates a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$email = "email_example"; // string | Email (urlencoded) of the contact
$update_contact = new \Swagger\Client\Model\UpdateContact1(); // \Swagger\Client\Model\UpdateContact1 | Values to update a contact

try {
    $api_instance->updateContact($email, $update_contact);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email (urlencoded) of the contact |
 **update_contact** | [**\Swagger\Client\Model\UpdateContact1**](../Model/UpdateContact1.md)| Values to update a contact |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFolder**
> updateFolder($folder_id, $name)

Update a contact folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$folder_id = "folder_id_example"; // string | Id of the folder
$name = new \Swagger\Client\Model\Name1(); // \Swagger\Client\Model\Name1 | Name of the folder

try {
    $api_instance->updateFolder($folder_id, $name);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of the folder |
 **name** | [**\Swagger\Client\Model\Name1**](../Model/Name1.md)| Name of the folder |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateList**
> updateList($list_id, $update_list)

Update a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\ContactsApi();
$list_id = "list_id_example"; // string | Id of the list
$update_list = new \Swagger\Client\Model\UpdateList1(); // \Swagger\Client\Model\UpdateList1 | Values to update a list

try {
    $api_instance->updateList($list_id, $update_list);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| Id of the list |
 **update_list** | [**\Swagger\Client\Model\UpdateList1**](../Model/UpdateList1.md)| Values to update a list |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

