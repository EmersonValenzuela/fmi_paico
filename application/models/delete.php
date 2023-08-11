<?php

class Delete extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function eliminarGral($tabla,$where)
	{
		return $this->db->delete($tabla, $where);
	}

	function delUser($id)
	{
		return $this->db->delete('users', array('id' => $id));
	}

	function delMovimientosFallidos($idVenta)
	{
		return $this->db->delete('tb_movimientosventas', array('idVenta' => $idVenta));
	}
	function delMovimientosCompraFail($idCompra)
	{
		return $this->db->delete('tb_movimientosventas', array('idCompra' => $idCompra));
	}

	function delMovimiento($idVenta,$idItem)
	{
		return $this->db->delete('tb_movimientosventas', array('idVenta' => $idVenta,'idInventario'=>$idItem));
	}

	function truncar($tabla)
	{
		$this->db->truncate($tabla);
	}

	function delDepartamento($id)
	{
		return $this->db->delete('tb_departamentos', array('id' => $id));
	}

	function delComBlog($id)
	{
		return $this->db->delete('comments', array('idblog' => $id));
	}

	function delBlog($id)
	{
		return $this->db->delete('blog', array('id' => $id));
	}
	function delComment($id)
	{
		return $this->db->delete('comments', array('id' => $id));
	}
	function delTeacher($id)
	{
		return $this->db->delete('teachers', array('id' => $id));
	}
	function delEducation($id)
	{
		return $this->db->delete('dc_educación', array('id' => $id));
	}
	function delExperience($id)
	{
		return $this->db->delete('dc_experience', array('id' => $id));
	}
	function delTeacherXp($id)
	{
		return $this->db->delete('dc_experience', array('id_teacher' => $id));
	}
	function delTeacherEdu($id)
	{
		return $this->db->delete('dc_educación', array('id_teacher' => $id));
	}
	function delCurso($id)
	{
		return $this->db->delete('cursos', array('id_curso' => $id));
	}

}
?>
