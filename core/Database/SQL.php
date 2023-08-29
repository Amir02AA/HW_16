<?php

namespace core\Database;

use PDO;

class SQL implements DatabaseInterface
{
    private array $data=[];
    private string $query;
    private PDO $pdo;
    private string $table;
    private static ?self $instance = null;
    private string $db = 'Hospital_Database';

    private function __construct()
    {
        $dsn = "mysql:host=localhost;";
        $this->pdo = new PDO($dsn, 'root');
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->createDatabase();
        $this->pdo->query("use ".$this->db)->execute();
        $this->createTables();
    }

    public static function getInstance(): self
    {
        return (self::$instance) ?: self::$instance = new self();
    }


    public function select(array $selects = ['*'])
    {
        $selects = implode(',', $selects);
        $this->query = "select $selects from " . $this->table . " ";
        return $this;
    }

    public function insert(array $data)
    {
        $this->data = $data;

        $columns = array_keys($data);
        $placeHolders = implode(',',
            array_map(fn($x) => ":$x", $columns));
        $columns = implode(',', $columns);
        $this->query = "insert into " . $this->table . " ($columns) value ($placeHolders) ";
        return $this;
    }

    public function delete()
    {
        $this->query = 'delete from ' . $this->table . " ";
        return $this;
    }

    public function where(string $column, string $val, string $operator = '=')
    {
        $this->data[$column] = $val;

        $this->query .= " Where $column $operator :$column ";
        return $this;
    }

    public function exec(): bool
    {
//        echo "<pre>";
//        print_r($this->data);
//        echo "<pre>";
        return $this->pdo->prepare($this->query . ";")->execute($this->data);
    }

    public function fetchAll(): array|string
    {
//        echo "<pre>";
//        print_r($this->data);
//        echo "<pre>";
        $stmnt = $this->pdo->prepare($this->query . ";");
        $stmnt->execute($this->data);

        return $stmnt->fetchAll();
    }

    public function table(string $table)
    {
        $this->table = $table;
        $this->data = [];
        return $this;
    }

    public function createDatabase(): void
    {
        if (!$this->pdo->query('show databases like ' . "'" . $this->db . "';")->fetchAll()) {
            $this->query = "create database " . $this->db;
            $this->exec();
            $this->query = "use " . $this->db;
            $this->exec();
        }
    }

    public function createTables()
    {
        if (!$this->pdo->query("show tables like 'doctors' ;")->fetchAll()) {
            $this->query = "create table doctors
                            (
                                id int primary key auto_increment,
                                name varchar(50),
                                section varchar(50),
                                verified tinyint,
                                username varchar(50) unique ,
                                password varchar(20),
                                email varchar(50)
                            )";
            $this->exec();
        }
        if (!$this->pdo->query("show tables like 'managers' ;")->fetchAll()) {
            $this->query = "create table managers
                            (
                                id int primary key auto_increment,
                                name varchar(50),
                                verified tinyint,
                                username varchar(50) unique ,
                                password varchar(20),
                                email varchar(50)
                            )";
            $this->exec();
        }

        if (!$this->pdo->query("show tables like 'patients' ;")->fetchAll()) {
            $this->query = "create table patients
                            (
                                id int primary key auto_increment,
                                name varchar(50),
                                username varchar(50) unique ,
                                password varchar(20),
                                email varchar(50)
                            )";
            $this->exec();
        }

        if (!$this->pdo->query("show tables like 'visit_times' ;")->fetchAll()) {
            $this->query = "create table visit_times
                            (
                                id int primary key auto_increment,
                                day varchar(20),
                                start time,
                                end time,
                                doctor_id int,
                                foreign key (doctor_id)
                                references doctors(id)
                            )";
            $this->exec();
        }

        if (!$this->pdo->query("show tables like 'sections' ;")->fetchAll()) {
            $this->query = "create table sections
                            (
                                id int primary key auto_increment,
                                name varchar(50)
                            )";
            $this->exec();
        }


    }

    public function update(array $values)
    {
        $this->query = 'update ' . $this->table . " set ";
        foreach ($values as $column => $value) {
            $this->query .= $column . "=" . ":$column ,";
        }

        $this->query = substr($this->query, 0, strlen($this->query) - 2);
        $this->data = array_merge($this->data, $values);
        return $this;
    }
}