<?php
class M_kelurahan extends CI_Model{
    function get_all_kelurahan(){
		$hsl=$this->db->query("SELECT * FROM kelurahan ORDER BY 'name'='id_prov'");
		return $hsl;
	}
}