<?php

namespace core\Database\Repository;

use core\Database\DatabaseInterface;
use core\Database\SQL;

class Manager
{
    protected DatabaseInterface $db;
    protected static ?self $instance = null;

    protected function __construct(?DatabaseInterface $db = null)
    {
        $this->db = ($db) ?: SQL::getInstance();
    }

    public static function getInstance(?DatabaseInterface $db = null): self
    {
        if (static::$instance) static::$instance->setDatabaseManager(($db) ?: SQL::getInstance());
        else static::$instance = new static($db);
        return static::$instance;
    }

    public function setDatabaseManager(DatabaseInterface $db): void
    {
        $this->db = $db;
    }

}