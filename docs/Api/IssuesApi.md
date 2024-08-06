# GiteeEnterprise\IssuesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdIssuesIssueId**](IssuesApi.md#deleteEnterpriseIdIssuesIssueId) | **DELETE** /{enterprise_id}/issues/{issue_id} | 删除任务
[**deleteEnterpriseIdIssuesIssueIdAttachFilesAttachFileId**](IssuesApi.md#deleteEnterpriseIdIssuesIssueIdAttachFilesAttachFileId) | **DELETE** /{enterprise_id}/issues/{issue_id}/attach_files/{attach_file_id} | 删除任务附件
[**deleteEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId**](IssuesApi.md#deleteEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId) | **DELETE** /{enterprise_id}/issues/{issue_id}/link_pull_request/{pull_request_id} | 解除任务与 Pull Request 的关联
[**deleteEnterpriseIdIssuesIssueIdNotesNoteId**](IssuesApi.md#deleteEnterpriseIdIssuesIssueIdNotesNoteId) | **DELETE** /{enterprise_id}/issues/{issue_id}/notes/{note_id} | 删除某任务下评论
[**deleteEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId**](IssuesApi.md#deleteEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId) | **DELETE** /{enterprise_id}/issues/{issue_id}/related_issue/{link_issue_id} | 移除任务的关联关系
[**deleteEnterpriseIdIssuesIssueIdStar**](IssuesApi.md#deleteEnterpriseIdIssuesIssueIdStar) | **DELETE** /{enterprise_id}/issues/{issue_id}/star | 取消星标任务
[**getEnterpriseIdIssues**](IssuesApi.md#getEnterpriseIdIssues) | **GET** /{enterprise_id}/issues | 获取任务列表
[**getEnterpriseIdIssuesAttachFileIssues**](IssuesApi.md#getEnterpriseIdIssuesAttachFileIssues) | **GET** /{enterprise_id}/issues/attach_file_issues | 显示全部有附件的issue
[**getEnterpriseIdIssuesBoardMembers**](IssuesApi.md#getEnterpriseIdIssuesBoardMembers) | **GET** /{enterprise_id}/issues/board_members | 获取成员看板的成员列表
[**getEnterpriseIdIssuesIssueId**](IssuesApi.md#getEnterpriseIdIssuesIssueId) | **GET** /{enterprise_id}/issues/{issue_id} | 获取任务详情
[**getEnterpriseIdIssuesIssueIdAttachFiles**](IssuesApi.md#getEnterpriseIdIssuesIssueIdAttachFiles) | **GET** /{enterprise_id}/issues/{issue_id}/attach_files | 获取任务附件
[**getEnterpriseIdIssuesIssueIdAuths**](IssuesApi.md#getEnterpriseIdIssuesIssueIdAuths) | **GET** /{enterprise_id}/issues/{issue_id}/auths | 获取授权用户对任务的权限
[**getEnterpriseIdIssuesIssueIdIssueScheduleUpdateCheck**](IssuesApi.md#getEnterpriseIdIssuesIssueIdIssueScheduleUpdateCheck) | **GET** /{enterprise_id}/issues/{issue_id}/issue_schedule_update_check | 查询当前工作项的排期是否可以更新
[**getEnterpriseIdIssuesIssueIdIssueStates**](IssuesApi.md#getEnterpriseIdIssuesIssueIdIssueStates) | **GET** /{enterprise_id}/issues/{issue_id}/issue_states | 获取当前任务可流转的下一状态
[**getEnterpriseIdIssuesIssueIdLinkIssues**](IssuesApi.md#getEnterpriseIdIssuesIssueIdLinkIssues) | **GET** /{enterprise_id}/issues/{issue_id}/link_issues | 获取任务的关联任务
[**getEnterpriseIdIssuesIssueIdLinkPullRequest**](IssuesApi.md#getEnterpriseIdIssuesIssueIdLinkPullRequest) | **GET** /{enterprise_id}/issues/{issue_id}/link_pull_request | 获取任务关联的 Pull Request
[**getEnterpriseIdIssuesIssueIdNotes**](IssuesApi.md#getEnterpriseIdIssuesIssueIdNotes) | **GET** /{enterprise_id}/issues/{issue_id}/notes | 获取任务下的评论列表
[**getEnterpriseIdIssuesIssueIdOperateLogs**](IssuesApi.md#getEnterpriseIdIssuesIssueIdOperateLogs) | **GET** /{enterprise_id}/issues/{issue_id}/operate_logs | 获取任务的操作日志列表
[**getEnterpriseIdIssuesIssueIdProgramGanttIssues**](IssuesApi.md#getEnterpriseIdIssuesIssueIdProgramGanttIssues) | **GET** /{enterprise_id}/issues/{issue_id}/program_gantt_issues | 查询指定工作项所在项目的工作项列表
[**getEnterpriseIdIssuesIssueStats**](IssuesApi.md#getEnterpriseIdIssuesIssueStats) | **GET** /{enterprise_id}/issues/issue_stats | 获取企业下用户任务相关数量数据
[**getEnterpriseIdIssuesLinkIssues**](IssuesApi.md#getEnterpriseIdIssuesLinkIssues) | **GET** /{enterprise_id}/issues/link_issues | 可选的关联任务集
[**getEnterpriseIdIssuesMemberSelect**](IssuesApi.md#getEnterpriseIdIssuesMemberSelect) | **GET** /{enterprise_id}/issues/member_select | 获取任务指派的成员列表
[**postEnterpriseIdIssues**](IssuesApi.md#postEnterpriseIdIssues) | **POST** /{enterprise_id}/issues | 新建任务
[**postEnterpriseIdIssuesFilter**](IssuesApi.md#postEnterpriseIdIssuesFilter) | **POST** /{enterprise_id}/issues/filter | 获取任务列表-筛选器查询
[**postEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId**](IssuesApi.md#postEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId) | **POST** /{enterprise_id}/issues/{issue_id}/link_pull_request/{pull_request_id} | 任务关联 Pull Request
[**postEnterpriseIdIssuesIssueIdMultiLinkIssues**](IssuesApi.md#postEnterpriseIdIssuesIssueIdMultiLinkIssues) | **POST** /{enterprise_id}/issues/{issue_id}/multi_link_issues | 给指定工作项批量更新关联工作项
[**postEnterpriseIdIssuesIssueIdNotes**](IssuesApi.md#postEnterpriseIdIssuesIssueIdNotes) | **POST** /{enterprise_id}/issues/{issue_id}/notes | 评论任务
[**postEnterpriseIdIssuesIssueIdReaction**](IssuesApi.md#postEnterpriseIdIssuesIssueIdReaction) | **POST** /{enterprise_id}/issues/{issue_id}/reaction | 新增任务表态
[**postEnterpriseIdIssuesIssueIdRelatedIssue**](IssuesApi.md#postEnterpriseIdIssuesIssueIdRelatedIssue) | **POST** /{enterprise_id}/issues/{issue_id}/related_issue | 为指定任务添加关联任务
[**postEnterpriseIdIssuesIssueIdStar**](IssuesApi.md#postEnterpriseIdIssuesIssueIdStar) | **POST** /{enterprise_id}/issues/{issue_id}/star | 星标任务
[**putEnterpriseIdIssuesIssueId**](IssuesApi.md#putEnterpriseIdIssuesIssueId) | **PUT** /{enterprise_id}/issues/{issue_id} | 更新任务
[**putEnterpriseIdIssuesIssueIdNotesNoteId**](IssuesApi.md#putEnterpriseIdIssuesIssueIdNotesNoteId) | **PUT** /{enterprise_id}/issues/{issue_id}/notes/{note_id} | 修改任务下的评论
[**putEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId**](IssuesApi.md#putEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId) | **PUT** /{enterprise_id}/issues/{issue_id}/related_issue/{link_issue_id} | 更新任务的关联关系


# **deleteEnterpriseIdIssuesIssueId**
> deleteEnterpriseIdIssuesIssueId($enterpriseId, $issueId, $accessToken)

删除任务

删除任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssuesIssueId($enterpriseId, $issueId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->deleteEnterpriseIdIssuesIssueId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdIssuesIssueIdAttachFilesAttachFileId**
> deleteEnterpriseIdIssuesIssueIdAttachFilesAttachFileId($enterpriseId, $issueId, $attachFileId, $accessToken)

删除任务附件

删除任务附件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务的 id
$attachFileId = 56; // int | 附件 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssuesIssueIdAttachFilesAttachFileId($enterpriseId, $issueId, $attachFileId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->deleteEnterpriseIdIssuesIssueIdAttachFilesAttachFileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务的 id |
 **attachFileId** | **int**| 附件 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId**
> deleteEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId($enterpriseId, $issueId, $pullRequestId, $accessToken)

解除任务与 Pull Request 的关联

解除任务与 Pull Request 的关联

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$pullRequestId = 56; // int | Pull Request id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId($enterpriseId, $issueId, $pullRequestId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->deleteEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **pullRequestId** | **int**| Pull Request id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdIssuesIssueIdNotesNoteId**
> deleteEnterpriseIdIssuesIssueIdNotesNoteId($enterpriseId, $issueId, $noteId, $accessToken)

删除某任务下评论

删除某任务下评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$noteId = 56; // int | 评论的 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssuesIssueIdNotesNoteId($enterpriseId, $issueId, $noteId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->deleteEnterpriseIdIssuesIssueIdNotesNoteId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **noteId** | **int**| 评论的 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId**
> deleteEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId($enterpriseId, $issueId, $linkIssueId, $accessToken)

移除任务的关联关系

移除任务的关联关系

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$linkIssueId = 56; // int | 待删除的关联的任务id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId($enterpriseId, $issueId, $linkIssueId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->deleteEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **linkIssueId** | **int**| 待删除的关联的任务id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdIssuesIssueIdStar**
> deleteEnterpriseIdIssuesIssueIdStar($enterpriseId, $issueId, $accessToken)

取消星标任务

取消星标任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdIssuesIssueIdStar($enterpriseId, $issueId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->deleteEnterpriseIdIssuesIssueIdStar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssues**
> \GiteeEnterprise\Model\WithWorkload[] getEnterpriseIdIssues($enterpriseId, $accessToken, $projectId, $programId, $milestoneId, $state, $onlyRelatedMe, $assigneeId, $authorId, $collaboratorIds, $createdAt, $finishedAt, $planStartedAt, $deadline, $search, $filterChild, $issueStateIds, $issueTypeId, $labelIds, $priority, $scrumSprintIds, $scrumVersionIds, $kanbanIds, $kanbanColumnIds, $sort, $direction, $page, $perPage)

获取任务列表

获取任务列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业 id
$accessToken = "accessToken_example"; // string | 用户授权码
$projectId = "projectId_example"; // string | 仓库 id
$programId = "programId_example"; // string | 项目 id（可多选，用英文逗号分隔）
$milestoneId = "milestoneId_example"; // string | 里程碑 id（可多选，用英文逗号分隔）
$state = "state_example"; // string | 任务状态属性，可多选，用逗号分隔。（开启：open 关闭：closed 拒绝：rejected 进行中: progressing）
$onlyRelatedMe = "onlyRelatedMe_example"; // string | 是否仅列出与授权用户相关的任务（0: 否 1: 是）
$assigneeId = "assigneeId_example"; // string | 负责人 id
$authorId = "authorId_example"; // string | 创建者 id
$collaboratorIds = "collaboratorIds_example"; // string | 协作者。(,分隔的id字符串)
$createdAt = "createdAt_example"; // string | 创建时间，格式：(区间)yyyymmddTHH:MM:SS+08:00-yyyymmddTHH:MM:SS+08:00，（指定某日期）yyyymmddTHH:MM:SS+08:00，（小于指定日期）<yyyymmddTHH:MM:SS+08:00，（大于指定日期）>yyyymmddTHH:MM:SS+08:00
$finishedAt = "finishedAt_example"; // string | 任务完成日期，格式同上
$planStartedAt = "planStartedAt_example"; // string | 计划开始时间，(格式：yyyy-mm-dd)
$deadline = "deadline_example"; // string | 任务截止日期，(格式：yyyy-mm-dd)
$search = "search_example"; // string | 搜索参数
$filterChild = "filterChild_example"; // string | 是否过滤子任务(0: 否, 1: 是)
$issueStateIds = "issueStateIds_example"; // string | 任务状态id，多选，用英文逗号分隔。
$issueTypeId = "issueTypeId_example"; // string | 任务类型
$labelIds = "labelIds_example"; // string | 标签 id（可多选，用英文逗号分隔）
$priority = "priority_example"; // string | 优先级（可多选，用英文逗号分隔）
$scrumSprintIds = "scrumSprintIds_example"; // string | 迭代id(可多选，用英文逗号分隔)
$scrumVersionIds = "scrumVersionIds_example"; // string | 版本id(可多选，用英文逗号分隔)
$kanbanIds = "kanbanIds_example"; // string | 看板id(可多选，用英文逗号分隔)
$kanbanColumnIds = "kanbanColumnIds_example"; // string | 看板栏id(可多选，用英文逗号分隔)
$sort = "sort_example"; // string | 排序字段(created_at、updated_at、deadline、priority)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssues($enterpriseId, $accessToken, $projectId, $programId, $milestoneId, $state, $onlyRelatedMe, $assigneeId, $authorId, $collaboratorIds, $createdAt, $finishedAt, $planStartedAt, $deadline, $search, $filterChild, $issueStateIds, $issueTypeId, $labelIds, $priority, $scrumSprintIds, $scrumVersionIds, $kanbanIds, $kanbanColumnIds, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **projectId** | **string**| 仓库 id | [optional]
 **programId** | **string**| 项目 id（可多选，用英文逗号分隔） | [optional]
 **milestoneId** | **string**| 里程碑 id（可多选，用英文逗号分隔） | [optional]
 **state** | **string**| 任务状态属性，可多选，用逗号分隔。（开启：open 关闭：closed 拒绝：rejected 进行中: progressing） | [optional]
 **onlyRelatedMe** | **string**| 是否仅列出与授权用户相关的任务（0: 否 1: 是） | [optional]
 **assigneeId** | **string**| 负责人 id | [optional]
 **authorId** | **string**| 创建者 id | [optional]
 **collaboratorIds** | **string**| 协作者。(,分隔的id字符串) | [optional]
 **createdAt** | **string**| 创建时间，格式：(区间)yyyymmddTHH:MM:SS+08:00-yyyymmddTHH:MM:SS+08:00，（指定某日期）yyyymmddTHH:MM:SS+08:00，（小于指定日期）&lt;yyyymmddTHH:MM:SS+08:00，（大于指定日期）&gt;yyyymmddTHH:MM:SS+08:00 | [optional]
 **finishedAt** | **string**| 任务完成日期，格式同上 | [optional]
 **planStartedAt** | **string**| 计划开始时间，(格式：yyyy-mm-dd) | [optional]
 **deadline** | **string**| 任务截止日期，(格式：yyyy-mm-dd) | [optional]
 **search** | **string**| 搜索参数 | [optional]
 **filterChild** | **string**| 是否过滤子任务(0: 否, 1: 是) | [optional]
 **issueStateIds** | **string**| 任务状态id，多选，用英文逗号分隔。 | [optional]
 **issueTypeId** | **string**| 任务类型 | [optional]
 **labelIds** | **string**| 标签 id（可多选，用英文逗号分隔） | [optional]
 **priority** | **string**| 优先级（可多选，用英文逗号分隔） | [optional]
 **scrumSprintIds** | **string**| 迭代id(可多选，用英文逗号分隔) | [optional]
 **scrumVersionIds** | **string**| 版本id(可多选，用英文逗号分隔) | [optional]
 **kanbanIds** | **string**| 看板id(可多选，用英文逗号分隔) | [optional]
 **kanbanColumnIds** | **string**| 看板栏id(可多选，用英文逗号分隔) | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at、deadline、priority) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\WithWorkload[]**](../Model/WithWorkload.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesAttachFileIssues**
> \GiteeEnterprise\Model\WithAttachFiles[] getEnterpriseIdIssuesAttachFileIssues($enterpriseId, $accessToken, $page, $perPage, $programId, $search)

显示全部有附件的issue

显示全部有附件的issue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$programId = 56; // int | 所在项目
$search = "search_example"; // string | #号开头搜索ident,否则搜索title

try {
    $result = $apiInstance->getEnterpriseIdIssuesAttachFileIssues($enterpriseId, $accessToken, $page, $perPage, $programId, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesAttachFileIssues: ', $e->getMessage(), PHP_EOL;
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
 **programId** | **int**| 所在项目 | [optional]
 **search** | **string**| #号开头搜索ident,否则搜索title | [optional]

### Return type

[**\GiteeEnterprise\Model\WithAttachFiles[]**](../Model/WithAttachFiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesBoardMembers**
> \GiteeEnterprise\Model\UserWithRemark[] getEnterpriseIdIssuesBoardMembers($enterpriseId, $accessToken, $assigneeIds, $projectId, $groupIds, $programId, $milestoneId, $issueTypeId, $page, $perPage)

获取成员看板的成员列表

获取成员看板的成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业ID
$accessToken = "accessToken_example"; // string | 用户授权码
$assigneeIds = "assigneeIds_example"; // string | 以,分隔的负责人ID字符串, 如: 23,12
$projectId = 56; // int | 仓库ID
$groupIds = "groupIds_example"; // string | 以,分隔的组织ID字符串
$programId = 56; // int | 项目ID
$milestoneId = 56; // int | 里程碑ID
$issueTypeId = 56; // int | 任务类型ID
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssuesBoardMembers($enterpriseId, $accessToken, $assigneeIds, $projectId, $groupIds, $programId, $milestoneId, $issueTypeId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesBoardMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **assigneeIds** | **string**| 以,分隔的负责人ID字符串, 如: 23,12 | [optional]
 **projectId** | **int**| 仓库ID | [optional]
 **groupIds** | **string**| 以,分隔的组织ID字符串 | [optional]
 **programId** | **int**| 项目ID | [optional]
 **milestoneId** | **int**| 里程碑ID | [optional]
 **issueTypeId** | **int**| 任务类型ID | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\UserWithRemark[]**](../Model/UserWithRemark.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueId**
> \GiteeEnterprise\Model\IssueDetail getEnterpriseIdIssuesIssueId($enterpriseId, $issueId, $accessToken, $qt)

获取任务详情

获取任务详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务的 id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | 查询方式(ident/id)

try {
    $result = $apiInstance->getEnterpriseIdIssuesIssueId($enterpriseId, $issueId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务的 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| 查询方式(ident/id) | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueDetail**](../Model/IssueDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueIdAttachFiles**
> \GiteeEnterprise\Model\AttachFile[] getEnterpriseIdIssuesIssueIdAttachFiles($enterpriseId, $issueId, $accessToken)

获取任务附件

获取任务附件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务的 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdIssuesIssueIdAttachFiles($enterpriseId, $issueId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdAttachFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务的 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\AttachFile[]**](../Model/AttachFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueIdAuths**
> \GiteeEnterprise\Model\IssueAuth getEnterpriseIdIssuesIssueIdAuths($enterpriseId, $issueId, $accessToken)

获取授权用户对任务的权限

获取授权用户对任务的权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务的 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdIssuesIssueIdAuths($enterpriseId, $issueId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdAuths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务的 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueAuth**](../Model/IssueAuth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueIdIssueScheduleUpdateCheck**
> getEnterpriseIdIssuesIssueIdIssueScheduleUpdateCheck($enterpriseId, $issueId, $planStartedAt, $deadline, $accessToken)

查询当前工作项的排期是否可以更新

查询当前工作项的排期是否可以更新

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = 56; // int | 工作项 id
$planStartedAt = "planStartedAt_example"; // string | 计划开始日期。格式：yyyy-mm-ddTHH:MM:SS
$deadline = "deadline_example"; // string | 计划完成日期。格式：yyyy-mm-ddTHH:MM:SS
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdIssuesIssueIdIssueScheduleUpdateCheck($enterpriseId, $issueId, $planStartedAt, $deadline, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdIssueScheduleUpdateCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **int**| 工作项 id |
 **planStartedAt** | **string**| 计划开始日期。格式：yyyy-mm-ddTHH:MM:SS |
 **deadline** | **string**| 计划完成日期。格式：yyyy-mm-ddTHH:MM:SS |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueIdIssueStates**
> \GiteeEnterprise\Model\IssueTypeStateRef getEnterpriseIdIssuesIssueIdIssueStates($enterpriseId, $issueId, $accessToken)

获取当前任务可流转的下一状态

获取当前任务可流转的下一状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务的 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdIssuesIssueIdIssueStates($enterpriseId, $issueId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdIssueStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务的 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueTypeStateRef**](../Model/IssueTypeStateRef.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueIdLinkIssues**
> \GiteeEnterprise\Model\LinkIssue getEnterpriseIdIssuesIssueIdLinkIssues($enterpriseId, $issueId, $accessToken, $direction, $page, $perPage)

获取任务的关联任务

获取任务的关联任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$accessToken = "accessToken_example"; // string | 用户授权码
$direction = "direction_example"; // string | 关联顺序(none -> 普通, pre -> 紧前, latter -> 紧后)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssuesIssueIdLinkIssues($enterpriseId, $issueId, $accessToken, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdLinkIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **direction** | **string**| 关联顺序(none -&gt; 普通, pre -&gt; 紧前, latter -&gt; 紧后) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\LinkIssue**](../Model/LinkIssue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueIdLinkPullRequest**
> getEnterpriseIdIssuesIssueIdLinkPullRequest($enterpriseId, $issueId, $accessToken, $page, $perPage)

获取任务关联的 Pull Request

获取任务关联的 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $apiInstance->getEnterpriseIdIssuesIssueIdLinkPullRequest($enterpriseId, $issueId, $accessToken, $page, $perPage);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdLinkPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **accessToken** | **string**| 用户授权码 | [optional]
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

# **getEnterpriseIdIssuesIssueIdNotes**
> \GiteeEnterprise\Model\IssueNote[] getEnterpriseIdIssuesIssueIdNotes($enterpriseId, $issueId, $accessToken, $sort, $direction, $page, $perPage)

获取任务下的评论列表

获取任务下的评论列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(name || created_at)
$direction = "desc"; // string | 可选。升序/降序
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssuesIssueIdNotes($enterpriseId, $issueId, $accessToken, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(name || created_at) | [optional]
 **direction** | **string**| 可选。升序/降序 | [optional] [default to desc]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueNote[]**](../Model/IssueNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueIdOperateLogs**
> \GiteeEnterprise\Model\IssueOperateLog getEnterpriseIdIssuesIssueIdOperateLogs($enterpriseId, $issueId, $accessToken, $prevId, $lastId, $limit)

获取任务的操作日志列表

获取任务的操作日志列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务的 id
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 前一个日志 id, 用作分页
$lastId = 56; // int | 后一个日志 id, 用作分页
$limit = 56; // int | 限制多少个日志记录

try {
    $result = $apiInstance->getEnterpriseIdIssuesIssueIdOperateLogs($enterpriseId, $issueId, $accessToken, $prevId, $lastId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdOperateLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务的 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 前一个日志 id, 用作分页 | [optional]
 **lastId** | **int**| 后一个日志 id, 用作分页 | [optional]
 **limit** | **int**| 限制多少个日志记录 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueOperateLog**](../Model/IssueOperateLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueIdProgramGanttIssues**
> \GiteeEnterprise\Model\IssueGantt[] getEnterpriseIdIssuesIssueIdProgramGanttIssues($enterpriseId, $issueId, $programId, $accessToken, $milestoneId, $state, $onlyRelatedMe, $assigneeId, $authorId, $collaboratorIds, $createdAt, $finishedAt, $planStartedAt, $deadline, $search, $filterChild, $issueStateIds, $issueTypeId, $labelIds, $priority, $scrumSprintIds, $scrumVersionIds, $kanbanIds, $kanbanColumnIds, $rootId, $parentId, $page, $perPage)

查询指定工作项所在项目的工作项列表

查询指定工作项所在项目的工作项列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业 id
$issueId = 56; // int | 工作项 id
$programId = "programId_example"; // string | 项目ID
$accessToken = "accessToken_example"; // string | 用户授权码
$milestoneId = "milestoneId_example"; // string | 里程碑 id（可多选，用英文逗号分隔）
$state = "state_example"; // string | 任务状态属性，可多选，用逗号分隔。（开启：open 关闭：closed 拒绝：rejected 进行中: progressing）
$onlyRelatedMe = "onlyRelatedMe_example"; // string | 是否仅列出与授权用户相关的任务（0: 否 1: 是）
$assigneeId = "assigneeId_example"; // string | 负责人 id
$authorId = "authorId_example"; // string | 创建者 id
$collaboratorIds = "collaboratorIds_example"; // string | 协作者。(,分隔的id字符串)
$createdAt = "createdAt_example"; // string | 创建时间，格式：(区间)yyyymmddTHH:MM:SS+08:00-yyyymmddTHH:MM:SS+08:00，（指定某日期）yyyymmddTHH:MM:SS+08:00，（小于指定日期）<yyyymmddTHH:MM:SS+08:00，（大于指定日期）>yyyymmddTHH:MM:SS+08:00
$finishedAt = "finishedAt_example"; // string | 任务完成日期，格式同上
$planStartedAt = "planStartedAt_example"; // string | 计划开始时间，(格式：yyyy-mm-dd)
$deadline = "deadline_example"; // string | 任务截止日期，(格式：yyyy-mm-dd)
$search = "search_example"; // string | 搜索参数
$filterChild = "filterChild_example"; // string | 是否过滤子任务(0: 否, 1: 是)
$issueStateIds = "issueStateIds_example"; // string | 任务状态id，多选，用英文逗号分隔。
$issueTypeId = "issueTypeId_example"; // string | 任务类型
$labelIds = "labelIds_example"; // string | 标签 id（可多选，用英文逗号分隔）
$priority = "priority_example"; // string | 优先级（可多选，用英文逗号分隔）
$scrumSprintIds = "scrumSprintIds_example"; // string | 迭代id(可多选，用英文逗号分隔)
$scrumVersionIds = "scrumVersionIds_example"; // string | 版本id(可多选，用英文逗号分隔)
$kanbanIds = "kanbanIds_example"; // string | 看板id(可多选，用英文逗号分隔)
$kanbanColumnIds = "kanbanColumnIds_example"; // string | 看板栏id(可多选，用英文逗号分隔)
$rootId = 56; // int | 根结点ID
$parentId = 56; // int | 父任务ID
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssuesIssueIdProgramGanttIssues($enterpriseId, $issueId, $programId, $accessToken, $milestoneId, $state, $onlyRelatedMe, $assigneeId, $authorId, $collaboratorIds, $createdAt, $finishedAt, $planStartedAt, $deadline, $search, $filterChild, $issueStateIds, $issueTypeId, $labelIds, $priority, $scrumSprintIds, $scrumVersionIds, $kanbanIds, $kanbanColumnIds, $rootId, $parentId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueIdProgramGanttIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业 id |
 **issueId** | **int**| 工作项 id |
 **programId** | **string**| 项目ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **milestoneId** | **string**| 里程碑 id（可多选，用英文逗号分隔） | [optional]
 **state** | **string**| 任务状态属性，可多选，用逗号分隔。（开启：open 关闭：closed 拒绝：rejected 进行中: progressing） | [optional]
 **onlyRelatedMe** | **string**| 是否仅列出与授权用户相关的任务（0: 否 1: 是） | [optional]
 **assigneeId** | **string**| 负责人 id | [optional]
 **authorId** | **string**| 创建者 id | [optional]
 **collaboratorIds** | **string**| 协作者。(,分隔的id字符串) | [optional]
 **createdAt** | **string**| 创建时间，格式：(区间)yyyymmddTHH:MM:SS+08:00-yyyymmddTHH:MM:SS+08:00，（指定某日期）yyyymmddTHH:MM:SS+08:00，（小于指定日期）&lt;yyyymmddTHH:MM:SS+08:00，（大于指定日期）&gt;yyyymmddTHH:MM:SS+08:00 | [optional]
 **finishedAt** | **string**| 任务完成日期，格式同上 | [optional]
 **planStartedAt** | **string**| 计划开始时间，(格式：yyyy-mm-dd) | [optional]
 **deadline** | **string**| 任务截止日期，(格式：yyyy-mm-dd) | [optional]
 **search** | **string**| 搜索参数 | [optional]
 **filterChild** | **string**| 是否过滤子任务(0: 否, 1: 是) | [optional]
 **issueStateIds** | **string**| 任务状态id，多选，用英文逗号分隔。 | [optional]
 **issueTypeId** | **string**| 任务类型 | [optional]
 **labelIds** | **string**| 标签 id（可多选，用英文逗号分隔） | [optional]
 **priority** | **string**| 优先级（可多选，用英文逗号分隔） | [optional]
 **scrumSprintIds** | **string**| 迭代id(可多选，用英文逗号分隔) | [optional]
 **scrumVersionIds** | **string**| 版本id(可多选，用英文逗号分隔) | [optional]
 **kanbanIds** | **string**| 看板id(可多选，用英文逗号分隔) | [optional]
 **kanbanColumnIds** | **string**| 看板栏id(可多选，用英文逗号分隔) | [optional]
 **rootId** | **int**| 根结点ID | [optional]
 **parentId** | **int**| 父任务ID | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueGantt[]**](../Model/IssueGantt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesIssueStats**
> getEnterpriseIdIssuesIssueStats($enterpriseId, $accessToken)

获取企业下用户任务相关数量数据

获取企业下用户任务相关数量数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdIssuesIssueStats($enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesIssueStats: ', $e->getMessage(), PHP_EOL;
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

# **getEnterpriseIdIssuesLinkIssues**
> \GiteeEnterprise\Model\Issue[] getEnterpriseIdIssuesLinkIssues($enterpriseId, $accessToken, $issueId, $programId, $search, $issueTypeCategory, $page, $perPage)

可选的关联任务集

可选的关联任务集

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$issueId = 56; // int | 任务 id
$programId = 56; // int | 项目 id
$search = "search_example"; // string | 搜索关键字
$issueTypeCategory = "issueTypeCategory_example"; // string | 以英文逗号分隔的类型，类型可取值枚举：task、bug、requirement
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdIssuesLinkIssues($enterpriseId, $accessToken, $issueId, $programId, $search, $issueTypeCategory, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesLinkIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **issueId** | **int**| 任务 id | [optional]
 **programId** | **int**| 项目 id | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **issueTypeCategory** | **string**| 以英文逗号分隔的类型，类型可取值枚举：task、bug、requirement | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdIssuesMemberSelect**
> \GiteeEnterprise\Model\IssueMemberSelect[] getEnterpriseIdIssuesMemberSelect($enterpriseId, $accessToken, $programId, $projectId, $issueId)

获取任务指派的成员列表

获取任务指派的成员列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = "programId_example"; // string | 项目 ID
$projectId = "projectId_example"; // string | 仓库 ID
$issueId = 56; // int | 工作项 ID

try {
    $result = $apiInstance->getEnterpriseIdIssuesMemberSelect($enterpriseId, $accessToken, $programId, $projectId, $issueId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getEnterpriseIdIssuesMemberSelect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **string**| 项目 ID | [optional]
 **projectId** | **string**| 仓库 ID | [optional]
 **issueId** | **int**| 工作项 ID | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueMemberSelect[]**](../Model/IssueMemberSelect.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssues**
> \GiteeEnterprise\Model\IssueDetail postEnterpriseIdIssues($enterpriseId, $title, $accessToken, $copiedIssueId, $description, $assigneeId, $collaboratorIds, $issueTypeId, $programId, $projectId, $milestoneId, $labelIds, $priority, $parentId, $branch, $planStartedAt, $deadline, $startedAt, $finishedAt, $attachmentIds, $securityHole, $extraFieldsIssueFieldId, $extraFieldsValue, $kanbanId, $kanbanColumnId, $scrumSprintId, $scrumVersionId, $estimatedDuration, $duration, $testPlanCaseId, $pullRequestId, $category, $linkIssueId, $linkRefType, $linkDirection, $linkResultType, $linkDocNodeId)

新建任务

新建任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$title = "title_example"; // string | 任务标题
$accessToken = "accessToken_example"; // string | 用户授权码
$copiedIssueId = 56; // int | 任务复制的源任务 ID
$description = "description_example"; // string | 任务内容
$assigneeId = 56; // int | 负责人的 user id
$collaboratorIds = "collaboratorIds_example"; // string | 协作者的 user id，如有多个请用英文逗号分割。eg: 1,2,3
$issueTypeId = 56; // int | 任务类型的 id
$programId = 56; // int | 关联项目的 id
$projectId = 56; // int | 关联仓库的 id
$milestoneId = 56; // int | 关联里程碑的 id
$labelIds = "labelIds_example"; // string | 关联标签的 id，如有多个请用英文逗号分割。eg: 1,2,3
$priority = 56; // int | 优先级(0: 不指定 1: 不重要 2: 次要 3: 主要 4: 严重)
$parentId = 56; // int | 父级任务的 id
$branch = "branch_example"; // string | 关联分支的名称
$planStartedAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 计划开始日期。格式：yyyy-mm-ddTHH:MM:SS
$deadline = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 计划完成日期。格式：yyyy-mm-ddTHH:MM:SS
$startedAt = "startedAt_example"; // string | 实际开始时间。格式：yyyy-mm-ddTHH:MM:SS
$finishedAt = "finishedAt_example"; // string | 实际完成时间。格式：yyyy-mm-ddTHH:MM:SS
$attachmentIds = "attachmentIds_example"; // string | 附件id，如有多个请用英文逗号分割。eg: 1,2,3
$securityHole = 56; // int | 是否是私有issue, 0:否，1:是
$extraFieldsIssueFieldId = array(56); // int[] | 任务字段 id
$extraFieldsValue = array("extraFieldsValue_example"); // string[] | 自定义字段的值（options类型的字段传对应选项的id，使用 , 隔开，如\"1,2,3\"）
$kanbanId = 56; // int | 看板ID
$kanbanColumnId = 56; // int | 看板的栏ID
$scrumSprintId = 56; // int | 迭代ID
$scrumVersionId = 56; // int | 版本ID
$estimatedDuration = 3.4; // float | 预估工时(单位：小时， 支持两位小数)
$duration = 56; // int | 预估工时。（单位：分钟）
$testPlanCaseId = "testPlanCaseId_example"; // string | 用例ID
$pullRequestId = 56; // int | PullRequest ID
$category = "category_example"; // string | 任务类型属性
$linkIssueId = 56; // int | 需要关联的任务 id
$linkRefType = "linkRefType_example"; // string | 关联关系(normal, finish_to_finish, finish_to_start, start_to_start, start_to_finish)
$linkDirection = "linkDirection_example"; // string | 关联关系的方向(none, pre, latter)
$linkResultType = "linkResultType_example"; // string | 返回结果类型：包括issue, dependence
$linkDocNodeId = 56; // int | 需要关联的文档 id

try {
    $result = $apiInstance->postEnterpriseIdIssues($enterpriseId, $title, $accessToken, $copiedIssueId, $description, $assigneeId, $collaboratorIds, $issueTypeId, $programId, $projectId, $milestoneId, $labelIds, $priority, $parentId, $branch, $planStartedAt, $deadline, $startedAt, $finishedAt, $attachmentIds, $securityHole, $extraFieldsIssueFieldId, $extraFieldsValue, $kanbanId, $kanbanColumnId, $scrumSprintId, $scrumVersionId, $estimatedDuration, $duration, $testPlanCaseId, $pullRequestId, $category, $linkIssueId, $linkRefType, $linkDirection, $linkResultType, $linkDocNodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postEnterpriseIdIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **title** | **string**| 任务标题 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **copiedIssueId** | **int**| 任务复制的源任务 ID | [optional]
 **description** | **string**| 任务内容 | [optional]
 **assigneeId** | **int**| 负责人的 user id | [optional]
 **collaboratorIds** | **string**| 协作者的 user id，如有多个请用英文逗号分割。eg: 1,2,3 | [optional]
 **issueTypeId** | **int**| 任务类型的 id | [optional]
 **programId** | **int**| 关联项目的 id | [optional]
 **projectId** | **int**| 关联仓库的 id | [optional]
 **milestoneId** | **int**| 关联里程碑的 id | [optional]
 **labelIds** | **string**| 关联标签的 id，如有多个请用英文逗号分割。eg: 1,2,3 | [optional]
 **priority** | **int**| 优先级(0: 不指定 1: 不重要 2: 次要 3: 主要 4: 严重) | [optional]
 **parentId** | **int**| 父级任务的 id | [optional]
 **branch** | **string**| 关联分支的名称 | [optional]
 **planStartedAt** | **\DateTime**| 计划开始日期。格式：yyyy-mm-ddTHH:MM:SS | [optional]
 **deadline** | **\DateTime**| 计划完成日期。格式：yyyy-mm-ddTHH:MM:SS | [optional]
 **startedAt** | **string**| 实际开始时间。格式：yyyy-mm-ddTHH:MM:SS | [optional]
 **finishedAt** | **string**| 实际完成时间。格式：yyyy-mm-ddTHH:MM:SS | [optional]
 **attachmentIds** | **string**| 附件id，如有多个请用英文逗号分割。eg: 1,2,3 | [optional]
 **securityHole** | **int**| 是否是私有issue, 0:否，1:是 | [optional]
 **extraFieldsIssueFieldId** | [**int[]**](../Model/int.md)| 任务字段 id | [optional]
 **extraFieldsValue** | [**string[]**](../Model/string.md)| 自定义字段的值（options类型的字段传对应选项的id，使用 , 隔开，如\&quot;1,2,3\&quot;） | [optional]
 **kanbanId** | **int**| 看板ID | [optional]
 **kanbanColumnId** | **int**| 看板的栏ID | [optional]
 **scrumSprintId** | **int**| 迭代ID | [optional]
 **scrumVersionId** | **int**| 版本ID | [optional]
 **estimatedDuration** | **float**| 预估工时(单位：小时， 支持两位小数) | [optional]
 **duration** | **int**| 预估工时。（单位：分钟） | [optional]
 **testPlanCaseId** | **string**| 用例ID | [optional]
 **pullRequestId** | **int**| PullRequest ID | [optional]
 **category** | **string**| 任务类型属性 | [optional]
 **linkIssueId** | **int**| 需要关联的任务 id | [optional]
 **linkRefType** | **string**| 关联关系(normal, finish_to_finish, finish_to_start, start_to_start, start_to_finish) | [optional]
 **linkDirection** | **string**| 关联关系的方向(none, pre, latter) | [optional]
 **linkResultType** | **string**| 返回结果类型：包括issue, dependence | [optional]
 **linkDocNodeId** | **int**| 需要关联的文档 id | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueDetail**](../Model/IssueDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssuesFilter**
> \GiteeEnterprise\Model\Issue[] postEnterpriseIdIssuesFilter($filterConditionsProperty, $enterpriseId, $accessToken, $kanbanColumnIds, $filterId, $filterConditionsComparator, $filterConditionsValue, $filterConditionsIssueFieldType, $filterConditionsIssueFieldId, $priorityFiltersIssueType, $priorityFiltersIssueState, $priorityFiltersIssueAssignee, $priorityFiltersIssueLabel, $search, $sort, $direction, $issueTypeCategory, $page, $perPage)

获取任务列表-筛选器查询

获取任务列表-筛选器查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filterConditionsProperty = array("filterConditionsProperty_example"); // string[] | 筛选类型
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$kanbanColumnIds = "kanbanColumnIds_example"; // string | 看板栏id(可多选，用英文逗号分隔)
$filterId = 56; // int | 筛选器id
$filterConditionsComparator = array("filterConditionsComparator_example"); // string[] | 比较符
$filterConditionsValue = array("filterConditionsValue_example"); // string[] | 值
$filterConditionsIssueFieldType = array("filterConditionsIssueFieldType_example"); // string[] | 自定义字段值类型
$filterConditionsIssueFieldId = array(56); // int[] | 自定义字段id
$priorityFiltersIssueType = "priorityFiltersIssueType_example"; // string | 任务类型
$priorityFiltersIssueState = "priorityFiltersIssueState_example"; // string | 任务状态
$priorityFiltersIssueAssignee = "priorityFiltersIssueAssignee_example"; // string | 任务负责人
$priorityFiltersIssueLabel = "priorityFiltersIssueLabel_example"; // string | 任务标签
$search = "search_example"; // string | 搜索关键字
$sort = "sort_example"; // string | 排序字段(created_at、updated_at、deadline、priority)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$issueTypeCategory = "issueTypeCategory_example"; // string | 任务类型属性
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->postEnterpriseIdIssuesFilter($filterConditionsProperty, $enterpriseId, $accessToken, $kanbanColumnIds, $filterId, $filterConditionsComparator, $filterConditionsValue, $filterConditionsIssueFieldType, $filterConditionsIssueFieldId, $priorityFiltersIssueType, $priorityFiltersIssueState, $priorityFiltersIssueAssignee, $priorityFiltersIssueLabel, $search, $sort, $direction, $issueTypeCategory, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postEnterpriseIdIssuesFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filterConditionsProperty** | [**string[]**](../Model/string.md)| 筛选类型 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **kanbanColumnIds** | **string**| 看板栏id(可多选，用英文逗号分隔) | [optional]
 **filterId** | **int**| 筛选器id | [optional]
 **filterConditionsComparator** | [**string[]**](../Model/string.md)| 比较符 | [optional]
 **filterConditionsValue** | [**string[]**](../Model/string.md)| 值 | [optional]
 **filterConditionsIssueFieldType** | [**string[]**](../Model/string.md)| 自定义字段值类型 | [optional]
 **filterConditionsIssueFieldId** | [**int[]**](../Model/int.md)| 自定义字段id | [optional]
 **priorityFiltersIssueType** | **string**| 任务类型 | [optional]
 **priorityFiltersIssueState** | **string**| 任务状态 | [optional]
 **priorityFiltersIssueAssignee** | **string**| 任务负责人 | [optional]
 **priorityFiltersIssueLabel** | **string**| 任务标签 | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at、deadline、priority) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **issueTypeCategory** | **string**| 任务类型属性 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId**
> postEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId($enterpriseId, $issueId, $pullRequestId, $accessToken)

任务关联 Pull Request

任务关联 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$pullRequestId = 56; // int | Pull Request id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId($enterpriseId, $issueId, $pullRequestId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postEnterpriseIdIssuesIssueIdLinkPullRequestPullRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **pullRequestId** | **int**| Pull Request id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssuesIssueIdMultiLinkIssues**
> postEnterpriseIdIssuesIssueIdMultiLinkIssues($enterpriseId, $issueId, $linkIssueIds, $refType, $direction, $accessToken)

给指定工作项批量更新关联工作项

给指定工作项批量更新关联工作项

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = 56; // int | 工作项 id
$linkIssueIds = array(56); // int[] | 关联工作项的ID列表,例如[1,2,3]
$refType = "refType_example"; // string | 关联关系(normal, finish_to_finish, finish_to_start, start_to_start, start_to_finish)
$direction = "direction_example"; // string | 关联关系的方向(none, pre, latter)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postEnterpriseIdIssuesIssueIdMultiLinkIssues($enterpriseId, $issueId, $linkIssueIds, $refType, $direction, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postEnterpriseIdIssuesIssueIdMultiLinkIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **int**| 工作项 id |
 **linkIssueIds** | [**int[]**](../Model/int.md)| 关联工作项的ID列表,例如[1,2,3] |
 **refType** | **string**| 关联关系(normal, finish_to_finish, finish_to_start, start_to_start, start_to_finish) |
 **direction** | **string**| 关联关系的方向(none, pre, latter) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssuesIssueIdNotes**
> \GiteeEnterprise\Model\IssueNote postEnterpriseIdIssuesIssueIdNotes($enterpriseId, $issueId, $body, $accessToken)

评论任务

评论任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$body = "body_example"; // string | 评论内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdIssuesIssueIdNotes($enterpriseId, $issueId, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postEnterpriseIdIssuesIssueIdNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **body** | **string**| 评论内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueNote**](../Model/IssueNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssuesIssueIdReaction**
> \GiteeEnterprise\Model\IssueReaction postEnterpriseIdIssuesIssueIdReaction($enterpriseId, $issueId, $text, $accessToken)

新增任务表态

新增任务表态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务的 id
$text = "text_example"; // string | 表情
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdIssuesIssueIdReaction($enterpriseId, $issueId, $text, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postEnterpriseIdIssuesIssueIdReaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务的 id |
 **text** | **string**| 表情 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueReaction**](../Model/IssueReaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssuesIssueIdRelatedIssue**
> \GiteeEnterprise\Model\IssueDetailWithRelatedInfos postEnterpriseIdIssuesIssueIdRelatedIssue($enterpriseId, $issueId, $linkIssueId, $refType, $accessToken, $direction, $resultType)

为指定任务添加关联任务

为指定任务添加关联任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$linkIssueId = 56; // int | 需要关联的任务 id
$refType = "refType_example"; // string | 关联关系(normal, finish_to_finish, finish_to_start, start_to_start, start_to_finish)
$accessToken = "accessToken_example"; // string | 用户授权码
$direction = "direction_example"; // string | 关联关系的方向(none, pre, latter)
$resultType = "resultType_example"; // string | 返回结果类型：包括issue, dependence

try {
    $result = $apiInstance->postEnterpriseIdIssuesIssueIdRelatedIssue($enterpriseId, $issueId, $linkIssueId, $refType, $accessToken, $direction, $resultType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postEnterpriseIdIssuesIssueIdRelatedIssue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **linkIssueId** | **int**| 需要关联的任务 id |
 **refType** | **string**| 关联关系(normal, finish_to_finish, finish_to_start, start_to_start, start_to_finish) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **direction** | **string**| 关联关系的方向(none, pre, latter) | [optional]
 **resultType** | **string**| 返回结果类型：包括issue, dependence | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueDetailWithRelatedInfos**](../Model/IssueDetailWithRelatedInfos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdIssuesIssueIdStar**
> postEnterpriseIdIssuesIssueIdStar($enterpriseId, $issueId, $accessToken)

星标任务

星标任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postEnterpriseIdIssuesIssueIdStar($enterpriseId, $issueId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postEnterpriseIdIssuesIssueIdStar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssuesIssueId**
> \GiteeEnterprise\Model\IssueDetail putEnterpriseIdIssuesIssueId($enterpriseId, $issueId, $accessToken, $title, $description, $assigneeId, $collaboratorIds, $issueTypeId, $issueStateId, $programId, $projectId, $milestoneId, $labelIds, $priority, $parentId, $branch, $planStartedAt, $deadline, $dependencyType, $startedAt, $finishedAt, $securityHole, $scrumSprintId, $scrumVersionId, $kanbanId, $kanbanColumnId, $estimatedDuration, $duration, $changeStates, $hierarchyChangeMethod)

更新任务

更新任务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$accessToken = "accessToken_example"; // string | 用户授权码
$title = "title_example"; // string | 任务标题
$description = "description_example"; // string | 任务内容
$assigneeId = 56; // int | 负责人的 user id
$collaboratorIds = "collaboratorIds_example"; // string | 协作者的 user id，如有多个请用英文逗号分割。eg: 1,2,3
$issueTypeId = 56; // int | 任务类型的 id
$issueStateId = 56; // int | 任务状态的 id
$programId = 56; // int | 关联项目的 id
$projectId = 56; // int | 关联仓库的 id
$milestoneId = 56; // int | 关联里程碑的 id
$labelIds = "labelIds_example"; // string | 关联标签的 id，如有多个请用英文逗号分割。eg: 1,2,3
$priority = 56; // int | 优先级(0: 不指定 1: 不重要 2: 次要 3: 主要 4: 严重)
$parentId = 56; // int | 父级任务的 id
$branch = "branch_example"; // string | 关联分支的名称
$planStartedAt = "planStartedAt_example"; // string | 计划开始日期。格式：yyyy-mm-ddTHH:MM:SS
$deadline = "deadline_example"; // string | 计划完成日期。格式：yyyy-mm-ddTHH:MM:SS
$dependencyType = "dependencyType_example"; // string | 后继任务的时间更新方式，更新所有是all,更新下一个是single
$startedAt = "startedAt_example"; // string | 实际开始时间。格式：yyyy-mm-ddTHH:MM:SS
$finishedAt = "finishedAt_example"; // string | 实际完成时间。格式：yyyy-mm-ddTHH:MM:SS
$securityHole = 56; // int | 是否是私有issue, 0:否，1:是
$scrumSprintId = 56; // int | 迭代ID
$scrumVersionId = 56; // int | 版本ID
$kanbanId = 56; // int | 看板ID
$kanbanColumnId = 56; // int | 看板的栏ID
$estimatedDuration = 3.4; // float | 预估工时(单位：小时， 支持两位小数)
$duration = 56; // int | 预估工时。（单位：分钟）
$changeStates = array("changeStates_example"); // string[] | 变更的状态 {source_id1: target_id1, source_id2: target_id2}
$hierarchyChangeMethod = "hierarchyChangeMethod_example"; // string | 选择的层级结构（relevance: 改为关联关系, independence: 取消父子关系）

try {
    $result = $apiInstance->putEnterpriseIdIssuesIssueId($enterpriseId, $issueId, $accessToken, $title, $description, $assigneeId, $collaboratorIds, $issueTypeId, $issueStateId, $programId, $projectId, $milestoneId, $labelIds, $priority, $parentId, $branch, $planStartedAt, $deadline, $dependencyType, $startedAt, $finishedAt, $securityHole, $scrumSprintId, $scrumVersionId, $kanbanId, $kanbanColumnId, $estimatedDuration, $duration, $changeStates, $hierarchyChangeMethod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->putEnterpriseIdIssuesIssueId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **title** | **string**| 任务标题 | [optional]
 **description** | **string**| 任务内容 | [optional]
 **assigneeId** | **int**| 负责人的 user id | [optional]
 **collaboratorIds** | **string**| 协作者的 user id，如有多个请用英文逗号分割。eg: 1,2,3 | [optional]
 **issueTypeId** | **int**| 任务类型的 id | [optional]
 **issueStateId** | **int**| 任务状态的 id | [optional]
 **programId** | **int**| 关联项目的 id | [optional]
 **projectId** | **int**| 关联仓库的 id | [optional]
 **milestoneId** | **int**| 关联里程碑的 id | [optional]
 **labelIds** | **string**| 关联标签的 id，如有多个请用英文逗号分割。eg: 1,2,3 | [optional]
 **priority** | **int**| 优先级(0: 不指定 1: 不重要 2: 次要 3: 主要 4: 严重) | [optional]
 **parentId** | **int**| 父级任务的 id | [optional]
 **branch** | **string**| 关联分支的名称 | [optional]
 **planStartedAt** | **string**| 计划开始日期。格式：yyyy-mm-ddTHH:MM:SS | [optional]
 **deadline** | **string**| 计划完成日期。格式：yyyy-mm-ddTHH:MM:SS | [optional]
 **dependencyType** | **string**| 后继任务的时间更新方式，更新所有是all,更新下一个是single | [optional]
 **startedAt** | **string**| 实际开始时间。格式：yyyy-mm-ddTHH:MM:SS | [optional]
 **finishedAt** | **string**| 实际完成时间。格式：yyyy-mm-ddTHH:MM:SS | [optional]
 **securityHole** | **int**| 是否是私有issue, 0:否，1:是 | [optional]
 **scrumSprintId** | **int**| 迭代ID | [optional]
 **scrumVersionId** | **int**| 版本ID | [optional]
 **kanbanId** | **int**| 看板ID | [optional]
 **kanbanColumnId** | **int**| 看板的栏ID | [optional]
 **estimatedDuration** | **float**| 预估工时(单位：小时， 支持两位小数) | [optional]
 **duration** | **int**| 预估工时。（单位：分钟） | [optional]
 **changeStates** | [**string[]**](../Model/string.md)| 变更的状态 {source_id1: target_id1, source_id2: target_id2} | [optional]
 **hierarchyChangeMethod** | **string**| 选择的层级结构（relevance: 改为关联关系, independence: 取消父子关系） | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueDetail**](../Model/IssueDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssuesIssueIdNotesNoteId**
> \GiteeEnterprise\Model\IssueNote putEnterpriseIdIssuesIssueIdNotesNoteId($enterpriseId, $issueId, $body, $noteId, $accessToken)

修改任务下的评论

修改任务下的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$body = "body_example"; // string | 评论内容
$noteId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putEnterpriseIdIssuesIssueIdNotesNoteId($enterpriseId, $issueId, $body, $noteId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->putEnterpriseIdIssuesIssueIdNotesNoteId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **body** | **string**| 评论内容 |
 **noteId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueNote**](../Model/IssueNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId**
> \GiteeEnterprise\Model\IssueDetailWithRelatedInfos putEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId($enterpriseId, $issueId, $linkIssueId, $accessToken, $refType, $direction, $resultType)

更新任务的关联关系

更新任务的关联关系

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$issueId = "issueId_example"; // string | 任务 id
$linkIssueId = 56; // int | 需要关联的任务 id
$accessToken = "accessToken_example"; // string | 用户授权码
$refType = "refType_example"; // string | 关联关系(normal, finish_to_finish, finish_to_start, start_to_start, start_to_finish)
$direction = "direction_example"; // string | 关联关系的方向(none, pre, latter)
$resultType = "resultType_example"; // string | 返回结果类型：包括issue, dependence

try {
    $result = $apiInstance->putEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId($enterpriseId, $issueId, $linkIssueId, $accessToken, $refType, $direction, $resultType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->putEnterpriseIdIssuesIssueIdRelatedIssueLinkIssueId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **issueId** | **string**| 任务 id |
 **linkIssueId** | **int**| 需要关联的任务 id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **refType** | **string**| 关联关系(normal, finish_to_finish, finish_to_start, start_to_start, start_to_finish) | [optional]
 **direction** | **string**| 关联关系的方向(none, pre, latter) | [optional]
 **resultType** | **string**| 返回结果类型：包括issue, dependence | [optional]

### Return type

[**\GiteeEnterprise\Model\IssueDetailWithRelatedInfos**](../Model/IssueDetailWithRelatedInfos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

