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
		$user = $this->Consultas->getUsers($idUser);

		if (!$idUser) {
			$dataHeader['cursos'] = $this->Consultas->getCatp();
			$dataHeader['curss'] = $this->Consultas->getCats();
			$dataHeader['curstt'] = $this->Consultas->getCatt();

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
		}  elseif ($rol == "4" || $rol == "5") {
			header('Location:' . base_url() . 'cotizaciones');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}
