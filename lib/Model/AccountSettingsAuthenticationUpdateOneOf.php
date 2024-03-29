<?php
/**
 * AccountSettingsAuthenticationUpdateOneOf
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
 * AccountSettingsAuthenticationUpdateOneOf Class Doc Comment
 *
 * @category Class
 * @description Set/ update [authentication profile](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars).&lt;br&gt;&lt;br&gt; The authentication profile **must first be set at the account level via the account settings**, and later can be disabled after enabling on the preferred level - i.e. user level using user settings or at group level via group settings  (if you do not want the settings to be enabled on the entire account).
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountSettingsAuthenticationUpdateOneOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountSettingsAuthenticationUpdate_oneOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_authentication_exception' => 'bool',
        'authentication_option' => '\Zoom\Api\Model\AccountSettingsAuthenticationUpdateOneOfAuthenticationOption',
        'meeting_authentication' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_authentication_exception' => null,
        'authentication_option' => null,
        'meeting_authentication' => null
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
        'allow_authentication_exception' => 'allow_authentication_exception',
        'authentication_option' => 'authentication_option',
        'meeting_authentication' => 'meeting_authentication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_authentication_exception' => 'setAllowAuthenticationException',
        'authentication_option' => 'setAuthenticationOption',
        'meeting_authentication' => 'setMeetingAuthentication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_authentication_exception' => 'getAllowAuthenticationException',
        'authentication_option' => 'getAuthenticationOption',
        'meeting_authentication' => 'getMeetingAuthentication'
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
        $this->container['allow_authentication_exception'] = $data['allow_authentication_exception'] ?? null;
        $this->container['authentication_option'] = $data['authentication_option'] ?? null;
        $this->container['meeting_authentication'] = $data['meeting_authentication'] ?? null;
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
     * Gets allow_authentication_exception
     *
     * @return bool|null
     */
    public function getAllowAuthenticationException()
    {
        return $this->container['allow_authentication_exception'];
    }

    /**
     * Sets allow_authentication_exception
     *
     * @param bool|null $allow_authentication_exception Whether to enable the [**Allow authentication exception**](https://support.zoom.us/hc/en-us/articles/360037117472#h_01F13A9N1FQFNVESC9C21NRHXY) setting. This lets hosts invite users who can bypass authentication.
     *
     * @return self
     */
    public function setAllowAuthenticationException($allow_authentication_exception)
    {
        $this->container['allow_authentication_exception'] = $allow_authentication_exception;

        return $this;
    }

    /**
     * Gets authentication_option
     *
     * @return \Zoom\Api\Model\AccountSettingsAuthenticationUpdateOneOfAuthenticationOption|null
     */
    public function getAuthenticationOption()
    {
        return $this->container['authentication_option'];
    }

    /**
     * Sets authentication_option
     *
     * @param \Zoom\Api\Model\AccountSettingsAuthenticationUpdateOneOfAuthenticationOption|null $authentication_option authentication_option
     *
     * @return self
     */
    public function setAuthenticationOption($authentication_option)
    {
        $this->container['authentication_option'] = $authentication_option;

        return $this;
    }

    /**
     * Gets meeting_authentication
     *
     * @return bool|null
     */
    public function getMeetingAuthentication()
    {
        return $this->container['meeting_authentication'];
    }

    /**
     * Sets meeting_authentication
     *
     * @param bool|null $meeting_authentication If set to \"true\", only authenticated users can join meetings. The method for authentication can be defined in the \"authentication_option\".
     *
     * @return self
     */
    public function setMeetingAuthentication($meeting_authentication)
    {
        $this->container['meeting_authentication'] = $meeting_authentication;

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


