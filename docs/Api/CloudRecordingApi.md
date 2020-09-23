# Zoom\Api\CloudRecordingApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountCloudRecording**](CloudRecordingApi.md#getAccountCloudRecording) | **GET** /accounts/{accountId}/recordings | List Recordings of an Account
[**meetingRecordingRegistrantCreate**](CloudRecordingApi.md#meetingRecordingRegistrantCreate) | **POST** /meetings/{meetingId}/recordings/registrants | Create a Recording Registrant
[**meetingRecordingRegistrantStatus**](CloudRecordingApi.md#meetingRecordingRegistrantStatus) | **PUT** /meetings/{meetingId}/recordings/registrants/status | Update Recording Registrant&#39;s Status
[**meetingRecordingRegistrants**](CloudRecordingApi.md#meetingRecordingRegistrants) | **GET** /meetings/{meetingId}/recordings/registrants | List Recording Registrants
[**recordingDelete**](CloudRecordingApi.md#recordingDelete) | **DELETE** /meetings/{meetingId}/recordings | Delete Meeting Recordings
[**recordingDeleteOne**](CloudRecordingApi.md#recordingDeleteOne) | **DELETE** /meetings/{meetingId}/recordings/{recordingId} | Delete a Meeting Recording File
[**recordingGet**](CloudRecordingApi.md#recordingGet) | **GET** /meetings/{meetingId}/recordings | Get Meeting Recordings
[**recordingRegistrantQuestionUpdate**](CloudRecordingApi.md#recordingRegistrantQuestionUpdate) | **PATCH** /meetings/{meetingId}/recordings/registrants/questions | Update Registration Questions
[**recordingRegistrantsQuestionsGet**](CloudRecordingApi.md#recordingRegistrantsQuestionsGet) | **GET** /meetings/{meetingId}/recordings/registrants/questions | Get Registration Questions
[**recordingSettingUpdate**](CloudRecordingApi.md#recordingSettingUpdate) | **GET** /meetings/{meetingId}/recordings/settings | Get Meeting Recording Settings
[**recordingSettingsUpdate**](CloudRecordingApi.md#recordingSettingsUpdate) | **PATCH** /meetings/{meetingId}/recordings/settings | Update Meeting Recording Settings
[**recordingStatusUpdate**](CloudRecordingApi.md#recordingStatusUpdate) | **PUT** /meetings/{meetingId}/recordings/status | Recover Meeting Recordings
[**recordingStatusUpdateOne**](CloudRecordingApi.md#recordingStatusUpdateOne) | **PUT** /meetings/{meetingId}/recordings/{recordingId}/status | Recover a Single Recording
[**recordingsList**](CloudRecordingApi.md#recordingsList) | **GET** /users/{userId}/recordings | List All Recordings


# **getAccountCloudRecording**
> \Zoom\Api\Model\InlineResponse20073 getAccountCloudRecording($account_id, $page_size, $next_page_token, $from, $to)

List Recordings of an Account

List [Cloud Recordings](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording) available on an Account.  > To access a password protected cloud recording, add an \"access_token\" parameter to the download URL and provide [JWT](https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-jwt-app) as the value of the \"access_token\". <br> **Prerequisites**:<br> * A Pro or a higher paid plan with Cloud Recording option enabled.<br> **Scopes**: `recording:read:admin` or `account:read:admin`  If the scope `recording:read:admin` is used, the Account ID of the Account must be provided in the `accountId` path parameter to list recordings that belong to the Account. This scope only works for Sub Accounts.   To list recordings of a Master Account, the scope must be `account:read:admin` and the value of `accountId` should be `me`.<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | Unique identifier of the account.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the monthly range for which you would like to retrieve recordings. The maximum range can be a month. If no value is provided for this field, the default will be current date. For example, if you make the API request on June 30, 2020, without providing the “from” and “to” parameters, by default the value of 'from' field will be “2020-06-30” and the value of the 'to' field will be “2020-07-01”.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the monthly range for which you would like to retrieve recordings. The maximum range can be a month.

try {
    $result = $apiInstance->getAccountCloudRecording($account_id, $page_size, $next_page_token, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->getAccountCloudRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique identifier of the account. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **from** | **\DateTime**| The start date for the monthly range for which you would like to retrieve recordings. The maximum range can be a month. If no value is provided for this field, the default will be current date. For example, if you make the API request on June 30, 2020, without providing the “from” and “to” parameters, by default the value of &#39;from&#39; field will be “2020-06-30” and the value of the &#39;to&#39; field will be “2020-07-01”. | [optional]
 **to** | **\DateTime**| The end date for the monthly range for which you would like to retrieve recordings. The maximum range can be a month. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20073**](../Model/InlineResponse20073.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRecordingRegistrantCreate**
> \Zoom\Api\Model\InlineResponse20114 meetingRecordingRegistrantCreate($meeting_id, $body)

Create a Recording Registrant

Cloud Recordings of past Zoom Meetings can be made [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings). Users should be [registered](https://marketplace.zoom.us/docs/api-reference/zoom-api/cloud-recording/meetingrecordingregistrantcreate) to view these recordings.  Use this API to register a user to gain access to **On-demand Cloud Recordings** of a past meeting.<br> **Scopes:** `recording:write:admin`, `recording:write`.<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->meetingRecordingRegistrantCreate($meeting_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->meetingRecordingRegistrantCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**object**](../Model/.md)|  |

### Return type

[**\Zoom\Api\Model\InlineResponse20114**](../Model/InlineResponse20114.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRecordingRegistrantStatus**
> meetingRecordingRegistrantStatus($meeting_id, $body)

Update Recording Registrant's Status

A registrant can either be approved or denied from viewing the [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings) recording.  Use this API to update a registrant's status.  **Scopes:** `recording:write:admin`, `recording:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$body = new \Zoom\Api\Model\Body28(); // \Zoom\Api\Model\Body28 | 

try {
    $apiInstance->meetingRecordingRegistrantStatus($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->meetingRecordingRegistrantStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **body** | [**\Zoom\Api\Model\Body28**](../Model/Body28.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRecordingRegistrants**
> \Zoom\Api\Model\RegistrationList1 meetingRecordingRegistrants($meeting_id, $status, $page_size, $page_number, $next_page_token)

List Recording Registrants

Cloud Recordings of past Zoom Meetings can be made [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings). Users should be [registered](https://marketplace.zoom.us/docs/api-reference/zoom-api/cloud-recording/meetingrecordingregistrantcreate) to view these recordings.  Use this API to list registrants of **On-demand Cloud Recordings** of a past meeting.<br> **Scopes:** `recording:read:admin`, `recording:read`.<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.
$status = "approved"; // string | The registrant status:<br>`pending` - Registrant's status is pending.<br>`approved` - Registrant's status is approved.<br>`denied` - Registrant's status is denied.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \"next_page_token\" for pagination instead of this field.  The page number of the current page in the returned records.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->meetingRecordingRegistrants($meeting_id, $status, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->meetingRecordingRegistrants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |
 **status** | **string**| The registrant status:&lt;br&gt;&#x60;pending&#x60; - Registrant&#39;s status is pending.&lt;br&gt;&#x60;approved&#x60; - Registrant&#39;s status is approved.&lt;br&gt;&#x60;denied&#x60; - Registrant&#39;s status is denied. | [optional] [default to approved]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \&quot;next_page_token\&quot; for pagination instead of this field.  The page number of the current page in the returned records. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\RegistrationList1**](../Model/RegistrationList1.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingDelete**
> recordingDelete($meeting_id, $action)

Delete Meeting Recordings

Delete all recording files of a meeting.<br><br>  **Scopes:** `recording:write:admin` `recording:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**: * Cloud Recording should be enabled on the user's account.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$action = "trash"; // string | The recording delete actions:<br>`trash` - Move recording to trash.<br>`delete` - Delete recording permanently.

try {
    $apiInstance->recordingDelete($meeting_id, $action);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **action** | **string**| The recording delete actions:&lt;br&gt;&#x60;trash&#x60; - Move recording to trash.&lt;br&gt;&#x60;delete&#x60; - Delete recording permanently. | [optional] [default to trash]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingDeleteOne**
> recordingDeleteOne($meeting_id, $recording_id, $action)

Delete a Meeting Recording File

Delete a sprecific recording file from a meeting.<br><br> **Scopes**: `recording:write:admin` `recording:write`<br>  <br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$recording_id = "recording_id_example"; // string | The recording ID.
$action = "trash"; // string | The recording delete actions:<br>`trash` - Move recording to trash.<br>`delete` - Delete recording permanently.

try {
    $apiInstance->recordingDeleteOne($meeting_id, $recording_id, $action);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingDeleteOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **recording_id** | **string**| The recording ID. |
 **action** | **string**| The recording delete actions:&lt;br&gt;&#x60;trash&#x60; - Move recording to trash.&lt;br&gt;&#x60;delete&#x60; - Delete recording permanently. | [optional] [default to trash]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingGet**
> object recordingGet($meeting_id)

Get Meeting Recordings

Get all the [recordings](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording#h_7420acb5-1897-4061-87b4-5b76e99c03b4) from a meeting or a Webinar.<br><br> The recording files can be downloaded via the `download_url` property listed in the response.  > To access a password protected cloud recording, add an \"access_token\" parameter to the download URL and provide OAuth access token or [JWT](https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-jwt-app) as the value of the \"access_token\". <br>  **Scopes:** `recording:read:admin` `recording:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.

try {
    $result = $apiInstance->recordingGet($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingRegistrantQuestionUpdate**
> recordingRegistrantQuestionUpdate($meeting_id, $body)

Update Registration Questions

For [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings) meeting recordings, you can include fields with questions that will be shown to registrants when they register to view the recording.  Use this API to update registration questions that are to be answered by users while registering to view a recording.<br> **Scopes:** `recording:write:admin`, `recording:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$body = new \stdClass; // object | Recording Registrant Questions

try {
    $apiInstance->recordingRegistrantQuestionUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingRegistrantQuestionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **body** | [**object**](../Model/.md)| Recording Registrant Questions |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingRegistrantsQuestionsGet**
> \Zoom\Api\Model\RecordingRegistrantQuestions recordingRegistrantsQuestionsGet($meeting_id)

Get Registration Questions

For [on-demand](https://support.zoom.us/hc/en-us/articles/360000488283-On-demand-Recordings) meeting recordings, you can include fields with questions that will be shown to registrants when they register to view the recording.  Use this API to retrieve a list of questions that are displayed for users to complete when registering to view the recording of a specific meeting.<br> **Scopes:** `recording:read:admin`, `recording:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.

try {
    $result = $apiInstance->recordingRegistrantsQuestionsGet($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingRegistrantsQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |

### Return type

[**\Zoom\Api\Model\RecordingRegistrantQuestions**](../Model/RecordingRegistrantQuestions.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingSettingUpdate**
> \Zoom\Api\Model\RecordingSettings recordingSettingUpdate($meeting_id)

Get Meeting Recording Settings

Retrieve settings applied to a meeting's [Cloud Recording](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording).<br><br> **Scopes**: `recording:read:admin` `recording:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light` <br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.

try {
    $result = $apiInstance->recordingSettingUpdate($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingSettingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |

### Return type

[**\Zoom\Api\Model\RecordingSettings**](../Model/RecordingSettings.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingSettingsUpdate**
> recordingSettingsUpdate($meeting_id, $body)

Update Meeting Recording Settings

Update settings applied to a meeting's [Cloud Recording](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording)<br><br> **Scopes**: `recording:write:admin` `recording:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light` <br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$body = new \Zoom\Api\Model\RecordingSettings1(); // \Zoom\Api\Model\RecordingSettings1 | Meeting recording Settings

try {
    $apiInstance->recordingSettingsUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **body** | [**\Zoom\Api\Model\RecordingSettings1**](../Model/RecordingSettings1.md)| Meeting recording Settings |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingStatusUpdate**
> recordingStatusUpdate($meeting_id, $body)

Recover Meeting Recordings

Zoom allows users to recover recordings from trash for up to 30 days from the deletion date. Use this API to recover all deleted [Cloud Recordings](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording) of a specific meeting.<br><br> **Scopes**: `recording:write:admin` `recording:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites**:<br> * A Pro user with Cloud Recording enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$body = new \Zoom\Api\Model\Body26(); // \Zoom\Api\Model\Body26 | 

try {
    $apiInstance->recordingStatusUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **body** | [**\Zoom\Api\Model\Body26**](../Model/Body26.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingStatusUpdateOne**
> recordingStatusUpdateOne($meeting_id, $recording_id, $body)

Recover a Single Recording

Zoom allows users to recover recordings from trash for up to 30 days from the deletion date. Use this API to recover a single recording file from the meeting.<br> **Scopes:** `recording:write:admin` `recording:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \"/\" or contains \"//\" (example: \"/ajXp112QmuoKj4854875==\"), you must **double encode** the UUID before making an API request.
$recording_id = "recording_id_example"; // string | The recording ID.
$body = new \Zoom\Api\Model\Body27(); // \Zoom\Api\Model\Body27 | 

try {
    $apiInstance->recordingStatusUpdateOne($meeting_id, $recording_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingStatusUpdateOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| To get Cloud Recordings of a meeting, provide the meeting ID or meeting UUID. If the meeting ID is provided instead of UUID,the response will be for the latest meeting instance.   To get Cloud Recordings of a webinar, provide the webinar ID or the webinar UUID. If the webinar ID is provided instead of UUID,the response will be for the latest webinar instance.   If a UUID starts with \&quot;/\&quot; or contains \&quot;//\&quot; (example: \&quot;/ajXp112QmuoKj4854875&#x3D;&#x3D;\&quot;), you must **double encode** the UUID before making an API request. |
 **recording_id** | **string**| The recording ID. |
 **body** | [**\Zoom\Api\Model\Body27**](../Model/Body27.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingsList**
> \Zoom\Api\Model\RecordingList recordingsList($user_id, $page_size, $next_page_token, $mc, $trash, $from, $to, $trash_type)

List All Recordings

When a user records a meeting or a webinar by choosing the **Record to the Cloud** option, the video, audio, and chat text are recorded in the Zoom cloud.   Use this API to list all [Cloud recordings](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-Recording) of a user.<br> > To access a user's password protected cloud recording, add an \"access_token\" parameter to the download URL and provide either the [JWT](https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-jwt-app) or the user's OAuth access token as the value of the \"access_token\" parameter.  <br>  **Scopes:** `recording:read:admin` `recording:read`  <br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisites:**  * Pro or a higher plan. * Cloud Recording must be enabled on the user's account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$mc = "false"; // string | Query Metadata of Recording if an On-Premise Meeting Connector was used for the meeting.
$trash = false; // bool | Query trash. `true`: List recordings from trash.<br> `false`: Do not list recordings from the trash.<br> The default value is `false`. If you set it to `true`, you can use the `trash_type` property to indicate the type of Cloud recording that you need to retrieve.
$from = new \DateTime("2013-10-20"); // \DateTime | The start date in 'yyyy-mm-dd' for the date range for which you would like to retrieve recordings. The maximum range can be a month. If no value is provided for this field, the default will be current date. For example, if you make the API request on June 30, 2020, without providing the “from” and “to” parameters, by default the value of 'from' field will be “2020-06-30” and the value of the 'to' field will be “2020-07-01”.   **Note**: The \"trash\" files cannot be filtered by date range and thus, the \"from\" and \"to\" fields should not be used for trash files.
$to = new \DateTime("2013-10-20"); // \DateTime | End date in 'yyyy-mm-dd' format.
$trash_type = "meeting_recordings"; // string | The type of Cloud recording that you would like to retrieve from the trash. The value can be one of the following:<br>     `meeting_recordings`: List all meeting recordings from the trash.<br>     `recording_file`: List all individual recording files from the trash.

try {
    $result = $apiInstance->recordingsList($user_id, $page_size, $next_page_token, $mc, $trash, $from, $to, $trash_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **mc** | **string**| Query Metadata of Recording if an On-Premise Meeting Connector was used for the meeting. | [optional] [default to false]
 **trash** | **bool**| Query trash. &#x60;true&#x60;: List recordings from trash.&lt;br&gt; &#x60;false&#x60;: Do not list recordings from the trash.&lt;br&gt; The default value is &#x60;false&#x60;. If you set it to &#x60;true&#x60;, you can use the &#x60;trash_type&#x60; property to indicate the type of Cloud recording that you need to retrieve. | [optional] [default to false]
 **from** | **\DateTime**| The start date in &#39;yyyy-mm-dd&#39; for the date range for which you would like to retrieve recordings. The maximum range can be a month. If no value is provided for this field, the default will be current date. For example, if you make the API request on June 30, 2020, without providing the “from” and “to” parameters, by default the value of &#39;from&#39; field will be “2020-06-30” and the value of the &#39;to&#39; field will be “2020-07-01”.   **Note**: The \&quot;trash\&quot; files cannot be filtered by date range and thus, the \&quot;from\&quot; and \&quot;to\&quot; fields should not be used for trash files. | [optional]
 **to** | **\DateTime**| End date in &#39;yyyy-mm-dd&#39; format. | [optional]
 **trash_type** | **string**| The type of Cloud recording that you would like to retrieve from the trash. The value can be one of the following:&lt;br&gt;     &#x60;meeting_recordings&#x60;: List all meeting recordings from the trash.&lt;br&gt;     &#x60;recording_file&#x60;: List all individual recording files from the trash. | [optional] [default to meeting_recordings]

### Return type

[**\Zoom\Api\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

