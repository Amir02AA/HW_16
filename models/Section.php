<?php

namespace models;

use core\Model;

class Section extends Model
{
    public string $name='';
    public ?int $id=null;
    public static function tableName(): string
    {
        return 'sections';
    }

    public function attributes(): array
    {
        return ['name', 'id'];
    }

    public function labels(): array
    {
        return [
            'name' => 'Section Name',
            'id' => 'ID'
        ];
    }

    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'id' => [self::RULE_REQUIRED]
        ];
    }

    public function save()
    {
//        return parent::save();
    }

    public function getDisplayName(): string
    {
        return $this->name;
    }
}