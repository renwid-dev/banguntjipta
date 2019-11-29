<?php
class Daftar_online extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
		};
		$this->load->library('upload');
		$this->load->model('m_daftar_online');
	}

	function index(){
		$x['kodeunik'] = $this->m_daftar_online->buat_kode();
		$x['data']=$this->m_daftar_online->get_all_daftar_online();
		$this->load->view('admin/v_daftar_online',$x);
	}

	function simpan_daftar(){
				
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
					$config['width']= 300;
					$config['height']= 300;
					$config['new_image']= './assets/images/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$this->load->library('ciqrcode'); //pemanggilan library QR CODE

					$config['cacheable']	= true; //boolean, the default is true
					$config['cachedir']		= './assets/'; //string, the default is application/cache/
					$config['errorlog']		= './assets/'; //string, the default is application/logs/
					$config['imagedir']		= './assets/images/'; //direktori penyimpanan qr code
					$config['quality']		= true; //boolean, the default is true
					$config['size']			= '1024'; //interger, the default is 1024
					$config['black']		= array(224,255,255); // array, default is array(255,255,255)
					$config['white']		= array(70,130,180); // array, default is array(0,0,0)
					$this->ciqrcode->initialize($config);

					$qr_code=$no_pendaftaran.'.png'; //buat name dari qr code sesuai dengan nim

					$params['data'] = $no_pendaftaran; //data yang akan di jadikan QR CODE
					$params['level'] = 'H'; //H=High
					$params['size'] = 10;
					$params['savename'] = FCPATH.$config['imagedir'].$qr_code; //simpan image QR CODE ke folder assets/images/
					$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

					$photo=$gbr['file_name'];
					$nama_lengkap=strip_tags($this->input->post('nama_lengkap'));
					$tanggal_lahir=strip_tags($this->input->post('tanggal_lahir'));
					$agama=strip_tags($this->input->post('agama'));
					$no_telp_darurat=strip_tags($this->input->post('no_telp_darurat'));
					$ukuran_baju=strip_tags($this->input->post('ukuran_baju'));
					$tingkat_sekolah=strip_tags($this->input->post('tingkat_sekolah'));
					$alamat=strip_tags($this->input->post('alamat'));
					$berat_badan=strip_tags($this->input->post('berat_badan'));
					$tinggi_badan=strip_tags($this->input->post('tinggi_badan'));
					$golongan_darah=strip_tags($this->input->post('golongan_darah'));
					$memiliki_penyakit=strip_tags($this->input->post('memiliki_penyakit'));
					$riwayat_penyakit=strip_tags($this->input->post('riwayat_penyakit'));
					$memiliki_alergi=strip_tags($this->input->post('memiliki_alergi'));
					$riwayat_alergi=strip_tags($this->input->post('riwayat_alergi'));
					$nama_ortu=strip_tags($this->input->post('nama_ortu'));
					$status_hubungan=strip_tags($this->input->post('status_hubungan'));
					$nik_ktp=strip_tags($this->input->post('nik_ktp'));
					$no_telp_orangtua=strip_tags($this->input->post('no_telp_orangtua'));
					$email=strip_tags($this->input->post('email'));
					$pekerjaan=strip_tags($this->input->post('pekerjaan'));
					$gaji=strip_tags($this->input->post('gaji'));
					$sesi=strip_tags($this->input->post('sesi'));
					$kabupaten=strip_tags($this->input->post('kabupaten'));
					$provinsi=strip_tags($this->input->post('provinsi'));
					$kelurahan=strip_tags($this->input->post('kelurahan'));
					$kecamatan=strip_tags($this->input->post('kecamatan'));
					$kode_pos=strip_tags($this->input->post('kode_pos'));
					$no_pendaftaran=strip_tags($this->input->post('no_pendaftaran'));

					$this->m_daftar_online->daftar_online($nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingakat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$photo,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran,$qr_code);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/daftar_online');

					// echo '<pre>';
					// print_r($config);
					// echo '<pre>';
				
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/daftar_online');
			}
			
		}else{
			$this->load->library('ciqrcode'); //pemanggilan library QR CODE

			$config['cacheable']	= true; //boolean, the default is true
			$config['cachedir']		= './assets/'; //string, the default is application/cache/
			$config['errorlog']		= './assets/'; //string, the default is application/logs/
			$config['imagedir']		= './assets/images/'; //direktori penyimpanan qr code
			$config['quality']		= true; //boolean, the default is true
			$config['size']			= '1024'; //interger, the default is 1024
			$config['black']		= array(224,255,255); // array, default is array(255,255,255)
			$config['white']		= array(70,130,180); // array, default is array(0,0,0)
			$this->ciqrcode->initialize($config);

			$qr_code=$no_pendaftaran.'.png'; //buat name dari qr code sesuai dengan nim

			$params['data'] = $no_pendaftaran; //data yang akan di jadikan QR CODE
			$params['level'] = 'H'; //H=High
			$params['size'] = 5;
			$params['savename'] = FCPATH.$config['imagedir'].$qr_code; //simpan image QR CODE ke folder assets/images/
			$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
			
					$nama_lengkap=strip_tags($this->input->post('nama_lengkap'));
					$tanggal_lahir=strip_tags($this->input->post('tanggal_lahir'));
					$agama=strip_tags($this->input->post('agama'));
					$no_telp_darurat=strip_tags($this->input->post('no_telp_darurat'));
					$ukuran_baju=strip_tags($this->input->post('ukuran_baju'));
					$tingkat_sekolah=strip_tags($this->input->post('tingkat_sekolah'));
					$alamat=strip_tags($this->input->post('alamat'));
					$berat_badan=strip_tags($this->input->post('berat_badan'));
					$tinggi_badan=strip_tags($this->input->post('tinggi_badan'));
					$golongan_darah=strip_tags($this->input->post('golongan_darah'));
					$memiliki_penyakit=strip_tags($this->input->post('memiliki_penyakit'));
					$riwayat_penyakit=strip_tags($this->input->post('riwayat_penyakit'));
					$memiliki_alergi=strip_tags($this->input->post('memiliki_alergi'));
					$riwayat_alergi=strip_tags($this->input->post('riwayat_alergi'));
					$nama_ortu=strip_tags($this->input->post('nama_ortu'));
					$status_hubungan=strip_tags($this->input->post('status_hubungan'));
					$nik_ktp=strip_tags($this->input->post('nik_ktp'));
					$no_telp_orangtua=strip_tags($this->input->post('no_telp_orangtua'));
					$email=strip_tags($this->input->post('email'));
					$pekerjaan=strip_tags($this->input->post('pekerjaan'));
					$gaji=strip_tags($this->input->post('gaji'));
					$sesi=strip_tags($this->input->post('sesi'));
					$kabupaten=strip_tags($this->input->post('kabupaten'));
					$provinsi=strip_tags($this->input->post('provinsi'));
					$kelurahan=strip_tags($this->input->post('kelurahan'));
					$kecamatan=strip_tags($this->input->post('kecamatan'));
					$kode_pos=strip_tags($this->input->post('kode_pos'));
					$no_pendaftaran=strip_tags($this->input->post('no_pendaftaran'));

					$this->m_daftar_online->daftar_online_no_img($nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingakat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran,$qr_code);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/daftar_online');
		} 

	}

	function update_daftar_online(){
				
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
						$config['width']= 300;
						$config['height']= 300;
						$config['new_image']= './assets/images/'.$gbr['file_name'];
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
						$gambar=$this->input->post('gambar');
						$path='./assets/images/'.$gambar;
						// unlink($path);

						$photo=$gbr['file_name'];
						$kode=$this->input->post('kode');
						$nama_lengkap=strip_tags($this->input->post('nama_lengkap'));
						$tanggal_lahir=strip_tags($this->input->post('tanggal_lahir'));
						$agama=strip_tags($this->input->post('agama'));
						$no_telp_darurat=strip_tags($this->input->post('no_telp_darurat'));
						$ukuran_baju=strip_tags($this->input->post('ukuran_baju'));
						$tingkat_sekolah=strip_tags($this->input->post('tingkat_sekolah'));
						$alamat=strip_tags($this->input->post('alamat'));
						$berat_badan=strip_tags($this->input->post('berat_badan'));
						$tinggi_badan=strip_tags($this->input->post('tinggi_badan'));
						$golongan_darah=strip_tags($this->input->post('golongan_darah'));
						$memiliki_penyakit=strip_tags($this->input->post('memiliki_penyakit'));
						$riwayat_penyakit=strip_tags($this->input->post('riwayat_penyakit'));
						$memiliki_alergi=strip_tags($this->input->post('memiliki_alergi'));
						$riwayat_alergi=strip_tags($this->input->post('riwayat_alergi'));
						$nama_ortu=strip_tags($this->input->post('nama_ortu'));
						$status_hubungan=strip_tags($this->input->post('status_hubungan'));
						$nik_ktp=strip_tags($this->input->post('nik_ktp'));
						$no_telp_orangtua=strip_tags($this->input->post('no_telp_orangtua'));
						$email=strip_tags($this->input->post('email'));
						$pekerjaan=strip_tags($this->input->post('pekerjaan'));
						$gaji=strip_tags($this->input->post('gaji'));
						$sesi=strip_tags($this->input->post('sesi'));
						$kabupaten=strip_tags($this->input->post('kabupaten'));
						$provinsi=strip_tags($this->input->post('provinsi'));
						$kelurahan=strip_tags($this->input->post('kelurahan'));
						$kecamatan=strip_tags($this->input->post('kecamatan'));
						$kode_pos=strip_tags($this->input->post('kode_pos'));
						$no_pendaftaran=strip_tags($this->input->post('no_pendaftaran'));

						$this->m_daftar_online->update_daftar_online($kode,$nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingakat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$photo,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran,$qr_code);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/daftar_online');

						// echo '<pre>';
                    	// print_r($config);
						// echo '<pre>';
					
				}else{
					echo $this->session->set_flashdata('msg','warning');
					redirect('admin/daftar_online');
				}
				
			}else{
						$kode=$this->input->post('kode');
						$nama_lengkap=strip_tags($this->input->post('nama_lengkap'));
						$tanggal_lahir=strip_tags($this->input->post('tanggal_lahir'));
						$agama=strip_tags($this->input->post('agama'));
						$no_telp_darurat=strip_tags($this->input->post('no_telp_darurat'));
						$ukuran_baju=strip_tags($this->input->post('ukuran_baju'));
						$tingkat_sekolah=strip_tags($this->input->post('tingkat_sekolah'));
						$alamat=strip_tags($this->input->post('alamat'));
						$berat_badan=strip_tags($this->input->post('berat_badan'));
						$tinggi_badan=strip_tags($this->input->post('tinggi_badan'));
						$golongan_darah=strip_tags($this->input->post('golongan_darah'));
						$memiliki_penyakit=strip_tags($this->input->post('memiliki_penyakit'));
						$riwayat_penyakit=strip_tags($this->input->post('riwayat_penyakit'));
						$memiliki_alergi=strip_tags($this->input->post('memiliki_alergi'));
						$riwayat_alergi=strip_tags($this->input->post('riwayat_alergi'));
						$nama_ortu=strip_tags($this->input->post('nama_ortu'));
						$status_hubungan=strip_tags($this->input->post('status_hubungan'));
						$nik_ktp=strip_tags($this->input->post('nik_ktp'));
						$no_telp_orangtua=strip_tags($this->input->post('no_telp_orangtua'));
						$email=strip_tags($this->input->post('email'));
						$pekerjaan=strip_tags($this->input->post('pekerjaan'));
						$gaji=strip_tags($this->input->post('gaji'));
						$sesi=strip_tags($this->input->post('sesi'));
						$kabupaten=strip_tags($this->input->post('kabupaten'));
						$provinsi=strip_tags($this->input->post('provinsi'));
						$kelurahan=strip_tags($this->input->post('kelurahan'));
						$kecamatan=strip_tags($this->input->post('kecamatan'));
						$kode_pos=strip_tags($this->input->post('kode_pos'));
						$no_pendaftaran=strip_tags($this->input->post('no_pendaftaran'));

						$this->m_daftar_online->update_daftar_online_tanpa_img($kode,$nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingakat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran,$qr_code);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/daftar_online');
			} 

	}

	function hapus_daftar_online(){
		$kode=$this->input->post('kode');
		$this->m_daftar_online->hapus_daftar_online($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/daftar_online');
	}
	
}