<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this-> load->library('PHPMailer_lib'); // Cargar libreria de mailer
		$this->load->model('model_clientes'); // Cargar modelo de clientes
	}

	public function index()
	{
		$this->load->view('Inicio');
	}
	
	public function registroCliente() {
        $this -> form_validation -> set_rules('nombre', '', "required|min_length[3]");
        $this -> form_validation -> set_rules('telefonoR', '', array("required", "numeric"));
        $this -> form_validation -> set_rules('email', '', array("required", "valid_email"));
        
    if($this -> form_validation -> run() == TRUE) {
        $estado = ($this -> input -> post('estado')) ? $this -> input -> post('estado') : ' ';
        $empresa = ($this -> input -> post('empresa')) ? $this -> input -> post('empresa') : ' ';
        $mensajeFormulario = ($this -> input -> post('mensaje')) ? $this -> input -> post('mensaje') : ' ';
	    $telefono = $this -> input -> post('telefonoR');
		$clienteData = array(
            'nombre' => $this -> input -> post('nombre'),
	        'telefono' => $this -> input -> post('telefonoR'),
	        'correo' => $this -> input -> post('email'),
            'estado' => $estado,
            'empresa' => $empresa,
            'mensaje' => $mensajeFormulario,
            'status' => 'activo'
        );
        $nombre = $this -> input -> post('nombre');
        $correo = $this -> input -> post('email');
        $id_cliente = $this -> model_clientes -> guardarCliente($clienteData);

       if ($id_cliente != false) {
          $this->enviarCorreo($nombre,$correo, false, '', '', '', ''); // ENVIAR CORREO AL REGISTRARSE
          $this->enviarCorreo($nombre,$correo, true, $estado, $empresa, $mensajeFormulario, $telefono); // ENVIAR CORREO AL REGISTRARSE
          //$this->enviarCorreo($nombre,$correo, false, ''); // ENVIAR CORREO AL REGISTRARSE
          //$this->enviarCorreo($nombre,$correo, true, 'yon2788@gmail.com'); // ENVIAR CORREO AL REGISTRARSE
          //redirect(base_url());
        } else {
           $mensaje = 'Ocurrio un error al registrarse.';
           $data['mensaje'] = $mensaje;
           $this->load->view('Inicio', $data);
        }
    } else {
            $mensaje = 'Los datos ingresados en los campos obligatorios no son correctos.';
            $this->form_validation->set_message('required','El campo %s es obligatorio');
            $this->form_validation->set_message('numeric','El campo %s debe estar compuesto solo por numeros');
            $this->form_validation->set_message('min_length[3]','El campo %s debe tener mas de 3 caracteres');
            $this->form_validation->set_message('valid_email','El campo %s debe ser un email correcto');
            $data['mensaje'] = $mensaje;
            $this->load->view('Inicio', $data);
        }
    }

	public function enviarCorreo($usuario,$correo, $finCorreo, $estado, $empresa, $mensajeFormulario, $telefono){
        try {
            $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
                //$mail->IsSMTP(); // enable SMTP
    
                //$mail->SMTPDebug = 4; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true; // authentication enabled
                //$mail->SMTPSecure = 'tls'; //ssl for 465 secure transfer enabled REQUIRED for Gmail
                //$mail->SMTPSecure = 'tls';
		        //$mail->Host = "smtp.gmail.com"; // GMail
                //$mail->Port = 587; // 465 or 587 or 25
                //$mail->IsHTML(true);
                //$mail->Username = "web.gazelle.2020@gmail.com";
                //$mail->Password = "Gzle20web.%";
                //$mail->SetFrom("web.gazelle.2020@gmail.com" , "Michelle de Gazelle Media");
                $mail->SMTPSecure = 'ssl';
		        $mail->Host = "smtp.gmail.com"; // GMail
                $mail->Port = 587; // 465 or 587 or 25
                $mail->IsHTML(true);
                $mail->Username = "contacto@gazellemedia.mx";
                $mail->Password = "acT2#4Q20";
                $mail->SetFrom("contacto@gazellemedia.mx" , "Michelle de Gazelle Media");
                //$mail->Subject = "Gracias por registrarte";
                //Esta propiedad permite acentos
                $mail->CharSet = 'UTF-8';
                //Esta propiedad permite acentos
                //$mail->Body = "
                //<meta charset='UTF-8'>
                //<h3>Buen día y bienvenido ".$usuario."</h3>
                //<p>Hemos recibido tu petición del correo: ".$correo.", nos contactaremos contigo a la brevedad posible.</p>
                //<br><br>
                //Gracias por registrarte</p>";
                // if ($finCorreo) {
                //     $mail->AddAddress($dest);
                // } else {
                //     $mail->AddAddress($correo);
                // }
                //$mail->AddAddress($correo);
		//$mail->AddAddress('izepeda@gazellemedia.mx');
                //$mail->addBCC('yon2788@gmail.com');

		 if ($finCorreo) {
                    $mail->Subject = "Registro de cliente";
                    $datosBlanco = "campo no escrito";
                    $empresaCorreo = $datosBlanco;
                    $estadoCorreo = $datosBlanco;
                    $mensajeCorreo = $datosBlanco;
                    $telefonoCorreo = $datosBlanco;
                    if ($empresa != '') { $empresaCorreo = $empresa; };
                    if ($estado != '') { $estadoCorreo = $estado; };
                    if ($mensajeFormulario != ' ') { $mensajeCorreo = $mensajeFormulario; };
                    $mail->Body = "
                    <meta charset='UTF-8'>
                    <h3>Buen día ".$usuario." se a registrado con los siguinetes datos.</h3>
                    <p>Correo: ".$correo."</p>
                    <br>
                    Teléfono: ".$telefono."
                    <br>
                    <br><br>
                    Empresa: ".$empresaCorreo."
                    <br>
                    Estado: ".$estadoCorreo."
                    <br>
                    Mensaje escrito: ".$mensajeCorreo."
                    <br><br>
                    Gracias por registrarte</p>";
                    //$mail->AddAddress('floid15simpson@gmail.com');
                    $mail->addBCC('izepeda@gazellemedia.mx');
                    $mail->AddAddress('contacto@gazellemedia.mx');
                    $mail->addBCC('yon2788@gmail.com');
                } else {
                    $mail->Subject = "Gracias por registrarte";
                    $mail->Body = "
                    <meta charset='UTF-8'>
                    <h3>Buen día y bienvenido ".$usuario."</h3>
                    <p>Hemos recibido tu petición del correo: ".$correo.", nos contactaremos contigo a la brevedad posible.</p>
                    <br><br>
                    Gracias por registrarte</p>";
                    $mail->AddAddress($correo);
                }

                if($mail->Send()) {
                    // echo "enviado";
                    // if ($finCorreo) {
                         $mensaje = 'Hemos recibido su petición y le enviamos un correo.';
                         $data['mensaje'] = $mensaje;
                        $data['redirect'] = 'redi';
                         $this->load->view('Gracias', $data);
			//redirect(base_url());
                    // }
                } else {
                    // echo "no enviado";
                    // if ($finCorreo) {
                        $mensaje = 'Hemos recibido su petición, pero ocurrio un error al enviar el correo.';
                        $data['mensaje'] = $mensaje;
                        $data['redirect'] = 'redi';
                        $this->load->view('Gracias', $data);
                    // }
                }
    
        }
                catch (PDOException $e) {
                    // if ($finCorreo) {
                        $mensaje = 'Hemos recibido su petición, pero ocurrio un error al enviar el correo.';
                        $data['mensaje'] = $mensaje;
                        $data['redirect'] = 'redi';
                        $this->load->view('Gracias', $data);
                    // }
                }
            }
	
}
