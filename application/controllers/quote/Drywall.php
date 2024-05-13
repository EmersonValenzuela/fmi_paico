<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Drywall extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Drywall_model');
    }

    public function formDrywall()
    {
        $data['links'] = array(
            '<link href="' . base_url() . 'assets/css/pages/input.css" rel="stylesheet">',
            '<link href="' . base_url() . 'assets/libs/ladda/ladda.css" rel="stylesheet">',
            '<link href="' . base_url() . 'assets/libs/toastr/toastr.css" rel="stylesheet">',
        );

        $data['scripts'] = array(
            '<script src="' . base_url() . 'assets/js/pages/drywall.js"></script>',
            '<script src="' . base_url() . 'assets/libs/spin/spin.js"></script>',
            '<script src="' . base_url() . 'assets/libs/toastr/toastr.js"></script>',
            '<script src="' . base_url() . 'assets/libs/ladda/ladda.js"></script>',
        );
        $this->template->load('quote/template', 'quote/pages/formDrywall', $data);
    }

    public function upDrywall()
    {
        $current_date = date(DATE_W3C);
        $array_row = array(
            'line_meters_drw' => $this->input->post('meters'),
            'iron_drw' => $this->input->post('griddle_prc'),
            'rails_drw' => $this->input->post('rails_prc'),
            'studs_drw' => $this->input->post('studs_prc'),
            'tin_screw_price_drw' => $this->input->post('tin_screw_prc'),
            'drywall_screw_price' => $this->input->post('drw_screw_prc'),
            'amount_putty_bucket_drw' => $this->input->post('amount_putty_bucket'),
            'putty_price_bucket_drw' => $this->input->post('putty_prc_bucket'),
            'putty_price_box_drw' => $this->input->post('putty_price_box'),
            'amount_putty_box_drw' => $this->input->post('amount_putty_box'),
            'equine_price_drw' => $this->input->post('equine_prc'),
            'equine_quantity_drw' => $this->input->post('equine_quantity'),
            'adhesive_price_drw' => $this->input->post('adhesive_prc'),
            'amount_adhesive_drw' => $this->input->post('amount_adhesive'),
            'square_meter_drw' => $this->input->post('square_meter'),
            'date_drw' => $current_date,
            'date_ex_drw' => date("Y-m-d/TH:i:sP", strtotime($current_date . '+ 15 days')),
            'name_drw' =>  $this->input->post('name_user'),
            'email_drw' => $this->input->post('email_user'),
            'number_drw' => $this->input->post('num_user')
        );

        $array_row = $this->security->xss_clean($array_row);

        $r = $this->Drywall_model->insert($array_row, 'tbl_drywall');
        if ($r) {
            $array_cos = array(
                'drw_id' => $r,
                'cos_griddle' => $this->input->post('cos_griddle'),
                'cos_riel' => $this->input->post('cos_riel'),
                'cos_studs' => $this->input->post('cos_studs'),
                'cos_tin_screw' => $this->input->post('cos_tin_screw'),
                'cos_tin_drw' => $this->input->post('cos_tin_drw'),
                'cos_putty_bucket' => $this->input->post('cos_putty_bucket'),
                'cos_putty_box' => $this->input->post('cos_putty_box'),
                'cos_equine' => $this->input->post('cos_equine'),
                'cos_adhesive' => $this->input->post('cos_adhesive'),
                'material_cos' => $this->input->post('material_cos'),
                'job_cos' => $this->input->post('job_cos'),
                'total' => $this->input->post('total'),
                'a_meters' => $this->input->post('a_meters'),
                'a_griddle' => $this->input->post('a_griddle'),
                'a_riel' => $this->input->post('a_riel'),
                'a_studs' => $this->input->post('a_studs'),
                'a_tin_screw' => $this->input->post('a_tin_screw'),
                'a_tin_drw' => $this->input->post('a_tin_drw')
            );
            $array_row = $this->security->xss_clean($array_cos);
            $this->Drywall_model->insert($array_row, 'tbl_cos_drywall');
            unset($array_cos);
            $jsonData['status'] = 200;
            $jsonData['rsp'] =  $r;
        }

        header('Content-type: application/json; charset=utf-8');
        echo json_encode($jsonData);
    }

    // Método para ver la cotización de drywall en formato PDF
    public function viewDrywall($id)
    {
        // Define los archivos CSS y JavaScript necesarios para la vista del PDF
        $data['links'] = array(
            '<link href="' . base_url() . 'assets/css/pages/drywall.css" rel="stylesheet">',
        );

        $data['scripts'] = array(
            '<script src="' . base_url() . 'assets/js/pages/html2pdf.bundle.min.js"></script>',
        );
        // Obtiene los datos de la cotización de drywall
        $r = $this->Drywall_model->getDrywall(array('id_drw' => $id));
        $data['row'] = $r;

        // Carga la vista del PDF de drywall
        $this->load->view('quote/pages/pdf_drywall', $data);
    }

    // Método para ver la cotización de drywall para el cliente en formato PDF
    public function viewClientDrywall($id)
    {
        // Define los archivos CSS y JavaScript necesarios para la vista del PDF
        $data['links'] = array(
            '<link href="' . base_url() . 'assets/css/pages/drywall.css" rel="stylesheet">',
        );
        $data['scripts'] = array(
            '<script src="' . base_url() . 'assets/js/pages/html2pdf.bundle.min.js"></script>',
        );
        // Obtiene los datos de la cotización de drywall
        $r = $this->Drywall_model->getDrywall(array('id_drw' => $id));
        $data['row'] = $r;
        // Carga la vista del PDF de drywall para el cliente
        $this->load->view('quote/pages/pdf_client', $data);
    }

    // Método para enviar el PDF de la cotización de drywall por correo electrónico
    public function sendMailClient()
    {
        // Obtiene el ID de la cotización y el correo electrónico del cliente
        $id = $this->input->post('id_drw');
        $email = $this->input->post('client_mail');

        // Obtiene los datos de la cotización de drywall
        $r = $this->Drywall_model->getDrywall(array('id_drw' => $id));
        $data['row'] = $r;

        // Configura el envío de correo electrónico
        $this->load->library('email');
        $this->email->from('colegios@lagranjavilla.com', 'Area de Cotización'); // Define el remitente del correo electrónico
        $this->email->to($email); // Define el destinatario del correo electrónico
        $this->email->subject('Envio de Cotización'); // Define el asunto del correo electrónico
        $this->email->reply_to('colegios@lagranjavilla.com', 'No responder a este mensaje'); // Configura la dirección de correo "no responder"

        // Carga la vista del PDF de drywall y la asigna al cuerpo del correo electrónico
        $message =  $this->load->view('quote/pages/pdf_client', $data, true); // Carga la vista del PDF y la almacena en la variable $message
        $this->email->message($message); // Asigna el contenido del correo electrónico

        // Envía el correo electrónico y devuelve un mensaje de éxito o error
        if ($this->email->send()) { // Verifica si el correo electrónico se envió correctamente
        header('Content-type: application/json; charset=utf-8');
            echo json_encode('¡Correo electrónico enviado con éxito!'); // Devuelve un mensaje de éxito en formato JSON
        } else {
        header('Content-type: application/json; charset=utf-8');
            echo json_encode('Error al enviar el correo electrónico. Detalles del error: ' . $this->email->print_debugger()); // Devuelve un mensaje de error con detalles en formato JSON
        }
    }
}
