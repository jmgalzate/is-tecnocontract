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

<?php  
#Footer:
require(APPROOT.'/views/inc/footer.php');
?>