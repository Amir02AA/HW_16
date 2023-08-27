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
}