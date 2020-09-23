# Swagger\Client\PhoneBlockedListApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAnumberToBlockedList**](PhoneBlockedListApi.md#addAnumberToBlockedList) | **POST** /phone/blocked_list | Create a Blocked List
[**deleteABlockedList**](PhoneBlockedListApi.md#deleteABlockedList) | **DELETE** /phone/blocked_list/{blockedListId} | Delete a Blocked List
[**getABlockedList**](PhoneBlockedListApi.md#getABlockedList) | **GET** /phone/blocked_list/{blockedListId} | Get Blocked List Details
[**listBlockedList**](PhoneBlockedListApi.md#listBlockedList) | **GET** /phone/blocked_list | List Blocked Lists
[**updateBlockedList**](PhoneBlockedListApi.md#updateBlockedList) | **PATCH** /phone/blocked_list/{blockedListId} | Update a Blocked List


# **addAnumberToBlockedList**
> \Swagger\Client\Model\InlineResponse20126 addAnumberToBlockedList($body)

Create a Blocked List

A Zoom account owner or a user with admin privilege can block phone numbers for phone users in an account. Blocked numbers can be inbound (numbers will be blocked from calling in) and outbound (phone users in your account won't be able to dial those numbers). Blocked callers will hear a generic message stating that the person they are calling is not available.<br>Use this API to create a blocked list and add a number to that blocked list.<br> **Prerequisites:** * Pro or higher account plan with Zoom phone license<br> **Scope:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneBlockedListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body77(); // \Swagger\Client\Model\Body77 | 

try {
    $result = $apiInstance->addAnumberToBlockedList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneBlockedListApi->addAnumberToBlockedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body77**](../Model/Body77.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20126**](../Model/InlineResponse20126.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteABlockedList**
> object deleteABlockedList($blocked_list_id)

Delete a Blocked List

A Zoom account owner or a user with admin privilege can block phone numbers for phone users in an account. Blocked numbers can be inbound (numbers will be blocked from calling in) and outbound (phone users in your account won't be able to dial those numbers). <br>Use this API to delete a blocked list and therefore removing the associated number from the blocked list. The number will be unblocked after the deletion.<br> **Prerequisites:** * Pro or higher account plan with Zoom phone license<br> **Scope:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneBlockedListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blocked_list_id = "blocked_list_id_example"; // string | Unique Identifier of the blocked list. This can be retrieved from the List Blocked List API.

try {
    $result = $apiInstance->deleteABlockedList($blocked_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneBlockedListApi->deleteABlockedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blocked_list_id** | **string**| Unique Identifier of the blocked list. This can be retrieved from the List Blocked List API. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getABlockedList**
> \Swagger\Client\Model\InlineResponse20098 getABlockedList($blocked_list_id)

Get Blocked List Details

A Zoom account owner or a user with admin privilege can block phone numbers for phone users in an account. Blocked numbers can be inbound (numbers will be blocked from calling in) and outbound (phone users in your account won't be able to dial those numbers). Blocked callers will hear a generic message stating that the person they are calling is not available.<br>Use this API to get information about a specific blocked list.<br> **Prerequisites:** * Pro or higher account plan with Zoom phone license<br> **Scope:** `phone:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneBlockedListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blocked_list_id = "blocked_list_id_example"; // string | Unique Identifier of the blocked list.

try {
    $result = $apiInstance->getABlockedList($blocked_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneBlockedListApi->getABlockedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blocked_list_id** | **string**| Unique Identifier of the blocked list. |

### Return type

[**\Swagger\Client\Model\InlineResponse20098**](../Model/InlineResponse20098.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBlockedList**
> \Swagger\Client\Model\InlineResponse20097 listBlockedList($next_page_token, $page_size)

List Blocked Lists

A Zoom account owner or a user with admin privilege can block phone numbers for phone users in an account. Blocked numbers can be inbound (numbers will be blocked from calling in) and outbound (phone users in your account won't be able to dial those numbers). Blocked callers will hear a generic message stating that the person they are calling is not available.<br>Use this API to list all the blocked lists in an acccount.<br> **Prerequisites:** * Pro or higher account plan with Zoom phone license<br> **Scope:** `phone:read:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneBlockedListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$page_size = 30; // int | The total number of records returned from a single API call.

try {
    $result = $apiInstance->listBlockedList($next_page_token, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneBlockedListApi->listBlockedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **page_size** | **int**| The total number of records returned from a single API call. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\InlineResponse20097**](../Model/InlineResponse20097.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBlockedList**
> object updateBlockedList($blocked_list_id, $body)

Update a Blocked List

A Zoom account owner or a user with admin privilege can block phone numbers for phone users in an account. Blocked numbers can be inbound (numbers will be blocked from calling in) and outbound (phone users in your account won't be able to dial those numbers). Blocked callers will hear a generic message stating that the person they are calling is not available.<br>Use this API to update information on the blocked list.<br> **Prerequisites:** * Pro or higher account plan with Zoom phone license<br> **Scope:** `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneBlockedListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blocked_list_id = "blocked_list_id_example"; // string | Unique Identifier for the blocked list.
$body = new \Swagger\Client\Model\Body78(); // \Swagger\Client\Model\Body78 | 

try {
    $result = $apiInstance->updateBlockedList($blocked_list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneBlockedListApi->updateBlockedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blocked_list_id** | **string**| Unique Identifier for the blocked list. |
 **body** | [**\Swagger\Client\Model\Body78**](../Model/Body78.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

