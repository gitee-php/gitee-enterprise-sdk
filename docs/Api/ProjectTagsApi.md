# GiteeEnterprise\ProjectTagsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdProjectsProjectIdTagsDestroy**](ProjectTagsApi.md#deleteEnterpriseIdProjectsProjectIdTagsDestroy) | **DELETE** /{enterprise_id}/projects/{project_id}/tags/destroy | 删除标签
[**getEnterpriseIdProjectsProjectIdTags**](ProjectTagsApi.md#getEnterpriseIdProjectsProjectIdTags) | **GET** /{enterprise_id}/projects/{project_id}/tags | 获取仓库的标签列表
[**postEnterpriseIdProjectsProjectIdTags**](ProjectTagsApi.md#postEnterpriseIdProjectsProjectIdTags) | **POST** /{enterprise_id}/projects/{project_id}/tags | 新建标签


# **deleteEnterpriseIdProjectsProjectIdTagsDestroy**
> deleteEnterpriseIdProjectsProjectIdTagsDestroy($enterpriseId, $projectId, $name, $accessToken, $qt)

删除标签

删除标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$name = "name_example"; // string | 标签名称
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->deleteEnterpriseIdProjectsProjectIdTagsDestroy($enterpriseId, $projectId, $name, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTagsApi->deleteEnterpriseIdProjectsProjectIdTagsDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **name** | **string**| 标签名称 |
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

# **getEnterpriseIdProjectsProjectIdTags**
> \GiteeEnterprise\Model\Tag getEnterpriseIdProjectsProjectIdTags($enterpriseId, $projectId, $accessToken, $qt, $search, $exact, $page, $perPage)

获取仓库的标签列表

获取仓库的标签列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$search = "search_example"; // string | 搜索关键字
$exact = true; // bool | 是否精确查找 true:是 false:否
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdTags($enterpriseId, $projectId, $accessToken, $qt, $search, $exact, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTagsApi->getEnterpriseIdProjectsProjectIdTags: ', $e->getMessage(), PHP_EOL;
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
 **search** | **string**| 搜索关键字 | [optional]
 **exact** | **bool**| 是否精确查找 true:是 false:否 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdTags**
> \GiteeEnterprise\Model\Tag postEnterpriseIdProjectsProjectIdTags($enterpriseId, $projectId, $name, $refs, $accessToken, $qt, $description)

新建标签

新建标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$name = "name_example"; // string | tag 名称
$refs = "refs_example"; // string | 起点
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$description = "description_example"; // string | 描述

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdTags($enterpriseId, $projectId, $name, $refs, $accessToken, $qt, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTagsApi->postEnterpriseIdProjectsProjectIdTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **name** | **string**| tag 名称 |
 **refs** | **string**| 起点 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **description** | **string**| 描述 | [optional]

### Return type

[**\GiteeEnterprise\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

