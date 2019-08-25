<?php

declare(strict_types=1);

namespace Alunos;

class App
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        $endpoint = explode('?', $_SERVER['REQUEST_URI'])[0];

        if (!array_key_exists($endpoint, $this->router->routes())) {
            header('Status Code', true, 404);
            exit(0);
        }

        if (empty($resource = $this->router->routes()[$endpoint][$_SERVER['REQUEST_METHOD']])) {
            header('Status Code', true, 405);
            exit(0);
        }

        $controller = $resource['controller'];
        $method     = $resource['method'];

        return (new $controller)->$method();
    }
}
