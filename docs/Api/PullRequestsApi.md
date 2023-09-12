# GiteeEnterprise\PullRequestsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssuesLinkIssueId**](PullRequestsApi.md#deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssuesLinkIssueId) | **DELETE** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/link_issues/{link_issue_id} | PR 取消 关联任务
[**deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactionsCurrentUserReactionId**](PullRequestsApi.md#deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactionsCurrentUserReactionId) | **DELETE** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/reactions/{current_user_reaction_id} | 取消PR表态
[**getEnterpriseIdProjectsProjectIdPullRequestsNewCommits**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsNewCommits) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/new/commits | 获取分支对比的 Commit 列表信息
[**getEnterpriseIdProjectsProjectIdPullRequestsNewFiles**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsNewFiles) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/new/files | 获取分支对比的文件改动列表
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestId**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestId) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id} | 获取 Pull Request 详情
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAuths**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAuths) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/auths | 获取授权用户对 PR 的权限
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommits**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommits) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/commits | 获取某Pull Request的所有Commit信息
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommitsCommitIdFiles**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommitsCommitIdFiles) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/commits/{commit_id}/files | 获取 Commit 下的 diffs
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffForPath**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffForPath) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/diff_for_path | 获取 PullRequest 中差异较大的文件内容
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffPositionContext**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffPositionContext) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/diff_position_context | 获取 Pull Request 评论引用的代码片段
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdFiles**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdFiles) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/files | Pull Request Commit 文件列表。最多显示200条diff
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/link_issues | PR 关联任务任务列表
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/notes | 获取 Pull Request 评论列表
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesGroup**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesGroup) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/notes/group | 获取 Pull Request或相关提交的已解决未解决评论列表
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesTrees**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesTrees) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/notes/trees | 获取 Pull Request或相关提交的评论列表树
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdOperateLogs**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdOperateLogs) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/operate_logs | 获取 Pull Request 操作日志
[**getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdScanReports**](PullRequestsApi.md#getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdScanReports) | **GET** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/scan_reports | 获取 PullRequest 的 GiteeScan 报告
[**getEnterpriseIdPullRequests**](PullRequestsApi.md#getEnterpriseIdPullRequests) | **GET** /{enterprise_id}/pull_requests | 获取企业下的 Pull Request 列表
[**getEnterpriseIdPullRequestsPullRequestStats**](PullRequestsApi.md#getEnterpriseIdPullRequestsPullRequestStats) | **GET** /{enterprise_id}/pull_requests/pull_request_stats | 获取企业下用户 Pull Request 相关数量数据
[**postEnterpriseIdProjectsProjectIdPullRequests**](PullRequestsApi.md#postEnterpriseIdProjectsProjectIdPullRequests) | **POST** /{enterprise_id}/projects/{project_id}/pull_requests | 创建 PR
[**postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdApplySuggestions**](PullRequestsApi.md#postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdApplySuggestions) | **POST** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/apply_suggestions | 应用代码建议到PR
[**postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCherryPick**](PullRequestsApi.md#postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCherryPick) | **POST** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/cherry_pick | 创建 Cherry Pick
[**postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues**](PullRequestsApi.md#postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues) | **POST** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/link_issues | PR 添加 关联任务
[**postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdMerge**](PullRequestsApi.md#postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdMerge) | **POST** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/merge | 合并 PR
[**postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes**](PullRequestsApi.md#postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes) | **POST** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/notes | 评论 Pull Request
[**postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactions**](PullRequestsApi.md#postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactions) | **POST** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/reactions | 新增PR表态
[**putEnterpriseIdProjectsProjectIdPullRequestsPullRequestId**](PullRequestsApi.md#putEnterpriseIdProjectsProjectIdPullRequestsPullRequestId) | **PUT** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id} | 更新 Pull Request
[**putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAssign**](PullRequestsApi.md#putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAssign) | **PUT** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/assign | PR 审查通过
[**putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDraft**](PullRequestsApi.md#putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDraft) | **PUT** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/draft | PR 标记与取消草稿
[**putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdTest**](PullRequestsApi.md#putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdTest) | **PUT** /{enterprise_id}/projects/{project_id}/pull_requests/{pull_request_id}/test | PR 测试通过


# **deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssuesLinkIssueId**
> deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssuesLinkIssueId($enterpriseId, $projectId, $linkIssueId, $pullRequestId, $accessToken, $qt)

PR 取消 关联任务

PR 取消 关联任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$linkIssueId = 56; // int | 任务id
$pullRequestId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssuesLinkIssueId($enterpriseId, $projectId, $linkIssueId, $pullRequestId, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssuesLinkIssueId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **linkIssueId** | **int**| 任务id |
 **pullRequestId** | **int**|  |
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

# **deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactionsCurrentUserReactionId**
> \GiteeEnterprise\Model\IssueReaction deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactionsCurrentUserReactionId($enterpriseId, $projectId, $pullRequestId, $currentUserReactionId, $accessToken, $qt)

取消PR表态

取消PR表态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$currentUserReactionId = 56; // int | 表态id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactionsCurrentUserReactionId($enterpriseId, $projectId, $pullRequestId, $currentUserReactionId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->deleteEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactionsCurrentUserReactionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **currentUserReactionId** | **int**| 表态id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueReaction**](../Model/IssueReaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsNewCommits**
> \GiteeEnterprise\Model\CommitList[] getEnterpriseIdProjectsProjectIdPullRequestsNewCommits($enterpriseId, $projectId, $sourceNamespace, $sourceBranch, $targetNamespace, $targetBranch, $accessToken, $qt, $page, $perPage, $prevId)

获取分支对比的 Commit 列表信息

获取分支对比的 Commit 列表信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$sourceNamespace = "sourceNamespace_example"; // string | 源仓库所属空间地址
$sourceBranch = "sourceBranch_example"; // string | 源仓库的分支名称
$targetNamespace = "targetNamespace_example"; // string | 目标仓库所属空间地址
$targetBranch = "targetBranch_example"; // string | 目标仓库的分支名称
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码(已弃用)
$perPage = 56; // int | 每页的数量，最大为 100(已弃用)
$prevId = "prevId_example"; // string | 滚动列表的最后一条记录的id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsNewCommits($enterpriseId, $projectId, $sourceNamespace, $sourceBranch, $targetNamespace, $targetBranch, $accessToken, $qt, $page, $perPage, $prevId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsNewCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **sourceNamespace** | **string**| 源仓库所属空间地址 |
 **sourceBranch** | **string**| 源仓库的分支名称 |
 **targetNamespace** | **string**| 目标仓库所属空间地址 |
 **targetBranch** | **string**| 目标仓库的分支名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码(已弃用) | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100(已弃用) | [optional]
 **prevId** | **string**| 滚动列表的最后一条记录的id | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitList[]**](../Model/CommitList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsNewFiles**
> \GiteeEnterprise\Model\CommitList[] getEnterpriseIdProjectsProjectIdPullRequestsNewFiles($enterpriseId, $projectId, $sourceNamespace, $sourceBranch, $targetNamespace, $targetBranch, $accessToken, $qt, $w, $page, $perPage)

获取分支对比的文件改动列表

获取分支对比的文件改动列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$sourceNamespace = "sourceNamespace_example"; // string | 源仓库所属空间地址
$sourceBranch = "sourceBranch_example"; // string | 源仓库的分支名称
$targetNamespace = "targetNamespace_example"; // string | 目标仓库所属空间地址
$targetBranch = "targetBranch_example"; // string | 目标仓库的分支名称
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$w = 56; // int | 是否隐藏空白和换行, 1：隐藏，0：不隐藏，默认不隐藏
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsNewFiles($enterpriseId, $projectId, $sourceNamespace, $sourceBranch, $targetNamespace, $targetBranch, $accessToken, $qt, $w, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsNewFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **sourceNamespace** | **string**| 源仓库所属空间地址 |
 **sourceBranch** | **string**| 源仓库的分支名称 |
 **targetNamespace** | **string**| 目标仓库所属空间地址 |
 **targetBranch** | **string**| 目标仓库的分支名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **w** | **int**| 是否隐藏空白和换行, 1：隐藏，0：不隐藏，默认不隐藏 | [optional]
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

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestId**
> \GiteeEnterprise\Model\PullRequestDetail getEnterpriseIdProjectsProjectIdPullRequestsPullRequestId($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt)

获取 Pull Request 详情

获取 Pull Request 详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestId($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestDetail**](../Model/PullRequestDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAuths**
> \GiteeEnterprise\Model\PullRequestAuth getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAuths($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt)

获取授权用户对 PR 的权限

获取授权用户对 PR 的权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAuths($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAuths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestAuth**](../Model/PullRequestAuth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommits**
> \GiteeEnterprise\Model\CommitList[] getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommits($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $page, $perPage, $prevId)

获取某Pull Request的所有Commit信息

获取某Pull Request的所有Commit信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码(已弃用)
$perPage = 56; // int | 每页的数量，最大为 100(已弃用)
$prevId = "prevId_example"; // string | 滚动列表的最后一条记录的id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommits($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $page, $perPage, $prevId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码(已弃用) | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100(已弃用) | [optional]
 **prevId** | **string**| 滚动列表的最后一条记录的id | [optional]

### Return type

[**\GiteeEnterprise\Model\CommitList[]**](../Model/CommitList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommitsCommitIdFiles**
> \GiteeEnterprise\Model\PullRequestFiles[] getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommitsCommitIdFiles($enterpriseId, $projectId, $pullRequestId, $commitId, $accessToken, $qt, $page, $perPage)

获取 Commit 下的 diffs

获取 Commit 下的 diffs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$commitId = "commitId_example"; // string | Commit id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommitsCommitIdFiles($enterpriseId, $projectId, $pullRequestId, $commitId, $accessToken, $qt, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCommitsCommitIdFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **commitId** | **string**| Commit id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestFiles[]**](../Model/PullRequestFiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffForPath**
> getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffForPath($enterpriseId, $projectId, $pullRequestId, $fileIdentifier, $newPath, $oldPath, $accessToken, $qt)

获取 PullRequest 中差异较大的文件内容

获取 PullRequest 中差异较大的文件内容

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$fileIdentifier = "fileIdentifier_example"; // string | git 文件标识符
$newPath = "newPath_example"; // string | 旧路径
$oldPath = "oldPath_example"; // string | 新路径
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffForPath($enterpriseId, $projectId, $pullRequestId, $fileIdentifier, $newPath, $oldPath, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffForPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
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

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffPositionContext**
> \GiteeEnterprise\Model\DiffPosition[] getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffPositionContext($enterpriseId, $projectId, $ids, $pullRequestId, $accessToken, $qt)

获取 Pull Request 评论引用的代码片段

获取 Pull Request 评论引用的代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$ids = "ids_example"; // string | diff_position_id，使用英文逗号分隔
$pullRequestId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffPositionContext($enterpriseId, $projectId, $ids, $pullRequestId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDiffPositionContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **ids** | **string**| diff_position_id，使用英文逗号分隔 |
 **pullRequestId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\DiffPosition[]**](../Model/DiffPosition.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdFiles**
> \GiteeEnterprise\Model\PullRequestFiles[] getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdFiles($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $page, $perPage, $headSha, $baseSha, $disablePaginate, $w)

Pull Request Commit 文件列表。最多显示200条diff

Pull Request Commit 文件列表。最多显示200条diff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$headSha = "headSha_example"; // string | head sha
$baseSha = "baseSha_example"; // string | base sha
$disablePaginate = true; // bool | 是否禁用分页
$w = 56; // int | 是否隐藏空白和换行, 1：隐藏，0：不隐藏，默认不隐藏

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdFiles($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $page, $perPage, $headSha, $baseSha, $disablePaginate, $w);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **headSha** | **string**| head sha | [optional]
 **baseSha** | **string**| base sha | [optional]
 **disablePaginate** | **bool**| 是否禁用分页 | [optional]
 **w** | **int**| 是否隐藏空白和换行, 1：隐藏，0：不隐藏，默认不隐藏 | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestFiles[]**](../Model/PullRequestFiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues**
> \GiteeEnterprise\Model\Issue getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $page, $perPage)

PR 关联任务任务列表

PR 关联任务任务列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes**
> \GiteeEnterprise\Model\PullRequestNote getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $commitId, $page, $perPage)

获取 Pull Request 评论列表

获取 Pull Request 评论列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$commitId = "commitId_example"; // string | commit sha
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $commitId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **commitId** | **string**| commit sha | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestNote**](../Model/PullRequestNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesGroup**
> \GiteeEnterprise\Model\PullRequestNote getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesGroup($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $commitIds, $page, $perPage)

获取 Pull Request或相关提交的已解决未解决评论列表

获取 Pull Request或相关提交的已解决未解决评论列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$commitIds = "commitIds_example"; // string | commit sha提交列表，多个用[,]连接
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesGroup($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $commitIds, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **commitIds** | **string**| commit sha提交列表，多个用[,]连接 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestNote**](../Model/PullRequestNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesTrees**
> \GiteeEnterprise\Model\PullRequestNoteTree getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesTrees($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $headSha, $baseSha)

获取 Pull Request或相关提交的评论列表树

获取 Pull Request或相关提交的评论列表树

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | 默认PR id，当pr_qt参数为iid时，此处是仓库的 PR 编号
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$headSha = "headSha_example"; // string | head sha
$baseSha = "baseSha_example"; // string | base sha

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesTrees($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $headSha, $baseSha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotesTrees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| 默认PR id，当pr_qt参数为iid时，此处是仓库的 PR 编号 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **headSha** | **string**| head sha | [optional]
 **baseSha** | **string**| base sha | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestNoteTree**](../Model/PullRequestNoteTree.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdOperateLogs**
> \GiteeEnterprise\Model\PrOperateLog getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdOperateLogs($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $sort, $direction, $page, $perPage)

获取 Pull Request 操作日志

获取 Pull Request 操作日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 updated_at: 更新时间)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdOperateLogs($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdOperateLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 updated_at: 更新时间) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\PrOperateLog**](../Model/PrOperateLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdScanReports**
> getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdScanReports($enterpriseId, $projectId, $pullRequestId, $taskId, $type, $accessToken, $qt, $bugLevel, $bugType, $page, $perPage)

获取 PullRequest 的 GiteeScan 报告

获取 PullRequest 的 GiteeScan 报告

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$taskId = 56; // int | GiteeScan 扫描任务 id
$type = "type_example"; // string | 扫描类型，bug：缺陷扫描、style：规范扫描、cve：依赖项漏洞扫描
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$bugLevel = "bugLevel_example"; // string | 缺陷等级，高危：1、中危：2
$bugType = "bugType_example"; // string | 缺陷类型，BUG：0、CodeSmell：1、Security：2
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $apiInstance->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdScanReports($enterpriseId, $projectId, $pullRequestId, $taskId, $type, $accessToken, $qt, $bugLevel, $bugType, $page, $perPage);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdScanReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **taskId** | **int**| GiteeScan 扫描任务 id |
 **type** | **string**| 扫描类型，bug：缺陷扫描、style：规范扫描、cve：依赖项漏洞扫描 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **bugLevel** | **string**| 缺陷等级，高危：1、中危：2 | [optional]
 **bugType** | **string**| 缺陷类型，BUG：0、CodeSmell：1、Security：2 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdPullRequests**
> \GiteeEnterprise\Model\PullRequest[] getEnterpriseIdPullRequests($enterpriseId, $accessToken, $state, $scope, $authorId, $assigneeId, $testerId, $search, $sort, $direction, $groupId, $milestoneId, $labels, $labelIds, $canBeMerged, $projectId, $needStateCount, $publicOrInternalOpenOnly, $targetBranch, $sourceBranch, $page, $perPage)

获取企业下的 Pull Request 列表

获取企业下的 Pull Request 列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业 id
$accessToken = "accessToken_example"; // string | 用户授权码
$state = "state_example"; // string | PR 状态
$scope = "scope_example"; // string | 范围筛选。指派我的: assigned_or_test，我创建或指派给我的: related_to_me，我参与仓库的PR: participate_in，草稿PR: draft
$authorId = "authorId_example"; // string | 筛选 PR 创建者
$assigneeId = "assigneeId_example"; // string | 筛选 PR 审查者
$testerId = "testerId_example"; // string | 筛选 PR 测试人员
$search = "search_example"; // string | 搜索参数
$sort = "sort_example"; // string | 排序字段(created_at、closed_at、priority)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$groupId = 56; // int | 团队 id
$milestoneId = 56; // int | 里程碑 id
$labels = "labels_example"; // string | 标签名称。多个标签逗号(,)隔开
$labelIds = "labelIds_example"; // string | 标签ID,多个标签逗号(,)隔开
$canBeMerged = 56; // int | 是否可合并
$projectId = 56; // int | 仓库 id
$needStateCount = 56; // int | 是否需要状态统计数
$publicOrInternalOpenOnly = 56; // int | 仅列出内部公开和外部公开的 PR
$targetBranch = "targetBranch_example"; // string | 目标分支名
$sourceBranch = "sourceBranch_example"; // string | 源分支名
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdPullRequests($enterpriseId, $accessToken, $state, $scope, $authorId, $assigneeId, $testerId, $search, $sort, $direction, $groupId, $milestoneId, $labels, $labelIds, $canBeMerged, $projectId, $needStateCount, $publicOrInternalOpenOnly, $targetBranch, $sourceBranch, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdPullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **state** | **string**| PR 状态 | [optional]
 **scope** | **string**| 范围筛选。指派我的: assigned_or_test，我创建或指派给我的: related_to_me，我参与仓库的PR: participate_in，草稿PR: draft | [optional]
 **authorId** | **string**| 筛选 PR 创建者 | [optional]
 **assigneeId** | **string**| 筛选 PR 审查者 | [optional]
 **testerId** | **string**| 筛选 PR 测试人员 | [optional]
 **search** | **string**| 搜索参数 | [optional]
 **sort** | **string**| 排序字段(created_at、closed_at、priority) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **groupId** | **int**| 团队 id | [optional]
 **milestoneId** | **int**| 里程碑 id | [optional]
 **labels** | **string**| 标签名称。多个标签逗号(,)隔开 | [optional]
 **labelIds** | **string**| 标签ID,多个标签逗号(,)隔开 | [optional]
 **canBeMerged** | **int**| 是否可合并 | [optional]
 **projectId** | **int**| 仓库 id | [optional]
 **needStateCount** | **int**| 是否需要状态统计数 | [optional]
 **publicOrInternalOpenOnly** | **int**| 仅列出内部公开和外部公开的 PR | [optional]
 **targetBranch** | **string**| 目标分支名 | [optional]
 **sourceBranch** | **string**| 源分支名 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequest[]**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdPullRequestsPullRequestStats**
> getEnterpriseIdPullRequestsPullRequestStats($enterpriseId, $accessToken)

获取企业下用户 Pull Request 相关数量数据

获取企业下用户 Pull Request 相关数量数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdPullRequestsPullRequestStats($enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getEnterpriseIdPullRequestsPullRequestStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **postEnterpriseIdProjectsProjectIdPullRequests**
> \GiteeEnterprise\Model\PullRequestDetail[] postEnterpriseIdProjectsProjectIdPullRequests($enterpriseId, $projectId, $sourceRepo, $sourceBranch, $targetBranch, $title, $body, $assigneeId, $prAssignNum, $testerId, $prTestNum, $milestoneId, $priority, $pruneBranch, $closeRelatedIssue, $accessToken, $qt, $draft, $squash)

创建 PR

创建 PR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$sourceRepo = "sourceRepo_example"; // string | 源仓库 id
$sourceBranch = "sourceBranch_example"; // string | 源分支名称
$targetBranch = "targetBranch_example"; // string | 目标分支名称
$title = "title_example"; // string | 标题
$body = "body_example"; // string | 内容
$assigneeId = "assigneeId_example"; // string | 审查者。可多选，英文逗号分隔
$prAssignNum = "prAssignNum_example"; // string | 审查人员数量
$testerId = "testerId_example"; // string | 测试人员。可多选，英文逗号分隔
$prTestNum = "prTestNum_example"; // string | 测试人员数量
$milestoneId = "milestoneId_example"; // string | 关联的里程碑
$priority = "priority_example"; // string | 优先级 0~4
$pruneBranch = 56; // int | 是否需要在合并 PR 后删除提交分支. 0: 否 1: 是
$closeRelatedIssue = "closeRelatedIssue_example"; // string | 是否需要在合并 PR 后关闭关联的任务. 0: 否 1: 是
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$draft = true; // bool | 是否指定为草稿： 草稿 - true, 非草稿 - false，缺省时为非草稿
$squash = true; // bool | 接受 Pull Request 时使用扁平化（squash）合并

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdPullRequests($enterpriseId, $projectId, $sourceRepo, $sourceBranch, $targetBranch, $title, $body, $assigneeId, $prAssignNum, $testerId, $prTestNum, $milestoneId, $priority, $pruneBranch, $closeRelatedIssue, $accessToken, $qt, $draft, $squash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postEnterpriseIdProjectsProjectIdPullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **sourceRepo** | **string**| 源仓库 id |
 **sourceBranch** | **string**| 源分支名称 |
 **targetBranch** | **string**| 目标分支名称 |
 **title** | **string**| 标题 |
 **body** | **string**| 内容 |
 **assigneeId** | **string**| 审查者。可多选，英文逗号分隔 |
 **prAssignNum** | **string**| 审查人员数量 |
 **testerId** | **string**| 测试人员。可多选，英文逗号分隔 |
 **prTestNum** | **string**| 测试人员数量 |
 **milestoneId** | **string**| 关联的里程碑 |
 **priority** | **string**| 优先级 0~4 |
 **pruneBranch** | **int**| 是否需要在合并 PR 后删除提交分支. 0: 否 1: 是 |
 **closeRelatedIssue** | **string**| 是否需要在合并 PR 后关闭关联的任务. 0: 否 1: 是 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **draft** | **bool**| 是否指定为草稿： 草稿 - true, 非草稿 - false，缺省时为非草稿 | [optional]
 **squash** | **bool**| 接受 Pull Request 时使用扁平化（squash）合并 | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestDetail[]**](../Model/PullRequestDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdApplySuggestions**
> postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdApplySuggestions($enterpriseId, $projectId, $suggestionsNoteId, $suggestionsNoteTimestamp, $suggestionsDiffPositionTimestamp, $pullRequestId, $accessToken, $qt, $message, $suggestionsContent)

应用代码建议到PR

应用代码建议到PR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$suggestionsNoteId = array(56); // int[] | Note的id
$suggestionsNoteTimestamp = array(56); // int[] | Note的updated_at的秒时间戳
$suggestionsDiffPositionTimestamp = array(56); // int[] | Diff_position的updated_at的秒时间戳
$pullRequestId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$message = "message_example"; // string | 应用建议操作的提交信息
$suggestionsContent = array("suggestionsContent_example"); // string[] | 代码建议的内容（如果没有，则视为删除）

try {
    $apiInstance->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdApplySuggestions($enterpriseId, $projectId, $suggestionsNoteId, $suggestionsNoteTimestamp, $suggestionsDiffPositionTimestamp, $pullRequestId, $accessToken, $qt, $message, $suggestionsContent);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdApplySuggestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **suggestionsNoteId** | [**int[]**](../Model/int.md)| Note的id |
 **suggestionsNoteTimestamp** | [**int[]**](../Model/int.md)| Note的updated_at的秒时间戳 |
 **suggestionsDiffPositionTimestamp** | [**int[]**](../Model/int.md)| Diff_position的updated_at的秒时间戳 |
 **pullRequestId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **message** | **string**| 应用建议操作的提交信息 | [optional]
 **suggestionsContent** | [**string[]**](../Model/string.md)| 代码建议的内容（如果没有，则视为删除） | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCherryPick**
> \GiteeEnterprise\Model\CherryPick postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCherryPick($enterpriseId, $projectId, $targetBranchName, $targetProjectId, $pullRequestId, $accessToken, $qt)

创建 Cherry Pick

创建 Cherry Pick

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$targetBranchName = "targetBranchName_example"; // string | 目标分支名称
$targetProjectId = 56; // int | 目标仓库id
$pullRequestId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCherryPick($enterpriseId, $projectId, $targetBranchName, $targetProjectId, $pullRequestId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdCherryPick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **targetBranchName** | **string**| 目标分支名称 |
 **targetProjectId** | **int**| 目标仓库id |
 **pullRequestId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\CherryPick**](../Model/CherryPick.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues**
> \GiteeEnterprise\Model\Issue postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues($enterpriseId, $projectId, $linkIssueId, $pullRequestId, $accessToken, $qt)

PR 添加 关联任务

PR 添加 关联任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$linkIssueId = 56; // int | 任务id
$pullRequestId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues($enterpriseId, $projectId, $linkIssueId, $pullRequestId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdLinkIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **linkIssueId** | **int**| 任务id |
 **pullRequestId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdMerge**
> postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdMerge($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $mergeMethod, $title, $description)

合并 PR

合并 PR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$mergeMethod = "merge"; // string | 可选。合并PR的方法，merge（合并所有提交）和 squash（扁平化分支合并）和 rebase（变基并合并）。默认为merge。
$title = "title_example"; // string | 可选。合并标题，默认为PR的标题
$description = "description_example"; // string | 可选。合并描述，默认为 \"Merge pull request !{pr_id} from {author}/{source_branch}\"，与页面显示的默认一致。

try {
    $apiInstance->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdMerge($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $mergeMethod, $title, $description);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **mergeMethod** | **string**| 可选。合并PR的方法，merge（合并所有提交）和 squash（扁平化分支合并）和 rebase（变基并合并）。默认为merge。 | [optional] [default to merge]
 **title** | **string**| 可选。合并标题，默认为PR的标题 | [optional]
 **description** | **string**| 可选。合并描述，默认为 \&quot;Merge pull request !{pr_id} from {author}/{source_branch}\&quot;，与页面显示的默认一致。 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes**
> \GiteeEnterprise\Model\PullRequestNote postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes($enterpriseId, $projectId, $pullRequestId, $body, $accessToken, $qt, $lineCode, $diffPositionId, $replyId)

评论 Pull Request

评论 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | 默认PR id，当pr_qt参数为iid时，此处是仓库的 PR 编号
$body = "body_example"; // string | 评论内容，代码建议用```suggestion ``` 包围
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$lineCode = "lineCode_example"; // string | 代码行标记值
$diffPositionId = 56; // int | 代码评论组id，同位置已有评论时传递
$replyId = 56; // int | 回复的上级评论id

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes($enterpriseId, $projectId, $pullRequestId, $body, $accessToken, $qt, $lineCode, $diffPositionId, $replyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| 默认PR id，当pr_qt参数为iid时，此处是仓库的 PR 编号 |
 **body** | **string**| 评论内容，代码建议用&#x60;&#x60;&#x60;suggestion &#x60;&#x60;&#x60; 包围 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **lineCode** | **string**| 代码行标记值 | [optional]
 **diffPositionId** | **int**| 代码评论组id，同位置已有评论时传递 | [optional]
 **replyId** | **int**| 回复的上级评论id | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestNote**](../Model/PullRequestNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactions**
> \GiteeEnterprise\Model\IssueReaction postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactions($enterpriseId, $projectId, $pullRequestId, $text, $accessToken, $qt)

新增PR表态

新增PR表态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$text = "text_example"; // string | 表情
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactions($enterpriseId, $projectId, $pullRequestId, $text, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdReactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **text** | **string**| 表情 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueReaction**](../Model/IssueReaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdPullRequestsPullRequestId**
> \GiteeEnterprise\Model\PullRequestDetail putEnterpriseIdProjectsProjectIdPullRequestsPullRequestId($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $prQt, $milestoneId, $relatedIssueId, $title, $body, $targetBranch, $priority, $stateEvent, $labelIds, $closeRelatedIssue, $pruneBranch, $assigneeId, $prAssignNum, $testerId, $prTestNum, $checkState, $testState, $draft, $squash)

更新 Pull Request

更新 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$prQt = "prQt_example"; // string | PR id 类型
$milestoneId = 56; // int | 关联的里程碑 id
$relatedIssueId = "relatedIssueId_example"; // string | 关联的任务 id。如有多个，用英文逗号分隔。eg: 1,2,3
$title = "title_example"; // string | PR 标题
$body = "body_example"; // string | PR 正文内容
$targetBranch = "targetBranch_example"; // string | 目标仓库的分支名称
$priority = 56; // int | 优先级(0: 不指定 1: 不重要 2: 次要 3: 主要 4: 严重)
$stateEvent = "stateEvent_example"; // string | 关闭 PR
$labelIds = "labelIds_example"; // string | 关联的标签 id。如有多个，用英文逗号分隔。eg: 1,2,3
$closeRelatedIssue = 56; // int | 是否需要在合并 PR 后关闭关联的任务. 0: 否 1: 是
$pruneBranch = 56; // int | 是否需要在合并 PR 后删除提交分支. 0: 否 1: 是
$assigneeId = "assigneeId_example"; // string | 审查人员的用户 id。如有多个，用英文逗号分隔。eg: 1,2,3
$prAssignNum = 56; // int | 至少需要{pr_assign_num}名审查人员审查通过后可合并
$testerId = "testerId_example"; // string | 测试人员的用户 id。如有多个，用英文逗号分隔。eg: 1,2,3
$prTestNum = 56; // int | 至少需要{pr_assign_num}名测试人员测试通过后可合并
$checkState = 56; // int | 审查状态. 0: 非必须审查 1: 必须审查
$testState = 56; // int | 测试状态. 0: 非必须测试 1: 必须测试
$draft = true; // bool | 是否指定为草稿： 草稿 - true, 非草稿 - false，缺省时为非草稿
$squash = true; // bool | 接受 Pull Request 时使用扁平化（squash）合并

try {
    $result = $apiInstance->putEnterpriseIdProjectsProjectIdPullRequestsPullRequestId($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $prQt, $milestoneId, $relatedIssueId, $title, $body, $targetBranch, $priority, $stateEvent, $labelIds, $closeRelatedIssue, $pruneBranch, $assigneeId, $prAssignNum, $testerId, $prTestNum, $checkState, $testState, $draft, $squash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->putEnterpriseIdProjectsProjectIdPullRequestsPullRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **prQt** | **string**| PR id 类型 | [optional]
 **milestoneId** | **int**| 关联的里程碑 id | [optional]
 **relatedIssueId** | **string**| 关联的任务 id。如有多个，用英文逗号分隔。eg: 1,2,3 | [optional]
 **title** | **string**| PR 标题 | [optional]
 **body** | **string**| PR 正文内容 | [optional]
 **targetBranch** | **string**| 目标仓库的分支名称 | [optional]
 **priority** | **int**| 优先级(0: 不指定 1: 不重要 2: 次要 3: 主要 4: 严重) | [optional]
 **stateEvent** | **string**| 关闭 PR | [optional]
 **labelIds** | **string**| 关联的标签 id。如有多个，用英文逗号分隔。eg: 1,2,3 | [optional]
 **closeRelatedIssue** | **int**| 是否需要在合并 PR 后关闭关联的任务. 0: 否 1: 是 | [optional]
 **pruneBranch** | **int**| 是否需要在合并 PR 后删除提交分支. 0: 否 1: 是 | [optional]
 **assigneeId** | **string**| 审查人员的用户 id。如有多个，用英文逗号分隔。eg: 1,2,3 | [optional]
 **prAssignNum** | **int**| 至少需要{pr_assign_num}名审查人员审查通过后可合并 | [optional]
 **testerId** | **string**| 测试人员的用户 id。如有多个，用英文逗号分隔。eg: 1,2,3 | [optional]
 **prTestNum** | **int**| 至少需要{pr_assign_num}名测试人员测试通过后可合并 | [optional]
 **checkState** | **int**| 审查状态. 0: 非必须审查 1: 必须审查 | [optional]
 **testState** | **int**| 测试状态. 0: 非必须测试 1: 必须测试 | [optional]
 **draft** | **bool**| 是否指定为草稿： 草稿 - true, 非草稿 - false，缺省时为非草稿 | [optional]
 **squash** | **bool**| 接受 Pull Request 时使用扁平化（squash）合并 | [optional]

### Return type

[**\GiteeEnterprise\Model\PullRequestDetail**](../Model/PullRequestDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAssign**
> putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAssign($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $forceAccept)

PR 审查通过

PR 审查通过

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$forceAccept = 0; // int | 是否强制审核通过(默认否)

try {
    $apiInstance->putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAssign($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $forceAccept);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdAssign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **forceAccept** | **int**| 是否强制审核通过(默认否) | [optional] [default to 0]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDraft**
> putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDraft($enterpriseId, $projectId, $pullRequestId, $draft, $accessToken, $qt)

PR 标记与取消草稿

PR 标记与取消草稿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$draft = true; // bool | 是否指定为草稿： 指定草稿-true, 取消草稿-false
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDraft($enterpriseId, $projectId, $pullRequestId, $draft, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **draft** | **bool**| 是否指定为草稿： 指定草稿-true, 取消草稿-false |
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

# **putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdTest**
> putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdTest($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $forceAccept)

PR 测试通过

PR 测试通过

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$pullRequestId = 56; // int | PR id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$forceAccept = 0; // int | 是否强制测试通过(默认否)

try {
    $apiInstance->putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdTest($enterpriseId, $projectId, $pullRequestId, $accessToken, $qt, $forceAccept);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->putEnterpriseIdProjectsProjectIdPullRequestsPullRequestIdTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **pullRequestId** | **int**| PR id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **forceAccept** | **int**| 是否强制测试通过(默认否) | [optional] [default to 0]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

