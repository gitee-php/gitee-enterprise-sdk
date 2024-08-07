<?php
/**
 * UserStatistic
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
 * UserStatistic Class Doc Comment
 *
 * @category Class
 * @description 获取成员的统计信息
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserStatistic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'userId' => 'int',
        'enterpriseId' => 'int',
        'date' => 'string',
        'closeIssueCount' => 'int',
        'commitCount' => 'int',
        'createIssueCount' => 'int',
        'createPrCount' => 'int',
        'mergePrCount' => 'int',
        'addCodeLine' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'userId' => 'int32',
        'enterpriseId' => 'int32',
        'date' => null,
        'closeIssueCount' => 'int32',
        'commitCount' => 'int32',
        'createIssueCount' => 'int32',
        'createPrCount' => 'int32',
        'mergePrCount' => 'int32',
        'addCodeLine' => 'int32'
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
        'enterpriseId' => 'enterprise_id',
        'date' => 'date',
        'closeIssueCount' => 'close_issue_count',
        'commitCount' => 'commit_count',
        'createIssueCount' => 'create_issue_count',
        'createPrCount' => 'create_pr_count',
        'mergePrCount' => 'merge_pr_count',
        'addCodeLine' => 'add_code_line'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'userId' => 'setUserId',
        'enterpriseId' => 'setEnterpriseId',
        'date' => 'setDate',
        'closeIssueCount' => 'setCloseIssueCount',
        'commitCount' => 'setCommitCount',
        'createIssueCount' => 'setCreateIssueCount',
        'createPrCount' => 'setCreatePrCount',
        'mergePrCount' => 'setMergePrCount',
        'addCodeLine' => 'setAddCodeLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'userId' => 'getUserId',
        'enterpriseId' => 'getEnterpriseId',
        'date' => 'getDate',
        'closeIssueCount' => 'getCloseIssueCount',
        'commitCount' => 'getCommitCount',
        'createIssueCount' => 'getCreateIssueCount',
        'createPrCount' => 'getCreatePrCount',
        'mergePrCount' => 'getMergePrCount',
        'addCodeLine' => 'getAddCodeLine'
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
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['closeIssueCount'] = isset($data['closeIssueCount']) ? $data['closeIssueCount'] : null;
        $this->container['commitCount'] = isset($data['commitCount']) ? $data['commitCount'] : null;
        $this->container['createIssueCount'] = isset($data['createIssueCount']) ? $data['createIssueCount'] : null;
        $this->container['createPrCount'] = isset($data['createPrCount']) ? $data['createPrCount'] : null;
        $this->container['mergePrCount'] = isset($data['mergePrCount']) ? $data['mergePrCount'] : null;
        $this->container['addCodeLine'] = isset($data['addCodeLine']) ? $data['addCodeLine'] : null;
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
     * @param int $id 唯一标示
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
     * @param int $userId 对应用户的 ID
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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
     * @param int $enterpriseId 企业 ID
     *
     * @return $this
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date 日期
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets closeIssueCount
     *
     * @return int
     */
    public function getCloseIssueCount()
    {
        return $this->container['closeIssueCount'];
    }

    /**
     * Sets closeIssueCount
     *
     * @param int $closeIssueCount 关闭的任务总数
     *
     * @return $this
     */
    public function setCloseIssueCount($closeIssueCount)
    {
        $this->container['closeIssueCount'] = $closeIssueCount;

        return $this;
    }

    /**
     * Gets commitCount
     *
     * @return int
     */
    public function getCommitCount()
    {
        return $this->container['commitCount'];
    }

    /**
     * Sets commitCount
     *
     * @param int $commitCount 提交的总数
     *
     * @return $this
     */
    public function setCommitCount($commitCount)
    {
        $this->container['commitCount'] = $commitCount;

        return $this;
    }

    /**
     * Gets createIssueCount
     *
     * @return int
     */
    public function getCreateIssueCount()
    {
        return $this->container['createIssueCount'];
    }

    /**
     * Sets createIssueCount
     *
     * @param int $createIssueCount 创建的任务数
     *
     * @return $this
     */
    public function setCreateIssueCount($createIssueCount)
    {
        $this->container['createIssueCount'] = $createIssueCount;

        return $this;
    }

    /**
     * Gets createPrCount
     *
     * @return int
     */
    public function getCreatePrCount()
    {
        return $this->container['createPrCount'];
    }

    /**
     * Sets createPrCount
     *
     * @param int $createPrCount 创建的 PR 数
     *
     * @return $this
     */
    public function setCreatePrCount($createPrCount)
    {
        $this->container['createPrCount'] = $createPrCount;

        return $this;
    }

    /**
     * Gets mergePrCount
     *
     * @return int
     */
    public function getMergePrCount()
    {
        return $this->container['mergePrCount'];
    }

    /**
     * Sets mergePrCount
     *
     * @param int $mergePrCount 合并的 PR 数
     *
     * @return $this
     */
    public function setMergePrCount($mergePrCount)
    {
        $this->container['mergePrCount'] = $mergePrCount;

        return $this;
    }

    /**
     * Gets addCodeLine
     *
     * @return int
     */
    public function getAddCodeLine()
    {
        return $this->container['addCodeLine'];
    }

    /**
     * Sets addCodeLine
     *
     * @param int $addCodeLine 新增代码行
     *
     * @return $this
     */
    public function setAddCodeLine($addCodeLine)
    {
        $this->container['addCodeLine'] = $addCodeLine;

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


