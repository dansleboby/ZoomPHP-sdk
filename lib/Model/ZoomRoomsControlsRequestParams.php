<?php
/**
 * ZoomRoomsControlsRequestParams
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
 * ZoomRoomsControlsRequestParams Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ZoomRoomsControlsRequestParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZoomRoomsControls_request_params';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'calendar_id' => 'string',
        'change_key' => 'string',
        'event_id' => 'string',
        'resource_email' => 'string',
        'meeting_number' => 'string',
        'passcode' => 'string',
        'force_accept' => 'bool',
        'user_ids' => 'string[]',
        'meeting_topic' => 'string',
        'start_time' => 'string',
        'duration' => 'int',
        'timezone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'calendar_id' => null,
        'change_key' => null,
        'event_id' => null,
        'resource_email' => 'email',
        'meeting_number' => null,
        'passcode' => null,
        'force_accept' => null,
        'user_ids' => null,
        'meeting_topic' => null,
        'start_time' => null,
        'duration' => null,
        'timezone' => null
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
        'calendar_id' => 'calendar_id',
        'change_key' => 'change_key',
        'event_id' => 'event_id',
        'resource_email' => 'resource_email',
        'meeting_number' => 'meeting_number',
        'passcode' => 'passcode',
        'force_accept' => 'force_accept',
        'user_ids' => 'user_ids',
        'meeting_topic' => 'meeting_topic',
        'start_time' => 'start_time',
        'duration' => 'duration',
        'timezone' => 'timezone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calendar_id' => 'setCalendarId',
        'change_key' => 'setChangeKey',
        'event_id' => 'setEventId',
        'resource_email' => 'setResourceEmail',
        'meeting_number' => 'setMeetingNumber',
        'passcode' => 'setPasscode',
        'force_accept' => 'setForceAccept',
        'user_ids' => 'setUserIds',
        'meeting_topic' => 'setMeetingTopic',
        'start_time' => 'setStartTime',
        'duration' => 'setDuration',
        'timezone' => 'setTimezone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calendar_id' => 'getCalendarId',
        'change_key' => 'getChangeKey',
        'event_id' => 'getEventId',
        'resource_email' => 'getResourceEmail',
        'meeting_number' => 'getMeetingNumber',
        'passcode' => 'getPasscode',
        'force_accept' => 'getForceAccept',
        'user_ids' => 'getUserIds',
        'meeting_topic' => 'getMeetingTopic',
        'start_time' => 'getStartTime',
        'duration' => 'getDuration',
        'timezone' => 'getTimezone'
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
        $this->container['calendar_id'] = $data['calendar_id'] ?? null;
        $this->container['change_key'] = $data['change_key'] ?? null;
        $this->container['event_id'] = $data['event_id'] ?? null;
        $this->container['resource_email'] = $data['resource_email'] ?? null;
        $this->container['meeting_number'] = $data['meeting_number'] ?? null;
        $this->container['passcode'] = $data['passcode'] ?? null;
        $this->container['force_accept'] = $data['force_accept'] ?? null;
        $this->container['user_ids'] = $data['user_ids'] ?? null;
        $this->container['meeting_topic'] = $data['meeting_topic'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
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
     * Gets calendar_id
     *
     * @return string|null
     */
    public function getCalendarId()
    {
        return $this->container['calendar_id'];
    }

    /**
     * Sets calendar_id
     *
     * @param string|null $calendar_id This field applies to the 'zoomroom.check_in' and 'zoomroom.check_out' methods. This field is only required if Google Calendar is being used for the event associated with the Zoom Room. The value for this field can be retrieved by calling Google's [CalendarList:list API](https://developers.google.com/calendar/v3/reference/events/list) and referring to the \"id\" field included in the [calendarList resource](https://developers.google.com/calendar/v3/reference/calendarList#resource).
     *
     * @return self
     */
    public function setCalendarId($calendar_id)
    {
        $this->container['calendar_id'] = $calendar_id;

        return $this;
    }

    /**
     * Gets change_key
     *
     * @return string|null
     */
    public function getChangeKey()
    {
        return $this->container['change_key'];
    }

    /**
     * Sets change_key
     *
     * @param string|null $change_key This field applies to the 'zoomroom.check_in' and 'zoomroom.check_out' methods. This field is required only for Microsoft Exchange or Office 365  calendar. The change key represents the specific version of the calendar item and can be retrieved by using Microsoft's [FindItem Operation](https://docs.microsoft.com/en-us/exchange/client-developer/web-service-reference/finditem-operation) and referring to the ChangeKey field of the ItemId Element included in the operation response.<br>
     *
     * @return self
     */
    public function setChangeKey($change_key)
    {
        $this->container['change_key'] = $change_key;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return string|null
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string|null $event_id This field applies to the 'zoomroom.check_in' and 'zoomroom.check_out' methods and is required. Unique Identifier of the calendar event associated with the Zoom Room.<br><br>If the calendar integration being used is Microsoft Exchange, the value for this field can be retrieved by using Microsoft's [FindItem Operation](https://docs.microsoft.com/en-us/exchange/client-developer/web-service-reference/finditem-operation) and referring to the Id field of the ItemId Element included in the operation response.<br><br>If the Google calendar integration was used for this event, the event_id can be retrieved by calling Google's [Events:list API](https://developers.google.com/calendar/v3/reference/events/list) and referring to the \"id\" field included in the [events resource](https://developers.google.com/calendar/v3/reference/events#resource).
     *
     * @return self
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets resource_email
     *
     * @return string|null
     */
    public function getResourceEmail()
    {
        return $this->container['resource_email'];
    }

    /**
     * Sets resource_email
     *
     * @param string|null $resource_email This field applies to the 'zoomroom.check_in' and 'zoomroom.check_out' methods. This field is only required for Microsoft Exchange / Office 365 Calendar. It is the [resource mailbox](https://support.microsoft.com/en-us/help/10063/creating-and-managing-resource-mailboxes-in-office-365) associated with the calendar.
     *
     * @return self
     */
    public function setResourceEmail($resource_email)
    {
        $this->container['resource_email'] = $resource_email;

        return $this;
    }

    /**
     * Gets meeting_number
     *
     * @return string|null
     */
    public function getMeetingNumber()
    {
        return $this->container['meeting_number'];
    }

    /**
     * Sets meeting_number
     *
     * @param string|null $meeting_number This field applies to the 'zoomroom.meeting_join' method and is required. The meeting's number. If the value of this field is provided, join the meeting. If the value of this field is not provided, start an [instant meeting](https://support.zoom.us/hc/en-us/articles/201362533-Instant-meetings-vs-scheduled-meetings).
     *
     * @return self
     */
    public function setMeetingNumber($meeting_number)
    {
        $this->container['meeting_number'] = $meeting_number;

        return $this;
    }

    /**
     * Gets passcode
     *
     * @return string|null
     */
    public function getPasscode()
    {
        return $this->container['passcode'];
    }

    /**
     * Sets passcode
     *
     * @param string|null $passcode This field applies to the 'zoomroom.meeting_join' method. The passcode to join the meeting.
     *
     * @return self
     */
    public function setPasscode($passcode)
    {
        $this->container['passcode'] = $passcode;

        return $this;
    }

    /**
     * Gets force_accept
     *
     * @return bool|null
     */
    public function getForceAccept()
    {
        return $this->container['force_accept'];
    }

    /**
     * Sets force_accept
     *
     * @param bool|null $force_accept This field applies to the 'zoomroom.meeting_join' method. Whether to force a user to immediately join the meeting. If true, this forces the user to leave any current meetings and immediately join the meeting passed in the meeting_number value.
     *
     * @return self
     */
    public function setForceAccept($force_accept)
    {
        $this->container['force_accept'] = $force_accept;

        return $this;
    }

    /**
     * Gets user_ids
     *
     * @return string[]|null
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     *
     * @param string[]|null $user_ids This field applies to the 'zoomroom.meeting_join' method and is required. A comma-separated list of callee user IDs, up to a maximum of 10 callees.
     *
     * @return self
     */
    public function setUserIds($user_ids)
    {
        $this->container['user_ids'] = $user_ids;

        return $this;
    }

    /**
     * Gets meeting_topic
     *
     * @return string|null
     */
    public function getMeetingTopic()
    {
        return $this->container['meeting_topic'];
    }

    /**
     * Sets meeting_topic
     *
     * @param string|null $meeting_topic This field applies to the 'zoomroom.meeting_cancel' method and is required. The meeting's topic, up to 200 characters.
     *
     * @return self
     */
    public function setMeetingTopic($meeting_topic)
    {
        $this->container['meeting_topic'] = $meeting_topic;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string|null $start_time This field applies to the 'zoomroom.meeting_cancel' method and is required. The meeting's start time, in ISO date-time format. You can use time in 0 timezone, if you use this value with timezone, you must pass the timezone field.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration This field applies to the 'zoomroom.meeting_cancel' method and is required. The scheduled meeting duration, in minutes.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone This field applies to the 'zoomroom.meeting_cancel' method. The meeting's [timezone](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists/#timezones). This parameter is optional if the 'start_time' value includes a timezone offset.
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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


