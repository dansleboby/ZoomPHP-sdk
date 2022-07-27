<?php
/**
 * ReportMeetings200ResponseAllOfMeetingsInner
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
 * ReportMeetings200ResponseAllOfMeetingsInner Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportMeetings200ResponseAllOfMeetingsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'reportMeetings_200_response_allOf_meetings_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_keys' => '\Zoom\Api\Model\ReportMeetings200ResponseAllOfMeetingsInnerCustomKeysInner[]',
        'duration' => 'int',
        'end_time' => '\DateTime',
        'id' => 'int',
        'participants_count' => 'int',
        'session_key' => 'string',
        'source' => 'string',
        'start_time' => '\DateTime',
        'topic' => 'string',
        'total_minutes' => 'int',
        'type' => 'int',
        'user_email' => 'string',
        'user_name' => 'string',
        'uuid' => 'string',
        'schedule_time' => 'string',
        'join_waiting_room_time' => 'string',
        'join_time' => 'string',
        'leave_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_keys' => null,
        'duration' => null,
        'end_time' => 'date-time',
        'id' => null,
        'participants_count' => null,
        'session_key' => null,
        'source' => null,
        'start_time' => 'date-time',
        'topic' => null,
        'total_minutes' => null,
        'type' => null,
        'user_email' => 'email',
        'user_name' => null,
        'uuid' => null,
        'schedule_time' => null,
        'join_waiting_room_time' => null,
        'join_time' => null,
        'leave_time' => null
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
        'custom_keys' => 'custom_keys',
        'duration' => 'duration',
        'end_time' => 'end_time',
        'id' => 'id',
        'participants_count' => 'participants_count',
        'session_key' => 'session_key',
        'source' => 'source',
        'start_time' => 'start_time',
        'topic' => 'topic',
        'total_minutes' => 'total_minutes',
        'type' => 'type',
        'user_email' => 'user_email',
        'user_name' => 'user_name',
        'uuid' => 'uuid',
        'schedule_time' => 'schedule_time',
        'join_waiting_room_time' => 'join_waiting_room_time',
        'join_time' => 'join_time',
        'leave_time' => 'leave_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_keys' => 'setCustomKeys',
        'duration' => 'setDuration',
        'end_time' => 'setEndTime',
        'id' => 'setId',
        'participants_count' => 'setParticipantsCount',
        'session_key' => 'setSessionKey',
        'source' => 'setSource',
        'start_time' => 'setStartTime',
        'topic' => 'setTopic',
        'total_minutes' => 'setTotalMinutes',
        'type' => 'setType',
        'user_email' => 'setUserEmail',
        'user_name' => 'setUserName',
        'uuid' => 'setUuid',
        'schedule_time' => 'setScheduleTime',
        'join_waiting_room_time' => 'setJoinWaitingRoomTime',
        'join_time' => 'setJoinTime',
        'leave_time' => 'setLeaveTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_keys' => 'getCustomKeys',
        'duration' => 'getDuration',
        'end_time' => 'getEndTime',
        'id' => 'getId',
        'participants_count' => 'getParticipantsCount',
        'session_key' => 'getSessionKey',
        'source' => 'getSource',
        'start_time' => 'getStartTime',
        'topic' => 'getTopic',
        'total_minutes' => 'getTotalMinutes',
        'type' => 'getType',
        'user_email' => 'getUserEmail',
        'user_name' => 'getUserName',
        'uuid' => 'getUuid',
        'schedule_time' => 'getScheduleTime',
        'join_waiting_room_time' => 'getJoinWaitingRoomTime',
        'join_time' => 'getJoinTime',
        'leave_time' => 'getLeaveTime'
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

    public const TYPE_1 = 1;
    public const TYPE_2 = 2;
    public const TYPE_4 = 4;
    public const TYPE_8 = 8;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_1,
            self::TYPE_2,
            self::TYPE_4,
            self::TYPE_8,
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
        $this->container['custom_keys'] = $data['custom_keys'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['participants_count'] = $data['participants_count'] ?? null;
        $this->container['session_key'] = $data['session_key'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['total_minutes'] = $data['total_minutes'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['user_email'] = $data['user_email'] ?? null;
        $this->container['user_name'] = $data['user_name'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['schedule_time'] = $data['schedule_time'] ?? null;
        $this->container['join_waiting_room_time'] = $data['join_waiting_room_time'] ?? null;
        $this->container['join_time'] = $data['join_time'] ?? null;
        $this->container['leave_time'] = $data['leave_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['custom_keys']) && (count($this->container['custom_keys']) > 10)) {
            $invalidProperties[] = "invalid value for 'custom_keys', number of items must be less than or equal to 10.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets custom_keys
     *
     * @return \Zoom\Api\Model\ReportMeetings200ResponseAllOfMeetingsInnerCustomKeysInner[]|null
     */
    public function getCustomKeys()
    {
        return $this->container['custom_keys'];
    }

    /**
     * Sets custom_keys
     *
     * @param \Zoom\Api\Model\ReportMeetings200ResponseAllOfMeetingsInnerCustomKeysInner[]|null $custom_keys Information about the meeting's assigned custom keys and values. This returns a maximum of 10 items.
     *
     * @return self
     */
    public function setCustomKeys($custom_keys)
    {

        if (!is_null($custom_keys) && (count($custom_keys) > 10)) {
            throw new \InvalidArgumentException('invalid value for $custom_keys when calling ReportMeetings200ResponseAllOfMeetingsInner., number of items must be less than or equal to 10.');
        }
        $this->container['custom_keys'] = $custom_keys;

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
     * @param int|null $duration The meeting's duration.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time The meeting's end date and time.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The [meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID).
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets participants_count
     *
     * @return int|null
     */
    public function getParticipantsCount()
    {
        return $this->container['participants_count'];
    }

    /**
     * Sets participants_count
     *
     * @param int|null $participants_count The number of meeting participants.
     *
     * @return self
     */
    public function setParticipantsCount($participants_count)
    {
        $this->container['participants_count'] = $participants_count;

        return $this;
    }

    /**
     * Gets session_key
     *
     * @return string|null
     */
    public function getSessionKey()
    {
        return $this->container['session_key'];
    }

    /**
     * Sets session_key
     *
     * @param string|null $session_key The Video SDK custom session ID.
     *
     * @return self
     */
    public function setSessionKey($session_key)
    {
        $this->container['session_key'] = $session_key;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Whether the meeting was created directly through Zoom or via an API request:  * If the meeting was created via an OAuth app, this field returns the OAuth app's name.  * If the meeting was created via JWT or the Zoom Web Portal, this returns the `Zoom` value.
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time The meeting's start date and time.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return string|null
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string|null $topic The meeting's topic.
     *
     * @return self
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets total_minutes
     *
     * @return int|null
     */
    public function getTotalMinutes()
    {
        return $this->container['total_minutes'];
    }

    /**
     * Sets total_minutes
     *
     * @param int|null $total_minutes The sum of meeting minutes from all meeting participants in the meeting.
     *
     * @return self
     */
    public function setTotalMinutes($total_minutes)
    {
        $this->container['total_minutes'] = $total_minutes;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type The meeting type:  * `1` — An instant meeting.  * `2` — A scheduled meeting.  * `3` — A recurring meeting with no fixed time.  * `4` — A [personal meeting room](https://support.zoom.us/hc/en-us/articles/201362843). * `8` — A recurring meeting with a fixed time.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user_email
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     *
     * @param string|null $user_email The user's email address.
     *
     * @return self
     */
    public function setUserEmail($user_email)
    {
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name The user's display name.
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid The meeting's universally unique identifier (UUID). Each meeting instance generates a meeting UUID.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets schedule_time
     *
     * @return string|null
     */
    public function getScheduleTime()
    {
        return $this->container['schedule_time'];
    }

    /**
     * Sets schedule_time
     *
     * @param string|null $schedule_time The meeting's scheduled date and time.
     *
     * @return self
     */
    public function setScheduleTime($schedule_time)
    {
        $this->container['schedule_time'] = $schedule_time;

        return $this;
    }

    /**
     * Gets join_waiting_room_time
     *
     * @return string|null
     */
    public function getJoinWaitingRoomTime()
    {
        return $this->container['join_waiting_room_time'];
    }

    /**
     * Sets join_waiting_room_time
     *
     * @param string|null $join_waiting_room_time The date and time at which the attendee joined the waiting room.
     *
     * @return self
     */
    public function setJoinWaitingRoomTime($join_waiting_room_time)
    {
        $this->container['join_waiting_room_time'] = $join_waiting_room_time;

        return $this;
    }

    /**
     * Gets join_time
     *
     * @return string|null
     */
    public function getJoinTime()
    {
        return $this->container['join_time'];
    }

    /**
     * Sets join_time
     *
     * @param string|null $join_time The date and time at which the attendee joined the meeting.
     *
     * @return self
     */
    public function setJoinTime($join_time)
    {
        $this->container['join_time'] = $join_time;

        return $this;
    }

    /**
     * Gets leave_time
     *
     * @return string|null
     */
    public function getLeaveTime()
    {
        return $this->container['leave_time'];
    }

    /**
     * Sets leave_time
     *
     * @param string|null $leave_time The date and time at which the attendee left the meeting.
     *
     * @return self
     */
    public function setLeaveTime($leave_time)
    {
        $this->container['leave_time'] = $leave_time;

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

