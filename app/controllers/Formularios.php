<?php 

class Formularios extends Controller {
    public function __construct() {
        $this->FormularioModel = $this->model('Requerimientos');
    }

    public function asesoria(){

        $data = [
            'page' => 'Contáctenos',
        ];

        $this->view('Formularios/asesoria', $data);
    }

    public function recibeAsesoria(){

        if(isset($_POST['enviarContactanos'])){
            
            $formAsesoriaData=[
            'inputNombre' => isset($_POST['inputNombre']) ? $inputNombre = $_POST['inputNombre'] : $inputNombre = '',
            'inputEmail' => isset($_POST['inputEmail']) ? $inputEmail = $_POST['inputEmail'] : $inputEmail = '',
            'inputTelefono' => isset($_POST['inputTelefono']) ? $inputTelefono = $_POST['inputTelefono'] : $inputTelefono = '',
            'tipoRequerimiento' => isset($_POST['tipoRequerimiento']) ? $tipoRequerimiento = $_POST['tipoRequerimiento'] : $tipoRequerimiento = '',
            'inputPrioridad' => isset($_POST['inputPrioridad']) ? $inputPrioridad = $_POST['inputPrioridad'] : $inputPrioridad = '',
            'inputObservacion' => isset($_POST['inputObservacion']) ? $inputObservacion = $_POST['inputObservacion'] : $inputObservacion = ''
            ];
        }

        $asesoria = $this->FormularioModel->insertAsesoria($formAsesoriaData);

        //$data = $formAsesoriaData;
        $data = [
            'formAsesoria' => $formAsesoriaData,
            'asesoria' => $asesoria,
            'test' => 'Test'
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