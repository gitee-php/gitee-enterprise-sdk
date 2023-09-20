<?php
/**
 * CommitCompare
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
 * CommitCompare Class Doc Comment
 *
 * @category Class
 * @description 对比commit
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommitCompare implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommitCompare';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tooMoreCommits' => 'int',
        'commitsSize' => 'int',
        'commitsLimitSize' => 'int',
        'diffsSize' => 'string',
        'commits' => '\GiteeEnterprise\Model\CommitBase',
        'diffs' => '\GiteeEnterprise\Model\Diff'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tooMoreCommits' => 'int32',
        'commitsSize' => 'int32',
        'commitsLimitSize' => 'int32',
        'diffsSize' => null,
        'commits' => null,
        'diffs' => null
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
        'tooMoreCommits' => 'too_more_commits',
        'commitsSize' => 'commits_size',
        'commitsLimitSize' => 'commits_limit_size',
        'diffsSize' => 'diffs_size',
        'commits' => 'commits',
        'diffs' => 'diffs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tooMoreCommits' => 'setTooMoreCommits',
        'commitsSize' => 'setCommitsSize',
        'commitsLimitSize' => 'setCommitsLimitSize',
        'diffsSize' => 'setDiffsSize',
        'commits' => 'setCommits',
        'diffs' => 'setDiffs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tooMoreCommits' => 'getTooMoreCommits',
        'commitsSize' => 'getCommitsSize',
        'commitsLimitSize' => 'getCommitsLimitSize',
        'diffsSize' => 'getDiffsSize',
        'commits' => 'getCommits',
        'diffs' => 'getDiffs'
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
        $this->container['tooMoreCommits'] = isset($data['tooMoreCommits']) ? $data['tooMoreCommits'] : null;
        $this->container['commitsSize'] = isset($data['commitsSize']) ? $data['commitsSize'] : null;
        $this->container['commitsLimitSize'] = isset($data['commitsLimitSize']) ? $data['commitsLimitSize'] : null;
        $this->container['diffsSize'] = isset($data['diffsSize']) ? $data['diffsSize'] : null;
        $this->container['commits'] = isset($data['commits']) ? $data['commits'] : null;
        $this->container['diffs'] = isset($data['diffs']) ? $data['diffs'] : null;
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
     * Gets tooMoreCommits
     *
     * @return int
     */
    public function getTooMoreCommits()
    {
        return $this->container['tooMoreCommits'];
    }

    /**
     * Sets tooMoreCommits
     *
     * @param int $tooMoreCommits commits 数量超出限制
     *
     * @return $this
     */
    public function setTooMoreCommits($tooMoreCommits)
    {
        $this->container['tooMoreCommits'] = $tooMoreCommits;

        return $this;
    }

    /**
     * Gets commitsSize
     *
     * @return int
     */
    public function getCommitsSize()
    {
        return $this->container['commitsSize'];
    }

    /**
     * Sets commitsSize
     *
     * @param int $commitsSize commits 数量
     *
     * @return $this
     */
    public function setCommitsSize($commitsSize)
    {
        $this->container['commitsSize'] = $commitsSize;

        return $this;
    }

    /**
     * Gets commitsLimitSize
     *
     * @return int
     */
    public function getCommitsLimitSize()
    {
        return $this->container['commitsLimitSize'];
    }

    /**
     * Sets commitsLimitSize
     *
     * @param int $commitsLimitSize commits 数量上限
     *
     * @return $this
     */
    public function setCommitsLimitSize($commitsLimitSize)
    {
        $this->container['commitsLimitSize'] = $commitsLimitSize;

        return $this;
    }

    /**
     * Gets diffsSize
     *
     * @return string
     */
    public function getDiffsSize()
    {
        return $this->container['diffsSize'];
    }

    /**
     * Sets diffsSize
     *
     * @param string $diffsSize diff差异文件数量
     *
     * @return $this
     */
    public function setDiffsSize($diffsSize)
    {
        $this->container['diffsSize'] = $diffsSize;

        return $this;
    }

    /**
     * Gets commits
     *
     * @return \GiteeEnterprise\Model\CommitBase
     */
    public function getCommits()
    {
        return $this->container['commits'];
    }

    /**
     * Sets commits
     *
     * @param \GiteeEnterprise\Model\CommitBase $commits commits 列表
     *
     * @return $this
     */
    public function setCommits($commits)
    {
        $this->container['commits'] = $commits;

        return $this;
    }

    /**
     * Gets diffs
     *
     * @return \GiteeEnterprise\Model\Diff
     */
    public function getDiffs()
    {
        return $this->container['diffs'];
    }

    /**
     * Sets diffs
     *
     * @param \GiteeEnterprise\Model\Diff $diffs diff内容
     *
     * @return $this
     */
    public function setDiffs($diffs)
    {
        $this->container['diffs'] = $diffs;

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


