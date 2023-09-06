<?php

namespace models;

use core\Model;

abstract class UserBaseModel extends Model
{
    public string $name = '';
    public string $username = '';
    public string $password = '';
    public string $pic = '';
    public string $email='';
    abstract public static function tableName();

    public function attributes(): array
    {
        return ['name', 'username', 'email', 'password'];
    }

    public function labels(): array
    {
        return [
            'name' => 'Full name',
            'email' => 'Email',
            'password' => 'Password',
            'passwordConfirm' => 'Password Confirm'
        ];
    }

    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'username' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 4]],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 5]],
            'passwordConfirm' => [[self::RULE_MATCH, 'match' => 'password']],
        ];
    }

    public function save()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

//        return parent::save();
    }

    public function getDisplayName(): string
    {
        return $this->name;
    }
}