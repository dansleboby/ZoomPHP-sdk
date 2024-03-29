<?php
/**
 * MeetingCreate201Response
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
 * MeetingCreate201Response Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MeetingCreate201Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'meetingCreate_201_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assistant_id' => 'string',
        'host_email' => 'string',
        'id' => 'int',
        'registration_url' => 'string',
        'agenda' => 'string',
        'created_at' => '\DateTime',
        'duration' => 'int',
        'h323_password' => 'string',
        'join_url' => 'string',
        'occurrences' => '\Zoom\Api\Model\Occurrence[]',
        'password' => 'string',
        'pmi' => 'int',
        'pre_schedule' => 'bool',
        'recurrence' => '\Zoom\Api\Model\Recurrence',
        'settings' => '\Zoom\Api\Model\MeetingSettings',
        'start_time' => '\DateTime',
        'start_url' => 'string',
        'timezone' => 'string',
        'topic' => 'string',
        'tracking_fields' => '\Zoom\Api\Model\MeetingInfoTrackingFieldsInner[]',
        'type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assistant_id' => null,
        'host_email' => 'email',
        'id' => 'int64',
        'registration_url' => null,
        'agenda' => null,
        'created_at' => 'date-time',
        'duration' => null,
        'h323_password' => null,
        'join_url' => null,
        'occurrences' => null,
        'password' => null,
        'pmi' => 'int64',
        'pre_schedule' => null,
        'recurrence' => null,
        'settings' => null,
        'start_time' => 'date-time',
        'start_url' => null,
        'timezone' => null,
        'topic' => null,
        'tracking_fields' => null,
        'type' => null
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
        'assistant_id' => 'assistant_id',
        'host_email' => 'host_email',
        'id' => 'id',
        'registration_url' => 'registration_url',
        'agenda' => 'agenda',
        'created_at' => 'created_at',
        'duration' => 'duration',
        'h323_password' => 'h323_password',
        'join_url' => 'join_url',
        'occurrences' => 'occurrences',
        'password' => 'password',
        'pmi' => 'pmi',
        'pre_schedule' => 'pre_schedule',
        'recurrence' => 'recurrence',
        'settings' => 'settings',
        'start_time' => 'start_time',
        'start_url' => 'start_url',
        'timezone' => 'timezone',
        'topic' => 'topic',
        'tracking_fields' => 'tracking_fields',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assistant_id' => 'setAssistantId',
        'host_email' => 'setHostEmail',
        'id' => 'setId',
        'registration_url' => 'setRegistrationUrl',
        'agenda' => 'setAgenda',
        'created_at' => 'setCreatedAt',
        'duration' => 'setDuration',
        'h323_password' => 'setH323Password',
        'join_url' => 'setJoinUrl',
        'occurrences' => 'setOccurrences',
        'password' => 'setPassword',
        'pmi' => 'setPmi',
        'pre_schedule' => 'setPreSchedule',
        'recurrence' => 'setRecurrence',
        'settings' => 'setSettings',
        'start_time' => 'setStartTime',
        'start_url' => 'setStartUrl',
        'timezone' => 'setTimezone',
        'topic' => 'setTopic',
        'tracking_fields' => 'setTrackingFields',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assistant_id' => 'getAssistantId',
        'host_email' => 'getHostEmail',
        'id' => 'getId',
        'registration_url' => 'getRegistrationUrl',
        'agenda' => 'getAgenda',
        'created_at' => 'getCreatedAt',
        'duration' => 'getDuration',
        'h323_password' => 'getH323Password',
        'join_url' => 'getJoinUrl',
        'occurrences' => 'getOccurrences',
        'password' => 'getPassword',
        'pmi' => 'getPmi',
        'pre_schedule' => 'getPreSchedule',
        'recurrence' => 'getRecurrence',
        'settings' => 'getSettings',
        'start_time' => 'getStartTime',
        'start_url' => 'getStartUrl',
        'timezone' => 'getTimezone',
        'topic' => 'getTopic',
        'tracking_fields' => 'getTrackingFields',
        'type' => 'getType'
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
        $this->container['assistant_id'] = $data['assistant_id'] ?? null;
        $this->container['host_email'] = $data['host_email'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['registration_url'] = $data['registration_url'] ?? null;
        $this->container['agenda'] = $data['agenda'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['h323_password'] = $data['h323_password'] ?? null;
        $this->container['join_url'] = $data['join_url'] ?? null;
        $this->container['occurrences'] = $data['occurrences'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['pmi'] = $data['pmi'] ?? null;
        $this->container['pre_schedule'] = $data['pre_schedule'] ?? false;
        $this->container['recurrence'] = $data['recurrence'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['start_url'] = $data['start_url'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['tracking_fields'] = $data['tracking_fields'] ?? null;
        $this->container['type'] = $data['type'] ?? self::TYPE_2;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) > 200)) {
            $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 200.";
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
     * Gets assistant_id
     *
     * @return string|null
     */
    public function getAssistantId()
    {
        return $this->container['assistant_id'];
    }

    /**
     * Sets assistant_id
     *
     * @param string|null $assistant_id The ID of the user who scheduled this meeting on behalf of the host.
     *
     * @return self
     */
    public function setAssistantId($assistant_id)
    {
        $this->container['assistant_id'] = $assistant_id;

        return $this;
    }

    /**
     * Gets host_email
     *
     * @return string|null
     */
    public function getHostEmail()
    {
        return $this->container['host_email'];
    }

    /**
     * Sets host_email
     *
     * @param string|null $host_email Email address of the meeting host.
     *
     * @return self
     */
    public function setHostEmail($host_email)
    {
        $this->container['host_email'] = $host_email;

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
     * @param int|null $id [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \"**long**\" format(represented as int64 data type in JSON), also known as the meeting number.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets registration_url
     *
     * @return string|null
     */
    public function getRegistrationUrl()
    {
        return $this->container['registration_url'];
    }

    /**
     * Sets registration_url
     *
     * @param string|null $registration_url URL using which registrants can register for a meeting. This field is only returned for meetings that have enabled registration.
     *
     * @return self
     */
    public function setRegistrationUrl($registration_url)
    {
        $this->container['registration_url'] = $registration_url;

        return $this;
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
     * @param string|null $agenda Agenda
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
     * @param \DateTime|null $created_at The date and time at which this meeting was created.
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
     * Gets h323_password
     *
     * @return string|null
     */
    public function getH323Password()
    {
        return $this->container['h323_password'];
    }

    /**
     * Sets h323_password
     *
     * @param string|null $h323_password H.323/SIP room system password
     *
     * @return self
     */
    public function setH323Password($h323_password)
    {
        $this->container['h323_password'] = $h323_password;

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
     * @param string|null $join_url URL for participants to join the meeting. This URL should only be shared with users that you would like to invite for the meeting.
     *
     * @return self
     */
    public function setJoinUrl($join_url)
    {
        $this->container['join_url'] = $join_url;

        return $this;
    }

    /**
     * Gets occurrences
     *
     * @return \Zoom\Api\Model\Occurrence[]|null
     */
    public function getOccurrences()
    {
        return $this->container['occurrences'];
    }

    /**
     * Sets occurrences
     *
     * @param \Zoom\Api\Model\Occurrence[]|null $occurrences Array of occurrence objects.
     *
     * @return self
     */
    public function setOccurrences($occurrences)
    {
        $this->container['occurrences'] = $occurrences;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password Meeting password. Password may only contain the following characters: `[a-z A-Z 0-9 @ - _ * !]`  If \"Require a password when scheduling new meetings\" setting has been **enabled** **and** [locked](https://support.zoom.us/hc/en-us/articles/115005269866-Using-Tiered-Settings#locked) for the user, the password field will be autogenerated in the response even if it is not provided in the API request.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets pmi
     *
     * @return int|null
     */
    public function getPmi()
    {
        return $this->container['pmi'];
    }

    /**
     * Sets pmi
     *
     * @param int|null $pmi [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi). Only used for scheduled meetings and recurring meetings with no fixed time.
     *
     * @return self
     */
    public function setPmi($pmi)
    {
        $this->container['pmi'] = $pmi;

        return $this;
    }

    /**
     * Gets pre_schedule
     *
     * @return bool|null
     */
    public function getPreSchedule()
    {
        return $this->container['pre_schedule'];
    }

    /**
     * Sets pre_schedule
     *
     * @param bool|null $pre_schedule Whether the prescheduled meeting was created via the [GSuite app](https://support.zoom.us/hc/en-us/articles/360020187492-Zoom-for-GSuite-add-on). This **only** supports the meeting `type` value of `2` (scheduled meetings) and `3` (recurring meetings with no fixed time):  * `true` — A GSuite prescheduled meeting.  * `false` — A regular meeting.
     *
     * @return self
     */
    public function setPreSchedule($pre_schedule)
    {
        $this->container['pre_schedule'] = $pre_schedule;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return \Zoom\Api\Model\Recurrence|null
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \Zoom\Api\Model\Recurrence|null $recurrence recurrence
     *
     * @return self
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Zoom\Api\Model\MeetingSettings|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Zoom\Api\Model\MeetingSettings|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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
     * @param \DateTime|null $start_time Meeting start date-time in UTC/GMT. Example: \"2020-03-31T12:02:00Z\"
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets start_url
     *
     * @return string|null
     */
    public function getStartUrl()
    {
        return $this->container['start_url'];
    }

    /**
     * Sets start_url
     *
     * @param string|null $start_url URL to start the meeting. This URL should only be used by the host of the meeting and **should not be shared with anyone other than the host** of the meeting as anyone with this URL will be able to login to the Zoom Client as the host of the meeting.
     *
     * @return self
     */
    public function setStartUrl($start_url)
    {
        $this->container['start_url'] = $start_url;

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
     * @param string|null $timezone Timezone to format start_time
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
     * @param string|null $topic Meeting topic
     *
     * @return self
     */
    public function setTopic($topic)
    {
        if (!is_null($topic) && (mb_strlen($topic) > 200)) {
            throw new \InvalidArgumentException('invalid length for $topic when calling MeetingCreate201Response., must be smaller than or equal to 200.');
        }

        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets tracking_fields
     *
     * @return \Zoom\Api\Model\MeetingInfoTrackingFieldsInner[]|null
     */
    public function getTrackingFields()
    {
        return $this->container['tracking_fields'];
    }

    /**
     * Sets tracking_fields
     *
     * @param \Zoom\Api\Model\MeetingInfoTrackingFieldsInner[]|null $tracking_fields Tracking fields
     *
     * @return self
     */
    public function setTrackingFields($tracking_fields)
    {
        $this->container['tracking_fields'] = $tracking_fields;

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
     * @param int|null $type Meeting Type
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


