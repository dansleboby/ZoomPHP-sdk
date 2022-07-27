# OpenAPIClient-php

The Zoom Meeting APIs let developers to access information from Zoom. You can use this API to build private services or public applications on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [JWT](/guides/auth/jwt) and [OAuth](/guides/auth/oauth) documentation. 

All endpoints are available via `https` and are located at `api.zoom.us/v2/`. For example, to list all of an account's users, use the `https://api.zoom.us/v2/users/` endpoint.

For more information, please visit [https://developer.zoom.us/](https://developer.zoom.us/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = q6gBJVO5TzexKYTb_I2rpg; // string | The account's ID. For the Master account, pass the `me` value for this parameter.

try {
    $result = $apiInstance->accountManagedDomain($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountManagedDomain: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.zoom.us/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**accountManagedDomain**](docs/Api/AccountsApi.md#accountmanageddomain) | **GET** /accounts/{accountId}/managed_domains | Get account&#39;s managed domains
*AccountsApi* | [**accountSettings**](docs/Api/AccountsApi.md#accountsettings) | **GET** /accounts/{accountId}/settings | Get account settings
*AccountsApi* | [**accountSettingsUpdate**](docs/Api/AccountsApi.md#accountsettingsupdate) | **PATCH** /accounts/{accountId}/settings | Update account settings
*AccountsApi* | [**accountTrustedDomain**](docs/Api/AccountsApi.md#accounttrusteddomain) | **GET** /accounts/{accountId}/trusted_domains | Get account&#39;s trusted domains
*ArchivingApi* | [**deleteArchivedFiles**](docs/Api/ArchivingApi.md#deletearchivedfiles) | **DELETE** /past_meetings/{meetingUUID}/archive_files | Delete a meeting&#39;s archived files
*ArchivingApi* | [**getArchivedFileStatistics**](docs/Api/ArchivingApi.md#getarchivedfilestatistics) | **GET** /archive_files/statistics | Get archived file statistics
*ArchivingApi* | [**getArchivedFiles**](docs/Api/ArchivingApi.md#getarchivedfiles) | **GET** /past_meetings/{meetingUUID}/archive_files | Get a meeting&#39;s archived files
*ArchivingApi* | [**listArchivedFiles**](docs/Api/ArchivingApi.md#listarchivedfiles) | **GET** /archive_files | List archived files
*CloudRecordingApi* | [**meetingRecordingRegistrantCreate**](docs/Api/CloudRecordingApi.md#meetingrecordingregistrantcreate) | **POST** /meetings/{meetingId}/recordings/registrants | Create a recording registrant
*CloudRecordingApi* | [**meetingRecordingRegistrantStatus**](docs/Api/CloudRecordingApi.md#meetingrecordingregistrantstatus) | **PUT** /meetings/{meetingId}/recordings/registrants/status | Update registrant&#39;s status
*CloudRecordingApi* | [**meetingRecordingRegistrants**](docs/Api/CloudRecordingApi.md#meetingrecordingregistrants) | **GET** /meetings/{meetingId}/recordings/registrants | List recording registrants
*CloudRecordingApi* | [**recordingDelete**](docs/Api/CloudRecordingApi.md#recordingdelete) | **DELETE** /meetings/{meetingId}/recordings | Delete meeting recordings
*CloudRecordingApi* | [**recordingDeleteOne**](docs/Api/CloudRecordingApi.md#recordingdeleteone) | **DELETE** /meetings/{meetingId}/recordings/{recordingId} | Delete a meeting recording file
*CloudRecordingApi* | [**recordingGet**](docs/Api/CloudRecordingApi.md#recordingget) | **GET** /meetings/{meetingId}/recordings | Get meeting recordings
*CloudRecordingApi* | [**recordingRegistrantQuestionUpdate**](docs/Api/CloudRecordingApi.md#recordingregistrantquestionupdate) | **PATCH** /meetings/{meetingId}/recordings/registrants/questions | Update registration questions
*CloudRecordingApi* | [**recordingRegistrantsQuestionsGet**](docs/Api/CloudRecordingApi.md#recordingregistrantsquestionsget) | **GET** /meetings/{meetingId}/recordings/registrants/questions | Get registration questions
*CloudRecordingApi* | [**recordingSettingUpdate**](docs/Api/CloudRecordingApi.md#recordingsettingupdate) | **GET** /meetings/{meetingId}/recordings/settings | Get meeting recording settings
*CloudRecordingApi* | [**recordingSettingsUpdate**](docs/Api/CloudRecordingApi.md#recordingsettingsupdate) | **PATCH** /meetings/{meetingId}/recordings/settings | Update meeting recording settings
*CloudRecordingApi* | [**recordingStatusUpdate**](docs/Api/CloudRecordingApi.md#recordingstatusupdate) | **PUT** /meetings/{meetingUUID}/recordings/status | Recover meeting recordings
*CloudRecordingApi* | [**recordingStatusUpdateOne**](docs/Api/CloudRecordingApi.md#recordingstatusupdateone) | **PUT** /meetings/{meetingId}/recordings/{recordingId}/status | Recover a single recording
*CloudRecordingApi* | [**recordingsList**](docs/Api/CloudRecordingApi.md#recordingslist) | **GET** /users/{userId}/recordings | List all recordings
*DashboardsApi* | [**dashboardCRC**](docs/Api/DashboardsApi.md#dashboardcrc) | **GET** /metrics/crc | Get CRC port usage
*DashboardsApi* | [**dashboardChat**](docs/Api/DashboardsApi.md#dashboardchat) | **GET** /metrics/chat | Get chat metrics
*DashboardsApi* | [**dashboardClientFeedback**](docs/Api/DashboardsApi.md#dashboardclientfeedback) | **GET** /metrics/client/feedback | List Zoom meetings client feedback
*DashboardsApi* | [**dashboardClientFeedbackDetail**](docs/Api/DashboardsApi.md#dashboardclientfeedbackdetail) | **GET** /metrics/client/feedback/{feedbackId} | Get zoom meetings client feedback
*DashboardsApi* | [**dashboardIM**](docs/Api/DashboardsApi.md#dashboardim) | **GET** /metrics/im | Get IM metrics
*DashboardsApi* | [**dashboardIssueDetailZoomRoom**](docs/Api/DashboardsApi.md#dashboardissuedetailzoomroom) | **GET** /metrics/issues/zoomrooms/{zoomroomId} | Get issues of Zoom Rooms
*DashboardsApi* | [**dashboardIssueZoomRoom**](docs/Api/DashboardsApi.md#dashboardissuezoomroom) | **GET** /metrics/issues/zoomrooms | Get top 25 Zoom Rooms with issues
*DashboardsApi* | [**dashboardMeetingDetail**](docs/Api/DashboardsApi.md#dashboardmeetingdetail) | **GET** /metrics/meetings/{meetingId} | Get meeting details
*DashboardsApi* | [**dashboardMeetingParticipantQOS**](docs/Api/DashboardsApi.md#dashboardmeetingparticipantqos) | **GET** /metrics/meetings/{meetingId}/participants/{participantId}/qos | Get meeting participant QoS
*DashboardsApi* | [**dashboardMeetingParticipantShare**](docs/Api/DashboardsApi.md#dashboardmeetingparticipantshare) | **GET** /metrics/meetings/{meetingId}/participants/sharing | Get sharing/recording details
*DashboardsApi* | [**dashboardMeetingParticipants**](docs/Api/DashboardsApi.md#dashboardmeetingparticipants) | **GET** /metrics/meetings/{meetingId}/participants | List meeting participants
*DashboardsApi* | [**dashboardMeetingParticipantsQOS**](docs/Api/DashboardsApi.md#dashboardmeetingparticipantsqos) | **GET** /metrics/meetings/{meetingId}/participants/qos | List meeting participants QoS
*DashboardsApi* | [**dashboardMeetingParticipantsQOSSummary**](docs/Api/DashboardsApi.md#dashboardmeetingparticipantsqossummary) | **GET** /metrics/meetings/{meetingId}/participants/qos_summary | List meeting participants QoS Summary
*DashboardsApi* | [**dashboardMeetings**](docs/Api/DashboardsApi.md#dashboardmeetings) | **GET** /metrics/meetings | List meetings
*DashboardsApi* | [**dashboardQuality**](docs/Api/DashboardsApi.md#dashboardquality) | **GET** /metrics/quality | Get meeting quality scores
*DashboardsApi* | [**dashboardWebinarDetail**](docs/Api/DashboardsApi.md#dashboardwebinardetail) | **GET** /metrics/webinars/{webinarId} | Get webinar details
*DashboardsApi* | [**dashboardWebinarParticipantQOS**](docs/Api/DashboardsApi.md#dashboardwebinarparticipantqos) | **GET** /metrics/webinars/{webinarId}/participants/{participantId}/qos | Get webinar participant QoS
*DashboardsApi* | [**dashboardWebinarParticipantShare**](docs/Api/DashboardsApi.md#dashboardwebinarparticipantshare) | **GET** /metrics/webinars/{webinarId}/participants/sharing | Get sharing/recording details
*DashboardsApi* | [**dashboardWebinarParticipants**](docs/Api/DashboardsApi.md#dashboardwebinarparticipants) | **GET** /metrics/webinars/{webinarId}/participants | Get webinar participants
*DashboardsApi* | [**dashboardWebinarParticipantsQOS**](docs/Api/DashboardsApi.md#dashboardwebinarparticipantsqos) | **GET** /metrics/webinars/{webinarId}/participants/qos | List webinar participant QoS
*DashboardsApi* | [**dashboardWebinarParticipantsQOSSummary**](docs/Api/DashboardsApi.md#dashboardwebinarparticipantsqossummary) | **GET** /metrics/webinars/{webinarId}/participants/qos_summary | List webinar participants QoS Summary
*DashboardsApi* | [**dashboardWebinars**](docs/Api/DashboardsApi.md#dashboardwebinars) | **GET** /metrics/webinars | List webinars
*DashboardsApi* | [**dashboardZoomRoom**](docs/Api/DashboardsApi.md#dashboardzoomroom) | **GET** /metrics/zoomrooms/{zoomroomId} | Get Zoom Rooms details
*DashboardsApi* | [**dashboardZoomRoomIssue**](docs/Api/DashboardsApi.md#dashboardzoomroomissue) | **GET** /metrics/zoomrooms/issues | Get top 25 issues of Zoom Rooms
*DashboardsApi* | [**dashboardZoomRooms**](docs/Api/DashboardsApi.md#dashboardzoomrooms) | **GET** /metrics/zoomrooms | List Zoom Rooms
*DashboardsApi* | [**getClientVersions**](docs/Api/DashboardsApi.md#getclientversions) | **GET** /metrics/client_versions | List the client versions
*DashboardsApi* | [**listMeetingSatisfaction**](docs/Api/DashboardsApi.md#listmeetingsatisfaction) | **GET** /metrics/client/satisfaction | List client meeting satisfaction
*DashboardsApi* | [**participantFeedback**](docs/Api/DashboardsApi.md#participantfeedback) | **GET** /metrics/meetings/{meetingId}/participants/satisfaction | Get post meeting feedback
*DashboardsApi* | [**participantWebinarFeedback**](docs/Api/DashboardsApi.md#participantwebinarfeedback) | **GET** /metrics/webinars/{webinarId}/participants/satisfaction | Get post webinar feedback
*DeprecatedAPIEndpointsApi* | [**listPastMeetingFiles**](docs/Api/DeprecatedAPIEndpointsApi.md#listpastmeetingfiles) | **GET** /past_meetings/{meetingId}/files | List past meeting&#39;s files
*DeprecatedAPIEndpointsApi* | [**listPastWebinarFiles**](docs/Api/DeprecatedAPIEndpointsApi.md#listpastwebinarfiles) | **GET** /past_webinars/{webinarId}/files | List past webinar files
*DevicesApi* | [**deviceCreate**](docs/Api/DevicesApi.md#devicecreate) | **POST** /h323/devices | Create a H.323/SIP device
*DevicesApi* | [**deviceDelete**](docs/Api/DevicesApi.md#devicedelete) | **DELETE** /h323/devices/{deviceId} | Delete a H.323/SIP device
*DevicesApi* | [**deviceList**](docs/Api/DevicesApi.md#devicelist) | **GET** /h323/devices | List H.323/SIP devices
*DevicesApi* | [**deviceUpdate**](docs/Api/DevicesApi.md#deviceupdate) | **PATCH** /h323/devices/{deviceId} | Update a H.323/SIP device
*GroupsApi* | [**delGroupVB**](docs/Api/GroupsApi.md#delgroupvb) | **DELETE** /groups/{groupId}/settings/virtual_backgrounds | Delete Virtual Background files
*GroupsApi* | [**getGroupLockSettings**](docs/Api/GroupsApi.md#getgrouplocksettings) | **GET** /groups/{groupId}/lock_settings | Get locked settings
*GroupsApi* | [**getGroupSettings**](docs/Api/GroupsApi.md#getgroupsettings) | **GET** /groups/{groupId}/settings | Get a group&#39;s settings
*GroupsApi* | [**group**](docs/Api/GroupsApi.md#group) | **GET** /groups/{groupId} | Get a group
*GroupsApi* | [**groupAdmins**](docs/Api/GroupsApi.md#groupadmins) | **GET** /groups/{groupId}/admins | List group admins
*GroupsApi* | [**groupAdminsCreate**](docs/Api/GroupsApi.md#groupadminscreate) | **POST** /groups/{groupId}/admins | Add group admins
*GroupsApi* | [**groupAdminsDelete**](docs/Api/GroupsApi.md#groupadminsdelete) | **DELETE** /groups/{groupId}/admins/{userId} | Delete a group admin
*GroupsApi* | [**groupCreate**](docs/Api/GroupsApi.md#groupcreate) | **POST** /groups | Create a group
*GroupsApi* | [**groupDelete**](docs/Api/GroupsApi.md#groupdelete) | **DELETE** /groups/{groupId} | Delete a group
*GroupsApi* | [**groupLockedSettings**](docs/Api/GroupsApi.md#grouplockedsettings) | **PATCH** /groups/{groupId}/lock_settings | Update locked settings
*GroupsApi* | [**groupMembers**](docs/Api/GroupsApi.md#groupmembers) | **GET** /groups/{groupId}/members | List group members
*GroupsApi* | [**groupMembersCreate**](docs/Api/GroupsApi.md#groupmemberscreate) | **POST** /groups/{groupId}/members | Add group members
*GroupsApi* | [**groupMembersDelete**](docs/Api/GroupsApi.md#groupmembersdelete) | **DELETE** /groups/{groupId}/members/{memberId} | Delete a group member
*GroupsApi* | [**groupUpdate**](docs/Api/GroupsApi.md#groupupdate) | **PATCH** /groups/{groupId} | Update a group
*GroupsApi* | [**groups**](docs/Api/GroupsApi.md#groups) | **GET** /groups | List groups
*GroupsApi* | [**updateAGroupMember**](docs/Api/GroupsApi.md#updateagroupmember) | **PATCH** /groups/{groupId}/members/{memberId} | Update a group member
*GroupsApi* | [**updateGroupSettings**](docs/Api/GroupsApi.md#updategroupsettings) | **PATCH** /groups/{groupId}/settings | Update a group&#39;s settings
*GroupsApi* | [**uploadGroupVB**](docs/Api/GroupsApi.md#uploadgroupvb) | **POST** /groups/{groupId}/settings/virtual_backgrounds | Upload Virtual Background files
*IMGroupsApi* | [**imGroup**](docs/Api/IMGroupsApi.md#imgroup) | **GET** /im/groups/{groupId} | Retrieve an IM directory group
*IMGroupsApi* | [**imGroupCreate**](docs/Api/IMGroupsApi.md#imgroupcreate) | **POST** /im/groups | Create an IM directory group
*IMGroupsApi* | [**imGroupDelete**](docs/Api/IMGroupsApi.md#imgroupdelete) | **DELETE** /im/groups/{groupId} | Delete an IM directory group
*IMGroupsApi* | [**imGroupMembers**](docs/Api/IMGroupsApi.md#imgroupmembers) | **GET** /im/groups/{groupId}/members | List IM directory group members
*IMGroupsApi* | [**imGroupMembersCreate**](docs/Api/IMGroupsApi.md#imgroupmemberscreate) | **POST** /im/groups/{groupId}/members | Add IM directory group members
*IMGroupsApi* | [**imGroupMembersDelete**](docs/Api/IMGroupsApi.md#imgroupmembersdelete) | **DELETE** /im/groups/{groupId}/members/{memberId} | Delete IM directory group member
*IMGroupsApi* | [**imGroupUpdate**](docs/Api/IMGroupsApi.md#imgroupupdate) | **PATCH** /im/groups/{groupId} | Update an IM directory group
*IMGroupsApi* | [**imGroups**](docs/Api/IMGroupsApi.md#imgroups) | **GET** /im/groups | List IM directory groups
*MeetingsApi* | [**addBatchRegistrants**](docs/Api/MeetingsApi.md#addbatchregistrants) | **POST** /meetings/{meetingId}/batch_registrants | Perform batch registration
*MeetingsApi* | [**createBatchPolls**](docs/Api/MeetingsApi.md#createbatchpolls) | **POST** /meetings/{meetingId}/batch_polls | Perform batch poll creation
*MeetingsApi* | [**deleteMeetingChatMessageById**](docs/Api/MeetingsApi.md#deletemeetingchatmessagebyid) | **DELETE** /live_meetings/{meetingId}/chat/messages/{messageId} | Delete a live meeting message
*MeetingsApi* | [**getMeetingLiveStreamDetails**](docs/Api/MeetingsApi.md#getmeetinglivestreamdetails) | **GET** /meetings/{meetingId}/livestream | Get livestream details
*MeetingsApi* | [**inMeetingControl**](docs/Api/MeetingsApi.md#inmeetingcontrol) | **PATCH** /live_meetings/{meetingId}/events | Use in-meeting controls
*MeetingsApi* | [**listMeetingTemplates**](docs/Api/MeetingsApi.md#listmeetingtemplates) | **GET** /users/{userId}/meeting_templates | List meeting templates
*MeetingsApi* | [**listPastMeetingPolls**](docs/Api/MeetingsApi.md#listpastmeetingpolls) | **GET** /past_meetings/{meetingId}/polls | List past meeting&#39;s poll results
*MeetingsApi* | [**meeting**](docs/Api/MeetingsApi.md#meeting) | **GET** /meetings/{meetingId} | Get a meeting
*MeetingsApi* | [**meetingCreate**](docs/Api/MeetingsApi.md#meetingcreate) | **POST** /users/{userId}/meetings | Create a meeting
*MeetingsApi* | [**meetingDelete**](docs/Api/MeetingsApi.md#meetingdelete) | **DELETE** /meetings/{meetingId} | Delete a meeting
*MeetingsApi* | [**meetingInvitation**](docs/Api/MeetingsApi.md#meetinginvitation) | **GET** /meetings/{meetingId}/invitation | Get meeting invitation
*MeetingsApi* | [**meetingInviteLinksCreate**](docs/Api/MeetingsApi.md#meetinginvitelinkscreate) | **POST** /meetings/{meetingId}/invite_links | Create meeting&#39;s invite links
*MeetingsApi* | [**meetingLiveStreamStatusUpdate**](docs/Api/MeetingsApi.md#meetinglivestreamstatusupdate) | **PATCH** /meetings/{meetingId}/livestream/status | Update Live Stream Status
*MeetingsApi* | [**meetingLiveStreamUpdate**](docs/Api/MeetingsApi.md#meetinglivestreamupdate) | **PATCH** /meetings/{meetingId}/livestream | Update a livestream
*MeetingsApi* | [**meetingLocalRecordingJoinToken**](docs/Api/MeetingsApi.md#meetinglocalrecordingjointoken) | **GET** /meetings/{meetingId}/jointoken/local_recording | Get a meeting&#39;s join token for local recording
*MeetingsApi* | [**meetingPollCreate**](docs/Api/MeetingsApi.md#meetingpollcreate) | **POST** /meetings/{meetingId}/polls | Create a meeting poll
*MeetingsApi* | [**meetingPollDelete**](docs/Api/MeetingsApi.md#meetingpolldelete) | **DELETE** /meetings/{meetingId}/polls/{pollId} | Delete a meeting poll
*MeetingsApi* | [**meetingPollGet**](docs/Api/MeetingsApi.md#meetingpollget) | **GET** /meetings/{meetingId}/polls/{pollId} | Get a meeting poll
*MeetingsApi* | [**meetingPollUpdate**](docs/Api/MeetingsApi.md#meetingpollupdate) | **PUT** /meetings/{meetingId}/polls/{pollId} | Update a meeting poll
*MeetingsApi* | [**meetingPolls**](docs/Api/MeetingsApi.md#meetingpolls) | **GET** /meetings/{meetingId}/polls | List meeting polls
*MeetingsApi* | [**meetingRegistrantCreate**](docs/Api/MeetingsApi.md#meetingregistrantcreate) | **POST** /meetings/{meetingId}/registrants | Add a meeting registrant
*MeetingsApi* | [**meetingRegistrantGet**](docs/Api/MeetingsApi.md#meetingregistrantget) | **GET** /meetings/{meetingId}/registrants/{registrantId} | Get a meeting registrant
*MeetingsApi* | [**meetingRegistrantQuestionUpdate**](docs/Api/MeetingsApi.md#meetingregistrantquestionupdate) | **PATCH** /meetings/{meetingId}/registrants/questions | Update registration questions
*MeetingsApi* | [**meetingRegistrantStatus**](docs/Api/MeetingsApi.md#meetingregistrantstatus) | **PUT** /meetings/{meetingId}/registrants/status | Update registrant&#39;s status
*MeetingsApi* | [**meetingRegistrants**](docs/Api/MeetingsApi.md#meetingregistrants) | **GET** /meetings/{meetingId}/registrants | List meeting registrants
*MeetingsApi* | [**meetingRegistrantsQuestionsGet**](docs/Api/MeetingsApi.md#meetingregistrantsquestionsget) | **GET** /meetings/{meetingId}/registrants/questions | List registration questions
*MeetingsApi* | [**meetingStatus**](docs/Api/MeetingsApi.md#meetingstatus) | **PUT** /meetings/{meetingId}/status | Update meeting status
*MeetingsApi* | [**meetingSurveyDelete**](docs/Api/MeetingsApi.md#meetingsurveydelete) | **DELETE** /meetings/{meetingId}/survey | Delete a meeting survey
*MeetingsApi* | [**meetingSurveyGet**](docs/Api/MeetingsApi.md#meetingsurveyget) | **GET** /meetings/{meetingId}/survey | Get a meeting survey
*MeetingsApi* | [**meetingSurveyUpdate**](docs/Api/MeetingsApi.md#meetingsurveyupdate) | **PATCH** /meetings/{meetingId}/survey | Update a meeting survey
*MeetingsApi* | [**meetingToken**](docs/Api/MeetingsApi.md#meetingtoken) | **GET** /meetings/{meetingId}/token | Get meeting&#39;s token
*MeetingsApi* | [**meetingUpdate**](docs/Api/MeetingsApi.md#meetingupdate) | **PATCH** /meetings/{meetingId} | Update a meeting
*MeetingsApi* | [**meetingregistrantdelete**](docs/Api/MeetingsApi.md#meetingregistrantdelete) | **DELETE** /meetings/{meetingId}/registrants/{registrantId} | Delete a meeting registrant
*MeetingsApi* | [**meetings**](docs/Api/MeetingsApi.md#meetings) | **GET** /users/{userId}/meetings | List meetings
*MeetingsApi* | [**pastMeetingDetails**](docs/Api/MeetingsApi.md#pastmeetingdetails) | **GET** /past_meetings/{meetingId} | Get past meeting details
*MeetingsApi* | [**pastMeetingParticipants**](docs/Api/MeetingsApi.md#pastmeetingparticipants) | **GET** /past_meetings/{meetingId}/participants | Get past meeting participants
*MeetingsApi* | [**pastMeetings**](docs/Api/MeetingsApi.md#pastmeetings) | **GET** /past_meetings/{meetingId}/instances | List past meeting instances
*PACApi* | [**userPACs**](docs/Api/PACApi.md#userpacs) | **GET** /users/{userId}/pac | List a user&#39;s PAC accounts
*ReportsApi* | [**getBillingInvoicesReports**](docs/Api/ReportsApi.md#getbillinginvoicesreports) | **GET** /report/billing/invoices | Get billing invoice reports
*ReportsApi* | [**getBillingReport**](docs/Api/ReportsApi.md#getbillingreport) | **GET** /report/billing | Get billing reports
*ReportsApi* | [**reportChatMessages**](docs/Api/ReportsApi.md#reportchatmessages) | **GET** /report/chat/sessions/{sessionId} | Get chat messages reports
*ReportsApi* | [**reportChatSessions**](docs/Api/ReportsApi.md#reportchatsessions) | **GET** /report/chat/sessions | Get chat sessions reports
*ReportsApi* | [**reportCloudRecording**](docs/Api/ReportsApi.md#reportcloudrecording) | **GET** /report/cloud_recording | Get cloud recording usage report
*ReportsApi* | [**reportDaily**](docs/Api/ReportsApi.md#reportdaily) | **GET** /report/daily | Get daily usage report
*ReportsApi* | [**reportMeetingDetails**](docs/Api/ReportsApi.md#reportmeetingdetails) | **GET** /report/meetings/{meetingId} | Get meeting detail reports
*ReportsApi* | [**reportMeetingParticipants**](docs/Api/ReportsApi.md#reportmeetingparticipants) | **GET** /report/meetings/{meetingId}/participants | Get meeting participant reports
*ReportsApi* | [**reportMeetingPolls**](docs/Api/ReportsApi.md#reportmeetingpolls) | **GET** /report/meetings/{meetingId}/polls | Get meeting poll reports
*ReportsApi* | [**reportMeetings**](docs/Api/ReportsApi.md#reportmeetings) | **GET** /report/users/{userId}/meetings | Get meeting reports
*ReportsApi* | [**reportOperationLogs**](docs/Api/ReportsApi.md#reportoperationlogs) | **GET** /report/operationlogs | Get operation logs report
*ReportsApi* | [**reportSignInSignOutActivities**](docs/Api/ReportsApi.md#reportsigninsignoutactivities) | **GET** /report/activities | Get sign In / sign out activity report
*ReportsApi* | [**reportTelephone**](docs/Api/ReportsApi.md#reporttelephone) | **GET** /report/telephone | Get telephone reports
*ReportsApi* | [**reportUpcomingEvents**](docs/Api/ReportsApi.md#reportupcomingevents) | **GET** /report/upcoming_events | Get upcoming events report
*ReportsApi* | [**reportUsers**](docs/Api/ReportsApi.md#reportusers) | **GET** /report/users | Get active/inactive host reports
*ReportsApi* | [**reportWebinarDetails**](docs/Api/ReportsApi.md#reportwebinardetails) | **GET** /report/webinars/{webinarId} | Get webinar detail reports
*ReportsApi* | [**reportWebinarParticipants**](docs/Api/ReportsApi.md#reportwebinarparticipants) | **GET** /report/webinars/{webinarId}/participants | Get webinar participant reports
*ReportsApi* | [**reportWebinarPolls**](docs/Api/ReportsApi.md#reportwebinarpolls) | **GET** /report/webinars/{webinarId}/polls | Get webinar poll reports
*ReportsApi* | [**reportWebinarQA**](docs/Api/ReportsApi.md#reportwebinarqa) | **GET** /report/webinars/{webinarId}/qa | Get webinar Q&amp;A report
*RolesApi* | [**addRoleMembers**](docs/Api/RolesApi.md#addrolemembers) | **POST** /roles/{roleId}/members | Assign a role
*RolesApi* | [**createRole**](docs/Api/RolesApi.md#createrole) | **POST** /roles | Create a role
*RolesApi* | [**deleteRole**](docs/Api/RolesApi.md#deleterole) | **DELETE** /roles/{roleId} | Delete a role
*RolesApi* | [**getRoleInformation**](docs/Api/RolesApi.md#getroleinformation) | **GET** /roles/{roleId} | Get role information
*RolesApi* | [**roleMemberDelete**](docs/Api/RolesApi.md#rolememberdelete) | **DELETE** /roles/{roleId}/members/{memberId} | Unassign a role
*RolesApi* | [**roleMembers**](docs/Api/RolesApi.md#rolemembers) | **GET** /roles/{roleId}/members | List members in a role
*RolesApi* | [**roles**](docs/Api/RolesApi.md#roles) | **GET** /roles | List roles
*RolesApi* | [**updateRole**](docs/Api/RolesApi.md#updaterole) | **PATCH** /roles/{roleId} | Update role information
*SIPPhoneApi* | [**createSIPPhone**](docs/Api/SIPPhoneApi.md#createsipphone) | **POST** /sip_phones | Enable SIP phone
*SIPPhoneApi* | [**deleteSIPPhone**](docs/Api/SIPPhoneApi.md#deletesipphone) | **DELETE** /sip_phones/{phoneId} | Delete SIP phone
*SIPPhoneApi* | [**listSipPhones**](docs/Api/SIPPhoneApi.md#listsipphones) | **GET** /sip_phones | List SIP phones
*SIPPhoneApi* | [**updateSIPPhone**](docs/Api/SIPPhoneApi.md#updatesipphone) | **PATCH** /sip_phones/{phoneId} | Update SIP phone
*TSPApi* | [**tsp**](docs/Api/TSPApi.md#tsp) | **GET** /tsp | Get account&#39;s TSP information
*TSPApi* | [**tspUpdate**](docs/Api/TSPApi.md#tspupdate) | **PATCH** /tsp | Update account&#39;s TSP information
*TSPApi* | [**tspUrlUpdate**](docs/Api/TSPApi.md#tspurlupdate) | **PATCH** /users/{userId}/tsp/settings | Set global dial-in URL for a TSP user
*TSPApi* | [**userTSP**](docs/Api/TSPApi.md#usertsp) | **GET** /users/{userId}/tsp/{tspId} | Get a user&#39;s TSP account
*TSPApi* | [**userTSPCreate**](docs/Api/TSPApi.md#usertspcreate) | **POST** /users/{userId}/tsp | Add a user&#39;s TSP account
*TSPApi* | [**userTSPDelete**](docs/Api/TSPApi.md#usertspdelete) | **DELETE** /users/{userId}/tsp/{tspId} | Delete a user&#39;s TSP account
*TSPApi* | [**userTSPUpdate**](docs/Api/TSPApi.md#usertspupdate) | **PATCH** /users/{userId}/tsp/{tspId} | Update a TSP account
*TSPApi* | [**userTSPs**](docs/Api/TSPApi.md#usertsps) | **GET** /users/{userId}/tsp | List user&#39;s TSP accounts
*TrackingFieldApi* | [**trackingfieldCreate**](docs/Api/TrackingFieldApi.md#trackingfieldcreate) | **POST** /tracking_fields | Create a tracking field
*TrackingFieldApi* | [**trackingfieldDelete**](docs/Api/TrackingFieldApi.md#trackingfielddelete) | **DELETE** /tracking_fields/{fieldId} | Delete a tracking field
*TrackingFieldApi* | [**trackingfieldGet**](docs/Api/TrackingFieldApi.md#trackingfieldget) | **GET** /tracking_fields/{fieldId} | Get a tracking field
*TrackingFieldApi* | [**trackingfieldList**](docs/Api/TrackingFieldApi.md#trackingfieldlist) | **GET** /tracking_fields | List tracking fields
*TrackingFieldApi* | [**trackingfieldUpdate**](docs/Api/TrackingFieldApi.md#trackingfieldupdate) | **PATCH** /tracking_fields/{fieldId} | Update a tracking field
*UsersApi* | [**delUserVB**](docs/Api/UsersApi.md#deluservb) | **DELETE** /users/{userId}/settings/virtual_backgrounds | Delete Virtual Background files
*UsersApi* | [**updatePresenceStatus**](docs/Api/UsersApi.md#updatepresencestatus) | **PUT** /users/{userId}/presence_status | Update a user&#39;s presence status
*UsersApi* | [**uploadVBuser**](docs/Api/UsersApi.md#uploadvbuser) | **POST** /users/{userId}/settings/virtual_backgrounds | Upload Virtual Background files
*UsersApi* | [**user**](docs/Api/UsersApi.md#user) | **GET** /users/{userId} | Get a user
*UsersApi* | [**userAssistantCreate**](docs/Api/UsersApi.md#userassistantcreate) | **POST** /users/{userId}/assistants | Add assistants
*UsersApi* | [**userAssistantDelete**](docs/Api/UsersApi.md#userassistantdelete) | **DELETE** /users/{userId}/assistants/{assistantId} | Delete a user assistant
*UsersApi* | [**userAssistants**](docs/Api/UsersApi.md#userassistants) | **GET** /users/{userId}/assistants | List user assistants
*UsersApi* | [**userAssistantsDelete**](docs/Api/UsersApi.md#userassistantsdelete) | **DELETE** /users/{userId}/assistants | Delete user assistants
*UsersApi* | [**userCreate**](docs/Api/UsersApi.md#usercreate) | **POST** /users | Create users
*UsersApi* | [**userDelete**](docs/Api/UsersApi.md#userdelete) | **DELETE** /users/{userId} | Delete a user
*UsersApi* | [**userEmail**](docs/Api/UsersApi.md#useremail) | **GET** /users/email | Check a user email
*UsersApi* | [**userEmailUpdate**](docs/Api/UsersApi.md#useremailupdate) | **PUT** /users/{userId}/email | Update a user&#39;s email
*UsersApi* | [**userPassword**](docs/Api/UsersApi.md#userpassword) | **PUT** /users/{userId}/password | Update a user&#39;s password
*UsersApi* | [**userPermission**](docs/Api/UsersApi.md#userpermission) | **GET** /users/{userId}/permissions | Get user permissions
*UsersApi* | [**userPicture**](docs/Api/UsersApi.md#userpicture) | **POST** /users/{userId}/picture | Upload a user&#39;s profile picture
*UsersApi* | [**userPictureDelete**](docs/Api/UsersApi.md#userpicturedelete) | **DELETE** /users/{userId}/picture | Delete a user&#39;s profile picture
*UsersApi* | [**userSSOTokenDelete**](docs/Api/UsersApi.md#userssotokendelete) | **DELETE** /users/{userId}/token | Revoke a user&#39;s SSO token
*UsersApi* | [**userSchedulerDelete**](docs/Api/UsersApi.md#userschedulerdelete) | **DELETE** /users/{userId}/schedulers/{schedulerId} | Delete a scheduler
*UsersApi* | [**userSchedulers**](docs/Api/UsersApi.md#userschedulers) | **GET** /users/{userId}/schedulers | List user schedulers
*UsersApi* | [**userSchedulersDelete**](docs/Api/UsersApi.md#userschedulersdelete) | **DELETE** /users/{userId}/schedulers | Delete user schedulers
*UsersApi* | [**userSettings**](docs/Api/UsersApi.md#usersettings) | **GET** /users/{userId}/settings | Get user settings
*UsersApi* | [**userSettingsUpdate**](docs/Api/UsersApi.md#usersettingsupdate) | **PATCH** /users/{userId}/settings | Update user settings
*UsersApi* | [**userStatus**](docs/Api/UsersApi.md#userstatus) | **PUT** /users/{userId}/status | Update user status
*UsersApi* | [**userToken**](docs/Api/UsersApi.md#usertoken) | **GET** /users/{userId}/token | Get a user&#39;s token
*UsersApi* | [**userUpdate**](docs/Api/UsersApi.md#userupdate) | **PATCH** /users/{userId} | Update a user
*UsersApi* | [**userVanityName**](docs/Api/UsersApi.md#uservanityname) | **GET** /users/vanity_name | Check a user&#39;s PM room
*UsersApi* | [**userZak**](docs/Api/UsersApi.md#userzak) | **GET** /users/me/zak | Get user&#39;s ZAK
*UsersApi* | [**users**](docs/Api/UsersApi.md#users) | **GET** /users | List users
*WebinarsApi* | [**addBatchWebinarRegistrants**](docs/Api/WebinarsApi.md#addbatchwebinarregistrants) | **POST** /webinars/{webinarId}/batch_registrants | Perform batch registration
*WebinarsApi* | [**createWebinarBrandingNameTag**](docs/Api/WebinarsApi.md#createwebinarbrandingnametag) | **POST** /webinars/{webinarId}/branding/name_tags | Create a webinar&#39;s branding name tag
*WebinarsApi* | [**deleteWebinarBrandingNameTag**](docs/Api/WebinarsApi.md#deletewebinarbrandingnametag) | **DELETE** /webinars/{webinarId}/branding/name_tags | Delete a webinar&#39;s branding name tag
*WebinarsApi* | [**deleteWebinarBrandingVB**](docs/Api/WebinarsApi.md#deletewebinarbrandingvb) | **DELETE** /webinars/{webinarId}/branding/virtual_backgrounds | Delete a webinar&#39;s branding Virtual Backgrounds
*WebinarsApi* | [**deleteWebinarBrandingWallpaper**](docs/Api/WebinarsApi.md#deletewebinarbrandingwallpaper) | **DELETE** /webinars/{webinarId}/branding/wallpaper | Delete a webinar&#39;s branding wallpaper
*WebinarsApi* | [**deleteWebinarChatMessageById**](docs/Api/WebinarsApi.md#deletewebinarchatmessagebyid) | **DELETE** /live_webinars/{webinarId}/chat/messages/{messageId} | Delete a live webinar message
*WebinarsApi* | [**deleteWebinarRegistrant**](docs/Api/WebinarsApi.md#deletewebinarregistrant) | **DELETE** /webinars/{webinarId}/registrants/{registrantId} | Delete a webinar registrant
*WebinarsApi* | [**getTrackingSources**](docs/Api/WebinarsApi.md#gettrackingsources) | **GET** /webinars/{webinarId}/tracking_sources | Get webinar tracking sources
*WebinarsApi* | [**getWebinarBranding**](docs/Api/WebinarsApi.md#getwebinarbranding) | **GET** /webinars/{webinarId}/branding | Get webinar&#39;s session branding
*WebinarsApi* | [**getWebinarLiveStreamDetails**](docs/Api/WebinarsApi.md#getwebinarlivestreamdetails) | **GET** /webinars/{webinarId}/livestream | Get live stream details
*WebinarsApi* | [**listPastWebinarPollResults**](docs/Api/WebinarsApi.md#listpastwebinarpollresults) | **GET** /past_webinars/{webinarId}/polls | List past webinar poll results
*WebinarsApi* | [**listPastWebinarQA**](docs/Api/WebinarsApi.md#listpastwebinarqa) | **GET** /past_webinars/{webinarId}/qa | List Q&amp;A of past webinar
*WebinarsApi* | [**listWebinarParticipants**](docs/Api/WebinarsApi.md#listwebinarparticipants) | **GET** /past_webinars/{webinarId}/participants | List webinar participants
*WebinarsApi* | [**listWebinarTemplates**](docs/Api/WebinarsApi.md#listwebinartemplates) | **GET** /users/{userId}/webinar_templates | List webinar templates
*WebinarsApi* | [**pastWebinars**](docs/Api/WebinarsApi.md#pastwebinars) | **GET** /past_webinars/{webinarId}/instances | List past webinar instances
*WebinarsApi* | [**setWebinarBrandingVB**](docs/Api/WebinarsApi.md#setwebinarbrandingvb) | **PATCH** /webinars/{webinarId}/branding/virtual_backgrounds | Set webinar&#39;s default branding Virtual Background
*WebinarsApi* | [**updateWebinarBrandingNameTag**](docs/Api/WebinarsApi.md#updatewebinarbrandingnametag) | **PATCH** /webinars/{webinarId}/branding/name_tags/{nameTagId} | Update a webinar&#39;s branding name tag
*WebinarsApi* | [**uploadWebinarBrandingVB**](docs/Api/WebinarsApi.md#uploadwebinarbrandingvb) | **POST** /webinars/{webinarId}/branding/virtual_backgrounds | Upload a webinar&#39;s branding Virtual Background
*WebinarsApi* | [**uploadWebinarBrandingWallpaper**](docs/Api/WebinarsApi.md#uploadwebinarbrandingwallpaper) | **POST** /webinars/{webinarId}/branding/wallpaper | Upload a webinar&#39;s branding wallpaper
*WebinarsApi* | [**webinar**](docs/Api/WebinarsApi.md#webinar) | **GET** /webinars/{webinarId} | Get a webinar
*WebinarsApi* | [**webinarAbsentees**](docs/Api/WebinarsApi.md#webinarabsentees) | **GET** /past_webinars/{WebinarUUID}/absentees | Get webinar absentees
*WebinarsApi* | [**webinarCreate**](docs/Api/WebinarsApi.md#webinarcreate) | **POST** /users/{userId}/webinars | Create a webinar
*WebinarsApi* | [**webinarDelete**](docs/Api/WebinarsApi.md#webinardelete) | **DELETE** /webinars/{webinarId} | Delete a webinar
*WebinarsApi* | [**webinarInviteLinksCreate**](docs/Api/WebinarsApi.md#webinarinvitelinkscreate) | **POST** /webinars/{webinarId}/invite_links | Create webinar&#39;s invite links
*WebinarsApi* | [**webinarLiveStreamStatusUpdate**](docs/Api/WebinarsApi.md#webinarlivestreamstatusupdate) | **PATCH** /webinars/{webinarId}/livestream/status | Update Live Stream Status
*WebinarsApi* | [**webinarLiveStreamUpdate**](docs/Api/WebinarsApi.md#webinarlivestreamupdate) | **PATCH** /webinars/{webinarId}/livestream | Update a live stream
*WebinarsApi* | [**webinarLocalRecordingJoinToken**](docs/Api/WebinarsApi.md#webinarlocalrecordingjointoken) | **GET** /webinars/{webinarId}/jointoken/local_recording | Get a webinar&#39;s join token for local recording
*WebinarsApi* | [**webinarPanelistCreate**](docs/Api/WebinarsApi.md#webinarpanelistcreate) | **POST** /webinars/{webinarId}/panelists | Add panelists
*WebinarsApi* | [**webinarPanelistDelete**](docs/Api/WebinarsApi.md#webinarpanelistdelete) | **DELETE** /webinars/{webinarId}/panelists/{panelistId} | Remove a panelist
*WebinarsApi* | [**webinarPanelists**](docs/Api/WebinarsApi.md#webinarpanelists) | **GET** /webinars/{webinarId}/panelists | List panelists
*WebinarsApi* | [**webinarPanelistsDelete**](docs/Api/WebinarsApi.md#webinarpanelistsdelete) | **DELETE** /webinars/{webinarId}/panelists | Remove panelists
*WebinarsApi* | [**webinarPollCreate**](docs/Api/WebinarsApi.md#webinarpollcreate) | **POST** /webinars/{webinarId}/polls | Create a webinar&#39;s poll
*WebinarsApi* | [**webinarPollDelete**](docs/Api/WebinarsApi.md#webinarpolldelete) | **DELETE** /webinars/{webinarId}/polls/{pollId} | Delete a webinar poll
*WebinarsApi* | [**webinarPollGet**](docs/Api/WebinarsApi.md#webinarpollget) | **GET** /webinars/{webinarId}/polls/{pollId} | Get a webinar poll
*WebinarsApi* | [**webinarPollUpdate**](docs/Api/WebinarsApi.md#webinarpollupdate) | **PUT** /webinars/{webinarId}/polls/{pollId} | Update a webinar poll
*WebinarsApi* | [**webinarPolls**](docs/Api/WebinarsApi.md#webinarpolls) | **GET** /webinars/{webinarId}/polls | List a webinar&#39;s polls
*WebinarsApi* | [**webinarRegistrantCreate**](docs/Api/WebinarsApi.md#webinarregistrantcreate) | **POST** /webinars/{webinarId}/registrants | Add a webinar registrant
*WebinarsApi* | [**webinarRegistrantGet**](docs/Api/WebinarsApi.md#webinarregistrantget) | **GET** /webinars/{webinarId}/registrants/{registrantId} | Get a webinar registrant
*WebinarsApi* | [**webinarRegistrantQuestionUpdate**](docs/Api/WebinarsApi.md#webinarregistrantquestionupdate) | **PATCH** /webinars/{webinarId}/registrants/questions | Update registration questions
*WebinarsApi* | [**webinarRegistrantStatus**](docs/Api/WebinarsApi.md#webinarregistrantstatus) | **PUT** /webinars/{webinarId}/registrants/status | Update registrant&#39;s status
*WebinarsApi* | [**webinarRegistrants**](docs/Api/WebinarsApi.md#webinarregistrants) | **GET** /webinars/{webinarId}/registrants | List webinar registrants
*WebinarsApi* | [**webinarRegistrantsQuestionsGet**](docs/Api/WebinarsApi.md#webinarregistrantsquestionsget) | **GET** /webinars/{webinarId}/registrants/questions | List registration questions
*WebinarsApi* | [**webinarStatus**](docs/Api/WebinarsApi.md#webinarstatus) | **PUT** /webinars/{webinarId}/status | Update webinar status
*WebinarsApi* | [**webinarSurveyDelete**](docs/Api/WebinarsApi.md#webinarsurveydelete) | **DELETE** /webinars/{webinarId}/survey | Delete a webinar survey
*WebinarsApi* | [**webinarSurveyGet**](docs/Api/WebinarsApi.md#webinarsurveyget) | **GET** /webinars/{webinarId}/survey | Get a webinar survey
*WebinarsApi* | [**webinarSurveyUpdate**](docs/Api/WebinarsApi.md#webinarsurveyupdate) | **PATCH** /webinars/{webinarId}/survey | Update a webinar survey
*WebinarsApi* | [**webinarToken**](docs/Api/WebinarsApi.md#webinartoken) | **GET** /webinars/{webinarId}/token | Get webinar&#39;s token
*WebinarsApi* | [**webinarUpdate**](docs/Api/WebinarsApi.md#webinarupdate) | **PATCH** /webinars/{webinarId} | Update a webinar
*WebinarsApi* | [**webinars**](docs/Api/WebinarsApi.md#webinars) | **GET** /users/{userId}/webinars | List webinars
*WorkspacesApi* | [**createReservation**](docs/Api/WorkspacesApi.md#createreservation) | **POST** /workspaces/{workspaceId}/reservations | Create a reservation
*WorkspacesApi* | [**deleteReservation**](docs/Api/WorkspacesApi.md#deletereservation) | **DELETE** /workspaces/{workspaceId}/reservations/{reservationId} | Delete a reservation
*WorkspacesApi* | [**getHotDeskUsage**](docs/Api/WorkspacesApi.md#gethotdeskusage) | **GET** /workspaces/usage | Get a location&#39;s hot desk usage
*WorkspacesApi* | [**listReservations**](docs/Api/WorkspacesApi.md#listreservations) | **GET** /workspaces/{workspaceId}/reservations | Get a workspace&#39;s reservations
*WorkspacesApi* | [**listWorkspaces**](docs/Api/WorkspacesApi.md#listworkspaces) | **GET** /workspaces | List workspaces
*WorkspacesApi* | [**updateReservation**](docs/Api/WorkspacesApi.md#updatereservation) | **PATCH** /workspaces/{workspaceId}/reservations/{reservationId} | Update a reservation
*ZoomRoomsApi* | [**addARoom**](docs/Api/ZoomRoomsApi.md#addaroom) | **POST** /rooms | Add a Zoom Room
*ZoomRoomsApi* | [**changeZRLocation**](docs/Api/ZoomRoomsApi.md#changezrlocation) | **PUT** /rooms/{roomId}/location | Change a Zoom Room&#39;s location
*ZoomRoomsApi* | [**createRoomDeviceProfile**](docs/Api/ZoomRoomsApi.md#createroomdeviceprofile) | **POST** /rooms/{roomId}/device_profiles | Create a device profile
*ZoomRoomsApi* | [**deleteAZoomRoom**](docs/Api/ZoomRoomsApi.md#deleteazoomroom) | **DELETE** /rooms/{roomId} | Delete a Zoom Room
*ZoomRoomsApi* | [**deleteRoomProfile**](docs/Api/ZoomRoomsApi.md#deleteroomprofile) | **DELETE** /rooms/{roomId}/device_profiles/{deviceProfileId} | Delete a device profile
*ZoomRoomsApi* | [**getRoomDevices**](docs/Api/ZoomRoomsApi.md#getroomdevices) | **GET** /rooms/{roomId}/device_profiles/devices | Get device information
*ZoomRoomsApi* | [**getRoomProfile**](docs/Api/ZoomRoomsApi.md#getroomprofile) | **GET** /rooms/{roomId}/device_profiles/{deviceProfileId} | Get a device profile
*ZoomRoomsApi* | [**getRoomProfiles**](docs/Api/ZoomRoomsApi.md#getroomprofiles) | **GET** /rooms/{roomId}/device_profiles | List device profiles
*ZoomRoomsApi* | [**getZRProfile**](docs/Api/ZoomRoomsApi.md#getzrprofile) | **GET** /rooms/{roomId} | Get Zoom Room profile
*ZoomRoomsApi* | [**getZRSettings**](docs/Api/ZoomRoomsApi.md#getzrsettings) | **GET** /rooms/{roomId}/settings | Get Zoom Room settings
*ZoomRoomsApi* | [**listDigitalSignageContent**](docs/Api/ZoomRoomsApi.md#listdigitalsignagecontent) | **GET** /rooms/digital_signage | List digital signage contents
*ZoomRoomsApi* | [**listZRDevices**](docs/Api/ZoomRoomsApi.md#listzrdevices) | **GET** /rooms/{roomId}/devices | List Zoom Room devices
*ZoomRoomsApi* | [**listZoomRooms**](docs/Api/ZoomRoomsApi.md#listzoomrooms) | **GET** /rooms | List Zoom Rooms
*ZoomRoomsApi* | [**manageE911signage**](docs/Api/ZoomRoomsApi.md#managee911signage) | **PATCH** /rooms/events | Update E911 digital signage
*ZoomRoomsApi* | [**updateDeviceProfile**](docs/Api/ZoomRoomsApi.md#updatedeviceprofile) | **PATCH** /rooms/{roomId}/device_profiles/{deviceProfileId} | Update a device profile
*ZoomRoomsApi* | [**updateRoomProfile**](docs/Api/ZoomRoomsApi.md#updateroomprofile) | **PATCH** /rooms/{roomId} | Update a Zoom Room profile
*ZoomRoomsApi* | [**updateZRSettings**](docs/Api/ZoomRoomsApi.md#updatezrsettings) | **PATCH** /rooms/{roomId}/settings | Update Zoom Room settings
*ZoomRoomsApi* | [**zoomRoomsControls**](docs/Api/ZoomRoomsApi.md#zoomroomscontrols) | **PATCH** /rooms/{id}/events | Use Zoom Room controls
*ZoomRoomsAccountApi* | [**getZRAccountProfile**](docs/Api/ZoomRoomsAccountApi.md#getzraccountprofile) | **GET** /rooms/account_profile | Get Zoom Room account profile
*ZoomRoomsAccountApi* | [**getZRAccountSettings**](docs/Api/ZoomRoomsAccountApi.md#getzraccountsettings) | **GET** /rooms/account_settings | Get Zoom Room account settings
*ZoomRoomsAccountApi* | [**updateZRAccProfile**](docs/Api/ZoomRoomsAccountApi.md#updatezraccprofile) | **PATCH** /rooms/account_profile | Update Zoom Room account profile
*ZoomRoomsAccountApi* | [**updateZoomRoomAccSettings**](docs/Api/ZoomRoomsAccountApi.md#updatezoomroomaccsettings) | **PATCH** /rooms/account_settings | Update Zoom Room account settings
*ZoomRoomsCalendarApi* | [**addACalendarResourceToCalendarService**](docs/Api/ZoomRoomsCalendarApi.md#addacalendarresourcetocalendarservice) | **POST** /rooms/calendar/services/{serviceId}/resources | Add a calendar resource to a calendar service
*ZoomRoomsCalendarApi* | [**deleteACalendarResource**](docs/Api/ZoomRoomsCalendarApi.md#deleteacalendarresource) | **DELETE** /rooms/calendar/services/{serviceId}/resources/{resourceId} | Delete a calendar resource
*ZoomRoomsCalendarApi* | [**deleteACalendarService**](docs/Api/ZoomRoomsCalendarApi.md#deleteacalendarservice) | **DELETE** /rooms/calendar/services/{serviceId} | Delete a calendar service
*ZoomRoomsCalendarApi* | [**getCalendarResourceById**](docs/Api/ZoomRoomsCalendarApi.md#getcalendarresourcebyid) | **GET** /rooms/calendar/services/{serviceId}/resources/{resourceId} | Get a calendar resource by ID
*ZoomRoomsCalendarApi* | [**getCalendarResourcesByServiceId**](docs/Api/ZoomRoomsCalendarApi.md#getcalendarresourcesbyserviceid) | **GET** /rooms/calendar/services/{serviceId}/resources | List calendar resources by calendar service
*ZoomRoomsCalendarApi* | [**getCalendarServices**](docs/Api/ZoomRoomsCalendarApi.md#getcalendarservices) | **GET** /rooms/calendar/services | List calendar services
*ZoomRoomsCalendarApi* | [**syncACalendarService**](docs/Api/ZoomRoomsCalendarApi.md#syncacalendarservice) | **PUT** /rooms/calendar/services/{serviceId}/sync | Start calendar service sync process
*ZoomRoomsDevicesApi* | [**changeZoomRoomsAppVersion**](docs/Api/ZoomRoomsDevicesApi.md#changezoomroomsappversion) | **PUT** /rooms/{roomId}/devices/{deviceId}/app_version | Change Zoom Rooms app version
*ZoomRoomsLocationApi* | [**addAZRLocation**](docs/Api/ZoomRoomsLocationApi.md#addazrlocation) | **POST** /rooms/locations | Add a location
*ZoomRoomsLocationApi* | [**changeParentLocation**](docs/Api/ZoomRoomsLocationApi.md#changeparentlocation) | **PUT** /rooms/locations/{locationId}/location | Change the assigned parent location
*ZoomRoomsLocationApi* | [**getZRLocationProfile**](docs/Api/ZoomRoomsLocationApi.md#getzrlocationprofile) | **GET** /rooms/locations/{locationId} | Get Zoom Room location profile
*ZoomRoomsLocationApi* | [**getZRLocationSettings**](docs/Api/ZoomRoomsLocationApi.md#getzrlocationsettings) | **GET** /rooms/locations/{locationId}/settings | Get location settings
*ZoomRoomsLocationApi* | [**getZRLocationStructure**](docs/Api/ZoomRoomsLocationApi.md#getzrlocationstructure) | **GET** /rooms/locations/structure | Get Zoom Room location structure
*ZoomRoomsLocationApi* | [**listZRLocations**](docs/Api/ZoomRoomsLocationApi.md#listzrlocations) | **GET** /rooms/locations | List Zoom Room locations
*ZoomRoomsLocationApi* | [**updateZRLocationProfile**](docs/Api/ZoomRoomsLocationApi.md#updatezrlocationprofile) | **PATCH** /rooms/locations/{locationId} | Update Zoom Room location profile
*ZoomRoomsLocationApi* | [**updateZRLocationSettings**](docs/Api/ZoomRoomsLocationApi.md#updatezrlocationsettings) | **PATCH** /rooms/locations/{locationId}/settings | Update location settings
*ZoomRoomsLocationApi* | [**updateZoomRoomsLocationStructure**](docs/Api/ZoomRoomsLocationApi.md#updatezoomroomslocationstructure) | **PUT** /rooms/locations/structure | Update Zoom Rooms location structure

## Models

- [AccountList](docs/Model/AccountList.md)
- [AccountListItem](docs/Model/AccountListItem.md)
- [AccountListItemAccountsInner](docs/Model/AccountListItemAccountsInner.md)
- [AccountOptions](docs/Model/AccountOptions.md)
- [AccountPlan](docs/Model/AccountPlan.md)
- [AccountPlanBaseRequired](docs/Model/AccountPlanBaseRequired.md)
- [AccountPlanRequired](docs/Model/AccountPlanRequired.md)
- [AccountPlans](docs/Model/AccountPlans.md)
- [AccountPlansPlanAudio](docs/Model/AccountPlansPlanAudio.md)
- [AccountPlansPlanBundleInner](docs/Model/AccountPlansPlanBundleInner.md)
- [AccountPlansPlanLargeMeetingInner](docs/Model/AccountPlansPlanLargeMeetingInner.md)
- [AccountPlansPlanRoomConnectorInner](docs/Model/AccountPlansPlanRoomConnectorInner.md)
- [AccountPlansPlanSdkCmrInner](docs/Model/AccountPlansPlanSdkCmrInner.md)
- [AccountPlansPlanWebinarInner](docs/Model/AccountPlansPlanWebinarInner.md)
- [AccountPlansPlanWhiteboard](docs/Model/AccountPlansPlanWhiteboard.md)
- [AccountPlansPlanZoomEventsInner](docs/Model/AccountPlansPlanZoomEventsInner.md)
- [AccountPlansPlanZoomRooms](docs/Model/AccountPlansPlanZoomRooms.md)
- [AccountSettings](docs/Model/AccountSettings.md)
- [AccountSettings200Response](docs/Model/AccountSettings200Response.md)
- [AccountSettingsAudioConference](docs/Model/AccountSettingsAudioConference.md)
- [AccountSettingsAudioConferenceTollFreeAndFeeBasedTollCall](docs/Model/AccountSettingsAudioConferenceTollFreeAndFeeBasedTollCall.md)
- [AccountSettingsAudioConferenceTollFreeAndFeeBasedTollCallNumbersInner](docs/Model/AccountSettingsAudioConferenceTollFreeAndFeeBasedTollCallNumbersInner.md)
- [AccountSettingsAuthentication](docs/Model/AccountSettingsAuthentication.md)
- [AccountSettingsAuthenticationOneOf](docs/Model/AccountSettingsAuthenticationOneOf.md)
- [AccountSettingsAuthenticationOneOf1](docs/Model/AccountSettingsAuthenticationOneOf1.md)
- [AccountSettingsAuthenticationOneOf1AuthenticationOptions](docs/Model/AccountSettingsAuthenticationOneOf1AuthenticationOptions.md)
- [AccountSettingsAuthenticationOneOfAuthenticationOptions](docs/Model/AccountSettingsAuthenticationOneOfAuthenticationOptions.md)
- [AccountSettingsAuthenticationUpdate](docs/Model/AccountSettingsAuthenticationUpdate.md)
- [AccountSettingsAuthenticationUpdateOneOf](docs/Model/AccountSettingsAuthenticationUpdateOneOf.md)
- [AccountSettingsAuthenticationUpdateOneOf1](docs/Model/AccountSettingsAuthenticationUpdateOneOf1.md)
- [AccountSettingsAuthenticationUpdateOneOf1AuthenticationOption](docs/Model/AccountSettingsAuthenticationUpdateOneOf1AuthenticationOption.md)
- [AccountSettingsAuthenticationUpdateOneOfAuthenticationOption](docs/Model/AccountSettingsAuthenticationUpdateOneOfAuthenticationOption.md)
- [AccountSettingsEmailNotification](docs/Model/AccountSettingsEmailNotification.md)
- [AccountSettingsFeature](docs/Model/AccountSettingsFeature.md)
- [AccountSettingsInMeeting](docs/Model/AccountSettingsInMeeting.md)
- [AccountSettingsInMeetingClosedCaptioning](docs/Model/AccountSettingsInMeetingClosedCaptioning.md)
- [AccountSettingsInMeetingLanguageInterpretation](docs/Model/AccountSettingsInMeetingLanguageInterpretation.md)
- [AccountSettingsInMeetingMeetingPolling](docs/Model/AccountSettingsInMeetingMeetingPolling.md)
- [AccountSettingsInMeetingVirtualBackgroundSettings](docs/Model/AccountSettingsInMeetingVirtualBackgroundSettings.md)
- [AccountSettingsInMeetingVirtualBackgroundSettingsFilesInner](docs/Model/AccountSettingsInMeetingVirtualBackgroundSettingsFilesInner.md)
- [AccountSettingsInMeetingWebinarChat](docs/Model/AccountSettingsInMeetingWebinarChat.md)
- [AccountSettingsInMeetingWebinarLiveStreaming](docs/Model/AccountSettingsInMeetingWebinarLiveStreaming.md)
- [AccountSettingsInMeetingWebinarPolling](docs/Model/AccountSettingsInMeetingWebinarPolling.md)
- [AccountSettingsIntegration](docs/Model/AccountSettingsIntegration.md)
- [AccountSettingsOtherOptions](docs/Model/AccountSettingsOtherOptions.md)
- [AccountSettingsRecording](docs/Model/AccountSettingsRecording.md)
- [AccountSettingsRecordingArchive](docs/Model/AccountSettingsRecordingArchive.md)
- [AccountSettingsRecordingIpAddressAccessControl](docs/Model/AccountSettingsRecordingIpAddressAccessControl.md)
- [AccountSettingsRecordingRecordFilesSeparately](docs/Model/AccountSettingsRecordingRecordFilesSeparately.md)
- [AccountSettingsRecordingRecordingPasswordRequirement](docs/Model/AccountSettingsRecordingRecordingPasswordRequirement.md)
- [AccountSettingsScheduleMeeting](docs/Model/AccountSettingsScheduleMeeting.md)
- [AccountSettingsScheduleMeetingAlwaysDisplayZoomMeetingAsTopic](docs/Model/AccountSettingsScheduleMeetingAlwaysDisplayZoomMeetingAsTopic.md)
- [AccountSettingsScheduleMeetingAlwaysDisplayZoomWebinarAsTopic](docs/Model/AccountSettingsScheduleMeetingAlwaysDisplayZoomWebinarAsTopic.md)
- [AccountSettingsScheduleMeetingHideMeetingDescription](docs/Model/AccountSettingsScheduleMeetingHideMeetingDescription.md)
- [AccountSettingsScheduleMeetingHideWebinarDescription](docs/Model/AccountSettingsScheduleMeetingHideWebinarDescription.md)
- [AccountSettingsScheduleMeetingMeetingPasswordRequirement](docs/Model/AccountSettingsScheduleMeetingMeetingPasswordRequirement.md)
- [AccountSettingsSecurity](docs/Model/AccountSettingsSecurity.md)
- [AccountSettingsSecurityPasswordRequirement](docs/Model/AccountSettingsSecurityPasswordRequirement.md)
- [AccountSettingsTSP](docs/Model/AccountSettingsTSP.md)
- [AccountSettingsTelephony](docs/Model/AccountSettingsTelephony.md)
- [AccountSettingsTelephonyTelephonyRegions](docs/Model/AccountSettingsTelephonyTelephonyRegions.md)
- [AccountSettingsUpdateRequest](docs/Model/AccountSettingsUpdateRequest.md)
- [AccountSettingsUpdateTelephony](docs/Model/AccountSettingsUpdateTelephony.md)
- [AccountSettingsUpdateTelephonyTelephonyRegions](docs/Model/AccountSettingsUpdateTelephonyTelephonyRegions.md)
- [AccountSettingsZoomRooms](docs/Model/AccountSettingsZoomRooms.md)
- [AccountTrustedDomain200Response](docs/Model/AccountTrustedDomain200Response.md)
- [AccountUpdateSettings](docs/Model/AccountUpdateSettings.md)
- [AccountUpdateSettingsInMeeting](docs/Model/AccountUpdateSettingsInMeeting.md)
- [AccountUpdateSettingsInMeetingClosedCaptioning](docs/Model/AccountUpdateSettingsInMeetingClosedCaptioning.md)
- [AccountUpdateSettingsInMeetingMeetingPolling](docs/Model/AccountUpdateSettingsInMeetingMeetingPolling.md)
- [AccountUpdateSettingsInMeetingVirtualBackgroundSettings](docs/Model/AccountUpdateSettingsInMeetingVirtualBackgroundSettings.md)
- [AccountUpdateSettingsInMeetingVirtualBackgroundSettingsFilesInner](docs/Model/AccountUpdateSettingsInMeetingVirtualBackgroundSettingsFilesInner.md)
- [AccountUpdateSettingsInMeetingWebinarChat](docs/Model/AccountUpdateSettingsInMeetingWebinarChat.md)
- [AccountUpdateSettingsInMeetingWebinarLiveStreaming](docs/Model/AccountUpdateSettingsInMeetingWebinarLiveStreaming.md)
- [AccountUpdateSettingsInMeetingWebinarPolling](docs/Model/AccountUpdateSettingsInMeetingWebinarPolling.md)
- [AccountUpdateSettingsScheduleMeeting](docs/Model/AccountUpdateSettingsScheduleMeeting.md)
- [AccountUpdateSettingsScheduleMeetingMeetingPasswordRequirement](docs/Model/AccountUpdateSettingsScheduleMeetingMeetingPasswordRequirement.md)
- [AddACalendarResourceToCalendarService201Response](docs/Model/AddACalendarResourceToCalendarService201Response.md)
- [AddACalendarResourceToCalendarServiceRequest](docs/Model/AddACalendarResourceToCalendarServiceRequest.md)
- [AddARoom201Response](docs/Model/AddARoom201Response.md)
- [AddARoomRequest](docs/Model/AddARoomRequest.md)
- [AddAZRLocation200Response](docs/Model/AddAZRLocation200Response.md)
- [AddAZRLocationRequest](docs/Model/AddAZRLocationRequest.md)
- [AddBatchRegistrants200Response](docs/Model/AddBatchRegistrants200Response.md)
- [AddBatchRegistrants200ResponseRegistrantsInner](docs/Model/AddBatchRegistrants200ResponseRegistrantsInner.md)
- [AddBatchRegistrantsRequest](docs/Model/AddBatchRegistrantsRequest.md)
- [AddBatchRegistrantsRequestRegistrantsInner](docs/Model/AddBatchRegistrantsRequestRegistrantsInner.md)
- [AddBatchWebinarRegistrants200Response](docs/Model/AddBatchWebinarRegistrants200Response.md)
- [AddBatchWebinarRegistrants200ResponseRegistrantsInner](docs/Model/AddBatchWebinarRegistrants200ResponseRegistrantsInner.md)
- [AddRoleMembers201Response](docs/Model/AddRoleMembers201Response.md)
- [AddRoleMembersRequest](docs/Model/AddRoleMembersRequest.md)
- [AddRoleMembersRequestMembersInner](docs/Model/AddRoleMembersRequestMembersInner.md)
- [BillingContact](docs/Model/BillingContact.md)
- [BillingContactRequired](docs/Model/BillingContactRequired.md)
- [ChangeParentLocationRequest](docs/Model/ChangeParentLocationRequest.md)
- [ChangeZRLocationRequest](docs/Model/ChangeZRLocationRequest.md)
- [ChangeZoomRoomsAppVersionRequest](docs/Model/ChangeZoomRoomsAppVersionRequest.md)
- [Channel](docs/Model/Channel.md)
- [ChannelProperties](docs/Model/ChannelProperties.md)
- [ChannelPropertiesChannelSettings](docs/Model/ChannelPropertiesChannelSettings.md)
- [CloudArchivedFiles](docs/Model/CloudArchivedFiles.md)
- [CloudArchivedFilesArchiveFilesInner](docs/Model/CloudArchivedFilesArchiveFilesInner.md)
- [CloudArchivedFilesCompleteTime](docs/Model/CloudArchivedFilesCompleteTime.md)
- [CreateBatchPolls201Response](docs/Model/CreateBatchPolls201Response.md)
- [CreateBatchPolls201ResponsePollsInner](docs/Model/CreateBatchPolls201ResponsePollsInner.md)
- [CreateBatchPolls201ResponsePollsInnerQuestionsInner](docs/Model/CreateBatchPolls201ResponsePollsInnerQuestionsInner.md)
- [CreateBatchPolls201ResponsePollsInnerQuestionsInnerPromptsInner](docs/Model/CreateBatchPolls201ResponsePollsInnerQuestionsInnerPromptsInner.md)
- [CreateBatchPollsRequest](docs/Model/CreateBatchPollsRequest.md)
- [CreateBatchPollsRequestPollsInner](docs/Model/CreateBatchPollsRequestPollsInner.md)
- [CreateBatchPollsRequestPollsInnerQuestionsInner](docs/Model/CreateBatchPollsRequestPollsInnerQuestionsInner.md)
- [CreateBatchPollsRequestPollsInnerQuestionsInnerPromptsInner](docs/Model/CreateBatchPollsRequestPollsInnerQuestionsInnerPromptsInner.md)
- [CreateReservation201Response](docs/Model/CreateReservation201Response.md)
- [CreateReservationRequest](docs/Model/CreateReservationRequest.md)
- [CreateReservationRequestMeeting](docs/Model/CreateReservationRequestMeeting.md)
- [CreateRole201Response](docs/Model/CreateRole201Response.md)
- [CreateRoleRequest](docs/Model/CreateRoleRequest.md)
- [CreateRoomDeviceProfileRequest](docs/Model/CreateRoomDeviceProfileRequest.md)
- [CreateSIPPhoneRequest](docs/Model/CreateSIPPhoneRequest.md)
- [CreateWebinar](docs/Model/CreateWebinar.md)
- [CreateWebinarBrandingNameTag201Response](docs/Model/CreateWebinarBrandingNameTag201Response.md)
- [CreateWebinarBrandingNameTagRequest](docs/Model/CreateWebinarBrandingNameTagRequest.md)
- [CreateWebinarSettings](docs/Model/CreateWebinarSettings.md)
- [CreateWebinarSettingsAttendeesAndPanelistsReminderEmailNotification](docs/Model/CreateWebinarSettingsAttendeesAndPanelistsReminderEmailNotification.md)
- [CreateWebinarSettingsFollowUpAbsenteesEmailNotification](docs/Model/CreateWebinarSettingsFollowUpAbsenteesEmailNotification.md)
- [CreateWebinarSettingsFollowUpAttendeesEmailNotification](docs/Model/CreateWebinarSettingsFollowUpAttendeesEmailNotification.md)
- [CreateWebinarSettingsLanguageInterpretation](docs/Model/CreateWebinarSettingsLanguageInterpretation.md)
- [CreateWebinarSettingsLanguageInterpretationInterpretersInner](docs/Model/CreateWebinarSettingsLanguageInterpretationInterpretersInner.md)
- [CreateWebinarSettingsQuestionAndAnswer](docs/Model/CreateWebinarSettingsQuestionAndAnswer.md)
- [CreateWebinarTrackingFieldsInner](docs/Model/CreateWebinarTrackingFieldsInner.md)
- [CustomQuestion](docs/Model/CustomQuestion.md)
- [DashboardCRC200Response](docs/Model/DashboardCRC200Response.md)
- [DashboardCRC200ResponseAllOf](docs/Model/DashboardCRC200ResponseAllOf.md)
- [DashboardCRC200ResponseAllOf1](docs/Model/DashboardCRC200ResponseAllOf1.md)
- [DashboardCRC200ResponseAllOf1CrcPortsUsageInner](docs/Model/DashboardCRC200ResponseAllOf1CrcPortsUsageInner.md)
- [DashboardCRC200ResponseAllOf1CrcPortsUsageInnerCrcPortsHourUsageInner](docs/Model/DashboardCRC200ResponseAllOf1CrcPortsUsageInnerCrcPortsHourUsageInner.md)
- [DashboardChat200Response](docs/Model/DashboardChat200Response.md)
- [DashboardChat200ResponseAllOf](docs/Model/DashboardChat200ResponseAllOf.md)
- [DashboardChat200ResponseAllOf1](docs/Model/DashboardChat200ResponseAllOf1.md)
- [DashboardChat200ResponseAllOf1UsersInner](docs/Model/DashboardChat200ResponseAllOf1UsersInner.md)
- [DashboardClientFeedback200Response](docs/Model/DashboardClientFeedback200Response.md)
- [DashboardClientFeedback200ResponseClientFeedbacksInner](docs/Model/DashboardClientFeedback200ResponseClientFeedbacksInner.md)
- [DashboardClientFeedbackDetail200Response](docs/Model/DashboardClientFeedbackDetail200Response.md)
- [DashboardClientFeedbackDetail200ResponseAllOf](docs/Model/DashboardClientFeedbackDetail200ResponseAllOf.md)
- [DashboardClientFeedbackDetail200ResponseAllOf1](docs/Model/DashboardClientFeedbackDetail200ResponseAllOf1.md)
- [DashboardClientFeedbackDetail200ResponseAllOf1ClientFeedbackDetailsInner](docs/Model/DashboardClientFeedbackDetail200ResponseAllOf1ClientFeedbackDetailsInner.md)
- [DashboardIM200Response](docs/Model/DashboardIM200Response.md)
- [DashboardIM200ResponseAllOf](docs/Model/DashboardIM200ResponseAllOf.md)
- [DashboardIM200ResponseAllOf1](docs/Model/DashboardIM200ResponseAllOf1.md)
- [DashboardIM200ResponseAllOf1UsersInner](docs/Model/DashboardIM200ResponseAllOf1UsersInner.md)
- [DashboardIssueDetailZoomRoom200Response](docs/Model/DashboardIssueDetailZoomRoom200Response.md)
- [DashboardIssueDetailZoomRoom200ResponseAllOf](docs/Model/DashboardIssueDetailZoomRoom200ResponseAllOf.md)
- [DashboardIssueDetailZoomRoom200ResponseAllOf1](docs/Model/DashboardIssueDetailZoomRoom200ResponseAllOf1.md)
- [DashboardIssueDetailZoomRoom200ResponseAllOf1IssueDetailsInner](docs/Model/DashboardIssueDetailZoomRoom200ResponseAllOf1IssueDetailsInner.md)
- [DashboardIssueZoomRoom200Response](docs/Model/DashboardIssueZoomRoom200Response.md)
- [DashboardIssueZoomRoom200ResponseAllOf](docs/Model/DashboardIssueZoomRoom200ResponseAllOf.md)
- [DashboardIssueZoomRoom200ResponseAllOf1](docs/Model/DashboardIssueZoomRoom200ResponseAllOf1.md)
- [DashboardIssueZoomRoom200ResponseAllOf1ZoomRoomsInner](docs/Model/DashboardIssueZoomRoom200ResponseAllOf1ZoomRoomsInner.md)
- [DashboardMeetingParticipantShare200Response](docs/Model/DashboardMeetingParticipantShare200Response.md)
- [DashboardMeetingParticipantShare200ResponseAllOf](docs/Model/DashboardMeetingParticipantShare200ResponseAllOf.md)
- [DashboardMeetingParticipantShare200ResponseAllOfParticipantsInner](docs/Model/DashboardMeetingParticipantShare200ResponseAllOfParticipantsInner.md)
- [DashboardMeetingParticipantShare200ResponseAllOfParticipantsInnerDetailsInner](docs/Model/DashboardMeetingParticipantShare200ResponseAllOfParticipantsInnerDetailsInner.md)
- [DashboardMeetingParticipants200Response](docs/Model/DashboardMeetingParticipants200Response.md)
- [DashboardMeetingParticipants200ResponseAllOf](docs/Model/DashboardMeetingParticipants200ResponseAllOf.md)
- [DashboardMeetingParticipants200ResponseAllOfParticipantsInner](docs/Model/DashboardMeetingParticipants200ResponseAllOfParticipantsInner.md)
- [DashboardMeetings200Response](docs/Model/DashboardMeetings200Response.md)
- [DashboardMeetings200ResponseAllOf](docs/Model/DashboardMeetings200ResponseAllOf.md)
- [DashboardMeetings200ResponseAllOf1](docs/Model/DashboardMeetings200ResponseAllOf1.md)
- [DashboardQuality200Response](docs/Model/DashboardQuality200Response.md)
- [DashboardQuality200ResponseQuality](docs/Model/DashboardQuality200ResponseQuality.md)
- [DashboardWebinarParticipantShare200Response](docs/Model/DashboardWebinarParticipantShare200Response.md)
- [DashboardWebinarParticipantShare200ResponseAllOf](docs/Model/DashboardWebinarParticipantShare200ResponseAllOf.md)
- [DashboardWebinarParticipantShare200ResponseAllOfParticipantsInner](docs/Model/DashboardWebinarParticipantShare200ResponseAllOfParticipantsInner.md)
- [DashboardWebinarParticipantShare200ResponseAllOfParticipantsInnerDetailsInner](docs/Model/DashboardWebinarParticipantShare200ResponseAllOfParticipantsInnerDetailsInner.md)
- [DashboardWebinarParticipants200Response](docs/Model/DashboardWebinarParticipants200Response.md)
- [DashboardWebinarParticipants200ResponseAllOf](docs/Model/DashboardWebinarParticipants200ResponseAllOf.md)
- [DashboardWebinarParticipants200ResponseAllOfParticipantsInner](docs/Model/DashboardWebinarParticipants200ResponseAllOfParticipantsInner.md)
- [DashboardWebinars200Response](docs/Model/DashboardWebinars200Response.md)
- [DashboardWebinars200ResponseAllOf](docs/Model/DashboardWebinars200ResponseAllOf.md)
- [DashboardWebinars200ResponseAllOf1](docs/Model/DashboardWebinars200ResponseAllOf1.md)
- [DashboardZoomRoom200Response](docs/Model/DashboardZoomRoom200Response.md)
- [DashboardZoomRoom200ResponseAllOf](docs/Model/DashboardZoomRoom200ResponseAllOf.md)
- [DashboardZoomRoom200ResponseAllOfPastMeetings](docs/Model/DashboardZoomRoom200ResponseAllOfPastMeetings.md)
- [DashboardZoomRoom200ResponseAllOfPastMeetingsAllOf](docs/Model/DashboardZoomRoom200ResponseAllOfPastMeetingsAllOf.md)
- [DashboardZoomRoom200ResponseAllOfPastMeetingsAllOf1](docs/Model/DashboardZoomRoom200ResponseAllOfPastMeetingsAllOf1.md)
- [DashboardZoomRoomIssue200Response](docs/Model/DashboardZoomRoomIssue200Response.md)
- [DashboardZoomRoomIssue200ResponseAllOf](docs/Model/DashboardZoomRoomIssue200ResponseAllOf.md)
- [DashboardZoomRoomIssue200ResponseAllOf1](docs/Model/DashboardZoomRoomIssue200ResponseAllOf1.md)
- [DashboardZoomRoomIssue200ResponseAllOf1IssuesInner](docs/Model/DashboardZoomRoomIssue200ResponseAllOf1IssuesInner.md)
- [DateTime](docs/Model/DateTime.md)
- [Device](docs/Model/Device.md)
- [DeviceCreate201Response](docs/Model/DeviceCreate201Response.md)
- [DeviceCreate201ResponseAllOf](docs/Model/DeviceCreate201ResponseAllOf.md)
- [DeviceList](docs/Model/DeviceList.md)
- [DeviceListAllOf](docs/Model/DeviceListAllOf.md)
- [DomainsList](docs/Model/DomainsList.md)
- [DomainsListDomainsInner](docs/Model/DomainsListDomainsInner.md)
- [DomainsListDomainsInnerAllOf](docs/Model/DomainsListDomainsInnerAllOf.md)
- [GetArchivedFileStatistics200Response](docs/Model/GetArchivedFileStatistics200Response.md)
- [GetArchivedFileStatistics200ResponseStatisticByFileExtension](docs/Model/GetArchivedFileStatistics200ResponseStatisticByFileExtension.md)
- [GetArchivedFileStatistics200ResponseStatisticByFileStatus](docs/Model/GetArchivedFileStatistics200ResponseStatisticByFileStatus.md)
- [GetBillingInvoicesReports200Response](docs/Model/GetBillingInvoicesReports200Response.md)
- [GetBillingInvoicesReports200ResponseInvoicesInner](docs/Model/GetBillingInvoicesReports200ResponseInvoicesInner.md)
- [GetBillingReport200Response](docs/Model/GetBillingReport200Response.md)
- [GetBillingReport200ResponseBillingReportsInner](docs/Model/GetBillingReport200ResponseBillingReportsInner.md)
- [GetCalendarResourcesByServiceId200Response](docs/Model/GetCalendarResourcesByServiceId200Response.md)
- [GetCalendarResourcesByServiceId200ResponseCalendarResourcesInner](docs/Model/GetCalendarResourcesByServiceId200ResponseCalendarResourcesInner.md)
- [GetCalendarServices200Response](docs/Model/GetCalendarServices200Response.md)
- [GetCalendarServices200ResponseCalendarServicesInner](docs/Model/GetCalendarServices200ResponseCalendarServicesInner.md)
- [GetClientVersions200Response](docs/Model/GetClientVersions200Response.md)
- [GetClientVersions200ResponseClientVersionsInner](docs/Model/GetClientVersions200ResponseClientVersionsInner.md)
- [GetGroupLockSettings200Response](docs/Model/GetGroupLockSettings200Response.md)
- [GetGroupLockSettings200ResponseOneOf](docs/Model/GetGroupLockSettings200ResponseOneOf.md)
- [GetGroupLockSettings200ResponseOneOfAudioConferencing](docs/Model/GetGroupLockSettings200ResponseOneOfAudioConferencing.md)
- [GetGroupLockSettings200ResponseOneOfEmailNotification](docs/Model/GetGroupLockSettings200ResponseOneOfEmailNotification.md)
- [GetGroupLockSettings200ResponseOneOfInMeeting](docs/Model/GetGroupLockSettings200ResponseOneOfInMeeting.md)
- [GetGroupLockSettings200ResponseOneOfOtherOptions](docs/Model/GetGroupLockSettings200ResponseOneOfOtherOptions.md)
- [GetGroupLockSettings200ResponseOneOfRecording](docs/Model/GetGroupLockSettings200ResponseOneOfRecording.md)
- [GetGroupLockSettings200ResponseOneOfRecordingIpAddressAccessControl](docs/Model/GetGroupLockSettings200ResponseOneOfRecordingIpAddressAccessControl.md)
- [GetGroupLockSettings200ResponseOneOfScheduleMeeting](docs/Model/GetGroupLockSettings200ResponseOneOfScheduleMeeting.md)
- [GetGroupLockSettings200ResponseOneOfTelephony](docs/Model/GetGroupLockSettings200ResponseOneOfTelephony.md)
- [GetGroupSettings200Response](docs/Model/GetGroupSettings200Response.md)
- [GetGroupSettings200ResponseOneOf](docs/Model/GetGroupSettings200ResponseOneOf.md)
- [GetGroupSettings200ResponseOneOfEmailNotification](docs/Model/GetGroupSettings200ResponseOneOfEmailNotification.md)
- [GetGroupSettings200ResponseOneOfInMeeting](docs/Model/GetGroupSettings200ResponseOneOfInMeeting.md)
- [GetGroupSettings200ResponseOneOfInMeetingClosedCaptioning](docs/Model/GetGroupSettings200ResponseOneOfInMeetingClosedCaptioning.md)
- [GetGroupSettings200ResponseOneOfInMeetingLanguageInterpretation](docs/Model/GetGroupSettings200ResponseOneOfInMeetingLanguageInterpretation.md)
- [GetGroupSettings200ResponseOneOfInMeetingManualCaptioning](docs/Model/GetGroupSettings200ResponseOneOfInMeetingManualCaptioning.md)
- [GetGroupSettings200ResponseOneOfInMeetingMeetingPolling](docs/Model/GetGroupSettings200ResponseOneOfInMeetingMeetingPolling.md)
- [GetGroupSettings200ResponseOneOfInMeetingVirtualBackgroundSettings](docs/Model/GetGroupSettings200ResponseOneOfInMeetingVirtualBackgroundSettings.md)
- [GetGroupSettings200ResponseOneOfInMeetingVirtualBackgroundSettingsFilesInner](docs/Model/GetGroupSettings200ResponseOneOfInMeetingVirtualBackgroundSettingsFilesInner.md)
- [GetGroupSettings200ResponseOneOfInMeetingWebinarChat](docs/Model/GetGroupSettings200ResponseOneOfInMeetingWebinarChat.md)
- [GetGroupSettings200ResponseOneOfInMeetingWebinarLiveStreaming](docs/Model/GetGroupSettings200ResponseOneOfInMeetingWebinarLiveStreaming.md)
- [GetGroupSettings200ResponseOneOfInMeetingWebinarPolling](docs/Model/GetGroupSettings200ResponseOneOfInMeetingWebinarPolling.md)
- [GetGroupSettings200ResponseOneOfRecording](docs/Model/GetGroupSettings200ResponseOneOfRecording.md)
- [GetGroupSettings200ResponseOneOfRecordingArchive](docs/Model/GetGroupSettings200ResponseOneOfRecordingArchive.md)
- [GetGroupSettings200ResponseOneOfRecordingArchiveSettings](docs/Model/GetGroupSettings200ResponseOneOfRecordingArchiveSettings.md)
- [GetGroupSettings200ResponseOneOfRecordingRecordFilesSeparately](docs/Model/GetGroupSettings200ResponseOneOfRecordingRecordFilesSeparately.md)
- [GetGroupSettings200ResponseOneOfScheduleMeeting](docs/Model/GetGroupSettings200ResponseOneOfScheduleMeeting.md)
- [GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomMeetingAsTopic](docs/Model/GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomMeetingAsTopic.md)
- [GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomWebinarAsTopic](docs/Model/GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomWebinarAsTopic.md)
- [GetGroupSettings200ResponseOneOfTelephony](docs/Model/GetGroupSettings200ResponseOneOfTelephony.md)
- [GetGroupSettings200ResponseOneOfTelephonyTelephonyRegions](docs/Model/GetGroupSettings200ResponseOneOfTelephonyTelephonyRegions.md)
- [GetHotDeskUsage200Response](docs/Model/GetHotDeskUsage200Response.md)
- [GetHotDeskUsage200ResponseDeskUsage](docs/Model/GetHotDeskUsage200ResponseDeskUsage.md)
- [GetHotDeskUsage200ResponseRoomUsage](docs/Model/GetHotDeskUsage200ResponseRoomUsage.md)
- [GetHotDeskUsage200ResponseTotalUsage](docs/Model/GetHotDeskUsage200ResponseTotalUsage.md)
- [GetMeetingLiveStreamDetails200Response](docs/Model/GetMeetingLiveStreamDetails200Response.md)
- [GetRoleInformation200Response](docs/Model/GetRoleInformation200Response.md)
- [GetRoleInformation200ResponseSubAccountPrivileges](docs/Model/GetRoleInformation200ResponseSubAccountPrivileges.md)
- [GetRoomDevices200Response](docs/Model/GetRoomDevices200Response.md)
- [GetRoomDevices200ResponseCamerasInner](docs/Model/GetRoomDevices200ResponseCamerasInner.md)
- [GetRoomDevices200ResponseMicrophonesInner](docs/Model/GetRoomDevices200ResponseMicrophonesInner.md)
- [GetRoomDevices200ResponseSpeakersInner](docs/Model/GetRoomDevices200ResponseSpeakersInner.md)
- [GetRoomProfile200Response](docs/Model/GetRoomProfile200Response.md)
- [GetTrackingSources200Response](docs/Model/GetTrackingSources200Response.md)
- [GetTrackingSources200ResponseTrackingSourcesInner](docs/Model/GetTrackingSources200ResponseTrackingSourcesInner.md)
- [GetWebinarBranding200Response](docs/Model/GetWebinarBranding200Response.md)
- [GetWebinarBranding200ResponseNameTagsInner](docs/Model/GetWebinarBranding200ResponseNameTagsInner.md)
- [GetWebinarBranding200ResponseVirtualBackgroundsInner](docs/Model/GetWebinarBranding200ResponseVirtualBackgroundsInner.md)
- [GetWebinarBranding200ResponseWallpaper](docs/Model/GetWebinarBranding200ResponseWallpaper.md)
- [GetWebinarLiveStreamDetails200Response](docs/Model/GetWebinarLiveStreamDetails200Response.md)
- [GetZRAccountProfile200Response](docs/Model/GetZRAccountProfile200Response.md)
- [GetZRAccountProfile200ResponseBasic](docs/Model/GetZRAccountProfile200ResponseBasic.md)
- [GetZRAccountSettings200Response](docs/Model/GetZRAccountSettings200Response.md)
- [GetZRAccountSettings200ResponseOneOf](docs/Model/GetZRAccountSettings200ResponseOneOf.md)
- [GetZRAccountSettings200ResponseOneOf1](docs/Model/GetZRAccountSettings200ResponseOneOf1.md)
- [GetZRAccountSettings200ResponseOneOf1ClientAlert](docs/Model/GetZRAccountSettings200ResponseOneOf1ClientAlert.md)
- [GetZRAccountSettings200ResponseOneOf1DigitalSignage](docs/Model/GetZRAccountSettings200ResponseOneOf1DigitalSignage.md)
- [GetZRAccountSettings200ResponseOneOf1DigitalSignageBanner](docs/Model/GetZRAccountSettings200ResponseOneOf1DigitalSignageBanner.md)
- [GetZRAccountSettings200ResponseOneOf1DigitalSignageDisplayPeriod](docs/Model/GetZRAccountSettings200ResponseOneOf1DigitalSignageDisplayPeriod.md)
- [GetZRAccountSettings200ResponseOneOf1DigitalSignagePlayListInner](docs/Model/GetZRAccountSettings200ResponseOneOf1DigitalSignagePlayListInner.md)
- [GetZRAccountSettings200ResponseOneOf1DigitalSignagePlayListInnerContentsInner](docs/Model/GetZRAccountSettings200ResponseOneOf1DigitalSignagePlayListInnerContentsInner.md)
- [GetZRAccountSettings200ResponseOneOf1Notification](docs/Model/GetZRAccountSettings200ResponseOneOf1Notification.md)
- [GetZRAccountSettings200ResponseOneOfZoomRooms](docs/Model/GetZRAccountSettings200ResponseOneOfZoomRooms.md)
- [GetZRLocationProfile200Response](docs/Model/GetZRLocationProfile200Response.md)
- [GetZRLocationProfile200ResponseBasic](docs/Model/GetZRLocationProfile200ResponseBasic.md)
- [GetZRLocationSettings200Response](docs/Model/GetZRLocationSettings200Response.md)
- [GetZRLocationSettings200ResponseOneOf](docs/Model/GetZRLocationSettings200ResponseOneOf.md)
- [GetZRLocationSettings200ResponseOneOf1](docs/Model/GetZRLocationSettings200ResponseOneOf1.md)
- [GetZRLocationSettings200ResponseOneOf1DigitalSignage](docs/Model/GetZRLocationSettings200ResponseOneOf1DigitalSignage.md)
- [GetZRLocationSettings200ResponseOneOf1DigitalSignageDisplayPeriod](docs/Model/GetZRLocationSettings200ResponseOneOf1DigitalSignageDisplayPeriod.md)
- [GetZRLocationSettings200ResponseOneOfMeetingSecurity](docs/Model/GetZRLocationSettings200ResponseOneOfMeetingSecurity.md)
- [GetZRLocationSettings200ResponseOneOfZoomRooms](docs/Model/GetZRLocationSettings200ResponseOneOfZoomRooms.md)
- [GetZRLocationStructure200Response](docs/Model/GetZRLocationStructure200Response.md)
- [GetZRProfile200Response](docs/Model/GetZRProfile200Response.md)
- [GetZRProfile200ResponseBasic](docs/Model/GetZRProfile200ResponseBasic.md)
- [GetZRProfile200ResponseDevice](docs/Model/GetZRProfile200ResponseDevice.md)
- [GetZRSettings200Response](docs/Model/GetZRSettings200Response.md)
- [GetZRSettings200ResponseOneOf](docs/Model/GetZRSettings200ResponseOneOf.md)
- [GetZRSettings200ResponseOneOf1](docs/Model/GetZRSettings200ResponseOneOf1.md)
- [GetZRSettings200ResponseOneOf1DigitalSignage](docs/Model/GetZRSettings200ResponseOneOf1DigitalSignage.md)
- [GetZRSettings200ResponseOneOf1DigitalSignagePlayListInner](docs/Model/GetZRSettings200ResponseOneOf1DigitalSignagePlayListInner.md)
- [GetZRSettings200ResponseOneOf1DigitalSignagePlayListInnerContentsInner](docs/Model/GetZRSettings200ResponseOneOf1DigitalSignagePlayListInnerContentsInner.md)
- [GetZRSettings200ResponseOneOfZoomRooms](docs/Model/GetZRSettings200ResponseOneOfZoomRooms.md)
- [Group](docs/Model/Group.md)
- [Group200Response](docs/Model/Group200Response.md)
- [GroupAdmins200Response](docs/Model/GroupAdmins200Response.md)
- [GroupAdmins200ResponseAdminsInner](docs/Model/GroupAdmins200ResponseAdminsInner.md)
- [GroupAdminsCreate201Response](docs/Model/GroupAdminsCreate201Response.md)
- [GroupAdminsCreateRequest](docs/Model/GroupAdminsCreateRequest.md)
- [GroupAdminsCreateRequestAdminsInner](docs/Model/GroupAdminsCreateRequestAdminsInner.md)
- [GroupAdminsDeleteUserIdParameter](docs/Model/GroupAdminsDeleteUserIdParameter.md)
- [GroupAdminsDeleteUserIdParameterOneOf](docs/Model/GroupAdminsDeleteUserIdParameterOneOf.md)
- [GroupCreate201Response](docs/Model/GroupCreate201Response.md)
- [GroupCreateRequest](docs/Model/GroupCreateRequest.md)
- [GroupList](docs/Model/GroupList.md)
- [GroupListAllOf](docs/Model/GroupListAllOf.md)
- [GroupListAllOf1](docs/Model/GroupListAllOf1.md)
- [GroupListAllOf1MeetingsInner](docs/Model/GroupListAllOf1MeetingsInner.md)
- [GroupListAllOf1MeetingsInnerAllOf](docs/Model/GroupListAllOf1MeetingsInnerAllOf.md)
- [GroupListGroupsInner](docs/Model/GroupListGroupsInner.md)
- [GroupListGroupsInnerAllOf](docs/Model/GroupListGroupsInnerAllOf.md)
- [GroupLockedSettingsRequest](docs/Model/GroupLockedSettingsRequest.md)
- [GroupLockedSettingsRequestOneOf](docs/Model/GroupLockedSettingsRequestOneOf.md)
- [GroupLockedSettingsRequestOneOfAudioConferencing](docs/Model/GroupLockedSettingsRequestOneOfAudioConferencing.md)
- [GroupLockedSettingsRequestOneOfEmailNotification](docs/Model/GroupLockedSettingsRequestOneOfEmailNotification.md)
- [GroupLockedSettingsRequestOneOfInMeeting](docs/Model/GroupLockedSettingsRequestOneOfInMeeting.md)
- [GroupLockedSettingsRequestOneOfRecording](docs/Model/GroupLockedSettingsRequestOneOfRecording.md)
- [GroupLockedSettingsRequestOneOfScheduleMeeting](docs/Model/GroupLockedSettingsRequestOneOfScheduleMeeting.md)
- [GroupMember](docs/Model/GroupMember.md)
- [GroupMemberList](docs/Model/GroupMemberList.md)
- [GroupMemberListAllOf](docs/Model/GroupMemberListAllOf.md)
- [GroupMembers200Response](docs/Model/GroupMembers200Response.md)
- [GroupMembers200ResponseMembersInner](docs/Model/GroupMembers200ResponseMembersInner.md)
- [GroupMembersCreate201Response](docs/Model/GroupMembersCreate201Response.md)
- [GroupMembersCreateRequest](docs/Model/GroupMembersCreateRequest.md)
- [GroupMembersCreateRequestMembersInner](docs/Model/GroupMembersCreateRequestMembersInner.md)
- [GroupSettingsAudioConference](docs/Model/GroupSettingsAudioConference.md)
- [GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCall](docs/Model/GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCall.md)
- [GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCallNumbersInner](docs/Model/GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCallNumbersInner.md)
- [GroupSettingsOtherOptions](docs/Model/GroupSettingsOtherOptions.md)
- [GroupUpdateRequest](docs/Model/GroupUpdateRequest.md)
- [GroupUserSettingsAuthentication](docs/Model/GroupUserSettingsAuthentication.md)
- [GroupUserSettingsAuthenticationOneOf](docs/Model/GroupUserSettingsAuthenticationOneOf.md)
- [GroupUserSettingsAuthenticationOneOf1](docs/Model/GroupUserSettingsAuthenticationOneOf1.md)
- [GroupUserSettingsAuthenticationOneOf1AuthenticationOptions](docs/Model/GroupUserSettingsAuthenticationOneOf1AuthenticationOptions.md)
- [GroupUserSettingsAuthenticationOneOfAuthenticationOptions](docs/Model/GroupUserSettingsAuthenticationOneOfAuthenticationOptions.md)
- [GroupUserSettingsAuthenticationUpdate](docs/Model/GroupUserSettingsAuthenticationUpdate.md)
- [GroupUserSettingsAuthenticationUpdateOneOf](docs/Model/GroupUserSettingsAuthenticationUpdateOneOf.md)
- [GroupUserSettingsAuthenticationUpdateOneOf1](docs/Model/GroupUserSettingsAuthenticationUpdateOneOf1.md)
- [GroupUserSettingsAuthenticationUpdateOneOf1AuthenticationOption](docs/Model/GroupUserSettingsAuthenticationUpdateOneOf1AuthenticationOption.md)
- [GroupUserSettingsAuthenticationUpdateOneOfAuthenticationOption](docs/Model/GroupUserSettingsAuthenticationUpdateOneOfAuthenticationOption.md)
- [IMGroup](docs/Model/IMGroup.md)
- [IMGroupAllOf](docs/Model/IMGroupAllOf.md)
- [IMGroupList](docs/Model/IMGroupList.md)
- [IMGroupListAllOf](docs/Model/IMGroupListAllOf.md)
- [IMGroupListAllOf1](docs/Model/IMGroupListAllOf1.md)
- [ImGroup200Response](docs/Model/ImGroup200Response.md)
- [ImGroup200ResponseAllOf](docs/Model/ImGroup200ResponseAllOf.md)
- [ImGroupCreate201Response](docs/Model/ImGroupCreate201Response.md)
- [ImGroupCreateRequest](docs/Model/ImGroupCreateRequest.md)
- [ImGroupMembersCreateRequest](docs/Model/ImGroupMembersCreateRequest.md)
- [ImGroupMembersCreateRequestMembersInner](docs/Model/ImGroupMembersCreateRequestMembersInner.md)
- [ImGroupUpdateRequest](docs/Model/ImGroupUpdateRequest.md)
- [InMeetingControlRequest](docs/Model/InMeetingControlRequest.md)
- [InMeetingControlRequestParams](docs/Model/InMeetingControlRequestParams.md)
- [InMeetingControlRequestParamsContactsInner](docs/Model/InMeetingControlRequestParamsContactsInner.md)
- [InMeetingControlRequestParamsInviteOptions](docs/Model/InMeetingControlRequestParamsInviteOptions.md)
- [InviteLink](docs/Model/InviteLink.md)
- [InviteLinkAttendeesInner](docs/Model/InviteLinkAttendeesInner.md)
- [InviteLinkResponse](docs/Model/InviteLinkResponse.md)
- [InviteLinkResponseAttendeesInner](docs/Model/InviteLinkResponseAttendeesInner.md)
- [ListArchivedFiles200Response](docs/Model/ListArchivedFiles200Response.md)
- [ListDigitalSignageContent200Response](docs/Model/ListDigitalSignageContent200Response.md)
- [ListDigitalSignageContent200ResponseContentsInner](docs/Model/ListDigitalSignageContent200ResponseContentsInner.md)
- [ListMeetingSatisfaction200Response](docs/Model/ListMeetingSatisfaction200Response.md)
- [ListMeetingSatisfaction200ResponseClientSatisfactionInner](docs/Model/ListMeetingSatisfaction200ResponseClientSatisfactionInner.md)
- [ListMeetingTemplates200Response](docs/Model/ListMeetingTemplates200Response.md)
- [ListMeetingTemplates200ResponseTemplatesInner](docs/Model/ListMeetingTemplates200ResponseTemplatesInner.md)
- [ListPastMeetingFiles200Response](docs/Model/ListPastMeetingFiles200Response.md)
- [ListPastMeetingFiles200ResponseInMeetingFilesInner](docs/Model/ListPastMeetingFiles200ResponseInMeetingFilesInner.md)
- [ListPastMeetingPolls200Response](docs/Model/ListPastMeetingPolls200Response.md)
- [ListPastMeetingPolls200ResponseQuestionsInner](docs/Model/ListPastMeetingPolls200ResponseQuestionsInner.md)
- [ListPastMeetingPolls200ResponseQuestionsInnerQuestionDetailsInner](docs/Model/ListPastMeetingPolls200ResponseQuestionsInnerQuestionDetailsInner.md)
- [ListPastMeetingPollsMeetingIdParameter](docs/Model/ListPastMeetingPollsMeetingIdParameter.md)
- [ListPastWebinarFiles200Response](docs/Model/ListPastWebinarFiles200Response.md)
- [ListPastWebinarFiles200ResponseInMeetingFilesInner](docs/Model/ListPastWebinarFiles200ResponseInMeetingFilesInner.md)
- [ListPastWebinarPollResults200Response](docs/Model/ListPastWebinarPollResults200Response.md)
- [ListPastWebinarPollResults200ResponseQuestionsInner](docs/Model/ListPastWebinarPollResults200ResponseQuestionsInner.md)
- [ListPastWebinarQA200Response](docs/Model/ListPastWebinarQA200Response.md)
- [ListPastWebinarQA200ResponseQuestionsInner](docs/Model/ListPastWebinarQA200ResponseQuestionsInner.md)
- [ListPastWebinarQA200ResponseQuestionsInnerQuestionDetailsInner](docs/Model/ListPastWebinarQA200ResponseQuestionsInnerQuestionDetailsInner.md)
- [ListReservations200Response](docs/Model/ListReservations200Response.md)
- [ListReservations200ResponseReservationsInner](docs/Model/ListReservations200ResponseReservationsInner.md)
- [ListSipPhones200Response](docs/Model/ListSipPhones200Response.md)
- [ListSipPhones200ResponsePhonesInner](docs/Model/ListSipPhones200ResponsePhonesInner.md)
- [ListWebinarParticipants200Response](docs/Model/ListWebinarParticipants200Response.md)
- [ListWebinarParticipants200ResponseParticipantsInner](docs/Model/ListWebinarParticipants200ResponseParticipantsInner.md)
- [ListWebinarTemplates200Response](docs/Model/ListWebinarTemplates200Response.md)
- [ListWebinarTemplates200ResponseTemplatesInner](docs/Model/ListWebinarTemplates200ResponseTemplatesInner.md)
- [ListWorkspaces200Response](docs/Model/ListWorkspaces200Response.md)
- [ListWorkspaces200ResponseWorkspacesInner](docs/Model/ListWorkspaces200ResponseWorkspacesInner.md)
- [ListZRDevices200Response](docs/Model/ListZRDevices200Response.md)
- [ListZRDevices200ResponseDevicesInner](docs/Model/ListZRDevices200ResponseDevicesInner.md)
- [ListZRLocations200Response](docs/Model/ListZRLocations200Response.md)
- [ListZRLocations200ResponseLocationsInner](docs/Model/ListZRLocations200ResponseLocationsInner.md)
- [ListZoomRooms200Response](docs/Model/ListZoomRooms200Response.md)
- [ListZoomRooms200ResponseRoomsInner](docs/Model/ListZoomRooms200ResponseRoomsInner.md)
- [Listmeetingmetrics](docs/Model/Listmeetingmetrics.md)
- [ListmeetingmetricsTrackingFieldsInner](docs/Model/ListmeetingmetricsTrackingFieldsInner.md)
- [ManageE911signage202Response](docs/Model/ManageE911signage202Response.md)
- [ManageE911signageRequest](docs/Model/ManageE911signageRequest.md)
- [ManageE911signageRequestOneOf](docs/Model/ManageE911signageRequestOneOf.md)
- [ManageE911signageRequestOneOf1](docs/Model/ManageE911signageRequestOneOf1.md)
- [ManageE911signageRequestOneOf1Params](docs/Model/ManageE911signageRequestOneOf1Params.md)
- [ManageE911signageRequestOneOfParams](docs/Model/ManageE911signageRequestOneOfParams.md)
- [Meeting200Response](docs/Model/Meeting200Response.md)
- [Meeting200ResponseAllOf](docs/Model/Meeting200ResponseAllOf.md)
- [MeetingCreate](docs/Model/MeetingCreate.md)
- [MeetingCreate201Response](docs/Model/MeetingCreate201Response.md)
- [MeetingCreate201ResponseAllOf](docs/Model/MeetingCreate201ResponseAllOf.md)
- [MeetingCreateSettings](docs/Model/MeetingCreateSettings.md)
- [MeetingCreateSettingsApprovedOrDeniedCountriesOrRegions](docs/Model/MeetingCreateSettingsApprovedOrDeniedCountriesOrRegions.md)
- [MeetingCreateSettingsAuthenticationExceptionInner](docs/Model/MeetingCreateSettingsAuthenticationExceptionInner.md)
- [MeetingCreateSettingsBreakoutRoom](docs/Model/MeetingCreateSettingsBreakoutRoom.md)
- [MeetingCreateSettingsBreakoutRoomRoomsInner](docs/Model/MeetingCreateSettingsBreakoutRoomRoomsInner.md)
- [MeetingCreateSettingsLanguageInterpretation](docs/Model/MeetingCreateSettingsLanguageInterpretation.md)
- [MeetingCreateSettingsLanguageInterpretationInterpretersInner](docs/Model/MeetingCreateSettingsLanguageInterpretationInterpretersInner.md)
- [MeetingCreateSettingsMeetingInviteesInner](docs/Model/MeetingCreateSettingsMeetingInviteesInner.md)
- [MeetingCreateTrackingFieldsInner](docs/Model/MeetingCreateTrackingFieldsInner.md)
- [MeetingInfo](docs/Model/MeetingInfo.md)
- [MeetingInfoGet](docs/Model/MeetingInfoGet.md)
- [MeetingInfoGetTrackingFieldsInner](docs/Model/MeetingInfoGetTrackingFieldsInner.md)
- [MeetingInfoTrackingFieldsInner](docs/Model/MeetingInfoTrackingFieldsInner.md)
- [MeetingInstances](docs/Model/MeetingInstances.md)
- [MeetingInstancesAllOf](docs/Model/MeetingInstancesAllOf.md)
- [MeetingInvitation](docs/Model/MeetingInvitation.md)
- [MeetingInviteLinksCreate201Response](docs/Model/MeetingInviteLinksCreate201Response.md)
- [MeetingInviteLinksCreateRequest](docs/Model/MeetingInviteLinksCreateRequest.md)
- [MeetingLiveStream](docs/Model/MeetingLiveStream.md)
- [MeetingLiveStreamStatus](docs/Model/MeetingLiveStreamStatus.md)
- [MeetingLiveStreamStatusSettings](docs/Model/MeetingLiveStreamStatusSettings.md)
- [MeetingLocalRecordingJoinToken200Response](docs/Model/MeetingLocalRecordingJoinToken200Response.md)
- [MeetingMetric](docs/Model/MeetingMetric.md)
- [MeetingMetricCustomKeysInner](docs/Model/MeetingMetricCustomKeysInner.md)
- [MeetingOrWebinarSecurityAccountSettings](docs/Model/MeetingOrWebinarSecurityAccountSettings.md)
- [MeetingOrWebinarSecurityAccountSettings1](docs/Model/MeetingOrWebinarSecurityAccountSettings1.md)
- [MeetingOrWebinarSecurityAccountSettings1MeetingSecurity](docs/Model/MeetingOrWebinarSecurityAccountSettings1MeetingSecurity.md)
- [MeetingOrWebinarSecurityAccountSettings1MeetingSecurityChatEtiquetteTool](docs/Model/MeetingOrWebinarSecurityAccountSettings1MeetingSecurityChatEtiquetteTool.md)
- [MeetingOrWebinarSecurityAccountSettings1MeetingSecurityChatEtiquetteToolPoliciesInner](docs/Model/MeetingOrWebinarSecurityAccountSettings1MeetingSecurityChatEtiquetteToolPoliciesInner.md)
- [MeetingOrWebinarSecurityAccountSettings1MeetingSecurityMeetingPasswordRequirement](docs/Model/MeetingOrWebinarSecurityAccountSettings1MeetingSecurityMeetingPasswordRequirement.md)
- [MeetingOrWebinarSecurityAccountSettings1MeetingSecurityWaitingRoomSettings](docs/Model/MeetingOrWebinarSecurityAccountSettings1MeetingSecurityWaitingRoomSettings.md)
- [MeetingOrWebinarSecurityAccountSettingsMeetingSecurity](docs/Model/MeetingOrWebinarSecurityAccountSettingsMeetingSecurity.md)
- [MeetingOrWebinarSecurityAccountSettingsMeetingSecurityChatEtiquetteTool](docs/Model/MeetingOrWebinarSecurityAccountSettingsMeetingSecurityChatEtiquetteTool.md)
- [MeetingOrWebinarSecurityAccountSettingsMeetingSecurityChatEtiquetteToolPoliciesInner](docs/Model/MeetingOrWebinarSecurityAccountSettingsMeetingSecurityChatEtiquetteToolPoliciesInner.md)
- [MeetingOrWebinarSecurityAccountSettingsMeetingSecurityMeetingPasswordRequirement](docs/Model/MeetingOrWebinarSecurityAccountSettingsMeetingSecurityMeetingPasswordRequirement.md)
- [MeetingOrWebinarSecurityAccountSettingsMeetingSecurityWaitingRoomSettings](docs/Model/MeetingOrWebinarSecurityAccountSettingsMeetingSecurityWaitingRoomSettings.md)
- [MeetingPollCreate201Response](docs/Model/MeetingPollCreate201Response.md)
- [MeetingPollCreate201ResponseAllOf](docs/Model/MeetingPollCreate201ResponseAllOf.md)
- [MeetingPollCreateRequest](docs/Model/MeetingPollCreateRequest.md)
- [MeetingQuality](docs/Model/MeetingQuality.md)
- [MeetingRecordingRegistrantCreate201Response](docs/Model/MeetingRecordingRegistrantCreate201Response.md)
- [MeetingRecordingRegistrantList](docs/Model/MeetingRecordingRegistrantList.md)
- [MeetingRegistrant](docs/Model/MeetingRegistrant.md)
- [MeetingRegistrantAllOf](docs/Model/MeetingRegistrantAllOf.md)
- [MeetingRegistrantAllOf1](docs/Model/MeetingRegistrantAllOf1.md)
- [MeetingRegistrantCreate201Response](docs/Model/MeetingRegistrantCreate201Response.md)
- [MeetingRegistrantCreateRequest](docs/Model/MeetingRegistrantCreateRequest.md)
- [MeetingRegistrantCreateRequestAllOf](docs/Model/MeetingRegistrantCreateRequestAllOf.md)
- [MeetingRegistrantCreateRequestAllOf1](docs/Model/MeetingRegistrantCreateRequestAllOf1.md)
- [MeetingRegistrantList](docs/Model/MeetingRegistrantList.md)
- [MeetingRegistrantQuestions](docs/Model/MeetingRegistrantQuestions.md)
- [MeetingRegistrantQuestionsCustomQuestionsInner](docs/Model/MeetingRegistrantQuestionsCustomQuestionsInner.md)
- [MeetingRegistrantQuestionsQuestionsInner](docs/Model/MeetingRegistrantQuestionsQuestionsInner.md)
- [MeetingRegistrantsQuestionsGet200Response](docs/Model/MeetingRegistrantsQuestionsGet200Response.md)
- [MeetingSecuritySettings](docs/Model/MeetingSecuritySettings.md)
- [MeetingSecuritySettingsMeetingSecurity](docs/Model/MeetingSecuritySettingsMeetingSecurity.md)
- [MeetingSecuritySettingsMeetingSecurityMeetingPasswordRequirement](docs/Model/MeetingSecuritySettingsMeetingSecurityMeetingPasswordRequirement.md)
- [MeetingSecuritySettingsMeetingSecurityWaitingRoomSettings](docs/Model/MeetingSecuritySettingsMeetingSecurityWaitingRoomSettings.md)
- [MeetingSettings](docs/Model/MeetingSettings.md)
- [MeetingSettingsApprovedOrDeniedCountriesOrRegions](docs/Model/MeetingSettingsApprovedOrDeniedCountriesOrRegions.md)
- [MeetingSettingsAuthenticationExceptionInner](docs/Model/MeetingSettingsAuthenticationExceptionInner.md)
- [MeetingSettingsBreakoutRoom](docs/Model/MeetingSettingsBreakoutRoom.md)
- [MeetingSettingsBreakoutRoomRoomsInner](docs/Model/MeetingSettingsBreakoutRoomRoomsInner.md)
- [MeetingSettingsCustomKeysInner](docs/Model/MeetingSettingsCustomKeysInner.md)
- [MeetingSettingsGlobalDialInNumbersInner](docs/Model/MeetingSettingsGlobalDialInNumbersInner.md)
- [MeetingStatusRequest](docs/Model/MeetingStatusRequest.md)
- [MeetingSurvey](docs/Model/MeetingSurvey.md)
- [MeetingSurveyCustomSurvey](docs/Model/MeetingSurveyCustomSurvey.md)
- [MeetingSurveyCustomSurveyQuestionsInner](docs/Model/MeetingSurveyCustomSurveyQuestionsInner.md)
- [MeetingSurveyGet200Response](docs/Model/MeetingSurveyGet200Response.md)
- [MeetingToken200Response](docs/Model/MeetingToken200Response.md)
- [MeetingUpdate](docs/Model/MeetingUpdate.md)
- [MeetingUpdateRequest](docs/Model/MeetingUpdateRequest.md)
- [MeetingUpdateRequestAllOf](docs/Model/MeetingUpdateRequestAllOf.md)
- [MeetingWebinarSecurityGroupLockedSettings](docs/Model/MeetingWebinarSecurityGroupLockedSettings.md)
- [MeetingWebinarSecurityGroupLockedSettings1](docs/Model/MeetingWebinarSecurityGroupLockedSettings1.md)
- [MeetingWebinarSecurityGroupLockedSettings1MeetingSecurity](docs/Model/MeetingWebinarSecurityGroupLockedSettings1MeetingSecurity.md)
- [MeetingWebinarSecurityGroupLockedSettingsMeetingSecurity](docs/Model/MeetingWebinarSecurityGroupLockedSettingsMeetingSecurity.md)
- [MeetingWebinarSecurityGroupSettings](docs/Model/MeetingWebinarSecurityGroupSettings.md)
- [MeetingWebinarSecurityGroupSettings1](docs/Model/MeetingWebinarSecurityGroupSettings1.md)
- [MeetingWebinarSecurityGroupSettings1MeetingSecurity](docs/Model/MeetingWebinarSecurityGroupSettings1MeetingSecurity.md)
- [MeetingWebinarSecurityGroupSettings1MeetingSecurityChatEtiquetteTool](docs/Model/MeetingWebinarSecurityGroupSettings1MeetingSecurityChatEtiquetteTool.md)
- [MeetingWebinarSecurityGroupSettings1MeetingSecurityChatEtiquetteToolPoliciesInner](docs/Model/MeetingWebinarSecurityGroupSettings1MeetingSecurityChatEtiquetteToolPoliciesInner.md)
- [MeetingWebinarSecurityGroupSettingsMeetingSecurity](docs/Model/MeetingWebinarSecurityGroupSettingsMeetingSecurity.md)
- [MeetingWebinarSecurityGroupSettingsMeetingSecurityChatEtiquetteTool](docs/Model/MeetingWebinarSecurityGroupSettingsMeetingSecurityChatEtiquetteTool.md)
- [MeetingWebinarSecurityGroupSettingsMeetingSecurityChatEtiquetteToolPoliciesInner](docs/Model/MeetingWebinarSecurityGroupSettingsMeetingSecurityChatEtiquetteToolPoliciesInner.md)
- [MeetingWebinarSecurityGroupSettingsMeetingSecurityMeetingPasswordRequirement](docs/Model/MeetingWebinarSecurityGroupSettingsMeetingSecurityMeetingPasswordRequirement.md)
- [MeetingWebinarSecurityGroupSettingsMeetingSecurityWaitingRoomSettings](docs/Model/MeetingWebinarSecurityGroupSettingsMeetingSecurityWaitingRoomSettings.md)
- [MeetingWebinarSecuritySettings](docs/Model/MeetingWebinarSecuritySettings.md)
- [MeetingWebinarSecuritySettings1](docs/Model/MeetingWebinarSecuritySettings1.md)
- [MeetingWebinarSecuritySettings1MeetingSecurity](docs/Model/MeetingWebinarSecuritySettings1MeetingSecurity.md)
- [MeetingWebinarSecuritySettingsMeetingSecurity](docs/Model/MeetingWebinarSecuritySettingsMeetingSecurity.md)
- [MeetingWebinarSecuritySettingsMeetingSecurityMeetingPasswordRequirement](docs/Model/MeetingWebinarSecuritySettingsMeetingSecurityMeetingPasswordRequirement.md)
- [Occurrence](docs/Model/Occurrence.md)
- [Pagination](docs/Model/Pagination.md)
- [PaginationToken](docs/Model/PaginationToken.md)
- [PaginationToken4IMChat](docs/Model/PaginationToken4IMChat.md)
- [PaginationToken4Qos](docs/Model/PaginationToken4Qos.md)
- [Panelist](docs/Model/Panelist.md)
- [PanelistList](docs/Model/PanelistList.md)
- [PanelistListPanelistsInner](docs/Model/PanelistListPanelistsInner.md)
- [PanelistListPanelistsInnerAllOf](docs/Model/PanelistListPanelistsInnerAllOf.md)
- [PanelistListPanelistsInnerAllOf1](docs/Model/PanelistListPanelistsInnerAllOf1.md)
- [PanelistListPanelistsInnerAllOf2](docs/Model/PanelistListPanelistsInnerAllOf2.md)
- [ParticipantFeedback200Response](docs/Model/ParticipantFeedback200Response.md)
- [ParticipantFeedback200ResponseParticipantsInner](docs/Model/ParticipantFeedback200ResponseParticipantsInner.md)
- [ParticipantQOSSummary](docs/Model/ParticipantQOSSummary.md)
- [ParticipantQOSSummaryList](docs/Model/ParticipantQOSSummaryList.md)
- [ParticipantQOSSummaryListAllOf](docs/Model/ParticipantQOSSummaryListAllOf.md)
- [ParticipantQOSSummaryQosInner](docs/Model/ParticipantQOSSummaryQosInner.md)
- [ParticipantWebinarFeedback200Response](docs/Model/ParticipantWebinarFeedback200Response.md)
- [ParticipantWebinarFeedback200ResponseParticipantsInner](docs/Model/ParticipantWebinarFeedback200ResponseParticipantsInner.md)
- [PastMeetingDetails200Response](docs/Model/PastMeetingDetails200Response.md)
- [PastMeetingParticipants200Response](docs/Model/PastMeetingParticipants200Response.md)
- [PastMeetingParticipants200ResponseAllOf](docs/Model/PastMeetingParticipants200ResponseAllOf.md)
- [PastMeetingParticipants200ResponseAllOfParticipantsInner](docs/Model/PastMeetingParticipants200ResponseAllOfParticipantsInner.md)
- [PhonePlan](docs/Model/PhonePlan.md)
- [PhonePlanPlanBase](docs/Model/PhonePlanPlanBase.md)
- [PhonePlanPlanCallingAddonsInner](docs/Model/PhonePlanPlanCallingAddonsInner.md)
- [PhonePlanPlanCallingInner](docs/Model/PhonePlanPlanCallingInner.md)
- [PhonePlanPlanNumberInner](docs/Model/PhonePlanPlanNumberInner.md)
- [Poll](docs/Model/Poll.md)
- [PollList](docs/Model/PollList.md)
- [PollListAllOf](docs/Model/PollListAllOf.md)
- [PollQuestionsInner](docs/Model/PollQuestionsInner.md)
- [Profile](docs/Model/Profile.md)
- [ProfileRecordingStorageLocation](docs/Model/ProfileRecordingStorageLocation.md)
- [QOSAudio](docs/Model/QOSAudio.md)
- [QOSParticipant](docs/Model/QOSParticipant.md)
- [QOSParticipantList](docs/Model/QOSParticipantList.md)
- [QOSParticipantListAllOf](docs/Model/QOSParticipantListAllOf.md)
- [QOSParticipantUserQosInner](docs/Model/QOSParticipantUserQosInner.md)
- [QOSParticipantUserQosInnerAsDeviceFromCrc](docs/Model/QOSParticipantUserQosInnerAsDeviceFromCrc.md)
- [QOSParticipantUserQosInnerAsDeviceToCrc](docs/Model/QOSParticipantUserQosInnerAsDeviceToCrc.md)
- [QOSParticipantUserQosInnerAudioDeviceFromCrc](docs/Model/QOSParticipantUserQosInnerAudioDeviceFromCrc.md)
- [QOSParticipantUserQosInnerAudioDeviceToCrc](docs/Model/QOSParticipantUserQosInnerAudioDeviceToCrc.md)
- [QOSParticipantUserQosInnerCpuUsage](docs/Model/QOSParticipantUserQosInnerCpuUsage.md)
- [QOSParticipantUserQosInnerVideoDeviceFromCrc](docs/Model/QOSParticipantUserQosInnerVideoDeviceFromCrc.md)
- [QOSParticipantUserQosInnerVideoDeviceToCrc](docs/Model/QOSParticipantUserQosInnerVideoDeviceToCrc.md)
- [QOSVideo](docs/Model/QOSVideo.md)
- [QOSVideoAllOf](docs/Model/QOSVideoAllOf.md)
- [Recording](docs/Model/Recording.md)
- [RecordingGet200Response](docs/Model/RecordingGet200Response.md)
- [RecordingGet200ResponseAllOf](docs/Model/RecordingGet200ResponseAllOf.md)
- [RecordingList](docs/Model/RecordingList.md)
- [RecordingListAllOf](docs/Model/RecordingListAllOf.md)
- [RecordingMeeting](docs/Model/RecordingMeeting.md)
- [RecordingMeetingAllOf](docs/Model/RecordingMeetingAllOf.md)
- [RecordingMeetingList](docs/Model/RecordingMeetingList.md)
- [RecordingMeetingListAllOf](docs/Model/RecordingMeetingListAllOf.md)
- [RecordingRegistrantList](docs/Model/RecordingRegistrantList.md)
- [RecordingRegistrantListAllOf](docs/Model/RecordingRegistrantListAllOf.md)
- [RecordingRegistrantQuestionUpdateRequest](docs/Model/RecordingRegistrantQuestionUpdateRequest.md)
- [RecordingRegistrantQuestions](docs/Model/RecordingRegistrantQuestions.md)
- [RecordingRegistrantQuestionsCustomQuestionsInner](docs/Model/RecordingRegistrantQuestionsCustomQuestionsInner.md)
- [RecordingRegistrantQuestionsQuestionsInner](docs/Model/RecordingRegistrantQuestionsQuestionsInner.md)
- [RecordingRegistrantStatus](docs/Model/RecordingRegistrantStatus.md)
- [RecordingRegistrantStatusRegistrantsInner](docs/Model/RecordingRegistrantStatusRegistrantsInner.md)
- [RecordingSeparateAudio](docs/Model/RecordingSeparateAudio.md)
- [RecordingSeparateAudioList](docs/Model/RecordingSeparateAudioList.md)
- [RecordingSeparateAudioListAllOf](docs/Model/RecordingSeparateAudioListAllOf.md)
- [RecordingSettings](docs/Model/RecordingSettings.md)
- [RecordingStatusUpdateRequest](docs/Model/RecordingStatusUpdateRequest.md)
- [Recurrence](docs/Model/Recurrence.md)
- [RecurrenceWebinar](docs/Model/RecurrenceWebinar.md)
- [Registrant](docs/Model/Registrant.md)
- [RegistrantList](docs/Model/RegistrantList.md)
- [RegistrantListAllOf](docs/Model/RegistrantListAllOf.md)
- [RegistrantPost](docs/Model/RegistrantPost.md)
- [RegistrantStatus](docs/Model/RegistrantStatus.md)
- [RegistrantStatusRegistrantsInner](docs/Model/RegistrantStatusRegistrantsInner.md)
- [ReportChatMessages200Response](docs/Model/ReportChatMessages200Response.md)
- [ReportChatMessages200ResponseDeletedMessagesInner](docs/Model/ReportChatMessages200ResponseDeletedMessagesInner.md)
- [ReportChatMessages200ResponseDeletedMessagesInnerFilesInner](docs/Model/ReportChatMessages200ResponseDeletedMessagesInnerFilesInner.md)
- [ReportChatMessages200ResponseEditedMessagesInner](docs/Model/ReportChatMessages200ResponseEditedMessagesInner.md)
- [ReportChatMessages200ResponseMessagesInner](docs/Model/ReportChatMessages200ResponseMessagesInner.md)
- [ReportChatMessages200ResponseMessagesInnerBotMessage](docs/Model/ReportChatMessages200ResponseMessagesInnerBotMessage.md)
- [ReportChatSessions200Response](docs/Model/ReportChatSessions200Response.md)
- [ReportChatSessions200ResponseSessionsInner](docs/Model/ReportChatSessions200ResponseSessionsInner.md)
- [ReportCloudRecording200Response](docs/Model/ReportCloudRecording200Response.md)
- [ReportCloudRecording200ResponseAllOf](docs/Model/ReportCloudRecording200ResponseAllOf.md)
- [ReportCloudRecording200ResponseAllOf1](docs/Model/ReportCloudRecording200ResponseAllOf1.md)
- [ReportCloudRecording200ResponseAllOf1CloudRecordingStorageInner](docs/Model/ReportCloudRecording200ResponseAllOf1CloudRecordingStorageInner.md)
- [ReportDaily200Response](docs/Model/ReportDaily200Response.md)
- [ReportDaily200ResponseDatesInner](docs/Model/ReportDaily200ResponseDatesInner.md)
- [ReportMeetingDetails200Response](docs/Model/ReportMeetingDetails200Response.md)
- [ReportMeetingDetails200ResponseCustomKeysInner](docs/Model/ReportMeetingDetails200ResponseCustomKeysInner.md)
- [ReportMeetingDetails200ResponseTrackingFieldsInner](docs/Model/ReportMeetingDetails200ResponseTrackingFieldsInner.md)
- [ReportMeetingParticipants200Response](docs/Model/ReportMeetingParticipants200Response.md)
- [ReportMeetingParticipants200ResponseAllOf](docs/Model/ReportMeetingParticipants200ResponseAllOf.md)
- [ReportMeetingParticipants200ResponseAllOfParticipantsInner](docs/Model/ReportMeetingParticipants200ResponseAllOfParticipantsInner.md)
- [ReportMeetingPolls200Response](docs/Model/ReportMeetingPolls200Response.md)
- [ReportMeetingPolls200ResponseQuestionsInner](docs/Model/ReportMeetingPolls200ResponseQuestionsInner.md)
- [ReportMeetingPolls200ResponseQuestionsInnerQuestionDetailsInner](docs/Model/ReportMeetingPolls200ResponseQuestionsInnerQuestionDetailsInner.md)
- [ReportMeetings200Response](docs/Model/ReportMeetings200Response.md)
- [ReportMeetings200ResponseAllOf](docs/Model/ReportMeetings200ResponseAllOf.md)
- [ReportMeetings200ResponseAllOfMeetingsInner](docs/Model/ReportMeetings200ResponseAllOfMeetingsInner.md)
- [ReportMeetings200ResponseAllOfMeetingsInnerCustomKeysInner](docs/Model/ReportMeetings200ResponseAllOfMeetingsInnerCustomKeysInner.md)
- [ReportOperationLogs200Response](docs/Model/ReportOperationLogs200Response.md)
- [ReportOperationLogs200ResponseAllOf](docs/Model/ReportOperationLogs200ResponseAllOf.md)
- [ReportOperationLogs200ResponseAllOfOperationLogsInner](docs/Model/ReportOperationLogs200ResponseAllOfOperationLogsInner.md)
- [ReportSignInSignOutActivities200Response](docs/Model/ReportSignInSignOutActivities200Response.md)
- [ReportSignInSignOutActivities200ResponseActivityLogsInner](docs/Model/ReportSignInSignOutActivities200ResponseActivityLogsInner.md)
- [ReportTelephone200Response](docs/Model/ReportTelephone200Response.md)
- [ReportTelephone200ResponseAllOf](docs/Model/ReportTelephone200ResponseAllOf.md)
- [ReportTelephone200ResponseAllOf1](docs/Model/ReportTelephone200ResponseAllOf1.md)
- [ReportTelephone200ResponseAllOf1TelephonyUsageInner](docs/Model/ReportTelephone200ResponseAllOf1TelephonyUsageInner.md)
- [ReportUpcomingEvents200Response](docs/Model/ReportUpcomingEvents200Response.md)
- [ReportUpcomingEvents200ResponseAllOf](docs/Model/ReportUpcomingEvents200ResponseAllOf.md)
- [ReportUpcomingEvents200ResponseAllOfUpcomingEventsInner](docs/Model/ReportUpcomingEvents200ResponseAllOfUpcomingEventsInner.md)
- [ReportUsers200Response](docs/Model/ReportUsers200Response.md)
- [ReportUsers200ResponseAllOf](docs/Model/ReportUsers200ResponseAllOf.md)
- [ReportUsers200ResponseAllOf1](docs/Model/ReportUsers200ResponseAllOf1.md)
- [ReportUsers200ResponseAllOf1UsersInner](docs/Model/ReportUsers200ResponseAllOf1UsersInner.md)
- [ReportUsers200ResponseAllOf1UsersInnerCustomAttributes](docs/Model/ReportUsers200ResponseAllOf1UsersInnerCustomAttributes.md)
- [ReportWebinarDetails200Response](docs/Model/ReportWebinarDetails200Response.md)
- [ReportWebinarParticipants200Response](docs/Model/ReportWebinarParticipants200Response.md)
- [ReportWebinarParticipants200ResponseAllOf](docs/Model/ReportWebinarParticipants200ResponseAllOf.md)
- [ReportWebinarParticipants200ResponseAllOfParticipantsInner](docs/Model/ReportWebinarParticipants200ResponseAllOfParticipantsInner.md)
- [ReportWebinarPolls200Response](docs/Model/ReportWebinarPolls200Response.md)
- [ReportWebinarPolls200ResponseQuestionsInner](docs/Model/ReportWebinarPolls200ResponseQuestionsInner.md)
- [ReportWebinarPolls200ResponseQuestionsInnerQuestionDetailsInner](docs/Model/ReportWebinarPolls200ResponseQuestionsInnerQuestionDetailsInner.md)
- [ReportWebinarQA200Response](docs/Model/ReportWebinarQA200Response.md)
- [ReportWebinarQA200ResponseQuestionsInner](docs/Model/ReportWebinarQA200ResponseQuestionsInner.md)
- [ReportWebinarQA200ResponseQuestionsInnerQuestionDetailsInner](docs/Model/ReportWebinarQA200ResponseQuestionsInnerQuestionDetailsInner.md)
- [RoleList](docs/Model/RoleList.md)
- [RoleListAllOf](docs/Model/RoleListAllOf.md)
- [RoleMembersList](docs/Model/RoleMembersList.md)
- [RoleMembersListMembersInner](docs/Model/RoleMembersListMembersInner.md)
- [RoleMembersListMembersInnerAllOf](docs/Model/RoleMembersListMembersInnerAllOf.md)
- [SessionUpdate](docs/Model/SessionUpdate.md)
- [SessionUpdateSettings](docs/Model/SessionUpdateSettings.md)
- [SessionUpdateSettingsAllOf](docs/Model/SessionUpdateSettingsAllOf.md)
- [SessionUpdateSettingsAllOfMeetingInviteesInner](docs/Model/SessionUpdateSettingsAllOfMeetingInviteesInner.md)
- [SessionUpdateTrackingFieldsInner](docs/Model/SessionUpdateTrackingFieldsInner.md)
- [SessionWebinarUpdate](docs/Model/SessionWebinarUpdate.md)
- [SessionWebinarUpdateSettings](docs/Model/SessionWebinarUpdateSettings.md)
- [SessionWebinarUpdateSettingsAllOf](docs/Model/SessionWebinarUpdateSettingsAllOf.md)
- [SettingsUpdateTelephony](docs/Model/SettingsUpdateTelephony.md)
- [TSP](docs/Model/TSP.md)
- [TSPAccount](docs/Model/TSPAccount.md)
- [TSPAccount1](docs/Model/TSPAccount1.md)
- [TSPAccount1DialInNumbersInner](docs/Model/TSPAccount1DialInNumbersInner.md)
- [TSPAccountDialInNumbersInner](docs/Model/TSPAccountDialInNumbersInner.md)
- [TSPAccountsList](docs/Model/TSPAccountsList.md)
- [TSPAccountsListDialInNumbersInner](docs/Model/TSPAccountsListDialInNumbersInner.md)
- [TSPDialInNumbersInner](docs/Model/TSPDialInNumbersInner.md)
- [TheParticipantQOSSummaryDetails](docs/Model/TheParticipantQOSSummaryDetails.md)
- [TrackingField](docs/Model/TrackingField.md)
- [TrackingFieldList](docs/Model/TrackingFieldList.md)
- [TrackingFieldListAllOf](docs/Model/TrackingFieldListAllOf.md)
- [TrackingfieldCreate201Response](docs/Model/TrackingfieldCreate201Response.md)
- [TrackingfieldCreate201ResponseAllOf](docs/Model/TrackingfieldCreate201ResponseAllOf.md)
- [Tsp200Response](docs/Model/Tsp200Response.md)
- [Tsp200ResponseDialInNumbersInner](docs/Model/Tsp200ResponseDialInNumbersInner.md)
- [TspGlobalDialIn](docs/Model/TspGlobalDialIn.md)
- [TspUpdateRequest](docs/Model/TspUpdateRequest.md)
- [UpdateAGroupMemberRequest](docs/Model/UpdateAGroupMemberRequest.md)
- [UpdateDeviceProfileRequest](docs/Model/UpdateDeviceProfileRequest.md)
- [UpdateGroupSettingsRequest](docs/Model/UpdateGroupSettingsRequest.md)
- [UpdateGroupSettingsRequestOneOf](docs/Model/UpdateGroupSettingsRequestOneOf.md)
- [UpdateGroupSettingsRequestOneOfInMeeting](docs/Model/UpdateGroupSettingsRequestOneOfInMeeting.md)
- [UpdateGroupSettingsRequestOneOfInMeetingLanguageInterpretation](docs/Model/UpdateGroupSettingsRequestOneOfInMeetingLanguageInterpretation.md)
- [UpdateGroupSettingsRequestOneOfInMeetingManualCaptioning](docs/Model/UpdateGroupSettingsRequestOneOfInMeetingManualCaptioning.md)
- [UpdateGroupSettingsRequestOneOfInMeetingWebinarChat](docs/Model/UpdateGroupSettingsRequestOneOfInMeetingWebinarChat.md)
- [UpdateGroupSettingsRequestOneOfInMeetingWebinarLiveStreaming](docs/Model/UpdateGroupSettingsRequestOneOfInMeetingWebinarLiveStreaming.md)
- [UpdateGroupSettingsRequestOneOfInMeetingWebinarPolling](docs/Model/UpdateGroupSettingsRequestOneOfInMeetingWebinarPolling.md)
- [UpdateGroupSettingsRequestOneOfRecording](docs/Model/UpdateGroupSettingsRequestOneOfRecording.md)
- [UpdateGroupSettingsRequestOneOfRecordingArchive](docs/Model/UpdateGroupSettingsRequestOneOfRecordingArchive.md)
- [UpdateGroupSettingsRequestOneOfRecordingArchiveSettings](docs/Model/UpdateGroupSettingsRequestOneOfRecordingArchiveSettings.md)
- [UpdateGroupSettingsRequestOneOfScheduleMeeting](docs/Model/UpdateGroupSettingsRequestOneOfScheduleMeeting.md)
- [UpdateGroupSettingsRequestOneOfScheduleMeetingAlwaysDisplayZoomMeetingAsTopic](docs/Model/UpdateGroupSettingsRequestOneOfScheduleMeetingAlwaysDisplayZoomMeetingAsTopic.md)
- [UpdateGroupSettingsRequestOneOfScheduleMeetingAlwaysDisplayZoomWebinarAsTopic](docs/Model/UpdateGroupSettingsRequestOneOfScheduleMeetingAlwaysDisplayZoomWebinarAsTopic.md)
- [UpdateGroupSettingsRequestOneOfTelephony](docs/Model/UpdateGroupSettingsRequestOneOfTelephony.md)
- [UpdatePresenceStatusRequest](docs/Model/UpdatePresenceStatusRequest.md)
- [UpdateReservationRequest](docs/Model/UpdateReservationRequest.md)
- [UpdateRoleRequest](docs/Model/UpdateRoleRequest.md)
- [UpdateRoleRequestSubAccountPrivileges](docs/Model/UpdateRoleRequestSubAccountPrivileges.md)
- [UpdateRoomProfileRequest](docs/Model/UpdateRoomProfileRequest.md)
- [UpdateRoomProfileRequestBasic](docs/Model/UpdateRoomProfileRequestBasic.md)
- [UpdateSIPPhoneRequest](docs/Model/UpdateSIPPhoneRequest.md)
- [UpdateVideoSDKAccountInMeetingSettings](docs/Model/UpdateVideoSDKAccountInMeetingSettings.md)
- [UpdateVideoSDKAccountInMeetingSettingsInMeeting](docs/Model/UpdateVideoSDKAccountInMeetingSettingsInMeeting.md)
- [UpdateVideoSDKAccountInMeetingSettingsInMeetingInMeeting](docs/Model/UpdateVideoSDKAccountInMeetingSettingsInMeetingInMeeting.md)
- [UpdateVideoSDKAccountRecordingSettings](docs/Model/UpdateVideoSDKAccountRecordingSettings.md)
- [UpdateVideoSDKAccountRecordingSettingsRecording](docs/Model/UpdateVideoSDKAccountRecordingSettingsRecording.md)
- [UpdateWebinarBrandingNameTagRequest](docs/Model/UpdateWebinarBrandingNameTagRequest.md)
- [UpdateZRLocationProfileRequest](docs/Model/UpdateZRLocationProfileRequest.md)
- [UpdateZRLocationProfileRequestBasic](docs/Model/UpdateZRLocationProfileRequestBasic.md)
- [UpdateZRLocationSettingsRequest](docs/Model/UpdateZRLocationSettingsRequest.md)
- [UpdateZRLocationSettingsRequestOneOf](docs/Model/UpdateZRLocationSettingsRequestOneOf.md)
- [UpdateZRLocationSettingsRequestOneOf1](docs/Model/UpdateZRLocationSettingsRequestOneOf1.md)
- [UpdateZRLocationSettingsRequestOneOfMeetingSecurity](docs/Model/UpdateZRLocationSettingsRequestOneOfMeetingSecurity.md)
- [UpdateZRSettingsRequest](docs/Model/UpdateZRSettingsRequest.md)
- [UpdateZoomRoomAccSettingsRequest](docs/Model/UpdateZoomRoomAccSettingsRequest.md)
- [UpdateZoomRoomAccSettingsRequestOneOf](docs/Model/UpdateZoomRoomAccSettingsRequestOneOf.md)
- [UpdateZoomRoomAccSettingsRequestOneOf1](docs/Model/UpdateZoomRoomAccSettingsRequestOneOf1.md)
- [UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignage](docs/Model/UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignage.md)
- [UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignageBanner](docs/Model/UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignageBanner.md)
- [UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignageDisplayPeriod](docs/Model/UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignageDisplayPeriod.md)
- [UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignagePlayListInner](docs/Model/UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignagePlayListInner.md)
- [UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignagePlayListInnerContentsInner](docs/Model/UpdateZoomRoomAccSettingsRequestOneOf1DigitalSignagePlayListInnerContentsInner.md)
- [UpdateZoomRoomAccSettingsRequestOneOf1Notification](docs/Model/UpdateZoomRoomAccSettingsRequestOneOf1Notification.md)
- [UpdateZoomRoomAccSettingsRequestOneOfZoomRooms](docs/Model/UpdateZoomRoomAccSettingsRequestOneOfZoomRooms.md)
- [UpdateZoomRoomsLocationStructureRequest](docs/Model/UpdateZoomRoomsLocationStructureRequest.md)
- [UploadGroupVB201Response](docs/Model/UploadGroupVB201Response.md)
- [UploadVBuser201Response](docs/Model/UploadVBuser201Response.md)
- [UploadWebinarBrandingVB201Response](docs/Model/UploadWebinarBrandingVB201Response.md)
- [UploadWebinarBrandingWallpaper201Response](docs/Model/UploadWebinarBrandingWallpaper201Response.md)
- [User](docs/Model/User.md)
- [User200Response](docs/Model/User200Response.md)
- [User200ResponseAllOf](docs/Model/User200ResponseAllOf.md)
- [User200ResponseAllOf1](docs/Model/User200ResponseAllOf1.md)
- [User200ResponseAllOf1CustomAttributes](docs/Model/User200ResponseAllOf1CustomAttributes.md)
- [User200ResponseAllOf1PhoneNumbersInner](docs/Model/User200ResponseAllOf1PhoneNumbersInner.md)
- [UserAssistantCreate201Response](docs/Model/UserAssistantCreate201Response.md)
- [UserAssistantsList](docs/Model/UserAssistantsList.md)
- [UserAssistantsListAssistantsInner](docs/Model/UserAssistantsListAssistantsInner.md)
- [UserCreate201Response](docs/Model/UserCreate201Response.md)
- [UserCreateRequest](docs/Model/UserCreateRequest.md)
- [UserCreateRequestUserInfo](docs/Model/UserCreateRequestUserInfo.md)
- [UserCreateRequestUserInfoFeature](docs/Model/UserCreateRequestUserInfoFeature.md)
- [UserEmail200Response](docs/Model/UserEmail200Response.md)
- [UserEmailUpdateRequest](docs/Model/UserEmailUpdateRequest.md)
- [UserInMeetingSettings](docs/Model/UserInMeetingSettings.md)
- [UserInMeetingSettingsClosedCaptioning](docs/Model/UserInMeetingSettingsClosedCaptioning.md)
- [UserInMeetingSettingsLanguageInterpretation](docs/Model/UserInMeetingSettingsLanguageInterpretation.md)
- [UserInMeetingSettingsVirtualBackgroundSettings](docs/Model/UserInMeetingSettingsVirtualBackgroundSettings.md)
- [UserInMeetingSettingsVirtualBackgroundSettingsFilesInner](docs/Model/UserInMeetingSettingsVirtualBackgroundSettingsFilesInner.md)
- [UserInMeetingSettingsWebinarChat](docs/Model/UserInMeetingSettingsWebinarChat.md)
- [UserInMeetingSettingsWebinarLiveStreaming](docs/Model/UserInMeetingSettingsWebinarLiveStreaming.md)
- [UserInMeetingSettingsWebinarPolling](docs/Model/UserInMeetingSettingsWebinarPolling.md)
- [UserMeetingAndRecordingAuthenticationSettings](docs/Model/UserMeetingAndRecordingAuthenticationSettings.md)
- [UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptions](docs/Model/UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptions.md)
- [UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsMeetingAuthentication](docs/Model/UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsMeetingAuthentication.md)
- [UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsMeetingAuthenticationAuthenticationOptionsInner](docs/Model/UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsMeetingAuthenticationAuthenticationOptionsInner.md)
- [UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsRecordingAuthentication](docs/Model/UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsRecordingAuthentication.md)
- [UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsRecordingAuthenticationAuthenticationOptionsInner](docs/Model/UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsRecordingAuthenticationAuthenticationOptionsInner.md)
- [UserPACs200Response](docs/Model/UserPACs200Response.md)
- [UserPACs200ResponsePacAccountsInner](docs/Model/UserPACs200ResponsePacAccountsInner.md)
- [UserPACs200ResponsePacAccountsInnerDedicatedDialInNumberInner](docs/Model/UserPACs200ResponsePacAccountsInnerDedicatedDialInNumberInner.md)
- [UserPACs200ResponsePacAccountsInnerGlobalDialInNumbersInner](docs/Model/UserPACs200ResponsePacAccountsInnerGlobalDialInNumbersInner.md)
- [UserPasswordRequest](docs/Model/UserPasswordRequest.md)
- [UserPermissions](docs/Model/UserPermissions.md)
- [UserSchedulersList](docs/Model/UserSchedulersList.md)
- [UserSchedulersListSchedulersInner](docs/Model/UserSchedulersListSchedulersInner.md)
- [UserSettings](docs/Model/UserSettings.md)
- [UserSettings200Response](docs/Model/UserSettings200Response.md)
- [UserSettingsAudioConference](docs/Model/UserSettingsAudioConference.md)
- [UserSettingsAudioConferenceTollFreeAndFeeBasedTollCall](docs/Model/UserSettingsAudioConferenceTollFreeAndFeeBasedTollCall.md)
- [UserSettingsEmailNotification](docs/Model/UserSettingsEmailNotification.md)
- [UserSettingsFeature](docs/Model/UserSettingsFeature.md)
- [UserSettingsFeatureUpdate](docs/Model/UserSettingsFeatureUpdate.md)
- [UserSettingsInMeeting](docs/Model/UserSettingsInMeeting.md)
- [UserSettingsInMeetingClosedCaptioning](docs/Model/UserSettingsInMeetingClosedCaptioning.md)
- [UserSettingsInMeetingLanguageInterpretation](docs/Model/UserSettingsInMeetingLanguageInterpretation.md)
- [UserSettingsInMeetingManualCaptioning](docs/Model/UserSettingsInMeetingManualCaptioning.md)
- [UserSettingsInMeetingVirtualBackgroundSettings](docs/Model/UserSettingsInMeetingVirtualBackgroundSettings.md)
- [UserSettingsInMeetingVirtualBackgroundSettingsFilesInner](docs/Model/UserSettingsInMeetingVirtualBackgroundSettingsFilesInner.md)
- [UserSettingsInMeetingWebinarChat](docs/Model/UserSettingsInMeetingWebinarChat.md)
- [UserSettingsInMeetingWebinarLiveStreaming](docs/Model/UserSettingsInMeetingWebinarLiveStreaming.md)
- [UserSettingsInMeetingWebinarPolling](docs/Model/UserSettingsInMeetingWebinarPolling.md)
- [UserSettingsMeetingSettings](docs/Model/UserSettingsMeetingSettings.md)
- [UserSettingsMeetingSettingsMeetingPasswordRequirement](docs/Model/UserSettingsMeetingSettingsMeetingPasswordRequirement.md)
- [UserSettingsRecording](docs/Model/UserSettingsRecording.md)
- [UserSettingsRecordingRecordFilesSeparately](docs/Model/UserSettingsRecordingRecordFilesSeparately.md)
- [UserSettingsRecordingRecordingPasswordRequirement](docs/Model/UserSettingsRecordingRecordingPasswordRequirement.md)
- [UserSettingsScheduleMeeting](docs/Model/UserSettingsScheduleMeeting.md)
- [UserSettingsScheduleMeetingMeetingPasswordRequirement](docs/Model/UserSettingsScheduleMeetingMeetingPasswordRequirement.md)
- [UserSettingsTSP](docs/Model/UserSettingsTSP.md)
- [UserSettingsTelephony](docs/Model/UserSettingsTelephony.md)
- [UserSettingsTelephonyTelephonyRegions](docs/Model/UserSettingsTelephonyTelephonyRegions.md)
- [UserSettingsUpdate](docs/Model/UserSettingsUpdate.md)
- [UserSettingsUpdateRequest](docs/Model/UserSettingsUpdateRequest.md)
- [UserStatusRequest](docs/Model/UserStatusRequest.md)
- [UserTSPs200Response](docs/Model/UserTSPs200Response.md)
- [UserToken200Response](docs/Model/UserToken200Response.md)
- [UserUpdate](docs/Model/UserUpdate.md)
- [UserUpdateCustomAttributesInner](docs/Model/UserUpdateCustomAttributesInner.md)
- [UserUpdatePhoneNumbersInner](docs/Model/UserUpdatePhoneNumbersInner.md)
- [UserVanityName200Response](docs/Model/UserVanityName200Response.md)
- [UserZak200Response](docs/Model/UserZak200Response.md)
- [Users200Response](docs/Model/Users200Response.md)
- [Users200ResponseUsersInner](docs/Model/Users200ResponseUsersInner.md)
- [Users200ResponseUsersInnerCustomAttributesInner](docs/Model/Users200ResponseUsersInnerCustomAttributesInner.md)
- [VideoSDKAccountInMeetingSettings](docs/Model/VideoSDKAccountInMeetingSettings.md)
- [VideoSDKAccountInMeetingSettingsInMeeting](docs/Model/VideoSDKAccountInMeetingSettingsInMeeting.md)
- [VideoSDKAccountRecordingSettings](docs/Model/VideoSDKAccountRecordingSettings.md)
- [VideoSDKAccountRecordingSettingsRecording](docs/Model/VideoSDKAccountRecordingSettingsRecording.md)
- [Webinar200Response](docs/Model/Webinar200Response.md)
- [Webinar200ResponseAllOf](docs/Model/Webinar200ResponseAllOf.md)
- [WebinarCreate201Response](docs/Model/WebinarCreate201Response.md)
- [WebinarCreate201ResponseAllOf](docs/Model/WebinarCreate201ResponseAllOf.md)
- [WebinarCreateRequest](docs/Model/WebinarCreateRequest.md)
- [WebinarInfo](docs/Model/WebinarInfo.md)
- [WebinarInstances](docs/Model/WebinarInstances.md)
- [WebinarInstancesAllOf](docs/Model/WebinarInstancesAllOf.md)
- [WebinarList](docs/Model/WebinarList.md)
- [WebinarListAllOf](docs/Model/WebinarListAllOf.md)
- [WebinarLiveStream](docs/Model/WebinarLiveStream.md)
- [WebinarLiveStreamStatus](docs/Model/WebinarLiveStreamStatus.md)
- [WebinarLiveStreamStatusSettings](docs/Model/WebinarLiveStreamStatusSettings.md)
- [WebinarLocalRecordingJoinToken200Response](docs/Model/WebinarLocalRecordingJoinToken200Response.md)
- [WebinarMetric](docs/Model/WebinarMetric.md)
- [WebinarMetricCustomKeysInner](docs/Model/WebinarMetricCustomKeysInner.md)
- [WebinarPanelist](docs/Model/WebinarPanelist.md)
- [WebinarPanelistCreate201Response](docs/Model/WebinarPanelistCreate201Response.md)
- [WebinarPanelistList](docs/Model/WebinarPanelistList.md)
- [WebinarPanelistPanelistsInner](docs/Model/WebinarPanelistPanelistsInner.md)
- [WebinarPanelistPanelistsInnerAllOf](docs/Model/WebinarPanelistPanelistsInnerAllOf.md)
- [WebinarPollCreate201Response](docs/Model/WebinarPollCreate201Response.md)
- [WebinarPollCreate201ResponseAllOf](docs/Model/WebinarPollCreate201ResponseAllOf.md)
- [WebinarRegistrant](docs/Model/WebinarRegistrant.md)
- [WebinarRegistrantAllOf](docs/Model/WebinarRegistrantAllOf.md)
- [WebinarRegistrantAllOf1](docs/Model/WebinarRegistrantAllOf1.md)
- [WebinarRegistrantCreate201Response](docs/Model/WebinarRegistrantCreate201Response.md)
- [WebinarRegistrantCreateRequest](docs/Model/WebinarRegistrantCreateRequest.md)
- [WebinarRegistrantList](docs/Model/WebinarRegistrantList.md)
- [WebinarRegistrantQuestions](docs/Model/WebinarRegistrantQuestions.md)
- [WebinarRegistrantQuestionsCustomQuestionsInner](docs/Model/WebinarRegistrantQuestionsCustomQuestionsInner.md)
- [WebinarRegistrantQuestionsQuestionsInner](docs/Model/WebinarRegistrantQuestionsQuestionsInner.md)
- [WebinarRegistrantStatusRequest](docs/Model/WebinarRegistrantStatusRequest.md)
- [WebinarRegistrantStatusRequestRegistrantsInner](docs/Model/WebinarRegistrantStatusRequestRegistrantsInner.md)
- [WebinarRegistrantsQuestionsGet200Response](docs/Model/WebinarRegistrantsQuestionsGet200Response.md)
- [WebinarSettings](docs/Model/WebinarSettings.md)
- [WebinarStatusRequest](docs/Model/WebinarStatusRequest.md)
- [WebinarSurvey](docs/Model/WebinarSurvey.md)
- [WebinarSurveyCustomSurvey](docs/Model/WebinarSurveyCustomSurvey.md)
- [WebinarSurveyCustomSurveyQuestionsInner](docs/Model/WebinarSurveyCustomSurveyQuestionsInner.md)
- [WebinarSurveyGet200Response](docs/Model/WebinarSurveyGet200Response.md)
- [WebinarToken200Response](docs/Model/WebinarToken200Response.md)
- [WebinarUpdate](docs/Model/WebinarUpdate.md)
- [ZoomRoom](docs/Model/ZoomRoom.md)
- [ZoomRoomList](docs/Model/ZoomRoomList.md)
- [ZoomRoomListAllOf](docs/Model/ZoomRoomListAllOf.md)
- [ZoomRoomListAllOf1](docs/Model/ZoomRoomListAllOf1.md)
- [ZoomRoomsControlsRequest](docs/Model/ZoomRoomsControlsRequest.md)
- [ZoomRoomsControlsRequestParams](docs/Model/ZoomRoomsControlsRequestParams.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### Client_Credentials

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A


### OAuth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://zoom.us/oauth/authorize`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
