# GiteeEnterprise\AttachFilesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdAttachFilesAttachFileList**](AttachFilesApi.md#deleteEnterpriseIdAttachFilesAttachFileList) | **DELETE** /{enterprise_id}/attach_files/attach_file_list | 删除批量的attach_file
[**postEnterpriseIdAttachFiles**](AttachFilesApi.md#postEnterpriseIdAttachFiles) | **POST** /{enterprise_id}/attach_files | 查看全部附件


# **deleteEnterpriseIdAttachFilesAttachFileList**
> deleteEnterpriseIdAttachFilesAttachFileList($enterpriseId, $attachFileIds, $accessToken)

删除批量的attach_file

删除批量的attach_file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AttachFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$attachFileIds = "attachFileIds_example"; // string | 删除attach_file_list列表
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdAttachFilesAttachFileList($enterpriseId, $attachFileIds, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling AttachFilesApi->deleteEnterpriseIdAttachFilesAttachFileList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **attachFileIds** | **string**| 删除attach_file_list列表 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdAttachFiles**
> \GiteeEnterprise\Model\AttachFileIssue[] postEnterpriseIdAttachFiles($enterpriseId, $accessToken, $page, $perPage, $programId, $search, $issueIds)

查看全部附件

查看全部附件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AttachFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$programId = 56; // int | 项目id
$search = "search_example"; // string | 检索内容
$issueIds = "issueIds_example"; // string | issue id数组

try {
    $result = $apiInstance->postEnterpriseIdAttachFiles($enterpriseId, $accessToken, $page, $perPage, $programId, $search, $issueIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachFilesApi->postEnterpriseIdAttachFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **programId** | **int**| 项目id | [optional]
 **search** | **string**| 检索内容 | [optional]
 **issueIds** | **string**| issue id数组 | [optional]

### Return type

[**\GiteeEnterprise\Model\AttachFileIssue[]**](../Model/AttachFileIssue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

