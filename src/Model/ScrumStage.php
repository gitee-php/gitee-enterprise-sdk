<?php
/**
 * ScrumStage
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
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1.333
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.23
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
 * ScrumStage Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScrumStage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScrumStage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'enterpriseId' => 'int',
        'programId' => 'int',
        'scrumVersionId' => 'int',
        'parentId' => 'int',
        'title' => 'string',
        'sort' => 'int',
        'state' => 'string',
        'closedAt' => 'string',
        'planClosedAt' => 'string'
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
        'scrumVersionId' => 'int32',
        'parentId' => 'int32',
        'title' => null,
        'sort' => 'int32',
        'state' => null,
        'closedAt' => null,
        'planClosedAt' => null
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
        'scrumVersionId' => 'scrum_version_id',
        'parentId' => 'parent_id',
        'title' => 'title',
        'sort' => 'sort',
        'state' => 'state',
        'closedAt' => 'closed_at',
        'planClosedAt' => 'plan_closed_at'
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
        'scrumVersionId' => 'setScrumVersionId',
        'parentId' => 'setParentId',
        'title' => 'setTitle',
        'sort' => 'setSort',
        'state' => 'setState',
        'closedAt' => 'setClosedAt',
        'planClosedAt' => 'setPlanClosedAt'
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
        'scrumVersionId' => 'getScrumVersionId',
        'parentId' => 'getParentId',
        'title' => 'getTitle',
        'sort' => 'getSort',
        'state' => 'getState',
        'closedAt' => 'getClosedAt',
        'planClosedAt' => 'getPlanClosedAt'
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
        $this->container['scrumVersionId'] = isset($data['scrumVersionId']) ? $data['scrumVersionId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['closedAt'] = isset($data['closedAt']) ? $data['closedAt'] : null;
        $this->container['planClosedAt'] = isset($data['planClosedAt']) ? $data['planClosedAt'] : null;
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
     * @param int $id 阶段ID
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
     * Gets scrumVersionId
     *
     * @return int
     */
    public function getScrumVersionId()
    {
        return $this->container['scrumVersionId'];
    }

    /**
     * Sets scrumVersionId
     *
     * @param int $scrumVersionId 版本ID
     *
     * @return $this
     */
    public function setScrumVersionId($scrumVersionId)
    {
        $this->container['scrumVersionId'] = $scrumVersionId;

        return $this;
    }

    /**
     * Gets parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
     * Sets parentId
     *
     * @param int $parentId 父阶段ID
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

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
     * @param string $title 阶段名称
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return int
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param int $sort 排序值
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

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
     * Gets closedAt
     *
     * @return string
     */
    public function getClosedAt()
    {
        return $this->container['closedAt'];
    }

    /**
     * Sets closedAt
     *
     * @param string $closedAt 完成时间
     *
     * @return $this
     */
    public function setClosedAt($closedAt)
    {
        $this->container['closedAt'] = $closedAt;

        return $this;
    }

    /**
     * Gets planClosedAt
     *
     * @return string
     */
    public function getPlanClosedAt()
    {
        return $this->container['planClosedAt'];
    }

    /**
     * Sets planClosedAt
     *
     * @param string $planClosedAt 计划完成时间
     *
     * @return $this
     */
    public function setPlanClosedAt($planClosedAt)
    {
        $this->container['planClosedAt'] = $planClosedAt;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


