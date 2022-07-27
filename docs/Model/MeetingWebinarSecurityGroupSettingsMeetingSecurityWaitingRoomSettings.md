# # MeetingWebinarSecurityGroupSettingsMeetingSecurityWaitingRoomSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**participants_to_place_in_waiting_room** | **int** | The type of participants to be admitted to the Waiting Room:  * &#x60;0&#x60; — All attendees.  * &#x60;1&#x60; — Users who are not in your account.  * &#x60;2&#x60; — Users who are not in your account and are not part of your [allowed domains list](https://support.zoom.us/hc/en-us/articles/360037117472-Configuring-authentication-profiles#h_e3cf0d5f-eec7-4c2a-ad29-ef2a5079a7da). | [optional]
**users_who_can_admit_participants_from_waiting_room** | **int** | The users who can admit participants from the Waiting Room:  * &#x60;0&#x60; — Host and co-hosts only.  * &#x60;1&#x60; — Host, co-hosts, and anyone who bypassed the Waiting Room if the host and co-hosts are not present. | [optional]
**whitelisted_domains_for_waiting_room** | **string** | If the &#x60;participants_to_place_in_waiting_room&#x60; field is &#x60;2&#x60;, a comma-separated list of the domains that can bypass the Waiting Room (&#x60;\&quot;example.com,example2.com\&quot;&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
