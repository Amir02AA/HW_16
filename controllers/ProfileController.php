<?php

namespace controllers;

use core\Controller;
use core\Render;
use core\Request;
use models\Database\Repository\DoctorsManager;
use models\Database\Repository\ManagersManager;
use models\Database\Repository\PatientManager;

class ProfileController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }

    public function profile()
    {
        if (isset($_POST['submit'])) {
            $_POST = Request::getInstance()->getSanitizedData();
            self::saveChanges();
        }
        if (isset($_SESSION['user'])) {
            if (@$_SESSION['verified']) {
                $role = $_SESSION['role'];
                return Render::renderURI($role . "Prof", 'profile', self::getData());
            } else {
                header('location:/wait');
            }
        } else {
            header('location:/login');
        }


    }

    public function getData()
    {
        $data = match ($_SESSION['role']) {
            'doctor' => DoctorsManager::getInstance()->getDoctorByUserName($_SESSION['user']),
            'manager' => ManagersManager::getInstance()->getManagerByUserName($_SESSION['user']),
            'patient' => PatientManager::getInstance()->getPatientByUserName($_SESSION['user']),
            default => ''
        };

        return ['user' => $data];
    }

    public function saveChanges()
    {
        $pic = self::savePic();
        $data = [];
        
        foreach ($_POST as $key => $val){
            if ($val) $data[$key] = $val;
        }


        if ($pic) $data = array_merge($data, ['pic' => $pic]);
        match ($_SESSION['role']) {
            'doctor' => DoctorController::saveChanges($data)
        };
    }

    public function savePic()
    {
        if (@$_FILES['pic']['name'] != '') {
            $pic = "../src/pics/" . $_FILES['pic']['name'];
            move_uploaded_file($_FILES['pic']['tmp_name'], $pic);
            return $pic;
        }
        return null;
    }
}