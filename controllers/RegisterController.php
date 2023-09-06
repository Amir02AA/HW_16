<?php

namespace controllers;

use core\Controller;
use core\Model;
use core\Render;
use core\Request;
use models\Database\Repository\DoctorsManager;
use models\Database\Repository\Manager;
use models\Database\Repository\ManagersManager;
use models\Database\Repository\PatientManager;
use models\Doctor;
use models\Patient;

class RegisterController extends Controller
{
    use MiddlewareForControllers;

    private static ?self $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        return (self::$instance) ?: self::$instance = new self();
    }

    public function register()
    {
        if (isset($_POST['submit'])) self::addAccount();
        return Render::renderURI('register', 'auth');
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
        match ($_POST['role']) {
            'doctor' => $this->addUser($user, DoctorsManager::getInstance(), new Doctor()),
            'patient' => $this->addUser($user, PatientManager::getInstance(), new Patient()),
            'manager' => $this->addUser($user, ManagersManager::getInstance(), new \models\Manager())
        };
//        if ($_POST["role"] == 'doctor') {
//            $doctorModel = new Doctor;
//            $doctorModel->loadData($user);
//            if ($doctorModel->validate()) {
//                DoctorsManager::getInstance()->addDoctor($user);
//            }
//        }
//        if ($_POST["role"] == 'manager') {
//
//            ManagersManager::getInstance()->addManager($user);
//        }
//        if ($_POST["role"] == 'patient') {
//            unset($user['verified']);
//            PatientManager::getInstance()->addPatient($user);
//        }
    }

    private function addUser(array $user, Manager $manager, Model $model)
    {
        $role = ucfirst($_POST['role']);
        $model->loadData($user);
        if ($model->validate()) {
            if ($_POST['role'] == 'patient') unset($user['verified']);
            $manager->{"add$role"}($user);
        }
    }
}