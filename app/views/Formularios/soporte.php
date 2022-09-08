<?php
#Header
require(APPROOT.'/views/inc/header.php');
?>

<h1>Solicitud de soporte técnico</h1>

<div class="position-relative" style="margin-right: 30%; margin-left:10%; margin-top:2%; padding: 3%;">
<form class="row g-3" method="POST" action="<?php echo URLROOT; ?>Formularios/recibeRequerimiento">
  <div class="col-md-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="inputNombre">
  </div>
  <div class="col-md-3">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="inputEmail">
  </div>
  <div class="col-md-3">
    <label for="inputTelefono" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="inputTelefono" name="inputTelefono">
  </div>
  <div class="col-md-3">
    <label for="tipoRequerimiento" class="form-label">Tipo Requerimiento</label>
    <select id="tipoRequerimiento" class="form-select" name="tipoRequerimiento">
      <option selected value = "FPR">Falla en Producción</option>  
      <option selected value = "FQS">Falla en QAS</option>
      <option selected value = "SOL">Solicitud de Servicio</option>
      <option selected value = "MAN">Mantenimiento</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputPrioridad" class="form-label">Prioridad</label>
    <select id="inputPrioridad" class="form-select" name="inputPrioridad">
      <option selected value = "1">Urgente</option>
      <option selected value = "2">Alta</option>
      <option selected value = "3">Media</option>
      <option selected value = "4">Baja</option>
    </select>
  </div>
  <div class="input-group">
  <span class="input-group-text">Detalle del requerimiento</span>
  <textarea class="form-control" aria-label="Detalle del requerimiento" id="inputObservacion" name="inputObservacion"></textarea>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="enviarSoporte" id="enviarSoporte">Enviar</button>
  </div>
</form>
</div>

<div>
<?PHP 
echo isset($data['Gracias']) ? $data['Gracias'] : '';
?>
</div>

<?php  
#Footer:
require(APPROOT.'/views/inc/footer.php');
?>