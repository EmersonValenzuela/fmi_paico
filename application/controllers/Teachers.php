<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teachers extends CI_Controller {

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
			$data['teachers']=$this->consultas->getTeachers();
			$data['msj'] ="";
			$dataHeader['titulo']="Profesores";
			if ($idUser ==""){
				$dataHeader['estado']="1";
			}else{
				$dataHeader['estado']="2";
			}
			
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('teachers',$data);
			$dataFooter=array(
			  'scripts'=> ""
			);
			$this->load->view('sections/footer',$dataFooter);
			
		}

		public function teacherDetails(){
			$dataHeader['cursos']=$this->consultas->getCatp();
			$dataHeader['curss']=$this->consultas->getCats();
			$dataHeader['curstt']=$this->consultas->getCatt();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$idteacher = $_GET['id'];
			$teachers=$this->consultas->getTeachers($idteacher);
			$data['teacher'] = $teachers;
			$educations=$this->consultas->getEducation($idteacher);
			$data['educations'] = $educations;
			$experiences=$this->consultas->getExperience($idteacher);
			$data['experiences'] = $experiences;
			$data['msj'] ="";
			$dataHeader['titulo']="Profesores";
			if ($idUser ==""){
				$dataHeader['estado']="1";
			}else{
				$dataHeader['estado']="2";
			}
			
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('detalle_teacher',$data);
			$dataFooter=array(
			  'scripts'=> ""
			);
			$this->load->view('sections/footer',$dataFooter);
			
			


		}


}
