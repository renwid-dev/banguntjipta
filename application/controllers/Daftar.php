<?php
class Daftar extends CI_Controller{
  function __construct(){
		parent::__construct();
		$this->load->model('m_daftar_online');
		$this->load->model('m_wilayah','model');
		$this->load->model('m_pengunjung');
		$this->load->library('upload');
		$this->load->library('form_validation');
  		$this->m_pengunjung->count_visitor();
	}

   public function index()
   {
		$page=$this->uri->segment(3);
		  $data['propinsi'] = $this->model->get_propinsi();
		$this->load->view('depan/v_daftar', $data);
		  
		// echo '<pre>';
		// var_dump($data);
		// echo '<pre>';
   }

   public function get_kota()
   {
      $propinsi = $_GET['propinsi'];

         $arr_data = array(
            'id_propinsi' => $propinsi
         );

         $get_kabkota = $this->model->get_kota($propinsi)->result();

         $arr_kabkota = array();
         foreach($get_kabkota as $row)
         {
            $arr_kabkota[$row->id_kota] = $row->nama;
         }

         $json = json_encode($arr_kabkota);
         echo $json;
   }

   public function get_kecamatan()
   {
      $kota = $_GET['kota'];

         $arr_data = array(
            'id_kota' => $kota
         );

         $get_kecamatan = $this->model->get_kecamatan($kota)->result();

         $arr_kecamatan = array();
         foreach($get_kecamatan as $row)
         {
            $arr_kecamatan[$row->id] = $row->nama;
         }

         $json = json_encode($arr_kecamatan);
         echo $json;
   }

   public function get_desa()
   {
      $kecamatan = $_GET['kecamatan'];

         $arr_data = array(
            'id_kecamatan' => $kecamatan
         );

         $get_desa = $this->model->get_desa($kecamatan)->result();

         $arr_desa = array();
         foreach($get_desa as $row)
         {
            $arr_desa[$row->id] = $row->nama;
         }

         $json = json_encode($arr_desa);
         echo $json;
   }
	
  	function send(){
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	  $this->upload->initialize($config);
	  if(!empty($_FILES['filefoto']['name']))
	  {
		  if ($this->upload->do_upload('filefoto'))
		  {
					$gbr = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/images/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '60%';
					$config['width']= 500;
					$config['height']= 400;
					$config['new_image']= './assets/images/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$foto=$gbr['file_name'];
				  	$nama_lengkap=htmlspecialchars($this->input->post('nama_lengkap',TRUE),ENT_QUOTES);
					$tanggal_lahir=htmlspecialchars($this->input->post('tanggal_lahir',TRUE),ENT_QUOTES);
					$agama=htmlspecialchars($this->input->post('agama',TRUE),ENT_QUOTES);
					$no_telp_darurat=htmlspecialchars($this->input->post('no_telp_darurat',TRUE),ENT_QUOTES);
					$ukuran_baju=htmlspecialchars($this->input->post('ukuran_baju',TRUE),ENT_QUOTES);
					$tingakat_sekolah=htmlspecialchars($this->input->post('tingakat_sekolah',TRUE),ENT_QUOTES);
					$alamat=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
					$berat_badan=htmlspecialchars($this->input->post('berat_badan',TRUE),ENT_QUOTES);
					$tinggi_badan=htmlspecialchars($this->input->post('tinggi_badan',TRUE),ENT_QUOTES);
					$golongan_darah=htmlspecialchars($this->input->post('golongan_darah',TRUE),ENT_QUOTES);
					$memiliki_penyakit=htmlspecialchars($this->input->post('memiliki_penyakit',TRUE),ENT_QUOTES);
					$riwayat_penyakit=htmlspecialchars($this->input->post('riwayat_penyakit',TRUE),ENT_QUOTES);
					$memiliki_alergi=htmlspecialchars($this->input->post('memiliki_alergi',TRUE),ENT_QUOTES);
					$riwayat_alergi=htmlspecialchars($this->input->post('riwayat_alergi',TRUE),ENT_QUOTES);
					// $foto=htmlspecialchars($this->input->post('foto',TRUE),ENT_QUOTES);
					$nama_ortu=htmlspecialchars($this->input->post('nama_ortu',TRUE),ENT_QUOTES);
					$status_hubungan=htmlspecialchars($this->input->post('status_hubungan',TRUE),ENT_QUOTES);
					$nik_ktp=htmlspecialchars($this->input->post('nik_ktp',TRUE),ENT_QUOTES);
					$no_telp_orangtua=htmlspecialchars($this->input->post('no_telp_orangtua',TRUE),ENT_QUOTES);
					$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
					$pekerjaan=htmlspecialchars($this->input->post('pekerjaan',TRUE),ENT_QUOTES);
					$gaji=htmlspecialchars($this->input->post('gaji',TRUE),ENT_QUOTES);
					$sesi=htmlspecialchars($this->input->post('sesi',TRUE),ENT_QUOTES);
					$kabupaten=htmlspecialchars($this->input->post('kabupaten',TRUE),ENT_QUOTES);
					$provinsi=htmlspecialchars($this->input->post('provinsi',TRUE),ENT_QUOTES);
					$kelurahan=htmlspecialchars($this->input->post('kelurahan',TRUE),ENT_QUOTES);
					$kecamatan=htmlspecialchars($this->input->post('kecamatan',TRUE),ENT_QUOTES);
					$kode_pos=htmlspecialchars($this->input->post('kode_pos',TRUE),ENT_QUOTES);

				  	$this->m_daftar_online->daftar_online($nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingakat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$foto,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos);
					redirect('sukses');	
		  	}else{
				echo $this->session->set_flashdata('msg','Peringatan!!!');
				redirect('sukses');
			}
			
		}else{
		
		$nama_lengkap=htmlspecialchars($this->input->post('nama_lengkap',TRUE),ENT_QUOTES);
		$tanggal_lahir=htmlspecialchars($this->input->post('tanggal_lahir',TRUE),ENT_QUOTES);
		$agama=htmlspecialchars($this->input->post('agama',TRUE),ENT_QUOTES);
		$no_telp_darurat=htmlspecialchars($this->input->post('no_telp_darurat',TRUE),ENT_QUOTES);
		$ukuran_baju=htmlspecialchars($this->input->post('ukuran_baju',TRUE),ENT_QUOTES);
		$tingakat_sekolah=htmlspecialchars($this->input->post('tingakat_sekolah',TRUE),ENT_QUOTES);
		$alamat=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
		$berat_badan=htmlspecialchars($this->input->post('berat_badan',TRUE),ENT_QUOTES);
		$tinggi_badan=htmlspecialchars($this->input->post('tinggi_badan',TRUE),ENT_QUOTES);
		$golongan_darah=htmlspecialchars($this->input->post('golongan_darah',TRUE),ENT_QUOTES);
		$memiliki_penyakit=htmlspecialchars($this->input->post('memiliki_penyakit',TRUE),ENT_QUOTES);
		$riwayat_penyakit=htmlspecialchars($this->input->post('riwayat_penyakit',TRUE),ENT_QUOTES);
		$memiliki_alergi=htmlspecialchars($this->input->post('memiliki_alergi',TRUE),ENT_QUOTES);
		$riwayat_alergi=htmlspecialchars($this->input->post('riwayat_alergi',TRUE),ENT_QUOTES);
		$nama_ortu=htmlspecialchars($this->input->post('nama_ortu',TRUE),ENT_QUOTES);
		$status_hubungan=htmlspecialchars($this->input->post('status_hubungan',TRUE),ENT_QUOTES);
		$nik_ktp=htmlspecialchars($this->input->post('nik_ktp',TRUE),ENT_QUOTES);
		$no_telp_orangtua=htmlspecialchars($this->input->post('no_telp_orangtua',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$pekerjaan=htmlspecialchars($this->input->post('pekerjaan',TRUE),ENT_QUOTES);
		$gaji=htmlspecialchars($this->input->post('gaji',TRUE),ENT_QUOTES);
		$sesi=htmlspecialchars($this->input->post('sesi',TRUE),ENT_QUOTES);
		$kabupaten=htmlspecialchars($this->input->post('kabupaten',TRUE),ENT_QUOTES);
		$provinsi=htmlspecialchars($this->input->post('provinsi',TRUE),ENT_QUOTES);
		$kelurahan=htmlspecialchars($this->input->post('kelurahan',TRUE),ENT_QUOTES);
		$kecamatan=htmlspecialchars($this->input->post('kecamatan',TRUE),ENT_QUOTES);
		$kode_pos=htmlspecialchars($this->input->post('kode_pos',TRUE),ENT_QUOTES);

		$this->m_daftar_online->daftar_online_no_img($nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingakat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos);
		redirect('sukses');

	}		
	
		
  	}

	function googleCaptachStore(){
       
		$data = array('nama_lengkap' => $this->input->post('nama_lengkap'),
					'email' => $this->input->post('email')
					);
		
		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
		
		$secret='6LfI_8AUAAAAAP4ktpSYO6oUYP_ny5Bv2PTwlZk3';
		
		$credential = array(
			'secret' => $secret,
			'response' => $this->input->post('g-recaptcha-response')
		);

		$verify = curl_init();
		curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($verify, CURLOPT_POST, true);
		curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
		curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($verify);

		$status= json_decode($response, true);
		
		if($status['success']){ 
		$this->db->insert('users',$data); 
		$this->session->set_flashdata('message', 'Google Recaptcha Successful');
		}else{
		$this->session->set_flashdata('message', 'Sorry Google Recaptcha Unsuccessful!!');
		}
		redirect(base_url('daftar'));
	}

	
}