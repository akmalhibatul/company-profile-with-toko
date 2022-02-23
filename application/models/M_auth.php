<?php
class M_auth extends CI_Model
{

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function getAllsetting()
    {
        return $this->db->get('setting')->row_array();
    }
}
