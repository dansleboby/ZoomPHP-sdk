# Zoom\Api\MeetingsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBatchRegistrants()**](MeetingsApi.md#addBatchRegistrants) | **POST** /meetings/{meetingId}/batch_registrants | Perform batch registration
[**createBatchPolls()**](MeetingsApi.md#createBatchPolls) | **POST** /meetings/{meetingId}/batch_polls | Perform batch poll creation
[**deleteMeetingChatMessageById()**](MeetingsApi.md#deleteMeetingChatMessageById) | **DELETE** /live_meetings/{meetingId}/chat/messages/{messageId} | Delete a live meeting message
[**getMeetingLiveStreamDetails()**](MeetingsApi.md#getMeetingLiveStreamDetails) | **GET** /meetings/{meetingId}/livestream | Get livestream details
[**inMeetingControl()**](MeetingsApi.md#inMeetingControl) | **PATCH** /live_meetings/{meetingId}/events | Use in-meeting controls
[**listMeetingTemplates()**](MeetingsApi.md#listMeetingTemplates) | **GET** /users/{userId}/meeting_templates | List meeting templates
[**listPastMeetingPolls()**](MeetingsApi.md#listPastMeetingPolls) | **GET** /past_meetings/{meetingId}/polls | List past meeting&#39;s poll results
[**meeting()**](MeetingsApi.md#meeting) | **GET** /meetings/{meetingId} | Get a meeting
[**meetingCreate()**](MeetingsApi.md#meetingCreate) | **POST** /users/{userId}/meetings | Create a meeting
[**meetingDelete()**](MeetingsApi.md#meetingDelete) | **DELETE** /meetings/{meetingId} | Delete a meeting
[**meetingInvitation()**](MeetingsApi.md#meetingInvitation) | **GET** /meetings/{meetingId}/invitation | Get meeting invitation
[**meetingInviteLinksCreate()**](MeetingsApi.md#meetingInviteLinksCreate) | **POST** /meetings/{meetingId}/invite_links | Create meeting&#39;s invite links
[**meetingLiveStreamStatusUpdate()**](MeetingsApi.md#meetingLiveStreamStatusUpdate) | **PATCH** /meetings/{meetingId}/livestream/status | Update Live Stream Status
[**meetingLiveStreamUpdate()**](MeetingsApi.md#meetingLiveStreamUpdate) | **PATCH** /meetings/{meetingId}/livestream | Update a livestream
[**meetingLocalRecordingJoinToken()**](MeetingsApi.md#meetingLocalRecordingJoinToken) | **GET** /meetings/{meetingId}/jointoken/local_recording | Get a meeting&#39;s join token for local recording
[**meetingPollCreate()**](MeetingsApi.md#meetingPollCreate) | **POST** /meetings/{meetingId}/polls | Create a meeting poll
[**meetingPollDelete()**](MeetingsApi.md#meetingPollDelete) | **DELETE** /meetings/{meetingId}/polls/{pollId} | Delete a meeting poll
[**meetingPollGet()**](MeetingsApi.md#meetingPollGet) | **GET** /meetings/{meetingId}/polls/{pollId} | Get a meeting poll
[**meetingPollUpdate()**](MeetingsApi.md#meetingPollUpdate) | **PUT** /meetings/{meetingId}/polls/{pollId} | Update a meeting poll
[**meetingPolls()**](MeetingsApi.md#meetingPolls) | **GET** /meetings/{meetingId}/polls | List meeting polls
[**meetingRegistrantCreate()**](MeetingsApi.md#meetingRegistrantCreate) | **POST** /meetings/{meetingId}/registrants | Add a meeting registrant
[**meetingRegistrantGet()**](MeetingsApi.md#meetingRegistrantGet) | **GET** /meetings/{meetingId}/registrants/{registrantId} | Get a meeting registrant
[**meetingRegistrantQuestionUpdate()**](MeetingsApi.md#meetingRegistrantQuestionUpdate) | **PATCH** /meetings/{meetingId}/registrants/questions | Update registration questions
[**meetingRegistrantStatus()**](MeetingsApi.md#meetingRegistrantStatus) | **PUT** /meetings/{meetingId}/registrants/status | Update registrant&#39;s status
[**meetingRegistrants()**](MeetingsApi.md#meetingRegistrants) | **GET** /meetings/{meetingId}/registrants | List meeting registrants
[**meetingRegistrantsQuestionsGet()**](MeetingsApi.md#meetingRegistrantsQuestionsGet) | **GET** /meetings/{meetingId}/registrants/questions | List registration questions
[**meetingStatus()**](MeetingsApi.md#meetingStatus) | **PUT** /meetings/{meetingId}/status | Update meeting status
[**meetingSurveyDelete()**](MeetingsApi.md#meetingSurveyDelete) | **DELETE** /meetings/{meetingId}/survey | Delete a meeting survey
[**meetingSurveyGet()**](MeetingsApi.md#meetingSurveyGet) | **GET** /meetings/{meetingId}/survey | Get a meeting survey
[**meetingSurveyUpdate()**](MeetingsApi.md#meetingSurveyUpdate) | **PATCH** /meetings/{meetingId}/survey | Update a meeting survey
[**meetingToken()**](MeetingsApi.md#meetingToken) | **GET** /meetings/{meetingId}/token | Get meeting&#39;s token
[**meetingUpdate()**](MeetingsApi.md#meetingUpdate) | **PATCH** /meetings/{meetingId} | Update a meeting
[**meetingregistrantdelete()**](MeetingsApi.md#meetingregistrantdelete) | **DELETE** /meetings/{meetingId}/registrants/{registrantId} | Delete a meeting registrant
[**meetings()**](MeetingsApi.md#meetings) | **GET** /users/{userId}/meetings | List meetings
[**pastMeetingDetails()**](MeetingsApi.md#pastMeetingDetails) | **GET** /past_meetings/{meetingId} | Get past meeting details
[**pastMeetingParticipants()**](MeetingsApi.md#pastMeetingParticipants) | **GET** /past_meetings/{meetingId}/participants | Get past meeting participants
[**pastMeetings()**](MeetingsApi.md#pastMeetings) | **GET** /past_meetings/{meetingId}/instances | List past meeting instances


## `addBatchRegistrants()`

```php
addBatchRegistrants($meeting_id, $add_batch_registrants_request): \Zoom\Api\Model\AddBatchRegistrants200Response
```

Perform batch registration

Register up to 30 registrants at once for a meeting that requires [registration](https://support.zoom.us/hc/en-us/articles/211579443-Registration-for-Meetings). <br>  **Prerequisites:**<br> * The meeting host must be a Licensed user. * The meeting must require registration and should be of type `2`, i.e., they should be scheduled meetings. Instant meetings and Recurring meetings are not supported by this API.<br><br> **Scope:** `meeting:write`, `meeting:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Zoom\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 91498058927; // string | Unique identifier of the meeting (Meeting Number).
$add_batch_registrants_request = new \Zoom\Api\Model\AddBatchRegistrantsRequest(); // \Zoom\Api\Model\AddBatchRegistrantsRequest

try {
    $result = $apiInstance->addBatchRegistrants($meeting_id, $add_batch_registrants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->addBatchRegistrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| Unique identifier of the meeting (Meeting Number). |
 **add_batch_registrants_request** | [**\Zoom\Api\Model\AddBatchRegistrantsRequest**](../Model/AddBatchRegistrantsRequest.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\AddBatchRegistrants200Response**](../Model/AddBatchRegistrants200Response.md)

### Authorization

[Bearer](../../README.md#Bearer), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBatchPolls()`

```php
createBatchPolls($meeting_id, $create_batch_polls_request): \Zoom\Api\Model\CreateBatchPolls201Response
```

Perform batch poll creation

Polls allow the meeting host to survey attendees. Use this API to create batch [polls](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings) for a meeting.<br><br>  **Scopes**: `meeting:write:admin` `meeting:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**:<br> * Host user type must be **Pro** or higher plan. * Polling feature must be enabled in the host's account. * Meeting must be a scheduled meeting. Instant meetings do not have polling features enabled.

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
$meeting_id = 93398114182; // string
$create_batch_polls_request = new \Zoom\Api\Model\CreateBatchPollsRequest(); // \Zoom\Api\Model\CreateBatchPollsRequest | Batch Meeting poll object

try {
    $result = $apiInstance->createBatchPolls($meeting_id, $create_batch_polls_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->createBatchPolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**|  |
 **create_batch_polls_request** | [**\Zoom\Api\Model\CreateBatchPollsRequest**](../Model/CreateBatchPollsRequest.md)| Batch Meeting poll object | [optional]

### Return type

[**\Zoom\Api\Model\CreateBatchPolls201Response**](../Model/CreateBatchPolls201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMeetingChatMessageById()`

```php
deleteMeetingChatMessageById($meeting_id, $message_id)
```

Delete a live meeting message

Deletes a message in a live meeting based on ID.   **Scopes:** `meeting:write` `meeting:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$message_id = MS17MDQ5NjE4QjYtRjk4Ny00REEwLUFBQUItMTg3QTY0RjU2MzhFfQ==; // string | The live meeting chat message's unique identifier (UUID), in base64-encoded format.

try {
    $apiInstance->deleteMeetingChatMessageById($meeting_id, $message_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->deleteMeetingChatMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **message_id** | **string**| The live meeting chat message&#39;s unique identifier (UUID), in base64-encoded format. |

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

## `getMeetingLiveStreamDetails()`

```php
getMeetingLiveStreamDetails($meeting_id): \Zoom\Api\Model\GetMeetingLiveStreamDetails200Response
```

Get livestream details

Zoom allows users to [livestream a meeting](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service) to a custom platform. Use this API to get a meeting's livestream configuration details such as Stream URL, Stream Key and Page URL.<br><br> **Prerequisites:**<br> * Meeting host must be a licensed user with a Pro or higher plan.<br> * Live streaming details must have been [configured](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service#h_01589a6f-a40a-4e18-a448-cb746e52ebc5) for the meeting.<br><br> **Scopes:** `meeting:read:admin` `meeting:read`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

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
$meeting_id = 93398114182; // string | Unique identifier of the meeting.

try {
    $result = $apiInstance->getMeetingLiveStreamDetails($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->getMeetingLiveStreamDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| Unique identifier of the meeting. |

### Return type

[**\Zoom\Api\Model\GetMeetingLiveStreamDetails200Response**](../Model/GetMeetingLiveStreamDetails200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inMeetingControl()`

```php
inMeetingControl($meeting_id, $in_meeting_control_request)
```

Use in-meeting controls

Use this API to control [in-meeting](https://support.zoom.us/hc/en-us/articles/360021921032-In-Meeting-Controls) features. In-meeting controls include starting and stopping a recording, pausing and resuming a recording, and inviting participants.   **Note:** This API's recording control only works for cloud recordings. It does **not** work for local recordings.   **Scopes:** `meeting:write`, `meeting:write:admin`, `meeting:master`   **Prerequisites:** * The meeting **must** be a live meeting **except** inviting participants to the meeting through [call out (phone)/(room system)].  * Recording control: [Cloud recording](https://support.zoom.us/hc/en-us/articles/360060231472-Enabling-cloud-recording) must be enabled on the account.  * The user calling this API must be the host or an alternative meeting host.   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

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
$meeting_id = 93398114182; // string | The live meeting's ID.
$in_meeting_control_request = new \Zoom\Api\Model\InMeetingControlRequest(); // \Zoom\Api\Model\InMeetingControlRequest

try {
    $apiInstance->inMeetingControl($meeting_id, $in_meeting_control_request);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->inMeetingControl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The live meeting&#39;s ID. |
 **in_meeting_control_request** | [**\Zoom\Api\Model\InMeetingControlRequest**](../Model/InMeetingControlRequest.md)|  | [optional]

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

## `listMeetingTemplates()`

```php
listMeetingTemplates($user_id): \Zoom\Api\Model\ListMeetingTemplates200Response
```

List meeting templates

Use this API to list [meeting templates](https://support.zoom.us/hc/en-us/articles/360036559151-Meeting-templates) that are available to be used by a user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  **Scopes:** `meeting:read` or `meeting:read:admin`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

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
$user_id = 30R7kT7bTIKSNUFEuH_Qlg; // string | Unique identifier of the user. Retrieve the value of this field by calling the [**List users**](/docs/api-reference/zoom-api/methods#operation/users) API.

try {
    $result = $apiInstance->listMeetingTemplates($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->listMeetingTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Unique identifier of the user. Retrieve the value of this field by calling the [**List users**](/docs/api-reference/zoom-api/methods#operation/users) API. |

### Return type

[**\Zoom\Api\Model\ListMeetingTemplates200Response**](../Model/ListMeetingTemplates200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPastMeetingPolls()`

```php
listPastMeetingPolls($meeting_id): \Zoom\Api\Model\ListPastMeetingPolls200Response
```

List past meeting's poll results

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
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.

try {
    $result = $apiInstance->listPastMeetingPolls($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->listPastMeetingPolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |

### Return type

[**\Zoom\Api\Model\ListPastMeetingPolls200Response**](../Model/ListPastMeetingPolls200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meeting()`

```php
meeting($meeting_id, $occurrence_id, $show_previous_occurrences): \Zoom\Api\Model\Meeting200Response
```

Get a meeting

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$occurrence_id = 1648194360000; // string | Meeting Occurrence ID. Provide this field to view meeting details of a particular occurrence of the [recurring meeting](https://support.zoom.us/hc/en-us/articles/214973206-Scheduling-Recurring-Meetings).
$show_previous_occurrences = true; // bool | Set the value of this field to `true` if you would like to view meeting details of all previous occurrences of a [recurring meeting](https://support.zoom.us/hc/en-us/articles/214973206-Scheduling-Recurring-Meetings).

try {
    $result = $apiInstance->meeting($meeting_id, $occurrence_id, $show_previous_occurrences);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **occurrence_id** | **string**| Meeting Occurrence ID. Provide this field to view meeting details of a particular occurrence of the [recurring meeting](https://support.zoom.us/hc/en-us/articles/214973206-Scheduling-Recurring-Meetings). | [optional]
 **show_previous_occurrences** | **bool**| Set the value of this field to &#x60;true&#x60; if you would like to view meeting details of all previous occurrences of a [recurring meeting](https://support.zoom.us/hc/en-us/articles/214973206-Scheduling-Recurring-Meetings). | [optional]

### Return type

[**\Zoom\Api\Model\Meeting200Response**](../Model/Meeting200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingCreate()`

```php
meetingCreate($user_id, $meeting_create): \Zoom\Api\Model\MeetingCreate201Response
```

Create a meeting

Use this API to [create a meeting](https://support.zoom.us/hc/en-us/articles/201362413-Scheduling-meetings) for a user. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.  * A meeting's `start_url` value is the URL a host or an alternative host can use to start a meeting. The expiration time for the `start_url` value is **two hours** for all regular users. * For `custCreate` meeting hosts (users created with the `custCreate` parameter via the [**Create users**](/docs/api-reference/zoom-api/methods#operation/userCreate) API), the expiration time of the `start_url` parameter is **90 days** from the generation of the `start_url`.  **Note:**   For security reasons, the recommended way to programmatically (after expiry) get the updated `start_url` value is to call the [**Get a meeting**](/docs/api-reference/zoom-api/methods#operation/meeting) API. Refer to the `start_url` value in the response.    **Scopes:** `meeting:write:admin`, `meeting:write`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` <br> * This API has a daily rate limit of **100 requests per day**. The rate limit is applied against the `userId` of the **meeting host** used to make the request.

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
$user_id = new \Zoom\Api\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$meeting_create = array('key' => new \Zoom\Api\Model\MeetingCreate()); // \Zoom\Api\Model\MeetingCreate | Meeting object.

try {
    $result = $apiInstance->meetingCreate($user_id, $meeting_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **meeting_create** | [**\Zoom\Api\Model\MeetingCreate**](../Model/MeetingCreate.md)| Meeting object. |

### Return type

[**\Zoom\Api\Model\MeetingCreate201Response**](../Model/MeetingCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingDelete()`

```php
meetingDelete($meeting_id, $occurrence_id, $schedule_for_reminder, $cancel_meeting_reminder)
```

Delete a meeting

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$occurrence_id = 1648194360000; // string | The meeting or webinar occurrence ID.
$schedule_for_reminder = true; // bool | `true`: Notify host and alternative host about the meeting cancellation via email. `false`: Do not send any email notification.
$cancel_meeting_reminder = true; // bool | `true`: Notify registrants about the meeting cancellation via email.   `false`: Do not send any email notification to meeting registrants.   The default value of this field is `false`.

try {
    $apiInstance->meetingDelete($meeting_id, $occurrence_id, $schedule_for_reminder, $cancel_meeting_reminder);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **occurrence_id** | **string**| The meeting or webinar occurrence ID. | [optional]
 **schedule_for_reminder** | **bool**| &#x60;true&#x60;: Notify host and alternative host about the meeting cancellation via email. &#x60;false&#x60;: Do not send any email notification. | [optional]
 **cancel_meeting_reminder** | **bool**| &#x60;true&#x60;: Notify registrants about the meeting cancellation via email.   &#x60;false&#x60;: Do not send any email notification to meeting registrants.   The default value of this field is &#x60;false&#x60;. | [optional]

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

## `meetingInvitation()`

```php
meetingInvitation($meeting_id): \Zoom\Api\Model\MeetingInvitation
```

Get meeting invitation

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.

try {
    $result = $apiInstance->meetingInvitation($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |

### Return type

[**\Zoom\Api\Model\MeetingInvitation**](../Model/MeetingInvitation.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingInviteLinksCreate()`

```php
meetingInviteLinksCreate($meeting_id, $meeting_invite_links_create_request): \Zoom\Api\Model\MeetingInviteLinksCreate201Response
```

Create meeting's invite links

Use this API to create a batch of invitation links for a meeting.  **Scopes**: `meeting:write:admin`, `meeting:write`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_invite_links_create_request = new \Zoom\Api\Model\MeetingInviteLinksCreateRequest(); // \Zoom\Api\Model\MeetingInviteLinksCreateRequest

try {
    $result = $apiInstance->meetingInviteLinksCreate($meeting_id, $meeting_invite_links_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingInviteLinksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_invite_links_create_request** | [**\Zoom\Api\Model\MeetingInviteLinksCreateRequest**](../Model/MeetingInviteLinksCreateRequest.md)|  |

### Return type

[**\Zoom\Api\Model\MeetingInviteLinksCreate201Response**](../Model/MeetingInviteLinksCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingLiveStreamStatusUpdate()`

```php
meetingLiveStreamStatusUpdate($meeting_id, $meeting_live_stream_status)
```

Update Live Stream Status

Zoom allows users to [livestream a meeting](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service) to a custom platform. Use this API to update the status of a meeting's livestream.<br><br> **Prerequisites:**<br> * Meeting host must have a Pro license.<br> **Scopes:** `meeting:write:admin` `meeting:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_live_stream_status = new \Zoom\Api\Model\MeetingLiveStreamStatus(); // \Zoom\Api\Model\MeetingLiveStreamStatus | Meeting

try {
    $apiInstance->meetingLiveStreamStatusUpdate($meeting_id, $meeting_live_stream_status);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingLiveStreamStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_live_stream_status** | [**\Zoom\Api\Model\MeetingLiveStreamStatus**](../Model/MeetingLiveStreamStatus.md)| Meeting |

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

## `meetingLiveStreamUpdate()`

```php
meetingLiveStreamUpdate($meeting_id, $meeting_live_stream)
```

Update a livestream

Use this API to update a meeting's livestream information. Zoom allows users to [livestream a meeting](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service) to a custom platform.  **Scopes:** `meeting:write:admin`, `meeting:write`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * Meeting host must have a Pro license.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_live_stream = new \Zoom\Api\Model\MeetingLiveStream(); // \Zoom\Api\Model\MeetingLiveStream | Meeting

try {
    $apiInstance->meetingLiveStreamUpdate($meeting_id, $meeting_live_stream);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingLiveStreamUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_live_stream** | [**\Zoom\Api\Model\MeetingLiveStream**](../Model/MeetingLiveStream.md)| Meeting |

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

## `meetingLocalRecordingJoinToken()`

```php
meetingLocalRecordingJoinToken($meeting_id): \Zoom\Api\Model\MeetingLocalRecordingJoinToken200Response
```

Get a meeting's join token for local recording

Use this API to get a meeting's join token to allow for local recording. The join token lets a recording bot implemented using Zoom Meeting SDK to connect to a Zoom meeting. The recording bot can then automatically start locally recording. This supports both regular and raw local recording types.   **Scopes:** `meeting_token:read:admin:local_recording`, `meeting_token:read:local_recording` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * A Pro or higher plan for the meeting host.  * The **Local recording** user setting enabled in the Zoom web portal.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.

try {
    $result = $apiInstance->meetingLocalRecordingJoinToken($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingLocalRecordingJoinToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |

### Return type

[**\Zoom\Api\Model\MeetingLocalRecordingJoinToken200Response**](../Model/MeetingLocalRecordingJoinToken200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingPollCreate()`

```php
meetingPollCreate($meeting_id, $meeting_poll_create_request): \Zoom\Api\Model\MeetingPollCreate201Response
```

Create a meeting poll

Polls allow the meeting host to survey attendees. Use this API to create a [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings) for a meeting.<br><br>  **Scopes**: `meeting:write:admin` `meeting:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**:<br> * Host user type must be **Pro** or higher plan. * Polling feature must be enabled in the host's account. * Meeting must be a scheduled meeting. Instant meetings do not have polling features enabled.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_poll_create_request = new \Zoom\Api\Model\MeetingPollCreateRequest(); // \Zoom\Api\Model\MeetingPollCreateRequest | Meeting poll object

try {
    $result = $apiInstance->meetingPollCreate($meeting_id, $meeting_poll_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_poll_create_request** | [**\Zoom\Api\Model\MeetingPollCreateRequest**](../Model/MeetingPollCreateRequest.md)| Meeting poll object |

### Return type

[**\Zoom\Api\Model\MeetingPollCreate201Response**](../Model/MeetingPollCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingPollDelete()`

```php
meetingPollDelete($meeting_id, $poll_id)
```

Delete a meeting poll

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$poll_id = QalIoKWLTJehBJ8e1xRrbQ; // string | The poll ID

try {
    $apiInstance->meetingPollDelete($meeting_id, $poll_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **poll_id** | **string**| The poll ID |

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

## `meetingPollGet()`

```php
meetingPollGet($meeting_id, $poll_id): \Zoom\Api\Model\MeetingPollCreate201Response
```

Get a meeting poll

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$poll_id = QalIoKWLTJehBJ8e1xRrbQ; // string | The poll ID

try {
    $result = $apiInstance->meetingPollGet($meeting_id, $poll_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **poll_id** | **string**| The poll ID |

### Return type

[**\Zoom\Api\Model\MeetingPollCreate201Response**](../Model/MeetingPollCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingPollUpdate()`

```php
meetingPollUpdate($meeting_id, $poll_id, $meeting_poll_create_request)
```

Update a meeting poll

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$poll_id = QalIoKWLTJehBJ8e1xRrbQ; // string | The poll ID
$meeting_poll_create_request = new \Zoom\Api\Model\MeetingPollCreateRequest(); // \Zoom\Api\Model\MeetingPollCreateRequest | Meeting Poll

try {
    $apiInstance->meetingPollUpdate($meeting_id, $poll_id, $meeting_poll_create_request);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **poll_id** | **string**| The poll ID |
 **meeting_poll_create_request** | [**\Zoom\Api\Model\MeetingPollCreateRequest**](../Model/MeetingPollCreateRequest.md)| Meeting Poll |

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

## `meetingPolls()`

```php
meetingPolls($meeting_id, $anonymous): \Zoom\Api\Model\PollList
```

List meeting polls

Polls allow the meeting host to survey attendees. Use this API to list [polls](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings) of a meeting.<br><br>  **Scopes**: `meeting:read:admin` `meeting:read`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**:<br> * Host user type must be **Pro** or higher plan. * Meeting must be a scheduled meeting. Instant meetings do not have polling features enabled.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$anonymous = true; // bool | Whether to query for polls with the **Anonymous** option enabled:  * `true` — Query for polls with the **Anonymous** option enabled.  * `false` — Do not query for polls with the **Anonymous** option enabled.

try {
    $result = $apiInstance->meetingPolls($meeting_id, $anonymous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **anonymous** | **bool**| Whether to query for polls with the **Anonymous** option enabled:  * &#x60;true&#x60; — Query for polls with the **Anonymous** option enabled.  * &#x60;false&#x60; — Do not query for polls with the **Anonymous** option enabled. | [optional]

### Return type

[**\Zoom\Api\Model\PollList**](../Model/PollList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingRegistrantCreate()`

```php
meetingRegistrantCreate($meeting_id, $meeting_registrant_create_request, $occurrence_ids): \Zoom\Api\Model\MeetingRegistrantCreate201Response
```

Add a meeting registrant

Use this API to create and submit a user's registration to a meeting. See [Customizing webinar registration](https://support.zoom.us/hc/en-us/articles/202835649-Customizing-webinar-registration) for details on how to set the requirements for these fields. Note that there is a maximum limit of 4,999 registrants per meeting and users will see an error if the meeting's capacity is reached.    **Scopes:** `meeting:write:admin`, `meeting:write` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The host must be a **Licensed** user type.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_registrant_create_request = new \Zoom\Api\Model\MeetingRegistrantCreateRequest(); // \Zoom\Api\Model\MeetingRegistrantCreateRequest
$occurrence_ids = 1648194360000,1648367160000; // string | A comma-separated list of meeting occurrence IDs. You can get this value with the [Get a meeting](/docs/api-reference/zoom-api/methods#operation/meeting) API.

try {
    $result = $apiInstance->meetingRegistrantCreate($meeting_id, $meeting_registrant_create_request, $occurrence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_registrant_create_request** | [**\Zoom\Api\Model\MeetingRegistrantCreateRequest**](../Model/MeetingRegistrantCreateRequest.md)|  |
 **occurrence_ids** | **string**| A comma-separated list of meeting occurrence IDs. You can get this value with the [Get a meeting](/docs/api-reference/zoom-api/methods#operation/meeting) API. | [optional]

### Return type

[**\Zoom\Api\Model\MeetingRegistrantCreate201Response**](../Model/MeetingRegistrantCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingRegistrantGet()`

```php
meetingRegistrantGet($meeting_id, $registrant_id): \Zoom\Api\Model\MeetingRegistrant
```

Get a meeting registrant

Use this API to get details on a specific user who has registered for the meeting. A host or a user with administrative permissions can require [registration for Zoom meetings](https://support.zoom.us/hc/en-us/articles/211579443-Registration-for-Meetings).  **Scopes:** `meeting:read:admin`, `meeting:read`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * The account must have a Meeting plan

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$registrant_id = 9tboDiHUQAeOnbmudzWa5g; // string | The registrant ID.

try {
    $result = $apiInstance->meetingRegistrantGet($meeting_id, $registrant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **registrant_id** | **string**| The registrant ID. |

### Return type

[**\Zoom\Api\Model\MeetingRegistrant**](../Model/MeetingRegistrant.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingRegistrantQuestionUpdate()`

```php
meetingRegistrantQuestionUpdate($meeting_id, $meeting_registrants_questions_get200_response)
```

Update registration questions

Update registration questions that will be displayed to users while [registering for a meeting](https://support.zoom.us/hc/en-us/articles/211579443-Registration-for-Meetings).<br><br> **Scopes:** `meeting:write`, `meeting:write:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_registrants_questions_get200_response = new \Zoom\Api\Model\MeetingRegistrantsQuestionsGet200Response(); // \Zoom\Api\Model\MeetingRegistrantsQuestionsGet200Response | Meeting Registrant Questions

try {
    $apiInstance->meetingRegistrantQuestionUpdate($meeting_id, $meeting_registrants_questions_get200_response);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantQuestionUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_registrants_questions_get200_response** | [**\Zoom\Api\Model\MeetingRegistrantsQuestionsGet200Response**](../Model/MeetingRegistrantsQuestionsGet200Response.md)| Meeting Registrant Questions |

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

## `meetingRegistrantStatus()`

```php
meetingRegistrantStatus($meeting_id, $registrant_status, $occurrence_id)
```

Update registrant's status

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$registrant_status = new \Zoom\Api\Model\RegistrantStatus(); // \Zoom\Api\Model\RegistrantStatus
$occurrence_id = 1648194360000; // string | The meeting or webinar occurrence ID.

try {
    $apiInstance->meetingRegistrantStatus($meeting_id, $registrant_status, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **registrant_status** | [**\Zoom\Api\Model\RegistrantStatus**](../Model/RegistrantStatus.md)|  |
 **occurrence_id** | **string**| The meeting or webinar occurrence ID. | [optional]

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

## `meetingRegistrants()`

```php
meetingRegistrants($meeting_id, $occurrence_id, $status, $page_size, $page_number, $next_page_token): \Zoom\Api\Model\MeetingRegistrantList
```

List meeting registrants

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$occurrence_id = 1648194360000; // string | The meeting or webinar occurrence ID.
$status = pending; // string | Query by the registrant's status:  * `pending` — The registration is pending.  * `approved` — The registrant is approved.  * `denied` — The registration is denied.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated.** We will no longer support this field in a future release. Instead, use the `next_page_token` for pagination.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->meetingRegistrants($meeting_id, $occurrence_id, $status, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **occurrence_id** | **string**| The meeting or webinar occurrence ID. | [optional]
 **status** | **string**| Query by the registrant&#39;s status:  * &#x60;pending&#x60; — The registration is pending.  * &#x60;approved&#x60; — The registrant is approved.  * &#x60;denied&#x60; — The registration is denied. | [optional] [default to &#39;approved&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\MeetingRegistrantList**](../Model/MeetingRegistrantList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingRegistrantsQuestionsGet()`

```php
meetingRegistrantsQuestionsGet($meeting_id): \Zoom\Api\Model\MeetingRegistrantsQuestionsGet200Response
```

List registration questions

List registration questions that will be displayed to users while [registering for a meeting](https://support.zoom.us/hc/en-us/articles/211579443-Registration-for-Meetings).<br>  **Scopes:** `meeting:read`, `meeting:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.

try {
    $result = $apiInstance->meetingRegistrantsQuestionsGet($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantsQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |

### Return type

[**\Zoom\Api\Model\MeetingRegistrantsQuestionsGet200Response**](../Model/MeetingRegistrantsQuestionsGet200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingStatus()`

```php
meetingStatus($meeting_id, $meeting_status_request)
```

Update meeting status

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_status_request = new \Zoom\Api\Model\MeetingStatusRequest(); // \Zoom\Api\Model\MeetingStatusRequest

try {
    $apiInstance->meetingStatus($meeting_id, $meeting_status_request);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_status_request** | [**\Zoom\Api\Model\MeetingStatusRequest**](../Model/MeetingStatusRequest.md)|  |

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

## `meetingSurveyDelete()`

```php
meetingSurveyDelete($meeting_id)
```

Delete a meeting survey

Use this API to delete a [meeting survey](https://support.zoom.us/hc/en-us/articles/4404969060621-Post-meeting-survey-and-reporting).    **Scopes:** `meeting:write`, `meeting:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The host must be a **Pro** user type.  * The [**Meeting Survey**](https://support.zoom.us/hc/en-us/articles/4404939095053-Enabling-meeting-surveys) feature enabled in the host's account.  * The meeting must be a scheduled meeting. Instant meetings do not have survey features enabled.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.

try {
    $apiInstance->meetingSurveyDelete($meeting_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingSurveyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |

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

## `meetingSurveyGet()`

```php
meetingSurveyGet($meeting_id): \Zoom\Api\Model\MeetingSurveyGet200Response
```

Get a meeting survey

Use this API to return information about a [meeting survey](https://support.zoom.us/hc/en-us/articles/4404969060621-Post-meeting-survey-and-reporting).    **Scopes:** `meeting:read`, `meeting:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The host must be a **Pro** user type.  * The [**Meeting Survey**](https://support.zoom.us/hc/en-us/articles/4404939095053-Enabling-meeting-surveys) feature enabled in the host's account.  * The meeting must be a scheduled meeting. Instant meetings do not have survey features enabled.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.

try {
    $result = $apiInstance->meetingSurveyGet($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingSurveyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |

### Return type

[**\Zoom\Api\Model\MeetingSurveyGet200Response**](../Model/MeetingSurveyGet200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingSurveyUpdate()`

```php
meetingSurveyUpdate($meeting_id, $meeting_survey_get200_response)
```

Update a meeting survey

Use this API to update a [meeting survey](https://support.zoom.us/hc/en-us/articles/4404969060621-Post-meeting-survey-and-reporting).    **Scopes:** `meeting:write`, `meeting:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The host must be a **Pro** user type.  * The [**Meeting Survey**](https://support.zoom.us/hc/en-us/articles/4404939095053-Enabling-meeting-surveys) feature enabled in the host's account.  * The meeting must be a scheduled meeting. Instant meetings do not have survey features enabled.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_survey_get200_response = new \Zoom\Api\Model\MeetingSurveyGet200Response(); // \Zoom\Api\Model\MeetingSurveyGet200Response

try {
    $apiInstance->meetingSurveyUpdate($meeting_id, $meeting_survey_get200_response);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingSurveyUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_survey_get200_response** | [**\Zoom\Api\Model\MeetingSurveyGet200Response**](../Model/MeetingSurveyGet200Response.md)|  |

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

## `meetingToken()`

```php
meetingToken($meeting_id, $type): \Zoom\Api\Model\MeetingToken200Response
```

Get meeting's token

Use this API to get a meeting's [closed caption token (caption URL)](https://support.zoom.us/hc/en-us/articles/115002212983-Using-a-third-party-closed-captioning-service). This token lets you use a third-party service to stream text to their closed captioning software to the Zoom meeting.   **Scopes:** `meeting:read`, `meeting:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * The **Closed captioning** setting enabled in the Zoom web portal.  * The **Allow use of caption API Token to integrate with 3rd-party Closed Captioning services** setting enabled.

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$type = closed_caption_token; // string | The meeting token type:  * `closed_caption_token` — The third-party closed caption API token.   This defaults to `closed_caption_token`.

try {
    $result = $apiInstance->meetingToken($meeting_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **type** | **string**| The meeting token type:  * &#x60;closed_caption_token&#x60; — The third-party closed caption API token.   This defaults to &#x60;closed_caption_token&#x60;. | [optional] [default to &#39;closed_caption_token&#39;]

### Return type

[**\Zoom\Api\Model\MeetingToken200Response**](../Model/MeetingToken200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingUpdate()`

```php
meetingUpdate($meeting_id, $meeting_update_request, $occurrence_id)
```

Update a meeting

Use this API to update a meeting's details.  **Note:**  * This API has a rate limit of **100 requests per day**. Because of this, a meeting can only be updated for a maximum of **100 times within a 24-hour period**.  * The `start_time` value **must** be a future date. If the value is omitted or a date in the past, the API ignores this value and will **not** update any recurring meetings.  * If the `start_time` value is a future date, the `recurrence` object is **required**.  **Scopes:** `meeting:write:admin`, `meeting:write`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

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
$meeting_id = 85746065; // int | The meeting's ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits.
$meeting_update_request = new \Zoom\Api\Model\MeetingUpdateRequest(); // \Zoom\Api\Model\MeetingUpdateRequest | Meeting
$occurrence_id = 1648194360000; // string | Meeting occurrence id. Support change of agenda, start_time, duration, settings: {host_video, participant_video, join_before_host, mute_upon_entry, waiting_room, watermark, auto_recording}

try {
    $apiInstance->meetingUpdate($meeting_id, $meeting_update_request, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting&#39;s ID.    When storing this value in your database, you must store it as a long format integer and **not** an integer. Meeting IDs can exceed 10 digits. |
 **meeting_update_request** | [**\Zoom\Api\Model\MeetingUpdateRequest**](../Model/MeetingUpdateRequest.md)| Meeting |
 **occurrence_id** | **string**| Meeting occurrence id. Support change of agenda, start_time, duration, settings: {host_video, participant_video, join_before_host, mute_upon_entry, waiting_room, watermark, auto_recording} | [optional]

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

## `meetingregistrantdelete()`

```php
meetingregistrantdelete($meeting_id, $registrant_id, $occurrence_id)
```

Delete a meeting registrant

Delete a meeting registrant.<br><br> **Scopes**: `meeting:write:admin` `meeting:write`<br>  <br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

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
$meeting_id = 91498058927; // int | The meeting ID.
$registrant_id = 9tboDiHUQAeOnbmudzWa5g; // string | The meeting registrant ID.
$occurrence_id = approved; // string | The meeting occurrence ID.

try {
    $apiInstance->meetingregistrantdelete($meeting_id, $registrant_id, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingregistrantdelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID. |
 **registrant_id** | **string**| The meeting registrant ID. |
 **occurrence_id** | **string**| The meeting occurrence ID. | [optional]

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

## `meetings()`

```php
meetings($user_id, $type, $page_size, $next_page_token, $page_number): \Zoom\Api\Model\GroupList
```

List meetings

Use this API to list a user's (meeting host) scheduled meetings. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.   **Note:**  * This API **only** supports scheduled meetings. This API does not return information about instant meetings.  * This API only returns a user's [unexpired meetings](https://support.zoom.us/hc/en-us/articles/201362373-Meeting-ID#h_c73f9b08-c1c0-4a1a-b538-e01ebb98e844).    **Scopes:** `meeting:read:admin`, `meeting:read` </br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

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
$user_id = new \Zoom\Api\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$type = scheduled; // string | The type of meeting:  * `scheduled` — All valid previous (unexpired) meetings, live meetings, and upcoming scheduled meetings.  * `live` — All the ongoing meetings.  * `upcoming` — All upcoming meetings, including live meetings.  * `upcoming_meetings` — All upcoming meetings, including live meetings.  * `previous_meetings` — All the previous meetings.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$page_number = 1; // int | The page number of the current page in the returned records.

try {
    $result = $apiInstance->meetings($user_id, $type, $page_size, $next_page_token, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **type** | **string**| The type of meeting:  * &#x60;scheduled&#x60; — All valid previous (unexpired) meetings, live meetings, and upcoming scheduled meetings.  * &#x60;live&#x60; — All the ongoing meetings.  * &#x60;upcoming&#x60; — All upcoming meetings, including live meetings.  * &#x60;upcoming_meetings&#x60; — All upcoming meetings, including live meetings.  * &#x60;previous_meetings&#x60; — All the previous meetings. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **page_number** | **int**| The page number of the current page in the returned records. | [optional]

### Return type

[**\Zoom\Api\Model\GroupList**](../Model/GroupList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pastMeetingDetails()`

```php
pastMeetingDetails($meeting_id): \Zoom\Api\Model\PastMeetingDetails200Response
```

Get past meeting details

Use this API to get information about a past meeting.    **Scopes:** `meeting:read:admin`, `meeting:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

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
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.

try {
    $result = $apiInstance->pastMeetingDetails($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetingDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |

### Return type

[**\Zoom\Api\Model\PastMeetingDetails200Response**](../Model/PastMeetingDetails200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pastMeetingParticipants()`

```php
pastMeetingParticipants($meeting_id, $page_size, $next_page_token): \Zoom\Api\Model\PastMeetingParticipants200Response
```

Get past meeting participants

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
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->pastMeetingParticipants($meeting_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetingParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\PastMeetingParticipants200Response**](../Model/PastMeetingParticipants200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pastMeetings()`

```php
pastMeetings($meeting_id): \Zoom\Api\Model\MeetingInstances
```

List past meeting instances

Use this API to return a list of past meeting instances.    **Scopes:** `meeting:read:admin`, `meeting:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

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
$meeting_id = 93398114182; // int | The past meeting's ID. The meeting ID must be from within the last 30 days. Past meeting IDs expire after 30 days.

try {
    $result = $apiInstance->pastMeetings($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The past meeting&#39;s ID. The meeting ID must be from within the last 30 days. Past meeting IDs expire after 30 days. |

### Return type

[**\Zoom\Api\Model\MeetingInstances**](../Model/MeetingInstances.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
