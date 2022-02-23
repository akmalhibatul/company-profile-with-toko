<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_page');
    }

    public function index()
    {
        $data['galeri'] = $this->M_page->getAllDataGaleri();
        $data['produk'] = $this->M_page->getAllDataProduk();
        $data['setting'] = $this->M_page->getAllsetting();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('index', $data);
        $this->load->view('template/footer', $data);
    }
    // public function dokumentasi()
    // {
    //     $this->load->view('dokumentasi');
    // }

    public function dokumentasi()
    {
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/kantorr/page/dokumentasi';
        $config['total_rows'] = $this->M_page->getCountgaleri();
        $config['per_page'] = 3;

        $config['full_tag_open'] = '<nav> <ul class="pagination justify-content-center mt-3">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';


        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';


        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';


        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['setting'] = $this->M_page->getAllsetting();
        $data['start'] = $this->uri->segment(3);
        $data['galeri'] = $this->M_page->getAllGaleri($config['per_page'], $data['start']);
        $this->load->view('dokumentasi', $data);
    }
}
