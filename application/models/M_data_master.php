<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data_master extends CI_Model {
    
    function get_factory() 
    {
        $factory = $this->db->get_where('m_factory', array('status' => 1));
        return $factory;
    }

    function get_shift() 
    {
        $shift = $this->db->get_where('m_shift', array('status' => 1));
        return $shift;
    }
}