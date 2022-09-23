<?php

class SessionM extends Controller
{
    private $db;
    private String $name;
    private String $password;
    public $session, $sessionarray;

    function __construct()
    {
        $this->db = new Database;
    }


    function getSession(String $names, String $passwords)
    {
        $query = "SELECT username, rolid type_user FROM usuarios WHERE username = :nombre AND pass = MD5(:palabraclave)";
        $this->db->query($query);
        $this->db->bind(':nombre', $names);
        $this->db->bind(':palabraclave', $passwords);
        return $this->db->single();
    }

    function startSession(String $name, String $password)
    {
        $this->name = $name;
        $this->password = $password;

        $this->session = $this->getSession($this->name, $this->password);
        $this->sessionarray = (array) $this->session;

        return $this->sessionarray;
    }

    function closeSession()
    {

        session_destroy();

        header("refresh:0; url= " . URLROOT);
    }
}
