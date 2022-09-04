<?php

require APPROOT.'/Libraries/Database.php';

class Formularios extends Database {

    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function insertReq($data) {
        $this->db->query($data);
        $this->db->execute();
        $this->id = $this->db->lastInsertId();
        return $this->id;
    }
}