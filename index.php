<?php
    require __DIR__.'/app/Config/config.php';
    include __DIR__.'/app/Views/inc/header.php';
?>

<h1>Contratos Tecnológicos</h1>
<h2>Tecno Contract S.A.</h2>

<h3>Somos tu aliado estratégico para la gestión de la información de tu empresa</h3>

<p>En nuestra página WEB podrás realizar las siguientes gestiones:</p>

<ui>
    <li>Solicitar una asesoría personalizada para tu negocio</li>
    <li>Contratar nuestros productos</li>
    <li>Solicitar soporte a tu servicios</li>
    <li>Enviar la confirmación de tu pago</li>
</ui>


<h3>Nuestros servicios: </h3>

<table>
    <tr>
        <th>Servicio</th>
        <th>Descripción</th>
    </tr>
    <tr>
        <td>Gestión de la información</td>
        <td>Nos encargamos de analizar tu base de datos</td>
    </tr>
</table>

<p>Pasa saber más de nosotros dale clic <a href="<?php echo 'pages/acerca.php' ?>">aquí</a></p>

<?php

    include __DIR__.'/app/Views/inc/footer.php'; 