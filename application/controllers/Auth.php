<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required', ['required => "Harus Diisi"']);
        $this->form_validation->set_rules('password', 'password', 'trim|required', ['required => "Harus Diisi"']);

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/auth_header');
            $this->load->view('auth/login');
            $this->load->view('auth/auth_footer');
        } else {
            $username = htmlspecialchars($this->input->post('username', true));
            $password = htmlspecialchars(($this->input->post('password', true)));
            $user = $this->db->get_where('user', ['username' => $username, 'password' => md5($password)]);
            if ($user->num_rows() > 0) {
                $user = $user->row_array();

                $_SESSION['username'] = $user['username'];
                $_SESSION['id'] = $user['id'];

                notif('Berhasil Login', true);
                $home = 'Dashboard';
            } else {
                $home = 'Auth';
                notif('Username atau password salah', false);
            }
            redirect(base_url($home));
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id');
        notif('Anda Berhasil LOGOUT', true);
        redirect(base_url('auth'));
    }
}
