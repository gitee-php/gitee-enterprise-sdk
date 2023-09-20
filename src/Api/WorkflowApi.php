<?php
/**
 * WorkflowApi
 * PHP version 5
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Gitee Open API
 *
 * Gitee Enterprise SDK for PHP
 *
 * OpenAPI spec version: 0.1.335
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GiteeEnterprise\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GiteeEnterprise\ApiException;
use GiteeEnterprise\Configuration;
use GiteeEnterprise\HeaderSelector;
use GiteeEnterprise\ObjectSerializer;

/**
 * WorkflowApi Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkflowApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getEnterpriseIdWorkflowList
     *
     * 获取任务类型的工作流列表
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $issueTypeIds 任务状态的 id，如存在多个使用英文逗号(,)分割 (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GiteeEnterprise\Model\TreeNote
     */
    public function getEnterpriseIdWorkflowList($enterpriseId, $accessToken = null, $issueTypeIds = null, $page = '1', $perPage = null)
    {
        list($response) = $this->getEnterpriseIdWorkflowListWithHttpInfo($enterpriseId, $accessToken, $issueTypeIds, $page, $perPage);
        return $response;
    }

    /**
     * Operation getEnterpriseIdWorkflowListWithHttpInfo
     *
     * 获取任务类型的工作流列表
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $issueTypeIds 任务状态的 id，如存在多个使用英文逗号(,)分割 (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GiteeEnterprise\Model\TreeNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseIdWorkflowListWithHttpInfo($enterpriseId, $accessToken = null, $issueTypeIds = null, $page = '1', $perPage = null)
    {
        $returnType = '\GiteeEnterprise\Model\TreeNote';
        $request = $this->getEnterpriseIdWorkflowListRequest($enterpriseId, $accessToken, $issueTypeIds, $page, $perPage);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GiteeEnterprise\Model\TreeNote',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEnterpriseIdWorkflowListAsync
     *
     * 获取任务类型的工作流列表
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $issueTypeIds 任务状态的 id，如存在多个使用英文逗号(,)分割 (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseIdWorkflowListAsync($enterpriseId, $accessToken = null, $issueTypeIds = null, $page = '1', $perPage = null)
    {
        return $this->getEnterpriseIdWorkflowListAsyncWithHttpInfo($enterpriseId, $accessToken, $issueTypeIds, $page, $perPage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEnterpriseIdWorkflowListAsyncWithHttpInfo
     *
     * 获取任务类型的工作流列表
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $issueTypeIds 任务状态的 id，如存在多个使用英文逗号(,)分割 (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseIdWorkflowListAsyncWithHttpInfo($enterpriseId, $accessToken = null, $issueTypeIds = null, $page = '1', $perPage = null)
    {
        $returnType = '\GiteeEnterprise\Model\TreeNote';
        $request = $this->getEnterpriseIdWorkflowListRequest($enterpriseId, $accessToken, $issueTypeIds, $page, $perPage);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEnterpriseIdWorkflowList'
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $issueTypeIds 任务状态的 id，如存在多个使用英文逗号(,)分割 (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEnterpriseIdWorkflowListRequest($enterpriseId, $accessToken = null, $issueTypeIds = null, $page = '1', $perPage = null)
    {
        // verify the required parameter 'enterpriseId' is set
        if ($enterpriseId === null || (is_array($enterpriseId) && count($enterpriseId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterpriseId when calling getEnterpriseIdWorkflowList'
            );
        }

        $resourcePath = '/{enterprise_id}/workflow/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($accessToken !== null) {
            $queryParams['access_token'] = ObjectSerializer::toQueryValue($accessToken);
        }
        // query params
        if ($issueTypeIds !== null) {
            $queryParams['issue_type_ids'] = ObjectSerializer::toQueryValue($issueTypeIds);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($perPage !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($perPage);
        }

        // path params
        if ($enterpriseId !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterpriseId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
