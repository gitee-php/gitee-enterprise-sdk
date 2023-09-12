# GiteeEnterprise\CustomizeIssueApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdCustomizeList**](CustomizeIssueApi.md#getEnterpriseIdCustomizeList) | **GET** /{enterprise_id}/customize/list | 获取管理界面的字段列表


# **getEnterpriseIdCustomizeList**
> \GiteeEnterprise\Model\IssueField getEnterpriseIdCustomizeList($enterpriseId, $accessToken, $page, $perPage, $sort, $issueTypeId, $issueTypeCategory, $programId, $type, $search)

获取管理界面的字段列表

获取管理界面的字段列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\CustomizeIssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$sort = 56; // int | 是否排序（被选的字段排后面）
$issueTypeId = 56; // int | 任务类型 id
$issueTypeCategory = "issueTypeCategory_example"; // string | 任务类型属性
$programId = 56; // int | 项目 ID
$type = "type_example"; // string | 获取字段列表来源（导出/企业管理）
$search = "search_example"; // string | 搜索关键字

try {
    $result = $apiInstance->getEnterpriseIdCustomizeList($enterpriseId, $accessToken, $page, $perPage, $sort, $issueTypeId, $issueTypeCategory, $programId, $type, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomizeIssueApi->getEnterpriseIdCustomizeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **sort** | **int**| 是否排序（被选的字段排后面） | [optional]
 **issueTypeId** | **int**| 任务类型 id | [optional]
 **issueTypeCategory** | **string**| 任务类型属性 | [optional]
 **programId** | **int**| 项目 ID | [optional]
 **type** | **string**| 获取字段列表来源（导出/企业管理） | [optional]
 **search** | **string**| 搜索关键字 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueField**](../Model/IssueField.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

