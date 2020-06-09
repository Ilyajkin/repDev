<?php



class ControllerMain {
    
    private const MODEL_NAME_PREFIX = 'model_';
    private const VIEW_NAME_PREFIX = 'view_';

    public function __construct() {
        
    }
    
    public function getModelName($uri): string {
        return Route::MODEL_NAME_PREFIX . $this->uri;
    }
    
    public function getViewName($uri): string {
        return Route::VIEW_NAME_PREFIX . $this->uri;
    }
    
    public function requireModel($uri) {
        $modelFile = 'models/' . Route::MODEL_NAME_PREFIX . $this->uri . '.php';
        if (file_exists($modelFile)) {
                require_once($modelFile);
        }
    }
    
    public function requireView($uri) {
        $viewFile = 'views/' . Route::VIEW_NAME_PREFIX . $this->uri . '.php';
        if (file_exists($viewFile)) {
                require_once($viewFile);
        }
    }
}

echo ' controller ';