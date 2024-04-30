
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_users()
    {
        $this->db->select('*');
        $this->db->from('users u');
        $this->db->join('rol r', 'r.id = u.idRol');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function get_data($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }
}
