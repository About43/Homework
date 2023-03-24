<?php
namespace Base;

class Route
{
    private $controllerName;
    private $actionName;
    private $processed = false;
    private $routes;


    private function process()
    {
        $parts = parse_url($_SERVER['REQUEST_URI']);
        $path = $parts['path'];
        if (($route = $this->routes[$path] ?? null) !== null) {
            $this->controllerName = $route[0];
            $this->actionName = $route[1];
        } else {
            echo '123';
        }
    }


    public function addRoute($path, $controllerName, $actionName)
    {
        $this->routes[$path] = [
          $controllerName,
          $actionName
        ];
    }

    public function getControllerName(): string
    {
        if(!$this->processed) {
            $this->process();
        }
        return $this->controllerName;
    }

    public function getActionName(): string
    {
        if(!$this->processed) {
            $this->process();
        }
        return $this->actionName . 'Action';
    }
}
