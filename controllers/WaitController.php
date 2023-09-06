<?php

namespace controllers;

use core\Controller;
use core\Render;

class WaitController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }

    public function wait()
    {
        return Render::renderURI('wait','auth');
    }
}