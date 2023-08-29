<?php

namespace controllers;

use core\Controller;
use core\Database\Repository\DoctorsManager;

class DoctorController extends Controller
{

    public static function saveChanges($data)
    {
        $doctor = $data;
        if ($doctor['section_id'] == 'null') unset($doctor['section_id']);

        DoctorsManager::getInstance()->updateDoctorByUserName($doctor, $_SESSION['user']);
    }


}