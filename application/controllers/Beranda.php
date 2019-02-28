<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$d['page'] = 'beranda';
		$this->load->view('layout', $d);
	}
}
