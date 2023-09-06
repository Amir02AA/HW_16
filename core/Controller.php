<?php

namespace core;

abstract class Controller
{
    /**
     * @param string $layout
     */
    /**
     * @param string $action
     */
    abstract public function setAction(string $action);

    /**
     * @return string
     */
    abstract public function getAction();
}