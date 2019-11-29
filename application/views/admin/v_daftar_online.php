<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $query3=$this->db->query("SELECT * FROM tbl_daftar_online WHERE daftar_online_status='1'");
    $jum_daftar=$query3->num_rows();
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BTS | Daftar Online</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <!--Header-->
  <?php
    $this->load->view('admin/v_header');
  ?>
  <!-- End Header -->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <?php
          $id_admin=$this->session->userdata('idadmin');
          $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
          $c=$q->row_array();
      ?>
      <li class="header"><marquee>SELAMAT DATANG KEMBALI! <?php echo $c['pengguna_nama'];?></marquee></li>
        <li>
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-list"></i> List Berita</a></li>
            <li><a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
            <li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-wrench"></i> Kategori</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fa fa-users"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/agenda'?>">
            <i class="fa fa-calendar"></i> <span>Agenda</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/pengumuman'?>">
            <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/testimoni'?>">
            <i class="fa fa-download"></i> <span>Testimoni</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-camera"></i>
            <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/album'?>"><i class="fa fa-clone"></i> Album</a></li>
            <li><a href="<?php echo base_url().'admin/galeri'?>"><i class="fa fa-picture-o"></i> Photos</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/slider'?>">
            <i class="fa fa-image"></i> <span>Slider</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li class="active">
          <a href="<?php echo base_url().'admin/daftar_online'?>">
            <i class="fa fa-user"></i><span>Daftar Online</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_daftar;?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/inbox'?>">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/komentar'?>">
            <i class="fa fa-comments"></i> <span>Komentar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_comment;?></small>
            </span>
          </a>
        </li>

         <li>
          <a href="<?php echo base_url().'admin/login/logout'?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Online
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Online</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
          <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Pendaftaran</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
          					<th>No Registrasi</th>
                    <th>QRcode</th>
          					<th>Photo</th>
          					<th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Date & Time</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php
					  $no=0;
  					foreach ($data->result_array() as $i) :
               $no++;
               
               $id=$i['daftar_online_id'];
               $qr_code=$i['qr_code'];
               $no_pendaftaran=$i['no_pendaftaran'];
               $photo=$i['photo'];
               $nama_lengkap=$i['nama_lengkap'];
               $agama=$i['agama'];
               $tanggal_lahir=$i['tanggal_lahir'];
               $daftar_online_tanggal=$i['daftar_online_tanggal'];

                    ?>
                <tr>
                  <td><?php echo $no_pendaftaran;?></td>
                  <td><img style="width: 100px;" src="<?php echo base_url().'assets/images/'.$qr_code;?>"></td>
                  <?php if(empty($photo)):?>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>"></td>
                  <?php else:?>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/'.$photo;?>"></td>
                  <?php endif;?>
                  <td><?php echo $nama_lengkap;?></td>
                  <td><?php echo $tanggal_lahir;?></td>
                  <td><?php echo $daftar_online_tanggal;?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				    <?php endforeach;?>
			
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--Modal Add Pengguna-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Pendaftaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/daftar_online/simpan_daftar'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    
                    <div class="form-group" hidden>
                        <input type="text" name="no_pendaftaran" class="form-control" value="<?= $kodeunik; ?>">
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                        <div class="col-sm-7">
                            <input type="file" name="filefoto"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Nama Lengkap</label>
                        <div class="col-sm-7">
                            <input type="text" name="nama_lengkap" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                        <div class="col-sm-7">
                            <input type="date" name="tanggal_lahir" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Berat Badan</label>
                        <div class="col-sm-7">
                            <input type="number" name="berat_badan" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Tinggi Badan</label>
                        <div class="col-sm-7">
                            <input type="number" name="tinggi_badan" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Ukuran Baju</label>
                        <div class="col-sm-7">
                            <input type="text" name="ukuran_baju" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Golongan Darah</label>
                        <div class="col-sm-7">
                            <input type="text" name="golongan_darah" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Alergi</label>
                        <div class="col-sm-7">
                            <input type="text" name="memiliki_alergi" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Riwayat Alergi</label>
                        <div class="col-sm-7">
                            <input type="text" name="riwayat_alergi" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Nama Orang Tua/Wali/Ketua Kelompok</label>
                        <div class="col-sm-7">
                            <input type="text" name="nama_ortu" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Status Hubungan Dengan Anak</label>
                        <div class="col-sm-7">
                            <input type="text" name="status_hubungan" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">No. Identitas Diri (KTP) </label>
                        <div class="col-sm-7">
                            <input type="text" name="nik_ktp" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">No. Telp Orang Tua/Wali/Ketua Kelompok</label>
                        <div class="col-sm-7">
                            <input type="text" name="no_telp_orangtua" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Email Orang Tua/Wali/Ketua Kelompok</label>
                        <div class="col-sm-7">
                            <input type="email" name="email" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Alamat Sekarang</label>
                        <div class="col-sm-7">
                            <input type="text" name="alamat" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Rencana Sunat</label>
                        <div class="col-sm-7">
                            <input type="text" name="sesi" class="form-control" id="inputUserName" placeholder="..." required>
                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- add daftar -->

  <!-- edit daftar -->
  <?php
    $no=0;
    foreach ($data->result_array() as $i) :
        $no++;
        
        $id=$i['daftar_online_id'];
        $daftar_online_tanggal=$i['daftar_online_tanggal'];
        $photo=$i['photo'];
        $nama_lengkap=$i['nama_lengkap'];
        $tanggal_lahir=$i['tanggal_lahir'];
        $agama=$i['agama']; 
        $no_telp_darurat=$i['no_telp_darurat']; 
        $ukuran_baju=$i['ukuran_baju']; 
        $tingkat_sekolah=$i['tingkat_sekolah']; 
        $berat_badan=$i['berat_badan']; 
        $tinggi_badan=$i['tinggi_badan']; 
        $golongan_darah=$i['golongan_darah']; 
        $memiliki_penyakit=$i['memiliki_penyakit']; 
        $riwayat_penyakit=$i['riwayat_penyakit']; 
        $memiliki_alergi=$i['memiliki_alergi']; 
        $riwayat_alergi=$i['riwayat_alergi']; 
        $nama_ortu=$i['nama_ortu']; 
        $status_hubungan=$i['status_hubungan']; 
        $nik_ktp=$i['nik_ktp']; 
        $no_telp_orangtua=$i['no_telp_orangtua']; 
        $email=$i['email']; 
        $pekerjaan=$i['pekerjaan']; 
        $gaji=$i['gaji']; 
        $sesi=$i['sesi']; 
        $kabupaten=$i['kabupaten']; 
        $provinsi=$i['provinsi']; 
        $kelurahan=$i['kelurahan']; 
        $kecamatan=$i['kecamatan']; 
        $kode_pos=$i['kode_pos']; 
        $no_pendaftaran=$i['no_pendaftaran'];
        $alamat=$i['alamat'];

            ?>

        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">No Pendaftaran | <?php echo $no_pendaftaran; ?></h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/daftar_online/update_daftar_online'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                    <input type="hidden" name="gambar" value="<?php echo $photo;?>"/>
                    <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran; ?>"/>
                    
                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Nama Lengkap</label>
                        <div class="col-sm-7">
                            <input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap;?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                        <div class="col-sm-7">
                            <input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Berat Badan</label>
                        <div class="col-sm-7">
                            <input type="number" name="berat_badan" value="<?php echo $berat_badan;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Tinggi Badan</label>
                        <div class="col-sm-7">
                            <input type="number" name="tinggi_badan" value="<?php echo $tinggi_badan;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Ukuran Baju</label>
                        <div class="col-sm-7">
                            <input type="text" name="ukuran_baju" value="<?php echo $ukuran_baju;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Golongan Darah</label>
                        <div class="col-sm-7">
                            <input type="text" name="golongan_darah" value="<?php echo $golongan_darah;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Alergi</label>
                        <div class="col-sm-7">
                            <input type="text" name="memiliki_alergi" value="<?php echo $memiliki_alergi;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Riwayat Alergi</label>
                        <div class="col-sm-7">
                            <input type="text" name="riwayat_alergi" value="<?php echo $riwayat_alergi;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Nama Orang Tua/Wali/Ketua Kelompok</label>
                        <div class="col-sm-7">
                            <input type="text" name="nama_ortu" value="<?php echo $nama_ortu;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Status Hubungan Dengan Anak</label>
                        <div class="col-sm-7">
                            <input type="text" name="status_hubungan" value="<?php echo $status_hubungan;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">No. Identitas Diri (KTP) </label>
                        <div class="col-sm-7">
                            <input type="text" name="nik_ktp" value="<?php echo $nik_ktp;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">No. Telp Orang Tua/Wali/Ketua Kelompok</label>
                        <div class="col-sm-7">
                            <input type="text" name="no_telp_orangtua" value="<?php echo $no_telp_orangtua;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Email Orang Tua/Wali/Ketua Kelompok</label>
                        <div class="col-sm-7">
                            <input type="email" name="email" value="<?php echo $email;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Alamat Sekarang</label>
                        <div class="col-sm-7">
                            <input type="text" name="alamat" value="<?php echo $alamat;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Rencana Sunat</label>
                        <div class="col-sm-7">
                            <input type="text" name="sesi" value="<?php echo $sesi;?>" class="form-control" id="inputUserName" placeholder="Edit text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                        <div class="col-sm-7">
                            <input type="file" name="filefoto"/>
                        </div>
                    </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>
  <!--Modal Edit daftar>-->
   
  <?php foreach ($data->result_array() as $i) :
              $id=$i['daftar_online_id'];
              $daftar_online_tanggal=$i['daftar_online_tanggal'];
              $photo=$i['photo'];
              $nama_lengkap=$i['nama_lengkap'];
              $agama=$i['agama'];
              $tanggal_lahir=$i['tanggal_lahir'];
            ?>
	      <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Daftar</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/daftar_online/hapus_daftar_online'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus data ini?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
  <!-- Footer -->
  <?php
    $this->load->view('admin/v_footer');
  ?>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>
