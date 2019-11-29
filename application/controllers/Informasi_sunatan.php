<?php
class Informasi_sunatan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_agenda');
		$this->load->model('m_pengunjung');$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_daftar_online');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		//untuk Tambahan 
		$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['tot_pengumuman']=$this->db->get('tbl_pengumuman')->num_rows();
			$x['tot_daftar']=$this->db->get('tbl_daftar_online')->num_rows();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$jum=$this->m_agenda->agenda();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=7;
        $config['base_url'] = base_url() . 'agenda/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_agenda->agenda_perpage($offset,$limit);
		$this->load->view('depan/v_informasi_sunatan',$x);
	}

}
