<?php
/**
 * DashboardChat200ResponseAllOf1UsersInner
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
 * DashboardChat200ResponseAllOf1UsersInner Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DashboardChat200ResponseAllOf1UsersInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'dashboardChat_200_response_allOf_1_users_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_sent' => 'int',
        'code_sippet_sent' => 'int',
        'email' => 'string',
        'files_sent' => 'int',
        'giphys_sent' => 'int',
        'group_sent' => 'int',
        'images_sent' => 'int',
        'p2p_sent' => 'int',
        'text_sent' => 'int',
        'total_sent' => 'int',
        'user_id' => 'string',
        'user_name' => 'string',
        'video_sent' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_sent' => null,
        'code_sippet_sent' => null,
        'email' => 'email',
        'files_sent' => null,
        'giphys_sent' => null,
        'group_sent' => null,
        'images_sent' => null,
        'p2p_sent' => null,
        'text_sent' => null,
        'total_sent' => null,
        'user_id' => null,
        'user_name' => null,
        'video_sent' => null
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
        'audio_sent' => 'audio_sent',
        'code_sippet_sent' => 'code_sippet_sent',
        'email' => 'email',
        'files_sent' => 'files_sent',
        'giphys_sent' => 'giphys_sent',
        'group_sent' => 'group_sent',
        'images_sent' => 'images_sent',
        'p2p_sent' => 'p2p_sent',
        'text_sent' => 'text_sent',
        'total_sent' => 'total_sent',
        'user_id' => 'user_id',
        'user_name' => 'user_name',
        'video_sent' => 'video_sent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_sent' => 'setAudioSent',
        'code_sippet_sent' => 'setCodeSippetSent',
        'email' => 'setEmail',
        'files_sent' => 'setFilesSent',
        'giphys_sent' => 'setGiphysSent',
        'group_sent' => 'setGroupSent',
        'images_sent' => 'setImagesSent',
        'p2p_sent' => 'setP2pSent',
        'text_sent' => 'setTextSent',
        'total_sent' => 'setTotalSent',
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'video_sent' => 'setVideoSent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_sent' => 'getAudioSent',
        'code_sippet_sent' => 'getCodeSippetSent',
        'email' => 'getEmail',
        'files_sent' => 'getFilesSent',
        'giphys_sent' => 'getGiphysSent',
        'group_sent' => 'getGroupSent',
        'images_sent' => 'getImagesSent',
        'p2p_sent' => 'getP2pSent',
        'text_sent' => 'getTextSent',
        'total_sent' => 'getTotalSent',
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'video_sent' => 'getVideoSent'
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
        $this->container['audio_sent'] = $data['audio_sent'] ?? null;
        $this->container['code_sippet_sent'] = $data['code_sippet_sent'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['files_sent'] = $data['files_sent'] ?? null;
        $this->container['giphys_sent'] = $data['giphys_sent'] ?? null;
        $this->container['group_sent'] = $data['group_sent'] ?? null;
        $this->container['images_sent'] = $data['images_sent'] ?? null;
        $this->container['p2p_sent'] = $data['p2p_sent'] ?? null;
        $this->container['text_sent'] = $data['text_sent'] ?? null;
        $this->container['total_sent'] = $data['total_sent'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['user_name'] = $data['user_name'] ?? null;
        $this->container['video_sent'] = $data['video_sent'] ?? null;
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
     * Gets audio_sent
     *
     * @return int|null
     */
    public function getAudioSent()
    {
        return $this->container['audio_sent'];
    }

    /**
     * Sets audio_sent
     *
     * @param int|null $audio_sent The user's total number of audio files sent.
     *
     * @return self
     */
    public function setAudioSent($audio_sent)
    {
        $this->container['audio_sent'] = $audio_sent;

        return $this;
    }

    /**
     * Gets code_sippet_sent
     *
     * @return int|null
     */
    public function getCodeSippetSent()
    {
        return $this->container['code_sippet_sent'];
    }

    /**
     * Sets code_sippet_sent
     *
     * @param int|null $code_sippet_sent The user's total number of code snippets sent.
     *
     * @return self
     */
    public function setCodeSippetSent($code_sippet_sent)
    {
        $this->container['code_sippet_sent'] = $code_sippet_sent;

        return $this;
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
     * @param string|null $email The user's email address.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets files_sent
     *
     * @return int|null
     */
    public function getFilesSent()
    {
        return $this->container['files_sent'];
    }

    /**
     * Sets files_sent
     *
     * @param int|null $files_sent The user's total number of files sent.
     *
     * @return self
     */
    public function setFilesSent($files_sent)
    {
        $this->container['files_sent'] = $files_sent;

        return $this;
    }

    /**
     * Gets giphys_sent
     *
     * @return int|null
     */
    public function getGiphysSent()
    {
        return $this->container['giphys_sent'];
    }

    /**
     * Sets giphys_sent
     *
     * @param int|null $giphys_sent The user's total number of [GIPHY](https://giphy.com/) images sent.
     *
     * @return self
     */
    public function setGiphysSent($giphys_sent)
    {
        $this->container['giphys_sent'] = $giphys_sent;

        return $this;
    }

    /**
     * Gets group_sent
     *
     * @return int|null
     */
    public function getGroupSent()
    {
        return $this->container['group_sent'];
    }

    /**
     * Sets group_sent
     *
     * @param int|null $group_sent The user's total number of messages sent in Zoom Chat channels.
     *
     * @return self
     */
    public function setGroupSent($group_sent)
    {
        $this->container['group_sent'] = $group_sent;

        return $this;
    }

    /**
     * Gets images_sent
     *
     * @return int|null
     */
    public function getImagesSent()
    {
        return $this->container['images_sent'];
    }

    /**
     * Sets images_sent
     *
     * @param int|null $images_sent The user's total number of images sent.
     *
     * @return self
     */
    public function setImagesSent($images_sent)
    {
        $this->container['images_sent'] = $images_sent;

        return $this;
    }

    /**
     * Gets p2p_sent
     *
     * @return int|null
     */
    public function getP2pSent()
    {
        return $this->container['p2p_sent'];
    }

    /**
     * Sets p2p_sent
     *
     * @param int|null $p2p_sent The user's total number of peer-to-peer (P2P) chat messages sent.
     *
     * @return self
     */
    public function setP2pSent($p2p_sent)
    {
        $this->container['p2p_sent'] = $p2p_sent;

        return $this;
    }

    /**
     * Gets text_sent
     *
     * @return int|null
     */
    public function getTextSent()
    {
        return $this->container['text_sent'];
    }

    /**
     * Sets text_sent
     *
     * @param int|null $text_sent The user's total number of text messages sent.
     *
     * @return self
     */
    public function setTextSent($text_sent)
    {
        $this->container['text_sent'] = $text_sent;

        return $this;
    }

    /**
     * Gets total_sent
     *
     * @return int|null
     */
    public function getTotalSent()
    {
        return $this->container['total_sent'];
    }

    /**
     * Sets total_sent
     *
     * @param int|null $total_sent The user's total number of messages sent.
     *
     * @return self
     */
    public function setTotalSent($total_sent)
    {
        $this->container['total_sent'] = $total_sent;

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
     * @param string|null $user_id The user's ID.
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
     * @param string|null $user_name The user's display name.
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets video_sent
     *
     * @return int|null
     */
    public function getVideoSent()
    {
        return $this->container['video_sent'];
    }

    /**
     * Sets video_sent
     *
     * @param int|null $video_sent The user's total number of video files sent.
     *
     * @return self
     */
    public function setVideoSent($video_sent)
    {
        $this->container['video_sent'] = $video_sent;

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

