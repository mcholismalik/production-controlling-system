<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id_user')) {
			redirect('auth/login');
		}
		$this->load->model('M_user');
		$this->load->model('M_data_master');
	}

	public function index() 
	{
		$d['role'] = $this->M_data_master->get_role()->result_array();
		$d['user'] = $this->M_user->get_user()->result_array();
		$d['page'] = 'user_list_data';
		$this->load->view('layout', $d);
	}

	public function save() 
	{
		$data = [];
		$id_user = $this->input->post('id_user');
		$data['name'] = $this->input->post('name');
		$data['id_role'] = $this->input->post('id_role');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->encryption->encrypt($this->input->post('password'));
		$data['status'] = $this->input->post('status');
		$data['modified_date'] = date('Y-m-d H:i:s');
		$data['modified_by'] = $this->session->userdata('id_user');

		if($id_user == '') { 
			$data['created_date'] = date('Y-m-d H:i:s');
			$data['created_by'] = $this->session->userdata('id_user');
			$execute = $this->M_user->insert_user($data);
		} else {
			$execute = $this->M_user->update_user($data, $id_user);
		}
		
		$code = ($execute) ? 'success' : 'error';
		redirect('user?msg='.$code);
	}
}
