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

<h2>Últimas 5 facturas</h2>

<h2>Facturas pendientes de pago</h2>

<?php  
#Footer:
require(APPROOT.'/views/inc/footer.php');
?>