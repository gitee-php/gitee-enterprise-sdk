<?php

namespace GiteeEnterprise;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\ResponseInterface;

class ResponseHandler
{
    private $response;

    public function createClientWithMiddleware($config = [])
    {
        if (!empty($config) && isset($config['handler'])) {
            $this->createMiddleware($config['handler']);
        }

        if (empty($config)) {
            $config['handler'] = $this->createMiddleware();
        }

        return new Client($config);
    }

    public function createMiddleware($handlerStack = null)
    {
        if ($handlerStack === null)
        {
            $handlerStack = HandlerStack::create();
        }

        $handlerStack->push(Middleware::mapResponse(function (ResponseInterface $response)
        {
            $this->response = $response;
            return $response;
        }));

        return $handlerStack;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function __toString()
    {
        return (string)$this->response->getBody();
    }

    public function toArray()
    {
        return json_decode((string)$this->response->getBody(), true);
    }
}
