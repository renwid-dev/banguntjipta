<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sukses extends CI_Controller {
	function __construct(){
		parent::__construct();
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
		// $this->load->library('pdf');
		$this->load->model('m_daftar_online');
	}

	public function index()
	{
		$data['daftar'] = $this->db->query("SELECT tbl_daftar_online.*,DATE_FORMAT(daftar_online_tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar_online ORDER BY daftar_online_id DESC LIMIT 1");
		$this->load->view('depan/v_sukses', $data);
	}

	public function cetakdaftar() {

		$data['daftar'] = $this->db->query("SELECT tbl_daftar_online.*,DATE_FORMAT(daftar_online_tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar_online ORDER BY daftar_online_id DESC LIMIT 1")->result_array();

		$dompdf = new Dompdf();
 
		$html = $this->load->view('depan/v_cetak_daftar',$data,true);

		$dompdf->load_html($html);

		$dompdf->set_paper('A4', 'landscape');

		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('pendaftaran-sunatan.pdf', array("Attachment" => false));

		// echo '<pre>';
		// var_dump($data);
		// echo '<pre>';

	}
}