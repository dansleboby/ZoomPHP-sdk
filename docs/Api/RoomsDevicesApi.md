# Zoom\Api\RoomsDevicesApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeZoomRoomsAppVersion**](RoomsDevicesApi.md#changeZoomRoomsAppVersion) | **PUT** /rooms/{roomId}/devices/{deviceId}/app_version | Change Zoom Rooms App Version



## changeZoomRoomsAppVersion

> object changeZoomRoomsAppVersion($room_id, $device_id, $body)

Change Zoom Rooms App Version

[Upgrade](https://support.zoom.us/hc/en-us/articles/204675449-Upgrade-or-Downgrade-Zoom-Rooms-Software#h_1751c48a-644e-4a60-b96a-31ec77c616e6) or [downgrade](https://support.zoom.us/hc/en-us/articles/204675449-Upgrade-or-Downgrade-Zoom-Rooms-Software#h_d97349d6-9253-484c-af80-350475026524) the version of Zoom Rooms App installed in your Mac or Windows device.  **Prerequisites:**<br> * Pro or a higher account with Zoom Rooms. * Zoom Rooms software must be installed either on a Mac or a Windows device. This API does not support other devices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\RoomsDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | Unique Identifier of the Zoom Room.
$device_id = 'device_id_example'; // string | Unique Identifier of the Mac or the Windows device. The value of this field can be retrieved from the [List Zoom Room Devices API](https://marketplace.zoom.us/docs/api-reference/zoom-api/rooms/listzrdevices).
$body = new \Zoom\Api\Model\InlineObject88(); // \Zoom\Api\Model\InlineObject88 | 

try {
    $result = $apiInstance->changeZoomRoomsAppVersion($room_id, $device_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsDevicesApi->changeZoomRoomsAppVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. |
 **device_id** | **string**| Unique Identifier of the Mac or the Windows device. The value of this field can be retrieved from the [List Zoom Room Devices API](https://marketplace.zoom.us/docs/api-reference/zoom-api/rooms/listzrdevices). |
 **body** | [**\Zoom\Api\Model\InlineObject88**](../Model/InlineObject88.md)|  | [optional]

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

