<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FCourses extends CI_Controller {

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
			$dataHeader['titulo']="Curso";
			if ($idUser ==""){
				$dataHeader['estado']="1";
			}else{
				$dataHeader['estado']="2";
			}
			$idCurso = $_GET['id'];
			
			
			$data['curso']=$this->consultas->getCourses($idCurso);
			$data['blogs']=$this->consultas->getBlogsC($idCurso);
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('curso',$data);
			$dataFooter=array(
			  'scripts'=> ""
			);
			$this->load->view('sections/footer',$dataFooter);
						
		}


}


