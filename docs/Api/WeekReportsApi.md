# GiteeEnterprise\WeekReportsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdWeekReportsReportIdCommentCommentId**](WeekReportsApi.md#deleteEnterpriseIdWeekReportsReportIdCommentCommentId) | **DELETE** /{enterprise_id}/week_reports/{report_id}/comment/{comment_id} | 删除周报某个评论
[**deleteEnterpriseIdWeekReportsTemplatesTemplateId**](WeekReportsApi.md#deleteEnterpriseIdWeekReportsTemplatesTemplateId) | **DELETE** /{enterprise_id}/week_reports/templates/{template_id} | 删除周报模版
[**getEnterpriseIdWeekReportsMemberReports**](WeekReportsApi.md#getEnterpriseIdWeekReportsMemberReports) | **GET** /{enterprise_id}/week_reports/member_reports | 成员周报列表
[**getEnterpriseIdWeekReportsMyReports**](WeekReportsApi.md#getEnterpriseIdWeekReportsMyReports) | **GET** /{enterprise_id}/week_reports/my_reports | 获取授权用户的周报列表
[**getEnterpriseIdWeekReportsNotSubmitUsers**](WeekReportsApi.md#getEnterpriseIdWeekReportsNotSubmitUsers) | **GET** /{enterprise_id}/week_reports/not_submit_users | 获取未提交周报的用户列表
[**getEnterpriseIdWeekReportsRelateEvents**](WeekReportsApi.md#getEnterpriseIdWeekReportsRelateEvents) | **GET** /{enterprise_id}/week_reports/relate_events | 周报可关联动态列表
[**getEnterpriseIdWeekReportsRelations**](WeekReportsApi.md#getEnterpriseIdWeekReportsRelations) | **GET** /{enterprise_id}/week_reports/relations | 获取周报可关联issue和pull request
[**getEnterpriseIdWeekReportsReportIdComments**](WeekReportsApi.md#getEnterpriseIdWeekReportsReportIdComments) | **GET** /{enterprise_id}/week_reports/{report_id}/comments | 某个周报评论列表
[**getEnterpriseIdWeekReportsTemplates**](WeekReportsApi.md#getEnterpriseIdWeekReportsTemplates) | **GET** /{enterprise_id}/week_reports/templates | 周报模版列表
[**getEnterpriseIdWeekReportsTemplatesTemplateId**](WeekReportsApi.md#getEnterpriseIdWeekReportsTemplatesTemplateId) | **GET** /{enterprise_id}/week_reports/templates/{template_id} | 查看周报模版详情
[**getEnterpriseIdWeekReportsUsernameYearWeekIndex**](WeekReportsApi.md#getEnterpriseIdWeekReportsUsernameYearWeekIndex) | **GET** /{enterprise_id}/week_reports/{username}/{year}/{week_index} | 获取某人某年某周的周报详情
[**getEnterpriseIdWeekReportsYearWeeks**](WeekReportsApi.md#getEnterpriseIdWeekReportsYearWeeks) | **GET** /{enterprise_id}/week_reports/{year}/weeks | 获取企业某年存在周报的周
[**getEnterpriseIdWeekReportsYears**](WeekReportsApi.md#getEnterpriseIdWeekReportsYears) | **GET** /{enterprise_id}/week_reports/years | 获取企业存在周报的年份
[**postEnterpriseIdWeekReportsPreviewData**](WeekReportsApi.md#postEnterpriseIdWeekReportsPreviewData) | **POST** /{enterprise_id}/week_reports/preview_data | 预览周报
[**postEnterpriseIdWeekReportsReportIdComment**](WeekReportsApi.md#postEnterpriseIdWeekReportsReportIdComment) | **POST** /{enterprise_id}/week_reports/{report_id}/comment | 评论周报
[**postEnterpriseIdWeekReportsTemplates**](WeekReportsApi.md#postEnterpriseIdWeekReportsTemplates) | **POST** /{enterprise_id}/week_reports/templates | 新增周报模版
[**putEnterpriseIdWeekReportsTemplatesTemplateId**](WeekReportsApi.md#putEnterpriseIdWeekReportsTemplatesTemplateId) | **PUT** /{enterprise_id}/week_reports/templates/{template_id} | 编辑周报模版
[**putEnterpriseIdWeekReportsUsernameYearWeekIndex**](WeekReportsApi.md#putEnterpriseIdWeekReportsUsernameYearWeekIndex) | **PUT** /{enterprise_id}/week_reports/{username}/{year}/{week_index} | 新建/编辑周报


# **deleteEnterpriseIdWeekReportsReportIdCommentCommentId**
> deleteEnterpriseIdWeekReportsReportIdCommentCommentId($enterpriseId, $reportId, $commentId, $accessToken)

删除周报某个评论

删除周报某个评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$reportId = 56; // int | 周报的ID
$commentId = 56; // int | 评论ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdWeekReportsReportIdCommentCommentId($enterpriseId, $reportId, $commentId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->deleteEnterpriseIdWeekReportsReportIdCommentCommentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **reportId** | **int**| 周报的ID |
 **commentId** | **int**| 评论ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdWeekReportsTemplatesTemplateId**
> deleteEnterpriseIdWeekReportsTemplatesTemplateId($enterpriseId, $templateId, $accessToken)

删除周报模版

删除周报模版

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$templateId = 56; // int | 模版ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdWeekReportsTemplatesTemplateId($enterpriseId, $templateId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->deleteEnterpriseIdWeekReportsTemplatesTemplateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **templateId** | **int**| 模版ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsMemberReports**
> \GiteeEnterprise\Model\MemberWeekReport getEnterpriseIdWeekReportsMemberReports($enterpriseId, $accessToken, $year, $weekIndex, $programId, $groupId, $memberIds, $date, $page, $perPage)

成员周报列表

成员周报列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$year = 2023; // int | 年份
$weekIndex = 56; // int | 周报所属周
$programId = 56; // int | 项目ID
$groupId = 56; // int | 团队ID
$memberIds = "memberIds_example"; // string | 成员ID，逗号分隔，如：1,2
$date = "date_example"; // string | 周报日期(格式：2019-03-25)
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsMemberReports($enterpriseId, $accessToken, $year, $weekIndex, $programId, $groupId, $memberIds, $date, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsMemberReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **year** | **int**| 年份 | [optional] [default to 2023]
 **weekIndex** | **int**| 周报所属周 | [optional]
 **programId** | **int**| 项目ID | [optional]
 **groupId** | **int**| 团队ID | [optional]
 **memberIds** | **string**| 成员ID，逗号分隔，如：1,2 | [optional]
 **date** | **string**| 周报日期(格式：2019-03-25) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\MemberWeekReport**](../Model/MemberWeekReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsMyReports**
> \GiteeEnterprise\Model\MyWeekReport getEnterpriseIdWeekReportsMyReports($enterpriseId, $accessToken, $year)

获取授权用户的周报列表

获取授权用户的周报列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$year = 2023; // int | 年份

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsMyReports($enterpriseId, $accessToken, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsMyReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **year** | **int**| 年份 | [optional] [default to 2023]

### Return type

[**\GiteeEnterprise\Model\MyWeekReport**](../Model/MyWeekReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsNotSubmitUsers**
> \GiteeEnterprise\Model\MyWeekReport getEnterpriseIdWeekReportsNotSubmitUsers($enterpriseId, $year, $accessToken, $weekIndex, $programId, $groupId)

获取未提交周报的用户列表

获取未提交周报的用户列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$year = 2023; // int | 年份
$accessToken = "accessToken_example"; // string | 用户授权码
$weekIndex = 56; // int | 当前周数（默认当前周）
$programId = 56; // int | 项目的 id
$groupId = 56; // int | 团队的 id

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsNotSubmitUsers($enterpriseId, $year, $accessToken, $weekIndex, $programId, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsNotSubmitUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **year** | **int**| 年份 | [default to 2023]
 **accessToken** | **string**| 用户授权码 | [optional]
 **weekIndex** | **int**| 当前周数（默认当前周） | [optional]
 **programId** | **int**| 项目的 id | [optional]
 **groupId** | **int**| 团队的 id | [optional]

### Return type

[**\GiteeEnterprise\Model\MyWeekReport**](../Model/MyWeekReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsRelateEvents**
> \GiteeEnterprise\Model\Event getEnterpriseIdWeekReportsRelateEvents($enterpriseId, $year, $weekIndex, $accessToken, $eventIds, $page, $perPage)

周报可关联动态列表

周报可关联动态列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$year = 56; // int | 周报所属年
$weekIndex = 56; // int | 周报所属周
$accessToken = "accessToken_example"; // string | 用户授权码
$eventIds = 56; // int | 一关联的动态ids， 用逗号分隔，如：1,2,3
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsRelateEvents($enterpriseId, $year, $weekIndex, $accessToken, $eventIds, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsRelateEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **year** | **int**| 周报所属年 |
 **weekIndex** | **int**| 周报所属周 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **eventIds** | **int**| 一关联的动态ids， 用逗号分隔，如：1,2,3 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Event**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsRelations**
> \GiteeEnterprise\Model\WeekReportRelation getEnterpriseIdWeekReportsRelations($enterpriseId, $year, $weekIndex, $accessToken)

获取周报可关联issue和pull request

获取周报可关联issue和pull request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$year = 56; // int | 周报所属年
$weekIndex = 56; // int | 周报所属周
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsRelations($enterpriseId, $year, $weekIndex, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsRelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **year** | **int**| 周报所属年 |
 **weekIndex** | **int**| 周报所属周 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportRelation**](../Model/WeekReportRelation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsReportIdComments**
> \GiteeEnterprise\Model\WeekReportNote getEnterpriseIdWeekReportsReportIdComments($enterpriseId, $reportId, $accessToken)

某个周报评论列表

某个周报评论列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$reportId = 56; // int | 周报的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsReportIdComments($enterpriseId, $reportId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsReportIdComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **reportId** | **int**| 周报的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportNote**](../Model/WeekReportNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsTemplates**
> \GiteeEnterprise\Model\WeekReportTemplate getEnterpriseIdWeekReportsTemplates($enterpriseId, $accessToken, $page, $perPage)

周报模版列表

周报模版列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsTemplates($enterpriseId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsTemplates: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\GiteeEnterprise\Model\WeekReportTemplate**](../Model/WeekReportTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsTemplatesTemplateId**
> \GiteeEnterprise\Model\WeekReportTemplate getEnterpriseIdWeekReportsTemplatesTemplateId($enterpriseId, $templateId, $accessToken)

查看周报模版详情

查看周报模版详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$templateId = 56; // int | 模版ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsTemplatesTemplateId($enterpriseId, $templateId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsTemplatesTemplateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **templateId** | **int**| 模版ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportTemplate**](../Model/WeekReportTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsUsernameYearWeekIndex**
> \GiteeEnterprise\Model\WeekReportDetail getEnterpriseIdWeekReportsUsernameYearWeekIndex($enterpriseId, $username, $year, $weekIndex, $accessToken)

获取某人某年某周的周报详情

获取某人某年某周的周报详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$username = "username_example"; // string | 用户个性域名
$year = 56; // int | 周报所处年
$weekIndex = 56; // int | 周报所处周
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdWeekReportsUsernameYearWeekIndex($enterpriseId, $username, $year, $weekIndex, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsUsernameYearWeekIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **username** | **string**| 用户个性域名 |
 **year** | **int**| 周报所处年 |
 **weekIndex** | **int**| 周报所处周 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportDetail**](../Model/WeekReportDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsYearWeeks**
> getEnterpriseIdWeekReportsYearWeeks($enterpriseId, $year, $accessToken)

获取企业某年存在周报的周

获取企业某年存在周报的周

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$year = 56; // int | 周报所属年
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdWeekReportsYearWeeks($enterpriseId, $year, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsYearWeeks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **year** | **int**| 周报所属年 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWeekReportsYears**
> getEnterpriseIdWeekReportsYears($enterpriseId, $accessToken)

获取企业存在周报的年份

获取企业存在周报的年份

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getEnterpriseIdWeekReportsYears($enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->getEnterpriseIdWeekReportsYears: ', $e->getMessage(), PHP_EOL;
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

# **postEnterpriseIdWeekReportsPreviewData**
> \GiteeEnterprise\Model\WeekReportPreview postEnterpriseIdWeekReportsPreviewData($enterpriseId, $content, $accessToken, $eventIds, $issueIds, $pullRequestIds)

预览周报

预览周报

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$content = "content_example"; // string | 需要预览的周报内容
$accessToken = "accessToken_example"; // string | 用户授权码
$eventIds = "eventIds_example"; // string | 关联动态ids，以逗号分隔，如：3241,2324
$issueIds = "issueIds_example"; // string | 关联issue ids，以逗号分隔，如：3241,2324
$pullRequestIds = "pullRequestIds_example"; // string | 关联pull request ids，以逗号分隔，如：3241,2324

try {
    $result = $apiInstance->postEnterpriseIdWeekReportsPreviewData($enterpriseId, $content, $accessToken, $eventIds, $issueIds, $pullRequestIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->postEnterpriseIdWeekReportsPreviewData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **content** | **string**| 需要预览的周报内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **eventIds** | **string**| 关联动态ids，以逗号分隔，如：3241,2324 | [optional]
 **issueIds** | **string**| 关联issue ids，以逗号分隔，如：3241,2324 | [optional]
 **pullRequestIds** | **string**| 关联pull request ids，以逗号分隔，如：3241,2324 | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportPreview**](../Model/WeekReportPreview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdWeekReportsReportIdComment**
> \GiteeEnterprise\Model\WeekReportNote postEnterpriseIdWeekReportsReportIdComment($enterpriseId, $reportId, $body, $accessToken)

评论周报

评论周报

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$reportId = 56; // int | 周报的ID
$body = "body_example"; // string | 评论的内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdWeekReportsReportIdComment($enterpriseId, $reportId, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->postEnterpriseIdWeekReportsReportIdComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **reportId** | **int**| 周报的ID |
 **body** | **string**| 评论的内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportNote**](../Model/WeekReportNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdWeekReportsTemplates**
> \GiteeEnterprise\Model\WeekReportTemplate postEnterpriseIdWeekReportsTemplates($enterpriseId, $name, $content, $accessToken, $isDefault)

新增周报模版

新增周报模版

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$name = "name_example"; // string | 模版名称
$content = "content_example"; // string | 模版内容
$accessToken = "accessToken_example"; // string | 用户授权码
$isDefault = 56; // int | 是否设为默认模版。0(否)或1(是)，默认0(否)

try {
    $result = $apiInstance->postEnterpriseIdWeekReportsTemplates($enterpriseId, $name, $content, $accessToken, $isDefault);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->postEnterpriseIdWeekReportsTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **name** | **string**| 模版名称 |
 **content** | **string**| 模版内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **isDefault** | **int**| 是否设为默认模版。0(否)或1(是)，默认0(否) | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportTemplate**](../Model/WeekReportTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdWeekReportsTemplatesTemplateId**
> \GiteeEnterprise\Model\WeekReportTemplate putEnterpriseIdWeekReportsTemplatesTemplateId($enterpriseId, $templateId, $accessToken, $name, $content, $isDefault)

编辑周报模版

编辑周报模版

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$templateId = 56; // int | 模版ID
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 模版名称
$content = "content_example"; // string | 模版内容
$isDefault = 56; // int | 是否设为默认模版。0(否)或1(是)，默认0(否)

try {
    $result = $apiInstance->putEnterpriseIdWeekReportsTemplatesTemplateId($enterpriseId, $templateId, $accessToken, $name, $content, $isDefault);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->putEnterpriseIdWeekReportsTemplatesTemplateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **templateId** | **int**| 模版ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 模版名称 | [optional]
 **content** | **string**| 模版内容 | [optional]
 **isDefault** | **int**| 是否设为默认模版。0(否)或1(是)，默认0(否) | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportTemplate**](../Model/WeekReportTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdWeekReportsUsernameYearWeekIndex**
> \GiteeEnterprise\Model\WeekReportDetail putEnterpriseIdWeekReportsUsernameYearWeekIndex($enterpriseId, $year, $content, $weekIndex, $username, $accessToken, $pullRequestIds, $issueIds, $eventIds)

新建/编辑周报

新建/编辑周报

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WeekReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$year = 56; // int | 周报所属年
$content = "content_example"; // string | 周报内容
$weekIndex = 56; // int | 周报所属周
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$pullRequestIds = array(56); // int[] | 周报关联PR
$issueIds = array(56); // int[] | 周报关联issue
$eventIds = array(56); // int[] | 关联动态

try {
    $result = $apiInstance->putEnterpriseIdWeekReportsUsernameYearWeekIndex($enterpriseId, $year, $content, $weekIndex, $username, $accessToken, $pullRequestIds, $issueIds, $eventIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeekReportsApi->putEnterpriseIdWeekReportsUsernameYearWeekIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **year** | **int**| 周报所属年 |
 **content** | **string**| 周报内容 |
 **weekIndex** | **int**| 周报所属周 |
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **pullRequestIds** | [**int[]**](../Model/int.md)| 周报关联PR | [optional]
 **issueIds** | [**int[]**](../Model/int.md)| 周报关联issue | [optional]
 **eventIds** | [**int[]**](../Model/int.md)| 关联动态 | [optional]

### Return type

[**\GiteeEnterprise\Model\WeekReportDetail**](../Model/WeekReportDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

