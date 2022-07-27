# Zoom\Api\ZoomRoomsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addARoom()**](ZoomRoomsApi.md#addARoom) | **POST** /rooms | Add a Zoom Room
[**changeZRLocation()**](ZoomRoomsApi.md#changeZRLocation) | **PUT** /rooms/{roomId}/location | Change a Zoom Room&#39;s location
[**createRoomDeviceProfile()**](ZoomRoomsApi.md#createRoomDeviceProfile) | **POST** /rooms/{roomId}/device_profiles | Create a device profile
[**deleteAZoomRoom()**](ZoomRoomsApi.md#deleteAZoomRoom) | **DELETE** /rooms/{roomId} | Delete a Zoom Room
[**deleteRoomProfile()**](ZoomRoomsApi.md#deleteRoomProfile) | **DELETE** /rooms/{roomId}/device_profiles/{deviceProfileId} | Delete a device profile
[**getRoomDevices()**](ZoomRoomsApi.md#getRoomDevices) | **GET** /rooms/{roomId}/device_profiles/devices | Get device information
[**getRoomProfile()**](ZoomRoomsApi.md#getRoomProfile) | **GET** /rooms/{roomId}/device_profiles/{deviceProfileId} | Get a device profile
[**getRoomProfiles()**](ZoomRoomsApi.md#getRoomProfiles) | **GET** /rooms/{roomId}/device_profiles | List device profiles
[**getZRProfile()**](ZoomRoomsApi.md#getZRProfile) | **GET** /rooms/{roomId} | Get Zoom Room profile
[**getZRSettings()**](ZoomRoomsApi.md#getZRSettings) | **GET** /rooms/{roomId}/settings | Get Zoom Room settings
[**listDigitalSignageContent()**](ZoomRoomsApi.md#listDigitalSignageContent) | **GET** /rooms/digital_signage | List digital signage contents
[**listZRDevices()**](ZoomRoomsApi.md#listZRDevices) | **GET** /rooms/{roomId}/devices | List Zoom Room devices
[**listZoomRooms()**](ZoomRoomsApi.md#listZoomRooms) | **GET** /rooms | List Zoom Rooms
[**manageE911signage()**](ZoomRoomsApi.md#manageE911signage) | **PATCH** /rooms/events | Update E911 digital signage
[**updateDeviceProfile()**](ZoomRoomsApi.md#updateDeviceProfile) | **PATCH** /rooms/{roomId}/device_profiles/{deviceProfileId} | Update a device profile
[**updateRoomProfile()**](ZoomRoomsApi.md#updateRoomProfile) | **PATCH** /rooms/{roomId} | Update a Zoom Room profile
[**updateZRSettings()**](ZoomRoomsApi.md#updateZRSettings) | **PATCH** /rooms/{roomId}/settings | Update Zoom Room settings
[**zoomRoomsControls()**](ZoomRoomsApi.md#zoomRoomsControls) | **PATCH** /rooms/{id}/events | Use Zoom Room controls


## `addARoom()`

```php
addARoom($add_a_room_request): \Zoom\Api\Model\AddARoom201Response
```

Add a Zoom Room

Use this API to [add a Zoom Room](https://support.zoom.us/hc/en-us/articles/202822279-Add-Zoom-Rooms-on-Web-Portal) to a Zoom account.<br><br> **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_a_room_request = new \Zoom\Api\Model\AddARoomRequest(); // \Zoom\Api\Model\AddARoomRequest

try {
    $result = $apiInstance->addARoom($add_a_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->addARoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_a_room_request** | [**\Zoom\Api\Model\AddARoomRequest**](../Model/AddARoomRequest.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\AddARoom201Response**](../Model/AddARoom201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeZRLocation()`

```php
changeZRLocation($room_id, $change_zr_location_request)
```

Change a Zoom Room's location

An account owner of a Zoom account can establish a [Zoom Rooms Location Hierarchy](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) to better organize Zoom Rooms spread across various locations. The location can be structured in a hierarchy with Country being the top-level location, followed by city, campus, building, and floor. Use this API to assign a new location for a Zoom Room. Note that the Zoom Room can be assigned only to the lowest level location available in the hierarchy. **Prerequisite:**<br> * Account owner or admin permission * Zoom Rooms version 4.0 or higher<br> **Scopes:** `room:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | Unique Identifier of the Zoom Room.
$change_zr_location_request = new \Zoom\Api\Model\ChangeZRLocationRequest(); // \Zoom\Api\Model\ChangeZRLocationRequest

try {
    $apiInstance->changeZRLocation($room_id, $change_zr_location_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->changeZRLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. |
 **change_zr_location_request** | [**\Zoom\Api\Model\ChangeZRLocationRequest**](../Model/ChangeZRLocationRequest.md)|  | [optional]

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

## `createRoomDeviceProfile()`

```php
createRoomDeviceProfile($create_room_device_profile_request)
```

Create a device profile

Use this API to create a Zoom Room device profile.    **Scopes:** `room:write:admin`    **Prerequisites:**  * A Pro or a higher account with Zoom Rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_room_device_profile_request = new \Zoom\Api\Model\CreateRoomDeviceProfileRequest(); // \Zoom\Api\Model\CreateRoomDeviceProfileRequest

try {
    $apiInstance->createRoomDeviceProfile($create_room_device_profile_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->createRoomDeviceProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_room_device_profile_request** | [**\Zoom\Api\Model\CreateRoomDeviceProfileRequest**](../Model/CreateRoomDeviceProfileRequest.md)|  |

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

## `deleteAZoomRoom()`

```php
deleteAZoomRoom($room_id)
```

Delete a Zoom Room

[Remove](https://support.zoom.us/hc/en-us/articles/360033432032-Zoom-Room-Device-Profiles#h_e55b2092-c418-4b02-819f-44de51448900) a specific Zoom Room profile from a Zoom account.<br><br> **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | Unique Identifier of a Zoom Room.

try {
    $apiInstance->deleteAZoomRoom($room_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->deleteAZoomRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of a Zoom Room. |

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

## `deleteRoomProfile()`

```php
deleteRoomProfile()
```

Delete a device profile

Use this API to delete a Zoom Room device profile.    **Scopes:** `room:write:admin`    **Prerequisites:**  * A Pro or a higher account with Zoom Rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteRoomProfile();
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->deleteRoomProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getRoomDevices()`

```php
getRoomDevices(): \Zoom\Api\Model\GetRoomDevices200Response
```

Get device information

Use this API to return information about a Zoom Room device.    **Scopes:** `room:read:admin`    **Prerequisites:**  * A Pro or a higher account with Zoom Rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRoomDevices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->getRoomDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\GetRoomDevices200Response**](../Model/GetRoomDevices200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomProfile()`

```php
getRoomProfile($device_profile_id): \Zoom\Api\Model\GetRoomProfile200Response
```

Get a device profile

Use this API to return a Zoom Room device profile.    **Scopes:** `room:read:admin`    **Prerequisites:**  * A Pro or a higher account with Zoom Rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_profile_id = wPYhqpOYTsiWV0Ls0_xZRg; // string | The Zoom Room device profile's ID.

try {
    $result = $apiInstance->getRoomProfile($device_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->getRoomProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_profile_id** | **string**| The Zoom Room device profile&#39;s ID. |

### Return type

[**\Zoom\Api\Model\GetRoomProfile200Response**](../Model/GetRoomProfile200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomProfiles()`

```php
getRoomProfiles($room_id): object[]
```

List device profiles

Use this API to return a list of Zoom Room device profiles.    **Scopes:** `room:read:admin`    **Prerequisites:**  * A Pro or a higher account with Zoom Rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | The Zoom Room's ID.

try {
    $result = $apiInstance->getRoomProfiles($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->getRoomProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| The Zoom Room&#39;s ID. |

### Return type

**object[]**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZRProfile()`

```php
getZRProfile($room_id, $regenerate_activation_code): \Zoom\Api\Model\GetZRProfile200Response
```

Get Zoom Room profile

Zoom Rooms is a software-based room system that provides an integrated experience for audio conferencing, wireless screen sharing and video conferencing. Use this API to get detailed information on a specific Zoom Room in a Zoom account.  **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | Unique Identifier of the Zoom Room. This can be retrieved from the response of the [**List Zoom Rooms**](/docs/api-reference/zoom-api/methods#operation/listZoomRooms) API.
$regenerate_activation_code = true; // bool | Whether to regenerate an activation code for a Zoom Room. This value defaults to `false`.

try {
    $result = $apiInstance->getZRProfile($room_id, $regenerate_activation_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->getZRProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. This can be retrieved from the response of the [**List Zoom Rooms**](/docs/api-reference/zoom-api/methods#operation/listZoomRooms) API. |
 **regenerate_activation_code** | **bool**| Whether to regenerate an activation code for a Zoom Room. This value defaults to &#x60;false&#x60;. | [optional] [default to false]

### Return type

[**\Zoom\Api\Model\GetZRProfile200Response**](../Model/GetZRProfile200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZRSettings()`

```php
getZRSettings($setting_type, $room_id): \Zoom\Api\Model\GetZRSettings200Response
```

Get Zoom Room settings

Get information on meeting or alert settings applied to a specific Zoom Room. By default, only **Meeting Settings** are returned. To view only **Alert Settings**, specify `alert` as the value of the `setting_type` query parameter.<br> **Prerequisites:**<br> * Zoom Room licenses * Owner or Admin privileges on the Zoom Account.<br> **Scopes:** `room:read:admin`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_type = meeting; // string | The type of setting that you would like to retrieve.<br> `alert`: Alert Settings applied on the Zoom Rooms Account.<br> `meeting`: Meeting settings of the Zoom Rooms Account.
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | Unique identifier of the Zoom Room.

try {
    $result = $apiInstance->getZRSettings($setting_type, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->getZRSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_type** | **string**| The type of setting that you would like to retrieve.&lt;br&gt; &#x60;alert&#x60;: Alert Settings applied on the Zoom Rooms Account.&lt;br&gt; &#x60;meeting&#x60;: Meeting settings of the Zoom Rooms Account. | [default to &#39;meeting&#39;]
 **room_id** | **string**| Unique identifier of the Zoom Room. |

### Return type

[**\Zoom\Api\Model\GetZRSettings200Response**](../Model/GetZRSettings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDigitalSignageContent()`

```php
listDigitalSignageContent($type, $folder_id, $page_size, $next_page_token): \Zoom\Api\Model\ListDigitalSignageContent200Response
```

List digital signage contents

Use this API to return information about a Zoom account's [Zoom Rooms digital signage content](https://support.zoom.us/hc/en-us/articles/360000030683-Zoom-Rooms-digital-signage). You can also view this content in the **Room Management** section's [**Digital Signage Content**](https://zoom.us/digitalsignage#/) tab in the Zoom web portal.   **Scopes:** `room:read:admin`   **Prerequisites:**  * A Pro or a higher account with Zoom Rooms.  * Existing content in the **Digital Signage Content** tab.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = content; // string | Specify the type of digital signage resource. The value can be one of the following: * `content`: Returns information about content files. * `folder`: Returns information about the folder where the content files are located.
$folder_id = LHMmOOYaRiOA5m5WZjXVPA; // string | Unique identifier of the folder where the content is located. Provide this field if you would like to filter the response by contents that are only available in a specific folder.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listDigitalSignageContent($type, $folder_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->listDigitalSignageContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Specify the type of digital signage resource. The value can be one of the following: * &#x60;content&#x60;: Returns information about content files. * &#x60;folder&#x60;: Returns information about the folder where the content files are located. | [optional]
 **folder_id** | **string**| Unique identifier of the folder where the content is located. Provide this field if you would like to filter the response by contents that are only available in a specific folder. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\ListDigitalSignageContent200Response**](../Model/ListDigitalSignageContent200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listZRDevices()`

```php
listZRDevices($room_id): \Zoom\Api\Model\ListZRDevices200Response
```

List Zoom Room devices

List information about the devices that are being used for a specific [Zoom Room](https://support.zoom.us/hc/en-us/articles/207483343-Getting-Started-with-Zoom-Rooms) in an account.  **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> * Account owner or admin permissions. **Scopes**: `room:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | Unique Identifier of the Zoom Room. This can be retrieved from the response of [**List Zoom Rooms**](/docs/api-reference/zoom-api/methods#operation/listZoomRooms) API.

try {
    $result = $apiInstance->listZRDevices($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->listZRDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. This can be retrieved from the response of [**List Zoom Rooms**](/docs/api-reference/zoom-api/methods#operation/listZoomRooms) API. |

### Return type

[**\Zoom\Api\Model\ListZRDevices200Response**](../Model/ListZRDevices200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listZoomRooms()`

```php
listZoomRooms($status, $type, $unassigned_rooms, $page_size, $next_page_token, $location_id, $query_name): \Zoom\Api\Model\ListZoomRooms200Response
```

List Zoom Rooms

Zoom Rooms is a software-based room system that provides an integrated experience for audio conferencing, wireless screen sharing and video conferencing. Use this API to list all the existing [Zoom Rooms](https://support.zoom.us/hc/en-us/articles/207483343-Getting-Started-with-Zoom-Rooms) in a Zoom account.<br><br> **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = Offline; // string | The status of the Zoom Room.
$type = ZoomRoom; // string | Type of the Zoom Rooms.
$unassigned_rooms = true; // bool | Use this query parameter with a value of `true` if you would like to see Zoom Rooms in your account that have not been assigned to anyone yet.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$location_id = 49D7a0xPQvGQ2DCMZgSe7w; // string | Parent location ID of the Zoom Room.
$query_name = My Zoom Room name; // string | The name of a Zoom Room. If you do not call this parameter, the API will return all of the account's Zoom Rooms.

try {
    $result = $apiInstance->listZoomRooms($status, $type, $unassigned_rooms, $page_size, $next_page_token, $location_id, $query_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->listZoomRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| The status of the Zoom Room. | [optional]
 **type** | **string**| Type of the Zoom Rooms. | [optional]
 **unassigned_rooms** | **bool**| Use this query parameter with a value of &#x60;true&#x60; if you would like to see Zoom Rooms in your account that have not been assigned to anyone yet. | [optional] [default to false]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **location_id** | **string**| Parent location ID of the Zoom Room. | [optional]
 **query_name** | **string**| The name of a Zoom Room. If you do not call this parameter, the API will return all of the account&#39;s Zoom Rooms. | [optional]

### Return type

[**\Zoom\Api\Model\ListZoomRooms200Response**](../Model/ListZoomRooms200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageE911signage()`

```php
manageE911signage($manage_e911signage_request): \Zoom\Api\Model\ManageE911signage202Response
```

Update E911 digital signage

Display or hide E911 emergency alert text content from [Zoom Rooms digital signage](https://support.zoom.us/hc/en-us/articles/360000030683-Zoom-Rooms-digital-signage).  **Scope:** `room:write:admin`  **Prerequisites:**<br> * [Zoom Rooms](https://zoom.us/zoomrooms/software) 5.3.0 or higher * Zoom Rooms digital signage must be [enabled](https://support.zoom.us/hc/en-us/articles/360000030683-Zoom-Rooms-Digital-Signage#h_767fbb33-82a8-45a8-8392-a1bfa9687edd)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_e911signage_request = new \Zoom\Api\Model\ManageE911signageRequest(); // \Zoom\Api\Model\ManageE911signageRequest

try {
    $result = $apiInstance->manageE911signage($manage_e911signage_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->manageE911signage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_e911signage_request** | [**\Zoom\Api\Model\ManageE911signageRequest**](../Model/ManageE911signageRequest.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\ManageE911signage202Response**](../Model/ManageE911signage202Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceProfile()`

```php
updateDeviceProfile($update_device_profile_request)
```

Update a device profile

Use this API to update a Zoom Room device profile.    **Scopes:** `room:write:admin`    **Prerequisites:**  * A Pro or a higher account with Zoom Rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_device_profile_request = new \Zoom\Api\Model\UpdateDeviceProfileRequest(); // \Zoom\Api\Model\UpdateDeviceProfileRequest

try {
    $apiInstance->updateDeviceProfile($update_device_profile_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->updateDeviceProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_device_profile_request** | [**\Zoom\Api\Model\UpdateDeviceProfileRequest**](../Model/UpdateDeviceProfileRequest.md)|  |

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

## `updateRoomProfile()`

```php
updateRoomProfile($room_id, $update_room_profile_request)
```

Update a Zoom Room profile

Update basic information on a specific Zoom Room in a Zoom account.<br>  **Prerequisites:**<br> * Pro or a higher plan with [Zoom Room](https://zoom.us/zoomrooms) license.<br> **Scopes**: `room:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | Unique Identifier of a Zoom Room.
$update_room_profile_request = new \Zoom\Api\Model\UpdateRoomProfileRequest(); // \Zoom\Api\Model\UpdateRoomProfileRequest

try {
    $apiInstance->updateRoomProfile($room_id, $update_room_profile_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->updateRoomProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of a Zoom Room. |
 **update_room_profile_request** | [**\Zoom\Api\Model\UpdateRoomProfileRequest**](../Model/UpdateRoomProfileRequest.md)|  | [optional]

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

## `updateZRSettings()`

```php
updateZRSettings($room_id, $setting_type, $update_zr_settings_request)
```

Update Zoom Room settings

Update either meeting or alert settings applied to a specific Zoom Room. To update **Alert Settings**, specify `alert` as the value of the `setting_type` query parameter. To update **Meeting Settings**, specify `meeting` as the value of the `setting_type` query parameter.<br> **Prerequisites:**<br> * Zoom Room licenses * Owner or Admin privileges on the Zoom Account.<br> **Scopes:** `room:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = qMOLddnySIGGVycz8aX_JQ; // string | Unique Identifier of the Zoom Room.
$setting_type = alert; // string | The type of setting that you would like to update.<br> `alert`: Alert Settings applied on the Zoom Room.<br> `meeting`: Meeting settings of the Zoom Room.<br> `signage`: Digital signage settings applied on the Zoom Room.
$update_zr_settings_request = new \Zoom\Api\Model\UpdateZRSettingsRequest(); // \Zoom\Api\Model\UpdateZRSettingsRequest

try {
    $apiInstance->updateZRSettings($room_id, $setting_type, $update_zr_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->updateZRSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_id** | **string**| Unique Identifier of the Zoom Room. |
 **setting_type** | **string**| The type of setting that you would like to update.&lt;br&gt; &#x60;alert&#x60;: Alert Settings applied on the Zoom Room.&lt;br&gt; &#x60;meeting&#x60;: Meeting settings of the Zoom Room.&lt;br&gt; &#x60;signage&#x60;: Digital signage settings applied on the Zoom Room. | [optional]
 **update_zr_settings_request** | [**\Zoom\Api\Model\UpdateZRSettingsRequest**](../Model/UpdateZRSettingsRequest.md)|  | [optional]

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

## `zoomRoomsControls()`

```php
zoomRoomsControls($id, $zoom_rooms_controls_request)
```

Use Zoom Room controls

This Zoom Rooms API let you control [Zoom Rooms](https://support.zoom.us/hc/en-us/articles/207483343). This API let your app return information such as your account's Zoom Rooms and manage meetings and contacts.   **Prerequisites:** * [Zoom Rooms](https://support.zoom.us/hc/en-us/articles/207483343-Getting-started-with-Zoom-Rooms#:~:text=Zoom%20Rooms%20is%20a%20software,or%20from%20their%20mobile%20device) must have been set up for use for the account and must be online.  * You must have access to the Calendar Integration APIs (either Microsoft Exchange or Google Calendar APIs) to get calendar information associated with the Room.  **Scope:** `room:write:admin`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = qMOLddnySIGGVycz8aX_JQ; // string | Room ID
$zoom_rooms_controls_request = new \Zoom\Api\Model\ZoomRoomsControlsRequest(); // \Zoom\Api\Model\ZoomRoomsControlsRequest

try {
    $apiInstance->zoomRoomsControls($id, $zoom_rooms_controls_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsApi->zoomRoomsControls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Room ID |
 **zoom_rooms_controls_request** | [**\Zoom\Api\Model\ZoomRoomsControlsRequest**](../Model/ZoomRoomsControlsRequest.md)|  |

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
