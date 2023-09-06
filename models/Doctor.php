<?php

namespace models;

use core\Model;

class Doctor extends UserBaseModel
{
    public string $section = '';
    public ?bool $verified = null;

    public string $education = '';
    public ?int $medical_code = null;
    public ?string $history = null;

    public static function tableName()
    {
        return "doctors";
    }
}