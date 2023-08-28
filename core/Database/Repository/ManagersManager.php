<?php

namespace core\Database\Repository;

class ManagersManager extends Manager
{
    public function getManagers()
    {
        return $this->db->table('managers')->select()->exec();
    }

    public function getManagerByUserName(string $username)
    {
        return $this->db->table('managers')->select()->where('username', $username)->fetchAll();
    }

    public function addManager(array $manager)
    {
        $isFirstManager = $this->db->table('managers')->select()->fetchAll();
        if (!$isFirstManager) $manager['verified'] = 1;

        $this->db->table('managers')->insert($manager)->exec();
    }

    public function verifyManager(int $id)
    {
        $this->db->table('managers')->update(['verified' => 1])->where('id', $id)->exec();
    }
}