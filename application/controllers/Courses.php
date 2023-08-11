<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

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
			$dataHeader['titulo']="Cursos";
			
			$data['cursos']=$this->consultas->getCourses();
			
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/courses',$data);
						
		}

		public function addCourse()
		{
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['teachers']=$this->consultas->getTeachers();
			$data['categorias']=$this->consultas->getCategories();
			$data['msj'] ="";
			$dataHeader['titulo']="Agregar Curso";
			
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/addcourse',$data);
						
		}
		public function add()
		{
			$config['upload_path'] =  'assets/img/cursos/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';

            $image1 = date('dmYhis').'_'.rand(0,99999).".".pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);

            $config['file_name'] = $image1;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file_name')) {

            } 
            else
            {  
                $upload_data = $this->upload->data();
			}
			
			$this->load->helper("date");

			$nombre_curso = $this->input->post('nombre_curso');
			$descripcion_curso = $this->input->post('descripcion_curso');
			$beneficio_curso = $this->input->post('beneficio_curso');
			$silabus_curso = $this->input->post('silabus_curso');
			$id_profesor = $this->input->post('id_profesor');
			$categoria = $this->input->post('categoria');


			$data = array(
				'nombre_curso' => $nombre_curso,
				'descripcion_curso' => $descripcion_curso,
				'beneficio_curso' => $beneficio_curso,
				'silabus_curso' => $silabus_curso,
				'id_profesor' => $id_profesor,
				'img_curso' => $image1,
				'categoria' => $categoria
			);

			$data = $this->security->xss_clean($data);

            if($this->consultas->insert($data, 'cursos')){

				$nombre_curso = "";
				$descripcion_curso = "";
				$beneficio_curso = "";
				$silabus_curso = "";
				$id_profesor = "";
				$dataHeader['emails']=$this->consultas->getNEmails();
				$idUser = $this->session->userdata('idUser');
				$rol= $this->session->userdata('rol');
				$user=$this->consultas->getUsers($idUser);
				$dataHeader['usuario']=$user;
				$data['msj'] ="<div id='growls-tr'><div class='growl growl-notice growl-medium'>
				<div class='growl-close'>×</div>
			  <div class='growl-title'>CURSO REGISTRADO!</div>
			  <div class='growl-message'>Curso registrado de forma exitosa!</div>
			  </div></div>";

			  $data['teachers']=$this->consultas->getTeachers();
			  $data['categorias']=$this->consultas->getCategories();
			  
			  $dataHeader['titulo']="Agregar Curso";
			  
			  $this->load->view('admin/sidebar',$dataHeader);
			  $data['error'] ="";
			  $this->load->view('admin/addcourse',$data);

            }elseif ($nombre_curso == ""){
				echo "<script>
				alert('No se registro el curso');
				location.href = 'http://localhost/fmi/courses/addcourse';
				  </script>";
			}
						
		}
		public function curso()
		{
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$idCurso = $this->input->post('idcurso');
			$dataHeader['usuario']=$user;
			$data['idcurso'] = $idCurso;
			$data['msj'] ="";
			$dataHeader['titulo']="Curso";
			$cursos=$this->consultas->getCourses($idCurso);
			$data['curso'] = $cursos;
			$data['categorias']=$this->consultas->getCategories();
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/detail_course',$data);
						
		}
		public function editCourse()
		{
		
			$dataHeader['emails']=$this->consultas->getNEmails();	$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$idCurso = $this->input->post('id');
			$dataHeader['usuario']=$user;
			$data['idCurso'] = $idCurso;
			$data['msj'] ="";
			$dataHeader['titulo']="Editar Curso";
			$cursos=$this->consultas->getCourses($idCurso);
			$data['teachers']=$this->consultas->getTeachers();
			$data['curso'] = $cursos;
			$data['categorias']=$this->consultas->getCategories();
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/editcourse',$data);						
		}
		public function edit()
		{
			$image1="";
			$foto = $this->input->post('foto');
			$imagen = $_FILES['file_name']['name'];
			if($imagen == ""){
				$image1 = $foto;
			}else{

				$config['upload_path'] =  'assets/img/cursos/';
				$config['allowed_types'] = 'jpg|png|jpeg|gif';

				$image1 = date('dmYhis').'_'.rand(0,99999).".".pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);

				$config['file_name'] = $image1;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('file_name')) {

				} 
				else
				{  
					$upload_data = $this->upload->data();
				}
			}				

			$idcurso = $this->input->post('idcurso');
			$categoria = $this->input->post('categoria');
			$nombre_curso = $this->input->post('nombre_curso');
			$descripcion_curso = $this->input->post('descripcion_curso');
			$beneficio_curso = $this->input->post('beneficio_curso');
			$silabus_curso = $this->input->post('silabus_curso');
			$id_profesor = $this->input->post('id_profesor');
			$datos = array(
			  // 'codigo' => $codigo,
			  'id_curso' => $idcurso,
			  'categoria' => $categoria,
			  'nombre_curso' => $nombre_curso,
			  'descripcion_curso' => $descripcion_curso,
			  'beneficio_curso' => $beneficio_curso,
			  'silabus_curso' => $silabus_curso,
			  'id_profesor' => $id_profesor,
			  'img_curso' => $image1
			);
			$where=array(
			  'id_curso'=>$idcurso
			);
		
			$this->insertar->setCourse($datos,$where);
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$idCurso = $this->input->post('idcurso');
			$dataHeader['usuario']=$user;
			$data['idCurso'] = $idCurso;
			$data['msj'] ="";
			$dataHeader['titulo']="Editar Curso";
			$cursos=$this->consultas->getCourses($idCurso);
			$data['teachers']=$this->consultas->getTeachers();
			$data['curso'] = $cursos;
			$data['categorias']=$this->consultas->getCategories();
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/editcourse',$data);	
		}

		public function delete()
		{
			$idCurso = $this->input->post('id');
			$this->delete->delCurso($idCurso);
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="";
			$dataHeader['titulo']="Cursos";
			
			$data['cursos']=$this->consultas->getCourses();
			
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/courses',$data);
						


		}



}


