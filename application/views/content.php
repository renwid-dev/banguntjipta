<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pendaftaran berhasil</title>
    <link rel="shorcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
    <?php
        $this->load->view('depan/v_header');
    ?>
    <!--=========================== END HEADER ===========================-->

    <section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Informasi anda telah Kami terima</h2>
                </div>
            </div>
        </div>
        <div class="login-box">
            <div>
                <p><?php echo $this->session->flashdata('msg');?></p>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                    <center><strong>Terimakasih telah mendaftar dan kami akan selalu menjaga informasi demi kenyamanan anda!</strong></center><br>
                    <hr/>
                    <h3 align="center">Infomasi Details</h3>

                    <?php
                    $daftar=$this->db->query("SELECT tbl_daftar_online.*,DATE_FORMAT(daftar_online_tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar_online ORDER BY daftar_online_id DESC LIMIT 1");
                    foreach ($daftar->result_array() as $in) :
                        $daftar_online_id=$in['daftar_online_id'];
                        $nama_lengkap=$in['nama_lengkap'];
                        $tanggal_lahir=$in['tanggal_lahir'];
                        $agama=$in['agama']; 
                        $no_telp_darurat=$in['no_telp_darurat']; 
                        $ukuran_baju=$in['ukuran_baju']; 
                        $tingakat_sekolah=$in['tingakat_sekolah']; 
                        $berat_badan=$in['berat_badan']; 
                        $tinggi_badan=$in['tinggi_badan']; 
                        $golongan_darah=$in['golongan_darah']; 
                        $memiliki_penyakit=$in['memiliki_penyakit']; 
                        $riwayat_penyakit=$in['riwayat_penyakit']; 
                        $memiliki_alergi=$in['memiliki_alergi']; 
                        $riwayat_alergi=$in['riwayat_alergi']; 
                        $nama_ortu=$in['nama_ortu']; 
                        $status_hubungan=$in['status_hubungan']; 
                        $nik_ktp=$in['nik_ktp']; 
                        $no_telp_orangtua=$in['no_telp_orangtua']; 
                        $email=$in['email']; 
                        $pekerjaan=$in['pekerjaan']; 
                        $gaji=$in['gaji']; 
                        $sesi=$in['sesi']; 
                        $kabupaten=$in['kabupaten']; 
                        $provinsi=$in['provinsi']; 
                        $kelurahan=$in['kelurahan']; 
                        $kecamatan=$in['kecamatan']; 
                        $kode_pos=$in['kode_pos']; 
                    ?>

                    <table border="1" width="100%" cellpadding="5">

                    <tr>
                        <td width="30%">Name</td>
                        <td width="70%">.'$this->input->post('nama_lengkap')'.</td>
                    </tr>

                    <tr>
                        <td width="30%">Tanggal Lahir</td>
                        <td width="70%">.'$this->input->post('tanggal_lahir')'.</td>
                    </tr>

                    <tr>
                        <td width="30%">Agama</td>
                        <td width="70%">.'$this->input->post('agama')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> No Telp Darurat </td>
                        <td width="70%">.'$this->input->post('no_telp_darurat')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Ukuran Baju </td>
                        <td width="70%">.'$this->input->post('ukuran_baju')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Tingkat Pendidikan </td>
                        <td width="70%">.'$this->input->post('tingakat_sekolah')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Berat Badan </td>
                        <td width="70%">.'$this->input->post('berat_badan')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Tinggi Badan </td>
                        <td width="70%">.'$this->input->post('tinggi_badan')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Golongan Darah </td>
                        <td width="70%">.'$this->input->post('golongan_darah')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Memiliki Penyakit </td>
                        <td width="70%">.'$this->input->post('memiliki_penyakit')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Riwayat Penyakit </td>
                        <td width="70%">.'$this->input->post('riwayat_penyakit')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Memiliki Alergi </td>
                        <td width="70%">.'$this->input->post('memiliki_alergi')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Riwayat Alergi </td>
                        <td width="70%">.'$this->input->post('riwayat_alergi')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Nama Orang Tua </td>
                        <td width="70%">.'$this->input->post('nama_ortu')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Status Hubungan </td>
                        <td width="70%">.'$this->input->post('status_hubungan')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> NIK KTP </td>
                        <td width="70%">.'$this->input->post('nik_ktp')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> No Telp Orang Tua </td>
                        <td width="70%">.'$this->input->post('no_telp_orangtua')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Email / No. Whatsapp / No. Handphone </td>
                        <td width="70%">.'$this->input->post('email')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Pekerjaan </td>
                        <td width="70%">.'$this->input->post('pekerjaan')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Pendapatan </td>
                        <td width="70%">.'$this->input->post('gaji')'.</td>
                    </tr>

                    <tr>
                        <td width="30%"> Rencana Sunat </td>
                        <td width="70%">.'$this->input->post('sesi')'.</td>
                    </tr>

                    </table>
                    <?php endforeach;?>
                    <p><center><a href="<?php echo base_url('')?>">Back to home?</a></center></p>
                </div>
            <!-- /.login-box-body -->
            </div>
        <div class="row">
            <div class="col-md-12">
                <p class="contact-center"><a href="<?php echo base_url('')?>">BTS</a></p>
            </div>
        </div>
    </div>
    </section>
    <!--//END  ABOUT IMAGE -->
    <!--============================= FOOTER =============================-->
    <?php
            $this->load->view('depan/v_footer');
        ?>
    <!--=========================== END FOOTER ===========================-->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
    <!-- Subscribe / Contact-->
    <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
</body>

</html>