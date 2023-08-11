<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bteachers extends CI_Controller {

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
			$dataHeader['titulo']="Profesores";
			$data['teachers']=$this->consultas->getTeachers();
 			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/teachers',$data);
						
		}
		public function addTeacher()
		{
			$config['upload_path'] =  'assets/img/teachers/';
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
			
			$data = array(
				'name' => $this->input->post('name'),
				'profession' => $this->input->post('profession'),
				'designation' => $this->input->post('designation'),
				'concept' => $this->input->post('concept'),
				'foto' => $image1
			);

			$data = $this->security->xss_clean($data);

            if($this->consultas->insert($data, 'teachers')){
				
				echo "<script>
				alert('Guardado Correctamente');
				location.href = 'http://localhost/fmi/bteachers';
				  </script>";

            }
						
		}

		public function profile()
		{
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$idTeacher = $this->input->post('id');
			$dataHeader['usuario']=$user;
			$data['idteacher'] = $idTeacher;
			$data['msj'] ="";
			$dataHeader['titulo']="Profesores";
			$teachers=$this->consultas->getTeachers($idTeacher);
			$data['teacher'] = $teachers;
			$educations=$this->consultas->getEducation($idTeacher);
			$data['educations'] = $educations;
			$experiences=$this->consultas->getExperience($idTeacher);
			$data['experiences'] = $experiences;
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/perfil',$data);
						
		}

		public function editTeacher()
		{
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$idTeacher = $this->input->post('id');
			$dataHeader['usuario']=$user;
			$data['idteacher'] = $idTeacher;
			$data['msj'] ="";
			$dataHeader['titulo']="Profesores";
			$teachers=$this->consultas->getTeachers($idTeacher);
			$data['teacher'] = $teachers;
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/editteacher',$data);						
		}
		public function modteacher()
		{
			$image1="";
			$foto = $this->input->post('foto');
			$imagen = $_FILES['file_name']['name'];
			if($imagen == ""){
				$image1 = $foto;
			}else{

				$config['upload_path'] =  'assets/img/teachers/';
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

			$idTeacher = $this->input->post('idteacher');
			$name = $this->input->post('name');
			$profession = $this->input->post('profession');
			$designation = $this->input->post('designation');
			$concept = $this->input->post('concept');
			$datos = array(
			  // 'codigo' => $codigo,
			  'name' => $name,
			  'profession' => $profession,
			  'designation' => $designation,
			  'concept' => $concept,
			  'foto' => $image1
			);
			$where=array(
			  'id'=>$idTeacher
			);
		
			$this->insertar->setTeacher($datos,$where);
			$dataHeader['emails']=$this->consultas->getNEmails();
			$data['idteacher'] = $idTeacher;
			$data['msj'] ="";
			$dataHeader['titulo']="Profesores";
			$teachers=$this->consultas->getTeachers($idTeacher);
			$data['teacher'] = $teachers;
			$educations=$this->consultas->getEducation($idTeacher);
			$data['educations'] = $educations;
			$experiences=$this->consultas->getExperience($idTeacher);
			$data['experiences'] = $experiences;
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/perfil',$data);
		}
		public function addeducation()
		{
			
			$data = array(
				'title' => $this->input->post('title'),
				'school' => $this->input->post('school'),
				'time' => $this->input->post('time'),
				'id_teacher' => $this->input->post('idteacher'),
			);

			$data = $this->security->xss_clean($data);

            if($this->consultas->insert($data, 'dc_educación')){
				$dataHeader['emails']=$this->consultas->getNEmails();
				$idTeacher = $this->input->post('idteacher');
				$data['idteacher'] = $idTeacher;
				$data['msj'] ="";
				$dataHeader['titulo']="Profesores";
				$teachers=$this->consultas->getTeachers($idTeacher);
				$data['teacher'] = $teachers;
				$educations=$this->consultas->getEducation($idTeacher);
				$data['educations'] = $educations;
				$experiences=$this->consultas->getExperience($idTeacher);
				$data['experiences'] = $experiences;
				$this->load->view('admin/sidebar',$dataHeader);
				$data['error'] ="";
				$this->load->view('admin/perfil',$data);


            }
						
		}
		public function addexperience()
		{
			
			$data = array(
				'asignation' => $this->input->post('asignation'),
				'place' => $this->input->post('place'),
				'time' => $this->input->post('time'),
				'id_teacher' => $this->input->post('idteacher'),
			);

			$data = $this->security->xss_clean($data);

            if($this->consultas->insert($data, 'dc_experience')){
				$dataHeader['emails']=$this->consultas->getNEmails();
				$idTeacher = $this->input->post('idteacher');
				$data['idteacher'] = $idTeacher;
				$data['msj'] ="";
				$dataHeader['titulo']="Profesores";
				$teachers=$this->consultas->getTeachers($idTeacher);
				$data['teacher'] = $teachers;
				$educations=$this->consultas->getEducation($idTeacher);
				$data['educations'] = $educations;
				$experiences=$this->consultas->getExperience($idTeacher);
				$data['experiences'] = $experiences;
				$this->load->view('admin/sidebar',$dataHeader);
				$data['error'] ="";
				$this->load->view('admin/perfil',$data);


            }
						
		}
		public function deleteTeacher()
		{
			$idBlog = $this->input->post('id');
			$this->delete->delTeacher($idBlog);
			$this->delete->delTeacherEdu($idBlog);
			$this->delete->delTeacherXp($idBlog);
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="";
			$dataHeader['titulo']="Profesores";
			$data['teachers']=$this->consultas->getTeachers();
 			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/teachers',$data);

		}
		public function deleteEducation()
		{
			$idEducation = $this->input->post('ided');
			$this->delete->delEducation($idEducation);
			
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idTeacher = $this->input->post('idteacher');
			$data['idteacher'] = $idTeacher;
			$data['msj'] ="";
			$dataHeader['titulo']="Profesores";
			$teachers=$this->consultas->getTeachers($idTeacher);
			$data['teacher'] = $teachers;
			$educations=$this->consultas->getEducation($idTeacher);
			$data['educations'] = $educations;
			$experiences=$this->consultas->getExperience($idTeacher);
			$data['experiences'] = $experiences;
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/perfil',$data);

		}
		public function deleteExperience()
		{
			$idExperience = $this->input->post('idex');
			$this->delete->delExperience($idExperience);
			
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idTeacher = $this->input->post('idteacher');
			$data['idteacher'] = $idTeacher;
			$data['msj'] ="";
			$dataHeader['titulo']="Profesores";
			$teachers=$this->consultas->getTeachers($idTeacher);
			$data['teacher'] = $teachers;
			$educations=$this->consultas->getEducation($idTeacher);
			$data['educations'] = $educations;
			$experiences=$this->consultas->getExperience($idTeacher);
			$data['experiences'] = $experiences;
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/perfil',$data);

		}




}
