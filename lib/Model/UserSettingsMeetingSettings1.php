<?php
/**
 * UserSettingsMeetingSettings1
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
 * UserSettingsMeetingSettings1 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Zoom\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserSettingsMeetingSettings1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User settings Meeting settings_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'e2e_encryption' => 'bool',
        'chat' => 'bool',
        'private_chat' => 'bool',
        'auto_saving_chat' => 'bool',
        'entry_exit_chime' => 'string',
        'record_play_voice' => 'bool',
        'feedback' => 'bool',
        'co_host' => 'bool',
        'polling' => 'bool',
        'attendee_on_hold' => 'bool',
        'annotation' => 'bool',
        'remote_control' => 'bool',
        'non_verbal_feedback' => 'bool',
        'breakout_room' => 'bool',
        'remote_support' => 'bool',
        'closed_caption' => 'bool',
        'group_hd' => 'bool',
        'virtual_background' => 'bool',
        'far_end_camera_control' => 'bool',
        'share_dual_camera' => 'bool',
        'waiting_room' => 'bool',
        'allow_live_streaming' => 'bool',
        'workplace_by_facebook' => 'bool',
        'custom_live_streaming_service' => 'bool',
        'custom_service_instructions' => 'string',
        'show_meeting_control_toolbar' => 'bool',
        'custom_data_center_regions' => 'bool',
        'data_center_regions' => 'string[]',
        'screen_sharing' => 'bool',
        'who_can_share_screen' => 'string',
        'who_can_share_screen_when_someone_is_sharing' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'e2e_encryption' => null,
        'chat' => null,
        'private_chat' => null,
        'auto_saving_chat' => null,
        'entry_exit_chime' => null,
        'record_play_voice' => null,
        'feedback' => null,
        'co_host' => null,
        'polling' => null,
        'attendee_on_hold' => null,
        'annotation' => null,
        'remote_control' => null,
        'non_verbal_feedback' => null,
        'breakout_room' => null,
        'remote_support' => null,
        'closed_caption' => null,
        'group_hd' => null,
        'virtual_background' => null,
        'far_end_camera_control' => null,
        'share_dual_camera' => null,
        'waiting_room' => null,
        'allow_live_streaming' => null,
        'workplace_by_facebook' => null,
        'custom_live_streaming_service' => null,
        'custom_service_instructions' => null,
        'show_meeting_control_toolbar' => null,
        'custom_data_center_regions' => null,
        'data_center_regions' => null,
        'screen_sharing' => null,
        'who_can_share_screen' => null,
        'who_can_share_screen_when_someone_is_sharing' => null
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
        'e2e_encryption' => 'e2e_encryption',
        'chat' => 'chat',
        'private_chat' => 'private_chat',
        'auto_saving_chat' => 'auto_saving_chat',
        'entry_exit_chime' => 'entry_exit_chime',
        'record_play_voice' => 'record_play_voice',
        'feedback' => 'feedback',
        'co_host' => 'co_host',
        'polling' => 'polling',
        'attendee_on_hold' => 'attendee_on_hold',
        'annotation' => 'annotation',
        'remote_control' => 'remote_control',
        'non_verbal_feedback' => 'non_verbal_feedback',
        'breakout_room' => 'breakout_room',
        'remote_support' => 'remote_support',
        'closed_caption' => 'closed_caption',
        'group_hd' => 'group_hd',
        'virtual_background' => 'virtual_background',
        'far_end_camera_control' => 'far_end_camera_control',
        'share_dual_camera' => 'share_dual_camera',
        'waiting_room' => 'waiting_room',
        'allow_live_streaming' => 'allow_live_streaming',
        'workplace_by_facebook' => 'workplace_by_facebook',
        'custom_live_streaming_service' => 'custom_live_streaming_service',
        'custom_service_instructions' => 'custom_service_instructions',
        'show_meeting_control_toolbar' => 'show_meeting_control_toolbar',
        'custom_data_center_regions' => 'custom_data_center_regions',
        'data_center_regions' => 'data_center_regions',
        'screen_sharing' => 'screen_sharing',
        'who_can_share_screen' => 'who_can_share_screen',
        'who_can_share_screen_when_someone_is_sharing' => 'who_can_share_screen_when_someone_is_sharing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'e2e_encryption' => 'setE2eEncryption',
        'chat' => 'setChat',
        'private_chat' => 'setPrivateChat',
        'auto_saving_chat' => 'setAutoSavingChat',
        'entry_exit_chime' => 'setEntryExitChime',
        'record_play_voice' => 'setRecordPlayVoice',
        'feedback' => 'setFeedback',
        'co_host' => 'setCoHost',
        'polling' => 'setPolling',
        'attendee_on_hold' => 'setAttendeeOnHold',
        'annotation' => 'setAnnotation',
        'remote_control' => 'setRemoteControl',
        'non_verbal_feedback' => 'setNonVerbalFeedback',
        'breakout_room' => 'setBreakoutRoom',
        'remote_support' => 'setRemoteSupport',
        'closed_caption' => 'setClosedCaption',
        'group_hd' => 'setGroupHd',
        'virtual_background' => 'setVirtualBackground',
        'far_end_camera_control' => 'setFarEndCameraControl',
        'share_dual_camera' => 'setShareDualCamera',
        'waiting_room' => 'setWaitingRoom',
        'allow_live_streaming' => 'setAllowLiveStreaming',
        'workplace_by_facebook' => 'setWorkplaceByFacebook',
        'custom_live_streaming_service' => 'setCustomLiveStreamingService',
        'custom_service_instructions' => 'setCustomServiceInstructions',
        'show_meeting_control_toolbar' => 'setShowMeetingControlToolbar',
        'custom_data_center_regions' => 'setCustomDataCenterRegions',
        'data_center_regions' => 'setDataCenterRegions',
        'screen_sharing' => 'setScreenSharing',
        'who_can_share_screen' => 'setWhoCanShareScreen',
        'who_can_share_screen_when_someone_is_sharing' => 'setWhoCanShareScreenWhenSomeoneIsSharing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'e2e_encryption' => 'getE2eEncryption',
        'chat' => 'getChat',
        'private_chat' => 'getPrivateChat',
        'auto_saving_chat' => 'getAutoSavingChat',
        'entry_exit_chime' => 'getEntryExitChime',
        'record_play_voice' => 'getRecordPlayVoice',
        'feedback' => 'getFeedback',
        'co_host' => 'getCoHost',
        'polling' => 'getPolling',
        'attendee_on_hold' => 'getAttendeeOnHold',
        'annotation' => 'getAnnotation',
        'remote_control' => 'getRemoteControl',
        'non_verbal_feedback' => 'getNonVerbalFeedback',
        'breakout_room' => 'getBreakoutRoom',
        'remote_support' => 'getRemoteSupport',
        'closed_caption' => 'getClosedCaption',
        'group_hd' => 'getGroupHd',
        'virtual_background' => 'getVirtualBackground',
        'far_end_camera_control' => 'getFarEndCameraControl',
        'share_dual_camera' => 'getShareDualCamera',
        'waiting_room' => 'getWaitingRoom',
        'allow_live_streaming' => 'getAllowLiveStreaming',
        'workplace_by_facebook' => 'getWorkplaceByFacebook',
        'custom_live_streaming_service' => 'getCustomLiveStreamingService',
        'custom_service_instructions' => 'getCustomServiceInstructions',
        'show_meeting_control_toolbar' => 'getShowMeetingControlToolbar',
        'custom_data_center_regions' => 'getCustomDataCenterRegions',
        'data_center_regions' => 'getDataCenterRegions',
        'screen_sharing' => 'getScreenSharing',
        'who_can_share_screen' => 'getWhoCanShareScreen',
        'who_can_share_screen_when_someone_is_sharing' => 'getWhoCanShareScreenWhenSomeoneIsSharing'
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

    const ENTRY_EXIT_CHIME_HOST = 'host';
    const ENTRY_EXIT_CHIME_ALL = 'all';
    const ENTRY_EXIT_CHIME_NONE = 'none';
    const WHO_CAN_SHARE_SCREEN_HOST = 'host';
    const WHO_CAN_SHARE_SCREEN_ALL = 'all';
    const WHO_CAN_SHARE_SCREEN_WHEN_SOMEONE_IS_SHARING_HOST = 'host';
    const WHO_CAN_SHARE_SCREEN_WHEN_SOMEONE_IS_SHARING_ALL = 'all';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntryExitChimeAllowableValues()
    {
        return [
            self::ENTRY_EXIT_CHIME_HOST,
            self::ENTRY_EXIT_CHIME_ALL,
            self::ENTRY_EXIT_CHIME_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWhoCanShareScreenAllowableValues()
    {
        return [
            self::WHO_CAN_SHARE_SCREEN_HOST,
            self::WHO_CAN_SHARE_SCREEN_ALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWhoCanShareScreenWhenSomeoneIsSharingAllowableValues()
    {
        return [
            self::WHO_CAN_SHARE_SCREEN_WHEN_SOMEONE_IS_SHARING_HOST,
            self::WHO_CAN_SHARE_SCREEN_WHEN_SOMEONE_IS_SHARING_ALL,
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
        $this->container['e2e_encryption'] = isset($data['e2e_encryption']) ? $data['e2e_encryption'] : null;
        $this->container['chat'] = isset($data['chat']) ? $data['chat'] : false;
        $this->container['private_chat'] = isset($data['private_chat']) ? $data['private_chat'] : false;
        $this->container['auto_saving_chat'] = isset($data['auto_saving_chat']) ? $data['auto_saving_chat'] : false;
        $this->container['entry_exit_chime'] = isset($data['entry_exit_chime']) ? $data['entry_exit_chime'] : 'all';
        $this->container['record_play_voice'] = isset($data['record_play_voice']) ? $data['record_play_voice'] : null;
        $this->container['feedback'] = isset($data['feedback']) ? $data['feedback'] : false;
        $this->container['co_host'] = isset($data['co_host']) ? $data['co_host'] : false;
        $this->container['polling'] = isset($data['polling']) ? $data['polling'] : false;
        $this->container['attendee_on_hold'] = isset($data['attendee_on_hold']) ? $data['attendee_on_hold'] : false;
        $this->container['annotation'] = isset($data['annotation']) ? $data['annotation'] : false;
        $this->container['remote_control'] = isset($data['remote_control']) ? $data['remote_control'] : false;
        $this->container['non_verbal_feedback'] = isset($data['non_verbal_feedback']) ? $data['non_verbal_feedback'] : false;
        $this->container['breakout_room'] = isset($data['breakout_room']) ? $data['breakout_room'] : false;
        $this->container['remote_support'] = isset($data['remote_support']) ? $data['remote_support'] : false;
        $this->container['closed_caption'] = isset($data['closed_caption']) ? $data['closed_caption'] : false;
        $this->container['group_hd'] = isset($data['group_hd']) ? $data['group_hd'] : false;
        $this->container['virtual_background'] = isset($data['virtual_background']) ? $data['virtual_background'] : false;
        $this->container['far_end_camera_control'] = isset($data['far_end_camera_control']) ? $data['far_end_camera_control'] : false;
        $this->container['share_dual_camera'] = isset($data['share_dual_camera']) ? $data['share_dual_camera'] : false;
        $this->container['waiting_room'] = isset($data['waiting_room']) ? $data['waiting_room'] : false;
        $this->container['allow_live_streaming'] = isset($data['allow_live_streaming']) ? $data['allow_live_streaming'] : null;
        $this->container['workplace_by_facebook'] = isset($data['workplace_by_facebook']) ? $data['workplace_by_facebook'] : null;
        $this->container['custom_live_streaming_service'] = isset($data['custom_live_streaming_service']) ? $data['custom_live_streaming_service'] : null;
        $this->container['custom_service_instructions'] = isset($data['custom_service_instructions']) ? $data['custom_service_instructions'] : null;
        $this->container['show_meeting_control_toolbar'] = isset($data['show_meeting_control_toolbar']) ? $data['show_meeting_control_toolbar'] : null;
        $this->container['custom_data_center_regions'] = isset($data['custom_data_center_regions']) ? $data['custom_data_center_regions'] : null;
        $this->container['data_center_regions'] = isset($data['data_center_regions']) ? $data['data_center_regions'] : null;
        $this->container['screen_sharing'] = isset($data['screen_sharing']) ? $data['screen_sharing'] : null;
        $this->container['who_can_share_screen'] = isset($data['who_can_share_screen']) ? $data['who_can_share_screen'] : null;
        $this->container['who_can_share_screen_when_someone_is_sharing'] = isset($data['who_can_share_screen_when_someone_is_sharing']) ? $data['who_can_share_screen_when_someone_is_sharing'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEntryExitChimeAllowableValues();
        if (!is_null($this->container['entry_exit_chime']) && !in_array($this->container['entry_exit_chime'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'entry_exit_chime', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWhoCanShareScreenAllowableValues();
        if (!is_null($this->container['who_can_share_screen']) && !in_array($this->container['who_can_share_screen'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'who_can_share_screen', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWhoCanShareScreenWhenSomeoneIsSharingAllowableValues();
        if (!is_null($this->container['who_can_share_screen_when_someone_is_sharing']) && !in_array($this->container['who_can_share_screen_when_someone_is_sharing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'who_can_share_screen_when_someone_is_sharing', must be one of '%s'",
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
     * Gets e2e_encryption
     *
     * @return bool
     */
    public function getE2eEncryption()
    {
        return $this->container['e2e_encryption'];
    }

    /**
     * Sets e2e_encryption
     *
     * @param bool $e2e_encryption Zoom requires encryption for all data between the Zoom cloud, Zoom client, and Zoom Room. Require encryption for 3rd party endpoints (H323/SIP).
     *
     * @return $this
     */
    public function setE2eEncryption($e2e_encryption)
    {
        $this->container['e2e_encryption'] = $e2e_encryption;

        return $this;
    }

    /**
     * Gets chat
     *
     * @return bool
     */
    public function getChat()
    {
        return $this->container['chat'];
    }

    /**
     * Sets chat
     *
     * @param bool $chat Enable chat during meeting for all participants.
     *
     * @return $this
     */
    public function setChat($chat)
    {
        $this->container['chat'] = $chat;

        return $this;
    }

    /**
     * Gets private_chat
     *
     * @return bool
     */
    public function getPrivateChat()
    {
        return $this->container['private_chat'];
    }

    /**
     * Sets private_chat
     *
     * @param bool $private_chat Enable 1:1 private chat between participants during meetings.
     *
     * @return $this
     */
    public function setPrivateChat($private_chat)
    {
        $this->container['private_chat'] = $private_chat;

        return $this;
    }

    /**
     * Gets auto_saving_chat
     *
     * @return bool
     */
    public function getAutoSavingChat()
    {
        return $this->container['auto_saving_chat'];
    }

    /**
     * Sets auto_saving_chat
     *
     * @param bool $auto_saving_chat Auto save all in-meeting chats.
     *
     * @return $this
     */
    public function setAutoSavingChat($auto_saving_chat)
    {
        $this->container['auto_saving_chat'] = $auto_saving_chat;

        return $this;
    }

    /**
     * Gets entry_exit_chime
     *
     * @return string
     */
    public function getEntryExitChime()
    {
        return $this->container['entry_exit_chime'];
    }

    /**
     * Sets entry_exit_chime
     *
     * @param string $entry_exit_chime Play sound when participants join or leave:<br>`host` - When host joins or leaves.<br>`all` - When any participant joins or leaves.<br>`none` - No join or leave sound.
     *
     * @return $this
     */
    public function setEntryExitChime($entry_exit_chime)
    {
        $allowedValues = $this->getEntryExitChimeAllowableValues();
        if (!is_null($entry_exit_chime) && !in_array($entry_exit_chime, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'entry_exit_chime', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entry_exit_chime'] = $entry_exit_chime;

        return $this;
    }

    /**
     * Gets record_play_voice
     *
     * @return bool
     */
    public function getRecordPlayVoice()
    {
        return $this->container['record_play_voice'];
    }

    /**
     * Sets record_play_voice
     *
     * @param bool $record_play_voice Record and play their own voice.
     *
     * @return $this
     */
    public function setRecordPlayVoice($record_play_voice)
    {
        $this->container['record_play_voice'] = $record_play_voice;

        return $this;
    }

    /**
     * Gets feedback
     *
     * @return bool
     */
    public function getFeedback()
    {
        return $this->container['feedback'];
    }

    /**
     * Sets feedback
     *
     * @param bool $feedback Enable option to send feedback to Zoom at the end of the meeting.
     *
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->container['feedback'] = $feedback;

        return $this;
    }

    /**
     * Gets co_host
     *
     * @return bool
     */
    public function getCoHost()
    {
        return $this->container['co_host'];
    }

    /**
     * Sets co_host
     *
     * @param bool $co_host Allow the host to add co-hosts.
     *
     * @return $this
     */
    public function setCoHost($co_host)
    {
        $this->container['co_host'] = $co_host;

        return $this;
    }

    /**
     * Gets polling
     *
     * @return bool
     */
    public function getPolling()
    {
        return $this->container['polling'];
    }

    /**
     * Sets polling
     *
     * @param bool $polling Add polls to the meeting controls.
     *
     * @return $this
     */
    public function setPolling($polling)
    {
        $this->container['polling'] = $polling;

        return $this;
    }

    /**
     * Gets attendee_on_hold
     *
     * @return bool
     */
    public function getAttendeeOnHold()
    {
        return $this->container['attendee_on_hold'];
    }

    /**
     * Sets attendee_on_hold
     *
     * @param bool $attendee_on_hold Allow host to put attendee on hold.
     *
     * @return $this
     */
    public function setAttendeeOnHold($attendee_on_hold)
    {
        $this->container['attendee_on_hold'] = $attendee_on_hold;

        return $this;
    }

    /**
     * Gets annotation
     *
     * @return bool
     */
    public function getAnnotation()
    {
        return $this->container['annotation'];
    }

    /**
     * Sets annotation
     *
     * @param bool $annotation Allow participants to use annotation tools.
     *
     * @return $this
     */
    public function setAnnotation($annotation)
    {
        $this->container['annotation'] = $annotation;

        return $this;
    }

    /**
     * Gets remote_control
     *
     * @return bool
     */
    public function getRemoteControl()
    {
        return $this->container['remote_control'];
    }

    /**
     * Sets remote_control
     *
     * @param bool $remote_control Enable remote control during screensharing.
     *
     * @return $this
     */
    public function setRemoteControl($remote_control)
    {
        $this->container['remote_control'] = $remote_control;

        return $this;
    }

    /**
     * Gets non_verbal_feedback
     *
     * @return bool
     */
    public function getNonVerbalFeedback()
    {
        return $this->container['non_verbal_feedback'];
    }

    /**
     * Sets non_verbal_feedback
     *
     * @param bool $non_verbal_feedback Enable non-verbal feedback through screens.
     *
     * @return $this
     */
    public function setNonVerbalFeedback($non_verbal_feedback)
    {
        $this->container['non_verbal_feedback'] = $non_verbal_feedback;

        return $this;
    }

    /**
     * Gets breakout_room
     *
     * @return bool
     */
    public function getBreakoutRoom()
    {
        return $this->container['breakout_room'];
    }

    /**
     * Sets breakout_room
     *
     * @param bool $breakout_room Allow host to split meeting participants into separate breakout rooms.
     *
     * @return $this
     */
    public function setBreakoutRoom($breakout_room)
    {
        $this->container['breakout_room'] = $breakout_room;

        return $this;
    }

    /**
     * Gets remote_support
     *
     * @return bool
     */
    public function getRemoteSupport()
    {
        return $this->container['remote_support'];
    }

    /**
     * Sets remote_support
     *
     * @param bool $remote_support Allow host to provide 1:1 remote support to a participant.
     *
     * @return $this
     */
    public function setRemoteSupport($remote_support)
    {
        $this->container['remote_support'] = $remote_support;

        return $this;
    }

    /**
     * Gets closed_caption
     *
     * @return bool
     */
    public function getClosedCaption()
    {
        return $this->container['closed_caption'];
    }

    /**
     * Sets closed_caption
     *
     * @param bool $closed_caption Enable closed captions.
     *
     * @return $this
     */
    public function setClosedCaption($closed_caption)
    {
        $this->container['closed_caption'] = $closed_caption;

        return $this;
    }

    /**
     * Gets group_hd
     *
     * @return bool
     */
    public function getGroupHd()
    {
        return $this->container['group_hd'];
    }

    /**
     * Sets group_hd
     *
     * @param bool $group_hd Enable group HD video.
     *
     * @return $this
     */
    public function setGroupHd($group_hd)
    {
        $this->container['group_hd'] = $group_hd;

        return $this;
    }

    /**
     * Gets virtual_background
     *
     * @return bool
     */
    public function getVirtualBackground()
    {
        return $this->container['virtual_background'];
    }

    /**
     * Sets virtual_background
     *
     * @param bool $virtual_background Enable virtual background.
     *
     * @return $this
     */
    public function setVirtualBackground($virtual_background)
    {
        $this->container['virtual_background'] = $virtual_background;

        return $this;
    }

    /**
     * Gets far_end_camera_control
     *
     * @return bool
     */
    public function getFarEndCameraControl()
    {
        return $this->container['far_end_camera_control'];
    }

    /**
     * Sets far_end_camera_control
     *
     * @param bool $far_end_camera_control Allow another user to take control of the camera.
     *
     * @return $this
     */
    public function setFarEndCameraControl($far_end_camera_control)
    {
        $this->container['far_end_camera_control'] = $far_end_camera_control;

        return $this;
    }

    /**
     * Gets share_dual_camera
     *
     * @return bool
     */
    public function getShareDualCamera()
    {
        return $this->container['share_dual_camera'];
    }

    /**
     * Sets share_dual_camera
     *
     * @param bool $share_dual_camera Share dual camera (deprecated).
     *
     * @return $this
     */
    public function setShareDualCamera($share_dual_camera)
    {
        $this->container['share_dual_camera'] = $share_dual_camera;

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
     * @param bool $waiting_room Enable Waiting room - if enabled, attendees can only join after host approves.
     *
     * @return $this
     */
    public function setWaitingRoom($waiting_room)
    {
        $this->container['waiting_room'] = $waiting_room;

        return $this;
    }

    /**
     * Gets allow_live_streaming
     *
     * @return bool
     */
    public function getAllowLiveStreaming()
    {
        return $this->container['allow_live_streaming'];
    }

    /**
     * Sets allow_live_streaming
     *
     * @param bool $allow_live_streaming Allow live streaming.
     *
     * @return $this
     */
    public function setAllowLiveStreaming($allow_live_streaming)
    {
        $this->container['allow_live_streaming'] = $allow_live_streaming;

        return $this;
    }

    /**
     * Gets workplace_by_facebook
     *
     * @return bool
     */
    public function getWorkplaceByFacebook()
    {
        return $this->container['workplace_by_facebook'];
    }

    /**
     * Sets workplace_by_facebook
     *
     * @param bool $workplace_by_facebook Allow livestreaming by host through Workplace by Facebook.
     *
     * @return $this
     */
    public function setWorkplaceByFacebook($workplace_by_facebook)
    {
        $this->container['workplace_by_facebook'] = $workplace_by_facebook;

        return $this;
    }

    /**
     * Gets custom_live_streaming_service
     *
     * @return bool
     */
    public function getCustomLiveStreamingService()
    {
        return $this->container['custom_live_streaming_service'];
    }

    /**
     * Sets custom_live_streaming_service
     *
     * @param bool $custom_live_streaming_service Allow custom live streaming.
     *
     * @return $this
     */
    public function setCustomLiveStreamingService($custom_live_streaming_service)
    {
        $this->container['custom_live_streaming_service'] = $custom_live_streaming_service;

        return $this;
    }

    /**
     * Gets custom_service_instructions
     *
     * @return string
     */
    public function getCustomServiceInstructions()
    {
        return $this->container['custom_service_instructions'];
    }

    /**
     * Sets custom_service_instructions
     *
     * @param string $custom_service_instructions Custom service instructions.
     *
     * @return $this
     */
    public function setCustomServiceInstructions($custom_service_instructions)
    {
        $this->container['custom_service_instructions'] = $custom_service_instructions;

        return $this;
    }

    /**
     * Gets show_meeting_control_toolbar
     *
     * @return bool
     */
    public function getShowMeetingControlToolbar()
    {
        return $this->container['show_meeting_control_toolbar'];
    }

    /**
     * Sets show_meeting_control_toolbar
     *
     * @param bool $show_meeting_control_toolbar Always show meeting controls during a meeting.
     *
     * @return $this
     */
    public function setShowMeetingControlToolbar($show_meeting_control_toolbar)
    {
        $this->container['show_meeting_control_toolbar'] = $show_meeting_control_toolbar;

        return $this;
    }

    /**
     * Gets custom_data_center_regions
     *
     * @return bool
     */
    public function getCustomDataCenterRegions()
    {
        return $this->container['custom_data_center_regions'];
    }

    /**
     * Sets custom_data_center_regions
     *
     * @param bool $custom_data_center_regions If set to `true`, you can [select data center regions](https://support.zoom.us/hc/en-us/articles/360042411451-Selecting-data-center-regions-for-hosted-meetings-and-webinars) to use for hosting your real-time meeting and webinar traffic. These regions can be provided in the `data_center_regions` field. If set to `false`, the regions cannot be customized and the default regions will be used.
     *
     * @return $this
     */
    public function setCustomDataCenterRegions($custom_data_center_regions)
    {
        $this->container['custom_data_center_regions'] = $custom_data_center_regions;

        return $this;
    }

    /**
     * Gets data_center_regions
     *
     * @return string[]
     */
    public function getDataCenterRegions()
    {
        return $this->container['data_center_regions'];
    }

    /**
     * Sets data_center_regions
     *
     * @param string[] $data_center_regions If you have set the value of `custom_data_center_regions` to `true`, specify the data center regions that you would like to opt in to (country codes from among: [\"EU\", \"HK\", \"AU\", \"IN\", \"LA\", \"TY\", \"CN\", \"US\", \"CA\"]).
     *
     * @return $this
     */
    public function setDataCenterRegions($data_center_regions)
    {
        $this->container['data_center_regions'] = $data_center_regions;

        return $this;
    }

    /**
     * Gets screen_sharing
     *
     * @return bool
     */
    public function getScreenSharing()
    {
        return $this->container['screen_sharing'];
    }

    /**
     * Sets screen_sharing
     *
     * @param bool $screen_sharing Allow host and participants to share their screen or content during meetings
     *
     * @return $this
     */
    public function setScreenSharing($screen_sharing)
    {
        $this->container['screen_sharing'] = $screen_sharing;

        return $this;
    }

    /**
     * Gets who_can_share_screen
     *
     * @return string
     */
    public function getWhoCanShareScreen()
    {
        return $this->container['who_can_share_screen'];
    }

    /**
     * Sets who_can_share_screen
     *
     * @param string $who_can_share_screen Indicates who can share their screen or content during meetings. The value can be one of the following: <br> `host`: Only host can share the screen.<br> `all`: Both hosts and attendees can share their screen during meetings. For Webinar, the hosts and panelists can start screen sharing, but not the attendees.
     *
     * @return $this
     */
    public function setWhoCanShareScreen($who_can_share_screen)
    {
        $allowedValues = $this->getWhoCanShareScreenAllowableValues();
        if (!is_null($who_can_share_screen) && !in_array($who_can_share_screen, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'who_can_share_screen', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['who_can_share_screen'] = $who_can_share_screen;

        return $this;
    }

    /**
     * Gets who_can_share_screen_when_someone_is_sharing
     *
     * @return string
     */
    public function getWhoCanShareScreenWhenSomeoneIsSharing()
    {
        return $this->container['who_can_share_screen_when_someone_is_sharing'];
    }

    /**
     * Sets who_can_share_screen_when_someone_is_sharing
     *
     * @param string $who_can_share_screen_when_someone_is_sharing Indicates who is allowed to start sharing screen when someone else in the meeting is sharing their screen. The value can be one of the following:<br> `host`: Only a host can share the screen when someone else is sharing.<br> `all`: Anyone in the meeting is allowed to start sharing their screen when someone else is sharing. For Webinar, the hosts and panelists can start screen sharing, but not the attendees.
     *
     * @return $this
     */
    public function setWhoCanShareScreenWhenSomeoneIsSharing($who_can_share_screen_when_someone_is_sharing)
    {
        $allowedValues = $this->getWhoCanShareScreenWhenSomeoneIsSharingAllowableValues();
        if (!is_null($who_can_share_screen_when_someone_is_sharing) && !in_array($who_can_share_screen_when_someone_is_sharing, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'who_can_share_screen_when_someone_is_sharing', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['who_can_share_screen_when_someone_is_sharing'] = $who_can_share_screen_when_someone_is_sharing;

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


