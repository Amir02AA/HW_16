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
        return $this->db->table('doctors')->select()->where('id', $id)->fetchAll()[0];
    }

    public function getDoctorByUserName(string $username)
    {
        return $this->db->table('doctors')->select()->where('username', $username)->fetchAll()[0];
    }

    public function addDoctor(array $doctor)
    {
        $this->db->table('doctors')->insert($doctor)->exec();
    }

    public function verifyDoctorToggle(int $id)
    {
        $verified = $this->getDoctorById($id)['verified'];
        $this->db->table('doctors')->update(['verified' => (int)!$verified])->where('id', $id)->exec();
    }

    public function getUnverifiedDoctors()
    {
        return $this->db->table('doctors')->select()->where('verified', 0)->fetchAll();
    }

    public function updateDoctorByUserName(array $doctor , string $username)
    {
        $this->db->table('doctors')->update($doctor)->where('username',$username)->exec();
    }

}