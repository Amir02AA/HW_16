<?php

namespace core\MiddleWares;



use core\Application;

class AuthMiddle extends BaseMiddle
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::getInstance()->getCurrentController()::getAction(), $this->actions)) {
               echo "MiddleWare Error";
            }
        }
    }
}