<?php
include_once "../vendor/autoload.php";
//session_start();
//$app = new \core\Application();
//$_SESSION['user'] = 'Amir';
//$_SESSION['role'] = 'doctor';
//echo \controllers\ProfileController::profile();

echo "<pre>";
print_r(\core\Database\Repository\ManagersManager::getInstance()->getManagerByUserName('Amir'));
echo "<pre>";