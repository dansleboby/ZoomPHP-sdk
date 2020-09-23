# Swagger\Client\AccountsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**account**](AccountsApi.md#account) | **GET** /accounts/{accountId} | Get a Sub Account
[**accountCreate**](AccountsApi.md#accountCreate) | **POST** /accounts | Create a Sub Account
[**accountDisassociate**](AccountsApi.md#accountDisassociate) | **DELETE** /accounts/{accountId} | Disassociate a Sub Account
[**accountManagedDomain**](AccountsApi.md#accountManagedDomain) | **GET** /accounts/{accountId}/managed_domains | Get Managed Domains
[**accountOptionsUpdate**](AccountsApi.md#accountOptionsUpdate) | **PATCH** /accounts/{accountId}/options | Update Options
[**accountSettings**](AccountsApi.md#accountSettings) | **GET** /accounts/{accountId}/settings | Get Settings
[**accountSettingsUpdate**](AccountsApi.md#accountSettingsUpdate) | **PATCH** /accounts/{accountId}/settings | Update Settings
[**accountTrustedDomain**](AccountsApi.md#accountTrustedDomain) | **GET** /accounts/{accountId}/trusted_domains | Get Trusted Domains
[**accounts**](AccountsApi.md#accounts) | **GET** /accounts | List Sub Accounts
[**getAccountLockSettings**](AccountsApi.md#getAccountLockSettings) | **GET** /accounts/{accountId}/lock_settings | Get Locked Settings
[**updateAccountLockSettings**](AccountsApi.md#updateAccountLockSettings) | **PATCH** /accounts/{accountId}/lock_settings | Update Locked Settings
[**updateAccountOwner**](AccountsApi.md#updateAccountOwner) | **PUT** /accounts/{accountId}/owner | Update the Account Owner


# **account**
> \Swagger\Client\Model\InlineResponse20012 account($account_id)

Get a Sub Account

Get a Sub Account under the Master Account. Your account must be a Master Account in order to retrieve Sub Accounts. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [ISV team](https://zoom.us/plan/api) for more details.<br><br> **Prerequisites:** * Pro or a higher paid account with Master Account option enabled. <br> **Scope**: `account:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.

try {
    $result = $apiInstance->account($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->account: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountCreate**
> \Swagger\Client\Model\InlineResponse2015 accountCreate($body)

Create a Sub Account

Create a Sub Account under the Master Account. <aside>Your account must be a Master Account in order to create Sub Accounts. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details. Please note that the created account user will receive a confirmation email.</aside><br><br> **Prerequisites:**<br> * Pro or a higher paid account with Master Account option enabled. <br> **Scope**: `account:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body11(); // \Swagger\Client\Model\Body11 | Account.

try {
    $result = $apiInstance->accountCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body11**](../Model/Body11.md)| Account. |

### Return type

[**\Swagger\Client\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountDisassociate**
> accountDisassociate($account_id)

Disassociate a Sub Account

Disassociate a Sub Account from the Master Account. This will leave the Sub Account intact but it will no longer be associated with the master account.<br>  <aside>Your account must be a Master Account in order to disassociate Sub Accounts. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.</aside> <br>  **Prerequisites:** * Pro or a higher paid account with Master Account option enabled. <br> **Scope**: `account:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.

try {
    $apiInstance->accountDisassociate($account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountDisassociate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountManagedDomain**
> \Swagger\Client\Model\InlineResponse20013 accountManagedDomain($account_id)

Get Managed Domains

Get a Sub Account's [managed domains](https://support.zoom.us/hc/en-us/articles/203395207-What-is-Managed-Domain-).<br><br>  **Note:** This API can be used by Zoom Accounts that are on a Pro or a higher plan as well accounts that have Master and Sub Accounts options enabled. <br><br> To get managed domains of the Master Account, provide `me` as the value for accountId in the path parameter. Provide the Sub Account's Account ID as the value of accountId path parameter to get managed domains of the Sub Account.<br><br> **Prerequisites:**<br> * Pro or a higher paid account with Master Account option enabled. <br> **Scope:** `account:read:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | Unique Identifier of the account. To retrieve locked settings of the Master account or a regular account, provide \"me\" as the value of this field. <br> To retrieve locked settings of a Sub Account, provide the Account ID of the Sub Account in this field.

try {
    $result = $apiInstance->accountManagedDomain($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountManagedDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the account. To retrieve locked settings of the Master account or a regular account, provide \&quot;me\&quot; as the value of this field. &lt;br&gt; To retrieve locked settings of a Sub Account, provide the Account ID of the Sub Account in this field. |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountOptionsUpdate**
> accountOptionsUpdate($account_id, $body)

Update Options

Update a Sub Account's options under the Master Account.<br> <aside>Your account must be a Master Account in order to update the options for Sub Accounts. Zoom only assigns this privilege to trusted partners. </aside>  **Prerequisites:** * Pro or a higher paid account with Master Account option enabled. <br> **Scope**: `account:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.
$body = new \Swagger\Client\Model\Body12(); // \Swagger\Client\Model\Body12 | 

try {
    $apiInstance->accountOptionsUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountOptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**\Swagger\Client\Model\Body12**](../Model/Body12.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountSettings**
> object accountSettings($account_id, $option)

Get Settings

Get the settings of an account.<br> To get the settings of a ISV enabled Master Account, use `me` as the value for the `accountId` path parameter.<br><br>  **Prerequisites**:  * The Account must be a paid account.<br> **Scopes**: `account:read:admin` <br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.
$option = "option_example"; // string | `meeting_authentication`: Use this query parameter to view [meeting authentication configuration](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied on the account.<br>`recording_authentication`: Use this query parameter to view [recording authentication configuration](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied on the account.<br> `security`: Use this query parameter to view security settings such as password requirements for user login, two factor authentication etc., applied on the account.<br>

try {
    $result = $apiInstance->accountSettings($account_id, $option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **option** | **string**| &#x60;meeting_authentication&#x60;: Use this query parameter to view [meeting authentication configuration](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied on the account.&lt;br&gt;&#x60;recording_authentication&#x60;: Use this query parameter to view [recording authentication configuration](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied on the account.&lt;br&gt; &#x60;security&#x60;: Use this query parameter to view security settings such as password requirements for user login, two factor authentication etc., applied on the account.&lt;br&gt; | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountSettingsUpdate**
> accountSettingsUpdate($account_id, $body, $option)

Update Settings

Update the settings of a Sub Account that is under a Master Account.<br> To update the settings of the Master Account, use `me` as the value of the `accountId` path parameter.<br><br> **Prerequisites**:  * The Sub Account must be a paid account.<br> **Scopes**: `account:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.
$body = new \stdClass; // object | 
$option = "option_example"; // string | 

try {
    $apiInstance->accountSettingsUpdate($account_id, $body, $option);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | **object**|  |
 **option** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountTrustedDomain**
> object accountTrustedDomain($account_id)

Get Trusted Domains

Get trusted domains of a Sub Account. To get the trusted domains of a Master Account, use `me` as the value for the `accountId` path parameter.  **Prerequisites:**<br> * The Sub Account must be a paid account.<br> **Scope:** `account:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID.

try {
    $result = $apiInstance->accountTrustedDomain($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountTrustedDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accounts**
> \Swagger\Client\Model\AccountList accounts($page_size, $page_number, $next_page_token)

List Sub Accounts

List all the Sub Accounts under the Master Account.<br><br> Only Master Accounts can create and have Sub Accounts. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [ISV team](https://zoom.us/plan/api) for more details. <br> <br>**Prerequisites:**<br> * Pro or a higher paid account with Master Account option enabled. <br> **Scope**: `account:read:admin` <br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \"next_page_token\" for pagination instead of this field.  The page number of the current page in the returned records.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->accounts($page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \&quot;next_page_token\&quot; for pagination instead of this field.  The page number of the current page in the returned records. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\AccountList**](../Model/AccountList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountLockSettings**
> \Swagger\Client\Model\InlineResponse20070 getAccountLockSettings($account_id)

Get Locked Settings

[Account Locked Settings](https://support.zoom.us/hc/en-us/articles/115005269866) allow you turn settings on or off for all users in your account. No user except the account admin or account owner can change these settings. With lock settings, you force the settings on for all users. Use this API to retrieve an account's locked settings.   **Note:** This API can be used by Zoom Accounts that are on a Pro or a higher plan as well accounts that have Master and Sub Accounts options enabled. <br><br> **Prerequisites:** * Pro or a higher paid account. <br> **Scope**: `account:read:admin`. <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>      **Scope:** account:read:admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | Unique Identifier of the account. To retrieve locked settings of the Master account or a regular account, provide \"me\" as the value of this field. <br> To retrieve locked settings of a Sub Account, provide the Account ID of the Sub Account in this field.

try {
    $result = $apiInstance->getAccountLockSettings($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountLockSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the account. To retrieve locked settings of the Master account or a regular account, provide \&quot;me\&quot; as the value of this field. &lt;br&gt; To retrieve locked settings of a Sub Account, provide the Account ID of the Sub Account in this field. |

### Return type

[**\Swagger\Client\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountLockSettings**
> object updateAccountLockSettings($account_id, $body)

Update Locked Settings

[Account Locked Settings](https://support.zoom.us/hc/en-us/articles/115005269866) allow you turn settings on or off for all users in your account. No user except the account admin or account owner can change these settings. With lock settings, you force the settings on for all users. Use this API to update an account's locked settings.  **Note:** This API can be used by Zoom Accounts that are on a Pro or a higher plan as well accounts that have Master and Sub Accounts options enabled.<br><br> **Prerequisites:**<br> * Pro or a higher paid account. <br> **Scope:** `account:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | Unique Identifier of the account. To retrieve locked settings of the Master account or a regular account, provide \"me\" as the value of this field. <br> To retrieve locked settings of a Sub Account, provide the Account ID of the Sub Account in this field.
$body = new \Swagger\Client\Model\Body52(); // \Swagger\Client\Model\Body52 | 

try {
    $result = $apiInstance->updateAccountLockSettings($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccountLockSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the account. To retrieve locked settings of the Master account or a regular account, provide \&quot;me\&quot; as the value of this field. &lt;br&gt; To retrieve locked settings of a Sub Account, provide the Account ID of the Sub Account in this field. |
 **body** | [**\Swagger\Client\Model\Body52**](../Model/Body52.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountOwner**
> object updateAccountOwner($account_id, $body)

Update the Account Owner

The current account owner can [change the owner of an account](https://support.zoom.us/hc/en-us/articles/115005686983-Change-Account-Owner) to another user on the same account.<br> Use this API to change the owner of a Sub Account.  <aside>Your account must be a Master Account in order to use this API to update the account owner of a Sub Account. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the <a href=\"https://zoom.us/plan/api\">ISV team</a> for more details. Please note that the created account user will receive a confirmation email.</aside><br>   **Prerequisites**: <br> * Account owner or admin permissions of an account. * Pro or a higher plan with Master Account option enabled.<br> **Scopes:**  `account:write:admin` or `account:master`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>   <br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | Account Id of the account.
$body = new \Swagger\Client\Model\Body54(); // \Swagger\Client\Model\Body54 | 

try {
    $result = $apiInstance->updateAccountOwner($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccountOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account Id of the account. |
 **body** | [**\Swagger\Client\Model\Body54**](../Model/Body54.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

