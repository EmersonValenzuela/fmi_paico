<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

		public function __construct()
		{
		  parent::__construct();
	  
		}

		public function index()
		{
			$dataHeader['cursos']=$this->consultas->getCatp();
			$dataHeader['curss']=$this->consultas->getCats();
			$dataHeader['curstt']=$this->consultas->getCatt();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="";
			$dataHeader['titulo']="Registrar";
			$dataHeader['estado']="1";
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('register',$data);
			$dataFooter=array(
			  'scripts'=> "<script src='".base_url()."js/usuario.js'></script>"
			);
			$this->load->view('sections/footer',$dataFooter);
		}

		public function addUser()
		{
		  $username = $this->input->post('username');
		  if($this->consultas->existeUsername($username)){
			echo "<script>
				alert('Usuario Existente');
				location.href = 'http://localhost/fmi/register';
			</script>";
			
		  }else{
		  $datos = array(
			'name'=>$this->input->post('names'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'username'=>$username,
			'pass'=>$this->input->post('pass'),
			'idRol'=>$this->input->post('idrol')
		  );
		  $this->insertar->newUser($datos);
		  echo "<script>
			alert('Registro Exitoso');
			location.href = 'http://localhost/fmi/login';
		  </script>";
		}
		}
}
