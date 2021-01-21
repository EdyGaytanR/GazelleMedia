<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('model_usuarios'); // Cargar modelo de usuarios
		$this->load->helper('usuario_helper'); // Cargar helper de usuario
	}

	public function index()
	{
		validarSesion();
		$body['nombreUsuario'] = obtenerNombre();
		$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
		$body['mensaje'] = '';
		$this->load->view('administrador/usuarios', $body);
	}
	
	public function registroUsuario() {
		validarSesion();
        $this -> form_validation -> set_rules('nombre', '', "required|min_length[3]|trim");
        $this -> form_validation -> set_rules('correo', '',array("required", "valid_email"));
        // $this -> form_validation -> set_rules('empresa', '', array("required"));
		$this -> form_validation -> set_rules('password', '', array("required", "min_length[6]"));
		
        $body['nombreUsuario'] = obtenerNombre();
    if($this -> form_validation -> run() == TRUE) {
		$usuarios = $this -> model_usuarios -> obtenerUsuarios();
		$existeCorreo = false;
		if ($usuarios) {
			foreach ($usuarios as $key => $value) {
				if ($this -> input -> post('correo') == $value->correo) {
					$existeCorreo = true;
				}
			}
			if ($existeCorreo) {
				$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
				$body['mensaje'] = 'El correo ya está siendo usado, ingrese un correo nuevo.';
				$this->load->view('administrador/usuarios', $body);
			} else {
			$empresa = ($this -> input -> post('empresa')) ? $this -> input -> post('empresa') : ' ';
			$usuarioData = array(
				'nombre' => $this -> input -> post('nombre'),
				'password' => $this -> input -> post('password'),
				'correo' => $this -> input -> post('correo'),
				'empresa' => $empresa,
				'status' => 'activo'
			);
			$result = $this -> model_usuarios -> guardarUsuario($usuarioData);
			if ($result != false) {
				$body['nombreUsuario'] = obtenerNombre();
				$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
				$body['mensaje'] = 'Usuario creado correctamente.';
				// $this->load->view('administrador/usuarios', $body);
				redirect(base_url()."index.php/administrador/usuarios");
			} else {
				$body['nombreUsuario'] = obtenerNombre();
				$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
				$body['mensaje'] = 'Ocurrio un error al guardar el usuario.';
				$this->load->view('administrador/usuarios', $body);
			}
		}
		} else {
			$body['nombreUsuario'] = obtenerNombre();
			$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
			$body['mensaje'] = 'Ocurrio un error al guardar el usuario.';
			$this->load->view('administrador/usuarios', $body);
		}
    } else {
		$this->form_validation->set_message('required','El campo %s es obligatorio');
		$this->form_validation->set_message('min_length[3]','El campo %s debe tener mas de 3 caracteres');
		$this->form_validation->set_message('min_length[6]','El campo %s debe tener mas de 6 caracteres');
		$this->form_validation->set_message('valid_email','El campo %s debe ser un email correcto');
		$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
		$body['mensaje'] = 'Se deben llenar los campos requeridos correctamente.'.' '.form_error('nombre').' '.form_error('correo').' '.form_error('password');
		$this->load->view('administrador/usuarios', $body);
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
			$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
			$mensaje = 'Usuario actualizado correctamente.';
			$body['mensaje'] = $mensaje;
			// $this->load->view('administrador/usuarios', $body);
			redirect(base_url()."index.php/administrador/usuarios");
        } else {
			$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
			$body['mensaje'] = 'Ocurrio un error al guardar el usuario.';
			$this->load->view('administrador/usuarios', $body);
        }
    } else {
		$this->form_validation->set_message('required','El campo %s es obligatorio');
		$this->form_validation->set_message('min_length[3]','El campo %s debe tener mas de 3 caracteres');
		$this->form_validation->set_message('min_length[6]','El campo %s debe tener mas de 6 caracteres');
		$this->form_validation->set_message('valid_email','El campo %s debe ser un email correcto');
		$body['usuarios'] = $this -> model_usuarios -> obtenerUsuarios();
		$body['mensaje'] = 'Se deben llenar los campos requeridos correctamente.'.' '.form_error('nombre').' '.form_error('correo').' '.form_error('password');
		$this->load->view('administrador/usuarios', $body);
	}
	}

	function activarUsuario($idUsuario)
	{
		validarSesion();
		$usuarioData = array('status' => 'activo');
        $result = $this -> model_usuarios -> actualizarUsuario($idUsuario, $usuarioData);
        if ($result != false) {
			// redirect(base_url()."index.php/administrador/usuarios");

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
			// redirect(base_url()."index.php/administrador/usuarios");

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
