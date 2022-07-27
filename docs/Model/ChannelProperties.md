# # ChannelProperties

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_settings** | [**\Zoom\Api\Model\ChannelPropertiesChannelSettings**](ChannelPropertiesChannelSettings.md) |  | [optional]
**id** | **string** | The ID of the channel. | [optional]
**jid** | **string** | The [Jabber Identity](https://en.wikipedia.org/wiki/JID_(Jabber)) used to access the account. | [optional]
**name** | **string** | The channel name. | [optional]
**type** | **int** | The channel&#39;s type: * &#x60;0&#x60; — An unknown channel type. * &#x60;1&#x60; — A private channel. Members must be invited to join this channel. * &#x60;2&#x60; — A private channel with members that belong to a Zoom account. All members of this channel are from the same organization and must be invited to join. * &#x60;3&#x60; — A public channel. Anyone can search for and join this channel. * &#x60;4&#x60; — An instant channel. This type of channel is created by adding members to a new chat. * &#x60;5&#x60; — A public channel. Anyone can join this channel and invite members from other Zoom accounts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
