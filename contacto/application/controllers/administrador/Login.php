<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_login'); // Cargar modelo de login
		$this->load->helper('usuario_helper'); // Cargar helper de usuario
	}

	public function index()
	{
        unset($_SESSION["idUsuario"]);
        unset($_SESSION["correoUsuario"]);
        unset($_SESSION["nombreUsuario"]);
		$body['mensaje'] = '';
		$this->load->view('administrador/login', $body);
	}

	public function validarSesion() {
        $this -> form_validation -> set_rules('login-email', '', array("required"));
		$this -> form_validation -> set_rules('login-password', '', array("required"));
		
		if($this -> form_validation -> run() == TRUE) {
			$correoIngresado = $this -> input -> post('login-email');
			$usuarioData = $this -> model_login -> obtenerUsuarioByCorreo($correoIngresado);
			$validar = false;
			if ($usuarioData) {
				$idUsuario = '';
				$correoUsuario = '';
				$nombreUsuario = '';
				foreach ($usuarioData as $key => $value) {
					if ($correoIngresado == $value->correo && $this -> input -> post('login-password') == $value->password && $value->status == 'activo') {
						$validar = true;
						$idUsuario = $value->id;
						$correoUsuario = $value->correo;
						$nombreUsuario = $value->nombre;
					}
				}
				if ($validar) {
				// session_start();
				$this->session->set_userdata('idUsuario', $idUsuario);
				$this->session->set_userdata('nombreUsuario', $nombreUsuario);
				$this->session->set_userdata('correoUsuario', $correoUsuario);
				// $_SESSION["idUsuario"]= $idUsuario;
				// $_SESSION["correoUsuario"]= $correoUsuario;
				// $_SESSION["nombreUsuario"]= $nombreUsuario;
				redirect(base_url()."index.php/administrador/escritorio");
				} else {
					$body['mensaje'] = 'Las credenciales ingresadas son incorrectas.';
					$this->load->view('administrador/login', $body);
				}
			} else {
				$body['mensaje'] = 'Las credenciales ingresadas son incorrectas.';
				$this->load->view('administrador/login', $body);
			}
		} else {
			$body['mensaje'] = 'Los campos requeridos.';
			$this->load->view('administrador/login', $body);
		}
	}
	
}
