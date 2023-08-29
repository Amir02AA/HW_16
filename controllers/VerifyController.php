<?php

namespace controllers;

use core\Controller;
use core\Database\Repository\DoctorsManager;
use core\Database\Repository\ManagersManager;
use core\Render;

class VerifyController extends Controller
{
    public static function verify()
    {
        self::getUsers();

        if (isset($_POST['doctor'])) DoctorsManager::getInstance()->verifyDoctorToggle($_POST['doctor']);
        if (isset($_POST['manager'])) ManagersManager::getInstance()->verifyManagerToggle($_POST['manager']);

        return Render::renderURI('verify', 'auth', ['users' => self::getUsers()]);
    }

    public static function getUsers()
    {
        $users = [
            'doctors' => DoctorsManager::getInstance()->getDoctors(),
            'managers' => ManagersManager::getInstance()->getManagers()
        ];
        return $users;
    }
}