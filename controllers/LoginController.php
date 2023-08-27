<?php

namespace controllers;

use core\Controller;
use core\Database\Repository\DoctorsManager;
use core\Database\Repository\ManagersManager;
use core\Database\Repository\PatientManager;
use core\Render;
use core\Request;

class LoginController extends Controller
{
    public static function loginPage()
    {
        $_POST = Request::getInstance()->getSanitizedData();
        if (isset($_POST["submit"])) call_user_func([self::class, $_POST["role"] . "Login"]);
        return Render::renderURI('login', 'auth');
    }

    public static function doctorLogin()
    {
        $password = DoctorsManager::getInstance()->getDoctorByUserName($_POST["username"])['password'];
        if ($password = $_POST["password"]) {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['role'] = $_POST["role"];
            header("location:/home");
        }
    }

    public static function managerLogin()
    {
        $password = ManagersManager::getInstance()->getDoctorByUserName($_POST["username"])['password'];
        if ($password = $_POST["password"]) {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['role'] = $_POST["role"];
            header("location:/home");
        }
    }

    public static function patientLogin()
    {
        $password = PatientManager::getInstance()->getDoctorByUserName($_POST["username"])['password'];
        if ($password = $_POST["password"]) {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['role'] = $_POST["role"];
            header("location:/home");
        }
    }

}