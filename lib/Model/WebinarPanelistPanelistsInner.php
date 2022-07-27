<?php
/**
 * WebinarPanelistPanelistsInner
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
 * WebinarPanelistPanelistsInner Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebinarPanelistPanelistsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebinarPanelist_panelists_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'name' => 'string',
        'virtual_background_id' => 'string',
        'name_tag_id' => 'string',
        'name_tag_name' => 'string',
        'name_tag_pronouns' => 'string',
        'name_tag_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => 'email',
        'name' => null,
        'virtual_background_id' => null,
        'name_tag_id' => null,
        'name_tag_name' => null,
        'name_tag_pronouns' => null,
        'name_tag_description' => null
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
        'email' => 'email',
        'name' => 'name',
        'virtual_background_id' => 'virtual_background_id',
        'name_tag_id' => 'name_tag_id',
        'name_tag_name' => 'name_tag_name',
        'name_tag_pronouns' => 'name_tag_pronouns',
        'name_tag_description' => 'name_tag_description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'name' => 'setName',
        'virtual_background_id' => 'setVirtualBackgroundId',
        'name_tag_id' => 'setNameTagId',
        'name_tag_name' => 'setNameTagName',
        'name_tag_pronouns' => 'setNameTagPronouns',
        'name_tag_description' => 'setNameTagDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'name' => 'getName',
        'virtual_background_id' => 'getVirtualBackgroundId',
        'name_tag_id' => 'getNameTagId',
        'name_tag_name' => 'getNameTagName',
        'name_tag_pronouns' => 'getNameTagPronouns',
        'name_tag_description' => 'getNameTagDescription'
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
        $this->container['email'] = $data['email'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['virtual_background_id'] = $data['virtual_background_id'] ?? null;
        $this->container['name_tag_id'] = $data['name_tag_id'] ?? null;
        $this->container['name_tag_name'] = $data['name_tag_name'] ?? null;
        $this->container['name_tag_pronouns'] = $data['name_tag_pronouns'] ?? null;
        $this->container['name_tag_description'] = $data['name_tag_description'] ?? null;
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Panelist's email. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for return value details.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The panelist's full name.  **Note:** This value cannot exceed more than 12 Chinese characters.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets virtual_background_id
     *
     * @return string|null
     */
    public function getVirtualBackgroundId()
    {
        return $this->container['virtual_background_id'];
    }

    /**
     * Sets virtual_background_id
     *
     * @param string|null $virtual_background_id The Virtual Background ID to bind.
     *
     * @return self
     */
    public function setVirtualBackgroundId($virtual_background_id)
    {
        $this->container['virtual_background_id'] = $virtual_background_id;

        return $this;
    }

    /**
     * Gets name_tag_id
     *
     * @return string|null
     */
    public function getNameTagId()
    {
        return $this->container['name_tag_id'];
    }

    /**
     * Sets name_tag_id
     *
     * @param string|null $name_tag_id The name tag ID to bind.
     *
     * @return self
     */
    public function setNameTagId($name_tag_id)
    {
        $this->container['name_tag_id'] = $name_tag_id;

        return $this;
    }

    /**
     * Gets name_tag_name
     *
     * @return string|null
     */
    public function getNameTagName()
    {
        return $this->container['name_tag_name'];
    }

    /**
     * Sets name_tag_name
     *
     * @param string|null $name_tag_name The panelist's name to display in the name tag.
     *
     * @return self
     */
    public function setNameTagName($name_tag_name)
    {
        $this->container['name_tag_name'] = $name_tag_name;

        return $this;
    }

    /**
     * Gets name_tag_pronouns
     *
     * @return string|null
     */
    public function getNameTagPronouns()
    {
        return $this->container['name_tag_pronouns'];
    }

    /**
     * Sets name_tag_pronouns
     *
     * @param string|null $name_tag_pronouns The pronouns to display in the name tag.
     *
     * @return self
     */
    public function setNameTagPronouns($name_tag_pronouns)
    {
        $this->container['name_tag_pronouns'] = $name_tag_pronouns;

        return $this;
    }

    /**
     * Gets name_tag_description
     *
     * @return string|null
     */
    public function getNameTagDescription()
    {
        return $this->container['name_tag_description'];
    }

    /**
     * Sets name_tag_description
     *
     * @param string|null $name_tag_description The description for the name tag (for example, the person's title).
     *
     * @return self
     */
    public function setNameTagDescription($name_tag_description)
    {
        $this->container['name_tag_description'] = $name_tag_description;

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


