# Zoom\Api\TrackingFieldApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**trackingfieldCreate()**](TrackingFieldApi.md#trackingfieldCreate) | **POST** /tracking_fields | Create a tracking field
[**trackingfieldDelete()**](TrackingFieldApi.md#trackingfieldDelete) | **DELETE** /tracking_fields/{fieldId} | Delete a tracking field
[**trackingfieldGet()**](TrackingFieldApi.md#trackingfieldGet) | **GET** /tracking_fields/{fieldId} | Get a tracking field
[**trackingfieldList()**](TrackingFieldApi.md#trackingfieldList) | **GET** /tracking_fields | List tracking fields
[**trackingfieldUpdate()**](TrackingFieldApi.md#trackingfieldUpdate) | **PATCH** /tracking_fields/{fieldId} | Update a tracking field


## `trackingfieldCreate()`

```php
trackingfieldCreate($tracking_field): \Zoom\Api\Model\TrackingfieldCreate201Response
```

Create a tracking field

Use this API to create a new [tracking field](https://support.zoom.us/hc/en-us/articles/115000293426-Scheduling-Tracking-Fields). Tracking fields let you analyze usage by various fields within an organization. When scheduling a meeting, tracking fields will be included in the meeting options.   **Scope:** `tracking_fields:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * A Business, Education, API or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_field = new \Zoom\Api\Model\TrackingField(); // \Zoom\Api\Model\TrackingField | Tracking Field

try {
    $result = $apiInstance->trackingfieldCreate($tracking_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_field** | [**\Zoom\Api\Model\TrackingField**](../Model/TrackingField.md)| Tracking Field |

### Return type

[**\Zoom\Api\Model\TrackingfieldCreate201Response**](../Model/TrackingfieldCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackingfieldDelete()`

```php
trackingfieldDelete($field_id)
```

Delete a tracking field

Use this API to delete a [tracking field](https://support.zoom.us/hc/en-us/articles/115000293426-Scheduling-Tracking-Fields).   **Scope:** `tracking_fields:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * A Business, Education, API or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = a32CJji-weJ92; // string | The Tracking Field ID

try {
    $apiInstance->trackingfieldDelete($field_id);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **string**| The Tracking Field ID |

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

## `trackingfieldGet()`

```php
trackingfieldGet($field_id): \Zoom\Api\Model\TrackingfieldCreate201Response
```

Get a tracking field

Use this API to return information about a [tracking field](https://support.zoom.us/hc/en-us/articles/115000293426-Scheduling-Tracking-Fields).   **Scopes:** `tracking_fields:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * A Business, Education, API or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = a32CJji-weJ92; // string | The Tracking Field ID

try {
    $result = $apiInstance->trackingfieldGet($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **string**| The Tracking Field ID |

### Return type

[**\Zoom\Api\Model\TrackingfieldCreate201Response**](../Model/TrackingfieldCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackingfieldList()`

```php
trackingfieldList(): \Zoom\Api\Model\TrackingFieldList
```

List tracking fields

Use this API to list all the [tracking fields](https://support.zoom.us/hc/en-us/articles/115000293426-Scheduling-Tracking-Fields) on your Zoom account. Tracking fields let you analyze usage by various fields within an organization.   **Scopes:** `tracking_fields:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  * A Business, Education, API or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->trackingfieldList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\TrackingFieldList**](../Model/TrackingFieldList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackingfieldUpdate()`

```php
trackingfieldUpdate($field_id, $tracking_field)
```

Update a tracking field

Use this API to update a [tracking field](https://support.zoom.us/hc/en-us/articles/115000293426-Scheduling-Tracking-Fields).   **Scope:** `tracking_fields:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * A Business, Education, API or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = a32CJji-weJ92; // string | The Tracking Field ID
$tracking_field = new \Zoom\Api\Model\TrackingField(); // \Zoom\Api\Model\TrackingField

try {
    $apiInstance->trackingfieldUpdate($field_id, $tracking_field);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **string**| The Tracking Field ID |
 **tracking_field** | [**\Zoom\Api\Model\TrackingField**](../Model/TrackingField.md)|  |

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
