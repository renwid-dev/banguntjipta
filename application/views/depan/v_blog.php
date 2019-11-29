<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog</title>
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
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <?php
        $this->load->view('depan/v_header');
    ?>
    <!--=========================== END HEADER ===========================-->

<!--============================= BLOG =============================-->
<section class="blog-wrap" class="image-container set-full-height" style="background-image: url('theme/images/body.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <?php echo $this->session->flashdata('msg');?>
              <?php foreach ($data->result() as $row) : ?>
                <div class="blog-single-item">
                    <div class="blog-img_block">
                        <!-- <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="blog-img"> -->
                        <!-- <div class="blog-date">
                            <span><?php echo $row->tanggal;?></span>
                        </div> -->
                    </div>
                    <div class="blog-tiltle_block">
                        <h4><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo $row->tulisan_judul;?></a></h4>
                        <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span></span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span></span></a></h6>
                        <?php echo limit_words($row->tulisan_isi,10).'...';?>
                        <div class="blog-icons">
                            <div class="blog-share_block">
                                <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>
                <nav>
                    <?php error_reporting(0); echo $page;?>
                </nav>
            </div>
            <div class="col-md-4">
                <form action="<?php echo site_url('blog/search');?>" method="get">
                    <input type="text" name="keyword" placeholder="Search" class="blog-search" required>
                    <button type="submit" class="btn btn-warning btn-blogsearch">SEARCH</button>
                </form>
                <div class="blog-category_block">
                  <center><h3>Menu</h3></center>
                  <ul>
                    <li class="nav-item">
                        <a class="nav-link" class="btn btn-success btn-blogsearch" href="<?php echo site_url('informasi_sunatan');?>">Informasi Sunatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" class="btn btn-success btn-blogsearch" href="<?php echo site_url('pertanyaan');?>">Question & Answer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" class="btn btn-success btn-blogsearch" href="<?php echo site_url('galeri');?>">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" class="btn btn-success btn-blogsearch" href="<?php echo site_url('contact');?>">Contact Us</a>
                    </li>
                  </ul>
                </div>
                <div class="blog-featured_post">
                    <center><h3>Populer</h3></center>
                    <?php foreach ($populer->result() as $row) :?>
                      <div class="blog-featured-img_block">
                          <!-- <img width="35%" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="blog-featured-img"> -->
                          <h5><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo limit_words($row->tulisan_judul,3).'...';?></a></h5>
                          <p><?php echo limit_words($row->tulisan_isi,5).'...';?></p>
                      </div>
                      <hr>
                    <?php endforeach;?>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END BLOG -->
        <!--============================= FOOTER =============================-->
        <?php
            $this->load->view('depan/v_footer');
        ?>
    <!--=========================== END FOOTER ===========================-->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
