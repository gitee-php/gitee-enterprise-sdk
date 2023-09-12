# GiteeEnterprise\ProjectEnvApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId**](ProjectEnvApi.md#deleteEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId) | **DELETE** /{enterprise_id}/projects/{project_id}/env_variables/{env_variable_id} | 删除环境变量
[**getEnterpriseIdProjectsProjectIdEnvVariables**](ProjectEnvApi.md#getEnterpriseIdProjectsProjectIdEnvVariables) | **GET** /{enterprise_id}/projects/{project_id}/env_variables | 环境变量列表
[**postEnterpriseIdProjectsProjectIdEnvVariables**](ProjectEnvApi.md#postEnterpriseIdProjectsProjectIdEnvVariables) | **POST** /{enterprise_id}/projects/{project_id}/env_variables | 新建环境变量
[**putEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId**](ProjectEnvApi.md#putEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId) | **PUT** /{enterprise_id}/projects/{project_id}/env_variables/{env_variable_id} | 修改环境变量


# **deleteEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId**
> deleteEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId($enterpriseId, $projectId, $envVariableId, $accessToken, $qt)

删除环境变量

删除环境变量

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectEnvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$envVariableId = 56; // int | 变量id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->deleteEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId($enterpriseId, $projectId, $envVariableId, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectEnvApi->deleteEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **envVariableId** | **int**| 变量id |
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

# **getEnterpriseIdProjectsProjectIdEnvVariables**
> \GiteeEnterprise\Model\EnvVariable getEnterpriseIdProjectsProjectIdEnvVariables($enterpriseId, $projectId, $accessToken, $qt, $query, $readOnly, $sort, $direction, $page, $perPage)

环境变量列表

环境变量列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectEnvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$query = "query_example"; // string | 搜索字符串
$readOnly = 56; // int | 1为只读，其他情况为全部
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 updated_at: 更新时间 name: 名称)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdEnvVariables($enterpriseId, $projectId, $accessToken, $qt, $query, $readOnly, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectEnvApi->getEnterpriseIdProjectsProjectIdEnvVariables: ', $e->getMessage(), PHP_EOL;
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
 **query** | **string**| 搜索字符串 | [optional]
 **readOnly** | **int**| 1为只读，其他情况为全部 | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 updated_at: 更新时间 name: 名称) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnvVariable**](../Model/EnvVariable.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdEnvVariables**
> \GiteeEnterprise\Model\EnvVariable postEnterpriseIdProjectsProjectIdEnvVariables($enterpriseId, $projectId, $name, $value, $accessToken, $qt, $readOnly, $remark)

新建环境变量

新建环境变量

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectEnvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$name = "name_example"; // string | 变量名称
$value = "value_example"; // string | 变量值
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$readOnly = 56; // int | 是否只读,1为true,0为false
$remark = "remark_example"; // string | 备注

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdEnvVariables($enterpriseId, $projectId, $name, $value, $accessToken, $qt, $readOnly, $remark);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectEnvApi->postEnterpriseIdProjectsProjectIdEnvVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **name** | **string**| 变量名称 |
 **value** | **string**| 变量值 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **readOnly** | **int**| 是否只读,1为true,0为false | [optional]
 **remark** | **string**| 备注 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnvVariable**](../Model/EnvVariable.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId**
> \GiteeEnterprise\Model\EnvVariable putEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId($enterpriseId, $projectId, $envVariableId, $accessToken, $qt, $name, $value, $readOnly, $remark)

修改环境变量

修改环境变量

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectEnvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$envVariableId = 56; // int | 变量id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$name = "name_example"; // string | 变量名称
$value = "value_example"; // string | 变量值
$readOnly = 56; // int | 是否只读,1为true,0为false
$remark = "remark_example"; // string | 备注

try {
    $result = $apiInstance->putEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId($enterpriseId, $projectId, $envVariableId, $accessToken, $qt, $name, $value, $readOnly, $remark);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectEnvApi->putEnterpriseIdProjectsProjectIdEnvVariablesEnvVariableId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **envVariableId** | **int**| 变量id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **name** | **string**| 变量名称 | [optional]
 **value** | **string**| 变量值 | [optional]
 **readOnly** | **int**| 是否只读,1为true,0为false | [optional]
 **remark** | **string**| 备注 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnvVariable**](../Model/EnvVariable.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

