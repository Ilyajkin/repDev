<?php 

class Test {
    
    public function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        } 
    }
    
    public function getControllerName() {
        echo $controllerName = 'controller_' . $this -> getURI() . '<br>'; 
    }
    
    public function getActionName() {
        echo $actionName = 'action_' . $this -> getURI() . '<br>';
        
    }
}

$route = new Test;
$route -> getControllerName();
$route -> getActionName();


