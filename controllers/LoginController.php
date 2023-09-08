<?php

namespace controllers;

use core\Controller;
use core\Render;
use core\Request;
use models\Database\Repository\DoctorsManager;
use models\Database\Repository\ManagersManager;
use models\Database\Repository\PatientManager;

class LoginController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }
    public function loginPage()
    {
        $_POST = Request::getInstance()->getSanitizedData();

        if (isset($_POST["submit"])) call_user_func([self::class, $_POST["role"] . "Login"]);
        return Render::renderURI('login', 'auth');
    }

    public function doctorLogin()
    {

        $password = DoctorsManager::getInstance()->getDoctorByUserName($_POST["username"])['password'] ?? '';
        $verified = DoctorsManager::getInstance()->getDoctorByUserName($_POST["username"])['verified'] ?? 0;
        if ($password && $password == $_POST["password"]) {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['role'] = $_POST["role"];
            $_SESSION['verified'] = $verified;
            header("location:/home");
        }
    }

    public function managerLogin()
    {
        $password = ManagersManager::getInstance()->getManagerByUserName($_POST["username"])['password'] ?? '';
        $verified = ManagersManager::getInstance()->getManagerByUserName($_POST["username"])['verified'] ?? 0;

        if ($password && $password == $_POST["password"]) {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['role'] = $_POST["role"];
            $_SESSION['verified'] = $verified;
            header("location:/home");
        }
    }

    public function patientLogin()
    {
        $password = PatientManager::getInstance()->getPatientByUserName($_POST["username"])['password'] ?? '';
        if ($password && $password == $_POST["password"]) {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['role'] = $_POST["role"];
            $_SESSION['verified'] = 1;
            header("location:/home");
        }
    }

}