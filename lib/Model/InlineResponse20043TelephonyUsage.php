<?php
/**
 * InlineResponse20043TelephonyUsage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applicatixons on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * InlineResponse20043TelephonyUsage Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20043TelephonyUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_43_telephony_usage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_id' => 'int',
        'phone_number' => 'string',
        'host_name' => 'string',
        'host_email' => 'string',
        'dept' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'duration' => 'int',
        'total' => 'float',
        'country_name' => 'string',
        'meeting_type' => 'string',
        'call_in_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'meeting_id' => 'int64',
        'phone_number' => null,
        'host_name' => null,
        'host_email' => null,
        'dept' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'duration' => null,
        'total' => null,
        'country_name' => null,
        'meeting_type' => null,
        'call_in_number' => null
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
        'meeting_id' => 'meeting_id',
        'phone_number' => 'phone_number',
        'host_name' => 'host_name',
        'host_email' => 'host_email',
        'dept' => 'dept',
        'start_time' => 'start_time',
        'end_time' => 'end_time',
        'duration' => 'duration',
        'total' => 'total',
        'country_name' => 'country_name',
        'meeting_type' => 'meeting_type',
        'call_in_number' => 'call_in_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_id' => 'setMeetingId',
        'phone_number' => 'setPhoneNumber',
        'host_name' => 'setHostName',
        'host_email' => 'setHostEmail',
        'dept' => 'setDept',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'duration' => 'setDuration',
        'total' => 'setTotal',
        'country_name' => 'setCountryName',
        'meeting_type' => 'setMeetingType',
        'call_in_number' => 'setCallInNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_id' => 'getMeetingId',
        'phone_number' => 'getPhoneNumber',
        'host_name' => 'getHostName',
        'host_email' => 'getHostEmail',
        'dept' => 'getDept',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'duration' => 'getDuration',
        'total' => 'getTotal',
        'country_name' => 'getCountryName',
        'meeting_type' => 'getMeetingType',
        'call_in_number' => 'getCallInNumber'
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
        $this->container['meeting_id'] = isset($data['meeting_id']) ? $data['meeting_id'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['host_name'] = isset($data['host_name']) ? $data['host_name'] : null;
        $this->container['host_email'] = isset($data['host_email']) ? $data['host_email'] : null;
        $this->container['dept'] = isset($data['dept']) ? $data['dept'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['country_name'] = isset($data['country_name']) ? $data['country_name'] : null;
        $this->container['meeting_type'] = isset($data['meeting_type']) ? $data['meeting_type'] : null;
        $this->container['call_in_number'] = isset($data['call_in_number']) ? $data['call_in_number'] : null;
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
     * Gets meeting_id
     *
     * @return int|null
     */
    public function getMeetingId()
    {
        return $this->container['meeting_id'];
    }

    /**
     * Sets meeting_id
     *
     * @param int|null $meeting_id [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \"**long**\" format(represented as int64 data type in JSON), also known as the meeting number.
     *
     * @return $this
     */
    public function setMeetingId($meeting_id)
    {
        $this->container['meeting_id'] = $meeting_id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number Telephone number.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets host_name
     *
     * @return string|null
     */
    public function getHostName()
    {
        return $this->container['host_name'];
    }

    /**
     * Sets host_name
     *
     * @param string|null $host_name User display name.
     *
     * @return $this
     */
    public function setHostName($host_name)
    {
        $this->container['host_name'] = $host_name;

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
     * @param string|null $host_email User email.
     *
     * @return $this
     */
    public function setHostEmail($host_email)
    {
        $this->container['host_email'] = $host_email;

        return $this;
    }

    /**
     * Gets dept
     *
     * @return string|null
     */
    public function getDept()
    {
        return $this->container['dept'];
    }

    /**
     * Sets dept
     *
     * @param string|null $dept User department.
     *
     * @return $this
     */
    public function setDept($dept)
    {
        $this->container['dept'] = $dept;

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
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

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
     * @param \DateTime|null $end_time Meeting end time.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

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
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total Total cost (USD) for Call Out. Calculated as plan rate by duration.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string|null $country_name Country name.
     *
     * @return $this
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets meeting_type
     *
     * @return string|null
     */
    public function getMeetingType()
    {
        return $this->container['meeting_type'];
    }

    /**
     * Sets meeting_type
     *
     * @param string|null $meeting_type Meeting type.
     *
     * @return $this
     */
    public function setMeetingType($meeting_type)
    {
        $this->container['meeting_type'] = $meeting_type;

        return $this;
    }

    /**
     * Gets call_in_number
     *
     * @return string|null
     */
    public function getCallInNumber()
    {
        return $this->container['call_in_number'];
    }

    /**
     * Sets call_in_number
     *
     * @param string|null $call_in_number Call-in number.
     *
     * @return $this
     */
    public function setCallInNumber($call_in_number)
    {
        $this->container['call_in_number'] = $call_in_number;

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


