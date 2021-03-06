<?php
/**
 * TSP
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
 * TSP Class Doc Comment
 *
 * @category Class
 * @description List of TSP accounts.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TSP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TSP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'conference_code' => 'string',
        'leader_pin' => 'string',
        'dial_in_numbers' => '\Zoom\Api\Model\UsersUserIdTspDialInNumbers[]',
        'tsp_bridge' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'conference_code' => null,
        'leader_pin' => null,
        'dial_in_numbers' => null,
        'tsp_bridge' => null
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
        'conference_code' => 'conference_code',
        'leader_pin' => 'leader_pin',
        'dial_in_numbers' => 'dial_in_numbers',
        'tsp_bridge' => 'tsp_bridge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conference_code' => 'setConferenceCode',
        'leader_pin' => 'setLeaderPin',
        'dial_in_numbers' => 'setDialInNumbers',
        'tsp_bridge' => 'setTspBridge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conference_code' => 'getConferenceCode',
        'leader_pin' => 'getLeaderPin',
        'dial_in_numbers' => 'getDialInNumbers',
        'tsp_bridge' => 'getTspBridge'
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

    const TSP_BRIDGE_US_TSP_TB = 'US_TSP_TB';
    const TSP_BRIDGE_EU_TSP_TB = 'EU_TSP_TB';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTspBridgeAllowableValues()
    {
        return [
            self::TSP_BRIDGE_US_TSP_TB,
            self::TSP_BRIDGE_EU_TSP_TB,
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
        $this->container['conference_code'] = isset($data['conference_code']) ? $data['conference_code'] : null;
        $this->container['leader_pin'] = isset($data['leader_pin']) ? $data['leader_pin'] : null;
        $this->container['dial_in_numbers'] = isset($data['dial_in_numbers']) ? $data['dial_in_numbers'] : null;
        $this->container['tsp_bridge'] = isset($data['tsp_bridge']) ? $data['tsp_bridge'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['conference_code'] === null) {
            $invalidProperties[] = "'conference_code' can't be null";
        }
        if ((mb_strlen($this->container['conference_code']) > 16)) {
            $invalidProperties[] = "invalid value for 'conference_code', the character length must be smaller than or equal to 16.";
        }

        if ((mb_strlen($this->container['conference_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'conference_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['leader_pin'] === null) {
            $invalidProperties[] = "'leader_pin' can't be null";
        }
        if ((mb_strlen($this->container['leader_pin']) > 16)) {
            $invalidProperties[] = "invalid value for 'leader_pin', the character length must be smaller than or equal to 16.";
        }

        if ((mb_strlen($this->container['leader_pin']) < 1)) {
            $invalidProperties[] = "invalid value for 'leader_pin', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getTspBridgeAllowableValues();
        if (!is_null($this->container['tsp_bridge']) && !in_array($this->container['tsp_bridge'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tsp_bridge', must be one of '%s'",
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
     * Gets conference_code
     *
     * @return string
     */
    public function getConferenceCode()
    {
        return $this->container['conference_code'];
    }

    /**
     * Sets conference_code
     *
     * @param string $conference_code Conference code: numeric value, length is less than 16.
     *
     * @return $this
     */
    public function setConferenceCode($conference_code)
    {
        if ((mb_strlen($conference_code) > 16)) {
            throw new \InvalidArgumentException('invalid length for $conference_code when calling TSP., must be smaller than or equal to 16.');
        }
        if ((mb_strlen($conference_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $conference_code when calling TSP., must be bigger than or equal to 1.');
        }

        $this->container['conference_code'] = $conference_code;

        return $this;
    }

    /**
     * Gets leader_pin
     *
     * @return string
     */
    public function getLeaderPin()
    {
        return $this->container['leader_pin'];
    }

    /**
     * Sets leader_pin
     *
     * @param string $leader_pin Leader PIN: numeric value, length is less than 16.
     *
     * @return $this
     */
    public function setLeaderPin($leader_pin)
    {
        if ((mb_strlen($leader_pin) > 16)) {
            throw new \InvalidArgumentException('invalid length for $leader_pin when calling TSP., must be smaller than or equal to 16.');
        }
        if ((mb_strlen($leader_pin) < 1)) {
            throw new \InvalidArgumentException('invalid length for $leader_pin when calling TSP., must be bigger than or equal to 1.');
        }

        $this->container['leader_pin'] = $leader_pin;

        return $this;
    }

    /**
     * Gets dial_in_numbers
     *
     * @return \Zoom\Api\Model\UsersUserIdTspDialInNumbers[]|null
     */
    public function getDialInNumbers()
    {
        return $this->container['dial_in_numbers'];
    }

    /**
     * Sets dial_in_numbers
     *
     * @param \Zoom\Api\Model\UsersUserIdTspDialInNumbers[]|null $dial_in_numbers List of dial in numbers.
     *
     * @return $this
     */
    public function setDialInNumbers($dial_in_numbers)
    {
        $this->container['dial_in_numbers'] = $dial_in_numbers;

        return $this;
    }

    /**
     * Gets tsp_bridge
     *
     * @return string|null
     */
    public function getTspBridge()
    {
        return $this->container['tsp_bridge'];
    }

    /**
     * Sets tsp_bridge
     *
     * @param string|null $tsp_bridge Telephony bridge
     *
     * @return $this
     */
    public function setTspBridge($tsp_bridge)
    {
        $allowedValues = $this->getTspBridgeAllowableValues();
        if (!is_null($tsp_bridge) && !in_array($tsp_bridge, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tsp_bridge', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tsp_bridge'] = $tsp_bridge;

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


