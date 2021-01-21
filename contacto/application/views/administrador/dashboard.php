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
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrapold.min.css">
        <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> -->

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
        <script src="<?= base_url() ?>assets/js/vendor/modernizr.min.js'"></script>
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
                                    <a href="<?= base_url().'index.php/administrador/' ?>escritorio" class=" active"><i class="fa fa-desktop sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Escritorio</span></a>
                                </li>
                                <li>
                                    <a href="<?= base_url().'index.php/administrador/' ?>usuarios"><i class="fa fa-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Usuarios</span></a>
                                </li>
                                <li>
                                    <a href="<?= base_url().'index.php/administrador/' ?>registros"><i class="fa fa-pencil sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Registros</span></a>
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
                        <!-- Dashboard Header -->
                        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                        <div class="content-header content-header-media">
                            <div class="header-section">
                                <div class="row">
                                    <!-- Main Title (hidden on small devices for the statistics to fit) -->
                                    <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                        <h1>Hola <strong><?= $nombreUsuario?></strong><br><small>¡Que tengas un excelente día!</small></h1>
                                    </div>
                                    <!-- END Main Title -->

                                    <!-- Top Stats -->
                                    <div class="col-md-8 col-lg-6">
                                        <div class="row text-center">
                                            <div class="col-xs-6 col-sm-6">
                                                <h2 class="animation-hatch">
                                                    <strong>
                                                    <?php if (isset($clientesCantidad)) {
                                                        echo $clientesCantidad;
                                                    } else {?>
                                                        0
                                                        <?php }?>
                                                    </strong><br>
                                                    <small><i class="fa fa-pencil"></i> Nuevos registros</small>
                                                </h2>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <h2 class="animation-hatch">
                                                    <strong>
                                                        
                                        <?php if (isset($usuariosCantidad)) {
                                            echo $usuariosCantidad;
                                        } else {?>
                                            0
                                        <?php }?>
                                                    </strong><br>
                                                    <small><i class="fa fa-user"></i> Usuarios</small>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Top Stats -->
                                </div>
                            </div>
                            <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                            <img src="<?= base_url() ?>assets/img/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">
                        </div>
                        <!-- END Dashboard Header -->

<!-- Empieza el contenido -->
                        <div class="row">
                        <div class="block full">
                            <div class="block-title">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2><strong><i class="fa fa-pencil"></i> REGISTROS DESDE LANDING PAGE</strong></h2>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="<?= base_url().'index.php/administrador/' ?>registros"><h4>Ver completos ></h4></a>
                                    </div>
                                </div>
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
                                            <td class="text-center"><?= $value -> id ?></td>
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
                                    <!-- #DATA DE LOS REGISTROS DE CLIENTES -->
                                        <!-- <tr>
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
                                        </tr> -->
                                    </tbody>
                                </table>
                                
                                <?php if (!isset($clientes)) {?>
                                    <div class="alert alert-info text-center" role="alert">
                                        Sin registros al momento.
                                    </div>
                                <?php } ?>
                                <?php if (isset($clientes)) {
                                    if (count($clientes) == 0) {?>
                                    <div class="alert alert-info text-center" role="alert">
                                        Sin registros al momento.
                                    </div>
                                <?php }
                                } ?>
                            </div>
                        </div><!-- primera tabla de registros-->

                        <div class="block full">
                            <div class="block-title">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2><strong><i class="fa fa-user"></i> USUARIOS SISTEMA ADMINISTRADOR</strong></h2>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="<?= base_url().'index.php/administrador/' ?>usuarios"><h4>Ver completos ></h4></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Fecha</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Empresa</th>
                                            <th class="text-center">Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!isset($usuarios)) {
                                            
                                            } else {?>
                                    <!-- DATA DE LOS REGISTROS DE USUARIOS -->
                                        <?php 
                                        foreach ($usuarios as $key => $value) {
                                            ?>

                                        <tr>
                                            <td class="text-center"><?= $value -> id ?></td>
                                            <td class="text-center"><?= $value -> created_at ?></td>
                                            <td><?= $value -> nombre ?></td>
                                            <td><?= $value -> correo ?></td>
                                            <td><?= $value -> empresa ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" onclick="obtenerDataUsuario(<?= $value->id;?>)" class="btn btn-info color-blanco" data-toggle="modal" data-target="#editarusuario">Editar</button>
                                                    <?php if ($value->status == 'activo') {?>
                                                    <label class="switch">
                                                        <input type="checkbox" onclick="activarDesactivarUsuario(<?= $value->id?>, 'desactivar')" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <?php } else {?>
                                                    <label class="switch">
                                                        <input type="checkbox" onclick="activarDesactivarUsuario(<?= $value->id?>, 'activar')">
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <?php }?>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <?php
                                        }
                                    }?>
                                    <!-- #DATA DE LOS REGISTROS DE USUARIOS -->
                                        <!-- <tr>
                                            <td class="text-center">001</td>
                                            <td class="text-center">12 Feb 2020</td>
                                            <td><a href="javascript:void(0)">Yonatan López</a></td>
                                            <td>yon2788@gmail.com</td>
                                            <td>TripleW</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#editarusuario">Editar</button>
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">002</td>
                                            <td class="text-center">12 Feb 2020</td>
                                            <td><a href="javascript:void(0)">J Hernandez</a></td>
                                            <td>j@gmail.com</td>
                                            <td>TripleW</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#editarusuario">Editar</button>
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">003</td>
                                            <td class="text-center">12 Feb 2020</td>
                                            <td><a href="javascript:void(0)">A Olguin</a></td>
                                            <td>olguin@gmail.com</td>
                                            <td>Alter</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info color-blanco" data-toggle="modal" data-target="#editarusuario">Editar</button>
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                                
                                <?php if (!isset($usuarios)) {?>
                                    <div class="alert alert-info text-center" role="alert">
                                        Sin registros al momento.
                                    </div>
                                <?php } ?>
                                <?php if (isset($usuarios)) {
                                    if (count($usuarios) == 0) {?>
                                    <div class="alert alert-info text-center" role="alert">
                                        Sin registros al momento.
                                    </div>
                                <?php }
                                } ?>
                            </div>
                        </div><!--segunda tabla de usuarios-->
                        </div><!--row de contenidos-->
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
<!-- Modal ver registro -->
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

<!--MODAL editar usuario-->
<div class="modal fade" id="editarusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">EDITAR USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <?php 
                echo form_open(base_url() . 'index.php/administrador/escritorio/actualizarUsuario' );
            ?>
        <form>
            <input type="hidden" class="form-control" id="idEditar" name="idEditar">
            <div class="form-group">
                <label for="nombreEditar">Nombre</label>
                <input type="text" class="form-control" id="nombreEditar" name="nombreEditar">
            </div>
            <div class="form-group">
                <label for="correoEditar">Correo</label>
                <input type="email" class="form-control" id="correoEditar" name="correoEditar">
            </div>
            <div class="form-group">
                <label for="empresaEditar">Empresa</label>
                <input type="text" class="form-control" id="empresaEditar" name="empresaEditar">
            </div>
            <div class="form-group">
                <label for="passwordEditar">Password</label>
                <input type="password" class="form-control" id="passwordEditar" name="passwordEditar">
            </div>
            <button type="submit" class="btn bg-btns">Guardar</button>
        </form>
              <?php echo form_close(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?= base_url() ?>assets/js/vendor/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/plugins.js"></script>
        <script src="<?= base_url() ?>assets/js/app.js"></script>

        
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
                if (!myData['existe']) {
                    setearDataClienteDetalle(myData);
                } else {
                    errorData();
                }
            } else {
                errorData();
            }
        };
        xmlhttp.send(data);
    }

    function errorData() {
        setearDataClienteDetalle(dataVaciaCliente);
        alert('Ocurrio un error, no fue posible obtener los datos del registro seleccionado.');
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

    let dataVaciaUsuario = {
            id: '',
            nombre: '',
            correo: '',
            empresa: '',
            password: ''
        }
    function obtenerDataUsuario(idUsuario) {
        var data = new FormData();
        var xmlhttp = new XMLHttpRequest();
        var url = "<?php echo base_url(); ?>index.php/administrador/escritorio/obetenerDataUsuario/" + idUsuario;
        xmlhttp.open("POST", url, true);
        xmlhttp.onload = function() {
            var myData = JSON.parse(this.responseText);
            if (myData) {
                if (!myData['existe']) {
                    setearDataUsuarioDetalle(myData);
                } else {
                    errorData();
                }
            } else {
                errorData();
            }
        };
        xmlhttp.send(data);
    }
    
    function activarDesactivarUsuario(idUsuario, opcion) {
        var data = new FormData();
        var xmlhttp = new XMLHttpRequest();
        var url = "<?php echo base_url(); ?>index.php/administrador/escritorio/" + opcion + "Usuario/" + idUsuario;
        xmlhttp.open("POST", url, true);
        xmlhttp.onload = function() {
            var myData = JSON.parse(this.responseText);
            if (myData) {
                if (myData['resultado'] != '0') {
                    mostrarMensajeCorrecto(myData.mensaje);
                } else {
                    mostrarMensaje(myData.mensaje);
                }
            } else {
                mostrarMensaje(myData.mensaje);
            }
        };
        xmlhttp.send(data);
    }

    function mostrarMensaje(mensaje) {
        alert(mensaje);
    }
    
    function mostrarMensajeCorrecto(mensaje) {
        location.reload();
        alert(mensaje);
    }

    function errorData() {
        setearDataUsuarioDetalle(dataVaciaUsuario);
        alert('Ocurrio un error, no fue posible obtener los datos del registro seleccionado.');
    }
/**
 * Setear los datos del usuarios en el formulario
 */
    function setearDataUsuarioDetalle(data) {
        let id = document.getElementById('idEditar');
        if (id) {
        id.value = data.id;
        }
        let nombre = document.getElementById('nombreEditar');
        if (nombre) {
        nombre.value = data.nombre;
        }
        let correo = document.getElementById('correoEditar');
        if (correo) {
        correo.value = data.correo;
        }
        let password = document.getElementById('passwordEditar');
        if (password) {
        password.value = data.password;
        }
        let empresa = document.getElementById('empresaEditar');
        if (empresa) {
        empresa.value = data.empresa;
        }
    }
        </script>
</html>