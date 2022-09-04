<?php

class Pages extends Controller {
    /*
    *   monitoringcenter/ pages/ portal
    *   Método que llama la página inicial del portal
    */

    public function portal()
    {
        
            $data = [
                'title' => 'Bienvenido',
                'page' => '/views/Pages/Portal.php',
            ];
        
        $this->view('pages/portal', $data);
    } // Here ends the portal method

    
    public function about()
    {
        if (!isset($_SESSION['login_name']) || !isset($_SESSION['type_user'])) {
            header("Location:".URLROOT);
        } else {
            $data = ['title' => 'About us'];
            $this->view('pages/about', $data);
        }
    }


        /*
    *   monitoringcenter/ pages/ login
    *   Método para llamar el inicio de sesión.
    */

    public function login() {
        if (!isset($_SESSION['login_name']) || !isset($_SESSION['type_user'])) {
            $errores = '';
            $errorSession = '';
            if (isset($_POST['submit'])) {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
            
                if (empty($usuario) || empty($usuario)) {
                    !empty($usuario) ? $usuario = filter_var($usuario, FILTER_SANITIZE_STRING) : $errores .= 'Por favor ingresa un usuario <br />';
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

    /*
    *   monitoringcenter/ pages/ closeSession
    *   Método para llamar concluir la sesión
    */
    public function closeSession() {
        session_start();
        session_destroy();

        header("Location:".URLROOT);
    }

    /*
    *   monitoringcenter/ pages/ arraysql
    *   Método para entrar a la data del array de MySQL. 
    */

    # TODO: migrarlo al objeto de la base de datos, y usarlo como método extendido
    public function arraysql($result)
    {
        $arrayresult=array();
        foreach ($result as $key => $value) {
            $arrayresult = $value;
        }
        return $arrayresult;
    }
}
