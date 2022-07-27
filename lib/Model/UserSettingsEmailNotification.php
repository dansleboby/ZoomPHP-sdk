<?php
/**
 * UserSettingsEmailNotification
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * UserSettingsEmailNotification Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserSettingsEmailNotification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserSettingsEmailNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alternative_host_reminder' => 'bool',
        'cancel_meeting_reminder' => 'bool',
        'cloud_recording_available_reminder' => 'bool',
        'jbh_reminder' => 'bool',
        'recording_available_reminder_alternative_hosts' => 'bool',
        'recording_available_reminder_schedulers' => 'bool',
        'schedule_for_reminder' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alternative_host_reminder' => null,
        'cancel_meeting_reminder' => null,
        'cloud_recording_available_reminder' => null,
        'jbh_reminder' => null,
        'recording_available_reminder_alternative_hosts' => null,
        'recording_available_reminder_schedulers' => null,
        'schedule_for_reminder' => null
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
        'alternative_host_reminder' => 'alternative_host_reminder',
        'cancel_meeting_reminder' => 'cancel_meeting_reminder',
        'cloud_recording_available_reminder' => 'cloud_recording_available_reminder',
        'jbh_reminder' => 'jbh_reminder',
        'recording_available_reminder_alternative_hosts' => 'recording_available_reminder_alternative_hosts',
        'recording_available_reminder_schedulers' => 'recording_available_reminder_schedulers',
        'schedule_for_reminder' => 'schedule_for_reminder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alternative_host_reminder' => 'setAlternativeHostReminder',
        'cancel_meeting_reminder' => 'setCancelMeetingReminder',
        'cloud_recording_available_reminder' => 'setCloudRecordingAvailableReminder',
        'jbh_reminder' => 'setJbhReminder',
        'recording_available_reminder_alternative_hosts' => 'setRecordingAvailableReminderAlternativeHosts',
        'recording_available_reminder_schedulers' => 'setRecordingAvailableReminderSchedulers',
        'schedule_for_reminder' => 'setScheduleForReminder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alternative_host_reminder' => 'getAlternativeHostReminder',
        'cancel_meeting_reminder' => 'getCancelMeetingReminder',
        'cloud_recording_available_reminder' => 'getCloudRecordingAvailableReminder',
        'jbh_reminder' => 'getJbhReminder',
        'recording_available_reminder_alternative_hosts' => 'getRecordingAvailableReminderAlternativeHosts',
        'recording_available_reminder_schedulers' => 'getRecordingAvailableReminderSchedulers',
        'schedule_for_reminder' => 'getScheduleForReminder'
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
        $this->container['alternative_host_reminder'] = $data['alternative_host_reminder'] ?? false;
        $this->container['cancel_meeting_reminder'] = $data['cancel_meeting_reminder'] ?? false;
        $this->container['cloud_recording_available_reminder'] = $data['cloud_recording_available_reminder'] ?? null;
        $this->container['jbh_reminder'] = $data['jbh_reminder'] ?? false;
        $this->container['recording_available_reminder_alternative_hosts'] = $data['recording_available_reminder_alternative_hosts'] ?? null;
        $this->container['recording_available_reminder_schedulers'] = $data['recording_available_reminder_schedulers'] ?? null;
        $this->container['schedule_for_reminder'] = $data['schedule_for_reminder'] ?? false;
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
     * Gets alternative_host_reminder
     *
     * @return bool|null
     */
    public function getAlternativeHostReminder()
    {
        return $this->container['alternative_host_reminder'];
    }

    /**
     * Sets alternative_host_reminder
     *
     * @param bool|null $alternative_host_reminder When an alternative host is set or removed from a meeting.
     *
     * @return self
     */
    public function setAlternativeHostReminder($alternative_host_reminder)
    {
        $this->container['alternative_host_reminder'] = $alternative_host_reminder;

        return $this;
    }

    /**
     * Gets cancel_meeting_reminder
     *
     * @return bool|null
     */
    public function getCancelMeetingReminder()
    {
        return $this->container['cancel_meeting_reminder'];
    }

    /**
     * Sets cancel_meeting_reminder
     *
     * @param bool|null $cancel_meeting_reminder When a meeting is cancelled.
     *
     * @return self
     */
    public function setCancelMeetingReminder($cancel_meeting_reminder)
    {
        $this->container['cancel_meeting_reminder'] = $cancel_meeting_reminder;

        return $this;
    }

    /**
     * Gets cloud_recording_available_reminder
     *
     * @return bool|null
     */
    public function getCloudRecordingAvailableReminder()
    {
        return $this->container['cloud_recording_available_reminder'];
    }

    /**
     * Sets cloud_recording_available_reminder
     *
     * @param bool|null $cloud_recording_available_reminder Whether to notify the host when a cloud recording is available.
     *
     * @return self
     */
    public function setCloudRecordingAvailableReminder($cloud_recording_available_reminder)
    {
        $this->container['cloud_recording_available_reminder'] = $cloud_recording_available_reminder;

        return $this;
    }

    /**
     * Gets jbh_reminder
     *
     * @return bool|null
     */
    public function getJbhReminder()
    {
        return $this->container['jbh_reminder'];
    }

    /**
     * Sets jbh_reminder
     *
     * @param bool|null $jbh_reminder When attendees join meeting before host.
     *
     * @return self
     */
    public function setJbhReminder($jbh_reminder)
    {
        $this->container['jbh_reminder'] = $jbh_reminder;

        return $this;
    }

    /**
     * Gets recording_available_reminder_alternative_hosts
     *
     * @return bool|null
     */
    public function getRecordingAvailableReminderAlternativeHosts()
    {
        return $this->container['recording_available_reminder_alternative_hosts'];
    }

    /**
     * Sets recording_available_reminder_alternative_hosts
     *
     * @param bool|null $recording_available_reminder_alternative_hosts Whether to notify any alternative hosts when a cloud recording is available.
     *
     * @return self
     */
    public function setRecordingAvailableReminderAlternativeHosts($recording_available_reminder_alternative_hosts)
    {
        $this->container['recording_available_reminder_alternative_hosts'] = $recording_available_reminder_alternative_hosts;

        return $this;
    }

    /**
     * Gets recording_available_reminder_schedulers
     *
     * @return bool|null
     */
    public function getRecordingAvailableReminderSchedulers()
    {
        return $this->container['recording_available_reminder_schedulers'];
    }

    /**
     * Sets recording_available_reminder_schedulers
     *
     * @param bool|null $recording_available_reminder_schedulers Whether to notify the person who scheduled the meeting or webinar for the host when a cloud recording is available.
     *
     * @return self
     */
    public function setRecordingAvailableReminderSchedulers($recording_available_reminder_schedulers)
    {
        $this->container['recording_available_reminder_schedulers'] = $recording_available_reminder_schedulers;

        return $this;
    }

    /**
     * Gets schedule_for_reminder
     *
     * @return bool|null
     */
    public function getScheduleForReminder()
    {
        return $this->container['schedule_for_reminder'];
    }

    /**
     * Sets schedule_for_reminder
     *
     * @param bool|null $schedule_for_reminder Notify the host there is a meeting is scheduled, rescheduled, or cancelled.
     *
     * @return self
     */
    public function setScheduleForReminder($schedule_for_reminder)
    {
        $this->container['schedule_for_reminder'] = $schedule_for_reminder;

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


