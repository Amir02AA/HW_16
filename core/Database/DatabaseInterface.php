<?php

namespace core\Database;

interface DatabaseInterface
{
    public static function getInstance();
    public function select();
    public function insert(array $data);
    public function delete();
    public function where(string $column, string $val, string $operator = '=');

    public function update(array $values);
}