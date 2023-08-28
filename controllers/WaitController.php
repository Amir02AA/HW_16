<?php

namespace controllers;

use core\Controller;
use core\Render;

class WaitController extends Controller
{
    public static function wait()
    {
        return Render::renderURI('wait','auth');
    }
}