<?php
/**
 * DeployKeyLog
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
 * DeployKeyLog Class Doc Comment
 *
 * @category Class
 * @description 企业部署公钥管理日志
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeployKeyLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeployKeyLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'userId' => 'int',
        'user' => '\GiteeEnterprise\Model\UserWithRemark',
        'ip' => 'string',
        'targetId' => 'int',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'title' => 'string',
        'type' => 'string',
        'operating' => 'string',
        'targetProject' => '\GiteeEnterprise\Model\Project',
        'targetProjectName' => 'string',
        'targetDeployKeyTitle' => 'string',
        'targetDeployKey' => '\GiteeEnterprise\Model\DeployKey'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'userId' => 'int32',
        'user' => null,
        'ip' => null,
        'targetId' => 'int32',
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime',
        'title' => null,
        'type' => null,
        'operating' => null,
        'targetProject' => null,
        'targetProjectName' => null,
        'targetDeployKeyTitle' => null,
        'targetDeployKey' => null
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
        'userId' => 'user_id',
        'user' => 'user',
        'ip' => 'ip',
        'targetId' => 'target_id',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'title' => 'title',
        'type' => 'type',
        'operating' => 'operating',
        'targetProject' => 'target_project',
        'targetProjectName' => 'target_project_name',
        'targetDeployKeyTitle' => 'target_deploy_key_title',
        'targetDeployKey' => 'target_deploy_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'userId' => 'setUserId',
        'user' => 'setUser',
        'ip' => 'setIp',
        'targetId' => 'setTargetId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'title' => 'setTitle',
        'type' => 'setType',
        'operating' => 'setOperating',
        'targetProject' => 'setTargetProject',
        'targetProjectName' => 'setTargetProjectName',
        'targetDeployKeyTitle' => 'setTargetDeployKeyTitle',
        'targetDeployKey' => 'setTargetDeployKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'userId' => 'getUserId',
        'user' => 'getUser',
        'ip' => 'getIp',
        'targetId' => 'getTargetId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'title' => 'getTitle',
        'type' => 'getType',
        'operating' => 'getOperating',
        'targetProject' => 'getTargetProject',
        'targetProjectName' => 'getTargetProjectName',
        'targetDeployKeyTitle' => 'getTargetDeployKeyTitle',
        'targetDeployKey' => 'getTargetDeployKey'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['operating'] = isset($data['operating']) ? $data['operating'] : null;
        $this->container['targetProject'] = isset($data['targetProject']) ? $data['targetProject'] : null;
        $this->container['targetProjectName'] = isset($data['targetProjectName']) ? $data['targetProjectName'] : null;
        $this->container['targetDeployKeyTitle'] = isset($data['targetDeployKeyTitle']) ? $data['targetDeployKeyTitle'] : null;
        $this->container['targetDeployKey'] = isset($data['targetDeployKey']) ? $data['targetDeployKey'] : null;
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
     * @param int $id ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int $userId 用户ID
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $user 操作用户
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return int
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param int $targetId 目标操作对象ID
     *
     * @return $this
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

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
     * @param string $createdAt 创建时间
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string $updatedAt 更新时间
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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
     * @param string $title 操作对象名称
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 操作对象类型
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets operating
     *
     * @return string
     */
    public function getOperating()
    {
        return $this->container['operating'];
    }

    /**
     * Sets operating
     *
     * @param string $operating 操作
     *
     * @return $this
     */
    public function setOperating($operating)
    {
        $this->container['operating'] = $operating;

        return $this;
    }

    /**
     * Gets targetProject
     *
     * @return \GiteeEnterprise\Model\Project
     */
    public function getTargetProject()
    {
        return $this->container['targetProject'];
    }

    /**
     * Sets targetProject
     *
     * @param \GiteeEnterprise\Model\Project $targetProject 操作对象：仓库
     *
     * @return $this
     */
    public function setTargetProject($targetProject)
    {
        $this->container['targetProject'] = $targetProject;

        return $this;
    }

    /**
     * Gets targetProjectName
     *
     * @return string
     */
    public function getTargetProjectName()
    {
        return $this->container['targetProjectName'];
    }

    /**
     * Sets targetProjectName
     *
     * @param string $targetProjectName 仓库名称
     *
     * @return $this
     */
    public function setTargetProjectName($targetProjectName)
    {
        $this->container['targetProjectName'] = $targetProjectName;

        return $this;
    }

    /**
     * Gets targetDeployKeyTitle
     *
     * @return string
     */
    public function getTargetDeployKeyTitle()
    {
        return $this->container['targetDeployKeyTitle'];
    }

    /**
     * Sets targetDeployKeyTitle
     *
     * @param string $targetDeployKeyTitle 公钥名称
     *
     * @return $this
     */
    public function setTargetDeployKeyTitle($targetDeployKeyTitle)
    {
        $this->container['targetDeployKeyTitle'] = $targetDeployKeyTitle;

        return $this;
    }

    /**
     * Gets targetDeployKey
     *
     * @return \GiteeEnterprise\Model\DeployKey
     */
    public function getTargetDeployKey()
    {
        return $this->container['targetDeployKey'];
    }

    /**
     * Sets targetDeployKey
     *
     * @param \GiteeEnterprise\Model\DeployKey $targetDeployKey 操作对象：部署公钥
     *
     * @return $this
     */
    public function setTargetDeployKey($targetDeployKey)
    {
        $this->container['targetDeployKey'] = $targetDeployKey;

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


