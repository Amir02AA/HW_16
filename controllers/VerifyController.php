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