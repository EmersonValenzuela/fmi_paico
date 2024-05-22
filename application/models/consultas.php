<?php

class Consultas extends CI_Model
{
	// Constructor del modelo Consultas
	function __construct()
	{
		parent::__construct();
	}

	// Función para encontrar un usuario por su nombre de usuario y contraseña
	function findIdUser($user, $pass)
	{
		$sql = "SELECT u.*, r.rol
				FROM users u
				INNER JOIN rol r ON u.idRol = r.id
				WHERE u.username = ? AND u.pass = ?";
		$query = $this->db->query($sql, array($user, $pass));
		return $query->row();
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////

	// Función para verificar si un usuario existe y si la contraseña es correcta
	function isUser($user, $pass)
	{
		$sql = "SELECT * FROM users WHERE username = ?";
		$query = $this->db->query($sql, array($user));
		if ($query->num_rows() > 0) {
			$sql = "SELECT * FROM users WHERE username = ? AND pass = ?";
			$query = $this->db->query($sql, array($user, $pass));
			if ($query->num_rows() > 0) {
				return '1';
			} else {
				return 'Contraseña incorrecta';
			}
		} else {
			return 'Usuario no encontrado';
		}
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////

	// Función para obtener información de los usuarios
	public function getUsers($id = 0)
	{
		if ($id != 0) {
			$sql = "SELECT u.*, r.rol
					FROM users u
					INNER JOIN rol r ON u.idRol = r.id
					WHERE u.id = ?
					ORDER BY u.name ASC";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		$sql = "SELECT u.*, r.rol
				FROM users u
				INNER JOIN rol r ON u.idRol = r.id
				ORDER BY u.name ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	// Función para verificar si un nombre de usuario ya existe
	function existeUsername($user)
	{
		$sql = "SELECT id FROM users WHERE username = ?";
		$query = $this->db->query($sql, array($user));
		if ($query->num_rows() == 0) {
			return false;
		}
		return true;
	}


	// Función para seleccionar por id
	function selectByid($id, $table)
	{
		$this->db->select();
		$this->db->from($table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		$row = $query->result();
		if (!empty($row)) {
			return $row[0];
		} else {
			return false;
		}
	}

	// Función para insertar datos en una tabla
	public function insert($data, $table)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
}
