# # VideoSDKAccountInMeetingSettingsInMeeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_data_center_regions** | **bool** | Whether custom [data center regions](https://support.zoom.us/hc/en-us/articles/360042411451-Selecting-data-center-regions-for-meetings-webinars) are in use:  * &#x60;true&#x60; — Users can [select data center regions](https://support.zoom.us/hc/en-us/articles/360042411451-Selecting-data-center-regions-for-hosted-meetings-and-webinars) to use for hosting real-time meeting traffic. The data center regions can be provided in the &#x60;data_center_regions&#x60; field.  * &#x60;false&#x60; — Only the default data center regions. | [optional]
**data_center_regions** | **string[]** | If the value of &#x60;custom_data_center_regions&#x60; is &#x60;true&#x60;, a comma-separated list of the selected custom [data center regions](https://support.zoom.us/hc/en-us/articles/360059254691-Datacenter-abbreviation-list):  * &#x60;AU&#x60; — Australia. * &#x60;LA&#x60; — Latin America.  * &#x60;CA&#x60; — Canada.  * &#x60;CN&#x60; — China.  * &#x60;DE&#x60; — Germany.  * &#x60;HK&#x60; — Hong Kong SAR.  * &#x60;IN&#x60; — India.  * &#x60;IE&#x60; — Ireland.  * &#x60;TY&#x60; — Japan.  * &#x60;MX&#x60; — Mexico.  * &#x60;NL&#x60; — Netherlands.  * &#x60;SG&#x60; — Singapore.  * &#x60;US&#x60; — United States. | [optional]
**unchecked_data_center_regions** | **string[]** | If the value of &#x60;custom_data_center_regions&#x60; is &#x60;true&#x60;, a comma-separated list the [data center regions](https://support.zoom.us/hc/en-us/articles/360059254691-Datacenter-abbreviation-list) that are **not** selected:  * &#x60;EU&#x60; — Europe.  * &#x60;HK&#x60; — Hong Kong.  * &#x60;AU&#x60; — Australia.  * &#x60;IN&#x60; — India.  * &#x60;LA&#x60; — Latin America.  * &#x60;TY&#x60; — Tokyo.  * &#x60;CN&#x60; — China.  * &#x60;US&#x60; — United States.  * &#x60;CA&#x60; — Canada. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
