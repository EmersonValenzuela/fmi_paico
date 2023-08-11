<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idUser = $this->session->userdata('idUser');
		$rol = $this->session->userdata('rol');
		$user = $this->consultas->getUsers($idUser);

		if (!$idUser) {
			$dataHeader['cursos'] = $this->consultas->getCatp();
			$dataHeader['curss'] = $this->consultas->getCats();
			$dataHeader['curstt'] = $this->consultas->getCatt();

			$data['msj'] = "";
			$dataHeader['usuario'] = "";
			$dataHeader['titulo'] = "Inicio";
			$dataHeader['estado'] = "1";
			$this->load->view('sections/header', $dataHeader);
			$data['error'] = "";
			$this->load->view('index', $data);
			$dataFooter = array(
				'scripts' => ""
			);
			$this->load->view('sections/footer', $dataFooter);
			return false;
		} elseif ($rol == "1" || $rol == "3") {

			$dataHeader['emails'] = $this->consultas->getNEmails();
			$data['msj'] = "";
			$dataHeader['estado'] = "2";
			$dataHeader['titulo'] = "Admin";
			$dataHeader['usuario'] = $user;
			$dataHeader['nombre_rol'] = $this->session->userdata('nombre_rol');

			$consultasWitget = $this->consultas->consultasIniciales();
			$data = $consultasWitget;
			$this->load->view('admin/sidebar', $dataHeader);
			$this->load->view('admin/index', $data);
			$dataFooter = array(
				'scripts' => ""
			);
		} elseif ($rol == "2") {

			$dataHeader['cursos'] = $this->consultas->getCatp();
			$dataHeader['curss'] = $this->consultas->getCats();
			$dataHeader['curstt'] = $this->consultas->getCatt();

			$data['msj'] = "";
			$dataHeader['estado'] = "2";
			$dataHeader['titulo'] = "Inicio";
			$dataHeader['usuario'] = $user;
			$this->load->view('sections/header', $dataHeader);
			$this->load->view('index', $data);
			$dataFooter = array(
				'scripts' => ""
			);
			$this->load->view('sections/footer', $dataFooter);
		} elseif ($rol == "4") {
			//view quotes session

			$data['links'] = array(

            );

            $data['scripts'] = array(


            );

			$this->template->load('quote/template', 'quote/pages/dashboard', $data);

		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}
