<?php

use core\Application;

include_once "../vendor/autoload.php";

$callback = [\controllers\HomeController::class , 'home'];

$callback[0]::setAction($callback[1]);
$middlewares = $callback[0]::getMiddlewares();
Application::getInstance()->setCurrentController($callback[0]);
foreach ($middlewares as $index => $middleware) {
    $middleware->execute();
}