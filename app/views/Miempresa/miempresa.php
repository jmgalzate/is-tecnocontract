<?php
#Header
require(APPROOT.'/views/inc/header.php');
?>

<p>Para solicitar asistencia técnica, por favor dar <a href="<?php echo URLROOT ?>Formularios/soporte">clic aquí</a></p>

<h1>
<?php 
echo $data['page'];
?>
</h1>

<h2>Servicios contratados</h2>
<table class="table table-hover">
<?php 
bigtable($data['serviciosContratados']);
?>
</table>

<h2>Últimas 5 facturas</h2>
<table class="table table-hover">
<?php 
bigtable($data['ultimasFacturas']);
?>
</table>

<h2>Facturas pendientes de pago</h2>
<table class="table table-hover">
<?php 
bigtable($data['pendientesPago']);
?>
</table>

<?php  
#Footer:
require(APPROOT.'/views/inc/footer.php');
?>