# # AccountSettingsOtherOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_auto_active_users** | **bool** | Whether administrators can activate users with a single default password when they add users. This immediately activates the users without waiting for them to set their own password. | [optional]
**allow_users_contact_support_via_chat** | **bool** | Whether to display the Zoom Help badge on the bottom-right of the page. | [optional]
**allow_users_enter_and_share_pronouns** | **bool** | Whether users can add pronouns to their profile cards and share them during meetings and webinars. | [optional]
**blur_snapshot** | **bool** | Whether iOS blurs the screenshot in the task switcher when multiple apps are open. Android hides the screenshot in the system-level list of recent apps. | [optional]
**display_meetings_scheduled_for_others** | **bool** | Whether a user with the [scheduling privilege](https://support.zoom.us/hc/en-us/articles/201362803-Scheduling-privilege) can view other users&#39; meetings. | [optional]
**meeting_qos_and_mos** | **int** | The Dashboard meeting [quality scores and network alerts](https://support.zoom.us/hc/en-us/articles/360061244651) setting:  * &#x60;0&#x60; — Do not enable meeting quality scores and network alerts on the Dashboard.  * &#x60;1&#x60; — Display the meeting quality score and network alerts on the Dashboard.  * &#x60;2&#x60; — Use custom thresholds for quality scores and network alerts. | [optional]
**show_one_user_meeting_on_dashboard** | **bool** | Whether meetings with only one person will display on the Dashboard and in reports. | [optional]
**use_cdn** | **string** | Allow connections to different CDNs (content delivery networks) for a better web browsing experience. All users in your organization will use the selected CDN to access static resources:  * &#x60;none&#x60; — Do not use a CDN.  * &#x60;default&#x60; — Use the Amazon CloudFront CDN for users **except** Chinese Mainland users. Chinese Mainland users will use the Wangsu CDN (China).  * &#x60;wangsu&#x60; — Use the Wangsu CDN for all users. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
