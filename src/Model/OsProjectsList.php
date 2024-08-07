<?php
/**
 * OsProjectsList
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
 * OsProjectsList Class Doc Comment
 *
 * @category Class
 * @description 获取企业开源仓库详情列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OsProjectsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OsProjectsList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'closeIssueCount' => 'null[]',
        'codeLineCount' => 'null[]',
        'commitCount' => 'null[]',
        'createIssueCount' => 'null[]',
        'createPrCount' => 'null[]',
        'dateList' => 'null[]',
        'forkCount' => 'null[]',
        'mergePrCount' => 'null[]',
        'projectIds' => 'null[]',
        'projects' => '\GiteeEnterprise\Model\OsProject',
        'starsCount' => 'null[]',
        'startDate' => 'string',
        'endDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'closeIssueCount' => null,
        'codeLineCount' => null,
        'commitCount' => null,
        'createIssueCount' => null,
        'createPrCount' => null,
        'dateList' => null,
        'forkCount' => null,
        'mergePrCount' => null,
        'projectIds' => null,
        'projects' => null,
        'starsCount' => null,
        'startDate' => 'DateTime',
        'endDate' => 'DateTime'
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
        'closeIssueCount' => 'close_issue_count',
        'codeLineCount' => 'code_line_count',
        'commitCount' => 'commit_count',
        'createIssueCount' => 'create_issue_count',
        'createPrCount' => 'create_pr_count',
        'dateList' => 'date_list',
        'forkCount' => 'fork_count',
        'mergePrCount' => 'merge_pr_count',
        'projectIds' => 'project_ids',
        'projects' => 'projects',
        'starsCount' => 'stars_count',
        'startDate' => 'start_date',
        'endDate' => 'end_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'closeIssueCount' => 'setCloseIssueCount',
        'codeLineCount' => 'setCodeLineCount',
        'commitCount' => 'setCommitCount',
        'createIssueCount' => 'setCreateIssueCount',
        'createPrCount' => 'setCreatePrCount',
        'dateList' => 'setDateList',
        'forkCount' => 'setForkCount',
        'mergePrCount' => 'setMergePrCount',
        'projectIds' => 'setProjectIds',
        'projects' => 'setProjects',
        'starsCount' => 'setStarsCount',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'closeIssueCount' => 'getCloseIssueCount',
        'codeLineCount' => 'getCodeLineCount',
        'commitCount' => 'getCommitCount',
        'createIssueCount' => 'getCreateIssueCount',
        'createPrCount' => 'getCreatePrCount',
        'dateList' => 'getDateList',
        'forkCount' => 'getForkCount',
        'mergePrCount' => 'getMergePrCount',
        'projectIds' => 'getProjectIds',
        'projects' => 'getProjects',
        'starsCount' => 'getStarsCount',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate'
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
        $this->container['closeIssueCount'] = isset($data['closeIssueCount']) ? $data['closeIssueCount'] : null;
        $this->container['codeLineCount'] = isset($data['codeLineCount']) ? $data['codeLineCount'] : null;
        $this->container['commitCount'] = isset($data['commitCount']) ? $data['commitCount'] : null;
        $this->container['createIssueCount'] = isset($data['createIssueCount']) ? $data['createIssueCount'] : null;
        $this->container['createPrCount'] = isset($data['createPrCount']) ? $data['createPrCount'] : null;
        $this->container['dateList'] = isset($data['dateList']) ? $data['dateList'] : null;
        $this->container['forkCount'] = isset($data['forkCount']) ? $data['forkCount'] : null;
        $this->container['mergePrCount'] = isset($data['mergePrCount']) ? $data['mergePrCount'] : null;
        $this->container['projectIds'] = isset($data['projectIds']) ? $data['projectIds'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['starsCount'] = isset($data['starsCount']) ? $data['starsCount'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
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
     * Gets closeIssueCount
     *
     * @return null[]
     */
    public function getCloseIssueCount()
    {
        return $this->container['closeIssueCount'];
    }

    /**
     * Sets closeIssueCount
     *
     * @param null[] $closeIssueCount 完成任务数
     *
     * @return $this
     */
    public function setCloseIssueCount($closeIssueCount)
    {
        $this->container['closeIssueCount'] = $closeIssueCount;

        return $this;
    }

    /**
     * Gets codeLineCount
     *
     * @return null[]
     */
    public function getCodeLineCount()
    {
        return $this->container['codeLineCount'];
    }

    /**
     * Sets codeLineCount
     *
     * @param null[] $codeLineCount 代码行数
     *
     * @return $this
     */
    public function setCodeLineCount($codeLineCount)
    {
        $this->container['codeLineCount'] = $codeLineCount;

        return $this;
    }

    /**
     * Gets commitCount
     *
     * @return null[]
     */
    public function getCommitCount()
    {
        return $this->container['commitCount'];
    }

    /**
     * Sets commitCount
     *
     * @param null[] $commitCount 提交数
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
     * @return null[]
     */
    public function getCreateIssueCount()
    {
        return $this->container['createIssueCount'];
    }

    /**
     * Sets createIssueCount
     *
     * @param null[] $createIssueCount 创建任务数
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
     * @return null[]
     */
    public function getCreatePrCount()
    {
        return $this->container['createPrCount'];
    }

    /**
     * Sets createPrCount
     *
     * @param null[] $createPrCount 创建PR数
     *
     * @return $this
     */
    public function setCreatePrCount($createPrCount)
    {
        $this->container['createPrCount'] = $createPrCount;

        return $this;
    }

    /**
     * Gets dateList
     *
     * @return null[]
     */
    public function getDateList()
    {
        return $this->container['dateList'];
    }

    /**
     * Sets dateList
     *
     * @param null[] $dateList 日期列表
     *
     * @return $this
     */
    public function setDateList($dateList)
    {
        $this->container['dateList'] = $dateList;

        return $this;
    }

    /**
     * Gets forkCount
     *
     * @return null[]
     */
    public function getForkCount()
    {
        return $this->container['forkCount'];
    }

    /**
     * Sets forkCount
     *
     * @param null[] $forkCount fork数量
     *
     * @return $this
     */
    public function setForkCount($forkCount)
    {
        $this->container['forkCount'] = $forkCount;

        return $this;
    }

    /**
     * Gets mergePrCount
     *
     * @return null[]
     */
    public function getMergePrCount()
    {
        return $this->container['mergePrCount'];
    }

    /**
     * Sets mergePrCount
     *
     * @param null[] $mergePrCount 合并PR数
     *
     * @return $this
     */
    public function setMergePrCount($mergePrCount)
    {
        $this->container['mergePrCount'] = $mergePrCount;

        return $this;
    }

    /**
     * Gets projectIds
     *
     * @return null[]
     */
    public function getProjectIds()
    {
        return $this->container['projectIds'];
    }

    /**
     * Sets projectIds
     *
     * @param null[] $projectIds 仓库id列表
     *
     * @return $this
     */
    public function setProjectIds($projectIds)
    {
        $this->container['projectIds'] = $projectIds;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \GiteeEnterprise\Model\OsProject
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \GiteeEnterprise\Model\OsProject $projects projects
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets starsCount
     *
     * @return null[]
     */
    public function getStarsCount()
    {
        return $this->container['starsCount'];
    }

    /**
     * Sets starsCount
     *
     * @param null[] $starsCount star数
     *
     * @return $this
     */
    public function setStarsCount($starsCount)
    {
        $this->container['starsCount'] = $starsCount;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param string $startDate 起始日期
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string $endDate 终止日期
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

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


