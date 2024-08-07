<?php
/**
 * MyWeekReport
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
 * MyWeekReport Class Doc Comment
 *
 * @category Class
 * @description 获取未提交周报的用户列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MyWeekReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MyWeekReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'year' => 'int',
        'month' => 'int',
        'weekIndex' => 'int',
        'beginDay' => 'string',
        'endDay' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'content' => 'string',
        'contentHtml' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'year' => 'int32',
        'month' => 'int32',
        'weekIndex' => 'int32',
        'beginDay' => 'DateTime',
        'endDay' => 'DateTime',
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime',
        'content' => null,
        'contentHtml' => null
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
        'year' => 'year',
        'month' => 'month',
        'weekIndex' => 'week_index',
        'beginDay' => 'begin_day',
        'endDay' => 'end_day',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'content' => 'content',
        'contentHtml' => 'content_html'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'year' => 'setYear',
        'month' => 'setMonth',
        'weekIndex' => 'setWeekIndex',
        'beginDay' => 'setBeginDay',
        'endDay' => 'setEndDay',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'content' => 'setContent',
        'contentHtml' => 'setContentHtml'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'year' => 'getYear',
        'month' => 'getMonth',
        'weekIndex' => 'getWeekIndex',
        'beginDay' => 'getBeginDay',
        'endDay' => 'getEndDay',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'content' => 'getContent',
        'contentHtml' => 'getContentHtml'
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
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['weekIndex'] = isset($data['weekIndex']) ? $data['weekIndex'] : null;
        $this->container['beginDay'] = isset($data['beginDay']) ? $data['beginDay'] : null;
        $this->container['endDay'] = isset($data['endDay']) ? $data['endDay'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['contentHtml'] = isset($data['contentHtml']) ? $data['contentHtml'] : null;
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
     * @param int $id 周报的 id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year 周报所属年
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month 周报所属月份
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets weekIndex
     *
     * @return int
     */
    public function getWeekIndex()
    {
        return $this->container['weekIndex'];
    }

    /**
     * Sets weekIndex
     *
     * @param int $weekIndex 处于本年的第几周
     *
     * @return $this
     */
    public function setWeekIndex($weekIndex)
    {
        $this->container['weekIndex'] = $weekIndex;

        return $this;
    }

    /**
     * Gets beginDay
     *
     * @return string
     */
    public function getBeginDay()
    {
        return $this->container['beginDay'];
    }

    /**
     * Sets beginDay
     *
     * @param string $beginDay 起始日期
     *
     * @return $this
     */
    public function setBeginDay($beginDay)
    {
        $this->container['beginDay'] = $beginDay;

        return $this;
    }

    /**
     * Gets endDay
     *
     * @return string
     */
    public function getEndDay()
    {
        return $this->container['endDay'];
    }

    /**
     * Sets endDay
     *
     * @param string $endDay 结束日期
     *
     * @return $this
     */
    public function setEndDay($endDay)
    {
        $this->container['endDay'] = $endDay;

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
     * @param string $createdAt 创建日期
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
     * @param string $updatedAt 更新日期
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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
     * @param string $content 周报内容
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets contentHtml
     *
     * @return string
     */
    public function getContentHtml()
    {
        return $this->container['contentHtml'];
    }

    /**
     * Sets contentHtml
     *
     * @param string $contentHtml 周报(html 格式)
     *
     * @return $this
     */
    public function setContentHtml($contentHtml)
    {
        $this->container['contentHtml'] = $contentHtml;

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


