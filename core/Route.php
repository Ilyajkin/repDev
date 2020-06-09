<?php

class Route {  
    private const CONTROLLER_NAME_PREFIX = 'controller_';
    
    
    private $uri;
    
    public function __construct(string $uri) {
        $this->uri = $uri;
        $routesPath = 'routesPath.php';
        $this ->routes = require_once($routesPath);
    }
    
    /*public function checkUri() {
        foreach ($this->routes as $uriPattern => $path) {
            i
    }*/
    
    public function getControllerName(): string {
        return Route::CONTROLLER_NAME_PREFIX . $this->uri; 
    }
    
    
     
    public function requireController() {
        $controllerFile = 'controllers/' . Route::CONTROLLER_NAME_PREFIX . $this->uri . '.php';
        if (file_exists($controllerFile)) {
                require_once($controllerFile);
        }      
    }
     
    
}

    
   