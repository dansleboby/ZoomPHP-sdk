<?php
/**
 * QOSParticipant
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
 * QOSParticipant Class Doc Comment
 *
 * @category Class
 * @description Information about the participant and their quality of service (QoS).
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QOSParticipant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QOSParticipant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'device' => 'string',
        'domain' => 'string',
        'harddisk_id' => 'string',
        'ip_address' => 'string',
        'join_time' => '\DateTime',
        'leave_time' => '\DateTime',
        'location' => 'string',
        'mac_addr' => 'string',
        'pc_name' => 'string',
        'user_id' => 'string',
        'user_name' => 'string',
        'user_qos' => '\Zoom\Api\Model\QOSParticipantUserQosInner[]',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'device' => null,
        'domain' => null,
        'harddisk_id' => null,
        'ip_address' => null,
        'join_time' => 'date-time',
        'leave_time' => 'date-time',
        'location' => null,
        'mac_addr' => null,
        'pc_name' => null,
        'user_id' => null,
        'user_name' => null,
        'user_qos' => null,
        'version' => null
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
        'id' => 'id',
        'device' => 'device',
        'domain' => 'domain',
        'harddisk_id' => 'harddisk_id',
        'ip_address' => 'ip_address',
        'join_time' => 'join_time',
        'leave_time' => 'leave_time',
        'location' => 'location',
        'mac_addr' => 'mac_addr',
        'pc_name' => 'pc_name',
        'user_id' => 'user_id',
        'user_name' => 'user_name',
        'user_qos' => 'user_qos',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'device' => 'setDevice',
        'domain' => 'setDomain',
        'harddisk_id' => 'setHarddiskId',
        'ip_address' => 'setIpAddress',
        'join_time' => 'setJoinTime',
        'leave_time' => 'setLeaveTime',
        'location' => 'setLocation',
        'mac_addr' => 'setMacAddr',
        'pc_name' => 'setPcName',
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'user_qos' => 'setUserQos',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'device' => 'getDevice',
        'domain' => 'getDomain',
        'harddisk_id' => 'getHarddiskId',
        'ip_address' => 'getIpAddress',
        'join_time' => 'getJoinTime',
        'leave_time' => 'getLeaveTime',
        'location' => 'getLocation',
        'mac_addr' => 'getMacAddr',
        'pc_name' => 'getPcName',
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'user_qos' => 'getUserQos',
        'version' => 'getVersion'
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

    public const DEVICE_PHONE = 'Phone';
    public const DEVICE_H_323_SIP = 'H.323/SIP';
    public const DEVICE_WINDOWS = 'Windows';
    public const DEVICE_MAC = 'Mac';
    public const DEVICE_I_OS = 'iOS';
    public const DEVICE_ANDROID = 'Android';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceAllowableValues()
    {
        return [
            self::DEVICE_PHONE,
            self::DEVICE_H_323_SIP,
            self::DEVICE_WINDOWS,
            self::DEVICE_MAC,
            self::DEVICE_I_OS,
            self::DEVICE_ANDROID,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['harddisk_id'] = $data['harddisk_id'] ?? null;
        $this->container['ip_address'] = $data['ip_address'] ?? null;
        $this->container['join_time'] = $data['join_time'] ?? null;
        $this->container['leave_time'] = $data['leave_time'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['mac_addr'] = $data['mac_addr'] ?? null;
        $this->container['pc_name'] = $data['pc_name'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['user_name'] = $data['user_name'] ?? null;
        $this->container['user_qos'] = $data['user_qos'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeviceAllowableValues();
        if (!is_null($this->container['device']) && !in_array($this->container['device'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'device', must be one of '%s'",
                $this->container['device'],
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
     * @param string|null $id The participant's universally unique ID. This value is the same as the participant's user ID if the participant joins the webinar by logging into Zoom. If the participant joins the webinar without logging into Zoom, this returns an empty value.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device The type of device the participant used to join the meeting:  * `Phone` — The participant joined via PSTN.  * `H.323/SIP` — The participant joined via an H.323 or SIP device.  * `Windows` — The participant joined via VoIP using a Windows device.  * `Mac` — The participant joined via VoIP using a Mac device.  * `iOS` — The participant joined via VoIP using an iOS device.  * `Android` — The participant joined via VoIP using an Android device.   **Note:** This response returns an empty string (`““`) value for any users who are **not** a part of the host's account (external users).
     *
     * @return self
     */
    public function setDevice($device)
    {
        $allowedValues = $this->getDeviceAllowableValues();
        if (!is_null($device) && !in_array($device, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'device', must be one of '%s'",
                    $device,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain The participant's PC domain.   **Note:** This response returns an empty string (`““`) value for any users who are **not** a part of the host's account (external users).
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets harddisk_id
     *
     * @return string|null
     */
    public function getHarddiskId()
    {
        return $this->container['harddisk_id'];
    }

    /**
     * Sets harddisk_id
     *
     * @param string|null $harddisk_id The participant's hard disk ID.   **Note:** This response returns an empty string (`““`) value for any users who are **not** a part of the host's account (external users).
     *
     * @return self
     */
    public function setHarddiskId($harddisk_id)
    {
        $this->container['harddisk_id'] = $harddisk_id;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string|null $ip_address The participant's IP address.
     *
     * @return self
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets join_time
     *
     * @return \DateTime|null
     */
    public function getJoinTime()
    {
        return $this->container['join_time'];
    }

    /**
     * Sets join_time
     *
     * @param \DateTime|null $join_time The time at which the participant joined the meeting.
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
     * @return \DateTime|null
     */
    public function getLeaveTime()
    {
        return $this->container['leave_time'];
    }

    /**
     * Sets leave_time
     *
     * @param \DateTime|null $leave_time The time at which the participant left the meeting.
     *
     * @return self
     */
    public function setLeaveTime($leave_time)
    {
        $this->container['leave_time'] = $leave_time;

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
     * @param string|null $location The participant's location.
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets mac_addr
     *
     * @return string|null
     */
    public function getMacAddr()
    {
        return $this->container['mac_addr'];
    }

    /**
     * Sets mac_addr
     *
     * @param string|null $mac_addr The participant's MAC address.   **Note:** This response returns an empty string (`““`) value for any users who are **not** a part of the host's account (external users).
     *
     * @return self
     */
    public function setMacAddr($mac_addr)
    {
        $this->container['mac_addr'] = $mac_addr;

        return $this;
    }

    /**
     * Gets pc_name
     *
     * @return string|null
     */
    public function getPcName()
    {
        return $this->container['pc_name'];
    }

    /**
     * Sets pc_name
     *
     * @param string|null $pc_name The participant's PC name.
     *
     * @return self
     */
    public function setPcName($pc_name)
    {
        $this->container['pc_name'] = $pc_name;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id The participant's ID. This value is assigned to a participant upon joining a meeting and is only valid for the meeting's duration.
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param string|null $user_name The participant's display name.
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets user_qos
     *
     * @return \Zoom\Api\Model\QOSParticipantUserQosInner[]|null
     */
    public function getUserQos()
    {
        return $this->container['user_qos'];
    }

    /**
     * Sets user_qos
     *
     * @param \Zoom\Api\Model\QOSParticipantUserQosInner[]|null $user_qos The participant's quality of service information.
     *
     * @return self
     */
    public function setUserQos($user_qos)
    {
        $this->container['user_qos'] = $user_qos;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version The participant's Zoom client version.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


