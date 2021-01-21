<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escritorio extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('model_clientes'); // Cargar modelo de clientes
		$this->load->model('model_usuarios'); // Cargar modelo de usuarios
		$this->load->helper('usuario_helper'); // Cargar helper de usuario
	}

	public function index()
	{
		validarSesion();
		$usuarios = $this -> model_usuarios -> obtenerUsuarios();
		$body['usuariosCantidad'] = count($usuarios);
		$clientes = $this -> model_clientes -> obtenerClientes();
		$body['clientesCantidad'] = count($clientes);
		$body['nombreUsuario'] = obtenerNombre();
		$body['clientes'] = $this -> model_clientes -> obtenerClientesByLimitAndOrder('5', 'desc');
		$body['usuarios'] = $this -> model_usuarios -> obtenerUsuariosByLimitAndOrder('5', 'desc');
		$this->load->view('administrador/dashboard', $body);
	}
	
	public function obetenerDataCliente($idCliente)
	{
		validarSesion();
		$dataCliente = $this -> model_clientes -> obtenerClienteByIdCliente($idCliente);
		$entre = 0;
		foreach ($dataCliente as $cliente) {
			echo json_encode(
				$cliente
			);
			$entre = 1;
		}

		if ($entre == 0) {
			echo json_encode(
				array('existe' => '0')
			);
		}
	}
	
	public function obetenerDataUsuario($idUsuario)
	{
		validarSesion();
		$dataUsuario = $this -> model_usuarios -> obtenerUsuarioByIdUsuario($idUsuario);
		$entre = 0;
		foreach ($dataUsuario as $Usuario) {
			echo json_encode(
				$Usuario
			);
			$entre = 1;
		}

		if ($entre == 0) {
			echo json_encode(
				array('existe' => '0')
			);
		}
	}
	
	public function actualizarUsuario() {
		validarSesion();
        $this -> form_validation -> set_rules('nombreEditar', '', "required|min_length[3]|trim");
        $this -> form_validation -> set_rules('correoEditar', '', array("required", "valid_email"));
		$this -> form_validation -> set_rules('passwordEditar', '', array("required", "min_length[6]"));
		
        $body['nombreUsuario'] = obtenerNombre();
    if($this -> form_validation -> run() == TRUE) {
		$empresa = ($this -> input -> post('empresaEditar')) ? $this -> input -> post('empresaEditar') : ' ';
		$idUsuario = $this -> input -> post('idEditar');
		$usuarioData = array(
			'nombre' => $this -> input -> post('nombreEditar'),
			'password' => $this -> input -> post('passwordEditar'),
			'correo' => $this -> input -> post('correoEditar'),
            'empresa' => $empresa
        );
        $result = $this -> model_usuarios -> actualizarUsuario($idUsuario, $usuarioData);
        if ($result != false) {
			$usuarios = $this -> model_usuarios -> obtenerUsuarios();
			$body['usuariosCantidad'] = count($usuarios);
			$clientes = $this -> model_clientes -> obtenerClientes();
			$body['clientesCantidad'] = count($clientes);
			$body['clientes'] = $this -> model_clientes -> obtenerClientesByLimitAndOrder('5', 'desc');
			$body['usuarios'] = $this -> model_usuarios -> obtenerUsuariosByLimitAndOrder('5', 'desc');
			$mensaje = 'Usuario actualizado correctamente.';
			$body['mensaje'] = $mensaje;
			// $this->load->view('administrador/dashboard', $body);
			redirect(base_url()."index.php/administrador/escritorio");

        } else {
			$usuarios = $this -> model_usuarios -> obtenerUsuarios();
			$body['usuariosCantidad'] = count($usuarios);
			$clientes = $this -> model_clientes -> obtenerClientes();
			$body['clientesCantidad'] = count($clientes);
			$body['clientes'] = $this -> model_clientes -> obtenerClientesByLimitAndOrder('5', 'desc');
			$body['usuarios'] = $this -> model_usuarios -> obtenerUsuariosByLimitAndOrder('5', 'desc');
			$body['mensaje'] = 'Ocurrio un error al guardar el usuario.';
			$this->load->view('administrador/dashboard', $body);
        }
    } else {
		$this->form_validation->set_message('required','El campo %s es obligatorio');
		$this->form_validation->set_message('min_length[3]','El campo %s debe tener mas de 3 caracteres');
		$this->form_validation->set_message('min_length[6]','El campo %s debe tener mas de 6 caracteres');
		$this->form_validation->set_message('valid_email','El campo %s debe ser un email correcto');
		$usuarios = $this -> model_usuarios -> obtenerUsuarios();
		$body['usuariosCantidad'] = count($usuarios);
		$clientes = $this -> model_clientes -> obtenerClientes();
		$body['clientesCantidad'] = count($clientes);
		$body['clientes'] = $this -> model_clientes -> obtenerClientesByLimitAndOrder('5', 'desc');
		$body['usuarios'] = $this -> model_usuarios -> obtenerUsuariosByLimitAndOrder('5', 'desc');
		$body['mensaje'] = 'Se deben llenar los campos requeridos.';
		$this->load->view('administrador/dashboard', $body);
	}
	}

	function activarUsuario($idUsuario)
	{
		validarSesion();
		$usuarioData = array('status' => 'activo');
        $result = $this -> model_usuarios -> actualizarUsuario($idUsuario, $usuarioData);
        if ($result != false) {
			// redirect(base_url()."index.php/administrador/escritorio");
			$mensaje = 'Usuario activado correctamente.';
			echo json_encode(
				array('resultado' => '1', 'mensaje' => $mensaje)
			);
        } else {
			$mensaje = 'Ocurrio un error al activar el usuario.';
			echo json_encode(
				array('resultado' => '0', 'mensaje' => $mensaje)
			);
        }
	}

	function desactivarUsuario($idUsuario)
	{
		validarSesion();
		$usuarioData = array('status' => 'desactivado');
        $result = $this -> model_usuarios -> actualizarUsuario($idUsuario, $usuarioData);
		if ($result != false) {
			// redirect(base_url()."index.php/administrador/escritorio");
			$mensaje = 'Usuario desactivado correctamente.';
			echo json_encode(
				array('resultado' => '1', 'mensaje' => $mensaje)
			);
        } else {
			$mensaje = 'Ocurrio un error al desactivar el usuario.';
			echo json_encode(
				array('resultado' => '0', 'mensaje' => $mensaje)
			);
        }
	}

}
