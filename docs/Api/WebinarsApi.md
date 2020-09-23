# Zoom\Api\WebinarsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTrackingSources**](WebinarsApi.md#getTrackingSources) | **GET** /webinars/{webinarId}/tracking_sources | Get Webinar Tracking Sources
[**listPastWebinarFiles**](WebinarsApi.md#listPastWebinarFiles) | **GET** /past_webinars/{webinarId}/files | List Past Webinar Files
[**listPastWebinarPollResults**](WebinarsApi.md#listPastWebinarPollResults) | **GET** /past_webinars/{webinarId}/polls | List Past Webinar Poll Results
[**listPastWebinarQA**](WebinarsApi.md#listPastWebinarQA) | **GET** /past_webinars/{webinarId}/qa | List Q&amp;A of Past Webinar
[**listWebinarTemplates**](WebinarsApi.md#listWebinarTemplates) | **GET** /users/{userId}/webinar_templates | List Webinar Templates
[**pastWebinars**](WebinarsApi.md#pastWebinars) | **GET** /past_webinars/{webinarId}/instances | List Past Webinar Instances
[**webinar**](WebinarsApi.md#webinar) | **GET** /webinars/{webinarId} | Get a Webinar
[**webinarAbsentees**](WebinarsApi.md#webinarAbsentees) | **GET** /past_webinars/{WebinarUUID}/absentees | Get Webinar Absentees
[**webinarCreate**](WebinarsApi.md#webinarCreate) | **POST** /users/{userId}/webinars | Create a Webinar
[**webinarDelete**](WebinarsApi.md#webinarDelete) | **DELETE** /webinars/{webinarId} | Delete a Webinar
[**webinarPanelistCreate**](WebinarsApi.md#webinarPanelistCreate) | **POST** /webinars/{webinarId}/panelists | Add Panelists
[**webinarPanelistDelete**](WebinarsApi.md#webinarPanelistDelete) | **DELETE** /webinars/{webinarId}/panelists/{panelistId} | Remove a Panelist
[**webinarPanelists**](WebinarsApi.md#webinarPanelists) | **GET** /webinars/{webinarId}/panelists | List Panelists
[**webinarPanelistsDelete**](WebinarsApi.md#webinarPanelistsDelete) | **DELETE** /webinars/{webinarId}/panelists | Remove Panelists
[**webinarPollCreate**](WebinarsApi.md#webinarPollCreate) | **POST** /webinars/{webinarId}/polls | Create a Webinar&#39;s Poll
[**webinarPollDelete**](WebinarsApi.md#webinarPollDelete) | **DELETE** /webinars/{webinarId}/polls/{pollId} | Delete a Webinar Poll
[**webinarPollGet**](WebinarsApi.md#webinarPollGet) | **GET** /webinars/{webinarId}/polls/{pollId} | Get a Webinar Poll
[**webinarPollUpdate**](WebinarsApi.md#webinarPollUpdate) | **PUT** /webinars/{webinarId}/polls/{pollId} | Update a Webinar Poll
[**webinarPolls**](WebinarsApi.md#webinarPolls) | **GET** /webinars/{webinarId}/polls | List a Webinar&#39;s Polls
[**webinarRegistrantCreate**](WebinarsApi.md#webinarRegistrantCreate) | **POST** /webinars/{webinarId}/registrants | Add a Webinar Registrant
[**webinarRegistrantGet**](WebinarsApi.md#webinarRegistrantGet) | **GET** /webinars/{webinarId}/registrants/{registrantId} | Get a Webinar Registrant
[**webinarRegistrantQuestionUpdate**](WebinarsApi.md#webinarRegistrantQuestionUpdate) | **PATCH** /webinars/{webinarId}/registrants/questions | Update Registration Questions
[**webinarRegistrantStatus**](WebinarsApi.md#webinarRegistrantStatus) | **PUT** /webinars/{webinarId}/registrants/status | Update Webinar Registrant Status
[**webinarRegistrants**](WebinarsApi.md#webinarRegistrants) | **GET** /webinars/{webinarId}/registrants | List Webinar Registrants
[**webinarRegistrantsQuestionsGet**](WebinarsApi.md#webinarRegistrantsQuestionsGet) | **GET** /webinars/{webinarId}/registrants/questions | List Registration Questions
[**webinarStatus**](WebinarsApi.md#webinarStatus) | **PUT** /webinars/{webinarId}/status | Update Webinar Status
[**webinarUpdate**](WebinarsApi.md#webinarUpdate) | **PATCH** /webinars/{webinarId} | Update a Webinar
[**webinars**](WebinarsApi.md#webinars) | **GET** /users/{userId}/webinars | List Webinars


# **getTrackingSources**
> \Zoom\Api\Model\InlineResponse20074 getTrackingSources($webinar_id)

Get Webinar Tracking Sources

[Webinar Registration Tracking Sources](https://support.zoom.us/hc/en-us/articles/360000315683-Webinar-Registration-Source-Tracking) allow you to see where your registrants are coming from if you share the webinar registration page in multiple platforms. You can then use the source tracking to see the number of registrants generated from each platform.<br> Use this API to list information on all the tracking sources of a Webinar.<br> **Scopes:** `webinar:read:admin`, `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisites**:<br> * [Webinar license](https://zoom.us/webinar). * Registration must be required for the Webinar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).

try {
    $result = $apiInstance->getTrackingSources($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->getTrackingSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |

### Return type

[**\Zoom\Api\Model\InlineResponse20074**](../Model/InlineResponse20074.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPastWebinarFiles**
> \Zoom\Api\Model\InlineResponse20084 listPastWebinarFiles($webinar_id)

List Past Webinar Files

List files sent via in-meeting chat during a meeting. The in-meeting files are deleted after 24 hours of the meeting completion time.  <br><br> **Scope:** `webinar:read`, `webinar:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | 

try {
    $result = $apiInstance->listPastWebinarFiles($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->listPastWebinarFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**|  |

### Return type

[**\Zoom\Api\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPastWebinarPollResults**
> \Zoom\Api\Model\InlineResponse20085 listPastWebinarPollResults($webinar_id)

List Past Webinar Poll Results

The polling feature for webinar allows you to create single choice or multiple choice polling questions for your webinars. Use this API to retrieve the results for Webinar Polls of a specific Webinar.  **Prerequisites:**<br> * [Webinar license](https://zoom.us/webinar)<br> **Scopes**: `webinar:read:admin`, `webinar:read`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The Webinar ID or Webinar UUID. If the webinar ID is passed, it will take the last webinar instance.

try {
    $result = $apiInstance->listPastWebinarPollResults($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->listPastWebinarPollResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The Webinar ID or Webinar UUID. If the webinar ID is passed, it will take the last webinar instance. |

### Return type

[**\Zoom\Api\Model\InlineResponse20085**](../Model/InlineResponse20085.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPastWebinarQA**
> \Zoom\Api\Model\InlineResponse20086 listPastWebinarQA($webinar_id)

List Q&A of Past Webinar

The [Question & Answer (Q&A)](https://support.zoom.us/hc/en-us/articles/203686015-Getting-Started-with-Question-Answer) feature for Webinars allows attendees to ask questions during the Webinar and for the panelists, co-hosts and host to answer their questions.<br> Use this API to list Q&A of a specific Webinar.  **Prerequisites:**<br> * [Webinar license](https://zoom.us/webinar)<br> **Scopes**: `webinar:read:admin`, `webinar:read`<br>  <br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The Webinar ID or Webinar UUID. If the webinar ID is passed, it will take the last webinar instance.

try {
    $result = $apiInstance->listPastWebinarQA($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->listPastWebinarQA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The Webinar ID or Webinar UUID. If the webinar ID is passed, it will take the last webinar instance. |

### Return type

[**\Zoom\Api\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWebinarTemplates**
> \Zoom\Api\Model\InlineResponse200105 listWebinarTemplates($user_id)

List Webinar Templates

When you schedule a webinar, you can save the settings for that webinar as a template for scheduling future webinars. <br><br>Use this API to list a user's existing [Webinar templates'](https://support.zoom.us/hc/en-us/articles/115001079746-Webinar-Templates) information.  **Prerequisites:** * Pro or a higher account with Webinar plan enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->listWebinarTemplates($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->listWebinarTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

[**\Zoom\Api\Model\InlineResponse200105**](../Model/InlineResponse200105.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pastWebinars**
> object pastWebinars($webinar_id)

List Past Webinar Instances

List past webinar instances.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).

try {
    $result = $apiInstance->pastWebinars($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->pastWebinars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinar**
> \Zoom\Api\Model\InlineResponse20054 webinar($webinar_id, $occurrence_id, $show_previous_occurrences)

Get a Webinar

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees.<br>Use this API to get details of a scheduled webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>**Prerequisites:** * Pro or higher plan with a Webinar Add-on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$occurrence_id = "occurrence_id_example"; // string | Unique Identifier that identifies an occurrence of a recurring webinar. [Recurring webinars](https://support.zoom.us/hc/en-us/articles/216354763-How-to-Schedule-A-Recurring-Webinar) can have a maximum of 50 occurrences. When you create a recurring Webinar using [Create a Webinar API](https://marketplace.zoom.us/docs/api-reference/zoom-api/webinars/webinarcreate), you can retrieve the Occurrence ID from the response of the API call.
$show_previous_occurrences = true; // bool | Set the value of this field to `true` if you would like to view Webinar details of all previous occurrences of a recurring Webinar.

try {
    $result = $apiInstance->webinar($webinar_id, $occurrence_id, $show_previous_occurrences);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **occurrence_id** | **string**| Unique Identifier that identifies an occurrence of a recurring webinar. [Recurring webinars](https://support.zoom.us/hc/en-us/articles/216354763-How-to-Schedule-A-Recurring-Webinar) can have a maximum of 50 occurrences. When you create a recurring Webinar using [Create a Webinar API](https://marketplace.zoom.us/docs/api-reference/zoom-api/webinars/webinarcreate), you can retrieve the Occurrence ID from the response of the API call. | [optional]
 **show_previous_occurrences** | **bool**| Set the value of this field to &#x60;true&#x60; if you would like to view Webinar details of all previous occurrences of a recurring Webinar. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarAbsentees**
> \Zoom\Api\Model\RegistrationList webinarAbsentees($webinar_uuid, $occurrence_id, $page_size, $next_page_token)

Get Webinar Absentees

List absentees of a webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_uuid = "webinar_uuid_example"; // string | The Webinar UUID. Each Webinar instance will generate its own Webinar UUID (i.e., after a Webinar ends, a new UUID will be generated for the next instance of the Webinar). Please double encode your UUID when using it for API calls if the UUID begins with a '/' or contains '//' in it.
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->webinarAbsentees($webinar_uuid, $occurrence_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarAbsentees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_uuid** | **string**| The Webinar UUID. Each Webinar instance will generate its own Webinar UUID (i.e., after a Webinar ends, a new UUID will be generated for the next instance of the Webinar). Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39; or contains &#39;//&#39; in it. |
 **occurrence_id** | **string**| The meeting occurrence ID. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\RegistrationList**](../Model/RegistrationList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarCreate**
> \Zoom\Api\Model\InlineResponse20119 webinarCreate($user_id, $body)

Create a Webinar

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees.<br>Use this API to schedule a Webinar for a user (host).<br><br>  **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:** * Pro or higher plan with a Webinar Add-on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->webinarCreate($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **body** | [**object**](../Model/.md)|  |

### Return type

[**\Zoom\Api\Model\InlineResponse20119**](../Model/InlineResponse20119.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarDelete**
> webinarDelete($webinar_id, $occurrence_id)

Delete a Webinar

Delete a Webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * Pro or higher plan with a Webinar Add-on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID.

try {
    $apiInstance->webinarDelete($webinar_id, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **occurrence_id** | **string**| The meeting occurrence ID. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPanelistCreate**
> webinarPanelistCreate($webinar_id, $body)

Add Panelists

Panelists in a Webinar can view and send video, screen share, annotate, etc and do much more compared to attendees in a webinar.<br>Use this API to [add panelists](https://support.zoom.us/hc/en-us/articles/115005657826-Inviting-Panelists-to-a-Webinar#h_7550d59e-23f5-4703-9e22-e76bded1ed70) to a scheduled webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>   **Prerequisites:** * Pro or a higher plan with [Webinar Add-on](https://zoom.us/webinar).<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$body = new \Zoom\Api\Model\Body38(); // \Zoom\Api\Model\Body38 | 

try {
    $apiInstance->webinarPanelistCreate($webinar_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **body** | [**\Zoom\Api\Model\Body38**](../Model/Body38.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPanelistDelete**
> webinarPanelistDelete($webinar_id, $panelist_id)

Remove a Panelist

[Remove](https://support.zoom.us/hc/en-us/articles/115005657826-Inviting-Panelists-to-a-Webinar#h_de31f237-a91c-4fb2-912b-ecfba8ec5ffb) a single panelist from a webinar.<br> You can retrieve the `panelistId` by calling **List Panelists API**.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>   **Prerequisites:**<br> * Pro or a higher plan with [Webinar Add-on](https://zoom.us/webinar).<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$panelist_id = 56; // int | The panelist ID or panelist email.

try {
    $apiInstance->webinarPanelistDelete($webinar_id, $panelist_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **panelist_id** | **int**| The panelist ID or panelist email. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPanelists**
> \Zoom\Api\Model\InlineResponse20055 webinarPanelists($webinar_id)

List Panelists

Panelists in a Webinar can view and send video, screen share, annotate, etc and do much more compared to attendees in a Webinar.   Use this API to list all the panelists of a Webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisites:**<br> * Pro or a higher plan with [Webinar Add-on](https://zoom.us/webinar).<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).

try {
    $result = $apiInstance->webinarPanelists($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |

### Return type

[**\Zoom\Api\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPanelistsDelete**
> webinarPanelistsDelete($webinar_id)

Remove Panelists

Remove all the panelists from a Webinar.<br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * Pro or a higher plan with [Webinar Add-on](https://zoom.us/webinar).<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).

try {
    $apiInstance->webinarPanelistsDelete($webinar_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPollCreate**
> \Zoom\Api\Model\InlineResponse20122 webinarPollCreate($webinar_id, $body)

Create a Webinar's Poll

Create a [poll](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars) for a webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$body = new \stdClass; // object | Webinar poll object

try {
    $result = $apiInstance->webinarPollCreate($webinar_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **body** | [**object**](../Model/.md)| Webinar poll object |

### Return type

[**\Zoom\Api\Model\InlineResponse20122**](../Model/InlineResponse20122.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPollDelete**
> webinarPollDelete($webinar_id, $poll_id)

Delete a Webinar Poll

Delete a webinar's [poll](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars).<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$poll_id = "poll_id_example"; // string | The poll ID

try {
    $apiInstance->webinarPollDelete($webinar_id, $poll_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **poll_id** | **string**| The poll ID |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPollGet**
> \Zoom\Api\Model\InlineResponse20122 webinarPollGet($webinar_id, $poll_id)

Get a Webinar Poll

Get a webinar's [poll](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars) details.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$poll_id = "poll_id_example"; // string | The poll ID

try {
    $result = $apiInstance->webinarPollGet($webinar_id, $poll_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **poll_id** | **string**| The poll ID |

### Return type

[**\Zoom\Api\Model\InlineResponse20122**](../Model/InlineResponse20122.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPollUpdate**
> webinarPollUpdate($webinar_id, $poll_id, $body)

Update a Webinar Poll

Update a webinar's [poll](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars).<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$poll_id = "poll_id_example"; // string | The poll ID
$body = new \stdClass; // object | Webinar Poll

try {
    $apiInstance->webinarPollUpdate($webinar_id, $poll_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **poll_id** | **string**| The poll ID |
 **body** | [**object**](../Model/.md)| Webinar Poll |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPolls**
> object webinarPolls($webinar_id)

List a Webinar's Polls

List all the [polls](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars) of a Webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).

try {
    $result = $apiInstance->webinarPolls($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPolls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarRegistrantCreate**
> \Zoom\Api\Model\InlineResponse20121 webinarRegistrantCreate($webinar_id, $body, $occurrence_ids)

Add a Webinar Registrant

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees. Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form before receiving the link to join the Webinar.<br>Use this API to create and submit the registration of a user for a webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:** * Pro or higher plan with a Webinar Add-on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$body = new \stdClass; // object | 
$occurrence_ids = "occurrence_ids_example"; // string | Occurrence ID. Get this value from the webinar get API. Multiple values separated by a comma.

try {
    $result = $apiInstance->webinarRegistrantCreate($webinar_id, $body, $occurrence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **body** | [**object**](../Model/.md)|  |
 **occurrence_ids** | **string**| Occurrence ID. Get this value from the webinar get API. Multiple values separated by a comma. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20121**](../Model/InlineResponse20121.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarRegistrantGet**
> \Zoom\Api\Model\WebianrRegistrant webinarRegistrantGet($webinar_id, $registrant_id, $occurrence_id)

Get a Webinar Registrant

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees. Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form before receiving the link to join the Webinar.<br>Use this API to get details on a specific user who has registered for the Webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * The account must have a Webinar plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$registrant_id = "registrant_id_example"; // string | The registrant ID.
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID.

try {
    $result = $apiInstance->webinarRegistrantGet($webinar_id, $registrant_id, $occurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **registrant_id** | **string**| The registrant ID. |
 **occurrence_id** | **string**| The meeting occurrence ID. | [optional]

### Return type

[**\Zoom\Api\Model\WebianrRegistrant**](../Model/WebianrRegistrant.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarRegistrantQuestionUpdate**
> webinarRegistrantQuestionUpdate($webinar_id, $body)

Update Registration Questions

Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form with fields and questions before they can receive the link to join the Webinar.<br>Use this API to update registration questions and fields of a scheduled Webinar that are to be answered by users while registering for a Webinar.<br><br> **Prerequisites:**<br>   * Pro or higher plan with a Webinar Add-on. * Registration option for Webinar should be set as required to use this API.  **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$body = new \stdClass; // object | Webinar Registrant Questions

try {
    $apiInstance->webinarRegistrantQuestionUpdate($webinar_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantQuestionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **body** | [**object**](../Model/.md)| Webinar Registrant Questions |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarRegistrantStatus**
> webinarRegistrantStatus($webinar_id, $body, $occurrence_id)

Update Webinar Registrant Status

Update a webinar registrant's status. Using this API, you can specify whether you want to approve a registration, deny a registration or cancel a previously approved registration.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$body = new \Zoom\Api\Model\Body39(); // \Zoom\Api\Model\Body39 | 
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID.

try {
    $apiInstance->webinarRegistrantStatus($webinar_id, $body, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **body** | [**\Zoom\Api\Model\Body39**](../Model/Body39.md)|  |
 **occurrence_id** | **string**| The meeting occurrence ID. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarRegistrants**
> \Zoom\Api\Model\RegistrationList webinarRegistrants($webinar_id, $occurrence_id, $status, $page_size, $page_number, $next_page_token)

List Webinar Registrants

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees. Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form before receiving the link to join the Webinar.<br> Use this API to list all the users that have registered for a webinar.<br><br> **Prerequisites:** * Pro or higher plan with a Webinar Add-on.<br> **Scopes:** `webinar:read:admin` `webinar:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID.
$status = "approved"; // string | The registrant status:<br>`pending` - Registrant's status is pending.<br>`approved` - Registrant's status is approved.<br>`denied` - Registrant's status is denied.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \"next_page_token\" for pagination instead of this field.  The page number of the current page in the returned records.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->webinarRegistrants($webinar_id, $occurrence_id, $status, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
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

# **webinarRegistrantsQuestionsGet**
> \Zoom\Api\Model\InlineResponse20056 webinarRegistrantsQuestionsGet($webinar_id)

List Registration Questions

Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form with fields and questions before they can receive the link to join the Webinar.<br>Use this API to list registration questions and fields that are to be answered by users while registering for a Webinar.<br> **Prerequisites:**<br>   * Pro or higher plan with a Webinar Add-on. **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).

try {
    $result = $apiInstance->webinarRegistrantsQuestionsGet($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantsQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |

### Return type

[**\Zoom\Api\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarStatus**
> webinarStatus($webinar_id, $body)

Update Webinar Status

Update a webinar's status. Use this API to end an ongoing webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * The account must hold a valid [Webinar plan](https://zoom.us/webinar).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$body = new \Zoom\Api\Model\Body37(); // \Zoom\Api\Model\Body37 | 

try {
    $apiInstance->webinarStatus($webinar_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **body** | [**\Zoom\Api\Model\Body37**](../Model/Body37.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarUpdate**
> webinarUpdate($webinar_id, $body, $occurrence_id)

Update a Webinar

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees.<br> Use this API to make updates to a scheduled Webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * Pro or higher plan with a Webinar Add-on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 789; // int | The webinar ID in \"**long**\" format(represented as int64 data type in JSON).
$body = new \stdClass; // object | Webinar.
$occurrence_id = "occurrence_id_example"; // string | Webinar occurrence id. Support change of agenda, start_time, duration, settings: {host_video, panelist_video, hd_video, watermark, auto_recording}

try {
    $apiInstance->webinarUpdate($webinar_id, $body, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON). |
 **body** | [**object**](../Model/.md)| Webinar. |
 **occurrence_id** | **string**| Webinar occurrence id. Support change of agenda, start_time, duration, settings: {host_video, panelist_video, hd_video, watermark, auto_recording} | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinars**
> \Zoom\Api\Model\UserList webinars($user_id, $page_size, $page_number)

List Webinars

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees.<br> Use this API to list all the webinars that are scheduled by or on-behalf a user (Webinar host).<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br> <br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` **Prerequisites:** * Pro or higher plan with a Webinar Add-on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \"next_page_token\" for pagination instead of this field.  The page number of the current page in the returned records.

try {
    $result = $apiInstance->webinars($user_id, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated** - This field has been deprecated and we will stop supporting it completely in a future release. Please use \&quot;next_page_token\&quot; for pagination instead of this field.  The page number of the current page in the returned records. | [optional] [default to 1]

### Return type

[**\Zoom\Api\Model\UserList**](../Model/UserList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

