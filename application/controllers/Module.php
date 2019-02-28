<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends CI_Controller {

	public function module_1()
	{
		$d['page'] = 'module_1';
		$this->load->view('layout', $d);
	}

	public function module_2()
	{
		$d['page'] = 'module_2';
		$this->load->view('layout', $d);
	}

	public function module_3()
	{
		$d['page'] = 'module_3';
		$this->load->view('layout', $d);
	}
}
