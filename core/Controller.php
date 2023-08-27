<?php

namespace core;

abstract class Controller
{
    private string $layout='main';

    /**
     * @param string $layout
     */
    public function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }

    public function render(string $view,array $params =[])
    {
        Render::renderURI($view,$this->layout,$params);
    }
}