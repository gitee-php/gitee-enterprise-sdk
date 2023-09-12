# GiteeEnterprise\StatisticsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdDashboardStatisticsOverview**](StatisticsApi.md#getEnterpriseIdDashboardStatisticsOverview) | **GET** /{enterprise_id}/dashboard_statistics/overview | 获取企业概览数据
[**getEnterpriseIdDashboardStatisticsUserDashboard**](StatisticsApi.md#getEnterpriseIdDashboardStatisticsUserDashboard) | **GET** /{enterprise_id}/dashboard_statistics/user_dashboard | 获取当前用户的统计信息
[**getEnterpriseIdStatisticsEnterpriseOsProjectList**](StatisticsApi.md#getEnterpriseIdStatisticsEnterpriseOsProjectList) | **GET** /{enterprise_id}/statistics/enterprise_os_project_list | 获取企业开源仓库详情列表
[**getEnterpriseIdStatisticsEnterpriseProgramList**](StatisticsApi.md#getEnterpriseIdStatisticsEnterpriseProgramList) | **GET** /{enterprise_id}/statistics/enterprise_program_list | 获取企业项目的统计信息
[**getEnterpriseIdStatisticsEnterpriseProjectList**](StatisticsApi.md#getEnterpriseIdStatisticsEnterpriseProjectList) | **GET** /{enterprise_id}/statistics/enterprise_project_list | 获取企业仓库的统计信息
[**getEnterpriseIdStatisticsUserStatistic**](StatisticsApi.md#getEnterpriseIdStatisticsUserStatistic) | **GET** /{enterprise_id}/statistics/user_statistic | 获取成员的统计信息


# **getEnterpriseIdDashboardStatisticsOverview**
> getEnterpriseIdDashboardStatisticsOverview($enterpriseId, $accessToken)

获取企业概览数据

获取企业概览数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdDashboardStatisticsOverview($enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getEnterpriseIdDashboardStatisticsOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdDashboardStatisticsUserDashboard**
> getEnterpriseIdDashboardStatisticsUserDashboard($enterpriseId, $accessToken)

获取当前用户的统计信息

获取当前用户的统计信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdDashboardStatisticsUserDashboard($enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getEnterpriseIdDashboardStatisticsUserDashboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdStatisticsEnterpriseOsProjectList**
> \GiteeEnterprise\Model\OsProjectsList getEnterpriseIdStatisticsEnterpriseOsProjectList($enterpriseId, $accessToken, $projectId, $startDate, $endDate)

获取企业开源仓库详情列表

获取企业开源仓库详情列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$projectId = 56; // int | 仓库id
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)

try {
    $result = $apiInstance->getEnterpriseIdStatisticsEnterpriseOsProjectList($enterpriseId, $accessToken, $projectId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getEnterpriseIdStatisticsEnterpriseOsProjectList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **projectId** | **int**| 仓库id | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]

### Return type

[**\GiteeEnterprise\Model\OsProjectsList**](../Model/OsProjectsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdStatisticsEnterpriseProgramList**
> \GiteeEnterprise\Model\EnterpriseProgramsList getEnterpriseIdStatisticsEnterpriseProgramList($enterpriseId, $accessToken, $programId, $startDate, $endDate)

获取企业项目的统计信息

获取企业项目的统计信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$programId = 56; // int | 项目id
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)

try {
    $result = $apiInstance->getEnterpriseIdStatisticsEnterpriseProgramList($enterpriseId, $accessToken, $programId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getEnterpriseIdStatisticsEnterpriseProgramList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programId** | **int**| 项目id | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseProgramsList**](../Model/EnterpriseProgramsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdStatisticsEnterpriseProjectList**
> \GiteeEnterprise\Model\EnterpriseProjectsList getEnterpriseIdStatisticsEnterpriseProjectList($enterpriseId, $accessToken, $projectId, $startDate, $endDate)

获取企业仓库的统计信息

获取企业仓库的统计信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$projectId = 56; // int | 仓库id
$startDate = "startDate_example"; // string | 查询的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 查询的结束时间。(格式：yyyy-mm-dd)

try {
    $result = $apiInstance->getEnterpriseIdStatisticsEnterpriseProjectList($enterpriseId, $accessToken, $projectId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getEnterpriseIdStatisticsEnterpriseProjectList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **projectId** | **int**| 仓库id | [optional]
 **startDate** | **string**| 查询的起始时间。(格式：yyyy-mm-dd) | [optional]
 **endDate** | **string**| 查询的结束时间。(格式：yyyy-mm-dd) | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseProjectsList**](../Model/EnterpriseProjectsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdStatisticsUserStatistic**
> \GiteeEnterprise\Model\UserStatistic[] getEnterpriseIdStatisticsUserStatistic($enterpriseId, $userId, $startDate, $endDate, $accessToken, $projectId)

获取成员的统计信息

获取成员的统计信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$userId = "userId_example"; // string | 查找指定用户的数据。（可多选，用逗号分割）
$startDate = "startDate_example"; // string | 统计的起始时间。(格式：yyyy-mm-dd)
$endDate = "endDate_example"; // string | 统计的结束时间。(格式：yyyy-mm-dd)
$accessToken = "accessToken_example"; // string | 用户授权码
$projectId = 56; // int | 仓库 id

try {
    $result = $apiInstance->getEnterpriseIdStatisticsUserStatistic($enterpriseId, $userId, $startDate, $endDate, $accessToken, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getEnterpriseIdStatisticsUserStatistic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **userId** | **string**| 查找指定用户的数据。（可多选，用逗号分割） |
 **startDate** | **string**| 统计的起始时间。(格式：yyyy-mm-dd) |
 **endDate** | **string**| 统计的结束时间。(格式：yyyy-mm-dd) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **projectId** | **int**| 仓库 id | [optional]

### Return type

[**\GiteeEnterprise\Model\UserStatistic[]**](../Model/UserStatistic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

