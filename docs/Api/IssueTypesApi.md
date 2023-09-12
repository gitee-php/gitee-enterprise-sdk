# GiteeEnterprise\IssueTypesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdIssueTypesIssueTypeId**](IssueTypesApi.md#deleteEnterpriseIdIssueTypesIssueTypeId) | **DELETE** /{enterprise_id}/issue_types/{issue_type_id} | 删除任务类型
[**deleteEnterpriseIdIssueTypesIssueTypeIdProgramSettingProgramId**](IssueTypesApi.md#deleteEnterpriseIdIssueTypesIssueTypeIdProgramSettingProgramId) | **DELETE** /{enterprise_id}/issue_types/{issue_type_id}/program_setting/{program_id} | 移除项目下任务类型
[**getEnterpriseIdIssueTypes**](IssueTypesApi.md#getEnterpriseIdIssueTypes) | **GET** /{enterprise_id}/issue_types | 获取任务类型列表
[**getEnterpriseIdIssueTypesDefault**](IssueTypesApi.md#getEnterpriseIdIssueTypesDefault) | **GET** /{enterprise_id}/issue_types/default | 获取项目下的默认类型
[**getEnterpriseIdIssueTypesEnterpriseIssueTypes**](IssueTypesApi.md#getEnterpriseIdIssueTypesEnterpriseIssueTypes) | **GET** /{enterprise_id}/issue_types/enterprise_issue_types | 获取企业任务类型列表
[**getEnterpriseIdIssueTypesIssueTypeId**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeId) | **GET** /{enterprise_id}/issue_types/{issue_type_id} | 任务类型详情(状态管理)
[**getEnterpriseIdIssueTypesIssueTypeIdIssueStateIdIssues**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdIssueStateIdIssues) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/{issue_state_id}/issues | 指定任务类型,任务状态下任务列表
[**getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateFetchProgress**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateFetchProgress) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/issue_state_migrate/fetch_progress | 获取状态替换进度
[**getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateSubstituteState**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateSubstituteState) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/issue_state_migrate/substitute_state | 获取状态迁移自动分配的状态
[**getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateTargetStates**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateTargetStates) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/issue_state_migrate/target_states | 获取状态替换目标状态可选下拉列表
[**getEnterpriseIdIssueTypesIssueTypeIdIssueStateRefs**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdIssueStateRefs) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/issue_state_refs | 获取单个任务类型下的任务状态引用
[**getEnterpriseIdIssueTypesIssueTypeIdIssueStates**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdIssueStates) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/issue_states | 获取单个任务类型下的任务状态列表
[**getEnterpriseIdIssueTypesIssueTypeIdPrograms**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdPrograms) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/programs | 获取单个任务类型下的项目列表
[**getEnterpriseIdIssueTypesIssueTypeIdProgramsUnused**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdProgramsUnused) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/programs_unused | 获取任务类型下未添加的项目列表
[**getEnterpriseIdIssueTypesIssueTypeIdWorkflow**](IssueTypesApi.md#getEnterpriseIdIssueTypesIssueTypeIdWorkflow) | **GET** /{enterprise_id}/issue_types/{issue_type_id}/workflow | 获取企业任务状态的流转关系
[**getEnterpriseIdIssueTypesProgramIssueTypes**](IssueTypesApi.md#getEnterpriseIdIssueTypesProgramIssueTypes) | **GET** /{enterprise_id}/issue_types/program_issue_types | 获取项目任务类型列表
[**postEnterpriseIdIssueTypes**](IssueTypesApi.md#postEnterpriseIdIssueTypes) | **POST** /{enterprise_id}/issue_types | 新增任务类型
[**postEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateMigrate**](IssueTypesApi.md#postEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateMigrate) | **POST** /{enterprise_id}/issue_types/{issue_type_id}/issue_state_migrate/migrate | 工作项状态替换
[**postEnterpriseIdIssueTypesIssueTypeIdPrograms**](IssueTypesApi.md#postEnterpriseIdIssueTypesIssueTypeIdPrograms) | **POST** /{enterprise_id}/issue_types/{issue_type_id}/programs | 添加单个任务类型到项目
[**postEnterpriseIdIssueTypesPrograms**](IssueTypesApi.md#postEnterpriseIdIssueTypesPrograms) | **POST** /{enterprise_id}/issue_types/programs | 添加多个任务类型到项目
[**putEnterpriseIdIssueTypesChangeProgramSerial**](IssueTypesApi.md#putEnterpriseIdIssueTypesChangeProgramSerial) | **PUT** /{enterprise_id}/issue_types/change_program_serial | 更新项目下任务类型排序
[**putEnterpriseIdIssueTypesChangeSerial**](IssueTypesApi.md#putEnterpriseIdIssueTypesChangeSerial) | **PUT** /{enterprise_id}/issue_types/change_serial | 更新任务类型排序
[**putEnterpriseIdIssueTypesIssueTypeId**](IssueTypesApi.md#putEnterpriseIdIssueTypesIssueTypeId) | **PUT** /{enterprise_id}/issue_types/{issue_type_id} | 更新任务类型
[**putEnterpriseIdIssueTypesIssueTypeIdSetDefault**](IssueTypesApi.md#putEnterpriseIdIssueTypesIssueTypeIdSetDefault) | **PUT** /{enterprise_id}/issue_types/{issue_type_id}/set_default | 设置为项目下的默认类型
[**putEnterpriseIdIssueTypesIssueTypeIdWorkflow**](IssueTypesApi.md#putEnterpriseIdIssueTypesIssueTypeIdWorkflow) | **PUT** /{enterprise_id}/issue_types/{issue_type_id}/workflow | 变更任务状态流转关系


# **deleteEnterpriseIdIssueTypesIssueTypeId**
> deleteEnterpriseIdIssueTypesIssueTypeId($enterpriseId, $issueTypeId, $accessToken)

删除任务类型

删除任务类型

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssueTypesIssueTypeId($enterpriseId, $issueTypeId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->deleteEnterpriseIdIssueTypesIssueTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdIssueTypesIssueTypeIdProgramSettingProgramId**
> deleteEnterpriseIdIssueTypesIssueTypeIdProgramSettingProgramId($enterpriseId, $issueTypeId, $programId, $accessToken)

移除项目下任务类型

移除项目下任务类型

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$programId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssueTypesIssueTypeIdProgramSettingProgramId($enterpriseId, $issueTypeId, $programId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->deleteEnterpriseIdIssueTypesIssueTypeIdProgramSettingProgramId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **programId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypes**
> \GiteeEnterprise\Model\IssueType[] getEnterpriseIdIssueTypes($enterpriseId, $accessToken, $sort, $direction, $programId, $scope, $category, $page, $perPage)

获取任务类型列表

获取任务类型列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(created_at、updated_at、serial)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$programId = 56; // int | 项目ID
$scope = "scope_example"; // string | 查询范围：all, customize
$category = "category_example"; // string | 任务类型属性
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypes($enterpriseId, $accessToken, $sort, $direction, $programId, $scope, $category, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at、serial) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **programId** | **int**| 项目ID | [optional]
 **scope** | **string**| 查询范围：all, customize | [optional]
 **category** | **string**| 任务类型属性 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueType[]**](../Model/IssueType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesDefault**
> \GiteeEnterprise\Model\IssueTypeInProgram getEnterpriseIdIssueTypesDefault($enterpriseId, $programId, $accessToken)

获取项目下的默认类型

获取项目下的默认类型

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$programId = 56; // int | 项目ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesDefault($enterpriseId, $programId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **programId** | **int**| 项目ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueTypeInProgram**](../Model/IssueTypeInProgram.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesEnterpriseIssueTypes**
> \GiteeEnterprise\Model\IssueTypeInEnterprise[] getEnterpriseIdIssueTypesEnterpriseIssueTypes($enterpriseId, $accessToken, $sort, $direction, $category, $search, $state, $page, $perPage)

获取企业任务类型列表

获取企业任务类型列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(created_at、updated_at、serial)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$category = "category_example"; // string | 任务类型属性,多个分类以英文逗号分隔
$search = "search_example"; // string | 搜索关键字
$state = 56; // int | 项目的任务类型的状态：1-开启，0-关闭
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesEnterpriseIssueTypes($enterpriseId, $accessToken, $sort, $direction, $category, $search, $state, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesEnterpriseIssueTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at、serial) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **category** | **string**| 任务类型属性,多个分类以英文逗号分隔 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **state** | **int**| 项目的任务类型的状态：1-开启，0-关闭 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueTypeInEnterprise[]**](../Model/IssueTypeInEnterprise.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeId**
> \GiteeEnterprise\Model\IssueTypeWithStateRef getEnterpriseIdIssueTypesIssueTypeId($enterpriseId, $issueTypeId, $accessToken)

任务类型详情(状态管理)

任务类型详情(状态管理)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesIssueTypeId($enterpriseId, $issueTypeId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueTypeWithStateRef**](../Model/IssueTypeWithStateRef.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdIssueStateIdIssues**
> \GiteeEnterprise\Model\Issue getEnterpriseIdIssueTypesIssueTypeIdIssueStateIdIssues($enterpriseId, $issueTypeId, $issueStateId, $accessToken, $page, $perPage)

指定任务类型,任务状态下任务列表

指定任务类型,任务状态下任务列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$issueStateId = 56; // int | 任务状态 id
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdIssueStateIdIssues($enterpriseId, $issueTypeId, $issueStateId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdIssueStateIdIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **issueStateId** | **int**| 任务状态 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateFetchProgress**
> getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateFetchProgress($enterpriseId, $issueTypeId, $accessToken)

获取状态替换进度

获取状态替换进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateFetchProgress($enterpriseId, $issueTypeId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateFetchProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateSubstituteState**
> \GiteeEnterprise\Model\IssueState getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateSubstituteState($enterpriseId, $issueTypeId, $sourceStateId, $accessToken)

获取状态迁移自动分配的状态

获取状态迁移自动分配的状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$sourceStateId = 56; // int | 源任务状态 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateSubstituteState($enterpriseId, $issueTypeId, $sourceStateId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateSubstituteState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **sourceStateId** | **int**| 源任务状态 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueState**](../Model/IssueState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateTargetStates**
> \GiteeEnterprise\Model\IssueStateForMigration getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateTargetStates($enterpriseId, $issueTypeId, $sourceStateId, $accessToken, $page, $perPage)

获取状态替换目标状态可选下拉列表

获取状态替换目标状态可选下拉列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$sourceStateId = 56; // int | 源任务状态 ID
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateTargetStates($enterpriseId, $issueTypeId, $sourceStateId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateTargetStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **sourceStateId** | **int**| 源任务状态 ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueStateForMigration**](../Model/IssueStateForMigration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdIssueStateRefs**
> \GiteeEnterprise\Model\IssueState[] getEnterpriseIdIssueTypesIssueTypeIdIssueStateRefs($enterpriseId, $issueTypeId, $accessToken, $page, $perPage)

获取单个任务类型下的任务状态引用

获取单个任务类型下的任务状态引用

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型的 id
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdIssueStateRefs($enterpriseId, $issueTypeId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdIssueStateRefs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型的 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueState[]**](../Model/IssueState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdIssueStates**
> \GiteeEnterprise\Model\IssueState[] getEnterpriseIdIssueTypesIssueTypeIdIssueStates($enterpriseId, $issueTypeId, $accessToken, $sort, $direction, $page, $perPage)

获取单个任务类型下的任务状态列表

获取单个任务类型下的任务状态列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型的 id
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(created_at、updated_at)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdIssueStates($enterpriseId, $issueTypeId, $accessToken, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdIssueStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型的 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueState[]**](../Model/IssueState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdPrograms**
> \GiteeEnterprise\Model\Program[] getEnterpriseIdIssueTypesIssueTypeIdPrograms($enterpriseId, $issueTypeId, $accessToken, $search, $page, $perPage)

获取单个任务类型下的项目列表

获取单个任务类型下的项目列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$accessToken = "accessToken_example"; // string | 用户授权码
$search = "search_example"; // string | 搜索关键字
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdPrograms($enterpriseId, $issueTypeId, $accessToken, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Program[]**](../Model/Program.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdProgramsUnused**
> \GiteeEnterprise\Model\Program[] getEnterpriseIdIssueTypesIssueTypeIdProgramsUnused($enterpriseId, $issueTypeId, $accessToken, $search, $targetTypeId, $page, $perPage)

获取任务类型下未添加的项目列表

获取任务类型下未添加的项目列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$accessToken = "accessToken_example"; // string | 用户授权码
$search = "search_example"; // string | 搜索关键字
$targetTypeId = 56; // int | 目标类型 ID
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdProgramsUnused($enterpriseId, $issueTypeId, $accessToken, $search, $targetTypeId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdProgramsUnused: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **targetTypeId** | **int**| 目标类型 ID | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Program[]**](../Model/Program.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesIssueTypeIdWorkflow**
> getEnterpriseIdIssueTypesIssueTypeIdWorkflow($enterpriseId, $issueTypeId, $accessToken)

获取企业任务状态的流转关系

获取企业任务状态的流转关系

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdIssueTypesIssueTypeIdWorkflow($enterpriseId, $issueTypeId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesIssueTypeIdWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueTypesProgramIssueTypes**
> \GiteeEnterprise\Model\IssueTypeInProgram[] getEnterpriseIdIssueTypesProgramIssueTypes($enterpriseId, $programId, $accessToken, $sort, $direction, $category, $requirementNeedTask, $search, $unused, $state, $page, $perPage)

获取项目任务类型列表

获取项目任务类型列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$programId = 56; // int | 项目ID
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(created_at、updated_at、serial)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$category = "category_example"; // string | 任务类型属性
$requirementNeedTask = true; // bool | 需求是否需要返回任务类型
$search = "search_example"; // string | 搜索关键字
$unused = true; // bool | 是否只获取未添加到指定项目的任务类型
$state = 56; // int | 项目的任务类型的状态：1-开启，0-关闭
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueTypesProgramIssueTypes($enterpriseId, $programId, $accessToken, $sort, $direction, $category, $requirementNeedTask, $search, $unused, $state, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->getEnterpriseIdIssueTypesProgramIssueTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **programId** | **int**| 项目ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at、serial) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **category** | **string**| 任务类型属性 | [optional]
 **requirementNeedTask** | **bool**| 需求是否需要返回任务类型 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **unused** | **bool**| 是否只获取未添加到指定项目的任务类型 | [optional]
 **state** | **int**| 项目的任务类型的状态：1-开启，0-关闭 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueTypeInProgram[]**](../Model/IssueTypeInProgram.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssueTypes**
> \GiteeEnterprise\Model\IssueType postEnterpriseIdIssueTypes($enterpriseId, $title, $accessToken, $stateIds, $progressingIds, $closedIds, $description, $rejectedIds, $template, $category)

新增任务类型

新增任务类型

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$title = "title_example"; // string | 任务类型名称
$accessToken = "accessToken_example"; // string | 用户授权码
$stateIds = "stateIds_example"; // string | 任务状态ID(注意预期顺序排列), 逗号隔开
$progressingIds = "progressingIds_example"; // string | 状态属性：进行中。任务状态ID, 逗号隔开
$closedIds = "closedIds_example"; // string | 状态属性：已完成。任务状态ID, 逗号隔开
$description = "description_example"; // string | 任务类型描述
$rejectedIds = "rejectedIds_example"; // string | 状态属性：已拒绝。任务状态ID, 逗号隔开
$template = "template_example"; // string | 任务类型模版
$category = "category_example"; // string | 任务类型属性

try {
    $result = $apiInstance->postEnterpriseIdIssueTypes($enterpriseId, $title, $accessToken, $stateIds, $progressingIds, $closedIds, $description, $rejectedIds, $template, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->postEnterpriseIdIssueTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **title** | **string**| 任务类型名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **stateIds** | **string**| 任务状态ID(注意预期顺序排列), 逗号隔开 | [optional]
 **progressingIds** | **string**| 状态属性：进行中。任务状态ID, 逗号隔开 | [optional]
 **closedIds** | **string**| 状态属性：已完成。任务状态ID, 逗号隔开 | [optional]
 **description** | **string**| 任务类型描述 | [optional]
 **rejectedIds** | **string**| 状态属性：已拒绝。任务状态ID, 逗号隔开 | [optional]
 **template** | **string**| 任务类型模版 | [optional]
 **category** | **string**| 任务类型属性 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueType**](../Model/IssueType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateMigrate**
> postEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateMigrate($enterpriseId, $issueTypeId, $sourceStateId, $targetStateId, $accessToken)

工作项状态替换

工作项状态替换

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$sourceStateId = 56; // int | 源任务状态 ID
$targetStateId = 56; // int | 目标任务状态 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateMigrate($enterpriseId, $issueTypeId, $sourceStateId, $targetStateId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->postEnterpriseIdIssueTypesIssueTypeIdIssueStateMigrateMigrate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **sourceStateId** | **int**| 源任务状态 ID |
 **targetStateId** | **int**| 目标任务状态 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssueTypesIssueTypeIdPrograms**
> \GiteeEnterprise\Model\Program[] postEnterpriseIdIssueTypesIssueTypeIdPrograms($enterpriseId, $issueTypeId, $programIds, $accessToken)

添加单个任务类型到项目

添加单个任务类型到项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$programIds = "programIds_example"; // string | 项目ids, 英文逗号隔开
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdIssueTypesIssueTypeIdPrograms($enterpriseId, $issueTypeId, $programIds, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->postEnterpriseIdIssueTypesIssueTypeIdPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **programIds** | **string**| 项目ids, 英文逗号隔开 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Program[]**](../Model/Program.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssueTypesPrograms**
> \GiteeEnterprise\Model\IssueTypeInProgram postEnterpriseIdIssueTypesPrograms($enterpriseId, $issueTypeIds, $programId, $accessToken)

添加多个任务类型到项目

添加多个任务类型到项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeIds = "issueTypeIds_example"; // string | 任务类型ids, 英文逗号隔开
$programId = 56; // int | 项目ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdIssueTypesPrograms($enterpriseId, $issueTypeIds, $programId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->postEnterpriseIdIssueTypesPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeIds** | **string**| 任务类型ids, 英文逗号隔开 |
 **programId** | **int**| 项目ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueTypeInProgram**](../Model/IssueTypeInProgram.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssueTypesChangeProgramSerial**
> putEnterpriseIdIssueTypesChangeProgramSerial($enterpriseId, $issueTypeIds, $programId, $accessToken, $issueTypeCategory)

更新项目下任务类型排序

更新项目下任务类型排序

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeIds = "issueTypeIds_example"; // string | 任务类型ids(预期顺序), 英文逗号隔开
$programId = 56; // int | 项目ID
$accessToken = "accessToken_example"; // string | 用户授权码
$issueTypeCategory = "issueTypeCategory_example"; // string | 任务类型属性

try {
    $apiInstance->putEnterpriseIdIssueTypesChangeProgramSerial($enterpriseId, $issueTypeIds, $programId, $accessToken, $issueTypeCategory);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->putEnterpriseIdIssueTypesChangeProgramSerial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeIds** | **string**| 任务类型ids(预期顺序), 英文逗号隔开 |
 **programId** | **int**| 项目ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **issueTypeCategory** | **string**| 任务类型属性 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssueTypesChangeSerial**
> \GiteeEnterprise\Model\IssueType putEnterpriseIdIssueTypesChangeSerial($enterpriseId, $typeIds, $accessToken, $issueTypeCategory)

更新任务类型排序

更新任务类型排序

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$typeIds = "typeIds_example"; // string | 任务类型ids(预期顺序), 逗号隔开
$accessToken = "accessToken_example"; // string | 用户授权码
$issueTypeCategory = "issueTypeCategory_example"; // string | 任务类型属性

try {
    $result = $apiInstance->putEnterpriseIdIssueTypesChangeSerial($enterpriseId, $typeIds, $accessToken, $issueTypeCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->putEnterpriseIdIssueTypesChangeSerial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **typeIds** | **string**| 任务类型ids(预期顺序), 逗号隔开 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **issueTypeCategory** | **string**| 任务类型属性 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueType**](../Model/IssueType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssueTypesIssueTypeId**
> \GiteeEnterprise\Model\IssueType putEnterpriseIdIssueTypesIssueTypeId($enterpriseId, $issueTypeId, $accessToken, $stateIds, $progressingIds, $closedIds, $description, $rejectedIds, $template, $category, $title)

更新任务类型

更新任务类型

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$accessToken = "accessToken_example"; // string | 用户授权码
$stateIds = "stateIds_example"; // string | 任务状态ID(注意预期顺序排列), 逗号隔开
$progressingIds = "progressingIds_example"; // string | 状态属性：进行中。任务状态ID, 逗号隔开
$closedIds = "closedIds_example"; // string | 状态属性：已完成。任务状态ID, 逗号隔开
$description = "description_example"; // string | 任务类型描述
$rejectedIds = "rejectedIds_example"; // string | 状态属性：已拒绝。任务状态ID, 逗号隔开
$template = "template_example"; // string | 任务类型模版
$category = "category_example"; // string | 任务类型属性
$title = "title_example"; // string | 任务类型名称

try {
    $result = $apiInstance->putEnterpriseIdIssueTypesIssueTypeId($enterpriseId, $issueTypeId, $accessToken, $stateIds, $progressingIds, $closedIds, $description, $rejectedIds, $template, $category, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->putEnterpriseIdIssueTypesIssueTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **stateIds** | **string**| 任务状态ID(注意预期顺序排列), 逗号隔开 | [optional]
 **progressingIds** | **string**| 状态属性：进行中。任务状态ID, 逗号隔开 | [optional]
 **closedIds** | **string**| 状态属性：已完成。任务状态ID, 逗号隔开 | [optional]
 **description** | **string**| 任务类型描述 | [optional]
 **rejectedIds** | **string**| 状态属性：已拒绝。任务状态ID, 逗号隔开 | [optional]
 **template** | **string**| 任务类型模版 | [optional]
 **category** | **string**| 任务类型属性 | [optional]
 **title** | **string**| 任务类型名称 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueType**](../Model/IssueType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssueTypesIssueTypeIdSetDefault**
> \GiteeEnterprise\Model\IssueTypeInProgram putEnterpriseIdIssueTypesIssueTypeIdSetDefault($enterpriseId, $issueTypeId, $programId, $accessToken)

设置为项目下的默认类型

设置为项目下的默认类型

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$programId = 56; // int | 项目ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putEnterpriseIdIssueTypesIssueTypeIdSetDefault($enterpriseId, $issueTypeId, $programId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->putEnterpriseIdIssueTypesIssueTypeIdSetDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **programId** | **int**| 项目ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueTypeInProgram**](../Model/IssueTypeInProgram.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssueTypesIssueTypeIdWorkflow**
> putEnterpriseIdIssueTypesIssueTypeIdWorkflow($enterpriseId, $issueTypeId, $accessToken, $relationsCurrentStateId, $relationsNextStateId)

变更任务状态流转关系

变更任务状态流转关系

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueTypeId = 56; // int | 任务类型 id
$accessToken = "accessToken_example"; // string | 用户授权码
$relationsCurrentStateId = array(56); // int[] | 当前状态 id
$relationsNextStateId = array(56); // int[] | 下一个任务状态的 id

try {
    $apiInstance->putEnterpriseIdIssueTypesIssueTypeIdWorkflow($enterpriseId, $issueTypeId, $accessToken, $relationsCurrentStateId, $relationsNextStateId);
} catch (Exception $e) {
    echo 'Exception when calling IssueTypesApi->putEnterpriseIdIssueTypesIssueTypeIdWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueTypeId** | **int**| 任务类型 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **relationsCurrentStateId** | [**int[]**](../Model/int.md)| 当前状态 id | [optional]
 **relationsNextStateId** | [**int[]**](../Model/int.md)| 下一个任务状态的 id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

