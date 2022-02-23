<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }
    public function index()
    {
        if ($this->session->userdata('role') == '1') {
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['setting'] = $this->M_auth->getAllsetting();
            $this->load->view('auth/index', $data);
        } else {
            // validasinya success
            $this->process();
        }
    }

    public function process()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars($this->input->post('password'));
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 1) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang!</div>');
                    redirect('admin/');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Incorrect email or password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}
