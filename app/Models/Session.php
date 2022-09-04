<?php

require APPROOT.'/Libraries/Database.php';

class Session extends Database {

    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function login() {
        if (!isset($_SESSION['login_name']) || !isset($_SESSION['type_user'])) {
            $errores = '';
            $errorSession = '';
            if (isset($_POST['submit'])) {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
            
                if (empty($usuario) || empty($usuario)) {
                    !empty($usuario) ? $usuario = filter_var($usuario, FILTER_UNSAFE_RAW) : $errores .= 'Por favor ingresa un usuario <br />';
                    !empty($password) ? $password : $errores .= 'Por favor ingresa tu password <br />' ;
                } else {

                    $login = $this->dashModel = $this->model('Session'); // Objeto: session
                    $login->startSession($usuario, $password); // llamado al método startSession 
                    $dataLog = $login->sessionarray;
            
                    if (empty($dataLog)) {
                        $errorSession .= "Los datos ingresados no coinciden";
                    } else {
                        $username = $dataLog['username'];
                        $type_user = $dataLog['type_user'];
            
                        if (isset($dataLog)) {
                            session_start();
                            $_SESSION['login_name'] = $username;
                            $_SESSION['type_user'] = $type_user;
                        };
                    }
                }
            }

            $data = [
                'title' => 'Welcome'
                ];
    
            $this->view('pages/login', $data);

        } else {
            header("Location:".URLROOT."/pages/portal");
        }
    } // End login()

    public function closeSession() {
        session_start();
        session_destroy();

        header("Location:".URLROOT);
    }
    /*
    public function insertReq($data) {
        $this->db->query($data);
        $this->db->execute();
        $this->id = $this->db->lastInsertId();
        return $this->id;
    }

    public function getDepartamentos ($data) {
        $this->db->query($data);
        return $this->db->resultSet();
    }
    */
}