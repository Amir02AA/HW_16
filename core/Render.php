<?php

namespace core;

abstract class Render
{
    public static function renderURI(string $uri, string $layout = 'main', array $params = [])
    {
        ob_start();
        include_once "../views/layouts/$layout.php";
        $layout = ob_get_clean();
        $view = self::renderView($uri);
        return str_replace('{{c}}', $view, $layout);
    }

    public static function renderView(string $uri)
    {
        ob_start();
        include_once "../views/$uri.php";
        return ob_get_clean();
    }

    public static function errorRender(string $text, int $statusCode)
    {
        Response::getInstance()->setStatusCode($statusCode);
        ob_start();
        include_once "../views/layouts/error.php";
        $page = ob_get_clean();
        $page = str_replace('{{c}}', $text, $page);
        return $page;
    }
}