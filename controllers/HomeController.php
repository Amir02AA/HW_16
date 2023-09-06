<?php

namespace controllers;

use core\Controller;
use core\Render;

class HomeController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }

    public function home()
    {
        return Render::renderURI('home');
    }


}