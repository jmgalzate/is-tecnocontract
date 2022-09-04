<!-- Formulario de solicitud de asesoría -->

<!-- Mostrar el estado de cartera y servicios contratados de la empresa. Requiere inicio de sesión -->

<?php
#Configuración de variables
require '../app/Config/config.php';

#Encabezado de página
include '../app/Views/inc/header.php';
?>
<h1>Contáctanos</h1>

<p>Para conocer más de nuestros productos y solicitar una asesoría personalizada, por favor envíanos los datos solicitados a continuación, uno de nuestros asesores se pondrá en contacto contigo lo antes posible</p>

<div class="position-relative" style="margin-right: 20%; margin-left:20%; margin-top:2%; padding: 3%;">
<form class="row g-3" method="GET" action="?">
<div class="row g-2 align-items-center">
  <div class="col-md-4">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="inputNombre">
  </div>
  <div class="col-md-4">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="inputEmail">
  </div>
  <div class="col-md-4">
    <label for="inputTelefono" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="inputTelefono" name="inputTelefono">
  </div>
</div>
  <div class="col-md-3">
    <label for="tipoRequerimiento" class="form-label">Tipo Requerimiento</label>
    <select id="tipoRequerimiento" class="form-select" name="tipoRequerimiento">
        <option selected value = "ASE">Asesoría</option>  
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputPrioridad" class="form-label">Prioridad</label>
    <select id="inputPrioridad" class="form-select" name="inputPrioridad">
      <option selected value = "4">Baja</option>
    </select>
  </div>
  <div class="input-group">
  <span class="input-group-text">Describe tu solicitud</span>
  <textarea class="form-control" aria-label="Detalle del requerimiento" id="inputObservacion" name="inputObservacion"></textarea>
</div>
  <div class="col-8">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
</div>

<?php 
#TODO: habilitar cuando el formulario sea submiteado:
  
//require APPROOT.'/Controllers/Soporte.php';

?>

<?php
#Pie de página
include '../app/Views/inc/footer.php';
?>