<?php 
class M_daftar_online extends CI_Model{

		public function buat_kode(){
			$this->db->select('RIGHT(tbl_daftar_online.no_pendaftaran,4) as kode', FALSE);
			$this->db->order_by('no_pendaftaran','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('tbl_daftar_online');  
			if($query->num_rows() <> 0){      
		   
			$data = $query->row();      
			$kode = intval($data->kode) + 1;    
			}
			else {      
			$kode = 1;    
			}
			$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
			$kodejadi = "BTS51-1219-".$kodemax;
			return $kodejadi;  
		}

        function daftar_online($nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingkat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$photo,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran,$qr_code){
		$hsl=$this->db->query("INSERT INTO tbl_daftar_online (nama_lengkap,tanggal_lahir,agama,no_telp_darurat,ukuran_baju,tingkat_sekolah,alamat,berat_badan,tinggi_badan,golongan_darah,memiliki_penyakit,riwayat_penyakit,memiliki_alergi,riwayat_alergi,photo,nama_ortu,status_hubungan,nik_ktp,no_telp_orangtua,email,pekerjaan,gaji,sesi,kabupaten,provinsi,kelurahan,kecamatan,kode_pos,no_pendaftaran,qr_code) VALUES ('$nama_lengkap','$tanggal_lahir','$agama','$no_telp_darurat','$ukuran_baju','$tingkat_sekolah','$alamat','$berat_badan','$tinggi_badan','$golongan_darah','$memiliki_penyakit','$riwayat_penyakit','$memiliki_alergi','$riwayat_alergi','$photo','$nama_ortu','$status_hubungan','$nik_ktp','$no_telp_orangtua','$email','$pekerjaan','$gaji','$sesi','$kabupaten','$provinsi','$kelurahan','$kecamatan','$kode_pos','$no_pendaftaran','$qr_code')");
		return $hsl;
        }
        
        function daftar_online_no_img($nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingkat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran,$qr_code){
		$hsl=$this->db->query("INSERT INTO tbl_daftar_online (nama_lengkap,tanggal_lahir,agama,no_telp_darurat,ukuran_baju,tingkat_sekolah,alamat,berat_badan,tinggi_badan,golongan_darah,memiliki_penyakit,riwayat_penyakit,memiliki_alergi,riwayat_alergi,nama_ortu,status_hubungan,nik_ktp,no_telp_orangtua,email,pekerjaan,gaji,sesi,kabupaten,provinsi,kelurahan,kecamatan,kode_pos,no_pendaftaran,qr_code) VALUES ('$nama_lengkap','$tanggal_lahir','$agama','$no_telp_darurat','$ukuran_baju','$tingkat_sekolah','$alamat','$berat_badan','$tinggi_badan','$golongan_darah','$memiliki_penyakit','$riwayat_penyakit','$memiliki_alergi','$riwayat_alergi','$nama_ortu','$status_hubungan','$nik_ktp','$no_telp_orangtua','$email','$pekerjaan','$gaji','$sesi','$kabupaten','$provinsi','$kelurahan','$kecamatan','$kode_pos','$no_pendaftaran','$qr_code')");
		return $hsl;
        }

		function update_daftar_online($kode,$nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingkat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$photo,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran){
			$hsl=$this->db->query("UPDATE tbl_daftar_online SET nama_lengkap='$nama_lengkap',tanggal_lahir='$tanggal_lahir',agama='$agama',no_telp_darurat='$no_telp_darurat',ukuran_baju='$ukuran_baju',tingkat_sekolah='$tingkat_sekolah',alamat='$alamat',berat_badan='$berat_badan',tinggi_badan='$tinggi_badan',golongan_darah='$golongan_darah',memiliki_penyakit='$memiliki_penyakit',riwayat_penyakit='$riwayat_penyakit',memiliki_alergi='$memiliki_alergi',riwayat_alergi='$riwayat_alergi',photo='$photo',nama_ortu='$nama_ortu',status_hubungan='$status_hubungan',nik_ktp='$nik_ktp',no_telp_orangtua='$no_telp_orangtua',email='$email',pekerjaan='$pekerjaan',gaji='$gaji',sesi='$sesi',kabupaten='$kabupaten',provinsi='$provinsi',kelurahan='$kelurahan',kecamatan='$kecamatan',kode_pos='$kode_pos',no_pendaftaran='$no_pendaftaran' WHERE daftar_online_id='$kode'");
			return $hsl;
		}
		function update_daftar_online_tanpa_img($kode,$nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingkat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran){
			$hsl=$this->db->query("UPDATE tbl_daftar_online SET nama_lengkap='$nama_lengkap',tanggal_lahir='$tanggal_lahir',agama='$agama',no_telp_darurat='$no_telp_darurat',ukuran_baju='$ukuran_baju',tingkat_sekolah='$tingkat_sekolah',alamat='$alamat',berat_badan='$berat_badan',tinggi_badan='$tinggi_badan',golongan_darah='$golongan_darah',memiliki_penyakit='$memiliki_penyakit',riwayat_penyakit='$riwayat_penyakit',memiliki_alergi='$memiliki_alergi',riwayat_alergi='$riwayat_alergi',nama_ortu='$nama_ortu',status_hubungan='$status_hubungan',nik_ktp='$nik_ktp',no_telp_orangtua='$no_telp_orangtua',email='$email',pekerjaan='$pekerjaan',gaji='$gaji',sesi='$sesi',kabupaten='$kabupaten',provinsi='$provinsi',kelurahan='$kelurahan',kecamatan='$kecamatan',kode_pos='$kode_pos',no_pendaftaran='$no_pendaftaran' WHERE daftar_online_id='$kode'");
			return $hsl;
		}

		function get_all_daftar_online(){
			$hsl=$this->db->query("SELECT tbl_daftar_online.*,DATE_FORMAT(daftar_online_tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar_online ORDER BY daftar_online_id DESC");
			return $hsl;
		}

		function hapus_daftar_online($kode){
			$hsl=$this->db->query("DELETE FROM tbl_daftar_online WHERE daftar_online_id='$kode'");
			return $hsl;
		}

		function update_status_daftar_online(){
			$hsl=$this->db->query("UPDATE tbl_daftar_online SET daftar_online_status='0'");
			return $hsl;
		}

		public function get_propinsi()
		{
			$get = $this->db->get('dd_propinsi');
			return $get;
		}

		public function get_kota($propinsi)
		{
			$this->db->where('id_propinsi', $propinsi);
			$get = $this->db->get('dd_kota');
			return $get;
		}

		public function get_kecamatan($kota)
		{
			$this->db->where('id_kota', $kota);
			$get = $this->db->get('dd_kecamatan');
			return $get;
		}

		public function get_desa($kecamatan)
		{
			$this->db->where('id_kecamatan', $kecamatan);
			$get = $this->db->get('dd_desa');
			return $get;
		}

}