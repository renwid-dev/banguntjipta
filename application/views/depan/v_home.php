<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bangun Tjipta Sunatan</title>
    <link rel="shorcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>

</head>
    <!-- mengatur tombol Daftar Yukk -->
    <style media="screen">
        .button{
            width: 100%;
            height: 100px;
        }
        .left{
            float: left;
            display: block;
        }
        .right{
            float: right;
            position: relative;
            top: 100px;
            left: 0px;
            border: 3px solid #543535;
            display: block;
        }
        .button ul a{
            padding: 10px;
            background: rgb(116, 181, 12);
        color: white;
        }
    </style>
    <!-- End mengatur tombol Daftar Yukk -->

<body>
    <!--============================= HEADER =============================-->
    <?php
        $this->load->view('depan/v_header');
    ?>
    <!--=========================== END HEADER ===========================-->
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                
                <div class="carousel-item active">
                    <img class="d-block" alt="Gambar" width="100%" height="100%" src="<?php echo base_url().'theme/images/slider-bts-1.png'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <!--<h1>Lorem Ipsum</h1>
                            <h4>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing <br> industries for previewing layouts and visual mockups.</h4> -->
                            <div class="slider-btn">
                                <a href="<?php echo site_url('pendaftaran');?>" style="border-radius:30px;" class="btn btn-danger right"><strong><h4>Daftar Yukk</h4></strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="carousel-item">
                    <img class="d-block" alt="Gambar" width="100%" height="100%" src="<?php echo base_url().'theme/images/Infographic.png'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <!--<h1>Lorem Ipsum</h1>
                            <h4>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing <br> industries for previewing layouts and visual mockups.</h4> -->
                            <!--<div class="slider-btn">
                                <a href="<?php echo site_url('guru');?>" class="btn btn-default">Learn more</a> 
                            </div>-->
                        </div>
                    </div>
                </div>

                <!--<div class="carousel-item">
                    <img class="d-block" alt="Gambar" width="100%" height="100%" src="<?php echo base_url().'theme/images/body.png'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Lorem Ipsum</h1>
                            <h4>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing <br> industries for previewing layouts and visual mockups.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('galeri');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2" class="image-container set-full-height" style="background-image: url('theme/images/body.png')">
    <div class="container text-justify">
        <div class="row">
            <div class="col-md-8">
               <center><h2>Tentang Bangun Tjipta Sunatan</h2></center>
               <p>Dalam rangka ulang tahun PT. Bangun Tjipta Sarana ke-51, Bangun Tjipta Sarana kembali mengadakan Sunatan Massal. Kegiatan ini diselenggarakan sebagai wujud kepedulian sosial perusahaan serta berbagi kebahagian kepada masyarakat sekitar. Tahun lalu, acara ini sukses dilakukan serentak di 5 kota di Indonesia, yaitu Jakarta, Lampung, Palembang, Batam, dan Belitung. Tahun ini, Bangun Tjipta Sarana juga akan kembali mengadakan Sunatan Massal di beberapa kota di Indonesia. Agenda tahunan ini ditargetkan untuk 1000 anak.</p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url().'assets/images/BTS-anak.png'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->

<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container jumbotron text-center">
      <h1>Apakah sunat itu?</h1>
        <p>Ayooo, siapa yang bilang sunat itu sakit? Jangan takut ya adik-adik, sunat itu ngga sakit kok. Justru, sunat bisa membawa banyak manfaat bagi kesehatan kalian loh. 
	    Sebaiknya sunat dilakukan sebelum usia dewasa, agar pemulihannya lebih cepat. Jadi kalian bisa langsung beraktivitas dan bermain seperti biasa.</p>
        <h3>Masihkah kalian takut untuk disunat??,</h3> 
        <h3>Tunggu apa lagi?? Yukk sunat bareng di Sunat Massal Bangun Tjipta</h3>
    </div>
</section>
<!--//END ABOUT -->

<!--============================= OUR COURSES =============================-->
<section class="our_courses" class="image-container set-full-height" style="background-image: url('theme/images/body.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h1><strong>Jenis - Jenis Sunat</strong></h1></center>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <!--<div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>-->
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->

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
