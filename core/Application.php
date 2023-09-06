<?php

namespace core;

class Application
{
    public Router $router;
    private string $currentController;
    private static ?self $instance = null;

    private function __construct()
    {
        $this->router = Router::getInstance();
    }

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }


    public static function isGuest()
    {
        return !isset($_SESSION['user']);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    /**
     * @param string $currentController
     */
    public function setCurrentController(string $currentController): void
    {
        $this->currentController = $currentController;
    }

    /**
     * @return string
     */
    public function getCurrentController(): string
    {
        return $this->currentController;
    }

}