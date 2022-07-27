<?php
/**
 * GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCall
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
 * GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCall Class Doc Comment
 *
 * @category Class
 * @description The group&#39;s [**Toll-free and Fee-based Toll Call**](https://support.zoom.us/hc/en-us/articles/360060950711-Enabling-Toll-free-and-Fee-based-Toll-Call#h_01F51844DRCX3K7BRTMZ40381R) settings.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCall implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupSettingsAudioConference_toll_free_and_fee_based_toll_call';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_webinar_attendees_dial' => 'bool',
        'enable' => 'bool',
        'numbers' => '\Zoom\Api\Model\GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCallNumbersInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_webinar_attendees_dial' => null,
        'enable' => null,
        'numbers' => null
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
        'allow_webinar_attendees_dial' => 'allow_webinar_attendees_dial',
        'enable' => 'enable',
        'numbers' => 'numbers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_webinar_attendees_dial' => 'setAllowWebinarAttendeesDial',
        'enable' => 'setEnable',
        'numbers' => 'setNumbers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_webinar_attendees_dial' => 'getAllowWebinarAttendeesDial',
        'enable' => 'getEnable',
        'numbers' => 'getNumbers'
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
        $this->container['allow_webinar_attendees_dial'] = $data['allow_webinar_attendees_dial'] ?? null;
        $this->container['enable'] = $data['enable'] ?? null;
        $this->container['numbers'] = $data['numbers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['numbers']) && (count($this->container['numbers']) > 100)) {
            $invalidProperties[] = "invalid value for 'numbers', number of items must be less than or equal to 100.";
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
     * Gets allow_webinar_attendees_dial
     *
     * @return bool|null
     */
    public function getAllowWebinarAttendeesDial()
    {
        return $this->container['allow_webinar_attendees_dial'];
    }

    /**
     * Sets allow_webinar_attendees_dial
     *
     * @param bool|null $allow_webinar_attendees_dial Whether webinar attendees can dial in through the account's **Toll-free and Fee-based Toll Call** phone numbers. This feature is only available in version 5.2.2 and higher.
     *
     * @return self
     */
    public function setAllowWebinarAttendeesDial($allow_webinar_attendees_dial)
    {
        $this->container['allow_webinar_attendees_dial'] = $allow_webinar_attendees_dial;

        return $this;
    }

    /**
     * Gets enable
     *
     * @return bool|null
     */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
     * Sets enable
     *
     * @param bool|null $enable Whether the group has the [**Toll-free and Fee-based Toll Call**](https://support.zoom.us/hc/en-us/articles/360060950711-Enabling-Toll-free-and-Fee-based-Toll-Call#h_01F51844DRCX3K7BRTMZ40381R) setting enabled.
     *
     * @return self
     */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;

        return $this;
    }

    /**
     * Gets numbers
     *
     * @return \Zoom\Api\Model\GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCallNumbersInner[]|null
     */
    public function getNumbers()
    {
        return $this->container['numbers'];
    }

    /**
     * Sets numbers
     *
     * @param \Zoom\Api\Model\GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCallNumbersInner[]|null $numbers The group's **Toll-free and Fee-based Toll Call** phone number information.
     *
     * @return self
     */
    public function setNumbers($numbers)
    {

        if (!is_null($numbers) && (count($numbers) > 100)) {
            throw new \InvalidArgumentException('invalid value for $numbers when calling GroupSettingsAudioConferenceTollFreeAndFeeBasedTollCall., number of items must be less than or equal to 100.');
        }
        $this->container['numbers'] = $numbers;

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


