<?php

namespace App;

class Router {

    private $handlers = [];
    private const METHOD_POST = 'POST';
    private const METHOD_GET = 'GET';

    public function get( $path, $handler) : void
    {
        $this->addHandler(self::METHOD_GET, $path, $handler);
    }

    public function post(string $path, $handler) : void
    {
        $this->addHandler(self::METHOD_POST, $path, $handler);
    }

    private function addHandler(string $method, string $path, $handler) : void
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }

    public function run()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method = $_SERVER['REQUEST_METHOD'];
        var_dump($requestUri);
        var_dump($requestPath);

        $callback = null;

        foreach($this->handlers as $handler) {
            if($handler['path'] === $requestPath && $method === $handler['method']) {
                $callback = $handler['handler'];
            }
        }

        call_user_func_array($callback, [array_merge($_GET, $_POST)]);
    }
}