<?php

namespace models\Database\Repository;

use models\Database\DatabaseInterface;
use models\Database\SQL;

class SectionManager extends Manager
{
    protected static ?self $instance = null;

    public static function getInstance(?DatabaseInterface $db = null): self
    {
        if (static::$instance) static::$instance->setDatabaseManager(($db) ?: SQL::getInstance());
        else static::$instance = new static($db);
        return static::$instance;
    }

    public function getSections()
    {
        return $this->db->table('sections')->select()->fetchAll();
    }

    public function deleteSection(int $id)
    {
        $this->db->table('sections')->delete()->where('id',$id)->exec();
    }

    public function addSection(array $section)
    {
        $this->db->table('sections')->insert($section)->exec();
    }

    public function updateSection(array $section, mixed $id)
    {
        $this->db->table('sections')->update($section)->where('id',$id)->exec();
    }
}