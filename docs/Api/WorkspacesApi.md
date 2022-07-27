# Zoom\Api\WorkspacesApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReservation()**](WorkspacesApi.md#createReservation) | **POST** /workspaces/{workspaceId}/reservations | Create a reservation
[**deleteReservation()**](WorkspacesApi.md#deleteReservation) | **DELETE** /workspaces/{workspaceId}/reservations/{reservationId} | Delete a reservation
[**getHotDeskUsage()**](WorkspacesApi.md#getHotDeskUsage) | **GET** /workspaces/usage | Get a location&#39;s hot desk usage
[**listReservations()**](WorkspacesApi.md#listReservations) | **GET** /workspaces/{workspaceId}/reservations | Get a workspace&#39;s reservations
[**listWorkspaces()**](WorkspacesApi.md#listWorkspaces) | **GET** /workspaces | List workspaces
[**updateReservation()**](WorkspacesApi.md#updateReservation) | **PATCH** /workspaces/{workspaceId}/reservations/{reservationId} | Update a reservation


## `createReservation()`

```php
createReservation($create_reservation_request): \Zoom\Api\Model\CreateReservation201Response
```

Create a reservation

Use this API to create a workspace reservation.    **Scopes:** `workspace:write`, `workspace:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_reservation_request = new \Zoom\Api\Model\CreateReservationRequest(); // \Zoom\Api\Model\CreateReservationRequest

try {
    $result = $apiInstance->createReservation($create_reservation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->createReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_reservation_request** | [**\Zoom\Api\Model\CreateReservationRequest**](../Model/CreateReservationRequest.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\CreateReservation201Response**](../Model/CreateReservation201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReservation()`

```php
deleteReservation()
```

Delete a reservation

Use this API to delete a reservation.    **Scopes:** `workspace:write`, `workspace:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteReservation();
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->deleteReservation: ', $e->getMessage(), PHP_EOL;
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

## `getHotDeskUsage()`

```php
getHotDeskUsage(): \Zoom\Api\Model\GetHotDeskUsage200Response
```

Get a location's hot desk usage

Use this API to get a location's [hot desk](https://en.wikipedia.org/wiki/Hot_desking) usage information.    **Scopes:** `workspace:read`, `workspace:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHotDeskUsage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->getHotDeskUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\GetHotDeskUsage200Response**](../Model/GetHotDeskUsage200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReservations()`

```php
listReservations($workspace_id, $from, $to, $user_id): \Zoom\Api\Model\ListReservations200Response
```

Get a workspace's reservations

Use this API to get a workspace's reservations.    **Scopes:** `workspace:read`, `workspace:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = qMOLddnySIGGVycz8aX_JQ; // string | The workspace's ID.
$from = 2021-03-18T05:41:36Z; // \DateTime | The query start time. This value must occur in the next seven days.
$to = 2021-03-18T05:41:36Z; // \DateTime | The query end time. This value must occur in the next seven days.
$user_id = KDcuGIm1QgePTO8WbOqwIQ; // string | The ID of the user for whom to create a workspace reservation.

try {
    $result = $apiInstance->listReservations($workspace_id, $from, $to, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->listReservations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | **string**| The workspace&#39;s ID. |
 **from** | **\DateTime**| The query start time. This value must occur in the next seven days. | [optional]
 **to** | **\DateTime**| The query end time. This value must occur in the next seven days. | [optional]
 **user_id** | **string**| The ID of the user for whom to create a workspace reservation. | [optional]

### Return type

[**\Zoom\Api\Model\ListReservations200Response**](../Model/ListReservations200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkspaces()`

```php
listWorkspaces($location_id, $page_size, $next_page_token): \Zoom\Api\Model\ListWorkspaces200Response
```

List workspaces

Use this API to list a location's workspaces.    **Scopes:** `workspace:read`, `workspace:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 49D7a0xPQvGQ2DCMZgSe7w; // string | The location's ID.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listWorkspaces($location_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->listWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The location&#39;s ID. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\ListWorkspaces200Response**](../Model/ListWorkspaces200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReservation()`

```php
updateReservation($reservation_id, $update_reservation_request)
```

Update a reservation

Use this API to update a reservation.    **Scopes:** `workspace:write`, `workspace:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reservation_id = ebrg2b87a6uu9c678qhvsiahsc; // string | The reservation's ID.
$update_reservation_request = new \Zoom\Api\Model\UpdateReservationRequest(); // \Zoom\Api\Model\UpdateReservationRequest

try {
    $apiInstance->updateReservation($reservation_id, $update_reservation_request);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->updateReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_id** | **string**| The reservation&#39;s ID. |
 **update_reservation_request** | [**\Zoom\Api\Model\UpdateReservationRequest**](../Model/UpdateReservationRequest.md)|  | [optional]

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
