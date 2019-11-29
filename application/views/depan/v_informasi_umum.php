<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Informasi Umum</title>
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
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
   <!--============================= HEADER =============================-->
   <?php
        $this->load->view('depan/v_header');
    ?>
    <!--=========================== AND HEADER ===========================-->
<!--//END HEADER -->
<!--//END ABOUT IMAGE -->
<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Sunatan Massal Bangun Tjipta</h2>
                    <p>Sunatan Massal Bangun Tjipta
                    <br>
                    1.Tujuan
                    <br>
                    2.Jadwal
                    <br>
                    Sabtu, 21 Desember 2019
                    <br>
                    3.Lokasi
                    <br>
                    Gedung Bangun Tjipta & JDC
                    <br>
                    4.Fasilitas/Gift dll
                    <br>
                    5.Cara Daftar (mekanisme daftar)
                    <br>
                    6.Daftar ONLINE</p>
                </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url().'assets/images/BTS-anak.png'?>" class="img-fluid" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= TESTIMONIAL =============================-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonial</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                            <div class="testi-img_block">
                                <!-- <img src="<?php echo base_url().'theme/images/student-1.png'?>" class="img-fluid" alt="#"> -->
                                <!-- <p><span>Hernandez Alvaro</span>Siswa Terbaik 2018</p> -->
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                            <div class="testi-img_block">
                                <!-- <img src="<?php echo base_url().'theme/images/student-2.png'?>" class="img-fluid" alt="#"> -->
                                <!-- <p><span>Elanoar Rigby</span>Siswa Terbaik 2017</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END TESTIMONIAL -->
    <!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_pengumuman;?></span> Fasilitan
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_daftar;?></span> Pendaftaran
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_files;?></span> Download
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_4.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda;?></span> Tanggal Event</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END DETAILED CHART -->

        <!--============================= FOOTER =============================-->
        <?php
            $this->load->view('depan/v_footer');
        ?>
        <!--=========================== END FOOTER ===========================-->
                <!--//END FOOTER -->
                <!-- jQuery, Bootstrap JS. -->
                <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
                <!-- Plugins -->
                <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
                <!-- Subscribe -->
                <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
                <!-- Script JS -->
                <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            </body>

            </html>
