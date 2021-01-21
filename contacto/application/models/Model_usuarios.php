<?php

class model_usuarios extends CI_Model {

    /**
     * Obtener todos los usuarios
     */
    function obtenerUsuarios() {
        $query = $this -> db -> order_by("id",'desc');
        $query = $this -> db -> get('usuarios');
        return $query -> result();
    }

    /**
     * Obtener los ultimos usuarios en orden descendente o ascendente
     * @param cantidadRegistrosMostrar Cantidad de registros a regresar, se le pasa un número en formato de texto
     * @param orden Ordenamiento de los registros, las opciones son 'asc' para ascenedente y 'desc' para descendente
     */
    function obtenerUsuariosByLimitAndOrder($cantidadRegistrosMostrar, $orden) {
        $query = $this -> db -> order_by("id",$orden);
        $query = $this -> db -> limit($cantidadRegistrosMostrar);
        $query = $this->db->get('usuarios');
        return $query -> result();
    }

    /**
     * Obtener los datos de un usuario mediante el id
     * @param idUsuario Identificador de un usuario
     */
    function obtenerUsuarioByIdUsuario($idUsuario) {
        $query = $this -> db -> where('id', $idUsuario);
        $query = $this -> db -> get('usuarios');
        return $query -> result();
    }

    /**
     * Guardar un usuario
     * @param usuario Objeto de tipo usuario
     */
    function guardarusuario($usuario) {
        try {
            $this -> db -> insert('usuarios', $usuario);
            return $this->db->insert_id();
        } catch (\Throwable $th) {
            return false;
        }
    }
    
    /**
     * Actualizar una usuario en especifico
     * @param idUsuario Identificador del registro
     */
    function actualizarUsuario($idUsuario, $Usuario) {
        try {
            $this -> db -> where('id', $idUsuario);
            $this -> db -> update('usuarios', $Usuario);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

}

?>