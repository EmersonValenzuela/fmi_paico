<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
	// Constructor del controlador Site
	public function __construct()
	{
		parent::__construct();
	}

	// Método por defecto del controlador
	public function index()
	{
		// Obtener datos de la sesión del usuario
		$idUser = $this->session->userdata('idUser');
		$rol = $this->session->userdata('rol');
		$user = $this->Consultas->getUsers($idUser);

		 // Si el rol del usuario es 4 o 5, redirigir a la página de cotizaciones
		if ($rol == "4" || $rol == "5") {
			header('Location:' . base_url() . 'cotizaciones');
		}
	}

	// Método para cerrar sesión
	public function logout()
	{
		// Destruir la sesión y redirigir a la página principal
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}
