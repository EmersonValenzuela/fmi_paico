<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

		public function __construct()
		{
		  parent::__construct();
	  
		}
		public function index()
		{
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="";
			$dataHeader['titulo']="Nivel Basico";
			$consultasWitget=$this->consultas->consultasIniciales();
			$data=$consultasWitget;
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/index',$data);
						
		}


}
