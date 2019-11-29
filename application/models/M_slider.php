<?php 
class M_slider extends CI_Model{

	function get_all_slider(){
		$hsl=$this->db->query("SELECT * FROM tbl_slider");
		return $hsl;
	}

	function simpan_slider($title,$text,$photo,$link){
		$hsl=$this->db->query("INSERT INTO tbl_slider (slider_title,slider_text,slider_photo,slider_link) VALUES ('$title','$text','$photo','$link')");
		return $hsl;
	}
	function simpan_slider_tanpa_img($title,$text,$link){
		$hsl=$this->db->query("INSERT INTO tbl_slider (slider_title,slider_text,slider_link) VALUES ('$title','$text','$link')");
		return $hsl;
	}

	function update_slider($kode,$title,$text,$photo,$link){
		$hsl=$this->db->query("UPDATE tbl_slider SET slider_title='$title',slider_text='$text',slider_photo='$photo',slider_link='$link' WHERE slider_id='$kode'");
		return $hsl;
	}
	function update_slider_tanpa_img($kode,$title,$text,$link){
		$hsl=$this->db->query("UPDATE tbl_slider SET slider_title='$title',slider_text='$text',slider_link='$link' WHERE slider_id='$kode'");
		return $hsl;
	}
	function hapus_slider($kode){
		$hsl=$this->db->query("DELETE FROM tbl_slider WHERE slider_id='$kode'");
		return $hsl;
	}

	//front-end
	function slider(){
		$hsl=$this->db->query("SELECT * FROM tbl_slider");
		return $hsl;
	}
	function slider_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_slider limit $offset,$limit");
		return $hsl;
	}

}