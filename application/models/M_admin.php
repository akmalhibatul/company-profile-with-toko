<?php
class M_admin extends CI_Model
{

    //galeri
    public function getAllGaleri()
    {
        $this->db->from('galeri');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('galeri', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('galeri', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeri');
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('galeri', $data);
    }

    public function jumlah_galeri()
    {
        $data_barang = "SELECT * FROM galeri";
        return $this->db->query($data_barang)->num_rows();
    }

    //setting
    public function getByidSetting($id)
    {
        return $this->db->get_where('setting', ['id' => $id])->row_array();
    }

    public function updateSetting($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('setting', $data);
    }

    //produk
    public function getAllProduk()
    {
        $this->db->from('produk');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getByIdProduk($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    public function insertProduk($data)
    {
        $this->db->insert('produk', $data);
    }

    public function deleteProduk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk');
    }

    public function updateProduk()
    {
        $id = $this->input->post('id');

        if (!empty($_FILES["image"]["name"])) {
            $image = $this->uploadProduk();
            $data['image'] = $image;
        } else {
            $image = $this->input->post('old_image');
            $data['image'] = $image;
        }
        $data = array(
            'title_produk' => $this->input->post('title_produk'),
            'sub_title' => $this->input->post('sub_title'),
            'link' => $this->input->post('link'),
            'image' => $image
        );

        $this->db->where('id', $id);
        $this->db->update('produk', $data);
    }

    private function uploadProduk()
    {
        $image_name = rand(1, 1000) . '-' . $_FILES["image"]['name'];

        $config['upload_path']         = 'assets/images/produk/';
        $config['allowed_types']     = 'gif|jpg|png';
        $config['max_size']         = 5000;
        $config['max_width']            = 2048;
        $config['max_height']           = 1152;
        $config['file_name']         = $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            if (strpos($this->upload->display_errors('', ''), "larger than the permitted") !== false) {
                $this->session->set_flashdata('error', "Ukuran melebihi 5mb");
            } else if (strpos($this->upload->display_errors('', ''), "doesn't fit into the allowed dimensions") !== false) {
                $this->session->set_flashdata('error', "Ukuran width dan height melebihi batas yang di tentukan");
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
            }
            redirect('produk/');
        }
        return $this->upload->data('file_name');
    }
}
