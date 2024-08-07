<?php
/**
 * CheckRuns
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
 * CheckRuns Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckRuns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckRuns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'headSha' => 'string',
        'projectId' => 'int',
        'strict' => 'bool',
        'passed' => 'bool',
        'status' => 'string',
        'statusName' => 'string',
        'statusDesc' => 'string',
        'detailsUrl' => 'string',
        'startedAt' => 'string',
        'completedAt' => 'string',
        'conclusion' => 'string',
        'actions' => 'null[]',
        'duration' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'rerequestPath' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'headSha' => null,
        'projectId' => 'int32',
        'strict' => null,
        'passed' => null,
        'status' => null,
        'statusName' => null,
        'statusDesc' => null,
        'detailsUrl' => null,
        'startedAt' => null,
        'completedAt' => null,
        'conclusion' => null,
        'actions' => null,
        'duration' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'rerequestPath' => null
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
        'name' => 'name',
        'headSha' => 'head_sha',
        'projectId' => 'project_id',
        'strict' => 'strict',
        'passed' => 'passed',
        'status' => 'status',
        'statusName' => 'status_name',
        'statusDesc' => 'status_desc',
        'detailsUrl' => 'details_url',
        'startedAt' => 'started_at',
        'completedAt' => 'completed_at',
        'conclusion' => 'conclusion',
        'actions' => 'actions',
        'duration' => 'duration',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'rerequestPath' => 'rerequest_path'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'headSha' => 'setHeadSha',
        'projectId' => 'setProjectId',
        'strict' => 'setStrict',
        'passed' => 'setPassed',
        'status' => 'setStatus',
        'statusName' => 'setStatusName',
        'statusDesc' => 'setStatusDesc',
        'detailsUrl' => 'setDetailsUrl',
        'startedAt' => 'setStartedAt',
        'completedAt' => 'setCompletedAt',
        'conclusion' => 'setConclusion',
        'actions' => 'setActions',
        'duration' => 'setDuration',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'rerequestPath' => 'setRerequestPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'headSha' => 'getHeadSha',
        'projectId' => 'getProjectId',
        'strict' => 'getStrict',
        'passed' => 'getPassed',
        'status' => 'getStatus',
        'statusName' => 'getStatusName',
        'statusDesc' => 'getStatusDesc',
        'detailsUrl' => 'getDetailsUrl',
        'startedAt' => 'getStartedAt',
        'completedAt' => 'getCompletedAt',
        'conclusion' => 'getConclusion',
        'actions' => 'getActions',
        'duration' => 'getDuration',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'rerequestPath' => 'getRerequestPath'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['headSha'] = isset($data['headSha']) ? $data['headSha'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['strict'] = isset($data['strict']) ? $data['strict'] : null;
        $this->container['passed'] = isset($data['passed']) ? $data['passed'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusName'] = isset($data['statusName']) ? $data['statusName'] : null;
        $this->container['statusDesc'] = isset($data['statusDesc']) ? $data['statusDesc'] : null;
        $this->container['detailsUrl'] = isset($data['detailsUrl']) ? $data['detailsUrl'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['completedAt'] = isset($data['completedAt']) ? $data['completedAt'] : null;
        $this->container['conclusion'] = isset($data['conclusion']) ? $data['conclusion'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['rerequestPath'] = isset($data['rerequestPath']) ? $data['rerequestPath'] : null;
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
     * @param int $id 门禁ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 门禁名称
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets headSha
     *
     * @return string
     */
    public function getHeadSha()
    {
        return $this->container['headSha'];
    }

    /**
     * Sets headSha
     *
     * @param string $headSha 提价sha
     *
     * @return $this
     */
    public function setHeadSha($headSha)
    {
        $this->container['headSha'] = $headSha;

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
     * Gets strict
     *
     * @return bool
     */
    public function getStrict()
    {
        return $this->container['strict'];
    }

    /**
     * Sets strict
     *
     * @param bool $strict 是否是严格模式
     *
     * @return $this
     */
    public function setStrict($strict)
    {
        $this->container['strict'] = $strict;

        return $this;
    }

    /**
     * Gets passed
     *
     * @return bool
     */
    public function getPassed()
    {
        return $this->container['passed'];
    }

    /**
     * Sets passed
     *
     * @param bool $passed 是否通过检查
     *
     * @return $this
     */
    public function setPassed($passed)
    {
        $this->container['passed'] = $passed;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusName
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->container['statusName'];
    }

    /**
     * Sets statusName
     *
     * @param string $statusName 状态名称
     *
     * @return $this
     */
    public function setStatusName($statusName)
    {
        $this->container['statusName'] = $statusName;

        return $this;
    }

    /**
     * Gets statusDesc
     *
     * @return string
     */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
     * Sets statusDesc
     *
     * @param string $statusDesc 状态描述
     *
     * @return $this
     */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;

        return $this;
    }

    /**
     * Gets detailsUrl
     *
     * @return string
     */
    public function getDetailsUrl()
    {
        return $this->container['detailsUrl'];
    }

    /**
     * Sets detailsUrl
     *
     * @param string $detailsUrl 详情链接
     *
     * @return $this
     */
    public function setDetailsUrl($detailsUrl)
    {
        $this->container['detailsUrl'] = $detailsUrl;

        return $this;
    }

    /**
     * Gets startedAt
     *
     * @return string
     */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
     * Sets startedAt
     *
     * @param string $startedAt 开始时间
     *
     * @return $this
     */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;

        return $this;
    }

    /**
     * Gets completedAt
     *
     * @return string
     */
    public function getCompletedAt()
    {
        return $this->container['completedAt'];
    }

    /**
     * Sets completedAt
     *
     * @param string $completedAt 完成时间
     *
     * @return $this
     */
    public function setCompletedAt($completedAt)
    {
        $this->container['completedAt'] = $completedAt;

        return $this;
    }

    /**
     * Gets conclusion
     *
     * @return string
     */
    public function getConclusion()
    {
        return $this->container['conclusion'];
    }

    /**
     * Sets conclusion
     *
     * @param string $conclusion 结论
     *
     * @return $this
     */
    public function setConclusion($conclusion)
    {
        $this->container['conclusion'] = $conclusion;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return null[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param null[] $actions 执行操作
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration 时长
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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
     * Gets rerequestPath
     *
     * @return string
     */
    public function getRerequestPath()
    {
        return $this->container['rerequestPath'];
    }

    /**
     * Sets rerequestPath
     *
     * @param string $rerequestPath 请求链接
     *
     * @return $this
     */
    public function setRerequestPath($rerequestPath)
    {
        $this->container['rerequestPath'] = $rerequestPath;

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


