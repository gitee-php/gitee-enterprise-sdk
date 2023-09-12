# GiteeEnterprise\WorkflowApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdWorkflowList**](WorkflowApi.md#getEnterpriseIdWorkflowList) | **GET** /{enterprise_id}/workflow/list | 获取任务类型的工作流列表


# **getEnterpriseIdWorkflowList**
> \GiteeEnterprise\Model\TreeNote getEnterpriseIdWorkflowList($enterpriseId, $accessToken, $issueTypeIds, $page, $perPage)

获取任务类型的工作流列表

获取任务类型的工作流列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$issueTypeIds = "issueTypeIds_example"; // string | 任务状态的 id，如存在多个使用英文逗号(,)分割
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdWorkflowList($enterpriseId, $accessToken, $issueTypeIds, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->getEnterpriseIdWorkflowList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **issueTypeIds** | **string**| 任务状态的 id，如存在多个使用英文逗号(,)分割 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\TreeNote**](../Model/TreeNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

