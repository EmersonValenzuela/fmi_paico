<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
			$dataHeader['titulo']="Nosotros";
			if ($idUser ==""){
				$dataHeader['estado']="1";
			}else{
				$dataHeader['estado']="2";
			}
			
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('about',$data);
			$dataFooter=array(
			  'scripts'=> ""
			);
			$this->load->view('sections/footer',$dataFooter);
			
		}



}
