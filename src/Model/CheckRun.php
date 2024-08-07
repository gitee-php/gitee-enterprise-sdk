<?php
/**
 * CheckRun
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
 * CheckRun Class Doc Comment
 *
 * @category Class
 * @description 门禁列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckRun';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'checkRunOutput' => '\GiteeEnterprise\Model\CheckRunOutOut[]',
        'checkRuns' => '\GiteeEnterprise\Model\CheckRuns[]',
        'commit' => '\GiteeEnterprise\Model\Commit',
        'pullRuns' => '\GiteeEnterprise\Model\PullRuns[]',
        'summary' => '\GiteeEnterprise\Model\CheckRunSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'checkRunOutput' => null,
        'checkRuns' => null,
        'commit' => null,
        'pullRuns' => null,
        'summary' => null
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
        'checkRunOutput' => 'check_run_output',
        'checkRuns' => 'check_runs',
        'commit' => 'commit',
        'pullRuns' => 'pull_runs',
        'summary' => 'summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkRunOutput' => 'setCheckRunOutput',
        'checkRuns' => 'setCheckRuns',
        'commit' => 'setCommit',
        'pullRuns' => 'setPullRuns',
        'summary' => 'setSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkRunOutput' => 'getCheckRunOutput',
        'checkRuns' => 'getCheckRuns',
        'commit' => 'getCommit',
        'pullRuns' => 'getPullRuns',
        'summary' => 'getSummary'
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
        $this->container['checkRunOutput'] = isset($data['checkRunOutput']) ? $data['checkRunOutput'] : null;
        $this->container['checkRuns'] = isset($data['checkRuns']) ? $data['checkRuns'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['pullRuns'] = isset($data['pullRuns']) ? $data['pullRuns'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
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
     * Gets checkRunOutput
     *
     * @return \GiteeEnterprise\Model\CheckRunOutOut[]
     */
    public function getCheckRunOutput()
    {
        return $this->container['checkRunOutput'];
    }

    /**
     * Sets checkRunOutput
     *
     * @param \GiteeEnterprise\Model\CheckRunOutOut[] $checkRunOutput 门禁详情数组
     *
     * @return $this
     */
    public function setCheckRunOutput($checkRunOutput)
    {
        $this->container['checkRunOutput'] = $checkRunOutput;

        return $this;
    }

    /**
     * Gets checkRuns
     *
     * @return \GiteeEnterprise\Model\CheckRuns[]
     */
    public function getCheckRuns()
    {
        return $this->container['checkRuns'];
    }

    /**
     * Sets checkRuns
     *
     * @param \GiteeEnterprise\Model\CheckRuns[] $checkRuns 门禁数组
     *
     * @return $this
     */
    public function setCheckRuns($checkRuns)
    {
        $this->container['checkRuns'] = $checkRuns;

        return $this;
    }

    /**
     * Gets commit
     *
     * @return \GiteeEnterprise\Model\Commit
     */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
     * Sets commit
     *
     * @param \GiteeEnterprise\Model\Commit $commit commit数组
     *
     * @return $this
     */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;

        return $this;
    }

    /**
     * Gets pullRuns
     *
     * @return \GiteeEnterprise\Model\PullRuns[]
     */
    public function getPullRuns()
    {
        return $this->container['pullRuns'];
    }

    /**
     * Sets pullRuns
     *
     * @param \GiteeEnterprise\Model\PullRuns[] $pullRuns 运行的门禁
     *
     * @return $this
     */
    public function setPullRuns($pullRuns)
    {
        $this->container['pullRuns'] = $pullRuns;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \GiteeEnterprise\Model\CheckRunSummary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \GiteeEnterprise\Model\CheckRunSummary $summary 门禁 summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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

