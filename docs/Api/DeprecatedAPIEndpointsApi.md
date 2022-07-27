# OpenAPI\Client\DeprecatedAPIEndpointsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listPastMeetingFiles()**](DeprecatedAPIEndpointsApi.md#listPastMeetingFiles) | **GET** /past_meetings/{meetingId}/files | List past meeting&#39;s files
[**listPastWebinarFiles()**](DeprecatedAPIEndpointsApi.md#listPastWebinarFiles) | **GET** /past_webinars/{webinarId}/files | List past webinar files


## `listPastMeetingFiles()`

```php
listPastMeetingFiles($meeting_id): \OpenAPI\Client\Model\ListPastMeetingFiles200Response
```

List past meeting's files

**Note: This API has been deprecated and is no longer supported due to GCM encryption updates for security purposes.** To learn about saving the in-meeting chat files via Zoom Client, refer to the [Saving in-meeting chat](https://support.zoom.us/hc/en-us/articles/115004792763-Saving-in-meeting-chat) guide.  List files sent via in-meeting chat during a meeting. The in-meeting files are deleted after 24 hours of the meeting completion time.  <br><br> **Scope:** `meeting:read`, `meeting:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeprecatedAPIEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.

try {
    $result = $apiInstance->listPastMeetingFiles($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIEndpointsApi->listPastMeetingFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |

### Return type

[**\OpenAPI\Client\Model\ListPastMeetingFiles200Response**](../Model/ListPastMeetingFiles200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPastWebinarFiles()`

```php
listPastWebinarFiles($webinar_id): \OpenAPI\Client\Model\ListPastWebinarFiles200Response
```

List past webinar files

**Note: This API has been deprecated and is no longer supported due to GCM encryption updates for security purposes.**  List files sent via in-meeting chat during a meeting. The in-meeting files are deleted after 24 hours of the meeting completion time.  <br><br> **Scope:** `webinar:read`, `webinar:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeprecatedAPIEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = xyz123abc; // string

try {
    $result = $apiInstance->listPastWebinarFiles($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIEndpointsApi->listPastWebinarFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ListPastWebinarFiles200Response**](../Model/ListPastWebinarFiles200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
