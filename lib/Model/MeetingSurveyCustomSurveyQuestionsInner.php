<?php
/**
 * MeetingSurveyCustomSurveyQuestionsInner
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
 * MeetingSurveyCustomSurveyQuestionsInner Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MeetingSurveyCustomSurveyQuestionsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MeetingSurvey_custom_survey_questions_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'answer_max_character' => 'int',
        'answer_min_character' => 'int',
        'answer_required' => 'bool',
        'answers' => 'string[]',
        'name' => 'string',
        'rating_max_label' => 'string',
        'rating_max_value' => 'int',
        'rating_min_label' => 'string',
        'rating_min_value' => 'int',
        'show_as_dropdown' => 'bool',
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
        'answer_max_character' => null,
        'answer_min_character' => null,
        'answer_required' => null,
        'answers' => null,
        'name' => null,
        'rating_max_label' => null,
        'rating_max_value' => null,
        'rating_min_label' => null,
        'rating_min_value' => null,
        'show_as_dropdown' => null,
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
        'answer_max_character' => 'answer_max_character',
        'answer_min_character' => 'answer_min_character',
        'answer_required' => 'answer_required',
        'answers' => 'answers',
        'name' => 'name',
        'rating_max_label' => 'rating_max_label',
        'rating_max_value' => 'rating_max_value',
        'rating_min_label' => 'rating_min_label',
        'rating_min_value' => 'rating_min_value',
        'show_as_dropdown' => 'show_as_dropdown',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answer_max_character' => 'setAnswerMaxCharacter',
        'answer_min_character' => 'setAnswerMinCharacter',
        'answer_required' => 'setAnswerRequired',
        'answers' => 'setAnswers',
        'name' => 'setName',
        'rating_max_label' => 'setRatingMaxLabel',
        'rating_max_value' => 'setRatingMaxValue',
        'rating_min_label' => 'setRatingMinLabel',
        'rating_min_value' => 'setRatingMinValue',
        'show_as_dropdown' => 'setShowAsDropdown',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answer_max_character' => 'getAnswerMaxCharacter',
        'answer_min_character' => 'getAnswerMinCharacter',
        'answer_required' => 'getAnswerRequired',
        'answers' => 'getAnswers',
        'name' => 'getName',
        'rating_max_label' => 'getRatingMaxLabel',
        'rating_max_value' => 'getRatingMaxValue',
        'rating_min_label' => 'getRatingMinLabel',
        'rating_min_value' => 'getRatingMinValue',
        'show_as_dropdown' => 'getShowAsDropdown',
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

    public const TYPE_SINGLE = 'single';
    public const TYPE_MULTIPLE = 'multiple';
    public const TYPE_RATING_SCALE = 'rating_scale';
    public const TYPE_LONG_ANSWER = 'long_answer';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SINGLE,
            self::TYPE_MULTIPLE,
            self::TYPE_RATING_SCALE,
            self::TYPE_LONG_ANSWER,
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
        $this->container['answer_max_character'] = $data['answer_max_character'] ?? null;
        $this->container['answer_min_character'] = $data['answer_min_character'] ?? null;
        $this->container['answer_required'] = $data['answer_required'] ?? false;
        $this->container['answers'] = $data['answers'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['rating_max_label'] = $data['rating_max_label'] ?? null;
        $this->container['rating_max_value'] = $data['rating_max_value'] ?? null;
        $this->container['rating_min_label'] = $data['rating_min_label'] ?? null;
        $this->container['rating_min_value'] = $data['rating_min_value'] ?? null;
        $this->container['show_as_dropdown'] = $data['show_as_dropdown'] ?? false;
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

        if (!is_null($this->container['answer_min_character']) && ($this->container['answer_min_character'] < 1)) {
            $invalidProperties[] = "invalid value for 'answer_min_character', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['answers']) && (count($this->container['answers']) < 2)) {
            $invalidProperties[] = "invalid value for 'answers', number of items must be greater than or equal to 2.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['rating_max_value']) && ($this->container['rating_max_value'] > 10)) {
            $invalidProperties[] = "invalid value for 'rating_max_value', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['rating_min_value']) && ($this->container['rating_min_value'] < 0)) {
            $invalidProperties[] = "invalid value for 'rating_min_value', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets answer_max_character
     *
     * @return int|null
     */
    public function getAnswerMaxCharacter()
    {
        return $this->container['answer_max_character'];
    }

    /**
     * Sets answer_max_character
     *
     * @param int|null $answer_max_character The allowed maximum number of characters. This field only applies to `long_answer` survey, a maximum of 2,000 characters.
     *
     * @return self
     */
    public function setAnswerMaxCharacter($answer_max_character)
    {
        $this->container['answer_max_character'] = $answer_max_character;

        return $this;
    }

    /**
     * Gets answer_min_character
     *
     * @return int|null
     */
    public function getAnswerMinCharacter()
    {
        return $this->container['answer_min_character'];
    }

    /**
     * Sets answer_min_character
     *
     * @param int|null $answer_min_character The allowed minimum number of characters. This field only applies to `long_answer` survey. You must provide at least a **one** character minimum value.
     *
     * @return self
     */
    public function setAnswerMinCharacter($answer_min_character)
    {

        if (!is_null($answer_min_character) && ($answer_min_character < 1)) {
            throw new \InvalidArgumentException('invalid value for $answer_min_character when calling MeetingSurveyCustomSurveyQuestionsInner., must be bigger than or equal to 1.');
        }

        $this->container['answer_min_character'] = $answer_min_character;

        return $this;
    }

    /**
     * Gets answer_required
     *
     * @return bool|null
     */
    public function getAnswerRequired()
    {
        return $this->container['answer_required'];
    }

    /**
     * Sets answer_required
     *
     * @param bool|null $answer_required Whether participants must answer the question:  * `true` — The participant must answer the question.  * `false` — The participant does not need to answer the question.    This value defaults to `false`.
     *
     * @return self
     */
    public function setAnswerRequired($answer_required)
    {
        $this->container['answer_required'] = $answer_required;

        return $this;
    }

    /**
     * Gets answers
     *
     * @return string[]|null
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     *
     * @param string[]|null $answers The survey question's available answers. This field requires a **minimum** of two answers.   * For `single` and `multiple` polls, you can only provide a maximum of 10 answers.  * For `matching` polls, you can only provide a maximum of 16 answers.  * For `rank_order` polls, you can only provide a maximum of seven answers.
     *
     * @return self
     */
    public function setAnswers($answers)
    {


        if (!is_null($answers) && (count($answers) < 2)) {
            throw new \InvalidArgumentException('invalid length for $answers when calling MeetingSurveyCustomSurveyQuestionsInner., number of items must be greater than or equal to 2.');
        }
        $this->container['answers'] = $answers;

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
     * @param string|null $name The survey question, up to 255 characters.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MeetingSurveyCustomSurveyQuestionsInner., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rating_max_label
     *
     * @return string|null
     */
    public function getRatingMaxLabel()
    {
        return $this->container['rating_max_label'];
    }

    /**
     * Sets rating_max_label
     *
     * @param string|null $rating_max_label The high score label used for the `rating_max_value` field.    This field only applies to the `rating_scale` survey.
     *
     * @return self
     */
    public function setRatingMaxLabel($rating_max_label)
    {
        $this->container['rating_max_label'] = $rating_max_label;

        return $this;
    }

    /**
     * Gets rating_max_value
     *
     * @return int|null
     */
    public function getRatingMaxValue()
    {
        return $this->container['rating_max_value'];
    }

    /**
     * Sets rating_max_value
     *
     * @param int|null $rating_max_value The rating scale's maximum value, up to a maximum value of 10.    This field only applies to the `rating_scale` survey.
     *
     * @return self
     */
    public function setRatingMaxValue($rating_max_value)
    {

        if (!is_null($rating_max_value) && ($rating_max_value > 10)) {
            throw new \InvalidArgumentException('invalid value for $rating_max_value when calling MeetingSurveyCustomSurveyQuestionsInner., must be smaller than or equal to 10.');
        }

        $this->container['rating_max_value'] = $rating_max_value;

        return $this;
    }

    /**
     * Gets rating_min_label
     *
     * @return string|null
     */
    public function getRatingMinLabel()
    {
        return $this->container['rating_min_label'];
    }

    /**
     * Sets rating_min_label
     *
     * @param string|null $rating_min_label The low score label used for the `rating_min_value` field.   T his field only applies to the `rating_scale` survey.
     *
     * @return self
     */
    public function setRatingMinLabel($rating_min_label)
    {
        $this->container['rating_min_label'] = $rating_min_label;

        return $this;
    }

    /**
     * Gets rating_min_value
     *
     * @return int|null
     */
    public function getRatingMinValue()
    {
        return $this->container['rating_min_value'];
    }

    /**
     * Sets rating_min_value
     *
     * @param int|null $rating_min_value The rating scale's minimum value. This value cannot be less than zero.    This field only applies to the `rating_scale` survey.
     *
     * @return self
     */
    public function setRatingMinValue($rating_min_value)
    {

        if (!is_null($rating_min_value) && ($rating_min_value < 0)) {
            throw new \InvalidArgumentException('invalid value for $rating_min_value when calling MeetingSurveyCustomSurveyQuestionsInner., must be bigger than or equal to 0.');
        }

        $this->container['rating_min_value'] = $rating_min_value;

        return $this;
    }

    /**
     * Gets show_as_dropdown
     *
     * @return bool|null
     */
    public function getShowAsDropdown()
    {
        return $this->container['show_as_dropdown'];
    }

    /**
     * Sets show_as_dropdown
     *
     * @param bool|null $show_as_dropdown Display the radio selection as a drop-down box:  * `true` — Show as a drop-down box.  * `false` — Do not show as a drop-down box.    This value defaults to `false`.
     *
     * @return self
     */
    public function setShowAsDropdown($show_as_dropdown)
    {
        $this->container['show_as_dropdown'] = $show_as_dropdown;

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
     * @param string|null $type The survey's question and answer type:  * `single` — Single choice.  * `multiple` — Multiple choice.  * `rating_scale` — Rating scale.  * `long_answer` — Long answer.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
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


