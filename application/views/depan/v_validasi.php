<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Validasi Register</title>
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

    <section class="contact" class="image-container set-full-height" style="background-image: url('theme/images/body.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>No Registrasi : </h2>
                </div>
            </div>
        </div>
        <div class="login-box">
            <div>
                <p><?php echo $this->session->flashdata('msg');?></p>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                    <hr/>
                    <?php 
                    $cek = $this->db->query("SELECT * FROM tbl_daftar_online WHERE no_pendaftaran");
                    if($cek){
                        ?>
                        <div class="alert alert-danger">
                            <center>
                            <strong>Maaf, Data tidak ditemukan..!</strong><br>
                            <i>Silahkan scan ulang QR Code anda!</i>
                            </center>
                        </div>
                        <?php
                    }else{
                    ?>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>NPM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Program Studi</th>
                            <th>Tanggal Lulus</th>
                            <th>Nomor Ijazah</th>
                            <th>IPK</th>
                        </tr>
                        <tr>
                            <td><?php echo $no_pendaftaran; ?></td>
                        </tr>
                    </table>
                    <?php } ?>

                    <br>
                    <div class="col-md-12 text-center">
                        <a href="<?php echo base_url().'sukses/cetakdaftar'; ?>" class="btn btn-danger btn-courses" target="_blank">Print</a>
                    </div><br>
                    
                </div>
            <!-- /.login-box-body -->
            </div>
    </div>
    </section>
    <!--//END  ABOUT IMAGE -->

    <?php
        $this->load->view('depan/v_footer');
    ?>
   
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