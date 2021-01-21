<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
        <meta charset="utf-8">

        <title>GAZELLE | Administrador</title>

        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/fav.png">
        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <!--<link rel="stylesheet" href="../assets/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrapold.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/themes.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/themes/autumn.css">
        <!-- END Stylesheets -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/estilo.css">

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?= base_url() ?>assets/js/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>GAZELLE</strong></h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Cargando..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">

                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="<?= base_url().'index.php/administrador/escritorio' ?>" class="sidebar-brand">
                            <img src="<?= base_url() ?>assets/img/fav.png" width="25px"> <span class="sidebar-nav-mini-hide"><strong>GAZELLE</strong></span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-name"><strong>Hola!</strong><br>
                                <?= $nombreUsuario?></div>
                            </div>
                            <!-- END User Info -->

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="<?= base_url().'index.php/administrador/' ?>escritorio"><i class="fa fa-desktop sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Escritorio</span></a>
                                </li>
                                <li>
                                    <a href="<?= base_url().'index.php/administrador/' ?>usuarios"><i class="fa fa-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Usuarios</span></a>
                                </li>
                                <li>
                                    <a href="<?= base_url().'index.php/administrador/' ?>registros" class=" active"><i class="fa fa-pencil sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Registros</span></a>
                                </li>
                                <li>
                                    <a href="<?= base_url().'index.php/administrador/' ?>login"><i class="gi gi-exit sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Salir</span></a>
                                </li>
                            </ul>
                            <!-- END Sidebar Navigation -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->
                        </ul>
                        <!-- END Left Header Navigation -->

                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">

<!-- Empieza el contenido -->
                        <div class="row">
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong><i class="fa fa-pencil"></i> REGISTROS DESDE LANDING PAGE</strong></h2>
                            </div>
                            <p></p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Fecha</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>Estado</th>
                                            <th>Empresa</th>
                                            <th>Mensaje</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!isset($clientes)) {
                                            
                                            } else {?>
                                    <!-- DATA DE LOS REGISTROS DE CLIENTES -->
                                        <?php 
                                        foreach ($clientes as $key => $value) {
                                            ?>

                                        <tr>
                                            <td class="text-center"><?= $key+1 ?></td>
                                            <td class="text-center"><?= $value -> created_at ?></td>
                                            <td><?= $value -> nombre ?></td>
                                            <td><?= $value -> telefono ?></td>
                                            <td><?= $value -> correo ?></td>
                                            <td><?= $value -> estado ?></td>
                                            <td><?= $value -> empresa ?></td>
                                            <td><?= $value -> mensaje ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button id="informacionCliente" onclick="obtenerDataCliente(<?= '' . $value -> id . ''?>)" type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <?php
                                        }
                                    }?>
                                        <!-- <tr>
                                            <td class="text-center">001</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">002</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">003</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">004</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">005</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">006</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">007</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">008</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">009</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">010</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">011</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">012</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">013</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">014</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">015</td>
                                            <td class="text-center">15 Feb 2020</td>
                                            <td>Anahí Olvera</td>
                                            <td>552 134 9763</td>
                                            <td>olvera@gmail.com</td>
                                            <td>CDMX</td>
                                            <td>MOTACARGAS SA</td>
                                            <td>Requiero cotización</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#verregistro">Ver</button>
                                                </div>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
<!-- Termina el contenido -->

                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            
                        </div>
                        <div class="pull-left">
                            
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

<!-- Modal -->
<div class="modal fade" id="verregistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">DATOS DE REGISTRO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="datos-reg">
            Fecha de registro: <span id="clienteFecha"></span><br>
            Nombre: <span id="clienteNombre"></span><br>
            Teléfono: <span id="clienteTelefono"></span><br>
            Email: <span id="clienteCorreo"></span><br>
            Estado: <span id="clienteEstado"></span>
            <hr>
            Empresa: <span id="clienteEmpresa"></span><br>
            Mensaje: <span id="clienteMensaje"></span><br>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?= base_url() ?>assets/js/vendor/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/plugins.js"></script>
        <script src="<?= base_url() ?>assets/js/app.js"></script>

        
        <!-- Load and execute javascript code used only in this page -->
        <script src="<?= base_url() ?>assets/js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
    </body>
    
    <script>
        let dataVaciaCliente = {
            nombre: '',
            telefono: '',
            correo: '',
            estado: '',
            empresa: '',
            mensaje: '',
            created_at: ''
        }
    function obtenerDataCliente(idCliente) {
        var data = new FormData();
        var xmlhttp = new XMLHttpRequest();
        var url = "<?php echo base_url(); ?>index.php/administrador/escritorio/obetenerDataCliente/" + idCliente;
        xmlhttp.open("POST", url, true);
        xmlhttp.onload = function() {
            var myData = JSON.parse(this.responseText);
            if (myData) {
            setearDataClienteDetalle(myData);
            } else {
            setearDataClienteDetalle(dataVaciaCliente);
                alert('Ocurrio un error, no fue posible obtener los datos del registro seleccionado.');
            }
        };
        xmlhttp.send(data);
    }

/**
 * Setear los datos del cliente
 */
    function setearDataClienteDetalle(data) {
        let fecha = document.getElementById('clienteFecha');
        if (fecha) {
        fecha.innerText = data.created_at;
        }
        let nombre = document.getElementById('clienteNombre');
        if (nombre) {
        nombre.innerText = data.nombre;
        }
        let telefono = document.getElementById('clienteTelefono');
        if (telefono) {
        telefono.innerText = data.telefono;
        }
        let correo = document.getElementById('clienteCorreo');
        if (correo) {
        correo.innerText = data.correo;
        }
        let estado = document.getElementById('clienteEstado');
        if (estado) {
        estado.innerText = data.estado;
        }
        let empresa = document.getElementById('clienteEmpresa');
        if (empresa) {
        empresa.innerText = data.empresa;
        }
        let mensaje = document.getElementById('clienteMensaje');
        if (mensaje) {
        mensaje.innerText = data.mensaje;
        }
    }

        </script>
</html>