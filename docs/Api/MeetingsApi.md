# Zoom\Api\MeetingsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inMeetingRecordingControl**](MeetingsApi.md#inMeetingRecordingControl) | **PATCH** /live_meetings/{meetingId}/events | Use In-Meeting Recording Controls
[**listPastMeetingPolls**](MeetingsApi.md#listPastMeetingPolls) | **GET** /past_meetings/{meetingId}/polls | List Past Meeting&#39;s Poll Results
[**meeting**](MeetingsApi.md#meeting) | **GET** /meetings/{meetingId} | Get a Meeting
[**meetingCreate**](MeetingsApi.md#meetingCreate) | **POST** /users/{userId}/meetings | Create a Meeting
[**meetingDelete**](MeetingsApi.md#meetingDelete) | **DELETE** /meetings/{meetingId} | Delete a Meeting
[**meetingInvitation**](MeetingsApi.md#meetingInvitation) | **GET** /meetings/{meetingId}/invitation | Get Meeting Invitation
[**meetingLiveStreamStatusUpdate**](MeetingsApi.md#meetingLiveStreamStatusUpdate) | **PATCH** /meetings/{meetingId}/livestream/status | Update Live Stream Status
[**meetingLiveStreamUpdate**](MeetingsApi.md#meetingLiveStreamUpdate) | **PATCH** /meetings/{meetingId}/livestream | Update Live Stream
[**meetingPollCreate**](MeetingsApi.md#meetingPollCreate) | **POST** /meetings/{meetingId}/polls | Create a Meeting Poll
[**meetingPollDelete**](MeetingsApi.md#meetingPollDelete) | **DELETE** /meetings/{meetingId}/polls/{pollId} | Delete a Meeting Poll
[**meetingPollGet**](MeetingsApi.md#meetingPollGet) | **GET** /meetings/{meetingId}/polls/{pollId} | Get a Meeting Poll
[**meetingPollUpdate**](MeetingsApi.md#meetingPollUpdate) | **PUT** /meetings/{meetingId}/polls/{pollId} | Update a Meeting Poll
[**meetingPolls**](MeetingsApi.md#meetingPolls) | **GET** /meetings/{meetingId}/polls | List Meeting Polls
[**meetingRegistrantCreate**](MeetingsApi.md#meetingRegistrantCreate) | **POST** /meetings/{meetingId}/registrants | Add Meeting Registrant
[**meetingRegistrantQuestionUpdate**](MeetingsApi.md#meetingRegistrantQuestionUpdate) | **PATCH** /meetings/{meetingId}/registrants/questions | Update Registration Questions
[**meetingRegistrantStatus**](MeetingsApi.md#meetingRegistrantStatus) | **PUT** /meetings/{meetingId}/registrants/status | Update Meeting Registrant Status
[**meetingRegistrants**](MeetingsApi.md#meetingRegistrants) | **GET** /meetings/{meetingId}/registrants | List Meeting Registrants
[**meetingRegistrantsQuestionsGet**](MeetingsApi.md#meetingRegistrantsQuestionsGet) | **GET** /meetings/{meetingId}/registrants/questions | List Registration Questions
[**meetingStatus**](MeetingsApi.md#meetingStatus) | **PUT** /meetings/{meetingId}/status | Update Meeting Status
[**meetingUpdate**](MeetingsApi.md#meetingUpdate) | **PATCH** /meetings/{meetingId} | Update a Meeting
[**meetings**](MeetingsApi.md#meetings) | **GET** /users/{userId}/meetings | List Meetings
[**pastMeetingDetails**](MeetingsApi.md#pastMeetingDetails) | **GET** /past_meetings/{meetingUUID} | Get Past Meeting Details
[**pastMeetingParticipants**](MeetingsApi.md#pastMeetingParticipants) | **GET** /past_meetings/{meetingUUID}/participants | Get Past Meeting Participants
[**pastMeetings**](MeetingsApi.md#pastMeetings) | **GET** /past_meetings/{meetingId}/instances | List Ended Meeting Instances


# **inMeetingRecordingControl**
> object inMeetingRecordingControl($meeting_id, $body)

Use In-Meeting Recording Controls

Use this API to control the [in-meeting](https://support.zoom.us/hc/en-us/articles/360021921032-In-Meeting-Controls) **recording features** such as starting a recording, stopping a recording, pausing a recording, and resuming a recording. This API only works for Cloud Recordings and not for local recordings.  <p style=\"background-color:#feefe3; color:#bf360c; padding:8px\"> <b>Note:</b> This API is currently not operational. We have identified an issue with this API and we will be fixing it in an upcoming release.</p>  **Prerequisite:** * The meeting must be a live meeting. * Cloud Recording must be enabled. * The user using this API must either be the host or alternative host of the meeting.  **Scopes:** `meeting:write`, `meeting:write:admin`, `meeting:master`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | Unique identifier of the live meeting.
$body = new \Zoom\Api\Model\Body84(); // \Zoom\Api\Model\Body84 | 

try {
    $result = $apiInstance->inMeetingRecordingControl($meeting_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->inMeetingRecordingControl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| Unique identifier of the live meeting. |
 **body** | [**\Zoom\Api\Model\Body84**](../Model/Body84.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPastMeetingPolls**
> \Zoom\Api\Model\InlineResponse20083 listPastMeetingPolls($meeting_id)

List Past Meeting's Poll Results

[Polls](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings) allow the meeting host to survey attendees. Use this API to list poll results of a meeting.<br><br>  **Scopes**: `meeting:read:admin`, `meeting:read`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` <br> **Prerequisites**:<br> * Host user type must be **Pro**. * Meeting must be a scheduled meeting. Instant meetings do not have polling features enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If   meeting ID is provided, it will take the last meeting instance.

try {
    $result = $apiInstance->listPastMeetingPolls($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->listPastMeetingPolls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If   meeting ID is provided, it will take the last meeting instance. |

### Return type

[**\Zoom\Api\Model\InlineResponse20083**](../Model/InlineResponse20083.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meeting**
> \Zoom\Api\Model\InlineResponse20022 meeting($meeting_id, $occurrence_id, $show_previous_occurrences)

Get a Meeting

Retrieve the details of a meeting.<br><br> **Scopes:** `meeting:read:admin` `meeting:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$occurrence_id = "occurrence_id_example"; // string | Meeting Occurrence ID. Provide this field to view meeting details of a particular occurrence of the [recurring meeting](https://support.zoom.us/hc/en-us/articles/214973206-Scheduling-Recurring-Meetings).
$show_previous_occurrences = true; // bool | Set the value of this field to `true` if you would like to view meeting details of all previous occurrences of a [recurring meeting](https://support.zoom.us/hc/en-us/articles/214973206-Scheduling-Recurring-Meetings).

try {
    $result = $apiInstance->meeting($meeting_id, $occurrence_id, $show_previous_occurrences);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **occurrence_id** | **string**| Meeting Occurrence ID. Provide this field to view meeting details of a particular occurrence of the [recurring meeting](https://support.zoom.us/hc/en-us/articles/214973206-Scheduling-Recurring-Meetings). | [optional]
 **show_previous_occurrences** | **bool**| Set the value of this field to &#x60;true&#x60; if you would like to view meeting details of all previous occurrences of a [recurring meeting](https://support.zoom.us/hc/en-us/articles/214973206-Scheduling-Recurring-Meetings). | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingCreate**
> \Zoom\Api\Model\InlineResponse20111 meetingCreate($user_id, $body)

Create a Meeting

[Create a meeting](https://support.zoom.us/hc/en-us/articles/201362413-Scheduling-meetings) for a user. <br>This API has a daily rate limit of 100 requests per day. Therefore, only 100 **Create a Meeting** API requests are permitted within a 24 hour window for a user.<br>  <aside>The <code>start_url</code> of a meeting is a URL using which a host or an alternative host can start a meeting. The expiration time for the <code>start_url</code> field is two hours for all regular users.    For custCreate meeting hosts( i.e., users created using the <code>custCreate</code> option via the [Create Users](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usercreate) API), the expiration time of the <code>start_url</code> field is 90 days from the generation of the <code>start_url</code>.   For security reasons, the recommended way to retrieve the updated value for the <code>start_url</code> field programmatically (after expiry) is by calling the [Retrieve a Meeting API](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meeting) and referring to the value of the <code>start_url</code> field in the response.</aside><br><br> Scopes: `meeting:write:admin` `meeting:write`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$body = new \Zoom\Api\Model\Body23(); // \Zoom\Api\Model\Body23 | Meeting object.

try {
    $result = $apiInstance->meetingCreate($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **body** | [**\Zoom\Api\Model\Body23**](../Model/Body23.md)| Meeting object. |

### Return type

[**\Zoom\Api\Model\InlineResponse20111**](../Model/InlineResponse20111.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingDelete**
> meetingDelete($meeting_id, $occurrence_id, $schedule_for_reminder)

Delete a Meeting

Delete a meeting.<br><br> **Scopes:** `meeting:write:admin` `meeting:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID.
$schedule_for_reminder = true; // bool | `true`: Notify host and alternative host about the meeting cancellation via email. `false`: Do not send any email notification.

try {
    $apiInstance->meetingDelete($meeting_id, $occurrence_id, $schedule_for_reminder);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **occurrence_id** | **string**| The meeting occurrence ID. | [optional]
 **schedule_for_reminder** | **bool**| &#x60;true&#x60;: Notify host and alternative host about the meeting cancellation via email. &#x60;false&#x60;: Do not send any email notification. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingInvitation**
> \Zoom\Api\Model\MeetingInvitation meetingInvitation($meeting_id)

Get Meeting Invitation

Retrieve the meeting invite note that was sent for a specific meeting.<br><br> **Scopes:** `meeting:read:admin` `meeting:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.

try {
    $result = $apiInstance->meetingInvitation($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |

### Return type

[**\Zoom\Api\Model\MeetingInvitation**](../Model/MeetingInvitation.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingLiveStreamStatusUpdate**
> meetingLiveStreamStatusUpdate($meeting_id, $body)

Update Live Stream Status

Zoom allows users to [live stream a meeting](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service) to a custom platform. Use this API to update the status of a meeting's live stream.<br><br> **Prerequisites:**<br> * Meeting host must have a Pro license.<br> **Scopes:** `meeting:write:admin` `meeting:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \Zoom\Api\Model\Body44(); // \Zoom\Api\Model\Body44 | Meeting

try {
    $apiInstance->meetingLiveStreamStatusUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingLiveStreamStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**\Zoom\Api\Model\Body44**](../Model/Body44.md)| Meeting |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingLiveStreamUpdate**
> meetingLiveStreamUpdate($meeting_id, $body)

Update Live Stream

Zoom allows users to [live stream a meeting](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service) to a custom platform. Use this API to update a meeting's live stream information.<br><br> **Prerequisites:**<br> * Meeting host must have a Pro license.<br> **Scopes:** `meeting:write:admin` `meeting:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \Zoom\Api\Model\Body43(); // \Zoom\Api\Model\Body43 | Meeting

try {
    $apiInstance->meetingLiveStreamUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingLiveStreamUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**\Zoom\Api\Model\Body43**](../Model/Body43.md)| Meeting |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPollCreate**
> \Zoom\Api\Model\InlineResponse20113 meetingPollCreate($meeting_id, $body)

Create a Meeting Poll

Polls allow the meeting host to survey attendees. Use this API to create a [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings) for a meeting.<br><br>  **Scopes**: `meeting:write:admin` `meeting:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**:<br> * Host user type must be **Pro**. * Polling feature should be enabled in the host's account. * Meeting must be a scheduled meeting. Instant meetings do not have polling features enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \stdClass; // object | Meeting poll object

try {
    $result = $apiInstance->meetingPollCreate($meeting_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**object**](../Model/.md)| Meeting poll object |

### Return type

[**\Zoom\Api\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPollDelete**
> meetingPollDelete($meeting_id, $poll_id)

Delete a Meeting Poll

Polls allow the meeting host to survey attendees. Use this API to delete a meeting [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings).<br> **Scopes**: `meeting:write:admin` `meeting:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light` <br> **Prerequisites**:<br> * Host user type must be **Pro**. * Polling feature should be enabled in the host's account. * Meeting must be a scheduled meeting. Instant meetings do not have polling features enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$poll_id = "poll_id_example"; // string | The poll ID

try {
    $apiInstance->meetingPollDelete($meeting_id, $poll_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **poll_id** | **string**| The poll ID |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPollGet**
> \Zoom\Api\Model\InlineResponse20113 meetingPollGet($meeting_id, $poll_id)

Get a Meeting Poll

Polls allow the meeting host to survey attendees. Use this API to get information about a specific meeting [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings).<br><br> **Scopes**: `meeting:read:admin` `meeting:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$poll_id = "poll_id_example"; // string | The poll ID

try {
    $result = $apiInstance->meetingPollGet($meeting_id, $poll_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **poll_id** | **string**| The poll ID |

### Return type

[**\Zoom\Api\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPollUpdate**
> meetingPollUpdate($meeting_id, $poll_id, $body)

Update a Meeting Poll

Polls allow the meeting host to survey attendees. Use this API to update information of a specific meeting [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings)<br><br> **Scopes**: `meeting:write:admin` `meeting:write`   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$poll_id = "poll_id_example"; // string | The poll ID
$body = new \stdClass; // object | Meeting Poll

try {
    $apiInstance->meetingPollUpdate($meeting_id, $poll_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **poll_id** | **string**| The poll ID |
 **body** | [**object**](../Model/.md)| Meeting Poll |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPolls**
> object meetingPolls($meeting_id)

List Meeting Polls

Polls allow the meeting host to survey attendees. Use this API to list [polls](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings) of a meeting.<br><br>  **Scopes**: `meeting:read:admin` `meeting:read`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**:<br> * Host user type must be **Pro**. * Meeting must be a scheduled meeting. Instant meetings do not have polling features enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.

try {
    $result = $apiInstance->meetingPolls($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPolls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRegistrantCreate**
> \Zoom\Api\Model\InlineResponse20112 meetingRegistrantCreate($meeting_id, $body, $occurrence_ids)

Add Meeting Registrant

Register a participant for a meeting.<br><br>  **Prerequisite:**<br> * Host user type must be \"Licensed\".  **Scopes:** `meeting:write:admin` `meeting:write`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \stdClass; // object | 
$occurrence_ids = "occurrence_ids_example"; // string | Occurrence IDs. You can find these with the meeting get API. Multiple values separated by comma.

try {
    $result = $apiInstance->meetingRegistrantCreate($meeting_id, $body, $occurrence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**object**](../Model/.md)|  |
 **occurrence_ids** | **string**| Occurrence IDs. You can find these with the meeting get API. Multiple values separated by comma. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20112**](../Model/InlineResponse20112.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRegistrantQuestionUpdate**
> meetingRegistrantQuestionUpdate($meeting_id, $body)

Update Registration Questions

Update registration questions that will be displayed to users while [registering for a meeeting](https://support.zoom.us/hc/en-us/articles/211579443-Registration-for-Meetings).<br><br> **Scopes:** `meeting:write`, `meeting:write:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \stdClass; // object | Meeting Registrant Questions

try {
    $apiInstance->meetingRegistrantQuestionUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantQuestionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**object**](../Model/.md)| Meeting Registrant Questions |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRegistrantStatus**
> meetingRegistrantStatus($meeting_id, $body, $occurrence_id)

Update Meeting Registrant Status

Update a meeting registrant's status by either approving, cancelling or denying a registrant from joining the meeting.<br><br> **Scopes:** `meeting:write:admin` `meeting:write`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \Zoom\Api\Model\Body25(); // \Zoom\Api\Model\Body25 | 
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID.

try {
    $apiInstance->meetingRegistrantStatus($meeting_id, $body, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**\Zoom\Api\Model\Body25**](../Model/Body25.md)|  |
 **occurrence_id** | **string**| The meeting occurrence ID. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRegistrants**
> \Zoom\Api\Model\RegistrationList meetingRegistrants($meeting_id, $occurrence_id, $status, $page_size, $page_number, $next_page_token)

List Meeting Registrants

A host or a user with admin permission can require [registration for a Zoom meeting](https://support.zoom.us/hc/en-us/articles/211579443-Registration-for-Meetings). Use this API to list users that have registered for a meeting.<br><br> **Scopes**: `meeting:read:admin` `meeting:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID.
$status = "approved"; // string | The registrant status:<br>`pending` - Registrant's status is pending.<br>`approved` - Registrant's status is approved.<br>`denied` - Registrant's status is denied.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \"next_page_token\" for pagination instead of this field.  The page number of the current page in the returned records.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->meetingRegistrants($meeting_id, $occurrence_id, $status, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **occurrence_id** | **string**| The meeting occurrence ID. | [optional]
 **status** | **string**| The registrant status:&lt;br&gt;&#x60;pending&#x60; - Registrant&#39;s status is pending.&lt;br&gt;&#x60;approved&#x60; - Registrant&#39;s status is approved.&lt;br&gt;&#x60;denied&#x60; - Registrant&#39;s status is denied. | [optional] [default to approved]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \&quot;next_page_token\&quot; for pagination instead of this field.  The page number of the current page in the returned records. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\RegistrationList**](../Model/RegistrationList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRegistrantsQuestionsGet**
> \Zoom\Api\Model\InlineResponse20025 meetingRegistrantsQuestionsGet($meeting_id)

List Registration Questions

List registration questions that will be displayed to users while [registering for a meeeting](https://support.zoom.us/hc/en-us/articles/211579443-Registration-for-Meetings).<br>  **Scopes:** `meeting:read`, `meeting:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.

try {
    $result = $apiInstance->meetingRegistrantsQuestionsGet($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantsQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |

### Return type

[**\Zoom\Api\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingStatus**
> meetingStatus($meeting_id, $body)

Update Meeting Status

Update the status of a meeting.<br><br> **Scopes:** `meeting:write:admin` `meeting:write`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \Zoom\Api\Model\Body24(); // \Zoom\Api\Model\Body24 | 

try {
    $apiInstance->meetingStatus($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**\Zoom\Api\Model\Body24**](../Model/Body24.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingUpdate**
> meetingUpdate($meeting_id, $body, $occurrence_id)

Update a Meeting

Update the details of a meeting.<br>This API has a rate limit of 100 requests per day. Therefore, a meeting can only be updated for a maximum of 100 times within a 24 hour window.<br> **Scopes:** `meeting:write:admin` `meeting:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \stdClass; // object | Meeting
$occurrence_id = "occurrence_id_example"; // string | Meeting occurrence id. Support change of agenda, start_time, duration, settings: {host_video, participant_video, join_before_host, mute_upon_entry, waiting_room, watermark, auto_recording}

try {
    $apiInstance->meetingUpdate($meeting_id, $body, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**object**](../Model/.md)| Meeting |
 **occurrence_id** | **string**| Meeting occurrence id. Support change of agenda, start_time, duration, settings: {host_video, participant_video, join_before_host, mute_upon_entry, waiting_room, watermark, auto_recording} | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetings**
> \Zoom\Api\Model\GroupList meetings($user_id, $type, $page_size, $next_page_token, $page_number)

List Meetings

List all the meetings that were scheduled for a user (meeting host). This API only supports scheduled meetings and thus, details on instant meetings are not returned via this API.<br><br> **Scopes:** `meeting:read:admin` `meeting:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$type = "live"; // string | The meeting types: <br>`scheduled` - This includes all valid past meetings (unexpired), live meetings and upcoming scheduled meetings. It is equivalent to the combined list of \"Previous Meetings\" and \"Upcoming Meetings\" displayed in the user's [Meetings page](https://zoom.us/meeting) on the Zoom Web Portal.<br>`live` - All the ongoing meetings.<br>`upcoming` - All upcoming meetings including live meetings.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$page_number = "page_number_example"; // string | The page number of the current page in the returned records.

try {
    $result = $apiInstance->meetings($user_id, $type, $page_size, $next_page_token, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **type** | **string**| The meeting types: &lt;br&gt;&#x60;scheduled&#x60; - This includes all valid past meetings (unexpired), live meetings and upcoming scheduled meetings. It is equivalent to the combined list of \&quot;Previous Meetings\&quot; and \&quot;Upcoming Meetings\&quot; displayed in the user&#39;s [Meetings page](https://zoom.us/meeting) on the Zoom Web Portal.&lt;br&gt;&#x60;live&#x60; - All the ongoing meetings.&lt;br&gt;&#x60;upcoming&#x60; - All upcoming meetings including live meetings. | [optional] [default to live]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **page_number** | **string**| The page number of the current page in the returned records. | [optional]

### Return type

[**\Zoom\Api\Model\GroupList**](../Model/GroupList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pastMeetingDetails**
> \Zoom\Api\Model\InlineResponse20023 pastMeetingDetails($meeting_uuid)

Get Past Meeting Details

Get details on a past meeting. <br><br> **Scopes:** `meeting:read:admin` `meeting:read`   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light` > **Note**: Please double encode your UUID when using this API if the UUID begins with a '/'or contains '//' in it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_uuid = "meeting_uuid_example"; // string | The meeting UUID. Each meeting instance will generate its own Meeting UUID (i.e., after a meeting ends, a new UUID will be generated for the next instance of the meeting). Please double encode your UUID when using it for other API calls if the UUID begins with a '/'or contains '//' in it.

try {
    $result = $apiInstance->pastMeetingDetails($meeting_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetingDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_uuid** | **string**| The meeting UUID. Each meeting instance will generate its own Meeting UUID (i.e., after a meeting ends, a new UUID will be generated for the next instance of the meeting). Please double encode your UUID when using it for other API calls if the UUID begins with a &#39;/&#39;or contains &#39;//&#39; in it. |

### Return type

[**\Zoom\Api\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pastMeetingParticipants**
> \Zoom\Api\Model\InlineResponse20024 pastMeetingParticipants($meeting_uuid, $page_size, $next_page_token)

Get Past Meeting Participants

Retrieve information on participants from a past meeting. <br><br> **Scopes:** `meeting:read:admin` `meeting:read`   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` **Prerequisites:**<br> * Paid account on a Pro or higher plan.  <br> <br>  **Note**: Please double encode your UUID when using this API if the UUID begins with a '/'or contains '//' in it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_uuid = "meeting_uuid_example"; // string | The meeting UUID. Each meeting instance will generate its own Meeting UUID (i.e., after a meeting ends, a new UUID will be generated for the next instance of the meeting). Please double encode your UUID when using it for other API calls if the UUID begins with a '/'or contains '//' in it.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->pastMeetingParticipants($meeting_uuid, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetingParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_uuid** | **string**| The meeting UUID. Each meeting instance will generate its own Meeting UUID (i.e., after a meeting ends, a new UUID will be generated for the next instance of the meeting). Please double encode your UUID when using it for other API calls if the UUID begins with a &#39;/&#39;or contains &#39;//&#39; in it. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pastMeetings**
> object pastMeetings($meeting_id)

List Ended Meeting Instances

Get a list of ended meeting instances<br><br> **Scopes:** `meeting:read:admin` `meeting:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.

try {
    $result = $apiInstance->pastMeetings($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

