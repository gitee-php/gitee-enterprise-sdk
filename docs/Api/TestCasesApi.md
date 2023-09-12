# GiteeEnterprise\TestCasesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdTestCasesTestCaseId**](TestCasesApi.md#deleteEnterpriseIdTestCasesTestCaseId) | **DELETE** /{enterprise_id}/test_cases/{test_case_id} | 删除测试用例


# **deleteEnterpriseIdTestCasesTestCaseId**
> deleteEnterpriseIdTestCasesTestCaseId($enterpriseId, $programId, $testCaseId, $accessToken, $qt)

删除测试用例

删除测试用例

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\TestCasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$programId = 56; // int | 项目 ID
$testCaseId = "testCaseId_example"; // string | 测试用例 ID
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | 查询方式(ident/id)

try {
    $apiInstance->deleteEnterpriseIdTestCasesTestCaseId($enterpriseId, $programId, $testCaseId, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling TestCasesApi->deleteEnterpriseIdTestCasesTestCaseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **programId** | **int**| 项目 ID |
 **testCaseId** | **string**| 测试用例 ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| 查询方式(ident/id) | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

