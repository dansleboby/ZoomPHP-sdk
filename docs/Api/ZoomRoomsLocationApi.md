# Zoom\Api\ZoomRoomsLocationApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAZRLocation()**](ZoomRoomsLocationApi.md#addAZRLocation) | **POST** /rooms/locations | Add a location
[**changeParentLocation()**](ZoomRoomsLocationApi.md#changeParentLocation) | **PUT** /rooms/locations/{locationId}/location | Change the assigned parent location
[**getZRLocationProfile()**](ZoomRoomsLocationApi.md#getZRLocationProfile) | **GET** /rooms/locations/{locationId} | Get Zoom Room location profile
[**getZRLocationSettings()**](ZoomRoomsLocationApi.md#getZRLocationSettings) | **GET** /rooms/locations/{locationId}/settings | Get location settings
[**getZRLocationStructure()**](ZoomRoomsLocationApi.md#getZRLocationStructure) | **GET** /rooms/locations/structure | Get Zoom Room location structure
[**listZRLocations()**](ZoomRoomsLocationApi.md#listZRLocations) | **GET** /rooms/locations | List Zoom Room locations
[**updateZRLocationProfile()**](ZoomRoomsLocationApi.md#updateZRLocationProfile) | **PATCH** /rooms/locations/{locationId} | Update Zoom Room location profile
[**updateZRLocationSettings()**](ZoomRoomsLocationApi.md#updateZRLocationSettings) | **PATCH** /rooms/locations/{locationId}/settings | Update location settings
[**updateZoomRoomsLocationStructure()**](ZoomRoomsLocationApi.md#updateZoomRoomsLocationStructure) | **PUT** /rooms/locations/structure | Update Zoom Rooms location structure


## `addAZRLocation()`

```php
addAZRLocation($add_azr_location_request): \Zoom\Api\Model\AddAZRLocation200Response
```

Add a location

Add a location to the [location hierarchial structure(s)](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) of Zoom Rooms in an account.  **Prerequisites:** * Account owner or admin permissions. * Zoom Rooms Version 4.0 or higher<br><br> **Scopes:** `room:write:admin`<br>      **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_azr_location_request = new \Zoom\Api\Model\AddAZRLocationRequest(); // \Zoom\Api\Model\AddAZRLocationRequest

try {
    $result = $apiInstance->addAZRLocation($add_azr_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->addAZRLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_azr_location_request** | [**\Zoom\Api\Model\AddAZRLocationRequest**](../Model/AddAZRLocationRequest.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\AddAZRLocation200Response**](../Model/AddAZRLocation200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeParentLocation()`

```php
changeParentLocation($location_id, $change_parent_location_request)
```

Change the assigned parent location

An account owner of a Zoom account can establish a [Zoom Rooms Location Hierarchy](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) to better organize Zoom Rooms spread across various locations. The location can be structured in a hierarchy with Country being the top-level location, followed by city, campus, building, and floor. The location in the lower level in the hierarchy is considered as a child of the location that is a level above in the hierarchy. Use this API to change the parent location of a child location. <br><br> For instance, if the location hierarchy is structured in a way where there are two campuses (Campus 1, and Campus 2) in a City and Campus 1 consists of a building named Building 1 with a floor where Zoom Rooms are located, and you would like to rearrange the structure so that Building 1 along with its child locations (floor and Zoom Rooms) are relocated directly under Campus 2 instead of Campus 1, you must provide the location ID of Building 1 in the path parameter of this request and the location ID of Campus 2 as the value of `parent_location_id` in the  request body.<br><br> **Prerequisite:**<br> * Account owner or admin permission * Zoom Rooms version 4.0 or higher<br> **Scopes:** `room:write:admin`<br><br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 49D7a0xPQvGQ2DCMZgSe7w; // string
$change_parent_location_request = new \Zoom\Api\Model\ChangeParentLocationRequest(); // \Zoom\Api\Model\ChangeParentLocationRequest

try {
    $apiInstance->changeParentLocation($location_id, $change_parent_location_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->changeParentLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  |
 **change_parent_location_request** | [**\Zoom\Api\Model\ChangeParentLocationRequest**](../Model/ChangeParentLocationRequest.md)|  | [optional]

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

## `getZRLocationProfile()`

```php
getZRLocationProfile($location_id): \Zoom\Api\Model\GetZRLocationProfile200Response
```

Get Zoom Room location profile

Each location type of the [Zoom Rooms location hierarchy](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) has a profile page that includes information such as name of the location, address, support email, etc. Use this API to retrieve information about a specific Zoom Rooms location type such as information about the city where the Zoom Rooms is located.  **Prerequisite:**<br> * Account owner or admin permission * Zoom Rooms version 4.0 or higher<br> **Scopes:** `room:read:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 49D7a0xPQvGQ2DCMZgSe7w; // string | Unique identifier of the location type. This can be retrieved using the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) API (Id property in the response).

try {
    $result = $apiInstance->getZRLocationProfile($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->getZRLocationProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| Unique identifier of the location type. This can be retrieved using the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) API (Id property in the response). |

### Return type

[**\Zoom\Api\Model\GetZRLocationProfile200Response**](../Model/GetZRLocationProfile200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZRLocationSettings()`

```php
getZRLocationSettings($setting_type, $location_id): \Zoom\Api\Model\GetZRLocationSettings200Response
```

Get location settings

Get information on meeting or alert settings applied to Zoom Rooms located in a specific location. By default, only **Meeting Settings** are returned. To view only **Alert Settings**, specify `alert` as the value of the `setting_type` query parameter.<br><br> **Prerequisites:**<br> * Zoom Room licenses * Owner or Admin privileges on the Zoom Account.<br> **Scopes:** `room:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_type = meeting; // string | The type of setting that you would like to retrieve.<br> `alert`: Alert Settings applied on the Zoom Rooms Account.<br> `meeting`: Meeting settings of the Zoom Rooms Account.<br> `signage`: Digital signage settings of the Zoom Rooms Account.
$location_id = 49D7a0xPQvGQ2DCMZgSe7w; // string | Unique identifier of the location type. This can be retrieved using the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) (Id property in the response).

try {
    $result = $apiInstance->getZRLocationSettings($setting_type, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->getZRLocationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_type** | **string**| The type of setting that you would like to retrieve.&lt;br&gt; &#x60;alert&#x60;: Alert Settings applied on the Zoom Rooms Account.&lt;br&gt; &#x60;meeting&#x60;: Meeting settings of the Zoom Rooms Account.&lt;br&gt; &#x60;signage&#x60;: Digital signage settings of the Zoom Rooms Account. | [default to &#39;meeting&#39;]
 **location_id** | **string**| Unique identifier of the location type. This can be retrieved using the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) (Id property in the response). |

### Return type

[**\Zoom\Api\Model\GetZRLocationSettings200Response**](../Model/GetZRLocationSettings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZRLocationStructure()`

```php
getZRLocationStructure(): \Zoom\Api\Model\GetZRLocationStructure200Response
```

Get Zoom Room location structure

Get the [location hierarchial structure(s)](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) applied on the Zoom Rooms in an account.<br><br> **Prerequisites:**<br> * Zoom Rooms version 4.0 or higher * Account owner or admin permissions<br> **Scopes:** `room:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getZRLocationStructure();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->getZRLocationStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\GetZRLocationStructure200Response**](../Model/GetZRLocationStructure200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listZRLocations()`

```php
listZRLocations($parent_location_id, $type, $page_size, $next_page_token): \Zoom\Api\Model\ListZRLocations200Response
```

List Zoom Room locations

A Zoom account owner or a Zoom Room administrator can establish a [location hierarchy](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) to help manage Zoom Rooms that are spread among a variety of locations. Use this API to list the different location types used for Zoom Rooms in an account.<br><br> **Prerequisites:** * Account owner or admin permissions. * Zoom Rooms Version 4.0 or higher<br><br> **Scopes:** `room:read:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_location_id = 49D7a0xPQvGQ2DCMZgSe7w; // string | A unique identifier of the parent location. For instance, if a Zoom Room is located in Floor 1 of Building A, the location of Building A will be the parent location of Floor 1. Use this parameter to filter the response by a specific location hierarchy level.
$type = state; // string | Use this field to filter the response by the type of location. The value can be one of the following: `country`, `states`, `city`, `campus`, `building`, `floor`.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listZRLocations($parent_location_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->listZRLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_location_id** | **string**| A unique identifier of the parent location. For instance, if a Zoom Room is located in Floor 1 of Building A, the location of Building A will be the parent location of Floor 1. Use this parameter to filter the response by a specific location hierarchy level. | [optional]
 **type** | **string**| Use this field to filter the response by the type of location. The value can be one of the following: &#x60;country&#x60;, &#x60;states&#x60;, &#x60;city&#x60;, &#x60;campus&#x60;, &#x60;building&#x60;, &#x60;floor&#x60;. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\ListZRLocations200Response**](../Model/ListZRLocations200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZRLocationProfile()`

```php
updateZRLocationProfile($location_id, $update_zr_location_profile_request): mixed
```

Update Zoom Room location profile

Each location type of the [Zoom Rooms location hierarchy](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) has a profile page that includes information such as name of the location, address, support email, etc. Use this API to update information about a specific Zoom Rooms location type such as information about the city where the Zoom Rooms is located.  **Prerequisite:**<br> * Account owner or admin permission * Zoom Rooms version 4.0 or higher<br> **Scopes:** `room:write:admin`<br>      **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 49D7a0xPQvGQ2DCMZgSe7w; // string | Unique Identifier of the location. This can be retrieved from the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) API.
$update_zr_location_profile_request = new \Zoom\Api\Model\UpdateZRLocationProfileRequest(); // \Zoom\Api\Model\UpdateZRLocationProfileRequest

try {
    $result = $apiInstance->updateZRLocationProfile($location_id, $update_zr_location_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->updateZRLocationProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| Unique Identifier of the location. This can be retrieved from the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) API. |
 **update_zr_location_profile_request** | [**\Zoom\Api\Model\UpdateZRLocationProfileRequest**](../Model/UpdateZRLocationProfileRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZRLocationSettings()`

```php
updateZRLocationSettings($setting_type, $location_id, $update_zr_location_settings_request)
```

Update location settings

Update information on either meeting or alert settings applied to Zoom Rooms located in a specific location. To update **Alert Settings**, specify `alert` as the value of the `setting_type` query parameter. Similarly, to update **Meeting Settings**, specify `meeting` as the value of the `setting_type` query parameter.<br><br> **Prerequisites:**<br> * Zoom Room licenses * Owner or Admin privileges on the Zoom Account.<br> **Scopes:** `room:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_type = meeting; // string | The type of setting that you would like to update.<br> `alert`: Alert Settings applied on the Zoom Rooms Account.<br> `meeting`: Meeting settings of the Zoom Rooms Account.<br> `signage`: Digital signage settings.
$location_id = 49D7a0xPQvGQ2DCMZgSe7w; // string | Unique identifier of the location type. This can be retrieved using the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) (Id property in the response).
$update_zr_location_settings_request = new \Zoom\Api\Model\UpdateZRLocationSettingsRequest(); // \Zoom\Api\Model\UpdateZRLocationSettingsRequest

try {
    $apiInstance->updateZRLocationSettings($setting_type, $location_id, $update_zr_location_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->updateZRLocationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_type** | **string**| The type of setting that you would like to update.&lt;br&gt; &#x60;alert&#x60;: Alert Settings applied on the Zoom Rooms Account.&lt;br&gt; &#x60;meeting&#x60;: Meeting settings of the Zoom Rooms Account.&lt;br&gt; &#x60;signage&#x60;: Digital signage settings. | [default to &#39;meeting&#39;]
 **location_id** | **string**| Unique identifier of the location type. This can be retrieved using the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) (Id property in the response). |
 **update_zr_location_settings_request** | [**\Zoom\Api\Model\UpdateZRLocationSettingsRequest**](../Model/UpdateZRLocationSettingsRequest.md)|  | [optional]

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

## `updateZoomRoomsLocationStructure()`

```php
updateZoomRoomsLocationStructure($update_zoom_rooms_location_structure_request)
```

Update Zoom Rooms location structure

Update the [location hierarchial structure(s)](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) applied on the Zoom Rooms in an account.<br><br> **Prerequisites:**<br> * Zoom Rooms version 4.0 or higher * Account owner or admin permissions<br> **Scopes:** `room:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_zoom_rooms_location_structure_request = new \Zoom\Api\Model\UpdateZoomRoomsLocationStructureRequest(); // \Zoom\Api\Model\UpdateZoomRoomsLocationStructureRequest

try {
    $apiInstance->updateZoomRoomsLocationStructure($update_zoom_rooms_location_structure_request);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsLocationApi->updateZoomRoomsLocationStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_zoom_rooms_location_structure_request** | [**\Zoom\Api\Model\UpdateZoomRoomsLocationStructureRequest**](../Model/UpdateZoomRoomsLocationStructureRequest.md)|  | [optional]

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
