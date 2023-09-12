# GiteeEnterprise\DocsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdDocsDocIdFilesFileId**](DocsApi.md#deleteEnterpriseIdDocsDocIdFilesFileId) | **DELETE** /{enterprise_id}/docs/{doc_id}/files/{file_id} | 删除文件
[**getEnterpriseIdDocsDocIdBackupProgress**](DocsApi.md#getEnterpriseIdDocsDocIdBackupProgress) | **GET** /{enterprise_id}/docs/{doc_id}/backup_progress | 获取文档备份进度
[**getEnterpriseIdDocsDocIdCommit**](DocsApi.md#getEnterpriseIdDocsDocIdCommit) | **GET** /{enterprise_id}/docs/{doc_id}/commit | 获取版本历史详情
[**getEnterpriseIdDocsDocIdFiles**](DocsApi.md#getEnterpriseIdDocsDocIdFiles) | **GET** /{enterprise_id}/docs/{doc_id}/files | 获取文档下的文件列表
[**getEnterpriseIdDocsDocIdFilesFileId**](DocsApi.md#getEnterpriseIdDocsDocIdFilesFileId) | **GET** /{enterprise_id}/docs/{doc_id}/files/{file_id} | 获取文件详情
[**getEnterpriseIdDocsDocIdFilesFileIdVersions**](DocsApi.md#getEnterpriseIdDocsDocIdFilesFileIdVersions) | **GET** /{enterprise_id}/docs/{doc_id}/files/{file_id}/versions | 获取文件的历史版本列表
[**getEnterpriseIdDocsDocIdVersions**](DocsApi.md#getEnterpriseIdDocsDocIdVersions) | **GET** /{enterprise_id}/docs/{doc_id}/versions | 获取文档历史版本
[**postEnterpriseIdDocsDocIdCreateFile**](DocsApi.md#postEnterpriseIdDocsDocIdCreateFile) | **POST** /{enterprise_id}/docs/{doc_id}/create_file | 创建文件
[**postEnterpriseIdDocsDocIdCreateFolder**](DocsApi.md#postEnterpriseIdDocsDocIdCreateFolder) | **POST** /{enterprise_id}/docs/{doc_id}/create_folder | 创建文件夹
[**putEnterpriseIdDocsDocIdFilesFileId**](DocsApi.md#putEnterpriseIdDocsDocIdFilesFileId) | **PUT** /{enterprise_id}/docs/{doc_id}/files/{file_id} | 更新文件
[**putEnterpriseIdDocsDocIdFilesFileIdMove**](DocsApi.md#putEnterpriseIdDocsDocIdFilesFileIdMove) | **PUT** /{enterprise_id}/docs/{doc_id}/files/{file_id}/move | 移动文件
[**putEnterpriseIdDocsDocIdFilesFileIdRename**](DocsApi.md#putEnterpriseIdDocsDocIdFilesFileIdRename) | **PUT** /{enterprise_id}/docs/{doc_id}/files/{file_id}/rename | 更改文件夹名称


# **deleteEnterpriseIdDocsDocIdFilesFileId**
> deleteEnterpriseIdDocsDocIdFilesFileId($docId, $fileId, $enterpriseId, $accessToken)

删除文件

删除文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$fileId = 56; // int | 文件 id(docs 获取文件列表的 id 字段)
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdDocsDocIdFilesFileId($docId, $fileId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->deleteEnterpriseIdDocsDocIdFilesFileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **fileId** | **int**| 文件 id(docs 获取文件列表的 id 字段) |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocsDocIdBackupProgress**
> getEnterpriseIdDocsDocIdBackupProgress($enterpriseId, $docId, $accessToken)

获取文档备份进度

获取文档备份进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$docId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdDocsDocIdBackupProgress($enterpriseId, $docId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getEnterpriseIdDocsDocIdBackupProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **docId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocsDocIdCommit**
> getEnterpriseIdDocsDocIdCommit($docId, $commitId, $enterpriseId, $accessToken)

获取版本历史详情

获取版本历史详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$commitId = "commitId_example"; // string | 文件历史
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdDocsDocIdCommit($docId, $commitId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getEnterpriseIdDocsDocIdCommit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **commitId** | **string**| 文件历史 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocsDocIdFiles**
> \GiteeEnterprise\Model\WikiSort[] getEnterpriseIdDocsDocIdFiles($enterpriseId, $docId, $accessToken)

获取文档下的文件列表

获取文档下的文件列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdDocsDocIdFiles($enterpriseId, $docId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getEnterpriseIdDocsDocIdFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\WikiSort[]**](../Model/WikiSort.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocsDocIdFilesFileId**
> \GiteeEnterprise\Model\WikiSortDetail getEnterpriseIdDocsDocIdFilesFileId($docId, $fileId, $enterpriseId, $accessToken, $versionId)

获取文件详情

获取文件详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$fileId = 56; // int | 文件 id(docs 获取文件列表的 id 字段)
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$versionId = "versionId_example"; // string | 指定历史版本

try {
    $result = $apiInstance->getEnterpriseIdDocsDocIdFilesFileId($docId, $fileId, $enterpriseId, $accessToken, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getEnterpriseIdDocsDocIdFilesFileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **fileId** | **int**| 文件 id(docs 获取文件列表的 id 字段) |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **versionId** | **string**| 指定历史版本 | [optional]

### Return type

[**\GiteeEnterprise\Model\WikiSortDetail**](../Model/WikiSortDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocsDocIdFilesFileIdVersions**
> \GiteeEnterprise\Model\FileVersion getEnterpriseIdDocsDocIdFilesFileIdVersions($docId, $fileId, $enterpriseId, $accessToken)

获取文件的历史版本列表

获取文件的历史版本列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$fileId = 56; // int | 文件 id(docs 获取文件列表的 id 字段)
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdDocsDocIdFilesFileIdVersions($docId, $fileId, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getEnterpriseIdDocsDocIdFilesFileIdVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **fileId** | **int**| 文件 id(docs 获取文件列表的 id 字段) |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\FileVersion**](../Model/FileVersion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDocsDocIdVersions**
> getEnterpriseIdDocsDocIdVersions($docId, $enterpriseId, $accessToken)

获取文档历史版本

获取文档历史版本

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdDocsDocIdVersions($docId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getEnterpriseIdDocsDocIdVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocsDocIdCreateFile**
> \GiteeEnterprise\Model\WikiSortDetail[] postEnterpriseIdDocsDocIdCreateFile($docId, $enterpriseId, $accessToken, $name, $parentId)

创建文件

创建文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 文件名称（不填则由系统自动生成文件名）
$parentId = 56; // int | 父级 id(默认为 0)

try {
    $result = $apiInstance->postEnterpriseIdDocsDocIdCreateFile($docId, $enterpriseId, $accessToken, $name, $parentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->postEnterpriseIdDocsDocIdCreateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 文件名称（不填则由系统自动生成文件名） | [optional]
 **parentId** | **int**| 父级 id(默认为 0) | [optional]

### Return type

[**\GiteeEnterprise\Model\WikiSortDetail[]**](../Model/WikiSortDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDocsDocIdCreateFolder**
> \GiteeEnterprise\Model\WikiSortDetail[] postEnterpriseIdDocsDocIdCreateFolder($docId, $name, $enterpriseId, $accessToken, $parentId)

创建文件夹

创建文件夹

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$name = "name_example"; // string | 文件夹名称
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$parentId = 56; // int | 父级 id(默认为 0)

try {
    $result = $apiInstance->postEnterpriseIdDocsDocIdCreateFolder($docId, $name, $enterpriseId, $accessToken, $parentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->postEnterpriseIdDocsDocIdCreateFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **name** | **string**| 文件夹名称 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **parentId** | **int**| 父级 id(默认为 0) | [optional]

### Return type

[**\GiteeEnterprise\Model\WikiSortDetail[]**](../Model/WikiSortDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocsDocIdFilesFileId**
> \GiteeEnterprise\Model\WikiSortDetail putEnterpriseIdDocsDocIdFilesFileId($docId, $fileId, $enterpriseId, $accessToken, $name, $content, $message, $mentionedUserIds)

更新文件

更新文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$fileId = 56; // int | 文件 id(docs 获取文件列表的 id 字段)
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 文件标题
$content = "content_example"; // string | 文件内容
$message = "message_example"; // string | 提交
$mentionedUserIds = "mentionedUserIds_example"; // string | 提及的用户 id，多个使用 英文 , 分隔

try {
    $result = $apiInstance->putEnterpriseIdDocsDocIdFilesFileId($docId, $fileId, $enterpriseId, $accessToken, $name, $content, $message, $mentionedUserIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->putEnterpriseIdDocsDocIdFilesFileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **fileId** | **int**| 文件 id(docs 获取文件列表的 id 字段) |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 文件标题 | [optional]
 **content** | **string**| 文件内容 | [optional]
 **message** | **string**| 提交 | [optional]
 **mentionedUserIds** | **string**| 提及的用户 id，多个使用 英文 , 分隔 | [optional]

### Return type

[**\GiteeEnterprise\Model\WikiSortDetail**](../Model/WikiSortDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocsDocIdFilesFileIdMove**
> \GiteeEnterprise\Model\WikiSort putEnterpriseIdDocsDocIdFilesFileIdMove($docId, $fileId, $parentId, $prevId, $enterpriseId, $accessToken)

移动文件

移动文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$fileId = 56; // int | 文件 id(docs 获取文件列表的 id 字段)
$parentId = 56; // int | 文件移动后的父级的 file_id
$prevId = 56; // int | 移动后的同级上一个节点的 file_id（默认：0）
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putEnterpriseIdDocsDocIdFilesFileIdMove($docId, $fileId, $parentId, $prevId, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->putEnterpriseIdDocsDocIdFilesFileIdMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **fileId** | **int**| 文件 id(docs 获取文件列表的 id 字段) |
 **parentId** | **int**| 文件移动后的父级的 file_id |
 **prevId** | **int**| 移动后的同级上一个节点的 file_id（默认：0） |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\WikiSort**](../Model/WikiSort.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDocsDocIdFilesFileIdRename**
> putEnterpriseIdDocsDocIdFilesFileIdRename($docId, $fileId, $name, $enterpriseId, $accessToken)

更改文件夹名称

更改文件夹名称

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docId = 56; // int | 文档 id(doc_nodes 文档列表接口的 file_id 字段)
$fileId = 56; // int | 文件 id(docs 获取文件列表的 id 字段)
$name = "name_example"; // string | 文件夹名称
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putEnterpriseIdDocsDocIdFilesFileIdRename($docId, $fileId, $name, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->putEnterpriseIdDocsDocIdFilesFileIdRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **int**| 文档 id(doc_nodes 文档列表接口的 file_id 字段) |
 **fileId** | **int**| 文件 id(docs 获取文件列表的 id 字段) |
 **name** | **string**| 文件夹名称 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

