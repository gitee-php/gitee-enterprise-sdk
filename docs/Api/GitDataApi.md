# GiteeEnterprise\GitDataApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdProjectsProjectIdReleasesReleaseId**](GitDataApi.md#deleteEnterpriseIdProjectsProjectIdReleasesReleaseId) | **DELETE** /{enterprise_id}/projects/{project_id}/releases/{release_id} | 删除发行版
[**getEnterpriseIdProjects**](GitDataApi.md#getEnterpriseIdProjects) | **GET** /{enterprise_id}/projects | 获取授权用户参与的仓库列表
[**getEnterpriseIdProjectsAsTree**](GitDataApi.md#getEnterpriseIdProjectsAsTree) | **GET** /{enterprise_id}/projects/as_tree | 获取授权用户参与的仓库列表(按层级获取)
[**getEnterpriseIdProjectsForPullRequest**](GitDataApi.md#getEnterpriseIdProjectsForPullRequest) | **GET** /{enterprise_id}/projects/for_pull_request | 获取当前用户有权限提pr的仓库
[**getEnterpriseIdProjectsProjectId**](GitDataApi.md#getEnterpriseIdProjectsProjectId) | **GET** /{enterprise_id}/projects/{project_id} | 仓库概览信息
[**getEnterpriseIdProjectsProjectIdCanPull**](GitDataApi.md#getEnterpriseIdProjectsProjectIdCanPull) | **GET** /{enterprise_id}/projects/{project_id}/can_pull | 获取可创建 Pull Request 的仓库
[**getEnterpriseIdProjectsProjectIdCheckReleases**](GitDataApi.md#getEnterpriseIdProjectsProjectIdCheckReleases) | **GET** /{enterprise_id}/projects/{project_id}/check_releases | 检查发行版是否存在
[**getEnterpriseIdProjectsProjectIdContributors**](GitDataApi.md#getEnterpriseIdProjectsProjectIdContributors) | **GET** /{enterprise_id}/projects/{project_id}/contributors | 获取仓库贡献者列表
[**getEnterpriseIdProjectsProjectIdEvents**](GitDataApi.md#getEnterpriseIdProjectsProjectIdEvents) | **GET** /{enterprise_id}/projects/{project_id}/events | 获取仓库动态
[**getEnterpriseIdProjectsProjectIdIssues**](GitDataApi.md#getEnterpriseIdProjectsProjectIdIssues) | **GET** /{enterprise_id}/projects/{project_id}/issues | 获取仓库的任务列表
[**getEnterpriseIdProjectsProjectIdOperateAuths**](GitDataApi.md#getEnterpriseIdProjectsProjectIdOperateAuths) | **GET** /{enterprise_id}/projects/{project_id}/operate_auths | 获取仓库的操作权限
[**getEnterpriseIdProjectsProjectIdPrograms**](GitDataApi.md#getEnterpriseIdProjectsProjectIdPrograms) | **GET** /{enterprise_id}/projects/{project_id}/programs | 获取仓库的关联项目列表
[**getEnterpriseIdProjectsProjectIdPullRequests**](GitDataApi.md#getEnterpriseIdProjectsProjectIdPullRequests) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests | 获取仓库的 Pull Request 列表
[**getEnterpriseIdProjectsProjectIdReleases**](GitDataApi.md#getEnterpriseIdProjectsProjectIdReleases) | **GET** /{enterprise_id}/projects/{project_id}/releases | 查看发行版列表
[**getEnterpriseIdProjectsProjectIdReleasesTagVersion**](GitDataApi.md#getEnterpriseIdProjectsProjectIdReleasesTagVersion) | **GET** /{enterprise_id}/projects/{project_id}/releases/{tag_version} | 查看发行版详情
[**getEnterpriseIdProjectsProjectIdSettings**](GitDataApi.md#getEnterpriseIdProjectsProjectIdSettings) | **GET** /{enterprise_id}/projects/{project_id}/settings | 获取仓库基本设置
[**getEnterpriseIdProjectsProjectIdUsers**](GitDataApi.md#getEnterpriseIdProjectsProjectIdUsers) | **GET** /{enterprise_id}/projects/{project_id}/users | 获取仓库的成员列表
[**postEnterpriseIdProjects**](GitDataApi.md#postEnterpriseIdProjects) | **POST** /{enterprise_id}/projects | 新建仓库
[**postEnterpriseIdProjectsCheckProjectCanImport**](GitDataApi.md#postEnterpriseIdProjectsCheckProjectCanImport) | **POST** /{enterprise_id}/projects/check_project_can_import | 新建仓库-导入仓库参数是否有效
[**postEnterpriseIdProjectsCheckProjectName**](GitDataApi.md#postEnterpriseIdProjectsCheckProjectName) | **POST** /{enterprise_id}/projects/check_project_name | 新建仓库-仓库名/路径是否已经存在
[**postEnterpriseIdProjectsProjectIdReleases**](GitDataApi.md#postEnterpriseIdProjectsProjectIdReleases) | **POST** /{enterprise_id}/projects/{project_id}/releases | 新建发行版
[**postEnterpriseIdProjectsTransferCode**](GitDataApi.md#postEnterpriseIdProjectsTransferCode) | **POST** /{enterprise_id}/projects/transfer_code | 获取仓库转入-转移码
[**putEnterpriseIdProjectsProjectId**](GitDataApi.md#putEnterpriseIdProjectsProjectId) | **PUT** /{enterprise_id}/projects/{project_id} | 更新仓库设置
[**putEnterpriseIdProjectsProjectIdReleasesReleaseId**](GitDataApi.md#putEnterpriseIdProjectsProjectIdReleasesReleaseId) | **PUT** /{enterprise_id}/projects/{project_id}/releases/{release_id} | 编辑发行版


# **deleteEnterpriseIdProjectsProjectIdReleasesReleaseId**
> \GiteeEnterprise\Model\Release deleteEnterpriseIdProjectsProjectIdReleasesReleaseId($enterpriseId, $projectId, $releaseId, $accessToken, $qt)

删除发行版

删除发行版

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$releaseId = 56; // int | 发行版 id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->deleteEnterpriseIdProjectsProjectIdReleasesReleaseId($enterpriseId, $projectId, $releaseId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->deleteEnterpriseIdProjectsProjectIdReleasesReleaseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **releaseId** | **int**| 发行版 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjects**
> \GiteeEnterprise\Model\ProjectDetail getEnterpriseIdProjects($enterpriseId, $accessToken, $scope, $search, $type, $status, $creatorId, $parentId, $forkFilter, $outsourced, $groupId, $sort, $direction, $namespaceScope, $page, $perPage)

获取授权用户参与的仓库列表

获取授权用户参与的仓库列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
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
$namespaceScope = "namespaceScope_example"; // string | 归属搜索的scope， 配合group_id使用, belongs_to: 搜索归属包含下级，only_this: 搜索归属仅包含当前层级
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjects($enterpriseId, $accessToken, $scope, $search, $type, $status, $creatorId, $parentId, $forkFilter, $outsourced, $groupId, $sort, $direction, $namespaceScope, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
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
 **namespaceScope** | **string**| 归属搜索的scope， 配合group_id使用, belongs_to: 搜索归属包含下级，only_this: 搜索归属仅包含当前层级 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectDetail**](../Model/ProjectDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsAsTree**
> \GiteeEnterprise\Model\UserProjectList getEnterpriseIdProjectsAsTree($enterpriseId, $accessToken, $scope, $search, $type, $status, $creatorId, $parentId, $forkFilter, $outsourced, $groupId, $sort, $direction, $page, $perPage)

获取授权用户参与的仓库列表(按层级获取)

获取授权用户参与的仓库列表(按层级获取)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
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
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsAsTree($enterpriseId, $accessToken, $scope, $search, $type, $status, $creatorId, $parentId, $forkFilter, $outsourced, $groupId, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsAsTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
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
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\UserProjectList**](../Model/UserProjectList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsForPullRequest**
> \GiteeEnterprise\Model\ProjectDetail getEnterpriseIdProjectsForPullRequest($enterpriseId, $accessToken, $search, $page, $perPage)

获取当前用户有权限提pr的仓库

获取当前用户有权限提pr的仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$search = "search_example"; // string | 搜索字符串
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsForPullRequest($enterpriseId, $accessToken, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsForPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **search** | **string**| 搜索字符串 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectDetail**](../Model/ProjectDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectId**
> \GiteeEnterprise\Model\ProjectOverview getEnterpriseIdProjectsProjectId($enterpriseId, $projectId, $accessToken, $qt)

仓库概览信息

仓库概览信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectId($enterpriseId, $projectId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectOverview**](../Model/ProjectOverview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdCanPull**
> \GiteeEnterprise\Model\Project getEnterpriseIdProjectsProjectIdCanPull($enterpriseId, $projectId, $accessToken, $qt)

获取可创建 Pull Request 的仓库

获取可创建 Pull Request 的仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdCanPull($enterpriseId, $projectId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdCanPull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdCheckReleases**
> getEnterpriseIdProjectsProjectIdCheckReleases($enterpriseId, $projectId, $tagVersion, $accessToken, $qt)

检查发行版是否存在

检查发行版是否存在

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$tagVersion = "tagVersion_example"; // string | 发行版本
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->getEnterpriseIdProjectsProjectIdCheckReleases($enterpriseId, $projectId, $tagVersion, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdCheckReleases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **tagVersion** | **string**| 发行版本 |
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

# **getEnterpriseIdProjectsProjectIdContributors**
> \GiteeEnterprise\Model\ProjectContributor[] getEnterpriseIdProjectsProjectIdContributors($enterpriseId, $projectId, $accessToken, $qt, $ref, $page, $perPage)

获取仓库贡献者列表

获取仓库贡献者列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$ref = "ref_example"; // string | 分支, 不传则取仓库的默认分支
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdContributors($enterpriseId, $projectId, $accessToken, $qt, $ref, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdContributors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **ref** | **string**| 分支, 不传则取仓库的默认分支 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectContributor[]**](../Model/ProjectContributor.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdEvents**
> \GiteeEnterprise\Model\Event getEnterpriseIdProjectsProjectIdEvents($enterpriseId, $projectId, $accessToken, $qt, $startDate, $endDate, $page, $perPage, $prevId, $limit)

获取仓库动态

获取仓库动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$prevId = 56; // int | 上一次动态列表中最小动态 ID (返回列表不包含该ID记录)
$limit = 56; // int | 每次获取动态的条数

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdEvents($enterpriseId, $projectId, $accessToken, $qt, $startDate, $endDate, $page, $perPage, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **prevId** | **int**| 上一次动态列表中最小动态 ID (返回列表不包含该ID记录) | [optional]
 **limit** | **int**| 每次获取动态的条数 | [optional]

### Return type

[**\GiteeEnterprise\Model\Event**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdIssues**
> \GiteeEnterprise\Model\Issue[] getEnterpriseIdProjectsProjectIdIssues($enterpriseId, $projectId, $accessToken, $qt, $programId, $milestoneId, $state, $onlyRelatedMe, $assigneeId, $authorId, $collaboratorIds, $createdAt, $finishedAt, $planStartedAt, $deadline, $search, $filterChild, $issueStateIds, $issueTypeId, $labelIds, $priority, $scrumSprintIds, $scrumVersionIds, $kanbanIds, $kanbanColumnIds, $sort, $direction, $page, $perPage)

获取仓库的任务列表

获取仓库的任务列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业 id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$programId = "programId_example"; // string | 项目 id（可多选，用英文逗号分隔）
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
$kanbanIds = "kanbanIds_example"; // string | 看板id(可多选，用英文逗号分隔)
$kanbanColumnIds = "kanbanColumnIds_example"; // string | 看板栏id(可多选，用英文逗号分隔)
$sort = "sort_example"; // string | 排序字段(created_at、updated_at、deadline、priority)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdIssues($enterpriseId, $projectId, $accessToken, $qt, $programId, $milestoneId, $state, $onlyRelatedMe, $assigneeId, $authorId, $collaboratorIds, $createdAt, $finishedAt, $planStartedAt, $deadline, $search, $filterChild, $issueStateIds, $issueTypeId, $labelIds, $priority, $scrumSprintIds, $scrumVersionIds, $kanbanIds, $kanbanColumnIds, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业 id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **programId** | **string**| 项目 id（可多选，用英文逗号分隔） | [optional]
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
 **kanbanIds** | **string**| 看板id(可多选，用英文逗号分隔) | [optional]
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

# **getEnterpriseIdProjectsProjectIdOperateAuths**
> \GiteeEnterprise\Model\UsersProjects getEnterpriseIdProjectsProjectIdOperateAuths($enterpriseId, $projectId, $accessToken, $qt)

获取仓库的操作权限

获取仓库的操作权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdOperateAuths($enterpriseId, $projectId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdOperateAuths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\UsersProjects**](../Model/UsersProjects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPrograms**
> \GiteeEnterprise\Model\Program getEnterpriseIdProjectsProjectIdPrograms($enterpriseId, $projectId, $accessToken, $qt, $scope, $page, $perPage)

获取仓库的关联项目列表

获取仓库的关联项目列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$scope = "scope_example"; // string | not_joined
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPrograms($enterpriseId, $projectId, $accessToken, $qt, $scope, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **scope** | **string**| not_joined | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Program**](../Model/Program.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequests**
> \GiteeEnterprise\Model\PullRequest getEnterpriseIdProjectsProjectIdPullRequests($enterpriseId, $projectId, $accessToken, $qt, $state, $sort, $direction, $page, $perPage)

获取仓库的 Pull Request 列表

获取仓库的 Pull Request 列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$state = "state_example"; // string | PR 状态
$sort = "sort_example"; // string | 排序字段(created_at、updated_at)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequests($enterpriseId, $projectId, $accessToken, $qt, $state, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdPullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **state** | **string**| PR 状态 | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdReleases**
> \GiteeEnterprise\Model\Release getEnterpriseIdProjectsProjectIdReleases($enterpriseId, $projectId, $accessToken, $qt, $page, $perPage)

查看发行版列表

查看发行版列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdReleases($enterpriseId, $projectId, $accessToken, $qt, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdReleases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdReleasesTagVersion**
> \GiteeEnterprise\Model\Release getEnterpriseIdProjectsProjectIdReleasesTagVersion($enterpriseId, $projectId, $tagVersion, $accessToken, $qt)

查看发行版详情

查看发行版详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$tagVersion = "tagVersion_example"; // string | 发行版版本
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdReleasesTagVersion($enterpriseId, $projectId, $tagVersion, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdReleasesTagVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **tagVersion** | **string**| 发行版版本 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdSettings**
> \GiteeEnterprise\Model\ProjectBaseSetting getEnterpriseIdProjectsProjectIdSettings($enterpriseId, $projectId, $accessToken, $qt)

获取仓库基本设置

获取仓库基本设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdSettings($enterpriseId, $projectId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectBaseSetting**](../Model/ProjectBaseSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdUsers**
> \GiteeEnterprise\Model\UsersProjects getEnterpriseIdProjectsProjectIdUsers($enterpriseId, $projectId, $accessToken, $qt, $search, $page, $perPage)

获取仓库的成员列表

获取仓库的成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$search = "search_example"; // string | 搜索字符串
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdUsers($enterpriseId, $projectId, $accessToken, $qt, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getEnterpriseIdProjectsProjectIdUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **search** | **string**| 搜索字符串 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\UsersProjects**](../Model/UsersProjects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjects**
> \GiteeEnterprise\Model\ProjectDetail postEnterpriseIdProjects($projectName, $projectNamespacePath, $projectPath, $enterpriseId, $accessToken, $projectTemplateId, $projectDescription, $projectPublic, $projectOutsourced, $projectProgramIds, $projectMemberIds, $projectGroupIds, $projectImportUrl, $normalRefs, $importProgramUsers, $readme, $issueTemplate, $pullRequestTemplate, $userSyncCode, $passwordSyncCode, $language, $ignore, $license, $model, $customBranchesProd, $customBranchesDev, $customBranchesFeat, $customBranchesRel, $customBranchesBugfix, $customBranchesTag)

新建仓库

新建仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectName = "projectName_example"; // string | 仓库名称
$projectNamespacePath = "projectNamespacePath_example"; // string | 归属路径
$projectPath = "projectPath_example"; // string | 仓库路径
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$projectTemplateId = 56; // int | 模板仓库 id
$projectDescription = "projectDescription_example"; // string | 仓库介绍
$projectPublic = 56; // int | 是否开源
$projectOutsourced = 56; // int | 类型，0：内部，1：外包
$projectProgramIds = "projectProgramIds_example"; // string | 关联项目列表，英文逗号分隔
$projectMemberIds = "projectMemberIds_example"; // string | 关联成员列表，英文逗号分隔
$projectGroupIds = "projectGroupIds_example"; // string | 授权团队列表，英文逗号分隔
$projectImportUrl = "projectImportUrl_example"; // string | 导入已有仓库路径
$normalRefs = true; // bool | 是否包含所有分支
$importProgramUsers = 56; // int | 是否导入项目成员: 0:否，1:是
$readme = 56; // int | 是否初始化readme: 0:否，1:是
$issueTemplate = 56; // int | 是否初始化issue模版: 0:否，1:是
$pullRequestTemplate = 56; // int | 是否初始化PR模版: 0:否，1:是
$userSyncCode = "userSyncCode_example"; // string | 仓库导入-账号
$passwordSyncCode = "passwordSyncCode_example"; // string | 仓库导入-密码
$language = 56; // int | 语言id
$ignore = "no"; // string | .gitignore
$license = "no"; // string | 开源许可证
$model = "model_example"; // string | 分支模型id
$customBranchesProd = "customBranchesProd_example"; // string | Production environment branch
$customBranchesDev = "customBranchesDev_example"; // string | Development branch
$customBranchesFeat = "customBranchesFeat_example"; // string | Function branch
$customBranchesRel = "customBranchesRel_example"; // string | Release branch
$customBranchesBugfix = "customBranchesBugfix_example"; // string | Patch branch
$customBranchesTag = "customBranchesTag_example"; // string | Version tag branch

try {
    $result = $apiInstance->postEnterpriseIdProjects($projectName, $projectNamespacePath, $projectPath, $enterpriseId, $accessToken, $projectTemplateId, $projectDescription, $projectPublic, $projectOutsourced, $projectProgramIds, $projectMemberIds, $projectGroupIds, $projectImportUrl, $normalRefs, $importProgramUsers, $readme, $issueTemplate, $pullRequestTemplate, $userSyncCode, $passwordSyncCode, $language, $ignore, $license, $model, $customBranchesProd, $customBranchesDev, $customBranchesFeat, $customBranchesRel, $customBranchesBugfix, $customBranchesTag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->postEnterpriseIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectName** | **string**| 仓库名称 |
 **projectNamespacePath** | **string**| 归属路径 |
 **projectPath** | **string**| 仓库路径 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **projectTemplateId** | **int**| 模板仓库 id | [optional]
 **projectDescription** | **string**| 仓库介绍 | [optional]
 **projectPublic** | **int**| 是否开源 | [optional]
 **projectOutsourced** | **int**| 类型，0：内部，1：外包 | [optional]
 **projectProgramIds** | **string**| 关联项目列表，英文逗号分隔 | [optional]
 **projectMemberIds** | **string**| 关联成员列表，英文逗号分隔 | [optional]
 **projectGroupIds** | **string**| 授权团队列表，英文逗号分隔 | [optional]
 **projectImportUrl** | **string**| 导入已有仓库路径 | [optional]
 **normalRefs** | **bool**| 是否包含所有分支 | [optional]
 **importProgramUsers** | **int**| 是否导入项目成员: 0:否，1:是 | [optional]
 **readme** | **int**| 是否初始化readme: 0:否，1:是 | [optional]
 **issueTemplate** | **int**| 是否初始化issue模版: 0:否，1:是 | [optional]
 **pullRequestTemplate** | **int**| 是否初始化PR模版: 0:否，1:是 | [optional]
 **userSyncCode** | **string**| 仓库导入-账号 | [optional]
 **passwordSyncCode** | **string**| 仓库导入-密码 | [optional]
 **language** | **int**| 语言id | [optional]
 **ignore** | **string**| .gitignore | [optional] [default to no]
 **license** | **string**| 开源许可证 | [optional] [default to no]
 **model** | **string**| 分支模型id | [optional]
 **customBranchesProd** | **string**| Production environment branch | [optional]
 **customBranchesDev** | **string**| Development branch | [optional]
 **customBranchesFeat** | **string**| Function branch | [optional]
 **customBranchesRel** | **string**| Release branch | [optional]
 **customBranchesBugfix** | **string**| Patch branch | [optional]
 **customBranchesTag** | **string**| Version tag branch | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectDetail**](../Model/ProjectDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsCheckProjectCanImport**
> \GiteeEnterprise\Model\ResultResponse postEnterpriseIdProjectsCheckProjectCanImport($importUrl, $enterpriseId, $accessToken, $userSyncCode, $passwordSyncCode)

新建仓库-导入仓库参数是否有效

新建仓库-导入仓库参数是否有效

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$importUrl = "importUrl_example"; // string | 待导入仓库克隆路径
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$userSyncCode = "userSyncCode_example"; // string | 仓库导入-账号（私有仓库需要）
$passwordSyncCode = "passwordSyncCode_example"; // string | 仓库导入-密码（私有仓库需要）

try {
    $result = $apiInstance->postEnterpriseIdProjectsCheckProjectCanImport($importUrl, $enterpriseId, $accessToken, $userSyncCode, $passwordSyncCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->postEnterpriseIdProjectsCheckProjectCanImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **importUrl** | **string**| 待导入仓库克隆路径 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **userSyncCode** | **string**| 仓库导入-账号（私有仓库需要） | [optional]
 **passwordSyncCode** | **string**| 仓库导入-密码（私有仓库需要） | [optional]

### Return type

[**\GiteeEnterprise\Model\ResultResponse**](../Model/ResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsCheckProjectName**
> postEnterpriseIdProjectsCheckProjectName($namespacePath, $enterpriseId, $accessToken, $name, $path)

新建仓库-仓库名/路径是否已经存在

新建仓库-仓库名/路径是否已经存在

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespacePath = "namespacePath_example"; // string | 归属路径
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 名称。二选一检验某一项
$path = "path_example"; // string | 路径。二选一检验某一项

try {
    $apiInstance->postEnterpriseIdProjectsCheckProjectName($namespacePath, $enterpriseId, $accessToken, $name, $path);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->postEnterpriseIdProjectsCheckProjectName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespacePath** | **string**| 归属路径 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 名称。二选一检验某一项 | [optional]
 **path** | **string**| 路径。二选一检验某一项 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdReleases**
> \GiteeEnterprise\Model\Release postEnterpriseIdProjectsProjectIdReleases($enterpriseId, $projectId, $releaseTagVersion, $releaseTitle, $accessToken, $qt, $releaseRef, $releaseDescription, $releaseReleaseType, $attachIds)

新建发行版

新建发行版

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$releaseTagVersion = "releaseTagVersion_example"; // string | 发行版版本
$releaseTitle = "releaseTitle_example"; // string | 发行版标题
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$releaseRef = "master"; // string | 发行版所属分支
$releaseDescription = "releaseDescription_example"; // string | 发行版描述
$releaseReleaseType = "releaseReleaseType_example"; // string | 发行版类型, 0：发行版、1：预发行版
$attachIds = "attachIds_example"; // string | 附件id列表，英文逗号分隔

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdReleases($enterpriseId, $projectId, $releaseTagVersion, $releaseTitle, $accessToken, $qt, $releaseRef, $releaseDescription, $releaseReleaseType, $attachIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->postEnterpriseIdProjectsProjectIdReleases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **releaseTagVersion** | **string**| 发行版版本 |
 **releaseTitle** | **string**| 发行版标题 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **releaseRef** | **string**| 发行版所属分支 | [optional] [default to master]
 **releaseDescription** | **string**| 发行版描述 | [optional]
 **releaseReleaseType** | **string**| 发行版类型, 0：发行版、1：预发行版 | [optional]
 **attachIds** | **string**| 附件id列表，英文逗号分隔 | [optional]

### Return type

[**\GiteeEnterprise\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsTransferCode**
> postEnterpriseIdProjectsTransferCode($enterpriseId, $accessToken)

获取仓库转入-转移码

获取仓库转入-转移码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postEnterpriseIdProjectsTransferCode($enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->postEnterpriseIdProjectsTransferCode: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectId**
> \GiteeEnterprise\Model\ProjectBaseSetting putEnterpriseIdProjectsProjectId($enterpriseId, $projectId, $accessToken, $qt, $name, $path, $description, $homepage, $langId, $defaultBranch, $outsourced, $creatorId, $canComment, $issueComment, $issuesEnabled, $securityHoleEnabled, $forkEnabled, $onlineEditEnabled, $pullRequestsEnabled, $wikiEnabled, $lightweightPrEnabled, $prMasterOnly, $forbidForcePush, $importUrl, $forbidForceSync, $svnEnabled, $canReadonly, $programAddIds, $programRemoveIds, $giteeGoEnabled, $programPipelineEnabled, $templateEnabled, $mergeEnabled, $squashEnabled, $rebaseEnabled, $defaultMergeMethod)

更新仓库设置

更新仓库设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$name = "name_example"; // string | 仓库名称
$path = "path_example"; // string | 仓库路径
$description = "description_example"; // string | 仓库介绍
$homepage = "homepage_example"; // string | 主页
$langId = 56; // int | 语言
$defaultBranch = "defaultBranch_example"; // string | 默认分支
$outsourced = 56; // int | 类型，0：内部，1：外包
$creatorId = 56; // int | 仓库负责人
$canComment = 56; // int | 允许用户对仓库进行评论
$issueComment = 56; // int | 允许用户对\"关闭\"状态的Issues进行评论
$issuesEnabled = 56; // int | 轻量级的issue跟踪系统
$securityHoleEnabled = 56; // int | 允许用户创建涉及敏感信息的Issue，提交后不公开此Issue（可见范围：仓库成员、企业成员）
$forkEnabled = 56; // int | 是否允许仓库被Fork
$onlineEditEnabled = 56; // int | 是否允许仓库文件在线编辑
$pullRequestsEnabled = 56; // int | 接受pull request，协作开发
$wikiEnabled = 56; // int | 可以编写文档
$lightweightPrEnabled = 56; // int | 接受轻量级 Pull Request
$prMasterOnly = 56; // int | 开启的Pull Request，仅管理员、审查者、测试者可见
$forbidForcePush = 56; // int | 禁止强制推送
$importUrl = "importUrl_example"; // string | 仓库远程地址
$forbidForceSync = 56; // int | 禁止仓库同步
$svnEnabled = 56; // int | 使用SVN管理您的仓库
$canReadonly = 56; // int | 开启文件/文件夹只读功能
$programAddIds = "programAddIds_example"; // string | 待添加的关联项目列表，英文逗号分隔
$programRemoveIds = "programRemoveIds_example"; // string | 待移除的关联项目列表，英文逗号分隔
$giteeGoEnabled = 56; // int | GiteeGo 启停状态, 1表示启用，0表示停用
$programPipelineEnabled = 56; // int | 是否支持项目流水线,1表示支持，0表示不支持
$templateEnabled = true; // bool | 仓库模板启停状态
$mergeEnabled = true; // bool | 是否开启 merge 合并方式, 默认为开启
$squashEnabled = true; // bool | 是否开启 squash 合并方式, 默认为开启
$rebaseEnabled = true; // bool | 是否开启 rebase 合并方式, 默认为开启
$defaultMergeMethod = "defaultMergeMethod_example"; // string | 选择默认合并 Pull Request 的方式,分别为 merge squash rebase

try {
    $result = $apiInstance->putEnterpriseIdProjectsProjectId($enterpriseId, $projectId, $accessToken, $qt, $name, $path, $description, $homepage, $langId, $defaultBranch, $outsourced, $creatorId, $canComment, $issueComment, $issuesEnabled, $securityHoleEnabled, $forkEnabled, $onlineEditEnabled, $pullRequestsEnabled, $wikiEnabled, $lightweightPrEnabled, $prMasterOnly, $forbidForcePush, $importUrl, $forbidForceSync, $svnEnabled, $canReadonly, $programAddIds, $programRemoveIds, $giteeGoEnabled, $programPipelineEnabled, $templateEnabled, $mergeEnabled, $squashEnabled, $rebaseEnabled, $defaultMergeMethod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->putEnterpriseIdProjectsProjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **name** | **string**| 仓库名称 | [optional]
 **path** | **string**| 仓库路径 | [optional]
 **description** | **string**| 仓库介绍 | [optional]
 **homepage** | **string**| 主页 | [optional]
 **langId** | **int**| 语言 | [optional]
 **defaultBranch** | **string**| 默认分支 | [optional]
 **outsourced** | **int**| 类型，0：内部，1：外包 | [optional]
 **creatorId** | **int**| 仓库负责人 | [optional]
 **canComment** | **int**| 允许用户对仓库进行评论 | [optional]
 **issueComment** | **int**| 允许用户对\&quot;关闭\&quot;状态的Issues进行评论 | [optional]
 **issuesEnabled** | **int**| 轻量级的issue跟踪系统 | [optional]
 **securityHoleEnabled** | **int**| 允许用户创建涉及敏感信息的Issue，提交后不公开此Issue（可见范围：仓库成员、企业成员） | [optional]
 **forkEnabled** | **int**| 是否允许仓库被Fork | [optional]
 **onlineEditEnabled** | **int**| 是否允许仓库文件在线编辑 | [optional]
 **pullRequestsEnabled** | **int**| 接受pull request，协作开发 | [optional]
 **wikiEnabled** | **int**| 可以编写文档 | [optional]
 **lightweightPrEnabled** | **int**| 接受轻量级 Pull Request | [optional]
 **prMasterOnly** | **int**| 开启的Pull Request，仅管理员、审查者、测试者可见 | [optional]
 **forbidForcePush** | **int**| 禁止强制推送 | [optional]
 **importUrl** | **string**| 仓库远程地址 | [optional]
 **forbidForceSync** | **int**| 禁止仓库同步 | [optional]
 **svnEnabled** | **int**| 使用SVN管理您的仓库 | [optional]
 **canReadonly** | **int**| 开启文件/文件夹只读功能 | [optional]
 **programAddIds** | **string**| 待添加的关联项目列表，英文逗号分隔 | [optional]
 **programRemoveIds** | **string**| 待移除的关联项目列表，英文逗号分隔 | [optional]
 **giteeGoEnabled** | **int**| GiteeGo 启停状态, 1表示启用，0表示停用 | [optional]
 **programPipelineEnabled** | **int**| 是否支持项目流水线,1表示支持，0表示不支持 | [optional]
 **templateEnabled** | **bool**| 仓库模板启停状态 | [optional]
 **mergeEnabled** | **bool**| 是否开启 merge 合并方式, 默认为开启 | [optional]
 **squashEnabled** | **bool**| 是否开启 squash 合并方式, 默认为开启 | [optional]
 **rebaseEnabled** | **bool**| 是否开启 rebase 合并方式, 默认为开启 | [optional]
 **defaultMergeMethod** | **string**| 选择默认合并 Pull Request 的方式,分别为 merge squash rebase | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectBaseSetting**](../Model/ProjectBaseSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdReleasesReleaseId**
> \GiteeEnterprise\Model\Release putEnterpriseIdProjectsProjectIdReleasesReleaseId($enterpriseId, $projectId, $releaseId, $releaseTagVersion, $releaseTitle, $accessToken, $qt, $releaseRef, $releaseDescription, $releaseReleaseType, $attachIds)

编辑发行版

编辑发行版

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$releaseId = 56; // int | 发行版 id
$releaseTagVersion = "releaseTagVersion_example"; // string | 发行版版本
$releaseTitle = "releaseTitle_example"; // string | 发行版标题
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$releaseRef = "master"; // string | 发行版所属分支
$releaseDescription = "releaseDescription_example"; // string | 发行版描述
$releaseReleaseType = "releaseReleaseType_example"; // string | 发行版类型, 0：发行版、1：预发行版
$attachIds = "attachIds_example"; // string | 附件id列表，英文逗号分隔

try {
    $result = $apiInstance->putEnterpriseIdProjectsProjectIdReleasesReleaseId($enterpriseId, $projectId, $releaseId, $releaseTagVersion, $releaseTitle, $accessToken, $qt, $releaseRef, $releaseDescription, $releaseReleaseType, $attachIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->putEnterpriseIdProjectsProjectIdReleasesReleaseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **releaseId** | **int**| 发行版 id |
 **releaseTagVersion** | **string**| 发行版版本 |
 **releaseTitle** | **string**| 发行版标题 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **releaseRef** | **string**| 发行版所属分支 | [optional] [default to master]
 **releaseDescription** | **string**| 发行版描述 | [optional]
 **releaseReleaseType** | **string**| 发行版类型, 0：发行版、1：预发行版 | [optional]
 **attachIds** | **string**| 附件id列表，英文逗号分隔 | [optional]

### Return type

[**\GiteeEnterprise\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

