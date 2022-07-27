<?php
/**
 * CreateBatchPolls201ResponsePollsInner
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
 * CreateBatchPolls201ResponsePollsInner Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateBatchPolls201ResponsePollsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createBatchPolls_201_response_polls_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'anonymous' => 'bool',
        'id' => 'string',
        'poll_type' => 'int',
        'questions' => '\Zoom\Api\Model\CreateBatchPolls201ResponsePollsInnerQuestionsInner[]',
        'status' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'anonymous' => null,
        'id' => null,
        'poll_type' => null,
        'questions' => null,
        'status' => null,
        'title' => null
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
        'anonymous' => 'anonymous',
        'id' => 'id',
        'poll_type' => 'poll_type',
        'questions' => 'questions',
        'status' => 'status',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anonymous' => 'setAnonymous',
        'id' => 'setId',
        'poll_type' => 'setPollType',
        'questions' => 'setQuestions',
        'status' => 'setStatus',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anonymous' => 'getAnonymous',
        'id' => 'getId',
        'poll_type' => 'getPollType',
        'questions' => 'getQuestions',
        'status' => 'getStatus',
        'title' => 'getTitle'
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

    public const POLL_TYPE_1 = 1;
    public const POLL_TYPE_2 = 2;
    public const POLL_TYPE_3 = 3;
    public const STATUS_NOTSTART = 'notstart';
    public const STATUS_STARTED = 'started';
    public const STATUS_ENDED = 'ended';
    public const STATUS_SHARING = 'sharing';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPollTypeAllowableValues()
    {
        return [
            self::POLL_TYPE_1,
            self::POLL_TYPE_2,
            self::POLL_TYPE_3,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOTSTART,
            self::STATUS_STARTED,
            self::STATUS_ENDED,
            self::STATUS_SHARING,
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
        $this->container['anonymous'] = $data['anonymous'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['poll_type'] = $data['poll_type'] ?? null;
        $this->container['questions'] = $data['questions'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPollTypeAllowableValues();
        if (!is_null($this->container['poll_type']) && !in_array($this->container['poll_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'poll_type', must be one of '%s'",
                $this->container['poll_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets anonymous
     *
     * @return bool|null
     */
    public function getAnonymous()
    {
        return $this->container['anonymous'];
    }

    /**
     * Sets anonymous
     *
     * @param bool|null $anonymous Whether to allow meeting participants to answer poll questions anonymously:  * `true` — Anonymous polls enabled.  * `false` — Participants cannot answer poll questions anonymously.
     *
     * @return self
     */
    public function setAnonymous($anonymous)
    {
        $this->container['anonymous'] = $anonymous;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Meeting Poll ID
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets poll_type
     *
     * @return int|null
     */
    public function getPollType()
    {
        return $this->container['poll_type'];
    }

    /**
     * Sets poll_type
     *
     * @param int|null $poll_type The type of poll:  * `1` — Poll.  * `2` — Advanced Poll. This feature must be enabled in your Zoom account.  * `3` — Quiz. This feature must be enabled in your Zoom account.
     *
     * @return self
     */
    public function setPollType($poll_type)
    {
        $allowedValues = $this->getPollTypeAllowableValues();
        if (!is_null($poll_type) && !in_array($poll_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'poll_type', must be one of '%s'",
                    $poll_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['poll_type'] = $poll_type;

        return $this;
    }

    /**
     * Gets questions
     *
     * @return \Zoom\Api\Model\CreateBatchPolls201ResponsePollsInnerQuestionsInner[]|null
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions
     *
     * @param \Zoom\Api\Model\CreateBatchPolls201ResponsePollsInnerQuestionsInner[]|null $questions Information about the poll's questions.
     *
     * @return self
     */
    public function setQuestions($questions)
    {
        $this->container['questions'] = $questions;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the Meeting Poll:<br>`notstart` - Poll not started<br>`started` - Poll started<br>`ended` - Poll ended<br>`sharing` - Sharing poll results
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title for the Poll
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


