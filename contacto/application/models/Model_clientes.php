<?php

class model_clientes extends CI_Model {

    /**
     * Obtener todos los clientes
     */
    function obtenerClientes() {
        $query = $this -> db -> order_by("id",'desc');
        $query = $this -> db -> get('clientes');
        return $query -> result();
    }

    /**
     * Obtener los ultimos clientes en orden descendente o ascendente
     * @param cantidadRegistrosMostrar Cantidad de registros a regresar, se le pasa un número en formato de texto
     * @param orden Ordenamiento de los registros, las opciones son 'asc' para ascenedente y 'desc' para descendente
     */
    function obtenerClientesByLimitAndOrder($cantidadRegistrosMostrar, $orden) {
        $query = $this -> db -> order_by("id",$orden);
        $query = $this -> db -> limit($cantidadRegistrosMostrar);
        $query = $this->db->get('clientes');
        return $query -> result();
    }

    /**
     * Obtener los datos de un cliente mediante el id
     * @param idCliente Identificador de un cliente
     */
    function obtenerClienteByIdCliente($idCliente) {
        $query = $this -> db -> where('id', $idCliente);
        $query = $this -> db -> get('clientes');
        return $query -> result();
    }

    /**
     * Guardar un cliente
     * @param cliente Objeto de tipo cliente
     */
    function guardarCliente($cliente) {
        try {
            $this -> db -> insert('clientes', $cliente);
            return $this->db->insert_id();
        } catch (\Throwable $th) {
            return false;
        }
    }

}

?>