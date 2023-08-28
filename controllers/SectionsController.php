<?php

namespace controllers;

use core\Controller;
use core\Render;

class SectionsController extends Controller
{
    public static function sections()
    {
        return Render::renderURI('sections','auth');
    }
}