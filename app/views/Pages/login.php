<?php
#Header
require(APPROOT.'/views/inc/header.php');
?>

<h1>Mi Empresa</h1>
<p>En esta sección puedes encontrar los detalles de los servicios que tienes contratados con nosotros, además del estado
    de tus facturas, para ver la información, por favor inicia sesión: </p>
<div class="position-relative" style="margin-right: 30%; margin-left:30%; margin-top:2%; padding: 3%;">
    <form>
        <div class="mb-3">
            <label for="inputLogin" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="inputLogin">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
</div>

<?php  
#Footer:
require(APPROOT.'/views/inc/footer.php');
?>