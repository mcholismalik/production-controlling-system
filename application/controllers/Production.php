<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Production extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data_master');
		$this->load->model('M_production');
	}

	public function index()
	{
		$d['factory'] = $this->M_data_master->get_factory()->result_array();
		$d['shift'] = $this->M_data_master->get_shift()->result_array();
		
		$id_factory = $this->input->get('id_factory');
		$id_shift = $this->input->get('id_shift');
		$date_start = $this->input->get('date_start');
		$date_end = $this->input->get('date_end');
		$min_total = $this->input->get('min_total');
		$d['production'] = $this->M_production
								->get_production($id_factory, $id_shift, $date_start, $date_end, $min_total)
								->result_array();

		$d['page'] = 'production_list_data';
		$this->load->view('layout', $d);
	}
}
