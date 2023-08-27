<?php
include_once "../vendor/autoload.php";

$app = new \core\Application();

$app->router->get('/','home');
$app->router->get('/home','home');
$app->router->get('/contact',[\controllers\ContactController::class,'contact']);
$app->router->get('/login',[\controllers\LoginController::class,'login']);
$app->router->get('/register',[\controllers\RegisterController::class,'register']);

$app->router->post('/','home');
$app->router->post('/home','home');
$app->router->post('/contact',[\controllers\ContactController::class,'contact']);
$app->router->post('/login',[\controllers\LoginController::class,'login']);
$app->router->post('/register',[\controllers\RegisterController::class,'register']);

$app->run();