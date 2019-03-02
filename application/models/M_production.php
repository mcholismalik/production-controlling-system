<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_production extends CI_Model {
    
    function get_production($id_factory=null, $id_shift=null, $date_start=null, $date_end=null, $min_total=null) 
    {   
        $this->db->select('*'); 
        if ($id_factory != null) $this->db->where('id_factory', $id_factory);
        if ($id_shift != null) $this->db->where('id_shift', $id_shift);
        if ($date_start != null) $this->db->where('created_date >=', $date_start);    
        if ($date_end != null) $this->db->where('created_date <=', $date_end);    
        if ($min_total != null) $this->db->where('total <=', $date_end);    
        $this->db->where('status=', 1);    
        $production = $this->db->get('t_production');
        return $production;
    }

}