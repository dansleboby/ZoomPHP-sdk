# Zoom\Api\ChatChannelsAccountLevelApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChannel**](ChatChannelsAccountLevelApi.md#createChannel) | **POST** /chat/users/{userId}/channels | Create a Channel
[**deleteChannel**](ChatChannelsAccountLevelApi.md#deleteChannel) | **DELETE** /chat/users/{userId}/channels/{channelId} | Delete a Channel
[**getChannel**](ChatChannelsAccountLevelApi.md#getChannel) | **GET** /chat/users/{userId}/channels/{channelId} | Get a Channel
[**getChannels**](ChatChannelsAccountLevelApi.md#getChannels) | **GET** /chat/users/{userId}/channels | List User&#39;s Channels
[**inviteChannelMembers**](ChatChannelsAccountLevelApi.md#inviteChannelMembers) | **POST** /chat/users/{userId}/channels/{channelId}/members | Invite Channel Members
[**listChannelMembers**](ChatChannelsAccountLevelApi.md#listChannelMembers) | **GET** /chat/users/{userId}/channels/{channelId}/members | List Channel Members
[**removeAChannelMember**](ChatChannelsAccountLevelApi.md#removeAChannelMember) | **DELETE** /chat/users/{userId}/channels/{channelId}/members/{memberId} | Remove a Member
[**updateChannel**](ChatChannelsAccountLevelApi.md#updateChannel) | **PATCH** /chat/users/{userId}/channels/{channelId} | Update a Channel


# **createChannel**
> \Zoom\Api\Model\InlineResponse2012 createChannel($user_id, $body)

Create a Channel

Zoom chat channels allow users to communicate via chat in private or public groups. Use this API to create a channel for a user.<br> **Scopes**: `chat_channel:write:admin`<br>  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\">role</a> that has <b>Edit</b> permission for Chat Channel feature.</p><br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\ChatChannelsAccountLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Unique identifier of the user.
$body = new \Zoom\Api\Model\Body7(); // \Zoom\Api\Model\Body7 | 

try {
    $result = $apiInstance->createChannel($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsAccountLevelApi->createChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Unique identifier of the user. |
 **body** | [**\Zoom\Api\Model\Body7**](../Model/Body7.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannel**
> object deleteChannel($user_id, $channel_id)

Delete a Channel

Zoom chat [channels](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) allow users to communicate via chat in private or public groups. Use this API to delete a specific channel.   **Scope:** `chat_channel:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\ChatChannelsAccountLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$channel_id = "channel_id_example"; // string | Channel ID: Unique Identifier of a channel.

try {
    $result = $apiInstance->deleteChannel($user_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsAccountLevelApi->deleteChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **channel_id** | **string**| Channel ID: Unique Identifier of a channel. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannel**
> \Zoom\Api\Model\InlineResponse20010 getChannel($channel_id, $user_id)

Get a Channel

Zoom chat [channels](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) allow users to communicate via chat in private or public groups. Use this API to get information about a specific channel.   **Scope:** `chat_channel:read:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` <br>  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <b> <a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\"> role</a>  that has View or Edit permission for Chat Channels</b>.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\ChatChannelsAccountLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "channel_id_example"; // string | Channel ID: Unique Identifier of a channel.
$user_id = "user_id_example"; // string | Unique identifier of the user who is the owner of the channel.

try {
    $result = $apiInstance->getChannel($channel_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsAccountLevelApi->getChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel ID: Unique Identifier of a channel. |
 **user_id** | **string**| Unique identifier of the user who is the owner of the channel. |

### Return type

[**\Zoom\Api\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannels**
> \Zoom\Api\Model\InlineResponse2007 getChannels($user_id, $page_size, $next_page_token)

List User's Channels

Zoom chat [channels](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) allow users to communicate via chat in private or public groups. Use this API to list a user's chat channels.   **Scope**: `chat_channel:read:admin`<br> <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\">role</a> that has <b>View or Edit</b> permission for Chat Channel feature.</p><br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\ChatChannelsAccountLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Unique identifier of the user.
$page_size = 10; // int | The number of records returned from a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->getChannels($user_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsAccountLevelApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Unique identifier of the user. |
 **page_size** | **int**| The number of records returned from a single API call. | [optional] [default to 10]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteChannelMembers**
> \Zoom\Api\Model\InlineResponse2013 inviteChannelMembers($channel_id, $user_id, $body)

Invite Channel Members

A [channel](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) can have one or multiple members. Use this API to invite members that are in a user's contact list to a channel. The maximum number of members that can be added at once with this API is 5.   **Scope:** `chat_channel:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <b><a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\"> role</a> that has Edit permission for Chat Channels</b>.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\ChatChannelsAccountLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "channel_id_example"; // string | Channel ID: Unique Identifier of the channel.
$user_id = "user_id_example"; // string | Unique identifier of the user who is the owner of this channel.
$body = new \Zoom\Api\Model\Body9(); // \Zoom\Api\Model\Body9 | 

try {
    $result = $apiInstance->inviteChannelMembers($channel_id, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsAccountLevelApi->inviteChannelMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel ID: Unique Identifier of the channel. |
 **user_id** | **string**| Unique identifier of the user who is the owner of this channel. |
 **body** | [**\Zoom\Api\Model\Body9**](../Model/Body9.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listChannelMembers**
> \Zoom\Api\Model\InlineResponse20011 listChannelMembers($channel_id, $user_id, $page_size, $next_page_token)

List Channel Members

A [channel](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) can have one or multiple members. List all the members of a channel using this API.   </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <b><a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\"> role</a> that has View or Edit permission for Chat Channels</b>.</p>  **Scopes:** `chat_channel:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\ChatChannelsAccountLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "channel_id_example"; // string | Channel Id.
$user_id = "user_id_example"; // string | Unique identifier of the user who is the owner of this channel.
$page_size = 30; // int | The number of records returned with a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listChannelMembers($channel_id, $user_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsAccountLevelApi->listChannelMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id. |
 **user_id** | **string**| Unique identifier of the user who is the owner of this channel. |
 **page_size** | **int**| The number of records returned with a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAChannelMember**
> object removeAChannelMember($channel_id, $member_id, $user_id)

Remove a Member

A [channel](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) can have one or multiple members. Use this API to remove a member from a chat channel.<br><br>   **Scopes:** `chat_channel:write:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` <br>     <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <b><a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\"> role</a> that has Edit permission for Chat Channels</b>.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\ChatChannelsAccountLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "channel_id_example"; // string | Unique Identifier of the Channel from where you would like to remove a member. This can be retrieved from the [List Channels API](https://marketplace.zoom.us/docs/api-reference/zoom-api/chat-channels/getchannels).
$member_id = "member_id_example"; // string | Email address of the member whom you would like to be remove from the channel.
$user_id = "user_id_example"; // string | Unique identifier of the channel owner.

try {
    $result = $apiInstance->removeAChannelMember($channel_id, $member_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsAccountLevelApi->removeAChannelMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Unique Identifier of the Channel from where you would like to remove a member. This can be retrieved from the [List Channels API](https://marketplace.zoom.us/docs/api-reference/zoom-api/chat-channels/getchannels). |
 **member_id** | **string**| Email address of the member whom you would like to be remove from the channel. |
 **user_id** | **string**| Unique identifier of the channel owner. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannel**
> object updateChannel($channel_id, $user_id, $body)

Update a Channel

Zoom chat channels allow users to communicate via chat in private or public channels. Use this API to update the name of a specific channel created by a user. <br><br> **Scope:** `chat_channel:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium` <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <b> <a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\"> role</a>  that has Edit permission for Chat Channel</b>.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\ChatChannelsAccountLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "channel_id_example"; // string | Channel Id.
$user_id = "user_id_example"; // string | Unique Identifier of the Zoom user who is the owner of the channel.
$body = new \Zoom\Api\Model\Body8(); // \Zoom\Api\Model\Body8 | 

try {
    $result = $apiInstance->updateChannel($channel_id, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatChannelsAccountLevelApi->updateChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id. |
 **user_id** | **string**| Unique Identifier of the Zoom user who is the owner of the channel. |
 **body** | [**\Zoom\Api\Model\Body8**](../Model/Body8.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

