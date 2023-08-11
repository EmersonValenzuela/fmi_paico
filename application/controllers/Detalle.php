<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalle extends CI_Controller {

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
			$idblog = $this->input->post('idblog');
			$blogs=$this->consultas->getBlogs($idblog);
			$data['blog']=$blogs;

			$coms= $this->consultas->getComments($idblog);
			$data['coms'] = $coms;
			
			$sids= $this->consultas->getSidebar();
			$data['sids'] = $sids;
			
			$data['ncomentarios'] = $this->consultas->getNComments();
			
			$dataHeader['titulo']="Blogs";
			if ($idUser ==""){
				$dataHeader['estado']="1";
			}else{
				$dataHeader['estado']="2";
			}
			
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('detalles_blog',$data);
			
			$dataFooter=array(
			  'scripts'=> ""
			);
			$this->load->view('sections/footer',$dataFooter);
			
		}



}
