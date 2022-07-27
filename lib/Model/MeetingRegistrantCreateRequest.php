<?php
/**
 * MeetingRegistrantCreateRequest
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
 * MeetingRegistrantCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Information about the meeting registrant.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MeetingRegistrantCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'meetingRegistrantCreate_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'comments' => 'string',
        'custom_questions' => '\Zoom\Api\Model\CustomQuestion[]',
        'industry' => 'string',
        'job_title' => 'string',
        'no_of_employees' => 'string',
        'org' => 'string',
        'purchasing_time_frame' => 'string',
        'role_in_purchase_process' => 'string',
        'language' => 'string',
        'auto_approve' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'email' => 'email',
        'address' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'country' => null,
        'phone' => null,
        'comments' => null,
        'custom_questions' => null,
        'industry' => null,
        'job_title' => null,
        'no_of_employees' => null,
        'org' => null,
        'purchasing_time_frame' => null,
        'role_in_purchase_process' => null,
        'language' => null,
        'auto_approve' => null
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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'email' => 'email',
        'address' => 'address',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'phone' => 'phone',
        'comments' => 'comments',
        'custom_questions' => 'custom_questions',
        'industry' => 'industry',
        'job_title' => 'job_title',
        'no_of_employees' => 'no_of_employees',
        'org' => 'org',
        'purchasing_time_frame' => 'purchasing_time_frame',
        'role_in_purchase_process' => 'role_in_purchase_process',
        'language' => 'language',
        'auto_approve' => 'auto_approve'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'address' => 'setAddress',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'comments' => 'setComments',
        'custom_questions' => 'setCustomQuestions',
        'industry' => 'setIndustry',
        'job_title' => 'setJobTitle',
        'no_of_employees' => 'setNoOfEmployees',
        'org' => 'setOrg',
        'purchasing_time_frame' => 'setPurchasingTimeFrame',
        'role_in_purchase_process' => 'setRoleInPurchaseProcess',
        'language' => 'setLanguage',
        'auto_approve' => 'setAutoApprove'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'address' => 'getAddress',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'comments' => 'getComments',
        'custom_questions' => 'getCustomQuestions',
        'industry' => 'getIndustry',
        'job_title' => 'getJobTitle',
        'no_of_employees' => 'getNoOfEmployees',
        'org' => 'getOrg',
        'purchasing_time_frame' => 'getPurchasingTimeFrame',
        'role_in_purchase_process' => 'getRoleInPurchaseProcess',
        'language' => 'getLanguage',
        'auto_approve' => 'getAutoApprove'
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

    public const NO_OF_EMPLOYEES_EMPTY = '';
    public const NO_OF_EMPLOYEES__1_20 = '1-20';
    public const NO_OF_EMPLOYEES__21_50 = '21-50';
    public const NO_OF_EMPLOYEES__51_100 = '51-100';
    public const NO_OF_EMPLOYEES__101_500 = '101-500';
    public const NO_OF_EMPLOYEES__500_1000 = '500-1,000';
    public const NO_OF_EMPLOYEES__1001_5000 = '1,001-5,000';
    public const NO_OF_EMPLOYEES__5001_10000 = '5,001-10,000';
    public const NO_OF_EMPLOYEES_MORE_THAN_10000 = 'More than 10,000';
    public const PURCHASING_TIME_FRAME_EMPTY = '';
    public const PURCHASING_TIME_FRAME_WITHIN_A_MONTH = 'Within a month';
    public const PURCHASING_TIME_FRAME__1_3_MONTHS = '1-3 months';
    public const PURCHASING_TIME_FRAME__4_6_MONTHS = '4-6 months';
    public const PURCHASING_TIME_FRAME_MORE_THAN_6_MONTHS = 'More than 6 months';
    public const PURCHASING_TIME_FRAME_NO_TIMEFRAME = 'No timeframe';
    public const ROLE_IN_PURCHASE_PROCESS_EMPTY = '';
    public const ROLE_IN_PURCHASE_PROCESS_DECISION_MAKER = 'Decision Maker';
    public const ROLE_IN_PURCHASE_PROCESS_EVALUATOR_RECOMMENDER = 'Evaluator/Recommender';
    public const ROLE_IN_PURCHASE_PROCESS_INFLUENCER = 'Influencer';
    public const ROLE_IN_PURCHASE_PROCESS_NOT_INVOLVED = 'Not involved';
    public const LANGUAGE_EN_US = 'en-US';
    public const LANGUAGE_DE_DE = 'de-DE';
    public const LANGUAGE_ES_ES = 'es-ES';
    public const LANGUAGE_FR_FR = 'fr-FR';
    public const LANGUAGE_JP_JP = 'jp-JP';
    public const LANGUAGE_PT_PT = 'pt-PT';
    public const LANGUAGE_RU_RU = 'ru-RU';
    public const LANGUAGE_ZH_CN = 'zh-CN';
    public const LANGUAGE_ZH_TW = 'zh-TW';
    public const LANGUAGE_KO_KO = 'ko-KO';
    public const LANGUAGE_IT_IT = 'it-IT';
    public const LANGUAGE_VI_VN = 'vi-VN';
    public const LANGUAGE_PL_PL = 'pl-PL';
    public const LANGUAGE_TR_TR = 'Tr-TR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNoOfEmployeesAllowableValues()
    {
        return [
            self::NO_OF_EMPLOYEES_EMPTY,
            self::NO_OF_EMPLOYEES__1_20,
            self::NO_OF_EMPLOYEES__21_50,
            self::NO_OF_EMPLOYEES__51_100,
            self::NO_OF_EMPLOYEES__101_500,
            self::NO_OF_EMPLOYEES__500_1000,
            self::NO_OF_EMPLOYEES__1001_5000,
            self::NO_OF_EMPLOYEES__5001_10000,
            self::NO_OF_EMPLOYEES_MORE_THAN_10000,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPurchasingTimeFrameAllowableValues()
    {
        return [
            self::PURCHASING_TIME_FRAME_EMPTY,
            self::PURCHASING_TIME_FRAME_WITHIN_A_MONTH,
            self::PURCHASING_TIME_FRAME__1_3_MONTHS,
            self::PURCHASING_TIME_FRAME__4_6_MONTHS,
            self::PURCHASING_TIME_FRAME_MORE_THAN_6_MONTHS,
            self::PURCHASING_TIME_FRAME_NO_TIMEFRAME,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleInPurchaseProcessAllowableValues()
    {
        return [
            self::ROLE_IN_PURCHASE_PROCESS_EMPTY,
            self::ROLE_IN_PURCHASE_PROCESS_DECISION_MAKER,
            self::ROLE_IN_PURCHASE_PROCESS_EVALUATOR_RECOMMENDER,
            self::ROLE_IN_PURCHASE_PROCESS_INFLUENCER,
            self::ROLE_IN_PURCHASE_PROCESS_NOT_INVOLVED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_EN_US,
            self::LANGUAGE_DE_DE,
            self::LANGUAGE_ES_ES,
            self::LANGUAGE_FR_FR,
            self::LANGUAGE_JP_JP,
            self::LANGUAGE_PT_PT,
            self::LANGUAGE_RU_RU,
            self::LANGUAGE_ZH_CN,
            self::LANGUAGE_ZH_TW,
            self::LANGUAGE_KO_KO,
            self::LANGUAGE_IT_IT,
            self::LANGUAGE_VI_VN,
            self::LANGUAGE_PL_PL,
            self::LANGUAGE_TR_TR,
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
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['custom_questions'] = $data['custom_questions'] ?? null;
        $this->container['industry'] = $data['industry'] ?? null;
        $this->container['job_title'] = $data['job_title'] ?? null;
        $this->container['no_of_employees'] = $data['no_of_employees'] ?? null;
        $this->container['org'] = $data['org'] ?? null;
        $this->container['purchasing_time_frame'] = $data['purchasing_time_frame'] ?? null;
        $this->container['role_in_purchase_process'] = $data['role_in_purchase_process'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['auto_approve'] = $data['auto_approve'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 128)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 128.";
        }

        $allowedValues = $this->getNoOfEmployeesAllowableValues();
        if (!is_null($this->container['no_of_employees']) && !in_array($this->container['no_of_employees'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'no_of_employees', must be one of '%s'",
                $this->container['no_of_employees'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPurchasingTimeFrameAllowableValues();
        if (!is_null($this->container['purchasing_time_frame']) && !in_array($this->container['purchasing_time_frame'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'purchasing_time_frame', must be one of '%s'",
                $this->container['purchasing_time_frame'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRoleInPurchaseProcessAllowableValues();
        if (!is_null($this->container['role_in_purchase_process']) && !in_array($this->container['role_in_purchase_process'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role_in_purchase_process', must be one of '%s'",
                $this->container['role_in_purchase_process'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language', must be one of '%s'",
                $this->container['language'],
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name The registrant's first name.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling MeetingRegistrantCreateRequest., must be smaller than or equal to 64.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The registrant's last name.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (mb_strlen($last_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling MeetingRegistrantCreateRequest., must be smaller than or equal to 64.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The registrant's email address.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 128)) {
            throw new \InvalidArgumentException('invalid length for $email when calling MeetingRegistrantCreateRequest., must be smaller than or equal to 128.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address The registrant's address.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The registrant's city.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The registrant's state or province.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip The registrant's ZIP or postal code.
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The registrant's two-letter [country code](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#countries).
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The registrant's phone number.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments The registrant's questions and comments.
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets custom_questions
     *
     * @return \Zoom\Api\Model\CustomQuestion[]|null
     */
    public function getCustomQuestions()
    {
        return $this->container['custom_questions'];
    }

    /**
     * Sets custom_questions
     *
     * @param \Zoom\Api\Model\CustomQuestion[]|null $custom_questions Information about custom questions.
     *
     * @return self
     */
    public function setCustomQuestions($custom_questions)
    {
        $this->container['custom_questions'] = $custom_questions;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string|null $industry The registrant's industry.
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string|null $job_title The registrant's job title.
     *
     * @return self
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets no_of_employees
     *
     * @return string|null
     */
    public function getNoOfEmployees()
    {
        return $this->container['no_of_employees'];
    }

    /**
     * Sets no_of_employees
     *
     * @param string|null $no_of_employees The registrant's number of employees:  * `1-20`  * `21-50`  * `51-100`  * `101-500`  * `500-1,000`  * `1,001-5,000`  * `5,001-10,000`  * `More than 10,000`
     *
     * @return self
     */
    public function setNoOfEmployees($no_of_employees)
    {
        $allowedValues = $this->getNoOfEmployeesAllowableValues();
        if (!is_null($no_of_employees) && !in_array($no_of_employees, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'no_of_employees', must be one of '%s'",
                    $no_of_employees,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['no_of_employees'] = $no_of_employees;

        return $this;
    }

    /**
     * Gets org
     *
     * @return string|null
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param string|null $org The registrant's organization.
     *
     * @return self
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets purchasing_time_frame
     *
     * @return string|null
     */
    public function getPurchasingTimeFrame()
    {
        return $this->container['purchasing_time_frame'];
    }

    /**
     * Sets purchasing_time_frame
     *
     * @param string|null $purchasing_time_frame The registrant's purchasing time frame:  * `Within a month`  * `1-3 months`  * `4-6 months`  * `More than 6 months`  * `No timeframe`
     *
     * @return self
     */
    public function setPurchasingTimeFrame($purchasing_time_frame)
    {
        $allowedValues = $this->getPurchasingTimeFrameAllowableValues();
        if (!is_null($purchasing_time_frame) && !in_array($purchasing_time_frame, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'purchasing_time_frame', must be one of '%s'",
                    $purchasing_time_frame,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['purchasing_time_frame'] = $purchasing_time_frame;

        return $this;
    }

    /**
     * Gets role_in_purchase_process
     *
     * @return string|null
     */
    public function getRoleInPurchaseProcess()
    {
        return $this->container['role_in_purchase_process'];
    }

    /**
     * Sets role_in_purchase_process
     *
     * @param string|null $role_in_purchase_process The registrant's role in the purchase process:  * `Decision Maker`  * `Evaluator/Recommender`  * `Influencer`  * `Not involved`
     *
     * @return self
     */
    public function setRoleInPurchaseProcess($role_in_purchase_process)
    {
        $allowedValues = $this->getRoleInPurchaseProcessAllowableValues();
        if (!is_null($role_in_purchase_process) && !in_array($role_in_purchase_process, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role_in_purchase_process', must be one of '%s'",
                    $role_in_purchase_process,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role_in_purchase_process'] = $role_in_purchase_process;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The registrant's language preference for confirmation emails:  * `en-US` — English (US)  * `de-DE` — German (Germany)  * `es-ES` — Spanish (Spain)  * `fr-FR` — French (France)  * `jp-JP` — Japanese  * `pt-PT` — Portuguese (Portugal)  * `ru-RU` — Russian  * `zh-CN` — Chinese (PRC)  * `zh-TW` — Chinese (Taiwan)  * `ko-KO` — Korean  * `it-IT` — Italian (Italy)  * `vi-VN` — Vietnamese  * `pl-PL` — Polish  * `Tr-TR` — Turkish
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($language) && !in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'language', must be one of '%s'",
                    $language,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets auto_approve
     *
     * @return bool|null
     */
    public function getAutoApprove()
    {
        return $this->container['auto_approve'];
    }

    /**
     * Sets auto_approve
     *
     * @param bool|null $auto_approve If a meeting was scheduled with the `approval_type` field value of `1` (manual approval) but you want to automatically approve meeting registrants, set the value of this field to `true`.   **Note:** You cannot use this field to change approval setting for a meeting originally scheduled with the `approval_type` field value of `0` (automatic approval).
     *
     * @return self
     */
    public function setAutoApprove($auto_approve)
    {
        $this->container['auto_approve'] = $auto_approve;

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


