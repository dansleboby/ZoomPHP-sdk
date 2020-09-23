<?php
/**
 * PhonePlan1
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
 * PhonePlan1 Class Doc Comment
 *
 * @category Class
 * @description Phone Plan Object
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PhonePlan1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PhonePlan_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'plan_base' => '\Zoom\Api\Model\PhonePlan1PlanBase',
        'plan_calling' => '\Zoom\Api\Model\PhonePlan1PlanCalling[]',
        'plan_number' => '\Zoom\Api\Model\PhonePlan1PlanNumber[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'plan_base' => null,
        'plan_calling' => null,
        'plan_number' => null
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
        'plan_base' => 'plan_base',
        'plan_calling' => 'plan_calling',
        'plan_number' => 'plan_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plan_base' => 'setPlanBase',
        'plan_calling' => 'setPlanCalling',
        'plan_number' => 'setPlanNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plan_base' => 'getPlanBase',
        'plan_calling' => 'getPlanCalling',
        'plan_number' => 'getPlanNumber'
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
        $this->container['plan_base'] = isset($data['plan_base']) ? $data['plan_base'] : null;
        $this->container['plan_calling'] = isset($data['plan_calling']) ? $data['plan_calling'] : null;
        $this->container['plan_number'] = isset($data['plan_number']) ? $data['plan_number'] : null;
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
     * Gets plan_base
     *
     * @return \Zoom\Api\Model\PhonePlan1PlanBase|null
     */
    public function getPlanBase()
    {
        return $this->container['plan_base'];
    }

    /**
     * Sets plan_base
     *
     * @param \Zoom\Api\Model\PhonePlan1PlanBase|null $plan_base plan_base
     *
     * @return $this
     */
    public function setPlanBase($plan_base)
    {
        $this->container['plan_base'] = $plan_base;

        return $this;
    }

    /**
     * Gets plan_calling
     *
     * @return \Zoom\Api\Model\PhonePlan1PlanCalling[]|null
     */
    public function getPlanCalling()
    {
        return $this->container['plan_calling'];
    }

    /**
     * Sets plan_calling
     *
     * @param \Zoom\Api\Model\PhonePlan1PlanCalling[]|null $plan_calling Additional phone calling plans.
     *
     * @return $this
     */
    public function setPlanCalling($plan_calling)
    {
        $this->container['plan_calling'] = $plan_calling;

        return $this;
    }

    /**
     * Gets plan_number
     *
     * @return \Zoom\Api\Model\PhonePlan1PlanNumber[]|null
     */
    public function getPlanNumber()
    {
        return $this->container['plan_number'];
    }

    /**
     * Sets plan_number
     *
     * @param \Zoom\Api\Model\PhonePlan1PlanNumber[]|null $plan_number Additional phone number plans.
     *
     * @return $this
     */
    public function setPlanNumber($plan_number)
    {
        $this->container['plan_number'] = $plan_number;

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


