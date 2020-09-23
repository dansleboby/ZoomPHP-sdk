<?php
/**
 * UserSettingsTSPSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Zoom\Api
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

namespace Zoom\Api\Model;

use \ArrayAccess;
use \Zoom\Api\ObjectSerializer;

/**
 * UserSettingsTSPSettings Class Doc Comment
 *
 * @category Class
 * @description Account Settings: TSP.
 * @package  Zoom\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserSettingsTSPSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User settings TSP settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'call_out' => 'bool',
        'call_out_countries' => 'object[]',
        'show_international_numbers_link' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'call_out' => null,
        'call_out_countries' => null,
        'show_international_numbers_link' => null
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
        'call_out' => 'call_out',
        'call_out_countries' => 'call_out_countries',
        'show_international_numbers_link' => 'show_international_numbers_link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_out' => 'setCallOut',
        'call_out_countries' => 'setCallOutCountries',
        'show_international_numbers_link' => 'setShowInternationalNumbersLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_out' => 'getCallOut',
        'call_out_countries' => 'getCallOutCountries',
        'show_international_numbers_link' => 'getShowInternationalNumbersLink'
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
        $this->container['call_out'] = isset($data['call_out']) ? $data['call_out'] : null;
        $this->container['call_out_countries'] = isset($data['call_out_countries']) ? $data['call_out_countries'] : null;
        $this->container['show_international_numbers_link'] = isset($data['show_international_numbers_link']) ? $data['show_international_numbers_link'] : null;
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
     * Gets call_out
     *
     * @return bool
     */
    public function getCallOut()
    {
        return $this->container['call_out'];
    }

    /**
     * Sets call_out
     *
     * @param bool $call_out Call Out
     *
     * @return $this
     */
    public function setCallOut($call_out)
    {
        $this->container['call_out'] = $call_out;

        return $this;
    }

    /**
     * Gets call_out_countries
     *
     * @return object[]
     */
    public function getCallOutCountries()
    {
        return $this->container['call_out_countries'];
    }

    /**
     * Sets call_out_countries
     *
     * @param object[] $call_out_countries Call Out Countries/Regions
     *
     * @return $this
     */
    public function setCallOutCountries($call_out_countries)
    {
        $this->container['call_out_countries'] = $call_out_countries;

        return $this;
    }

    /**
     * Gets show_international_numbers_link
     *
     * @return bool
     */
    public function getShowInternationalNumbersLink()
    {
        return $this->container['show_international_numbers_link'];
    }

    /**
     * Sets show_international_numbers_link
     *
     * @param bool $show_international_numbers_link Show international numbers link on the invitation email
     *
     * @return $this
     */
    public function setShowInternationalNumbersLink($show_international_numbers_link)
    {
        $this->container['show_international_numbers_link'] = $show_international_numbers_link;

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


