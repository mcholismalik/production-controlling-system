<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {
    function get_user() 
    {   
        try {
            $this->db->select('mu.*, mro.role, mu2.name as created_by_name, mu3.name as modified_by_name');
            $this->db->from('m_user mu');
            $this->db->join('m_role mro', 'mro.id_role=mu.id_role and mro.status=1');
            $this->db->join('m_user mu2', 'mu2.id_user=mu.created_by');
            $this->db->join('m_user mu3', 'mu3.id_user=mu.modified_by');
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