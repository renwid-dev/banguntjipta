<?php
class M_kecamatan extends CI_Model{
    function get_all_kecamatan(){
		$hsl=$this->db->query("SELECT * FROM kecamatan ORDER BY 'name'='id_kel'");
		return $hsl;
	}
}