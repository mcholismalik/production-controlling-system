<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	function getUser($username) {
		$query = $this->db->query("select  a.id_user, a.id_role, a.name, a.username, a.password, a.status, b.role FROM m_user a LEFT JOIN  m_role b ON a.id_role = b.id_role WHERE a.status = 1 AND username = '$username'");
		return $query;
		
	}

}