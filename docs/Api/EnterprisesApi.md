# GiteeEnterprise\EnterprisesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseId**](EnterprisesApi.md#getEnterpriseId) | **GET** /{enterprise_id} | 获取企业基础信息
[**getEnterpriseIdAuths**](EnterprisesApi.md#getEnterpriseIdAuths) | **GET** /{enterprise_id}/auths | 获取授权用户在企业拥有的权限
[**getEnterpriseIdNavigates**](EnterprisesApi.md#getEnterpriseIdNavigates) | **GET** /{enterprise_id}/navigates | 企业导航栏设置
[**getEnterpriseIdQuota**](EnterprisesApi.md#getEnterpriseIdQuota) | **GET** /{enterprise_id}/quota | 获取当前企业的配额信息
[**getList**](EnterprisesApi.md#getList) | **GET** /list | 获取授权用户的企业列表
[**putEnterpriseId**](EnterprisesApi.md#putEnterpriseId) | **PUT** /{enterprise_id} | 更新企业基础信息
[**putEnterpriseIdNavigates**](EnterprisesApi.md#putEnterpriseIdNavigates) | **PUT** /{enterprise_id}/navigates | 更新企业导航栏设置
[**putEnterpriseIdNotices**](EnterprisesApi.md#putEnterpriseIdNotices) | **PUT** /{enterprise_id}/notices | 更新企业公告内容


# **getEnterpriseId**
> \GiteeEnterprise\Model\Enterprise getEnterpriseId($enterpriseId, $accessToken)

获取企业基础信息

获取企业基础信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseId($enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getEnterpriseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Enterprise**](../Model/Enterprise.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdAuths**
> \GiteeEnterprise\Model\EnterpriseAuth getEnterpriseIdAuths($enterpriseId, $accessToken)

获取授权用户在企业拥有的权限

获取授权用户在企业拥有的权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdAuths($enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getEnterpriseIdAuths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseAuth**](../Model/EnterpriseAuth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdNavigates**
> \GiteeEnterprise\Model\EnterpriseNavigate[] getEnterpriseIdNavigates($enterpriseId, $accessToken)

企业导航栏设置

企业导航栏设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdNavigates($enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getEnterpriseIdNavigates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseNavigate[]**](../Model/EnterpriseNavigate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdQuota**
> \GiteeEnterprise\Model\EnterpriseQuota getEnterpriseIdQuota($enterpriseId, $accessToken)

获取当前企业的配额信息

获取当前企业的配额信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdQuota($enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getEnterpriseIdQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseQuota**](../Model/EnterpriseQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getList**
> \GiteeEnterprise\Model\Enterprise[] getList($accessToken, $sort, $direction, $page, $perPage)

获取授权用户的企业列表

获取授权用户的企业列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(name || created_at)
$direction = "desc"; // string | 可选。升序/降序
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getList($accessToken, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(name || created_at) | [optional]
 **direction** | **string**| 可选。升序/降序 | [optional] [default to desc]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Enterprise[]**](../Model/Enterprise.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseId**
> \GiteeEnterprise\Model\Enterprise putEnterpriseId($enterpriseId, $accessToken, $name, $public, $email, $website, $description, $phone, $watermark)

更新企业基础信息

更新企业基础信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 企业名称
$public = "public_example"; // string | 企业属性 (0: 不公开 1: 公开）
$email = "email_example"; // string | 企业邮箱
$website = "website_example"; // string | 企业网站
$description = "description_example"; // string | 企业简介
$phone = "phone_example"; // string | 手机号码
$watermark = true; // bool | 企业水印

try {
    $result = $apiInstance->putEnterpriseId($enterpriseId, $accessToken, $name, $public, $email, $website, $description, $phone, $watermark);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->putEnterpriseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 企业名称 | [optional]
 **public** | **string**| 企业属性 (0: 不公开 1: 公开） | [optional]
 **email** | **string**| 企业邮箱 | [optional]
 **website** | **string**| 企业网站 | [optional]
 **description** | **string**| 企业简介 | [optional]
 **phone** | **string**| 手机号码 | [optional]
 **watermark** | **bool**| 企业水印 | [optional]

### Return type

[**\GiteeEnterprise\Model\Enterprise**](../Model/Enterprise.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdNavigates**
> \GiteeEnterprise\Model\EnterpriseNavigate[] putEnterpriseIdNavigates($enterpriseId, $accessToken, $navigatesId, $navigatesIcon, $navigatesActive)

更新企业导航栏设置

更新企业导航栏设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$navigatesId = array(56); // int[] | 导航卡id
$navigatesIcon = array(56); // int[] | 导航卡icon
$navigatesActive = array(True); // bool[] | 是否显示

try {
    $result = $apiInstance->putEnterpriseIdNavigates($enterpriseId, $accessToken, $navigatesId, $navigatesIcon, $navigatesActive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->putEnterpriseIdNavigates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **navigatesId** | [**int[]**](../Model/int.md)| 导航卡id | [optional]
 **navigatesIcon** | [**int[]**](../Model/int.md)| 导航卡icon | [optional]
 **navigatesActive** | [**bool[]**](../Model/bool.md)| 是否显示 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseNavigate[]**](../Model/EnterpriseNavigate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdNotices**
> \GiteeEnterprise\Model\Enterprise putEnterpriseIdNotices($enterpriseId, $content, $accessToken)

更新企业公告内容

更新企业公告内容

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$content = "content_example"; // string | 企业公告的内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putEnterpriseIdNotices($enterpriseId, $content, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->putEnterpriseIdNotices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **content** | **string**| 企业公告的内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Enterprise**](../Model/Enterprise.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

