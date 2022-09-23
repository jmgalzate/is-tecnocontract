<?php

class Session extends Controller
{

    /**
     * TODO:
     * 1. To create a method to organize the permissions- and login information
     * 2. To define private and functions properties and functions
     */

    public function login()
    {
        $data = [
            'page' => 'Login',
        ];

        $this->view('Session/login', $data);
    }

    public function startSession()
    {
        /** If a session has not been started, it'll proceed to check the login information */
        if (!isset($_SESSION['login_name']) || !isset($_SESSION['type_user'])) {
            $errores = '';
            $errorSession = '';

            if (isset($_POST['sendLogin'])) {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];

                if (empty($usuario) || empty($password)) {

                    !empty($usuario) ? $usuario = htmlspecialchars($usuario) : $errores .= 'Por favor ingresa un usuario <br />';
                    !empty($password) ? htmlspecialchars($password) : $errores .= 'Por favor ingresa tu password <br />';

                    $data = [
                        'error' => $errores
                    ];
                } else {
                    $login = $this->dashModel = $this->model('SessionM');
                    $login->startSession($usuario, $password);
                    $dataLog = $login->sessionarray;

                    if (!isset($dataLog['username']) ) {

                        $errorSession .= "Los datos ingresados no coinciden";
                        $data = [
                            'error' => $errorSession
                        ];

                    } else {
                        $username = $dataLog['username'];
                        $type_user = $dataLog['type_user'];

                        session_start();
                        $_SESSION['login_name'] = $username;
                        $_SESSION['type_user'] = $type_user;

                        $data = [
                            'title' => 'Bienvenid@'
                        ];
                    }
                }
            }


            $data = json_decode(json_encode($data));

            $this->view('Session/login', $data);
        } else {

            /** If a session is already opened, will be directioned to main page */
            header("Location:" . URLROOT . "Pages/portal");
        }
    }

    public function closeSession()
    {
        session_destroy();
        header("Location:" . URLROOT . 'Pages/portal');
    }
}