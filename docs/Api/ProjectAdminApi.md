# GiteeEnterprise\ProjectAdminApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdProjectsProjectIdAvailabelKeys**](ProjectAdminApi.md#getEnterpriseIdProjectsProjectIdAvailabelKeys) | **GET** /{enterprise_id}/projects/{project_id}/availabel_keys | 可部署公钥
[**getEnterpriseIdProjectsProjectIdDeployKeys**](ProjectAdminApi.md#getEnterpriseIdProjectsProjectIdDeployKeys) | **GET** /{enterprise_id}/projects/{project_id}/deploy_keys | 已启用公钥
[**getEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId**](ProjectAdminApi.md#getEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId) | **GET** /{enterprise_id}/projects/{project_id}/deploy_keys/{deploy_key_id} | 公钥详情
[**getEnterpriseIdProjectsProjectIdPrAssigner**](ProjectAdminApi.md#getEnterpriseIdProjectsProjectIdPrAssigner) | **GET** /{enterprise_id}/projects/{project_id}/pr_assigner | 查看代码审查设置
[**postEnterpriseIdProjectsProjectIdDeployKeys**](ProjectAdminApi.md#postEnterpriseIdProjectsProjectIdDeployKeys) | **POST** /{enterprise_id}/projects/{project_id}/deploy_keys | 添加部署公钥
[**postEnterpriseIdProjectsProjectIdInitialiazeReadme**](ProjectAdminApi.md#postEnterpriseIdProjectsProjectIdInitialiazeReadme) | **POST** /{enterprise_id}/projects/{project_id}/initialiaze_readme | 初始化README
[**putEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId**](ProjectAdminApi.md#putEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId) | **PUT** /{enterprise_id}/projects/{project_id}/deploy_keys/{deploy_key_id} | 启用/停用公钥
[**putEnterpriseIdProjectsProjectIdPrAssigner**](ProjectAdminApi.md#putEnterpriseIdProjectsProjectIdPrAssigner) | **PUT** /{enterprise_id}/projects/{project_id}/pr_assigner | 指派审查、测试人员
[**putEnterpriseIdProjectsProjectIdStatus**](ProjectAdminApi.md#putEnterpriseIdProjectsProjectIdStatus) | **PUT** /{enterprise_id}/projects/{project_id}/status | 仓库归档(状态管理)


# **getEnterpriseIdProjectsProjectIdAvailabelKeys**
> \GiteeEnterprise\Model\EnterpriseDeployKey getEnterpriseIdProjectsProjectIdAvailabelKeys($enterpriseId, $projectId, $accessToken, $qt, $page, $perPage)

可部署公钥

可部署公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdAvailabelKeys($enterpriseId, $projectId, $accessToken, $qt, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->getEnterpriseIdProjectsProjectIdAvailabelKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseDeployKey**](../Model/EnterpriseDeployKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdDeployKeys**
> \GiteeEnterprise\Model\EnterpriseDeployKey getEnterpriseIdProjectsProjectIdDeployKeys($enterpriseId, $projectId, $accessToken, $qt, $page, $perPage)

已启用公钥

已启用公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdDeployKeys($enterpriseId, $projectId, $accessToken, $qt, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->getEnterpriseIdProjectsProjectIdDeployKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseDeployKey**](../Model/EnterpriseDeployKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId**
> \GiteeEnterprise\Model\EnterpriseDeployKey getEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId($enterpriseId, $projectId, $deployKeyId, $accessToken, $qt)

公钥详情

公钥详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$deployKeyId = 56; // int | 公钥id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId($enterpriseId, $projectId, $deployKeyId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->getEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **deployKeyId** | **int**| 公钥id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseDeployKey**](../Model/EnterpriseDeployKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdPrAssigner**
> \GiteeEnterprise\Model\PrAssigner getEnterpriseIdProjectsProjectIdPrAssigner($enterpriseId, $projectId, $accessToken, $qt)

查看代码审查设置

查看代码审查设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdPrAssigner($enterpriseId, $projectId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->getEnterpriseIdProjectsProjectIdPrAssigner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\PrAssigner**](../Model/PrAssigner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdDeployKeys**
> \GiteeEnterprise\Model\EnterpriseDeployKey postEnterpriseIdProjectsProjectIdDeployKeys($enterpriseId, $projectId, $title, $key, $accessToken, $qt)

添加部署公钥

添加部署公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$title = "title_example"; // string | 标题
$key = "key_example"; // string | 公钥
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdDeployKeys($enterpriseId, $projectId, $title, $key, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->postEnterpriseIdProjectsProjectIdDeployKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **title** | **string**| 标题 |
 **key** | **string**| 公钥 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseDeployKey**](../Model/EnterpriseDeployKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdInitialiazeReadme**
> postEnterpriseIdProjectsProjectIdInitialiazeReadme($enterpriseId, $projectId, $accessToken, $qt)

初始化README

初始化README

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->postEnterpriseIdProjectsProjectIdInitialiazeReadme($enterpriseId, $projectId, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->postEnterpriseIdProjectsProjectIdInitialiazeReadme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
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

# **putEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId**
> putEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId($enterpriseId, $projectId, $deployKeyId, $enabled, $accessToken, $qt)

启用/停用公钥

启用/停用公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$deployKeyId = 56; // int | 公钥id
$enabled = 56; // int | 0:停用，1：启用
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->putEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId($enterpriseId, $projectId, $deployKeyId, $enabled, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->putEnterpriseIdProjectsProjectIdDeployKeysDeployKeyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **deployKeyId** | **int**| 公钥id |
 **enabled** | **int**| 0:停用，1：启用 |
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

# **putEnterpriseIdProjectsProjectIdPrAssigner**
> \GiteeEnterprise\Model\PrAssigner putEnterpriseIdProjectsProjectIdPrAssigner($enterpriseId, $projectId, $accessToken, $qt, $assignerIds, $prAssignNum, $testerIds, $prTestNum)

指派审查、测试人员

指派审查、测试人员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$assignerIds = "assignerIds_example"; // string | 审查人员id，英文逗号分隔
$prAssignNum = 56; // int | 可合并的审查人员门槛数
$testerIds = "testerIds_example"; // string | 测试人员id，英文逗号分隔
$prTestNum = 56; // int | 可合并的测试人员门槛数

try {
    $result = $apiInstance->putEnterpriseIdProjectsProjectIdPrAssigner($enterpriseId, $projectId, $accessToken, $qt, $assignerIds, $prAssignNum, $testerIds, $prTestNum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->putEnterpriseIdProjectsProjectIdPrAssigner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **assignerIds** | **string**| 审查人员id，英文逗号分隔 | [optional]
 **prAssignNum** | **int**| 可合并的审查人员门槛数 | [optional]
 **testerIds** | **string**| 测试人员id，英文逗号分隔 | [optional]
 **prTestNum** | **int**| 可合并的测试人员门槛数 | [optional]

### Return type

[**\GiteeEnterprise\Model\PrAssigner**](../Model/PrAssigner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdStatus**
> putEnterpriseIdProjectsProjectIdStatus($enterpriseId, $projectId, $status, $accessToken, $qt, $password, $validateType, $smsCaptcha)

仓库归档(状态管理)

仓库归档(状态管理)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$status = 56; // int | 仓库状态，0：开始，1：暂停，2：关闭
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$password = "password_example"; // string | 用户密码
$validateType = "validateType_example"; // string | 验证方式
$smsCaptcha = "smsCaptcha_example"; // string | 短信验证码

try {
    $apiInstance->putEnterpriseIdProjectsProjectIdStatus($enterpriseId, $projectId, $status, $accessToken, $qt, $password, $validateType, $smsCaptcha);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAdminApi->putEnterpriseIdProjectsProjectIdStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **status** | **int**| 仓库状态，0：开始，1：暂停，2：关闭 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **password** | **string**| 用户密码 | [optional]
 **validateType** | **string**| 验证方式 | [optional]
 **smsCaptcha** | **string**| 短信验证码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

