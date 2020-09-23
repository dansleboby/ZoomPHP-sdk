<?php
/**
 * AccountsaccountIdlockSettingsInMeeting
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
 * AccountsaccountIdlockSettingsInMeeting Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsaccountIdlockSettingsInMeeting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountsaccountIdlock_settings_in_meeting';

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
        'feedback' => 'bool',
        'post_meeting_feedback' => 'bool',
        'co_host' => 'bool',
        'polling' => 'bool',
        'attendee_on_hold' => 'bool',
        'show_meeting_control_toolbar' => 'bool',
        'allow_show_zoom_windows' => 'bool',
        'annotation' => 'bool',
        'whiteboard' => 'bool',
        'remote_control' => 'bool',
        'webinar_question_answer' => 'bool',
        'anonymous_question_answer' => 'bool',
        'breakout_room' => 'bool',
        'closed_caption' => 'bool',
        'far_end_camera_control' => 'bool',
        'group_hd' => 'bool',
        'virtual_background' => 'bool',
        'alert_guest_join' => 'bool',
        'auto_answer' => 'bool',
        'sending_default_email_invites' => 'bool',
        'use_html_format_email' => 'bool',
        'dscp_marking' => 'bool',
        'stereo_audio' => 'bool',
        'original_audio' => 'bool',
        'screen_sharing' => 'bool',
        'custom_data_center_regions' => 'bool'
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
        'feedback' => null,
        'post_meeting_feedback' => null,
        'co_host' => null,
        'polling' => null,
        'attendee_on_hold' => null,
        'show_meeting_control_toolbar' => null,
        'allow_show_zoom_windows' => null,
        'annotation' => null,
        'whiteboard' => null,
        'remote_control' => null,
        'webinar_question_answer' => null,
        'anonymous_question_answer' => null,
        'breakout_room' => null,
        'closed_caption' => null,
        'far_end_camera_control' => null,
        'group_hd' => null,
        'virtual_background' => null,
        'alert_guest_join' => null,
        'auto_answer' => null,
        'sending_default_email_invites' => null,
        'use_html_format_email' => null,
        'dscp_marking' => null,
        'stereo_audio' => null,
        'original_audio' => null,
        'screen_sharing' => null,
        'custom_data_center_regions' => null
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
        'feedback' => 'feedback',
        'post_meeting_feedback' => 'post_meeting_feedback',
        'co_host' => 'co_host',
        'polling' => 'polling',
        'attendee_on_hold' => 'attendee_on_hold',
        'show_meeting_control_toolbar' => 'show_meeting_control_toolbar',
        'allow_show_zoom_windows' => 'allow_show_zoom_windows',
        'annotation' => 'annotation',
        'whiteboard' => 'whiteboard',
        'remote_control' => 'remote_control',
        'webinar_question_answer' => 'webinar_question_answer',
        'anonymous_question_answer' => 'anonymous_question_answer',
        'breakout_room' => 'breakout_room',
        'closed_caption' => 'closed_caption',
        'far_end_camera_control' => 'far_end_camera_control',
        'group_hd' => 'group_hd',
        'virtual_background' => 'virtual_background',
        'alert_guest_join' => 'alert_guest_join',
        'auto_answer' => 'auto_answer',
        'sending_default_email_invites' => 'sending_default_email_invites',
        'use_html_format_email' => 'use_html_format_email',
        'dscp_marking' => 'dscp_marking',
        'stereo_audio' => 'stereo_audio',
        'original_audio' => 'original_audio',
        'screen_sharing' => 'screen_sharing',
        'custom_data_center_regions' => 'custom_data_center_regions'
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
        'feedback' => 'setFeedback',
        'post_meeting_feedback' => 'setPostMeetingFeedback',
        'co_host' => 'setCoHost',
        'polling' => 'setPolling',
        'attendee_on_hold' => 'setAttendeeOnHold',
        'show_meeting_control_toolbar' => 'setShowMeetingControlToolbar',
        'allow_show_zoom_windows' => 'setAllowShowZoomWindows',
        'annotation' => 'setAnnotation',
        'whiteboard' => 'setWhiteboard',
        'remote_control' => 'setRemoteControl',
        'webinar_question_answer' => 'setWebinarQuestionAnswer',
        'anonymous_question_answer' => 'setAnonymousQuestionAnswer',
        'breakout_room' => 'setBreakoutRoom',
        'closed_caption' => 'setClosedCaption',
        'far_end_camera_control' => 'setFarEndCameraControl',
        'group_hd' => 'setGroupHd',
        'virtual_background' => 'setVirtualBackground',
        'alert_guest_join' => 'setAlertGuestJoin',
        'auto_answer' => 'setAutoAnswer',
        'sending_default_email_invites' => 'setSendingDefaultEmailInvites',
        'use_html_format_email' => 'setUseHtmlFormatEmail',
        'dscp_marking' => 'setDscpMarking',
        'stereo_audio' => 'setStereoAudio',
        'original_audio' => 'setOriginalAudio',
        'screen_sharing' => 'setScreenSharing',
        'custom_data_center_regions' => 'setCustomDataCenterRegions'
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
        'feedback' => 'getFeedback',
        'post_meeting_feedback' => 'getPostMeetingFeedback',
        'co_host' => 'getCoHost',
        'polling' => 'getPolling',
        'attendee_on_hold' => 'getAttendeeOnHold',
        'show_meeting_control_toolbar' => 'getShowMeetingControlToolbar',
        'allow_show_zoom_windows' => 'getAllowShowZoomWindows',
        'annotation' => 'getAnnotation',
        'whiteboard' => 'getWhiteboard',
        'remote_control' => 'getRemoteControl',
        'webinar_question_answer' => 'getWebinarQuestionAnswer',
        'anonymous_question_answer' => 'getAnonymousQuestionAnswer',
        'breakout_room' => 'getBreakoutRoom',
        'closed_caption' => 'getClosedCaption',
        'far_end_camera_control' => 'getFarEndCameraControl',
        'group_hd' => 'getGroupHd',
        'virtual_background' => 'getVirtualBackground',
        'alert_guest_join' => 'getAlertGuestJoin',
        'auto_answer' => 'getAutoAnswer',
        'sending_default_email_invites' => 'getSendingDefaultEmailInvites',
        'use_html_format_email' => 'getUseHtmlFormatEmail',
        'dscp_marking' => 'getDscpMarking',
        'stereo_audio' => 'getStereoAudio',
        'original_audio' => 'getOriginalAudio',
        'screen_sharing' => 'getScreenSharing',
        'custom_data_center_regions' => 'getCustomDataCenterRegions'
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
        $this->container['chat'] = isset($data['chat']) ? $data['chat'] : null;
        $this->container['private_chat'] = isset($data['private_chat']) ? $data['private_chat'] : null;
        $this->container['auto_saving_chat'] = isset($data['auto_saving_chat']) ? $data['auto_saving_chat'] : null;
        $this->container['entry_exit_chime'] = isset($data['entry_exit_chime']) ? $data['entry_exit_chime'] : null;
        $this->container['feedback'] = isset($data['feedback']) ? $data['feedback'] : null;
        $this->container['post_meeting_feedback'] = isset($data['post_meeting_feedback']) ? $data['post_meeting_feedback'] : null;
        $this->container['co_host'] = isset($data['co_host']) ? $data['co_host'] : null;
        $this->container['polling'] = isset($data['polling']) ? $data['polling'] : null;
        $this->container['attendee_on_hold'] = isset($data['attendee_on_hold']) ? $data['attendee_on_hold'] : null;
        $this->container['show_meeting_control_toolbar'] = isset($data['show_meeting_control_toolbar']) ? $data['show_meeting_control_toolbar'] : null;
        $this->container['allow_show_zoom_windows'] = isset($data['allow_show_zoom_windows']) ? $data['allow_show_zoom_windows'] : null;
        $this->container['annotation'] = isset($data['annotation']) ? $data['annotation'] : null;
        $this->container['whiteboard'] = isset($data['whiteboard']) ? $data['whiteboard'] : null;
        $this->container['remote_control'] = isset($data['remote_control']) ? $data['remote_control'] : null;
        $this->container['webinar_question_answer'] = isset($data['webinar_question_answer']) ? $data['webinar_question_answer'] : null;
        $this->container['anonymous_question_answer'] = isset($data['anonymous_question_answer']) ? $data['anonymous_question_answer'] : null;
        $this->container['breakout_room'] = isset($data['breakout_room']) ? $data['breakout_room'] : null;
        $this->container['closed_caption'] = isset($data['closed_caption']) ? $data['closed_caption'] : null;
        $this->container['far_end_camera_control'] = isset($data['far_end_camera_control']) ? $data['far_end_camera_control'] : null;
        $this->container['group_hd'] = isset($data['group_hd']) ? $data['group_hd'] : null;
        $this->container['virtual_background'] = isset($data['virtual_background']) ? $data['virtual_background'] : null;
        $this->container['alert_guest_join'] = isset($data['alert_guest_join']) ? $data['alert_guest_join'] : null;
        $this->container['auto_answer'] = isset($data['auto_answer']) ? $data['auto_answer'] : null;
        $this->container['sending_default_email_invites'] = isset($data['sending_default_email_invites']) ? $data['sending_default_email_invites'] : null;
        $this->container['use_html_format_email'] = isset($data['use_html_format_email']) ? $data['use_html_format_email'] : null;
        $this->container['dscp_marking'] = isset($data['dscp_marking']) ? $data['dscp_marking'] : null;
        $this->container['stereo_audio'] = isset($data['stereo_audio']) ? $data['stereo_audio'] : null;
        $this->container['original_audio'] = isset($data['original_audio']) ? $data['original_audio'] : null;
        $this->container['screen_sharing'] = isset($data['screen_sharing']) ? $data['screen_sharing'] : null;
        $this->container['custom_data_center_regions'] = isset($data['custom_data_center_regions']) ? $data['custom_data_center_regions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param bool $e2e_encryption Require that all meetings are encrypted using AES.
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
     * @param bool $chat Allow meeting participants to send chat message visible to all participants.
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
     * @param bool $private_chat Allow meeting participants to send a private 1:1 message to another participant.
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
     * @param bool $auto_saving_chat Automatically save all in-meeting chats.
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
     * @param string $entry_exit_chime Play sound when participants join or leave.
     *
     * @return $this
     */
    public function setEntryExitChime($entry_exit_chime)
    {
        $this->container['entry_exit_chime'] = $entry_exit_chime;

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
     * @param bool $feedback Enable users to provide feedback to Zoom at the end of the meeting.
     *
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->container['feedback'] = $feedback;

        return $this;
    }

    /**
     * Gets post_meeting_feedback
     *
     * @return bool
     */
    public function getPostMeetingFeedback()
    {
        return $this->container['post_meeting_feedback'];
    }

    /**
     * Sets post_meeting_feedback
     *
     * @param bool $post_meeting_feedback Display end-of-meeting experience feedback survey.
     *
     * @return $this
     */
    public function setPostMeetingFeedback($post_meeting_feedback)
    {
        $this->container['post_meeting_feedback'] = $post_meeting_feedback;

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
     * @param bool $co_host Allow the host to add co-hosts. Co-hosts have the same in-meeting controls as the host.
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
     * @param bool $polling Add 'Polls' to the meeting controls. This allows the host to survey the attendees.
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
     * @param bool $attendee_on_hold Allow hosts to temporarily remove an attendee from the meeting.
     *
     * @return $this
     */
    public function setAttendeeOnHold($attendee_on_hold)
    {
        $this->container['attendee_on_hold'] = $attendee_on_hold;

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
     * Gets allow_show_zoom_windows
     *
     * @return bool
     */
    public function getAllowShowZoomWindows()
    {
        return $this->container['allow_show_zoom_windows'];
    }

    /**
     * Sets allow_show_zoom_windows
     *
     * @param bool $allow_show_zoom_windows Show Zoom windows during screen share.
     *
     * @return $this
     */
    public function setAllowShowZoomWindows($allow_show_zoom_windows)
    {
        $this->container['allow_show_zoom_windows'] = $allow_show_zoom_windows;

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
     * @param bool $annotation Allow participants to use annotation tools to add information to shared screens.
     *
     * @return $this
     */
    public function setAnnotation($annotation)
    {
        $this->container['annotation'] = $annotation;

        return $this;
    }

    /**
     * Gets whiteboard
     *
     * @return bool
     */
    public function getWhiteboard()
    {
        return $this->container['whiteboard'];
    }

    /**
     * Sets whiteboard
     *
     * @param bool $whiteboard Allow participants to share a whiteboard that includes annotation tools.
     *
     * @return $this
     */
    public function setWhiteboard($whiteboard)
    {
        $this->container['whiteboard'] = $whiteboard;

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
     * @param bool $remote_control During screen sharing, allow the person who is sharing to let others control the shared content.
     *
     * @return $this
     */
    public function setRemoteControl($remote_control)
    {
        $this->container['remote_control'] = $remote_control;

        return $this;
    }

    /**
     * Gets webinar_question_answer
     *
     * @return bool
     */
    public function getWebinarQuestionAnswer()
    {
        return $this->container['webinar_question_answer'];
    }

    /**
     * Sets webinar_question_answer
     *
     * @param bool $webinar_question_answer 
     *
     * @return $this
     */
    public function setWebinarQuestionAnswer($webinar_question_answer)
    {
        $this->container['webinar_question_answer'] = $webinar_question_answer;

        return $this;
    }

    /**
     * Gets anonymous_question_answer
     *
     * @return bool
     */
    public function getAnonymousQuestionAnswer()
    {
        return $this->container['anonymous_question_answer'];
    }

    /**
     * Sets anonymous_question_answer
     *
     * @param bool $anonymous_question_answer 
     *
     * @return $this
     */
    public function setAnonymousQuestionAnswer($anonymous_question_answer)
    {
        $this->container['anonymous_question_answer'] = $anonymous_question_answer;

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
     * @param bool $breakout_room Allow host to split meeting participants into separate, smaller rooms.
     *
     * @return $this
     */
    public function setBreakoutRoom($breakout_room)
    {
        $this->container['breakout_room'] = $breakout_room;

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
     * @param bool $closed_caption Allow host to type closed captions or assign a participant/third party device to add closed captions.
     *
     * @return $this
     */
    public function setClosedCaption($closed_caption)
    {
        $this->container['closed_caption'] = $closed_caption;

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
     * @param bool $far_end_camera_control Allow another user to take control of the camera during a meeting.
     *
     * @return $this
     */
    public function setFarEndCameraControl($far_end_camera_control)
    {
        $this->container['far_end_camera_control'] = $far_end_camera_control;

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
     * @param bool $group_hd Enable higher quality video for host and participants. This will require more bandwidth.
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
     * Gets alert_guest_join
     *
     * @return bool
     */
    public function getAlertGuestJoin()
    {
        return $this->container['alert_guest_join'];
    }

    /**
     * Sets alert_guest_join
     *
     * @param bool $alert_guest_join Allow participants who belong to your account to see that a guest (someone who does not belong to your account) is participating in the meeting/webinar.
     *
     * @return $this
     */
    public function setAlertGuestJoin($alert_guest_join)
    {
        $this->container['alert_guest_join'] = $alert_guest_join;

        return $this;
    }

    /**
     * Gets auto_answer
     *
     * @return bool
     */
    public function getAutoAnswer()
    {
        return $this->container['auto_answer'];
    }

    /**
     * Sets auto_answer
     *
     * @param bool $auto_answer Enable users to see and add contacts to 'auto-answer group' in the contact list on chat. Any call from members of this group will be automatically answered.
     *
     * @return $this
     */
    public function setAutoAnswer($auto_answer)
    {
        $this->container['auto_answer'] = $auto_answer;

        return $this;
    }

    /**
     * Gets sending_default_email_invites
     *
     * @return bool
     */
    public function getSendingDefaultEmailInvites()
    {
        return $this->container['sending_default_email_invites'];
    }

    /**
     * Sets sending_default_email_invites
     *
     * @param bool $sending_default_email_invites Allow users to invite participants by email only by default.
     *
     * @return $this
     */
    public function setSendingDefaultEmailInvites($sending_default_email_invites)
    {
        $this->container['sending_default_email_invites'] = $sending_default_email_invites;

        return $this;
    }

    /**
     * Gets use_html_format_email
     *
     * @return bool
     */
    public function getUseHtmlFormatEmail()
    {
        return $this->container['use_html_format_email'];
    }

    /**
     * Sets use_html_format_email
     *
     * @param bool $use_html_format_email Allow  HTML formatting instead of plain text for meeting invitations scheduled with the Outlook plugin.
     *
     * @return $this
     */
    public function setUseHtmlFormatEmail($use_html_format_email)
    {
        $this->container['use_html_format_email'] = $use_html_format_email;

        return $this;
    }

    /**
     * Gets dscp_marking
     *
     * @return bool
     */
    public function getDscpMarking()
    {
        return $this->container['dscp_marking'];
    }

    /**
     * Sets dscp_marking
     *
     * @param bool $dscp_marking Allow users to select stereo audio during a meeting.
     *
     * @return $this
     */
    public function setDscpMarking($dscp_marking)
    {
        $this->container['dscp_marking'] = $dscp_marking;

        return $this;
    }

    /**
     * Gets stereo_audio
     *
     * @return bool
     */
    public function getStereoAudio()
    {
        return $this->container['stereo_audio'];
    }

    /**
     * Sets stereo_audio
     *
     * @param bool $stereo_audio Allow users to select stereo audio during a meeting.
     *
     * @return $this
     */
    public function setStereoAudio($stereo_audio)
    {
        $this->container['stereo_audio'] = $stereo_audio;

        return $this;
    }

    /**
     * Gets original_audio
     *
     * @return bool
     */
    public function getOriginalAudio()
    {
        return $this->container['original_audio'];
    }

    /**
     * Sets original_audio
     *
     * @param bool $original_audio Allow users to select original sound during a meeting.
     *
     * @return $this
     */
    public function setOriginalAudio($original_audio)
    {
        $this->container['original_audio'] = $original_audio;

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
     * @param bool $screen_sharing Allow host and participants to share their screen or content during meetings.
     *
     * @return $this
     */
    public function setScreenSharing($screen_sharing)
    {
        $this->container['screen_sharing'] = $screen_sharing;

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
     * @param bool $custom_data_center_regions If set to `true`, account owners and admins on paid accounts can [select data center regions](https://support.zoom.us/hc/en-us/articles/360042411451-Selecting-data-center-regions-for-hosted-meetings-and-webinars) to use for hosting their real-time meeting and webinar traffic. These regions can be provided in the `data_center_regions` field in the account settings. If set to `false`, the regions cannot be customized and the default regions will be used.
     *
     * @return $this
     */
    public function setCustomDataCenterRegions($custom_data_center_regions)
    {
        $this->container['custom_data_center_regions'] = $custom_data_center_regions;

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


