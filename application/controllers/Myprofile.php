<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myprofile extends CI_Controller {

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
			
			$dataHeader['titulo']="Mi Perfil";
			if ($idUser ==""){
				$dataHeader['estado']="1";
			}else{
				$dataHeader['estado']="2";
			}

			$data['user_data'] = $this->consultas->selectByid($idUser, 'users');

			
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('myprofile',$data);
			$dataFooter=array(
			  'scripts'=> ""
			);
			$this->load->view('sections/footer',$dataFooter);
			
		}
		public function modUser()
		{
			$config['upload_path'] =  'assets/img/user/';
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


		  $id = $this->session->userdata('idUser');
		  $name = $this->input->post('name');
		  $email = $this->input->post('email');
		  $phone = $this->input->post('phone');
		  $username = $this->input->post('usuario');
		  $pass = $this->input->post('pass');
		  $idRol = "2";
		  $datos = array(
			// 'codigo' => $codigo,
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'username' => $username,
			'pass' => $pass,
			'idRol' => $idRol,
			'photo' => $image1
		  );
		  $where=array(
			'id'=>$id
		  );
	  
		  $this->insertar->setUser($datos,$where);
		  echo "<script>
		  alert('Registro Exitoso');
		  location.href = 'http://localhost/fmi/myprofile';
		</script>";
	  
		}
		
		public function insertimage()
		{
			$idUser = $this->input->post('id');
			$this->delete->delUser($idUser);
			echo "<script>
			alert('Eliminado Correctamente');
			location.href = 'http://localhost/fmi/usuario';
		  	</script>";
						
		}



}
