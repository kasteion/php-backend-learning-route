<?php

namespace App\Http;

use Exception;
use Throwable;

class Request {
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct(){
        // home      /controlador/metodo
        // platzi.com/servicios/index
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);
        
        // var_dump($_SERVER['REQUEST_URI']);
        // var_dump($this->segments);

        $this->setController();
        $this->setMethod();
    }

    public function setController(){
        $this->controller = empty($this->segments[1]) 
            ? 'home' 
            : $this->segments[1];
    }

    public function setMethod(){
        $this->method = empty($this->segments[2]) 
            ? 'index'
            : $this->segments[2];
    }

    public function getController(){
        $controller = ucfirst($this->controller);
        //home, homeController
        return "App\Http\Controllers\\{$controller}Controller";
    }

    public function getMethod(){
        return $this->method;
    }

    public function send(){
        $controller = $this->getController();
        $method = $this->getMethod();

        $response = call_user_func([
            new $controller,
            $method
        ]);

        // $response->send();
        try {
            if ($response instanceof Response) {
                $response->send();
            } else {
                throw new Exception("Error Processing Request");
            }
        } 
        catch (Throwable $e) {
            echo "Details: {$e->getMessage()}";
        }
    }
}

?>
