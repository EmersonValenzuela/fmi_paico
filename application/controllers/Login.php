<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function __construct()
		{
		  parent::__construct();
	  
		}

		public function index()
		{
			
			$user = $this->input->post('email');
			
			$pass = $this->input->post('password');
		
			$isUser = $this->consultas->isUser($user, $pass);

			if($isUser=="1")
			{
				$idUser= $this->consultas->findIdUser($user, $pass);
				$data = array(
				  'idUser' => $idUser->id,
				  'rol' => $idUser->idRol,
				  'nombre_rol' => $idUser->rol
				);
				$this->session->set_userdata($data);
				redirect(base_url());
			}else{
				
				$dataHeader['estado']="1";
				$dataHeader['usuario']="";
				$dataHeader['titulo']="Login";
				if($user==""){
					$data['error'] ="";
				}else{
					$data['error'] =$isUser;
				}
				$dataHeader['cursos']=$this->consultas->getCatp();
				$dataHeader['curss']=$this->consultas->getCats();
				$dataHeader['curstt']=$this->consultas->getCatt();
				$this->load->view('sections/header',$dataHeader);

				$this->load->view('login',$data);
				$dataFooter=array(
				  'scripts'=> ""
				);
				$this->load->view('sections/footer',$dataFooter);
			}
		}



}
