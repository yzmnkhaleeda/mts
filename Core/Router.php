<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    protected array $routes = [];

    protected function add(string $method, string $uri, string $controller): static
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => strtoupper($method),
            'middleware' => null
        ];

        return $this;
    }

    public function get(string $uri, string $controller): static
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post(string $uri, string $controller): static
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete(string $uri, string $controller): static
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch(string $uri, string $controller): static
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put(string $uri, string $controller): static
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function only(string $key): static
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }

    public function route(string $uri, string $method)
    {
        $method = strtoupper($method);

        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {

                Middleware::resolve($route['middleware']);

                return require base_path('Http/controllers/' .$route[ 'controller']);
            }
        }

        $this->abort(); // 404
    }

    public function previousURI(): string
    {
        return $_SERVER['HTTP_REFERER'] ?? '/';
    }

    protected function abort(int $code = 404): never
    {
        http_response_code($code);
        
        require base_path("views/{$code}.php");

        die();
    }
}
