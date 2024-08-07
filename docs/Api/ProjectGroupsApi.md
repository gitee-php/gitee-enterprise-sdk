# GiteeEnterprise\ProjectGroupsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdProjectGroupsProjectGroupId**](ProjectGroupsApi.md#deleteEnterpriseIdProjectGroupsProjectGroupId) | **DELETE** /{enterprise_id}/project_groups/{project_group_id} | 删除仓库组（包括子仓库组、仓库，两步验证）
[**deleteEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId**](ProjectGroupsApi.md#deleteEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId) | **DELETE** /{enterprise_id}/project_groups/{project_group_id}/members/{member_id} | 移除仓库组成员
[**getEnterpriseIdProjectGroups**](ProjectGroupsApi.md#getEnterpriseIdProjectGroups) | **GET** /{enterprise_id}/project_groups | 获取仓库组列表
[**getEnterpriseIdProjectGroupsProjectGroupIdDeleteInfo**](ProjectGroupsApi.md#getEnterpriseIdProjectGroupsProjectGroupIdDeleteInfo) | **GET** /{enterprise_id}/project_groups/{project_group_id}/delete_info | 仓库组删除前的确认数据
[**getEnterpriseIdProjectGroupsProjectGroupIdMembers**](ProjectGroupsApi.md#getEnterpriseIdProjectGroupsProjectGroupIdMembers) | **GET** /{enterprise_id}/project_groups/{project_group_id}/members | 仓库组成员列表
[**getEnterpriseIdProjectGroupsProjectGroupIdMembersComplement**](ProjectGroupsApi.md#getEnterpriseIdProjectGroupsProjectGroupIdMembersComplement) | **GET** /{enterprise_id}/project_groups/{project_group_id}/members/complement | 获取同一企业某个仓库不在本仓库组的成员列表
[**getEnterpriseIdProjectGroupsProjectGroupIdOperateAuths**](ProjectGroupsApi.md#getEnterpriseIdProjectGroupsProjectGroupIdOperateAuths) | **GET** /{enterprise_id}/project_groups/{project_group_id}/operate_auths | 获取仓库组的操作权限
[**postEnterpriseIdProjectGroups**](ProjectGroupsApi.md#postEnterpriseIdProjectGroups) | **POST** /{enterprise_id}/project_groups | 新建仓库组
[**postEnterpriseIdProjectGroupsProjectGroupIdMembers**](ProjectGroupsApi.md#postEnterpriseIdProjectGroupsProjectGroupIdMembers) | **POST** /{enterprise_id}/project_groups/{project_group_id}/members | 添加仓库组成员
[**putEnterpriseIdProjectGroupsProjectGroupId**](ProjectGroupsApi.md#putEnterpriseIdProjectGroupsProjectGroupId) | **PUT** /{enterprise_id}/project_groups/{project_group_id} | 更新仓库组
[**putEnterpriseIdProjectGroupsProjectGroupIdChangeParent**](ProjectGroupsApi.md#putEnterpriseIdProjectGroupsProjectGroupIdChangeParent) | **PUT** /{enterprise_id}/project_groups/{project_group_id}/change_parent | 转移仓库组（需要二次验证）
[**putEnterpriseIdProjectGroupsProjectGroupIdChangePath**](ProjectGroupsApi.md#putEnterpriseIdProjectGroupsProjectGroupIdChangePath) | **PUT** /{enterprise_id}/project_groups/{project_group_id}/change_path | 修改仓库组路径（需要二次验证）
[**putEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId**](ProjectGroupsApi.md#putEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId) | **PUT** /{enterprise_id}/project_groups/{project_group_id}/members/{member_id} | 修改仓库组成员信息


# **deleteEnterpriseIdProjectGroupsProjectGroupId**
> deleteEnterpriseIdProjectGroupsProjectGroupId($enterpriseId, $projectGroupId, $accessToken, $qt, $password, $validateType, $smsCaptcha)

删除仓库组（包括子仓库组、仓库，两步验证）

删除仓库组（包括子仓库组、仓库，两步验证）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectGroupId = "projectGroupId_example"; // string | 仓库组id/complete_path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $apiInstance->deleteEnterpriseIdProjectGroupsProjectGroupId($enterpriseId, $projectGroupId, $accessToken, $qt, $password, $validateType, $smsCaptcha);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->deleteEnterpriseIdProjectGroupsProjectGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectGroupId** | **string**| 仓库组id/complete_path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
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

# **deleteEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId**
> deleteEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId($enterpriseId, $memberId, $projectGroupId, $accessToken)

移除仓库组成员

移除仓库组成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$memberId = 56; // int | 成员id
$projectGroupId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId($enterpriseId, $memberId, $projectGroupId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->deleteEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **memberId** | **int**| 成员id |
 **projectGroupId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectGroups**
> \GiteeEnterprise\Model\ProjectGroup getEnterpriseIdProjectGroups($enterpriseId, $accessToken, $qt, $search, $page, $perPage)

获取仓库组列表

获取仓库组列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$search = "search_example"; // string | 仓库组搜索
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectGroups($enterpriseId, $accessToken, $qt, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->getEnterpriseIdProjectGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **search** | **string**| 仓库组搜索 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroup**](../Model/ProjectGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectGroupsProjectGroupIdDeleteInfo**
> getEnterpriseIdProjectGroupsProjectGroupIdDeleteInfo($enterpriseId, $projectGroupId, $accessToken, $qt)

仓库组删除前的确认数据

仓库组删除前的确认数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectGroupId = "projectGroupId_example"; // string | 仓库组id/complete_path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->getEnterpriseIdProjectGroupsProjectGroupIdDeleteInfo($enterpriseId, $projectGroupId, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->getEnterpriseIdProjectGroupsProjectGroupIdDeleteInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectGroupId** | **string**| 仓库组id/complete_path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectGroupsProjectGroupIdMembers**
> \GiteeEnterprise\Model\ProjectGroupMember getEnterpriseIdProjectGroupsProjectGroupIdMembers($enterpriseId, $projectGroupId, $accessToken, $accessLevel, $authSource, $search, $sort, $direction, $scope, $countWithoutSearch, $multiSearch, $page, $perPage)

仓库组成员列表

仓库组成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$projectGroupId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$accessLevel = 56; // int | 报告者:15,观察者:25,开发者:30,管理员:40
$authSource = 56; // int | 授权来源 0：直接成员 1: 顶级仓库组 2: 顶级团队
$search = "search_example"; // string | 成员搜索
$sort = "sort_example"; // string | 排序方式（expired_at： 过期时间， created_at: 授权时间（默认））
$direction = "direction_example"; // string | desc： 倒序，asc：顺序
$scope = "scope_example"; // string | not_in:获取不在本仓库组的企业成员
$countWithoutSearch = true; // bool | 是否返回不带搜索条件的数量
$multiSearch = true; // bool | 是否开启多关键字筛选
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectGroupsProjectGroupIdMembers($enterpriseId, $projectGroupId, $accessToken, $accessLevel, $authSource, $search, $sort, $direction, $scope, $countWithoutSearch, $multiSearch, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->getEnterpriseIdProjectGroupsProjectGroupIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **projectGroupId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **accessLevel** | **int**| 报告者:15,观察者:25,开发者:30,管理员:40 | [optional]
 **authSource** | **int**| 授权来源 0：直接成员 1: 顶级仓库组 2: 顶级团队 | [optional]
 **search** | **string**| 成员搜索 | [optional]
 **sort** | **string**| 排序方式（expired_at： 过期时间， created_at: 授权时间（默认）） | [optional]
 **direction** | **string**| desc： 倒序，asc：顺序 | [optional]
 **scope** | **string**| not_in:获取不在本仓库组的企业成员 | [optional]
 **countWithoutSearch** | **bool**| 是否返回不带搜索条件的数量 | [optional]
 **multiSearch** | **bool**| 是否开启多关键字筛选 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroupMember**](../Model/ProjectGroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectGroupsProjectGroupIdMembersComplement**
> \GiteeEnterprise\Model\ProjectMemberList getEnterpriseIdProjectGroupsProjectGroupIdMembersComplement($enterpriseId, $projectId, $projectGroupId, $accessToken, $search, $countWithoutSearch, $multiSearch, $page, $perPage)

获取同一企业某个仓库不在本仓库组的成员列表

获取同一企业某个仓库不在本仓库组的成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$projectId = 56; // int | project id
$projectGroupId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$search = "search_example"; // string | 搜索关键字
$countWithoutSearch = true; // bool | 是否返回不带搜索条件的数量
$multiSearch = true; // bool | 是否开启多关键字筛选
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectGroupsProjectGroupIdMembersComplement($enterpriseId, $projectId, $projectGroupId, $accessToken, $search, $countWithoutSearch, $multiSearch, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->getEnterpriseIdProjectGroupsProjectGroupIdMembersComplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **projectId** | **int**| project id |
 **projectGroupId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **countWithoutSearch** | **bool**| 是否返回不带搜索条件的数量 | [optional]
 **multiSearch** | **bool**| 是否开启多关键字筛选 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectMemberList**](../Model/ProjectMemberList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectGroupsProjectGroupIdOperateAuths**
> \GiteeEnterprise\Model\ProjectGroupOperateAuths getEnterpriseIdProjectGroupsProjectGroupIdOperateAuths($enterpriseId, $projectGroupId, $accessToken, $qt)

获取仓库组的操作权限

获取仓库组的操作权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectGroupId = "projectGroupId_example"; // string | 仓库组id/complete_path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectGroupsProjectGroupIdOperateAuths($enterpriseId, $projectGroupId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->getEnterpriseIdProjectGroupsProjectGroupIdOperateAuths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectGroupId** | **string**| 仓库组id/complete_path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroupOperateAuths**](../Model/ProjectGroupOperateAuths.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectGroups**
> \GiteeEnterprise\Model\ProjectGroup postEnterpriseIdProjectGroups($enterpriseId, $groupId, $name, $path, $parentId, $accessToken, $qt, $description)

新建仓库组

新建仓库组

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$groupId = "groupId_example"; // string | 团队id/path
$name = "name_example"; // string | 名字
$path = "path_example"; // string | 路径
$parentId = 56; // int | 上级仓库组id，为0时归属于团队根节点
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$description = "description_example"; // string | 简介

try {
    $result = $apiInstance->postEnterpriseIdProjectGroups($enterpriseId, $groupId, $name, $path, $parentId, $accessToken, $qt, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->postEnterpriseIdProjectGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **groupId** | **string**| 团队id/path |
 **name** | **string**| 名字 |
 **path** | **string**| 路径 |
 **parentId** | **int**| 上级仓库组id，为0时归属于团队根节点 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **description** | **string**| 简介 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroup**](../Model/ProjectGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectGroupsProjectGroupIdMembers**
> \GiteeEnterprise\Model\InviteProjectGroupMember postEnterpriseIdProjectGroupsProjectGroupIdMembers($enterpriseId, $users, $projectGroupId, $accessToken)

添加仓库组成员

添加仓库组成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$users = "users_example"; // string | 要添加的成员信息,例如[{\"id\":\"13\", \"access_level\":\"30\"}]
$projectGroupId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdProjectGroupsProjectGroupIdMembers($enterpriseId, $users, $projectGroupId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->postEnterpriseIdProjectGroupsProjectGroupIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **users** | **string**| 要添加的成员信息,例如[{\&quot;id\&quot;:\&quot;13\&quot;, \&quot;access_level\&quot;:\&quot;30\&quot;}] |
 **projectGroupId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\InviteProjectGroupMember**](../Model/InviteProjectGroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectGroupsProjectGroupId**
> \GiteeEnterprise\Model\ProjectGroup putEnterpriseIdProjectGroupsProjectGroupId($enterpriseId, $projectGroupId, $accessToken, $qt, $name, $description, $ownerId)

更新仓库组

更新仓库组

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectGroupId = "projectGroupId_example"; // string | 仓库组id/complete_path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$name = "name_example"; // string | 名称
$description = "description_example"; // string | 简介
$ownerId = 56; // int | 负责人ID

try {
    $result = $apiInstance->putEnterpriseIdProjectGroupsProjectGroupId($enterpriseId, $projectGroupId, $accessToken, $qt, $name, $description, $ownerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->putEnterpriseIdProjectGroupsProjectGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectGroupId** | **string**| 仓库组id/complete_path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **name** | **string**| 名称 | [optional]
 **description** | **string**| 简介 | [optional]
 **ownerId** | **int**| 负责人ID | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroup**](../Model/ProjectGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectGroupsProjectGroupIdChangeParent**
> \GiteeEnterprise\Model\ProjectGroup putEnterpriseIdProjectGroupsProjectGroupIdChangeParent($enterpriseId, $projectGroupId, $targetProjectGroupId, $groupId, $accessToken, $qt, $password, $validateType, $smsCaptcha)

转移仓库组（需要二次验证）

转移仓库组（需要二次验证）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectGroupId = "projectGroupId_example"; // string | 仓库组id/complete_path
$targetProjectGroupId = 56; // int | 目标仓库组id，为0时移动到组织根下
$groupId = 56; // int | 目标团队ID
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $result = $apiInstance->putEnterpriseIdProjectGroupsProjectGroupIdChangeParent($enterpriseId, $projectGroupId, $targetProjectGroupId, $groupId, $accessToken, $qt, $password, $validateType, $smsCaptcha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->putEnterpriseIdProjectGroupsProjectGroupIdChangeParent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectGroupId** | **string**| 仓库组id/complete_path |
 **targetProjectGroupId** | **int**| 目标仓库组id，为0时移动到组织根下 |
 **groupId** | **int**| 目标团队ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **password** | **string**| 用户密码 | [optional]
 **validateType** | **string**| 验证方式 | [optional]
 **smsCaptcha** | **string**| 短信验证码 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroup**](../Model/ProjectGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectGroupsProjectGroupIdChangePath**
> \GiteeEnterprise\Model\ProjectGroup putEnterpriseIdProjectGroupsProjectGroupIdChangePath($enterpriseId, $projectGroupId, $newPath, $accessToken, $qt, $password, $validateType, $smsCaptcha)

修改仓库组路径（需要二次验证）

修改仓库组路径（需要二次验证）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectGroupId = "projectGroupId_example"; // string | 仓库组id/complete_path
$newPath = "newPath_example"; // string | 新路径
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $result = $apiInstance->putEnterpriseIdProjectGroupsProjectGroupIdChangePath($enterpriseId, $projectGroupId, $newPath, $accessToken, $qt, $password, $validateType, $smsCaptcha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->putEnterpriseIdProjectGroupsProjectGroupIdChangePath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectGroupId** | **string**| 仓库组id/complete_path |
 **newPath** | **string**| 新路径 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **password** | **string**| 用户密码 | [optional]
 **validateType** | **string**| 验证方式 | [optional]
 **smsCaptcha** | **string**| 短信验证码 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroup**](../Model/ProjectGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId**
> \GiteeEnterprise\Model\ProjectGroupMember putEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId($enterpriseId, $memberId, $projectGroupId, $accessToken, $accessLevel, $expiredAt)

修改仓库组成员信息

修改仓库组成员信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$memberId = 56; // int | 成员id
$projectGroupId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$accessLevel = 56; // int | 仓库角色级别, 报告者:15,观察者:25,开发者:30,管理员:40
$expiredAt = "expiredAt_example"; // string | 过期时间（格式：yyyy-mm-dd，不填默认一直有效）

try {
    $result = $apiInstance->putEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId($enterpriseId, $memberId, $projectGroupId, $accessToken, $accessLevel, $expiredAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGroupsApi->putEnterpriseIdProjectGroupsProjectGroupIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **memberId** | **int**| 成员id |
 **projectGroupId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **accessLevel** | **int**| 仓库角色级别, 报告者:15,观察者:25,开发者:30,管理员:40 | [optional]
 **expiredAt** | **string**| 过期时间（格式：yyyy-mm-dd，不填默认一直有效） | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroupMember**](../Model/ProjectGroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

