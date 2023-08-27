<?php

namespace controllers;

use core\Controller;
use core\Database\Repository\DoctorsManager;
use core\Database\SQL;
use core\Render;

class RegisterController extends Controller
{
    public static function register()
    {
        if (isset($_POST['submit'])) self::addAccount();
        return Render::renderURI('register','auth');
    }

    public static function addAccount()
    {
        $user = [
            'name' => $_POST["username"],
            'section' => 'nurology',
            'verified' => 0
        ];
        if ($_POST["role"] == 'doctor') DoctorsManager::getInstance()->addDoctor($user);
    }
}