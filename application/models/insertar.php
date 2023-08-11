<?php

class Insertar extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function insertarGral($tabla,$data)
	{
		$this->db->insert($tabla, $data);
		return $this->db->insert_id();
	}
	function updateGral($tabla,$data,$where)
	{
		$this->db->update($tabla, $data,$where);
		return $this->db->insert_id();
	}

	function newUser($data)
	{
		return $this->db->insert('users', $data);
	}
	function newBlog($data)
	{
		return $this->db->insert('blog', $data);
	}
	function setUser($data,$where)
	{
		return $this->db->update('users', $data,$where);
	}
	function setTeacher($data,$where)
	{
		return $this->db->update('teachers', $data,$where);
	}
	function setCourse($data,$where)
	{
		return $this->db->update('cursos', $data,$where);
	}
	function setBlog($data,$where)
	{
		return $this->db->update('blog', $data,$where);
	}
	function newComment($data)
	{
		return $this->db->insert('comments', $data);
	}
	function setEstado($data,$where)
	{
		return $this->db->update('emails', $data,$where);
	}
}
?>
