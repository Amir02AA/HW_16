<?php

namespace controllers;

use core\MiddleWares\BaseMiddle;

trait MiddlewareForControllers
{
    private string $action='';
    private array $middlewares = [];

    public function setAction(string $action)
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function addMiddleware(BaseMiddle $middle)
    {
        $this->middlewares[] = $middle;
    }

    /**
     * @return array
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}