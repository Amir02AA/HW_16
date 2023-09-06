<?php

namespace controllers;

use core\Controller;
use models\Database\Repository\DoctorsManager;

class DoctorController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }
    public function saveChanges($data)
    {
        $doctor = $data;
        if ($doctor['section_id'] == 'null') unset($doctor['section_id']);

        DoctorsManager::getInstance()->updateDoctorByUserName($doctor, $_SESSION['user']);
    }



}