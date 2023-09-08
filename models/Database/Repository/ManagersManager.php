<?php

namespace models\Database\Repository;

use models\Database\DatabaseInterface;
use models\Database\SQL;

class ManagersManager extends Manager
{
    protected static ?self $instance = null;

    public static function getInstance(?DatabaseInterface $db = null): self
    {
        if (static::$instance) static::$instance->setDatabaseManager(($db) ?: SQL::getInstance());
        else static::$instance = new static($db);
        return static::$instance;
    }

    public function getManagers()
    {
        return $this->db->table('managers')->select()->fetchAll();
    }

    public function getManagerByUserName(string $username)
    {
        return @$this->db->table('managers')->select()->where('username', $username)->fetchAll()[0];
    }

    public function addManager(array $manager)
    {
        $isFirstManager = $this->db->table('managers')->select()->fetchAll();
        if (!$isFirstManager) $manager['verified'] = 1;

        $this->db->table('managers')->insert($manager)->exec();
    }

    public function verifyManagerToggle(int $id)
    {
        $verified = $this->getManagerById($id)['verified'];
        $this->db->table('managers')->update(['verified' => (int)!$verified])->where('id', $id)->exec();
    }

    public function getUnverifiedManagers()
    {
        return $this->db->table('managers')->select()->where('verified', 0)->fetchAll();
    }

    private function getManagerById(int $id)
    {
        return $this->db->table('managers')->select()->where('id', $id)->fetchAll()[0];
    }
}