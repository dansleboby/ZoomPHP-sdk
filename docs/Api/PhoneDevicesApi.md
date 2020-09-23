# Zoom\Api\PhoneDevicesApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPhoneDevice**](PhoneDevicesApi.md#addPhoneDevice) | **POST** /phone/devices | Add a Device
[**deleteADevice**](PhoneDevicesApi.md#deleteADevice) | **DELETE** /phone/devices/{deviceId} | Delete a Device
[**getADevice**](PhoneDevicesApi.md#getADevice) | **GET** /phone/devices/{deviceId} | Get Device Details
[**listPhoneDevices**](PhoneDevicesApi.md#listPhoneDevices) | **GET** /phone/devices | List Devices
[**updateADevice**](PhoneDevicesApi.md#updateADevice) | **PATCH** /phone/devices/{deviceId} | Update a Device



## addPhoneDevice

> object addPhoneDevice($body)

Add a Device

By default, all Zoom Phone users can make and receive calls using the Zoom desktop and mobile applications. Additionally, if a desk phone is required, use this API to [add a desk phone and assign it](https://support.zoom.us/hc/en-us/articles/360021119092#h_5ca07504-68a8-4c3d-ad0e-c1d3594436da) to a user.  **Prerequisites:**<br> * Pro or a higher account with Zoom Phone license * Account owner or admin permissions * [Supported device](https://support.zoom.us/hc/en-us/articles/360001299063-Zoom-Voice-Supported-Devices)<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Zoom\Api\Model\InlineObject63(); // \Zoom\Api\Model\InlineObject63 | 

try {
    $result = $apiInstance->addPhoneDevice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneDevicesApi->addPhoneDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Zoom\Api\Model\InlineObject63**](../Model/InlineObject63.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteADevice

> object deleteADevice($device_id)

Delete a Device

Remove a [desk phone device](https://support.zoom.us/hc/en-us/articles/360021119092) from the Zoom Phone System Management.<br><br> **Prerequisites:**<br> * Pro or a higher account with Zoom Phone license * Account owner or admin permissions * Device must not have been assigned to a user.<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = 'device_id_example'; // string | Unique Identifier of the device.

try {
    $result = $apiInstance->deleteADevice($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneDevicesApi->deleteADevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Unique Identifier of the device. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getADevice

> \Zoom\Api\Model\InlineResponse20089 getADevice($device_id)

Get Device Details

Get detailed information about a specific [desk phone device](https://support.zoom.us/hc/en-us/articles/360021119092).<br><br> **Prerequisites:**<br> * Pro or a higher account with Zoom Phone license * Account owner or admin permissions<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = 'device_id_example'; // string | Unique Identifier of the device.

try {
    $result = $apiInstance->getADevice($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneDevicesApi->getADevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Unique Identifier of the device. |

### Return type

[**\Zoom\Api\Model\InlineResponse20089**](../Model/InlineResponse20089.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPhoneDevices

> \Zoom\Api\Model\InlineResponse20088 listPhoneDevices($type, $next_page_token, $page_size)

List Devices

List all the [desk phone devices](https://support.zoom.us/hc/en-us/articles/360021119092) that are configured with Zoom Phone on an account. To view devices that have not yet been assigned to a user, set the value of the `type` query parameter as `unassigned` and to view devices that have been assigned, set the value as `assigned`.<br><br> **Scopes:** `phone:read:admin`  <br> **Prerequisites:**<br> * Pro or a higher account with Zoom Phone license * Account owner or admin permissions<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | State of the device. The value should be either `assigned` to list devices that have been assigned to user(s) or `unassigned` to list devices that have not yet been assigned to any user in the Zoom account.
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$page_size = 30; // int | The number of records returned within a single API call.

try {
    $result = $apiInstance->listPhoneDevices($type, $next_page_token, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneDevicesApi->listPhoneDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| State of the device. The value should be either &#x60;assigned&#x60; to list devices that have been assigned to user(s) or &#x60;unassigned&#x60; to list devices that have not yet been assigned to any user in the Zoom account. |
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]

### Return type

[**\Zoom\Api\Model\InlineResponse20088**](../Model/InlineResponse20088.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateADevice

> object updateADevice($device_id, $body)

Update a Device

Update information of a [desk phone device](https://support.zoom.us/hc/en-us/articles/360021119092).<br><br> **Prerequisites:**<br> * Pro or a higher account with Zoom Phone license * Account owner or admin permissions<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = 'device_id_example'; // string | Unique Identifier of the Device.
$body = new \Zoom\Api\Model\InlineObject64(); // \Zoom\Api\Model\InlineObject64 | 

try {
    $result = $apiInstance->updateADevice($device_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneDevicesApi->updateADevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Unique Identifier of the Device. |
 **body** | [**\Zoom\Api\Model\InlineObject64**](../Model/InlineObject64.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

