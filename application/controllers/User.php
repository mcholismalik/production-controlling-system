<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index() 
	{
		$d['page'] = 'user_list_data';
		$this->load->view('layout', $d);
	}
}
