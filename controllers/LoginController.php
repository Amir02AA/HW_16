<?php

namespace controllers;

use core\Controller;
use core\Render;

class LoginController extends Controller
{
    public static function login()
    {
        return Render::renderURI('login','auth');
    }
}