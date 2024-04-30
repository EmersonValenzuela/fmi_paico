<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
    public function index()
    {
        $data['links'] = array(
            '<link href="' . base_url() . 'assets/libs/datatables/datatables.css" rel="stylesheet">',
        );

        $data['scripts'] = array(
            '<script src="' . base_url() . 'assets/libs/datatables/datatables.js"></script>',
            '<script src="' . base_url() . 'assets/js/pages/ds_users.js"></script>',
        );

        $this->template->load('quote/template', 'quote/pages/users', $data);
    }

    public function data_users()
    {
        $result = $this->Users_model->get_users();
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
