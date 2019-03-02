<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {
    function get_user() 
    {   
        try {
            $this->db->select('mu.*, mro.role');
            $this->db->from('m_user mu');
            $this->db->join('m_role mro', 'mro.id_role=mu.id_role and mro.status=1');
            $result = $this->db->get();
        } catch (UserException $error) {
            $result = null;
        }
        return $result;
    }

    function insert_user($data_user) 
    {
        try {
            $this->db->insert('m_user', $data_user);
            $result = $this->db->insert_id();
        } catch (UserException $error) {
            $result = null;
        }
        return $result;
    }

    function update_user($data_user, $id_user) 
    {
        try {
            $this->db->where('id_user', $id_user);
            $this->db->update('m_user', $data_user);
            $result = $this->db->affected_rows();
        } catch (UserException $error) {
            $result = null;
        }
        return $result;
    }
}