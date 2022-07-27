# OpenAPI\Client\ReportsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBillingInvoicesReports()**](ReportsApi.md#getBillingInvoicesReports) | **GET** /report/billing/invoices | Get billing invoice reports
[**getBillingReport()**](ReportsApi.md#getBillingReport) | **GET** /report/billing | Get billing reports
[**reportChatMessages()**](ReportsApi.md#reportChatMessages) | **GET** /report/chat/sessions/{sessionId} | Get chat messages reports
[**reportChatSessions()**](ReportsApi.md#reportChatSessions) | **GET** /report/chat/sessions | Get chat sessions reports
[**reportCloudRecording()**](ReportsApi.md#reportCloudRecording) | **GET** /report/cloud_recording | Get cloud recording usage report
[**reportDaily()**](ReportsApi.md#reportDaily) | **GET** /report/daily | Get daily usage report
[**reportMeetingDetails()**](ReportsApi.md#reportMeetingDetails) | **GET** /report/meetings/{meetingId} | Get meeting detail reports
[**reportMeetingParticipants()**](ReportsApi.md#reportMeetingParticipants) | **GET** /report/meetings/{meetingId}/participants | Get meeting participant reports
[**reportMeetingPolls()**](ReportsApi.md#reportMeetingPolls) | **GET** /report/meetings/{meetingId}/polls | Get meeting poll reports
[**reportMeetings()**](ReportsApi.md#reportMeetings) | **GET** /report/users/{userId}/meetings | Get meeting reports
[**reportOperationLogs()**](ReportsApi.md#reportOperationLogs) | **GET** /report/operationlogs | Get operation logs report
[**reportSignInSignOutActivities()**](ReportsApi.md#reportSignInSignOutActivities) | **GET** /report/activities | Get sign In / sign out activity report
[**reportTelephone()**](ReportsApi.md#reportTelephone) | **GET** /report/telephone | Get telephone reports
[**reportUpcomingEvents()**](ReportsApi.md#reportUpcomingEvents) | **GET** /report/upcoming_events | Get upcoming events report
[**reportUsers()**](ReportsApi.md#reportUsers) | **GET** /report/users | Get active/inactive host reports
[**reportWebinarDetails()**](ReportsApi.md#reportWebinarDetails) | **GET** /report/webinars/{webinarId} | Get webinar detail reports
[**reportWebinarParticipants()**](ReportsApi.md#reportWebinarParticipants) | **GET** /report/webinars/{webinarId}/participants | Get webinar participant reports
[**reportWebinarPolls()**](ReportsApi.md#reportWebinarPolls) | **GET** /report/webinars/{webinarId}/polls | Get webinar poll reports
[**reportWebinarQA()**](ReportsApi.md#reportWebinarQA) | **GET** /report/webinars/{webinarId}/qa | Get webinar Q&amp;A report


## `getBillingInvoicesReports()`

```php
getBillingInvoicesReports($billing_id): \OpenAPI\Client\Model\GetBillingInvoicesReports200Response
```

Get billing invoice reports

Get department billing invoices reports for a specific billing period. Provide the `billing_id` of the billing period for which you would like to retrieve the invoices for. This ID can be retrieved from **Get Billing Reports** API.   **Prerequisites:**<br> * Pro or a higher account with Department Billing option enabled. Contact the Zoom Support team to enable this feature.  **Scopes:** `report:read:admin`, `report:master`     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_id = indfhgfhfho; // string | Unique Identifier of the Billing Report. Retrieve this ID from the response of **Get Billing Reports** API request.

try {
    $result = $apiInstance->getBillingInvoicesReports($billing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getBillingInvoicesReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_id** | **string**| Unique Identifier of the Billing Report. Retrieve this ID from the response of **Get Billing Reports** API request. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetBillingInvoicesReports200Response**](../Model/GetBillingInvoicesReports200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingReport()`

```php
getBillingReport(): \OpenAPI\Client\Model\GetBillingReport200Response
```

Get billing reports

Get department billing reports of a Zoom account.  **Prerequisites:**<br> * Pro or a higher account with Department Billing option enabled. Contact Zoom Support team for details.  **Scopes:** `report:read:admin`, `report:master`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBillingReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getBillingReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetBillingReport200Response**](../Model/GetBillingReport200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportChatMessages()`

```php
reportChatMessages($session_id, $from, $to, $next_page_token, $page_size, $include_fields, $include_bot_message): \OpenAPI\Client\Model\ReportChatMessages200Response
```

Get chat messages reports

Use this API to get Zoom Chat message reports for a specified period of time. The monthly date range must be within the last six months.  **Scopes:** `report_chat:read:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  **Prerequisites:**  * A Pro or higher plan  * Report chat permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = c38230acb7f009282c1b0d367a08102d65d12629bbcca58dfe2168bd335f5849; // string | Chat session ID.
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$page_size = 30; // int | The number of records returned within a single API call.
$include_fields = edited_messages; // string | Return all edited and deleted messages. The API only returns this value if the `include_fields` query parameter contains the `edited_messages` and/or the `deleted_messages` values.  To include both edited and deleted messages, comma-separate both values.
$include_bot_message = true; // bool | Whether to return the bot message. If false, the bot_message will not be returned in the response body.

try {
    $result = $apiInstance->reportChatMessages($session_id, $from, $to, $next_page_token, $page_size, $include_fields, $include_bot_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportChatMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| Chat session ID. |
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **include_fields** | **string**| Return all edited and deleted messages. The API only returns this value if the &#x60;include_fields&#x60; query parameter contains the &#x60;edited_messages&#x60; and/or the &#x60;deleted_messages&#x60; values.  To include both edited and deleted messages, comma-separate both values. | [optional]
 **include_bot_message** | **bool**| Whether to return the bot message. If false, the bot_message will not be returned in the response body. | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\ReportChatMessages200Response**](../Model/ReportChatMessages200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportChatSessions()`

```php
reportChatSessions($from, $to, $page_size, $next_page_token): \OpenAPI\Client\Model\ReportChatSessions200Response
```

Get chat sessions reports

Use this API to get Zoom Chat session reports for a specified period of time. The monthly date range **must** be within the last six months.  **Scopes:** `report_chat:read:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`  **Prerequisites:**  * A Pro or higher plan  * Report chat permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
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
    $result = $apiInstance->reportChatSessions($from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportChatSessions: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ReportChatSessions200Response**](../Model/ReportChatSessions200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportCloudRecording()`

```php
reportCloudRecording($from, $to): \OpenAPI\Client\Model\ReportCloudRecording200Response
```

Get cloud recording usage report

Retrieve cloud recording usage report for a specified period. You can only get cloud recording reports that is one day earlier than the current date and for the most recent period of 6 months. The date gap between from and to dates should be smaller or equal to 30 days. <br> **Prerequisites**<br> * Pro or higher plan.<br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.

try {
    $result = $apiInstance->reportCloudRecording($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportCloudRecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |

### Return type

[**\OpenAPI\Client\Model\ReportCloudRecording200Response**](../Model/ReportCloudRecording200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportDaily()`

```php
reportDaily($year, $month): \OpenAPI\Client\Model\ReportDaily200Response
```

Get daily usage report

Retrieve daily report to access the account-wide usage of Zoom services for each day in a given month. It lists the number of new users, meetings, participants, and meeting minutes.<br> **Prerequisites**<br> * Pro or higher plan.<br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 2022; // int | Year for this report
$month = 3; // int | Month for this report

try {
    $result = $apiInstance->reportDaily($year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportDaily: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Year for this report | [optional]
 **month** | **int**| Month for this report | [optional]

### Return type

[**\OpenAPI\Client\Model\ReportDaily200Response**](../Model/ReportDaily200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportMeetingDetails()`

```php
reportMeetingDetails($meeting_id): \OpenAPI\Client\Model\ReportMeetingDetails200Response
```

Get meeting detail reports

Get a detailed report for a past meeting. <br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Pro or a higher plan.<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \OpenAPI\Client\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.

try {
    $result = $apiInstance->reportMeetingDetails($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportMeetingDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\ReportMeetingDetails200Response**](../Model/ReportMeetingDetails200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportMeetingParticipants()`

```php
reportMeetingParticipants($meeting_id, $page_size, $next_page_token, $include_fields): \OpenAPI\Client\Model\ReportMeetingParticipants200Response
```

Get meeting participant reports

Use this API to return a report of a past meeting with two or more participants, including the host. To return a report for past meeting with only **one** participant, use the [**List meeting participants**](/docs/api-reference/zoom-api/ma#operation/dashboardMeetingParticipants) API.   **Note:**   This API may return empty values for participants' `user_name`, `ip_address`, `location`, and `email` responses when the account calling this API:  * Does **not** have a signed HIPAA business associate agreement (BAA).  * Is a [**legacy** HIPAA BAA account](https://marketplace.zoom.us/docs/api-reference/other-references/legacy-business-associate-agreements).   **Scopes:** `report:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Pro or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \OpenAPI\Client\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$include_fields = registrant_id; // string | Provide `registrant_id` as the value for this field if you would like to see the registrant ID attribute in the response of this API call. A registrant ID is a unique identifier of a [meeting registrant](/docs/api-reference/zoom-api/methods#operation/meetingRegistrants).

try {
    $result = $apiInstance->reportMeetingParticipants($meeting_id, $page_size, $next_page_token, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportMeetingParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **include_fields** | **string**| Provide &#x60;registrant_id&#x60; as the value for this field if you would like to see the registrant ID attribute in the response of this API call. A registrant ID is a unique identifier of a [meeting registrant](/docs/api-reference/zoom-api/methods#operation/meetingRegistrants). | [optional]

### Return type

[**\OpenAPI\Client\Model\ReportMeetingParticipants200Response**](../Model/ReportMeetingParticipants200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportMeetingPolls()`

```php
reportMeetingPolls($meeting_id): \OpenAPI\Client\Model\ReportMeetingPolls200Response
```

Get meeting poll reports

Use this API to get a report of [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meetings) results for a past meeting.    **Scopes:** `report:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Pro or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = new \OpenAPI\Client\Model\ListPastMeetingPollsMeetingIdParameter(); // ListPastMeetingPollsMeetingIdParameter | The meeting's ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the meeting UUID before making an API request.

try {
    $result = $apiInstance->reportMeetingPolls($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportMeetingPolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | [**ListPastMeetingPollsMeetingIdParameter**](../Model/.md)| The meeting&#39;s ID or universally unique ID (UUID).  * If you provide a meeting ID, the API will return a response for the latest meeting instance.  * If you provide a meeting UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the meeting UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\ReportMeetingPolls200Response**](../Model/ReportMeetingPolls200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportMeetings()`

```php
reportMeetings($user_id, $from, $to, $page_size, $next_page_token, $type): \OpenAPI\Client\Model\ReportMeetings200Response
```

Get meeting reports

Retrieve [report](https://support.zoom.us/hc/en-us/articles/216378603-Meeting-Reporting) on past meetings and webinars for a specified time period. The time range for the report is limited to a month and the month must fall within the past six months.  Meetings and webinars are returned only if they have two or more unique participants.  <br><br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Pro or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$type = past; // string | The meeting type to query for:  * `past` — All past meetings.  * `pastOne` — A single past user meeting.  * `pastJoined` — All past meetings the account's users hosted or joined.

try {
    $result = $apiInstance->reportMeetings($user_id, $from, $to, $page_size, $next_page_token, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **type** | **string**| The meeting type to query for:  * &#x60;past&#x60; — All past meetings.  * &#x60;pastOne&#x60; — A single past user meeting.  * &#x60;pastJoined&#x60; — All past meetings the account&#39;s users hosted or joined. | [optional] [default to &#39;past&#39;]

### Return type

[**\OpenAPI\Client\Model\ReportMeetings200Response**](../Model/ReportMeetings200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportOperationLogs()`

```php
reportOperationLogs($from, $to, $page_size, $next_page_token, $category_type): \OpenAPI\Client\Model\ReportOperationLogs200Response
```

Get operation logs report

The [Operations Logs](https://support.zoom.us/hc/en-us/articles/360032748331-Operation-Logs) report allows you to audit admin and user activity, such as adding a new user, changing account settings, and deleting recordings.<br> Use this API to retrieve operation logs report for a specified period of time.<br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Pro or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$category_type = user; // string | **Optional**<br> Filter your response by a category type to see reports for a specific category. The value for this field can be one of the following:<br> `all`<br>`user`<br>`user_settings`<br>`account`<br>`billing`<br>`im`<br>`recording`<br>`phone_contacts`<br>`webinar`<br>`sub_account`<br>`role`<br>`zoom_rooms`

try {
    $result = $apiInstance->reportOperationLogs($from, $to, $page_size, $next_page_token, $category_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportOperationLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **category_type** | **string**| **Optional**&lt;br&gt; Filter your response by a category type to see reports for a specific category. The value for this field can be one of the following:&lt;br&gt; &#x60;all&#x60;&lt;br&gt;&#x60;user&#x60;&lt;br&gt;&#x60;user_settings&#x60;&lt;br&gt;&#x60;account&#x60;&lt;br&gt;&#x60;billing&#x60;&lt;br&gt;&#x60;im&#x60;&lt;br&gt;&#x60;recording&#x60;&lt;br&gt;&#x60;phone_contacts&#x60;&lt;br&gt;&#x60;webinar&#x60;&lt;br&gt;&#x60;sub_account&#x60;&lt;br&gt;&#x60;role&#x60;&lt;br&gt;&#x60;zoom_rooms&#x60; | [optional]

### Return type

[**\OpenAPI\Client\Model\ReportOperationLogs200Response**](../Model/ReportOperationLogs200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportSignInSignOutActivities()`

```php
reportSignInSignOutActivities($from, $to, $page_size, $next_page_token): \OpenAPI\Client\Model\ReportSignInSignOutActivities200Response
```

Get sign In / sign out activity report

Retrieve a list of sign in / sign out activity logs [report](https://support.zoom.us/hc/en-us/articles/201363213-Getting-Started-with-Reports) of users under a Zoom account.<br> **Prerequisites**<br> * Pro or higher plan.<br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Sat Aug 31 20:00:00 EDT 2019; // \DateTime | Start date for which you would like to view the activity logs report. Using the `from` and `to` parameters, specify a monthly date range for the report as the API only provides one month worth of data in one request. The specified date range should fall within the last six months.
$to = Thu Sep 19 20:00:00 EDT 2019; // \DateTime | End date up to which you would like to view the activity logs report.
$page_size = 30; // int | The number of records to be returned within a single API call
$next_page_token = b43YBRLJFg3V4vsSpxvGdKIGtNbxn9h9If2; // string | Next page token is used to paginate through large result sets

try {
    $result = $apiInstance->reportSignInSignOutActivities($from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportSignInSignOutActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date for which you would like to view the activity logs report. Using the &#x60;from&#x60; and &#x60;to&#x60; parameters, specify a monthly date range for the report as the API only provides one month worth of data in one request. The specified date range should fall within the last six months. | [optional]
 **to** | **\DateTime**| End date up to which you would like to view the activity logs report. | [optional]
 **page_size** | **int**| The number of records to be returned within a single API call | [optional]
 **next_page_token** | **string**| Next page token is used to paginate through large result sets | [optional]

### Return type

[**\OpenAPI\Client\Model\ReportSignInSignOutActivities200Response**](../Model/ReportSignInSignOutActivities200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportTelephone()`

```php
reportTelephone($from, $to, $type, $query_date_type, $page_size, $page_number, $next_page_token): \OpenAPI\Client\Model\ReportTelephone200Response
```

Get telephone reports

The [telephone report](https://support.zoom.us/hc/en-us/articles/206514816-Telephone-reports) allows you to view who dialed into meetings via phone (Audio Conferencing or SIP Connected Audio) and which number they dialed into and other details. Use this API to get telephone report for a specified period of time.  **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>**Prerequisites:**<br> * Pro or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$type = 33; // string | Audio types:<br>`1` - Toll-free Call-in & Call-out.<br>`2` - Toll <br> `3` - SIP Connected Audio
$query_date_type = start_time; // string | The type of date to query:  * `start_time` — Query by call start time.  * `end_time` — Query by call end time.  * `meeting_start_time` — Query by meeting start time.  * `meeting_end_time` — Query by meeting end time.   This value defaults to `start_time`.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | The page number of the current page in the returned records. This field is **not** available if the `query_date_type` parameter is the `meeting_start_time` or `meeting_end_time` value.   This field is deprecated. Use the `next_page_token` query parameter for pagination.
$next_page_token = b43YBRLJFg3V4vsSpxvGdKIGtNbxn9h9If2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->reportTelephone($from, $to, $type, $query_date_type, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportTelephone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **type** | **string**| Audio types:&lt;br&gt;&#x60;1&#x60; - Toll-free Call-in &amp; Call-out.&lt;br&gt;&#x60;2&#x60; - Toll &lt;br&gt; &#x60;3&#x60; - SIP Connected Audio | [optional] [default to &#39;1&#39;]
 **query_date_type** | **string**| The type of date to query:  * &#x60;start_time&#x60; — Query by call start time.  * &#x60;end_time&#x60; — Query by call end time.  * &#x60;meeting_start_time&#x60; — Query by meeting start time.  * &#x60;meeting_end_time&#x60; — Query by meeting end time.   This value defaults to &#x60;start_time&#x60;. | [optional] [default to &#39;start_time&#39;]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| The page number of the current page in the returned records. This field is **not** available if the &#x60;query_date_type&#x60; parameter is the &#x60;meeting_start_time&#x60; or &#x60;meeting_end_time&#x60; value.   This field is deprecated. Use the &#x60;next_page_token&#x60; query parameter for pagination. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\OpenAPI\Client\Model\ReportTelephone200Response**](../Model/ReportTelephone200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUpcomingEvents()`

```php
reportUpcomingEvents($from, $to, $page_size, $next_page_token, $type): \OpenAPI\Client\Model\ReportUpcomingEvents200Response
```

Get upcoming events report

Use this API to list upcoming meeting and/or webinar events within a specified period of time. The report's time range is limited to one month and must also be within the past six months.  **Scopes:** `report:read:admin`<br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`  **Prerequisites:**  * A Pro or higher plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$type = meeting; // string | The type of event to query:  * `meeting` — A meeting event.  * `webinar` — A webinar event.  * `all` — Both meeting and webinar events.  This value defaults to `all`.

try {
    $result = $apiInstance->reportUpcomingEvents($from, $to, $page_size, $next_page_token, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportUpcomingEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **type** | **string**| The type of event to query:  * &#x60;meeting&#x60; — A meeting event.  * &#x60;webinar&#x60; — A webinar event.  * &#x60;all&#x60; — Both meeting and webinar events.  This value defaults to &#x60;all&#x60;. | [optional] [default to &#39;all&#39;]

### Return type

[**\OpenAPI\Client\Model\ReportUpcomingEvents200Response**](../Model/ReportUpcomingEvents200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUsers()`

```php
reportUsers($from, $to, $type, $page_size, $page_number, $next_page_token): \OpenAPI\Client\Model\ReportUsers200Response
```

Get active/inactive host reports

A user is considered to be an active host during the month specified in the \"from\" and \"to\" range, if the user has hosted at least one meeting during this period. If the user didn't host any meetings during this period, the user is considered to be inactive.<br>The Active Hosts report displays a list of meetings, participants, and meeting minutes for a specific time range, up to one month. The month should fall within the last six months.<br>The Inactive Hosts report pulls a list of users who were not active during a specific period of time.  Use this API to retrieve an active or inactive host report for a specified period of time. The time range for the report is limited to a month and the month should fall under the past six months. <br>You can specify the type of report and date range using the query parameters.<br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Pro or higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Fri Dec 31 19:00:00 EST 2021; // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = Thu Jan 27 19:00:00 EST 2022; // \DateTime | End date.
$type = active; // string | Active or inactive hosts.<br>`active` - Active hosts. <br>`inactive` - Inactive hosts.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | The page number of the current page in the returned records.
$next_page_token = b43YBRLJFg3V4vsSpxvGdKIGtNbxn9h9If2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->reportUsers($from, $to, $type, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **type** | **string**| Active or inactive hosts.&lt;br&gt;&#x60;active&#x60; - Active hosts. &lt;br&gt;&#x60;inactive&#x60; - Inactive hosts. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| The page number of the current page in the returned records. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\OpenAPI\Client\Model\ReportUsers200Response**](../Model/ReportUsers200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportWebinarDetails()`

```php
reportWebinarDetails($webinar_id): \OpenAPI\Client\Model\ReportWebinarDetails200Response
```

Get webinar detail reports

Retrieve a [report](https://support.zoom.us/hc/en-us/articles/201393719-Webinar-Reporting) containing past webinar details.  <br><br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Pro or higher plan with Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.

try {
    $result = $apiInstance->reportWebinarDetails($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportWebinarDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\ReportWebinarDetails200Response**](../Model/ReportWebinarDetails200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportWebinarParticipants()`

```php
reportWebinarParticipants($webinar_id, $page_size, $next_page_token, $include_fields): \OpenAPI\Client\Model\ReportWebinarParticipants200Response
```

Get webinar participant reports

Use this API to get a detailed report on each webinar attendee. You can get webinar participant reports for the last 6 months.    **Scopes:** `report:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`   **Prerequisites:**  * A Pro or a higher plan with Webinar add-on enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$include_fields = registrant_id; // string | The additional query parameters to include:  * `registrant_id` — Include the registrant's ID in the API response. The registrant ID is the webinar participant's unique ID.

try {
    $result = $apiInstance->reportWebinarParticipants($webinar_id, $page_size, $next_page_token, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportWebinarParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **include_fields** | **string**| The additional query parameters to include:  * &#x60;registrant_id&#x60; — Include the registrant&#39;s ID in the API response. The registrant ID is the webinar participant&#39;s unique ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\ReportWebinarParticipants200Response**](../Model/ReportWebinarParticipants200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportWebinarPolls()`

```php
reportWebinarPolls($webinar_id): \OpenAPI\Client\Model\ReportWebinarPolls200Response
```

Get webinar poll reports

Retrieve a report on past [webinar polls](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars).<br><br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Pro or a higher plan with Webinar add-on enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.

try {
    $result = $apiInstance->reportWebinarPolls($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportWebinarPolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\ReportWebinarPolls200Response**](../Model/ReportWebinarPolls200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportWebinarQA()`

```php
reportWebinarQA($webinar_id): \OpenAPI\Client\Model\ReportWebinarQA200Response
```

Get webinar Q&A report

The Question & Answer (Q&A) feature for webinars allows attendees to ask questions during the webinar and for the panelists, co-hosts and host to answer their questions.  Use this API to retrieve a report on question and answers from past webinars. <br><br> **Scopes:** `report:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * Pro or a higher plan with Webinar add-on enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.

try {
    $result = $apiInstance->reportWebinarQA($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportWebinarQA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\ReportWebinarQA200Response**](../Model/ReportWebinarQA200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
