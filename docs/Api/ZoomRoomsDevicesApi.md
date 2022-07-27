# Zoom\Api\ZoomRoomsDevicesApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeZoomRoomsAppVersion()**](ZoomRoomsDevicesApi.md#changeZoomRoomsAppVersion) | **PUT** /rooms/{roomId}/devices/{deviceId}/app_version | Change Zoom Rooms app version


## `changeZoomRoomsAppVersion()`

```php
changeZoomRoomsAppVersion($room_id, $device_id, $change_zoom_rooms_app_version_request)
```

Change Zoom Rooms app version

Use this API to [upgrade or downgrade](https://support.zoom.us/hc/en-us/articles/204675449-Upgrade-or-Downgrade-Zoom-Rooms-Software) the version of your installed Zoom Rooms app on your Mac or Windows device.   **Scopes:** `room:write:admin`   **Prerequisites:**  * A Pro or a higher account with Zoom Rooms.  * The Zoom Rooms software must be installed on a Mac or a Windows device. This API does not support other devices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | Unique Identifier of the Zoom Room.
$device_id = qsrpAOJCTm-VPkOf3bHXgw; // string | Unique Identifier of the Mac or the Windows device. The value of this field can be retrieved from the [**List Zoom Room devices**](/docs/api-reference/zoom-api/methods#operation/listZRDevices) API.
$change_zoom_rooms_app_version_request = new \Zoom\Api\Model\ChangeZoomRoomsAppVersionRequest(); // \Zoom\Api\Model\ChangeZoomRoomsAppVersionRequest

try {
    $apiInstance->changeZoomRoomsAppVersion($room_id, $device_id, $change_zoom_rooms_app_version_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsDevicesApi->changeZoomRoomsAppVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. |
 **device_id** | **string**| Unique Identifier of the Mac or the Windows device. The value of this field can be retrieved from the [**List Zoom Room devices**](/docs/api-reference/zoom-api/methods#operation/listZRDevices) API. |
 **change_zoom_rooms_app_version_request** | [**\Zoom\Api\Model\ChangeZoomRoomsAppVersionRequest**](../Model/ChangeZoomRoomsAppVersionRequest.md)|  | [optional]

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
