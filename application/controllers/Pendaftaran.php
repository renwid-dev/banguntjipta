<?php
class Pendaftaran extends CI_Controller{
  function __construct(){
		parent::__construct();
		$this->load->model('m_daftar_online');
		$this->load->model('m_wilayah','model');
		$this->load->model('m_pengunjung');
		$this->load->library('upload');
		$this->load->library('email');
  		$this->m_pengunjung->count_visitor();
	}

   public function index()
   {
		$page=$this->uri->segment(3);
		$data['kodeunik'] = $this->m_daftar_online->buat_kode();
		$data['propinsi'] = $this->model->get_propinsi();
		$this->load->view('depan/v_pendaftaran', $data);
		  
		// echo '<pre>';
		// var_dump($data);
		// echo '<pre>';
   }
	
  	function send(){
        
        $to =  $this->input->post('email','nama_lengkap');  // User email pass here
        $subject = 'Pendaftaran Bangun Tjipta Sunatan';
        $from = 'admin@banguntjiptasunatan.com';  
 
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['protocol']    = 'sendmail';
        $config['smtp_host']    = 'ssl://mail.banguntjiptasunatan.com'; //smpt host
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '5';
    
        $config['smtp_user']    = 'admin@banguntjiptasunatan.com';    //Important
        $config['smtp_pass']    = '@Admin2018';  //Important
    
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
    
    
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html>
        
        <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta name="x-apple-disable-message-reformatting">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="telephone=no" name="format-detection">
            <title></title>
            <!--[if (mso 16)]>
            <style type="text/css">
            a {text-decoration: none;}
            </style>
            <![endif]-->
            <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
        </head>
        
        <body>
            <div class="es-wrapper-color">
                <!--[if gte mso 9]>
                    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                        <v:fill type="tile" color="#e8e8e4"></v:fill>
                    </v:background>
                <![endif]-->
                
                                <table class="es-header es-visible-amp-html-only es-mobile-hidden" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td class="es-adaptive esd-stripe esd-checked" align="center">
                                                <table class="es-header-body" style="background-image:url(http://www.banguntjiptasunatan.com/site/theme/images/);background-color: transparent; background-position: left top; background-repeat: no-repeat;" width="600" cellspacing="0" cellpadding="0" bgcolor="transparent" background="http://www.banguntjiptasunatan.com/site/theme/images/" align="center">
                                                    <tbody>
                                                        <tr>
                                                            <td class="esd-structure es-p25b es-p30r es-p30l" esd-general-paddings-checked="false" style="background-color: transparent;" bgcolor="transparent" align="left">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="esd-container-frame" width="540" valign="top" align="center">
                                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="esd-block-image es-p10r" align="center"><a target="_blank"><img class="adapt-img" src="http://www.banguntjiptasunatan.com/site/theme/images/slider-bts-1.png" alt="Horn of plenty" title="Horn of plenty" style="display: block;" width="530"></a></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="es-content es-mobile-hidden" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td class="esd-stripe" style="background-position: left top;" align="center">
                                                <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                    <tbody>
                                                        <tr>
                                                            <td class="esd-structure es-p20t es-p30r es-p30l" esd-general-paddings-checked="false" align="center">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="esd-container-frame" width="540" valign="top" align="center"><br>
                                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="esd-block-text es-p5r" align="center"><strong><h2> No Registrasi : '.$this->input->post('no_pendaftaran').'</h2></strong><br></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td><br>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <table border="1" width="100%" cellpadding="5" class="contact-form">
                        
                                                            <tr>
                                                                <td width="30%">Nama Lengkap</td>
                                                                <td width="70%">'.$this->input->post('nama_lengkap').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%">Tanggal Lahir</td>
                                                                <td width="70%">'.$this->input->post('tanggal_lahir').'</td>
                                                            </tr>
                                                            
                                                            <!--
                                                            <tr>
                                                                <td width="30%"> No Telp Darurat </td>
                                                                <td width="70%">'.$this->input->post('no_telp_darurat').'</td>
                                                            </tr>
                                                            -->
        
                                                            <tr>
                                                                <td width="30%"> Ukuran Kaos </td>
                                                                <td width="70%">'.$this->input->post('ukuran_baju').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Berat Badan </td>
                                                                <td width="70%">'.$this->input->post('berat_badan').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Tinggi Badan </td>
                                                                <td width="70%">'.$this->input->post('tinggi_badan').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Golongan Darah </td>
                                                                <td width="70%">'.$this->input->post('golongan_darah').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Memiliki Alergi </td>
                                                                <td width="70%">'.$this->input->post('memiliki_alergi').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Riwayat Alergi </td>
                                                                <td width="70%">'.$this->input->post('riwayat_alergi').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Nama Orang Tua </td>
                                                                <td width="70%">'.$this->input->post('nama_ortu').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Status Hubungan </td>
                                                                <td width="70%">'.$this->input->post('status_hubungan').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> NIK KTP </td>
                                                                <td width="70%">'.$this->input->post('nik_ktp').'</td>
                                                            </tr>

                                                            <tr>
                                                                <td width="30%"> Alamat </td>
                                                                <td width="70%">'.$this->input->post('alamat').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> No Telp Orang Tua / Wali / Ketua Kelompok </td>
                                                                <td width="70%">'.$this->input->post('no_telp_orangtua').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Email </td>
                                                                <td width="70%">'.$this->input->post('email').'</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td width="30%"> Rencana Sunat </td>
                                                                <td width="70%">'.$this->input->post('sesi').'</td>
                                                            </tr>
                                                            </table>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="es-content esd-footer-popover" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr></tr>
                                        <tr>
                                            <td class="esd-stripe" esd-custom-block-id="3511" align="center">
                                                <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                                    <tbody>
                                                        <tr>
                                                            <td class="esd-structure" esd-general-paddings-checked="false" align="left">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="esd-block-spacer" align="center">
                                                                                                <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td style="border-bottom: 4px solid rgb(204, 204, 204); background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="esd-structure es-p30t es-p30r es-p30l" esd-general-paddings-checked="false" align="left">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="esd-container-frame" width="540" valign="top" align="center"><br>
                                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="esd-block-image es-p10b" align="center"><a target="_blank" href="http://www.banguntjiptasunatan.com/site/assets/images/BTS-logo.png" class="rollover"><img class="adapt-img rollover-first" src="http://www.banguntjiptasunatan.com/site/assets/images/BTS-logo.png" alt="Bookkeeping logo" title="Bookkeeping logo" style="display: block;" width="115">
                                                                                                    <div style="mso-hide:all;"><img alt="Bookkeeping logo" title="Bookkeeping logo" class="adapt-img rollover-second" style="max-height:0px;display: none;" src="http://www.banguntjiptasunatan.com/site/assets/images/BTS-logo.png" width="115"></div>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="esd-block-text es-p15t es-p5b" align="center">
                                                                                                <p>© copyright 2019 | <a href="http://www.banguntjiptasunatan.com/">Bangun Tjipta Sunatan.</a> </p>
                                                                                                <p>Jl. Gatot Subroto Kav. 53-54, Jakarta Selatan</p>
                                                                                                <p>Jakarta Pusat<br></p>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="esd-block-social es-p10t es-p20b" align="center">
                                                                                                <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0">
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td class="es-p10r" valign="top" align="center"><a target="_blank" href><img title="Twitter" src="https://stripo.email/cabinet/assets/editor/assets/img/social-icons/square-gray/twitter-square-gray.png" alt="Tw" width="24" height="24"></a></td>
                                                                                                            <td class="es-p10r" valign="top" align="center"><a target="_blank" href><img title="Facebook" src="https://stripo.email/cabinet/assets/editor/assets/img/social-icons/square-gray/facebook-square-gray.png" alt="Fb" width="24" height="24"></a></td>
                                                                                                            <td class="es-p10r" valign="top" align="center"><a target="_blank" href><img title="Instagram" src="https://stripo.email/cabinet/assets/editor/assets/img/social-icons/square-gray/instagram-square-gray.png" alt="Ig" width="24" height="24"></a></td>
                                                                                                            <td valign="top" align="center"><a target="_blank" href><img title="Google+" src="https://stripo.email/cabinet/assets/editor/assets/img/social-icons/square-gray/google-plus-square-gray.png" alt="G+" width="24" height="24"></a></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </body>
        
        </html>');
                
            $this->email->cc('admin@banguntjiptasunatan.com');
            $this->email->bcc('admin@banguntjiptasunatan.com');
            $this->email->send();
        
		//Input file databases tmn
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

                    $photo=$gbr['file_name'];
                   
                    $nama_lengkap=strip_tags($this->input->post('nama_lengkap'));
                    $tanggal_lahir=strip_tags($this->input->post('tanggal_lahir'));
                    $agama=strip_tags($this->input->post('agama'));
                    $no_telp_darurat=strip_tags($this->input->post('no_telp_darurat'));
                    $ukuran_baju=strip_tags($this->input->post('ukuran_baju'));
                    $tingakat_sekolah=strip_tags($this->input->post('tingakat_sekolah'));
                    $alamat=strip_tags($this->input->post('alamat'));
                    $berat_badan=strip_tags($this->input->post('berat_badan'));
                    $tinggi_badan=strip_tags($this->input->post('tinggi_badan'));
                    $golongan_darah=strip_tags($this->input->post('golongan_darah'));
                    $memiliki_penyakit=strip_tags($this->input->post('memiliki_penyakit'));
                    $riwayat_penyakit=strip_tags($this->input->post('riwayat_penyakit'));
                    $memiliki_alergi=strip_tags($this->input->post('memiliki_alergi'));
                    $riwayat_alergi=strip_tags($this->input->post('riwayat_alergi'));
                    // $photo=strip_tags($this->input->post('filephoto'));
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

                    $this->m_daftar_online->daftar_online($nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingakat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$photo,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran);
                    redirect('sukses');
                    // echo '<pre>';
                    // print_r($config);
                    // echo '<pre>';
            }
        }else{
            $nama_lengkap=strip_tags($this->input->post('nama_lengkap'));
            $tanggal_lahir=strip_tags($this->input->post('tanggal_lahir'));
            $agama=strip_tags($this->input->post('agama'));
            $no_telp_darurat=strip_tags($this->input->post('no_telp_darurat'));
            $ukuran_baju=strip_tags($this->input->post('ukuran_baju'));
            $tingakat_sekolah=strip_tags($this->input->post('tingakat_sekolah'));
            $alamat=strip_tags($this->input->post('alamat'));
            $berat_badan=strip_tags($this->input->post('berat_badan'));
            $tinggi_badan=strip_tags($this->input->post('tinggi_badan'));
            $golongan_darah=strip_tags($this->input->post('golongan_darah'));
            $memiliki_penyakit=strip_tags($this->input->post('memiliki_penyakit'));
            $riwayat_penyakit=strip_tags($this->input->post('riwayat_penyakit'));
            $memiliki_alergi=strip_tags($this->input->post('memiliki_alergi'));
            $riwayat_alergi=strip_tags($this->input->post('riwayat_alergi'));
            // $photo=strip_tags($this->input->post('filephoto'));
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

            $this->m_daftar_online->daftar_online_no_img($nama_lengkap,$tanggal_lahir,$agama,$no_telp_darurat,$ukuran_baju,$tingakat_sekolah,$alamat,$berat_badan,$tinggi_badan,$golongan_darah,$memiliki_penyakit,$riwayat_penyakit,$memiliki_alergi,$riwayat_alergi,$nama_ortu,$status_hubungan,$nik_ktp,$no_telp_orangtua,$email,$pekerjaan,$gaji,$sesi,$kabupaten,$provinsi,$kelurahan,$kecamatan,$kode_pos,$no_pendaftaran);
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