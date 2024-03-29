<?php
/**
 * MeetingCreate
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
 * MeetingCreate Class Doc Comment
 *
 * @category Class
 * @description The base meeting object.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MeetingCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MeetingCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agenda' => 'string',
        'default_password' => 'bool',
        'duration' => 'int',
        'password' => 'string',
        'pre_schedule' => 'bool',
        'recurrence' => '\Zoom\Api\Model\Recurrence',
        'schedule_for' => 'string',
        'settings' => '\Zoom\Api\Model\MeetingCreateSettings',
        'start_time' => '\DateTime',
        'template_id' => 'string',
        'timezone' => 'string',
        'topic' => 'string',
        'tracking_fields' => '\Zoom\Api\Model\MeetingCreateTrackingFieldsInner[]',
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
        'agenda' => null,
        'default_password' => null,
        'duration' => null,
        'password' => null,
        'pre_schedule' => null,
        'recurrence' => null,
        'schedule_for' => null,
        'settings' => null,
        'start_time' => 'date-time',
        'template_id' => null,
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
        'agenda' => 'agenda',
        'default_password' => 'default_password',
        'duration' => 'duration',
        'password' => 'password',
        'pre_schedule' => 'pre_schedule',
        'recurrence' => 'recurrence',
        'schedule_for' => 'schedule_for',
        'settings' => 'settings',
        'start_time' => 'start_time',
        'template_id' => 'template_id',
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
        'agenda' => 'setAgenda',
        'default_password' => 'setDefaultPassword',
        'duration' => 'setDuration',
        'password' => 'setPassword',
        'pre_schedule' => 'setPreSchedule',
        'recurrence' => 'setRecurrence',
        'schedule_for' => 'setScheduleFor',
        'settings' => 'setSettings',
        'start_time' => 'setStartTime',
        'template_id' => 'setTemplateId',
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
        'agenda' => 'getAgenda',
        'default_password' => 'getDefaultPassword',
        'duration' => 'getDuration',
        'password' => 'getPassword',
        'pre_schedule' => 'getPreSchedule',
        'recurrence' => 'getRecurrence',
        'schedule_for' => 'getScheduleFor',
        'settings' => 'getSettings',
        'start_time' => 'getStartTime',
        'template_id' => 'getTemplateId',
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
        $this->container['agenda'] = $data['agenda'] ?? null;
        $this->container['default_password'] = $data['default_password'] ?? false;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['pre_schedule'] = $data['pre_schedule'] ?? false;
        $this->container['recurrence'] = $data['recurrence'] ?? null;
        $this->container['schedule_for'] = $data['schedule_for'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['template_id'] = $data['template_id'] ?? null;
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

        if (!is_null($this->container['agenda']) && (mb_strlen($this->container['agenda']) > 2000)) {
            $invalidProperties[] = "invalid value for 'agenda', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 10)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 10.";
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
     * @param string|null $agenda The meeting's agenda. This value has a maximum length of 2,000 characters.
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        if (!is_null($agenda) && (mb_strlen($agenda) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $agenda when calling MeetingCreate., must be smaller than or equal to 2000.');
        }

        $this->container['agenda'] = $agenda;

        return $this;
    }

    /**
     * Gets default_password
     *
     * @return bool|null
     */
    public function getDefaultPassword()
    {
        return $this->container['default_password'];
    }

    /**
     * Sets default_password
     *
     * @param bool|null $default_password Whether to generate a default password using the user's settings. This value defaults to `false`.   If this value is `true` and the user has the PMI setting enabled with a password, then the user's meetings will use the PMI password. It will **not** use a default password.
     *
     * @return self
     */
    public function setDefaultPassword($default_password)
    {
        $this->container['default_password'] = $default_password;

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
     * @param int|null $duration The meeting's scheduled duration, in minutes. This field is only used for scheduled meetings (`2`).
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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
     * @param string|null $password The password required to join the meeting. By default, a password can **only** have a maximum length of 10 characters and only contain alphanumeric characters and the `@`, `-`, `_`, and `*` characters.  * If the account owner or administrator has configured [minimum passcode requirement settings](https://support.zoom.us/hc/en-us/articles/360033559832-Meeting-and-webinar-passwords#h_a427384b-e383-4f80-864d-794bf0a37604), the password **must** meet those requirements.  * If password requirements are enabled, use the [**Get user settings**](/docs/api-reference/zoom-api/methods#operation/userSettings) API or the [**Get account settings**](/docs/api-reference/zoom-api/ma#operation/accountSettings) API to get the requirements.
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (!is_null($password) && (mb_strlen($password) > 10)) {
            throw new \InvalidArgumentException('invalid length for $password when calling MeetingCreate., must be smaller than or equal to 10.');
        }

        $this->container['password'] = $password;

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
     * @param bool|null $pre_schedule Whether to create a prescheduled meeting via the [GSuite app](https://support.zoom.us/hc/en-us/articles/360020187492-Zoom-for-GSuite-add-on). This **only** supports the meeting `type` value of `2` (scheduled meetings) and `3` (recurring meetings with no fixed time):  * `true` — Create a prescheduled meeting.  * `false` — Create a regular meeting.
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
     * Gets schedule_for
     *
     * @return string|null
     */
    public function getScheduleFor()
    {
        return $this->container['schedule_for'];
    }

    /**
     * Sets schedule_for
     *
     * @param string|null $schedule_for The email address or user ID of the user to schedule a meeting for.
     *
     * @return self
     */
    public function setScheduleFor($schedule_for)
    {
        $this->container['schedule_for'] = $schedule_for;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Zoom\Api\Model\MeetingCreateSettings|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Zoom\Api\Model\MeetingCreateSettings|null $settings settings
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
     * @param \DateTime|null $start_time The meeting's start time. This field is only used for scheduled and/or recurring meetings with a fixed time. This supports local time and GMT formats.  * To set a meeting's start time in GMT, use the `yyyy-MM-ddTHH:mm:ssZ` date-time format. For example, `2020-03-31T12:02:00Z`.  * To set a meeting's start time using a specific timezone, use the `yyyy-MM-ddTHH:mm:ss` date-time format and specify the [timezone ID](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#timezones) in the `timezone` field. If you do not specify a timezone, the `timezone` value defaults to your Zoom account's timezone. You can also use `UTC` for the `timezone` value.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id The **account admin meeting template** ID with which to schedule a meeting using a [meeting template](https://support.zoom.us/hc/en-us/articles/360036559151-Meeting-templates). For a list of account admin-provided meeting templates, use the [**List meeting templates**](/docs/api-reference/zoom-api/methods#operation/listMeetingTemplates) API.  * At this time, this field **only** accepts account admin meeting template IDs.  * To enable the account admin meeting templates feature, [contact Zoom support](https://support.zoom.us/hc/en-us).
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

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
     * @param string|null $timezone The timezone to assign to the `start_time` value. This field is only used for scheduled meetings (`2`).  For a list of supported timezones and their format, refer to our [timezone list documentation](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#timezones).
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
     * Gets tracking_fields
     *
     * @return \Zoom\Api\Model\MeetingCreateTrackingFieldsInner[]|null
     */
    public function getTrackingFields()
    {
        return $this->container['tracking_fields'];
    }

    /**
     * Sets tracking_fields
     *
     * @param \Zoom\Api\Model\MeetingCreateTrackingFieldsInner[]|null $tracking_fields Information about the meeting's tracking fields.
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
     * @param int|null $type The type of meeting: * `1` — An instant meeting.  * `2` — A scheduled meeting.  * `3` — A recurring meeting with no fixed time.  * `8` — A recurring meeting with fixed time.
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


