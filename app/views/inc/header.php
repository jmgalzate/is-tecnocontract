<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Meta information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo SITENAME; ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Icons library -->
    <script src="https://kit.fontawesome.com/73d11385a4.js" crossorigin="anonymous"></script>

    <?php
    /** PHP functions */
    require(APPROOT . '/functions/php/functions.php');
    ?>

    <style>
        body {
            margin: 0;
        }

        #unorderList {
            list-style-type: none;
            margin-left: -10px;
            padding: 0;
            width: 12%;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        #unorderList li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        #unorderList li a.active {
            background-color: #04AA6D;
            color: white;
        }

        #unorderList li a:hover:not(.active) {
            background-color: #555;
            color: white !important;
        }

        #contentArea {
            margin-left: 12%;
            padding: 1px 16px;
            height: 1000px;
        }
    </style>

</head>

<body>
<div class="container-fluid">
    <div>
        <navbar>
            <ul class="nav flex-column flex-nowrap overflow-hidden" id="unorderList">
                <!-- The session buttons depends of the $_SESSION constant. If it's setted, we show the "Cerrar Session" button, if not, we show the "Iniciar Session" button -->
                <?php
                if (!isset($_SESSION['login_name'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-truncate" href="<?php echo URLROOT ?>session/login"
                           style="color: #E88AA2"><i class="fas fa-user-circle"></i> <span class="d-none d-sm-inline">Iniciar Sesión</span></a>
                    </li>

                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-truncate" href="<?php echo URLROOT ?>session/closeSession"
                           style="color: #E88AA2"><i class="fas fa-times-circle"></i> <span class="d-none d-sm-inline">Cerrar Sesión</span></a>
                    </li>
                <?php } ?>

                <li class="nav-item">
                    <a class="nav-link text-truncate" href="<?php echo URLROOT ?>pages/portal" style="color: #1A3B47"><i
                                class="fas fa-home"></i> <span class="d-none d-sm-inline">Inicio</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-truncate" href="<?php echo URLROOT ?>formularios/asesoria"
                       style="color: #639FCB"><i class="fas fa-comment-alt"></i> <span class="d-none d-sm-inline">Contáctanos</span></a>
                </li>

                <li class="nav-item"><a class="nav-link text-truncate" href="<?php echo URLROOT ?>Miempresa/miempresa"
                                        style="color: #79C5B4"><i class="fas fa-industry"></i> <span
                                class="d-none d-sm-inline">Mi Empresa</span></a></li>

                <li class="nav-item"><a class="nav-link text-truncate" href="<?php echo URLROOT ?>pages/about"
                                        style="color: #1A3B47 "><i class="fas fa-users"></i> <span
                                class="d-none d-sm-inline">Nosotros</span></a></li>
            </ul>
        </navbar>
        <div id="contentArea">