<?php

namespace Core;

class Router {
    protected $routes = [];

    protected function add($method, $uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => strtoupper($method),
            'middleware' => null
        ];

        return $this;
    }

    public function get($uri, $controller)    
    { 
        return $this->add('GET', $uri, $controller); 
    }
    public function post($uri, $controller)   
    { 
        return $this->add('POST', $uri, $controller); 
    }
    public function delete($uri, $controller) 
    { 
        return $this->add('DELETE', $uri, $controller); 
    }
    public function patch($uri, $controller)  
    { 
        return $this->add('PATCH', $uri, $controller); 
    }
    public function put($uri, $controller)    
    { 
        return $this->add('PUT', $uri, $controller); 
    }

    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }

    public function route($uri, $method) {
        $method = strtoupper($method);

        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                //apply middleware if exists

                if ($route['middleware'] === 'guest') {

                }
                

            if ($route['middleware'] === 'auth') {

            }

            // if ($route['middleware'] === 'admin') {
            //     if (!($_SESSION['admin_id'] ?? false)) {
            //         abort(403);
            //     }
            // }

                return require base_path($route['controller']);
            }
        }

        abort(); // 404
    }
}
