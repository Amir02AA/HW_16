<?php

namespace core\Database\Repository;

use core\Database\DatabaseInterface;
use core\Database\SQL;

class DoctorsManager extends Manager
{
    protected static ?self $instance = null;

    public static function getInstance(?DatabaseInterface $db = null): self
    {
        if (static::$instance) static::$instance->setDatabaseManager(($db) ?: SQL::getInstance());
        else static::$instance = new static($db);
        return static::$instance;
    }

    public function getDoctors()
    {
        return $this->db->table('doctors')->select()->fetchAll();
    }

    public function getDoctorById(int $id)
    {
        return $this->db->table('doctors')->select()->where('id', $id)->fetchAll();
    }

    public function getDoctorByUserName(string $username)
    {
        return $this->db->table('doctors')->select()->where('username', $username)->fetchAll()[0];
    }

    public function addDoctor(array $doctor)
    {
        $this->db->table('doctors')->insert($doctor)->exec();
    }

    public function verifyDoctor(int $id)
    {
        $this->db->table('doctors')->update(['verified' => 1])->where('id', $id)->exec();
    }

    public function getUnverifiedDoctors()
    {
        return $this->db->table('doctors')->select()->where('verified', 0)->fetchAll();
    }

}