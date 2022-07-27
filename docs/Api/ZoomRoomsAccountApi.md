# Zoom\Api\ZoomRoomsAccountApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getZRAccountProfile()**](ZoomRoomsAccountApi.md#getZRAccountProfile) | **GET** /rooms/account_profile | Get Zoom Room account profile
[**getZRAccountSettings()**](ZoomRoomsAccountApi.md#getZRAccountSettings) | **GET** /rooms/account_settings | Get Zoom Room account settings
[**updateZRAccProfile()**](ZoomRoomsAccountApi.md#updateZRAccProfile) | **PATCH** /rooms/account_profile | Update Zoom Room account profile
[**updateZoomRoomAccSettings()**](ZoomRoomsAccountApi.md#updateZoomRoomAccSettings) | **PATCH** /rooms/account_settings | Update Zoom Room account settings


## `getZRAccountProfile()`

```php
getZRAccountProfile(): \Zoom\Api\Model\GetZRAccountProfile200Response
```

Get Zoom Room account profile

Get details on the account profile of a Zoom Room. This information can only by accessed either by the Zoom Room Account Owner or a user with Zoom Rooms admin permission. To get information on an individual Room Profile, use the [**Get Zoom Room profile**](/docs/api-reference/zoom-api/methods#operation/getZRProfile) API.   **Prerequisites:**<br> * Zoom account owner or Zoom Rooms admin permissions<br>  **Scopes:** `room:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getZRAccountProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsAccountApi->getZRAccountProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\GetZRAccountProfile200Response**](../Model/GetZRAccountProfile200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZRAccountSettings()`

```php
getZRAccountSettings($setting_type): \Zoom\Api\Model\GetZRAccountSettings200Response
```

Get Zoom Room account settings

Get details on Account Settings of a Zoom Room. With this API, you can view either the **Account Meeting Settings** or the **Alert Settings** (Client Alert Settings and Notification Settings) of the Zoom Rooms account. By default, only **Account Meeting Settings** are returned. To view only **Alert Settings**, specify `alert` as the value of the `setting_type` query parameter.<br><br> **Prerequisites:**<br> * Zoom Room licenses * Owner or Admin privileges on the Zoom Account.<br> **Scopes:** `room:read:admin`<br><br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_type = meeting; // string | The type of setting that you would like to retrieve.<br> `alert`: Alert Settings applied on the Zoom Rooms Account.<br> `meeting`: Meeting settings of the Zoom Rooms Account. <br> `signage`: View digital signage settings of the Zoom Rooms Account.

try {
    $result = $apiInstance->getZRAccountSettings($setting_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsAccountApi->getZRAccountSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_type** | **string**| The type of setting that you would like to retrieve.&lt;br&gt; &#x60;alert&#x60;: Alert Settings applied on the Zoom Rooms Account.&lt;br&gt; &#x60;meeting&#x60;: Meeting settings of the Zoom Rooms Account. &lt;br&gt; &#x60;signage&#x60;: View digital signage settings of the Zoom Rooms Account. | [default to &#39;meeting&#39;]

### Return type

[**\Zoom\Api\Model\GetZRAccountSettings200Response**](../Model/GetZRAccountSettings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZRAccProfile()`

```php
updateZRAccProfile($get_zr_account_profile200_response)
```

Update Zoom Room account profile

Update information on the account profile of a Zoom Room. This information can only by accessed either by the Zoom Room Account Owner or a user with Zoom Rooms admin permission. To update information on an individual Room Profile, use the [**Update a Zoom Room profile**](/docs/api-reference/zoom-api/methods#operation/updateRoomProfile) API.   **Prerequisites:**<br> * Zoom account owner or Zoom Rooms admin permissions<br>  **Scopes:** `room:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_zr_account_profile200_response = new \Zoom\Api\Model\GetZRAccountProfile200Response(); // \Zoom\Api\Model\GetZRAccountProfile200Response

try {
    $apiInstance->updateZRAccProfile($get_zr_account_profile200_response);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsAccountApi->updateZRAccProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_zr_account_profile200_response** | [**\Zoom\Api\Model\GetZRAccountProfile200Response**](../Model/GetZRAccountProfile200Response.md)|  | [optional]

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

## `updateZoomRoomAccSettings()`

```php
updateZoomRoomAccSettings($setting_type, $update_zoom_room_acc_settings_request)
```

Update Zoom Room account settings

Update account settings applied for Zoom Rooms in a Zoom account. With this API, you can update either the **Account Meeting Settings** or the **Alert Settings** (Client Alert Settings and Notification Settings) of the Zoom Rooms account by specifying the required setting type in the `setting_type` parameter. To update only **Alert Settings**, specify `alert` as the value of the `setting_type` query parameter and to update only **Account Meeting Settings**, specify `meeting` as the value of the `setting_type` query parameter.<br><br> **Prerequisites:**<br> * Zoom Room licenses * Owner or Admin privileges on the Zoom Account.<br> **Scopes:** `room:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_type = meeting; // string | The type of setting that you would like to update.<br> `alert`: Alert Settings applied on the Zoom Rooms Account.<br> `meeting`: Meeting settings of the Zoom Rooms Account.<br> `signage`: View digital signage settings of the Zoom Rooms Account.
$update_zoom_room_acc_settings_request = new \Zoom\Api\Model\UpdateZoomRoomAccSettingsRequest(); // \Zoom\Api\Model\UpdateZoomRoomAccSettingsRequest

try {
    $apiInstance->updateZoomRoomAccSettings($setting_type, $update_zoom_room_acc_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsAccountApi->updateZoomRoomAccSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_type** | **string**| The type of setting that you would like to update.&lt;br&gt; &#x60;alert&#x60;: Alert Settings applied on the Zoom Rooms Account.&lt;br&gt; &#x60;meeting&#x60;: Meeting settings of the Zoom Rooms Account.&lt;br&gt; &#x60;signage&#x60;: View digital signage settings of the Zoom Rooms Account. | [default to &#39;meeting&#39;]
 **update_zoom_room_acc_settings_request** | [**\Zoom\Api\Model\UpdateZoomRoomAccSettingsRequest**](../Model/UpdateZoomRoomAccSettingsRequest.md)|  | [optional]

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
