<?php

require_once 'core/Router.php';
require_once 'core/Route.php';

$router = new Router();
$route = $router->getRoute();

$controllerName = $route->getControllerName();
$modelName = $route->getModelName();

echo $controllerName . PHP_EOL;
echo $modelName . PHP_EOL;
