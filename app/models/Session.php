<?php

class Session extends Controller
{
    private $db;
    private $sessionInfo;
    private $name, $password;
    public $session, $sessionarray;

    function __construct()
    {
        $this->db = new Database;
    }


    function getSession($names, $passwords)
    {
        $query = "SELECT username, type_user FROM users_login WHERE username = '$names' AND passwords = MD5('$passwords')";
        $this->db->query($query);
        return $this->db->single();
    }

    function startSession(string $name, string $password)
    {
        $this->name = $name;
        $this->password = $password;

        $this->session = $this->getSession($this->name, $this->password);
        // !empty($this->session) ? $this->session = $this->session['0'] : $this->session = '';
        $this->sessionarray = (array) $this->session;

        return $this->sessionarray;
    }

    function closeSession()
    {

        session_destroy();

        header("refresh:0; url= " . URLROOT);
    }
}
