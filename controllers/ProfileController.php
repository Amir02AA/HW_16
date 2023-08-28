<?php

namespace controllers;

use core\Controller;
use core\Render;

class ProfileController extends Controller
{
    public static function profile()
    {
        if (isset($_SESSION['user']) && @$_SESSION['verified']) {
            $role = $_SESSION['role'];
            return Render::renderURI($role . "Prof", 'profile');
        } else {
            header('location:/wait');
        }
    }
}