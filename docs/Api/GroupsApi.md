# GiteeEnterprise\GroupsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdGroupsGroupId**](GroupsApi.md#deleteEnterpriseIdGroupsGroupId) | **DELETE** /{enterprise_id}/groups/{group_id} | 删除企业团队
[**deleteEnterpriseIdGroupsGroupIdMembers**](GroupsApi.md#deleteEnterpriseIdGroupsGroupIdMembers) | **DELETE** /{enterprise_id}/groups/{group_id}/members | 移除团队成员
[**getEnterpriseIdGroups**](GroupsApi.md#getEnterpriseIdGroups) | **GET** /{enterprise_id}/groups | 获取企业团队列表
[**getEnterpriseIdGroupsGroupId**](GroupsApi.md#getEnterpriseIdGroupsGroupId) | **GET** /{enterprise_id}/groups/{group_id} | 获取团队详情
[**getEnterpriseIdGroupsGroupIdComplement**](GroupsApi.md#getEnterpriseIdGroupsGroupIdComplement) | **GET** /{enterprise_id}/groups/{group_id}/complement | 获取某一仓库不在本组织的仓库成员列表
[**getEnterpriseIdGroupsGroupIdGroupMembers**](GroupsApi.md#getEnterpriseIdGroupsGroupIdGroupMembers) | **GET** /{enterprise_id}/groups/{group_id}/group_members | 获取团队成员列表（根组形式）
[**getEnterpriseIdGroupsGroupIdMembers**](GroupsApi.md#getEnterpriseIdGroupsGroupIdMembers) | **GET** /{enterprise_id}/groups/{group_id}/members | 获取企业团队下的成员列表
[**getEnterpriseIdGroupsGroupIdProjects**](GroupsApi.md#getEnterpriseIdGroupsGroupIdProjects) | **GET** /{enterprise_id}/groups/{group_id}/projects | 企业团队下仓库列表
[**postEnterpriseIdGroups**](GroupsApi.md#postEnterpriseIdGroups) | **POST** /{enterprise_id}/groups | 新建企业团队
[**postEnterpriseIdGroupsGroupIdMembers**](GroupsApi.md#postEnterpriseIdGroupsGroupIdMembers) | **POST** /{enterprise_id}/groups/{group_id}/members | 添加团队成员
[**putEnterpriseIdGroupsGroupId**](GroupsApi.md#putEnterpriseIdGroupsGroupId) | **PUT** /{enterprise_id}/groups/{group_id} | 更新企业团队
[**putEnterpriseIdGroupsGroupIdMembersAccessLevel**](GroupsApi.md#putEnterpriseIdGroupsGroupIdMembersAccessLevel) | **PUT** /{enterprise_id}/groups/{group_id}/members/access_level | 变更团队成员角色


# **deleteEnterpriseIdGroupsGroupId**
> deleteEnterpriseIdGroupsGroupId($enterpriseId, $groupId, $accessToken, $password, $validateType, $smsCaptcha)

删除企业团队

删除企业团队

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$groupId = 56; // int | 团队 id
$accessToken = "accessToken_example"; // string | 用户授权码
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $apiInstance->deleteEnterpriseIdGroupsGroupId($enterpriseId, $groupId, $accessToken, $password, $validateType, $smsCaptcha);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteEnterpriseIdGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **groupId** | **int**| 团队 id |
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

# **deleteEnterpriseIdGroupsGroupIdMembers**
> deleteEnterpriseIdGroupsGroupIdMembers($enterpriseId, $groupId, $accessToken, $userIds)

移除团队成员

移除团队成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$groupId = 56; // int | 团队 id
$accessToken = "accessToken_example"; // string | 用户授权码
$userIds = "userIds_example"; // string | 成员 id，多个成员id通过英文逗号分隔

try {
    $apiInstance->deleteEnterpriseIdGroupsGroupIdMembers($enterpriseId, $groupId, $accessToken, $userIds);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteEnterpriseIdGroupsGroupIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **groupId** | **int**| 团队 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **userIds** | **string**| 成员 id，多个成员id通过英文逗号分隔 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdGroups**
> \GiteeEnterprise\Model\Group[] getEnterpriseIdGroups($enterpriseId, $accessToken, $qt, $sort, $programId, $direction, $search, $scope, $page, $perPage)

获取企业团队列表

获取企业团队列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 updated_at: 更新时间)
$programId = 56; // int | 项目id
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$search = "search_example"; // string | 搜索字符串
$scope = "scope_example"; // string | admin: 获取用户管理的团队
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdGroups($enterpriseId, $accessToken, $qt, $sort, $programId, $direction, $search, $scope, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getEnterpriseIdGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 updated_at: 更新时间) | [optional]
 **programId** | **int**| 项目id | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **search** | **string**| 搜索字符串 | [optional]
 **scope** | **string**| admin: 获取用户管理的团队 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Group[]**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdGroupsGroupId**
> \GiteeEnterprise\Model\GroupDetail getEnterpriseIdGroupsGroupId($enterpriseId, $groupId, $accessToken, $qt)

获取团队详情

获取团队详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$groupId = "groupId_example"; // string | 团队id/path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdGroupsGroupId($enterpriseId, $groupId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getEnterpriseIdGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **groupId** | **string**| 团队id/path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\GroupDetail**](../Model/GroupDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdGroupsGroupIdComplement**
> \GiteeEnterprise\Model\ProjectMemberList[] getEnterpriseIdGroupsGroupIdComplement($projectId, $enterpriseId, $groupId, $accessToken, $search, $countWithoutSearch, $multiSearch, $page, $perPage)

获取某一仓库不在本组织的仓库成员列表

获取某一仓库不在本组织的仓库成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 56; // int | 仓库 ID
$enterpriseId = 56; // int | 
$groupId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$search = "search_example"; // string | 搜索关键字
$countWithoutSearch = true; // bool | 是否返回不带搜索条件的数量
$multiSearch = true; // bool | 是否开启多关键字筛选
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdGroupsGroupIdComplement($projectId, $enterpriseId, $groupId, $accessToken, $search, $countWithoutSearch, $multiSearch, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getEnterpriseIdGroupsGroupIdComplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **int**| 仓库 ID |
 **enterpriseId** | **int**|  |
 **groupId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **countWithoutSearch** | **bool**| 是否返回不带搜索条件的数量 | [optional]
 **multiSearch** | **bool**| 是否开启多关键字筛选 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectMemberList[]**](../Model/ProjectMemberList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdGroupsGroupIdGroupMembers**
> \GiteeEnterprise\Model\RootGroupMember[] getEnterpriseIdGroupsGroupIdGroupMembers($enterpriseId, $groupId, $accessToken, $qt, $accessLevel, $search, $sort, $direction, $page, $perPage)

获取团队成员列表（根组形式）

获取团队成员列表（根组形式）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$groupId = "groupId_example"; // string | 团队id/path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$accessLevel = 56; // int | 报告者:15,观察者:25,开发者:30,管理员:40
$search = "search_example"; // string | 搜索关键字
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 remark: 在企业的备注)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdGroupsGroupIdGroupMembers($enterpriseId, $groupId, $accessToken, $qt, $accessLevel, $search, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getEnterpriseIdGroupsGroupIdGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **groupId** | **string**| 团队id/path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **accessLevel** | **int**| 报告者:15,观察者:25,开发者:30,管理员:40 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 remark: 在企业的备注) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\RootGroupMember[]**](../Model/RootGroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdGroupsGroupIdMembers**
> \GiteeEnterprise\Model\Member[] getEnterpriseIdGroupsGroupIdMembers($enterpriseId, $groupId, $accessToken, $qt, $search, $sort, $direction, $scope, $countWithoutSearch, $multiSearch, $page, $perPage)

获取企业团队下的成员列表

获取企业团队下的成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$groupId = "groupId_example"; // string | 团队id/path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$search = "search_example"; // string | 搜索关键字
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 remark: 在企业的备注)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$scope = "scope_example"; // string | not_in: 获取不在本组织的企业成员
$countWithoutSearch = true; // bool | 是否返回不带搜索条件的数量
$multiSearch = true; // bool | 是否开启多关键字筛选
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdGroupsGroupIdMembers($enterpriseId, $groupId, $accessToken, $qt, $search, $sort, $direction, $scope, $countWithoutSearch, $multiSearch, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getEnterpriseIdGroupsGroupIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **groupId** | **string**| 团队id/path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 remark: 在企业的备注) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **scope** | **string**| not_in: 获取不在本组织的企业成员 | [optional]
 **countWithoutSearch** | **bool**| 是否返回不带搜索条件的数量 | [optional]
 **multiSearch** | **bool**| 是否开启多关键字筛选 | [optional]
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

# **getEnterpriseIdGroupsGroupIdProjects**
> \GiteeEnterprise\Model\Project[] getEnterpriseIdGroupsGroupIdProjects($enterpriseId, $groupId, $accessToken, $qt, $scope, $search, $type, $status, $creatorId, $parentId, $forkFilter, $outsourced, $sort, $direction, $page, $perPage)

企业团队下仓库列表

企业团队下仓库列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$groupId = "groupId_example"; // string | 团队id/path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$scope = "scope_example"; // string | 范围筛选
$search = "search_example"; // string | 搜索参数
$type = "type_example"; // string | 与我相关，created：我创建的，joined：我参与的，star: 我收藏的，template：模版仓库, personal_namespace: 企业下个人空间地址下的仓库
$status = 56; // int | 状态: 0: 开始，1: 暂停，2: 关闭
$creatorId = 56; // int | 负责人
$parentId = 56; // int | form_from仓库id
$forkFilter = "forkFilter_example"; // string | 全部(all), 非fork的(not_fork), 只看fork的(only_fork), 我fork的(my_fork)
$outsourced = 56; // int | 是否外包：0：内部，1：外包
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 last_push_at: 最近push时间)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdGroupsGroupIdProjects($enterpriseId, $groupId, $accessToken, $qt, $scope, $search, $type, $status, $creatorId, $parentId, $forkFilter, $outsourced, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getEnterpriseIdGroupsGroupIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **groupId** | **string**| 团队id/path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **scope** | **string**| 范围筛选 | [optional]
 **search** | **string**| 搜索参数 | [optional]
 **type** | **string**| 与我相关，created：我创建的，joined：我参与的，star: 我收藏的，template：模版仓库, personal_namespace: 企业下个人空间地址下的仓库 | [optional]
 **status** | **int**| 状态: 0: 开始，1: 暂停，2: 关闭 | [optional]
 **creatorId** | **int**| 负责人 | [optional]
 **parentId** | **int**| form_from仓库id | [optional]
 **forkFilter** | **string**| 全部(all), 非fork的(not_fork), 只看fork的(only_fork), 我fork的(my_fork) | [optional]
 **outsourced** | **int**| 是否外包：0：内部，1：外包 | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 last_push_at: 最近push时间) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdGroups**
> \GiteeEnterprise\Model\Group postEnterpriseIdGroups($enterpriseId, $path, $name, $public, $ownerId, $accessToken, $description, $userIds)

新建企业团队

新建企业团队

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$path = "path_example"; // string | 团队 path
$name = "name_example"; // string | 名称
$public = 56; // int | 类型, 0:内部，1:公开，2:外包
$ownerId = 56; // int | 负责人 id
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 简介
$userIds = "userIds_example"; // string | 成员ids, 逗号隔开：1,2,3

try {
    $result = $apiInstance->postEnterpriseIdGroups($enterpriseId, $path, $name, $public, $ownerId, $accessToken, $description, $userIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postEnterpriseIdGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **path** | **string**| 团队 path |
 **name** | **string**| 名称 |
 **public** | **int**| 类型, 0:内部，1:公开，2:外包 |
 **ownerId** | **int**| 负责人 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 简介 | [optional]
 **userIds** | **string**| 成员ids, 逗号隔开：1,2,3 | [optional]

### Return type

[**\GiteeEnterprise\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdGroupsGroupIdMembers**
> \GiteeEnterprise\Model\InviteGroupMember[] postEnterpriseIdGroupsGroupIdMembers($enterpriseId, $groupId, $accessToken, $qt, $masterIds, $developerIds, $viewerIds, $reporterIds)

添加团队成员

添加团队成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$groupId = "groupId_example"; // string | 团队id/path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$masterIds = "masterIds_example"; // string | 管理员 ID 列表, 多个使用英文 , 隔开
$developerIds = "developerIds_example"; // string | 开发者 ID 列表, 多个使用英文 , 隔开
$viewerIds = "viewerIds_example"; // string | 观察者 ID 列表, 多个使用英文 , 隔开
$reporterIds = "reporterIds_example"; // string | 报告者 ID 列表, 多个使用英文 , 隔开

try {
    $result = $apiInstance->postEnterpriseIdGroupsGroupIdMembers($enterpriseId, $groupId, $accessToken, $qt, $masterIds, $developerIds, $viewerIds, $reporterIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postEnterpriseIdGroupsGroupIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **groupId** | **string**| 团队id/path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **masterIds** | **string**| 管理员 ID 列表, 多个使用英文 , 隔开 | [optional]
 **developerIds** | **string**| 开发者 ID 列表, 多个使用英文 , 隔开 | [optional]
 **viewerIds** | **string**| 观察者 ID 列表, 多个使用英文 , 隔开 | [optional]
 **reporterIds** | **string**| 报告者 ID 列表, 多个使用英文 , 隔开 | [optional]

### Return type

[**\GiteeEnterprise\Model\InviteGroupMember[]**](../Model/InviteGroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdGroupsGroupId**
> \GiteeEnterprise\Model\Group putEnterpriseIdGroupsGroupId($enterpriseId, $groupId, $accessToken, $userIds, $name, $description, $public, $ownerId)

更新企业团队

更新企业团队

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$groupId = 56; // int | 团队 id
$accessToken = "accessToken_example"; // string | 用户授权码
$userIds = "userIds_example"; // string | 成员 id
$name = "name_example"; // string | 名称
$description = "description_example"; // string | 简介
$public = 56; // int | 类型, 0:内部，1:公开，2:外包
$ownerId = 56; // int | 负责人 id

try {
    $result = $apiInstance->putEnterpriseIdGroupsGroupId($enterpriseId, $groupId, $accessToken, $userIds, $name, $description, $public, $ownerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putEnterpriseIdGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **groupId** | **int**| 团队 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **userIds** | **string**| 成员 id | [optional]
 **name** | **string**| 名称 | [optional]
 **description** | **string**| 简介 | [optional]
 **public** | **int**| 类型, 0:内部，1:公开，2:外包 | [optional]
 **ownerId** | **int**| 负责人 id | [optional]

### Return type

[**\GiteeEnterprise\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdGroupsGroupIdMembersAccessLevel**
> \GiteeEnterprise\Model\GroupMember[] putEnterpriseIdGroupsGroupIdMembersAccessLevel($userIds, $accessLevel, $enterpriseId, $groupId, $accessToken)

变更团队成员角色

变更团队成员角色

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userIds = "userIds_example"; // string | 用户 ID
$accessLevel = 56; // int | 团队成员角色
$enterpriseId = 56; // int | 
$groupId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putEnterpriseIdGroupsGroupIdMembersAccessLevel($userIds, $accessLevel, $enterpriseId, $groupId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putEnterpriseIdGroupsGroupIdMembersAccessLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userIds** | **string**| 用户 ID |
 **accessLevel** | **int**| 团队成员角色 |
 **enterpriseId** | **int**|  |
 **groupId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\GroupMember[]**](../Model/GroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

