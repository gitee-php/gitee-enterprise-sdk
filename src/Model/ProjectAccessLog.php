<?php
/**
 * ProjectAccessLog
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
 * OpenAPI spec version: 0.1.334
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
 * ProjectAccessLog Class Doc Comment
 *
 * @category Class
 * @description 仓库代码日志
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectAccessLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectAccessLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'uuid' => 'string',
        'userId' => 'int',
        'user' => '\GiteeEnterprise\Model\UserWithRemark',
        'ip' => 'string',
        'ipFilter' => 'string',
        'statType' => 'string',
        'statTypeCn' => 'string',
        'projectId' => 'int',
        'project' => '\GiteeEnterprise\Model\Project',
        'createdAt' => 'string',
        'updatedAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'uuid' => null,
        'userId' => null,
        'user' => null,
        'ip' => null,
        'ipFilter' => null,
        'statType' => null,
        'statTypeCn' => null,
        'projectId' => null,
        'project' => null,
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime'
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
        'uuid' => 'uuid',
        'userId' => 'user_id',
        'user' => 'user',
        'ip' => 'ip',
        'ipFilter' => 'ip_filter',
        'statType' => 'stat_type',
        'statTypeCn' => 'stat_type_cn',
        'projectId' => 'project_id',
        'project' => 'project',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'userId' => 'setUserId',
        'user' => 'setUser',
        'ip' => 'setIp',
        'ipFilter' => 'setIpFilter',
        'statType' => 'setStatType',
        'statTypeCn' => 'setStatTypeCn',
        'projectId' => 'setProjectId',
        'project' => 'setProject',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'userId' => 'getUserId',
        'user' => 'getUser',
        'ip' => 'getIp',
        'ipFilter' => 'getIpFilter',
        'statType' => 'getStatType',
        'statTypeCn' => 'getStatTypeCn',
        'projectId' => 'getProjectId',
        'project' => 'getProject',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['ipFilter'] = isset($data['ipFilter']) ? $data['ipFilter'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
        $this->container['statTypeCn'] = isset($data['statTypeCn']) ? $data['statTypeCn'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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
     * @param \GiteeEnterprise\Model\UserWithRemark $user 操作用户，如果user是null，表示已删除
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
     * Gets ipFilter
     *
     * @return string
     */
    public function getIpFilter()
    {
        return $this->container['ipFilter'];
    }

    /**
     * Sets ipFilter
     *
     * @param string $ipFilter 过滤后IP
     *
     * @return $this
     */
    public function setIpFilter($ipFilter)
    {
        $this->container['ipFilter'] = $ipFilter;

        return $this;
    }

    /**
     * Gets statType
     *
     * @return string
     */
    public function getStatType()
    {
        return $this->container['statType'];
    }

    /**
     * Sets statType
     *
     * @param string $statType 操作: {0=>\"HTTP_ACCESS\", 1=>\"SSH_PULL\", 2=>\"SVN_PULL\", 3=>\"HTTP_PULL\", 4=>\"SSH_PUSH\", 5=>\"SVN_PUSH\", 6=>\"HTTP_PUSH\", 7=>\"DOWNLOAD_ZIP\"}
     *
     * @return $this
     */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;

        return $this;
    }

    /**
     * Gets statTypeCn
     *
     * @return string
     */
    public function getStatTypeCn()
    {
        return $this->container['statTypeCn'];
    }

    /**
     * Sets statTypeCn
     *
     * @param string $statTypeCn 操作
     *
     * @return $this
     */
    public function setStatTypeCn($statTypeCn)
    {
        $this->container['statTypeCn'] = $statTypeCn;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param int $projectId 仓库ID
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

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
     * @param \GiteeEnterprise\Model\Project $project 仓库，如果project是null，表示已删除
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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


