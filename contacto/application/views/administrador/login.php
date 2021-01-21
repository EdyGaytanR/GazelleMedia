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
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/themes.css">
        <!-- END Stylesheets -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/estilo.css">

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?= base_url() ?>assets/js/vendor/modernizr.min.js"></script>
    </head>
    <body id="bg-body">
        <!-- Login Background -->
        <div id="login-background">
            <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
            <img src="<?= base_url() ?>assets/img/placeholders/headers/login_header.jpg" alt="Login Background" class="animation-pulseSlow">
        </div>
        <!-- END Login Background -->

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn">
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1><img src="<?= base_url() ?>assets/img/fav.png"> <strong>Gazelle</strong></h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
              <?php 
                echo form_open(base_url() . 'index.php/administrador/login/validarSesion' );
            ?>
                <form action="index.html" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="login-email" name="login-email" class="form-control input-lg" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-4">
                        <?php if (isset($mensaje)) {
                                    if ($mensaje != '') {?>
                                    <div class="alert alert-info alert-dismissible show" role="alert">
                                            <?= $mensaje?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <?php }
                                } ?>
                        </div>
                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm bg-btns">ENTRAR</button>
                        </div>
                    </div>
                </form>
              <?php echo form_close(); ?>
                <!-- END Login Form -->

            </div>
            <!-- END Login Block -->

            <!-- Footer -->
            <footer class="text-muted text-center">
                <small>Gazelle media</small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->


        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?= base_url() ?>assets/js/vendor/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/plugins.js"></script>
        <script src="<?= base_url() ?>assets/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?= base_url() ?>assets/js/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>