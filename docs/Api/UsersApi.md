# Swagger\Client\UsersApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**switchUserAccount**](UsersApi.md#switchUserAccount) | **PUT** /accounts/{accountId}/users/{userId}/account | Switch a User&#39;s Account
[**user**](UsersApi.md#user) | **GET** /users/{userId} | Get a User
[**userAssistantCreate**](UsersApi.md#userAssistantCreate) | **POST** /users/{userId}/assistants | Add Assistants
[**userAssistantDelete**](UsersApi.md#userAssistantDelete) | **DELETE** /users/{userId}/assistants/{assistantId} | Delete a User Assistant
[**userAssistants**](UsersApi.md#userAssistants) | **GET** /users/{userId}/assistants | List User Assistants
[**userAssistantsDelete**](UsersApi.md#userAssistantsDelete) | **DELETE** /users/{userId}/assistants | Delete User Assistants
[**userCreate**](UsersApi.md#userCreate) | **POST** /users | Create Users
[**userDelete**](UsersApi.md#userDelete) | **DELETE** /users/{userId} | Delete User
[**userEmail**](UsersApi.md#userEmail) | **GET** /users/email | Check a User Email
[**userEmailUpdate**](UsersApi.md#userEmailUpdate) | **PUT** /users/{userId}/email | Update a User&#39;s Email
[**userPassword**](UsersApi.md#userPassword) | **PUT** /users/{userId}/password | Update a User&#39;s Password
[**userPermission**](UsersApi.md#userPermission) | **GET** /users/{userId}/permissions | Get User Permissions
[**userPicture**](UsersApi.md#userPicture) | **POST** /users/{userId}/picture | Upload a User&#39;s Profile Picture
[**userSSOTokenDelete**](UsersApi.md#userSSOTokenDelete) | **DELETE** /users/{userId}/token | Revoke a User&#39;s SSO Token
[**userSchedulerDelete**](UsersApi.md#userSchedulerDelete) | **DELETE** /users/{userId}/schedulers/{schedulerId} | Delete a Scheduler
[**userSchedulers**](UsersApi.md#userSchedulers) | **GET** /users/{userId}/schedulers | List User Schedulers
[**userSchedulersDelete**](UsersApi.md#userSchedulersDelete) | **DELETE** /users/{userId}/schedulers | Delete User Schedulers
[**userSettings**](UsersApi.md#userSettings) | **GET** /users/{userId}/settings | Get User Settings
[**userSettingsUpdate**](UsersApi.md#userSettingsUpdate) | **PATCH** /users/{userId}/settings | Update User Settings
[**userStatus**](UsersApi.md#userStatus) | **PUT** /users/{userId}/status | Update User Status
[**userToken**](UsersApi.md#userToken) | **GET** /users/{userId}/token | Get a User Token
[**userUpdate**](UsersApi.md#userUpdate) | **PATCH** /users/{userId} | Update a User
[**userVanityName**](UsersApi.md#userVanityName) | **GET** /users/vanity_name | Check a User&#39;s PM Room Name
[**users**](UsersApi.md#users) | **GET** /users | List Users


# **switchUserAccount**
> object switchUserAccount($user_id, $account_id, $body)

Switch a User's Account

Disassociate a user from one Account and move the user to another Account under the same Master Account.   With this API, a user under a Master Account or a Sub Account can be moved to another Sub Account within the same Master Account. To move a user from a Master Account to a Sub Account, use `me` as the value for `accountId`. In this scenario, \"me\" refers to the Account ID of the Master Account.   To move a user from one Sub Account to another Sub Account, provide the Sub Account's Account ID as the value for `accountId`.   **Prerequisites**: * The account should have Pro or a higher plan with Master Account option enabled. * The user whose account needs to be switched should not be an admin or an owner of that account. * The user should not have the same [managed domain](https://support.zoom.us/hc/en-us/articles/203395207-What-is-Managed-Domain-) as the account owner.  **Scope:** `user:master`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$account_id = "account_id_example"; // string | 
$body = new \Swagger\Client\Model\Body55(); // \Swagger\Client\Model\Body55 | 

try {
    $result = $apiInstance->switchUserAccount($user_id, $account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->switchUserAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **account_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body55**](../Model/Body55.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **user**
> \Swagger\Client\Model\InlineResponse20047 user($user_id, $login_type)

Get a User

A Zoom account can have one or more users. Use this API to view information of a specific user on a Zoom account.<br><br> **Scopes:** `user:read:admin` `user:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b>If a user's status is pending, only `id` and `created_at` fields will be returned. The value of `created_at` will be the time at which the API call was made until the user activates their account.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$login_type = "login_type_example"; // string | `0` - Facebook.<br>`1` - Google.<br>`99` - API.<br>`100` - Zoom.<br>`101` - SSO.

try {
    $result = $apiInstance->user($user_id, $login_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->user: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **login_type** | **string**| &#x60;0&#x60; - Facebook.&lt;br&gt;&#x60;1&#x60; - Google.&lt;br&gt;&#x60;99&#x60; - API.&lt;br&gt;&#x60;100&#x60; - Zoom.&lt;br&gt;&#x60;101&#x60; - SSO. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userAssistantCreate**
> \Swagger\Client\Model\InlineResponse20118 userAssistantCreate($user_id, $body)

Add Assistants

Assistants are the users to whom the current user has assigned [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-Privilege). These assistants can schedule meeting on behalf of the current user as well as manage and act as an alternative host for all meetings if the admin has enabled [Co-host option](https://zoom.us/account/setting) on the account.<br>Use this API to assign assistants to a user. <br> In the request body, provide either the User ID or the email address of the user.<br><br> **Prerequisite**:  * The user as well as the assistant must have Licensed or an On-prem license. * Assistants must be under the current user's account.<br> **Scopes**: `user:write:admin` `user:write`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$body = new \Swagger\Client\Model\UserAssistantsList1(); // \Swagger\Client\Model\UserAssistantsList1 | User assistant.

try {
    $result = $apiInstance->userAssistantCreate($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userAssistantCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **body** | [**\Swagger\Client\Model\UserAssistantsList1**](../Model/UserAssistantsList1.md)| User assistant. |

### Return type

[**\Swagger\Client\Model\InlineResponse20118**](../Model/InlineResponse20118.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userAssistantDelete**
> userAssistantDelete($user_id, $assistant_id)

Delete a User Assistant

Delete a specific assistant of a user. Assistants are the users to whom the current user has assigned [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-Privilege). These assistants can schedule meeting on behalf of the current user as well as manage and act as an alternative host for all meetings if the admin has enabled [Co-host option](https://zoom.us/account/setting) on the account.<br><br> **Prerequisites**:  * The user as well as the assistant must have Licensed or an On-prem license. * Assistants must be under the current user's account.<br> **Scopes**: `user:write:admin` `user:write`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$assistant_id = "assistant_id_example"; // string | Assistant ID.

try {
    $apiInstance->userAssistantDelete($user_id, $assistant_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userAssistantDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **assistant_id** | **string**| Assistant ID. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userAssistants**
> \Swagger\Client\Model\UserAssistantsList userAssistants($user_id)

List User Assistants

List a user's assistants.  Assistants are the users to whom the current user has assigned [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-Privilege). These assistants can schedule meeting on behalf of the current user as well as manage and act as an alternative host for all meetings if the admin has enabled [Co-host option](https://zoom.us/account/setting) on the account.<br><br> **Prerequisites**: <br> * Current user as well as the assistant must have Licensed or an On-prem license. * Assistants must be under the current user's account.<br> **Scopes**: `user:read:admin` `user:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $result = $apiInstance->userAssistants($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userAssistants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

[**\Swagger\Client\Model\UserAssistantsList**](../Model/UserAssistantsList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userAssistantsDelete**
> userAssistantsDelete($user_id)

Delete User Assistants

Delete all assistants of the current user.<br> Assistants are the users to whom the current user has assigned [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-Privilege). These assistants can schedule meeting on behalf of the current user as well as manage and act as an alternative host for all meetings if the admin has enabled [Co-host option](https://zoom.us/account/setting) on the account.<br> **Prerequisite**:  * The user as well as the assistant must have Licensed or an On-prem license. * Assistants must be under the current user's account.<br> **Scopes**: `user:write:admin` `user:write`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $apiInstance->userAssistantsDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userAssistantsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCreate**
> \Swagger\Client\Model\InlineResponse20117 userCreate($body)

Create Users

A Zoom account can have one or more users. Use this API to add a new user to your account.<br><br> **Prerequisites:**<br> * Pro or higher plan<br><br> **Scopes:** `user:write:admin` `user:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body32(); // \Swagger\Client\Model\Body32 | User

try {
    $result = $apiInstance->userCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body32**](../Model/Body32.md)| User |

### Return type

[**\Swagger\Client\Model\InlineResponse20117**](../Model/InlineResponse20117.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDelete**
> userDelete($user_id, $action, $transfer_email, $transfer_meeting, $transfer_webinar, $transfer_recording)

Delete User

Deleting a user permanently removes them and their data from Zoom. They will be able to create a new Zoom account with the same email address if they have access to it. An account owner or an account admin can transfer meetings, webinars and cloud recordings to another Zoom user before deleting, but if not transferred, they will be permanently deleted.<br><br>  By default, this API disassociates (unlinks) a user from the associated account. The disassociation will give them their own basic, free Zoom account. It will not be associated with your account, and they will be able to purchase their own licenses. You can transfer the user's data (meetings, webinars and cloud recordings) to another user before disassociation.<br> To permanently delete a user, specify \"delete\" as the value of the `action` query parameter. **Scopes:** `user:write:admin` `user:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$action = "disassociate"; // string | Delete action options:<br>`disassociate` - Disassociate a user.<br>`delete`-  Permanently delete a user.<br>Note: To delete pending user in the account, use `disassociate`
$transfer_email = "transfer_email_example"; // string | Transfer email.
$transfer_meeting = true; // bool | Transfer meeting.
$transfer_webinar = true; // bool | Transfer webinar.
$transfer_recording = true; // bool | Transfer recording.

try {
    $apiInstance->userDelete($user_id, $action, $transfer_email, $transfer_meeting, $transfer_webinar, $transfer_recording);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **action** | **string**| Delete action options:&lt;br&gt;&#x60;disassociate&#x60; - Disassociate a user.&lt;br&gt;&#x60;delete&#x60;-  Permanently delete a user.&lt;br&gt;Note: To delete pending user in the account, use &#x60;disassociate&#x60; | [optional] [default to disassociate]
 **transfer_email** | **string**| Transfer email. | [optional]
 **transfer_meeting** | **bool**| Transfer meeting. | [optional]
 **transfer_webinar** | **bool**| Transfer webinar. | [optional]
 **transfer_recording** | **bool**| Transfer recording. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEmail**
> \Swagger\Client\Model\InlineResponse20052 userEmail($email)

Check a User Email

Verify if a user's email is registered with Zoom.<br><br>  <b>Note: </b>You can successfully check if a user is a registered Zoom user only if the user **signed up for Zoom via email and is within your account.** If you provide an email address of a user who is not in your account, the value of \"existed_email\" parameter will be \"false\" irrespective of whether or not the user is registered with Zoom. The response of this API call will not include users who joined Zoom using options such as \"Sign in with SSO\", \"Sign in with Google\" or \"Sign in with Facebook\" even if they are in the same account as yours.  **Scopes:** `user:read:admin` `user:read`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | The email address to be verified.

try {
    $result = $apiInstance->userEmail($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address to be verified. |

### Return type

[**\Swagger\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEmailUpdate**
> userEmailUpdate($user_id, $body)

Update a User's Email

Change a user's [email address](https://support.zoom.us/hc/en-us/articles/201362563-How-Do-I-Change-the-Email-on-My-Account-) on a Zoom account that has managed domain set up.<br>If the Zoom Account in which the user belongs, has multiple [managed domains](https://support.zoom.us/hc/en-us/articles/203395207-What-is-Managed-Domain-), the email to be updated must match one of the managed domains.<br> **Scopes:** `user:write:admin` `user:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> >  Note: A user's email address can only be changed for a maximum of 3 times in a day(24 hours). **Prerequisite:**<br> * Managed domain must be enabled in the account. * The new email address should not already exist in Zoom.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$body = new \Swagger\Client\Model\Body36(); // \Swagger\Client\Model\Body36 | User email.

try {
    $apiInstance->userEmailUpdate($user_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userEmailUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **body** | [**\Swagger\Client\Model\Body36**](../Model/Body36.md)| User email. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPassword**
> userPassword($user_id, $body)

Update a User's Password

Update the [password](https://support.zoom.us/hc/en-us/articles/206344385-Change-a-User-s-Password) of a user using which the user can login to Zoom.<br> After this request is processed successfully, an email notification will be sent to the user stating that the password was changed.<br> **Scopes:** `user:write:admin` `user:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` **Prerequisites:**<br> * Owner or admin of the Zoom account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$body = new \Swagger\Client\Model\Body35(); // \Swagger\Client\Model\Body35 | User password.

try {
    $apiInstance->userPassword($user_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **body** | [**\Swagger\Client\Model\Body35**](../Model/Body35.md)| User password. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPermission**
> \Swagger\Client\Model\InlineResponse20048 userPermission($user_id)

Get User Permissions

Users can be assigned a set of permissions that allows them to access only the pages/information that a user needs to view or edit.<br>  Use this API to get permissions that have been granted to the user.<br><br> **Scopes:** `user:read:admin` `user:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $result = $apiInstance->userPermission($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

[**\Swagger\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPicture**
> userPicture($user_id, $pic_file)

Upload a User's Profile Picture

Upload a user's profile picture.<br><br>  Provide `multipart/form-data` as the value of the `content-type` header for this request.   **Scopes:** `user:write:admin` `user:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$pic_file = "/path/to/file.txt"; // \SplFileObject | The file's path.

try {
    $apiInstance->userPicture($user_id, $pic_file);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userPicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **pic_file** | **\SplFileObject**| The file&#39;s path. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSSOTokenDelete**
> userSSOTokenDelete($user_id)

Revoke a User's SSO Token

Revoke a user's SSO token.<br><br> After calling this API, the SSO user will be logged out of their current Zoom session.<br> **Scopes:** `user:write:admin` `user:write`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $apiInstance->userSSOTokenDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSSOTokenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSchedulerDelete**
> userSchedulerDelete($user_id, $scheduler_id)

Delete a Scheduler

Delete a Scheduler.  Schedulers are users on whose behalf the current user (assistant) can schedule meetings for. By calling this API, the current user will no longer be a scheduling assistant of this scheduler.   **Prerequisite**: Current user must be under the same account as the scheduler.<br> **Scopes**: `user:write:admin` `user:write`   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$scheduler_id = "scheduler_id_example"; // string | Scheduler's ID.

try {
    $apiInstance->userSchedulerDelete($user_id, $scheduler_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSchedulerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **scheduler_id** | **string**| Scheduler&#39;s ID. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSchedulers**
> \Swagger\Client\Model\UserSchedulersList userSchedulers($user_id)

List User Schedulers

List all the schedulers of a user. Schedulers in this context are the users for whom the current user can schedule meetings for.  For instance, if the current user (i.e., the user whose userId was passed in the path parameter of this API call) is user A, the response of this API will contain a list of user(s), for whom user A can schedule and manage meetings. User A is the assistant of these users and thus has scheduling privilege for these user(s).   **Prerequisites**: * Current user must be under the same account as the scheduler.<br> **Scopes**: `user:read:admin` `user:read`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $result = $apiInstance->userSchedulers($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSchedulers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

[**\Swagger\Client\Model\UserSchedulersList**](../Model/UserSchedulersList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSchedulersDelete**
> userSchedulersDelete($user_id)

Delete User Schedulers

Delete all of a user's schedulers. Schedulers are users on whose behalf the current user (assistant) can schedule meetings for. By calling this API, the current user will no longer be a scheduling assistant of any user.   **Prerequisite**: Current user (assistant) must be under the same account as the scheduler.<br> **Scopes**: `user:write:admin` `user:write`   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $apiInstance->userSchedulersDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSchedulersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSettings**
> object userSettings($user_id, $login_type, $option)

Get User Settings

Retrieve a user's settings.<br><br> **Scopes:** `user:read:admin` `user:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$login_type = "login_type_example"; // string | `0` - Facebook.<br>`1` - Google.<br>`99` - API.<br>`100` - Zoom.<br>`101` - SSO.
$option = "option_example"; // string | `meeting_authentication`: Use this query parameter to view [meeting authentication configuration](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied on the account.<br>`recording_authentication`: Use this query parameter to view [recording authentication configuration](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied on the account.

try {
    $result = $apiInstance->userSettings($user_id, $login_type, $option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **login_type** | **string**| &#x60;0&#x60; - Facebook.&lt;br&gt;&#x60;1&#x60; - Google.&lt;br&gt;&#x60;99&#x60; - API.&lt;br&gt;&#x60;100&#x60; - Zoom.&lt;br&gt;&#x60;101&#x60; - SSO. | [optional]
 **option** | **string**| &#x60;meeting_authentication&#x60;: Use this query parameter to view [meeting authentication configuration](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied on the account.&lt;br&gt;&#x60;recording_authentication&#x60;: Use this query parameter to view [recording authentication configuration](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied on the account. | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSettingsUpdate**
> userSettingsUpdate($body, $user_id, $option)

Update User Settings

Update a user's settings.<br><br> **Scopes:** `user:write:admin` `user:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | User Settings
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$option = "option_example"; // string | 

try {
    $apiInstance->userSettingsUpdate($body, $user_id, $option);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**| User Settings |
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **option** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userStatus**
> userStatus($user_id, $body)

Update User Status

An account owner or admins can deactivate as well as activate a user in a Zoom account. Deactivating a user will remove all licenses associated with a user. It will prevent the deactivated user from logging into their Zoom account. A deactivated user can be reactivated. Reactivating a user grants the user access to login to their Zoom account.<br> Use this API to either [deactivate](https://support.zoom.us/hc/en-us/articles/115005269946-Remove-User-from-your-Account#h_6a9bc1c3-d739-4945-b1f2-00b3b88fb5cc) an active user or to [reactivate](https://support.zoom.us/hc/en-us/articles/115005269946-Remove-User-from-your-Account#h_16319724-d120-4be6-af5d-31582d134ea0) a deactivated user .<br><br>**Scopes:** `user:write:admin` `user:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$body = new \Swagger\Client\Model\Body34(); // \Swagger\Client\Model\Body34 | User status.

try {
    $apiInstance->userStatus($user_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **body** | [**\Swagger\Client\Model\Body34**](../Model/Body34.md)| User status. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userToken**
> \Swagger\Client\Model\InlineResponse20051 userToken($user_id, $type, $ttl)

Get a User Token

Retrieve a user's token.<br><br> This token is used for starting meetings with the Client SDK.<br> **Scopes:** `user:read:admin` `user:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light` If a user signed into Zoom using Google or Facebook, a null value will be returned for the token. To get the token with this API, ask the user to sign into Zoom using their email and password instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$type = "type_example"; // string | User token types:<br>`token` - Used for starting meetings with the client SDK. This token expires in 14 days and a new token will be returned after the expiry.<br>`zak` - Used for generating the start meeting URL. The token expiration time is two hours. For API users, the expiration time is 90 days.
$ttl = 56; // int | Use this field in conjunction with the `type` field where the value of `type` field is `zak`. The value of this field denotes the expiry time of the `zak` token in seconds. For example, if you would like the zak token to be expired after one hour of the token generation, the value of this field should be `3600`.

try {
    $result = $apiInstance->userToken($user_id, $type, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **type** | **string**| User token types:&lt;br&gt;&#x60;token&#x60; - Used for starting meetings with the client SDK. This token expires in 14 days and a new token will be returned after the expiry.&lt;br&gt;&#x60;zak&#x60; - Used for generating the start meeting URL. The token expiration time is two hours. For API users, the expiration time is 90 days. | [optional]
 **ttl** | **int**| Use this field in conjunction with the &#x60;type&#x60; field where the value of &#x60;type&#x60; field is &#x60;zak&#x60;. The value of this field denotes the expiry time of the &#x60;zak&#x60; token in seconds. For example, if you would like the zak token to be expired after one hour of the token generation, the value of this field should be &#x60;3600&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdate**
> userUpdate($user_id, $body, $login_type)

Update a User

Update information on a user's Zoom [profile](https://support.zoom.us/hc/en-us/articles/201363203-My-Profile).<br><br> **Scopes:** `user:write:admin` `user:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$body = new \Swagger\Client\Model\Body33(); // \Swagger\Client\Model\Body33 | User
$login_type = "login_type_example"; // string | `0` - Facebook.<br>`1` - Google.<br>`99` - API.<br>`100` - Zoom.<br>`101` - SSO.

try {
    $apiInstance->userUpdate($user_id, $body, $login_type);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **body** | [**\Swagger\Client\Model\Body33**](../Model/Body33.md)| User |
 **login_type** | **string**| &#x60;0&#x60; - Facebook.&lt;br&gt;&#x60;1&#x60; - Google.&lt;br&gt;&#x60;99&#x60; - API.&lt;br&gt;&#x60;100&#x60; - Zoom.&lt;br&gt;&#x60;101&#x60; - SSO. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userVanityName**
> \Swagger\Client\Model\InlineResponse20053 userVanityName($vanity_name)

Check a User's PM Room Name

A personal meeting room is a virtual meeting room that can be permanently assigned to a user. Use this API to check if a personal meeting room with the given name exists or not.<br><br> **Scopes:** `user:read:admin` `user:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vanity_name = "vanity_name_example"; // string | Personal meeting room name.

try {
    $result = $apiInstance->userVanityName($vanity_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userVanityName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vanity_name** | **string**| Personal meeting room name. |

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **users**
> \Swagger\Client\Model\InlineResponse20046 users($status, $page_size, $role_id, $page_number, $include_fields)

List Users

A Zoom account can have one or more users. Use this API to list users on your account.<br><br> **Scopes:** `user:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "active"; // string | User statuses:<br>`active` - Users with an active status.<br>`inactive` - Users who are deactivated.<br>`pending` - Users with a pending status.
$page_size = 30; // int | The number of records returned within a single API call.
$role_id = "role_id_example"; // string | Unique identifier for the role. Provide this parameter if you would like to filter the response by a specific role. You can retrieve Role IDs from [List Roles](https://marketplace.zoom.us/docs/api-reference/zoom-api/roles/roles) API.
$page_number = "page_number_example"; // string | The page number of the current page in the returned records.
$include_fields = "include_fields_example"; // string | Provide a value for this field if you would like to see the following attribute in the response of this API call:<br>  `custom_attributes`: Returns custom attributes that are associated with the user.

try {
    $result = $apiInstance->users($status, $page_size, $role_id, $page_number, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->users: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| User statuses:&lt;br&gt;&#x60;active&#x60; - Users with an active status.&lt;br&gt;&#x60;inactive&#x60; - Users who are deactivated.&lt;br&gt;&#x60;pending&#x60; - Users with a pending status. | [optional] [default to active]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **role_id** | **string**| Unique identifier for the role. Provide this parameter if you would like to filter the response by a specific role. You can retrieve Role IDs from [List Roles](https://marketplace.zoom.us/docs/api-reference/zoom-api/roles/roles) API. | [optional]
 **page_number** | **string**| The page number of the current page in the returned records. | [optional]
 **include_fields** | **string**| Provide a value for this field if you would like to see the following attribute in the response of this API call:&lt;br&gt;  &#x60;custom_attributes&#x60;: Returns custom attributes that are associated with the user. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

