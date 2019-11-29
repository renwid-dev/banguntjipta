<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar Online</title>
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/select2.min.css'); ?>" rel="stylesheet" />
    
</head>

<body>
    <!--============================= HEADER =============================-->
    <?php
            $this->load->view('depan/v_header');
        ?>
    <!--=========================== END HEADER ===========================-->
<!--//END HEADER -->

<section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2>Pendaftaran Bangun Tjipta Sunatan</h2>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
            <div class="contact-option_rsp">
            
            <form method="post" action="<?php echo base_url().'daftar/daftar_online';?>">
                <div><?php echo $this->session->flashdata('msg'); ?></div>
                    <h2 class="text-center"><strong>Data Pribadi Anak</strong></h2>
                    <!-- Nama Lengkap -->
                    <div class="form-group">
                        <label class="form-group"><strong>Nama Lengkap Anak</strong></label>
                        <input type="text" name="nama_lengkap" class="form-control"  placeholder="Tulis nama lengkap disini..." required/>
                    </div>
                    <!-- End Nama Lengkap -->
                    <!-- Tanggal Lahir -->
                    <div class="form-group">
                        <label><strong>Tanggal Lahir Anak</strong></label>
                        <input type="date" class="form-control" name="tanggal_lahir" required/>
                    </div>
                    <!-- End Tanggal Lahir -->
                    <!-- Agama -->
                    <div class="block radio">
                        <h5><strong>Agama Anak</strong></h5>
                        <input type="radio" name="agama" value="Islam" id="rd2"><label for="rd1">&nbsp; Islam</label><br>
                        <input type="radio" name="agama" value="Protestan" id="rd3"><label for="rd2">&nbsp; Protestan</label><br>
                        <input type="radio" name="agama" value="Katolik" id="rd4"><label for="rd4">&nbsp; Katolik</label><br>
                        <input type="radio" name="agama" value="Hindu" id="rd5"><label for="rd5">&nbsp; Hindu</label><br>
                        <input type="radio" name="agama" value="Budha" id="rd5"><label for="rd5">&nbsp; Budha</label><br>
                        <input type="radio" name="agama" value="Konghucu" id="rd5"><label for="rd5">&nbsp; Konghucu</label>
                    </div>
                    <!-- Agama -->
                    <!-- No Telp -->
                    <div class="form-group">
                        <label class="bmd-label-floating"><strong>No. Telp Anak</strong></label>
                        <input type="number" class="form-control" name="no_telp_darurat" placeholder="Tulis nomor telepon disini..."/>
                    </div>
                    <!-- End No Telp -->
                    <!-- Ukuran Baju -->
                    <div class="block radio">
                        <h5><strong>Ukuran Baju Anak</strong></h5>
                        <input type="radio" name="ukuran_baju" value="S Kids" id="rd2"><label for="rd1">&nbsp; S Kids</label>
                        <input type="radio" name="ukuran_baju" value="M Kids" id="rd3"><label for="rd2">&nbsp; M Kids</label>
                        <input type="radio" name="ukuran_baju" value="L Kids" id="rd4"><label for="rd4">&nbsp; L Kids</label>
                        <input type="radio" name="ukuran_baju" value="XL Kids" id="rd5"><label for="rd5">&nbsp; XL Kids</label>
                        <input type="radio" name="ukuran_baju" value="Xs Dewasa" id="rd5"><label for="rd5">&nbsp; XS Dewasa</label>
                    </div><br>
                    <!-- End Ukuran Baju -->
                    <!-- Tingkat Pendidikan -->
                    <div class="block radio">
                        <h5><strong>Tingkat Pendidikan Anak</strong></h5>
                        <input type="radio" name="tingakat_sekolah" value="Tidak Sekolah" id="rd2"><label for="rd1">&nbsp; Tidak Sekolah</label>
                        <input type="radio" name="tingakat_sekolah" value="TK" id="rd3"><label for="rd2">&nbsp; TK</label>
                        <input type="radio" name="tingakat_sekolah" value="SD" id="rd4"><label for="rd4">&nbsp; SD</label>
                        <input type="radio" name="tingakat_sekolah" value="SMP" id="rd5"><label for="rd5">&nbsp; SMP</label>
                    </div><br>
                    <!-- End Tingkat Pendidikan -->
                    <!-- Alamat -->
                    <label for="exampleSelect1" class="bmd-label-floating"><strong>Alamat</strong></label>
                    <fieldset>
                    <div class="form-group">
                    <select class="form-control" name="propinsi" id="propinsi">
                        <option value="0">Pilih Propinsi</option>
                        <?php foreach($propinsi->result() as $row_propinsi): ?>
                        <option value="<?php echo $row_propinsi->id_propinsi; ?>"><?php echo $row_propinsi->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    
                    <div class="form-group">
                        <select class="form-control" name="kota" id="kota">
                            <option value="0">Pilih Kabupaten</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <option value="0">Pilih Kecamatan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="desa" id="desa">
                            <option value="0">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <fieldset>
                    <input type="number" mak="5" name="kode_pos" style="width: 40%;" class="form-control" placeholder="Kode pos" required/><br><br/>
                    <!-- End Alamat -->
                    <!-- Berat Badan -->
                    <div class="form-group">
                        <label class="bmd-label-floating"><strong>Berat Badan Anak</strong></label>
                        <input type="number" min="1" name="berat_badan" class="form-control" placeholder="Tulis berat badan disini..." required/>
                    </div>
                    <!-- End Berat Badan -->
                    <!-- Tinggi Badan -->
                    <div class="form-group">
                        <label class="bmd-label-floating"><strong>Tinggi Badan Anak</strong></label>
                        <input type="number" name="tinggi_badan" class="form-control" placeholder="Tulis tinggi badan disini..." required/>
                    </div>
                    <!-- End Tinggi Badan -->
                    <!-- Golongan Darah  -->
                    <div class="block radio">
                        <h5><strong>Golongan Darah Anak</strong></h5>
                        <input type="radio" name="golongan_darah" value="A" id="rd2"><label for="rd1">&nbsp; A</label>
                        <input type="radio" name="golongan_darah" value="B" id="rd3"><label for="rd2">&nbsp; B</label>
                        <input type="radio" name="golongan_darah" value="O" id="rd4"><label for="rd4">&nbsp; O</label>
                        <input type="radio" name="golongan_darah" value="AB" id="rd5"><label for="rd5">&nbsp; AB</label>
                        <input type="radio" name="golongan_darah" value="Tidak Tahu" id="rd5"><label for="rd5">&nbsp; Tidak Tahu</label>
                    </div><br>
                    <!-- End Golongan Darah -->

                    <!-- Memiliki Penyakit -->
                    <div class="block radio">
                        <h5><strong>Apakah Memiliki Penyakit</strong></h5>
                        <input onclick="javascript:yesnoCheck();" type="radio" name="memiliki_penyakit" value="Ya" id="yesCheck"><label for="rd1">&nbsp; Ya</label>
                        <input onclick="javascript:yesnoCheck();" type="radio" name="memiliki_penyakit" value="Tidak" id="yesCheck"><label for="rd2">&nbsp; Tidak</label>
                            <!-- Riwayat Penyakit -->
                            <div class="form-group" id="ifYes" style="visibility:hidden">
                                <label for="exampleSelect1" class="bmd-label-floating"><strong>Riwayat Penyakit</strong></label>
                                <input name="riwayat_penyakit" id='yes' rows="4" class="form-control" placeholder="Tulis keterangan alergi disini...">
                            </div>
                            <!-- End Penyakit -->
                    </div>
                    <!-- End Memiliki Penyakit -->
                    
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="contact-address">
                    <!-- Foto Peserta -->
                    <div class="form-group">
                        <label class="bmd-label-floating"><strong>Foto Peserta</strong></label>
                        <div>
                            <input type="file" name="filefoto" class="btn btn-default btn-submit" />
                        </div>
                    </div><br>
                    <!-- Foto Peserta -->
                    
                    <!-- Memiliki Alergi -->
                    <div class="block radio">
                        <h5><strong>Apakah Anaknya Memiliki Alergi</strong></h5>
                        <input onclick="javascript:yesnoCheck();" type="radio" name="memiliki_alergi" value="Ya" id="yesCheck"><label for="rd1">&nbsp; Ya</label>
                        <input onclick="javascript:yesnoCheck();" type="radio" name="memiliki_alergi" value="Tidak" id="yesCheck"><label for="rd2">&nbsp; Tidak</label>
                            <!-- Alergi -->
                            <div class="form-group" id="ifYes" style="visibility:hidden">
                                <label for="exampleSelect1" class="bmd-label-floating"><strong>Riwayat Alergi</strong></label>
                                <input name="riwayat_alergi" id='yes' rows="4" class="form-control" placeholder="Tulis keterangan alergi disini...">
                            </div>
                            <!-- End Alergi -->
                    </div>
                    <!-- End Memiliki Alergi -->
                    
                    <!-- Data Pribadi Orang Tua -->
                    <h3 class="text-center"><strong>Data Pribadi Orang Tua/Wali</strong></h3>
                    <div class="form-group">
                        <label class="bmd-label-floating"><strong>Nama Orang Tua/Wali</strong></label>
                        <input type="text" name="nama_ortu" class="form-control" placeholder="Tulis nama orang tau/wali disini..." required/>
                    </div>
                    <!-- End Data Pribadi Orang Tua -->
                    <!-- Status Hubungan -->
                    <div class="block radio">
                        <h5><strong>Status Hubungan Dengan Anak</strong></h5>
                        <input type="radio" name="status_hubungan" value="Orang Tua" id="rd2"><label for="rd1">&nbsp; Orang Tua</label><br>
                        <input type="radio" name="status_hubungan" value="Saudara" id="rd3"><label for="rd2">&nbsp; Saudara</label><br>
                        <input type="radio" name="status_hubungan" value="Guru" id="rd4"><label for="rd4">&nbsp; Guru</label><br>
                    </div><br>
                    <!-- End Status Hubungan -->
                    <!-- No. Identitas Diri (KTP) -->
                    <div class="form-group">
                        <label class="bmd-label-floating"><strong>No. Identitas Diri (KTP)</strong></label>
                        <input type="number" name="nik_ktp" class="form-control" placeholder="Tulis identitas diri/NIK disini..." required/>
                    </div>
                    <!-- No. Identitas Diri (KTP) -->
                    <!-- No. Telp -->
                    <div class="form-group">
                        <label class="bmd-label-floating"><strong>No. Telp Orang Tua/Wali</strong></label>
                        <input type="number" name="no_telp_orangtua" class="form-control" placeholder="Tulis no telp disini..." required/>
                    </div>
                    <!-- No. Telp -->
                    <!-- Email / No. Whatsapp / No. Handphone -->
                    <div class="form-group">
                        <label class="bmd-label-floating"><strong>Email</strong></label>
                        <label class="bmd-label-floating"><strong>Konformasi Registrasi Akan Dikirim Ke Email Orang Tua/Wali Pendaftar</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Tulis email disini..." required/>
                    </div>
                    <!-- End Email / No. Whatsapp / No. Handphone -->

                    <!-- Pekerjaan -->
                    <div class="form-group">
                        <label class="bmd-label-floating">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Tulis pekerjaan disini..." required/>
                    </div>
                    <!-- End Pekerjaan -->
                    <!-- Pendapatan -->
                    <div class="form-group">
                        <label for="exampleSelect1" class="bmd-label-floating">Pendapatan</label>
                        <select class="form-control" name="gaji" required>
                            <option value=""> Silahkan Pilih </option>
                            <option value="< Rp.500.000">Dibawah Rp. 500.000/bulan</option>
                            <option value="Rp.500.000 - Rp.1.000.000">Rp.500.000 - Rp.1.000.000</option>
                            <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                            <option value="Rp.2.000.000 - Rp.3.000.000<">Rp.2.000.000 - Rp.3.000.000</option>
                            <option value="Rp.3.000.000 - Rp.4.000.000">Rp.3.000.000 - Rp.4.000.000</option>
                            <option value="Rp.4.000.000 - Rp.5.000.000">Rp.4.000.000 - Rp.5.000.000</option>
                            <option value="Rp.5.000.000 - Rp.6.000.000">Rp.5.000.000 - Rp.6.000.000</option>
                            <option value="> Rp.7.000.000">Diatas Rp.7.000.000</option>
                        </select>
                    </div>
                    <!-- END Pendapatan -->
                    <h3 class="text-center">Rencana Sunat</h3>
                    <!-- Pilih Waktu Sunat -->
                    <div class="block radio">
                        <h5><strong>Rencana Sunat</strong></h5>
                        <input type="radio" name="sesi" value="Sesi 1 / 07:00 - 08:00 / Tersisa 333 Peserta" id="rd2"><label for="rd1">&nbsp; Sesi 1 / 07:00 - 08:00 / Tersisa 333 Peserta</label><br>
                        <input type="radio" name="sesi" value="Sesi 2 / 08:00 - 10:00 / Tersisa 333 Peserta" id="rd3"><label for="rd2">&nbsp; Sesi 2 / 08:00 - 10:00 / Tersisa 333 Peserta</label><br>
                        <input type="radio" name="sesi" value="Sesi 3 / 10:00 - 11:30 / Tersisa 333 Peserta" id="rd4"><label for="rd4">&nbsp; Sesi 3 / 10:00 - 11:30 / Tersisa 333 Peserta</label><br>
                    </div><br>
                    <!-- End Pilih Waktu Sunat -->
                    <div class="g-recaptcha" data-sitekey="6LfI_8AUAAAAAGA8HRAW5W316_PgzQoCMB68WTTi"></div><br/>
                    <input type="checkbox" value="1" class="check" required/> Saya telah membaca dan menyetujui Syarat & Ketentuan
                    <br/>
                    <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                </div>
            </div>

            </form>

            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <p class="contact-center">BTS</p>
        </div>
    </div>
</section>
    <!--//End Style 2 -->
        <!--============================= FOOTER =============================-->
        <?php
            $this->load->view('depan/v_footer');
        ?>
        <!--=========================== END FOOTER ===========================-->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
   
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo site_url('assets/js/chained/jquery.chained.js?v=1.0.0'); ?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo site_url('assets/js/chained/jquery.chained.remote.js?v=1.0.0'); ?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo site_url('assets/js/select2/select2.min.js'); ?>"></script>

    <script>
    $(document).ready(function() {
        $('select').select2();
    });

    $("#kota").remoteChained({
        parents : "#propinsi",
        url : "<?php echo site_url('daftar/get_kota'); ?>"
    });

    $("#kecamatan").remoteChained({
        parents : "#kota",
        url : "<?php echo site_url('daftar/get_kecamatan'); ?>"
    });

    $("#desa").remoteChained({
        parents : "#kecamatan",
        url : "<?php echo site_url('daftar/get_desa'); ?>"
    });
    </script>
    <script type="text/javascript">

    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.visibility = 'visible';
        } else {
            document.getElementById('ifYes').style.visibility = 'hidden';
        }
    }
    </script>
</body>
</html>
