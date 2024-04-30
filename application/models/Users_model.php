<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // Método para obtener todos los usuarios de la base de datos junto con su rol
    public function get_users()
    {
        // Seleccionar todos los campos de la tabla 'users' y la columna 'nombre' de la tabla 'rol'
        // Unir las tablas 'users' y 'rol' utilizando la condición 'id = idRol'
        // Ejecutar la consulta y devolver los resultados
        $this->db->select('u.*, r.rol');
        $this->db->from('users u');
        $this->db->join('rol r', 'r.id = u.idRol');
        $query = $this->db->get();
        return $query->result();
    }

    // Método para insertar un nuevo usuario en la base de datos
    public function insert($data, $table)
    {
        // Insertar los datos proporcionados en la tabla especificada
        // y devolver el ID del usuario insertado
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    // Método para actualizar un usuario existente en la base de datos
    public function update($id, $data, $table)
    {
        // Especificar el ID del usuario a actualizar
        // Actualizar los datos en la tabla 'users' utilizando los nuevos datos proporcionados
        // Devolver true si al menos una fila fue afectada
        $this->db->where('id', $id); // Especificar el ID del usuario a actualizar
        $this->db->update($table, $data); // Actualizar los datos en la tabla 'users'
        return $this->db->affected_rows() > 0; // Devolver true si al menos una fila fue afectada
    }

    public function delete_user($id)
    {
        // Especificar la condición para eliminar el usuario con el ID proporcionado
        $this->db->where('id', $id);

        // Ejecutar la instrucción SQL DELETE para eliminar el usuario
        $this->db->delete('users');

        // Verificar si al menos una fila fue afectada por la eliminación
        return $this->db->affected_rows() > 0;
    }

    // Método para obtener datos de una tabla en general
    public function get_data($table)
    {
        // Seleccionar todos los campos de la tabla especificada
        // Ejecutar la consulta y devolver los resultados
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }
}
