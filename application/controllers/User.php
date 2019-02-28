<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function login()
	{
		$this->load->view('page/login');
	}
}
