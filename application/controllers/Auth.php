<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
        if ($this->session->userdata('id_user')){
        	redirect('beranda');
        }
	}

	public function login()
	{
		$this->load->view('page/login');
    }

    public function submitLogin()
    {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('M_login');
		$cekUser = $this->M_login->getUser($username)->result();

		if (!empty($cekUser)) {
			foreach ($cekUser as $cu) {
				$passwordDecrypt = $this->encrypt->decode($cu->password);
			}
			if ($password == $passwordDecrypt) {			
				$cek = $this->M_login->getUser($username)->result();
				$sess_data 	= [];
				foreach ($cek as $c) {
					$sess_data['id_user'] 		= $c->id_user;
					$sess_data['id_role'] 		= $c->id_role;
					$sess_data['name']			= $c->name;					
					$sess_data['role']			= $c->role;					
				}
				$this->session->set_userdata($sess_data);
				$this->session->set_flashdata("psn", "Selamat Datang");
				redirect('beranda');
			}else{
				$this->session->set_flashdata('psn','Username atau Password Salah');
				redirect('auth/login');
			}
		}else{
			$this->session->set_flashdata('psn','Username atau Password Salah');
			redirect('auth/login');
		}
	}
    
    public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('psn','Anda Telah Keluar');
		redirect('auth/login');
	}
}
