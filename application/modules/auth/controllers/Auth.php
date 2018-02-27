<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

			public function index($error = NULL) {
	        $data = array(
	            'title' => 'Login Page',
	            'action' => site_url('auth/cek_login'),
	            'error' => $error
	        );
            $data['title']      = 'Login';
	        $this->load->view('login', $data);
	    }

	public function cek_login() {
        $this->load->model('auth_model');

        $data = array('username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')));
        $login = $this->auth_model->login($data);

        if ($login == 1) {
//          ambil detail data
            $row = $this->auth_model->data_login($data);
            $data = array(
                'logged' => TRUE,
                'username' => $row->username,
                'nama_lengkap' => $row->nama_lengkap
            );
            $this->session->set_userdata($data);

//            redirect ke halaman sukses
            redirect(site_url('panel'));
        } else {
//            tampilkan pesan error

            $error = 'username / password salah';
            $this->index($error);
        }
    }

    function logout() {
//        destroy session
        $this->session->sess_destroy();
        $array_items = array('logged', 'username');

        $this->session->unset_userdata($array_items);
//        redirect ke halaman login
        redirect(site_url('auth'));
    }


}
