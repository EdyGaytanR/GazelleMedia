<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('model_clientes'); // Cargar modelo de clientes
		$this->load->helper('usuario_helper'); // Cargar helper de usuario
	}

	public function index()
	{
		validarSesion();
		$body['nombreUsuario'] = obtenerNombre();
		$body['clientes'] = $this -> model_clientes -> obtenerClientes();
		$this->load->view('administrador/registros', $body);
	}

}
