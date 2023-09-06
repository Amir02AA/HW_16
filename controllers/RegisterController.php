<?php

namespace controllers;

use core\Controller;
use core\Render;
use core\Request;
use models\Database\Repository\DoctorsManager;
use models\Database\Repository\ManagersManager;
use models\Database\Repository\PatientManager;

class RegisterController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }

    public function register()
    {
        if (isset($_POST['submit'])) self::addAccount();
        return Render::renderURI('register','auth');
    }

    public function addAccount()
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