<?php
class Pertanyaan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['tot_pengumuman']=$this->db->get('tbl_pengumuman')->num_rows();
		$x['tot_daftar']=$this->db->get('tbl_daftar_online')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('depan/v_pertanyaan',$x);
	}
}
