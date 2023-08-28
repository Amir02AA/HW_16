<?php
namespace controllers;
use core\Controller;
use core\Render;

class VerifyController extends Controller
{
    public static function verify()
    {
        return Render::renderURI('verify','auth');
    }
}