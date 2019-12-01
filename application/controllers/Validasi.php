<?php
class Validasi extends CI_Controller{
  function __construct(){
		parent::__construct();
		$this->load->model('m_daftar_online');
	}

   public function index()
   {
		$page = $this->uri->segment(3);
		$this->load->view('depan/v_validasi');
		  
		// echo '<pre>';
		// var_dump($data);
		// echo '<pre>';
   }
	
}