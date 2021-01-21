<?php
    /**
     * OBTENER EL IDENTIFICADOR DEL USUARIO DE SESIÓN ACTUAL
     */
    function obtenerId() {
        return $_SESSION["idUsuario"];
    }
    /**
     * OBTENER EL NOMBRE DEL USUARIO DE SESIÓN ACTUAL
     */
    function obtenerNombre() {
        return $_SESSION["nombreUsuario"];
    }
    /**
     * OBTENER EL CORREO DEL USUARIO DE LA SESIÓN ACTUAL
     */
    function obtenerCorreo() {
        return $_SESSION["correoUsuario"];
    }
    /**
     * VALIDAR LA SESIÓN ACTUAL
     */
    function validarSesion() {
        if(!isset($_SESSION["correoUsuario"])) {
            redirect(base_url()."administrador/index.php/login");
        }
    }
    /**
     * CERRAR LA SESIÓN ACTUAL
     */
    function cerrarSesion() {
        unset($_SESSION["idUsuario"]);
        unset($_SESSION["correoUsuario"]);
        unset($_SESSION["nombreUsuario"]);
        redirect(base_url()."administrador/index.php/login");
    }
?>