<?php
include_once "../vendor/autoload.php";

$app = new \core\Application();
$app->router->get('/','home');
$app->router->get('/home','home');

$app->run();