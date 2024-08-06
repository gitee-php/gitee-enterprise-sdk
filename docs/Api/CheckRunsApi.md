# GiteeEnterprise\CheckRunsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdProjectsProjectIdCheckRunsList**](CheckRunsApi.md#getEnterpriseIdProjectsProjectIdCheckRunsList) | **GET** /{enterprise_id}/projects/{project_id}/check_runs/list | 门禁列表
[**postEnterpriseIdProjectsProjectIdCheckRunsAnnotations**](CheckRunsApi.md#postEnterpriseIdProjectsProjectIdCheckRunsAnnotations) | **POST** /{enterprise_id}/projects/{project_id}/check_runs/annotations | 门禁详情翻页
[**postEnterpriseIdProjectsProjectIdCheckRunsFixCheckRun**](CheckRunsApi.md#postEnterpriseIdProjectsProjectIdCheckRunsFixCheckRun) | **POST** /{enterprise_id}/projects/{project_id}/check_runs/fix_check_run | 重新执行门禁或fix失败门禁
[**postEnterpriseIdProjectsProjectIdCheckRunsSearch**](CheckRunsApi.md#postEnterpriseIdProjectsProjectIdCheckRunsSearch) | **POST** /{enterprise_id}/projects/{project_id}/check_runs/search | 设置门禁检查项查询接口


# **getEnterpriseIdProjectsProjectIdCheckRunsList**
> \GiteeEnterprise\Model\CheckRun getEnterpriseIdProjectsProjectIdCheckRunsList($enterpriseId, $projectId, $pullRequestId, $checkRunId, $headSha)

门禁列表

门禁列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\CheckRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$projectId = 56; // int | 
$pullRequestId = 56; // int | pr id
$checkRunId = 56; // int | 门禁ID
$headSha = "headSha_example"; // string | 提交sha

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdCheckRunsList($enterpriseId, $projectId, $pullRequestId, $checkRunId, $headSha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckRunsApi->getEnterpriseIdProjectsProjectIdCheckRunsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **projectId** | **int**|  |
 **pullRequestId** | **int**| pr id | [optional]
 **checkRunId** | **int**| 门禁ID | [optional]
 **headSha** | **string**| 提交sha | [optional]

### Return type

[**\GiteeEnterprise\Model\CheckRun**](../Model/CheckRun.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdCheckRunsAnnotations**
> \GiteeEnterprise\Model\Annotations postEnterpriseIdProjectsProjectIdCheckRunsAnnotations($enterpriseId, $projectId, $checkRunId, $headSha, $page)

门禁详情翻页

门禁详情翻页

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\CheckRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$projectId = 56; // int | 
$checkRunId = 56; // int | 门禁ID
$headSha = "headSha_example"; // string | 提交sha
$page = 56; // int | 页数

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdCheckRunsAnnotations($enterpriseId, $projectId, $checkRunId, $headSha, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckRunsApi->postEnterpriseIdProjectsProjectIdCheckRunsAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **projectId** | **int**|  |
 **checkRunId** | **int**| 门禁ID | [optional]
 **headSha** | **string**| 提交sha | [optional]
 **page** | **int**| 页数 | [optional]

### Return type

[**\GiteeEnterprise\Model\Annotations**](../Model/Annotations.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdCheckRunsFixCheckRun**
> postEnterpriseIdProjectsProjectIdCheckRunsFixCheckRun($checkRunId, $enterpriseId, $projectId, $identifier)

重新执行门禁或fix失败门禁

重新执行门禁或fix失败门禁

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\CheckRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkRunId = 56; // int | 门禁ID
$enterpriseId = 56; // int | 
$projectId = 56; // int | 
$identifier = "identifier_example"; // string | 标识

try {
    $apiInstance->postEnterpriseIdProjectsProjectIdCheckRunsFixCheckRun($checkRunId, $enterpriseId, $projectId, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling CheckRunsApi->postEnterpriseIdProjectsProjectIdCheckRunsFixCheckRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkRunId** | **int**| 门禁ID |
 **enterpriseId** | **int**|  |
 **projectId** | **int**|  |
 **identifier** | **string**| 标识 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdCheckRunsSearch**
> postEnterpriseIdProjectsProjectIdCheckRunsSearch($enterpriseId, $projectId, $q)

设置门禁检查项查询接口

设置门禁检查项查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\CheckRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$projectId = 56; // int | 
$q = "q_example"; // string | 查询门禁名称

try {
    $apiInstance->postEnterpriseIdProjectsProjectIdCheckRunsSearch($enterpriseId, $projectId, $q);
} catch (Exception $e) {
    echo 'Exception when calling CheckRunsApi->postEnterpriseIdProjectsProjectIdCheckRunsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **projectId** | **int**|  |
 **q** | **string**| 查询门禁名称 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

