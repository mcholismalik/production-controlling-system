<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
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
				$passwordDecrypt = $this->encryption->decrypt($cu->password);
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
			} else {
				$this->session->set_flashdata('psn','Username atau Password Salah');
				redirect('auth/login');
			}
		} else {
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
    

    // this is new encryption run for php7, encrypt isn't support for php7
    public function encrypt_php7() 
    {   
        $text = '123456';
        $ciphertext = $this->encryption->encrypt($text);
        echo $ciphertext;
    }

    public function decrypt_php7() 
    {
        $chipertext = '6656891601ff6c57da12e8cdabe3ba65921c1e08c50504fd8ece45fe965eeea198e1c83ff04cbfeedf58e19ca4b18bf67d9f47d1d7debcba27631b2bb02254d09DE1O9hTgP+DqBx2Vq4dA+zP9+c+NLnqzCSS7gImVNE=';
        $text = $this->encryption->decrypt($chipertext);
        echo $text;
    }

}
