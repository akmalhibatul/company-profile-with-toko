<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->proses();
    }

    private function proses()
    {
        if ($this->session->userdata('role') != '1') {
            redirect('page/');
        }
    }

    public function index()
    {
        $data['jumlah_galeri'] = $this->M_admin->jumlah_galeri();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function galeri()
    {
        $data['galeri'] = $this->M_admin->getAllGaleri();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/galeri', $data);
        $this->load->view('admin/template/footer');
    }

    public function setting($id)
    {
        $data['setting'] = $this->M_admin->getByidSetting($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/setting', $data);
        $this->load->view('admin/template/footer');
    }

    //tambah galeri
    public function tambah()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/tambah_galeri');
        $this->load->view('admin/template/footer');
    }

    public function create()
    {
        if (!empty($_FILES['image']['name'])) {
            $image = $this->uploadGaleri();
            $data['image'] = $image;
        }
        $this->M_admin->insert($data);
        $this->session->set_flashdata('flash', '<div class="row mt-4">
            <div class="col-md-12">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Tambah Gambar.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>');
        redirect('admin/galeri/');
    }

    public function edit($id)
    {
        $data['galeri'] = $this->M_admin->getById($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/galeri/edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');

        if (!empty($_FILES["image"]["name"])) {
            $image = $this->uploadGaleri();
            $data['image'] = $image;
        } else {
            $image = $this->input->post('old_image');
            $data['image'] = $image;
        }
        $this->M_admin->update($data, $id);
        $this->session->set_flashdata('flash', '<div class="row mt-4">
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Edit Gambar.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>');
        redirect('admin/galeri/');
    }


    public function hapus($id)
    {
        $upload = $this->M_admin->getById($id);
        if (file_exists('assets/images/galeri/' . $upload['image']) && $upload['image']) {
            unlink('assets/images/galeri/' . $upload['image']);
        }

        $this->M_admin->delete($id);
        $this->session->set_flashdata('flash', '<div class="row mt-4">
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Hapus Gambar.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>');
        redirect('admin/galeri/');
    }


    private function uploadGaleri()
    {
        $image_name = rand(1, 1000) . '-' . $_FILES["image"]['name'];

        $config['upload_path']         = 'assets/images/galeri/';
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
            redirect('galeri/');
        }
        return $this->upload->data('file_name');
    }

    //setting
    public function updateSetting()
    {
        $id = $this->input->post('id');
        $data = array(
            'sub_judul_atas' => $this->input->post('sub_judul_atas'),
            'judul' => $this->input->post('judul'),
            'sub_judul_bawah' => $this->input->post('sub_judul_bawah'),
            'title_about' => $this->input->post('title_about'),
            'sub_title_about' => $this->input->post('sub_title_about'),
            'isi_about' => $this->input->post('isi_about'),
            'isi_footer' => $this->input->post('isi_footer'),
            'alamat' => $this->input->post('alamat')
        );

        if (!empty($_FILES["image_logo"]["name"])) {
            $image = $this->_do_upload($_FILES['image_logo'], "image_logo", 1);
            $data['image_logo'] = $image;
        } else {
            $image = $this->input->post('old_image_logo', "image_logo", 1);
            $data['image_logo'] = $image;
        }

        if (!empty($_FILES["image_about"]["name"])) {
            $image = $this->_do_upload($_FILES['image_about'], "image_about", 2);
            $data['image_about'] = $image;
        } else {
            $image = $this->input->post('old_image_about', "image_about", 2);
            $data['image_about'] = $image;
        }

        if (!empty($_FILES["image_footer"]["name"])) {
            $image = $this->_do_upload($_FILES['image_footer'], "image_footer", 3);
            $data['image_footer'] = $image;
        } else {
            $image = $this->input->post('old_image_footer', "image_footer", 3);
            $data['image_footer'] = $image;
        }

        $this->M_admin->updateSetting($id, $data);
        $this->session->set_flashdata('flash', '<div class="row mt-4">
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Update Setting.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>');
        redirect('admin/setting/1');
    }

    // List Mode
    // 1 = logo
    // 2 = Image About
    // 3 = Image Footer

    private function _do_upload($fotoNya, $namaField, $mode = 0)
    {
        $image_name = rand(1, 1000) . '-' . $fotoNya['name'];

        $config['upload_path']         = 'assets/images/';
        $config['allowed_types']     = 'gif|jpg|png';
        switch ($mode) {
            case 1:
                $max_size = 5000;
                $max_width = 7000;
                $max_height = 7000;
                break;
            case 2:
                $max_size = 5000;
                $max_width = 7000;
                $max_height = 7000;
                break;
            case 3:
                $max_size = 5000;
                $max_width = 7000;
                $max_height = 7000;
                break;
            default:
                $max_size = 5000;
                $max_width = 7000;
                $max_height = 7000;
        }
        $config['max_size']             = $max_size;
        $config['max_width']            = $max_width;
        $config['max_height']           = $max_height;

        $config['file_name']            = $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($namaField)) {
            if (strpos($this->upload->display_errors('', ''), "larger than the permitted") !== false) {
                $this->session->set_flashdata('error', "Ukuran melebihi Size yang ditentukan");
            } else if (strpos($this->upload->display_errors('', ''), "doesn't fit into the allowed dimensions") !== false) {
                $this->session->set_flashdata('error', "Ukuran width dan height melebihi batas yang di tentukan");
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
            }
            redirect('admin/setting/1');
        }
        return $this->upload->data('file_name');
    }

    public function produk()
    {
        $data['produk'] = $this->M_admin->getAllProduk();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/produk', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambahProduk()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/tambah_produk');
        $this->load->view('admin/template/footer');
    }

    public function createProduk()
    {
        $this->form_validation->set_rules('title_produk', 'Judul', 'required|trim');
        $this->form_validation->set_rules('sub_title', 'Sub Title', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/tambah_produk');
            $this->load->view('admin/template/footer');
        } else {
            if (!empty($_FILES['image']['name'])) {
                $image = $this->uploadProduk();
                $data['image'] = $image;
            }

            $data = array(
                'title_produk' => $this->input->post('title_produk'),
                'sub_title' => $this->input->post('sub_title'),
                'link' => $this->input->post('link'),
                'image' => $image,
            );

            $this->M_admin->insertProduk($data);
            $this->session->set_flashdata('flash', '<div class="row mt-4">
                <div class="col-md-12">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil Tambah Produk.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
              </div>');
            redirect('admin/produk/');
        }
    }

    public function editProduk($id)
    {
        $data['produk'] = $this->M_admin->getByIdProduk($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/edit_produk', $data);
        $this->load->view('admin/template/footer');
    }

    public function updateProduk()
    {
        $this->M_admin->updateProduk();
        $this->session->set_flashdata('flash', '<div class="row mt-4">
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Update Produk.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>');
        redirect('admin/produk/');
    }

    public function hapusProduk($id)
    {
        $upload = $this->M_admin->getByIdProduk($id);
        if (file_exists('assets/images/produk/' . $upload['image']) && $upload['image']) {
            unlink('assets/images/produk/' . $upload['image']);
        }

        $this->M_admin->deleteProduk($id);
        $this->session->set_flashdata('flash', '<div class="row mt-4">
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Hapus Gambar.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>');
        redirect('admin/produk/');
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
