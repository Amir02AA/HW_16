<?php

namespace core\Database\Repository;

use core\Database\DatabaseInterface;
use core\Database\SQL;

class DoctorsManager
{
    private DatabaseInterface $db;
    private static ?self $instance = null;

    private function __construct(?DatabaseInterface $db = null)
    {
        $this->db = (!$db) ?: SQL::getInstance();
    }

    public static function getInstance(?DatabaseInterface $db = null): self
    {
        if (self::$instance) self::$instance->setDatabaseManager((!$db) ?: SQL::getInstance());
        else self::$instance = new self($db);
        return self::$instance;
    }

    public function setDatabaseManager(DatabaseInterface $db): void
    {
        $this->db = $db;
    }

    public function getDoctors()
    {
        return $this->db->table('doctors')->select()->fetchAll();
    }

    public function getDoctorById(int $id)
    {
        return $this->db->table('doctors')->select()->where('id', $id)->fetchAll();
    }

    public function addDoctor(array $doctor)
    {
        $this->db->table('doctors')->insert($doctor)->exec();
    }

    public function verifyDoctor(int $id)
    {
        $this->db->table('doctors')->update(['verify' => 1])->where('id', $id)->exec();
    }

}