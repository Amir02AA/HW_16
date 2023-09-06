<?php

namespace controllers;

use core\Controller;
use core\Render;
use models\Database\Repository\DoctorsManager;
use models\Database\Repository\ManagersManager;

class VerifyController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }
    public function verify()
    {
        self::getUsers();

        if (isset($_POST['doctor'])) DoctorsManager::getInstance()->verifyDoctorToggle($_POST['doctor']);
        if (isset($_POST['manager'])) ManagersManager::getInstance()->verifyManagerToggle($_POST['manager']);

        return Render::renderURI('verify', 'auth', ['users' => self::getUsers()]);
    }

    public function getUsers()
    {
        $users = [
            'doctors' => DoctorsManager::getInstance()->getDoctors(),
            'managers' => ManagersManager::getInstance()->getManagers()
        ];
        return $users;
    }
}