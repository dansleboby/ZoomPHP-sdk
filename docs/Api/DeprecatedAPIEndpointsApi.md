# Swagger\Client\DeprecatedAPIEndpointsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listPastMeetingFiles**](DeprecatedAPIEndpointsApi.md#listPastMeetingFiles) | **GET** /past_meetings/{meetingId}/files | List Past Meeting Files


# **listPastMeetingFiles**
> \Swagger\Client\Model\InlineResponse20084 listPastMeetingFiles($meeting_id)

List Past Meeting Files

**Note: This API has been deprecated and is no longer supported due to GCM encryption updates for security purposes.** To learn about saving the in-meeting chat files via Zoom Client, refer to the [Saving in-meeting chat](https://support.zoom.us/hc/en-us/articles/115004792763-Saving-in-meeting-chat) guide.  List files sent via in-meeting chat during a meeting. The in-meeting files are deleted after 24 hours of the meeting completion time.  <br><br> **Scope:** `meeting:read`, `meeting:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeprecatedAPIEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 789; // int | The meeting ID in **long** format. The data type of this field is \"long\"(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits.

try {
    $result = $apiInstance->listPastMeetingFiles($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedAPIEndpointsApi->listPastMeetingFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID in **long** format. The data type of this field is \&quot;long\&quot;(represented as int64 in JSON).  While storing it in your database, store it as a **long** data type and **not as an integer**, as the Meeting IDs can be longer than 10 digits. |

### Return type

[**\Swagger\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

