# Zoom\Api\DevicesApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deviceCreate()**](DevicesApi.md#deviceCreate) | **POST** /h323/devices | Create a H.323/SIP device
[**deviceDelete()**](DevicesApi.md#deviceDelete) | **DELETE** /h323/devices/{deviceId} | Delete a H.323/SIP device
[**deviceList()**](DevicesApi.md#deviceList) | **GET** /h323/devices | List H.323/SIP devices
[**deviceUpdate()**](DevicesApi.md#deviceUpdate) | **PATCH** /h323/devices/{deviceId} | Update a H.323/SIP device


## `deviceCreate()`

```php
deviceCreate($device)
```

Create a H.323/SIP device

A H.323 or SIP device can make a video call to a [Room Connector](https://support.zoom.us/hc/en-us/articles/201363273-Getting-Started-With-H-323-SIP-Room-Connector) to join a Zoom cloud meeting. A Room Connector can also call out to a H.323 or SIP device to join a Zoom cloud meeting. Use this API to add a H.323/SIP device to your Zoom account<br><br> **Scopes:** `h323:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light` <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device = new \Zoom\Api\Model\Device(); // \Zoom\Api\Model\Device | H.323/SIP device.

try {
    $apiInstance->deviceCreate($device);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deviceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | [**\Zoom\Api\Model\Device**](../Model/Device.md)| H.323/SIP device. |

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

## `deviceDelete()`

```php
deviceDelete($device_id)
```

Delete a H.323/SIP device

A H.323 or SIP device can make a video call to a [Room Connector](https://support.zoom.us/hc/en-us/articles/201363273-Getting-Started-With-H-323-SIP-Room-Connector) to join a Zoom cloud meeting. A Room Connector can also call out to a H.323 or SIP device to join a Zoom cloud meeting. Use this API to delete a H.323/SIP device from your Zoom account.<br><br> **Scopes:** `h323:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = abceHewahkrehwiK; // string | The device ID.

try {
    $apiInstance->deviceDelete($device_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deviceDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| The device ID. |

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

## `deviceList()`

```php
deviceList($page_size, $page_number, $next_page_token): \Zoom\Api\Model\DeviceList
```

List H.323/SIP devices

A H.323 or SIP device can make a video call to a [Room Connector](https://support.zoom.us/hc/en-us/articles/201363273-Getting-Started-With-H-323-SIP-Room-Connector) to join a Zoom cloud meeting. A Room Connector can also call out to a H.323 or SIP device to join a Zoom cloud meeting. Use this API to list all H.323/SIP Devices on a Zoom account.<br><br> **Scopes:** `h323:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated.** We will no longer support this field in a future release. Instead, use the `next_page_token` for pagination.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->deviceList($page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deviceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\DeviceList**](../Model/DeviceList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deviceUpdate()`

```php
deviceUpdate($device_id, $device)
```

Update a H.323/SIP device

A H.323 or SIP device can make a video call to a [Room Connector](https://support.zoom.us/hc/en-us/articles/201363273-Getting-Started-With-H-323-SIP-Room-Connector) to join a Zoom cloud meeting. A Room Connector can also call out to a H.323 or SIP device to join a Zoom cloud meeting. Use this API to edit information of a H.323/SIP device from your Zoom account.<br><br> **Scopes:** `h323:write:admin`<br>  <br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = abceHewahkrehwiK; // string | The device ID.
$device = new \Zoom\Api\Model\Device(); // \Zoom\Api\Model\Device

try {
    $apiInstance->deviceUpdate($device_id, $device);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deviceUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| The device ID. |
 **device** | [**\Zoom\Api\Model\Device**](../Model/Device.md)|  |

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
