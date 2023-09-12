# GiteeEnterprise\ProgramsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdProgramsProgramId**](ProgramsApi.md#deleteEnterpriseIdProgramsProgramId) | **DELETE** /{enterprise_id}/programs/{program_id} | 删除项目
[**deleteEnterpriseIdProgramsProgramIdGroupsGroupId**](ProgramsApi.md#deleteEnterpriseIdProgramsProgramIdGroupsGroupId) | **DELETE** /{enterprise_id}/programs/{program_id}/groups/{group_id} | 移出项目下的团队
[**deleteEnterpriseIdProgramsProgramIdMembersMemberUserId**](ProgramsApi.md#deleteEnterpriseIdProgramsProgramIdMembersMemberUserId) | **DELETE** /{enterprise_id}/programs/{program_id}/members/{member_user_id} | 移出项目下成员
[**deleteEnterpriseIdProgramsProgramIdProjectsProjectId**](ProgramsApi.md#deleteEnterpriseIdProgramsProgramIdProjectsProjectId) | **DELETE** /{enterprise_id}/programs/{program_id}/projects/{project_id} | 移出项目下仓库
[**getEnterpriseIdPrograms**](ProgramsApi.md#getEnterpriseIdPrograms) | **GET** /{enterprise_id}/programs | 获取项目列表
[**getEnterpriseIdProgramsMine**](ProgramsApi.md#getEnterpriseIdProgramsMine) | **GET** /{enterprise_id}/programs/mine | 获取用户最近浏览的项目集合
[**getEnterpriseIdProgramsProgramId**](ProgramsApi.md#getEnterpriseIdProgramsProgramId) | **GET** /{enterprise_id}/programs/{program_id} | 获取项目详情
[**getEnterpriseIdProgramsProgramIdComponents**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdComponents) | **GET** /{enterprise_id}/programs/{program_id}/components | 获取项目组件信息
[**getEnterpriseIdProgramsProgramIdEvents**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdEvents) | **GET** /{enterprise_id}/programs/{program_id}/events | 获取项目下动态列表
[**getEnterpriseIdProgramsProgramIdGroups**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdGroups) | **GET** /{enterprise_id}/programs/{program_id}/groups | 获取项目下的团队
[**getEnterpriseIdProgramsProgramIdIssues**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdIssues) | **GET** /{enterprise_id}/programs/{program_id}/issues | 获取项目下的任务列表
[**getEnterpriseIdProgramsProgramIdMembers**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdMembers) | **GET** /{enterprise_id}/programs/{program_id}/members | 获取项目下的成员列表
[**getEnterpriseIdProgramsProgramIdOperateAuths**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdOperateAuths) | **GET** /{enterprise_id}/programs/{program_id}/operate_auths | 获取项目的操作权限
[**getEnterpriseIdProgramsProgramIdProjects**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdProjects) | **GET** /{enterprise_id}/programs/{program_id}/projects | 获取项目下的仓库列表
[**getEnterpriseIdProgramsProgramIdPullRequests**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdPullRequests) | **GET** /{enterprise_id}/programs/{program_id}/pull_requests | 获取项目下的 Pull Request
[**getEnterpriseIdProgramsProgramIdWithoutPlanedIssuesCount**](ProgramsApi.md#getEnterpriseIdProgramsProgramIdWithoutPlanedIssuesCount) | **GET** /{enterprise_id}/programs/{program_id}/without_planed_issues_count | 获取项目下未被规划的工作项数量
[**getEnterpriseIdProgramsUnset**](ProgramsApi.md#getEnterpriseIdProgramsUnset) | **GET** /{enterprise_id}/programs/unset | 获取未立项项目
[**postEnterpriseIdPrograms**](ProgramsApi.md#postEnterpriseIdPrograms) | **POST** /{enterprise_id}/programs | 新建项目
[**postEnterpriseIdProgramsFilter**](ProgramsApi.md#postEnterpriseIdProgramsFilter) | **POST** /{enterprise_id}/programs/filter | 项目列表-支持自定义字段的筛选
[**postEnterpriseIdProgramsProgramIdMembers**](ProgramsApi.md#postEnterpriseIdProgramsProgramIdMembers) | **POST** /{enterprise_id}/programs/{program_id}/members | 添加企业成员或团队进项目
[**postEnterpriseIdProgramsProgramIdProjects**](ProgramsApi.md#postEnterpriseIdProgramsProgramIdProjects) | **POST** /{enterprise_id}/programs/{program_id}/projects | 项目关联仓库
[**putEnterpriseIdProgramsProgramId**](ProgramsApi.md#putEnterpriseIdProgramsProgramId) | **PUT** /{enterprise_id}/programs/{program_id} | 更新项目
[**putEnterpriseIdProgramsProgramIdUpdateComponents**](ProgramsApi.md#putEnterpriseIdProgramsProgramIdUpdateComponents) | **PUT** /{enterprise_id}/programs/{program_id}/update_components | 修改项目组件


# **deleteEnterpriseIdProgramsProgramId**
> deleteEnterpriseIdProgramsProgramId($programId, $enterpriseId, $accessToken, $deleteMilestones, $deleteIssues, $password, $validateType, $smsCaptcha)

删除项目

删除项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$deleteMilestones = true; // bool | 是否删除里程碑
$deleteIssues = true; // bool | 是否删除任务
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $apiInstance->deleteEnterpriseIdProgramsProgramId($programId, $enterpriseId, $accessToken, $deleteMilestones, $deleteIssues, $password, $validateType, $smsCaptcha);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->deleteEnterpriseIdProgramsProgramId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **deleteMilestones** | **bool**| 是否删除里程碑 | [optional]
 **deleteIssues** | **bool**| 是否删除任务 | [optional]
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

# **deleteEnterpriseIdProgramsProgramIdGroupsGroupId**
> deleteEnterpriseIdProgramsProgramIdGroupsGroupId($programId, $groupId, $enterpriseId, $accessToken)

移出项目下的团队

移出项目下的团队

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$groupId = 56; // int | 团队 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdProgramsProgramIdGroupsGroupId($programId, $groupId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->deleteEnterpriseIdProgramsProgramIdGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **groupId** | **int**| 团队 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdProgramsProgramIdMembersMemberUserId**
> deleteEnterpriseIdProgramsProgramIdMembersMemberUserId($programId, $memberUserId, $enterpriseId, $accessToken)

移出项目下成员

移出项目下成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$memberUserId = 56; // int | 成员id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdProgramsProgramIdMembersMemberUserId($programId, $memberUserId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->deleteEnterpriseIdProgramsProgramIdMembersMemberUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **memberUserId** | **int**| 成员id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdProgramsProgramIdProjectsProjectId**
> deleteEnterpriseIdProgramsProgramIdProjectsProjectId($programId, $projectId, $enterpriseId, $accessToken)

移出项目下仓库

移出项目下仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$projectId = 56; // int | 仓库id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdProgramsProgramIdProjectsProjectId($programId, $projectId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->deleteEnterpriseIdProgramsProgramIdProjectsProjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **projectId** | **int**| 仓库id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdPrograms**
> \GiteeEnterprise\Model\ProgramList[] getEnterpriseIdPrograms($enterpriseId, $accessToken, $type, $sort, $priorityTopped, $direction, $status, $category, $assigneeIds, $issueTypeId, $page, $perPage)

获取项目列表

获取项目列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$type = "type_example"; // string | 筛选不同类型的项目列表。我参与的: joined; 我负责的: assigned; 我创建的: created; 我星标的: only_star
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 updated_at: 更新时间 users_count: 成员数 projects_count: 仓库数 issues_count: 任务数 accessed_at: 访问时间 name: 项目名称)
$priorityTopped = true; // bool | 是否按照置顶优先排序
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$status = "status_example"; // string | 项目状态（0:开始 1:暂停 2:关闭）, 逗号分隔,如: 0,1
$category = "category_example"; // string | 项目类别（all: 所有，common: 普通，kanban: 看板）, 支持多种类型，以,分隔，如：common,kanban
$assigneeIds = "assigneeIds_example"; // string | 项目负责人 ID，多个负责人使用英文 , 隔开
$issueTypeId = 56; // int | 任务类型 ID
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdPrograms($enterpriseId, $accessToken, $type, $sort, $priorityTopped, $direction, $status, $category, $assigneeIds, $issueTypeId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **type** | **string**| 筛选不同类型的项目列表。我参与的: joined; 我负责的: assigned; 我创建的: created; 我星标的: only_star | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 updated_at: 更新时间 users_count: 成员数 projects_count: 仓库数 issues_count: 任务数 accessed_at: 访问时间 name: 项目名称) | [optional]
 **priorityTopped** | **bool**| 是否按照置顶优先排序 | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **status** | **string**| 项目状态（0:开始 1:暂停 2:关闭）, 逗号分隔,如: 0,1 | [optional]
 **category** | **string**| 项目类别（all: 所有，common: 普通，kanban: 看板）, 支持多种类型，以,分隔，如：common,kanban | [optional]
 **assigneeIds** | **string**| 项目负责人 ID，多个负责人使用英文 , 隔开 | [optional]
 **issueTypeId** | **int**| 任务类型 ID | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramList[]**](../Model/ProgramList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsMine**
> \GiteeEnterprise\Model\ProgramList[] getEnterpriseIdProgramsMine($enterpriseId, $accessToken, $programIds, $status)

获取用户最近浏览的项目集合

获取用户最近浏览的项目集合

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$programIds = "programIds_example"; // string | 项目的 id 列表，如有多个用逗号分割。eg: 1,2,3
$status = "status_example"; // string | 项目状态（0:开始 1:暂停 2:关闭）, 逗号分隔,如: 0,1

try {
    $result = $apiInstance->getEnterpriseIdProgramsMine($enterpriseId, $accessToken, $programIds, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsMine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programIds** | **string**| 项目的 id 列表，如有多个用逗号分割。eg: 1,2,3 | [optional]
 **status** | **string**| 项目状态（0:开始 1:暂停 2:关闭）, 逗号分隔,如: 0,1 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramList[]**](../Model/ProgramList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsProgramId**
> \GiteeEnterprise\Model\ProgramWithCollection[] getEnterpriseIdProgramsProgramId($programId, $enterpriseId, $accessToken)

获取项目详情

获取项目详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdProgramsProgramId($programId, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramWithCollection[]**](../Model/ProgramWithCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsProgramIdComponents**
> \GiteeEnterprise\Model\ProgramComponent[] getEnterpriseIdProgramsProgramIdComponents($programId, $enterpriseId, $accessToken)

获取项目组件信息

获取项目组件信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdProgramsProgramIdComponents($programId, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdComponents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramComponent[]**](../Model/ProgramComponent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsProgramIdEvents**
> \GiteeEnterprise\Model\Event[] getEnterpriseIdProgramsProgramIdEvents($programId, $enterpriseId, $accessToken, $startDate, $endDate, $scope, $page, $perPage, $prevId, $limit)

获取项目下动态列表

获取项目下动态列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$scope = "scope_example"; // string | 项目范围：所有，仓库，任务，外部，我的
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$prevId = 56; // int | 上一次动态列表中最小动态 ID (返回列表不包含该ID记录)
$limit = 56; // int | 每次获取动态的条数

try {
    $result = $apiInstance->getEnterpriseIdProgramsProgramIdEvents($programId, $enterpriseId, $accessToken, $startDate, $endDate, $scope, $page, $perPage, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **scope** | **string**| 项目范围：所有，仓库，任务，外部，我的 | [optional]
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

# **getEnterpriseIdProgramsProgramIdGroups**
> \GiteeEnterprise\Model\Group[] getEnterpriseIdProgramsProgramIdGroups($programId, $enterpriseId, $accessToken, $page, $perPage)

获取项目下的团队

获取项目下的团队

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProgramsProgramIdGroups($programId, $enterpriseId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
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

# **getEnterpriseIdProgramsProgramIdIssues**
> \GiteeEnterprise\Model\Issue[] getEnterpriseIdProgramsProgramIdIssues($programId, $enterpriseId, $accessToken, $kanbanColumnId, $kanbanIds, $projectId, $milestoneId, $state, $onlyRelatedMe, $assigneeId, $authorId, $collaboratorIds, $createdAt, $finishedAt, $planStartedAt, $deadline, $search, $filterChild, $issueStateIds, $issueTypeId, $labelIds, $priority, $scrumSprintIds, $scrumVersionIds, $kanbanColumnIds, $sort, $direction, $page, $perPage)

获取项目下的任务列表

获取项目下的任务列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = "programId_example"; // string | 项目 id（可多选，用英文逗号分隔）
$enterpriseId = 56; // int | 企业 id
$accessToken = "accessToken_example"; // string | 用户授权码
$kanbanColumnId = 56; // int | 看板栏ID
$kanbanIds = "kanbanIds_example"; // string | 看板id(可多选，用英文逗号分隔)
$projectId = "projectId_example"; // string | 仓库 id
$milestoneId = "milestoneId_example"; // string | 里程碑 id（可多选，用英文逗号分隔）
$state = "state_example"; // string | 任务状态属性，可多选，用逗号分隔。（开启：open 关闭：closed 拒绝：rejected 进行中: progressing）
$onlyRelatedMe = "onlyRelatedMe_example"; // string | 是否仅列出与授权用户相关的任务（0: 否 1: 是）
$assigneeId = "assigneeId_example"; // string | 负责人 id
$authorId = "authorId_example"; // string | 创建者 id
$collaboratorIds = "collaboratorIds_example"; // string | 协作者。(,分隔的id字符串)
$createdAt = "createdAt_example"; // string | 创建时间，格式：(区间)yyyymmddTHH:MM:SS+08:00-yyyymmddTHH:MM:SS+08:00，（指定某日期）yyyymmddTHH:MM:SS+08:00，（小于指定日期）<yyyymmddTHH:MM:SS+08:00，（大于指定日期）>yyyymmddTHH:MM:SS+08:00
$finishedAt = "finishedAt_example"; // string | 任务完成日期，格式同上
$planStartedAt = "planStartedAt_example"; // string | 计划开始时间，(格式：yyyy-mm-dd)
$deadline = "deadline_example"; // string | 任务截止日期，(格式：yyyy-mm-dd)
$search = "search_example"; // string | 搜索参数
$filterChild = "filterChild_example"; // string | 是否过滤子任务(0: 否, 1: 是)
$issueStateIds = "issueStateIds_example"; // string | 任务状态id，多选，用英文逗号分隔。
$issueTypeId = "issueTypeId_example"; // string | 任务类型
$labelIds = "labelIds_example"; // string | 标签 id（可多选，用英文逗号分隔）
$priority = "priority_example"; // string | 优先级（可多选，用英文逗号分隔）
$scrumSprintIds = "scrumSprintIds_example"; // string | 迭代id(可多选，用英文逗号分隔)
$scrumVersionIds = "scrumVersionIds_example"; // string | 版本id(可多选，用英文逗号分隔)
$kanbanColumnIds = "kanbanColumnIds_example"; // string | 看板栏id(可多选，用英文逗号分隔)
$sort = "sort_example"; // string | 排序字段(created_at、updated_at、deadline、priority)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProgramsProgramIdIssues($programId, $enterpriseId, $accessToken, $kanbanColumnId, $kanbanIds, $projectId, $milestoneId, $state, $onlyRelatedMe, $assigneeId, $authorId, $collaboratorIds, $createdAt, $finishedAt, $planStartedAt, $deadline, $search, $filterChild, $issueStateIds, $issueTypeId, $labelIds, $priority, $scrumSprintIds, $scrumVersionIds, $kanbanColumnIds, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **string**| 项目 id（可多选，用英文逗号分隔） |
 **enterpriseId** | **int**| 企业 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **kanbanColumnId** | **int**| 看板栏ID | [optional]
 **kanbanIds** | **string**| 看板id(可多选，用英文逗号分隔) | [optional]
 **projectId** | **string**| 仓库 id | [optional]
 **milestoneId** | **string**| 里程碑 id（可多选，用英文逗号分隔） | [optional]
 **state** | **string**| 任务状态属性，可多选，用逗号分隔。（开启：open 关闭：closed 拒绝：rejected 进行中: progressing） | [optional]
 **onlyRelatedMe** | **string**| 是否仅列出与授权用户相关的任务（0: 否 1: 是） | [optional]
 **assigneeId** | **string**| 负责人 id | [optional]
 **authorId** | **string**| 创建者 id | [optional]
 **collaboratorIds** | **string**| 协作者。(,分隔的id字符串) | [optional]
 **createdAt** | **string**| 创建时间，格式：(区间)yyyymmddTHH:MM:SS+08:00-yyyymmddTHH:MM:SS+08:00，（指定某日期）yyyymmddTHH:MM:SS+08:00，（小于指定日期）&lt;yyyymmddTHH:MM:SS+08:00，（大于指定日期）&gt;yyyymmddTHH:MM:SS+08:00 | [optional]
 **finishedAt** | **string**| 任务完成日期，格式同上 | [optional]
 **planStartedAt** | **string**| 计划开始时间，(格式：yyyy-mm-dd) | [optional]
 **deadline** | **string**| 任务截止日期，(格式：yyyy-mm-dd) | [optional]
 **search** | **string**| 搜索参数 | [optional]
 **filterChild** | **string**| 是否过滤子任务(0: 否, 1: 是) | [optional]
 **issueStateIds** | **string**| 任务状态id，多选，用英文逗号分隔。 | [optional]
 **issueTypeId** | **string**| 任务类型 | [optional]
 **labelIds** | **string**| 标签 id（可多选，用英文逗号分隔） | [optional]
 **priority** | **string**| 优先级（可多选，用英文逗号分隔） | [optional]
 **scrumSprintIds** | **string**| 迭代id(可多选，用英文逗号分隔) | [optional]
 **scrumVersionIds** | **string**| 版本id(可多选，用英文逗号分隔) | [optional]
 **kanbanColumnIds** | **string**| 看板栏id(可多选，用英文逗号分隔) | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at、deadline、priority) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsProgramIdMembers**
> \GiteeEnterprise\Model\Member[] getEnterpriseIdProgramsProgramIdMembers($programId, $enterpriseId, $accessToken, $search, $sort, $direction, $flattenGroupMember, $page, $perPage)

获取项目下的成员列表

获取项目下的成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$search = "search_example"; // string | 搜索关键字
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 remark: 在企业的备注)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$flattenGroupMember = true; // bool | 是否展开团队成员
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProgramsProgramIdMembers($programId, $enterpriseId, $accessToken, $search, $sort, $direction, $flattenGroupMember, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 remark: 在企业的备注) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **flattenGroupMember** | **bool**| 是否展开团队成员 | [optional] [default to true]
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

# **getEnterpriseIdProgramsProgramIdOperateAuths**
> getEnterpriseIdProgramsProgramIdOperateAuths($programId, $enterpriseId, $accessToken)

获取项目的操作权限

获取项目的操作权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdProgramsProgramIdOperateAuths($programId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdOperateAuths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsProgramIdProjects**
> \GiteeEnterprise\Model\ProjectsList[] getEnterpriseIdProgramsProgramIdProjects($programId, $enterpriseId, $accessToken, $scope, $search, $type, $status, $creatorId, $parentId, $forkFilter, $outsourced, $groupId, $sort, $direction, $programPipelineEnabled, $page, $perPage)

获取项目下的仓库列表

获取项目下的仓库列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$scope = "scope_example"; // string | 范围筛选
$search = "search_example"; // string | 搜索参数
$type = "type_example"; // string | 与我相关，created：我创建的，joined：我参与的，star: 我收藏的，template：模版仓库, personal_namespace: 企业下个人空间地址下的仓库
$status = 56; // int | 状态: 0: 开始，1: 暂停，2: 关闭
$creatorId = 56; // int | 负责人
$parentId = 56; // int | form_from仓库id
$forkFilter = "forkFilter_example"; // string | 非fork的(not_fork), 只看fork的(only_fork)
$outsourced = 56; // int | 是否外包：0：内部，1：外包
$groupId = 56; // int | 团队id
$sort = "sort_example"; // string | 排序字段(created_at、last_push_at)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$programPipelineEnabled = true; // bool | 是否开启项目流水线支持
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProgramsProgramIdProjects($programId, $enterpriseId, $accessToken, $scope, $search, $type, $status, $creatorId, $parentId, $forkFilter, $outsourced, $groupId, $sort, $direction, $programPipelineEnabled, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **scope** | **string**| 范围筛选 | [optional]
 **search** | **string**| 搜索参数 | [optional]
 **type** | **string**| 与我相关，created：我创建的，joined：我参与的，star: 我收藏的，template：模版仓库, personal_namespace: 企业下个人空间地址下的仓库 | [optional]
 **status** | **int**| 状态: 0: 开始，1: 暂停，2: 关闭 | [optional]
 **creatorId** | **int**| 负责人 | [optional]
 **parentId** | **int**| form_from仓库id | [optional]
 **forkFilter** | **string**| 非fork的(not_fork), 只看fork的(only_fork) | [optional]
 **outsourced** | **int**| 是否外包：0：内部，1：外包 | [optional]
 **groupId** | **int**| 团队id | [optional]
 **sort** | **string**| 排序字段(created_at、last_push_at) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **programPipelineEnabled** | **bool**| 是否开启项目流水线支持 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectsList[]**](../Model/ProjectsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsProgramIdPullRequests**
> \GiteeEnterprise\Model\Issue[] getEnterpriseIdProgramsProgramIdPullRequests($programId, $enterpriseId, $accessToken, $state, $scope, $authorId, $assigneeId, $testerId, $search, $sort, $direction, $groupId, $milestoneId, $labels, $labelIds, $canBeMerged, $projectId, $needStateCount, $page, $perPage)

获取项目下的 Pull Request

获取项目下的 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 企业 id
$accessToken = "accessToken_example"; // string | 用户授权码
$state = "state_example"; // string | PR 状态
$scope = "scope_example"; // string | 范围筛选。指派我的: assigned_or_test，我创建或指派给我的: related_to_me，我参与仓库的PR: participate_in，草稿PR: draft
$authorId = "authorId_example"; // string | 筛选 PR 创建者
$assigneeId = "assigneeId_example"; // string | 筛选 PR 审查者
$testerId = "testerId_example"; // string | 筛选 PR 测试人员
$search = "search_example"; // string | 搜索参数
$sort = "sort_example"; // string | 排序字段(created_at、closed_at、priority)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$groupId = 56; // int | 团队 id
$milestoneId = 56; // int | 里程碑 id
$labels = "labels_example"; // string | 标签名称。多个标签逗号(,)隔开
$labelIds = "labelIds_example"; // string | 标签ID,多个标签逗号(,)隔开
$canBeMerged = 56; // int | 是否可合并
$projectId = 56; // int | 仓库 id
$needStateCount = 56; // int | 是否需要状态统计数
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProgramsProgramIdPullRequests($programId, $enterpriseId, $accessToken, $state, $scope, $authorId, $assigneeId, $testerId, $search, $sort, $direction, $groupId, $milestoneId, $labels, $labelIds, $canBeMerged, $projectId, $needStateCount, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdPullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**| 企业 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **state** | **string**| PR 状态 | [optional]
 **scope** | **string**| 范围筛选。指派我的: assigned_or_test，我创建或指派给我的: related_to_me，我参与仓库的PR: participate_in，草稿PR: draft | [optional]
 **authorId** | **string**| 筛选 PR 创建者 | [optional]
 **assigneeId** | **string**| 筛选 PR 审查者 | [optional]
 **testerId** | **string**| 筛选 PR 测试人员 | [optional]
 **search** | **string**| 搜索参数 | [optional]
 **sort** | **string**| 排序字段(created_at、closed_at、priority) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **groupId** | **int**| 团队 id | [optional]
 **milestoneId** | **int**| 里程碑 id | [optional]
 **labels** | **string**| 标签名称。多个标签逗号(,)隔开 | [optional]
 **labelIds** | **string**| 标签ID,多个标签逗号(,)隔开 | [optional]
 **canBeMerged** | **int**| 是否可合并 | [optional]
 **projectId** | **int**| 仓库 id | [optional]
 **needStateCount** | **int**| 是否需要状态统计数 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsProgramIdWithoutPlanedIssuesCount**
> getEnterpriseIdProgramsProgramIdWithoutPlanedIssuesCount($programId, $enterpriseId, $accessToken)

获取项目下未被规划的工作项数量

获取项目下未被规划的工作项数量

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdProgramsProgramIdWithoutPlanedIssuesCount($programId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsProgramIdWithoutPlanedIssuesCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProgramsUnset**
> getEnterpriseIdProgramsUnset($enterpriseId, $accessToken)

获取未立项项目

获取未立项项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdProgramsUnset($enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getEnterpriseIdProgramsUnset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdPrograms**
> \GiteeEnterprise\Model\Program postEnterpriseIdPrograms($name, $enterpriseId, $accessToken, $description, $assigneeId, $outsourced, $status, $color, $ident, $programExtraFieldsProgramFieldId, $programExtraFieldsValue, $category, $projectIds, $importProjectUsers, $importProjectIssues, $importProjectMilestones, $userIds, $groupIds)

新建项目

新建项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 项目名称
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 项目简介
$assigneeId = "assigneeId_example"; // string | 负责人ID
$outsourced = true; // bool | 项目类型:内部(false)/外包(true)项目
$status = 56; // int | 项目状态:（0:开始 1:暂停 2:关闭）
$color = "color_example"; // string | 颜色
$ident = "ident_example"; // string | 项目编号
$programExtraFieldsProgramFieldId = array(56); // int[] | 项目自定义字段 id（项目字段设置列表的字段id）
$programExtraFieldsValue = array("programExtraFieldsValue_example"); // string[] | 自定义字段的值（options类型的字段传对应选项的id，使用 , 隔开，如\"1,2,3\"）
$category = "category_example"; // string | 项目类型(standard、scrum、kanban)
$projectIds = "projectIds_example"; // string | 关联仓库ids，逗号隔开
$importProjectUsers = true; // bool | 是否导入仓库成员
$importProjectIssues = true; // bool | 是否导入仓库任务
$importProjectMilestones = true; // bool | 是否导入仓库里程碑
$userIds = "userIds_example"; // string | 成员ids，逗号隔开
$groupIds = "groupIds_example"; // string | 团队ids，逗号隔开

try {
    $result = $apiInstance->postEnterpriseIdPrograms($name, $enterpriseId, $accessToken, $description, $assigneeId, $outsourced, $status, $color, $ident, $programExtraFieldsProgramFieldId, $programExtraFieldsValue, $category, $projectIds, $importProjectUsers, $importProjectIssues, $importProjectMilestones, $userIds, $groupIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->postEnterpriseIdPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| 项目名称 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 项目简介 | [optional]
 **assigneeId** | **string**| 负责人ID | [optional]
 **outsourced** | **bool**| 项目类型:内部(false)/外包(true)项目 | [optional]
 **status** | **int**| 项目状态:（0:开始 1:暂停 2:关闭） | [optional]
 **color** | **string**| 颜色 | [optional]
 **ident** | **string**| 项目编号 | [optional]
 **programExtraFieldsProgramFieldId** | [**int[]**](../Model/int.md)| 项目自定义字段 id（项目字段设置列表的字段id） | [optional]
 **programExtraFieldsValue** | [**string[]**](../Model/string.md)| 自定义字段的值（options类型的字段传对应选项的id，使用 , 隔开，如\&quot;1,2,3\&quot;） | [optional]
 **category** | **string**| 项目类型(standard、scrum、kanban) | [optional]
 **projectIds** | **string**| 关联仓库ids，逗号隔开 | [optional]
 **importProjectUsers** | **bool**| 是否导入仓库成员 | [optional]
 **importProjectIssues** | **bool**| 是否导入仓库任务 | [optional]
 **importProjectMilestones** | **bool**| 是否导入仓库里程碑 | [optional]
 **userIds** | **string**| 成员ids，逗号隔开 | [optional]
 **groupIds** | **string**| 团队ids，逗号隔开 | [optional]

### Return type

[**\GiteeEnterprise\Model\Program**](../Model/Program.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProgramsFilter**
> \GiteeEnterprise\Model\ProgramList[] postEnterpriseIdProgramsFilter($property, $filterConditionsProperty, $enterpriseId, $accessToken, $direction, $sortField, $programFieldId, $priorityTopped, $search, $filterConditionsComparator, $filterConditionsValue, $filterConditionsProgramFieldType, $filterConditionsProgramFieldId, $page, $perPage)

项目列表-支持自定义字段的筛选

项目列表-支持自定义字段的筛选

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$property = "property_example"; // string | 排序的字段类型: 项目自定义字段-program_field, 表字段-table_field
$filterConditionsProperty = array("filterConditionsProperty_example"); // string[] | 筛选类型
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$sortField = "sortField_example"; // string | 排序字段(created_at: 创建时间|updated_at: 更新时间|name: 项目名称|property为table_field时生效)
$programFieldId = 56; // int | 项目自定义字段ID, property为program_field时需要填
$priorityTopped = true; // bool | 是否按照置顶优先排序
$search = "search_example"; // string | 搜索关键词
$filterConditionsComparator = array("filterConditionsComparator_example"); // string[] | 比较符
$filterConditionsValue = array("filterConditionsValue_example"); // string[] | 值
$filterConditionsProgramFieldType = array("filterConditionsProgramFieldType_example"); // string[] | 自定义字段值类型
$filterConditionsProgramFieldId = array(56); // int[] | 自定义字段id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->postEnterpriseIdProgramsFilter($property, $filterConditionsProperty, $enterpriseId, $accessToken, $direction, $sortField, $programFieldId, $priorityTopped, $search, $filterConditionsComparator, $filterConditionsValue, $filterConditionsProgramFieldType, $filterConditionsProgramFieldId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->postEnterpriseIdProgramsFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property** | **string**| 排序的字段类型: 项目自定义字段-program_field, 表字段-table_field |
 **filterConditionsProperty** | [**string[]**](../Model/string.md)| 筛选类型 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **sortField** | **string**| 排序字段(created_at: 创建时间|updated_at: 更新时间|name: 项目名称|property为table_field时生效) | [optional]
 **programFieldId** | **int**| 项目自定义字段ID, property为program_field时需要填 | [optional]
 **priorityTopped** | **bool**| 是否按照置顶优先排序 | [optional]
 **search** | **string**| 搜索关键词 | [optional]
 **filterConditionsComparator** | [**string[]**](../Model/string.md)| 比较符 | [optional]
 **filterConditionsValue** | [**string[]**](../Model/string.md)| 值 | [optional]
 **filterConditionsProgramFieldType** | [**string[]**](../Model/string.md)| 自定义字段值类型 | [optional]
 **filterConditionsProgramFieldId** | [**int[]**](../Model/int.md)| 自定义字段id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramList[]**](../Model/ProgramList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProgramsProgramIdMembers**
> \GiteeEnterprise\Model\Member postEnterpriseIdProgramsProgramIdMembers($programId, $enterpriseId, $accessToken, $userIds, $groupIds)

添加企业成员或团队进项目

添加企业成员或团队进项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$userIds = "userIds_example"; // string | 成员ids，英文逗号(,)隔开: 1,2
$groupIds = "groupIds_example"; // string | 团队ids，英文逗号(,)隔开: 1,2

try {
    $result = $apiInstance->postEnterpriseIdProgramsProgramIdMembers($programId, $enterpriseId, $accessToken, $userIds, $groupIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->postEnterpriseIdProgramsProgramIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **userIds** | **string**| 成员ids，英文逗号(,)隔开: 1,2 | [optional]
 **groupIds** | **string**| 团队ids，英文逗号(,)隔开: 1,2 | [optional]

### Return type

[**\GiteeEnterprise\Model\Member**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProgramsProgramIdProjects**
> \GiteeEnterprise\Model\Project postEnterpriseIdProgramsProgramIdProjects($programId, $addProjectIds, $enterpriseId, $accessToken, $importProjectUsers, $importProjectIssues, $importProjectMilestones)

项目关联仓库

项目关联仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$addProjectIds = "addProjectIds_example"; // string | 仓库ids
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$importProjectUsers = 1; // int | 是否导入仓库成员
$importProjectIssues = 0; // int | 是否导入仓库任务
$importProjectMilestones = 0; // int | 是否导入仓库里程碑

try {
    $result = $apiInstance->postEnterpriseIdProgramsProgramIdProjects($programId, $addProjectIds, $enterpriseId, $accessToken, $importProjectUsers, $importProjectIssues, $importProjectMilestones);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->postEnterpriseIdProgramsProgramIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **addProjectIds** | **string**| 仓库ids |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **importProjectUsers** | **int**| 是否导入仓库成员 | [optional] [default to 1]
 **importProjectIssues** | **int**| 是否导入仓库任务 | [optional] [default to 0]
 **importProjectMilestones** | **int**| 是否导入仓库里程碑 | [optional] [default to 0]

### Return type

[**\GiteeEnterprise\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProgramsProgramId**
> \GiteeEnterprise\Model\Program putEnterpriseIdProgramsProgramId($programId, $name, $enterpriseId, $accessToken, $description, $assigneeId, $outsourced, $status, $color, $ident, $programExtraFieldsProgramFieldId, $programExtraFieldsValue, $issueModule)

更新项目

更新项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$name = "name_example"; // string | 项目名称
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 项目简介
$assigneeId = "assigneeId_example"; // string | 负责人ID
$outsourced = true; // bool | 项目类型:内部(false)/外包(true)项目
$status = 56; // int | 项目状态:（0:开始 1:暂停 2:关闭）
$color = "color_example"; // string | 颜色
$ident = "ident_example"; // string | 项目编号
$programExtraFieldsProgramFieldId = array(56); // int[] | 项目自定义字段 id（项目字段设置列表的字段id）
$programExtraFieldsValue = array("programExtraFieldsValue_example"); // string[] | 自定义字段的值（options类型的字段传对应选项的id，使用 , 隔开，如\"1,2,3\"）
$issueModule = "issueModule_example"; // string | 工作项组件模式

try {
    $result = $apiInstance->putEnterpriseIdProgramsProgramId($programId, $name, $enterpriseId, $accessToken, $description, $assigneeId, $outsourced, $status, $color, $ident, $programExtraFieldsProgramFieldId, $programExtraFieldsValue, $issueModule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->putEnterpriseIdProgramsProgramId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **name** | **string**| 项目名称 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 项目简介 | [optional]
 **assigneeId** | **string**| 负责人ID | [optional]
 **outsourced** | **bool**| 项目类型:内部(false)/外包(true)项目 | [optional]
 **status** | **int**| 项目状态:（0:开始 1:暂停 2:关闭） | [optional]
 **color** | **string**| 颜色 | [optional]
 **ident** | **string**| 项目编号 | [optional]
 **programExtraFieldsProgramFieldId** | [**int[]**](../Model/int.md)| 项目自定义字段 id（项目字段设置列表的字段id） | [optional]
 **programExtraFieldsValue** | [**string[]**](../Model/string.md)| 自定义字段的值（options类型的字段传对应选项的id，使用 , 隔开，如\&quot;1,2,3\&quot;） | [optional]
 **issueModule** | **string**| 工作项组件模式 | [optional]

### Return type

[**\GiteeEnterprise\Model\Program**](../Model/Program.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProgramsProgramIdUpdateComponents**
> \GiteeEnterprise\Model\ProgramComponent[] putEnterpriseIdProgramsProgramIdUpdateComponents($programId, $componentsIdent, $componentsEnabled, $enterpriseId, $accessToken, $componentsCondition, $componentsRoleIdsRoleId)

修改项目组件

修改项目组件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programId = 56; // int | 项目 id
$componentsIdent = array("componentsIdent_example"); // string[] | 组件ident
$componentsEnabled = array(True); // bool[] | 是否开启
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$componentsCondition = array(56); // int[] | 0为属于， 1为不属于
$componentsRoleIdsRoleId = array(56); // int[] | 角色id

try {
    $result = $apiInstance->putEnterpriseIdProgramsProgramIdUpdateComponents($programId, $componentsIdent, $componentsEnabled, $enterpriseId, $accessToken, $componentsCondition, $componentsRoleIdsRoleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->putEnterpriseIdProgramsProgramIdUpdateComponents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programId** | **int**| 项目 id |
 **componentsIdent** | [**string[]**](../Model/string.md)| 组件ident |
 **componentsEnabled** | [**bool[]**](../Model/bool.md)| 是否开启 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **componentsCondition** | [**int[]**](../Model/int.md)| 0为属于， 1为不属于 | [optional]
 **componentsRoleIdsRoleId** | [**int[]**](../Model/int.md)| 角色id | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramComponent[]**](../Model/ProgramComponent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

