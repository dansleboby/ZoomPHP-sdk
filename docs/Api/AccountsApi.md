# OpenAPI\Client\AccountsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountManagedDomain()**](AccountsApi.md#accountManagedDomain) | **GET** /accounts/{accountId}/managed_domains | Get account&#39;s managed domains
[**accountSettings()**](AccountsApi.md#accountSettings) | **GET** /accounts/{accountId}/settings | Get account settings
[**accountSettingsUpdate()**](AccountsApi.md#accountSettingsUpdate) | **PATCH** /accounts/{accountId}/settings | Update account settings
[**accountTrustedDomain()**](AccountsApi.md#accountTrustedDomain) | **GET** /accounts/{accountId}/trusted_domains | Get account&#39;s trusted domains


## `accountManagedDomain()`

```php
accountManagedDomain($account_id): \OpenAPI\Client\Model\DomainsList
```

Get account's managed domains

Use this API to get an account's [managed domains](https://support.zoom.us/hc/en-us/articles/203395207). To get the Master account's managed domains, pass the `me` value for the `accountId` path parameter.    **Scopes:** `account:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * A Pro or a higher paid account with the Master account option enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = q6gBJVO5TzexKYTb_I2rpg; // string | The account's ID. For the Master account, pass the `me` value for this parameter.

try {
    $result = $apiInstance->accountManagedDomain($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountManagedDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account&#39;s ID. For the Master account, pass the &#x60;me&#x60; value for this parameter. |

### Return type

[**\OpenAPI\Client\Model\DomainsList**](../Model/DomainsList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountSettings()`

```php
accountSettings($account_id, $option, $custom_query_fields): \OpenAPI\Client\Model\AccountSettings200Response
```

Get account settings

Use this API to get an account's settings. To get the Master account's settings, use the `me` value for the `accountId` path parameter.   **Scopes:** `account:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  * The account must be a paid account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = me; // string | The account's ID. For the Master account, pass the `me` value for this parameter.
$option = security; // string | Optional query parameters:  * `meeting_authentication` — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user's account.  * `recording_authentication` — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user's account.  * `security` — Use this query parameter to view the account's security settings. For example, password requirements for user login or two-factor authentication.  * `meeting_security` — Use this query parameter to view the meeting security settings applied to the user's account.
$custom_query_fields = in_meeting; // string | The name of the field by which to filter the response. For example, if you provide the `host_video` value for this field, you will get a response similar to the following:    `{ \"schedule_meeting\": { \"host_video\": false } }`    To use multiple values, comma-separate each value. For example: `host_video,participant_video`

try {
    $result = $apiInstance->accountSettings($account_id, $option, $custom_query_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account&#39;s ID. For the Master account, pass the &#x60;me&#x60; value for this parameter. |
 **option** | **string**| Optional query parameters:  * &#x60;meeting_authentication&#x60; — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user&#39;s account.  * &#x60;recording_authentication&#x60; — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user&#39;s account.  * &#x60;security&#x60; — Use this query parameter to view the account&#39;s security settings. For example, password requirements for user login or two-factor authentication.  * &#x60;meeting_security&#x60; — Use this query parameter to view the meeting security settings applied to the user&#39;s account. | [optional]
 **custom_query_fields** | **string**| The name of the field by which to filter the response. For example, if you provide the &#x60;host_video&#x60; value for this field, you will get a response similar to the following:    &#x60;{ \&quot;schedule_meeting\&quot;: { \&quot;host_video\&quot;: false } }&#x60;    To use multiple values, comma-separate each value. For example: &#x60;host_video,participant_video&#x60; | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountSettings200Response**](../Model/AccountSettings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountSettingsUpdate()`

```php
accountSettingsUpdate($account_id, $account_settings_update_request, $option)
```

Update account settings

Use this API to update an account's settings. To update the Master account's settings, pass the `me` value for the `accountId` path parameter.    **Scopes:** `account:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * The account must be a paid account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = me; // string | The account's ID. For the Master account, pass the `me` value for this parameter.
$account_settings_update_request = new \OpenAPI\Client\Model\AccountSettingsUpdateRequest(); // \OpenAPI\Client\Model\AccountSettingsUpdateRequest
$option = meeting_security; // string | Optional query parameters:  * `meeting_authentication` — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user's account.  * `recording_authentication` — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user's account.  * `security` — Use this query parameter to view the account's security settings. For example, password requirements for user login or two-factor authentication.  * `meeting_security` — Use this query parameter to view the meeting security settings applied to the user's account.

try {
    $apiInstance->accountSettingsUpdate($account_id, $account_settings_update_request, $option);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account&#39;s ID. For the Master account, pass the &#x60;me&#x60; value for this parameter. |
 **account_settings_update_request** | [**\OpenAPI\Client\Model\AccountSettingsUpdateRequest**](../Model/AccountSettingsUpdateRequest.md)|  |
 **option** | **string**| Optional query parameters:  * &#x60;meeting_authentication&#x60; — Use this query parameter to view the [meeting authentication settings](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) applied to the user&#39;s account.  * &#x60;recording_authentication&#x60; — Use this query parameter to view the [recording authentication settings](https://support.zoom.us/hc/en-us/articles/360037756671-Authentication-Profiles-for-Cloud-Recordings) applied to the user&#39;s account.  * &#x60;security&#x60; — Use this query parameter to view the account&#39;s security settings. For example, password requirements for user login or two-factor authentication.  * &#x60;meeting_security&#x60; — Use this query parameter to view the meeting security settings applied to the user&#39;s account. | [optional]

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

## `accountTrustedDomain()`

```php
accountTrustedDomain($account_id): \OpenAPI\Client\Model\AccountTrustedDomain200Response
```

Get account's trusted domains

Use this API to get an account's [trusted domains](https://support.zoom.us/hc/en-us/articles/203395207). To get the Master account's trusted domains, use the `me` value for the `accountId` path parameter.    **Scopes:** `account:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The account must be a paid account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = q6gBJVO5TzexKYTb_I2rpg; // string | The account's ID. For the Master account, pass the `me` value for this parameter.

try {
    $result = $apiInstance->accountTrustedDomain($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountTrustedDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account&#39;s ID. For the Master account, pass the &#x60;me&#x60; value for this parameter. |

### Return type

[**\OpenAPI\Client\Model\AccountTrustedDomain200Response**](../Model/AccountTrustedDomain200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
