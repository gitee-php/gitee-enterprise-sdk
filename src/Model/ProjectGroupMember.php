<?php
/**
 * ProjectGroupMember
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
 * ProjectGroupMember Class Doc Comment
 *
 * @category Class
 * @description 修改仓库组成员信息
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectGroupMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectGroupMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'userId' => 'int',
        'name' => 'string',
        'nickname' => 'string',
        'username' => 'string',
        'avatarUrl' => 'string',
        'isMyself' => 'bool',
        'isBlocked' => 'bool',
        'email' => 'string',
        'accessLevel' => 'int',
        'createdAt' => 'string',
        'authSource' => 'int',
        'accessLevelName' => 'string',
        'currentUserIsAdmin' => 'bool',
        'currentUserIsGroupAdmin' => 'bool',
        'projectGroupOwner' => 'bool',
        'expiredAt' => 'string',
        'rootProjectGroup' => '\GiteeEnterprise\Model\ProjectGroup',
        'rootGroup' => '\GiteeEnterprise\Model\Group'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'userId' => 'int32',
        'name' => null,
        'nickname' => null,
        'username' => null,
        'avatarUrl' => null,
        'isMyself' => null,
        'isBlocked' => null,
        'email' => null,
        'accessLevel' => 'int32',
        'createdAt' => 'DateTime',
        'authSource' => 'int32',
        'accessLevelName' => null,
        'currentUserIsAdmin' => null,
        'currentUserIsGroupAdmin' => null,
        'projectGroupOwner' => null,
        'expiredAt' => 'DateTime',
        'rootProjectGroup' => null,
        'rootGroup' => null
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
        'name' => 'name',
        'nickname' => 'nickname',
        'username' => 'username',
        'avatarUrl' => 'avatar_url',
        'isMyself' => 'is_myself',
        'isBlocked' => 'is_blocked',
        'email' => 'email',
        'accessLevel' => 'access_level',
        'createdAt' => 'created_at',
        'authSource' => 'auth_source',
        'accessLevelName' => 'access_level_name',
        'currentUserIsAdmin' => 'current_user_is_admin',
        'currentUserIsGroupAdmin' => 'current_user_is_group_admin',
        'projectGroupOwner' => 'project_group_owner',
        'expiredAt' => 'expired_at',
        'rootProjectGroup' => 'root_project_group',
        'rootGroup' => 'root_group'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'userId' => 'setUserId',
        'name' => 'setName',
        'nickname' => 'setNickname',
        'username' => 'setUsername',
        'avatarUrl' => 'setAvatarUrl',
        'isMyself' => 'setIsMyself',
        'isBlocked' => 'setIsBlocked',
        'email' => 'setEmail',
        'accessLevel' => 'setAccessLevel',
        'createdAt' => 'setCreatedAt',
        'authSource' => 'setAuthSource',
        'accessLevelName' => 'setAccessLevelName',
        'currentUserIsAdmin' => 'setCurrentUserIsAdmin',
        'currentUserIsGroupAdmin' => 'setCurrentUserIsGroupAdmin',
        'projectGroupOwner' => 'setProjectGroupOwner',
        'expiredAt' => 'setExpiredAt',
        'rootProjectGroup' => 'setRootProjectGroup',
        'rootGroup' => 'setRootGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'userId' => 'getUserId',
        'name' => 'getName',
        'nickname' => 'getNickname',
        'username' => 'getUsername',
        'avatarUrl' => 'getAvatarUrl',
        'isMyself' => 'getIsMyself',
        'isBlocked' => 'getIsBlocked',
        'email' => 'getEmail',
        'accessLevel' => 'getAccessLevel',
        'createdAt' => 'getCreatedAt',
        'authSource' => 'getAuthSource',
        'accessLevelName' => 'getAccessLevelName',
        'currentUserIsAdmin' => 'getCurrentUserIsAdmin',
        'currentUserIsGroupAdmin' => 'getCurrentUserIsGroupAdmin',
        'projectGroupOwner' => 'getProjectGroupOwner',
        'expiredAt' => 'getExpiredAt',
        'rootProjectGroup' => 'getRootProjectGroup',
        'rootGroup' => 'getRootGroup'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['isMyself'] = isset($data['isMyself']) ? $data['isMyself'] : null;
        $this->container['isBlocked'] = isset($data['isBlocked']) ? $data['isBlocked'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['accessLevel'] = isset($data['accessLevel']) ? $data['accessLevel'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['authSource'] = isset($data['authSource']) ? $data['authSource'] : null;
        $this->container['accessLevelName'] = isset($data['accessLevelName']) ? $data['accessLevelName'] : null;
        $this->container['currentUserIsAdmin'] = isset($data['currentUserIsAdmin']) ? $data['currentUserIsAdmin'] : null;
        $this->container['currentUserIsGroupAdmin'] = isset($data['currentUserIsGroupAdmin']) ? $data['currentUserIsGroupAdmin'] : null;
        $this->container['projectGroupOwner'] = isset($data['projectGroupOwner']) ? $data['projectGroupOwner'] : null;
        $this->container['expiredAt'] = isset($data['expiredAt']) ? $data['expiredAt'] : null;
        $this->container['rootProjectGroup'] = isset($data['rootProjectGroup']) ? $data['rootProjectGroup'] : null;
        $this->container['rootGroup'] = isset($data['rootGroup']) ? $data['rootGroup'] : null;
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
     * @param int $id 成员 ID
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
     * @param int $userId 用户 ID
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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
     * @param string $name 用户名
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname 用户昵称
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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
     * @param string $avatarUrl 用户头像链接
     *
     * @return $this
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

        return $this;
    }

    /**
     * Gets isMyself
     *
     * @return bool
     */
    public function getIsMyself()
    {
        return $this->container['isMyself'];
    }

    /**
     * Sets isMyself
     *
     * @param bool $isMyself 是否为当前用户
     *
     * @return $this
     */
    public function setIsMyself($isMyself)
    {
        $this->container['isMyself'] = $isMyself;

        return $this;
    }

    /**
     * Gets isBlocked
     *
     * @return bool
     */
    public function getIsBlocked()
    {
        return $this->container['isBlocked'];
    }

    /**
     * Sets isBlocked
     *
     * @param bool $isBlocked 是否被锁定
     *
     * @return $this
     */
    public function setIsBlocked($isBlocked)
    {
        $this->container['isBlocked'] = $isBlocked;

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
     * @param string $email 用户邮箱
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets accessLevel
     *
     * @return int
     */
    public function getAccessLevel()
    {
        return $this->container['accessLevel'];
    }

    /**
     * Sets accessLevel
     *
     * @param int $accessLevel 角色级别
     *
     * @return $this
     */
    public function setAccessLevel($accessLevel)
    {
        $this->container['accessLevel'] = $accessLevel;

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
     * @param string $createdAt 加入时间
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets authSource
     *
     * @return int
     */
    public function getAuthSource()
    {
        return $this->container['authSource'];
    }

    /**
     * Sets authSource
     *
     * @param int $authSource 0: 直接成员 1：顶级仓库组 2：顶级团队
     *
     * @return $this
     */
    public function setAuthSource($authSource)
    {
        $this->container['authSource'] = $authSource;

        return $this;
    }

    /**
     * Gets accessLevelName
     *
     * @return string
     */
    public function getAccessLevelName()
    {
        return $this->container['accessLevelName'];
    }

    /**
     * Sets accessLevelName
     *
     * @param string $accessLevelName 用户在仓库组中的级别名称
     *
     * @return $this
     */
    public function setAccessLevelName($accessLevelName)
    {
        $this->container['accessLevelName'] = $accessLevelName;

        return $this;
    }

    /**
     * Gets currentUserIsAdmin
     *
     * @return bool
     */
    public function getCurrentUserIsAdmin()
    {
        return $this->container['currentUserIsAdmin'];
    }

    /**
     * Sets currentUserIsAdmin
     *
     * @param bool $currentUserIsAdmin 当前用户是否为仓库组管理员
     *
     * @return $this
     */
    public function setCurrentUserIsAdmin($currentUserIsAdmin)
    {
        $this->container['currentUserIsAdmin'] = $currentUserIsAdmin;

        return $this;
    }

    /**
     * Gets currentUserIsGroupAdmin
     *
     * @return bool
     */
    public function getCurrentUserIsGroupAdmin()
    {
        return $this->container['currentUserIsGroupAdmin'];
    }

    /**
     * Sets currentUserIsGroupAdmin
     *
     * @param bool $currentUserIsGroupAdmin 当前用户是否为团队管理员
     *
     * @return $this
     */
    public function setCurrentUserIsGroupAdmin($currentUserIsGroupAdmin)
    {
        $this->container['currentUserIsGroupAdmin'] = $currentUserIsGroupAdmin;

        return $this;
    }

    /**
     * Gets projectGroupOwner
     *
     * @return bool
     */
    public function getProjectGroupOwner()
    {
        return $this->container['projectGroupOwner'];
    }

    /**
     * Sets projectGroupOwner
     *
     * @param bool $projectGroupOwner 是否是仓库组拥有者
     *
     * @return $this
     */
    public function setProjectGroupOwner($projectGroupOwner)
    {
        $this->container['projectGroupOwner'] = $projectGroupOwner;

        return $this;
    }

    /**
     * Gets expiredAt
     *
     * @return string
     */
    public function getExpiredAt()
    {
        return $this->container['expiredAt'];
    }

    /**
     * Sets expiredAt
     *
     * @param string $expiredAt 过期时间
     *
     * @return $this
     */
    public function setExpiredAt($expiredAt)
    {
        $this->container['expiredAt'] = $expiredAt;

        return $this;
    }

    /**
     * Gets rootProjectGroup
     *
     * @return \GiteeEnterprise\Model\ProjectGroup
     */
    public function getRootProjectGroup()
    {
        return $this->container['rootProjectGroup'];
    }

    /**
     * Sets rootProjectGroup
     *
     * @param \GiteeEnterprise\Model\ProjectGroup $rootProjectGroup 仓库组
     *
     * @return $this
     */
    public function setRootProjectGroup($rootProjectGroup)
    {
        $this->container['rootProjectGroup'] = $rootProjectGroup;

        return $this;
    }

    /**
     * Gets rootGroup
     *
     * @return \GiteeEnterprise\Model\Group
     */
    public function getRootGroup()
    {
        return $this->container['rootGroup'];
    }

    /**
     * Sets rootGroup
     *
     * @param \GiteeEnterprise\Model\Group $rootGroup 继承的团队
     *
     * @return $this
     */
    public function setRootGroup($rootGroup)
    {
        $this->container['rootGroup'] = $rootGroup;

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


