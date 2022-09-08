<?php

class Session extends Controller
{

    public function __construct()
    {
    }

    public function startSession()
    {
        if (!isset($_SESSION['login_name']) || !isset($_SESSION['type_user'])) {
            $errores = '';
            $errorSession = '';
            if (isset($_POST['submit'])) {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];

                if (empty($usuario) || empty($usuario)) {
                    !empty($usuario) ? $usuario = filter_var($usuario, FILTER_SANITIZE_STRING) : $errores .= 'Por favor ingresa un usuario <br />';
                    !empty($password) ? $password : $errores .= 'Por favor ingresa tu password <br />';
                } else {
                    $login = $this->dashModel = $this->model('Session');
                    $login->startSession($usuario, $password);
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
            header("Location:" . URLROOT . "/pages/portal");
        }
    }

    public function closeSession()
    {
        session_start();
        session_destroy();

        header("Location:" . URLROOT);
    }
}
