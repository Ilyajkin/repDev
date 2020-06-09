<?php

class Route {  
    private const CONTROLLER_NAME_PREFIX = 'controller_';

    private $uri;
    private $routeParams;
    private $routes;
    
    public function __construct(string $uri) {
        $this->uri = $uri;
        $routesPath = 'routesPath.php';
        $this->routes = require_once($routesPath);
        $this->routeParams = $this->getPathParamsByUri($this->uri);
    }
    
 public function getPathParamsByUri($uri) {
        foreach ($this->routes as $pathParams) {
            if ($uri == $pathParams['path']) {
                return $pathParams;
            }
        }
 }
    public function getControllerName(): string {
        return Route::CONTROLLER_NAME_PREFIX . $this->uri; 
    }
    
    /*Написать методы для получения контроллера и действия. 
    В методе getPathParamsByUri($uri учесть: 1) если у текущего перебираемого пути нет path, то его пропустить
    2) Если за время перебора routes ничего не нашло, то вернуть defoult

    
   