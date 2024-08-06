# GiteeEnterprise\MembersApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdMembers**](MembersApi.md#deleteEnterpriseIdMembers) | **DELETE** /{enterprise_id}/members | 成员批量移出企业
[**deleteEnterpriseIdMembersUserId**](MembersApi.md#deleteEnterpriseIdMembersUserId) | **DELETE** /{enterprise_id}/members/{user_id} | 把成员移出企业
[**deleteEnterpriseIdMembersUserIdGroupsGroupId**](MembersApi.md#deleteEnterpriseIdMembersUserIdGroupsGroupId) | **DELETE** /{enterprise_id}/members/{user_id}/groups/{group_id} | 把成员移出团队
[**deleteEnterpriseIdMembersUserIdProjectsProjectId**](MembersApi.md#deleteEnterpriseIdMembersUserIdProjectsProjectId) | **DELETE** /{enterprise_id}/members/{user_id}/projects/{project_id} | 把成员移出仓库
[**deleteEnterpriseIdOutsideMembers**](MembersApi.md#deleteEnterpriseIdOutsideMembers) | **DELETE** /{enterprise_id}/outside-members | 企业外的成员-从企业组织或仓库中移除(单个/批量)
[**getEnterpriseIdMembers**](MembersApi.md#getEnterpriseIdMembers) | **GET** /{enterprise_id}/members | 获取企业成员列表
[**getEnterpriseIdMembersByEmail**](MembersApi.md#getEnterpriseIdMembersByEmail) | **GET** /{enterprise_id}/members/by_email | 通过邮箱获取成员详情
[**getEnterpriseIdMembersUserId**](MembersApi.md#getEnterpriseIdMembersUserId) | **GET** /{enterprise_id}/members/{user_id} | 获取企业成员详情
[**getEnterpriseIdMembersUserIdEvents**](MembersApi.md#getEnterpriseIdMembersUserIdEvents) | **GET** /{enterprise_id}/members/{user_id}/events | 企业成员动态
[**getEnterpriseIdMembersUserIdForkProjects**](MembersApi.md#getEnterpriseIdMembersUserIdForkProjects) | **GET** /{enterprise_id}/members/{user_id}/fork_projects | 获取成员fork的企业仓库列表
[**getEnterpriseIdMembersUserIdGroups**](MembersApi.md#getEnterpriseIdMembersUserIdGroups) | **GET** /{enterprise_id}/members/{user_id}/groups | 获取成员加入的团队列表
[**getEnterpriseIdMembersUserIdPrograms**](MembersApi.md#getEnterpriseIdMembersUserIdPrograms) | **GET** /{enterprise_id}/members/{user_id}/programs | 获取成员加入的项目列表
[**getEnterpriseIdMembersUserIdProjects**](MembersApi.md#getEnterpriseIdMembersUserIdProjects) | **GET** /{enterprise_id}/members/{user_id}/projects | 获取成员加入的仓库列表
[**postEnterpriseIdMembersEmailInvitation**](MembersApi.md#postEnterpriseIdMembersEmailInvitation) | **POST** /{enterprise_id}/members/email_invitation | 添加成员到企业-邮件邀请
[**postEnterpriseIdMembersUserIdResetDefaultPassword**](MembersApi.md#postEnterpriseIdMembersUserIdResetDefaultPassword) | **POST** /{enterprise_id}/members/{user_id}/reset_default_password | 发送密码重置邮件
[**postEnterpriseIdMembersUserIdResetPasswordEmail**](MembersApi.md#postEnterpriseIdMembersUserIdResetPasswordEmail) | **POST** /{enterprise_id}/members/{user_id}/reset_password_email | 发送密码重置邮件
[**putEnterpriseIdMembersBatchChangeRole**](MembersApi.md#putEnterpriseIdMembersBatchChangeRole) | **PUT** /{enterprise_id}/members/batch_change_role | 批量修改成员角色
[**putEnterpriseIdMembersUserId**](MembersApi.md#putEnterpriseIdMembersUserId) | **PUT** /{enterprise_id}/members/{user_id} | 更新企业成员信息
[**putEnterpriseIdMembersUserIdBlock**](MembersApi.md#putEnterpriseIdMembersUserIdBlock) | **PUT** /{enterprise_id}/members/{user_id}/block | 锁定/解除锁定用户
[**putEnterpriseIdMembersUserIdMemberGroups**](MembersApi.md#putEnterpriseIdMembersUserIdMemberGroups) | **PUT** /{enterprise_id}/members/{user_id}/member_groups | 给成员添加/移出团队
[**putEnterpriseIdMembersUserIdMemberPrograms**](MembersApi.md#putEnterpriseIdMembersUserIdMemberPrograms) | **PUT** /{enterprise_id}/members/{user_id}/member_programs | 给成员添加/移出项目
[**putEnterpriseIdMembersUserIdMemberProjects**](MembersApi.md#putEnterpriseIdMembersUserIdMemberProjects) | **PUT** /{enterprise_id}/members/{user_id}/member_projects | 给成员添加/移出仓库


# **deleteEnterpriseIdMembers**
> deleteEnterpriseIdMembers($enterpriseId, $accessToken, $userIds, $password, $validateType, $smsCaptcha)

成员批量移出企业

成员批量移出企业

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$userIds = "userIds_example"; // string | 成员 ids, 逗号(,)隔开空
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $apiInstance->deleteEnterpriseIdMembers($enterpriseId, $accessToken, $userIds, $password, $validateType, $smsCaptcha);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteEnterpriseIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **userIds** | **string**| 成员 ids, 逗号(,)隔开空 | [optional]
 **password** | **string**| 用户密码 | [optional]
 **validateType** | **string**| 验证方式 | [optional]
 **smsCaptcha** | **string**| 短信验证码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdMembersUserId**
> deleteEnterpriseIdMembersUserId($enterpriseId, $userId, $accessToken, $password, $validateType, $smsCaptcha)

把成员移出企业

把成员移出企业

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$accessToken = "accessToken_example"; // string | 用户授权码
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $apiInstance->deleteEnterpriseIdMembersUserId($enterpriseId, $userId, $accessToken, $password, $validateType, $smsCaptcha);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteEnterpriseIdMembersUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **password** | **string**| 用户密码 | [optional]
 **validateType** | **string**| 验证方式 | [optional]
 **smsCaptcha** | **string**| 短信验证码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdMembersUserIdGroupsGroupId**
> deleteEnterpriseIdMembersUserIdGroupsGroupId($enterpriseId, $userId, $groupId, $accessToken)

把成员移出团队

把成员移出团队

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$groupId = 56; // int | 团队 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdMembersUserIdGroupsGroupId($enterpriseId, $userId, $groupId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteEnterpriseIdMembersUserIdGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **groupId** | **int**| 团队 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdMembersUserIdProjectsProjectId**
> deleteEnterpriseIdMembersUserIdProjectsProjectId($enterpriseId, $userId, $projectId, $accessToken)

把成员移出仓库

把成员移出仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$projectId = 56; // int | 仓库 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdMembersUserIdProjectsProjectId($enterpriseId, $userId, $projectId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteEnterpriseIdMembersUserIdProjectsProjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **projectId** | **int**| 仓库 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdOutsideMembers**
> \GiteeEnterprise\Model\User[] deleteEnterpriseIdOutsideMembers($enterpriseId, $userIds, $accessToken)

企业外的成员-从企业组织或仓库中移除(单个/批量)

企业外的成员-从企业组织或仓库中移除(单个/批量)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userIds = "userIds_example"; // string | 企业外成员用户id，多个id逗号(,)隔开
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->deleteEnterpriseIdOutsideMembers($enterpriseId, $userIds, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteEnterpriseIdOutsideMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userIds** | **string**| 企业外成员用户id，多个id逗号(,)隔开 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMembers**
> \GiteeEnterprise\Model\Member[] getEnterpriseIdMembers($enterpriseId, $accessToken, $ident, $isBlock, $groupId, $roleId, $search, $sort, $direction, $includeMemberHistories, $page, $perPage)

获取企业成员列表

获取企业成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$ident = "ident_example"; // string | 角色类型. (viewer: 观察者; member: 普通成员; outsourced_member: 外包成员; human_resources: 人事管理员; admin: 管理员; super_admin: 超级管理员; enterprise_owner: 企业拥有者;)
$isBlock = 0; // int | 1: 筛选已锁定的用户。
$groupId = 56; // int | 筛选团队的成员列表
$roleId = 56; // int | 筛选指定角色的成员列表
$search = "search_example"; // string | 搜索关键字
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间;remark: 在企业的备注;role: 角色; occupation: 职位; block_status: 锁定情况 )
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$includeMemberHistories = true; // bool | 是否包含离职成员历史（true/false）
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdMembers($enterpriseId, $accessToken, $ident, $isBlock, $groupId, $roleId, $search, $sort, $direction, $includeMemberHistories, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getEnterpriseIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **ident** | **string**| 角色类型. (viewer: 观察者; member: 普通成员; outsourced_member: 外包成员; human_resources: 人事管理员; admin: 管理员; super_admin: 超级管理员; enterprise_owner: 企业拥有者;) | [optional]
 **isBlock** | **int**| 1: 筛选已锁定的用户。 | [optional] [default to 0]
 **groupId** | **int**| 筛选团队的成员列表 | [optional]
 **roleId** | **int**| 筛选指定角色的成员列表 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间;remark: 在企业的备注;role: 角色; occupation: 职位; block_status: 锁定情况 ) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **includeMemberHistories** | **bool**| 是否包含离职成员历史（true/false） | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Member[]**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMembersByEmail**
> \GiteeEnterprise\Model\Member getEnterpriseIdMembersByEmail($email, $enterpriseId, $accessToken)

通过邮箱获取成员详情

通过邮箱获取成员详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = "email_example"; // string | 用户邮箱
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdMembersByEmail($email, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getEnterpriseIdMembersByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| 用户邮箱 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Member**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMembersUserId**
> \GiteeEnterprise\Model\Member[] getEnterpriseIdMembersUserId($enterpriseId, $userId, $accessToken, $qt)

获取企业成员详情

获取企业成员详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = "userId_example"; // string | 用户id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdMembersUserId($enterpriseId, $userId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getEnterpriseIdMembersUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **string**| 用户id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\Member[]**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMembersUserIdEvents**
> \GiteeEnterprise\Model\Event[] getEnterpriseIdMembersUserIdEvents($enterpriseId, $userId, $accessToken, $qt, $startDate, $endDate, $page, $perPage, $prevId, $limit)

企业成员动态

企业成员动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = "userId_example"; // string | 用户id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$prevId = 56; // int | 上一次动态列表中最小动态 ID (返回列表不包含该ID记录)
$limit = 56; // int | 每次获取动态的条数

try {
    $result = $apiInstance->getEnterpriseIdMembersUserIdEvents($enterpriseId, $userId, $accessToken, $qt, $startDate, $endDate, $page, $perPage, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getEnterpriseIdMembersUserIdEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **string**| 用户id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **prevId** | **int**| 上一次动态列表中最小动态 ID (返回列表不包含该ID记录) | [optional]
 **limit** | **int**| 每次获取动态的条数 | [optional]

### Return type

[**\GiteeEnterprise\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMembersUserIdForkProjects**
> \GiteeEnterprise\Model\Project[] getEnterpriseIdMembersUserIdForkProjects($enterpriseId, $userId, $accessToken, $qt)

获取成员fork的企业仓库列表

获取成员fork的企业仓库列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = "userId_example"; // string | 用户id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdMembersUserIdForkProjects($enterpriseId, $userId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getEnterpriseIdMembersUserIdForkProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **string**| 用户id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMembersUserIdGroups**
> \GiteeEnterprise\Model\GroupWithAuth[] getEnterpriseIdMembersUserIdGroups($enterpriseId, $userId, $accessToken, $qt, $page, $perPage, $scope, $search)

获取成员加入的团队列表

获取成员加入的团队列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = "userId_example"; // string | 用户id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$scope = "scope_example"; // string | 筛选项(not_joined: 未加入的团队列表, admin: 成员管理的团队列表)
$search = "search_example"; // string | 搜索关键字

try {
    $result = $apiInstance->getEnterpriseIdMembersUserIdGroups($enterpriseId, $userId, $accessToken, $qt, $page, $perPage, $scope, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getEnterpriseIdMembersUserIdGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **string**| 用户id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **scope** | **string**| 筛选项(not_joined: 未加入的团队列表, admin: 成员管理的团队列表) | [optional]
 **search** | **string**| 搜索关键字 | [optional]

### Return type

[**\GiteeEnterprise\Model\GroupWithAuth[]**](../Model/GroupWithAuth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMembersUserIdPrograms**
> \GiteeEnterprise\Model\ProgramWithAuth[] getEnterpriseIdMembersUserIdPrograms($enterpriseId, $userId, $accessToken, $qt, $page, $perPage, $scope, $search)

获取成员加入的项目列表

获取成员加入的项目列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = "userId_example"; // string | 用户id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$scope = "scope_example"; // string | 筛选项(not_joined: 未加入的项目列表)
$search = "search_example"; // string | 搜索关键字

try {
    $result = $apiInstance->getEnterpriseIdMembersUserIdPrograms($enterpriseId, $userId, $accessToken, $qt, $page, $perPage, $scope, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getEnterpriseIdMembersUserIdPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **string**| 用户id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **scope** | **string**| 筛选项(not_joined: 未加入的项目列表) | [optional]
 **search** | **string**| 搜索关键字 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramWithAuth[]**](../Model/ProgramWithAuth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMembersUserIdProjects**
> \GiteeEnterprise\Model\ProjectWithAuth[] getEnterpriseIdMembersUserIdProjects($enterpriseId, $userId, $accessToken, $qt, $notFork, $scope, $search, $page, $perPage)

获取成员加入的仓库列表

获取成员加入的仓库列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = "userId_example"; // string | 用户id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$notFork = true; // bool | true: 非fork仓库, false: 不过滤
$scope = "scope_example"; // string | 筛选项(not_joined: 未加入的仓库列表)
$search = "search_example"; // string | 搜索关键字
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdMembersUserIdProjects($enterpriseId, $userId, $accessToken, $qt, $notFork, $scope, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getEnterpriseIdMembersUserIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **string**| 用户id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **notFork** | **bool**| true: 非fork仓库, false: 不过滤 | [optional]
 **scope** | **string**| 筛选项(not_joined: 未加入的仓库列表) | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectWithAuth[]**](../Model/ProjectWithAuth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdMembersEmailInvitation**
> \GiteeEnterprise\Model\EmailInvitation postEnterpriseIdMembersEmailInvitation($enterpriseId, $emails, $accessToken, $roleId, $needCheck)

添加成员到企业-邮件邀请

添加成员到企业-邮件邀请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$emails = "emails_example"; // string | 邮件列表，逗号(,)隔开。每次邀请最多只能发送20封邀请邮件
$accessToken = "accessToken_example"; // string | 用户授权码
$roleId = 56; // int | 企业角色的 ID
$needCheck = 56; // int | 是否需要管理员审核。1：需要，0：不需要

try {
    $result = $apiInstance->postEnterpriseIdMembersEmailInvitation($enterpriseId, $emails, $accessToken, $roleId, $needCheck);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->postEnterpriseIdMembersEmailInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **emails** | **string**| 邮件列表，逗号(,)隔开。每次邀请最多只能发送20封邀请邮件 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **roleId** | **int**| 企业角色的 ID | [optional]
 **needCheck** | **int**| 是否需要管理员审核。1：需要，0：不需要 | [optional]

### Return type

[**\GiteeEnterprise\Model\EmailInvitation**](../Model/EmailInvitation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdMembersUserIdResetDefaultPassword**
> postEnterpriseIdMembersUserIdResetDefaultPassword($enterpriseId, $userId, $accessToken, $password, $validateType, $smsCaptcha)

发送密码重置邮件

发送密码重置邮件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$accessToken = "accessToken_example"; // string | 用户授权码
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $apiInstance->postEnterpriseIdMembersUserIdResetDefaultPassword($enterpriseId, $userId, $accessToken, $password, $validateType, $smsCaptcha);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->postEnterpriseIdMembersUserIdResetDefaultPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **password** | **string**| 用户密码 | [optional]
 **validateType** | **string**| 验证方式 | [optional]
 **smsCaptcha** | **string**| 短信验证码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdMembersUserIdResetPasswordEmail**
> postEnterpriseIdMembersUserIdResetPasswordEmail($enterpriseId, $userId, $accessToken, $password, $validateType, $smsCaptcha)

发送密码重置邮件

发送密码重置邮件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$accessToken = "accessToken_example"; // string | 用户授权码
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $apiInstance->postEnterpriseIdMembersUserIdResetPasswordEmail($enterpriseId, $userId, $accessToken, $password, $validateType, $smsCaptcha);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->postEnterpriseIdMembersUserIdResetPasswordEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **password** | **string**| 用户密码 | [optional]
 **validateType** | **string**| 验证方式 | [optional]
 **smsCaptcha** | **string**| 短信验证码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdMembersBatchChangeRole**
> putEnterpriseIdMembersBatchChangeRole($enterpriseId, $roleId, $userIds, $accessToken)

批量修改成员角色

批量修改成员角色

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$roleId = 56; // int | 成员角色 ID
$userIds = "userIds_example"; // string | 成员 ids, 逗号(,)隔开空
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putEnterpriseIdMembersBatchChangeRole($enterpriseId, $roleId, $userIds, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->putEnterpriseIdMembersBatchChangeRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **roleId** | **int**| 成员角色 ID |
 **userIds** | **string**| 成员 ids, 逗号(,)隔开空 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdMembersUserId**
> \GiteeEnterprise\Model\Member[] putEnterpriseIdMembersUserId($enterpriseId, $userId, $accessToken, $remark, $occupation, $phone, $roleId)

更新企业成员信息

更新企业成员信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$accessToken = "accessToken_example"; // string | 用户授权码
$remark = "remark_example"; // string | 企业备注
$occupation = "occupation_example"; // string | 职位信息
$phone = "phone_example"; // string | 手机号码
$roleId = "roleId_example"; // string | 成员角色

try {
    $result = $apiInstance->putEnterpriseIdMembersUserId($enterpriseId, $userId, $accessToken, $remark, $occupation, $phone, $roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->putEnterpriseIdMembersUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **remark** | **string**| 企业备注 | [optional]
 **occupation** | **string**| 职位信息 | [optional]
 **phone** | **string**| 手机号码 | [optional]
 **roleId** | **string**| 成员角色 | [optional]

### Return type

[**\GiteeEnterprise\Model\Member[]**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdMembersUserIdBlock**
> \GiteeEnterprise\Model\Member[] putEnterpriseIdMembersUserIdBlock($enterpriseId, $userId, $isBlock, $accessToken, $blockMsg, $password, $validateType, $smsCaptcha)

锁定/解除锁定用户

锁定/解除锁定用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$isBlock = true; // bool | true: 锁定，false: 解除锁定
$accessToken = "accessToken_example"; // string | 用户授权码
$blockMsg = "blockMsg_example"; // string | 锁定原因
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $result = $apiInstance->putEnterpriseIdMembersUserIdBlock($enterpriseId, $userId, $isBlock, $accessToken, $blockMsg, $password, $validateType, $smsCaptcha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->putEnterpriseIdMembersUserIdBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **isBlock** | **bool**| true: 锁定，false: 解除锁定 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **blockMsg** | **string**| 锁定原因 | [optional]
 **password** | **string**| 用户密码 | [optional]
 **validateType** | **string**| 验证方式 | [optional]
 **smsCaptcha** | **string**| 短信验证码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Member[]**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdMembersUserIdMemberGroups**
> \GiteeEnterprise\Model\MemberBulkModify putEnterpriseIdMembersUserIdMemberGroups($enterpriseId, $userId, $accessToken, $addIds, $removeIds)

给成员添加/移出团队

给成员添加/移出团队

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$accessToken = "accessToken_example"; // string | 用户授权码
$addIds = "addIds_example"; // string | 加入ids, 逗号(,)隔开。add_ids，remove_ids 至少填一项，不能都为空
$removeIds = "removeIds_example"; // string | 退出ids, 逗号(,)隔开

try {
    $result = $apiInstance->putEnterpriseIdMembersUserIdMemberGroups($enterpriseId, $userId, $accessToken, $addIds, $removeIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->putEnterpriseIdMembersUserIdMemberGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **addIds** | **string**| 加入ids, 逗号(,)隔开。add_ids，remove_ids 至少填一项，不能都为空 | [optional]
 **removeIds** | **string**| 退出ids, 逗号(,)隔开 | [optional]

### Return type

[**\GiteeEnterprise\Model\MemberBulkModify**](../Model/MemberBulkModify.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdMembersUserIdMemberPrograms**
> \GiteeEnterprise\Model\MemberBulkModify putEnterpriseIdMembersUserIdMemberPrograms($enterpriseId, $userId, $accessToken, $addIds, $removeIds)

给成员添加/移出项目

给成员添加/移出项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$accessToken = "accessToken_example"; // string | 用户授权码
$addIds = "addIds_example"; // string | 加入ids, 逗号(,)隔开。add_ids，remove_ids 至少填一项，不能都为空
$removeIds = "removeIds_example"; // string | 退出ids, 逗号(,)隔开

try {
    $result = $apiInstance->putEnterpriseIdMembersUserIdMemberPrograms($enterpriseId, $userId, $accessToken, $addIds, $removeIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->putEnterpriseIdMembersUserIdMemberPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **addIds** | **string**| 加入ids, 逗号(,)隔开。add_ids，remove_ids 至少填一项，不能都为空 | [optional]
 **removeIds** | **string**| 退出ids, 逗号(,)隔开 | [optional]

### Return type

[**\GiteeEnterprise\Model\MemberBulkModify**](../Model/MemberBulkModify.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdMembersUserIdMemberProjects**
> \GiteeEnterprise\Model\MemberBulkModify putEnterpriseIdMembersUserIdMemberProjects($enterpriseId, $userId, $accessToken, $addIds, $removeIds)

给成员添加/移出仓库

给成员添加/移出仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = 56; // int | 成员 id
$accessToken = "accessToken_example"; // string | 用户授权码
$addIds = "addIds_example"; // string | 加入ids, 逗号(,)隔开。add_ids，remove_ids 至少填一项，不能都为空
$removeIds = "removeIds_example"; // string | 退出ids, 逗号(,)隔开

try {
    $result = $apiInstance->putEnterpriseIdMembersUserIdMemberProjects($enterpriseId, $userId, $accessToken, $addIds, $removeIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->putEnterpriseIdMembersUserIdMemberProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **int**| 成员 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **addIds** | **string**| 加入ids, 逗号(,)隔开。add_ids，remove_ids 至少填一项，不能都为空 | [optional]
 **removeIds** | **string**| 退出ids, 逗号(,)隔开 | [optional]

### Return type

[**\GiteeEnterprise\Model\MemberBulkModify**](../Model/MemberBulkModify.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

