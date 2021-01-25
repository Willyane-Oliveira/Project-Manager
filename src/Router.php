<?php

namespace projectmanager;

use projectmanager\Exceptions\HttpException;

class Router
{
  private $routes = [];

  //callback determines what will happen when a route is called
  public function add(STRING $method, string $pattern, $callback)
    {
        $method = strtolower($method);
        $pattern = '/^' . str_replace('/', '\/', $pattern) . '$/';
        $this->routes[$method][$pattern] = $callback;
    }

    public function run()
    {
        $url = $this->getCurrentUrl();
        $method = strtolower($_SERVER['REQUEST_METHOD']); //retrieve http method

        if (empty($this->routes[$method])) {
          throw new HttpException('Page not found', 404);
      }

    //checks if the route exists and returns it
    foreach ($this->routes[$method] as $route => $action) {
      if (preg_match($route, $url, $params)) {
          return compact('action', 'params'); //will create an array
      }
    }
    throw new HttpException('Page not found', 404);
  }

  public function getCurrentUrl()
  {
      $url = $_SERVER['PATH_INFO'] ?? '/';

    //Set url length
    if (strlen($url) > 1) {
      $url = rtrim($url, '/');
  }

  return $url;
  }
}
