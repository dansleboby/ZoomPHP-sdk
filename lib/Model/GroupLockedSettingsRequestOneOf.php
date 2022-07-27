<?php
/**
 * GroupLockedSettingsRequestOneOf
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
 * GroupLockedSettingsRequestOneOf Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GroupLockedSettingsRequestOneOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'groupLockedSettings_request_oneOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_conferencing' => '\Zoom\Api\Model\GroupLockedSettingsRequestOneOfAudioConferencing',
        'email_notification' => '\Zoom\Api\Model\GroupLockedSettingsRequestOneOfEmailNotification',
        'in_meeting' => '\Zoom\Api\Model\GroupLockedSettingsRequestOneOfInMeeting',
        'other_options' => '\Zoom\Api\Model\GetGroupLockSettings200ResponseOneOfOtherOptions',
        'recording' => '\Zoom\Api\Model\GroupLockedSettingsRequestOneOfRecording',
        'schedule_meeting' => '\Zoom\Api\Model\GroupLockedSettingsRequestOneOfScheduleMeeting',
        'telephony' => '\Zoom\Api\Model\GetGroupLockSettings200ResponseOneOfTelephony'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_conferencing' => null,
        'email_notification' => null,
        'in_meeting' => null,
        'other_options' => null,
        'recording' => null,
        'schedule_meeting' => null,
        'telephony' => null
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
        'audio_conferencing' => 'audio_conferencing',
        'email_notification' => 'email_notification',
        'in_meeting' => 'in_meeting',
        'other_options' => 'other_options',
        'recording' => 'recording',
        'schedule_meeting' => 'schedule_meeting',
        'telephony' => 'telephony'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_conferencing' => 'setAudioConferencing',
        'email_notification' => 'setEmailNotification',
        'in_meeting' => 'setInMeeting',
        'other_options' => 'setOtherOptions',
        'recording' => 'setRecording',
        'schedule_meeting' => 'setScheduleMeeting',
        'telephony' => 'setTelephony'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_conferencing' => 'getAudioConferencing',
        'email_notification' => 'getEmailNotification',
        'in_meeting' => 'getInMeeting',
        'other_options' => 'getOtherOptions',
        'recording' => 'getRecording',
        'schedule_meeting' => 'getScheduleMeeting',
        'telephony' => 'getTelephony'
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
        $this->container['audio_conferencing'] = $data['audio_conferencing'] ?? null;
        $this->container['email_notification'] = $data['email_notification'] ?? null;
        $this->container['in_meeting'] = $data['in_meeting'] ?? null;
        $this->container['other_options'] = $data['other_options'] ?? null;
        $this->container['recording'] = $data['recording'] ?? null;
        $this->container['schedule_meeting'] = $data['schedule_meeting'] ?? null;
        $this->container['telephony'] = $data['telephony'] ?? null;
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
     * Gets audio_conferencing
     *
     * @return \Zoom\Api\Model\GroupLockedSettingsRequestOneOfAudioConferencing|null
     */
    public function getAudioConferencing()
    {
        return $this->container['audio_conferencing'];
    }

    /**
     * Sets audio_conferencing
     *
     * @param \Zoom\Api\Model\GroupLockedSettingsRequestOneOfAudioConferencing|null $audio_conferencing audio_conferencing
     *
     * @return self
     */
    public function setAudioConferencing($audio_conferencing)
    {
        $this->container['audio_conferencing'] = $audio_conferencing;

        return $this;
    }

    /**
     * Gets email_notification
     *
     * @return \Zoom\Api\Model\GroupLockedSettingsRequestOneOfEmailNotification|null
     */
    public function getEmailNotification()
    {
        return $this->container['email_notification'];
    }

    /**
     * Sets email_notification
     *
     * @param \Zoom\Api\Model\GroupLockedSettingsRequestOneOfEmailNotification|null $email_notification email_notification
     *
     * @return self
     */
    public function setEmailNotification($email_notification)
    {
        $this->container['email_notification'] = $email_notification;

        return $this;
    }

    /**
     * Gets in_meeting
     *
     * @return \Zoom\Api\Model\GroupLockedSettingsRequestOneOfInMeeting|null
     */
    public function getInMeeting()
    {
        return $this->container['in_meeting'];
    }

    /**
     * Sets in_meeting
     *
     * @param \Zoom\Api\Model\GroupLockedSettingsRequestOneOfInMeeting|null $in_meeting in_meeting
     *
     * @return self
     */
    public function setInMeeting($in_meeting)
    {
        $this->container['in_meeting'] = $in_meeting;

        return $this;
    }

    /**
     * Gets other_options
     *
     * @return \Zoom\Api\Model\GetGroupLockSettings200ResponseOneOfOtherOptions|null
     */
    public function getOtherOptions()
    {
        return $this->container['other_options'];
    }

    /**
     * Sets other_options
     *
     * @param \Zoom\Api\Model\GetGroupLockSettings200ResponseOneOfOtherOptions|null $other_options other_options
     *
     * @return self
     */
    public function setOtherOptions($other_options)
    {
        $this->container['other_options'] = $other_options;

        return $this;
    }

    /**
     * Gets recording
     *
     * @return \Zoom\Api\Model\GroupLockedSettingsRequestOneOfRecording|null
     */
    public function getRecording()
    {
        return $this->container['recording'];
    }

    /**
     * Sets recording
     *
     * @param \Zoom\Api\Model\GroupLockedSettingsRequestOneOfRecording|null $recording recording
     *
     * @return self
     */
    public function setRecording($recording)
    {
        $this->container['recording'] = $recording;

        return $this;
    }

    /**
     * Gets schedule_meeting
     *
     * @return \Zoom\Api\Model\GroupLockedSettingsRequestOneOfScheduleMeeting|null
     */
    public function getScheduleMeeting()
    {
        return $this->container['schedule_meeting'];
    }

    /**
     * Sets schedule_meeting
     *
     * @param \Zoom\Api\Model\GroupLockedSettingsRequestOneOfScheduleMeeting|null $schedule_meeting schedule_meeting
     *
     * @return self
     */
    public function setScheduleMeeting($schedule_meeting)
    {
        $this->container['schedule_meeting'] = $schedule_meeting;

        return $this;
    }

    /**
     * Gets telephony
     *
     * @return \Zoom\Api\Model\GetGroupLockSettings200ResponseOneOfTelephony|null
     */
    public function getTelephony()
    {
        return $this->container['telephony'];
    }

    /**
     * Sets telephony
     *
     * @param \Zoom\Api\Model\GetGroupLockSettings200ResponseOneOfTelephony|null $telephony telephony
     *
     * @return self
     */
    public function setTelephony($telephony)
    {
        $this->container['telephony'] = $telephony;

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


