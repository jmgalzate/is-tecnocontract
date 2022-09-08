<?php 

class Miempresa extends Controller {
    public function __construct()
    {
        $this->MiempresaModel = $this->model('Dash');
    }

    public function miempresa()
    {
        if (!isset($_SESSION['login_name']) || !isset($_SESSION['type_user'])) {
            header("Location:" . URLROOT . "Session/login");
        } else {

            $serviciosContratados = $this->MiempresaModel->serviciosContratados($_SESSION['login_name']);
            $ultimasFacturas = $this->MiempresaModel->ultimasFacturas($_SESSION['login_name']);
            $pendientesPago = $this->MiempresaModel->pendientesPago($_SESSION['login_name']);


            $data = [
                'page' => 'Mi Empresa',
                'serviciosContratados' => $serviciosContratados,
                'ultimasFacturas' => $ultimasFacturas,
                'pendientesPago' => $pendientesPago
            ];

            $this->view('Miempresa/miempresa', $data);
    }
    }
}