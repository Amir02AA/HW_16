<?php

namespace controllers;

use core\Controller;

class LogoutController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }

    public  function logout()
    {
        session_destroy();
        header('location:/home');
    }
}