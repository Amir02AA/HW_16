<?php

namespace controllers;

use core\Controller;
use core\Render;

class RegisterController extends Controller
{
    public static function register()
    {
        return Render::renderURI('register','auth');
    }
}