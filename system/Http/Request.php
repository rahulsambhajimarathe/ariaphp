<?php

namespace System\Http;

class Request
{
    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function uri()
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $uri = parse_url($uri, PHP_URL_PATH);

        $uri = trim($uri, '/');
        $base = 'airaphp/public';
        if (str_starts_with($uri, $base)) {
            $uri = substr($uri, strlen($base));
        }

        return trim($uri, '/');
    }


    public function input($key = null)
    {
        $data = array_merge($_GET, $_POST);

        if ($key === null) {
            return $data;
        }

        return $data[$key] ?? null;
    }
}
