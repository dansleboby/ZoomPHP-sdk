# Zoom\Api\ArchivingApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteArchivedFiles()**](ArchivingApi.md#deleteArchivedFiles) | **DELETE** /past_meetings/{meetingUUID}/archive_files | Delete a meeting&#39;s archived files
[**getArchivedFileStatistics()**](ArchivingApi.md#getArchivedFileStatistics) | **GET** /archive_files/statistics | Get archived file statistics
[**getArchivedFiles()**](ArchivingApi.md#getArchivedFiles) | **GET** /past_meetings/{meetingUUID}/archive_files | Get a meeting&#39;s archived files
[**listArchivedFiles()**](ArchivingApi.md#listArchivedFiles) | **GET** /archive_files | List archived files


## `deleteArchivedFiles()`

```php
deleteArchivedFiles($meeting_uuid)
```

Delete a meeting's archived files

Use this API to delete all of a meeting's archived files.    **Scopes:** `recording:write:admin`, `recording:write` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The [**Meeting and Webinar Archiving** feature](https://support.zoom.us/hc/en-us/articles/4405656451213--Archiving-for-meetings-and-webinars) enabled for your account by [Zoom Support](https://support.zoom.us/hc/en-us/articles/201362003).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ArchivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_uuid = 4444AAAiAAAAAiAiAiiAii==; // string | The meeting's universally unique identifier (UUID). Each meeting instance generates a UUID. For example, after a meeting ends, a new UUID is generated for the next meeting instance.  If the meeting UUID begins with a `/` character or contains a `//` character, you **must** double-encode the meeting UUID when using the meeting UUID for other API calls.

try {
    $apiInstance->deleteArchivedFiles($meeting_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ArchivingApi->deleteArchivedFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_uuid** | **string**| The meeting&#39;s universally unique identifier (UUID). Each meeting instance generates a UUID. For example, after a meeting ends, a new UUID is generated for the next meeting instance.  If the meeting UUID begins with a &#x60;/&#x60; character or contains a &#x60;//&#x60; character, you **must** double-encode the meeting UUID when using the meeting UUID for other API calls. |

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

## `getArchivedFileStatistics()`

```php
getArchivedFileStatistics($from, $to): \Zoom\Api\Model\GetArchivedFileStatistics200Response
```

Get archived file statistics

Use this API to get statistics about an account's archived meeting or webinar files.    Zoom's [archiving solution](https://support.zoom.us/hc/en-us/articles/360050431572-Archiving-indicators) allows account administrators to set up an automated mechanism to record, collect, and archive meeting data to a third-party platform of their choice to satisfy FINRA and other compliance requirements.    **Scopes:** `recording:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * The [**Meeting and Webinar Archiving** feature](https://support.zoom.us/hc/en-us/articles/4405656451213--Archiving-for-meetings-and-webinars) enabled for your account by [Zoom Support](https://support.zoom.us/hc/en-us/articles/201362003).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ArchivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2021-03-11T05:41:36Z; // \DateTime | The query start date, `yyyy-MM-dd'T'HH:mm:ssZ` format. This value and the `to` query parameter value cannot exceed seven days.
$to = 2021-03-18T05:41:36Z; // \DateTime | The query end date, in `yyyy-MM-dd'T'HH:mm:ssZ` format. This value and the `from` query parameter value cannot exceed seven days.

try {
    $result = $apiInstance->getArchivedFileStatistics($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchivingApi->getArchivedFileStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| The query start date, &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ssZ&#x60; format. This value and the &#x60;to&#x60; query parameter value cannot exceed seven days. | [optional]
 **to** | **\DateTime**| The query end date, in &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ssZ&#x60; format. This value and the &#x60;from&#x60; query parameter value cannot exceed seven days. | [optional]

### Return type

[**\Zoom\Api\Model\GetArchivedFileStatistics200Response**](../Model/GetArchivedFileStatistics200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArchivedFiles()`

```php
getArchivedFiles($meeting_uuid): \Zoom\Api\Model\CloudArchivedFiles
```

Get a meeting's archived files

Use this API to return a specific meeting instance's [archived files](https://support.zoom.us/hc/en-us/articles/360050431572-Archiving-indicators).    **Scopes:** `recording:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The [**Meeting and Webinar Archiving** feature](https://support.zoom.us/hc/en-us/articles/4405656451213--Archiving-for-meetings-and-webinars) enabled for your account by [Zoom Support](https://support.zoom.us/hc/en-us/articles/201362003).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ArchivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_uuid = 4444AAAiAAAAAiAiAiiAii==; // string | The meeting's universally unique identifier (UUID). Each meeting instance generates a UUID. For example, after a meeting ends, a new UUID is generated for the next meeting instance.  If the meeting UUID begins with a `/` character or contains a `//` character, you **must** double-encode the meeting UUID when using the meeting UUID for other API calls.

try {
    $result = $apiInstance->getArchivedFiles($meeting_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchivingApi->getArchivedFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_uuid** | **string**| The meeting&#39;s universally unique identifier (UUID). Each meeting instance generates a UUID. For example, after a meeting ends, a new UUID is generated for the next meeting instance.  If the meeting UUID begins with a &#x60;/&#x60; character or contains a &#x60;//&#x60; character, you **must** double-encode the meeting UUID when using the meeting UUID for other API calls. |

### Return type

[**\Zoom\Api\Model\CloudArchivedFiles**](../Model/CloudArchivedFiles.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listArchivedFiles()`

```php
listArchivedFiles($page_size, $next_page_token, $from, $to, $query_date_type): \Zoom\Api\Model\ListArchivedFiles200Response
```

List archived files

Use this API to get an account's archived meeting or webinar files.    Zoom's [archiving solution](https://support.zoom.us/hc/en-us/articles/360050431572-Archiving-indicators) allows account administrators to set up an automated mechanism to record, collect, and archive meeting data to a 3rd-party platform of their choice to satisfy FINRA and/or other compliance requirements.    **Scopes:** `recording:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * The [**Meeting and Webinar Archiving** feature](https://support.zoom.us/hc/en-us/articles/4405656451213--Archiving-for-meetings-and-webinars) enabled for your account by [Zoom Support](https://support.zoom.us/hc/en-us/articles/201362003).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ArchivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$from = 2021-03-11T05:41:36Z; // \DateTime | The query start date, `yyyy-MM-dd'T'HH:mm:ssZ` format. This value and the `to` query parameter value cannot exceed seven days.
$to = 2021-03-18T05:41:36Z; // \DateTime | The query end date, in `yyyy-MM-dd'T'HH:mm:ssZ` format. This value and the `from` query parameter value cannot exceed seven days.
$query_date_type = meeting_start_time; // string | The type of query date:  * `meeting_start_time`  * `archive_complete_time`    This value defaults to `meeting_start_time`.

try {
    $result = $apiInstance->listArchivedFiles($page_size, $next_page_token, $from, $to, $query_date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchivingApi->listArchivedFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **from** | **\DateTime**| The query start date, &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ssZ&#x60; format. This value and the &#x60;to&#x60; query parameter value cannot exceed seven days. | [optional]
 **to** | **\DateTime**| The query end date, in &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ssZ&#x60; format. This value and the &#x60;from&#x60; query parameter value cannot exceed seven days. | [optional]
 **query_date_type** | **string**| The type of query date:  * &#x60;meeting_start_time&#x60;  * &#x60;archive_complete_time&#x60;    This value defaults to &#x60;meeting_start_time&#x60;. | [optional] [default to &#39;meeting_start_time&#39;]

### Return type

[**\Zoom\Api\Model\ListArchivedFiles200Response**](../Model/ListArchivedFiles200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
