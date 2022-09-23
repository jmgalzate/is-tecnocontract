<?php

class Requerimientos extends Database {

    private Database $db;
    protected $query;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getRequerimientos(array $data)
    {
        $query = $data;

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function sqlInsert(array $data):void {
        $insert = "INSERT INTO requerimiento (tiporeqid, nombre, email, telefono, observacion, prioridad, fechareq, username) VALUES (:tipoRequerimiento, :inputNombre, :inputEmail, :inputTelefono, :inputObservacion, :inputPrioridad, '".date('Y-m-d H:i:s')."', :username)";

        $this->db->query($insert);
        $this->db->bind('tipoRequerimiento', $data['tipoRequerimiento']);
        $this->db->bind('inputNombre', $data['inputNombre']);
        $this->db->bind('inputEmail', $data['inputEmail']);
        $this->db->bind('inputTelefono', $data['inputTelefono']);
        $this->db->bind('inputObservacion', $data['inputObservacion']);
        $this->db->bind('inputPrioridad', $data['inputPrioridad']);
        $this->db->bind('username', $data['username']);

        $this->db->execute();
    }
}