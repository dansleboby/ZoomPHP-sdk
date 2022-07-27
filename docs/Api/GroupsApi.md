# OpenAPI\Client\GroupsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**delGroupVB()**](GroupsApi.md#delGroupVB) | **DELETE** /groups/{groupId}/settings/virtual_backgrounds | Delete Virtual Background files
[**getGroupLockSettings()**](GroupsApi.md#getGroupLockSettings) | **GET** /groups/{groupId}/lock_settings | Get locked settings
[**getGroupSettings()**](GroupsApi.md#getGroupSettings) | **GET** /groups/{groupId}/settings | Get a group&#39;s settings
[**group()**](GroupsApi.md#group) | **GET** /groups/{groupId} | Get a group
[**groupAdmins()**](GroupsApi.md#groupAdmins) | **GET** /groups/{groupId}/admins | List group admins
[**groupAdminsCreate()**](GroupsApi.md#groupAdminsCreate) | **POST** /groups/{groupId}/admins | Add group admins
[**groupAdminsDelete()**](GroupsApi.md#groupAdminsDelete) | **DELETE** /groups/{groupId}/admins/{userId} | Delete a group admin
[**groupCreate()**](GroupsApi.md#groupCreate) | **POST** /groups | Create a group
[**groupDelete()**](GroupsApi.md#groupDelete) | **DELETE** /groups/{groupId} | Delete a group
[**groupLockedSettings()**](GroupsApi.md#groupLockedSettings) | **PATCH** /groups/{groupId}/lock_settings | Update locked settings
[**groupMembers()**](GroupsApi.md#groupMembers) | **GET** /groups/{groupId}/members | List group members
[**groupMembersCreate()**](GroupsApi.md#groupMembersCreate) | **POST** /groups/{groupId}/members | Add group members
[**groupMembersDelete()**](GroupsApi.md#groupMembersDelete) | **DELETE** /groups/{groupId}/members/{memberId} | Delete a group member
[**groupUpdate()**](GroupsApi.md#groupUpdate) | **PATCH** /groups/{groupId} | Update a group
[**groups()**](GroupsApi.md#groups) | **GET** /groups | List groups
[**updateAGroupMember()**](GroupsApi.md#updateAGroupMember) | **PATCH** /groups/{groupId}/members/{memberId} | Update a group member
[**updateGroupSettings()**](GroupsApi.md#updateGroupSettings) | **PATCH** /groups/{groupId}/settings | Update a group&#39;s settings
[**uploadGroupVB()**](GroupsApi.md#uploadGroupVB) | **POST** /groups/{groupId}/settings/virtual_backgrounds | Upload Virtual Background files


## `delGroupVB()`

```php
delGroupVB($group_id, $file_ids)
```

Delete Virtual Background files

Use this API to delete a group's [Virtual Background files](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background#h_01EJF3YFEWGT8YA0ZJ079JEDQE).    **Scope:** `group:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The [Virtual Background feature](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background#h_2ef28080-fce9-4ac2-b567-dc958afab1b7) must be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 0mgThLiRQH2bUHvIaL4t2g; // string | The group ID. To get a group's ID, use the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$file_ids = 6SEYvTU4SuG257lOHuJKOQ; // string | A comma-separated list of the file IDs to delete.

try {
    $apiInstance->delGroupVB($group_id, $file_ids);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->delGroupVB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID. To get a group&#39;s ID, use the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **file_ids** | **string**| A comma-separated list of the file IDs to delete. | [optional]

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

## `getGroupLockSettings()`

```php
getGroupLockSettings($group_id, $option): \OpenAPI\Client\Model\GetGroupLockSettings200Response
```

Get locked settings

Retrieve a [group's](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) locked settings. If you lock a setting, the group members will not be able to modify it individually. <p style=\"background-color:#FEEFB3; color:#9F6000\"><br>Note:</b> The `force_pmi_jbh_password` field under meeting settings is planned to be deprecated on September 22, 2019. This field will be replaced by another field that will provide the same functionality.</p>  **Prerequisite**: Pro, Business, or Education account<br> **Scopes**: `group:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 0mgThLiRQH2bUHvIaL4t2g; // string | Id of the group.
$option = meeting_security; // string | Optional query parameters:  * `meeting_security` — Use this query parameter to view the meeting security settings applied to the user's account.

try {
    $result = $apiInstance->getGroupLockSettings($group_id, $option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupLockSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Id of the group. |
 **option** | **string**| Optional query parameters:  * &#x60;meeting_security&#x60; — Use this query parameter to view the meeting security settings applied to the user&#39;s account. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetGroupLockSettings200Response**](../Model/GetGroupLockSettings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupSettings()`

```php
getGroupSettings($group_id, $option, $custom_query_fields): \OpenAPI\Client\Model\GetGroupSettings200Response
```

Get a group's settings

Get settings for a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-).  **Prerequisite**: Pro, Business, or Education account<br> **Scopes**: `group:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 0mgThLiRQH2bUHvIaL4t2g; // string
$option = meeting_security; // string | Optional query parameters:  * `meeting_authentication` — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user's account.  * `recording_authentication` — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user's account.  * `meeting_security` — Use this query parameter to view the meeting security settings applied to the user's account.
$custom_query_fields = host_video; // string | Provide the name of the field by which you would like to filter the response. For example, if you provide \"host_video\" as the value of this field, you will get a response similar to the following:   {  \"schedule_meeting\": {  \"host_video\": false  } }   You can provide multiple values by separating them with commas(example: \"host_video,participant_video\").

try {
    $result = $apiInstance->getGroupSettings($group_id, $option, $custom_query_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **option** | **string**| Optional query parameters:  * &#x60;meeting_authentication&#x60; — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user&#39;s account.  * &#x60;recording_authentication&#x60; — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user&#39;s account.  * &#x60;meeting_security&#x60; — Use this query parameter to view the meeting security settings applied to the user&#39;s account. | [optional]
 **custom_query_fields** | **string**| Provide the name of the field by which you would like to filter the response. For example, if you provide \&quot;host_video\&quot; as the value of this field, you will get a response similar to the following:   {  \&quot;schedule_meeting\&quot;: {  \&quot;host_video\&quot;: false  } }   You can provide multiple values by separating them with commas(example: \&quot;host_video,participant_video\&quot;). | [optional]

### Return type

[**\OpenAPI\Client\Model\GetGroupSettings200Response**](../Model/GetGroupSettings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `group()`

```php
group($group_id): \OpenAPI\Client\Model\Group200Response
```

Get a group

Get a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) under an account.  **Prerequisite**: Pro, Business, or Education account<br> **Scopes**: `group:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.

try {
    $result = $apiInstance->group($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->group: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |

### Return type

[**\OpenAPI\Client\Model\Group200Response**](../Model/Group200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupAdmins()`

```php
groupAdmins($group_id, $page_size, $next_page_token): \OpenAPI\Client\Model\GroupAdmins200Response
```

List group admins

Use this API to return a list of [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) administrators under your account.  **Scopes:** `group:read:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  **Prerequisites:**  * A Pro, Business, or Education account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->groupAdmins($group_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupAdmins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\OpenAPI\Client\Model\GroupAdmins200Response**](../Model/GroupAdmins200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupAdminsCreate()`

```php
groupAdminsCreate($group_id, $group_admins_create_request)
```

Add group admins

Use this API to add administrators to a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) under your account.  **Scopes:** `group:write:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  **Prerequisites:**  * A Pro, Business, or Education account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$group_admins_create_request = new \OpenAPI\Client\Model\GroupAdminsCreateRequest(); // \OpenAPI\Client\Model\GroupAdminsCreateRequest

try {
    $apiInstance->groupAdminsCreate($group_id, $group_admins_create_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupAdminsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **group_admins_create_request** | [**\OpenAPI\Client\Model\GroupAdminsCreateRequest**](../Model/GroupAdminsCreateRequest.md)|  |

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

## `groupAdminsDelete()`

```php
groupAdminsDelete($group_id, $user_id)
```

Delete a group admin

Use this API to remove a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) administrator in a Zoom account.  **Scopes:** `group:write:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * A Pro, Business, or Education account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $apiInstance->groupAdminsDelete($group_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupAdminsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |

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

## `groupCreate()`

```php
groupCreate($group_create_request)
```

Create a group

Use this API to create a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management). You can add a **maximum** of 100 groups in one account per day, and a maximum of 5000 groups in one account.  If you enabled a new group via the user interface, you can also choose whether to display the group and set its privacy level.  **Scopes:** `group:write:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites**:  * A Pro or higher account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_create_request = new \OpenAPI\Client\Model\GroupCreateRequest(); // \OpenAPI\Client\Model\GroupCreateRequest

try {
    $apiInstance->groupCreate($group_create_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_create_request** | [**\OpenAPI\Client\Model\GroupCreateRequest**](../Model/GroupCreateRequest.md)|  |

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

## `groupDelete()`

```php
groupDelete($group_id)
```

Delete a group

Use this API to delete a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-).  **Scopes:** `group:write:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * A Pro, Business, or Education account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.

try {
    $apiInstance->groupDelete($group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupDelete: ', $e->getMessage(), PHP_EOL;
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

## `groupLockedSettings()`

```php
groupLockedSettings($group_id, $option, $group_locked_settings_request)
```

Update locked settings

Update a [group's](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) locked settings. If you lock a setting, the group members will not be able to modify it individually. <p style=\"background-color:#FEEFB3; color:#9F6000\"><br>Note:</b> The `force_pmi_jbh_password` field under meeting settings is planned to be deprecated on September 22, 2019. This field will be replaced by another field that will provide the same functionality.</p>  **Prerequisite**: Pro, Business, or Education account<br> **Scopes**: `group:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 0mgThLiRQH2bUHvIaL4t2g; // string | The Id of the group.
$option = meeting_security; // string | Optional query parameters:  * `meeting_security` — Use this query parameter to view the meeting security settings applied to the user's account.
$group_locked_settings_request = new \OpenAPI\Client\Model\GroupLockedSettingsRequest(); // \OpenAPI\Client\Model\GroupLockedSettingsRequest

try {
    $apiInstance->groupLockedSettings($group_id, $option, $group_locked_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupLockedSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The Id of the group. |
 **option** | **string**| Optional query parameters:  * &#x60;meeting_security&#x60; — Use this query parameter to view the meeting security settings applied to the user&#39;s account. | [optional]
 **group_locked_settings_request** | [**\OpenAPI\Client\Model\GroupLockedSettingsRequest**](../Model/GroupLockedSettingsRequest.md)|  | [optional]

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

## `groupMembers()`

```php
groupMembers($group_id, $page_size, $page_number, $next_page_token): \OpenAPI\Client\Model\GroupMembers200Response
```

List group members

List the members of a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) under your account.  **Prerequisite**: Pro, Business, or Education account<br> **Scopes**: `group:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
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
    $result = $apiInstance->groupMembers($group_id, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupMembers: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\GroupMembers200Response**](../Model/GroupMembers200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupMembersCreate()`

```php
groupMembersCreate($group_id, $group_members_create_request)
```

Add group members

Use this API to add users to a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) in your account.  **Scopes:** `group:write:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  **Prerequisites:**  * A Pro, Business, or Education account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$group_members_create_request = new \OpenAPI\Client\Model\GroupMembersCreateRequest(); // \OpenAPI\Client\Model\GroupMembersCreateRequest

try {
    $apiInstance->groupMembersCreate($group_id, $group_members_create_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupMembersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **group_members_create_request** | [**\OpenAPI\Client\Model\GroupMembersCreateRequest**](../Model/GroupMembersCreateRequest.md)|  |

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

## `groupMembersDelete()`

```php
groupMembersDelete($group_id, $member_id)
```

Delete a group member

Use this API to remove a user from a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) in an account.  **Scopes:** `group:write:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * A Pro, Business, or Education account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$member_id = -cn1DHGRRTSOlnVwyZNhKw; // string | The member ID or email address.

try {
    $apiInstance->groupMembersDelete($group_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupMembersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **member_id** | **string**| The member ID or email address. |

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

## `groupUpdate()`

```php
groupUpdate($group_id, $group_update_request)
```

Update a group

Update a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) under your account.  **Prerequisite**: Pro, Business, or Education account<br> **Scopes**: `group:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group ID.<br> Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$group_update_request = new \OpenAPI\Client\Model\GroupUpdateRequest(); // \OpenAPI\Client\Model\GroupUpdateRequest

try {
    $apiInstance->groupUpdate($group_id, $group_update_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID.&lt;br&gt; Can be retrieved by calling the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **group_update_request** | [**\OpenAPI\Client\Model\GroupUpdateRequest**](../Model/GroupUpdateRequest.md)|  |

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

## `groups()`

```php
groups(): \OpenAPI\Client\Model\GroupList
```

List groups

List [groups](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-) under an account.  **Prerequisite**: Pro or higher account.<br> **Scopes**: `group:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->groups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GroupList**](../Model/GroupList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAGroupMember()`

```php
updateAGroupMember($group_id, $member_id, $update_a_group_member_request)
```

Update a group member

Use this API to perform either of the following tasks:  * Remove a group member from one group and move them to a different group.  * Set a user's primary group. By default, the primary group is the first group that user is added to.  If a user is a member of multiple groups, you can [assign the user a primary group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-#h_d07c7dcd-4fd8-485a-b5fe-a322e8d21c09). The user will use the primary group's settings by default. However, if the user is a member of a group with locked settings, those group settings will remain locked to the user.  **Scopes:** `group:write:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  **Prerequisites:**  * A Pro or higher account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = SobVexyrQjqCkcxjpBWi6w; // string | The group's unique ID. To get this value, use the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. * To set a user's primary group, use the `target_group_id` value for this parameter's value.  * To move a group member from one group to another, use the `groupId` of the designated group.
$member_id = v4iyWT1LTfy8QvPG4GTvdg; // string | The group member's unique ID. To get this value, use the [**List group members**](/docs/api-reference/zoom-api/methods#operation/groupMembers) API.
$update_a_group_member_request = new \OpenAPI\Client\Model\UpdateAGroupMemberRequest(); // \OpenAPI\Client\Model\UpdateAGroupMemberRequest

try {
    $apiInstance->updateAGroupMember($group_id, $member_id, $update_a_group_member_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateAGroupMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group&#39;s unique ID. To get this value, use the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. * To set a user&#39;s primary group, use the &#x60;target_group_id&#x60; value for this parameter&#39;s value.  * To move a group member from one group to another, use the &#x60;groupId&#x60; of the designated group. |
 **member_id** | **string**| The group member&#39;s unique ID. To get this value, use the [**List group members**](/docs/api-reference/zoom-api/methods#operation/groupMembers) API. |
 **update_a_group_member_request** | [**\OpenAPI\Client\Model\UpdateAGroupMemberRequest**](../Model/UpdateAGroupMemberRequest.md)|  | [optional]

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

## `updateGroupSettings()`

```php
updateGroupSettings($group_id, $option, $update_group_settings_request)
```

Update a group's settings

Update settings for a [group](https://support.zoom.us/hc/en-us/articles/204519819-Group-Management-).<p style=\"background-color:#FEEFB3; color:#9F6000\"><br>Note:</b> The `force_pmi_jbh_password` field under meeting settings is planned to be deprecated on September 22, 2019. This field will be replaced by another field that will provide the same functionality.</p> **Prerequisite**: Pro, Business, or Education account<br>  **Scopes**: `group:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 0mgThLiRQH2bUHvIaL4t2g; // string | Id of the group.
$option = meeting_security; // string | Optional query parameters:  * `meeting_authentication` — [Meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars).  * `recording_authentication` — [Recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings).  * `meeting_security` — Meeting security settings.
$update_group_settings_request = new \OpenAPI\Client\Model\UpdateGroupSettingsRequest(); // \OpenAPI\Client\Model\UpdateGroupSettingsRequest

try {
    $apiInstance->updateGroupSettings($group_id, $option, $update_group_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroupSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Id of the group. |
 **option** | **string**| Optional query parameters:  * &#x60;meeting_authentication&#x60; — [Meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars).  * &#x60;recording_authentication&#x60; — [Recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings).  * &#x60;meeting_security&#x60; — Meeting security settings. | [optional]
 **update_group_settings_request** | [**\OpenAPI\Client\Model\UpdateGroupSettingsRequest**](../Model/UpdateGroupSettingsRequest.md)|  | [optional]

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

## `uploadGroupVB()`

```php
uploadGroupVB($group_id, $file): \OpenAPI\Client\Model\UploadGroupVB201Response
```

Upload Virtual Background files

Use this API to [upload Virtual Background files](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background#h_01EJF3YFEWGT8YA0ZJ079JEDQE) for all users in a group to use.    **Scopes:** `group:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  * The [Virtual Background feature](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background#h_2ef28080-fce9-4ac2-b567-dc958afab1b7) must be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 0mgThLiRQH2bUHvIaL4t2g; // string | The group ID. To get a group's ID, use the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.
$file = 'file_example'; // string | The Virtual Background file's path.

try {
    $result = $apiInstance->uploadGroupVB($group_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->uploadGroupVB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The group ID. To get a group&#39;s ID, use the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. |
 **file** | **string**| The Virtual Background file&#39;s path. | [optional]

### Return type

[**\OpenAPI\Client\Model\UploadGroupVB201Response**](../Model/UploadGroupVB201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
