<?php

namespace controllers;

use core\Controller;

class LogoutController extends Controller
{
    public static function logout()
    {
        session_destroy();
        header('location:/home');
    }
}