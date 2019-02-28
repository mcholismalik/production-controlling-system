<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_core extends CI_Model {

	// Core
	function get_tbl($paramTable, $paramSelect, $condition) {
		$this->db->select($paramSelect);
		if ($condition) {
            foreach ($condition as $c) {
                // if(is_array($c[1])) {
                //     $this->db->$c[2]($c[1]);
                // } 

                if (($c['2']) == null) {
                    $this->db->$c[0]($c[1]);
                } else {
                    if($c['2'] == 'like') {
                        $this->db->$c[2]($c[0], $c[1], $c[3]);
                    } else {
                        $this->db->$c[2]($c[0], $c[1]);                        
                    }
                }
            }
        }
        return $this->db->get($paramTable);
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

	function reqDetect($e) {
	 	if($e == 1) {
	    	$d['attr']   = 'required';
	    	$d['symbol'] = '&nbsp;<i class="text-danger fa fa-asterisk"></i>';
	  	} else {
	    	$d['attr']   = '';
	    	$d['symbol'] = '';
	  	}
	  	return $d;
	}

    function t_plural_group_1($id_permohonan, $core) {
    	$query = 'select 
                    tpl.id_permohonan,
                    tpl.id_'.$core.'_s,
                    tpl.id_'.$core.'_p,
                    tpl.aktif

                   from t_'.$core.'_p tpl
                   where tpl.id_permohonan = '.$id_permohonan.' and tpl.aktif = 1
                   group by tpl.id_'.$core.'_s, tpl.id_'.$core.'_p';
        $tpg = $this->db->query($query);
        return $tpg;
    }

    function t_plural_group_index_1($id_permohonan, $core, $id_syarat_izin_s) {
        $query = 'select * from 
                    (select 
                        tpl.id_permohonan,
                        tpl.id_'.$core.'_s,
                        tpl.id_'.$core.'_p,
                        tpl.index,
                        tpl.aktif

                        from t_'.$core.'_p tpl
                        where tpl.id_permohonan = '.$id_permohonan.' 
                        and tpl.id_'.$core.'_s = '.$id_syarat_izin_s.'
                        and tpl.aktif = 1
                        group by tpl.id_'.$core.'_s, tpl.id_'.$core.'_p, tpl.index) bp2

                   group by bp2.index';
        $tpgi = $this->db->query($query);
        return $tpgi;
    }

    function t_plural_group_index_2($id_perusahaan, $core) {
        $query = 'select * from (select 
                    bp.id_perusahaan,
                    bp.id_'.$core.'_s,
                    bp.id_'.$core.'_p,
                    bp.index,
                    bp.aktif

                   from t_'.$core.'_p bp
                   where bp.id_perusahaan = '.$id_perusahaan.' and bp.aktif = 1
                   group by bp.id_'.$core.'_s, bp.id_'.$core.'_p, bp.index) bp2

                   group by bp2.index';
        $bpgi = $this->db->query($query);
        return $bpgi;
    }

    function t_plural_group_2($id_perusahaan, $core) {
        $query = 'select 
                    bp.id_perusahaan,
                    bp.id_'.$core.'_s,
                    bp.id_'.$core.'_p,
                    bp.aktif

                   from t_'.$core.'_p bp
                   where bp.id_perusahaan = '.$id_perusahaan.' and bp.aktif = 1
                   group by bp.id_'.$core.'_s, bp.id_'.$core.'_p';
        $bpg = $this->db->query($query);
        return $bpg;
    }

    function get_jenis_izin($kd_jenis_izin) {
        $data_jenis = array();

        $data       = $this->M_permohonan->get_parent_izin($kd_jenis_izin)->row_array();
        while ($data) { 
            $parent_kd  = substr($data['kd_jenis_izin'], 0, -2);
            $data_jenis[] = $data['jenis_izin'];
            $data       = $this->M_permohonan->get_parent_izin($parent_kd)->row_array();
        }
        $data_jenis     = array_reverse($data_jenis);

        $response       = '';
        foreach ($data_jenis as $dj) {
            $response   .= $dj." ";
        }
        return $response;
    }


}