<?php

namespace controllers;

use core\Controller;
use core\Render;
use core\Request;
use models\Database\Repository\SectionManager;

class SectionsController extends Controller
{
    use MiddlewareForControllers;
    private static ?self $instance = null;

    private function __construct()
    {}

    public static function getInstance(): self
    {
        return (self::$instance) ? : self::$instance = new self();
    }

    public function sections()
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

    public function delete()
    {
        $id = $_GET['delete'];
        SectionManager::getInstance()->deleteSection($id);
    }

    public function add()
    {
        $section = [
            'id' => $_POST["sectionId"],
            'name' => $_POST["sectionName"]
        ];
        SectionManager::getInstance()->addSection($section);
    }

    public function update()
    {
        $id = $_POST['sectionId'];
        $section = [
            'name' => $_POST["sectionName"]
        ];
        SectionManager::getInstance()->updateSection($section, $id);
    }
}