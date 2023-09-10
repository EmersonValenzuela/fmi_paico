<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Drywall_model');
    }
    public function index()
    {
        $data['links'] = array(
            '<link href="' . base_url() . 'assets/libs/datatables/datatables.css" rel="stylesheet">',
        );

        $data['scripts'] = array(
            '<script src="' . base_url() . 'assets/libs/datatables/datatables.js"></script>',
            '<script src="' . base_url() . 'assets/js/pages/ds_drywall.js"></script>',

        );

        $this->template->load('quote/template', 'quote/pages/dashboard', $data);
    }
    public function data_quote()
    {
        $result = $this->Drywall_model->get_data('tbl_drywall');
        if ($result) {
            foreach ($result as $row) {
                $array['data'][] = $row;
            }
        } else {
            $array['data'] = array();
        }
        echo json_encode($array);
    }
}
