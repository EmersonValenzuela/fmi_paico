<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
			$dataHeader['titulo']="Nivel Basico";
			$data['blogs']=$this->consultas->getBlogs();
			$data['cursos']=$this->consultas->getCourses();
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/blog',$data);
						
		}
		public function addBlog()
		{


			$config['upload_path'] =  'assets/img/blog/';
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

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file_name2')) {

            } 
            else
            {  
                $upload_data = $this->upload->data();

                $image2=$upload_data['file_name'];
            }
			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file_name3')) {

            } 
            else
            {  
                $upload_data = $this->upload->data();

                $image3=$upload_data['file_name'];
            }
            
			$this->load->helper("date");
			
            $data = array(
                'title'  => $this->input->post('name'),
                'description'  => $this->input->post('description'),
				'image'  => $image1,
				'image2'  => $image2,
				'image3'  => $image3,
				'curso'  => $this->input->post('curso')
            );

            $data = $this->security->xss_clean($data);

            if($this->consultas->insert($data, 'blog')){
				
				echo "<script>
				alert('Guardado Correctamente');
				location.href = 'http://localhost/fmi/blog';
				  </script>";

            }
		}
		public function delete()
		{
			$idBlog = $this->input->post('id');
			$this->delete->delBlog($idBlog);
			$this->delete->delComBlog($idBlog);
			
			echo "<script>
			alert('Eliminado Correctamente');
			location.href = 'http://localhost/fmi/blog';
		  	</script>";
		}
		public function editblog()
		{
			$dataHeader['nombre_rol']=$this->session->userdata('nombre_rol');

			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$idBlog = $this->input->post('id');
			$dataHeader['usuario']=$user;
			$data['idblog'] = $idBlog;
			$data['msj'] ="";
			$dataHeader['titulo']="Editar Curso";
			$blogs=$this->consultas->getBlogs($idBlog);
			$data['blog'] = $blogs;
			$data['cursos']=$this->consultas->getCourses();
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/editblog',$data);
						
		}
		
		public function edit()
		{


			

				$image1 = $this->input->post('foto1');
				$image2 = $this->input->post('foto2');
				$image3 = $this->input->post('foto3');

			

			$idBlog = $this->input->post('idblog');
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$curso = $this->input->post('curso');


			$datos = array(
			  // 'codigo' => $codigo,
			  'id' => $idBlog,
			  'title' => $title,
			  'description' => $description,
			  'image' => $image1,
			  'image2' => $image2,
			  'image3' => $image3,
			  'curso' => $curso

			);
			$where=array(
			  'id'=>$idBlog
			);
		
			$this->insertar->setBlog($datos,$where);
			$dataHeader['emails']=$this->consultas->getNEmails();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="";
			$dataHeader['titulo']="Blogs";
			$data['blogs']=$this->consultas->getBlogs();
			$data['cursos']=$this->consultas->getCourses();
			$this->load->view('admin/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/blog',$data);	
		}


}
