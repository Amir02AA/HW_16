<?php

namespace models\Database\Repository;

use models\Database\DatabaseInterface;
use models\Database\SQL;

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