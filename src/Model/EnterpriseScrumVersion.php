<?php
/**
 * EnterpriseScrumVersion
 *
 * PHP version 5
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Gitee Open API
 *
 * Gitee Enterprise SDK for PHP
 *
 * OpenAPI spec version: 0.1.343
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.42
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GiteeEnterprise\Model;

use \ArrayAccess;
use \GiteeEnterprise\ObjectSerializer;

/**
 * EnterpriseScrumVersion Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseScrumVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnterpriseScrumVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'enterpriseId' => 'int',
        'programId' => 'int',
        'number' => 'string',
        'planReleasedAt' => '\DateTime',
        'releasedAt' => '\DateTime',
        'title' => 'string',
        'description' => 'string',
        'state' => 'string',
        'currentStage' => '\GiteeEnterprise\Model\ScrumStage'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'enterpriseId' => 'int32',
        'programId' => 'int32',
        'number' => null,
        'planReleasedAt' => 'date-time',
        'releasedAt' => 'date-time',
        'title' => null,
        'description' => null,
        'state' => null,
        'currentStage' => null
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
        'id' => 'id',
        'enterpriseId' => 'enterprise_id',
        'programId' => 'program_id',
        'number' => 'number',
        'planReleasedAt' => 'plan_released_at',
        'releasedAt' => 'released_at',
        'title' => 'title',
        'description' => 'description',
        'state' => 'state',
        'currentStage' => 'current_stage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'enterpriseId' => 'setEnterpriseId',
        'programId' => 'setProgramId',
        'number' => 'setNumber',
        'planReleasedAt' => 'setPlanReleasedAt',
        'releasedAt' => 'setReleasedAt',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'state' => 'setState',
        'currentStage' => 'setCurrentStage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'enterpriseId' => 'getEnterpriseId',
        'programId' => 'getProgramId',
        'number' => 'getNumber',
        'planReleasedAt' => 'getPlanReleasedAt',
        'releasedAt' => 'getReleasedAt',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'state' => 'getState',
        'currentStage' => 'getCurrentStage'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['programId'] = isset($data['programId']) ? $data['programId'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['planReleasedAt'] = isset($data['planReleasedAt']) ? $data['planReleasedAt'] : null;
        $this->container['releasedAt'] = isset($data['releasedAt']) ? $data['releasedAt'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['currentStage'] = isset($data['currentStage']) ? $data['currentStage'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 版本ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return int
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param int $enterpriseId 企业ID
     *
     * @return $this
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets programId
     *
     * @return int
     */
    public function getProgramId()
    {
        return $this->container['programId'];
    }

    /**
     * Sets programId
     *
     * @param int $programId 项目ID
     *
     * @return $this
     */
    public function setProgramId($programId)
    {
        $this->container['programId'] = $programId;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number 版本号
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets planReleasedAt
     *
     * @return \DateTime
     */
    public function getPlanReleasedAt()
    {
        return $this->container['planReleasedAt'];
    }

    /**
     * Sets planReleasedAt
     *
     * @param \DateTime $planReleasedAt 计划发版时间
     *
     * @return $this
     */
    public function setPlanReleasedAt($planReleasedAt)
    {
        $this->container['planReleasedAt'] = $planReleasedAt;

        return $this;
    }

    /**
     * Gets releasedAt
     *
     * @return \DateTime
     */
    public function getReleasedAt()
    {
        return $this->container['releasedAt'];
    }

    /**
     * Sets releasedAt
     *
     * @param \DateTime $releasedAt 实际发版时间
     *
     * @return $this
     */
    public function setReleasedAt($releasedAt)
    {
        $this->container['releasedAt'] = $releasedAt;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title 标题
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 描述
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state 状态
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets currentStage
     *
     * @return \GiteeEnterprise\Model\ScrumStage
     */
    public function getCurrentStage()
    {
        return $this->container['currentStage'];
    }

    /**
     * Sets currentStage
     *
     * @param \GiteeEnterprise\Model\ScrumStage $currentStage 当前阶段
     *
     * @return $this
     */
    public function setCurrentStage($currentStage)
    {
        $this->container['currentStage'] = $currentStage;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


