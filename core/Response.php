<?php

namespace core;

class Response
{
    private static ?self $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        return (self::$instance) ?: self::$instance = new self();
    }

    public function setStatusCode($code): void
    {
        http_response_code($code);
    }
}