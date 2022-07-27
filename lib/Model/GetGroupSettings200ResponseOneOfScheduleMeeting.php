<?php
/**
 * GetGroupSettings200ResponseOneOfScheduleMeeting
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
 * GetGroupSettings200ResponseOneOfScheduleMeeting Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetGroupSettings200ResponseOneOfScheduleMeeting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getGroupSettings_200_response_oneOf_schedule_meeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_type' => 'string',
        'embed_password_in_join_link' => 'bool',
        'force_pmi_jbh_password' => 'bool',
        'host_video' => 'bool',
        'join_before_host' => 'bool',
        'mute_upon_entry' => 'bool',
        'participant_video' => 'bool',
        'personal_meeting' => 'bool',
        'pstn_password_protected' => 'bool',
        'require_password_for_instant_meetings' => 'bool',
        'require_password_for_pmi_meetings' => 'string',
        'require_password_for_scheduled_meetings' => 'bool',
        'require_password_for_scheduling_new_meetings' => 'bool',
        'upcoming_meeting_reminder' => 'bool',
        'use_pmi_for_instant_meetings' => 'bool',
        'use_pmi_for_schedule_meetings' => 'bool',
        'always_display_zoom_meeting_as_topic' => '\Zoom\Api\Model\GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomMeetingAsTopic',
        'always_display_zoom_webinar_as_topic' => '\Zoom\Api\Model\GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomWebinarAsTopic'
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
        'embed_password_in_join_link' => null,
        'force_pmi_jbh_password' => null,
        'host_video' => null,
        'join_before_host' => null,
        'mute_upon_entry' => null,
        'participant_video' => null,
        'personal_meeting' => null,
        'pstn_password_protected' => null,
        'require_password_for_instant_meetings' => null,
        'require_password_for_pmi_meetings' => null,
        'require_password_for_scheduled_meetings' => null,
        'require_password_for_scheduling_new_meetings' => null,
        'upcoming_meeting_reminder' => null,
        'use_pmi_for_instant_meetings' => null,
        'use_pmi_for_schedule_meetings' => null,
        'always_display_zoom_meeting_as_topic' => null,
        'always_display_zoom_webinar_as_topic' => null
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
        'embed_password_in_join_link' => 'embed_password_in_join_link',
        'force_pmi_jbh_password' => 'force_pmi_jbh_password',
        'host_video' => 'host_video',
        'join_before_host' => 'join_before_host',
        'mute_upon_entry' => 'mute_upon_entry',
        'participant_video' => 'participant_video',
        'personal_meeting' => 'personal_meeting',
        'pstn_password_protected' => 'pstn_password_protected',
        'require_password_for_instant_meetings' => 'require_password_for_instant_meetings',
        'require_password_for_pmi_meetings' => 'require_password_for_pmi_meetings',
        'require_password_for_scheduled_meetings' => 'require_password_for_scheduled_meetings',
        'require_password_for_scheduling_new_meetings' => 'require_password_for_scheduling_new_meetings',
        'upcoming_meeting_reminder' => 'upcoming_meeting_reminder',
        'use_pmi_for_instant_meetings' => 'use_pmi_for_instant_meetings',
        'use_pmi_for_schedule_meetings' => 'use_pmi_for_schedule_meetings',
        'always_display_zoom_meeting_as_topic' => 'always_display_zoom_meeting_as_topic',
        'always_display_zoom_webinar_as_topic' => 'always_display_zoom_webinar_as_topic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_type' => 'setAudioType',
        'embed_password_in_join_link' => 'setEmbedPasswordInJoinLink',
        'force_pmi_jbh_password' => 'setForcePmiJbhPassword',
        'host_video' => 'setHostVideo',
        'join_before_host' => 'setJoinBeforeHost',
        'mute_upon_entry' => 'setMuteUponEntry',
        'participant_video' => 'setParticipantVideo',
        'personal_meeting' => 'setPersonalMeeting',
        'pstn_password_protected' => 'setPstnPasswordProtected',
        'require_password_for_instant_meetings' => 'setRequirePasswordForInstantMeetings',
        'require_password_for_pmi_meetings' => 'setRequirePasswordForPmiMeetings',
        'require_password_for_scheduled_meetings' => 'setRequirePasswordForScheduledMeetings',
        'require_password_for_scheduling_new_meetings' => 'setRequirePasswordForSchedulingNewMeetings',
        'upcoming_meeting_reminder' => 'setUpcomingMeetingReminder',
        'use_pmi_for_instant_meetings' => 'setUsePmiForInstantMeetings',
        'use_pmi_for_schedule_meetings' => 'setUsePmiForScheduleMeetings',
        'always_display_zoom_meeting_as_topic' => 'setAlwaysDisplayZoomMeetingAsTopic',
        'always_display_zoom_webinar_as_topic' => 'setAlwaysDisplayZoomWebinarAsTopic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_type' => 'getAudioType',
        'embed_password_in_join_link' => 'getEmbedPasswordInJoinLink',
        'force_pmi_jbh_password' => 'getForcePmiJbhPassword',
        'host_video' => 'getHostVideo',
        'join_before_host' => 'getJoinBeforeHost',
        'mute_upon_entry' => 'getMuteUponEntry',
        'participant_video' => 'getParticipantVideo',
        'personal_meeting' => 'getPersonalMeeting',
        'pstn_password_protected' => 'getPstnPasswordProtected',
        'require_password_for_instant_meetings' => 'getRequirePasswordForInstantMeetings',
        'require_password_for_pmi_meetings' => 'getRequirePasswordForPmiMeetings',
        'require_password_for_scheduled_meetings' => 'getRequirePasswordForScheduledMeetings',
        'require_password_for_scheduling_new_meetings' => 'getRequirePasswordForSchedulingNewMeetings',
        'upcoming_meeting_reminder' => 'getUpcomingMeetingReminder',
        'use_pmi_for_instant_meetings' => 'getUsePmiForInstantMeetings',
        'use_pmi_for_schedule_meetings' => 'getUsePmiForScheduleMeetings',
        'always_display_zoom_meeting_as_topic' => 'getAlwaysDisplayZoomMeetingAsTopic',
        'always_display_zoom_webinar_as_topic' => 'getAlwaysDisplayZoomWebinarAsTopic'
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

    public const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_ALL = 'all';
    public const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_JBH_ONLY = 'jbh_only';
    public const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirePasswordForPmiMeetingsAllowableValues()
    {
        return [
            self::REQUIRE_PASSWORD_FOR_PMI_MEETINGS_ALL,
            self::REQUIRE_PASSWORD_FOR_PMI_MEETINGS_JBH_ONLY,
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
        $this->container['audio_type'] = $data['audio_type'] ?? null;
        $this->container['embed_password_in_join_link'] = $data['embed_password_in_join_link'] ?? null;
        $this->container['force_pmi_jbh_password'] = $data['force_pmi_jbh_password'] ?? null;
        $this->container['host_video'] = $data['host_video'] ?? null;
        $this->container['join_before_host'] = $data['join_before_host'] ?? null;
        $this->container['mute_upon_entry'] = $data['mute_upon_entry'] ?? null;
        $this->container['participant_video'] = $data['participant_video'] ?? null;
        $this->container['personal_meeting'] = $data['personal_meeting'] ?? null;
        $this->container['pstn_password_protected'] = $data['pstn_password_protected'] ?? null;
        $this->container['require_password_for_instant_meetings'] = $data['require_password_for_instant_meetings'] ?? null;
        $this->container['require_password_for_pmi_meetings'] = $data['require_password_for_pmi_meetings'] ?? null;
        $this->container['require_password_for_scheduled_meetings'] = $data['require_password_for_scheduled_meetings'] ?? null;
        $this->container['require_password_for_scheduling_new_meetings'] = $data['require_password_for_scheduling_new_meetings'] ?? null;
        $this->container['upcoming_meeting_reminder'] = $data['upcoming_meeting_reminder'] ?? null;
        $this->container['use_pmi_for_instant_meetings'] = $data['use_pmi_for_instant_meetings'] ?? null;
        $this->container['use_pmi_for_schedule_meetings'] = $data['use_pmi_for_schedule_meetings'] ?? null;
        $this->container['always_display_zoom_meeting_as_topic'] = $data['always_display_zoom_meeting_as_topic'] ?? null;
        $this->container['always_display_zoom_webinar_as_topic'] = $data['always_display_zoom_webinar_as_topic'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string|null $audio_type Determine how participants can join the audio portion of the meeting.
     *
     * @return self
     */
    public function setAudioType($audio_type)
    {
        $this->container['audio_type'] = $audio_type;

        return $this;
    }

    /**
     * Gets embed_password_in_join_link
     *
     * @return bool|null
     */
    public function getEmbedPasswordInJoinLink()
    {
        return $this->container['embed_password_in_join_link'];
    }

    /**
     * Sets embed_password_in_join_link
     *
     * @param bool|null $embed_password_in_join_link If the value is set to `true`, the meeting password will be encrypted and included in the join meeting link to allow participants to join with just one click without having to enter the password.
     *
     * @return self
     */
    public function setEmbedPasswordInJoinLink($embed_password_in_join_link)
    {
        $this->container['embed_password_in_join_link'] = $embed_password_in_join_link;

        return $this;
    }

    /**
     * Gets force_pmi_jbh_password
     *
     * @return bool|null
     * @deprecated
     */
    public function getForcePmiJbhPassword()
    {
        return $this->container['force_pmi_jbh_password'];
    }

    /**
     * Sets force_pmi_jbh_password
     *
     * @param bool|null $force_pmi_jbh_password If join before host option is enabled for a personal meeting, then enforce password requirement.   **This field will be deprecated in near future.** If you would like to enable this setting, we highly encourage you to use the `require_password_for_pmi_meetings` field.
     *
     * @return self
     * @deprecated
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
     * @param bool|null $host_video Start meetings with host video on.
     *
     * @return self
     */
    public function setHostVideo($host_video)
    {
        $this->container['host_video'] = $host_video;

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
     * @param bool|null $join_before_host Allow participants to join the meeting before the host arrives
     *
     * @return self
     */
    public function setJoinBeforeHost($join_before_host)
    {
        $this->container['join_before_host'] = $join_before_host;

        return $this;
    }

    /**
     * Gets mute_upon_entry
     *
     * @return bool|null
     */
    public function getMuteUponEntry()
    {
        return $this->container['mute_upon_entry'];
    }

    /**
     * Sets mute_upon_entry
     *
     * @param bool|null $mute_upon_entry Automatically mute all participants when they join the meeting.
     *
     * @return self
     */
    public function setMuteUponEntry($mute_upon_entry)
    {
        $this->container['mute_upon_entry'] = $mute_upon_entry;

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
     * @param bool|null $participant_video Start meetings with participant video on.
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
     * @param bool|null $personal_meeting Personal Meeting Setting.<br><br> `true`: Indicates that the **\"Enable Personal Meeting ID\"** setting is turned on. Users can choose to use personal meeting ID for their meetings. <br><br> `false`: Indicates that the **\"Enable Personal Meeting ID\"** setting is [turned off](https://support.zoom.us/hc/en-us/articles/201362843-Personal-meeting-ID-PMI-and-personal-link#h_aa0335c8-3b06-41bc-bc1f-a8b84ef17f2a). If this setting is disabled, meetings that were scheduled with PMI will be invalid. Scheduled meetings will need to be manually updated. For Zoom Phone only:If a user has been assigned a desk phone, **\"Elevate to Zoom Meeting\"** on desk phone will be disabled.
     *
     * @return self
     */
    public function setPersonalMeeting($personal_meeting)
    {
        $this->container['personal_meeting'] = $personal_meeting;

        return $this;
    }

    /**
     * Gets pstn_password_protected
     *
     * @return bool|null
     */
    public function getPstnPasswordProtected()
    {
        return $this->container['pstn_password_protected'];
    }

    /**
     * Sets pstn_password_protected
     *
     * @param bool|null $pstn_password_protected Generate and send new passwords for newly scheduled or edited meetings.
     *
     * @return self
     */
    public function setPstnPasswordProtected($pstn_password_protected)
    {
        $this->container['pstn_password_protected'] = $pstn_password_protected;

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
     * @param bool|null $require_password_for_instant_meetings If enabled, a random password will be generated on the user's end who starts the instant meeting. Other participants will have to enter the password to join the meeting. If you use PMI for your instant meetings, this option will be disabled.
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
     * @param string|null $require_password_for_pmi_meetings Indicates whether a password is required for [PMI](https://support.zoom.us/hc/en-us/articles/203276937-Using-Personal-Meeting-ID-PMI-) meetings or not. The value can be one of the following:<br> `none`: Do not require password for PMI meetings.<br>  `all`: Require participants to enter password for all PMI enabled meetings.<br> `jbh_only`: Require password only for meetings where the **\"join before host\"** setting is enabled.
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
     * @param bool|null $require_password_for_scheduled_meetings Require a password for meetings which have already been scheduled
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
     * @param bool|null $require_password_for_scheduling_new_meetings This setting applies for regular meetings that do not use PMI. If enabled, a password will be generated while a host schedules a new meeting and participants will be required to enter the password before they can join the meeting.
     *
     * @return self
     */
    public function setRequirePasswordForSchedulingNewMeetings($require_password_for_scheduling_new_meetings)
    {
        $this->container['require_password_for_scheduling_new_meetings'] = $require_password_for_scheduling_new_meetings;

        return $this;
    }

    /**
     * Gets upcoming_meeting_reminder
     *
     * @return bool|null
     */
    public function getUpcomingMeetingReminder()
    {
        return $this->container['upcoming_meeting_reminder'];
    }

    /**
     * Sets upcoming_meeting_reminder
     *
     * @param bool|null $upcoming_meeting_reminder Receive desktop notification for upcoming meetings.
     *
     * @return self
     */
    public function setUpcomingMeetingReminder($upcoming_meeting_reminder)
    {
        $this->container['upcoming_meeting_reminder'] = $upcoming_meeting_reminder;

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
     * @param bool|null $use_pmi_for_instant_meetings Indicates whether PMI is enabled for all instant meetings or not.
     *
     * @return self
     */
    public function setUsePmiForInstantMeetings($use_pmi_for_instant_meetings)
    {
        $this->container['use_pmi_for_instant_meetings'] = $use_pmi_for_instant_meetings;

        return $this;
    }

    /**
     * Gets use_pmi_for_schedule_meetings
     *
     * @return bool|null
     */
    public function getUsePmiForScheduleMeetings()
    {
        return $this->container['use_pmi_for_schedule_meetings'];
    }

    /**
     * Sets use_pmi_for_schedule_meetings
     *
     * @param bool|null $use_pmi_for_schedule_meetings Indicates whether PMI is enabled for all scheduled meetings or not.
     *
     * @return self
     */
    public function setUsePmiForScheduleMeetings($use_pmi_for_schedule_meetings)
    {
        $this->container['use_pmi_for_schedule_meetings'] = $use_pmi_for_schedule_meetings;

        return $this;
    }

    /**
     * Gets always_display_zoom_meeting_as_topic
     *
     * @return \Zoom\Api\Model\GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomMeetingAsTopic|null
     */
    public function getAlwaysDisplayZoomMeetingAsTopic()
    {
        return $this->container['always_display_zoom_meeting_as_topic'];
    }

    /**
     * Sets always_display_zoom_meeting_as_topic
     *
     * @param \Zoom\Api\Model\GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomMeetingAsTopic|null $always_display_zoom_meeting_as_topic always_display_zoom_meeting_as_topic
     *
     * @return self
     */
    public function setAlwaysDisplayZoomMeetingAsTopic($always_display_zoom_meeting_as_topic)
    {
        $this->container['always_display_zoom_meeting_as_topic'] = $always_display_zoom_meeting_as_topic;

        return $this;
    }

    /**
     * Gets always_display_zoom_webinar_as_topic
     *
     * @return \Zoom\Api\Model\GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomWebinarAsTopic|null
     */
    public function getAlwaysDisplayZoomWebinarAsTopic()
    {
        return $this->container['always_display_zoom_webinar_as_topic'];
    }

    /**
     * Sets always_display_zoom_webinar_as_topic
     *
     * @param \Zoom\Api\Model\GetGroupSettings200ResponseOneOfScheduleMeetingAlwaysDisplayZoomWebinarAsTopic|null $always_display_zoom_webinar_as_topic always_display_zoom_webinar_as_topic
     *
     * @return self
     */
    public function setAlwaysDisplayZoomWebinarAsTopic($always_display_zoom_webinar_as_topic)
    {
        $this->container['always_display_zoom_webinar_as_topic'] = $always_display_zoom_webinar_as_topic;

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


