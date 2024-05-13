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

    // Método para agregar un nuevo usuario
    public function add_user()
    {
        // Obtiene los datos del formulario
        $name =  $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $name_user = $this->input->post('name_user');
        $password = $this->input->post('password');
        $rol = $this->input->post('rol');

        // Verifica si se ha seleccionado una imagen de perfil
        if ($_FILES['img_profile']['name'] != "") {
            // Configura la subida de la imagen de perfil
            $config['upload_path'] = 'assets/img/img_profile';
            $config['allowed_types'] = 'jpg|png|jpeg|PNG|JPG|JPEG';

            // Genera un nombre único para la imagen
            $img_profile = date('dmYhis') . '_' . rand(0, 9999) . "." . pathinfo($_FILES['img_profile']['name'], PATHINFO_EXTENSION);
            $config['file_name'] = $img_profile;

            $this->load->library('upload', $config);

            // Sube la imagen de perfil
            if (!$this->upload->do_upload('img_profile')) {
                // Si hay un error en la subida, muestra el error
                $error = array('error' => $this->upload->display_errors());
                var_dump($error) . "<br>";
            }
        } else {
            // Si no se selecciona una imagen de perfil, establece una cadena vacía
            $img_profile = "";
        }

        // Crea un array con los datos del usuario
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'username' => $name_user,
            'pass' => $password,
            'idRol' => $rol,
            'photo' => $img_profile
        );

        $response = []; // Inicializa la respuesta como un array vacío

        // Inserta los datos del usuario en la base de datos
        $result = $this->Users_model->insert($data, 'users');

        // Verifica si la inserción fue exitosa
        if ($result) {
            // Si es exitosa, establece el estado como verdadero y devuelve un mensaje de éxito
            $response['status'] = true;
            $response['message'] = "Se agregó el nuevo usuario";
        } else {
            // Si hay un error, establece el estado como falso y devuelve un mensaje de error
            $response['status'] = false;
            $response['message'] = "Error al agregar usuario";
        }

        // Devuelve la respuesta en formato JSON
        echo json_encode($response);
    }

    public function edit_user()
    {
        // Obtener los datos del formulario
        $id = $this->input->post('iduser'); // ID del usuario a editar
        $name =  $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $name_user = $this->input->post('name_user');
        $password = $this->input->post('password');
        $rol = $this->input->post('rol');

        // Verificar si se seleccionó una nueva imagen de perfil
        if ($_FILES['img_profile']['name'] != "") {
            $config['upload_path'] = 'assets/img/img_profile';
            $config['allowed_types'] = 'jpg|png|jpeg|PNG|JPG|JPEG';

            $img_profile = date('dmYhis') . '_' . rand(0, 9999) . "." . pathinfo($_FILES['img_profile']['name'], PATHINFO_EXTENSION);

            $config['file_name'] = $img_profile;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img_profile')) {
                $error = array('error' => $this->upload->display_errors());

                var_dump($error) . "<br>";
            }
        } else {
            $img_profile = "";
        }

        // Construir el array de datos a actualizar
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'username' => $name_user,
            'pass' => $password,
            'idRol' => $rol
        );

        // Agregar la imagen de perfil al array de datos si se seleccionó una nueva
        if ($img_profile !== "") {
            $data['photo'] = $img_profile;
        }

        // Actualizar el usuario en la base de datos
        $result = $this->Users_model->update($id, $data, 'users');

        // Preparar la respuesta JSON
        $response = array();

        if ($result) {
            $response['status'] = true;
            $response['message'] = "Usuario actualizado correctamente";
        } else {
            $response['status'] = false;
            $response['message'] = "Error al actualizar usuario";
        }

        // Devolver la respuesta JSON
        echo json_encode($response);
    }

    // Función para eliminar un usuario
    public function delete_user()
    {
        $user_id = $this->input->post('userId');
        $photo = $this->input->post('photo');

        // Llamar a la función delete_user del modelo y pasarle el ID del usuario a eliminar
        $deleted = $this->Users_model->delete_user($user_id);

        $imageUrl = "assets/img/img_profile/" . $photo;
        // Preparar la respuesta JSON
        if ($deleted) {
            // Si se eliminó el usuario de la base de datos, eliminar también la imagen
            if (!empty($imageUrl)) {
                $imagePath = FCPATH . $imageUrl; // Ruta completa de la imagen
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Eliminar la imagen del servidor
                }
            }
            $response['status'] = true;
        } else {
            $response['status'] = false;
        }

        echo json_encode($response);
    }


    public function data_users()
    {
        // Obtener los datos de los usuarios utilizando el método 'get_users' del modelo 'Users_model'
        $result = $this->Users_model->get_users();

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
