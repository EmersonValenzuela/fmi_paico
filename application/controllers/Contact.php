<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
			$dataHeader['titulo']="Contactanos";
			if ($idUser ==""){
				$dataHeader['estado']="1";
			}else{
				$dataHeader['estado']="2";
			}
			
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('contact',$data);
			$dataFooter=array(
			  'scripts'=> ""
			);
			$this->load->view('sections/footer',$dataFooter);
			
		}
		public function sendContact()
		{

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			$estado = "1";

			$datar = array(
                'name_email'  => $name,
                'email'  => $email,
				'cell_email'  => $phone,
				'subject_email'  => $subject,
				'coment_email'  => $message,
				'estado_email'  => $estado
			);
			$this->consultas->insert($datar, 'emails');

			$dataHeader['cursos']=$this->consultas->getCatp();
			$dataHeader['curss']=$this->consultas->getCats();
			$dataHeader['curstt']=$this->consultas->getCatt();
			$idUser = $this->session->userdata('idUser');
			$rol= $this->session->userdata('rol');
			$user=$this->consultas->getUsers($idUser);
			$dataHeader['usuario']=$user;
			$data['msj'] ="<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<div class='modal-box'>
		
		 
						<!-- Modal -->
						<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
							<div class='modal-dialog' role='document'>
								<div class='modal-content clearfix'>
									<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button>
									<div class='modal-body'>
										<div class='icon'>
											<i class='fas fa-check'></i>
										</div>
										<h3 class='title'>Correo Enviado!</h3>
										<p class='description'> En Breve Responderemos a su solicitud Sr(a): ". $name ."  </p>
										<button class='btn' data-dismiss='modal'>Cerrar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>";
			$dataHeader['titulo']="Contactanos";
			if ($idUser ==""){
				$dataHeader['estado']="1";
			}else{
				$dataHeader['estado']="2";
			}
			
			$this->load->view('sections/header',$dataHeader);
			$data['error'] ="";
			$this->load->view('contact',$data);
			$dataFooter=array(
			  'scripts'=> ""
			);
			$this->load->view('sections/footer',$dataFooter);
			
		}



}
