# Zoom\Api\ZoomRoomsCalendarApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addACalendarResourceToCalendarService()**](ZoomRoomsCalendarApi.md#addACalendarResourceToCalendarService) | **POST** /rooms/calendar/services/{serviceId}/resources | Add a calendar resource to a calendar service
[**deleteACalendarResource()**](ZoomRoomsCalendarApi.md#deleteACalendarResource) | **DELETE** /rooms/calendar/services/{serviceId}/resources/{resourceId} | Delete a calendar resource
[**deleteACalendarService()**](ZoomRoomsCalendarApi.md#deleteACalendarService) | **DELETE** /rooms/calendar/services/{serviceId} | Delete a calendar service
[**getCalendarResourceById()**](ZoomRoomsCalendarApi.md#getCalendarResourceById) | **GET** /rooms/calendar/services/{serviceId}/resources/{resourceId} | Get a calendar resource by ID
[**getCalendarResourcesByServiceId()**](ZoomRoomsCalendarApi.md#getCalendarResourcesByServiceId) | **GET** /rooms/calendar/services/{serviceId}/resources | List calendar resources by calendar service
[**getCalendarServices()**](ZoomRoomsCalendarApi.md#getCalendarServices) | **GET** /rooms/calendar/services | List calendar services
[**syncACalendarService()**](ZoomRoomsCalendarApi.md#syncACalendarService) | **PUT** /rooms/calendar/services/{serviceId}/sync | Start calendar service sync process


## `addACalendarResourceToCalendarService()`

```php
addACalendarResourceToCalendarService($service_id, $add_a_calendar_resource_to_calendar_service_request): \Zoom\Api\Model\AddACalendarResourceToCalendarService201Response
```

Add a calendar resource to a calendar service

Use this API to add a [calendar resource](https://support.zoom.us/hc/en-us/articles/4409832833037) to a Microsoft Exchange or Office 365 calendar service in a Zoom Room account.   **Note:** This API does not support adding a calendar resource to a Google calendar service.    **Scopes:** `room:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * A Pro or a higher plan with a [Zoom Rooms](https://zoom.us/zoomrooms) license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = qMOLddnySIGGVycz8aX_JQ; // string | The calendar service's ID.
$add_a_calendar_resource_to_calendar_service_request = new \Zoom\Api\Model\AddACalendarResourceToCalendarServiceRequest(); // \Zoom\Api\Model\AddACalendarResourceToCalendarServiceRequest

try {
    $result = $apiInstance->addACalendarResourceToCalendarService($service_id, $add_a_calendar_resource_to_calendar_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsCalendarApi->addACalendarResourceToCalendarService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| The calendar service&#39;s ID. |
 **add_a_calendar_resource_to_calendar_service_request** | [**\Zoom\Api\Model\AddACalendarResourceToCalendarServiceRequest**](../Model/AddACalendarResourceToCalendarServiceRequest.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\AddACalendarResourceToCalendarService201Response**](../Model/AddACalendarResourceToCalendarService201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteACalendarResource()`

```php
deleteACalendarResource($service_id, $resource_id)
```

Delete a calendar resource

Use this API to delete a Zoom Room account's [calendar resource](https://support.zoom.us/hc/en-us/articles/4409832833037) from a Microsoft Exchange or Office 365 calendar service.   **Note:** This API does not support deleting a calendar resource from a Google calendar service.    **Scopes:** `room:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * A Pro or a higher plan with a [Zoom Rooms](https://zoom.us/zoomrooms) license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = qMOLddnySIGGVycz8aX_JQ; // string | The calendar service's ID.
$resource_id = rNQUpdDXySFGhVycz7aR-SR; // string | The calendar resource's ID. You can get this value using the [**List Calendar Resources**](/docs/api-reference/zoom-api/methods#operation/listCalendarResources) API.

try {
    $apiInstance->deleteACalendarResource($service_id, $resource_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsCalendarApi->deleteACalendarResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| The calendar service&#39;s ID. |
 **resource_id** | **string**| The calendar resource&#39;s ID. You can get this value using the [**List Calendar Resources**](/docs/api-reference/zoom-api/methods#operation/listCalendarResources) API. |

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

## `deleteACalendarService()`

```php
deleteACalendarService($service_id)
```

Delete a calendar service

Use this API to delete a Zoom Room account's calendar service.    **Scopes:** `room:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * A Pro or a higher plan with a [Zoom Rooms](https://zoom.us/zoomrooms) license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = qMOLddnySIGGVycz8aX_JQ; // string | The calendar service's ID.

try {
    $apiInstance->deleteACalendarService($service_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsCalendarApi->deleteACalendarService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| The calendar service&#39;s ID. |

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

## `getCalendarResourceById()`

```php
getCalendarResourceById($service_id, $resource_id): \Zoom\Api\Model\GetCalendarResourcesByServiceId200ResponseCalendarResourcesInner
```

Get a calendar resource by ID

Use this API to get a Zoom Room account's [calendar resource](https://support.zoom.us/hc/en-us/articles/4409832833037).    **Scopes:** `room:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * A Pro or a higher plan with a [Zoom Rooms](https://zoom.us/zoomrooms) license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = qMOLddnySIGGVycz8aX_JQ; // string | The calendar service's ID.
$resource_id = rNQUpdDXySFGhVycz7aR-SR; // string | The calendar resource's ID.

try {
    $result = $apiInstance->getCalendarResourceById($service_id, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsCalendarApi->getCalendarResourceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| The calendar service&#39;s ID. |
 **resource_id** | **string**| The calendar resource&#39;s ID. |

### Return type

[**\Zoom\Api\Model\GetCalendarResourcesByServiceId200ResponseCalendarResourcesInner**](../Model/GetCalendarResourcesByServiceId200ResponseCalendarResourcesInner.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarResourcesByServiceId()`

```php
getCalendarResourcesByServiceId($service_id, $page_size, $next_page_token): \Zoom\Api\Model\GetCalendarResourcesByServiceId200Response
```

List calendar resources by calendar service

Use this API to list all of a Zoom Room account's [calendar resources](https://support.zoom.us/hc/en-us/articles/4409832833037).    **Scopes:** `room:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * A Pro or a higher plan with a [Zoom Rooms](https://zoom.us/zoomrooms) license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = qMOLddnySIGGVycz8aX_JQ; // string | The calendar service's ID.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->getCalendarResourcesByServiceId($service_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsCalendarApi->getCalendarResourcesByServiceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| The calendar service&#39;s ID. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\GetCalendarResourcesByServiceId200Response**](../Model/GetCalendarResourcesByServiceId200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarServices()`

```php
getCalendarServices(): \Zoom\Api\Model\GetCalendarServices200Response
```

List calendar services

Use this API to list all the existing [calendar services](https://support.zoom.us/hc/en-us/articles/4409832833037) in a Zoom Room account.    **Scopes:** `room:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * A Pro or a higher plan with a [Zoom Rooms](https://zoom.us/zoomrooms) license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCalendarServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsCalendarApi->getCalendarServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\GetCalendarServices200Response**](../Model/GetCalendarServices200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncACalendarService()`

```php
syncACalendarService($service_id)
```

Start calendar service sync process

Use this API to kick off the sync process for Zoom Room account's calendar service.    **Scopes:** `room:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * A Pro or a higher plan with a [Zoom Rooms](https://zoom.us/zoomrooms) license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ZoomRoomsCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = qMOLddnySIGGVycz8aX_JQ; // string | The calendar service's ID.

try {
    $apiInstance->syncACalendarService($service_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoomRoomsCalendarApi->syncACalendarService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| The calendar service&#39;s ID. |

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
