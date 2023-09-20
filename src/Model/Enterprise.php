<?php
/**
 * Enterprise
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
 * Enterprise Class Doc Comment
 *
 * @category Class
 * @description 更新企业公告内容
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Enterprise implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Enterprise';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'path' => 'string',
        'description' => 'string',
        'public' => 'string',
        'website' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'avatarUrl' => 'string',
        'level' => 'int',
        'title' => 'string',
        'owner' => '\GiteeEnterprise\Model\UserWithRemark',
        'notice' => 'string',
        'welcomeMessage' => 'string',
        'forceVerify' => 'bool',
        'defaultRoleId' => 'int',
        'openApplication' => 'int',
        'version' => 'int',
        'startAt' => 'string',
        'stopAt' => 'string',
        'overdue' => 'bool',
        'charged' => 'bool',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'watermark' => 'bool',
        'giteeSearchStatus' => 'string',
        'hasHedgeOrder' => 'bool',
        'ldapEnabled' => 'bool',
        'registerEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'path' => null,
        'description' => null,
        'public' => null,
        'website' => null,
        'email' => null,
        'phone' => null,
        'avatarUrl' => null,
        'level' => 'int32',
        'title' => null,
        'owner' => null,
        'notice' => null,
        'welcomeMessage' => null,
        'forceVerify' => null,
        'defaultRoleId' => 'int32',
        'openApplication' => 'int32',
        'version' => 'int32',
        'startAt' => 'DateTime',
        'stopAt' => 'DateTime',
        'overdue' => null,
        'charged' => null,
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime',
        'watermark' => null,
        'giteeSearchStatus' => null,
        'hasHedgeOrder' => null,
        'ldapEnabled' => null,
        'registerEnabled' => null
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
        'path' => 'path',
        'description' => 'description',
        'public' => 'public',
        'website' => 'website',
        'email' => 'email',
        'phone' => 'phone',
        'avatarUrl' => 'avatar_url',
        'level' => 'level',
        'title' => 'title',
        'owner' => 'owner',
        'notice' => 'notice',
        'welcomeMessage' => 'welcome_message',
        'forceVerify' => 'force_verify',
        'defaultRoleId' => 'default_role_id',
        'openApplication' => 'open_application',
        'version' => 'version',
        'startAt' => 'start_at',
        'stopAt' => 'stop_at',
        'overdue' => 'overdue',
        'charged' => 'charged',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'watermark' => 'watermark',
        'giteeSearchStatus' => 'gitee_search_status',
        'hasHedgeOrder' => 'has_hedge_order',
        'ldapEnabled' => 'ldap_enabled',
        'registerEnabled' => 'register_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'path' => 'setPath',
        'description' => 'setDescription',
        'public' => 'setPublic',
        'website' => 'setWebsite',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'avatarUrl' => 'setAvatarUrl',
        'level' => 'setLevel',
        'title' => 'setTitle',
        'owner' => 'setOwner',
        'notice' => 'setNotice',
        'welcomeMessage' => 'setWelcomeMessage',
        'forceVerify' => 'setForceVerify',
        'defaultRoleId' => 'setDefaultRoleId',
        'openApplication' => 'setOpenApplication',
        'version' => 'setVersion',
        'startAt' => 'setStartAt',
        'stopAt' => 'setStopAt',
        'overdue' => 'setOverdue',
        'charged' => 'setCharged',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'watermark' => 'setWatermark',
        'giteeSearchStatus' => 'setGiteeSearchStatus',
        'hasHedgeOrder' => 'setHasHedgeOrder',
        'ldapEnabled' => 'setLdapEnabled',
        'registerEnabled' => 'setRegisterEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'path' => 'getPath',
        'description' => 'getDescription',
        'public' => 'getPublic',
        'website' => 'getWebsite',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'avatarUrl' => 'getAvatarUrl',
        'level' => 'getLevel',
        'title' => 'getTitle',
        'owner' => 'getOwner',
        'notice' => 'getNotice',
        'welcomeMessage' => 'getWelcomeMessage',
        'forceVerify' => 'getForceVerify',
        'defaultRoleId' => 'getDefaultRoleId',
        'openApplication' => 'getOpenApplication',
        'version' => 'getVersion',
        'startAt' => 'getStartAt',
        'stopAt' => 'getStopAt',
        'overdue' => 'getOverdue',
        'charged' => 'getCharged',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'watermark' => 'getWatermark',
        'giteeSearchStatus' => 'getGiteeSearchStatus',
        'hasHedgeOrder' => 'getHasHedgeOrder',
        'ldapEnabled' => 'getLdapEnabled',
        'registerEnabled' => 'getRegisterEnabled'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['notice'] = isset($data['notice']) ? $data['notice'] : null;
        $this->container['welcomeMessage'] = isset($data['welcomeMessage']) ? $data['welcomeMessage'] : null;
        $this->container['forceVerify'] = isset($data['forceVerify']) ? $data['forceVerify'] : null;
        $this->container['defaultRoleId'] = isset($data['defaultRoleId']) ? $data['defaultRoleId'] : null;
        $this->container['openApplication'] = isset($data['openApplication']) ? $data['openApplication'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['stopAt'] = isset($data['stopAt']) ? $data['stopAt'] : null;
        $this->container['overdue'] = isset($data['overdue']) ? $data['overdue'] : null;
        $this->container['charged'] = isset($data['charged']) ? $data['charged'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['watermark'] = isset($data['watermark']) ? $data['watermark'] : null;
        $this->container['giteeSearchStatus'] = isset($data['giteeSearchStatus']) ? $data['giteeSearchStatus'] : null;
        $this->container['hasHedgeOrder'] = isset($data['hasHedgeOrder']) ? $data['hasHedgeOrder'] : null;
        $this->container['ldapEnabled'] = isset($data['ldapEnabled']) ? $data['ldapEnabled'] : null;
        $this->container['registerEnabled'] = isset($data['registerEnabled']) ? $data['registerEnabled'] : null;
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
     * @param int $id 企业 id
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
     * @param string $name 企业名称
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path 企业路径
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 企业简介
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets public
     *
     * @return string
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param string $public 企业类型(0: 未公开 1: 公开)
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website 企业官网
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email 企业邮箱
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone 企业手机号码
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets avatarUrl
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
     * Sets avatarUrl
     *
     * @param string $avatarUrl 企业头像
     *
     * @return $this
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int $level 企业套餐所属级别
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title 企业套餐名称
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $owner 企业拥有者
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets notice
     *
     * @return string
     */
    public function getNotice()
    {
        return $this->container['notice'];
    }

    /**
     * Sets notice
     *
     * @param string $notice 企业公告
     *
     * @return $this
     */
    public function setNotice($notice)
    {
        $this->container['notice'] = $notice;

        return $this;
    }

    /**
     * Gets welcomeMessage
     *
     * @return string
     */
    public function getWelcomeMessage()
    {
        return $this->container['welcomeMessage'];
    }

    /**
     * Sets welcomeMessage
     *
     * @param string $welcomeMessage 企业欢迎私信内容
     *
     * @return $this
     */
    public function setWelcomeMessage($welcomeMessage)
    {
        $this->container['welcomeMessage'] = $welcomeMessage;

        return $this;
    }

    /**
     * Gets forceVerify
     *
     * @return bool
     */
    public function getForceVerify()
    {
        return $this->container['forceVerify'];
    }

    /**
     * Sets forceVerify
     *
     * @param bool $forceVerify 是否开启强制审核
     *
     * @return $this
     */
    public function setForceVerify($forceVerify)
    {
        $this->container['forceVerify'] = $forceVerify;

        return $this;
    }

    /**
     * Gets defaultRoleId
     *
     * @return int
     */
    public function getDefaultRoleId()
    {
        return $this->container['defaultRoleId'];
    }

    /**
     * Sets defaultRoleId
     *
     * @param int $defaultRoleId 企业默认角色ID
     *
     * @return $this
     */
    public function setDefaultRoleId($defaultRoleId)
    {
        $this->container['defaultRoleId'] = $defaultRoleId;

        return $this;
    }

    /**
     * Gets openApplication
     *
     * @return int
     */
    public function getOpenApplication()
    {
        return $this->container['openApplication'];
    }

    /**
     * Sets openApplication
     *
     * @param int $openApplication 是否允许外部成员申请加入
     *
     * @return $this
     */
    public function setOpenApplication($openApplication)
    {
        $this->container['openApplication'] = $openApplication;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets startAt
     *
     * @return string
     */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
     * Sets startAt
     *
     * @param string $startAt 套餐开始时间
     *
     * @return $this
     */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;

        return $this;
    }

    /**
     * Gets stopAt
     *
     * @return string
     */
    public function getStopAt()
    {
        return $this->container['stopAt'];
    }

    /**
     * Sets stopAt
     *
     * @param string $stopAt 套餐结束时间（免费版企业为空）
     *
     * @return $this
     */
    public function setStopAt($stopAt)
    {
        $this->container['stopAt'] = $stopAt;

        return $this;
    }

    /**
     * Gets overdue
     *
     * @return bool
     */
    public function getOverdue()
    {
        return $this->container['overdue'];
    }

    /**
     * Sets overdue
     *
     * @param bool $overdue 是否过期企业
     *
     * @return $this
     */
    public function setOverdue($overdue)
    {
        $this->container['overdue'] = $overdue;

        return $this;
    }

    /**
     * Gets charged
     *
     * @return bool
     */
    public function getCharged()
    {
        return $this->container['charged'];
    }

    /**
     * Sets charged
     *
     * @param bool $charged 是否付费企业
     *
     * @return $this
     */
    public function setCharged($charged)
    {
        $this->container['charged'] = $charged;

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
     * @param string $createdAt 企业创建时间
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
     * @param string $updatedAt 上次信息变更时间
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets watermark
     *
     * @return bool
     */
    public function getWatermark()
    {
        return $this->container['watermark'];
    }

    /**
     * Sets watermark
     *
     * @param bool $watermark 是否开启水印
     *
     * @return $this
     */
    public function setWatermark($watermark)
    {
        $this->container['watermark'] = $watermark;

        return $this;
    }

    /**
     * Gets giteeSearchStatus
     *
     * @return string
     */
    public function getGiteeSearchStatus()
    {
        return $this->container['giteeSearchStatus'];
    }

    /**
     * Sets giteeSearchStatus
     *
     * @param string $giteeSearchStatus 是否开启 Gitee Search, not_open、opening、success、failed
     *
     * @return $this
     */
    public function setGiteeSearchStatus($giteeSearchStatus)
    {
        $this->container['giteeSearchStatus'] = $giteeSearchStatus;

        return $this;
    }

    /**
     * Gets hasHedgeOrder
     *
     * @return bool
     */
    public function getHasHedgeOrder()
    {
        return $this->container['hasHedgeOrder'];
    }

    /**
     * Sets hasHedgeOrder
     *
     * @param bool $hasHedgeOrder 是否拥有对冲订单
     *
     * @return $this
     */
    public function setHasHedgeOrder($hasHedgeOrder)
    {
        $this->container['hasHedgeOrder'] = $hasHedgeOrder;

        return $this;
    }

    /**
     * Gets ldapEnabled
     *
     * @return bool
     */
    public function getLdapEnabled()
    {
        return $this->container['ldapEnabled'];
    }

    /**
     * Sets ldapEnabled
     *
     * @param bool $ldapEnabled [Premium] 是否开启 Ldap
     *
     * @return $this
     */
    public function setLdapEnabled($ldapEnabled)
    {
        $this->container['ldapEnabled'] = $ldapEnabled;

        return $this;
    }

    /**
     * Gets registerEnabled
     *
     * @return bool
     */
    public function getRegisterEnabled()
    {
        return $this->container['registerEnabled'];
    }

    /**
     * Sets registerEnabled
     *
     * @param bool $registerEnabled [Premium] 是否开启用户注册
     *
     * @return $this
     */
    public function setRegisterEnabled($registerEnabled)
    {
        $this->container['registerEnabled'] = $registerEnabled;

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


