<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Production extends CI_Controller {

	public function index()
	{
		$d['page'] = 'production_list_data';
		$this->load->view('layout', $d);
	}
}
