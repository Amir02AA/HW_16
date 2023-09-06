<?php

namespace models;

use core\Model;

class Patient extends UserBaseModel
{

    public static function tableName()
    {
        return "patients";
    }
}