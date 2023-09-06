<?php
include_once "../vendor/autoload.php";
session_start();
$app = \core\Application::getInstance();

$app->router->get('/',[\controllers\HomeController::class,'home']);
$app->router->get('/home',[\controllers\HomeController::class,'home']);
$app->router->get('/contact',[\controllers\ContactController::class,'contact']);
$app->router->get('/login',[\controllers\LoginController::class,'loginPage']);
$app->router->get('/register',[\controllers\RegisterController::class,'register']);
$app->router->get('/logout',[\controllers\LogoutController::class,'logout']);
$app->router->get('/profile',[\controllers\ProfileController::class,'profile']);
$app->router->get('/wait',[\controllers\WaitController::class,'wait']);
$app->router->get('/verify',[\controllers\VerifyController::class,'verify']);
$app->router->get('/sections',[\controllers\SectionsController::class,'sections']);

$app->router->post('/',[\controllers\HomeController::class,'home']);
$app->router->post('/home',[\controllers\HomeController::class,'home']);
$app->router->post('/contact',[\controllers\ContactController::class,'contact']);
$app->router->post('/login',[\controllers\LoginController::class,'loginPage']);
$app->router->post('/register',[\controllers\RegisterController::class,'register']);
$app->router->post('/logout',[\controllers\LogoutController::class,'logout']);
$app->router->post('/profile',[\controllers\ProfileController::class,'profile']);
$app->router->post('/wait',[\controllers\WaitController::class,'wait']);
$app->router->post('/verify',[\controllers\VerifyController::class,'verify']);
$app->router->post('/sections',[\controllers\SectionsController::class,'sections']);

$app->run();