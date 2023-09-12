# GiteeEnterprise\KooderApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdKooderCode**](KooderApi.md#getEnterpriseIdKooderCode) | **GET** /{enterprise_id}/kooder/code | code 查询
[**getEnterpriseIdKooderDocs**](KooderApi.md#getEnterpriseIdKooderDocs) | **GET** /{enterprise_id}/kooder/docs | 知识库查询
[**getEnterpriseIdKooderIssue**](KooderApi.md#getEnterpriseIdKooderIssue) | **GET** /{enterprise_id}/kooder/issue | issue查询
[**getEnterpriseIdKooderProject**](KooderApi.md#getEnterpriseIdKooderProject) | **GET** /{enterprise_id}/kooder/project | 仓库查询


# **getEnterpriseIdKooderCode**
> getEnterpriseIdKooderCode($enterpriseId, $search, $accessToken, $page, $perPage, $language, $projectId, $visibility, $scope, $scene)

code 查询

code 查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\KooderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$search = "search_example"; // string | 搜索内容
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$language = "language_example"; // string | 仓库语言
$projectId = "projectId_example"; // string | 仓库id，用英文逗号分隔
$visibility = "visibility_example"; // string | 仓库开源属性，公开：0，私有：1，内源：2，可多选，用英文逗号分隔
$scope = "scope_example"; // string | 检索范围，null：默认，仓库文件名称、仓库文件内容， location：仓库文件名称
$scene = 56; // int | 触发场景，用户做分析统计

try {
    $apiInstance->getEnterpriseIdKooderCode($enterpriseId, $search, $accessToken, $page, $perPage, $language, $projectId, $visibility, $scope, $scene);
} catch (Exception $e) {
    echo 'Exception when calling KooderApi->getEnterpriseIdKooderCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **search** | **string**| 搜索内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **language** | **string**| 仓库语言 | [optional]
 **projectId** | **string**| 仓库id，用英文逗号分隔 | [optional]
 **visibility** | **string**| 仓库开源属性，公开：0，私有：1，内源：2，可多选，用英文逗号分隔 | [optional]
 **scope** | **string**| 检索范围，null：默认，仓库文件名称、仓库文件内容， location：仓库文件名称 | [optional]
 **scene** | **int**| 触发场景，用户做分析统计 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdKooderDocs**
> getEnterpriseIdKooderDocs($enterpriseId, $search, $accessToken, $page, $perPage, $programId, $scene)

知识库查询

知识库查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\KooderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$search = "search_example"; // string | 搜索内容
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$programId = "programId_example"; // string | 项目id，用英文逗号分隔
$scene = 56; // int | 触发场景，用户做分析统计

try {
    $apiInstance->getEnterpriseIdKooderDocs($enterpriseId, $search, $accessToken, $page, $perPage, $programId, $scene);
} catch (Exception $e) {
    echo 'Exception when calling KooderApi->getEnterpriseIdKooderDocs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **search** | **string**| 搜索内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **programId** | **string**| 项目id，用英文逗号分隔 | [optional]
 **scene** | **int**| 触发场景，用户做分析统计 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdKooderIssue**
> \GiteeEnterprise\Model\Issue getEnterpriseIdKooderIssue($enterpriseId, $search, $accessToken, $page, $perPage, $issueTypeIds, $projectId, $programId, $scope, $scene)

issue查询

issue查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\KooderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$search = "search_example"; // string | 搜索内容
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$issueTypeIds = "issueTypeIds_example"; // string | 任务类型id，用英文逗号分隔
$projectId = "projectId_example"; // string | 仓库id，用英文逗号分隔
$programId = "programId_example"; // string | 项目id，用英文逗号分隔
$scope = "scope_example"; // string | 检索范围，null：默认，任务标题、任务描述， title：任务标题
$scene = 56; // int | 触发场景，用户做分析统计

try {
    $result = $apiInstance->getEnterpriseIdKooderIssue($enterpriseId, $search, $accessToken, $page, $perPage, $issueTypeIds, $projectId, $programId, $scope, $scene);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KooderApi->getEnterpriseIdKooderIssue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **search** | **string**| 搜索内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **issueTypeIds** | **string**| 任务类型id，用英文逗号分隔 | [optional]
 **projectId** | **string**| 仓库id，用英文逗号分隔 | [optional]
 **programId** | **string**| 项目id，用英文逗号分隔 | [optional]
 **scope** | **string**| 检索范围，null：默认，任务标题、任务描述， title：任务标题 | [optional]
 **scene** | **int**| 触发场景，用户做分析统计 | [optional]

### Return type

[**\GiteeEnterprise\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdKooderProject**
> \GiteeEnterprise\Model\Project getEnterpriseIdKooderProject($enterpriseId, $search, $accessToken, $page, $perPage, $language, $projectIds, $namespaceIds, $visibility, $scope, $scene)

仓库查询

仓库查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\KooderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$search = "search_example"; // string | 搜索内容
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$language = "language_example"; // string | 仓库语言
$projectIds = "projectIds_example"; // string | 仓库id，用英文逗号分隔
$namespaceIds = "namespaceIds_example"; // string | 仓库命名空间id，用英文逗号分隔
$visibility = "visibility_example"; // string | 仓库开源属性，公开：0，私有：1，内源：2，可多选，用英文逗号分隔
$scope = "scope_example"; // string | 检索范围，null：默认，仓库名、仓库描述， human_name：仓库名称
$scene = 56; // int | 触发场景，用户做分析统计

try {
    $result = $apiInstance->getEnterpriseIdKooderProject($enterpriseId, $search, $accessToken, $page, $perPage, $language, $projectIds, $namespaceIds, $visibility, $scope, $scene);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KooderApi->getEnterpriseIdKooderProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **search** | **string**| 搜索内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **language** | **string**| 仓库语言 | [optional]
 **projectIds** | **string**| 仓库id，用英文逗号分隔 | [optional]
 **namespaceIds** | **string**| 仓库命名空间id，用英文逗号分隔 | [optional]
 **visibility** | **string**| 仓库开源属性，公开：0，私有：1，内源：2，可多选，用英文逗号分隔 | [optional]
 **scope** | **string**| 检索范围，null：默认，仓库名、仓库描述， human_name：仓库名称 | [optional]
 **scene** | **int**| 触发场景，用户做分析统计 | [optional]

### Return type

[**\GiteeEnterprise\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

