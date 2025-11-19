<?php

namespace System\View;

class View
{
    protected string $basePath;

    public function __construct($basePath = null)
    {
        $this->basePath = $basePath ?? dirname(__DIR__, 2) . '/app/Views/';
    }

    public function render($view, $data = [])
    {
        $path = $this->basePath . str_replace('.', '/', $view) . '.php';

        if (!file_exists($path)) {
            throw new \Exception("View file not found: $path");
        }

        extract($data);

        ob_start();
        include $path;
        return ob_get_clean();
    }
}
