<?php

namespace core;

use http\Params;

class Request
{
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }
    public function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getURI() : string
    {
        $URI = $_SERVER['REQUEST_URI'];
        $index = strpos($URI, '?');
        return (($index) ? substr($URI, 0, $index) : $URI);
    }

    public function getSanitizedData() : ?array
    {
        return ($this->getMethod() == 'post') ? $this->sanitize($_POST) : $this->sanitize($_GET);
    }

    public function sanitize(array $data): ?array
    {
        return array_map(fn($x) => htmlspecialchars($x), $data);
    }
}