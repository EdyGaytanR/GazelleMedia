<?php

class model_login extends CI_Model {

    /**
     * Obtener los datos de un usuario mediante el id
     * @param Correo Identificador de un usuario
     */
    function obtenerUsuarioByCorreo($correo) {
        $query = $this -> db -> where('correo', $correo);
        $query = $this -> db -> get('usuarios');
        return $query -> result();
    }

}

?>