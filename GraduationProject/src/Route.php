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
        if(($route = $this->routes[$path])) {
            $this->controllerName =  $this->routes[$path][0];
            $this->actionName =  $this->routes[$path][1];
        }

    //    switch ($parts['path']) {
    //        case '/html/user/login':
//
  //              $controller = new \App\Controller\User();
    //            $controller->loginAction();
//
  //              break;
//
  //          case '/html/user/register' :
//
  //              $controller = new \App\Controller\User();
    //            $controller->registerAction();
//
  //              break;
//
  //          case '/html/blog':
    //        case '/html/blog/index':
//
  //              $controller = new \App\Controller\Blog();
    //            $controller->indexAction();
//
  //              break;
//
  //          default:
//
  //              header("HTTP/1.0 404 Not Found");
//
  //              break;
    //    }
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