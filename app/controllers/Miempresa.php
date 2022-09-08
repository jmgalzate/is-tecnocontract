<?php 

class Miempresa extends Controller {
    public function __construct()
    {
    }

    public function miempresa()
    {
        if (!isset($_SESSION['login_name']) || !isset($_SESSION['type_user'])) {
            header("Location:" . URLROOT . "Session/login");
        } else {
        $data = [
            'page' => 'Mi Empresa',
        ];

        $this->view('Miempresa/miempresa', $data);
    }
    }
}