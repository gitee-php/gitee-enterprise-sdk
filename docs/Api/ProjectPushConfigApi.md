# GiteeEnterprise\ProjectPushConfigApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdProjectsProjectIdPushConfig**](ProjectPushConfigApi.md#getEnterpriseIdProjectsProjectIdPushConfig) | **GET** /{enterprise_id}/projects/{project_id}/push_config | 查看推送规则详情
[**postEnterpriseIdProjectsProjectIdPushConfigValidate**](ProjectPushConfigApi.md#postEnterpriseIdProjectsProjectIdPushConfigValidate) | **POST** /{enterprise_id}/projects/{project_id}/push_config/validate | 验证commit信息样式，并返回一个合理的样式


# **getEnterpriseIdProjectsProjectIdPushConfig**
> \GiteeEnterprise\Model\ProjectPushConfig getEnterpriseIdProjectsProjectIdPushConfig($enterpriseId, $projectId, $accessToken, $qt)

查看推送规则详情

查看推送规则详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectPushConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPushConfig($enterpriseId, $projectId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPushConfigApi->getEnterpriseIdProjectsProjectIdPushConfig: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\GiteeEnterprise\Model\ProjectPushConfig**](../Model/ProjectPushConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdPushConfigValidate**
> postEnterpriseIdProjectsProjectIdPushConfigValidate($enterpriseId, $projectId, $commitMessage, $accessToken, $qt)

验证commit信息样式，并返回一个合理的样式

验证commit信息样式，并返回一个合理的样式

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectPushConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitMessage = array("commitMessage_example"); // string[] | 待验证的commit 消息
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->postEnterpriseIdProjectsProjectIdPushConfigValidate($enterpriseId, $projectId, $commitMessage, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPushConfigApi->postEnterpriseIdProjectsProjectIdPushConfigValidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitMessage** | [**string[]**](../Model/string.md)| 待验证的commit 消息 |
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

