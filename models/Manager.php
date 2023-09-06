<?php

namespace models;

use core\Model;

class Manager extends UserBaseModel
{
    public static function tableName()
    {
        return "managers";
    }
}