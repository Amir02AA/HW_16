<?php

namespace controllers;

use core\Controller;
use core\Render;

class ContactController extends Controller

{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }

    public function contact()
    {
        return Render::renderURI('contact');
    }
}