<?php
/**
 * UsersuserIdmeetingsSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Zoom\Api
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

namespace Zoom\Api\Model;

use \ArrayAccess;
use \Zoom\Api\ObjectSerializer;

/**
 * UsersuserIdmeetingsSettings Class Doc Comment
 *
 * @category Class
 * @description Meeting settings.
 * @package  Zoom\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersuserIdmeetingsSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'usersuserIdmeetings_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'host_video' => 'bool',
        'participant_video' => 'bool',
        'cn_meeting' => 'bool',
        'in_meeting' => 'bool',
        'join_before_host' => 'bool',
        'mute_upon_entry' => 'bool',
        'watermark' => 'bool',
        'use_pmi' => 'bool',
        'approval_type' => 'int',
        'registration_type' => 'int',
        'audio' => 'string',
        'auto_recording' => 'string',
        'alternative_hosts' => 'string',
        'close_registration' => 'bool',
        'waiting_room' => 'bool',
        'global_dial_in_countries' => 'string[]',
        'contact_name' => 'string',
        'contact_email' => 'string',
        'registrants_email_notification' => 'bool',
        'meeting_authentication' => 'bool',
        'authentication_option' => 'string',
        'authentication_domains' => 'string',
        'additional_data_center_regions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'host_video' => null,
        'participant_video' => null,
        'cn_meeting' => null,
        'in_meeting' => null,
        'join_before_host' => null,
        'mute_upon_entry' => null,
        'watermark' => null,
        'use_pmi' => null,
        'approval_type' => null,
        'registration_type' => null,
        'audio' => null,
        'auto_recording' => null,
        'alternative_hosts' => null,
        'close_registration' => null,
        'waiting_room' => null,
        'global_dial_in_countries' => null,
        'contact_name' => null,
        'contact_email' => null,
        'registrants_email_notification' => null,
        'meeting_authentication' => null,
        'authentication_option' => null,
        'authentication_domains' => null,
        'additional_data_center_regions' => null
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
        'participant_video' => 'participant_video',
        'cn_meeting' => 'cn_meeting',
        'in_meeting' => 'in_meeting',
        'join_before_host' => 'join_before_host',
        'mute_upon_entry' => 'mute_upon_entry',
        'watermark' => 'watermark',
        'use_pmi' => 'use_pmi',
        'approval_type' => 'approval_type',
        'registration_type' => 'registration_type',
        'audio' => 'audio',
        'auto_recording' => 'auto_recording',
        'alternative_hosts' => 'alternative_hosts',
        'close_registration' => 'close_registration',
        'waiting_room' => 'waiting_room',
        'global_dial_in_countries' => 'global_dial_in_countries',
        'contact_name' => 'contact_name',
        'contact_email' => 'contact_email',
        'registrants_email_notification' => 'registrants_email_notification',
        'meeting_authentication' => 'meeting_authentication',
        'authentication_option' => 'authentication_option',
        'authentication_domains' => 'authentication_domains',
        'additional_data_center_regions' => 'additional_data_center_regions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host_video' => 'setHostVideo',
        'participant_video' => 'setParticipantVideo',
        'cn_meeting' => 'setCnMeeting',
        'in_meeting' => 'setInMeeting',
        'join_before_host' => 'setJoinBeforeHost',
        'mute_upon_entry' => 'setMuteUponEntry',
        'watermark' => 'setWatermark',
        'use_pmi' => 'setUsePmi',
        'approval_type' => 'setApprovalType',
        'registration_type' => 'setRegistrationType',
        'audio' => 'setAudio',
        'auto_recording' => 'setAutoRecording',
        'alternative_hosts' => 'setAlternativeHosts',
        'close_registration' => 'setCloseRegistration',
        'waiting_room' => 'setWaitingRoom',
        'global_dial_in_countries' => 'setGlobalDialInCountries',
        'contact_name' => 'setContactName',
        'contact_email' => 'setContactEmail',
        'registrants_email_notification' => 'setRegistrantsEmailNotification',
        'meeting_authentication' => 'setMeetingAuthentication',
        'authentication_option' => 'setAuthenticationOption',
        'authentication_domains' => 'setAuthenticationDomains',
        'additional_data_center_regions' => 'setAdditionalDataCenterRegions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host_video' => 'getHostVideo',
        'participant_video' => 'getParticipantVideo',
        'cn_meeting' => 'getCnMeeting',
        'in_meeting' => 'getInMeeting',
        'join_before_host' => 'getJoinBeforeHost',
        'mute_upon_entry' => 'getMuteUponEntry',
        'watermark' => 'getWatermark',
        'use_pmi' => 'getUsePmi',
        'approval_type' => 'getApprovalType',
        'registration_type' => 'getRegistrationType',
        'audio' => 'getAudio',
        'auto_recording' => 'getAutoRecording',
        'alternative_hosts' => 'getAlternativeHosts',
        'close_registration' => 'getCloseRegistration',
        'waiting_room' => 'getWaitingRoom',
        'global_dial_in_countries' => 'getGlobalDialInCountries',
        'contact_name' => 'getContactName',
        'contact_email' => 'getContactEmail',
        'registrants_email_notification' => 'getRegistrantsEmailNotification',
        'meeting_authentication' => 'getMeetingAuthentication',
        'authentication_option' => 'getAuthenticationOption',
        'authentication_domains' => 'getAuthenticationDomains',
        'additional_data_center_regions' => 'getAdditionalDataCenterRegions'
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

    const AUDIO_BOTH = 'both';
    const AUDIO_TELEPHONY = 'telephony';
    const AUDIO_VOIP = 'voip';
    const AUTO_RECORDING_LOCAL = 'local';
    const AUTO_RECORDING_CLOUD = 'cloud';
    const AUTO_RECORDING_NONE = 'none';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAudioAllowableValues()
    {
        return [
            self::AUDIO_BOTH,
            self::AUDIO_TELEPHONY,
            self::AUDIO_VOIP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutoRecordingAllowableValues()
    {
        return [
            self::AUTO_RECORDING_LOCAL,
            self::AUTO_RECORDING_CLOUD,
            self::AUTO_RECORDING_NONE,
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
        $this->container['participant_video'] = isset($data['participant_video']) ? $data['participant_video'] : null;
        $this->container['cn_meeting'] = isset($data['cn_meeting']) ? $data['cn_meeting'] : false;
        $this->container['in_meeting'] = isset($data['in_meeting']) ? $data['in_meeting'] : false;
        $this->container['join_before_host'] = isset($data['join_before_host']) ? $data['join_before_host'] : false;
        $this->container['mute_upon_entry'] = isset($data['mute_upon_entry']) ? $data['mute_upon_entry'] : false;
        $this->container['watermark'] = isset($data['watermark']) ? $data['watermark'] : false;
        $this->container['use_pmi'] = isset($data['use_pmi']) ? $data['use_pmi'] : false;
        $this->container['approval_type'] = isset($data['approval_type']) ? $data['approval_type'] : null;
        $this->container['registration_type'] = isset($data['registration_type']) ? $data['registration_type'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : 'both';
        $this->container['auto_recording'] = isset($data['auto_recording']) ? $data['auto_recording'] : 'none';
        $this->container['alternative_hosts'] = isset($data['alternative_hosts']) ? $data['alternative_hosts'] : null;
        $this->container['close_registration'] = isset($data['close_registration']) ? $data['close_registration'] : false;
        $this->container['waiting_room'] = isset($data['waiting_room']) ? $data['waiting_room'] : null;
        $this->container['global_dial_in_countries'] = isset($data['global_dial_in_countries']) ? $data['global_dial_in_countries'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['registrants_email_notification'] = isset($data['registrants_email_notification']) ? $data['registrants_email_notification'] : null;
        $this->container['meeting_authentication'] = isset($data['meeting_authentication']) ? $data['meeting_authentication'] : null;
        $this->container['authentication_option'] = isset($data['authentication_option']) ? $data['authentication_option'] : null;
        $this->container['authentication_domains'] = isset($data['authentication_domains']) ? $data['authentication_domains'] : null;
        $this->container['additional_data_center_regions'] = isset($data['additional_data_center_regions']) ? $data['additional_data_center_regions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAudioAllowableValues();
        if (!is_null($this->container['audio']) && !in_array($this->container['audio'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'audio', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAutoRecordingAllowableValues();
        if (!is_null($this->container['auto_recording']) && !in_array($this->container['auto_recording'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auto_recording', must be one of '%s'",
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
     * @param bool $host_video Start video when the host joins the meeting.
     *
     * @return $this
     */
    public function setHostVideo($host_video)
    {
        $this->container['host_video'] = $host_video;

        return $this;
    }

    /**
     * Gets participant_video
     *
     * @return bool
     */
    public function getParticipantVideo()
    {
        return $this->container['participant_video'];
    }

    /**
     * Sets participant_video
     *
     * @param bool $participant_video Start video when participants join the meeting.
     *
     * @return $this
     */
    public function setParticipantVideo($participant_video)
    {
        $this->container['participant_video'] = $participant_video;

        return $this;
    }

    /**
     * Gets cn_meeting
     *
     * @return bool
     */
    public function getCnMeeting()
    {
        return $this->container['cn_meeting'];
    }

    /**
     * Sets cn_meeting
     *
     * @param bool $cn_meeting Host meeting in China.
     *
     * @return $this
     */
    public function setCnMeeting($cn_meeting)
    {
        $this->container['cn_meeting'] = $cn_meeting;

        return $this;
    }

    /**
     * Gets in_meeting
     *
     * @return bool
     */
    public function getInMeeting()
    {
        return $this->container['in_meeting'];
    }

    /**
     * Sets in_meeting
     *
     * @param bool $in_meeting Host meeting in India.
     *
     * @return $this
     */
    public function setInMeeting($in_meeting)
    {
        $this->container['in_meeting'] = $in_meeting;

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
     * @param bool $join_before_host Allow participants to join the meeting before the host starts the meeting. This field can only used for scheduled or recurring meetings.  **Note:** If waiting room is enabled, the **join before host** setting will be disabled.
     *
     * @return $this
     */
    public function setJoinBeforeHost($join_before_host)
    {
        $this->container['join_before_host'] = $join_before_host;

        return $this;
    }

    /**
     * Gets mute_upon_entry
     *
     * @return bool
     */
    public function getMuteUponEntry()
    {
        return $this->container['mute_upon_entry'];
    }

    /**
     * Sets mute_upon_entry
     *
     * @param bool $mute_upon_entry Mute participants upon entry.
     *
     * @return $this
     */
    public function setMuteUponEntry($mute_upon_entry)
    {
        $this->container['mute_upon_entry'] = $mute_upon_entry;

        return $this;
    }

    /**
     * Gets watermark
     *
     * @return bool
     */
    public function getWatermark()
    {
        return $this->container['watermark'];
    }

    /**
     * Sets watermark
     *
     * @param bool $watermark Add watermark when viewing a shared screen.
     *
     * @return $this
     */
    public function setWatermark($watermark)
    {
        $this->container['watermark'] = $watermark;

        return $this;
    }

    /**
     * Gets use_pmi
     *
     * @return bool
     */
    public function getUsePmi()
    {
        return $this->container['use_pmi'];
    }

    /**
     * Sets use_pmi
     *
     * @param bool $use_pmi Use Personal Meeting ID instead of an automatically generated meeting ID. It can only be used for scheduled meetings, instant meetings and recurring meetings with no fixed time.
     *
     * @return $this
     */
    public function setUsePmi($use_pmi)
    {
        $this->container['use_pmi'] = $use_pmi;

        return $this;
    }

    /**
     * Gets approval_type
     *
     * @return int
     */
    public function getApprovalType()
    {
        return $this->container['approval_type'];
    }

    /**
     * Sets approval_type
     *
     * @param int $approval_type `0` - Automatically approve.<br>`1` - Manually approve.<br>`2` - No registration required.
     *
     * @return $this
     */
    public function setApprovalType($approval_type)
    {
        $this->container['approval_type'] = $approval_type;

        return $this;
    }

    /**
     * Gets registration_type
     *
     * @return int
     */
    public function getRegistrationType()
    {
        return $this->container['registration_type'];
    }

    /**
     * Sets registration_type
     *
     * @param int $registration_type Registration type. Used for recurring meeting with fixed time only. <br>`1` Attendees register once and can attend any of the occurrences.<br>`2` Attendees need to register for each occurrence to attend.<br>`3` Attendees register once and can choose one or more occurrences to attend.
     *
     * @return $this
     */
    public function setRegistrationType($registration_type)
    {
        $this->container['registration_type'] = $registration_type;

        return $this;
    }

    /**
     * Gets audio
     *
     * @return string
     */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
     * Sets audio
     *
     * @param string $audio Determine how participants can join the audio portion of the meeting.<br>`both` - Both Telephony and VoIP.<br>`telephony` - Telephony only.<br>`voip` - VoIP only.
     *
     * @return $this
     */
    public function setAudio($audio)
    {
        $allowedValues = $this->getAudioAllowableValues();
        if (!is_null($audio) && !in_array($audio, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'audio', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['audio'] = $audio;

        return $this;
    }

    /**
     * Gets auto_recording
     *
     * @return string
     */
    public function getAutoRecording()
    {
        return $this->container['auto_recording'];
    }

    /**
     * Sets auto_recording
     *
     * @param string $auto_recording Automatic recording:<br>`local` - Record on local.<br>`cloud` -  Record on cloud.<br>`none` - Disabled.
     *
     * @return $this
     */
    public function setAutoRecording($auto_recording)
    {
        $allowedValues = $this->getAutoRecordingAllowableValues();
        if (!is_null($auto_recording) && !in_array($auto_recording, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auto_recording', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auto_recording'] = $auto_recording;

        return $this;
    }

    /**
     * Gets alternative_hosts
     *
     * @return string
     */
    public function getAlternativeHosts()
    {
        return $this->container['alternative_hosts'];
    }

    /**
     * Sets alternative_hosts
     *
     * @param string $alternative_hosts Alternative host's emails or IDs: multiple values separated by a comma.
     *
     * @return $this
     */
    public function setAlternativeHosts($alternative_hosts)
    {
        $this->container['alternative_hosts'] = $alternative_hosts;

        return $this;
    }

    /**
     * Gets close_registration
     *
     * @return bool
     */
    public function getCloseRegistration()
    {
        return $this->container['close_registration'];
    }

    /**
     * Sets close_registration
     *
     * @param bool $close_registration Close registration after event date
     *
     * @return $this
     */
    public function setCloseRegistration($close_registration)
    {
        $this->container['close_registration'] = $close_registration;

        return $this;
    }

    /**
     * Gets waiting_room
     *
     * @return bool
     */
    public function getWaitingRoom()
    {
        return $this->container['waiting_room'];
    }

    /**
     * Sets waiting_room
     *
     * @param bool $waiting_room Enable waiting room. Note that if the value of this field is set to `true`, it will override and disable the `join_before_host` setting.
     *
     * @return $this
     */
    public function setWaitingRoom($waiting_room)
    {
        $this->container['waiting_room'] = $waiting_room;

        return $this;
    }

    /**
     * Gets global_dial_in_countries
     *
     * @return string[]
     */
    public function getGlobalDialInCountries()
    {
        return $this->container['global_dial_in_countries'];
    }

    /**
     * Sets global_dial_in_countries
     *
     * @param string[] $global_dial_in_countries List of global dial-in countries
     *
     * @return $this
     */
    public function setGlobalDialInCountries($global_dial_in_countries)
    {
        $this->container['global_dial_in_countries'] = $global_dial_in_countries;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name Contact name for registration
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string $contact_email Contact email for registration
     *
     * @return $this
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets registrants_email_notification
     *
     * @return bool
     */
    public function getRegistrantsEmailNotification()
    {
        return $this->container['registrants_email_notification'];
    }

    /**
     * Sets registrants_email_notification
     *
     * @param bool $registrants_email_notification Send email notifications to registrants about approval, cancellation, denial of the registration. The value of this field must be set to true in order to use the `registrants_confirmation_email` field.
     *
     * @return $this
     */
    public function setRegistrantsEmailNotification($registrants_email_notification)
    {
        $this->container['registrants_email_notification'] = $registrants_email_notification;

        return $this;
    }

    /**
     * Gets meeting_authentication
     *
     * @return bool
     */
    public function getMeetingAuthentication()
    {
        return $this->container['meeting_authentication'];
    }

    /**
     * Sets meeting_authentication
     *
     * @param bool $meeting_authentication Only [authenticated](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) users can join meeting if the value of this field is set to `true`.
     *
     * @return $this
     */
    public function setMeetingAuthentication($meeting_authentication)
    {
        $this->container['meeting_authentication'] = $meeting_authentication;

        return $this;
    }

    /**
     * Gets authentication_option
     *
     * @return string
     */
    public function getAuthenticationOption()
    {
        return $this->container['authentication_option'];
    }

    /**
     * Sets authentication_option
     *
     * @param string $authentication_option Specify the authentication type for users to join a meeting with`meeting_authentication` setting set to `true`. The value of this field can be retrieved from the `id` field within `authentication_options` array in the response of [Get User Settings API](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usersettings).
     *
     * @return $this
     */
    public function setAuthenticationOption($authentication_option)
    {
        $this->container['authentication_option'] = $authentication_option;

        return $this;
    }

    /**
     * Gets authentication_domains
     *
     * @return string
     */
    public function getAuthenticationDomains()
    {
        return $this->container['authentication_domains'];
    }

    /**
     * Sets authentication_domains
     *
     * @param string $authentication_domains Meeting authentication domains. This option, allows you to specify the rule so that Zoom users, whose email address contains a certain domain, can join the meeting. You can either provide multiple domains, using a comma in between and/or use a wildcard for listing domains.
     *
     * @return $this
     */
    public function setAuthenticationDomains($authentication_domains)
    {
        $this->container['authentication_domains'] = $authentication_domains;

        return $this;
    }

    /**
     * Gets additional_data_center_regions
     *
     * @return string[]
     */
    public function getAdditionalDataCenterRegions()
    {
        return $this->container['additional_data_center_regions'];
    }

    /**
     * Sets additional_data_center_regions
     *
     * @param string[] $additional_data_center_regions Enable additional [data center regions](https://support.zoom.us/hc/en-us/articles/360042411451-Selecting-data-center-regions-for-hosted-meetings-and-webinars) for this meeting. Provide the value in the form of array of country code(s) for the countries which are available as data center regions in the [account settings](https://zoom.us/account/setting) but have been opt out of in the user settings. For instance, let's say that in your account settings, the data center regions that have been selected are Europe, Honkong, Australia, India, Latin America, Japan, China, United States,and Canada. The complete list of available data center regions for your account is: [\"EU\", \"HK\", \"AU\", \"IN\", \"LA\", \"TY\", \"CN\", \"US\", \"CA\"]. In [user settings](https://zoom.us/profile/setting), you have opted out of India(IN) and Japan(TY) for meeting and webinar traffic routing. If you would like, you can still include India and Japan as additional data centers for this meeting using this field. To include India and Japan as additional data center regions, you would provide [\"IN\", \"TY\"] as the value.
     *
     * @return $this
     */
    public function setAdditionalDataCenterRegions($additional_data_center_regions)
    {
        $this->container['additional_data_center_regions'] = $additional_data_center_regions;

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


