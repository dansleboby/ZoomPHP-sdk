# Zoom\Api\ChatChannelsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserLevelChannel**](ChatChannelsApi.md#deleteUserLevelChannel) | **DELETE** /chat/channels/{channelId} | Delete a Channel
[**getUserLevelChannel**](ChatChannelsApi.md#getUserLevelChannel) | **GET** /chat/channels/{channelId} | Get a Channel
[**joinChannel**](ChatChannelsApi.md#joinChannel) | **POST** /chat/channels/{channelId}/members/me | Join a Channel
[**leaveChannel**](ChatChannelsApi.md#leaveChannel) | **DELETE** /chat/channels/{channelId}/members/me | Leave a Channel
[**removeAUserLevelChannelMember**](ChatChannelsApi.md#removeAUserLevelChannelMember) | **DELETE** /chat/channels/{channelId}/members/{memberId} | Remove a Member
[**updateUserLevelChannel**](ChatChannelsApi.md#updateUserLevelChannel) | **PATCH** /chat/channels/{channelId} | Update a Channel



## deleteUserLevelChannel

> object deleteUserLevelChannel($channel_id)

Delete a Channel

Zoom chat [channels](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) allow users to communicate via chat in private or public groups. Use this API to delete a specific channel.   **Scope:** `chat_channel:write`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ChatChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel ID: Unique Identifier of a channel.

try {
    $result = $apiInstance->deleteUserLevelChannel($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsApi->deleteUserLevelChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel ID: Unique Identifier of a channel. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserLevelChannel

> \Zoom\Api\Model\InlineResponse20010 getUserLevelChannel($channel_id)

Get a Channel

Zoom chat [channels](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) allow users to communicate via chat in private or public groups. Use this API to get information about a specific channel.   **Scope:** `chat_channel:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ChatChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel ID: Unique Identifier of a channel.

try {
    $result = $apiInstance->getUserLevelChannel($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsApi->getUserLevelChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel ID: Unique Identifier of a channel. |

### Return type

[**\Zoom\Api\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## joinChannel

> \Zoom\Api\Model\InlineResponse2014 joinChannel($channel_id)

Join a Channel

A [channel](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) can have one or multiple members. Use this API to join a channel that is open for anyone in the same organization to join. You cannot use this API to join private channels that only allows invited members to be a part of it.  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b>This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>  **Scope:** `chat_channel:write`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ChatChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel Id.

try {
    $result = $apiInstance->joinChannel($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsApi->joinChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id. |

### Return type

[**\Zoom\Api\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leaveChannel

> object leaveChannel($channel_id)

Leave a Channel

If you're no longer interested in being a member of an existing channel, you can leave the channel at any time. Use this API to leave a specific channel. After leaving the channel, you can no longer access information from that channel.  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b>This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>  **Scope:** `chat_channel:write`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ChatChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel ID: Unique Identifier of a channel.

try {
    $result = $apiInstance->leaveChannel($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsApi->leaveChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel ID: Unique Identifier of a channel. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeAUserLevelChannelMember

> object removeAUserLevelChannelMember($channel_id, $member_id)

Remove a Member

A [channel](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) can have one or multiple members. Use this API to remove a member from a chat channel.<br><br>  **Scopes:** `chat_channel:write`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`    <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ChatChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Unique Identifier of the Channel from where you would like to remove a member. This can be retrieved from the [List Channels API](https://marketplace.zoom.us/docs/api-reference/zoom-api/chat-channels/getchannels).
$member_id = 'member_id_example'; // string | Email address of the member whom you would like to be remove from the channel.

try {
    $result = $apiInstance->removeAUserLevelChannelMember($channel_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsApi->removeAUserLevelChannelMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Unique Identifier of the Channel from where you would like to remove a member. This can be retrieved from the [List Channels API](https://marketplace.zoom.us/docs/api-reference/zoom-api/chat-channels/getchannels). |
 **member_id** | **string**| Email address of the member whom you would like to be remove from the channel. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateUserLevelChannel

> object updateUserLevelChannel($channel_id, $body)

Update a Channel

Zoom chat channels allow users to communicate via chat in private or public channels. Use this API to update the name of a specific channel that you created.   **Scope:** `chat_channel:write` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ChatChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel Id.
$body = new \Zoom\Api\Model\InlineObject10(); // \Zoom\Api\Model\InlineObject10 | 

try {
    $result = $apiInstance->updateUserLevelChannel($channel_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsApi->updateUserLevelChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id. |
 **body** | [**\Zoom\Api\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

