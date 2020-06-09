<?php

require_once 'core/Router.php';
require_once 'core/Route.php';

$router = new Router();
$route = $router->getRoute();

$controllerName = $route->requireController();


echo $controllerName;