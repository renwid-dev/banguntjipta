<?php 
class M_testimoni extends CI_Model{

	function get_all_testimoni(){
		$hsl=$this->db->query("SELECT * FROM tbl_testimoni");
		return $hsl;
	}

	function simpan_testimoni($nama,$isi,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_testimoni (testimoni_nama,testimoni_isi,testimoni_photo) VALUES ('$nama','$isi','$photo')");
		return $hsl;
	}
	function simpan_testimoni_tanpa_img($nama,$isi){
		$hsl=$this->db->query("INSERT INTO tbl_testimoni (testimoni_nama,testimoni_isi) VALUES ('$nama','$isi')");
		return $hsl;
	}

	function update_testimoni($kode,$nama,$isi,$photo){
		$hsl=$this->db->query("UPDATE tbl_testimoni SET testimoni_nama='$nama',testimoni_isi='$isi',testimoni_photo='$photo' WHERE testimoni_id='$kode'");
		return $hsl;
	}
	function update_testimoni_tanpa_img($kode,$nama,$isi){
		$hsl=$this->db->query("UPDATE tbl_testimoni SET testimoni_nama='$nama',testimoni_isi='$isi' WHERE testimoni_id='$kode'");
		return $hsl;
    }
    
	function hapus_testimoni($kode){
		$hsl=$this->db->query("DELETE FROM tbl_testimoni WHERE testimoni_id='$kode'");
		return $hsl;
	}

	//front-end
	function testimoni(){
		$hsl=$this->db->query("SELECT * FROM tbl_testimoni");
		return $hsl;
	}
	function testimoni_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_testimoni limit $offset,$limit");
		return $hsl;
	}

}