<?php
/**
 * AccountUpdateSettingsScheduleMeeting
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Zoom Meeting API
 *
 * The Zoom Meeting APIs let developers to access information from Zoom. You can use this API to build private services or public applications on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [JWT](/guides/auth/jwt) and [OAuth](/guides/auth/oauth) documentation.   All endpoints are available via `https` and are located at `api.zoom.us/v2/`. For example, to list all of an account's users, use the `https://api.zoom.us/v2/users/` endpoint.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Zoom\Api\Model;

use \ArrayAccess;
use \Zoom\Api\ObjectSerializer;

/**
 * AccountUpdateSettingsScheduleMeeting Class Doc Comment
 *
 * @category Class
 * @description Account Settings: Schedule Meeting.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountUpdateSettingsScheduleMeeting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountUpdateSettings_schedule_meeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_type' => 'string',
        'enforce_login' => 'bool',
        'enforce_login_domains' => 'string',
        'enforce_login_with_domains' => 'bool',
        'force_pmi_jbh_password' => 'bool',
        'host_video' => 'bool',
        'jbh_time' => 'int',
        'join_before_host' => 'bool',
        'meeting_password_requirement' => '\Zoom\Api\Model\AccountUpdateSettingsScheduleMeetingMeetingPasswordRequirement',
        'not_store_meeting_topic' => 'bool',
        'participant_video' => 'bool',
        'personal_meeting' => 'bool',
        'require_password_for_instant_meetings' => 'bool',
        'require_password_for_pmi_meetings' => 'string',
        'require_password_for_scheduled_meetings' => 'bool',
        'require_password_for_scheduling_new_meetings' => 'bool',
        'use_pmi_for_instant_meetings' => 'bool',
        'use_pmi_for_scheduled_meetings' => 'bool',
        'always_display_zoom_meeting_as_topic' => '\Zoom\Api\Model\AccountSettingsScheduleMeetingAlwaysDisplayZoomMeetingAsTopic',
        'hide_meeting_description' => '\Zoom\Api\Model\AccountSettingsScheduleMeetingHideMeetingDescription',
        'always_display_zoom_webinar_as_topic' => '\Zoom\Api\Model\AccountSettingsScheduleMeetingAlwaysDisplayZoomWebinarAsTopic',
        'hide_webinar_description' => '\Zoom\Api\Model\AccountSettingsScheduleMeetingHideWebinarDescription'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_type' => null,
        'enforce_login' => null,
        'enforce_login_domains' => null,
        'enforce_login_with_domains' => null,
        'force_pmi_jbh_password' => null,
        'host_video' => null,
        'jbh_time' => null,
        'join_before_host' => null,
        'meeting_password_requirement' => null,
        'not_store_meeting_topic' => null,
        'participant_video' => null,
        'personal_meeting' => null,
        'require_password_for_instant_meetings' => null,
        'require_password_for_pmi_meetings' => null,
        'require_password_for_scheduled_meetings' => null,
        'require_password_for_scheduling_new_meetings' => null,
        'use_pmi_for_instant_meetings' => null,
        'use_pmi_for_scheduled_meetings' => null,
        'always_display_zoom_meeting_as_topic' => null,
        'hide_meeting_description' => null,
        'always_display_zoom_webinar_as_topic' => null,
        'hide_webinar_description' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'audio_type' => 'audio_type',
        'enforce_login' => 'enforce_login',
        'enforce_login_domains' => 'enforce_login_domains',
        'enforce_login_with_domains' => 'enforce_login_with_domains',
        'force_pmi_jbh_password' => 'force_pmi_jbh_password',
        'host_video' => 'host_video',
        'jbh_time' => 'jbh_time',
        'join_before_host' => 'join_before_host',
        'meeting_password_requirement' => 'meeting_password_requirement',
        'not_store_meeting_topic' => 'not_store_meeting_topic',
        'participant_video' => 'participant_video',
        'personal_meeting' => 'personal_meeting',
        'require_password_for_instant_meetings' => 'require_password_for_instant_meetings',
        'require_password_for_pmi_meetings' => 'require_password_for_pmi_meetings',
        'require_password_for_scheduled_meetings' => 'require_password_for_scheduled_meetings',
        'require_password_for_scheduling_new_meetings' => 'require_password_for_scheduling_new_meetings',
        'use_pmi_for_instant_meetings' => 'use_pmi_for_instant_meetings',
        'use_pmi_for_scheduled_meetings' => 'use_pmi_for_scheduled_meetings',
        'always_display_zoom_meeting_as_topic' => 'always_display_zoom_meeting_as_topic',
        'hide_meeting_description' => 'hide_meeting_description',
        'always_display_zoom_webinar_as_topic' => 'always_display_zoom_webinar_as_topic',
        'hide_webinar_description' => 'hide_webinar_description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_type' => 'setAudioType',
        'enforce_login' => 'setEnforceLogin',
        'enforce_login_domains' => 'setEnforceLoginDomains',
        'enforce_login_with_domains' => 'setEnforceLoginWithDomains',
        'force_pmi_jbh_password' => 'setForcePmiJbhPassword',
        'host_video' => 'setHostVideo',
        'jbh_time' => 'setJbhTime',
        'join_before_host' => 'setJoinBeforeHost',
        'meeting_password_requirement' => 'setMeetingPasswordRequirement',
        'not_store_meeting_topic' => 'setNotStoreMeetingTopic',
        'participant_video' => 'setParticipantVideo',
        'personal_meeting' => 'setPersonalMeeting',
        'require_password_for_instant_meetings' => 'setRequirePasswordForInstantMeetings',
        'require_password_for_pmi_meetings' => 'setRequirePasswordForPmiMeetings',
        'require_password_for_scheduled_meetings' => 'setRequirePasswordForScheduledMeetings',
        'require_password_for_scheduling_new_meetings' => 'setRequirePasswordForSchedulingNewMeetings',
        'use_pmi_for_instant_meetings' => 'setUsePmiForInstantMeetings',
        'use_pmi_for_scheduled_meetings' => 'setUsePmiForScheduledMeetings',
        'always_display_zoom_meeting_as_topic' => 'setAlwaysDisplayZoomMeetingAsTopic',
        'hide_meeting_description' => 'setHideMeetingDescription',
        'always_display_zoom_webinar_as_topic' => 'setAlwaysDisplayZoomWebinarAsTopic',
        'hide_webinar_description' => 'setHideWebinarDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_type' => 'getAudioType',
        'enforce_login' => 'getEnforceLogin',
        'enforce_login_domains' => 'getEnforceLoginDomains',
        'enforce_login_with_domains' => 'getEnforceLoginWithDomains',
        'force_pmi_jbh_password' => 'getForcePmiJbhPassword',
        'host_video' => 'getHostVideo',
        'jbh_time' => 'getJbhTime',
        'join_before_host' => 'getJoinBeforeHost',
        'meeting_password_requirement' => 'getMeetingPasswordRequirement',
        'not_store_meeting_topic' => 'getNotStoreMeetingTopic',
        'participant_video' => 'getParticipantVideo',
        'personal_meeting' => 'getPersonalMeeting',
        'require_password_for_instant_meetings' => 'getRequirePasswordForInstantMeetings',
        'require_password_for_pmi_meetings' => 'getRequirePasswordForPmiMeetings',
        'require_password_for_scheduled_meetings' => 'getRequirePasswordForScheduledMeetings',
        'require_password_for_scheduling_new_meetings' => 'getRequirePasswordForSchedulingNewMeetings',
        'use_pmi_for_instant_meetings' => 'getUsePmiForInstantMeetings',
        'use_pmi_for_scheduled_meetings' => 'getUsePmiForScheduledMeetings',
        'always_display_zoom_meeting_as_topic' => 'getAlwaysDisplayZoomMeetingAsTopic',
        'hide_meeting_description' => 'getHideMeetingDescription',
        'always_display_zoom_webinar_as_topic' => 'getAlwaysDisplayZoomWebinarAsTopic',
        'hide_webinar_description' => 'getHideWebinarDescription'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const AUDIO_TYPE_BOTH = 'both';
    public const AUDIO_TYPE_TELEPHONY = 'telephony';
    public const AUDIO_TYPE_VOIP = 'voip';
    public const AUDIO_TYPE_THIRD_PARTY = 'thirdParty';
    public const JBH_TIME_0 = 0;
    public const JBH_TIME_5 = 5;
    public const JBH_TIME_10 = 10;
    public const JBH_TIME_15 = 15;
    public const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_JBH_ONLY = 'jbh_only';
    public const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_ALL = 'all';
    public const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAudioTypeAllowableValues()
    {
        return [
            self::AUDIO_TYPE_BOTH,
            self::AUDIO_TYPE_TELEPHONY,
            self::AUDIO_TYPE_VOIP,
            self::AUDIO_TYPE_THIRD_PARTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJbhTimeAllowableValues()
    {
        return [
            self::JBH_TIME_0,
            self::JBH_TIME_5,
            self::JBH_TIME_10,
            self::JBH_TIME_15,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirePasswordForPmiMeetingsAllowableValues()
    {
        return [
            self::REQUIRE_PASSWORD_FOR_PMI_MEETINGS_JBH_ONLY,
            self::REQUIRE_PASSWORD_FOR_PMI_MEETINGS_ALL,
            self::REQUIRE_PASSWORD_FOR_PMI_MEETINGS_NONE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['audio_type'] = $data['audio_type'] ?? 'both';
        $this->container['enforce_login'] = $data['enforce_login'] ?? null;
        $this->container['enforce_login_domains'] = $data['enforce_login_domains'] ?? null;
        $this->container['enforce_login_with_domains'] = $data['enforce_login_with_domains'] ?? null;
        $this->container['force_pmi_jbh_password'] = $data['force_pmi_jbh_password'] ?? null;
        $this->container['host_video'] = $data['host_video'] ?? null;
        $this->container['jbh_time'] = $data['jbh_time'] ?? null;
        $this->container['join_before_host'] = $data['join_before_host'] ?? null;
        $this->container['meeting_password_requirement'] = $data['meeting_password_requirement'] ?? null;
        $this->container['not_store_meeting_topic'] = $data['not_store_meeting_topic'] ?? null;
        $this->container['participant_video'] = $data['participant_video'] ?? null;
        $this->container['personal_meeting'] = $data['personal_meeting'] ?? null;
        $this->container['require_password_for_instant_meetings'] = $data['require_password_for_instant_meetings'] ?? null;
        $this->container['require_password_for_pmi_meetings'] = $data['require_password_for_pmi_meetings'] ?? null;
        $this->container['require_password_for_scheduled_meetings'] = $data['require_password_for_scheduled_meetings'] ?? null;
        $this->container['require_password_for_scheduling_new_meetings'] = $data['require_password_for_scheduling_new_meetings'] ?? null;
        $this->container['use_pmi_for_instant_meetings'] = $data['use_pmi_for_instant_meetings'] ?? null;
        $this->container['use_pmi_for_scheduled_meetings'] = $data['use_pmi_for_scheduled_meetings'] ?? null;
        $this->container['always_display_zoom_meeting_as_topic'] = $data['always_display_zoom_meeting_as_topic'] ?? null;
        $this->container['hide_meeting_description'] = $data['hide_meeting_description'] ?? null;
        $this->container['always_display_zoom_webinar_as_topic'] = $data['always_display_zoom_webinar_as_topic'] ?? null;
        $this->container['hide_webinar_description'] = $data['hide_webinar_description'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAudioTypeAllowableValues();
        if (!is_null($this->container['audio_type']) && !in_array($this->container['audio_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'audio_type', must be one of '%s'",
                $this->container['audio_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJbhTimeAllowableValues();
        if (!is_null($this->container['jbh_time']) && !in_array($this->container['jbh_time'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'jbh_time', must be one of '%s'",
                $this->container['jbh_time'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRequirePasswordForPmiMeetingsAllowableValues();
        if (!is_null($this->container['require_password_for_pmi_meetings']) && !in_array($this->container['require_password_for_pmi_meetings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'require_password_for_pmi_meetings', must be one of '%s'",
                $this->container['require_password_for_pmi_meetings'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets audio_type
     *
     * @return string|null
     */
    public function getAudioType()
    {
        return $this->container['audio_type'];
    }

    /**
     * Sets audio_type
     *
     * @param string|null $audio_type Determine how participants can join the audio portion of the meeting.<br>`both` - Telephony and VoIP.<br>`telephony` - Audio PSTN telephony only.<br>`voip` - VoIP only.<br>`thirdParty` - 3rd party audio conference.
     *
     * @return self
     */
    public function setAudioType($audio_type)
    {
        $allowedValues = $this->getAudioTypeAllowableValues();
        if (!is_null($audio_type) && !in_array($audio_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'audio_type', must be one of '%s'",
                    $audio_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['audio_type'] = $audio_type;

        return $this;
    }

    /**
     * Gets enforce_login
     *
     * @return bool|null
     */
    public function getEnforceLogin()
    {
        return $this->container['enforce_login'];
    }

    /**
     * Sets enforce_login
     *
     * @param bool|null $enforce_login Only Zoom users who are signed in can join meetings.
     *
     * @return self
     */
    public function setEnforceLogin($enforce_login)
    {
        $this->container['enforce_login'] = $enforce_login;

        return $this;
    }

    /**
     * Gets enforce_login_domains
     *
     * @return string|null
     */
    public function getEnforceLoginDomains()
    {
        return $this->container['enforce_login_domains'];
    }

    /**
     * Sets enforce_login_domains
     *
     * @param string|null $enforce_login_domains Only signed in users with a specified domain can join the meeting.
     *
     * @return self
     */
    public function setEnforceLoginDomains($enforce_login_domains)
    {
        $this->container['enforce_login_domains'] = $enforce_login_domains;

        return $this;
    }

    /**
     * Gets enforce_login_with_domains
     *
     * @return bool|null
     */
    public function getEnforceLoginWithDomains()
    {
        return $this->container['enforce_login_with_domains'];
    }

    /**
     * Sets enforce_login_with_domains
     *
     * @param bool|null $enforce_login_with_domains Only signed in users with a specific domain can join meetings.
     *
     * @return self
     */
    public function setEnforceLoginWithDomains($enforce_login_with_domains)
    {
        $this->container['enforce_login_with_domains'] = $enforce_login_with_domains;

        return $this;
    }

    /**
     * Gets force_pmi_jbh_password
     *
     * @return bool|null
     */
    public function getForcePmiJbhPassword()
    {
        return $this->container['force_pmi_jbh_password'];
    }

    /**
     * Sets force_pmi_jbh_password
     *
     * @param bool|null $force_pmi_jbh_password Require a password for Personal Meetings if attendees can join before host.
     *
     * @return self
     */
    public function setForcePmiJbhPassword($force_pmi_jbh_password)
    {
        $this->container['force_pmi_jbh_password'] = $force_pmi_jbh_password;

        return $this;
    }

    /**
     * Gets host_video
     *
     * @return bool|null
     */
    public function getHostVideo()
    {
        return $this->container['host_video'];
    }

    /**
     * Sets host_video
     *
     * @param bool|null $host_video Start meetings with the host video on.
     *
     * @return self
     */
    public function setHostVideo($host_video)
    {
        $this->container['host_video'] = $host_video;

        return $this;
    }

    /**
     * Gets jbh_time
     *
     * @return int|null
     */
    public function getJbhTime()
    {
        return $this->container['jbh_time'];
    }

    /**
     * Sets jbh_time
     *
     * @param int|null $jbh_time If the value of \"join_before_host\" field is set to `true`, this field can be used to indicate time limits within which a participant may join a meeting before a host. The value of this field can be one of the following:  *  `0`: Allow participant to join anytime. *  `5`: Allow participant to join 5 minutes before meeting start time.  * `10`: Allow participant to join 10 minutes before meeting start time.
     *
     * @return self
     */
    public function setJbhTime($jbh_time)
    {
        $allowedValues = $this->getJbhTimeAllowableValues();
        if (!is_null($jbh_time) && !in_array($jbh_time, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'jbh_time', must be one of '%s'",
                    $jbh_time,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['jbh_time'] = $jbh_time;

        return $this;
    }

    /**
     * Gets join_before_host
     *
     * @return bool|null
     */
    public function getJoinBeforeHost()
    {
        return $this->container['join_before_host'];
    }

    /**
     * Sets join_before_host
     *
     * @param bool|null $join_before_host Allow participants to join the meeting before the host arrives.
     *
     * @return self
     */
    public function setJoinBeforeHost($join_before_host)
    {
        $this->container['join_before_host'] = $join_before_host;

        return $this;
    }

    /**
     * Gets meeting_password_requirement
     *
     * @return \Zoom\Api\Model\AccountUpdateSettingsScheduleMeetingMeetingPasswordRequirement|null
     */
    public function getMeetingPasswordRequirement()
    {
        return $this->container['meeting_password_requirement'];
    }

    /**
     * Sets meeting_password_requirement
     *
     * @param \Zoom\Api\Model\AccountUpdateSettingsScheduleMeetingMeetingPasswordRequirement|null $meeting_password_requirement meeting_password_requirement
     *
     * @return self
     */
    public function setMeetingPasswordRequirement($meeting_password_requirement)
    {
        $this->container['meeting_password_requirement'] = $meeting_password_requirement;

        return $this;
    }

    /**
     * Gets not_store_meeting_topic
     *
     * @return bool|null
     */
    public function getNotStoreMeetingTopic()
    {
        return $this->container['not_store_meeting_topic'];
    }

    /**
     * Sets not_store_meeting_topic
     *
     * @param bool|null $not_store_meeting_topic Always display \"Zoom Meeting\" as the meeting topic.
     *
     * @return self
     */
    public function setNotStoreMeetingTopic($not_store_meeting_topic)
    {
        $this->container['not_store_meeting_topic'] = $not_store_meeting_topic;

        return $this;
    }

    /**
     * Gets participant_video
     *
     * @return bool|null
     */
    public function getParticipantVideo()
    {
        return $this->container['participant_video'];
    }

    /**
     * Sets participant_video
     *
     * @param bool|null $participant_video Start meetings with the participant video on. Participants can change this setting during the meeting.
     *
     * @return self
     */
    public function setParticipantVideo($participant_video)
    {
        $this->container['participant_video'] = $participant_video;

        return $this;
    }

    /**
     * Gets personal_meeting
     *
     * @return bool|null
     */
    public function getPersonalMeeting()
    {
        return $this->container['personal_meeting'];
    }

    /**
     * Sets personal_meeting
     *
     * @param bool|null $personal_meeting Personal Meeting Setting.<br><br> `true`: Indicates that the **\"Enable Personal Meeting ID\"** setting is turned on. Users can choose to use personal meeting ID for their meetings. <br><br> `false`: Indicates that the **\"Enable Personal Meeting ID\"** setting is [turned off](https://support.zoom.us/hc/en-us/articles/201362843-Personal-meeting-ID-PMI-and-personal-link#h_aa0335c8-3b06-41bc-bc1f-a8b84ef17f2a). If this setting is disabled, meetings that were scheduled with a PMI will be invalid. Scheduled meetings will need to be manually updated. For Zoom Phone only: If a user has been assigned a desk phone, **\"Elevate to Zoom Meeting\"** on desk phone will be disabled.
     *
     * @return self
     */
    public function setPersonalMeeting($personal_meeting)
    {
        $this->container['personal_meeting'] = $personal_meeting;

        return $this;
    }

    /**
     * Gets require_password_for_instant_meetings
     *
     * @return bool|null
     */
    public function getRequirePasswordForInstantMeetings()
    {
        return $this->container['require_password_for_instant_meetings'];
    }

    /**
     * Sets require_password_for_instant_meetings
     *
     * @param bool|null $require_password_for_instant_meetings Require a password for instant meetings. If you use a PMI for your instant meetings, this option will be disabled. This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts.
     *
     * @return self
     */
    public function setRequirePasswordForInstantMeetings($require_password_for_instant_meetings)
    {
        $this->container['require_password_for_instant_meetings'] = $require_password_for_instant_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_pmi_meetings
     *
     * @return string|null
     */
    public function getRequirePasswordForPmiMeetings()
    {
        return $this->container['require_password_for_pmi_meetings'];
    }

    /**
     * Sets require_password_for_pmi_meetings
     *
     * @param string|null $require_password_for_pmi_meetings Require a password for a meeting held using a Personal Meeting ID (PMI). This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts.
     *
     * @return self
     */
    public function setRequirePasswordForPmiMeetings($require_password_for_pmi_meetings)
    {
        $allowedValues = $this->getRequirePasswordForPmiMeetingsAllowableValues();
        if (!is_null($require_password_for_pmi_meetings) && !in_array($require_password_for_pmi_meetings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'require_password_for_pmi_meetings', must be one of '%s'",
                    $require_password_for_pmi_meetings,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['require_password_for_pmi_meetings'] = $require_password_for_pmi_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_scheduled_meetings
     *
     * @return bool|null
     */
    public function getRequirePasswordForScheduledMeetings()
    {
        return $this->container['require_password_for_scheduled_meetings'];
    }

    /**
     * Sets require_password_for_scheduled_meetings
     *
     * @param bool|null $require_password_for_scheduled_meetings Require a password for meetings which have already been scheduled.
     *
     * @return self
     */
    public function setRequirePasswordForScheduledMeetings($require_password_for_scheduled_meetings)
    {
        $this->container['require_password_for_scheduled_meetings'] = $require_password_for_scheduled_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_scheduling_new_meetings
     *
     * @return bool|null
     */
    public function getRequirePasswordForSchedulingNewMeetings()
    {
        return $this->container['require_password_for_scheduling_new_meetings'];
    }

    /**
     * Sets require_password_for_scheduling_new_meetings
     *
     * @param bool|null $require_password_for_scheduling_new_meetings Require a password when scheduling new meetings. This setting applies for regular meetings that do not use a PMI. If enabled, a password will be generated while a host schedules a new meeting and participants will be required to enter the password before they can join the meeting. This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts.
     *
     * @return self
     */
    public function setRequirePasswordForSchedulingNewMeetings($require_password_for_scheduling_new_meetings)
    {
        $this->container['require_password_for_scheduling_new_meetings'] = $require_password_for_scheduling_new_meetings;

        return $this;
    }

    /**
     * Gets use_pmi_for_instant_meetings
     *
     * @return bool|null
     */
    public function getUsePmiForInstantMeetings()
    {
        return $this->container['use_pmi_for_instant_meetings'];
    }

    /**
     * Sets use_pmi_for_instant_meetings
     *
     * @param bool|null $use_pmi_for_instant_meetings Use a Personal Meeting ID (PMI) when starting an instant meeting.
     *
     * @return self
     */
    public function setUsePmiForInstantMeetings($use_pmi_for_instant_meetings)
    {
        $this->container['use_pmi_for_instant_meetings'] = $use_pmi_for_instant_meetings;

        return $this;
    }

    /**
     * Gets use_pmi_for_scheduled_meetings
     *
     * @return bool|null
     */
    public function getUsePmiForScheduledMeetings()
    {
        return $this->container['use_pmi_for_scheduled_meetings'];
    }

    /**
     * Sets use_pmi_for_scheduled_meetings
     *
     * @param bool|null $use_pmi_for_scheduled_meetings Use a Personal Meeting ID (PMI) when scheduling a meeting.
     *
     * @return self
     */
    public function setUsePmiForScheduledMeetings($use_pmi_for_scheduled_meetings)
    {
        $this->container['use_pmi_for_scheduled_meetings'] = $use_pmi_for_scheduled_meetings;

        return $this;
    }

    /**
     * Gets always_display_zoom_meeting_as_topic
     *
     * @return \Zoom\Api\Model\AccountSettingsScheduleMeetingAlwaysDisplayZoomMeetingAsTopic|null
     */
    public function getAlwaysDisplayZoomMeetingAsTopic()
    {
        return $this->container['always_display_zoom_meeting_as_topic'];
    }

    /**
     * Sets always_display_zoom_meeting_as_topic
     *
     * @param \Zoom\Api\Model\AccountSettingsScheduleMeetingAlwaysDisplayZoomMeetingAsTopic|null $always_display_zoom_meeting_as_topic always_display_zoom_meeting_as_topic
     *
     * @return self
     */
    public function setAlwaysDisplayZoomMeetingAsTopic($always_display_zoom_meeting_as_topic)
    {
        $this->container['always_display_zoom_meeting_as_topic'] = $always_display_zoom_meeting_as_topic;

        return $this;
    }

    /**
     * Gets hide_meeting_description
     *
     * @return \Zoom\Api\Model\AccountSettingsScheduleMeetingHideMeetingDescription|null
     */
    public function getHideMeetingDescription()
    {
        return $this->container['hide_meeting_description'];
    }

    /**
     * Sets hide_meeting_description
     *
     * @param \Zoom\Api\Model\AccountSettingsScheduleMeetingHideMeetingDescription|null $hide_meeting_description hide_meeting_description
     *
     * @return self
     */
    public function setHideMeetingDescription($hide_meeting_description)
    {
        $this->container['hide_meeting_description'] = $hide_meeting_description;

        return $this;
    }

    /**
     * Gets always_display_zoom_webinar_as_topic
     *
     * @return \Zoom\Api\Model\AccountSettingsScheduleMeetingAlwaysDisplayZoomWebinarAsTopic|null
     */
    public function getAlwaysDisplayZoomWebinarAsTopic()
    {
        return $this->container['always_display_zoom_webinar_as_topic'];
    }

    /**
     * Sets always_display_zoom_webinar_as_topic
     *
     * @param \Zoom\Api\Model\AccountSettingsScheduleMeetingAlwaysDisplayZoomWebinarAsTopic|null $always_display_zoom_webinar_as_topic always_display_zoom_webinar_as_topic
     *
     * @return self
     */
    public function setAlwaysDisplayZoomWebinarAsTopic($always_display_zoom_webinar_as_topic)
    {
        $this->container['always_display_zoom_webinar_as_topic'] = $always_display_zoom_webinar_as_topic;

        return $this;
    }

    /**
     * Gets hide_webinar_description
     *
     * @return \Zoom\Api\Model\AccountSettingsScheduleMeetingHideWebinarDescription|null
     */
    public function getHideWebinarDescription()
    {
        return $this->container['hide_webinar_description'];
    }

    /**
     * Sets hide_webinar_description
     *
     * @param \Zoom\Api\Model\AccountSettingsScheduleMeetingHideWebinarDescription|null $hide_webinar_description hide_webinar_description
     *
     * @return self
     */
    public function setHideWebinarDescription($hide_webinar_description)
    {
        $this->container['hide_webinar_description'] = $hide_webinar_description;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


