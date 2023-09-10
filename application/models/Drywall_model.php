
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Drywall_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getDrywall($where)
    {
        $this->db->select('*');
        $this->db->from('tbl_drywall d');
        $this->db->join('tbl_cos_drywall c', 'c.drw_id = d.id_drw', 'LEFT');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row();
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
