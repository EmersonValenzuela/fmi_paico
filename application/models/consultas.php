<?php

class Consultas extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

		public function consultasIniciales()
		{
			$sqlUsuarios = "SELECT id FROM users";
			$queryUsuarios = $this->db->query($sqlUsuarios);
			$usuarios=$queryUsuarios->num_rows();

			$sqlBlogs = "SELECT id FROM blog";
			$queryBlogs = $this->db->query($sqlBlogs);
			$blogs=$queryBlogs->num_rows();

			
			$sqlComments = "SELECT id FROM comments";
			$queryComments = $this->db->query($sqlComments);
			$comments=$queryComments->num_rows();

			$sqlTeachers = "SELECT id FROM comments";
			$queryTeachers = $this->db->query($sqlTeachers);
			$teachers = $queryTeachers->num_rows();

			$sqlCursos = "SELECT id FROM comments";
			$queryCursos = $this->db->query($sqlCursos);
			$cursos=$queryCursos->num_rows();

			$sqlEmails = "SELECT id FROM comments";
			$queryEmails = $this->db->query($sqlEmails);
			$emails=$queryEmails->num_rows();

			
			
			$valores=array(
				'usuarios'=>$usuarios,
				'blogs'=>$blogs,
				'comments'=>$comments,
				'emails'=>$emails,
				'cursos'=>$cursos,
				'teachers'=>$teachers
				
			);
			return $valores;

		}

		function findIdUser($user, $pass)
		{
			$sql = "SELECT u.*,r.rol
			FROM users u
			inner join rol r on u.idRol = r.id
			WHERE u.username = ? AND u.pass= ? ";
			$query = $this->db->query($sql,array($user,$pass));
			return $query->row();
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////

		function isUser($user, $pass)
		{
			$sql = "SELECT * FROM users WHERE username = ? ";
			$query = $this->db->query( $sql, array($user) );
			if ($query->num_rows() > 0) {
				$sql = "SELECT * FROM users WHERE username = ? and pass = ? ";
				$query = $this->db->query($sql, array($user,$pass) );
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

		public function getUsers($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT u.*,r.rol
				FROM users u
				inner join rol r on u.idRol = r.id
				Where u.id= ?
				ORDER BY u.name ASC";
				$query = $this->db->query( $sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT u.*,r.rol
			FROM users u
			inner join rol r on u.idRol = r.id
			ORDER BY u.name ASC";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getComments($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT c.*,u.name,u.photo
				FROM comments c
				inner join users u on c.iduser = u.id
				Where c.idblog= ?
				ORDER BY c.fecha ASC";
				$query = $this->db->query( $sql, array($id) );
				return $query->result_array();
			}
			$sql = "SELECT c.*,u.name, b.title, b.image
			FROM comments c
			inner join users u on c.iduser = u.id
			inner join blog b on c.idblog = b.id
			ORDER BY c.fecha ASC";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getEducation($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT e.*,t.name
				FROM dc_educación e
				inner join teachers t on e.id_teacher = t.id
				Where e.id_teacher= ?
				ORDER BY e.id ASC";
				$query = $this->db->query( $sql, array($id) );
				return $query->result_array();
			}
			$sql = "SELECT e.*,t.id
			FROM dc_educación e
			inner join teachers t on e.id_teacher = t.id
			ORDER BY e.id ASC";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		
		public function getExperience($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT e.*,t.name
				FROM dc_experience e
				inner join teachers t on e.id_teacher = t.id
				Where e.id_teacher= ?
				ORDER BY e.id ASC";
				$query = $this->db->query( $sql, array($id) );
				return $query->result_array();
			}
			$sql = "SELECT e.*,t.id
			FROM dc_experience e
			inner join teachers t on e.id_teacher = t.id
			ORDER BY e.id ASC";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		function existeUsername($user)
		{
			$sql = "SELECT id FROM users WHERE username = ? ";
			$query = $this->db->query($sql,array($user));
			if ($query->num_rows() == 0) {
				return false;
			}
			return true;
		}
		public function getBlogs($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT b.*, c.nombre_curso FROM blog b
				inner join cursos c on b.curso = c.id_curso
				 Where id = ? ORDER BY title ASC";
				$query = $this->db->query($sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT b.*, c.nombre_curso FROM blog b
			inner join cursos c on b.curso = c.id_curso
			ORDER BY title ASC";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getCategories($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT * FROM categoria_curso Where id_categoria= ?	ORDER BY nombre_categoria ASC";
				$query = $this->db->query($sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT * FROM categoria_curso ORDER BY nombre_categoria ASC";
			$query = $this->db->query($sql);
			return $query->result_array();
		}


		public function getTeachers($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT * FROM teachers Where id= ?";
				$query = $this->db->query($sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT * FROM teachers";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function getCourses($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT c.*,t.id, t.name,t.profession,t.designation,t.foto, i.* FROM cursos c
				inner join teachers t on c.id_profesor = t.id 
				inner join categoria_curso i on c.categoria = i.id_categoria
				Where c.id_curso = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT c.*, t.name, s.nombre_categoria FROM cursos c
			inner join teachers t on c.id_profesor = t.id
			inner join categoria_curso s on c.categoria = s.id_categoria";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function getSidebar()
		{
			$sql = "SELECT * FROM blog ORDER BY fecha ASC LIMIT 4";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		    //-- select by id
			function selectByid($id,$table){

				$this->db->select();
				$this->db->from($table);
				$this->db->where('id', $id);
				$query = $this->db->get();
				$row=$query->result();
				if(!empty($row))
					return $row[0];
				else
					return false;
			}
			    //-- insert function
			public function insert($data,$table){
				$this->db->insert($table,$data);        
				return $this->db->insert_id();
			}

			public function getCatp($id=1)
			{

				$sql = "SELECT * FROM cursos 
				Where categoria = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->result_array();

			}
			public function getCats($id=2)
			{

				$sql = "SELECT * FROM cursos 
				Where categoria = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->result_array();

			}
			public function getCatt($id=3)
			{

				$sql = "SELECT * FROM cursos 
				Where categoria = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->result_array();

			}
			public function getBlogsC($id=0)
			{
				if($id!=0)
				{
					$sql = "SELECT * FROM blog 
					 Where curso = ? ORDER BY title ASC";
					$query = $this->db->query($sql, array($id) );
					return $query->result_array();
				}
				$sql = "SELECT b.*, c.nombre_curso FROM blog b
				inner join cursos c on b.curso = c.id_curso
				ORDER BY title ASC";
				$query = $this->db->query($sql);
				return $query->result_array();
			}
			public function getEmails($id=0)
			{
				if($id!=0)
				{
					$sql = "SELECT * FROM emails Where id_email= ?";
					$query = $this->db->query($sql, array($id) );
					return $query->row_array();
				}
				$sql = "SELECT * FROM emails ORDER BY id_email DESC";
				$query = $this->db->query($sql);
				return $query->result_array();
			}
			public function getNEmails($id=1)
			{

					$sql = "SELECT * FROM emails Where estado_email = ?";
					$query = $this->db->query($sql, array($id) );
					return $query->num_rows();


			}
			public function getNComments($id=0)
			{
				if($id!=0)
				{
					$sql = "SELECT * FROM comments Where idblog= ?";
					$query = $this->db->query($sql, array($id) );
					return $query->num_rows();
				}
				$sql = "SELECT * FROM comments ORDER BY id DESC";
				$query = $this->db->query($sql);
				return $query->num_rows();


			}


		  

		

			
	
	
}
?>
