# GiteeEnterprise\ProjectBranchApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdProjectsProjectIdBranchesBatchDestroy**](ProjectBranchApi.md#deleteEnterpriseIdProjectsProjectIdBranchesBatchDestroy) | **DELETE** /{enterprise_id}/projects/{project_id}/branches/batch_destroy | 批量删除分支
[**deleteEnterpriseIdProjectsProjectIdBranchesName**](ProjectBranchApi.md#deleteEnterpriseIdProjectsProjectIdBranchesName) | **DELETE** /{enterprise_id}/projects/{project_id}/branches/{name} | 删除分支
[**getEnterpriseIdProjectsProjectIdBranches**](ProjectBranchApi.md#getEnterpriseIdProjectsProjectIdBranches) | **GET** /{enterprise_id}/projects/{project_id}/branches | 获取仓库的分支列表
[**postEnterpriseIdProjectsProjectIdBranches**](ProjectBranchApi.md#postEnterpriseIdProjectsProjectIdBranches) | **POST** /{enterprise_id}/projects/{project_id}/branches | 添加/恢复分支
[**putEnterpriseIdProjectsProjectIdBranchesName**](ProjectBranchApi.md#putEnterpriseIdProjectsProjectIdBranchesName) | **PUT** /{enterprise_id}/projects/{project_id}/branches/{name} | 编辑分支
[**putEnterpriseIdProjectsProjectIdBranchesNameSetDefault**](ProjectBranchApi.md#putEnterpriseIdProjectsProjectIdBranchesNameSetDefault) | **PUT** /{enterprise_id}/projects/{project_id}/branches/{name}/set_default | 设为默认分支


# **deleteEnterpriseIdProjectsProjectIdBranchesBatchDestroy**
> deleteEnterpriseIdProjectsProjectIdBranchesBatchDestroy($enterpriseId, $projectId, $names, $accessToken, $qt)

批量删除分支

批量删除分支

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectBranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$names = array("names_example"); // string[] | 分支名数组
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->deleteEnterpriseIdProjectsProjectIdBranchesBatchDestroy($enterpriseId, $projectId, $names, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBranchApi->deleteEnterpriseIdProjectsProjectIdBranchesBatchDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **names** | [**string[]**](../Model/string.md)| 分支名数组 |
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

# **deleteEnterpriseIdProjectsProjectIdBranchesName**
> deleteEnterpriseIdProjectsProjectIdBranchesName($enterpriseId, $projectId, $name, $accessToken, $qt)

删除分支

删除分支

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectBranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$name = "name_example"; // string | 分支名
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->deleteEnterpriseIdProjectsProjectIdBranchesName($enterpriseId, $projectId, $name, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBranchApi->deleteEnterpriseIdProjectsProjectIdBranchesName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **name** | **string**| 分支名 |
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

# **getEnterpriseIdProjectsProjectIdBranches**
> \GiteeEnterprise\Model\Branch getEnterpriseIdProjectsProjectIdBranches($enterpriseId, $projectId, $accessToken, $qt, $search, $sort, $mode, $creatorId, $needModeCount, $branchQuality, $page, $perPage)

获取仓库的分支列表

获取仓库的分支列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectBranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$search = "search_example"; // string | 搜索关键字
$sort = "updated_desc"; // string | 排序
$mode = "all"; // string | 类型(all: 全部分支, active: 活跃分支, stale: 非活跃分支, deleted: 已删除分支)
$creatorId = 56; // int | 分支创建者
$needModeCount = true; // bool | 是否需要按照类型分组统计数量
$branchQuality = "branchQuality_example"; // string | 分支属性(0:常规分支 1:保护分支 2:只读分支)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdBranches($enterpriseId, $projectId, $accessToken, $qt, $search, $sort, $mode, $creatorId, $needModeCount, $branchQuality, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBranchApi->getEnterpriseIdProjectsProjectIdBranches: ', $e->getMessage(), PHP_EOL;
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
 **search** | **string**| 搜索关键字 | [optional]
 **sort** | **string**| 排序 | [optional] [default to updated_desc]
 **mode** | **string**| 类型(all: 全部分支, active: 活跃分支, stale: 非活跃分支, deleted: 已删除分支) | [optional] [default to all]
 **creatorId** | **int**| 分支创建者 | [optional]
 **needModeCount** | **bool**| 是否需要按照类型分组统计数量 | [optional]
 **branchQuality** | **string**| 分支属性(0:常规分支 1:保护分支 2:只读分支) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Branch**](../Model/Branch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdBranches**
> \GiteeEnterprise\Model\Branch postEnterpriseIdProjectsProjectIdBranches($enterpriseId, $projectId, $branchName, $refs, $accessToken, $qt, $action, $type, $remark, $newName, $refProjectId)

添加/恢复分支

添加/恢复分支

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectBranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$branchName = "branchName_example"; // string | 分支名称
$refs = "refs_example"; // string | 起点
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$action = "new"; // string | 动作：new(新建)，recovery(恢复)
$type = 0; // int | 分支状态,常规分支:0,保护分支:1,只读分支:2
$remark = "remark_example"; // string | 分支备注
$newName = "newName_example"; // string | 在恢复分支时新的分支名称
$refProjectId = 56; // int | 新建仓库时起点所属仓库

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdBranches($enterpriseId, $projectId, $branchName, $refs, $accessToken, $qt, $action, $type, $remark, $newName, $refProjectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBranchApi->postEnterpriseIdProjectsProjectIdBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **branchName** | **string**| 分支名称 |
 **refs** | **string**| 起点 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **action** | **string**| 动作：new(新建)，recovery(恢复) | [optional] [default to new]
 **type** | **int**| 分支状态,常规分支:0,保护分支:1,只读分支:2 | [optional] [default to 0]
 **remark** | **string**| 分支备注 | [optional]
 **newName** | **string**| 在恢复分支时新的分支名称 | [optional]
 **refProjectId** | **int**| 新建仓库时起点所属仓库 | [optional]

### Return type

[**\GiteeEnterprise\Model\Branch**](../Model/Branch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdBranchesName**
> \GiteeEnterprise\Model\Branch putEnterpriseIdProjectsProjectIdBranchesName($enterpriseId, $projectId, $name, $accessToken, $qt, $type, $remark, $newName)

编辑分支

编辑分支

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectBranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$name = "name_example"; // string | 分支名
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$type = 56; // int | 分支状态,常规分支:0,保护分支:1,只读分支:2
$remark = "remark_example"; // string | 分支备注
$newName = "newName_example"; // string | 新的分支名称

try {
    $result = $apiInstance->putEnterpriseIdProjectsProjectIdBranchesName($enterpriseId, $projectId, $name, $accessToken, $qt, $type, $remark, $newName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBranchApi->putEnterpriseIdProjectsProjectIdBranchesName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **name** | **string**| 分支名 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **type** | **int**| 分支状态,常规分支:0,保护分支:1,只读分支:2 | [optional]
 **remark** | **string**| 分支备注 | [optional]
 **newName** | **string**| 新的分支名称 | [optional]

### Return type

[**\GiteeEnterprise\Model\Branch**](../Model/Branch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdBranchesNameSetDefault**
> putEnterpriseIdProjectsProjectIdBranchesNameSetDefault($enterpriseId, $projectId, $name, $accessToken, $qt)

设为默认分支

设为默认分支

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectBranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$name = "name_example"; // string | 分支名
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->putEnterpriseIdProjectsProjectIdBranchesNameSetDefault($enterpriseId, $projectId, $name, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectBranchApi->putEnterpriseIdProjectsProjectIdBranchesNameSetDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **name** | **string**| 分支名 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

