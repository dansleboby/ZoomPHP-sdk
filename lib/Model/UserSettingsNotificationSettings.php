<?php
/**
 * UserSettingsNotificationSettings
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
 * UserSettingsNotificationSettings Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserSettingsNotificationSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User settings Notification settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jbh_reminder' => 'bool',
        'cancel_meeting_reminder' => 'bool',
        'alternative_host_reminder' => 'bool',
        'schedule_for_reminder' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jbh_reminder' => null,
        'cancel_meeting_reminder' => null,
        'alternative_host_reminder' => null,
        'schedule_for_reminder' => null
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
        'jbh_reminder' => 'jbh_reminder',
        'cancel_meeting_reminder' => 'cancel_meeting_reminder',
        'alternative_host_reminder' => 'alternative_host_reminder',
        'schedule_for_reminder' => 'schedule_for_reminder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jbh_reminder' => 'setJbhReminder',
        'cancel_meeting_reminder' => 'setCancelMeetingReminder',
        'alternative_host_reminder' => 'setAlternativeHostReminder',
        'schedule_for_reminder' => 'setScheduleForReminder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jbh_reminder' => 'getJbhReminder',
        'cancel_meeting_reminder' => 'getCancelMeetingReminder',
        'alternative_host_reminder' => 'getAlternativeHostReminder',
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
        $this->container['jbh_reminder'] = isset($data['jbh_reminder']) ? $data['jbh_reminder'] : false;
        $this->container['cancel_meeting_reminder'] = isset($data['cancel_meeting_reminder']) ? $data['cancel_meeting_reminder'] : false;
        $this->container['alternative_host_reminder'] = isset($data['alternative_host_reminder']) ? $data['alternative_host_reminder'] : false;
        $this->container['schedule_for_reminder'] = isset($data['schedule_for_reminder']) ? $data['schedule_for_reminder'] : false;
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
     * Gets jbh_reminder
     *
     * @return bool
     */
    public function getJbhReminder()
    {
        return $this->container['jbh_reminder'];
    }

    /**
     * Sets jbh_reminder
     *
     * @param bool $jbh_reminder When attendees join meeting before host.
     *
     * @return $this
     */
    public function setJbhReminder($jbh_reminder)
    {
        $this->container['jbh_reminder'] = $jbh_reminder;

        return $this;
    }

    /**
     * Gets cancel_meeting_reminder
     *
     * @return bool
     */
    public function getCancelMeetingReminder()
    {
        return $this->container['cancel_meeting_reminder'];
    }

    /**
     * Sets cancel_meeting_reminder
     *
     * @param bool $cancel_meeting_reminder When a meeting is cancelled.
     *
     * @return $this
     */
    public function setCancelMeetingReminder($cancel_meeting_reminder)
    {
        $this->container['cancel_meeting_reminder'] = $cancel_meeting_reminder;

        return $this;
    }

    /**
     * Gets alternative_host_reminder
     *
     * @return bool
     */
    public function getAlternativeHostReminder()
    {
        return $this->container['alternative_host_reminder'];
    }

    /**
     * Sets alternative_host_reminder
     *
     * @param bool $alternative_host_reminder When an alternative host is set or removed from a meeting.
     *
     * @return $this
     */
    public function setAlternativeHostReminder($alternative_host_reminder)
    {
        $this->container['alternative_host_reminder'] = $alternative_host_reminder;

        return $this;
    }

    /**
     * Gets schedule_for_reminder
     *
     * @return bool
     */
    public function getScheduleForReminder()
    {
        return $this->container['schedule_for_reminder'];
    }

    /**
     * Sets schedule_for_reminder
     *
     * @param bool $schedule_for_reminder Notify the host there is a meeting is scheduled, rescheduled, or cancelled.
     *
     * @return $this
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


