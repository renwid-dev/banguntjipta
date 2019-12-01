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

    <section class="contact" class="image-container set-full-height" style="background-image: url('theme/images/body.png')">
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
                    <center><strong>Konfirmasi pendaftaran akan dikirim ke email masing-masing peserta. Jika email tidak masuk inbox harap cek folder spam pada email anda.</strong></center>
                    <hr/>
                    <h3 align="center">Informasi Detail</h3>

                    <?php
                    
                    foreach ($daftar->result_array() as $in) :
                        $id=$in['daftar_online_id'];
                        $nama_lengkap=$in['nama_lengkap'];
                        $tanggal_lahir=$in['tanggal_lahir'];
                        $agama=$in['agama']; 
                        $no_telp_darurat=$in['no_telp_darurat']; 
                        $ukuran_baju=$in['ukuran_baju']; 
                        $tingkat_sekolah=$in['tingkat_sekolah']; 
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
                        $alamat=$in['alamat']; 
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
                        $no_pendaftaran=$in['no_pendaftaran']; 
                        $qr_code=$in['qr_code'];
                    ?><center><h2><strong>
                    No Pendaftaran : <img style="width: 50px;" src="<?php echo base_url().'assets/qrcodes/'.$qr_code; ?>" alt=""> <?php echo $no_pendaftaran; ?></strong></h2></center>
                    <table border="1" width="100%" cellpadding="5" class="contact-form">

                    <tr>
                        <td width="30%">Nama Lengkap</td>
                        <td width="70%"><?php echo $nama_lengkap;?></td>
                    </tr>

                    <tr>
                        <td width="30%">Tanggal Lahir</td>
                        <td width="70%"><?php echo $tanggal_lahir;?></td>
                    </tr>
                    
                    <tr>
                        <td width="30%"> Ukuran Kaos </td>
                        <td width="70%"><?php echo $ukuran_baju;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Berat Badan </td>
                        <td width="70%"><?php echo $berat_badan;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Tinggi Badan </td>
                        <td width="70%"><?php echo $tinggi_badan;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Golongan Darah </td>
                        <td width="70%"><?php echo $golongan_darah;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Memiliki Alergi </td>
                        <td width="70%"><?php echo $memiliki_alergi;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Riwayat Alergi </td>
                        <td width="70%"><?php echo $riwayat_alergi;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Nama Orang Tua </td>
                        <td width="70%"><?php echo $nama_ortu;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Status Hubungan </td>
                        <td width="70%"><?php echo $status_hubungan;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> NIK KTP </td>
                        <td width="70%"><?php echo $nik_ktp;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Alamat </td>
                        <td width="70%"><?php echo $alamat;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> No Telp Orang Tua/Wali/Ketu Kelompok </td>
                        <td width="70%"><?php echo $no_telp_orangtua;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Email / No. Whatsapp / No. Handphone </td>
                        <td width="70%"><?php echo $email;?></td>
                    </tr>

                    <tr>
                        <td width="30%"> Rencana Sunat </td>
                        <td width="70%"><?php echo $sesi;?></td>
                    </tr>

                    </table>
                    <?php endforeach;?>
                    <br>
                    <div class="col-md-12 text-center">
                        <a href="<?php echo base_url().'sukses/cetakdaftar'; ?>" class="btn btn-danger btn-courses" target="_blank">Print</a>
                    </div><br>
                    <!-- Menu Button Kembali -->
                    <div class="col-md-12 text-center">
                        <a href="http://www.banguntjiptasunatan.com/site/home" class="btn btn-danger btn-courses">Kembali Ke Beranda</a>
                    </div><br>
                    <!-- End Menu Button Kembali -->
                    
                </div>
            <!-- /.login-box-body -->
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
    <!-- <script>
        window.print();
    </script> -->
</body>

</html>