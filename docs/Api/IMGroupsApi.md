# Zoom\Api\IMGroupsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**imGroup()**](IMGroupsApi.md#imGroup) | **GET** /im/groups/{groupId} | Retrieve an IM directory group
[**imGroupCreate()**](IMGroupsApi.md#imGroupCreate) | **POST** /im/groups | Create an IM directory group
[**imGroupDelete()**](IMGroupsApi.md#imGroupDelete) | **DELETE** /im/groups/{groupId} | Delete an IM directory group
[**imGroupMembers()**](IMGroupsApi.md#imGroupMembers) | **GET** /im/groups/{groupId}/members | List IM directory group members
[**imGroupMembersCreate()**](IMGroupsApi.md#imGroupMembersCreate) | **POST** /im/groups/{groupId}/members | Add IM directory group members
[**imGroupMembersDelete()**](IMGroupsApi.md#imGroupMembersDelete) | **DELETE** /im/groups/{groupId}/members/{memberId} | Delete IM directory group member
[**imGroupUpdate()**](IMGroupsApi.md#imGroupUpdate) | **PATCH** /im/groups/{groupId} | Update an IM directory group
[**imGroups()**](IMGroupsApi.md#imGroups) | **GET** /im/groups | List IM directory groups


## `imGroup()`

```php
imGroup($group_id): \Zoom\Api\Model\ImGroup200Response
```

Retrieve an IM directory group

Retrieve an [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management) under your account.<br><br> Scopes: `imgroup:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\IMGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.

try {
    $result = $apiInstance->imGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMGroupsApi->imGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |

### Return type

[**\Zoom\Api\Model\ImGroup200Response**](../Model/ImGroup200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imGroupCreate()`

```php
imGroupCreate($im_group_create_request)
```

Create an IM directory group

Create an [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management) under your account.<br><br> **Scopes**: `imgroup:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\IMGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$im_group_create_request = new \Zoom\Api\Model\ImGroupCreateRequest(); // \Zoom\Api\Model\ImGroupCreateRequest

try {
    $apiInstance->imGroupCreate($im_group_create_request);
} catch (Exception $e) {
    echo 'Exception when calling IMGroupsApi->imGroupCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **im_group_create_request** | [**\Zoom\Api\Model\ImGroupCreateRequest**](../Model/ImGroupCreateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `new`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imGroupDelete()`

```php
imGroupDelete($group_id)
```

Delete an IM directory group

Delete an [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management) under your account.<br><br> Scopes: `imgroup:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\IMGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.

try {
    $apiInstance->imGroupDelete($group_id);
} catch (Exception $e) {
    echo 'Exception when calling IMGroupsApi->imGroupDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imGroupMembers()`

```php
imGroupMembers($group_id, $page_size, $page_number, $next_page_token): \Zoom\Api\Model\GroupMemberList
```

List IM directory group members

List the members of an [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management).<br><br> **Scope:** `imgroup:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\IMGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated.** We will no longer support this field in a future release. Instead, use the `next_page_token` for pagination.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->imGroupMembers($group_id, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMGroupsApi->imGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\GroupMemberList**](../Model/GroupMemberList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imGroupMembersCreate()`

```php
imGroupMembersCreate($group_id, $im_group_members_create_request)
```

Add IM directory group members

Add members to an [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management) under an account.<br><br> **Scope:** `imgroup:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\IMGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$im_group_members_create_request = new \Zoom\Api\Model\ImGroupMembersCreateRequest(); // \Zoom\Api\Model\ImGroupMembersCreateRequest

try {
    $apiInstance->imGroupMembersCreate($group_id, $im_group_members_create_request);
} catch (Exception $e) {
    echo 'Exception when calling IMGroupsApi->imGroupMembersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **im_group_members_create_request** | [**\Zoom\Api\Model\ImGroupMembersCreateRequest**](../Model/ImGroupMembersCreateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imGroupMembersDelete()`

```php
imGroupMembersDelete($group_id, $member_id)
```

Delete IM directory group member

Delete a member from an [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management) under an account.<br><br> Scopes: `imgroup:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\IMGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$member_id = v4iyWT1LTfy8QvPG4GTvdg; // string | The member ID.

try {
    $apiInstance->imGroupMembersDelete($group_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling IMGroupsApi->imGroupMembersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **member_id** | **string**| The member ID. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imGroupUpdate()`

```php
imGroupUpdate($group_id, $im_group_update_request)
```

Update an IM directory group

Update an [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management) under your account.<br><br> **Scopes**: `imgroup:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\IMGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$im_group_update_request = new \Zoom\Api\Model\ImGroupUpdateRequest(); // \Zoom\Api\Model\ImGroupUpdateRequest

try {
    $apiInstance->imGroupUpdate($group_id, $im_group_update_request);
} catch (Exception $e) {
    echo 'Exception when calling IMGroupsApi->imGroupUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **im_group_update_request** | [**\Zoom\Api\Model\ImGroupUpdateRequest**](../Model/ImGroupUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imGroups()`

```php
imGroups(): \Zoom\Api\Model\IMGroupList
```

List IM directory groups

List [IM directory groups](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management).<br><br> **Scopes**: `imgroup:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\IMGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->imGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMGroupsApi->imGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\IMGroupList**](../Model/IMGroupList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
