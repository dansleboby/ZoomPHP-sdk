<?php
/**
 * GroupListAllOf1MeetingsInner
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
 * GroupListAllOf1MeetingsInner Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GroupListAllOf1MeetingsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Group_List_allOf_1_meetings_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agenda' => 'string',
        'created_at' => '\DateTime',
        'duration' => 'int',
        'host_id' => 'string',
        'id' => 'int',
        'join_url' => 'string',
        'pmi' => 'string',
        'start_time' => '\DateTime',
        'timezone' => 'string',
        'topic' => 'string',
        'type' => 'int',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agenda' => null,
        'created_at' => 'date-time',
        'duration' => null,
        'host_id' => null,
        'id' => 'int64',
        'join_url' => null,
        'pmi' => null,
        'start_time' => 'date-time',
        'timezone' => null,
        'topic' => null,
        'type' => null,
        'uuid' => null
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
        'agenda' => 'agenda',
        'created_at' => 'created_at',
        'duration' => 'duration',
        'host_id' => 'host_id',
        'id' => 'id',
        'join_url' => 'join_url',
        'pmi' => 'pmi',
        'start_time' => 'start_time',
        'timezone' => 'timezone',
        'topic' => 'topic',
        'type' => 'type',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agenda' => 'setAgenda',
        'created_at' => 'setCreatedAt',
        'duration' => 'setDuration',
        'host_id' => 'setHostId',
        'id' => 'setId',
        'join_url' => 'setJoinUrl',
        'pmi' => 'setPmi',
        'start_time' => 'setStartTime',
        'timezone' => 'setTimezone',
        'topic' => 'setTopic',
        'type' => 'setType',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agenda' => 'getAgenda',
        'created_at' => 'getCreatedAt',
        'duration' => 'getDuration',
        'host_id' => 'getHostId',
        'id' => 'getId',
        'join_url' => 'getJoinUrl',
        'pmi' => 'getPmi',
        'start_time' => 'getStartTime',
        'timezone' => 'getTimezone',
        'topic' => 'getTopic',
        'type' => 'getType',
        'uuid' => 'getUuid'
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
    public const TYPE_3 = 3;
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
            self::TYPE_3,
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
        $this->container['agenda'] = $data['agenda'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['host_id'] = $data['host_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['join_url'] = $data['join_url'] ?? null;
        $this->container['pmi'] = $data['pmi'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets agenda
     *
     * @return string|null
     */
    public function getAgenda()
    {
        return $this->container['agenda'];
    }

    /**
     * Sets agenda
     *
     * @param string|null $agenda Meeting description. The length of agenda gets truncated to 250 characters when you list all meetings for a user. To view the complete agenda of a meeting, retrieve details for a single meeting, use the [**Get a meeting**](/docs/api-reference/zoom-api/methods#operation/meeting) API.
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->container['agenda'] = $agenda;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Time of creation.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param int|null $duration Meeting duration.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets host_id
     *
     * @return string|null
     */
    public function getHostId()
    {
        return $this->container['host_id'];
    }

    /**
     * Sets host_id
     *
     * @param string|null $host_id ID of the user who is set as the host of the meeting.
     *
     * @return self
     */
    public function setHostId($host_id)
    {
        $this->container['host_id'] = $host_id;

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
     * @param int|null $id Meeting ID - also known as the meeting number in long (int64) format.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets join_url
     *
     * @return string|null
     */
    public function getJoinUrl()
    {
        return $this->container['join_url'];
    }

    /**
     * Sets join_url
     *
     * @param string|null $join_url URL using which participants can join a meeting.
     *
     * @return self
     */
    public function setJoinUrl($join_url)
    {
        $this->container['join_url'] = $join_url;

        return $this;
    }

    /**
     * Gets pmi
     *
     * @return string|null
     */
    public function getPmi()
    {
        return $this->container['pmi'];
    }

    /**
     * Sets pmi
     *
     * @param string|null $pmi [Personal meeting ID](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis/#understanding-personal-meeting-id-pmi). This field is only returned if PMI was used to schedule the meeting.
     *
     * @return self
     */
    public function setPmi($pmi)
    {
        $this->container['pmi'] = $pmi;

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
     * @param \DateTime|null $start_time Meeting start time.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

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
     * @param string|null $timezone Timezone to format the meeting start time.
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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
     * @param string|null $topic Meeting topic.
     *
     * @return self
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

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
     * @param int|null $type Meeting Types:<br>`1` - Instant meeting.<br>`2` - Scheduled meeting.<br>`3` - Recurring meeting with no fixed time.<br>`8` - Recurring meeting with fixed time.
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
     * @param string|null $uuid Unique Meeting ID. Each meeting instance will generate its own Meeting UUID.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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


