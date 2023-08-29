<?php

namespace controllers;

use core\Controller;
use core\Database\Repository\SectionManager;
use core\Render;
use core\Request;

class SectionsController extends Controller
{
    public static function sections()
    {
        if (isset($_GET['delete'])) {
            $_GET = Request::getInstance()->getSanitizedData();
            self::delete();
        }

        if (isset($_POST['submit'])) {
            $_POST = Request::getInstance()->getSanitizedData();
            call_user_func([self::class, $_POST['submit']]);
        }
        return Render::renderURI('sections', 'auth',
            ['sections' => SectionManager::getInstance()->getSections()]);
    }

    public static function delete()
    {
        $id = $_GET['delete'];
        SectionManager::getInstance()->deleteSection($id);
    }

    public static function add()
    {
        $section = [
            'id' => $_POST["sectionId"],
            'name' => $_POST["sectionName"]
        ];
        SectionManager::getInstance()->addSection($section);
    }

    public static function update()
    {
        $id = $_POST['sectionId'];
        $section = [
            'name' => $_POST["sectionName"]
        ];
        SectionManager::getInstance()->updateSection($section, $id);
    }
}