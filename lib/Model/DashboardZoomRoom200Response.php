<?php
/**
 * DashboardZoomRoom200Response
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
 * DashboardZoomRoom200Response Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DashboardZoomRoom200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'dashboardZoomRoom_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_type' => 'string',
        'calender_name' => 'string',
        'camera' => 'string',
        'device_ip' => 'string',
        'email' => 'string',
        'health' => 'string',
        'id' => 'string',
        'issues' => 'string[]',
        'last_start_time' => 'string',
        'location' => 'string',
        'microphone' => 'string',
        'room_name' => 'string',
        'speaker' => 'string',
        'status' => 'string',
        'live_meeting' => '\Zoom\Api\Model\MeetingMetric',
        'past_meetings' => '\Zoom\Api\Model\DashboardZoomRoom200ResponseAllOfPastMeetings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_type' => null,
        'calender_name' => null,
        'camera' => null,
        'device_ip' => null,
        'email' => null,
        'health' => null,
        'id' => null,
        'issues' => null,
        'last_start_time' => null,
        'location' => null,
        'microphone' => null,
        'room_name' => null,
        'speaker' => null,
        'status' => null,
        'live_meeting' => null,
        'past_meetings' => null
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
        'account_type' => 'account_type',
        'calender_name' => 'calender_name',
        'camera' => 'camera',
        'device_ip' => 'device_ip',
        'email' => 'email',
        'health' => 'health',
        'id' => 'id',
        'issues' => 'issues',
        'last_start_time' => 'last_start_time',
        'location' => 'location',
        'microphone' => 'microphone',
        'room_name' => 'room_name',
        'speaker' => 'speaker',
        'status' => 'status',
        'live_meeting' => 'live_meeting',
        'past_meetings' => 'past_meetings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_type' => 'setAccountType',
        'calender_name' => 'setCalenderName',
        'camera' => 'setCamera',
        'device_ip' => 'setDeviceIp',
        'email' => 'setEmail',
        'health' => 'setHealth',
        'id' => 'setId',
        'issues' => 'setIssues',
        'last_start_time' => 'setLastStartTime',
        'location' => 'setLocation',
        'microphone' => 'setMicrophone',
        'room_name' => 'setRoomName',
        'speaker' => 'setSpeaker',
        'status' => 'setStatus',
        'live_meeting' => 'setLiveMeeting',
        'past_meetings' => 'setPastMeetings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_type' => 'getAccountType',
        'calender_name' => 'getCalenderName',
        'camera' => 'getCamera',
        'device_ip' => 'getDeviceIp',
        'email' => 'getEmail',
        'health' => 'getHealth',
        'id' => 'getId',
        'issues' => 'getIssues',
        'last_start_time' => 'getLastStartTime',
        'location' => 'getLocation',
        'microphone' => 'getMicrophone',
        'room_name' => 'getRoomName',
        'speaker' => 'getSpeaker',
        'status' => 'getStatus',
        'live_meeting' => 'getLiveMeeting',
        'past_meetings' => 'getPastMeetings'
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
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['calender_name'] = $data['calender_name'] ?? null;
        $this->container['camera'] = $data['camera'] ?? null;
        $this->container['device_ip'] = $data['device_ip'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['health'] = $data['health'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['issues'] = $data['issues'] ?? null;
        $this->container['last_start_time'] = $data['last_start_time'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['microphone'] = $data['microphone'] ?? null;
        $this->container['room_name'] = $data['room_name'] ?? null;
        $this->container['speaker'] = $data['speaker'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['live_meeting'] = $data['live_meeting'] ?? null;
        $this->container['past_meetings'] = $data['past_meetings'] ?? null;
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
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type Zoom room email type.
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets calender_name
     *
     * @return string|null
     */
    public function getCalenderName()
    {
        return $this->container['calender_name'];
    }

    /**
     * Sets calender_name
     *
     * @param string|null $calender_name Zoom calendar name.
     *
     * @return self
     */
    public function setCalenderName($calender_name)
    {
        $this->container['calender_name'] = $calender_name;

        return $this;
    }

    /**
     * Gets camera
     *
     * @return string|null
     */
    public function getCamera()
    {
        return $this->container['camera'];
    }

    /**
     * Sets camera
     *
     * @param string|null $camera Zoom Room camera.  **Note:** This response returns an empty string (`““`) value for any users who are **not** a part of the host's account (external users).
     *
     * @return self
     */
    public function setCamera($camera)
    {
        $this->container['camera'] = $camera;

        return $this;
    }

    /**
     * Gets device_ip
     *
     * @return string|null
     */
    public function getDeviceIp()
    {
        return $this->container['device_ip'];
    }

    /**
     * Sets device_ip
     *
     * @param string|null $device_ip Zoom room device IP.
     *
     * @return self
     */
    public function setDeviceIp($device_ip)
    {
        $this->container['device_ip'] = $device_ip;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Zoom room email.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets health
     *
     * @return string|null
     */
    public function getHealth()
    {
        return $this->container['health'];
    }

    /**
     * Sets health
     *
     * @param string|null $health Health of the Zoom Room.
     *
     * @return self
     */
    public function setHealth($health)
    {
        $this->container['health'] = $health;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Zoom room ID.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issues
     *
     * @return string[]|null
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param string[]|null $issues Issues encountered by the Zoom Room.
     *
     * @return self
     */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;

        return $this;
    }

    /**
     * Gets last_start_time
     *
     * @return string|null
     */
    public function getLastStartTime()
    {
        return $this->container['last_start_time'];
    }

    /**
     * Sets last_start_time
     *
     * @param string|null $last_start_time Zoom room last start time.
     *
     * @return self
     */
    public function setLastStartTime($last_start_time)
    {
        $this->container['last_start_time'] = $last_start_time;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location Zoom room location.
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets microphone
     *
     * @return string|null
     */
    public function getMicrophone()
    {
        return $this->container['microphone'];
    }

    /**
     * Sets microphone
     *
     * @param string|null $microphone Zoom Room microphone.  **Note:** This response returns an empty string (`““`) value for any users who are **not** a part of the host's account (external users).
     *
     * @return self
     */
    public function setMicrophone($microphone)
    {
        $this->container['microphone'] = $microphone;

        return $this;
    }

    /**
     * Gets room_name
     *
     * @return string|null
     */
    public function getRoomName()
    {
        return $this->container['room_name'];
    }

    /**
     * Sets room_name
     *
     * @param string|null $room_name Zoom room name.
     *
     * @return self
     */
    public function setRoomName($room_name)
    {
        $this->container['room_name'] = $room_name;

        return $this;
    }

    /**
     * Gets speaker
     *
     * @return string|null
     */
    public function getSpeaker()
    {
        return $this->container['speaker'];
    }

    /**
     * Sets speaker
     *
     * @param string|null $speaker Zoom Room speaker.  **Note:** This response returns an empty string (`““`) value for any users who are **not** a part of the host's account (external users).
     *
     * @return self
     */
    public function setSpeaker($speaker)
    {
        $this->container['speaker'] = $speaker;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Zoom room status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets live_meeting
     *
     * @return \Zoom\Api\Model\MeetingMetric|null
     */
    public function getLiveMeeting()
    {
        return $this->container['live_meeting'];
    }

    /**
     * Sets live_meeting
     *
     * @param \Zoom\Api\Model\MeetingMetric|null $live_meeting live_meeting
     *
     * @return self
     */
    public function setLiveMeeting($live_meeting)
    {
        $this->container['live_meeting'] = $live_meeting;

        return $this;
    }

    /**
     * Gets past_meetings
     *
     * @return \Zoom\Api\Model\DashboardZoomRoom200ResponseAllOfPastMeetings|null
     */
    public function getPastMeetings()
    {
        return $this->container['past_meetings'];
    }

    /**
     * Sets past_meetings
     *
     * @param \Zoom\Api\Model\DashboardZoomRoom200ResponseAllOfPastMeetings|null $past_meetings past_meetings
     *
     * @return self
     */
    public function setPastMeetings($past_meetings)
    {
        $this->container['past_meetings'] = $past_meetings;

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

