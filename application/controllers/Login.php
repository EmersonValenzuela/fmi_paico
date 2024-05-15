<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$user = $this->input->post('user');

		$pass = $this->input->post('password');

		$isUser = $this->Consultas->isUser($user, $pass);

		if ($isUser == "1") {
			$idUser = $this->Consultas->findIdUser($user, $pass);
			$data = array( // Datos de la session
				'idUser' => $idUser->id, //Id del Usuario
				'rol' => $idUser->idRol,	//Rol del usuario
 				'nombre_rol' => $idUser->rol  //Nombre Rol
			);
			$this->session->set_userdata($data);
			redirect(base_url('site'));
		} else {

			$dataHeader['estado'] = "1";
			$dataHeader['usuario'] = "";
			$dataHeader['titulo'] = "Login";
			if ($user == "") {
				$data['error'] = "";
			} else {
				$data['error'] = $isUser;
			}

			$this->load->view('quote/pages/login', $data);
			$dataFooter = array(
				'scripts' => ""
			);
		}
	}
}
