<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_core extends CI_Model {

    // Core
    function get_tbl_ra($paramTable, $paramSelect, $condition) {
        $this->db->select($paramSelect);
        if ($condition) {
            foreach ($condition as $c) {
                $c0 = $c[0];
                $c1 = $c[1];
                $c2 = $c[2];
                if (($c2) == null) {
                    $this->db->$c0($c1);
                } else {
                    if($c2 == 'like') {
                        $this->db->$c2($c0, $c1, $c3);
                    } else {
                        $this->db->$c2($c0, $c1);                        
                    }
                }
            }
        }
        return $this->db->get($paramTable)->result_array();
    }

    function get_tbl_rowa($paramTable, $paramSelect, $condition) {
        $this->db->select($paramSelect);
        if ($condition) {
            foreach ($condition as $c) {
                $c0 = $c[0];
                $c1 = $c[1];
                $c2 = $c[2];
                if (($c2) == null) {
                    $this->db->$c0($c1);
                } else {
                    if($c2 == 'like') {
                        $this->db->$c2($c0, $c1, $c3);
                    } else {
                        $this->db->$c2($c0, $c1);                        
                    }
                }
            }
        }
        return $this->db->get($paramTable)->row_array();
    }

    function update_tbl($paramTable, $data, $condition) {
        if ($condition) {
            foreach ($condition as $c) {
                $this->db->$c[2]($c[0], $c[1]);
            }
        }
        return $this->db->update($paramTable, $data);
    }

    function update_tbl_batch($paramTable, $data, $id) {
        $this->db->update_batch($paramTable, $data, $id);
    }   

    function insert_tbl_normal($paramTable, $data) {
        $this->db->insert($paramTable, $data);
        return $this->db->insert_id();
    }

    function insert_tbl_batch($paramTable, $data) {
        $this->db->insert_batch($paramTable, $data);
    }

    function get_mingguan_pagi(){
        $data = $this->db->query('select sum(total) as total from t_production where YEARWEEK(date) = YEARWEEK(CURDATE()) and status = 1 and id_shift = 1')->row_array()['total'];
        return $data;
    }

    function get_mingguan_sore(){
        $data = $this->db->query('select sum(total) as total from t_production where YEARWEEK(date) = YEARWEEK(CURDATE()) and status = 1 and id_shift = 2')->row_array()['total'];
        return $data;
    }

    function get_mingguan_ys(){
        $data = $this->db->query('select sum(total) as total from t_production where YEARWEEK(date) = YEARWEEK(NOW() - INTERVAL 1 WEEK) and status = 1')->row_array()['total'];
        return $data;
    }

}