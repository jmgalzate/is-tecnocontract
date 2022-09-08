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

    <!-- Style sheet -->
    <link rel="stylesheet" href="<?php APPROOT ?>/public/css/style.css" />

    <!-- Java Script functions -->
    <script src="<?php APPROOT ?>/public/js/main.js"></script>

    <?php  
    /** PHP functions */
    require(APPROOT.'/public/php/functions.php');

    /** Session Confirmation */
            $nombre = isset($_SESSION['login_name']) ? $_SESSION['login_name'] : '';
            $type_user = isset($_SESSION['type_user']) ? $_SESSION['type_user'] : '';
    ?>

    <script>
    function callData(id, value, option, page) {
        $.ajax({

            type: 'POST', //aqui puede ser igual get
            url: page, //aqui va tu direccion donde esta tu funcion php
            data: {
                option: option,
                value: value
            }, //aqui tus datos
            befoeSend: () => {
                $('#' + id).html("Procesando...");
            },
            success: (response) => {
                $('#' + id).html(response);
            },
            error: () => {
                $('#' + id).html("Error en proceso ajax");
            }
        });
    }

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>

</head>

<body>
    <div class="container-fluid">
        <div>
            <div class="col-1 collapse show d-md-flex bg-light pt-1 pl-0 min-vh-100" id="sidebar"
                style=" position: fixed; height: auto; margin-left: -10px;">
                <ul class="nav flex-column flex-nowrap overflow-hidden">
                    
                    <!-- TODO: add an if condition if there is any active session -->
                    <li class="nav-item">
                        <a class="nav-link text-truncate" href="<?php echo URLROOT?>session/closeSession"><i class="fas fa-times-circle" style="color: #E88AA2 !important"></i> <span class="d-none d-sm-inline">Cerrar Sesión</span></a>
                    </li>
                    <!-- -->
                    
                    <li class="nav-item">
                        <a class="nav-link text-truncate" href="<?php echo URLROOT?>pages/portal"><i
                                class="fas fa-user-circle" style="color: #1A3B47 !important"></i> <span
                                class="d-none d-sm-inline">Inicio</span></a>
                    </li>

                    <li class="nav-item"><a class="nav-link collapsed text-truncate"
                            href="<?php echo URLROOT?>formularios/asesoria" data-toggle="collapse"
                            data-target="#submenu1"><i class="fa fa-table" style="color: #639FCB !important"></i> <span
                                class="d-none d-sm-inline">Contáctanos</span></a>
                    </li>

                    <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"
                                style="color: #79C5B4 !important"></i> <span
                                class="d-none d-sm-inline">Exportes</span></a></li>

                    <li class="nav-item"><a class="nav-link text-truncate" href="<?php echo URLROOT?>pages/about"><i
                                class="fas fa-users" style="color: #1A3B47 !important"></i> <span
                                class="d-none d-sm-inline">Nosotros</span></a></li>
                </ul>

            </div>

            <div style="margin-left: 10%; padding: 10px;" id="central">