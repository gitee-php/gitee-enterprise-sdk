<?php
/**
 * Commit
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
 * Commit Class Doc Comment
 *
 * @category Class
 * @description 获取版本历史详情
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Commit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Commit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'int',
        'titleMarkdown' => 'string',
        'sha' => 'string',
        'fullSha' => 'int',
        'parentIds' => 'null[]',
        'htmlUrl' => 'string',
        'date' => 'string',
        'author' => 'object',
        'signature' => 'string',
        'scanTask' => 'object',
        'checkRunsPath' => 'string',
        'checkAnnoatationsPath' => 'string',
        'checkState' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => 'int32',
        'titleMarkdown' => null,
        'sha' => null,
        'fullSha' => 'int32',
        'parentIds' => null,
        'htmlUrl' => null,
        'date' => null,
        'author' => null,
        'signature' => null,
        'scanTask' => null,
        'checkRunsPath' => null,
        'checkAnnoatationsPath' => null,
        'checkState' => null
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
        'title' => 'title',
        'titleMarkdown' => 'title_markdown',
        'sha' => 'sha',
        'fullSha' => 'full_sha',
        'parentIds' => 'parent_ids',
        'htmlUrl' => 'html_url',
        'date' => 'date',
        'author' => 'author',
        'signature' => 'signature',
        'scanTask' => 'scan_task',
        'checkRunsPath' => 'check_runs_path',
        'checkAnnoatationsPath' => 'check_annoatations_path',
        'checkState' => 'check_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'titleMarkdown' => 'setTitleMarkdown',
        'sha' => 'setSha',
        'fullSha' => 'setFullSha',
        'parentIds' => 'setParentIds',
        'htmlUrl' => 'setHtmlUrl',
        'date' => 'setDate',
        'author' => 'setAuthor',
        'signature' => 'setSignature',
        'scanTask' => 'setScanTask',
        'checkRunsPath' => 'setCheckRunsPath',
        'checkAnnoatationsPath' => 'setCheckAnnoatationsPath',
        'checkState' => 'setCheckState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'titleMarkdown' => 'getTitleMarkdown',
        'sha' => 'getSha',
        'fullSha' => 'getFullSha',
        'parentIds' => 'getParentIds',
        'htmlUrl' => 'getHtmlUrl',
        'date' => 'getDate',
        'author' => 'getAuthor',
        'signature' => 'getSignature',
        'scanTask' => 'getScanTask',
        'checkRunsPath' => 'getCheckRunsPath',
        'checkAnnoatationsPath' => 'getCheckAnnoatationsPath',
        'checkState' => 'getCheckState'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['titleMarkdown'] = isset($data['titleMarkdown']) ? $data['titleMarkdown'] : null;
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['fullSha'] = isset($data['fullSha']) ? $data['fullSha'] : null;
        $this->container['parentIds'] = isset($data['parentIds']) ? $data['parentIds'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['scanTask'] = isset($data['scanTask']) ? $data['scanTask'] : null;
        $this->container['checkRunsPath'] = isset($data['checkRunsPath']) ? $data['checkRunsPath'] : null;
        $this->container['checkAnnoatationsPath'] = isset($data['checkAnnoatationsPath']) ? $data['checkAnnoatationsPath'] : null;
        $this->container['checkState'] = isset($data['checkState']) ? $data['checkState'] : null;
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
     * Gets title
     *
     * @return int
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param int $title 门禁ID
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets titleMarkdown
     *
     * @return string
     */
    public function getTitleMarkdown()
    {
        return $this->container['titleMarkdown'];
    }

    /**
     * Sets titleMarkdown
     *
     * @param string $titleMarkdown 门禁名称
     *
     * @return $this
     */
    public function setTitleMarkdown($titleMarkdown)
    {
        $this->container['titleMarkdown'] = $titleMarkdown;

        return $this;
    }

    /**
     * Gets sha
     *
     * @return string
     */
    public function getSha()
    {
        return $this->container['sha'];
    }

    /**
     * Sets sha
     *
     * @param string $sha 提价sha
     *
     * @return $this
     */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;

        return $this;
    }

    /**
     * Gets fullSha
     *
     * @return int
     */
    public function getFullSha()
    {
        return $this->container['fullSha'];
    }

    /**
     * Sets fullSha
     *
     * @param int $fullSha 完整sha
     *
     * @return $this
     */
    public function setFullSha($fullSha)
    {
        $this->container['fullSha'] = $fullSha;

        return $this;
    }

    /**
     * Gets parentIds
     *
     * @return null[]
     */
    public function getParentIds()
    {
        return $this->container['parentIds'];
    }

    /**
     * Sets parentIds
     *
     * @param null[] $parentIds 父id数组
     *
     * @return $this
     */
    public function setParentIds($parentIds)
    {
        $this->container['parentIds'] = $parentIds;

        return $this;
    }

    /**
     * Gets htmlUrl
     *
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->container['htmlUrl'];
    }

    /**
     * Sets htmlUrl
     *
     * @param string $htmlUrl Html链接
     *
     * @return $this
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->container['htmlUrl'] = $htmlUrl;

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
     * @param string $date 提交时间
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets author
     *
     * @return object
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param object $author 提交者信息
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature 签名
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets scanTask
     *
     * @return object
     */
    public function getScanTask()
    {
        return $this->container['scanTask'];
    }

    /**
     * Sets scanTask
     *
     * @param object $scanTask 扫描任务
     *
     * @return $this
     */
    public function setScanTask($scanTask)
    {
        $this->container['scanTask'] = $scanTask;

        return $this;
    }

    /**
     * Gets checkRunsPath
     *
     * @return string
     */
    public function getCheckRunsPath()
    {
        return $this->container['checkRunsPath'];
    }

    /**
     * Sets checkRunsPath
     *
     * @param string $checkRunsPath 门禁路径
     *
     * @return $this
     */
    public function setCheckRunsPath($checkRunsPath)
    {
        $this->container['checkRunsPath'] = $checkRunsPath;

        return $this;
    }

    /**
     * Gets checkAnnoatationsPath
     *
     * @return string
     */
    public function getCheckAnnoatationsPath()
    {
        return $this->container['checkAnnoatationsPath'];
    }

    /**
     * Sets checkAnnoatationsPath
     *
     * @param string $checkAnnoatationsPath 门禁注释路径
     *
     * @return $this
     */
    public function setCheckAnnoatationsPath($checkAnnoatationsPath)
    {
        $this->container['checkAnnoatationsPath'] = $checkAnnoatationsPath;

        return $this;
    }

    /**
     * Gets checkState
     *
     * @return string
     */
    public function getCheckState()
    {
        return $this->container['checkState'];
    }

    /**
     * Sets checkState
     *
     * @param string $checkState 结论
     *
     * @return $this
     */
    public function setCheckState($checkState)
    {
        $this->container['checkState'] = $checkState;

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

