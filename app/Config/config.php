<?php

/*
*   En este archivo se definen las CONSTANTES principales de la aplicación. 
*   Las credenciales de la base de datos y las rutas bases APPROOT, URLROOT y SITENAME
*   La CONSTANTE PUBLICROOT se encuentra en el archivo: monitoringcenter/ public/ pconfig.php
*/

//Local machine
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', 'S4p3r34ud3779**');
 define('DB_DBNAME', 'tccontract');
 define('DB_CHARSET', 'utf8');

//APP Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root (Se debe de actualizar, siempre que vaya a pasar a ambiente de producción, para habilitar el HOST a utilizar)
define('URLROOT', 'http://localhost/is-tecnocontract/');

//Site name

define('SITENAME', 'Tecno Contratos');
