<?php

namespace core\Database\Repository;

class PatientManager extends Manager
{
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
        return $this->db->table('patients')->select()->where('username',$username)->fetchAll()[0];
    }

    public function deletePatient(int $id)
    {
        $this->db->table('patients')->delete()->where('id' , $id)->exec();
    }
}