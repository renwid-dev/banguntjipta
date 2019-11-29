<?php
class M_provinsi extends CI_Model{
    function get_all_provinsi(){
		$hsl=$this->db->query("SELECT * FROM `provinsi` ORDER BY 'name'='id_kab' ");
		return $hsl;
	}
}