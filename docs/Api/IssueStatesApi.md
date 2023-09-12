# GiteeEnterprise\IssueStatesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdIssueStatesIssueStateId**](IssueStatesApi.md#deleteEnterpriseIdIssueStatesIssueStateId) | **DELETE** /{enterprise_id}/issue_states/{issue_state_id} | 删除任务状态
[**getEnterpriseIdIssueStates**](IssueStatesApi.md#getEnterpriseIdIssueStates) | **GET** /{enterprise_id}/issue_states | 获取任务状态列表
[**getEnterpriseIdIssueStatesIssueStateId**](IssueStatesApi.md#getEnterpriseIdIssueStatesIssueStateId) | **GET** /{enterprise_id}/issue_states/{issue_state_id} | 任务状态详情
[**postEnterpriseIdIssueStates**](IssueStatesApi.md#postEnterpriseIdIssueStates) | **POST** /{enterprise_id}/issue_states | 新增任务状态
[**putEnterpriseIdIssueStatesIssueStateId**](IssueStatesApi.md#putEnterpriseIdIssueStatesIssueStateId) | **PUT** /{enterprise_id}/issue_states/{issue_state_id} | 更新任务状态


# **deleteEnterpriseIdIssueStatesIssueStateId**
> deleteEnterpriseIdIssueStatesIssueStateId($enterpriseId, $issueStateId, $accessToken)

删除任务状态

删除任务状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueStatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueStateId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssueStatesIssueStateId($enterpriseId, $issueStateId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssueStatesApi->deleteEnterpriseIdIssueStatesIssueStateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueStateId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssueStates**
> \GiteeEnterprise\Model\IssueState[] getEnterpriseIdIssueStates($enterpriseId, $accessToken, $sort, $direction, $search, $issueTypeCategory, $page, $perPage)

获取任务状态列表

获取任务状态列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueStatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(created_at、updated_at)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$search = "search_example"; // string | 搜索关键字
$issueTypeCategory = "issueTypeCategory_example"; // string | 任务类型属性
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssueStates($enterpriseId, $accessToken, $sort, $direction, $search, $issueTypeCategory, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueStatesApi->getEnterpriseIdIssueStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **issueTypeCategory** | **string**| 任务类型属性 | [optional]
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

# **getEnterpriseIdIssueStatesIssueStateId**
> \GiteeEnterprise\Model\IssueStateDetail getEnterpriseIdIssueStatesIssueStateId($enterpriseId, $issueStateId, $accessToken)

任务状态详情

任务状态详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueStatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueStateId = 56; // int | 任务状态 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdIssueStatesIssueStateId($enterpriseId, $issueStateId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueStatesApi->getEnterpriseIdIssueStatesIssueStateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueStateId** | **int**| 任务状态 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueStateDetail**](../Model/IssueStateDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssueStates**
> \GiteeEnterprise\Model\IssueState postEnterpriseIdIssueStates($enterpriseId, $title, $icon, $accessToken, $command)

新增任务状态

新增任务状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueStatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$title = "title_example"; // string | 任务状态名称
$icon = "icon_example"; // string | 任务状态图标
$accessToken = "accessToken_example"; // string | 用户授权码
$command = "command_example"; // string | 任务状态指令

try {
    $result = $apiInstance->postEnterpriseIdIssueStates($enterpriseId, $title, $icon, $accessToken, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueStatesApi->postEnterpriseIdIssueStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **title** | **string**| 任务状态名称 |
 **icon** | **string**| 任务状态图标 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **command** | **string**| 任务状态指令 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueState**](../Model/IssueState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssueStatesIssueStateId**
> \GiteeEnterprise\Model\IssueState putEnterpriseIdIssueStatesIssueStateId($enterpriseId, $title, $icon, $issueStateId, $accessToken, $command)

更新任务状态

更新任务状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssueStatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$title = "title_example"; // string | 任务状态名称
$icon = "icon_example"; // string | 任务状态图标
$issueStateId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$command = "command_example"; // string | 任务状态指令

try {
    $result = $apiInstance->putEnterpriseIdIssueStatesIssueStateId($enterpriseId, $title, $icon, $issueStateId, $accessToken, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueStatesApi->putEnterpriseIdIssueStatesIssueStateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **title** | **string**| 任务状态名称 |
 **icon** | **string**| 任务状态图标 |
 **issueStateId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **command** | **string**| 任务状态指令 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueState**](../Model/IssueState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

