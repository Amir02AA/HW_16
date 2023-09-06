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
        if (Application::getRole() == 'guest') {
            if (empty($this->actions) || in_array(Application::getInstance()->getCurrentController()->getAction(), $this->actions)) {
                throw new \Exception("Wrong permission", code: 403);
            }
        }
    }
}