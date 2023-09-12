# GiteeEnterprise\LabelsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdLabelsLabelId**](LabelsApi.md#deleteEnterpriseIdLabelsLabelId) | **DELETE** /{enterprise_id}/labels/{label_id} | 删除标签
[**getEnterpriseIdLabels**](LabelsApi.md#getEnterpriseIdLabels) | **GET** /{enterprise_id}/labels | 获取标签列表
[**postEnterpriseIdLabels**](LabelsApi.md#postEnterpriseIdLabels) | **POST** /{enterprise_id}/labels | 新增标签
[**putEnterpriseIdLabelsChangeSerial**](LabelsApi.md#putEnterpriseIdLabelsChangeSerial) | **PUT** /{enterprise_id}/labels/change_serial | 更新标签排序
[**putEnterpriseIdLabelsLabelId**](LabelsApi.md#putEnterpriseIdLabelsLabelId) | **PUT** /{enterprise_id}/labels/{label_id} | 更新标签


# **deleteEnterpriseIdLabelsLabelId**
> deleteEnterpriseIdLabelsLabelId($enterpriseId, $labelId, $accessToken)

删除标签

删除标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$labelId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdLabelsLabelId($enterpriseId, $labelId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->deleteEnterpriseIdLabelsLabelId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **labelId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdLabels**
> \GiteeEnterprise\Model\LabelDetail[] getEnterpriseIdLabels($enterpriseId, $accessToken, $sort, $direction, $search, $labelIds, $page, $perPage)

获取标签列表

获取标签列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(created_at、updated_at, serial)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$search = "search_example"; // string | 搜索关键字
$labelIds = "labelIds_example"; // string | 根据 id 返回标签列表
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdLabels($enterpriseId, $accessToken, $sort, $direction, $search, $labelIds, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getEnterpriseIdLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(created_at、updated_at, serial) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **search** | **string**| 搜索关键字 | [optional]
 **labelIds** | **string**| 根据 id 返回标签列表 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\LabelDetail[]**](../Model/LabelDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdLabels**
> \GiteeEnterprise\Model\LabelDetail postEnterpriseIdLabels($enterpriseId, $name, $color, $accessToken)

新增标签

新增标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$name = "name_example"; // string | 标签名称
$color = "color_example"; // string | 标签颜色
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdLabels($enterpriseId, $name, $color, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->postEnterpriseIdLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **name** | **string**| 标签名称 |
 **color** | **string**| 标签颜色 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\LabelDetail**](../Model/LabelDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdLabelsChangeSerial**
> putEnterpriseIdLabelsChangeSerial($labelIds, $enterpriseId, $accessToken)

更新标签排序

更新标签排序

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$labelIds = "labelIds_example"; // string | 标签id(预期顺序), 逗号隔开
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putEnterpriseIdLabelsChangeSerial($labelIds, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->putEnterpriseIdLabelsChangeSerial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelIds** | **string**| 标签id(预期顺序), 逗号隔开 |
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

# **putEnterpriseIdLabelsLabelId**
> \GiteeEnterprise\Model\Label putEnterpriseIdLabelsLabelId($enterpriseId, $labelId, $name, $color, $accessToken)

更新标签

更新标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$labelId = 56; // int | 标签 id
$name = "name_example"; // string | 标签名称
$color = "color_example"; // string | 标签颜色
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putEnterpriseIdLabelsLabelId($enterpriseId, $labelId, $name, $color, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->putEnterpriseIdLabelsLabelId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **labelId** | **int**| 标签 id |
 **name** | **string**| 标签名称 |
 **color** | **string**| 标签颜色 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Label**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

