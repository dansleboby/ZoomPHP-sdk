<?php
/**
 * AccountSettingsZoomRooms
 *
 * PHP version 5
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applicatixons on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * AccountSettingsZoomRooms Class Doc Comment
 *
 * @category Class
 * @description Account Settings: Zoom Rooms.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountSettingsZoomRooms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountSettings_zoom_rooms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'upcoming_meeting_alert' => 'bool',
        'start_airplay_manually' => 'bool',
        'weekly_system_restart' => 'bool',
        'list_meetings_with_calendar' => 'bool',
        'zr_post_meeting_feedback' => 'bool',
        'ultrasonic' => 'bool',
        'force_private_meeting' => 'bool',
        'hide_host_information' => 'bool',
        'cmr_for_instant_meeting' => 'bool',
        'auto_start_stop_scheduled_meetings' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'upcoming_meeting_alert' => null,
        'start_airplay_manually' => null,
        'weekly_system_restart' => null,
        'list_meetings_with_calendar' => null,
        'zr_post_meeting_feedback' => null,
        'ultrasonic' => null,
        'force_private_meeting' => null,
        'hide_host_information' => null,
        'cmr_for_instant_meeting' => null,
        'auto_start_stop_scheduled_meetings' => null
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
        'upcoming_meeting_alert' => 'upcoming_meeting_alert',
        'start_airplay_manually' => 'start_airplay_manually',
        'weekly_system_restart' => 'weekly_system_restart',
        'list_meetings_with_calendar' => 'list_meetings_with_calendar',
        'zr_post_meeting_feedback' => 'zr_post_meeting_feedback',
        'ultrasonic' => 'ultrasonic',
        'force_private_meeting' => 'force_private_meeting',
        'hide_host_information' => 'hide_host_information',
        'cmr_for_instant_meeting' => 'cmr_for_instant_meeting',
        'auto_start_stop_scheduled_meetings' => 'auto_start_stop_scheduled_meetings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upcoming_meeting_alert' => 'setUpcomingMeetingAlert',
        'start_airplay_manually' => 'setStartAirplayManually',
        'weekly_system_restart' => 'setWeeklySystemRestart',
        'list_meetings_with_calendar' => 'setListMeetingsWithCalendar',
        'zr_post_meeting_feedback' => 'setZrPostMeetingFeedback',
        'ultrasonic' => 'setUltrasonic',
        'force_private_meeting' => 'setForcePrivateMeeting',
        'hide_host_information' => 'setHideHostInformation',
        'cmr_for_instant_meeting' => 'setCmrForInstantMeeting',
        'auto_start_stop_scheduled_meetings' => 'setAutoStartStopScheduledMeetings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upcoming_meeting_alert' => 'getUpcomingMeetingAlert',
        'start_airplay_manually' => 'getStartAirplayManually',
        'weekly_system_restart' => 'getWeeklySystemRestart',
        'list_meetings_with_calendar' => 'getListMeetingsWithCalendar',
        'zr_post_meeting_feedback' => 'getZrPostMeetingFeedback',
        'ultrasonic' => 'getUltrasonic',
        'force_private_meeting' => 'getForcePrivateMeeting',
        'hide_host_information' => 'getHideHostInformation',
        'cmr_for_instant_meeting' => 'getCmrForInstantMeeting',
        'auto_start_stop_scheduled_meetings' => 'getAutoStartStopScheduledMeetings'
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
        $this->container['upcoming_meeting_alert'] = isset($data['upcoming_meeting_alert']) ? $data['upcoming_meeting_alert'] : null;
        $this->container['start_airplay_manually'] = isset($data['start_airplay_manually']) ? $data['start_airplay_manually'] : null;
        $this->container['weekly_system_restart'] = isset($data['weekly_system_restart']) ? $data['weekly_system_restart'] : null;
        $this->container['list_meetings_with_calendar'] = isset($data['list_meetings_with_calendar']) ? $data['list_meetings_with_calendar'] : null;
        $this->container['zr_post_meeting_feedback'] = isset($data['zr_post_meeting_feedback']) ? $data['zr_post_meeting_feedback'] : null;
        $this->container['ultrasonic'] = isset($data['ultrasonic']) ? $data['ultrasonic'] : null;
        $this->container['force_private_meeting'] = isset($data['force_private_meeting']) ? $data['force_private_meeting'] : null;
        $this->container['hide_host_information'] = isset($data['hide_host_information']) ? $data['hide_host_information'] : null;
        $this->container['cmr_for_instant_meeting'] = isset($data['cmr_for_instant_meeting']) ? $data['cmr_for_instant_meeting'] : null;
        $this->container['auto_start_stop_scheduled_meetings'] = isset($data['auto_start_stop_scheduled_meetings']) ? $data['auto_start_stop_scheduled_meetings'] : null;
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
     * Gets upcoming_meeting_alert
     *
     * @return bool|null
     */
    public function getUpcomingMeetingAlert()
    {
        return $this->container['upcoming_meeting_alert'];
    }

    /**
     * Sets upcoming_meeting_alert
     *
     * @param bool|null $upcoming_meeting_alert Upcoming meeting alert.
     *
     * @return $this
     */
    public function setUpcomingMeetingAlert($upcoming_meeting_alert)
    {
        $this->container['upcoming_meeting_alert'] = $upcoming_meeting_alert;

        return $this;
    }

    /**
     * Gets start_airplay_manually
     *
     * @return bool|null
     */
    public function getStartAirplayManually()
    {
        return $this->container['start_airplay_manually'];
    }

    /**
     * Sets start_airplay_manually
     *
     * @param bool|null $start_airplay_manually Start AirPlay service manually.
     *
     * @return $this
     */
    public function setStartAirplayManually($start_airplay_manually)
    {
        $this->container['start_airplay_manually'] = $start_airplay_manually;

        return $this;
    }

    /**
     * Gets weekly_system_restart
     *
     * @return bool|null
     */
    public function getWeeklySystemRestart()
    {
        return $this->container['weekly_system_restart'];
    }

    /**
     * Sets weekly_system_restart
     *
     * @param bool|null $weekly_system_restart Weekly system restart.
     *
     * @return $this
     */
    public function setWeeklySystemRestart($weekly_system_restart)
    {
        $this->container['weekly_system_restart'] = $weekly_system_restart;

        return $this;
    }

    /**
     * Gets list_meetings_with_calendar
     *
     * @return bool|null
     */
    public function getListMeetingsWithCalendar()
    {
        return $this->container['list_meetings_with_calendar'];
    }

    /**
     * Sets list_meetings_with_calendar
     *
     * @param bool|null $list_meetings_with_calendar Display meeting list with calendar integration.
     *
     * @return $this
     */
    public function setListMeetingsWithCalendar($list_meetings_with_calendar)
    {
        $this->container['list_meetings_with_calendar'] = $list_meetings_with_calendar;

        return $this;
    }

    /**
     * Gets zr_post_meeting_feedback
     *
     * @return bool|null
     */
    public function getZrPostMeetingFeedback()
    {
        return $this->container['zr_post_meeting_feedback'];
    }

    /**
     * Sets zr_post_meeting_feedback
     *
     * @param bool|null $zr_post_meeting_feedback Zoom Room post meeting feedback.
     *
     * @return $this
     */
    public function setZrPostMeetingFeedback($zr_post_meeting_feedback)
    {
        $this->container['zr_post_meeting_feedback'] = $zr_post_meeting_feedback;

        return $this;
    }

    /**
     * Gets ultrasonic
     *
     * @return bool|null
     */
    public function getUltrasonic()
    {
        return $this->container['ultrasonic'];
    }

    /**
     * Sets ultrasonic
     *
     * @param bool|null $ultrasonic Automatic direct sharing using an ultrasonic proximity signal.
     *
     * @return $this
     */
    public function setUltrasonic($ultrasonic)
    {
        $this->container['ultrasonic'] = $ultrasonic;

        return $this;
    }

    /**
     * Gets force_private_meeting
     *
     * @return bool|null
     */
    public function getForcePrivateMeeting()
    {
        return $this->container['force_private_meeting'];
    }

    /**
     * Sets force_private_meeting
     *
     * @param bool|null $force_private_meeting Shift all meetings to private.
     *
     * @return $this
     */
    public function setForcePrivateMeeting($force_private_meeting)
    {
        $this->container['force_private_meeting'] = $force_private_meeting;

        return $this;
    }

    /**
     * Gets hide_host_information
     *
     * @return bool|null
     */
    public function getHideHostInformation()
    {
        return $this->container['hide_host_information'];
    }

    /**
     * Sets hide_host_information
     *
     * @param bool|null $hide_host_information Hide host and meeting ID from private meetings.
     *
     * @return $this
     */
    public function setHideHostInformation($hide_host_information)
    {
        $this->container['hide_host_information'] = $hide_host_information;

        return $this;
    }

    /**
     * Gets cmr_for_instant_meeting
     *
     * @return bool|null
     */
    public function getCmrForInstantMeeting()
    {
        return $this->container['cmr_for_instant_meeting'];
    }

    /**
     * Sets cmr_for_instant_meeting
     *
     * @param bool|null $cmr_for_instant_meeting Cloud recording for instant meetings.
     *
     * @return $this
     */
    public function setCmrForInstantMeeting($cmr_for_instant_meeting)
    {
        $this->container['cmr_for_instant_meeting'] = $cmr_for_instant_meeting;

        return $this;
    }

    /**
     * Gets auto_start_stop_scheduled_meetings
     *
     * @return bool|null
     */
    public function getAutoStartStopScheduledMeetings()
    {
        return $this->container['auto_start_stop_scheduled_meetings'];
    }

    /**
     * Sets auto_start_stop_scheduled_meetings
     *
     * @param bool|null $auto_start_stop_scheduled_meetings Automatic start and stop for scheduled meetings.
     *
     * @return $this
     */
    public function setAutoStartStopScheduledMeetings($auto_start_stop_scheduled_meetings)
    {
        $this->container['auto_start_stop_scheduled_meetings'] = $auto_start_stop_scheduled_meetings;

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


