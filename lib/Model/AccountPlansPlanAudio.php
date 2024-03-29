<?php
/**
 * AccountPlansPlanAudio
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
 * AccountPlansPlanAudio Class Doc Comment
 *
 * @category Class
 * @description Information about the account&#39;s Audio Conferencing plan.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountPlansPlanAudio implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountPlans_plan_audio';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'callout_countries' => 'string',
        'ddi_numbers' => 'int',
        'premium_countries' => 'string',
        'tollfree_countries' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'callout_countries' => null,
        'ddi_numbers' => null,
        'premium_countries' => null,
        'tollfree_countries' => null,
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
        'callout_countries' => 'callout_countries',
        'ddi_numbers' => 'ddi_numbers',
        'premium_countries' => 'premium_countries',
        'tollfree_countries' => 'tollfree_countries',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callout_countries' => 'setCalloutCountries',
        'ddi_numbers' => 'setDdiNumbers',
        'premium_countries' => 'setPremiumCountries',
        'tollfree_countries' => 'setTollfreeCountries',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callout_countries' => 'getCalloutCountries',
        'ddi_numbers' => 'getDdiNumbers',
        'premium_countries' => 'getPremiumCountries',
        'tollfree_countries' => 'getTollfreeCountries',
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
        $this->container['callout_countries'] = $data['callout_countries'] ?? null;
        $this->container['ddi_numbers'] = $data['ddi_numbers'] ?? null;
        $this->container['premium_countries'] = $data['premium_countries'] ?? null;
        $this->container['tollfree_countries'] = $data['tollfree_countries'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets callout_countries
     *
     * @return string|null
     */
    public function getCalloutCountries()
    {
        return $this->container['callout_countries'];
    }

    /**
     * Sets callout_countries
     *
     * @param string|null $callout_countries A comma-separated list of the account's call-out countries.    For a list of values, refer to the `ID` field in the [TSP callout countries](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#tsp-countries) table.
     *
     * @return self
     */
    public function setCalloutCountries($callout_countries)
    {
        $this->container['callout_countries'] = $callout_countries;

        return $this;
    }

    /**
     * Gets ddi_numbers
     *
     * @return int|null
     */
    public function getDdiNumbers()
    {
        return $this->container['ddi_numbers'];
    }

    /**
     * Sets ddi_numbers
     *
     * @param int|null $ddi_numbers The account's dedicated dial-in (DDI) numbers.
     *
     * @return self
     */
    public function setDdiNumbers($ddi_numbers)
    {
        $this->container['ddi_numbers'] = $ddi_numbers;

        return $this;
    }

    /**
     * Gets premium_countries
     *
     * @return string|null
     */
    public function getPremiumCountries()
    {
        return $this->container['premium_countries'];
    }

    /**
     * Sets premium_countries
     *
     * @param string|null $premium_countries A comma-separated list of the account's premium countries.    For a list of values, refer to the `ID` field in the [Premium countries](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#premium) table.
     *
     * @return self
     */
    public function setPremiumCountries($premium_countries)
    {
        $this->container['premium_countries'] = $premium_countries;

        return $this;
    }

    /**
     * Gets tollfree_countries
     *
     * @return string|null
     */
    public function getTollfreeCountries()
    {
        return $this->container['tollfree_countries'];
    }

    /**
     * Sets tollfree_countries
     *
     * @param string|null $tollfree_countries A comma-separated list of the account's toll-free countries    For a list of values, refer to the `ID` field in the [Toll-free countries](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#toll-free) table.
     *
     * @return self
     */
    public function setTollfreeCountries($tollfree_countries)
    {
        $this->container['tollfree_countries'] = $tollfree_countries;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The [Audio Conferencing plan type](https://marketplace.zoom.us/docs/api-reference/other-references/plans#audio-conferencing-plans).
     *
     * @return self
     */
    public function setType($type)
    {
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


