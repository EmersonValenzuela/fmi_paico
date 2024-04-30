<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

		public function __construct()
		{
		  parent::__construct();
	  
		}
		public function index()
		{
			$dataHeader['nombre_rol']=$this->session->userdata('nombre_rol');

			$dataHeader['emails']=$this->consultas->getNEmails();
			$dataHeader['cursos']=$this->consultas->getCatp();
			$dataHeader['curss']=$this->consultas->getCats();
			$dataHeader['curstt']=$this->consultas->getCatt();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			
			$dataHeader['titulo']="";
			$data['usuarios']=$this->consultas->getUsers();
			$this->load->view('quote/sidebar',$dataHeader);
			$data['error'] ="";
			$this->load->view('admin/usuarios',$data);
						
		}

		public function add_user(){

			$name =  $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$name_user = $this->input->post('name_user');
			$password = $this->input->post('password');
			$rol = $this->input->post('rol');


			if($_FILES['img_profile']['name'] != ""){
				$config['upload_path'] = 'assets/img/img_profile';
				$config['allowed_types'] = 'jpg|png|jpeg|PNG|JPG|JPEG';

				$img_profile = date('dmYhis') . '_' . rand(0,9999) . "." . pathinfo($_FILES['img_profile']['name'], PATHINFO_EXTENSION);

				$config['file_name'] = $img_profile;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('img_profile')){
					$error = array('error'=> $this->upload->display_errors());

					var_dump($error) . "<br>";
				}
			}else {
				$img_profile = "";
			}

			$data = array(
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'username' => $name_user,
				'pass' => $password,
				'idRol' => $rol,
				'photo' => $img_profile
			);

			$result = $this->insertar->newUser($data);
			
			if ($result) {
				echo "Se agrego el nuevo usuario";
			}else {
				echo $result;
			}
			

		}
		




}
