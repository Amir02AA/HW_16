<?php

namespace controllers;

use core\Controller;
use core\Render;

class HomeController extends Controller
{
    public static function home()
    {
        return Render::renderURI('home');
    }


}