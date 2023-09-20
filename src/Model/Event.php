<?php
/**
 * Event
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
 * OpenAPI spec version: 0.1.335
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
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
 * Event Class Doc Comment
 *
 * @category Class
 * @description 周报可关联动态列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'targetType' => 'string',
        'ident' => 'string',
        'isProper' => 'bool',
        'createdAt' => 'string',
        'action' => 'string',
        'actionHumanName' => 'string',
        'author' => '\GiteeEnterprise\Model\UserWithRemark',
        'inProject' => 'bool',
        'inEnterprise' => 'bool',
        'project' => '\GiteeEnterprise\Model\Project',
        'enterprise' => 'string',
        'throughType' => 'string',
        'through' => 'object',
        'payload' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'targetType' => null,
        'ident' => null,
        'isProper' => null,
        'createdAt' => null,
        'action' => null,
        'actionHumanName' => null,
        'author' => null,
        'inProject' => null,
        'inEnterprise' => null,
        'project' => null,
        'enterprise' => null,
        'throughType' => null,
        'through' => null,
        'payload' => null
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
        'targetType' => 'target_type',
        'ident' => 'ident',
        'isProper' => 'is_proper',
        'createdAt' => 'created_at',
        'action' => 'action',
        'actionHumanName' => 'action_human_name',
        'author' => 'author',
        'inProject' => 'in_project',
        'inEnterprise' => 'in_enterprise',
        'project' => 'project',
        'enterprise' => 'enterprise',
        'throughType' => 'through_type',
        'through' => 'through',
        'payload' => 'payload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'targetType' => 'setTargetType',
        'ident' => 'setIdent',
        'isProper' => 'setIsProper',
        'createdAt' => 'setCreatedAt',
        'action' => 'setAction',
        'actionHumanName' => 'setActionHumanName',
        'author' => 'setAuthor',
        'inProject' => 'setInProject',
        'inEnterprise' => 'setInEnterprise',
        'project' => 'setProject',
        'enterprise' => 'setEnterprise',
        'throughType' => 'setThroughType',
        'through' => 'setThrough',
        'payload' => 'setPayload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'targetType' => 'getTargetType',
        'ident' => 'getIdent',
        'isProper' => 'getIsProper',
        'createdAt' => 'getCreatedAt',
        'action' => 'getAction',
        'actionHumanName' => 'getActionHumanName',
        'author' => 'getAuthor',
        'inProject' => 'getInProject',
        'inEnterprise' => 'getInEnterprise',
        'project' => 'getProject',
        'enterprise' => 'getEnterprise',
        'throughType' => 'getThroughType',
        'through' => 'getThrough',
        'payload' => 'getPayload'
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
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['ident'] = isset($data['ident']) ? $data['ident'] : null;
        $this->container['isProper'] = isset($data['isProper']) ? $data['isProper'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['actionHumanName'] = isset($data['actionHumanName']) ? $data['actionHumanName'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['inProject'] = isset($data['inProject']) ? $data['inProject'] : null;
        $this->container['inEnterprise'] = isset($data['inEnterprise']) ? $data['inEnterprise'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['enterprise'] = isset($data['enterprise']) ? $data['enterprise'] : null;
        $this->container['throughType'] = isset($data['throughType']) ? $data['throughType'] : null;
        $this->container['through'] = isset($data['through']) ? $data['through'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
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
     * @param int $id 动态id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string $targetType targetType
     *
     * @return $this
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

        return $this;
    }

    /**
     * Gets ident
     *
     * @return string
     */
    public function getIdent()
    {
        return $this->container['ident'];
    }

    /**
     * Sets ident
     *
     * @param string $ident 动态标识
     *
     * @return $this
     */
    public function setIdent($ident)
    {
        $this->container['ident'] = $ident;

        return $this;
    }

    /**
     * Gets isProper
     *
     * @return bool
     */
    public function getIsProper()
    {
        return $this->container['isProper'];
    }

    /**
     * Sets isProper
     *
     * @param bool $isProper 是否合规
     *
     * @return $this
     */
    public function setIsProper($isProper)
    {
        $this->container['isProper'] = $isProper;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string $createdAt 动态产生的时间
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action 动作
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets actionHumanName
     *
     * @return string
     */
    public function getActionHumanName()
    {
        return $this->container['actionHumanName'];
    }

    /**
     * Sets actionHumanName
     *
     * @param string $actionHumanName 动作名称
     *
     * @return $this
     */
    public function setActionHumanName($actionHumanName)
    {
        $this->container['actionHumanName'] = $actionHumanName;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $author 产生动态的成员
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets inProject
     *
     * @return bool
     */
    public function getInProject()
    {
        return $this->container['inProject'];
    }

    /**
     * Sets inProject
     *
     * @param bool $inProject 是否在仓库
     *
     * @return $this
     */
    public function setInProject($inProject)
    {
        $this->container['inProject'] = $inProject;

        return $this;
    }

    /**
     * Gets inEnterprise
     *
     * @return bool
     */
    public function getInEnterprise()
    {
        return $this->container['inEnterprise'];
    }

    /**
     * Sets inEnterprise
     *
     * @param bool $inEnterprise 是否在企业
     *
     * @return $this
     */
    public function setInEnterprise($inEnterprise)
    {
        $this->container['inEnterprise'] = $inEnterprise;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \GiteeEnterprise\Model\Project
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \GiteeEnterprise\Model\Project $project 仓库
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets enterprise
     *
     * @return string
     */
    public function getEnterprise()
    {
        return $this->container['enterprise'];
    }

    /**
     * Sets enterprise
     *
     * @param string $enterprise 企业
     *
     * @return $this
     */
    public function setEnterprise($enterprise)
    {
        $this->container['enterprise'] = $enterprise;

        return $this;
    }

    /**
     * Gets throughType
     *
     * @return string
     */
    public function getThroughType()
    {
        return $this->container['throughType'];
    }

    /**
     * Sets throughType
     *
     * @param string $throughType 动态来源对象类型
     *
     * @return $this
     */
    public function setThroughType($throughType)
    {
        $this->container['throughType'] = $throughType;

        return $this;
    }

    /**
     * Gets through
     *
     * @return object
     */
    public function getThrough()
    {
        return $this->container['through'];
    }

    /**
     * Sets through
     *
     * @param object $through 动态来源对象类型
     *
     * @return $this
     */
    public function setThrough($through)
    {
        $this->container['through'] = $through;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return object
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param object $payload 不同类型动态的内容
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

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


