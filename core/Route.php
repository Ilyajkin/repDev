<?php

class Route {  
    private const CONTROLLER_NAME_PREFIX = 'controller_';
    private const MODEL_NAME_PREFIX = 'model_';
    
    private $uri;
    
    public function __construct(string $uri) {
        $this->uri = $uri;
    }
    
    public function getControllerName(): string {
        return Route::CONTROLLER_NAME_PREFIX . $this->uri; 
    }
    
    public function getModelName(): string {
        return Route::MODEL_NAME_PREFIX . $this->uri;
    }
}
