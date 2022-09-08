<?php

class Requerimientos extends Database {

    private $db;
    public $query;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertRequerimiento($data)
    {
        $query = $data;
        $this->db->query($query);
        $this->db->execute();
    }

    public function getRequerimientos($data)
    {
        $query = $data;

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function sqlInsert($data){
        $insert = "INSERT INTO requerimiento (tiporeqid, nombre, email, telefono, observacion, prioridad, fechareq) VALUES ('".$data['tipoRequerimiento']."', '".$data['inputNombre']."', '".$data['inputEmail']."', '".$data['inputTelefono']."', '".$data['inputObservacion']."', ".$data['inputPrioridad'].", '".date('Y-m-d H:i:s')."')";

        $this->query=$this->insertRequerimiento($insert);
        return $insert;
    }
}