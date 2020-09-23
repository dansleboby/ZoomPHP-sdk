# Swagger\Client\TSPApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tsp**](TSPApi.md#tsp) | **GET** /tsp | Get Account&#39;s TSP Information
[**tspUpdate**](TSPApi.md#tspUpdate) | **PATCH** /tsp | Update account&#39;s TSP information
[**tspUrlUpdate**](TSPApi.md#tspUrlUpdate) | **PATCH** /users/{userId}/tsp/settings | Set Global Dial-in URL for a TSP User
[**userTSP**](TSPApi.md#userTSP) | **GET** /users/{userId}/tsp/{tspId} | Get a User&#39;s TSP Account
[**userTSPCreate**](TSPApi.md#userTSPCreate) | **POST** /users/{userId}/tsp | Add a User&#39;s TSP Account
[**userTSPDelete**](TSPApi.md#userTSPDelete) | **DELETE** /users/{userId}/tsp/{tspId} | Delete a User&#39;s TSP Account
[**userTSPUpdate**](TSPApi.md#userTSPUpdate) | **PATCH** /users/{userId}/tsp/{tspId} | Update a TSP Account
[**userTSPs**](TSPApi.md#userTSPs) | **GET** /users/{userId}/tsp | List User&#39;s TSP accounts


# **tsp**
> \Swagger\Client\Model\InlineResponse20045 tsp()

Get Account's TSP Information

Get information on Telephony Service Provider on an account level.<br><br> **Scopes:** `tsp:read:admin` <br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**<br> * A Pro or a higher plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TSPApi(
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tspUpdate**
> tspUpdate($body)

Update account's TSP information

Update information of the Telephony Service Provider set up on an account.<br> **Prerequisites**:<br> TSP account option should be enabled.<br> **Scopes:** `tsp:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body31(); // \Swagger\Client\Model\Body31 | TSP Account

try {
    $apiInstance->tspUpdate($body);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->tspUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body31**](../Model/Body31.md)| TSP Account |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tspUrlUpdate**
> tspUrlUpdate($user_id, $body)

Set Global Dial-in URL for a TSP User

A global dial-in page can provide a list of global access numbers using which audio conferencing can be conducted. By calling this API, you can set the url for the global dial-in page of a user whose Zoom account has TSP and special TSP with third-party audio conferencing options enabled. <p></p> **Scopes:**`tsp:write:admin` `tsp:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The userId or email address of the user.
$body = new \Swagger\Client\Model\TSPGlobalDialInURLSetting(); // \Swagger\Client\Model\TSPGlobalDialInURLSetting | Global dial-in URL of the user.

try {
    $apiInstance->tspUrlUpdate($user_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->tspUrlUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The userId or email address of the user. |
 **body** | [**\Swagger\Client\Model\TSPGlobalDialInURLSetting**](../Model/TSPGlobalDialInURLSetting.md)| Global dial-in URL of the user. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSP**
> \Swagger\Client\Model\TSPAccount userTSP($user_id, $tsp_id)

Get a User's TSP Account

Each user can have a maximum of two TSP accounts. Use this API to retrieve details of a specific TSP account enabled for a specific user.<br><br> **Scopes:** `tsp:read:admin` `tsp:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$tsp_id = "tsp_id_example"; // string | TSP account ID.

try {
    $result = $apiInstance->userTSP($user_id, $tsp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **tsp_id** | **string**| TSP account ID. |

### Return type

[**\Swagger\Client\Model\TSPAccount**](../Model/TSPAccount.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSPCreate**
> \Swagger\Client\Model\TSPAccountsList2 userTSPCreate($user_id, $body)

Add a User's TSP Account

Add a user's TSP account.<br><br> **Scopes:** `tsp:write:admin` `tsp:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$body = new \Swagger\Client\Model\TSPAccountsList1(); // \Swagger\Client\Model\TSPAccountsList1 | TSP account.

try {
    $result = $apiInstance->userTSPCreate($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **body** | [**\Swagger\Client\Model\TSPAccountsList1**](../Model/TSPAccountsList1.md)| TSP account. |

### Return type

[**\Swagger\Client\Model\TSPAccountsList2**](../Model/TSPAccountsList2.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSPDelete**
> userTSPDelete($user_id, $tsp_id)

Delete a User's TSP Account

Delete a user's TSP account.<br><br> **Scopes:** `tsp:write:admin` `tsp:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$tsp_id = "tsp_id_example"; // string | TSP account ID.

try {
    $apiInstance->userTSPDelete($user_id, $tsp_id);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **tsp_id** | **string**| TSP account ID. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSPUpdate**
> userTSPUpdate($user_id, $tsp_id, $body)

Update a TSP Account

Update a user's TSP account.<br><br> **Scopes:** `tsp:write:admin` `tsp:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$tsp_id = "tsp_id_example"; // string | TSP account ID.
$body = new \Swagger\Client\Model\TSPAccount1(); // \Swagger\Client\Model\TSPAccount1 | TSP account.

try {
    $apiInstance->userTSPUpdate($user_id, $tsp_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **tsp_id** | **string**| TSP account ID. |
 **body** | [**\Swagger\Client\Model\TSPAccount1**](../Model/TSPAccount1.md)| TSP account. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSPs**
> \Swagger\Client\Model\InlineResponse20050 userTSPs($user_id)

List User's TSP accounts

A user can have a maximum of two TSP accounts. Use this API to list all TSP accounts of a user.<br><br> **Scopes:** `tsp:read:admin` `tsp:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $result = $apiInstance->userTSPs($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

[**\Swagger\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

