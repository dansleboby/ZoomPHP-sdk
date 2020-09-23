# # V2RoomsIdEventsParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Unique Identifier of the calendar event associated with the Zoom Room.&lt;br&gt;&lt;br&gt;If the calendar integration being used is Microsoft Exchange, the value for this field can be retrieved by using Microsoft&#39;s [FindItem Operation](https://docs.microsoft.com/en-us/exchange/client-developer/web-service-reference/finditem-operation) and referring to the Id field of the ItemId Element included in the operation response.&lt;br&gt;&lt;br&gt;If the Google calendar integration was used for this event, the event_id can be retrieved by calling Google&#39;s [Events:list API](https://developers.google.com/calendar/v3/reference/events/list) and referring to the \&quot;id\&quot; field included in the [events resource](https://developers.google.com/calendar/v3/reference/events#resource). | 
**change_key** | **string** | This field is required only for Microsoft Exchange or Office 365  calendar. The change key represents the specific version of the calendar item and can be retrieved by using Microsoft&#39;s [FindItem Operation](https://docs.microsoft.com/en-us/exchange/client-developer/web-service-reference/finditem-operation) and referring to the ChangeKey field of the ItemId Element included in the operation response.&lt;br&gt; | [optional] 
**calendar_id** | **string** | This field is only required if Google Calendar is being used for the event associated with the Zoom Room. The value for this field can be retrieved by calling Google&#39;s [CalendarList:list API](https://developers.google.com/calendar/v3/reference/events/list) and referring to the \&quot;id\&quot; field included in the [calendarList resource](https://developers.google.com/calendar/v3/reference/calendarList#resource). | [optional] 
**resource_email** | **string** | This field is only required for Microsoft Exchange / Office 365 Calendar. It is the [resource mailbox](https://support.microsoft.com/en-us/help/10063/creating-and-managing-resource-mailboxes-in-office-365) associated with the calendar. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


