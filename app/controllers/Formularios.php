<?php 

class Formularios extends Controller {
    public function __construct() {

    }

    public function asesoria(){
        $aesoria = $this->asesoriaModel = $this->model('Requerimientos');

        $data = [
            'page' => 'Contáctenos',
        ];

        $this->view('Formularios/asesoria', $data);
    }

    public function soporte() {

        $data = [
            'page' => 'Soporte',
        ];

        $this->view('Formularios/soporte', $data);

    }

    public function gestionFormu(){

        $data = [
            'page' => 'Gestión',
        ];

        $this->view('Formularios/gestionFormu', $data);
        
    }
}