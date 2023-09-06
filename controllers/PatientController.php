<?php

namespace controllers;

class PatientController
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }

}