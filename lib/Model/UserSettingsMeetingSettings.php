<?php
/**
 * UserSettingsMeetingSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applicatixons on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UserSettingsMeetingSettings Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserSettingsMeetingSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User settings Meeting settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'host_video' => 'bool',
        'participants_video' => 'bool',
        'audio_type' => 'string',
        'join_before_host' => 'bool',
        'force_pmi_jbh_password' => 'bool',
        'pstn_password_protected' => 'bool',
        'use_pmi_for_scheduled_meetings' => 'bool',
        'use_pmi_for_instant_meetings' => 'bool',
        'require_password_for_scheduling_new_meetings' => 'bool',
        'require_password_for_scheduled_meetings' => 'bool',
        'default_password_for_scheduled_meetings' => 'string',
        'require_password_for_instant_meetings' => 'bool',
        'require_password_for_pmi_meetings' => 'string',
        'pmi_password' => 'string',
        'embed_password_in_join_link' => 'bool',
        'meeting_password_requirement' => '\Swagger\Client\Model\UserSettingsMeetingSettingsMeetingPasswordRequirement',
        'personal_meeting' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'host_video' => null,
        'participants_video' => null,
        'audio_type' => null,
        'join_before_host' => null,
        'force_pmi_jbh_password' => null,
        'pstn_password_protected' => null,
        'use_pmi_for_scheduled_meetings' => null,
        'use_pmi_for_instant_meetings' => null,
        'require_password_for_scheduling_new_meetings' => null,
        'require_password_for_scheduled_meetings' => null,
        'default_password_for_scheduled_meetings' => null,
        'require_password_for_instant_meetings' => null,
        'require_password_for_pmi_meetings' => null,
        'pmi_password' => null,
        'embed_password_in_join_link' => null,
        'meeting_password_requirement' => null,
        'personal_meeting' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'host_video' => 'host_video',
        'participants_video' => 'participants_video',
        'audio_type' => 'audio_type',
        'join_before_host' => 'join_before_host',
        'force_pmi_jbh_password' => 'force_pmi_jbh_password',
        'pstn_password_protected' => 'pstn_password_protected',
        'use_pmi_for_scheduled_meetings' => 'use_pmi_for_scheduled_meetings',
        'use_pmi_for_instant_meetings' => 'use_pmi_for_instant_meetings',
        'require_password_for_scheduling_new_meetings' => 'require_password_for_scheduling_new_meetings',
        'require_password_for_scheduled_meetings' => 'require_password_for_scheduled_meetings',
        'default_password_for_scheduled_meetings' => 'default_password_for_scheduled_meetings',
        'require_password_for_instant_meetings' => 'require_password_for_instant_meetings',
        'require_password_for_pmi_meetings' => 'require_password_for_pmi_meetings',
        'pmi_password' => 'pmi_password',
        'embed_password_in_join_link' => 'embed_password_in_join_link',
        'meeting_password_requirement' => 'meeting_password_requirement',
        'personal_meeting' => 'personal_meeting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host_video' => 'setHostVideo',
        'participants_video' => 'setParticipantsVideo',
        'audio_type' => 'setAudioType',
        'join_before_host' => 'setJoinBeforeHost',
        'force_pmi_jbh_password' => 'setForcePmiJbhPassword',
        'pstn_password_protected' => 'setPstnPasswordProtected',
        'use_pmi_for_scheduled_meetings' => 'setUsePmiForScheduledMeetings',
        'use_pmi_for_instant_meetings' => 'setUsePmiForInstantMeetings',
        'require_password_for_scheduling_new_meetings' => 'setRequirePasswordForSchedulingNewMeetings',
        'require_password_for_scheduled_meetings' => 'setRequirePasswordForScheduledMeetings',
        'default_password_for_scheduled_meetings' => 'setDefaultPasswordForScheduledMeetings',
        'require_password_for_instant_meetings' => 'setRequirePasswordForInstantMeetings',
        'require_password_for_pmi_meetings' => 'setRequirePasswordForPmiMeetings',
        'pmi_password' => 'setPmiPassword',
        'embed_password_in_join_link' => 'setEmbedPasswordInJoinLink',
        'meeting_password_requirement' => 'setMeetingPasswordRequirement',
        'personal_meeting' => 'setPersonalMeeting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host_video' => 'getHostVideo',
        'participants_video' => 'getParticipantsVideo',
        'audio_type' => 'getAudioType',
        'join_before_host' => 'getJoinBeforeHost',
        'force_pmi_jbh_password' => 'getForcePmiJbhPassword',
        'pstn_password_protected' => 'getPstnPasswordProtected',
        'use_pmi_for_scheduled_meetings' => 'getUsePmiForScheduledMeetings',
        'use_pmi_for_instant_meetings' => 'getUsePmiForInstantMeetings',
        'require_password_for_scheduling_new_meetings' => 'getRequirePasswordForSchedulingNewMeetings',
        'require_password_for_scheduled_meetings' => 'getRequirePasswordForScheduledMeetings',
        'default_password_for_scheduled_meetings' => 'getDefaultPasswordForScheduledMeetings',
        'require_password_for_instant_meetings' => 'getRequirePasswordForInstantMeetings',
        'require_password_for_pmi_meetings' => 'getRequirePasswordForPmiMeetings',
        'pmi_password' => 'getPmiPassword',
        'embed_password_in_join_link' => 'getEmbedPasswordInJoinLink',
        'meeting_password_requirement' => 'getMeetingPasswordRequirement',
        'personal_meeting' => 'getPersonalMeeting'
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
        return self::$swaggerModelName;
    }

    const AUDIO_TYPE_BOTH = 'both';
    const AUDIO_TYPE_TELEPHONY = 'telephony';
    const AUDIO_TYPE_VOIP = 'voip';
    const AUDIO_TYPE_THIRD_PARTY = 'thirdParty';
    const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_JBH_ONLY = 'jbh_only';
    const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_ALL = 'all';
    const REQUIRE_PASSWORD_FOR_PMI_MEETINGS_NONE = 'none';
    

    
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
        $this->container['host_video'] = isset($data['host_video']) ? $data['host_video'] : null;
        $this->container['participants_video'] = isset($data['participants_video']) ? $data['participants_video'] : null;
        $this->container['audio_type'] = isset($data['audio_type']) ? $data['audio_type'] : 'voip';
        $this->container['join_before_host'] = isset($data['join_before_host']) ? $data['join_before_host'] : null;
        $this->container['force_pmi_jbh_password'] = isset($data['force_pmi_jbh_password']) ? $data['force_pmi_jbh_password'] : null;
        $this->container['pstn_password_protected'] = isset($data['pstn_password_protected']) ? $data['pstn_password_protected'] : null;
        $this->container['use_pmi_for_scheduled_meetings'] = isset($data['use_pmi_for_scheduled_meetings']) ? $data['use_pmi_for_scheduled_meetings'] : null;
        $this->container['use_pmi_for_instant_meetings'] = isset($data['use_pmi_for_instant_meetings']) ? $data['use_pmi_for_instant_meetings'] : null;
        $this->container['require_password_for_scheduling_new_meetings'] = isset($data['require_password_for_scheduling_new_meetings']) ? $data['require_password_for_scheduling_new_meetings'] : null;
        $this->container['require_password_for_scheduled_meetings'] = isset($data['require_password_for_scheduled_meetings']) ? $data['require_password_for_scheduled_meetings'] : null;
        $this->container['default_password_for_scheduled_meetings'] = isset($data['default_password_for_scheduled_meetings']) ? $data['default_password_for_scheduled_meetings'] : null;
        $this->container['require_password_for_instant_meetings'] = isset($data['require_password_for_instant_meetings']) ? $data['require_password_for_instant_meetings'] : null;
        $this->container['require_password_for_pmi_meetings'] = isset($data['require_password_for_pmi_meetings']) ? $data['require_password_for_pmi_meetings'] : null;
        $this->container['pmi_password'] = isset($data['pmi_password']) ? $data['pmi_password'] : null;
        $this->container['embed_password_in_join_link'] = isset($data['embed_password_in_join_link']) ? $data['embed_password_in_join_link'] : null;
        $this->container['meeting_password_requirement'] = isset($data['meeting_password_requirement']) ? $data['meeting_password_requirement'] : null;
        $this->container['personal_meeting'] = isset($data['personal_meeting']) ? $data['personal_meeting'] : null;
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
                "invalid value for 'audio_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRequirePasswordForPmiMeetingsAllowableValues();
        if (!is_null($this->container['require_password_for_pmi_meetings']) && !in_array($this->container['require_password_for_pmi_meetings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'require_password_for_pmi_meetings', must be one of '%s'",
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
     * Gets host_video
     *
     * @return bool
     */
    public function getHostVideo()
    {
        return $this->container['host_video'];
    }

    /**
     * Sets host_video
     *
     * @param bool $host_video Start meetings with host video on.
     *
     * @return $this
     */
    public function setHostVideo($host_video)
    {
        $this->container['host_video'] = $host_video;

        return $this;
    }

    /**
     * Gets participants_video
     *
     * @return bool
     */
    public function getParticipantsVideo()
    {
        return $this->container['participants_video'];
    }

    /**
     * Sets participants_video
     *
     * @param bool $participants_video Start meetings with participants video on.
     *
     * @return $this
     */
    public function setParticipantsVideo($participants_video)
    {
        $this->container['participants_video'] = $participants_video;

        return $this;
    }

    /**
     * Gets audio_type
     *
     * @return string
     */
    public function getAudioType()
    {
        return $this->container['audio_type'];
    }

    /**
     * Sets audio_type
     *
     * @param string $audio_type Determine how participants can join the audio portion of the meeting:<br>`both` - Telephony and VoIP.<br>`telephony` - Audio PSTN telephony only.<br>`voip` - VoIP only.<br>`thirdParty` - Third party audio conference.
     *
     * @return $this
     */
    public function setAudioType($audio_type)
    {
        $allowedValues = $this->getAudioTypeAllowableValues();
        if (!is_null($audio_type) && !in_array($audio_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'audio_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['audio_type'] = $audio_type;

        return $this;
    }

    /**
     * Gets join_before_host
     *
     * @return bool
     */
    public function getJoinBeforeHost()
    {
        return $this->container['join_before_host'];
    }

    /**
     * Sets join_before_host
     *
     * @param bool $join_before_host Join the meeting before host arrives.
     *
     * @return $this
     */
    public function setJoinBeforeHost($join_before_host)
    {
        $this->container['join_before_host'] = $join_before_host;

        return $this;
    }

    /**
     * Gets force_pmi_jbh_password
     *
     * @return bool
     */
    public function getForcePmiJbhPassword()
    {
        return $this->container['force_pmi_jbh_password'];
    }

    /**
     * Sets force_pmi_jbh_password
     *
     * @param bool $force_pmi_jbh_password Require a passcode for personal meetings if attendees can join before host.
     *
     * @return $this
     */
    public function setForcePmiJbhPassword($force_pmi_jbh_password)
    {
        $this->container['force_pmi_jbh_password'] = $force_pmi_jbh_password;

        return $this;
    }

    /**
     * Gets pstn_password_protected
     *
     * @return bool
     */
    public function getPstnPasswordProtected()
    {
        return $this->container['pstn_password_protected'];
    }

    /**
     * Sets pstn_password_protected
     *
     * @param bool $pstn_password_protected Generate and require passcode for participants joining by phone.
     *
     * @return $this
     */
    public function setPstnPasswordProtected($pstn_password_protected)
    {
        $this->container['pstn_password_protected'] = $pstn_password_protected;

        return $this;
    }

    /**
     * Gets use_pmi_for_scheduled_meetings
     *
     * @return bool
     */
    public function getUsePmiForScheduledMeetings()
    {
        return $this->container['use_pmi_for_scheduled_meetings'];
    }

    /**
     * Sets use_pmi_for_scheduled_meetings
     *
     * @param bool $use_pmi_for_scheduled_meetings Use Personal Meeting ID (PMI) when scheduling a meeting
     *
     * @return $this
     */
    public function setUsePmiForScheduledMeetings($use_pmi_for_scheduled_meetings)
    {
        $this->container['use_pmi_for_scheduled_meetings'] = $use_pmi_for_scheduled_meetings;

        return $this;
    }

    /**
     * Gets use_pmi_for_instant_meetings
     *
     * @return bool
     */
    public function getUsePmiForInstantMeetings()
    {
        return $this->container['use_pmi_for_instant_meetings'];
    }

    /**
     * Sets use_pmi_for_instant_meetings
     *
     * @param bool $use_pmi_for_instant_meetings Use Personal Meeting ID (PMI) when starting an instant meeting
     *
     * @return $this
     */
    public function setUsePmiForInstantMeetings($use_pmi_for_instant_meetings)
    {
        $this->container['use_pmi_for_instant_meetings'] = $use_pmi_for_instant_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_scheduling_new_meetings
     *
     * @return bool
     */
    public function getRequirePasswordForSchedulingNewMeetings()
    {
        return $this->container['require_password_for_scheduling_new_meetings'];
    }

    /**
     * Sets require_password_for_scheduling_new_meetings
     *
     * @param bool $require_password_for_scheduling_new_meetings Require a passcode when scheduling new meetings.This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts.
     *
     * @return $this
     */
    public function setRequirePasswordForSchedulingNewMeetings($require_password_for_scheduling_new_meetings)
    {
        $this->container['require_password_for_scheduling_new_meetings'] = $require_password_for_scheduling_new_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_scheduled_meetings
     *
     * @return bool
     */
    public function getRequirePasswordForScheduledMeetings()
    {
        return $this->container['require_password_for_scheduled_meetings'];
    }

    /**
     * Sets require_password_for_scheduled_meetings
     *
     * @param bool $require_password_for_scheduled_meetings Require a passcode for meetings which have already been scheduled
     *
     * @return $this
     */
    public function setRequirePasswordForScheduledMeetings($require_password_for_scheduled_meetings)
    {
        $this->container['require_password_for_scheduled_meetings'] = $require_password_for_scheduled_meetings;

        return $this;
    }

    /**
     * Gets default_password_for_scheduled_meetings
     *
     * @return string
     */
    public function getDefaultPasswordForScheduledMeetings()
    {
        return $this->container['default_password_for_scheduled_meetings'];
    }

    /**
     * Sets default_password_for_scheduled_meetings
     *
     * @param string $default_password_for_scheduled_meetings Passcode for already scheduled meetings
     *
     * @return $this
     */
    public function setDefaultPasswordForScheduledMeetings($default_password_for_scheduled_meetings)
    {
        $this->container['default_password_for_scheduled_meetings'] = $default_password_for_scheduled_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_instant_meetings
     *
     * @return bool
     */
    public function getRequirePasswordForInstantMeetings()
    {
        return $this->container['require_password_for_instant_meetings'];
    }

    /**
     * Sets require_password_for_instant_meetings
     *
     * @param bool $require_password_for_instant_meetings Require a passcode for instant meetings. If you use PMI for your instant meetings, this option will be disabled. This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts.
     *
     * @return $this
     */
    public function setRequirePasswordForInstantMeetings($require_password_for_instant_meetings)
    {
        $this->container['require_password_for_instant_meetings'] = $require_password_for_instant_meetings;

        return $this;
    }

    /**
     * Gets require_password_for_pmi_meetings
     *
     * @return string
     */
    public function getRequirePasswordForPmiMeetings()
    {
        return $this->container['require_password_for_pmi_meetings'];
    }

    /**
     * Sets require_password_for_pmi_meetings
     *
     * @param string $require_password_for_pmi_meetings Require a passcode for Personal Meeting ID (PMI). This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts.
     *
     * @return $this
     */
    public function setRequirePasswordForPmiMeetings($require_password_for_pmi_meetings)
    {
        $allowedValues = $this->getRequirePasswordForPmiMeetingsAllowableValues();
        if (!is_null($require_password_for_pmi_meetings) && !in_array($require_password_for_pmi_meetings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'require_password_for_pmi_meetings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['require_password_for_pmi_meetings'] = $require_password_for_pmi_meetings;

        return $this;
    }

    /**
     * Gets pmi_password
     *
     * @return string
     */
    public function getPmiPassword()
    {
        return $this->container['pmi_password'];
    }

    /**
     * Sets pmi_password
     *
     * @param string $pmi_password PMI passcode
     *
     * @return $this
     */
    public function setPmiPassword($pmi_password)
    {
        $this->container['pmi_password'] = $pmi_password;

        return $this;
    }

    /**
     * Gets embed_password_in_join_link
     *
     * @return bool
     */
    public function getEmbedPasswordInJoinLink()
    {
        return $this->container['embed_password_in_join_link'];
    }

    /**
     * Sets embed_password_in_join_link
     *
     * @param bool $embed_password_in_join_link If the value is set to `true`, the meeting passcode will be encrypted and included in the join meeting link to allow participants to join with just one click without having to enter the passcode.
     *
     * @return $this
     */
    public function setEmbedPasswordInJoinLink($embed_password_in_join_link)
    {
        $this->container['embed_password_in_join_link'] = $embed_password_in_join_link;

        return $this;
    }

    /**
     * Gets meeting_password_requirement
     *
     * @return \Swagger\Client\Model\UserSettingsMeetingSettingsMeetingPasswordRequirement
     */
    public function getMeetingPasswordRequirement()
    {
        return $this->container['meeting_password_requirement'];
    }

    /**
     * Sets meeting_password_requirement
     *
     * @param \Swagger\Client\Model\UserSettingsMeetingSettingsMeetingPasswordRequirement $meeting_password_requirement meeting_password_requirement
     *
     * @return $this
     */
    public function setMeetingPasswordRequirement($meeting_password_requirement)
    {
        $this->container['meeting_password_requirement'] = $meeting_password_requirement;

        return $this;
    }

    /**
     * Gets personal_meeting
     *
     * @return bool
     */
    public function getPersonalMeeting()
    {
        return $this->container['personal_meeting'];
    }

    /**
     * Sets personal_meeting
     *
     * @param bool $personal_meeting Personal Meeting Setting.<br><br> `true`: Indicates that the **\"Enable Personal Meeting ID\"** setting is turned on. Users can choose to use personal meeting ID for their meetings. <br><br> `false`: Indicates that the **\"Enable Personal Meeting ID\"** setting is [turned off](https://support.zoom.us/hc/en-us/articles/201362843-Personal-meeting-ID-PMI-and-personal-link#h_aa0335c8-3b06-41bc-bc1f-a8b84ef17f2a). If this setting is disabled, meetings that were scheduled with PMI will be invalid. Scheduled meetings will need to be manually updated. For Zoom Phone only:If a user has been assigned a desk phone, **\"Elevate to Zoom Meeting\"** on desk phone will be disabled.
     *
     * @return $this
     */
    public function setPersonalMeeting($personal_meeting)
    {
        $this->container['personal_meeting'] = $personal_meeting;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


