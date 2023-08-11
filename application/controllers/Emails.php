<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emails extends CI_Controller {

		public function __construct()
		{
		  parent::__construct();
	  
		}
		public function index()
		{
			$dataHeader['nombre_rol']=$this->session->userdata('nombre_rol');
			
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="";
			$dataHeader['titulo']="Emails";
			$dataHeader['emails']=$this->consultas->getNEmails();
			$data['emails']=$this->consultas->getEmails();
			
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/emails',$data);
						
		}
		public function view()
		{
			$dataHeader['nombre_rol']=$this->session->userdata('nombre_rol');

			$idemail = $_GET['id'];
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="";
			$dataHeader['titulo']="Ver Email";

			$estado = "2";
			 
			$datos = array(
				// 'codigo' => $codigo,
				'id_email' => $idemail,
				'estado_email' => $estado,
			  );
			  $where=array(
				'id_email'=>$idemail
			  );
		  
			  $this->insertar->setEstado($datos,$where);
			  $dataHeader['emails']=$this->consultas->getNEmails();
			$data['email']=$this->consultas->getEmails($idemail);
			
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/viewe',$data);
						
		}

}


