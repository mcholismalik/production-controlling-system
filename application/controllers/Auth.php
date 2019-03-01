<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function login()
	{
		$this->load->view('page/login');
    }
    
    public function logout()
	{
		$this->load->view('page/login');
	}
}
