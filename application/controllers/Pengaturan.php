<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function hak_akses()
	{
		$d['page'] = 'hak_akses';
		$this->load->view('layout', $d);
	}

	function user_bo()
	{
		$d['page'] = 'user_bo';
		$this->load->view('layout', $d);
	}

	function menu_bo()
	{
		$d['page'] = 'menu_bo';
		$this->load->view('layout', $d);
	}

	function jabatan()
	{
		$d['page'] = 'jabatan';
		$this->load->view('layout', $d);
	}
}
