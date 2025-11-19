<?php

namespace System\Routing;

use System\Http\Request;
use System\Http\Response;

class Router
{
    protected array $routes = [];
    protected Request $request;
    protected Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($uri, $callback)
    {
        $this->routes['GET'][$uri] = $callback;
    }

    public function post($uri, $callback)
    {
        $this->routes['POST'][$uri] = $callback;
    }

    public function dispatch()
    {
        $method = $this->request->method();
        $uri = $this->request->uri();

        $callback = $this->routes[$method][$uri] ?? null;

        if (! $callback) {
            http_response_code(404);
            echo "404 - Route Not Found";
            return;
        }

        return call_user_func($callback, $this->request, $this->response);
    }
}
