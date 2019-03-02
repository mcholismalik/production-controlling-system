<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$d['page'] = 'beranda';

		//Total Shift Pagi harian (id_shift = 1)
		$condition 			 = [];
		$condition[]		 = ['id_shift', 1, 'where'];
		$condition[]		 = ['date(created_date)', date('Y-m-d'), 'where'];
		$condition[]		 = ['status', 1, 'where'];
		$get_shift_pg 		 = $this->M_core->get_tbl_ra('t_production', 'total', $condition);
		$get_shift_pg		 = array_column($get_shift_pg, "total");
		$total_shift_pg		 = array_sum($get_shift_pg);

		//Total Shift Pagi Sore (id_shift = 2)
		$condition 			 = [];
		$condition[]		 = ['id_shift', 2, 'where'];
		$condition[]		 = ['date(created_date)', date('Y-m-d'), 'where'];
		$condition[]		 = ['status', 1, 'where'];
		$get_shift_sre 		 = $this->M_core->get_tbl_ra('t_production', 'total', $condition);
		$get_shift_sre		 = array_column($get_shift_sre, "total");
		$total_shift_sre	 = array_sum($get_shift_sre);

		//Total Shift Pagi Tahunan (id_shift = 1)
		$condition 			 = [];
		$condition[]		 = ['id_shift', 1, 'where'];
		$condition[]		 = ['YEAR(created_date)', date('Y'), 'where'];
		$condition[]		 = ['status', 1, 'where'];
		$get_thn_pg 		 = $this->M_core->get_tbl_ra('t_production', 'total', $condition);
		$get_thn_pg			 = array_column($get_thn_pg, "total");
		$total_thn_pg		 = array_sum($get_thn_pg);

		//Total Shift Sore Tahunan (id_shift = 2)
		$condition 			 = [];
		$condition[]		 = ['id_shift', 1, 'where'];
		$condition[]		 = ['YEAR(created_date)', date('Y'), 'where'];
		$condition[]		 = ['status', 1, 'where'];
		$get_thn_sre 		 = $this->M_core->get_tbl_ra('t_production', 'total', $condition);
		$get_thn_sre		 = array_column($get_thn_sre, "total");
		$total_thn_sre		 = array_sum($get_thn_sre);

		//Total Shift Pagi Bulanan (id_shift = 1)
		$condition 			 = [];
		$condition[]		 = ['id_shift', 1, 'where'];
		$condition[]		 = ['MONTH(created_date)', date('m'), 'where'];
		$condition[]		 = ['status', 1, 'where'];
		$get_bln_pg 		 = $this->M_core->get_tbl_ra('t_production', 'total', $condition);
		$get_bln_pg			 = array_column($get_bln_pg, "total");
		$total_bln_pg		 = array_sum($get_bln_pg);

		//Total Shift Sore Bulanan (id_shift = 2)
		$condition 			 = [];
		$condition[]		 = ['id_shift', 1, 'where'];
		$condition[]		 = ['MONTH(created_date)', date('m'), 'where'];
		$condition[]		 = ['status', 1, 'where'];
		$get_bln_sre 		 = $this->M_core->get_tbl_ra('t_production', 'total', $condition);
		$get_bln_sre		 = array_column($get_bln_sre, "total");
		$total_bln_sre		 = array_sum($get_bln_sre);


		//Total Tahunan Sekarang
		$condition 			 = [];
		$condition[]		 = ['YEAR(created_date)', date('Y'), 'where'];
		$condition[]		 = ['status', 1, 'where'];
		$get_all_now 		 = $this->M_core->get_tbl_ra('t_production', 'total', $condition);
		$get_all_now		 = array_column($get_all_now, "total");
		$total_all_now		 = array_sum($get_all_now);

		// Total Tahun Sebelumnya
		$condition 			 = [];
		$condition[]		 = ['YEAR(created_date)', date('Y', strtotime('-1 year')), 'where'];
		$condition[]		 = ['status', 1, 'where'];
		$get_all_ysterday 	 = $this->M_core->get_tbl_ra('t_production', 'total', $condition);
		$get_all_ysterday	 = array_column($get_all_ysterday, "total");
		$total_all_ysterday	 = array_sum($get_all_ysterday);

		//For Grafik
		$get_list_year 	     = $this->M_core->get_tbl_ra('v_production_list_year', 'jml_produksi_all', '');
		$get_list_year_ys 	 = $this->M_core->get_tbl_ra('v_production_list_year_ys', 'jml_produksi_all', '');

		$d['ttl_shift_pagi'] = number_format($total_shift_pg);
		$d['ttl_thn_pagi']   = number_format($total_thn_pg);
		$d['ttl_bln_pagi']   = number_format($total_bln_pg);
		$d['ttl_shift_sore'] = number_format($total_shift_sre);
		$d['ttl_thn_sore']   = number_format($total_thn_sre);
		$d['ttl_bln_sore']   = number_format($total_bln_sre);
		$d['ttl_all_now']    = number_format($total_all_now);
		$d['ttl_all_ysterday']= number_format($total_all_ysterday);
		$d['list_year']	 	 = $get_list_year;
		$d['list_year_ys']	 = $get_list_year_ys;

		$this->load->view('layout', $d);
	}
}
