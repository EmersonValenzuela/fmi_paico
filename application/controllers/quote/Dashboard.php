<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Drywall_model'); // Cargar el modelo 'Drywall_model' para acceder a los datos relacionados con Drywall
    }

    public function index()
    {
        // Cargar los archivos CSS y JavaScript necesarios para la página del panel de control
        $data['links'] = array(
            '<link href="' . base_url() . 'assets/libs/datatables/datatables.css" rel="stylesheet">',
        );
        $data['scripts'] = array(
            '<script src="' . base_url() . 'assets/libs/datatables/datatables.js"></script>',
            '<script src="' . base_url() . 'assets/js/pages/ds_drywall.js"></script>',
        );

        // Cargar la vista del panel de control utilizando una plantilla
        $this->template->load('quote/template', 'quote/pages/dashboard', $data);
    }

    public function data_quote()
    {
        // Obtener los datos de cotizaciones desde la base de datos utilizando el método 'get_data' del modelo 'Drywall_model'
        $result = $this->Drywall_model->get_data('tbl_drywall');

        // Verificar si se obtuvieron resultados
        if ($result) {
            foreach ($result as $row) {
                // Si se obtuvieron resultados, formatear cada fila de datos y agregarla al arreglo 'data'
                $array['data'][] = $row;
            }
        } else {
            // Si no se obtuvieron resultados, establecer el arreglo 'data' como un arreglo vacío
            $array['data'] = array();
        }

        // Convertir el arreglo a formato JSON y enviar la respuesta al cliente
        echo json_encode($array);
    }
}
