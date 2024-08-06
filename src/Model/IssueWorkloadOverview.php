<?php
/**
 * IssueWorkloadOverview
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
 * IssueWorkloadOverview Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IssueWorkloadOverview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IssueWorkloadOverview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'estimatedDuration' => 'float',
        'leftDuration' => 'float',
        'registeredDuration' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'estimatedDuration' => null,
        'leftDuration' => null,
        'registeredDuration' => null
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
        'estimatedDuration' => 'estimated_duration',
        'leftDuration' => 'left_duration',
        'registeredDuration' => 'registered_duration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'estimatedDuration' => 'setEstimatedDuration',
        'leftDuration' => 'setLeftDuration',
        'registeredDuration' => 'setRegisteredDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'estimatedDuration' => 'getEstimatedDuration',
        'leftDuration' => 'getLeftDuration',
        'registeredDuration' => 'getRegisteredDuration'
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
        $this->container['estimatedDuration'] = isset($data['estimatedDuration']) ? $data['estimatedDuration'] : null;
        $this->container['leftDuration'] = isset($data['leftDuration']) ? $data['leftDuration'] : null;
        $this->container['registeredDuration'] = isset($data['registeredDuration']) ? $data['registeredDuration'] : null;
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
     * Gets estimatedDuration
     *
     * @return float
     */
    public function getEstimatedDuration()
    {
        return $this->container['estimatedDuration'];
    }

    /**
     * Sets estimatedDuration
     *
     * @param float $estimatedDuration 预预估工时
     *
     * @return $this
     */
    public function setEstimatedDuration($estimatedDuration)
    {
        $this->container['estimatedDuration'] = $estimatedDuration;

        return $this;
    }

    /**
     * Gets leftDuration
     *
     * @return float
     */
    public function getLeftDuration()
    {
        return $this->container['leftDuration'];
    }

    /**
     * Sets leftDuration
     *
     * @param float $leftDuration 剩余工时
     *
     * @return $this
     */
    public function setLeftDuration($leftDuration)
    {
        $this->container['leftDuration'] = $leftDuration;

        return $this;
    }

    /**
     * Gets registeredDuration
     *
     * @return float
     */
    public function getRegisteredDuration()
    {
        return $this->container['registeredDuration'];
    }

    /**
     * Sets registeredDuration
     *
     * @param float $registeredDuration 登记工时
     *
     * @return $this
     */
    public function setRegisteredDuration($registeredDuration)
    {
        $this->container['registeredDuration'] = $registeredDuration;

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


