<?php

declare(strict_types=1);

namespace Alunos;

class Router
{
    private $routes = [];
    private $defaultNamespaceController = 'Alunos\\Controller\\';

    public function get(string $endpoint, string $action)
    {
        $this->addResource($endpoint, $action, 'GET');
    }

    public function post(string $endpoint, string $action)
    {
        $this->addResource($endpoint, $action, 'POST');
    }

    private function addResource(string $endpoint, string $action, string $verb)
    {
        $actionArray = explode('@', $action);

        $controller = $actionArray[0];
        $method = $actionArray[1];

        $this->routes[$endpoint][$verb] = [
            'controller' => sprintf('%s%s', $this->defaultNamespaceController, $controller),
            'method' => $method,
        ];
    }

    public function routes()
    {
        $routes = $this->routes;

        return array_map(function ($item) {
            return $item;
        }, $routes);
    }
}
