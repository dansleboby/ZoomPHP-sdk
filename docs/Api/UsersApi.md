# OpenAPI\Client\UsersApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**delUserVB()**](UsersApi.md#delUserVB) | **DELETE** /users/{userId}/settings/virtual_backgrounds | Delete Virtual Background files
[**updatePresenceStatus()**](UsersApi.md#updatePresenceStatus) | **PUT** /users/{userId}/presence_status | Update a user&#39;s presence status
[**uploadVBuser()**](UsersApi.md#uploadVBuser) | **POST** /users/{userId}/settings/virtual_backgrounds | Upload Virtual Background files
[**user()**](UsersApi.md#user) | **GET** /users/{userId} | Get a user
[**userAssistantCreate()**](UsersApi.md#userAssistantCreate) | **POST** /users/{userId}/assistants | Add assistants
[**userAssistantDelete()**](UsersApi.md#userAssistantDelete) | **DELETE** /users/{userId}/assistants/{assistantId} | Delete a user assistant
[**userAssistants()**](UsersApi.md#userAssistants) | **GET** /users/{userId}/assistants | List user assistants
[**userAssistantsDelete()**](UsersApi.md#userAssistantsDelete) | **DELETE** /users/{userId}/assistants | Delete user assistants
[**userCreate()**](UsersApi.md#userCreate) | **POST** /users | Create users
[**userDelete()**](UsersApi.md#userDelete) | **DELETE** /users/{userId} | Delete a user
[**userEmail()**](UsersApi.md#userEmail) | **GET** /users/email | Check a user email
[**userEmailUpdate()**](UsersApi.md#userEmailUpdate) | **PUT** /users/{userId}/email | Update a user&#39;s email
[**userPassword()**](UsersApi.md#userPassword) | **PUT** /users/{userId}/password | Update a user&#39;s password
[**userPermission()**](UsersApi.md#userPermission) | **GET** /users/{userId}/permissions | Get user permissions
[**userPicture()**](UsersApi.md#userPicture) | **POST** /users/{userId}/picture | Upload a user&#39;s profile picture
[**userPictureDelete()**](UsersApi.md#userPictureDelete) | **DELETE** /users/{userId}/picture | Delete a user&#39;s profile picture
[**userSSOTokenDelete()**](UsersApi.md#userSSOTokenDelete) | **DELETE** /users/{userId}/token | Revoke a user&#39;s SSO token
[**userSchedulerDelete()**](UsersApi.md#userSchedulerDelete) | **DELETE** /users/{userId}/schedulers/{schedulerId} | Delete a scheduler
[**userSchedulers()**](UsersApi.md#userSchedulers) | **GET** /users/{userId}/schedulers | List user schedulers
[**userSchedulersDelete()**](UsersApi.md#userSchedulersDelete) | **DELETE** /users/{userId}/schedulers | Delete user schedulers
[**userSettings()**](UsersApi.md#userSettings) | **GET** /users/{userId}/settings | Get user settings
[**userSettingsUpdate()**](UsersApi.md#userSettingsUpdate) | **PATCH** /users/{userId}/settings | Update user settings
[**userStatus()**](UsersApi.md#userStatus) | **PUT** /users/{userId}/status | Update user status
[**userToken()**](UsersApi.md#userToken) | **GET** /users/{userId}/token | Get a user&#39;s token
[**userUpdate()**](UsersApi.md#userUpdate) | **PATCH** /users/{userId} | Update a user
[**userVanityName()**](UsersApi.md#userVanityName) | **GET** /users/vanity_name | Check a user&#39;s PM room
[**userZak()**](UsersApi.md#userZak) | **GET** /users/me/zak | Get user&#39;s ZAK
[**users()**](UsersApi.md#users) | **GET** /users | List users


## `delUserVB()`

```php
delUserVB($user_id, $file_ids)
```

Delete Virtual Background files

Use this API to delete a user's Virtual Background files. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.    **Scopes:** `user:write`, `user:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The [Virtual Background feature](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background#h_2ef28080-fce9-4ac2-b567-dc958afab1b7) must be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = KDcuGIm1QgePTO8WbOqwIQ; // string | The user's ID. To get a user's ID, use the [**List users**](/docs/api-reference/zoom-api/ma#operation/users) API. For user-level apps, pass the `me` value instead of the user ID value.
$file_ids = _l0MP1U7Qn2JgJ4oEJbVZQ; // string | A comma-separated list of the Virtual Background file IDs to delete.

try {
    $apiInstance->delUserVB($user_id, $file_ids);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->delUserVB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user&#39;s ID. To get a user&#39;s ID, use the [**List users**](/docs/api-reference/zoom-api/ma#operation/users) API. For user-level apps, pass the &#x60;me&#x60; value instead of the user ID value. |
 **file_ids** | **string**| A comma-separated list of the Virtual Background file IDs to delete. | [optional]

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

## `updatePresenceStatus()`

```php
updatePresenceStatus($user_id, $update_presence_status_request)
```

Update a user's presence status

Use this API to update a user's presence status. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  A user's status **cannot** be updated more than once per minute. For example, you can only submit a maximum of one update request per minute for a single user.  Users in the Zoom desktop client and mobile apps are assigned with a [presence status](https://support.zoom.us/hc/en-us/articles/360032554051-Status-Icons). The presence status informs users of their contact's availability. Users can also change their own presence status to one the following: * **Away** * **Do not disturb** * **Available** * **In a calendar event** * **Presenting** * **In a Zoom meeting** * **On a call**  Note that a user's presence status **cannot** be updated via this API if the user is not logged in to the Zoom client.  **Scopes:** `user:write`, `user:write:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = KDcuGIm1QgePTO8WbOqwIQ; // string
$update_presence_status_request = new \OpenAPI\Client\Model\UpdatePresenceStatusRequest(); // \OpenAPI\Client\Model\UpdatePresenceStatusRequest

try {
    $apiInstance->updatePresenceStatus($user_id, $update_presence_status_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updatePresenceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **update_presence_status_request** | [**\OpenAPI\Client\Model\UpdatePresenceStatusRequest**](../Model/UpdatePresenceStatusRequest.md)|  | [optional]

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

## `uploadVBuser()`

```php
uploadVBuser($user_id, $file): \OpenAPI\Client\Model\UploadVBuser201Response
```

Upload Virtual Background files

Use this API to [upload a Virtual Background files](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background) to a user's profile. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.    **Note:**  * A user profile cannot exceed more than 10 Virtual Background files.  * You can only upload image files that are in JPG/JPEG, GIF or PNG format.  * Video files must be in MP4 or MOV file format with a minimum resolution of 480 by 360 pixels (360p) and a maximum resolution of 1920 by 1080 pixels (1080p).  * The Virtual Background file size cannot exceed 15 megabytes (MB).    **Scopes:** `user:write`, `user:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  * The [Virtual Background feature](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background#h_2ef28080-fce9-4ac2-b567-dc958afab1b7) must be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = KDcuGIm1QgePTO8WbOqwIQ; // string | The user's ID. To get a user's ID, use the [**List users**](/docs/api-reference/zoom-api/ma#operation/users) API. For user-level apps, pass the `me` value instead of the user ID value.
$file = 'file_example'; // string | The Virtual Background's file path.

try {
    $result = $apiInstance->uploadVBuser($user_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->uploadVBuser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user&#39;s ID. To get a user&#39;s ID, use the [**List users**](/docs/api-reference/zoom-api/ma#operation/users) API. For user-level apps, pass the &#x60;me&#x60; value instead of the user ID value. |
 **file** | **string**| The Virtual Background&#39;s file path. | [optional]

### Return type

[**\OpenAPI\Client\Model\UploadVBuser201Response**](../Model/UploadVBuser201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `user()`

```php
user($user_id, $login_type, $encrypted_email, $search_by_unique_id): \OpenAPI\Client\Model\User200Response
```

Get a user

Use this API to view a user's information on a Zoom account. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.   **Note:** Users who have not activated their account will have a `pending` status. These users' `created_at` timestamp will also display the time at which the API call was made, **not** the account's creation date.   **Scopes:** `user:read:admin`, `user:read`, `user_info:read` <br>  * **Note:** The `user_info:read` scope is only available when you pass the `me` value for the `$userId` value.    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$login_type = 101; // int | The user's login method:  * `0` — Facebook OAuth  * `1` — Google OAuth  * `24` — Apple OAuth  * `27` — Microsoft OAuth  * `97` — Mobile device  * `98` — RingCentral OAuth  * `99` — API user  * `100` — Zoom Work email  * `101` — Single Sign-On (SSO)   The following login methods are only available in China:  * `11` — Phone number  * `21` — WeChat  * `23` — Alipay
$encrypted_email = false; // bool | Whether the email address passed for the `userId` value is an encrypted email address:    * `true` — The email address is encrypted.   * `false` — The email address is not encrypted.    If you do not query this parameter, this value defaults to null (`false`).
$search_by_unique_id = true; // bool | Whether the queried `userId` value is an employee unique ID:  * `true` — The queried ID is an employee's unique ID.  * `false` — The queried ID is not an employee's unique ID.   This value defaults to `false` (null).

try {
    $result = $apiInstance->user($user_id, $login_type, $encrypted_email, $search_by_unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->user: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **login_type** | **int**| The user&#39;s login method:  * &#x60;0&#x60; — Facebook OAuth  * &#x60;1&#x60; — Google OAuth  * &#x60;24&#x60; — Apple OAuth  * &#x60;27&#x60; — Microsoft OAuth  * &#x60;97&#x60; — Mobile device  * &#x60;98&#x60; — RingCentral OAuth  * &#x60;99&#x60; — API user  * &#x60;100&#x60; — Zoom Work email  * &#x60;101&#x60; — Single Sign-On (SSO)   The following login methods are only available in China:  * &#x60;11&#x60; — Phone number  * &#x60;21&#x60; — WeChat  * &#x60;23&#x60; — Alipay | [optional]
 **encrypted_email** | **bool**| Whether the email address passed for the &#x60;userId&#x60; value is an encrypted email address:    * &#x60;true&#x60; — The email address is encrypted.   * &#x60;false&#x60; — The email address is not encrypted.    If you do not query this parameter, this value defaults to null (&#x60;false&#x60;). | [optional] [default to false]
 **search_by_unique_id** | **bool**| Whether the queried &#x60;userId&#x60; value is an employee unique ID:  * &#x60;true&#x60; — The queried ID is an employee&#39;s unique ID.  * &#x60;false&#x60; — The queried ID is not an employee&#39;s unique ID.   This value defaults to &#x60;false&#x60; (null). | [optional]

### Return type

[**\OpenAPI\Client\Model\User200Response**](../Model/User200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userAssistantCreate()`

```php
userAssistantCreate($user_id, $user_assistants_list): \OpenAPI\Client\Model\UserAssistantCreate201Response
```

Add assistants

Use this API to assign assistants to a user. In the request body, provide either the user's ID or the user's email address. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.    Assistants are users to whom the current user has assigned the [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-Privilege). These assistants can schedule meetings on behalf of the current user. Assistants can also manage and act as an alternative host for the user's meetings if the administrator has enabled the [co-host feature](https://support.zoom.us/hc/en-us/articles/206330935-Enabling-and-adding-a-co-host) on the account.  **Scopes:** `user:write:admin`, `user:write` </br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  * The user and the assistant must have a Licensed or an On-prem license.  * Assistants must be under the current user's account or in the same organization with the current user's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$user_assistants_list = new \OpenAPI\Client\Model\UserAssistantsList(); // \OpenAPI\Client\Model\UserAssistantsList | User assistant.

try {
    $result = $apiInstance->userAssistantCreate($user_id, $user_assistants_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userAssistantCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **user_assistants_list** | [**\OpenAPI\Client\Model\UserAssistantsList**](../Model/UserAssistantsList.md)| User assistant. |

### Return type

[**\OpenAPI\Client\Model\UserAssistantCreate201Response**](../Model/UserAssistantCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userAssistantDelete()`

```php
userAssistantDelete($user_id, $assistant_id)
```

Delete a user assistant

Delete a specific assistant of a user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  Assistants are the users to whom the current user has assigned [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-Privilege). These assistants can schedule meeting on behalf of the current user as well as manage and act as an alternative host for all meetings if the admin has enabled [Co-host option](https://zoom.us/account/setting) on the account.  **Scopes:** `user:write:admin`, `user:write`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * The user as well as the assistant must have Licensed or an On-prem license. * Assistants must be under the current user's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$assistant_id = KDcuGIm1QgePTO8WbOqwIQ; // string | Assistant ID.

try {
    $apiInstance->userAssistantDelete($user_id, $assistant_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userAssistantDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **assistant_id** | **string**| Assistant ID. |

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

## `userAssistants()`

```php
userAssistants($user_id): \OpenAPI\Client\Model\UserAssistantsList
```

List user assistants

List a user's assistants. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  Assistants are the users to whom the current user has assigned [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-Privilege). These assistants can schedule meeting on behalf of the current user as well as manage and act as an alternative host for all meetings if the admin has enabled [Co-host option](https://zoom.us/account/setting) on the account.  **Scopes:** `user:read:admin`, `user:read`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  **Prerequisites:**  * Current user as well as the assistant must have Licensed or an On-prem license. * Assistants must be under the current user's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $result = $apiInstance->userAssistants($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userAssistants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |

### Return type

[**\OpenAPI\Client\Model\UserAssistantsList**](../Model/UserAssistantsList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userAssistantsDelete()`

```php
userAssistantsDelete($user_id)
```

Delete user assistants

Delete all assistants of the current user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  Assistants are the users to whom the current user has assigned [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-Privilege). These assistants can schedule meeting on behalf of the current user as well as manage and act as an alternative host for all meetings if the admin has enabled [Co-host option](https://zoom.us/account/setting) on the account.  **Scopes:** `user:write:admin`, `user:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * The user as well as the assistant must have Licensed or an On-prem license. * Assistants must be under the current user's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $apiInstance->userAssistantsDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userAssistantsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `userCreate()`

```php
userCreate($user_create_request): \OpenAPI\Client\Model\UserCreate201Response
```

Create users

Use this API to add a new user to your Zoom account.   **Scopes:** `user:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Note:** The following rate limits apply when you use the `create` value for the `action` field:  * 50 requests per day for **Free** accounts.  * 1,500 requests per day for **Pro** accounts.  * 10,000 requests per day for **Business+** accounts.   **Prerequisites:**  * A Pro or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_create_request = new \OpenAPI\Client\Model\UserCreateRequest(); // \OpenAPI\Client\Model\UserCreateRequest | User

try {
    $result = $apiInstance->userCreate($user_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_create_request** | [**\OpenAPI\Client\Model\UserCreateRequest**](../Model/UserCreateRequest.md)| User |

### Return type

[**\OpenAPI\Client\Model\UserCreate201Response**](../Model/UserCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userDelete()`

```php
userDelete($user_id, $action, $encrypted_email, $transfer_email, $transfer_meeting, $transfer_webinar, $transfer_recording, $transfer_whiteboard)
```

Delete a user

Use this API to disassociate (unlink) a user or permanently delete a user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  **Deleting** a user **permanently** removes the user and their data from Zoom. Users can create a new Zoom account using the same email address. An account owner or an account admin can transfer meetings, webinars and cloud recordings to another Zoom user account before deleting.  **Disassociating** a user unlinks the user from the associated Zoom account and provides the user their own basic free Zoom account. The disassociated user can then purchase their own Zoom licenses. An account owner or account admin can transfer the user's meetings, webinars, and cloud recordings to another user before disassociation.  **Scopes:** `user:write:admin`, `user:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$action = delete; // string | Delete action options:<br>`disassociate` - Disassociate a user.<br>`delete`-  Permanently delete a user.<br>Note: To delete pending user in the account, use `disassociate`
$encrypted_email = false; // bool | Whether the email address passed for the `userId` value is an encrypted email address:    * `true` — The email address is encrypted.   * `false` — The email address is not encrypted.    If you do not query this parameter, this value defaults to null (`false`).
$transfer_email = jchill@example.com; // string | Transfer email. This field is **required** if the user has upcoming Zoom Events scheduled. After you delete or disassociate the user, the user's upcoming Zoom Events will be transferred to the target user.
$transfer_meeting = true; // bool | Transfer meeting.
$transfer_webinar = false; // bool | Transfer webinar.
$transfer_recording = true; // bool | Transfer recording.
$transfer_whiteboard = false; // bool | When you delete the user, whether to transfer all their [Zoom Whiteboard](https://support.zoom.us/hc/en-us/articles/4410916881421) data to another user.

try {
    $apiInstance->userDelete($user_id, $action, $encrypted_email, $transfer_email, $transfer_meeting, $transfer_webinar, $transfer_recording, $transfer_whiteboard);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **action** | **string**| Delete action options:&lt;br&gt;&#x60;disassociate&#x60; - Disassociate a user.&lt;br&gt;&#x60;delete&#x60;-  Permanently delete a user.&lt;br&gt;Note: To delete pending user in the account, use &#x60;disassociate&#x60; | [optional] [default to &#39;disassociate&#39;]
 **encrypted_email** | **bool**| Whether the email address passed for the &#x60;userId&#x60; value is an encrypted email address:    * &#x60;true&#x60; — The email address is encrypted.   * &#x60;false&#x60; — The email address is not encrypted.    If you do not query this parameter, this value defaults to null (&#x60;false&#x60;). | [optional] [default to false]
 **transfer_email** | **string**| Transfer email. This field is **required** if the user has upcoming Zoom Events scheduled. After you delete or disassociate the user, the user&#39;s upcoming Zoom Events will be transferred to the target user. | [optional]
 **transfer_meeting** | **bool**| Transfer meeting. | [optional]
 **transfer_webinar** | **bool**| Transfer webinar. | [optional]
 **transfer_recording** | **bool**| Transfer recording. | [optional]
 **transfer_whiteboard** | **bool**| When you delete the user, whether to transfer all their [Zoom Whiteboard](https://support.zoom.us/hc/en-us/articles/4410916881421) data to another user. | [optional]

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

## `userEmail()`

```php
userEmail($email): \OpenAPI\Client\Model\UserEmail200Response
```

Check a user email

Verify if a user's email is registered with Zoom.<br><br>  <b>Note: </b>You can successfully check if a user is a registered Zoom user only if the user **signed up for Zoom via email and is within your account.** If you provide an email address of a user who is not in your account, the value of \"existed_email\" parameter will be \"false\" irrespective of whether or not the user is registered with Zoom. The response of this API call will not include users who joined Zoom using options such as \"Sign in with SSO\", \"Sign in with Google\" or \"Sign in with Facebook\" even if they are in the same account as yours.  **Scopes:** `user:read:admin` `user:read`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = jchill@example.com; // string | The email address to be verified.

try {
    $result = $apiInstance->userEmail($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address to be verified. |

### Return type

[**\OpenAPI\Client\Model\UserEmail200Response**](../Model/UserEmail200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userEmailUpdate()`

```php
userEmailUpdate($user_id, $user_email_update_request)
```

Update a user's email

Change a user's [email address](https://support.zoom.us/hc/en-us/articles/201362563-How-Do-I-Change-the-Email-on-My-Account-) on a Zoom account that has managed domain set up. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  * If the Zoom account in which the user belongs has multiple [managed domains](https://support.zoom.us/hc/en-us/articles/203395207-What-is-Managed-Domain-), then the email to be updated **must** match one of the managed domains. * A user's email address can **only** be changed for a maximum of 3 times in a day (24 hours).  **Scopes:** `user:write:admin`, `user:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * Managed domain must be enabled in the account.  * The new email address should not already exist in Zoom.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$user_email_update_request = new \OpenAPI\Client\Model\UserEmailUpdateRequest(); // \OpenAPI\Client\Model\UserEmailUpdateRequest | User email.

try {
    $apiInstance->userEmailUpdate($user_id, $user_email_update_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userEmailUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **user_email_update_request** | [**\OpenAPI\Client\Model\UserEmailUpdateRequest**](../Model/UserEmailUpdateRequest.md)| User email. |

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

## `userPassword()`

```php
userPassword($user_id, $user_password_request)
```

Update a user's password

Update the [password](https://support.zoom.us/hc/en-us/articles/206344385-Change-a-User-s-Password) of a user using which the user can login to Zoom. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  After this request is processed successfully, an email notification will be sent to the user stating that the password was changed.<br> **Scopes:** `user:write:admin` `user:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` **Prerequisites:**<br> * Owner or admin of the Zoom account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$user_password_request = new \OpenAPI\Client\Model\UserPasswordRequest(); // \OpenAPI\Client\Model\UserPasswordRequest | User password.

try {
    $apiInstance->userPassword($user_id, $user_password_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **user_password_request** | [**\OpenAPI\Client\Model\UserPasswordRequest**](../Model/UserPasswordRequest.md)| User password. |

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

## `userPermission()`

```php
userPermission($user_id): \OpenAPI\Client\Model\UserPermissions
```

Get user permissions

Use this API to get permissions that have been granted to the user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  Users can be assigned a set of permissions that allows them to access only the pages/information that a user needs to view or edit.  **Scopes:** `user:read:admin`, `user:read`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $result = $apiInstance->userPermission($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |

### Return type

[**\OpenAPI\Client\Model\UserPermissions**](../Model/UserPermissions.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userPicture()`

```php
userPicture($user_id, $pic_file)
```

Upload a user's profile picture

Upload a user's profile picture. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  Provide `multipart/form-data` as the value of the `content-type` header for this request. This API supports `.jpeg` and `.png` file formats.  **Scopes:** `user:write:admin`, `user:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$pic_file = 'pic_file_example'; // string | The file's path.

try {
    $apiInstance->userPicture($user_id, $pic_file);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userPicture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **pic_file** | **string**| The file&#39;s path. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userPictureDelete()`

```php
userPictureDelete($user_id)
```

Delete a user's profile picture

Use this API to delete a user's profile picture. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.   **Scopes:** `user:write:admin`, `user:write` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $apiInstance->userPictureDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userPictureDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `userSSOTokenDelete()`

```php
userSSOTokenDelete($user_id)
```

Revoke a user's SSO token

Revoke a user's SSO token. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  After calling this API, the SSO user will be logged out of their current Zoom session.  **Scopes:** `user:write:admin`, `user:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $apiInstance->userSSOTokenDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSSOTokenDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `userSchedulerDelete()`

```php
userSchedulerDelete($user_id, $scheduler_id)
```

Delete a scheduler

Delete a scheduler. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  Schedulers are users on whose behalf the current user (assistant) can schedule meetings for. By calling this API, the current user will no longer be a scheduling assistant of this scheduler.  **Scopes:** `user:write:admin`, `user:write`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * Current user must be under the same account as the scheduler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$scheduler_id = KDcuGIm1QgePTO8WbOqwIQ; // string | Scheduler's ID.

try {
    $apiInstance->userSchedulerDelete($user_id, $scheduler_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSchedulerDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **scheduler_id** | **string**| Scheduler&#39;s ID. |

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

## `userSchedulers()`

```php
userSchedulers($user_id): \OpenAPI\Client\Model\UserSchedulersList
```

List user schedulers

List all the schedulers of a user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  Schedulers in this context are the users for whom the current user can schedule meetings for. For example, if the current user (the user whose `userId` was passed in the `path` parameter) is \"user A\", the response of this API will contain a list of user(s), for whom user A can schedule and manage meetings. User A is the assistant of these users and thus has scheduling privilege for these user(s).  **Scopes:** `user:read:admin`, `user:read`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  **Prerequisites:**  * Current user must be under the same account as the scheduler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $result = $apiInstance->userSchedulers($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSchedulers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |

### Return type

[**\OpenAPI\Client\Model\UserSchedulersList**](../Model/UserSchedulersList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userSchedulersDelete()`

```php
userSchedulersDelete($user_id)
```

Delete user schedulers

Delete all of a user's schedulers. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  Schedulers are users on whose behalf the current user (assistant) can schedule meetings for. By calling this API, the current user will no longer be a scheduling assistant of any user.   **Scopes:** `user:write:admin`, `user:write`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * Current user (assistant) must be under the same account as the scheduler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $apiInstance->userSchedulersDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSchedulersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userSettings()`

```php
userSettings($user_id, $login_type, $option, $custom_query_fields): \OpenAPI\Client\Model\UserSettings200Response
```

Get user settings

Retrieve a user's settings. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  **Scopes:** `user:read:admin`, `user:read`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$login_type = 101; // int | The user's login method:  * `0` — Facebook OAuth  * `1` — Google OAuth  * `24` — Apple OAuth  * `27` — Microsoft OAuth  * `97` — Mobile device  * `98` — RingCentral OAuth  * `99` — API user  * `100` — Zoom Work email  * `101` — Single Sign-On (SSO)   The following login methods are only available in China:  * `11` — Phone number  * `21` — WeChat  * `23` — Alipay
$option = meeting_security; // string | Optional query parameters:  * `meeting_authentication` — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user's account.  * `recording_authentication` — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user's account.  * `meeting_security` — Use this query parameter to view the meeting security settings applied to the user's account.
$custom_query_fields = host_video; // string | Provide the name of the field by which you would like to filter the response. For example, if you provide \"host_video\" as the value of this field, you will get a response similar to the following:<br> {     \"schedule_meeting\": {         \"host_video\": false     } } <br>You can provide multiple values by separating them with commas(example: \"host_video,participant_video”).

try {
    $result = $apiInstance->userSettings($user_id, $login_type, $option, $custom_query_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **login_type** | **int**| The user&#39;s login method:  * &#x60;0&#x60; — Facebook OAuth  * &#x60;1&#x60; — Google OAuth  * &#x60;24&#x60; — Apple OAuth  * &#x60;27&#x60; — Microsoft OAuth  * &#x60;97&#x60; — Mobile device  * &#x60;98&#x60; — RingCentral OAuth  * &#x60;99&#x60; — API user  * &#x60;100&#x60; — Zoom Work email  * &#x60;101&#x60; — Single Sign-On (SSO)   The following login methods are only available in China:  * &#x60;11&#x60; — Phone number  * &#x60;21&#x60; — WeChat  * &#x60;23&#x60; — Alipay | [optional]
 **option** | **string**| Optional query parameters:  * &#x60;meeting_authentication&#x60; — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user&#39;s account.  * &#x60;recording_authentication&#x60; — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user&#39;s account.  * &#x60;meeting_security&#x60; — Use this query parameter to view the meeting security settings applied to the user&#39;s account. | [optional]
 **custom_query_fields** | **string**| Provide the name of the field by which you would like to filter the response. For example, if you provide \&quot;host_video\&quot; as the value of this field, you will get a response similar to the following:&lt;br&gt; {     \&quot;schedule_meeting\&quot;: {         \&quot;host_video\&quot;: false     } } &lt;br&gt;You can provide multiple values by separating them with commas(example: \&quot;host_video,participant_video”). | [optional]

### Return type

[**\OpenAPI\Client\Model\UserSettings200Response**](../Model/UserSettings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userSettingsUpdate()`

```php
userSettingsUpdate($user_id, $user_settings_update_request, $option)
```

Update user settings

Update a user's settings. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  **Scopes:** `user:write:admin`, `user:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$user_settings_update_request = new \OpenAPI\Client\Model\UserSettingsUpdateRequest(); // \OpenAPI\Client\Model\UserSettingsUpdateRequest | User Settings
$option = meeting_security; // string | Optional query parameters:  * `meeting_authentication` — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user's account.  * `recording_authentication` — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user's account.  * `meeting_security` — Use this query parameter to view the meeting security settings applied to the user's account.

try {
    $apiInstance->userSettingsUpdate($user_id, $user_settings_update_request, $option);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **user_settings_update_request** | [**\OpenAPI\Client\Model\UserSettingsUpdateRequest**](../Model/UserSettingsUpdateRequest.md)| User Settings |
 **option** | **string**| Optional query parameters:  * &#x60;meeting_authentication&#x60; — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user&#39;s account.  * &#x60;recording_authentication&#x60; — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user&#39;s account.  * &#x60;meeting_security&#x60; — Use this query parameter to view the meeting security settings applied to the user&#39;s account. | [optional]

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

## `userStatus()`

```php
userStatus($user_id, $user_status_request)
```

Update user status

Use this API to [deactivate](https://support.zoom.us/hc/en-us/articles/115005269946-Remove-User-from-your-Account#h_6a9bc1c3-d739-4945-b1f2-00b3b88fb5cc) an active user or to [reactivate](https://support.zoom.us/hc/en-us/articles/115005269946-Remove-User-from-your-Account#h_16319724-d120-4be6-af5d-31582d134ea0) a deactivated user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  An account owner or admins can deactivate as well as activate a user in a Zoom account. Deactivating a user will remove all licenses associated with a user. It will prevent the deactivated user from logging into their Zoom account. A deactivated user can be reactivated. Reactivating a user grants the user access to login to their Zoom account.  **Scopes:** `user:write:admin`, `user:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$user_status_request = new \OpenAPI\Client\Model\UserStatusRequest(); // \OpenAPI\Client\Model\UserStatusRequest | User status.

try {
    $apiInstance->userStatus($user_id, $user_status_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **user_status_request** | [**\OpenAPI\Client\Model\UserStatusRequest**](../Model/UserStatusRequest.md)| User status. |

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

## `userToken()`

```php
userToken($user_id, $type, $ttl): \OpenAPI\Client\Model\UserToken200Response
```

Get a user's token

Use this API to get a user's Zoom token or Zoom Access Key (ZAK). For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.    **Scopes:** `user:read:admin`, `user:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$type = zak; // string | The user token type:  * `zak` — A Zoom Access Key (ZAK) is used to generate a URL to start meetings. See [Getting a Zoom Access Key (ZAK)](https://marketplace.zoom.us/docs/sdk/native-sdks/auth#generating-zoom-access-token-zak) for details. The ZAK's expiration time is two hours. For API users, the expiration time is 90 days. An API user is a user created via the `custCreate` action in the **[Create users](https://marketplace.zoom.us/docs/api-reference/zoom-api/methods/#operation/userCreate)** API. The maximum length of this value is `512`.  * `token` — **Deprecated.** A Zoom token. This token expires in 14 days. You must make the request again after expiration to receive a new token. This query parameter returns a null value if the user signed in to Zoom via Google or Facebook. The maximum length of this value is `512`.    This value defaults to `token`.
$ttl = 7200; // int | The ZAK expiration time to live (TTL). The value of this query parameter denotes the expiry time of the ZAK, in seconds. To update the user's ZAK TTL, use this field with the `zak` value for the `type` query parameter.    This value defaults to `7200` or `7776000` (90 days) for API users. The maximum value is one year.

try {
    $result = $apiInstance->userToken($user_id, $type, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **type** | **string**| The user token type:  * &#x60;zak&#x60; — A Zoom Access Key (ZAK) is used to generate a URL to start meetings. See [Getting a Zoom Access Key (ZAK)](https://marketplace.zoom.us/docs/sdk/native-sdks/auth#generating-zoom-access-token-zak) for details. The ZAK&#39;s expiration time is two hours. For API users, the expiration time is 90 days. An API user is a user created via the &#x60;custCreate&#x60; action in the **[Create users](https://marketplace.zoom.us/docs/api-reference/zoom-api/methods/#operation/userCreate)** API. The maximum length of this value is &#x60;512&#x60;.  * &#x60;token&#x60; — **Deprecated.** A Zoom token. This token expires in 14 days. You must make the request again after expiration to receive a new token. This query parameter returns a null value if the user signed in to Zoom via Google or Facebook. The maximum length of this value is &#x60;512&#x60;.    This value defaults to &#x60;token&#x60;. | [optional] [default to &#39;token&#39;]
 **ttl** | **int**| The ZAK expiration time to live (TTL). The value of this query parameter denotes the expiry time of the ZAK, in seconds. To update the user&#39;s ZAK TTL, use this field with the &#x60;zak&#x60; value for the &#x60;type&#x60; query parameter.    This value defaults to &#x60;7200&#x60; or &#x60;7776000&#x60; (90 days) for API users. The maximum value is one year. | [optional] [default to 7200]

### Return type

[**\OpenAPI\Client\Model\UserToken200Response**](../Model/UserToken200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userUpdate()`

```php
userUpdate($user_id, $user_update, $login_type, $remove_tsp_credentials)
```

Update a user

Use this API to update a user's [Zoom profile](https://support.zoom.us/hc/en-us/articles/201363203-My-Profile) information. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  **Scopes:** `user:write:admin` `user:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$user_update = new \OpenAPI\Client\Model\UserUpdate(); // \OpenAPI\Client\Model\UserUpdate | The user's profile information.
$login_type = 101; // int | The user's login method:  * `0` — Facebook OAuth  * `1` — Google OAuth  * `24` — Apple OAuth  * `27` — Microsoft OAuth  * `97` — Mobile device  * `98` — RingCentral OAuth  * `99` — API user  * `100` — Zoom Work email  * `101` — Single Sign-On (SSO)   The following login methods are only available in China:  * `11` — Phone number  * `21` — WeChat  * `23` — Alipay
$remove_tsp_credentials = true; // bool | Whether to remove the user's TSP credentials:  * `true` — The queried ID is an employee's unique ID.  * `false` — The queried ID is not an employee's unique ID.    This value defaults to `false` (null).

try {
    $apiInstance->userUpdate($user_id, $user_update, $login_type, $remove_tsp_credentials);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **user_update** | [**\OpenAPI\Client\Model\UserUpdate**](../Model/UserUpdate.md)| The user&#39;s profile information. |
 **login_type** | **int**| The user&#39;s login method:  * &#x60;0&#x60; — Facebook OAuth  * &#x60;1&#x60; — Google OAuth  * &#x60;24&#x60; — Apple OAuth  * &#x60;27&#x60; — Microsoft OAuth  * &#x60;97&#x60; — Mobile device  * &#x60;98&#x60; — RingCentral OAuth  * &#x60;99&#x60; — API user  * &#x60;100&#x60; — Zoom Work email  * &#x60;101&#x60; — Single Sign-On (SSO)   The following login methods are only available in China:  * &#x60;11&#x60; — Phone number  * &#x60;21&#x60; — WeChat  * &#x60;23&#x60; — Alipay | [optional]
 **remove_tsp_credentials** | **bool**| Whether to remove the user&#39;s TSP credentials:  * &#x60;true&#x60; — The queried ID is an employee&#39;s unique ID.  * &#x60;false&#x60; — The queried ID is not an employee&#39;s unique ID.    This value defaults to &#x60;false&#x60; (null). | [optional]

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

## `userVanityName()`

```php
userVanityName($vanity_name): \OpenAPI\Client\Model\UserVanityName200Response
```

Check a user's PM room

A personal meeting room is a virtual meeting room that can be permanently assigned to a user. Use this API to check if a personal meeting room with the given name exists or not.<br><br> **Scopes:** `user:read:admin` `user:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vanity_name = Jill; // string | Personal meeting room name.

try {
    $result = $apiInstance->userVanityName($vanity_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userVanityName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vanity_name** | **string**| Personal meeting room name. |

### Return type

[**\OpenAPI\Client\Model\UserVanityName200Response**](../Model/UserVanityName200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userZak()`

```php
userZak(): \OpenAPI\Client\Model\UserZak200Response
```

Get user's ZAK

Get the Zoom Access Key (ZAK) for the authenticated user associated with the access token in the API request. You can use a ZAK to start or join a meeting on behalf of this user.  ZAKs obtained with this endpoint expire five minutes after receipt.  To get a ZAK for a different user or with a different expiration, use the [Get a user token](https://marketplace.zoom.us/docs/api-reference/zoom-api/methods#operation/userToken) API with the `zak` `type` query parameter.  See [Getting a Zoom Access Key (ZAK)](https://marketplace.zoom.us/docs/sdk/native-sdks/auth#generating-zoom-access-token-zak) for details.  **Scope:** `user_zak:read`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userZak();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userZak: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UserZak200Response**](../Model/UserZak200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `users()`

```php
users($status, $page_size, $role_id, $page_number, $include_fields, $next_page_token): \OpenAPI\Client\Model\Users200Response
```

List users

Use this API to list your account's users.   **Scopes:** `user:read:admin`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = active; // string | The user's status:  * `active` — The user exists on the account.  * `inactive` — The user has been deactivated.  * `pending` — The user exists on the account but has not activated their account. See [Managing users](https://support.zoom.us/hc/en-us/articles/201363183) for details.  This value defaults to `active`.
$page_size = 30; // int | The number of records returned within a single API call.
$role_id = 0; // string | The role's unique ID. Use this parameter to filter the response by a specific role. You can use the [**List roles**](/docs/api-reference/zoom-api/methods#operation/roles) API to get a role's unique ID value.
$page_number = 1; // string | The page number of the current page in the returned records.
$include_fields = custom_attributes; // string | Use this parameter to display specific attributes in the API call's response:  * `custom_attributes` — Return the user's custom attributes.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->users($status, $page_size, $role_id, $page_number, $include_fields, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->users: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| The user&#39;s status:  * &#x60;active&#x60; — The user exists on the account.  * &#x60;inactive&#x60; — The user has been deactivated.  * &#x60;pending&#x60; — The user exists on the account but has not activated their account. See [Managing users](https://support.zoom.us/hc/en-us/articles/201363183) for details.  This value defaults to &#x60;active&#x60;. | [optional] [default to &#39;active&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **role_id** | **string**| The role&#39;s unique ID. Use this parameter to filter the response by a specific role. You can use the [**List roles**](/docs/api-reference/zoom-api/methods#operation/roles) API to get a role&#39;s unique ID value. | [optional]
 **page_number** | **string**| The page number of the current page in the returned records. | [optional]
 **include_fields** | **string**| Use this parameter to display specific attributes in the API call&#39;s response:  * &#x60;custom_attributes&#x60; — Return the user&#39;s custom attributes. | [optional]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\OpenAPI\Client\Model\Users200Response**](../Model/Users200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
