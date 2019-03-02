<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_production extends CI_Model {
    function get_production($id_factory=null, $id_shift=null, $date_start=null, $date_end=null, $min_total=null) 
    {   
        try {
            $this->db->select('*'); 
            if ($id_factory != null) $this->db->where('id_factory', $id_factory);
            if ($id_shift != null) $this->db->where('id_shift', $id_shift);
            if ($date_start != null) $this->db->where('date >=', date('Y-m-d', strtotime(str_replace('/','-',$date_start))));    
            if ($date_end != null) $this->db->where('date <=', date('Y-m-d', strtotime(str_replace('/','-',$date_end))));    
            if ($min_total != null) $this->db->where('total >=', $min_total);    
            $this->db->where('status=', 1);    
            $result = $this->db->get('v_production');
        } catch (UserException $error) {
            $result = null;
        }
        return $result;
    }

    function insert_production($data_production) 
    {
        try {
            $this->db->insert('t_production', $data_production);
            $result = $this->db->insert_id();
        } catch (UserException $error) {
            $result = null;
        }
        return $result;
    }

    function update_production($data_production, $id_production) 
    {
        try {
            $this->db->where('id_production', $id_production);
            $this->db->update('t_production', $data_production);
            $result = $this->db->affected_rows();
        } catch (UserException $error) {
            $result = null;
        }
        return $result;
    }
}