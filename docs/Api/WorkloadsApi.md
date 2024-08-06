# GiteeEnterprise\WorkloadsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdWorkloads**](WorkloadsApi.md#getEnterpriseIdWorkloads) | **GET** /{enterprise_id}/workloads | 查询成员工时明细（Deprecated）
[**getEnterpriseIdWorkloadsV2**](WorkloadsApi.md#getEnterpriseIdWorkloadsV2) | **GET** /{enterprise_id}/workloads/v2 | 查询成员工时明细


# **getEnterpriseIdWorkloads**
> \GiteeEnterprise\Model\UserWorkloadsList getEnterpriseIdWorkloads($enterpriseId, $accessToken, $programIds, $userIds, $registeredDates, $page, $perPage)

查询成员工时明细（Deprecated）

查询成员工时明细（Deprecated）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WorkloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$programIds = "programIds_example"; // string | 项目ID， 以逗号分隔。 例：\"1,2,3\"
$userIds = "userIds_example"; // string | 用户ID，以逗号分隔。 例：\"1,2,3\"
$registeredDates = "registeredDates_example"; // string | 工时登记日期范围。以逗号分隔。 例：\"2022-01-01,2022-02-01\"
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdWorkloads($enterpriseId, $accessToken, $programIds, $userIds, $registeredDates, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkloadsApi->getEnterpriseIdWorkloads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programIds** | **string**| 项目ID， 以逗号分隔。 例：\&quot;1,2,3\&quot; | [optional]
 **userIds** | **string**| 用户ID，以逗号分隔。 例：\&quot;1,2,3\&quot; | [optional]
 **registeredDates** | **string**| 工时登记日期范围。以逗号分隔。 例：\&quot;2022-01-01,2022-02-01\&quot; | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\UserWorkloadsList**](../Model/UserWorkloadsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdWorkloadsV2**
> \GiteeEnterprise\Model\UserWorkloadsList getEnterpriseIdWorkloadsV2($enterpriseId, $accessToken, $programIds, $userIds, $registeredDates, $prevId)

查询成员工时明细

查询成员工时明细

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\WorkloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$programIds = "programIds_example"; // string | 项目ID， 以逗号分隔。 例：\"1,2,3\"
$userIds = "userIds_example"; // string | 用户ID，以逗号分隔。 例：\"1,2,3\"
$registeredDates = "registeredDates_example"; // string | 工时登记日期范围。以逗号分隔。 例：\"2022-01-01,2022-02-01\"
$prevId = 56; // int | 上一页最后一条记录的ID

try {
    $result = $apiInstance->getEnterpriseIdWorkloadsV2($enterpriseId, $accessToken, $programIds, $userIds, $registeredDates, $prevId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkloadsApi->getEnterpriseIdWorkloadsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **programIds** | **string**| 项目ID， 以逗号分隔。 例：\&quot;1,2,3\&quot; | [optional]
 **userIds** | **string**| 用户ID，以逗号分隔。 例：\&quot;1,2,3\&quot; | [optional]
 **registeredDates** | **string**| 工时登记日期范围。以逗号分隔。 例：\&quot;2022-01-01,2022-02-01\&quot; | [optional]
 **prevId** | **int**| 上一页最后一条记录的ID | [optional]

### Return type

[**\GiteeEnterprise\Model\UserWorkloadsList**](../Model/UserWorkloadsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

