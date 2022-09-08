<?php

class Formularios extends Controller
{
    public function __construct()
    {
        $this->FormularioModel = $this->model('Requerimientos');
    }

    public function asesoria()
    {

        $data = [
            'page' => 'Contáctenos',
        ];

        $this->view('Formularios/asesoria', $data);
    }

    public function soporte()
    {

        $data = [
            'page' => 'Soporte',
        ];

        $this->view('Formularios/soporte', $data);
    }

    public function gestionFormu()
    {

        $data = [
            'page' => 'Gestión',
        ];

        $this->view('Formularios/gestionFormu', $data);
    }


    /**
     * This method receives the data that is sent from Asesoría and Soporte forms
     */

    public function recibeRequerimiento()
    {

        if (isset($_POST['enviarContactanos']) || isset($_POST['enviarSoporte'])) {

            $formsRequerimiento = [
                'inputNombre' => isset($_POST['inputNombre']) ? $inputNombre = $_POST['inputNombre'] : $inputNombre = '',
                'inputEmail' => isset($_POST['inputEmail']) ? $inputEmail = $_POST['inputEmail'] : $inputEmail = '',
                'inputTelefono' => isset($_POST['inputTelefono']) ? $inputTelefono = $_POST['inputTelefono'] : $inputTelefono = '',
                'tipoRequerimiento' => isset($_POST['tipoRequerimiento']) ? $tipoRequerimiento = $_POST['tipoRequerimiento'] : $tipoRequerimiento = '',
                'inputPrioridad' => isset($_POST['inputPrioridad']) ? $inputPrioridad = $_POST['inputPrioridad'] : $inputPrioridad = '',
                'inputObservacion' => isset($_POST['inputObservacion']) ? $inputObservacion = $_POST['inputObservacion'] : $inputObservacion = ''
            ];
        }

        $requerimiento = $this->FormularioModel->sqlInsert($formsRequerimiento);

        $data = [
            'Gracias' => 'Gracias por comunicarte con nosotros, estaremos en contacto contigo a la menor brevedad posible'
        ];

        isset($_POST['enviarContactanos']) ? $view = 'asesoria' : $view = 'soporte';

        $this->view('Formularios/' . $view, $data);
    }
}
