<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Controller {

		public function __construct()
		{
		  parent::__construct();
	  
		}
		public function index()
		{
			$dataHeader['nombre_rol']=$this->session->userdata('nombre_rol');
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="";
			$data['comments']=$this->consultas->getComments();
			
			$dataHeader['titulo']="Nivel Basico";
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/comentarios',$data);
						
		}

		public function addComment()
		{
		$idUser = $this->session->userdata('idUser');
		$idblog = $this->input->post('idblog');
		if(!$idUser){
			echo "<script>
				alert('Usuario No Existente, Debe registrarse o logearse para poder comentar el Blog');
				location.href = 'http://localhost/fmi/login';
			</script>";
			
		}else{
		$datos = array(
			'iduser'=>$idUser,
			'idblog'=>$idblog,
			'comentario'=>$this->input->post('comment')
		);
		$this->insertar->newComment($datos);
		$rol= $this->session->userdata('rol');
		$user=$this->consultas->getUsers($idUser);
		$dataHeader['usuario']=$user;
		$data['msj'] ="";
		$dataHeader['cursos']=$this->consultas->getCatp();
		$dataHeader['curss']=$this->consultas->getCats();
		$dataHeader['curstt']=$this->consultas->getCatt();
		$blogs=$this->consultas->getBlogs($idblog);
		$data['blog']=$blogs;
		$coms= $this->consultas->getComments($idblog);
		$data['coms'] = $coms;
		
		$sids= $this->consultas->getSidebar();
		$data['sids'] = $sids;
		
		
		$dataHeader['titulo']="Detalle Blog";
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

	public function delet()
	{
		$id = $this->input->post('id');
		$this->delete->delComment($id);
		echo "<script>
		alert('Eliminado Correctamente');
		location.href = 'http://localhost/fmi/comentarios';
		  </script>";
					
	}


}
