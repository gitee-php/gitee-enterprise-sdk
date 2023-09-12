# GiteeEnterprise\DocNodesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdDocNodesBatchDelete**](DocNodesApi.md#deleteEnterpriseIdDocNodesBatchDelete) | **DELETE** /{enterprise_id}/doc_nodes/batch_delete | 批量彻底删除文件节点
[**deleteEnterpriseIdDocNodesDocNodeId**](DocNodesApi.md#deleteEnterpriseIdDocNodesDocNodeId) | **DELETE** /{enterprise_id}/doc_nodes/{doc_node_id} | 彻底删除文件节点
[**deleteEnterpriseIdDocNodesDocNodeIdFileVersions**](DocNodesApi.md#deleteEnterpriseIdDocNodesDocNodeIdFileVersions) | **DELETE** /{enterprise_id}/doc_nodes/{doc_node_id}/file_versions | 删除历史版本
[**getEnterpriseIdDocNodesCheckAttachFileName**](DocNodesApi.md#getEnterpriseIdDocNodesCheckAttachFileName) | **GET** /{enterprise_id}/doc_nodes/check_attach_file_name | 检测附件是否重名
[**getEnterpriseIdDocNodesCollection**](DocNodesApi.md#getEnterpriseIdDocNodesCollection) | **GET** /{enterprise_id}/doc_nodes/collection | 获取授权用户收藏的文件节点（仅顶层）
[**getEnterpriseIdDocNodesDirectories**](DocNodesApi.md#getEnterpriseIdDocNodesDirectories) | **GET** /{enterprise_id}/doc_nodes/directories | 获取文件夹
[**getEnterpriseIdDocNodesDocNodeId**](DocNodesApi.md#getEnterpriseIdDocNodesDocNodeId) | **GET** /{enterprise_id}/doc_nodes/{doc_node_id} | 查看文件节点详情
[**getEnterpriseIdDocNodesDocNodeIdAuth**](DocNodesApi.md#getEnterpriseIdDocNodesDocNodeIdAuth) | **GET** /{enterprise_id}/doc_nodes/{doc_node_id}/auth | 查看文件节点的权限
[**getEnterpriseIdDocNodesDocNodeIdFileVersions**](DocNodesApi.md#getEnterpriseIdDocNodesDocNodeIdFileVersions) | **GET** /{enterprise_id}/doc_nodes/{doc_node_id}/file_versions | 查看历史版本
[**getEnterpriseIdDocNodesDocNodeIdOperateAuths**](DocNodesApi.md#getEnterpriseIdDocNodesDocNodeIdOperateAuths) | **GET** /{enterprise_id}/doc_nodes/{doc_node_id}/operate_auths | 获取文件节点的权限
[**getEnterpriseIdDocNodesLevel**](DocNodesApi.md#getEnterpriseIdDocNodesLevel) | **GET** /{enterprise_id}/doc_nodes/level | 获取文件节点列表（层级）
[**getEnterpriseIdDocNodesPrograms**](DocNodesApi.md#getEnterpriseIdDocNodesPrograms) | **GET** /{enterprise_id}/doc_nodes/programs | 获取与文档有关的项目
[**getEnterpriseIdDocNodesProgramsDirectories**](DocNodesApi.md#getEnterpriseIdDocNodesProgramsDirectories) | **GET** /{enterprise_id}/doc_nodes/programs_directories | 获取项目类型文件夹
[**getEnterpriseIdDocNodesRecent**](DocNodesApi.md#getEnterpriseIdDocNodesRecent) | **GET** /{enterprise_id}/doc_nodes/recent | 获取最近编辑的文件
[**getEnterpriseIdDocNodesRecentDoc**](DocNodesApi.md#getEnterpriseIdDocNodesRecentDoc) | **GET** /{enterprise_id}/doc_nodes/recent_doc | 获取最近编辑的文档
[**getEnterpriseIdDocNodesRecycle**](DocNodesApi.md#getEnterpriseIdDocNodesRecycle) | **GET** /{enterprise_id}/doc_nodes/recycle | 获取回收站的内容列表
[**getEnterpriseIdDocNodesTile**](DocNodesApi.md#getEnterpriseIdDocNodesTile) | **GET** /{enterprise_id}/doc_nodes/tile | 获取文件节点列表（平铺）
[**postEnterpriseIdDocNodesAttachFile**](DocNodesApi.md#postEnterpriseIdDocNodesAttachFile) | **POST** /{enterprise_id}/doc_nodes/attach_file | 上传附件
[**postEnterpriseIdDocNodesBatchRecycle**](DocNodesApi.md#postEnterpriseIdDocNodesBatchRecycle) | **POST** /{enterprise_id}/doc_nodes/batch_recycle | 批量移除到回收站
[**postEnterpriseIdDocNodesCoverAttachFile**](DocNodesApi.md#postEnterpriseIdDocNodesCoverAttachFile) | **POST** /{enterprise_id}/doc_nodes/cover_attach_file | 上传附件（覆盖）
[**postEnterpriseIdDocNodesCreate**](DocNodesApi.md#postEnterpriseIdDocNodesCreate) | **POST** /{enterprise_id}/doc_nodes/create | 新建文档
[**postEnterpriseIdDocNodesCreateWiki**](DocNodesApi.md#postEnterpriseIdDocNodesCreateWiki) | **POST** /{enterprise_id}/doc_nodes/create_wiki | 新建 Wiki
[**postEnterpriseIdDocNodesDirectory**](DocNodesApi.md#postEnterpriseIdDocNodesDirectory) | **POST** /{enterprise_id}/doc_nodes/directory | 创建文件夹
[**postEnterpriseIdDocNodesDocNodeIdBackup**](DocNodesApi.md#postEnterpriseIdDocNodesDocNodeIdBackup) | **POST** /{enterprise_id}/doc_nodes/{doc_node_id}/backup | 备份文档
[**postEnterpriseIdDocNodesDocNodeIdRecycle**](DocNodesApi.md#postEnterpriseIdDocNodesDocNodeIdRecycle) | **POST** /{enterprise_id}/doc_nodes/{doc_node_id}/recycle | 移动到回收站
[**putEnterpriseIdDocNodesBatchAuth**](DocNodesApi.md#putEnterpriseIdDocNodesBatchAuth) | **PUT** /{enterprise_id}/doc_nodes/batch_auth | 批量更新文件节点的权限
[**putEnterpriseIdDocNodesBatchCollection**](DocNodesApi.md#putEnterpriseIdDocNodesBatchCollection) | **PUT** /{enterprise_id}/doc_nodes/batch_collection | 批量收藏/取消收藏文件节点
[**putEnterpriseIdDocNodesBatchMove**](DocNodesApi.md#putEnterpriseIdDocNodesBatchMove) | **PUT** /{enterprise_id}/doc_nodes/batch_move | 批量移动文件节点
[**putEnterpriseIdDocNodesDocNodeId**](DocNodesApi.md#putEnterpriseIdDocNodesDocNodeId) | **PUT** /{enterprise_id}/doc_nodes/{doc_node_id} | 更新文件节点
[**putEnterpriseIdDocNodesDocNodeIdAuth**](DocNodesApi.md#putEnterpriseIdDocNodesDocNodeIdAuth) | **PUT** /{enterprise_id}/doc_nodes/{doc_node_id}/auth | 更新文件节点的权限
[**putEnterpriseIdDocNodesDocNodeIdCollection**](DocNodesApi.md#putEnterpriseIdDocNodesDocNodeIdCollection) | **PUT** /{enterprise_id}/doc_nodes/{doc_node_id}/collection | 收藏/取消收藏文件节点
[**putEnterpriseIdDocNodesDocNodeIdIsTop**](DocNodesApi.md#putEnterpriseIdDocNodesDocNodeIdIsTop) | **PUT** /{enterprise_id}/doc_nodes/{doc_node_id}/is_top | 置顶节点
[**putEnterpriseIdDocNodesDocNodeIdMove**](DocNodesApi.md#putEnterpriseIdDocNodesDocNodeIdMove) | **PUT** /{enterprise_id}/doc_nodes/{doc_node_id}/move | 移动文件节点


# **deleteEnterpriseIdDocNodesBatchDelete**
> deleteEnterpriseIdDocNodesBatchDelete($enterpriseId, $docNodeIds, $accessToken)

批量彻底删除文件节点

批量彻底删除文件节点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeIds = "docNodeIds_example"; // string | 文件 id，使用,，隔开
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdDocNodesBatchDelete($enterpriseId, $docNodeIds, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->deleteEnterpriseIdDocNodesBatchDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeIds** | **string**| 文件 id，使用,，隔开 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdDocNodesDocNodeId**
> deleteEnterpriseIdDocNodesDocNodeId($enterpriseId, $docNodeId, $accessToken)

彻底删除文件节点

彻底删除文件节点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdDocNodesDocNodeId($enterpriseId, $docNodeId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->deleteEnterpriseIdDocNodesDocNodeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdDocNodesDocNodeIdFileVersions**
> deleteEnterpriseIdDocNodesDocNodeIdFileVersions($enterpriseId, $docNodeId, $attachFileIds, $accessToken)

删除历史版本

删除历史版本

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | 节点 id
$attachFileIds = "attachFileIds_example"; // string | 要删除的文件id（多个用逗号分隔）
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdDocNodesDocNodeIdFileVersions($enterpriseId, $docNodeId, $attachFileIds, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->deleteEnterpriseIdDocNodesDocNodeIdFileVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**| 节点 id |
 **attachFileIds** | **string**| 要删除的文件id（多个用逗号分隔） |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesCheckAttachFileName**
> getEnterpriseIdDocNodesCheckAttachFileName($enterpriseId, $name, $parentId, $accessToken)

检测附件是否重名

检测附件是否重名

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$name = "name_example"; // string | 附件名称
$parentId = 56; // int | 层级 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdDocNodesCheckAttachFileName($enterpriseId, $name, $parentId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesCheckAttachFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **name** | **string**| 附件名称 |
 **parentId** | **int**| 层级 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesCollection**
> \GiteeEnterprise\Model\DocNode[] getEnterpriseIdDocNodesCollection($enterpriseId, $accessToken, $programId, $sort, $fileType, $direction, $scrumSprintId, $wikiInfoOnly)

获取授权用户收藏的文件节点（仅顶层）

获取授权用户收藏的文件节点（仅顶层）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 56; // int | 项目 id（默认：0）
$sort = "sort_example"; // string | 排序字段(name size updated_at created_at creator_id public)
$fileType = "fileType_example"; // string | 文件类型（WikiInfo,Wiki,DocDirectory,AttachFile），支持多选，用逗号分割
$direction = "desc"; // string | 可选。升序/降序
$scrumSprintId = 56; // int | 迭代 ID
$wikiInfoOnly = true; // bool | 是否仅展示文档

try {
    $result = $apiInstance->getEnterpriseIdDocNodesCollection($enterpriseId, $accessToken, $programId, $sort, $fileType, $direction, $scrumSprintId, $wikiInfoOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 项目 id（默认：0） | [optional]
 **sort** | **string**| 排序字段(name size updated_at created_at creator_id public) | [optional]
 **fileType** | **string**| 文件类型（WikiInfo,Wiki,DocDirectory,AttachFile），支持多选，用逗号分割 | [optional]
 **direction** | **string**| 可选。升序/降序 | [optional] [default to desc]
 **scrumSprintId** | **int**| 迭代 ID | [optional]
 **wikiInfoOnly** | **bool**| 是否仅展示文档 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode[]**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesDirectories**
> \GiteeEnterprise\Model\DocDirectory[] getEnterpriseIdDocNodesDirectories($enterpriseId, $accessToken, $programId, $scrumSprintId, $sprintDocId)

获取文件夹

获取文件夹

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 0; // int | 项目 id
$scrumSprintId = 56; // int | 迭代 ID
$sprintDocId = 56; // int | 迭代默认生成的文件夹 ID

try {
    $result = $apiInstance->getEnterpriseIdDocNodesDirectories($enterpriseId, $accessToken, $programId, $scrumSprintId, $sprintDocId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesDirectories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 项目 id | [optional] [default to 0]
 **scrumSprintId** | **int**| 迭代 ID | [optional]
 **sprintDocId** | **int**| 迭代默认生成的文件夹 ID | [optional]

### Return type

[**\GiteeEnterprise\Model\DocDirectory[]**](../Model/DocDirectory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesDocNodeId**
> \GiteeEnterprise\Model\DocNodeDetail getEnterpriseIdDocNodesDocNodeId($enterpriseId, $docNodeId, $accessToken)

查看文件节点详情

查看文件节点详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdDocNodesDocNodeId($enterpriseId, $docNodeId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesDocNodeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNodeDetail**](../Model/DocNodeDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesDocNodeIdAuth**
> \GiteeEnterprise\Model\DocNode getEnterpriseIdDocNodesDocNodeIdAuth($enterpriseId, $docNodeId, $accessToken)

查看文件节点的权限

查看文件节点的权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | doc_node 节点 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdDocNodesDocNodeIdAuth($enterpriseId, $docNodeId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesDocNodeIdAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**| doc_node 节点 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesDocNodeIdFileVersions**
> \GiteeEnterprise\Model\FileVersion[] getEnterpriseIdDocNodesDocNodeIdFileVersions($enterpriseId, $docNodeId, $accessToken, $page, $perPage)

查看历史版本

查看历史版本

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | 节点 id
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdDocNodesDocNodeIdFileVersions($enterpriseId, $docNodeId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesDocNodeIdFileVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**| 节点 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\FileVersion[]**](../Model/FileVersion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesDocNodeIdOperateAuths**
> getEnterpriseIdDocNodesDocNodeIdOperateAuths($enterpriseId, $docNodeId, $accessToken)

获取文件节点的权限

获取文件节点的权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdDocNodesDocNodeIdOperateAuths($enterpriseId, $docNodeId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesDocNodeIdOperateAuths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesLevel**
> \GiteeEnterprise\Model\DocNodeLevel[] getEnterpriseIdDocNodesLevel($enterpriseId, $parentId, $accessToken, $programId, $scope, $fileType)

获取文件节点列表（层级）

获取文件节点列表（层级）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$parentId = 0; // int | 父级 id（默认：0）
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 0; // int | 项目 id
$scope = "scope_example"; // string | 可筛选类型：directory, recycle
$fileType = "fileType_example"; // string | 文件类型（WikiInfo,Wiki,DocDirectory,AttachFile），支持多选，用逗号分割

try {
    $result = $apiInstance->getEnterpriseIdDocNodesLevel($enterpriseId, $parentId, $accessToken, $programId, $scope, $fileType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **parentId** | **int**| 父级 id（默认：0） | [default to 0]
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 项目 id | [optional] [default to 0]
 **scope** | **string**| 可筛选类型：directory, recycle | [optional]
 **fileType** | **string**| 文件类型（WikiInfo,Wiki,DocDirectory,AttachFile），支持多选，用逗号分割 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNodeLevel[]**](../Model/DocNodeLevel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesPrograms**
> \GiteeEnterprise\Model\DocNode[] getEnterpriseIdDocNodesPrograms($enterpriseId, $accessToken)

获取与文档有关的项目

获取与文档有关的项目

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdDocNodesPrograms($enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode[]**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesProgramsDirectories**
> \GiteeEnterprise\Model\ProgramDirectory[] getEnterpriseIdDocNodesProgramsDirectories($enterpriseId, $accessToken)

获取项目类型文件夹

获取项目类型文件夹

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdDocNodesProgramsDirectories($enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesProgramsDirectories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramDirectory[]**](../Model/ProgramDirectory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesRecent**
> \GiteeEnterprise\Model\DocRecent[] getEnterpriseIdDocNodesRecent($enterpriseId, $accessToken, $sort, $direction, $scrumSprintId, $fileType, $page, $perPage)

获取最近编辑的文件

获取最近编辑的文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(name size updated_at created_at creator_id public)
$direction = "desc"; // string | 可选。升序/降序
$scrumSprintId = 56; // int | 迭代 ID
$fileType = "fileType_example"; // string | 文件类型（WikiInfo,Wiki,AttachFile），支持多选，用逗号分割
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdDocNodesRecent($enterpriseId, $accessToken, $sort, $direction, $scrumSprintId, $fileType, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(name size updated_at created_at creator_id public) | [optional]
 **direction** | **string**| 可选。升序/降序 | [optional] [default to desc]
 **scrumSprintId** | **int**| 迭代 ID | [optional]
 **fileType** | **string**| 文件类型（WikiInfo,Wiki,AttachFile），支持多选，用逗号分割 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocRecent[]**](../Model/DocRecent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesRecentDoc**
> \GiteeEnterprise\Model\ScrumDocNode[] getEnterpriseIdDocNodesRecentDoc($enterpriseId, $accessToken, $programId, $page, $perPage)

获取最近编辑的文档

获取最近编辑的文档

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 56; // int | 项目 ID
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdDocNodesRecentDoc($enterpriseId, $accessToken, $programId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesRecentDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 项目 ID | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ScrumDocNode[]**](../Model/ScrumDocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesRecycle**
> getEnterpriseIdDocNodesRecycle($enterpriseId, $accessToken, $parentId, $scrumSprintId)

获取回收站的内容列表

获取回收站的内容列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$parentId = 56; // int | 父级 id （默认：0）
$scrumSprintId = 56; // int | 迭代 ID

try {
    $apiInstance->getEnterpriseIdDocNodesRecycle($enterpriseId, $accessToken, $parentId, $scrumSprintId);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesRecycle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **parentId** | **int**| 父级 id （默认：0） | [optional]
 **scrumSprintId** | **int**| 迭代 ID | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocNodesTile**
> \GiteeEnterprise\Model\DocNode[] getEnterpriseIdDocNodesTile($enterpriseId, $accessToken, $parentId, $creatorId, $programId, $scope, $fileType, $sort, $direction, $scrumSprintId, $page, $perPage)

获取文件节点列表（平铺）

获取文件节点列表（平铺）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$parentId = 0; // int | 父级 id（默认：0）
$creatorId = 56; // int | 创建者 id
$programId = 56; // int | 项目 id(默认：0)
$scope = "scope_example"; // string | 筛选项，Wiki、AttachFile（附件）、create_by_me
$fileType = "fileType_example"; // string | 文件类型（WikiInfo,Wiki,AttachFile），支持多选，用逗号分割
$sort = "sort_example"; // string | 排序字段(name size updated_at created_at creator_id public)
$direction = "desc"; // string | 可选。升序/降序
$scrumSprintId = 56; // int | 迭代 ID
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdDocNodesTile($enterpriseId, $accessToken, $parentId, $creatorId, $programId, $scope, $fileType, $sort, $direction, $scrumSprintId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->getEnterpriseIdDocNodesTile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **parentId** | **int**| 父级 id（默认：0） | [optional] [default to 0]
 **creatorId** | **int**| 创建者 id | [optional]
 **programId** | **int**| 项目 id(默认：0) | [optional]
 **scope** | **string**| 筛选项，Wiki、AttachFile（附件）、create_by_me | [optional]
 **fileType** | **string**| 文件类型（WikiInfo,Wiki,AttachFile），支持多选，用逗号分割 | [optional]
 **sort** | **string**| 排序字段(name size updated_at created_at creator_id public) | [optional]
 **direction** | **string**| 可选。升序/降序 | [optional] [default to desc]
 **scrumSprintId** | **int**| 迭代 ID | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode[]**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocNodesAttachFile**
> \GiteeEnterprise\Model\DocNode[] postEnterpriseIdDocNodesAttachFile($enterpriseId, $file, $accessToken, $programId, $parentId)

上传附件

上传附件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$file = "/path/to/file.txt"; // \SplFileObject | 上传的文件
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 56; // int | 项目 id
$parentId = 56; // int | 父级目录

try {
    $result = $apiInstance->postEnterpriseIdDocNodesAttachFile($enterpriseId, $file, $accessToken, $programId, $parentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->postEnterpriseIdDocNodesAttachFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **file** | **\SplFileObject**| 上传的文件 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 项目 id | [optional]
 **parentId** | **int**| 父级目录 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode[]**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocNodesBatchRecycle**
> postEnterpriseIdDocNodesBatchRecycle($enterpriseId, $docNodeIds, $accessToken)

批量移除到回收站

批量移除到回收站

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeIds = "docNodeIds_example"; // string | 文件 id，使用,，隔开
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postEnterpriseIdDocNodesBatchRecycle($enterpriseId, $docNodeIds, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->postEnterpriseIdDocNodesBatchRecycle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeIds** | **string**| 文件 id，使用,，隔开 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocNodesCoverAttachFile**
> postEnterpriseIdDocNodesCoverAttachFile($enterpriseId, $file, $parentId, $fileId, $accessToken)

上传附件（覆盖）

上传附件（覆盖）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$file = "/path/to/file.txt"; // \SplFileObject | 上传的文件
$parentId = 56; // int | 上传的层级
$fileId = 56; // int | 覆盖的文件节点
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postEnterpriseIdDocNodesCoverAttachFile($enterpriseId, $file, $parentId, $fileId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->postEnterpriseIdDocNodesCoverAttachFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **file** | **\SplFileObject**| 上传的文件 |
 **parentId** | **int**| 上传的层级 |
 **fileId** | **int**| 覆盖的文件节点 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocNodesCreate**
> \GiteeEnterprise\Model\DocNode[] postEnterpriseIdDocNodesCreate($enterpriseId, $name, $accessToken, $parentId, $programId, $authType, $scrumSprintId)

新建文档

新建文档

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$name = "name_example"; // string | 文档名称
$accessToken = "accessToken_example"; // string | 用户授权码
$parentId = 56; // int | 所属文件夹的 doc_node 的 id，默认为 0
$programId = 56; // int | 项目 id
$authType = "inherit"; // string | 权限; 继承: inherit; 私有: private; 只读 read_only; 读写: read_write
$scrumSprintId = 56; // int | 迭代 id

try {
    $result = $apiInstance->postEnterpriseIdDocNodesCreate($enterpriseId, $name, $accessToken, $parentId, $programId, $authType, $scrumSprintId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->postEnterpriseIdDocNodesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **name** | **string**| 文档名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **parentId** | **int**| 所属文件夹的 doc_node 的 id，默认为 0 | [optional]
 **programId** | **int**| 项目 id | [optional]
 **authType** | **string**| 权限; 继承: inherit; 私有: private; 只读 read_only; 读写: read_write | [optional] [default to inherit]
 **scrumSprintId** | **int**| 迭代 id | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode[]**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocNodesCreateWiki**
> \GiteeEnterprise\Model\DocNode[] postEnterpriseIdDocNodesCreateWiki($enterpriseId, $projectId, $accessToken)

新建 Wiki

新建 Wiki

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$projectId = "projectId_example"; // string | 仓库 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdDocNodesCreateWiki($enterpriseId, $projectId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->postEnterpriseIdDocNodesCreateWiki: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **projectId** | **string**| 仓库 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode[]**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocNodesDirectory**
> postEnterpriseIdDocNodesDirectory($enterpriseId, $name, $accessToken, $parentId, $programId, $authType, $scrumSprintId)

创建文件夹

创建文件夹

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$name = "name_example"; // string | 文件夹名称
$accessToken = "accessToken_example"; // string | 用户授权码
$parentId = 56; // int | 父级 id （默认：0）
$programId = 56; // int | 归属的项目 id
$authType = "inherit"; // string | 权限; 继承: inherit; 私有: private; 只读 read_only; 读写: read_write
$scrumSprintId = "scrumSprintId_example"; // string | 迭代 ID

try {
    $apiInstance->postEnterpriseIdDocNodesDirectory($enterpriseId, $name, $accessToken, $parentId, $programId, $authType, $scrumSprintId);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->postEnterpriseIdDocNodesDirectory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **name** | **string**| 文件夹名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **parentId** | **int**| 父级 id （默认：0） | [optional]
 **programId** | **int**| 归属的项目 id | [optional]
 **authType** | **string**| 权限; 继承: inherit; 私有: private; 只读 read_only; 读写: read_write | [optional] [default to inherit]
 **scrumSprintId** | **string**| 迭代 ID | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocNodesDocNodeIdBackup**
> \GiteeEnterprise\Model\DocNode postEnterpriseIdDocNodesDocNodeIdBackup($enterpriseId, $name, $docNodeId, $accessToken, $parentId, $programId, $authType)

备份文档

备份文档

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$name = "name_example"; // string | 文档名称
$docNodeId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$parentId = 56; // int | 所属文件夹的 doc_node 的 id，默认为 0
$programId = 56; // int | 项目 id
$authType = "inherit"; // string | 权限; 继承: inherit; 私有: private; 只读 read_only; 读写: read_write

try {
    $result = $apiInstance->postEnterpriseIdDocNodesDocNodeIdBackup($enterpriseId, $name, $docNodeId, $accessToken, $parentId, $programId, $authType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->postEnterpriseIdDocNodesDocNodeIdBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **name** | **string**| 文档名称 |
 **docNodeId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **parentId** | **int**| 所属文件夹的 doc_node 的 id，默认为 0 | [optional]
 **programId** | **int**| 项目 id | [optional]
 **authType** | **string**| 权限; 继承: inherit; 私有: private; 只读 read_only; 读写: read_write | [optional] [default to inherit]

### Return type

[**\GiteeEnterprise\Model\DocNode**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocNodesDocNodeIdRecycle**
> postEnterpriseIdDocNodesDocNodeIdRecycle($enterpriseId, $docNodeId, $accessToken)

移动到回收站

移动到回收站

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postEnterpriseIdDocNodesDocNodeIdRecycle($enterpriseId, $docNodeId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->postEnterpriseIdDocNodesDocNodeIdRecycle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocNodesBatchAuth**
> putEnterpriseIdDocNodesBatchAuth($enterpriseId, $docNodeIds, $accessToken, $guessAccess, $enterpriseAccess, $accessTargetType, $accessTargetId, $accessAccessLevel)

批量更新文件节点的权限

批量更新文件节点的权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeIds = "docNodeIds_example"; // string | doc_node 节点 id，使用,，隔开
$accessToken = "accessToken_example"; // string | 用户授权码
$guessAccess = 56; // int | 访客的访问权限; (无权限: 0; 只读: 1;)
$enterpriseAccess = 56; // int | 企业成员的访问权限(无权限: 0; 只读: 1; 读写: 2)
$accessTargetType = array("accessTargetType_example"); // string[] | 关联类型(target_type: program|group|user)
$accessTargetId = array(56); // int[] | 关联类型的 id(如 target_type = program，则此处应为对应 program 的 id)
$accessAccessLevel = array(56); // int[] | 访问属性（无权限: 0; 只读: 1; 读写: 2）

try {
    $apiInstance->putEnterpriseIdDocNodesBatchAuth($enterpriseId, $docNodeIds, $accessToken, $guessAccess, $enterpriseAccess, $accessTargetType, $accessTargetId, $accessAccessLevel);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->putEnterpriseIdDocNodesBatchAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeIds** | **string**| doc_node 节点 id，使用,，隔开 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **guessAccess** | **int**| 访客的访问权限; (无权限: 0; 只读: 1;) | [optional]
 **enterpriseAccess** | **int**| 企业成员的访问权限(无权限: 0; 只读: 1; 读写: 2) | [optional]
 **accessTargetType** | [**string[]**](../Model/string.md)| 关联类型(target_type: program|group|user) | [optional]
 **accessTargetId** | [**int[]**](../Model/int.md)| 关联类型的 id(如 target_type &#x3D; program，则此处应为对应 program 的 id) | [optional]
 **accessAccessLevel** | [**int[]**](../Model/int.md)| 访问属性（无权限: 0; 只读: 1; 读写: 2） | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocNodesBatchCollection**
> putEnterpriseIdDocNodesBatchCollection($enterpriseId, $docNodeIds, $operateType, $accessToken)

批量收藏/取消收藏文件节点

批量收藏/取消收藏文件节点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeIds = "docNodeIds_example"; // string | 文件 id，使用,，隔开
$operateType = "operateType_example"; // string | 收藏: set; 取消收藏: unset
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putEnterpriseIdDocNodesBatchCollection($enterpriseId, $docNodeIds, $operateType, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->putEnterpriseIdDocNodesBatchCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeIds** | **string**| 文件 id，使用,，隔开 |
 **operateType** | **string**| 收藏: set; 取消收藏: unset |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocNodesBatchMove**
> putEnterpriseIdDocNodesBatchMove($enterpriseId, $docNodeIds, $parentId, $accessToken, $programId)

批量移动文件节点

批量移动文件节点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeIds = "docNodeIds_example"; // string | 文件 id，使用,，隔开
$parentId = 56; // int | 挂载到文件下（此处填入上级的 doc_node 节点的 id; 若移动到根目录，parent_id: 0）
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 56; // int | 挂载到某项目下（此处填入项目 id）

try {
    $apiInstance->putEnterpriseIdDocNodesBatchMove($enterpriseId, $docNodeIds, $parentId, $accessToken, $programId);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->putEnterpriseIdDocNodesBatchMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeIds** | **string**| 文件 id，使用,，隔开 |
 **parentId** | **int**| 挂载到文件下（此处填入上级的 doc_node 节点的 id; 若移动到根目录，parent_id: 0） |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 挂载到某项目下（此处填入项目 id） | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocNodesDocNodeId**
> \GiteeEnterprise\Model\DocNode putEnterpriseIdDocNodesDocNodeId($enterpriseId, $docNodeId, $accessToken, $name, $password)

更新文件节点

更新文件节点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | doc_node 节点 id
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 文件夹名称
$password = "password_example"; // string | 设置访问密码（此字段填入空串可取消密码）

try {
    $result = $apiInstance->putEnterpriseIdDocNodesDocNodeId($enterpriseId, $docNodeId, $accessToken, $name, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->putEnterpriseIdDocNodesDocNodeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**| doc_node 节点 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 文件夹名称 | [optional]
 **password** | **string**| 设置访问密码（此字段填入空串可取消密码） | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocNodesDocNodeIdAuth**
> \GiteeEnterprise\Model\DocNode putEnterpriseIdDocNodesDocNodeIdAuth($enterpriseId, $docNodeId, $accessToken, $guessAccess, $enterpriseAccess, $accessTargetType, $accessTargetId, $accessAccessLevel)

更新文件节点的权限

更新文件节点的权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | doc_node 节点 id
$accessToken = "accessToken_example"; // string | 用户授权码
$guessAccess = 56; // int | 访客的访问权限; (无权限: 0; 只读: 1;)
$enterpriseAccess = 56; // int | 企业成员的访问权限(无权限: 0; 只读: 1; 读写: 2)
$accessTargetType = array("accessTargetType_example"); // string[] | 关联类型(target_type: program|group|user)
$accessTargetId = array(56); // int[] | 关联类型的 id(如 target_type = program，则此处应为对应 program 的 id)
$accessAccessLevel = array(56); // int[] | 访问属性（无权限: 0; 只读: 1; 读写: 2）

try {
    $result = $apiInstance->putEnterpriseIdDocNodesDocNodeIdAuth($enterpriseId, $docNodeId, $accessToken, $guessAccess, $enterpriseAccess, $accessTargetType, $accessTargetId, $accessAccessLevel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->putEnterpriseIdDocNodesDocNodeIdAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**| doc_node 节点 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **guessAccess** | **int**| 访客的访问权限; (无权限: 0; 只读: 1;) | [optional]
 **enterpriseAccess** | **int**| 企业成员的访问权限(无权限: 0; 只读: 1; 读写: 2) | [optional]
 **accessTargetType** | [**string[]**](../Model/string.md)| 关联类型(target_type: program|group|user) | [optional]
 **accessTargetId** | [**int[]**](../Model/int.md)| 关联类型的 id(如 target_type &#x3D; program，则此处应为对应 program 的 id) | [optional]
 **accessAccessLevel** | [**int[]**](../Model/int.md)| 访问属性（无权限: 0; 只读: 1; 读写: 2） | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocNodesDocNodeIdCollection**
> putEnterpriseIdDocNodesDocNodeIdCollection($enterpriseId, $docNodeId, $operateType, $accessToken)

收藏/取消收藏文件节点

收藏/取消收藏文件节点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | doc_node 节点 id
$operateType = "operateType_example"; // string | 收藏: set; 取消收藏: unset
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putEnterpriseIdDocNodesDocNodeIdCollection($enterpriseId, $docNodeId, $operateType, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->putEnterpriseIdDocNodesDocNodeIdCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**| doc_node 节点 id |
 **operateType** | **string**| 收藏: set; 取消收藏: unset |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocNodesDocNodeIdIsTop**
> \GiteeEnterprise\Model\DocNode putEnterpriseIdDocNodesDocNodeIdIsTop($enterpriseId, $docNodeId, $value, $accessToken)

置顶节点

置顶节点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | doc_node 节点 id
$value = 56; // int | 是否置顶（置顶: 1，取消置顶: 0）
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putEnterpriseIdDocNodesDocNodeIdIsTop($enterpriseId, $docNodeId, $value, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->putEnterpriseIdDocNodesDocNodeIdIsTop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**| doc_node 节点 id |
 **value** | **int**| 是否置顶（置顶: 1，取消置顶: 0） |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocNodesDocNodeIdMove**
> \GiteeEnterprise\Model\DocNode putEnterpriseIdDocNodesDocNodeIdMove($enterpriseId, $docNodeId, $parentId, $accessToken, $programId)

移动文件节点

移动文件节点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docNodeId = 56; // int | doc_node 节点 id
$parentId = 56; // int | 挂载到文件下（此处填入上级的 doc_node 节点的 id; 若移动到根目录，parent_id: 0）
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 56; // int | 挂载到某项目下（此处填入项目 id）

try {
    $result = $apiInstance->putEnterpriseIdDocNodesDocNodeIdMove($enterpriseId, $docNodeId, $parentId, $accessToken, $programId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocNodesApi->putEnterpriseIdDocNodesDocNodeIdMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docNodeId** | **int**| doc_node 节点 id |
 **parentId** | **int**| 挂载到文件下（此处填入上级的 doc_node 节点的 id; 若移动到根目录，parent_id: 0） |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 挂载到某项目下（此处填入项目 id） | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNode**](../Model/DocNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

