<?php

namespace core\Database\Repository;

use core\Database\DatabaseInterface;
use core\Database\SQL;

class PatientManager extends Manager
{
    protected static ?self $instance = null;

    public static function getInstance(?DatabaseInterface $db = null): self
    {
        if (static::$instance) static::$instance->setDatabaseManager(($db) ?: SQL::getInstance());
        else static::$instance = new static($db);
        return static::$instance;
    }

    public function addPatient(array $patient)
    {
        $this->db->table('patients')->insert($patient)->exec();
    }

    public function getPatients()
    {
        return $this->db->table('patients')->select()->fetchAll();
    }

    public function getPatientByUserName(string $username)
    {
        return $this->db->table('patients')->select()->where('username', $username)->fetchAll()[0];
    }

    public function deletePatient(int $id)
    {
        $this->db->table('patients')->delete()->where('id', $id)->exec();
    }
}