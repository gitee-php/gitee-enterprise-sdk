# GiteeEnterprise\AdminLogsStatisticApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdLogStatisticsDeployKeyLogs**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsDeployKeyLogs) | **GET** /{enterprise_id}/log_statistics/deploy_key_logs | 企业部署公钥管理日志
[**getEnterpriseIdLogStatisticsDocNodeLogs**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsDocNodeLogs) | **GET** /{enterprise_id}/log_statistics/doc_node_logs | 企业文档管理日志
[**getEnterpriseIdLogStatisticsEnterpriseRoleLogs**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsEnterpriseRoleLogs) | **GET** /{enterprise_id}/log_statistics/enterprise_role_logs | 企业角色管理日志
[**getEnterpriseIdLogStatisticsGroupsLog**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsGroupsLog) | **GET** /{enterprise_id}/log_statistics/groups_log | 团队管理日志
[**getEnterpriseIdLogStatisticsMembersLog**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsMembersLog) | **GET** /{enterprise_id}/log_statistics/members_log | 成员管理日志
[**getEnterpriseIdLogStatisticsProgramsLog**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsProgramsLog) | **GET** /{enterprise_id}/log_statistics/programs_log | 项目管理日志
[**getEnterpriseIdLogStatisticsProjectGroupsLog**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsProjectGroupsLog) | **GET** /{enterprise_id}/log_statistics/project_groups_log | 仓库组管理日志
[**getEnterpriseIdLogStatisticsProjectsAccessLog**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsProjectsAccessLog) | **GET** /{enterprise_id}/log_statistics/projects_access_log | 仓库代码日志
[**getEnterpriseIdLogStatisticsProjectsLog**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsProjectsLog) | **GET** /{enterprise_id}/log_statistics/projects_log | 仓库管理日志
[**getEnterpriseIdLogStatisticsSecuritySettingLog**](AdminLogsStatisticApi.md#getEnterpriseIdLogStatisticsSecuritySettingLog) | **GET** /{enterprise_id}/log_statistics/security_setting_log | 安全与告警管理日志


# **getEnterpriseIdLogStatisticsDeployKeyLogs**
> \GiteeEnterprise\Model\DeployKeyLog[] getEnterpriseIdLogStatisticsDeployKeyLogs($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage)

企业部署公钥管理日志

企业部署公钥管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$member = "member_example"; // string | 成员username
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsDeployKeyLogs($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsDeployKeyLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **member** | **string**| 成员username | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\DeployKeyLog[]**](../Model/DeployKeyLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsDocNodeLogs**
> \GiteeEnterprise\Model\DocNodeLog[] getEnterpriseIdLogStatisticsDocNodeLogs($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage)

企业文档管理日志

企业文档管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$member = "member_example"; // string | 成员username
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsDocNodeLogs($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsDocNodeLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **member** | **string**| 成员username | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\DocNodeLog[]**](../Model/DocNodeLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsEnterpriseRoleLogs**
> \GiteeEnterprise\Model\EnterpriseRoleLog[] getEnterpriseIdLogStatisticsEnterpriseRoleLogs($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage)

企业角色管理日志

企业角色管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$member = "member_example"; // string | 成员username
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsEnterpriseRoleLogs($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsEnterpriseRoleLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **member** | **string**| 成员username | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseRoleLog[]**](../Model/EnterpriseRoleLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsGroupsLog**
> \GiteeEnterprise\Model\GroupManageLog[] getEnterpriseIdLogStatisticsGroupsLog($enterpriseId, $accessToken, $groupName, $member, $startDate, $endDate, $page, $perPage)

团队管理日志

团队管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$groupName = "groupName_example"; // string | 团队名称
$member = "member_example"; // string | 成员username
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsGroupsLog($enterpriseId, $accessToken, $groupName, $member, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsGroupsLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **groupName** | **string**| 团队名称 | [optional]
 **member** | **string**| 成员username | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\GroupManageLog[]**](../Model/GroupManageLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsMembersLog**
> \GiteeEnterprise\Model\MemberManageLog[] getEnterpriseIdLogStatisticsMembersLog($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage)

成员管理日志

成员管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$member = "member_example"; // string | 成员username
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsMembersLog($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsMembersLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **member** | **string**| 成员username | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\MemberManageLog[]**](../Model/MemberManageLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsProgramsLog**
> \GiteeEnterprise\Model\ProgramManageLog[] getEnterpriseIdLogStatisticsProgramsLog($enterpriseId, $accessToken, $member, $programName, $startDate, $endDate, $page, $perPage)

项目管理日志

项目管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$member = "member_example"; // string | 成员username
$programName = "programName_example"; // string | 项目名称
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsProgramsLog($enterpriseId, $accessToken, $member, $programName, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsProgramsLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **member** | **string**| 成员username | [optional]
 **programName** | **string**| 项目名称 | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProgramManageLog[]**](../Model/ProgramManageLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsProjectGroupsLog**
> \GiteeEnterprise\Model\ProjectGroupManageLog[] getEnterpriseIdLogStatisticsProjectGroupsLog($enterpriseId, $accessToken, $member, $projectGroupId, $startDate, $endDate, $page, $perPage)

仓库组管理日志

仓库组管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$member = "member_example"; // string | 成员username
$projectGroupId = 56; // int | 仓库组id
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsProjectGroupsLog($enterpriseId, $accessToken, $member, $projectGroupId, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsProjectGroupsLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **member** | **string**| 成员username | [optional]
 **projectGroupId** | **int**| 仓库组id | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectGroupManageLog[]**](../Model/ProjectGroupManageLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsProjectsAccessLog**
> \GiteeEnterprise\Model\ProjectAccessLog[] getEnterpriseIdLogStatisticsProjectsAccessLog($enterpriseId, $accessToken, $groupPath, $projectName, $member, $startDate, $endDate, $page, $perPage)

仓库代码日志

仓库代码日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$groupPath = "groupPath_example"; // string | 团队path
$projectName = "projectName_example"; // string | 仓库path_with_namespace: namespace.path/project.path
$member = "member_example"; // string | 成员username
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsProjectsAccessLog($enterpriseId, $accessToken, $groupPath, $projectName, $member, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsProjectsAccessLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **groupPath** | **string**| 团队path | [optional]
 **projectName** | **string**| 仓库path_with_namespace: namespace.path/project.path | [optional]
 **member** | **string**| 成员username | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectAccessLog[]**](../Model/ProjectAccessLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsProjectsLog**
> \GiteeEnterprise\Model\ProjectManageLog[] getEnterpriseIdLogStatisticsProjectsLog($enterpriseId, $accessToken, $projectName, $member, $startDate, $endDate, $page, $perPage)

仓库管理日志

仓库管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$projectName = "projectName_example"; // string | 仓库path_with_namespace: namespace.path/project.path
$member = "member_example"; // string | 成员username
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsProjectsLog($enterpriseId, $accessToken, $projectName, $member, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsProjectsLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **projectName** | **string**| 仓库path_with_namespace: namespace.path/project.path | [optional]
 **member** | **string**| 成员username | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectManageLog[]**](../Model/ProjectManageLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLogStatisticsSecuritySettingLog**
> \GiteeEnterprise\Model\SecuritySettingLog[] getEnterpriseIdLogStatisticsSecuritySettingLog($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage)

安全与告警管理日志

安全与告警管理日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\AdminLogsStatisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$member = "member_example"; // string | 成员username
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLogStatisticsSecuritySettingLog($enterpriseId, $accessToken, $member, $startDate, $endDate, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminLogsStatisticApi->getEnterpriseIdLogStatisticsSecuritySettingLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **member** | **string**| 成员username | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\SecuritySettingLog[]**](../Model/SecuritySettingLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

