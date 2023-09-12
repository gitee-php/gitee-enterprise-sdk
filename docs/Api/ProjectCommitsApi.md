# GiteeEnterprise\ProjectCommitsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdProjectsProjectIdCommitCommitId**](ProjectCommitsApi.md#getEnterpriseIdProjectsProjectIdCommitCommitId) | **GET** /{enterprise_id}/projects/{project_id}/commit/{commit_id} | commit详情
[**getEnterpriseIdProjectsProjectIdCommitCommitIdBranches**](ProjectCommitsApi.md#getEnterpriseIdProjectsProjectIdCommitCommitIdBranches) | **GET** /{enterprise_id}/projects/{project_id}/commit/{commit_id}/branches | 获取commit的分支和tag
[**getEnterpriseIdProjectsProjectIdCommitCommitIdDiffForPath**](ProjectCommitsApi.md#getEnterpriseIdProjectsProjectIdCommitCommitIdDiffForPath) | **GET** /{enterprise_id}/projects/{project_id}/commit/{commit_id}/diff_for_path | 获取 commit 详情中差异较大的文件内容
[**getEnterpriseIdProjectsProjectIdCommitCommitIdNotes**](ProjectCommitsApi.md#getEnterpriseIdProjectsProjectIdCommitCommitIdNotes) | **GET** /{enterprise_id}/projects/{project_id}/commit/{commit_id}/notes | Commit 评论列表
[**getEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees**](ProjectCommitsApi.md#getEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees) | **GET** /{enterprise_id}/projects/{project_id}/commit/{commit_id}/notes/trees | Commit 评论列表树
[**getEnterpriseIdProjectsProjectIdCommitsRef**](ProjectCommitsApi.md#getEnterpriseIdProjectsProjectIdCommitsRef) | **GET** /{enterprise_id}/projects/{project_id}/commits/{ref} | commits列表
[**getEnterpriseIdProjectsProjectIdCompareFromTo**](ProjectCommitsApi.md#getEnterpriseIdProjectsProjectIdCompareFromTo) | **GET** /{enterprise_id}/projects/{project_id}/compare/{from}...{to} | 对比commit
[**postEnterpriseIdProjectsProjectIdCommitCommitIdNotes**](ProjectCommitsApi.md#postEnterpriseIdProjectsProjectIdCommitCommitIdNotes) | **POST** /{enterprise_id}/projects/{project_id}/commit/{commit_id}/notes | 评论 Commit
[**postEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees**](ProjectCommitsApi.md#postEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees) | **POST** /{enterprise_id}/projects/{project_id}/commit/{commit_id}/notes/trees | 评论、回复 Commit
[**postEnterpriseIdProjectsProjectIdCommitCommitIdRevert**](ProjectCommitsApi.md#postEnterpriseIdProjectsProjectIdCommitCommitIdRevert) | **POST** /{enterprise_id}/projects/{project_id}/commit/{commit_id}/revert | commit revert


# **getEnterpriseIdProjectsProjectIdCommitCommitId**
> \GiteeEnterprise\Model\CommitDetail getEnterpriseIdProjectsProjectIdCommitCommitId($enterpriseId, $projectId, $commitId, $accessToken, $qt)

commit详情

commit详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitId = "commitId_example"; // string | commit sha
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdCommitCommitId($enterpriseId, $projectId, $commitId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->getEnterpriseIdProjectsProjectIdCommitCommitId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitId** | **string**| commit sha |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitDetail**](../Model/CommitDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdCommitCommitIdBranches**
> \GiteeEnterprise\Model\CommitBranch getEnterpriseIdProjectsProjectIdCommitCommitIdBranches($enterpriseId, $projectId, $commitId, $accessToken, $qt)

获取commit的分支和tag

获取commit的分支和tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitId = "commitId_example"; // string | commit sha
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdCommitCommitIdBranches($enterpriseId, $projectId, $commitId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->getEnterpriseIdProjectsProjectIdCommitCommitIdBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitId** | **string**| commit sha |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitBranch**](../Model/CommitBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdCommitCommitIdDiffForPath**
> getEnterpriseIdProjectsProjectIdCommitCommitIdDiffForPath($enterpriseId, $projectId, $commitId, $fileIdentifier, $newPath, $oldPath, $accessToken, $qt)

获取 commit 详情中差异较大的文件内容

获取 commit 详情中差异较大的文件内容

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitId = "commitId_example"; // string | commit sha
$fileIdentifier = "fileIdentifier_example"; // string | git 文件标识符
$newPath = "newPath_example"; // string | 旧路径
$oldPath = "oldPath_example"; // string | 新路径
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->getEnterpriseIdProjectsProjectIdCommitCommitIdDiffForPath($enterpriseId, $projectId, $commitId, $fileIdentifier, $newPath, $oldPath, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->getEnterpriseIdProjectsProjectIdCommitCommitIdDiffForPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitId** | **string**| commit sha |
 **fileIdentifier** | **string**| git 文件标识符 |
 **newPath** | **string**| 旧路径 |
 **oldPath** | **string**| 新路径 |
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

# **getEnterpriseIdProjectsProjectIdCommitCommitIdNotes**
> \GiteeEnterprise\Model\CommitNote getEnterpriseIdProjectsProjectIdCommitCommitIdNotes($enterpriseId, $projectId, $commitId, $accessToken, $qt)

Commit 评论列表

Commit 评论列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitId = "commitId_example"; // string | commit sha
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdCommitCommitIdNotes($enterpriseId, $projectId, $commitId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->getEnterpriseIdProjectsProjectIdCommitCommitIdNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitId** | **string**| commit sha |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitNote**](../Model/CommitNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees**
> getEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees($enterpriseId, $projectId, $commitId, $accessToken, $qt)

Commit 评论列表树

Commit 评论列表树

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitId = "commitId_example"; // string | commit sha
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->getEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees($enterpriseId, $projectId, $commitId, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->getEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitId** | **string**| commit sha |
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

# **getEnterpriseIdProjectsProjectIdCommitsRef**
> \GiteeEnterprise\Model\CommitList[] getEnterpriseIdProjectsProjectIdCommitsRef($enterpriseId, $projectId, $ref, $accessToken, $qt, $author, $startDate, $endDate, $search, $page, $perPage)

commits列表

commits列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$ref = "ref_example"; // string | 提交起始的SHA值或者分支名及文件路径. 默认: 仓库的默认分支
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$author = "author_example"; // string | 提交作者的邮箱或个人空间地址(username/login)
$startDate = "startDate_example"; // string | 提交的起始时间，时间格式为 ISO 8601
$endDate = "endDate_example"; // string | 提交的最后时间，时间格式为 ISO 8601
$search = "search_example"; // string | Commit message 搜索关键字
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdCommitsRef($enterpriseId, $projectId, $ref, $accessToken, $qt, $author, $startDate, $endDate, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->getEnterpriseIdProjectsProjectIdCommitsRef: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **ref** | **string**| 提交起始的SHA值或者分支名及文件路径. 默认: 仓库的默认分支 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **author** | **string**| 提交作者的邮箱或个人空间地址(username/login) | [optional]
 **startDate** | **string**| 提交的起始时间，时间格式为 ISO 8601 | [optional]
 **endDate** | **string**| 提交的最后时间，时间格式为 ISO 8601 | [optional]
 **search** | **string**| Commit message 搜索关键字 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitList[]**](../Model/CommitList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdCompareFromTo**
> \GiteeEnterprise\Model\CommitCompare getEnterpriseIdProjectsProjectIdCompareFromTo($enterpriseId, $projectId, $from, $to, $accessToken, $qt)

对比commit

对比commit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$from = "from_example"; // string | 起始 commit
$to = "to_example"; // string | 结束 commit
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdCompareFromTo($enterpriseId, $projectId, $from, $to, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->getEnterpriseIdProjectsProjectIdCompareFromTo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **from** | **string**| 起始 commit |
 **to** | **string**| 结束 commit |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitCompare**](../Model/CommitCompare.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdCommitCommitIdNotes**
> \GiteeEnterprise\Model\CommitNote postEnterpriseIdProjectsProjectIdCommitCommitIdNotes($enterpriseId, $projectId, $commitId, $body, $accessToken, $qt, $lineCode)

评论 Commit

评论 Commit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitId = "commitId_example"; // string | commit sha
$body = "body_example"; // string | 评论内容
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$lineCode = "lineCode_example"; // string | 代码行标记值

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdCommitCommitIdNotes($enterpriseId, $projectId, $commitId, $body, $accessToken, $qt, $lineCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->postEnterpriseIdProjectsProjectIdCommitCommitIdNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitId** | **string**| commit sha |
 **body** | **string**| 评论内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **lineCode** | **string**| 代码行标记值 | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitNote**](../Model/CommitNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees**
> \GiteeEnterprise\Model\CommitNoteDetail postEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees($enterpriseId, $projectId, $commitId, $body, $accessToken, $qt, $lineCode, $replyId)

评论、回复 Commit

评论、回复 Commit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitId = "commitId_example"; // string | commit sha
$body = "body_example"; // string | 评论内容
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$lineCode = "lineCode_example"; // string | 代码行标记值
$replyId = 56; // int | 回复的上级评论id

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees($enterpriseId, $projectId, $commitId, $body, $accessToken, $qt, $lineCode, $replyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->postEnterpriseIdProjectsProjectIdCommitCommitIdNotesTrees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitId** | **string**| commit sha |
 **body** | **string**| 评论内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **lineCode** | **string**| 代码行标记值 | [optional]
 **replyId** | **int**| 回复的上级评论id | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitNoteDetail**](../Model/CommitNoteDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdCommitCommitIdRevert**
> postEnterpriseIdProjectsProjectIdCommitCommitIdRevert($enterpriseId, $projectId, $commitId, $startBranch, $accessToken, $qt, $createPullRequest)

commit revert

commit revert

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$commitId = "commitId_example"; // string | commit sha
$startBranch = "startBranch_example"; // string | start branch
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$createPullRequest = true; // bool | 是否创建代码评审

try {
    $apiInstance->postEnterpriseIdProjectsProjectIdCommitCommitIdRevert($enterpriseId, $projectId, $commitId, $startBranch, $accessToken, $qt, $createPullRequest);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCommitsApi->postEnterpriseIdProjectsProjectIdCommitCommitIdRevert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **commitId** | **string**| commit sha |
 **startBranch** | **string**| start branch |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **createPullRequest** | **bool**| 是否创建代码评审 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

