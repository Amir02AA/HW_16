<?php

namespace controllers;

use core\Controller;
use core\Render;

class ContactController extends Controller
{
    public static function contact()
    {
        return Render::renderURI('contact');
    }
}