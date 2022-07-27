# # MeetingSecuritySettingsMeetingSecurityWaitingRoomSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**participants_to_place_in_waiting_room** | **int** | Specify who should be admitted to the waiting room. The value of this field can be one of the following:&lt;br&gt; &#x60;0&#x60;: All attendees&lt;br&gt; &#x60;1&#x60;: Users who are not in your account&lt;br&gt; &#x60;2&#x60;: Users who are not in your account and are not part of your whitelisted domains that are specified in | [optional]
**users_who_can_admit_participants_from_waiting_room** | **int** | Specify who can admit participants from the waiting room. The value of this field can be one of the following:&lt;br&gt; &#x60;0&#x60;: Host and co-hosts only&lt;br&gt; &#x60;1&#x60;: Host, co-hosts, and anyone who bypassed the waiting room (only if host and co-hosts are not present). | [optional]
**whitelisted_domains_for_waiting_room** | **string** | If the value of the &#x60;participants_to_place_in_waiting_room&#x60; field is &#x60;2&#x60;, use this setting to specify the domains that can bypass the waiting room feature. Separate multiple domains with commas(example: \&quot;aaa.com,bbb.com\&quot;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
