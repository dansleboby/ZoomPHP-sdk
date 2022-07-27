# OpenAPI\Client\WebinarsApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBatchWebinarRegistrants()**](WebinarsApi.md#addBatchWebinarRegistrants) | **POST** /webinars/{webinarId}/batch_registrants | Perform batch registration
[**createWebinarBrandingNameTag()**](WebinarsApi.md#createWebinarBrandingNameTag) | **POST** /webinars/{webinarId}/branding/name_tags | Create a webinar&#39;s branding name tag
[**deleteWebinarBrandingNameTag()**](WebinarsApi.md#deleteWebinarBrandingNameTag) | **DELETE** /webinars/{webinarId}/branding/name_tags | Delete a webinar&#39;s branding name tag
[**deleteWebinarBrandingVB()**](WebinarsApi.md#deleteWebinarBrandingVB) | **DELETE** /webinars/{webinarId}/branding/virtual_backgrounds | Delete a webinar&#39;s branding Virtual Backgrounds
[**deleteWebinarBrandingWallpaper()**](WebinarsApi.md#deleteWebinarBrandingWallpaper) | **DELETE** /webinars/{webinarId}/branding/wallpaper | Delete a webinar&#39;s branding wallpaper
[**deleteWebinarChatMessageById()**](WebinarsApi.md#deleteWebinarChatMessageById) | **DELETE** /live_webinars/{webinarId}/chat/messages/{messageId} | Delete a live webinar message
[**deleteWebinarRegistrant()**](WebinarsApi.md#deleteWebinarRegistrant) | **DELETE** /webinars/{webinarId}/registrants/{registrantId} | Delete a webinar registrant
[**getTrackingSources()**](WebinarsApi.md#getTrackingSources) | **GET** /webinars/{webinarId}/tracking_sources | Get webinar tracking sources
[**getWebinarBranding()**](WebinarsApi.md#getWebinarBranding) | **GET** /webinars/{webinarId}/branding | Get webinar&#39;s session branding
[**getWebinarLiveStreamDetails()**](WebinarsApi.md#getWebinarLiveStreamDetails) | **GET** /webinars/{webinarId}/livestream | Get live stream details
[**listPastWebinarPollResults()**](WebinarsApi.md#listPastWebinarPollResults) | **GET** /past_webinars/{webinarId}/polls | List past webinar poll results
[**listPastWebinarQA()**](WebinarsApi.md#listPastWebinarQA) | **GET** /past_webinars/{webinarId}/qa | List Q&amp;A of past webinar
[**listWebinarParticipants()**](WebinarsApi.md#listWebinarParticipants) | **GET** /past_webinars/{webinarId}/participants | List webinar participants
[**listWebinarTemplates()**](WebinarsApi.md#listWebinarTemplates) | **GET** /users/{userId}/webinar_templates | List webinar templates
[**pastWebinars()**](WebinarsApi.md#pastWebinars) | **GET** /past_webinars/{webinarId}/instances | List past webinar instances
[**setWebinarBrandingVB()**](WebinarsApi.md#setWebinarBrandingVB) | **PATCH** /webinars/{webinarId}/branding/virtual_backgrounds | Set webinar&#39;s default branding Virtual Background
[**updateWebinarBrandingNameTag()**](WebinarsApi.md#updateWebinarBrandingNameTag) | **PATCH** /webinars/{webinarId}/branding/name_tags/{nameTagId} | Update a webinar&#39;s branding name tag
[**uploadWebinarBrandingVB()**](WebinarsApi.md#uploadWebinarBrandingVB) | **POST** /webinars/{webinarId}/branding/virtual_backgrounds | Upload a webinar&#39;s branding Virtual Background
[**uploadWebinarBrandingWallpaper()**](WebinarsApi.md#uploadWebinarBrandingWallpaper) | **POST** /webinars/{webinarId}/branding/wallpaper | Upload a webinar&#39;s branding wallpaper
[**webinar()**](WebinarsApi.md#webinar) | **GET** /webinars/{webinarId} | Get a webinar
[**webinarAbsentees()**](WebinarsApi.md#webinarAbsentees) | **GET** /past_webinars/{WebinarUUID}/absentees | Get webinar absentees
[**webinarCreate()**](WebinarsApi.md#webinarCreate) | **POST** /users/{userId}/webinars | Create a webinar
[**webinarDelete()**](WebinarsApi.md#webinarDelete) | **DELETE** /webinars/{webinarId} | Delete a webinar
[**webinarInviteLinksCreate()**](WebinarsApi.md#webinarInviteLinksCreate) | **POST** /webinars/{webinarId}/invite_links | Create webinar&#39;s invite links
[**webinarLiveStreamStatusUpdate()**](WebinarsApi.md#webinarLiveStreamStatusUpdate) | **PATCH** /webinars/{webinarId}/livestream/status | Update Live Stream Status
[**webinarLiveStreamUpdate()**](WebinarsApi.md#webinarLiveStreamUpdate) | **PATCH** /webinars/{webinarId}/livestream | Update a live stream
[**webinarLocalRecordingJoinToken()**](WebinarsApi.md#webinarLocalRecordingJoinToken) | **GET** /webinars/{webinarId}/jointoken/local_recording | Get a webinar&#39;s join token for local recording
[**webinarPanelistCreate()**](WebinarsApi.md#webinarPanelistCreate) | **POST** /webinars/{webinarId}/panelists | Add panelists
[**webinarPanelistDelete()**](WebinarsApi.md#webinarPanelistDelete) | **DELETE** /webinars/{webinarId}/panelists/{panelistId} | Remove a panelist
[**webinarPanelists()**](WebinarsApi.md#webinarPanelists) | **GET** /webinars/{webinarId}/panelists | List panelists
[**webinarPanelistsDelete()**](WebinarsApi.md#webinarPanelistsDelete) | **DELETE** /webinars/{webinarId}/panelists | Remove panelists
[**webinarPollCreate()**](WebinarsApi.md#webinarPollCreate) | **POST** /webinars/{webinarId}/polls | Create a webinar&#39;s poll
[**webinarPollDelete()**](WebinarsApi.md#webinarPollDelete) | **DELETE** /webinars/{webinarId}/polls/{pollId} | Delete a webinar poll
[**webinarPollGet()**](WebinarsApi.md#webinarPollGet) | **GET** /webinars/{webinarId}/polls/{pollId} | Get a webinar poll
[**webinarPollUpdate()**](WebinarsApi.md#webinarPollUpdate) | **PUT** /webinars/{webinarId}/polls/{pollId} | Update a webinar poll
[**webinarPolls()**](WebinarsApi.md#webinarPolls) | **GET** /webinars/{webinarId}/polls | List a webinar&#39;s polls
[**webinarRegistrantCreate()**](WebinarsApi.md#webinarRegistrantCreate) | **POST** /webinars/{webinarId}/registrants | Add a webinar registrant
[**webinarRegistrantGet()**](WebinarsApi.md#webinarRegistrantGet) | **GET** /webinars/{webinarId}/registrants/{registrantId} | Get a webinar registrant
[**webinarRegistrantQuestionUpdate()**](WebinarsApi.md#webinarRegistrantQuestionUpdate) | **PATCH** /webinars/{webinarId}/registrants/questions | Update registration questions
[**webinarRegistrantStatus()**](WebinarsApi.md#webinarRegistrantStatus) | **PUT** /webinars/{webinarId}/registrants/status | Update registrant&#39;s status
[**webinarRegistrants()**](WebinarsApi.md#webinarRegistrants) | **GET** /webinars/{webinarId}/registrants | List webinar registrants
[**webinarRegistrantsQuestionsGet()**](WebinarsApi.md#webinarRegistrantsQuestionsGet) | **GET** /webinars/{webinarId}/registrants/questions | List registration questions
[**webinarStatus()**](WebinarsApi.md#webinarStatus) | **PUT** /webinars/{webinarId}/status | Update webinar status
[**webinarSurveyDelete()**](WebinarsApi.md#webinarSurveyDelete) | **DELETE** /webinars/{webinarId}/survey | Delete a webinar survey
[**webinarSurveyGet()**](WebinarsApi.md#webinarSurveyGet) | **GET** /webinars/{webinarId}/survey | Get a webinar survey
[**webinarSurveyUpdate()**](WebinarsApi.md#webinarSurveyUpdate) | **PATCH** /webinars/{webinarId}/survey | Update a webinar survey
[**webinarToken()**](WebinarsApi.md#webinarToken) | **GET** /webinars/{webinarId}/token | Get webinar&#39;s token
[**webinarUpdate()**](WebinarsApi.md#webinarUpdate) | **PATCH** /webinars/{webinarId} | Update a webinar
[**webinars()**](WebinarsApi.md#webinars) | **GET** /users/{userId}/webinars | List webinars


## `addBatchWebinarRegistrants()`

```php
addBatchWebinarRegistrants($webinar_id, $add_batch_registrants_request): \OpenAPI\Client\Model\AddBatchWebinarRegistrants200Response
```

Perform batch registration

Use this API to register up to 30 registrants at once for a scheduled webinar that requires [registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-webinar-with-registration). <br>  **Prerequisites:**<br> * The webinar host must be a Licensed user. * The webinar should be of type `5`, i.e., it should be a scheduled webinar. Other types of webinars are not supported by this API.<br><br> **Scope:** `webinar:write`, `webinar:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 97871060099; // string | Unique identifier of the webinar.
$add_batch_registrants_request = new \OpenAPI\Client\Model\AddBatchRegistrantsRequest(); // \OpenAPI\Client\Model\AddBatchRegistrantsRequest

try {
    $result = $apiInstance->addBatchWebinarRegistrants($webinar_id, $add_batch_registrants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->addBatchWebinarRegistrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| Unique identifier of the webinar. |
 **add_batch_registrants_request** | [**\OpenAPI\Client\Model\AddBatchRegistrantsRequest**](../Model/AddBatchRegistrantsRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AddBatchWebinarRegistrants200Response**](../Model/AddBatchWebinarRegistrants200Response.md)

### Authorization

[Bearer](../../README.md#Bearer), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebinarBrandingNameTag()`

```php
createWebinarBrandingNameTag($webinar_id, $create_webinar_branding_name_tag_request): \OpenAPI\Client\Model\CreateWebinarBrandingNameTag201Response
```

Create a webinar's branding name tag

Use this API to create a webinar's [Session Branding](https://support.zoom.us/hc/en-us/articles/4836268732045-Using-Webinar-Session-Branding) name tag. There's a limit of 20 name tags per webinar. **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  *  The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$create_webinar_branding_name_tag_request = new \OpenAPI\Client\Model\CreateWebinarBrandingNameTagRequest(); // \OpenAPI\Client\Model\CreateWebinarBrandingNameTagRequest

try {
    $result = $apiInstance->createWebinarBrandingNameTag($webinar_id, $create_webinar_branding_name_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->createWebinarBrandingNameTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **create_webinar_branding_name_tag_request** | [**\OpenAPI\Client\Model\CreateWebinarBrandingNameTagRequest**](../Model/CreateWebinarBrandingNameTagRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\CreateWebinarBrandingNameTag201Response**](../Model/CreateWebinarBrandingNameTag201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebinarBrandingNameTag()`

```php
deleteWebinarBrandingNameTag($webinar_id, $name_tag_ids)
```

Delete a webinar's branding name tag

Use this API to delete a webinar's [Session Branding](https://support.zoom.us/hc/en-us/articles/4836268732045-Using-Webinar-Session-Branding) name tag.    **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$name_tag_ids = zazQjwDuQkS3Q2EprNd7jQ,AsfE0cx2TFSfqqKbE0BUZg; // string | A comma-separated list of the name tag IDs to delete.

try {
    $apiInstance->deleteWebinarBrandingNameTag($webinar_id, $name_tag_ids);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->deleteWebinarBrandingNameTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **name_tag_ids** | **string**| A comma-separated list of the name tag IDs to delete. | [optional]

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

## `deleteWebinarBrandingVB()`

```php
deleteWebinarBrandingVB($webinar_id, $ids)
```

Delete a webinar's branding Virtual Backgrounds

Use this API to delete a webinar's session branding [Virtual Background](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background).    **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$ids = zazQjwDuQkS3Q2EprNd7jQ,AsfE0cx2TFSfqqKbE0BUZg; // string | A comma-separated list of the Virtual Background file IDs to delete.

try {
    $apiInstance->deleteWebinarBrandingVB($webinar_id, $ids);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->deleteWebinarBrandingVB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **ids** | **string**| A comma-separated list of the Virtual Background file IDs to delete. | [optional]

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

## `deleteWebinarBrandingWallpaper()`

```php
deleteWebinarBrandingWallpaper($webinar_id)
```

Delete a webinar's branding wallpaper

Use this API to delete a webinar's session branding wallpaper file.    **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $apiInstance->deleteWebinarBrandingWallpaper($webinar_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->deleteWebinarBrandingWallpaper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

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

## `deleteWebinarChatMessageById()`

```php
deleteWebinarChatMessageById($webinar_id, $message_id)
```

Delete a live webinar message

Deletes a message in a live webinar based on ID.   **Scopes:** `webinar:write` `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$message_id = MS17MDQ5NjE4QjYtRjk4Ny00REEwLUFBQUItMTg3QTY0RjU2MzhFfQ==; // string | The live webinar chat message's unique identifier (UUID), in base64-encoded format.

try {
    $apiInstance->deleteWebinarChatMessageById($webinar_id, $message_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->deleteWebinarChatMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **message_id** | **string**| The live webinar chat message&#39;s unique identifier (UUID), in base64-encoded format. |

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

## `deleteWebinarRegistrant()`

```php
deleteWebinarRegistrant($webinar_id, $registrant_id, $occurrence_id)
```

Delete a webinar registrant

Delete a webinar registrant.<br><br> **Scopes**: `webinar:write:admin` `webinar:write`<br>  <br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 95204914252; // int | The webinar ID.
$registrant_id = 9tboDiHUQAeOnbmudzWa5g; // string | The registrant ID.
$occurrence_id = 1648538280000; // string | The webinar occurrence ID.

try {
    $apiInstance->deleteWebinarRegistrant($webinar_id, $registrant_id, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->deleteWebinarRegistrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID. |
 **registrant_id** | **string**| The registrant ID. |
 **occurrence_id** | **string**| The webinar occurrence ID. | [optional]

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

## `getTrackingSources()`

```php
getTrackingSources($webinar_id): \OpenAPI\Client\Model\GetTrackingSources200Response
```

Get webinar tracking sources

[Webinar Registration Tracking Sources](https://support.zoom.us/hc/en-us/articles/360000315683-Webinar-Registration-Source-Tracking) allow you to see where your registrants are coming from if you share the webinar registration page in multiple platforms. You can then use the source tracking to see the number of registrants generated from each platform.<br> Use this API to list information on all the tracking sources of a Webinar.<br> **Scopes:** `webinar:read:admin`, `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisites**:<br> * [Webinar license](https://zoom.us/webinar). * Registration must be required for the Webinar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $result = $apiInstance->getTrackingSources($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->getTrackingSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

### Return type

[**\OpenAPI\Client\Model\GetTrackingSources200Response**](../Model/GetTrackingSources200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebinarBranding()`

```php
getWebinarBranding($webinar_id): \OpenAPI\Client\Model\GetWebinarBranding200Response
```

Get webinar's session branding

Use this API to get the webinar's [Session Branding](https://support.zoom.us/hc/en-us/articles/4836268732045-Using-Webinar-Session-Branding) information. Session branding lets hosts visually customize a webinar by setting a webinar wallpaper that displays behind video tiles. Session branding also lets hosts set the Virtual Background for and apply name tags to hosts, alternative hosts, panelists, interpreters, and speakers.    **Scopes:** `webinar:read`, `webinar:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * A Pro or higher plan with the Webinar add-on.  * The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $result = $apiInstance->getWebinarBranding($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->getWebinarBranding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

### Return type

[**\OpenAPI\Client\Model\GetWebinarBranding200Response**](../Model/GetWebinarBranding200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebinarLiveStreamDetails()`

```php
getWebinarLiveStreamDetails($webinar_id): \OpenAPI\Client\Model\GetWebinarLiveStreamDetails200Response
```

Get live stream details

Zoom allows users to [live stream a webinar](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service) to a custom platform. Use this API to get a webinar's live stream configuration details such as Stream URL, Stream Key and Page URL.<br><br> **Prerequisites:**<br> * Pro or higher plan with a Webinar Add-on.<br> * Live streaming details must have been [configured](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service#h_01589a6f-a40a-4e18-a448-cb746e52ebc5) for the webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 95204914252; // string | The webinar's unique ID.

try {
    $result = $apiInstance->getWebinarLiveStreamDetails($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->getWebinarLiveStreamDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s unique ID. |

### Return type

[**\OpenAPI\Client\Model\GetWebinarLiveStreamDetails200Response**](../Model/GetWebinarLiveStreamDetails200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPastWebinarPollResults()`

```php
listPastWebinarPollResults($webinar_id): \OpenAPI\Client\Model\ListPastWebinarPollResults200Response
```

List past webinar poll results

The polling feature for webinar allows you to create single choice or multiple choice polling questions for your webinars. Use this API to retrieve the results for Webinar Polls of a specific Webinar.  **Prerequisites:**<br> * [Webinar license](https://zoom.us/webinar)<br> **Scopes**: `webinar:read:admin`, `webinar:read`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.

try {
    $result = $apiInstance->listPastWebinarPollResults($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->listPastWebinarPollResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\ListPastWebinarPollResults200Response**](../Model/ListPastWebinarPollResults200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPastWebinarQA()`

```php
listPastWebinarQA($webinar_id): \OpenAPI\Client\Model\ListPastWebinarQA200Response
```

List Q&A of past webinar

The [Question & Answer (Q&A)](https://support.zoom.us/hc/en-us/articles/203686015-Getting-Started-with-Question-Answer) feature for Webinars allows attendees to ask questions during the Webinar and for the panelists, co-hosts and host to answer their questions.<br> Use this API to list Q&A of a specific Webinar.  **Prerequisites:**<br> * [Webinar license](https://zoom.us/webinar)<br> **Scopes**: `webinar:read:admin`, `webinar:read`<br>  <br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = ABCDE12345; // string | The webinar's ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a `/` character or contains the `//` characters, you **must** double-encode the webinar UUID before making an API request.

try {
    $result = $apiInstance->listPastWebinarQA($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->listPastWebinarQA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID).  * If you provide a webinar ID, the API will return a response for the latest webinar instance.  * If you provide a webinar UUID that begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; characters, you **must** double-encode the webinar UUID before making an API request. |

### Return type

[**\OpenAPI\Client\Model\ListPastWebinarQA200Response**](../Model/ListPastWebinarQA200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebinarParticipants()`

```php
listWebinarParticipants($webinar_id, $page_size, $next_page_token): \OpenAPI\Client\Model\ListWebinarParticipants200Response
```

List webinar participants

Use this API to list all the participants who attended a webinar hosted in the past.   **Scopes:** `webinar:read:admin`, `webinar:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  * A Pro or higher plan with a Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 95204914252; // string | The webinar's ID. To get this value, use the [**List webinars**](/docs/api-reference/zoom-api/methods#operation/webinars) API.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listWebinarParticipants($webinar_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->listWebinarParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID. To get this value, use the [**List webinars**](/docs/api-reference/zoom-api/methods#operation/webinars) API. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\OpenAPI\Client\Model\ListWebinarParticipants200Response**](../Model/ListWebinarParticipants200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebinarTemplates()`

```php
listWebinarTemplates($user_id): \OpenAPI\Client\Model\ListWebinarTemplates200Response
```

List webinar templates

Use this API to list a user's [webinar templates](https://support.zoom.us/hc/en-us/articles/115001079746-Webinar-Templates). For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.   When you schedule a webinar, you can save the settings for that webinar as a template for scheduling future webinars.  To use a template when scheduling a webinar, use the `id` value in this API response in the `template_id` field of the [**Create a webinar**](/docs/api-reference/zoom-api/methods#operation/webinarCreate) API.   **Scopes:** `webinar:read`, `webinar:read:admin`   **Prerequisites:**  * A Pro or a higher account with the [Zoom Webinar plan](https://zoom.us/pricing/webinar).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = abcD3ojfdbjfg; // string | The user's ID. To get a user's ID, use the [**List users**](/docs/api-reference/zoom-api/ma#operation/users) API. For user-level apps, pass the `me` value instead of the user ID value.

try {
    $result = $apiInstance->listWebinarTemplates($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->listWebinarTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user&#39;s ID. To get a user&#39;s ID, use the [**List users**](/docs/api-reference/zoom-api/ma#operation/users) API. For user-level apps, pass the &#x60;me&#x60; value instead of the user ID value. |

### Return type

[**\OpenAPI\Client\Model\ListWebinarTemplates200Response**](../Model/ListWebinarTemplates200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pastWebinars()`

```php
pastWebinars($webinar_id): \OpenAPI\Client\Model\WebinarInstances
```

List past webinar instances

List past webinar instances.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $result = $apiInstance->pastWebinars($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->pastWebinars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

### Return type

[**\OpenAPI\Client\Model\WebinarInstances**](../Model/WebinarInstances.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWebinarBrandingVB()`

```php
setWebinarBrandingVB($webinar_id, $id, $set_default_for_all_panelists)
```

Set webinar's default branding Virtual Background

Use this API to set a webinar's default session branding [Virtual Background](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background).    **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$id = zazQjwDuQkS3Q2EprNd7jQ; // string | The Virtual Background file ID to update.
$set_default_for_all_panelists = true; // bool | Whether to set the Virtual Background file as the new default for all panelists. This includes panelists not currently assigned a default Virtual Background.

try {
    $apiInstance->setWebinarBrandingVB($webinar_id, $id, $set_default_for_all_panelists);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->setWebinarBrandingVB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **id** | **string**| The Virtual Background file ID to update. | [optional]
 **set_default_for_all_panelists** | **bool**| Whether to set the Virtual Background file as the new default for all panelists. This includes panelists not currently assigned a default Virtual Background. | [optional]

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

## `updateWebinarBrandingNameTag()`

```php
updateWebinarBrandingNameTag($webinar_id, $name_tag_id, $update_webinar_branding_name_tag_request)
```

Update a webinar's branding name tag

Use this API to update a webinar's [Session Branding](https://support.zoom.us/hc/en-us/articles/4836268732045-Using-Webinar-Session-Branding) name tag. **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  *  The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$name_tag_id = J0sFXN2PSOCGrqTqLRwgAQ; // string | The name tag's ID.
$update_webinar_branding_name_tag_request = new \OpenAPI\Client\Model\UpdateWebinarBrandingNameTagRequest(); // \OpenAPI\Client\Model\UpdateWebinarBrandingNameTagRequest

try {
    $apiInstance->updateWebinarBrandingNameTag($webinar_id, $name_tag_id, $update_webinar_branding_name_tag_request);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->updateWebinarBrandingNameTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **name_tag_id** | **string**| The name tag&#39;s ID. |
 **update_webinar_branding_name_tag_request** | [**\OpenAPI\Client\Model\UpdateWebinarBrandingNameTagRequest**](../Model/UpdateWebinarBrandingNameTagRequest.md)|  |

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

## `uploadWebinarBrandingVB()`

```php
uploadWebinarBrandingVB($webinar_id, $file, $default, $set_default_for_all_panelists): \OpenAPI\Client\Model\UploadWebinarBrandingVB201Response
```

Upload a webinar's branding Virtual Background

Use this API to upload a webinar's session branding [Virtual Background](https://support.zoom.us/hc/en-us/articles/210707503-Virtual-Background). Hosts and panelists can select and use these Virtual Backgrounds during the webinar. Branding Virtual Background files have the following restrictions:  * A webinar cannot exceed more than 10 Virtual Background files.  * You can only upload image files that are in JPG/JPEG, GIF or PNG format.  * The Virtual Background file size cannot exceed 15 megabytes (MB).    **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  *  The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$file = "/path/to/file.txt"; // \SplFileObject | The Virtual Background's file path, in binary format.
$default = false; // bool | Whether set the file as the default Virtual Background file.
$set_default_for_all_panelists = true; // bool | Whether to set the Virtual Background file as the new default for all panelists. This includes panelists not currently assigned a default Virtual Background.

try {
    $result = $apiInstance->uploadWebinarBrandingVB($webinar_id, $file, $default, $set_default_for_all_panelists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->uploadWebinarBrandingVB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **file** | **\SplFileObject****\SplFileObject**| The Virtual Background&#39;s file path, in binary format. |
 **default** | **bool**| Whether set the file as the default Virtual Background file. | [optional] [default to false]
 **set_default_for_all_panelists** | **bool**| Whether to set the Virtual Background file as the new default for all panelists. This includes panelists not currently assigned a default Virtual Background. | [optional] [default to true]

### Return type

[**\OpenAPI\Client\Model\UploadWebinarBrandingVB201Response**](../Model/UploadWebinarBrandingVB201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadWebinarBrandingWallpaper()`

```php
uploadWebinarBrandingWallpaper($webinar_id, $file): \OpenAPI\Client\Model\UploadWebinarBrandingWallpaper201Response
```

Upload a webinar's branding wallpaper

Use this API to upload a webinar's session branding wallpaper file. Webinar branding wallpaper files have the following requirements:  * A webinar can only have one wallpaper file.  * You can only upload image files that are in JPG/JPEG, GIF, or PNG format.  * Image files must be 16:9 ratio. The recommended image size is 1920 x 1080 pixels (px).  * The wallpaper file size cannot exceed 15 megabytes (MB).    **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   **Prerequisites:**  *  The **Webinar Session Branding** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$file = "/path/to/file.txt"; // \SplFileObject | The wallpaper's file path, in binary format.

try {
    $result = $apiInstance->uploadWebinarBrandingWallpaper($webinar_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->uploadWebinarBrandingWallpaper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **file** | **\SplFileObject****\SplFileObject**| The wallpaper&#39;s file path, in binary format. |

### Return type

[**\OpenAPI\Client\Model\UploadWebinarBrandingWallpaper201Response**](../Model/UploadWebinarBrandingWallpaper201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinar()`

```php
webinar($webinar_id, $occurrence_id, $show_previous_occurrences): \OpenAPI\Client\Model\Webinar200Response
```

Get a webinar

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees.<br>Use this API to get details of a scheduled webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>**Prerequisites:** * Pro or higher plan with a Webinar Add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 95204914252; // string | The webinar's ID or universally unique ID (UUID).
$occurrence_id = 1648538280000; // string | Unique Identifier that identifies an occurrence of a recurring webinar. [Recurring webinars](https://support.zoom.us/hc/en-us/articles/216354763-How-to-Schedule-A-Recurring-Webinar) can have a maximum of 50 occurrences. When you create a recurring Webinar using [**Create a webinar**](/docs/api-reference/zoom-api/methods#operation/webinarCreate) API, you can retrieve the Occurrence ID from the response of the API call.
$show_previous_occurrences = true; // bool | Set the value of this field to `true` if you would like to view Webinar details of all previous occurrences of a recurring Webinar.

try {
    $result = $apiInstance->webinar($webinar_id, $occurrence_id, $show_previous_occurrences);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar&#39;s ID or universally unique ID (UUID). |
 **occurrence_id** | **string**| Unique Identifier that identifies an occurrence of a recurring webinar. [Recurring webinars](https://support.zoom.us/hc/en-us/articles/216354763-How-to-Schedule-A-Recurring-Webinar) can have a maximum of 50 occurrences. When you create a recurring Webinar using [**Create a webinar**](/docs/api-reference/zoom-api/methods#operation/webinarCreate) API, you can retrieve the Occurrence ID from the response of the API call. | [optional]
 **show_previous_occurrences** | **bool**| Set the value of this field to &#x60;true&#x60; if you would like to view Webinar details of all previous occurrences of a recurring Webinar. | [optional]

### Return type

[**\OpenAPI\Client\Model\Webinar200Response**](../Model/Webinar200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarAbsentees()`

```php
webinarAbsentees($webinar_uuid, $occurrence_id, $page_size, $next_page_token): \OpenAPI\Client\Model\WebinarRegistrantList
```

Get webinar absentees

List absentees of a webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_uuid = Bznyg8KZTdCVbQxvS/oZ7w==; // string | The Webinar UUID. Each Webinar instance will generate its own Webinar UUID (i.e., after a Webinar ends, a new UUID will be generated for the next instance of the Webinar). Please double encode your UUID when using it for API calls if the UUID begins with a '/' or contains '//' in it.
$occurrence_id = 1648194360000; // string | The meeting or webinar occurrence ID.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->webinarAbsentees($webinar_uuid, $occurrence_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarAbsentees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_uuid** | **string**| The Webinar UUID. Each Webinar instance will generate its own Webinar UUID (i.e., after a Webinar ends, a new UUID will be generated for the next instance of the Webinar). Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39; or contains &#39;//&#39; in it. |
 **occurrence_id** | **string**| The meeting or webinar occurrence ID. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\OpenAPI\Client\Model\WebinarRegistrantList**](../Model/WebinarRegistrantList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarCreate()`

```php
webinarCreate($user_id, $webinar_create_request): \OpenAPI\Client\Model\WebinarCreate201Response
```

Create a webinar

Use this API to schedule a webinar for a user (webinar host). For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.   Zoom users with a [Webinar plan](https://zoom.us/webinar) have access to creating and managing webinars. Webinars allow a host to broadcast a Zoom meeting to up to 10,000 attendees.   **Scopes:** `webinar:write:admin`, `webinar:write`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  * This API has a daily rate limit of **100 requests per day**. The rate limit is applied to the `userId` of the **webinar host** used to make the request.   **Prerequisites:**  * A Pro or higher plan with a Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$webinar_create_request = new \OpenAPI\Client\Model\WebinarCreateRequest(); // \OpenAPI\Client\Model\WebinarCreateRequest

try {
    $result = $apiInstance->webinarCreate($user_id, $webinar_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **webinar_create_request** | [**\OpenAPI\Client\Model\WebinarCreateRequest**](../Model/WebinarCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\WebinarCreate201Response**](../Model/WebinarCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarDelete()`

```php
webinarDelete($webinar_id, $occurrence_id, $cancel_webinar_reminder)
```

Delete a webinar

Delete a Webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * Pro or higher plan with a Webinar Add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$occurrence_id = 1648194360000; // string | The meeting or webinar occurrence ID.
$cancel_webinar_reminder = true; // bool | `true`: Notify panelists and registrants about the webinar cancellation via email.   `false`: Do not send any email notification to webinar registrants and panelists.   The default value of this field is `false`.

try {
    $apiInstance->webinarDelete($webinar_id, $occurrence_id, $cancel_webinar_reminder);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **occurrence_id** | **string**| The meeting or webinar occurrence ID. | [optional]
 **cancel_webinar_reminder** | **bool**| &#x60;true&#x60;: Notify panelists and registrants about the webinar cancellation via email.   &#x60;false&#x60;: Do not send any email notification to webinar registrants and panelists.   The default value of this field is &#x60;false&#x60;. | [optional]

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

## `webinarInviteLinksCreate()`

```php
webinarInviteLinksCreate($webinar_id, $meeting_invite_links_create_request): \OpenAPI\Client\Model\MeetingInviteLinksCreate201Response
```

Create webinar's invite links

Use this API to create a batch of invitation links for a webinar.  **Scopes**: `webinar:write:admin`, `webinar:write`</br>**[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  **Prerequisites:**  * Business, Education or API Plan with Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$meeting_invite_links_create_request = new \OpenAPI\Client\Model\MeetingInviteLinksCreateRequest(); // \OpenAPI\Client\Model\MeetingInviteLinksCreateRequest | Webinar invite link object

try {
    $result = $apiInstance->webinarInviteLinksCreate($webinar_id, $meeting_invite_links_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarInviteLinksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **meeting_invite_links_create_request** | [**\OpenAPI\Client\Model\MeetingInviteLinksCreateRequest**](../Model/MeetingInviteLinksCreateRequest.md)| Webinar invite link object |

### Return type

[**\OpenAPI\Client\Model\MeetingInviteLinksCreate201Response**](../Model/MeetingInviteLinksCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarLiveStreamStatusUpdate()`

```php
webinarLiveStreamStatusUpdate($webinar_id, $webinar_live_stream_status)
```

Update Live Stream Status

Zoom allows users to [live stream a webinar](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service) to a custom platform. Use this API to update the status of a webinar's live stream.<br><br> **Prerequisites:**<br> * Pro or higher plan with a Webinar Add-on.<br> * Live streaming details must have been [configured](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service#h_01589a6f-a40a-4e18-a448-cb746e52ebc5) for the webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_live_stream_status = new \OpenAPI\Client\Model\WebinarLiveStreamStatus(); // \OpenAPI\Client\Model\WebinarLiveStreamStatus | Webinar

try {
    $apiInstance->webinarLiveStreamStatusUpdate($webinar_id, $webinar_live_stream_status);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarLiveStreamStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_live_stream_status** | [**\OpenAPI\Client\Model\WebinarLiveStreamStatus**](../Model/WebinarLiveStreamStatus.md)| Webinar |

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

## `webinarLiveStreamUpdate()`

```php
webinarLiveStreamUpdate($webinar_id, $webinar_live_stream)
```

Update a live stream

Zoom allows users to [live stream a webinar](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service) to a custom platform. Use this API to update a webinar's live stream information.<br><br> **Prerequisites:**<br> * Pro or higher plan with a Webinar Add-on.<br> * Live streaming details must have been [configured](https://support.zoom.us/hc/en-us/articles/115001777826-Live-Streaming-Meetings-or-Webinars-Using-a-Custom-Service#h_01589a6f-a40a-4e18-a448-cb746e52ebc5) for the webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_live_stream = new \OpenAPI\Client\Model\WebinarLiveStream(); // \OpenAPI\Client\Model\WebinarLiveStream | Webinar

try {
    $apiInstance->webinarLiveStreamUpdate($webinar_id, $webinar_live_stream);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarLiveStreamUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_live_stream** | [**\OpenAPI\Client\Model\WebinarLiveStream**](../Model/WebinarLiveStream.md)| Webinar |

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

## `webinarLocalRecordingJoinToken()`

```php
webinarLocalRecordingJoinToken($webinar_id): \OpenAPI\Client\Model\WebinarLocalRecordingJoinToken200Response
```

Get a webinar's join token for local recording

Use this API to get a webinar's join token to allow for local recording. The join token lets a recording bot implemented using Zoom Meeting SDK to connect to a Zoom webinar. The recording bot can then automatically start locally recording. This supports both regular and raw local recording types.    **Scopes:** `webinar_token:read:admin:local_recording`, `webinar_token:read:local_recording` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * A Pro or higher plan with a Webinar Add-on.  * The **Local recording** user setting enabled in the Zoom web portal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $result = $apiInstance->webinarLocalRecordingJoinToken($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarLocalRecordingJoinToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

### Return type

[**\OpenAPI\Client\Model\WebinarLocalRecordingJoinToken200Response**](../Model/WebinarLocalRecordingJoinToken200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarPanelistCreate()`

```php
webinarPanelistCreate($webinar_id, $webinar_panelist)
```

Add panelists

Panelists in a Webinar can view and send video, screen share, annotate, etc and do much more compared to attendees in a webinar.<br>Use this API to [add panelists](https://support.zoom.us/hc/en-us/articles/115005657826-Inviting-Panelists-to-a-Webinar#h_7550d59e-23f5-4703-9e22-e76bded1ed70) to a scheduled webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>   **Prerequisites:** * Pro or a higher plan with [Webinar Add-on](https://zoom.us/webinar).<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_panelist = new \OpenAPI\Client\Model\WebinarPanelist(); // \OpenAPI\Client\Model\WebinarPanelist

try {
    $apiInstance->webinarPanelistCreate($webinar_id, $webinar_panelist);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_panelist** | [**\OpenAPI\Client\Model\WebinarPanelist**](../Model/WebinarPanelist.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarPanelistDelete()`

```php
webinarPanelistDelete($webinar_id, $panelist_id)
```

Remove a panelist

[Remove](https://support.zoom.us/hc/en-us/articles/115005657826-Inviting-Panelists-to-a-Webinar#h_de31f237-a91c-4fb2-912b-ecfba8ec5ffb) a single panelist from a webinar.<br> You can retrieve the `panelistId` by calling **List Panelists API**.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>   **Prerequisites:**<br> * Pro or a higher plan with [Webinar Add-on](https://zoom.us/webinar).<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$panelist_id = Tg2b6GhcQKKbV7nSCbDKug; // string | The panelist ID or panelist email.

try {
    $apiInstance->webinarPanelistDelete($webinar_id, $panelist_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **panelist_id** | **string**| The panelist ID or panelist email. |

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

## `webinarPanelists()`

```php
webinarPanelists($webinar_id): \OpenAPI\Client\Model\WebinarPanelistList
```

List panelists

Panelists in a Webinar can view and send video, screen share, annotate, etc and do much more compared to attendees in a Webinar.   Use this API to list all the panelists of a Webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisites:**<br> * Pro or a higher plan with [Webinar Add-on](https://zoom.us/webinar).<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $result = $apiInstance->webinarPanelists($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

### Return type

[**\OpenAPI\Client\Model\WebinarPanelistList**](../Model/WebinarPanelistList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarPanelistsDelete()`

```php
webinarPanelistsDelete($webinar_id)
```

Remove panelists

Remove all the panelists from a Webinar.<br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * Pro or a higher plan with [Webinar Add-on](https://zoom.us/webinar).<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $apiInstance->webinarPanelistsDelete($webinar_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

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

## `webinarPollCreate()`

```php
webinarPollCreate($webinar_id, $meeting_poll_create_request): \OpenAPI\Client\Model\WebinarPollCreate201Response
```

Create a webinar's poll

Create a [poll](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars) for a webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$meeting_poll_create_request = new \OpenAPI\Client\Model\MeetingPollCreateRequest(); // \OpenAPI\Client\Model\MeetingPollCreateRequest | Webinar poll object

try {
    $result = $apiInstance->webinarPollCreate($webinar_id, $meeting_poll_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **meeting_poll_create_request** | [**\OpenAPI\Client\Model\MeetingPollCreateRequest**](../Model/MeetingPollCreateRequest.md)| Webinar poll object |

### Return type

[**\OpenAPI\Client\Model\WebinarPollCreate201Response**](../Model/WebinarPollCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarPollDelete()`

```php
webinarPollDelete($webinar_id, $poll_id)
```

Delete a webinar poll

Delete a webinar's [poll](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars).<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$poll_id = QalIoKWLTJehBJ8e1xRrbQ; // string | The poll ID

try {
    $apiInstance->webinarPollDelete($webinar_id, $poll_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
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

## `webinarPollGet()`

```php
webinarPollGet($webinar_id, $poll_id): \OpenAPI\Client\Model\WebinarPollCreate201Response
```

Get a webinar poll

Get a webinar's [poll](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars) details.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$poll_id = QalIoKWLTJehBJ8e1xRrbQ; // string | The poll ID

try {
    $result = $apiInstance->webinarPollGet($webinar_id, $poll_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **poll_id** | **string**| The poll ID |

### Return type

[**\OpenAPI\Client\Model\WebinarPollCreate201Response**](../Model/WebinarPollCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarPollUpdate()`

```php
webinarPollUpdate($webinar_id, $poll_id, $meeting_poll_create_request)
```

Update a webinar poll

Update a webinar's [poll](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars).<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$poll_id = QalIoKWLTJehBJ8e1xRrbQ; // string | The poll ID
$meeting_poll_create_request = new \OpenAPI\Client\Model\MeetingPollCreateRequest(); // \OpenAPI\Client\Model\MeetingPollCreateRequest | Webinar Poll

try {
    $apiInstance->webinarPollUpdate($webinar_id, $poll_id, $meeting_poll_create_request);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **poll_id** | **string**| The poll ID |
 **meeting_poll_create_request** | [**\OpenAPI\Client\Model\MeetingPollCreateRequest**](../Model/MeetingPollCreateRequest.md)| Webinar Poll |

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

## `webinarPolls()`

```php
webinarPolls($webinar_id, $anonymous): \OpenAPI\Client\Model\PollList
```

List a webinar's polls

List all the [polls](https://support.zoom.us/hc/en-us/articles/203749865-Polling-for-Webinars) of a Webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$anonymous = true; // bool | Whether to query for polls with the **Anonymous** option enabled:  * `true` — Query for polls with the **Anonymous** option enabled.  * `false` — Do not query for polls with the **Anonymous** option enabled.

try {
    $result = $apiInstance->webinarPolls($webinar_id, $anonymous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **anonymous** | **bool**| Whether to query for polls with the **Anonymous** option enabled:  * &#x60;true&#x60; — Query for polls with the **Anonymous** option enabled.  * &#x60;false&#x60; — Do not query for polls with the **Anonymous** option enabled. | [optional]

### Return type

[**\OpenAPI\Client\Model\PollList**](../Model/PollList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarRegistrantCreate()`

```php
webinarRegistrantCreate($webinar_id, $webinar_registrant_create_request, $occurrence_ids): \OpenAPI\Client\Model\WebinarRegistrantCreate201Response
```

Add a webinar registrant

Use this API to create and submit a user's registration for a webinar. Zoom users with a [Webinar plan](https://zoom.us/webinar) have access to creating and managing webinars. Webinars allow hosts to broadcast a Zoom meeting to up to 10,000 attendees. Scheduling a [webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form before receiving the link to join the webinar.   **Scopes:** `webinar:write:admin`, `webinar:write` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * A Pro or higher plan with the Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_registrant_create_request = new \OpenAPI\Client\Model\WebinarRegistrantCreateRequest(); // \OpenAPI\Client\Model\WebinarRegistrantCreateRequest
$occurrence_ids = 1648538280000; // string | A comma-separated list of webinar occurrence IDs. You can get this value with the [Get a webinar](/docs/api-reference/zoom-api/methods/#operation/webinarUpdate) API.

try {
    $result = $apiInstance->webinarRegistrantCreate($webinar_id, $webinar_registrant_create_request, $occurrence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_registrant_create_request** | [**\OpenAPI\Client\Model\WebinarRegistrantCreateRequest**](../Model/WebinarRegistrantCreateRequest.md)|  |
 **occurrence_ids** | **string**| A comma-separated list of webinar occurrence IDs. You can get this value with the [Get a webinar](/docs/api-reference/zoom-api/methods/#operation/webinarUpdate) API. | [optional]

### Return type

[**\OpenAPI\Client\Model\WebinarRegistrantCreate201Response**](../Model/WebinarRegistrantCreate201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarRegistrantGet()`

```php
webinarRegistrantGet($webinar_id, $registrant_id, $occurrence_id): \OpenAPI\Client\Model\WebinarRegistrant
```

Get a webinar registrant

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees. Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form before receiving the link to join the Webinar.<br>Use this API to get details on a specific user who has registered for the Webinar.<br><br> **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * The account must have a Webinar plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$registrant_id = 9tboDiHUQAeOnbmudzWa5g; // string | The registrant ID.
$occurrence_id = 1648194360000; // string | The meeting or webinar occurrence ID.

try {
    $result = $apiInstance->webinarRegistrantGet($webinar_id, $registrant_id, $occurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **registrant_id** | **string**| The registrant ID. |
 **occurrence_id** | **string**| The meeting or webinar occurrence ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\WebinarRegistrant**](../Model/WebinarRegistrant.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarRegistrantQuestionUpdate()`

```php
webinarRegistrantQuestionUpdate($webinar_id, $webinar_registrants_questions_get200_response)
```

Update registration questions

Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form with fields and questions before they can receive the link to join the Webinar.<br>Use this API to update registration questions and fields of a scheduled Webinar that are to be answered by users while registering for a Webinar.<br><br> **Prerequisites:**<br>   * Pro or higher plan with a Webinar Add-on. * Registration option for Webinar should be set as required to use this API.  **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_registrants_questions_get200_response = new \OpenAPI\Client\Model\WebinarRegistrantsQuestionsGet200Response(); // \OpenAPI\Client\Model\WebinarRegistrantsQuestionsGet200Response | Webinar Registrant Questions

try {
    $apiInstance->webinarRegistrantQuestionUpdate($webinar_id, $webinar_registrants_questions_get200_response);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantQuestionUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_registrants_questions_get200_response** | [**\OpenAPI\Client\Model\WebinarRegistrantsQuestionsGet200Response**](../Model/WebinarRegistrantsQuestionsGet200Response.md)| Webinar Registrant Questions |

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

## `webinarRegistrantStatus()`

```php
webinarRegistrantStatus($webinar_id, $webinar_registrant_status_request, $occurrence_id)
```

Update registrant's status

Use this API to update webinar registrants' registration status. You can approve or deny a registrant, or revoke a registrant's approval.   **Scopes:** `webinar:write:admin`, `webinar:write` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_registrant_status_request = new \OpenAPI\Client\Model\WebinarRegistrantStatusRequest(); // \OpenAPI\Client\Model\WebinarRegistrantStatusRequest
$occurrence_id = 1648194360000; // string | The meeting or webinar occurrence ID.

try {
    $apiInstance->webinarRegistrantStatus($webinar_id, $webinar_registrant_status_request, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_registrant_status_request** | [**\OpenAPI\Client\Model\WebinarRegistrantStatusRequest**](../Model/WebinarRegistrantStatusRequest.md)|  |
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

## `webinarRegistrants()`

```php
webinarRegistrants($webinar_id, $occurrence_id, $status, $tracking_source_id, $page_size, $page_number, $next_page_token): \OpenAPI\Client\Model\WebinarRegistrantList
```

List webinar registrants

Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing Webinars. Webinar allows a host to broadcast a Zoom meeting to up to 10,000 attendees. Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form before receiving the link to join the Webinar.<br> Use this API to list all the users that have registered for a webinar.<br><br> **Prerequisites:** * Pro or higher plan with a Webinar Add-on.<br> **Scopes:** `webinar:read:admin` `webinar:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$occurrence_id = 1648194360000; // string | The meeting or webinar occurrence ID.
$status = pending; // string | Query by the registrant's status:  * `pending` — The registration is pending.  * `approved` — The registrant is approved.  * `denied` — The registration is denied.
$tracking_source_id = 5516482804110; // string | The tracking source ID for the registrants. Useful if you share the webinar registration page in multiple locations. See [Creating source tracking links for webinar registration](https://support.zoom.us/hc/en-us/articles/360000315683-Creating-source-tracking-links-for-webinar-registration) for details.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated.** We will no longer support this field in a future release. Instead, use the `next_page_token` for pagination.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->webinarRegistrants($webinar_id, $occurrence_id, $status, $tracking_source_id, $page_size, $page_number, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **occurrence_id** | **string**| The meeting or webinar occurrence ID. | [optional]
 **status** | **string**| Query by the registrant&#39;s status:  * &#x60;pending&#x60; — The registration is pending.  * &#x60;approved&#x60; — The registrant is approved.  * &#x60;denied&#x60; — The registration is denied. | [optional] [default to &#39;approved&#39;]
 **tracking_source_id** | **string**| The tracking source ID for the registrants. Useful if you share the webinar registration page in multiple locations. See [Creating source tracking links for webinar registration](https://support.zoom.us/hc/en-us/articles/360000315683-Creating-source-tracking-links-for-webinar-registration) for details. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\OpenAPI\Client\Model\WebinarRegistrantList**](../Model/WebinarRegistrantList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarRegistrantsQuestionsGet()`

```php
webinarRegistrantsQuestionsGet($webinar_id): \OpenAPI\Client\Model\WebinarRegistrantsQuestionsGet200Response
```

List registration questions

Scheduling a [Webinar with registration](https://support.zoom.us/hc/en-us/articles/204619915-Scheduling-a-Webinar-with-Registration) requires your registrants to complete a brief form with fields and questions before they can receive the link to join the Webinar.<br>Use this API to list registration questions and fields that are to be answered by users while registering for a Webinar.<br> **Prerequisites:**<br>   * Pro or higher plan with a Webinar Add-on. **Scopes:** `webinar:read:admin` `webinar:read`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $result = $apiInstance->webinarRegistrantsQuestionsGet($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantsQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

### Return type

[**\OpenAPI\Client\Model\WebinarRegistrantsQuestionsGet200Response**](../Model/WebinarRegistrantsQuestionsGet200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarStatus()`

```php
webinarStatus($webinar_id, $webinar_status_request)
```

Update webinar status

Update a webinar's status. Use this API to end an ongoing webinar.<br><br> **Scopes:** `webinar:write:admin` `webinar:write`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * The account must hold a valid [Webinar plan](https://zoom.us/webinar).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_status_request = new \OpenAPI\Client\Model\WebinarStatusRequest(); // \OpenAPI\Client\Model\WebinarStatusRequest

try {
    $apiInstance->webinarStatus($webinar_id, $webinar_status_request);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_status_request** | [**\OpenAPI\Client\Model\WebinarStatusRequest**](../Model/WebinarStatusRequest.md)|  |

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

## `webinarSurveyDelete()`

```php
webinarSurveyDelete($webinar_id)
```

Delete a webinar survey

Use this API to delete a [webinar survey](https://support.zoom.us/hc/en-us/articles/360048745651).    **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * A Pro or higher plan with the Webinar Add-on.  * The [**Webinar Survey**](https://support.zoom.us/hc/en-us/articles/360061293191-Enabling-webinar-survey) feature enabled in the host's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $apiInstance->webinarSurveyDelete($webinar_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarSurveyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

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

## `webinarSurveyGet()`

```php
webinarSurveyGet($webinar_id): \OpenAPI\Client\Model\WebinarSurveyGet200Response
```

Get a webinar survey

Use this API to return information about a [webinar survey](https://support.zoom.us/hc/en-us/articles/360048745651).    **Scopes:** `webinar:read`, `webinar:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * A Pro or higher plan with the Webinar add-on.  * The [**Webinar Survey**](https://support.zoom.us/hc/en-us/articles/360061293191-Enabling-webinar-survey) feature enabled in the host's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.

try {
    $result = $apiInstance->webinarSurveyGet($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarSurveyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |

### Return type

[**\OpenAPI\Client\Model\WebinarSurveyGet200Response**](../Model/WebinarSurveyGet200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarSurveyUpdate()`

```php
webinarSurveyUpdate($webinar_id, $webinar_survey_get200_response)
```

Update a webinar survey

Use this API to update a [webinar survey](https://support.zoom.us/hc/en-us/articles/360048745651).    **Scopes:** `webinar:write`, `webinar:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * A Pro or higher plan with the Webinar add-on.  * The [**Webinar Survey**](https://support.zoom.us/hc/en-us/articles/360061293191-Enabling-webinar-survey) feature enabled in the host's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_survey_get200_response = new \OpenAPI\Client\Model\WebinarSurveyGet200Response(); // \OpenAPI\Client\Model\WebinarSurveyGet200Response

try {
    $apiInstance->webinarSurveyUpdate($webinar_id, $webinar_survey_get200_response);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarSurveyUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_survey_get200_response** | [**\OpenAPI\Client\Model\WebinarSurveyGet200Response**](../Model/WebinarSurveyGet200Response.md)|  |

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

## `webinarToken()`

```php
webinarToken($webinar_id, $type): \OpenAPI\Client\Model\WebinarToken200Response
```

Get webinar's token

Use this API to get a webinar's [closed caption token (caption URL)](https://support.zoom.us/hc/en-us/articles/115002212983-Using-a-third-party-closed-captioning-service). This token lets you use a third-party service to stream text to their closed captioning software to the Zoom webinar.   **Scopes:** `webinar:read`, `webinar:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites:**  * A Pro or higher plan with the Webinar add-on.  * The **Closed captioning** setting enabled in the Zoom web portal.  *  * The **Allow use of caption API Token to integrate with 3rd-party Closed Captioning services** setting enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$type = closed_caption_token; // string | The webinar token type:  * `closed_caption_token` — The third-party closed caption API token.   This defaults to `closed_caption_token`.

try {
    $result = $apiInstance->webinarToken($webinar_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **type** | **string**| The webinar token type:  * &#x60;closed_caption_token&#x60; — The third-party closed caption API token.   This defaults to &#x60;closed_caption_token&#x60;. | [optional] [default to &#39;closed_caption_token&#39;]

### Return type

[**\OpenAPI\Client\Model\WebinarToken200Response**](../Model/WebinarToken200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webinarUpdate()`

```php
webinarUpdate($webinar_id, $webinar_update, $occurrence_id)
```

Update a webinar

Use this API to make updates to a scheduled webinar.   **Scopes:** `webinar:write:admin`, `webinar:write` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`  * This API has a daily rate limit of **100 requests per day**. The rate limit is applied to the `userId` of the **webinar host** used to make the request.   **Prerequisites:**  * A Pro or higher plan with a Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 99289110036; // int | The webinar's ID.
$webinar_update = new \OpenAPI\Client\Model\WebinarUpdate(); // \OpenAPI\Client\Model\WebinarUpdate | Webinar.
$occurrence_id = 1648538280000; // string | Webinar occurrence id. Support change of agenda, start_time, duration, settings: {host_video, panelist_video, hd_video, watermark, auto_recording}

try {
    $apiInstance->webinarUpdate($webinar_id, $webinar_update, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar&#39;s ID. |
 **webinar_update** | [**\OpenAPI\Client\Model\WebinarUpdate**](../Model/WebinarUpdate.md)| Webinar. |
 **occurrence_id** | **string**| Webinar occurrence id. Support change of agenda, start_time, duration, settings: {host_video, panelist_video, hd_video, watermark, auto_recording} | [optional]

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

## `webinars()`

```php
webinars($user_id, $page_size, $page_number): \OpenAPI\Client\Model\WebinarList
```

List webinars

Use this API to list all the webinars scheduled by or on-behalf a user (webinar host). For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.    Zoom users with a [Webinar Plan](https://zoom.us/webinar) have access to creating and managing webinars. Webinars allow a host to broadcast a Zoom meeting to up to 10,000 attendees.   **Note:** This API only returns a user's [unexpired webinars](https://support.zoom.us/hc/en-us/articles/201362373-Meeting-ID#h_c73f9b08-c1c0-4a1a-b538-e01ebb98e844).    **Scopes:** `webinar:read:admin`, `webinar:read` </br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    **Prerequisites:**  * A Pro or higher plan with the Webinar add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.
$page_size = 30; // int | The number of records returned within a single API call.
$page_number = 1; // int | **Deprecated.** We will no longer support this field in a future release. Instead, use the `next_page_token` for pagination.

try {
    $result = $apiInstance->webinars($user_id, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **page_number** | **int**| **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]

### Return type

[**\OpenAPI\Client\Model\WebinarList**](../Model/WebinarList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
