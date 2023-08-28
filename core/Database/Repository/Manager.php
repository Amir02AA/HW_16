<?php

namespace core\Database\Repository;

use core\Database\DatabaseInterface;
use core\Database\SQL;

class Manager
{
    protected DatabaseInterface $db;

    protected function __construct(?DatabaseInterface $db = null)
    {
        $this->db = ($db) ?: SQL::getInstance();
    }



    public function setDatabaseManager(DatabaseInterface $db): void
    {
        $this->db = $db;
    }

}