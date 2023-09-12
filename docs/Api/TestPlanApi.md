# GiteeEnterprise\TestPlanApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdTestPlansTestPlanId**](TestPlanApi.md#deleteEnterpriseIdTestPlansTestPlanId) | **DELETE** /{enterprise_id}/test_plans/{test_plan_id} | 删除测试计划


# **deleteEnterpriseIdTestPlansTestPlanId**
> deleteEnterpriseIdTestPlansTestPlanId($enterpriseId, $programId, $testPlanId, $accessToken)

删除测试计划

删除测试计划

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\TestPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$programId = 56; // int | 项目 ID
$testPlanId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdTestPlansTestPlanId($enterpriseId, $programId, $testPlanId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling TestPlanApi->deleteEnterpriseIdTestPlansTestPlanId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **programId** | **int**| 项目 ID |
 **testPlanId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

