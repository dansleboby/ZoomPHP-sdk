# OpenAPI\Client\CloudRecordingApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**meetingRecordingRegistrantCreate()**](CloudRecordingApi.md#meetingRecordingRegistrantCreate) | **POST** /meetings/{meetingId}/recordings/registrants | Create a recording registrant
[**meetingRecordingRegistrantStatus()**](CloudRecordingApi.md#meetingRecordingRegistrantStatus) | **PUT** /meetings/{meetingId}/recordings/registrants/status | Update registrant&#39;s status
[**meetingRecordingRegistrants()**](CloudRecordingApi.md#meetingRecordingRegistrants) | **GET** /meetings/{meetingId}/recordings/registrants | List recording registrants
[**recordingDelete()**](CloudRecordingApi.md#recordingDelete) | **DELETE** /meetings/{meetingId}/recordings | Delete meeting recordings
[**recordingDeleteOne()**](CloudRecordingApi.md#recordingDeleteOne) | **DELETE** /meetings/{meetingId}/recordings/{recordingId} | Delete a meeting recording file
[**recordingGet()**](CloudRecordingApi.md#recordingGet) | **GET** /meetings/{meetingId}/recordings | Get meeting recordings
[**recordingRegistrantQuestionUpdate()**](CloudRecordingApi.md#recordingRegistrantQuestionUpdate) | **PATCH** /meetings/{meetingId}/recordings/registrants/questions | Update registration questions
[**recordingRegistrantsQuestionsGet()**](CloudRecordingApi.md#recordingRegistrantsQuestionsGet) | **GET** /meetings/{meetingId}/recordings/registrants/questions | Get registration questions
[**recordingSettingUpdate()**](CloudRecordingApi.md#recordingSettingUpdate) | **GET** /meetings/{meetingId}/recordings/settings | Get meeting recording settings
[**recordingSettingsUpdate()**](CloudRecordingApi.md#recordingSettingsUpdate) | **PATCH** /meetings/{meetingId}/recordings/settings | Update meeting recording settings
[**recordingStatusUpdate()**](CloudRecordingApi.md#recordingStatusUpdate) | **PUT** /meetings/{meetingUUID}/recordings/status | Recover meeting recordings
[**recordingStatusUpdateOne()**](CloudRecordingApi.md#recordingStatusUpdateOne) | **PUT** /meetings/{meetingId}/recordings/{recordingId}/status | Recover a single recording
[**recordingsList()**](CloudRecordingApi.md#recordingsList) | **GET** /users/{userId}/recordings | List all recordings


## `meetingRecordingRegistrantCreate()`

```php
meetingRecordingRegistrantCreate($meeting_id, $meeting_registrant): \OpenAPI\Client\Model\MeetingRecordingRegistrantCreate201Response
```

Create a recording registrant

Cloud Recordings of past Zoom Meetings can be made [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings). Users should be [registered](/docs/api-reference/zoom-api/methods#operation/meetingRecordingRegistrantCreate) to view these recordings.  Use this API to register a user to gain access to **On-demand Cloud Recordings** of a past meeting.<br> **Scopes:** `recording:write:admin`, `recording:write`.<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_registrant = new \OpenAPI\Client\Model\MeetingRegistrant(); // \OpenAPI\Client\Model\MeetingRegistrant

try {
    $result = $apiInstance->meetingRecordingRegistrantCreate($meeting_id, $meeting_registrant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->meetingRecordingRegistrantCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_registrant** | [**\OpenAPI\Client\Model\MeetingRegistrant**](../Model/MeetingRegistrant.md)|  |

### Return type

[**\OpenAPI\Client\Model\MeetingRecordingRegistrantCreate201Response**](../Model/MeetingRecordingRegistrantCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingRecordingRegistrantStatus()`

```php
meetingRecordingRegistrantStatus($meeting_id, $recording_registrant_status)
```

Update registrant's status

A registrant can either be approved or denied from viewing the [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings) recording.  Use this API to update a registrant's status.  **Scopes:** `recording:write:admin`, `recording:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$recording_registrant_status = new \OpenAPI\Client\Model\RecordingRegistrantStatus(); // \OpenAPI\Client\Model\RecordingRegistrantStatus

try {
    $apiInstance->meetingRecordingRegistrantStatus($meeting_id, $recording_registrant_status);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->meetingRecordingRegistrantStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **recording_registrant_status** | [**\OpenAPI\Client\Model\RecordingRegistrantStatus**](../Model/RecordingRegistrantStatus.md)|  |

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

## `meetingRecordingRegistrants()`

```php
meetingRecordingRegistrants($meeting_id, $status, $page_size, $page_number, $next_page_token): \OpenAPI\Client\Model\MeetingRecordingRegistrantList
```

List recording registrants

Use this API to list registrants of a past meeting's [on-demand cloud recordings](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-recordings). Users must [register](/docs/api-reference/zoom-api/methods#operation/meetingRecordingRegistrantCreate) to view the recordings.    **Scopes:** `recording:read:admin`, `recording:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$status = pending; // string | Query by the registrant's status:  * `pending` — The registration is pending.  * `approved` — The registrant is approved.  * `denied` — The registration is denied.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated.** We will no longer support this field in a future release. Instead, use the `next_page_token` for pagination.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->meetingRecordingRegistrants($meeting_id, $status, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->meetingRecordingRegistrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **status** | **string**| Query by the registrant&#39;s status:  * &#x60;pending&#x60; — The registration is pending.  * &#x60;approved&#x60; — The registrant is approved.  * &#x60;denied&#x60; — The registration is denied. | [optional] [default to &#39;approved&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\OpenAPI\Client\Model\MeetingRecordingRegistrantList**](../Model/MeetingRecordingRegistrantList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordingDelete()`

```php
recordingDelete($meeting_id, $action)
```

Delete meeting recordings

Delete all recording files of a meeting.<br><br>  **Scopes:** `recording:write:admin` `recording:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**: * Cloud Recording should be enabled on the user's account.<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = atsXxhSEQWit9t+U02HXNQ==; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$action = trash; // string | The recording delete actions:<br>`trash` - Move recording to trash.<br>`delete` - Delete recording permanently.

try {
    $apiInstance->recordingDelete($meeting_id, $action);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **action** | **string**| The recording delete actions:&lt;br&gt;&#x60;trash&#x60; - Move recording to trash.&lt;br&gt;&#x60;delete&#x60; - Delete recording permanently. | [optional] [default to &#39;trash&#39;]

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

## `recordingDeleteOne()`

```php
recordingDeleteOne($meeting_id, $recording_id, $action)
```

Delete a meeting recording file

Delete a specific recording file from a meeting.<p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note:</b> To use this API, you must enable the <b>The host can delete cloud recordings</b> setting. You can find this setting in the <b>Recording</b> tab of the <b>Settings</b> interface in the [Zoom web portal](https://zoom.us/).</p>  **Scopes**: `recording:write:admin`, `recording:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = atsXxhSEQWit9t+U02HXNQ==; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$recording_id = a2f19f96-9294-4f51-8134-6f0eea108eb2; // string | The recording ID.
$action = trash; // string | The recording delete actions:<br>`trash` - Move recording to trash.<br>`delete` - Delete recording permanently.

try {
    $apiInstance->recordingDeleteOne($meeting_id, $recording_id, $action);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingDeleteOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **recording_id** | **string**| The recording ID. |
 **action** | **string**| The recording delete actions:&lt;br&gt;&#x60;trash&#x60; - Move recording to trash.&lt;br&gt;&#x60;delete&#x60; - Delete recording permanently. | [optional] [default to &#39;trash&#39;]

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

## `recordingGet()`

```php
recordingGet($meeting_id, $include_fields, $ttl): \OpenAPI\Client\Model\RecordingGet200Response
```

Get meeting recordings

Use this API to return all of a meeting's [recordings](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording#h_7420acb5-1897-4061-87b4-5b76e99c03b4). The recording files can be downloaded via the `download_url` property listed in the response.    To access a password-protected cloud recording, add an `access_token` parameter to the download URL and provide OAuth access token or [JWT](https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-jwt-app) as the `access_token` value.    **Scopes:** `recording:read:admin`, `recording:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = atsXxhSEQWit9t+U02HXNQ==; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$include_fields = a2f19f96-9294-4f51-8134-6f0eea108eb2; // string | The `download_access_token` value for downloading the meeting's recordings.
$ttl = 1; // int | The `download_access_token` Time to Live (TTL) value. This parameter is only valid if the `include_fields` query parameter contains the `download_access_token` value.

try {
    $result = $apiInstance->recordingGet($meeting_id, $include_fields, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **include_fields** | **string**| The &#x60;download_access_token&#x60; value for downloading the meeting&#39;s recordings. | [optional]
 **ttl** | **int**| The &#x60;download_access_token&#x60; Time to Live (TTL) value. This parameter is only valid if the &#x60;include_fields&#x60; query parameter contains the &#x60;download_access_token&#x60; value. | [optional]

### Return type

[**\OpenAPI\Client\Model\RecordingGet200Response**](../Model/RecordingGet200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordingRegistrantQuestionUpdate()`

```php
recordingRegistrantQuestionUpdate($meeting_id, $recording_registrant_question_update_request)
```

Update registration questions

For [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings) meeting recordings, you can include fields with questions that will be shown to registrants when they register to view the recording.  Use this API to update registration questions that are to be answered by users while registering to view a recording.<br> **Scopes:** `recording:write:admin`, `recording:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = atsXxhSEQWit9t+U02HXNQ==; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$recording_registrant_question_update_request = new \OpenAPI\Client\Model\RecordingRegistrantQuestionUpdateRequest(); // \OpenAPI\Client\Model\RecordingRegistrantQuestionUpdateRequest | Recording Registrant Questions

try {
    $apiInstance->recordingRegistrantQuestionUpdate($meeting_id, $recording_registrant_question_update_request);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingRegistrantQuestionUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **recording_registrant_question_update_request** | [**\OpenAPI\Client\Model\RecordingRegistrantQuestionUpdateRequest**](../Model/RecordingRegistrantQuestionUpdateRequest.md)| Recording Registrant Questions |

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

## `recordingRegistrantsQuestionsGet()`

```php
recordingRegistrantsQuestionsGet($meeting_id): \OpenAPI\Client\Model\RecordingRegistrantQuestions
```

Get registration questions

For [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings) meeting recordings, you can include fields with questions that will be shown to registrants when they register to view the recording.  Use this API to retrieve a list of questions that are displayed for users to complete when registering to view the recording of a specific meeting.<br> **Scopes:** `recording:read:admin`, `recording:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = atsXxhSEQWit9t+U02HXNQ==; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.

try {
    $result = $apiInstance->recordingRegistrantsQuestionsGet($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingRegistrantsQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\RecordingRegistrantQuestions**](../Model/RecordingRegistrantQuestions.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordingSettingUpdate()`

```php
recordingSettingUpdate($meeting_id): \OpenAPI\Client\Model\RecordingSettings
```

Get meeting recording settings

Retrieve settings applied to a meeting's [Cloud Recording](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording).<br><br> **Scopes**: `recording:read:admin` `recording:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light` <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = atsXxhSEQWit9t+U02HXNQ==; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.

try {
    $result = $apiInstance->recordingSettingUpdate($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingSettingUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\RecordingSettings**](../Model/RecordingSettings.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordingSettingsUpdate()`

```php
recordingSettingsUpdate($meeting_id, $recording_settings)
```

Update meeting recording settings

Update settings applied to a meeting's [Cloud Recording](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording)<br><br> **Scopes**: `recording:write:admin` `recording:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light` <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = atsXxhSEQWit9t+U02HXNQ==; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$recording_settings = new \OpenAPI\Client\Model\RecordingSettings(); // \OpenAPI\Client\Model\RecordingSettings

try {
    $apiInstance->recordingSettingsUpdate($meeting_id, $recording_settings);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **recording_settings** | [**\OpenAPI\Client\Model\RecordingSettings**](../Model/RecordingSettings.md)|  |

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

## `recordingStatusUpdate()`

```php
recordingStatusUpdate($meeting_uuid, $recording_status_update_request)
```

Recover meeting recordings

Zoom allows users to recover recordings from trash for up to 30 days from the deletion date. Use this API to recover all deleted [Cloud Recordings](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording) of a specific meeting.<br><br> **Scopes**: `recording:write:admin` `recording:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**:<br> * A Pro user with Cloud Recording enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_uuid = 4444AAAiAAAAAiAiAiiAii==; // string | The meeting's universally unique identifier (UUID). Each meeting instance generates a UUID. For example, after a meeting ends, a new UUID is generated for the next meeting instance.  If the meeting UUID begins with a `/` character or contains a `//` character, you **must** double-encode the meeting UUID when using the meeting UUID for other API calls.
$recording_status_update_request = new \OpenAPI\Client\Model\RecordingStatusUpdateRequest(); // \OpenAPI\Client\Model\RecordingStatusUpdateRequest

try {
    $apiInstance->recordingStatusUpdate($meeting_uuid, $recording_status_update_request);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_uuid** | **string**| The meeting&#39;s universally unique identifier (UUID). Each meeting instance generates a UUID. For example, after a meeting ends, a new UUID is generated for the next meeting instance.  If the meeting UUID begins with a &#x60;/&#x60; character or contains a &#x60;//&#x60; character, you **must** double-encode the meeting UUID when using the meeting UUID for other API calls. |
 **recording_status_update_request** | [**\OpenAPI\Client\Model\RecordingStatusUpdateRequest**](../Model/RecordingStatusUpdateRequest.md)|  |

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

## `recordingStatusUpdateOne()`

```php
recordingStatusUpdateOne($meeting_id, $recording_id, $recording_status_update_request)
```

Recover a single recording

Zoom allows users to recover recordings from trash for up to 30 days from the deletion date. Use this API to recover a single recording file from the meeting.<br> **Scopes:** `recording:write:admin` `recording:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = atsXxhSEQWit9t+U02HXNQ==; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$recording_id = a2f19f96-9294-4f51-8134-6f0eea108eb2; // string | The recording ID.
$recording_status_update_request = new \OpenAPI\Client\Model\RecordingStatusUpdateRequest(); // \OpenAPI\Client\Model\RecordingStatusUpdateRequest

try {
    $apiInstance->recordingStatusUpdateOne($meeting_id, $recording_id, $recording_status_update_request);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingStatusUpdateOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **recording_id** | **string**| The recording ID. |
 **recording_status_update_request** | [**\OpenAPI\Client\Model\RecordingStatusUpdateRequest**](../Model/RecordingStatusUpdateRequest.md)|  |

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

## `recordingsList()`

```php
recordingsList($user_id, $page_size, $next_page_token, $mc, $trash, $from, $to, $trash_type, $meeting_id): \OpenAPI\Client\Model\RecordingMeetingList
```

List all recordings

Use this API to list all [cloud recordings](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording) of a user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note:</b> To access a user's password protected cloud recording, add an <code>access_token</code> parameter to the download URL and provide either the <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-jwt-app\">JWT</a> or the user's OAuth access token as the value of the <code>access_token</code> parameter.</p>  When a user records a meeting or a webinar by choosing the **Record to the Cloud** option, the video, audio, and chat text are recorded in the Zoom cloud.  **Scopes:** `recording:read:admin`, `recording:read`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  **Prerequisites:**  * Pro or a higher plan. * Cloud Recording must be enabled on the user's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$mc = false; // string | Query Metadata of Recording if an On-Premise Meeting Connector was used for the meeting.
$trash = false; // bool | Query trash. `true`: List recordings from trash.<br> `false`: Do not list recordings from the trash.<br> The default value is `false`. If you set it to `true`, you can use the `trash_type` property to indicate the type of Cloud recording that you need to retrieve.
$from = Mon Jun 29 20:00:00 EDT 2020; // \DateTime | The start date in 'yyyy-mm-dd' UTC format for the date range for which you would like to retrieve recordings. The maximum range can be a month. If no value is provided for this field, the default will be current date. For example, if you make the API request on June 30, 2020, without providing the “from” and “to” parameters, by default the value of 'from' field will be “2020-06-30” and the value of the 'to' field will be “2020-07-01”.   **Note**: The \"trash\" files cannot be filtered by date range and thus, the \"from\" and \"to\" fields should not be used for trash files.
$to = Mon Jun 29 20:00:00 EDT 2020; // \DateTime | End date in 'yyyy-mm-dd' 'yyyy-mm-dd' UTC format.
$trash_type = meeting_recordings; // string | The type of Cloud recording that you would like to retrieve from the trash. The value can be one of the following:<br>     `meeting_recordings`: List all meeting recordings from the trash.<br>     `recording_file`: List all individual recording files from the trash.
$meeting_id = 6840331990; // int | The meeting ID.

try {
    $result = $apiInstance->recordingsList($user_id, $page_size, $next_page_token, $mc, $trash, $from, $to, $trash_type, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **mc** | **string**| Query Metadata of Recording if an On-Premise Meeting Connector was used for the meeting. | [optional] [default to &#39;false&#39;]
 **trash** | **bool**| Query trash. &#x60;true&#x60;: List recordings from trash.&lt;br&gt; &#x60;false&#x60;: Do not list recordings from the trash.&lt;br&gt; The default value is &#x60;false&#x60;. If you set it to &#x60;true&#x60;, you can use the &#x60;trash_type&#x60; property to indicate the type of Cloud recording that you need to retrieve. | [optional] [default to false]
 **from** | **\DateTime**| The start date in &#39;yyyy-mm-dd&#39; UTC format for the date range for which you would like to retrieve recordings. The maximum range can be a month. If no value is provided for this field, the default will be current date. For example, if you make the API request on June 30, 2020, without providing the “from” and “to” parameters, by default the value of &#39;from&#39; field will be “2020-06-30” and the value of the &#39;to&#39; field will be “2020-07-01”.   **Note**: The \&quot;trash\&quot; files cannot be filtered by date range and thus, the \&quot;from\&quot; and \&quot;to\&quot; fields should not be used for trash files. | [optional]
 **to** | **\DateTime**| End date in &#39;yyyy-mm-dd&#39; &#39;yyyy-mm-dd&#39; UTC format. | [optional]
 **trash_type** | **string**| The type of Cloud recording that you would like to retrieve from the trash. The value can be one of the following:&lt;br&gt;     &#x60;meeting_recordings&#x60;: List all meeting recordings from the trash.&lt;br&gt;     &#x60;recording_file&#x60;: List all individual recording files from the trash. | [optional] [default to &#39;meeting_recordings&#39;]
 **meeting_id** | **int**| The meeting ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\RecordingMeetingList**](../Model/RecordingMeetingList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
