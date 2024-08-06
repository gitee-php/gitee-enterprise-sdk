<?php
/**
 * Diff
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
 * Diff Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Diff implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Diff';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sha' => 'string',
        'filePathSha' => 'string',
        'filename' => 'string',
        'status' => 'string',
        'additions' => 'int',
        'deletions' => 'int',
        'diffFileLoc' => 'int',
        'statistic' => 'string',
        'head' => 'string',
        'content' => 'string',
        'patch' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sha' => null,
        'filePathSha' => null,
        'filename' => null,
        'status' => null,
        'additions' => 'int32',
        'deletions' => 'int32',
        'diffFileLoc' => 'int32',
        'statistic' => null,
        'head' => null,
        'content' => null,
        'patch' => null
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
        'sha' => 'sha',
        'filePathSha' => 'file_path_sha',
        'filename' => 'filename',
        'status' => 'status',
        'additions' => 'additions',
        'deletions' => 'deletions',
        'diffFileLoc' => 'diff_file_loc',
        'statistic' => 'statistic',
        'head' => 'head',
        'content' => 'content',
        'patch' => 'patch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sha' => 'setSha',
        'filePathSha' => 'setFilePathSha',
        'filename' => 'setFilename',
        'status' => 'setStatus',
        'additions' => 'setAdditions',
        'deletions' => 'setDeletions',
        'diffFileLoc' => 'setDiffFileLoc',
        'statistic' => 'setStatistic',
        'head' => 'setHead',
        'content' => 'setContent',
        'patch' => 'setPatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sha' => 'getSha',
        'filePathSha' => 'getFilePathSha',
        'filename' => 'getFilename',
        'status' => 'getStatus',
        'additions' => 'getAdditions',
        'deletions' => 'getDeletions',
        'diffFileLoc' => 'getDiffFileLoc',
        'statistic' => 'getStatistic',
        'head' => 'getHead',
        'content' => 'getContent',
        'patch' => 'getPatch'
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
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['filePathSha'] = isset($data['filePathSha']) ? $data['filePathSha'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['additions'] = isset($data['additions']) ? $data['additions'] : null;
        $this->container['deletions'] = isset($data['deletions']) ? $data['deletions'] : null;
        $this->container['diffFileLoc'] = isset($data['diffFileLoc']) ? $data['diffFileLoc'] : null;
        $this->container['statistic'] = isset($data['statistic']) ? $data['statistic'] : null;
        $this->container['head'] = isset($data['head']) ? $data['head'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['patch'] = isset($data['patch']) ? $data['patch'] : null;
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
     * @param string $sha Commit ID
     *
     * @return $this
     */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;

        return $this;
    }

    /**
     * Gets filePathSha
     *
     * @return string
     */
    public function getFilePathSha()
    {
        return $this->container['filePathSha'];
    }

    /**
     * Sets filePathSha
     *
     * @param string $filePathSha 文件路径 sha 值
     *
     * @return $this
     */
    public function setFilePathSha($filePathSha)
    {
        $this->container['filePathSha'] = $filePathSha;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename 文件名
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

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
     * @param string $status 文件改动类型。added: 新增 renamed: 重命名 deleted: 删除
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets additions
     *
     * @return int
     */
    public function getAdditions()
    {
        return $this->container['additions'];
    }

    /**
     * Sets additions
     *
     * @param int $additions 新增代码行数
     *
     * @return $this
     */
    public function setAdditions($additions)
    {
        $this->container['additions'] = $additions;

        return $this;
    }

    /**
     * Gets deletions
     *
     * @return int
     */
    public function getDeletions()
    {
        return $this->container['deletions'];
    }

    /**
     * Sets deletions
     *
     * @param int $deletions 删除代码行数
     *
     * @return $this
     */
    public function setDeletions($deletions)
    {
        $this->container['deletions'] = $deletions;

        return $this;
    }

    /**
     * Gets diffFileLoc
     *
     * @return int
     */
    public function getDiffFileLoc()
    {
        return $this->container['diffFileLoc'];
    }

    /**
     * Sets diffFileLoc
     *
     * @param int $diffFileLoc diff文件代码行数
     *
     * @return $this
     */
    public function setDiffFileLoc($diffFileLoc)
    {
        $this->container['diffFileLoc'] = $diffFileLoc;

        return $this;
    }

    /**
     * Gets statistic
     *
     * @return string
     */
    public function getStatistic()
    {
        return $this->container['statistic'];
    }

    /**
     * Sets statistic
     *
     * @param string $statistic diff 统计
     *
     * @return $this
     */
    public function setStatistic($statistic)
    {
        $this->container['statistic'] = $statistic;

        return $this;
    }

    /**
     * Gets head
     *
     * @return string
     */
    public function getHead()
    {
        return $this->container['head'];
    }

    /**
     * Sets head
     *
     * @param string $head diff head
     *
     * @return $this
     */
    public function setHead($head)
    {
        $this->container['head'] = $head;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content diff 内容
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets patch
     *
     * @return object
     */
    public function getPatch()
    {
        return $this->container['patch'];
    }

    /**
     * Sets patch
     *
     * @param object $patch diff内容
     *
     * @return $this
     */
    public function setPatch($patch)
    {
        $this->container['patch'] = $patch;

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


