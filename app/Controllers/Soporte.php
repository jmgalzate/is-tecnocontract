<?php 

require APPROOT.'/Models/Formularios.php';


$nombreSolicitante = $_GET['inputNombre'];
$emailSolicitante = $_GET['inputEmail'];
$telefonoSolicitante = $_GET['inputTelefono'];
$tipoRequerimiento = $_GET['tipoRequerimiento'];
$inputPrioridad = $_GET['inputPrioridad'];
$observacionSolicitante = $_GET['inputObservacion'];

#TODO: revisar por qué no insertaron los valores:
$inputReq = "INSER INTO requerimiento (tiporeqid, nombre, email, telefono, observacion, prioridad) VALUES ('".$tipoRequerimiento."', '".$nombreSolicitante."', '".$emailSolicitante."', '".$telefonoSolicitante."', '".$observacionSolicitante."', ".$inputPrioridad.")";

$form = new Formularios();
$reqIngresado = $insertReq->insertReq($inputReq);


//$query = 'select * from departamentos';
//$departamentos= $form->getDepartamentos($query);

require APPROOT.'/Views/formularios/v_soporte.php'; 