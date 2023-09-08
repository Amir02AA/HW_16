<?php

namespace core;

class Application
{
    public Router $router;
    private Controller $currentController;
    private static ?self $instance = null;

    private function __construct()
    {
        $this->router = Router::getInstance();
    }

    public static function getInstance(): self
    {
        return (self::$instance) ?: self::$instance = new self();
    }


    public static function getRole()
    {
        return (isset($_SESSION['user'])) ? $_SESSION['role'] : 'guest';
    }

    public function run()
    {
        try {
            echo $this->router->resolve();
        } catch (\Exception $exception) {
            echo Render::errorRender($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param Controller $currentController
     */
    public function setCurrentController(Controller $currentController): void
    {
        $this->currentController = $currentController;
    }

    public function getCurrentController()
    {
        return $this->currentController;
    }

}