<?php

class Router {
    private $requestUri;
    
    public function __construct() {
        $this->requestUri = trim($_SERVER['REQUEST_URI'], '/');
    }
    
    public function getRoute(): Route {
        return new Route($this->requestUri);
    }
}
    