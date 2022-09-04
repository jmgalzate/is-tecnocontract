<?php 

require APPROOT.'/Models/Formularios.php';

#TODO: agregar condicional if para evitar errores de salida:
    
    $nombreSolicitante = $_POST['inputNombre'];
    $emailSolicitante = $_POST['inputEmail'];
    $telefonoSolicitante = $_POST['inputTelefono'];
    $tipoRequerimiento = $_POST['tipoRequerimiento'];
    $inputPrioridad = $_POST['inputPrioridad'];
    $observacionSolicitante = $_POST['inputObservacion'];

$inputReq = "INSERT INTO requerimiento (tiporeqid, nombre, email, telefono, observacion, prioridad, fechareq) VALUES ('".$tipoRequerimiento."', '".$nombreSolicitante."', '".$emailSolicitante."', '".$telefonoSolicitante."', '".$observacionSolicitante."', ".$inputPrioridad.", '".date('Y-m-d H:i:s')."')";

$form = new Formularios();
$reqIngresado = $insertReq->insertReq($inputReq);


//$query = 'select * from departamentos';
//$departamentos= $form->getDepartamentos($query);