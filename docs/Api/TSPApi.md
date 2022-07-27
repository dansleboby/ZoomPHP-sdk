# OpenAPI\Client\TSPApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tsp()**](TSPApi.md#tsp) | **GET** /tsp | Get account&#39;s TSP information
[**tspUpdate()**](TSPApi.md#tspUpdate) | **PATCH** /tsp | Update account&#39;s TSP information
[**tspUrlUpdate()**](TSPApi.md#tspUrlUpdate) | **PATCH** /users/{userId}/tsp/settings | Set global dial-in URL for a TSP user
[**userTSP()**](TSPApi.md#userTSP) | **GET** /users/{userId}/tsp/{tspId} | Get a user&#39;s TSP account
[**userTSPCreate()**](TSPApi.md#userTSPCreate) | **POST** /users/{userId}/tsp | Add a user&#39;s TSP account
[**userTSPDelete()**](TSPApi.md#userTSPDelete) | **DELETE** /users/{userId}/tsp/{tspId} | Delete a user&#39;s TSP account
[**userTSPUpdate()**](TSPApi.md#userTSPUpdate) | **PATCH** /users/{userId}/tsp/{tspId} | Update a TSP account
[**userTSPs()**](TSPApi.md#userTSPs) | **GET** /users/{userId}/tsp | List user&#39;s TSP accounts


## `tsp()`

```php
tsp(): \OpenAPI\Client\Model\Tsp200Response
```

Get account's TSP information

Get information on Telephony Service Provider on an account level.<br><br> **Scopes:** `tsp:read:admin` <br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**<br> * A Pro or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tsp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->tsp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Tsp200Response**](../Model/Tsp200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tspUpdate()`

```php
tspUpdate($tsp_update_request)
```

Update account's TSP information

Update information of the Telephony Service Provider set up on an account.<br> **Prerequisites**:<br> TSP account option should be enabled.<br> **Scopes:** `tsp:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tsp_update_request = new \OpenAPI\Client\Model\TspUpdateRequest(); // \OpenAPI\Client\Model\TspUpdateRequest | TSP Account

try {
    $apiInstance->tspUpdate($tsp_update_request);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->tspUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tsp_update_request** | [**\OpenAPI\Client\Model\TspUpdateRequest**](../Model/TspUpdateRequest.md)| TSP Account |

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

## `tspUrlUpdate()`

```php
tspUrlUpdate($user_id, $tsp_global_dial_in)
```

Set global dial-in URL for a TSP user

A global dial-in page can provide a list of global access numbers using which audio conferencing can be conducted. By calling this API, you can set the url for the global dial-in page of a user whose Zoom account has TSP and special TSP with third-party audio conferencing options enabled. <p></p> **Scopes:**`tsp:write:admin` `tsp:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 6dfgdfgdg444447b0egga; // string | The userId or email address of the user.
$tsp_global_dial_in = new \OpenAPI\Client\Model\TspGlobalDialIn(); // \OpenAPI\Client\Model\TspGlobalDialIn | Global dial-in URL of the user.

try {
    $apiInstance->tspUrlUpdate($user_id, $tsp_global_dial_in);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->tspUrlUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The userId or email address of the user. |
 **tsp_global_dial_in** | [**\OpenAPI\Client\Model\TspGlobalDialIn**](../Model/TspGlobalDialIn.md)| Global dial-in URL of the user. | [optional]

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

## `userTSP()`

```php
userTSP($user_id, $tsp_id): \OpenAPI\Client\Model\TSPAccount
```

Get a user's TSP account

Each user can have a maximum of two TSP accounts. Use this API to retrieve details of a specific TSP account enabled for a specific user.<br><br> **Scopes:** `tsp:read:admin` `tsp:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$tsp_id = 1; // string | TSP account ID.

try {
    $result = $apiInstance->userTSP($user_id, $tsp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **tsp_id** | **string**| TSP account ID. |

### Return type

[**\OpenAPI\Client\Model\TSPAccount**](../Model/TSPAccount.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userTSPCreate()`

```php
userTSPCreate($user_id, $tsp): \OpenAPI\Client\Model\TSP
```

Add a user's TSP account

Add a user's TSP account.<br><br> **Scopes:** `tsp:write:admin` `tsp:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$tsp = new \OpenAPI\Client\Model\TSP(); // \OpenAPI\Client\Model\TSP | TSP account.

try {
    $result = $apiInstance->userTSPCreate($user_id, $tsp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **tsp** | [**\OpenAPI\Client\Model\TSP**](../Model/TSP.md)| TSP account. |

### Return type

[**\OpenAPI\Client\Model\TSP**](../Model/TSP.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userTSPDelete()`

```php
userTSPDelete($user_id, $tsp_id)
```

Delete a user's TSP account

Delete a user's TSP account.<br><br> **Scopes:** `tsp:write:admin` `tsp:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$tsp_id = 1; // string | TSP account ID.

try {
    $apiInstance->userTSPDelete($user_id, $tsp_id);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **tsp_id** | **string**| TSP account ID. |

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

## `userTSPUpdate()`

```php
userTSPUpdate($user_id, $tsp_id, $tsp_account1)
```

Update a TSP account

Update a user's TSP account.<br><br> **Scopes:** `tsp:write:admin` `tsp:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$tsp_id = 1; // string | TSP account ID.
$tsp_account1 = new \OpenAPI\Client\Model\TSPAccount1(); // \OpenAPI\Client\Model\TSPAccount1 | TSP account.

try {
    $apiInstance->userTSPUpdate($user_id, $tsp_id, $tsp_account1);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **tsp_id** | **string**| TSP account ID. |
 **tsp_account1** | [**\OpenAPI\Client\Model\TSPAccount1**](../Model/TSPAccount1.md)| TSP account. |

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

## `userTSPs()`

```php
userTSPs($user_id): \OpenAPI\Client\Model\UserTSPs200Response
```

List user's TSP accounts

A user can have a maximum of two TSP accounts. Use this API to list all TSP accounts of a user.<br><br> **Scopes:** `tsp:read:admin` `tsp:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $result = $apiInstance->userTSPs($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |

### Return type

[**\OpenAPI\Client\Model\UserTSPs200Response**](../Model/UserTSPs200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
