<?php
/**
 * ProjectPushConfigApi
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
 * OpenAPI spec version: 0.1.343
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.42
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
 * ProjectPushConfigApi Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectPushConfigApi
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
     * Operation getEnterpriseIdProjectsProjectIdPushConfig
     *
     * 查看推送规则详情
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GiteeEnterprise\Model\ProjectPushConfig
     */
    public function getEnterpriseIdProjectsProjectIdPushConfig($enterpriseId, $projectId, $accessToken = null, $qt = null)
    {
        list($response) = $this->getEnterpriseIdProjectsProjectIdPushConfigWithHttpInfo($enterpriseId, $projectId, $accessToken, $qt);
        return $response;
    }

    /**
     * Operation getEnterpriseIdProjectsProjectIdPushConfigWithHttpInfo
     *
     * 查看推送规则详情
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GiteeEnterprise\Model\ProjectPushConfig, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseIdProjectsProjectIdPushConfigWithHttpInfo($enterpriseId, $projectId, $accessToken = null, $qt = null)
    {
        $returnType = '\GiteeEnterprise\Model\ProjectPushConfig';
        $request = $this->getEnterpriseIdProjectsProjectIdPushConfigRequest($enterpriseId, $projectId, $accessToken, $qt);

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
                        '\GiteeEnterprise\Model\ProjectPushConfig',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEnterpriseIdProjectsProjectIdPushConfigAsync
     *
     * 查看推送规则详情
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseIdProjectsProjectIdPushConfigAsync($enterpriseId, $projectId, $accessToken = null, $qt = null)
    {
        return $this->getEnterpriseIdProjectsProjectIdPushConfigAsyncWithHttpInfo($enterpriseId, $projectId, $accessToken, $qt)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEnterpriseIdProjectsProjectIdPushConfigAsyncWithHttpInfo
     *
     * 查看推送规则详情
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseIdProjectsProjectIdPushConfigAsyncWithHttpInfo($enterpriseId, $projectId, $accessToken = null, $qt = null)
    {
        $returnType = '\GiteeEnterprise\Model\ProjectPushConfig';
        $request = $this->getEnterpriseIdProjectsProjectIdPushConfigRequest($enterpriseId, $projectId, $accessToken, $qt);

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
     * Create request for operation 'getEnterpriseIdProjectsProjectIdPushConfig'
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEnterpriseIdProjectsProjectIdPushConfigRequest($enterpriseId, $projectId, $accessToken = null, $qt = null)
    {
        // verify the required parameter 'enterpriseId' is set
        if ($enterpriseId === null || (is_array($enterpriseId) && count($enterpriseId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterpriseId when calling getEnterpriseIdProjectsProjectIdPushConfig'
            );
        }
        // verify the required parameter 'projectId' is set
        if ($projectId === null || (is_array($projectId) && count($projectId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $projectId when calling getEnterpriseIdProjectsProjectIdPushConfig'
            );
        }

        $resourcePath = '/{enterprise_id}/projects/{project_id}/push_config';
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
        if ($qt !== null) {
            $queryParams['qt'] = ObjectSerializer::toQueryValue($qt);
        }

        // path params
        if ($enterpriseId !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterpriseId),
                $resourcePath
            );
        }
        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                '{' . 'project_id' . '}',
                ObjectSerializer::toPathValue($projectId),
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
     * Operation postEnterpriseIdProjectsProjectIdPushConfigValidate
     *
     * 验证commit信息样式，并返回一个合理的样式
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string[] $commitMessage 待验证的commit 消息 (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function postEnterpriseIdProjectsProjectIdPushConfigValidate($enterpriseId, $projectId, $commitMessage, $accessToken = null, $qt = null)
    {
        $this->postEnterpriseIdProjectsProjectIdPushConfigValidateWithHttpInfo($enterpriseId, $projectId, $commitMessage, $accessToken, $qt);
    }

    /**
     * Operation postEnterpriseIdProjectsProjectIdPushConfigValidateWithHttpInfo
     *
     * 验证commit信息样式，并返回一个合理的样式
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string[] $commitMessage 待验证的commit 消息 (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postEnterpriseIdProjectsProjectIdPushConfigValidateWithHttpInfo($enterpriseId, $projectId, $commitMessage, $accessToken = null, $qt = null)
    {
        $returnType = '';
        $request = $this->postEnterpriseIdProjectsProjectIdPushConfigValidateRequest($enterpriseId, $projectId, $commitMessage, $accessToken, $qt);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation postEnterpriseIdProjectsProjectIdPushConfigValidateAsync
     *
     * 验证commit信息样式，并返回一个合理的样式
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string[] $commitMessage 待验证的commit 消息 (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postEnterpriseIdProjectsProjectIdPushConfigValidateAsync($enterpriseId, $projectId, $commitMessage, $accessToken = null, $qt = null)
    {
        return $this->postEnterpriseIdProjectsProjectIdPushConfigValidateAsyncWithHttpInfo($enterpriseId, $projectId, $commitMessage, $accessToken, $qt)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postEnterpriseIdProjectsProjectIdPushConfigValidateAsyncWithHttpInfo
     *
     * 验证commit信息样式，并返回一个合理的样式
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string[] $commitMessage 待验证的commit 消息 (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postEnterpriseIdProjectsProjectIdPushConfigValidateAsyncWithHttpInfo($enterpriseId, $projectId, $commitMessage, $accessToken = null, $qt = null)
    {
        $returnType = '';
        $request = $this->postEnterpriseIdProjectsProjectIdPushConfigValidateRequest($enterpriseId, $projectId, $commitMessage, $accessToken, $qt);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'postEnterpriseIdProjectsProjectIdPushConfigValidate'
     *
     * @param  int $enterpriseId 企业id (required)
     * @param  string $projectId 仓库 id 或 path (required)
     * @param  string[] $commitMessage 待验证的commit 消息 (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $qt path类型（查询参数为path）, 空则表示查询参数为id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postEnterpriseIdProjectsProjectIdPushConfigValidateRequest($enterpriseId, $projectId, $commitMessage, $accessToken = null, $qt = null)
    {
        // verify the required parameter 'enterpriseId' is set
        if ($enterpriseId === null || (is_array($enterpriseId) && count($enterpriseId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterpriseId when calling postEnterpriseIdProjectsProjectIdPushConfigValidate'
            );
        }
        // verify the required parameter 'projectId' is set
        if ($projectId === null || (is_array($projectId) && count($projectId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $projectId when calling postEnterpriseIdProjectsProjectIdPushConfigValidate'
            );
        }
        // verify the required parameter 'commitMessage' is set
        if ($commitMessage === null || (is_array($commitMessage) && count($commitMessage) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $commitMessage when calling postEnterpriseIdProjectsProjectIdPushConfigValidate'
            );
        }

        $resourcePath = '/{enterprise_id}/projects/{project_id}/push_config/validate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($enterpriseId !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterpriseId),
                $resourcePath
            );
        }
        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                '{' . 'project_id' . '}',
                ObjectSerializer::toPathValue($projectId),
                $resourcePath
            );
        }

        // form params
        if ($accessToken !== null) {
            $formParams['access_token'] = ObjectSerializer::toFormValue($accessToken);
        }
        // form params
        if ($qt !== null) {
            $formParams['qt'] = ObjectSerializer::toFormValue($qt);
        }
        // form params
        if ($commitMessage !== null) {
            $formParams['commit_message'] = ObjectSerializer::toFormValue($commitMessage);
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
                ['application/json']
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
            'POST',
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
