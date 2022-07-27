# Zoom\Api\DashboardsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dashboardCRC()**](DashboardsApi.md#dashboardCRC) | **GET** /metrics/crc | Get CRC port usage
[**dashboardChat()**](DashboardsApi.md#dashboardChat) | **GET** /metrics/chat | Get chat metrics
[**dashboardClientFeedback()**](DashboardsApi.md#dashboardClientFeedback) | **GET** /metrics/client/feedback | List Zoom meetings client feedback
[**dashboardClientFeedbackDetail()**](DashboardsApi.md#dashboardClientFeedbackDetail) | **GET** /metrics/client/feedback/{feedbackId} | Get zoom meetings client feedback
[**dashboardIM()**](DashboardsApi.md#dashboardIM) | **GET** /metrics/im | Get IM metrics
[**dashboardIssueDetailZoomRoom()**](DashboardsApi.md#dashboardIssueDetailZoomRoom) | **GET** /metrics/issues/zoomrooms/{zoomroomId} | Get issues of Zoom Rooms
[**dashboardIssueZoomRoom()**](DashboardsApi.md#dashboardIssueZoomRoom) | **GET** /metrics/issues/zoomrooms | Get top 25 Zoom Rooms with issues
[**dashboardMeetingDetail()**](DashboardsApi.md#dashboardMeetingDetail) | **GET** /metrics/meetings/{meetingId} | Get meeting details
[**dashboardMeetingParticipantQOS()**](DashboardsApi.md#dashboardMeetingParticipantQOS) | **GET** /metrics/meetings/{meetingId}/participants/{participantId}/qos | Get meeting participant QoS
[**dashboardMeetingParticipantShare()**](DashboardsApi.md#dashboardMeetingParticipantShare) | **GET** /metrics/meetings/{meetingId}/participants/sharing | Get sharing/recording details
[**dashboardMeetingParticipants()**](DashboardsApi.md#dashboardMeetingParticipants) | **GET** /metrics/meetings/{meetingId}/participants | List meeting participants
[**dashboardMeetingParticipantsQOS()**](DashboardsApi.md#dashboardMeetingParticipantsQOS) | **GET** /metrics/meetings/{meetingId}/participants/qos | List meeting participants QoS
[**dashboardMeetingParticipantsQOSSummary()**](DashboardsApi.md#dashboardMeetingParticipantsQOSSummary) | **GET** /metrics/meetings/{meetingId}/participants/qos_summary | List meeting participants QoS Summary
[**dashboardMeetings()**](DashboardsApi.md#dashboardMeetings) | **GET** /metrics/meetings | List meetings
[**dashboardQuality()**](DashboardsApi.md#dashboardQuality) | **GET** /metrics/quality | Get meeting quality scores
[**dashboardWebinarDetail()**](DashboardsApi.md#dashboardWebinarDetail) | **GET** /metrics/webinars/{webinarId} | Get webinar details
[**dashboardWebinarParticipantQOS()**](DashboardsApi.md#dashboardWebinarParticipantQOS) | **GET** /metrics/webinars/{webinarId}/participants/{participantId}/qos | Get webinar participant QoS
[**dashboardWebinarParticipantShare()**](DashboardsApi.md#dashboardWebinarParticipantShare) | **GET** /metrics/webinars/{webinarId}/participants/sharing | Get sharing/recording details
[**dashboardWebinarParticipants()**](DashboardsApi.md#dashboardWebinarParticipants) | **GET** /metrics/webinars/{webinarId}/participants | Get webinar participants
[**dashboardWebinarParticipantsQOS()**](DashboardsApi.md#dashboardWebinarParticipantsQOS) | **GET** /metrics/webinars/{webinarId}/participants/qos | List webinar participant QoS
[**dashboardWebinarParticipantsQOSSummary()**](DashboardsApi.md#dashboardWebinarParticipantsQOSSummary) | **GET** /metrics/webinars/{webinarId}/participants/qos_summary | List webinar participants QoS Summary
[**dashboardWebinars()**](DashboardsApi.md#dashboardWebinars) | **GET** /metrics/webinars | List webinars
[**dashboardZoomRoom()**](DashboardsApi.md#dashboardZoomRoom) | **GET** /metrics/zoomrooms/{zoomroomId} | Get Zoom Rooms details
[**dashboardZoomRoomIssue()**](DashboardsApi.md#dashboardZoomRoomIssue) | **GET** /metrics/zoomrooms/issues | Get top 25 issues of Zoom Rooms
[**dashboardZoomRooms()**](DashboardsApi.md#dashboardZoomRooms) | **GET** /metrics/zoomrooms | List Zoom Rooms
[**getClientVersions()**](DashboardsApi.md#getClientVersions) | **GET** /metrics/client_versions | List the client versions
[**listMeetingSatisfaction()**](DashboardsApi.md#listMeetingSatisfaction) | **GET** /metrics/client/satisfaction | List client meeting satisfaction
[**participantFeedback()**](DashboardsApi.md#participantFeedback) | **GET** /metrics/meetings/{meetingId}/participants/satisfaction | Get post meeting feedback
[**participantWebinarFeedback()**](DashboardsApi.md#participantWebinarFeedback) | **GET** /metrics/webinars/{webinarId}/participants/satisfaction | Get post webinar feedback


## `dashboardCRC()`

```php
dashboardCRC($from, $to): \Zoom\Api\Model\DashboardCRC200Response
```

Get CRC port usage

A Cloud Room Connector allows H.323/SIP endpoints to connect to a Zoom meeting.   Use this API to get the hour by hour CRC Port usage for a specified period of time. <aside class='notice'>We will provide the report for a maximum of one month. For example, if \"from\" is set to \"2017-08-05\" and \"to\" is set to \"2017-10-10\", we will adjust \"from\" to \"2017-09-10\".</aside><br><br> **Prerequisites:**<br> * Business, Education or API Plan. * Room Connector must be enabled on the account.<br><br> **Scopes:** `dashboard_crc:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.

try {
    $result = $apiInstance->dashboardCRC($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardCRC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |

### Return type

[**\Zoom\Api\Model\DashboardCRC200Response**](../Model/DashboardCRC200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardChat()`

```php
dashboardChat($from, $to, $page_size, $next_page_token): \Zoom\Api\Model\DashboardChat200Response
```

Get chat metrics

Get [metrics](https://support.zoom.us/hc/en-us/articles/204654719-Dashboard#h_cc7e9749-1c70-4afb-a9a2-9680654821e4) for how users are utilizing Zoom Chat to send messages.  Use the `from` and `to` query parameters to specify a monthly date range for the dashboard data. The monthly date range must be within the last six months.  > **Note:** To query chat metrics from July 1, 2021 and later, use this endpoint instead of the [**Get IM metrics**](/docs/api-reference/zoom-api/methods#operation/dashboardIM) API.  **Scope:** `dashboard_im:read:admin`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Resource-intensive`  **Prerequisites:**  * Business or a higher plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardChat($from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardChat200Response**](../Model/DashboardChat200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardClientFeedback()`

```php
dashboardClientFeedback($from, $to): \Zoom\Api\Model\DashboardClientFeedback200Response
```

List Zoom meetings client feedback

Use this API to return [Zoom meetings client feedback](https://support.zoom.us/hc/en-us/articles/115005855266-End-of-Meeting-Feedback-Survey#h_e30d552b-6d8e-4e0a-a588-9ca8180c4dbf) survey results. You can specify a monthly date range for the Dashboard data using the `from` and `to` query parameters. The month should fall within the last six months.   **Scopes:** `dashboard_home:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business or higher account.  * The \"[**Feedback to Zoom**](https://support.zoom.us/hc/en-us/articles/115005838023)\" option enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.

try {
    $result = $apiInstance->dashboardClientFeedback($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardClientFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |

### Return type

[**\Zoom\Api\Model\DashboardClientFeedback200Response**](../Model/DashboardClientFeedback200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardClientFeedbackDetail()`

```php
dashboardClientFeedbackDetail($feedback_id, $from, $to, $page_size, $next_page_token): \Zoom\Api\Model\DashboardClientFeedbackDetail200Response
```

Get zoom meetings client feedback

Retrieve detailed information on a [Zoom meetings client feedback](https://support.zoom.us/hc/en-us/articles/115005855266-End-of-Meeting-Feedback-Survey#h_e30d552b-6d8e-4e0a-a588-9ca8180c4dbf). <br> You can specify a monthly date range for the dashboard data using the `from` and `to` query parameters. The month should fall within the last six months.  **Prerequisites:** * Business or higher account * [Feedback to Zoom](https://support.zoom.us/hc/en-us/articles/115005838023) enabled.  **Scope:** `dashboard_home:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`  `

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_id = 1; // string | Feedback Detail Id
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime
$to = Sat Jan 29 19:00:00 EST 2022; // \DateTime
$page_size = 30; // int
$next_page_token = uBTK3NzNksdkuCUAQaFVFd86kyOr59zg4U2; // string

try {
    $result = $apiInstance->dashboardClientFeedbackDetail($feedback_id, $from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardClientFeedbackDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedback_id** | **string**| Feedback Detail Id |
 **from** | **\DateTime**|  | [optional]
 **to** | **\DateTime**|  | [optional]
 **page_size** | **int**|  | [optional] [default to 30]
 **next_page_token** | **string**|  | [optional]

### Return type

[**\Zoom\Api\Model\DashboardClientFeedbackDetail200Response**](../Model/DashboardClientFeedbackDetail200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardIM()`

```php
dashboardIM($from, $to, $page_size, $next_page_token): \Zoom\Api\Model\DashboardIM200Response
```

Get IM metrics

Get [metrics](https://support.zoom.us/hc/en-us/articles/204654719-Dashboard#h_cc7e9749-1c70-4afb-a9a2-9680654821e4) on how users are utilizing the Zoom Chat client.  You can specify a monthly date range for the dashboard data using the `from` and `to` query parameters. The month should fall within the last six months.<p style=\"background-color:#e1f5fe; color:#000000; padding:8px\"><b>Deprecated:</b> We will completely deprecate this endpoint in a future release. You can continue using this endpoint to query data for messages sent <b>before</b> July 1, 2021.</br></br>To get metrics on chat messages sent <b>on and after</b> July 1, 2021, use the [**Get chat metrics**](/docs/api-reference/zoom-api/methods#operation/dashboardChat) API.</p>  **Scopes:** `dashboard_im:read:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Resource-intensive`  **Prerequisites:**  * Business or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardIM($from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardIM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardIM200Response**](../Model/DashboardIM200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardIssueDetailZoomRoom()`

```php
dashboardIssueDetailZoomRoom($zoomroom_id, $from, $to, $page_size, $next_page_token): \Zoom\Api\Model\DashboardIssueDetailZoomRoom200Response
```

Get issues of Zoom Rooms

Use this API to return information about the Zoom Rooms in an account with issues, such as disconnected hardware or bandwidth issues. You can specify a monthly date range for the Dashboard data using the `from` and `to` query parameters. The month should fall within the last six months.   **Scopes:** `dashboard_home:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business or a higher plan.  * A Zoom Room must be enabled in the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zoomroom_id = azGzXIVUTWOdEQB79aNHkA; // string | The Zoom room ID.
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardIssueDetailZoomRoom($zoomroom_id, $from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardIssueDetailZoomRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zoomroom_id** | **string**| The Zoom room ID. |
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardIssueDetailZoomRoom200Response**](../Model/DashboardIssueDetailZoomRoom200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardIssueZoomRoom()`

```php
dashboardIssueZoomRoom($from, $to): \Zoom\Api\Model\DashboardIssueZoomRoom200Response
```

Get top 25 Zoom Rooms with issues

Get information on top 25 Zoom Rooms with issues in a month. The month specified with the \"from\" and \"to\" range should fall within the last six months.<br> **Scope:** `dashboard_home:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Business or a higher plan. * Zoom Room must be enabled in the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.

try {
    $result = $apiInstance->dashboardIssueZoomRoom($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardIssueZoomRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |

### Return type

[**\Zoom\Api\Model\DashboardIssueZoomRoom200Response**](../Model/DashboardIssueZoomRoom200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardMeetingDetail()`

```php
dashboardMeetingDetail($meeting_id, $type): \Zoom\Api\Model\MeetingMetric
```

Get meeting details

Get details on live or past meetings. This overview will show if features such as audio, video, screen sharing, and recording were being used in the meeting. You can also see the license types of each user on your account.<br> You can specify a monthly date range for the dashboard data using the `from` and `to` query parameters. The month should fall within the last six months.  <br> **Scopes:** `dashboard_meetings:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:** <br> * Business or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$type = past; // string | The type of meeting to query:  * `past` — All past meetings.  * `pastOne` — All past one-user meetings.  * `live` - All live meetings.   This value defaults to `live`.

try {
    $result = $apiInstance->dashboardMeetingDetail($meeting_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **type** | **string**| The type of meeting to query:  * &#x60;past&#x60; — All past meetings.  * &#x60;pastOne&#x60; — All past one-user meetings.  * &#x60;live&#x60; - All live meetings.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]

### Return type

[**\Zoom\Api\Model\MeetingMetric**](../Model/MeetingMetric.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardMeetingParticipantQOS()`

```php
dashboardMeetingParticipantQOS($meeting_id, $participant_id, $type): \Zoom\Api\Model\QOSParticipant
```

Get meeting participant QoS

Use this API to return the quality of service (QoS) report for participants from live or past meetings. The data returned indicates the connection quality for sending/receiving video, audio, and shared content. The API returns this data for either the API request or when the API request was last received.   When the sender sends data, a timestamp is attached to the sender's data packet. The receiver then returns this timestamp to the sender. This helps determine the upstream and downstream latency, which includes the application processing time. The latency data returned is the five second average and five second maximum.    This API will **not** return data if there is no data being sent or received at the time of request.   **Note:**   This API may return empty values for participants' `user_name`, `ip_address`, `location`, and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).  * Displays data for any users who are **not** part of the host's account (external users) unless they meet certain conditions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details.   **Scopes:** `dashboard_meetings:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$participant_id = 32977920; // string | The participant's ID.
$type = past; // string | The type of meeting to query:  * `past` — All past meetings.  * `live` - All live meetings.   This value defaults to `live`.

try {
    $result = $apiInstance->dashboardMeetingParticipantQOS($meeting_id, $participant_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipantQOS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **participant_id** | **string**| The participant&#39;s ID. |
 **type** | **string**| The type of meeting to query:  * &#x60;past&#x60; — All past meetings.  * &#x60;live&#x60; - All live meetings.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]

### Return type

[**\Zoom\Api\Model\QOSParticipant**](../Model/QOSParticipant.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardMeetingParticipantShare()`

```php
dashboardMeetingParticipantShare($meeting_id, $type, $page_size, $next_page_token): \Zoom\Api\Model\DashboardMeetingParticipantShare200Response
```

Get sharing/recording details

Retrieve the sharing and recording details of participants from live or past meetings.<br> **Scopes:** `dashboard_meetings:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:** <br> * Business or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$type = past; // string | The type of meeting to query:  * `past` — All past meetings.  * `live` - All live meetings.   This value defaults to `live`.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = 0JblM1ZHFIdXjAHefkYOfTdCw1Lq9H1urw2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardMeetingParticipantShare($meeting_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipantShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **type** | **string**| The type of meeting to query:  * &#x60;past&#x60; — All past meetings.  * &#x60;live&#x60; - All live meetings.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardMeetingParticipantShare200Response**](../Model/DashboardMeetingParticipantShare200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardMeetingParticipants()`

```php
dashboardMeetingParticipants($meeting_id, $type, $page_size, $next_page_token, $include_fields): \Zoom\Api\Model\DashboardMeetingParticipants200Response
```

List meeting participants

Use this API to return a list of participants from live or past meetings.    If you do not provide the `type` query parameter, the default value will be set to the `live` value. This API will only return metrics for participants in a live meeting, if any exist. You can specify a monthly date range for the dashboard data using the `from` and `to` query parameters. The month should fall within the last six months.   **Note:**   This API may return empty values for participants' `user_name`, `ip_address`, `location`, and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).  * Displays data for any users who are **not** part of the host's account (external users) unless they meet certain conditions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details.   **Scopes:** `dashboard_meetings:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$type = past; // string | The type of meeting to query:  * `past` — All past meetings.  * `pastOne` — All past one-user meetings.  * `live` - All live meetings.   This value defaults to `live`.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$include_fields = registrant_id; // string | Provide `registrant_id` as the value for this field if you would like to see the registrant ID attribute in the response of this API call. A registrant ID is a unique identifier of a [meeting registrant](/docs/api-reference/zoom-api/methods#operation/meetingRegistrants). This is not supported for `live` meeting types.

try {
    $result = $apiInstance->dashboardMeetingParticipants($meeting_id, $type, $page_size, $next_page_token, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **type** | **string**| The type of meeting to query:  * &#x60;past&#x60; — All past meetings.  * &#x60;pastOne&#x60; — All past one-user meetings.  * &#x60;live&#x60; - All live meetings.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **include_fields** | **string**| Provide &#x60;registrant_id&#x60; as the value for this field if you would like to see the registrant ID attribute in the response of this API call. A registrant ID is a unique identifier of a [meeting registrant](/docs/api-reference/zoom-api/methods#operation/meetingRegistrants). This is not supported for &#x60;live&#x60; meeting types. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardMeetingParticipants200Response**](../Model/DashboardMeetingParticipants200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardMeetingParticipantsQOS()`

```php
dashboardMeetingParticipantsQOS($meeting_id, $type, $page_size, $next_page_token): \Zoom\Api\Model\QOSParticipantList
```

List meeting participants QoS

Use this API to return a list of meeting participants from live or past meetings and their quality of service received during the meeting. The data returned indicates the connection quality for sending/receiving video, audio, and shared content.   **Note:**   This API may return empty values for participants' `user_name`, `ip_address`, `location`, and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).  * Displays data for any users who are **not** part of the host's account (external users) unless they meet certain conditions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details.   **Scopes:** `dashboard_meetings:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$type = past; // string | The type of meeting to query:  * `past` — All past meetings.  * `live` - All live meetings.   This value defaults to `live`.
$page_size = 10; // int | The number of items returned per page.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardMeetingParticipantsQOS($meeting_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipantsQOS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **type** | **string**| The type of meeting to query:  * &#x60;past&#x60; — All past meetings.  * &#x60;live&#x60; - All live meetings.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of items returned per page. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\QOSParticipantList**](../Model/QOSParticipantList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardMeetingParticipantsQOSSummary()`

```php
dashboardMeetingParticipantsQOSSummary($meeting_id, $page_size, $next_page_token): \Zoom\Api\Model\ParticipantQOSSummaryList
```

List meeting participants QoS Summary

Use this API to return a list of meeting participants from past meetings and the summary their quality of service received during the meeting. The data returned indicates the connection quality for sending/receiving video, audio, and shared content.   **Note:**   This API may return empty values for participants' `user_name` and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).  * Displays data for any users who are **not** part of the host's account (external users) unless they meet certain conditions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details.   **Scopes:** `dashboard_meetings:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$page_size = 10; // int | The number of items returned per page.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardMeetingParticipantsQOSSummary($meeting_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipantsQOSSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **page_size** | **int**| The number of items returned per page. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\ParticipantQOSSummaryList**](../Model/ParticipantQOSSummaryList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardMeetings()`

```php
dashboardMeetings($from, $to, $type, $page_size, $next_page_token, $group_id, $include_fields): \Zoom\Api\Model\DashboardMeetings200Response
```

List meetings

List total live or past meetings that occurred during a specified period of time. This overview will show if features such as audio, video, screen sharing, and recording were being used in the meeting. You can also see the license types of each user on your account.<br> You can specify a monthly date range for the dashboard data using the `from` and `to` query parameters. The month should fall within the last six months.<br> **Scopes:** `dashboard_meetings:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Resource-intensive`<br><br> **Prerequisites:** <br> * Business or a higher plan.<br><br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$type = past; // string | Specify a value to get the response for the corresponding meeting type. The value of this field can be one of the following:<br> <br>`past` - Meeting that already occurred in the specified date range.<br>`pastOne` - Past meetings that were attended by only one user. <br>`live` - Live meetings.<br><br>  If you do not provide this field, the default value will be `live` and thus, the API will only query responses for live meetings.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$group_id = TaVA8QKik_1233; // string | The group ID. To get a group ID, use the [**List groups**](https://marketplace.zoom.us/docs/api-reference/zoom-api/groups/groups) API.    **Note:** The API response will only contain meetings where the host is a member of the queried group ID.
$include_fields = tracking_fields; // string | Set the value of this field to \"tracking_fields\" if you would like to include tracking fields of each meeting in the response.

try {
    $result = $apiInstance->dashboardMeetings($from, $to, $type, $page_size, $next_page_token, $group_id, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **type** | **string**| Specify a value to get the response for the corresponding meeting type. The value of this field can be one of the following:&lt;br&gt; &lt;br&gt;&#x60;past&#x60; - Meeting that already occurred in the specified date range.&lt;br&gt;&#x60;pastOne&#x60; - Past meetings that were attended by only one user. &lt;br&gt;&#x60;live&#x60; - Live meetings.&lt;br&gt;&lt;br&gt;  If you do not provide this field, the default value will be &#x60;live&#x60; and thus, the API will only query responses for live meetings. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **group_id** | **string**| The group ID. To get a group ID, use the [**List groups**](https://marketplace.zoom.us/docs/api-reference/zoom-api/groups/groups) API.    **Note:** The API response will only contain meetings where the host is a member of the queried group ID. | [optional]
 **include_fields** | **string**| Set the value of this field to \&quot;tracking_fields\&quot; if you would like to include tracking fields of each meeting in the response. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardMeetings200Response**](../Model/DashboardMeetings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardQuality()`

```php
dashboardQuality($from, $to, $type): \Zoom\Api\Model\DashboardQuality200Response
```

Get meeting quality scores

Use this API to return [meeting quality score](https://support.zoom.us/hc/en-us/articles/360061244651-Meeting-quality-scores-and-network-alerts-on-Dashboard) information. Meeting quality scores are based on the mean opinion score (MOS). The MOS measures a meeting's quality on a scale of \"Good\" (5-4), \"Fair\" (4-3), \"Poor\" (3-2), or \"Bad\" (2-1).   **Scopes:** `dashboard_home:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$type = meeting; // string | The type of meeting quality score to query:  * `meeting` — Query by meetings.  * `participants` — Query by meeting participants.

try {
    $result = $apiInstance->dashboardQuality($from, $to, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardQuality: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **type** | **string**| The type of meeting quality score to query:  * &#x60;meeting&#x60; — Query by meetings.  * &#x60;participants&#x60; — Query by meeting participants. | [optional] [default to &#39;meeting&#39;]

### Return type

[**\Zoom\Api\Model\DashboardQuality200Response**](../Model/DashboardQuality200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWebinarDetail()`

```php
dashboardWebinarDetail($webinar_id, $type): \Zoom\Api\Model\WebinarMetric
```

Get webinar details

Retrieve details from live or past webinars.<br><br> **Scopes:** `dashboard_webinars:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Business, Education or API Plan with Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.
$type = past; // string | The type of webinar to query:  * `past` — All past webinars.  * `live` - All live webinars.   This value defaults to `live`.

try {
    $result = $apiInstance->dashboardWebinarDetail($webinar_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |
 **type** | **string**| The type of webinar to query:  * &#x60;past&#x60; — All past webinars.  * &#x60;live&#x60; - All live webinars.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]

### Return type

[**\Zoom\Api\Model\WebinarMetric**](../Model/WebinarMetric.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWebinarParticipantQOS()`

```php
dashboardWebinarParticipantQOS($webinar_id, $participant_id, $type): \Zoom\Api\Model\QOSParticipant
```

Get webinar participant QoS

Use this API to return the quality of service (QoS) for participants during live or past webinars. This data returned indicates the connection quality for sending/receiving video, audio, and shared content. The API returns this data for either the API request or when the API request was last received.   When the sender sends its data, a timestamp is attached to the sender's data packet. The receiver then returns this timestamp to the sender. This helps determine the upstream and downstream latency, which includes the application processing time. The latency data returned is the five second average and five second maximum.   This API will **not** return data if there is no data being sent or received at the time of request.   **Note:**   This API may return empty values for participants' `user_name`, `ip_address`, `location`, and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).  * Displays data for any users who are **not** part of the host's account (external users) unless they meet certain conditions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details.   **Scopes:** `dashboard_webinars:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business, Education, or API Plan with Zoom Rooms set up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.
$participant_id = 32977920; // string | The participant's ID.
$type = past; // string | The type of webinar to query:  * `past` — All past webinars.  * `live` - All live webinars.   This value defaults to `live`.

try {
    $result = $apiInstance->dashboardWebinarParticipantQOS($webinar_id, $participant_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipantQOS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |
 **participant_id** | **string**| The participant&#39;s ID. |
 **type** | **string**| The type of webinar to query:  * &#x60;past&#x60; — All past webinars.  * &#x60;live&#x60; - All live webinars.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]

### Return type

[**\Zoom\Api\Model\QOSParticipant**](../Model/QOSParticipant.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWebinarParticipantShare()`

```php
dashboardWebinarParticipantShare($webinar_id, $type, $page_size, $next_page_token): \Zoom\Api\Model\DashboardWebinarParticipantShare200Response
```

Get sharing/recording details

Retrieve the sharing and recording details of participants from live or past webinars. <br><br> **Scopes:** `dashboard_webinars:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy` <br> **Prerequisites:**<br> * Business, Education or API Plan with Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.
$type = past; // string | The type of webinar to query:  * `past` — All past webinars.  * `live` - All live webinars.   This value defaults to `live`.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = 0JblM1ZHFIdXjAHefkYOfTdCw1Lq9H1urw2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardWebinarParticipantShare($webinar_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipantShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |
 **type** | **string**| The type of webinar to query:  * &#x60;past&#x60; — All past webinars.  * &#x60;live&#x60; - All live webinars.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardWebinarParticipantShare200Response**](../Model/DashboardWebinarParticipantShare200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWebinarParticipants()`

```php
dashboardWebinarParticipants($webinar_id, $type, $page_size, $next_page_token, $include_fields): \Zoom\Api\Model\DashboardWebinarParticipants200Response
```

Get webinar participants

Use this API to return information about participants from live or past webinars.   **Note:**   This API may return empty values for participants' `user_name`, `ip_address`, `location`, and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).  * Displays data for any users who are **not** part of the host's account (external users) unless they meet certain conditions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details.   **Scopes:** `dashboard_webinars:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business, Education, or API Plan with Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.
$type = past; // string | The type of webinar to query:  * `past` — All past webinars.  * `live` - All live webinars.   This value defaults to `live`.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$include_fields = registrant_id; // string | Additional fields to include in the query:  * `registrant_id` — Include the webinar registrant's ID. The registrant ID is the [webinar registrant's unique ID](/docs/api-reference/zoom-api/methods#operation/webinarRegistrants).

try {
    $result = $apiInstance->dashboardWebinarParticipants($webinar_id, $type, $page_size, $next_page_token, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |
 **type** | **string**| The type of webinar to query:  * &#x60;past&#x60; — All past webinars.  * &#x60;live&#x60; - All live webinars.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **include_fields** | **string**| Additional fields to include in the query:  * &#x60;registrant_id&#x60; — Include the webinar registrant&#39;s ID. The registrant ID is the [webinar registrant&#39;s unique ID](/docs/api-reference/zoom-api/methods#operation/webinarRegistrants). | [optional]

### Return type

[**\Zoom\Api\Model\DashboardWebinarParticipants200Response**](../Model/DashboardWebinarParticipants200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWebinarParticipantsQOS()`

```php
dashboardWebinarParticipantsQOS($webinar_id, $type, $page_size, $next_page_token): \Zoom\Api\Model\QOSParticipantList
```

List webinar participant QoS

Use this API to return a list of webinar participants from live or past webinars and the quality of service they received during the webinar. The data returned indicates the connection quality for sending/receiving video, audio, and shared content.   **Note:**   This API may return empty values for participants' `user_name`, `ip_address`, `location`, and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).  * Displays data for any users who are **not** part of the host's account (external users) unless they meet certain conditions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details.   **Scopes:** `dashboard_webinars:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business, Education, or API Plan with Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.
$type = past; // string | The type of webinar to query:  * `past` — All past webinars.  * `live` - All live webinars.   This value defaults to `live`.
$page_size = 10; // int | The number of items returned per page.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardWebinarParticipantsQOS($webinar_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipantsQOS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |
 **type** | **string**| The type of webinar to query:  * &#x60;past&#x60; — All past webinars.  * &#x60;live&#x60; - All live webinars.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of items returned per page. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\QOSParticipantList**](../Model/QOSParticipantList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWebinarParticipantsQOSSummary()`

```php
dashboardWebinarParticipantsQOSSummary($webinar_id, $page_size, $next_page_token): object
```

List webinar participants QoS Summary

Use this API to return a list of webinar participants from live or past webinars and the quality of service they received during the webinar. The data returned indicates the connection quality for sending/receiving video, audio, and shared content.   **Note:**   This API may return empty values for participants' `user_name` and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).  * Displays data for any users who are **not** part of the host's account (external users) unless they meet certain conditions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details.   **Scopes:** `dashboard_webinars:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Business, Education, or API Plan with Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.
$page_size = 10; // int | The number of items returned per page.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardWebinarParticipantsQOSSummary($webinar_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipantsQOSSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |
 **page_size** | **int**| The number of items returned per page. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWebinars()`

```php
dashboardWebinars($from, $to, $type, $page_size, $next_page_token, $group_id): \Zoom\Api\Model\DashboardWebinars200Response
```

List webinars

List all the live or past webinars from a specified period of time. <br><br> **Scopes:** `dashboard_webinars:read:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Resource-intensive`<br> **Prerequisites:**<br> * Business, Education or API Plan with Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$type = past; // string | The type of webinar to query:  * `past` — All past webinars.  * `live` - All live webinars.   This value defaults to `live`.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$group_id = TaVA8QKik_1233; // string | The group ID. To get a group ID, use the [**List groups**](https://marketplace.zoom.us/docs/api-reference/zoom-api/groups/groups) API.    **Note:** The API response will only contain meetings where the host is a member of the queried group ID.

try {
    $result = $apiInstance->dashboardWebinars($from, $to, $type, $page_size, $next_page_token, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **type** | **string**| The type of webinar to query:  * &#x60;past&#x60; — All past webinars.  * &#x60;live&#x60; - All live webinars.   This value defaults to &#x60;live&#x60;. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **group_id** | **string**| The group ID. To get a group ID, use the [**List groups**](https://marketplace.zoom.us/docs/api-reference/zoom-api/groups/groups) API.    **Note:** The API response will only contain meetings where the host is a member of the queried group ID. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardWebinars200Response**](../Model/DashboardWebinars200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardZoomRoom()`

```php
dashboardZoomRoom($zoomroom_id, $from, $to, $page_size, $next_page_token): \Zoom\Api\Model\DashboardZoomRoom200Response
```

Get Zoom Rooms details

The Zoom Rooms dashboard metrics lets you know the type of configuration a Zoom room has and details on the meetings held in that room.   Use this API to retrieve information on a specific room.<br><br> **Scopes:** `dashboard_zr:read:admin`<br> <br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`**Prerequisites:**<br> * Business, Education or API Plan with Zoom Rooms set up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zoomroom_id = azGzXIVUTWOdEQB79aNHkA; // string | The Zoom room ID.
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardZoomRoom($zoomroom_id, $from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardZoomRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zoomroom_id** | **string**| The Zoom room ID. |
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\DashboardZoomRoom200Response**](../Model/DashboardZoomRoom200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardZoomRoomIssue()`

```php
dashboardZoomRoomIssue($from, $to): \Zoom\Api\Model\DashboardZoomRoomIssue200Response
```

Get top 25 issues of Zoom Rooms

Get top 25 issues of Zoom Rooms.<br> **Scopes:** `dashboard_zr:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>  **Prerequisites:**<br> * Business, Education or API Plan with Zoom Rooms set up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.

try {
    $result = $apiInstance->dashboardZoomRoomIssue($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardZoomRoomIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |

### Return type

[**\Zoom\Api\Model\DashboardZoomRoomIssue200Response**](../Model/DashboardZoomRoomIssue200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardZoomRooms()`

```php
dashboardZoomRooms($page_size, $page_number, $next_page_token): \Zoom\Api\Model\ZoomRoomList
```

List Zoom Rooms

List information on all Zoom Rooms in an account.<br><br> **Scopes:** `dashboard_zr:read:admin`   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Resource-intensive`<br>  **Prerequisites:**<br> * Business, Education or API Plan with Zoom Rooms set up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | The page number of the current page in the returned records.
$next_page_token = LkbB9n92siRxgYkffZ8KhApZCQMZpNrN0d2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardZoomRooms($page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardZoomRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| The page number of the current page in the returned records. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\ZoomRoomList**](../Model/ZoomRoomList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientVersions()`

```php
getClientVersions(): \Zoom\Api\Model\GetClientVersions200Response
```

List the client versions

Use this API to list all the client versions and its count.    **Scopes:** `dashboard:read:admin,dashboard_home:read:admin,zms:dashboard:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`    **Prerequisites:**  * A Business or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getClientVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->getClientVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\GetClientVersions200Response**](../Model/GetClientVersions200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMeetingSatisfaction()`

```php
listMeetingSatisfaction($from, $to): \Zoom\Api\Model\ListMeetingSatisfaction200Response
```

List client meeting satisfaction

If the [End of Meeting Feedback Survey](https://support.zoom.us/hc/en-us/articles/115005855266) option is enabled, attendees will be prompted with a survey window where they can tap either the **Thumbs Up** or **Thumbs Down** button that indicates their Zoom meeting experience. With this API, you can get information on the attendees' meeting satisfaction. Specify a monthly date range for the query using the from and to query parameters. The month should fall within the last six months.  To get information on the survey results with negative experiences (indicated by **Thumbs Down**), use the [**Get Zoom meetings client feedback**](/docs/api-reference/zoom-api/methods#operation/dashboardClientFeedbackDetail) API.<br> **Scopes:** `dashboard:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | The start date for the query in “yyyy-mm-dd” format.
$to = Sat Jan 29 19:00:00 EST 2022; // \DateTime | The end date for the query in “yyyy-mm-dd” format.

try {
    $result = $apiInstance->listMeetingSatisfaction($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->listMeetingSatisfaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| The start date for the query in “yyyy-mm-dd” format. | [optional]
 **to** | **\DateTime**| The end date for the query in “yyyy-mm-dd” format. | [optional]

### Return type

[**\Zoom\Api\Model\ListMeetingSatisfaction200Response**](../Model/ListMeetingSatisfaction200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `participantFeedback()`

```php
participantFeedback($meeting_id, $type, $next_page_token, $page_size): \Zoom\Api\Model\ParticipantFeedback200Response
```

Get post meeting feedback

When a meeting ends, each attendee will be prompted to share their meeting experience by clicking either thumbs up or thumbs down. Use this API to retrieve the feedback submitted for a specific meeting. Note that this API only works for meetings scheduled after December 20, 2020.  **Prerequisites:** * [Feedback to Zoom](https://support.zoom.us/hc/en-us/articles/115005838023) setting must be enabled by the participant prior to the meeting. * The user making the API request must be enrolled in a Business or a higher plan.  <br> **Scope:** `dashboard_meetings:read:admin`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \Zoom\Api\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$type = past; // string | Specify a value to get the response for the corresponding meeting type. The value of this field can be one of the following:<br> <br>`past` - Meeting that already occurred in the specified date range.<br>`pastOne` - Past meetings that were attended by only one user. <br>`live` - Live meetings.<br><br>  If you do not provide this field, the default value will be `live` and thus, the API will only query responses for live meetings.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$page_size = 30; // int | The number of records returned within a single API call.

try {
    $result = $apiInstance->participantFeedback($meeting_id, $type, $next_page_token, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->participantFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **type** | **string**| Specify a value to get the response for the corresponding meeting type. The value of this field can be one of the following:&lt;br&gt; &lt;br&gt;&#x60;past&#x60; - Meeting that already occurred in the specified date range.&lt;br&gt;&#x60;pastOne&#x60; - Past meetings that were attended by only one user. &lt;br&gt;&#x60;live&#x60; - Live meetings.&lt;br&gt;&lt;br&gt;  If you do not provide this field, the default value will be &#x60;live&#x60; and thus, the API will only query responses for live meetings. | [optional] [default to &#39;live&#39;]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]

### Return type

[**\Zoom\Api\Model\ParticipantFeedback200Response**](../Model/ParticipantFeedback200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `participantWebinarFeedback()`

```php
participantWebinarFeedback($webinar_id, $type, $page_size, $next_page_token): \Zoom\Api\Model\ParticipantWebinarFeedback200Response
```

Get post webinar feedback

When a Webinar ends, each attendee will be prompted to share their Webinar experience by clicking either thumbs up or thumbs down. Use this API to retrieve the feedback submitted for a specific webinar. Note that this API only works for meetings scheduled after December 20, 2020.  **Prerequisites:** * [Feedback to Zoom](https://support.zoom.us/hc/en-us/articles/115005838023) setting must be enabled by the participant prior to the meeting. * The user making the API request must be enrolled in a Business or a higher plan.   <br> **Scope:** `dashboard_webinars:read:admin`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.
$type = past; // string | Specify a value to get the response for the corresponding meeting type. The value of this field can be one of the following:<br> <br>`past` - Meeting that already occurred in the specified date range.<br>`pastOne` - Past meetings that were attended by only one user. <br>`live` - Live meetings.<br><br>  If you do not provide this field, the default value will be `live` and thus, the API will only query responses for live meetings.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->participantWebinarFeedback($webinar_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->participantWebinarFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |
 **type** | **string**| Specify a value to get the response for the corresponding meeting type. The value of this field can be one of the following:&lt;br&gt; &lt;br&gt;&#x60;past&#x60; - Meeting that already occurred in the specified date range.&lt;br&gt;&#x60;pastOne&#x60; - Past meetings that were attended by only one user. &lt;br&gt;&#x60;live&#x60; - Live meetings.&lt;br&gt;&lt;br&gt;  If you do not provide this field, the default value will be &#x60;live&#x60; and thus, the API will only query responses for live meetings. | [optional] [default to &#39;live&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\ParticipantWebinarFeedback200Response**](../Model/ParticipantWebinarFeedback200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
