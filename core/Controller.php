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
    abstract public static function setAction(string $action);

    /**
     * @return string
     */
    abstract public static function getAction();
}