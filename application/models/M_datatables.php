<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_datatables extends CI_Model {

    private function _get_datatables_query($table, $column_order, $column_search, $order, $condition=null) {
        if ($condition) {
            foreach ($condition as $c) {
                if (($c['2']) == null) {
                    $this->db->$c[0]($c[1]);
                } else {
                    $this->db->$c[2]($c[0], $c[1]);
                }
            }
        }
        
        $this->db->from($table);

        $i = 0;
    
        foreach ($column_search as $item)
        {
            if($_POST['search']['value'])
            {
                
                if($i===0)
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        
        if(isset($_POST['order']))
        {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($order))
        {
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables($table, $column_order, $column_search, $order, $condition=null) {
        $this->_get_datatables_query($table, $column_order, $column_search, $order, $condition);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered($table, $column_order, $column_search, $order, $condition=null) {
        $this->_get_datatables_query($table, $column_order, $column_search, $order, $condition);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_all($table, $condition=null) {
        if ($condition) {
            foreach ($condition as $c) {
                if (($c['2']) == null) {
                    $this->db->$c[0]($c[1]);
                } else {
                    $this->db->$c[2]($c[0], $c[1]);
                }
            }
        }
        $this->db->from($table);
        return $this->db->count_all_results();
    }
    
}