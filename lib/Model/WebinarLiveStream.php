<?php
/**
 * WebinarLiveStream
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
 * WebinarLiveStream Class Doc Comment
 *
 * @category Class
 * @description Webinar live stream.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebinarLiveStream implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebinarLiveStream';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page_url' => 'string',
        'stream_key' => 'string',
        'stream_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'page_url' => 'uri',
        'stream_key' => null,
        'stream_url' => null
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
        'page_url' => 'page_url',
        'stream_key' => 'stream_key',
        'stream_url' => 'stream_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_url' => 'setPageUrl',
        'stream_key' => 'setStreamKey',
        'stream_url' => 'setStreamUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_url' => 'getPageUrl',
        'stream_key' => 'getStreamKey',
        'stream_url' => 'getStreamUrl'
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
        $this->container['page_url'] = $data['page_url'] ?? null;
        $this->container['stream_key'] = $data['stream_key'] ?? null;
        $this->container['stream_url'] = $data['stream_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['page_url'] === null) {
            $invalidProperties[] = "'page_url' can't be null";
        }
        if ((mb_strlen($this->container['page_url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'page_url', the character length must be smaller than or equal to 1024.";
        }

        if ($this->container['stream_key'] === null) {
            $invalidProperties[] = "'stream_key' can't be null";
        }
        if ((mb_strlen($this->container['stream_key']) > 512)) {
            $invalidProperties[] = "invalid value for 'stream_key', the character length must be smaller than or equal to 512.";
        }

        if ($this->container['stream_url'] === null) {
            $invalidProperties[] = "'stream_url' can't be null";
        }
        if ((mb_strlen($this->container['stream_url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'stream_url', the character length must be smaller than or equal to 1024.";
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
     * Gets page_url
     *
     * @return string
     */
    public function getPageUrl()
    {
        return $this->container['page_url'];
    }

    /**
     * Sets page_url
     *
     * @param string $page_url The webinar live stream page's URL.
     *
     * @return self
     */
    public function setPageUrl($page_url)
    {
        if ((mb_strlen($page_url) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $page_url when calling WebinarLiveStream., must be smaller than or equal to 1024.');
        }

        $this->container['page_url'] = $page_url;

        return $this;
    }

    /**
     * Gets stream_key
     *
     * @return string
     */
    public function getStreamKey()
    {
        return $this->container['stream_key'];
    }

    /**
     * Sets stream_key
     *
     * @param string $stream_key The webinar live stream name and key.
     *
     * @return self
     */
    public function setStreamKey($stream_key)
    {
        if ((mb_strlen($stream_key) > 512)) {
            throw new \InvalidArgumentException('invalid length for $stream_key when calling WebinarLiveStream., must be smaller than or equal to 512.');
        }

        $this->container['stream_key'] = $stream_key;

        return $this;
    }

    /**
     * Gets stream_url
     *
     * @return string
     */
    public function getStreamUrl()
    {
        return $this->container['stream_url'];
    }

    /**
     * Sets stream_url
     *
     * @param string $stream_url The webinar live stream URL.
     *
     * @return self
     */
    public function setStreamUrl($stream_url)
    {
        if ((mb_strlen($stream_url) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $stream_url when calling WebinarLiveStream., must be smaller than or equal to 1024.');
        }

        $this->container['stream_url'] = $stream_url;

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


