# Swagger\Client\ChatMessagesApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteChatMessage**](ChatMessagesApi.md#deleteChatMessage) | **DELETE** /chat/users/{userId}/messages/{messageId} | Delete a Message
[**editMessage**](ChatMessagesApi.md#editMessage) | **PUT** /chat/users/{userId}/messages/{messageId} | Update a Message
[**getChatMessages**](ChatMessagesApi.md#getChatMessages) | **GET** /chat/users/{userId}/messages | List User&#39;s Chat Messages
[**sendaChatMessage**](ChatMessagesApi.md#sendaChatMessage) | **POST** /chat/users/{userId}/messages | Send a Chat Message


# **deleteChatMessage**
> deleteChatMessage($user_id, $message_id, $to_contact, $to_channel)

Delete a Message

Delete a chat message that you previously sent to a contact or a channel. In the query parameter, you must provide either of the following:<br> * `to_contact`: The email address of the contact to whom you sent the message. Use this parameter to delete a message sent to an individual contact in Zoom. * `to_channel`: The channel ID of the channel where you sent the message. Use this parameter to delete a message sent to a channel in Zoom.  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <b><a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\"> role</a> that has Edit permission for Chat Messages</b>.</p>  **Scope:** `chat_message:write`, `chat_message:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$message_id = "message_id_example"; // string | Message ID
$to_contact = "to_contact_example"; // string | The userId or email address of a chat contact to whom you previously sent the message.  Note: You must provide either `to_contact` or `to_channel` as a query parameter to delete a message that was previously sent to either an individual or a chat channel respectively.
$to_channel = "to_channel_example"; // string | The channel Id of the channel where you would like to send the message.  You must provide either `to_contact` or `to_channel` as a query parameter to delete a message that was previously sent to either an individual or a chat channel

try {
    $apiInstance->deleteChatMessage($user_id, $message_id, $to_contact, $to_channel);
} catch (Exception $e) {
    echo 'Exception when calling ChatMessagesApi->deleteChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **message_id** | **string**| Message ID |
 **to_contact** | **string**| The userId or email address of a chat contact to whom you previously sent the message.  Note: You must provide either &#x60;to_contact&#x60; or &#x60;to_channel&#x60; as a query parameter to delete a message that was previously sent to either an individual or a chat channel respectively. | [optional]
 **to_channel** | **string**| The channel Id of the channel where you would like to send the message.  You must provide either &#x60;to_contact&#x60; or &#x60;to_channel&#x60; as a query parameter to delete a message that was previously sent to either an individual or a chat channel | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editMessage**
> editMessage($user_id, $message_id, $body)

Update a Message

Each chat message has a unique identifier. Use this API to edit a chat message that you previously sent to either a contact or a channel in Zoom by providing the ID of the message as the value of the `messageId` parameter. The ID can be retrieved from List User's Chat Messages API. Additionally, as a query parameter, you must provide either the **email address** of the contact or the **Channel ID** of the channel where the message was sent.   **Scope:** `chat_message:write`,`chat_message:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`   </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <b><a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\"> role</a> that has Edit permission for Chat Messages</b>.</p> **Scope:** `chat_message:write`, `chat_message:write:admin`<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$message_id = "message_id_example"; // string | Message ID: Unique Identifier of the message.
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 

try {
    $apiInstance->editMessage($user_id, $message_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ChatMessagesApi->editMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **message_id** | **string**| Message ID: Unique Identifier of the message. |
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatMessages**
> \Swagger\Client\Model\InlineResponse2006 getChatMessages($user_id, $to_contact, $to_channel, $date, $page_size, $next_page_token)

List User's Chat Messages

A Zoom user can have conversations with other Zoom users via chat. Use this API to list the current user's chat messages between the user and an individual contact or a chat channel.<br> In the query parameter, you must provide either of the following:<br> * `to_contact`: The email address of the contact with whom the user conversed by sending/receiving messages. * `to_channel`: The channel ID of the channel to/from which the user has sent and/or received messages.  <br> **Specify a date** in the `date` query parameter to view messages from that date. If a date is not provided, the default value for the query will be the **current date**.<br> <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\">role</a> that has <b>View or Edit</b> permission for Chat Messages.</p><br>  <br>**Scopes:** `chat_message:read`, `chat_message:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$to_contact = "to_contact_example"; // string | The email address of a chat contact with whom the current user chatted. Messages that were sent and/or received between the user and the contact is displayed.  Note: You must provide either `contact` or `channel` as a query parameter to retrieve messages either from an individual or a chat channel.
$to_channel = "to_channel_example"; // string | The channel Id of a channel inside which current user had chat converstations. Messages that were sent and/or received between the user and the channel is displayed.  Note: You must provide either `contact` or `channel` as a query parameter to retrieve messages either from an individual or a chat channel.
$date = new \DateTime("2013-10-20"); // \DateTime | The query date for which you would like to get the chat messages.
$page_size = 10; // int | The number of records returned with a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->getChatMessages($user_id, $to_contact, $to_channel, $date, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatMessagesApi->getChatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **to_contact** | **string**| The email address of a chat contact with whom the current user chatted. Messages that were sent and/or received between the user and the contact is displayed.  Note: You must provide either &#x60;contact&#x60; or &#x60;channel&#x60; as a query parameter to retrieve messages either from an individual or a chat channel. | [optional]
 **to_channel** | **string**| The channel Id of a channel inside which current user had chat converstations. Messages that were sent and/or received between the user and the channel is displayed.  Note: You must provide either &#x60;contact&#x60; or &#x60;channel&#x60; as a query parameter to retrieve messages either from an individual or a chat channel. | [optional]
 **date** | **\DateTime**| The query date for which you would like to get the chat messages. | [optional]
 **page_size** | **int**| The number of records returned with a single API call. | [optional] [default to 10]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendaChatMessage**
> \Swagger\Client\Model\InlineResponse2011 sendaChatMessage($user_id, $body)

Send a Chat Message

Send chat messages on Zoom to either an individual user who is in your contact list or to a [channel](https://support.zoom.us/hc/en-us/articles/200912909-Getting-Started-With-Channels-Group-Messaging-) of which you are a member. To send a message to a contact, provide the contact's email address in the `to_contact` field. Similary, to send a message to a channel, provide the Channel Id of the Channel in `to_channel` field.<br> <br>**Scopes:** `chat_message:write`, `chat_message:write:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> For an<b> account-level</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>, this API can only be used on behalf of a user who is assigned with a <b><a href=\"https://support.zoom.us/hc/en-us/articles/115001078646-Using-role-management#:~:text=Each%20user%20in%20a%20Zoom,owner%2C%20administrator%2C%20or%20member.&text=Role%2Dbased%20access%20control%20enables,needs%20to%20view%20or%20edit.\"> role</a> that has Edit permission for Chat Messages</b>.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 

try {
    $result = $apiInstance->sendaChatMessage($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatMessagesApi->sendaChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

