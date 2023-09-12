# GiteeEnterprise\DeployKeyApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdDeployKeysDeployKeyIdProjects**](DeployKeyApi.md#deleteEnterpriseIdDeployKeysDeployKeyIdProjects) | **DELETE** /{enterprise_id}/deploy_keys/{deploy_key_id}/projects | 部署公钥移除仓库
[**getEnterpriseIdDeployKeys**](DeployKeyApi.md#getEnterpriseIdDeployKeys) | **GET** /{enterprise_id}/deploy_keys | 查看企业部署公钥
[**getEnterpriseIdDeployKeysDeployKeyIdProjects**](DeployKeyApi.md#getEnterpriseIdDeployKeysDeployKeyIdProjects) | **GET** /{enterprise_id}/deploy_keys/{deploy_key_id}/projects | 查看公钥部署的仓库
[**postEnterpriseIdDeployKeys**](DeployKeyApi.md#postEnterpriseIdDeployKeys) | **POST** /{enterprise_id}/deploy_keys | 添加部署公钥
[**postEnterpriseIdDeployKeysDeployKeyIdProjects**](DeployKeyApi.md#postEnterpriseIdDeployKeysDeployKeyIdProjects) | **POST** /{enterprise_id}/deploy_keys/{deploy_key_id}/projects | 部署公钥添加仓库
[**putEnterpriseIdDeployKeysDeployKeyId**](DeployKeyApi.md#putEnterpriseIdDeployKeysDeployKeyId) | **PUT** /{enterprise_id}/deploy_keys/{deploy_key_id} | 修改部署公钥


# **deleteEnterpriseIdDeployKeysDeployKeyIdProjects**
> deleteEnterpriseIdDeployKeysDeployKeyIdProjects($deployKeyId, $projectIds, $enterpriseId, $accessToken)

部署公钥移除仓库

部署公钥移除仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DeployKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deployKeyId = 56; // int | 部署公钥id
$projectIds = "projectIds_example"; // string | 添加仓库id，英文逗号分隔
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdDeployKeysDeployKeyIdProjects($deployKeyId, $projectIds, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling DeployKeyApi->deleteEnterpriseIdDeployKeysDeployKeyIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployKeyId** | **int**| 部署公钥id |
 **projectIds** | **string**| 添加仓库id，英文逗号分隔 |
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

# **getEnterpriseIdDeployKeys**
> \GiteeEnterprise\Model\EnterpriseDeployKey getEnterpriseIdDeployKeys($enterpriseId, $accessToken, $projectId, $search, $page, $perPage)

查看企业部署公钥

查看企业部署公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DeployKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$projectId = 56; // int | 仓库id
$search = "search_example"; // string | 公钥SHA256指纹或标题
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdDeployKeys($enterpriseId, $accessToken, $projectId, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeployKeyApi->getEnterpriseIdDeployKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **projectId** | **int**| 仓库id | [optional]
 **search** | **string**| 公钥SHA256指纹或标题 | [optional]
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

# **getEnterpriseIdDeployKeysDeployKeyIdProjects**
> \GiteeEnterprise\Model\Project getEnterpriseIdDeployKeysDeployKeyIdProjects($deployKeyId, $enterpriseId, $accessToken, $page, $perPage)

查看公钥部署的仓库

查看公钥部署的仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DeployKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deployKeyId = 56; // int | 部署公钥id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdDeployKeysDeployKeyIdProjects($deployKeyId, $enterpriseId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeployKeyApi->getEnterpriseIdDeployKeysDeployKeyIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployKeyId** | **int**| 部署公钥id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDeployKeys**
> \GiteeEnterprise\Model\EnterpriseDeployKey postEnterpriseIdDeployKeys($title, $key, $projectIds, $enterpriseId, $accessToken)

添加部署公钥

添加部署公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DeployKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$title = "title_example"; // string | 标题
$key = "key_example"; // string | 公钥
$projectIds = "projectIds_example"; // string | 部署仓库id列表，用英文逗号分隔
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdDeployKeys($title, $key, $projectIds, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeployKeyApi->postEnterpriseIdDeployKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| 标题 |
 **key** | **string**| 公钥 |
 **projectIds** | **string**| 部署仓库id列表，用英文逗号分隔 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseDeployKey**](../Model/EnterpriseDeployKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdDeployKeysDeployKeyIdProjects**
> \GiteeEnterprise\Model\Project postEnterpriseIdDeployKeysDeployKeyIdProjects($deployKeyId, $projectIds, $enterpriseId, $accessToken)

部署公钥添加仓库

部署公钥添加仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DeployKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deployKeyId = 56; // int | 部署公钥id
$projectIds = "projectIds_example"; // string | 添加仓库id，英文逗号分隔
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdDeployKeysDeployKeyIdProjects($deployKeyId, $projectIds, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeployKeyApi->postEnterpriseIdDeployKeysDeployKeyIdProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployKeyId** | **int**| 部署公钥id |
 **projectIds** | **string**| 添加仓库id，英文逗号分隔 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdDeployKeysDeployKeyId**
> \GiteeEnterprise\Model\EnterpriseDeployKey putEnterpriseIdDeployKeysDeployKeyId($deployKeyId, $title, $enterpriseId, $accessToken)

修改部署公钥

修改部署公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\DeployKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deployKeyId = 56; // int | 部署公钥id
$title = "title_example"; // string | 标题
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putEnterpriseIdDeployKeysDeployKeyId($deployKeyId, $title, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeployKeyApi->putEnterpriseIdDeployKeysDeployKeyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployKeyId** | **int**| 部署公钥id |
 **title** | **string**| 标题 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseDeployKey**](../Model/EnterpriseDeployKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

