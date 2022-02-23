<?php
class M_page extends CI_Model
{
    public function getAllDataGaleri()
    {
        $this->db->from('galeri');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllsetting()
    {
        return $this->db->get('setting')->row_array();
    }
    public function getCountgaleri()
    {
        return $this->db->get('galeri')->num_rows();
    }
    public function getAllGaleri($limit, $start)
    {
        $this->db->from('galeri');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllDataProduk()
    {
        return $this->db->get('produk')->result_array();
    }
}
