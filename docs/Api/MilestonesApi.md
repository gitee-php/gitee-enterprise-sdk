# GiteeEnterprise\MilestonesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdMilestonesMilestoneId**](MilestonesApi.md#deleteEnterpriseIdMilestonesMilestoneId) | **DELETE** /{enterprise_id}/milestones/{milestone_id} | 删除里程碑
[**getEnterpriseIdMilestones**](MilestonesApi.md#getEnterpriseIdMilestones) | **GET** /{enterprise_id}/milestones | 获取里程碑列表
[**getEnterpriseIdMilestonesMilestoneId**](MilestonesApi.md#getEnterpriseIdMilestonesMilestoneId) | **GET** /{enterprise_id}/milestones/{milestone_id} | 获取里程碑信息
[**getEnterpriseIdMilestonesMilestoneIdParticipants**](MilestonesApi.md#getEnterpriseIdMilestonesMilestoneIdParticipants) | **GET** /{enterprise_id}/milestones/{milestone_id}/participants | 里程碑参与人列表
[**postEnterpriseIdMilestones**](MilestonesApi.md#postEnterpriseIdMilestones) | **POST** /{enterprise_id}/milestones | 新建里程碑
[**putEnterpriseIdMilestonesMilestoneId**](MilestonesApi.md#putEnterpriseIdMilestonesMilestoneId) | **PUT** /{enterprise_id}/milestones/{milestone_id} | 编辑里程碑


# **deleteEnterpriseIdMilestonesMilestoneId**
> deleteEnterpriseIdMilestonesMilestoneId($enterpriseId, $milestoneId, $accessToken)

删除里程碑

删除里程碑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业ID
$milestoneId = 56; // int | 里程碑ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdMilestonesMilestoneId($enterpriseId, $milestoneId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->deleteEnterpriseIdMilestonesMilestoneId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业ID |
 **milestoneId** | **int**| 里程碑ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMilestones**
> \GiteeEnterprise\Model\MilestoneList[] getEnterpriseIdMilestones($enterpriseId, $accessToken, $programId, $projectId, $state, $assigneeIds, $authorIds, $search, $sort, $direction, $scope, $onlyComponentEnabled, $dropboxGroup, $page, $perPage)

获取里程碑列表

获取里程碑列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 56; // int | 项目 id
$projectId = 56; // int | 仓库 id
$state = "state_example"; // string | 状态，开启的:active，待开始:pending，进行中:processing，已关闭:closed，已逾期:overdued， 未过期：not_overdue
$assigneeIds = "assigneeIds_example"; // string | 负责人id以,分隔的字符串
$authorIds = "authorIds_example"; // string | 创建者id以,分隔的字符串
$search = "search_example"; // string | 搜索字符串
$sort = "sort_example"; // string | 排序字段(title、created_at、start_date、due_date)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$scope = "scope_example"; // string | 筛选当前用户参与的里程碑
$onlyComponentEnabled = true; // bool | 是否只列出启用里程碑组件的项目下的里程碑
$dropboxGroup = true; // bool | 是否需要按开启和关闭两个状态在下拉框内分组
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdMilestones($enterpriseId, $accessToken, $programId, $projectId, $state, $assigneeIds, $authorIds, $search, $sort, $direction, $scope, $onlyComponentEnabled, $dropboxGroup, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getEnterpriseIdMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 项目 id | [optional]
 **projectId** | **int**| 仓库 id | [optional]
 **state** | **string**| 状态，开启的:active，待开始:pending，进行中:processing，已关闭:closed，已逾期:overdued， 未过期：not_overdue | [optional]
 **assigneeIds** | **string**| 负责人id以,分隔的字符串 | [optional]
 **authorIds** | **string**| 创建者id以,分隔的字符串 | [optional]
 **search** | **string**| 搜索字符串 | [optional]
 **sort** | **string**| 排序字段(title、created_at、start_date、due_date) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **scope** | **string**| 筛选当前用户参与的里程碑 | [optional]
 **onlyComponentEnabled** | **bool**| 是否只列出启用里程碑组件的项目下的里程碑 | [optional]
 **dropboxGroup** | **bool**| 是否需要按开启和关闭两个状态在下拉框内分组 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\MilestoneList[]**](../Model/MilestoneList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMilestonesMilestoneId**
> \GiteeEnterprise\Model\MilestoneDetail getEnterpriseIdMilestonesMilestoneId($enterpriseId, $milestoneId, $accessToken)

获取里程碑信息

获取里程碑信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业ID
$milestoneId = 56; // int | 里程碑ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdMilestonesMilestoneId($enterpriseId, $milestoneId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getEnterpriseIdMilestonesMilestoneId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业ID |
 **milestoneId** | **int**| 里程碑ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\MilestoneDetail**](../Model/MilestoneDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdMilestonesMilestoneIdParticipants**
> \GiteeEnterprise\Model\UserWithRemark getEnterpriseIdMilestonesMilestoneIdParticipants($enterpriseId, $milestoneId, $accessToken)

里程碑参与人列表

里程碑参与人列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业ID
$milestoneId = 56; // int | 里程碑ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdMilestonesMilestoneIdParticipants($enterpriseId, $milestoneId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getEnterpriseIdMilestonesMilestoneIdParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业ID |
 **milestoneId** | **int**| 里程碑ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\UserWithRemark**](../Model/UserWithRemark.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdMilestones**
> \GiteeEnterprise\Model\MilestoneDetail postEnterpriseIdMilestones($enterpriseId, $title, $dueDate, $accessToken, $startDate, $description, $programId, $projectIds, $assigneeId)

新建里程碑

新建里程碑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业ID
$title = "title_example"; // string | 里程碑标题
$dueDate = "dueDate_example"; // string | 里程碑结束日期如：2020-08-13
$accessToken = "accessToken_example"; // string | 用户授权码
$startDate = "startDate_example"; // string | 里程碑开始日期如：2020-08-13
$description = "description_example"; // string | 里程碑描述
$programId = 56; // int | 关联项目ID
$projectIds = "projectIds_example"; // string | 关联仓库ID, 以,分隔的字符串
$assigneeId = 56; // int | 里程碑负责人ID

try {
    $result = $apiInstance->postEnterpriseIdMilestones($enterpriseId, $title, $dueDate, $accessToken, $startDate, $description, $programId, $projectIds, $assigneeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->postEnterpriseIdMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业ID |
 **title** | **string**| 里程碑标题 |
 **dueDate** | **string**| 里程碑结束日期如：2020-08-13 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **startDate** | **string**| 里程碑开始日期如：2020-08-13 | [optional]
 **description** | **string**| 里程碑描述 | [optional]
 **programId** | **int**| 关联项目ID | [optional]
 **projectIds** | **string**| 关联仓库ID, 以,分隔的字符串 | [optional]
 **assigneeId** | **int**| 里程碑负责人ID | [optional]

### Return type

[**\GiteeEnterprise\Model\MilestoneDetail**](../Model/MilestoneDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdMilestonesMilestoneId**
> \GiteeEnterprise\Model\MilestoneDetail putEnterpriseIdMilestonesMilestoneId($enterpriseId, $milestoneId, $accessToken, $title, $dueDate, $startDate, $stateEvent, $description, $programId, $projectIds, $assigneeId, $top)

编辑里程碑

编辑里程碑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业ID
$milestoneId = 56; // int | 里程碑ID
$accessToken = "accessToken_example"; // string | 用户授权码
$title = "title_example"; // string | 里程碑标题
$dueDate = "dueDate_example"; // string | 里程碑结束日期如：2020-08-13
$startDate = "startDate_example"; // string | 里程碑开始日期如：2020-08-13
$stateEvent = "stateEvent_example"; // string | 关闭或重新开启里程碑
$description = "description_example"; // string | 里程碑描述
$programId = 56; // int | 关联项目ID
$projectIds = "projectIds_example"; // string | 关联仓库ID, 以,分隔的字符串
$assigneeId = 56; // int | 里程碑负责人ID
$top = 56; // int | 是否置顶

try {
    $result = $apiInstance->putEnterpriseIdMilestonesMilestoneId($enterpriseId, $milestoneId, $accessToken, $title, $dueDate, $startDate, $stateEvent, $description, $programId, $projectIds, $assigneeId, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->putEnterpriseIdMilestonesMilestoneId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业ID |
 **milestoneId** | **int**| 里程碑ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **title** | **string**| 里程碑标题 | [optional]
 **dueDate** | **string**| 里程碑结束日期如：2020-08-13 | [optional]
 **startDate** | **string**| 里程碑开始日期如：2020-08-13 | [optional]
 **stateEvent** | **string**| 关闭或重新开启里程碑 | [optional]
 **description** | **string**| 里程碑描述 | [optional]
 **programId** | **int**| 关联项目ID | [optional]
 **projectIds** | **string**| 关联仓库ID, 以,分隔的字符串 | [optional]
 **assigneeId** | **int**| 里程碑负责人ID | [optional]
 **top** | **int**| 是否置顶 | [optional]

### Return type

[**\GiteeEnterprise\Model\MilestoneDetail**](../Model/MilestoneDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

