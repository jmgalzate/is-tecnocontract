<?php
#Header
require(APPROOT.'/views/inc/header.php');
?>

<h4><?php echo $data['page'];?></h4>

<div style="margin-left: 5%; margin-top: 5%">
    <h1>Contratos Tecnológicos</h1>
    <h2>Tecno Contract S.A.</h2>

    <h3>Somos tu aliado estratégico para la gestión de la información de tu empresa</h3>
    </br>
    <p>En nuestra página WEB podrás realizar las siguientes gestiones:</p>

    <ui>
        <li>Solicitar una asesoría personalizada para tu negocio</li>
        <li>Contratar nuestros productos</li>
        <li>Solicitar soporte a tu servicios</li>
        <li>Enviar la confirmación de tu pago</li>
    </ui>

    </br>

    <h3>Nuestros servicios: </h3>

    <div style="margin-right: 20%; margin-left: 20%;">
        <table class="table table-hover">
            <tr>
                <th>Servicio</th>
                <th>Descripción</th>
            </tr>
            <tr>
                <td>Diseño e implementación de tu base de datos.</td>
                <td>Luego de evaluar tus necesidades, nuestro equipo te presentará una propuesta de Base de Datos en la
                    cual se incluye no solo la gestión de almacenamiento, sino el motor de base de datos recomendado, la
                    plataforma de uso, y te acompañamos en la implementación. También puedes contratar la implementación
                    con nosotros.</td>
            </tr>
            <tr>
                <td>Implementación y/o carga de información (papeles, documentos, excel, entre otros) a tu base de
                    datos.</td>
                <td>implementamos tu base de datos, evaluando una proyección de crecimiento, para determinar las
                    configuraciones recomendadas al momento de instalar tu motor de bases de datos</td>
            </tr>
            <tr>
                <td>Almacenamiento y mantenimiento para base de datos con archivos pesados.</td>
                <td>Con este servicio, ofrecemos el alojamiento a travéz de nuestros aliados data center, de archivos de
                    mayor peso, como videos, imágenes, entre otros.</td>
            </tr>
            <tr>
                <td>Analizamos el estado actual de tu base de datos y te presentamos un informe con las mejoras
                    sugeridas.</td>
                <td>Nuestro equipo de Administradores de Bases de Datos, revisará el estado de tu base de datos, el uso
                    de la misma, solicitudes x minutos, y presentará al final el informe con el que daremos a conocer
                    los puntos que son necesarios gestionar con un mantenimiento o actualización de tu información</td>
            </tr>
            <tr>
                <td>Mantenimiento y programación de back ups.</td>
                <td>Nos encargamos de aplicar los mantenimientos requeridos a la base de datos, con la finalidad de
                    mejorar su performance, evitar pérdida de información, y darle mayor visibilidad; adicionalmente,
                    evaluamos que el plan de back up esté funcionando correctamente, además de la revisión de los
                    últimos back ups para garantiar que los mismos no esten corrputos</td>
            </tr>
            <tr>
                <td>Presentación de tableros con licencias de Power BI y Tableau</td>
                <td>Creemos firmemente que la información es el primer canal para que tu empresa pueda crecer, por eso,
                    ofrecemos nuestro servicio de visualización de la data, para que puedas contar con ella, en cortes
                    al día que te permitan tomar decisiones con mayor prontitud</td>
            </tr>
        </table>
    </div>

    <p>Pasa saber más de nosotros dale clic <a href="<?php echo 'pages/acerca.php' ?>">aquí</a></p>
    <p>Si quieres contratar uno de nuestros servicios, ponte en contancto con nosotros dando <a
            href="<?php echo 'pages/contactanos.php' ?>">clic aquí</a>, y uno de nuestros asesores se pondrá en contacto
        contigo</p>
</div>

<?php  
#Footer:
require(APPROOT.'/views/inc/footer.php');
?>