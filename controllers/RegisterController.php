<?php

namespace controllers;

use core\Controller;
use core\Database\Repository\DoctorsManager;
use core\Database\Repository\ManagersManager;
use core\Database\Repository\PatientManager;
use core\Render;
use core\Request;

class RegisterController extends Controller
{
    public static function register()
    {
        if (isset($_POST['submit'])) self::addAccount();
        return Render::renderURI('register','auth');
    }

    public static function addAccount()
    {
        $_POST = Request::getInstance()->getSanitizedData();
        $user = [
            'username' => $_POST["username"],
            'password' => $_POST["password"],
            'email' => $_POST["email"],
            'verified' => 0
        ];
        if ($_POST["role"] == 'doctor') DoctorsManager::getInstance()->addDoctor($user);
        if ($_POST["role"] == 'manager') ManagersManager::getInstance()->addManager($user);
        if ($_POST["role"] == 'patient') {
            unset($user['verified']);
            PatientManager::getInstance()->addPatient($user);
        }
    }
}