<?php
class M_kabupaten extends CI_Model{
    function get_all_kabupaten(){
        $hsl=$this->db->query("SELECT * FROM kabupaten ORDER BY 'name' ASC");
		return $hsl;
	}
}