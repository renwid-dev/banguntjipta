<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Pendaftaran Sunatan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/favicon.png'?>" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?php echo base_url().'assets/daftar/assets/css/bootstrap.min.css'?>" rel="stylesheet" />
	<link href="<?php echo base_url().'assets/daftar/assets/css/material-bootstrap-wizard.css'?>" rel="stylesheet" />

	<!-- CSS project -->
	<link href="<?php echo base_url().'assets/daftar/assets/css/demo.css'?>" rel="stylesheet" />
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('theme/images/body.png')">
	    
		<!--  Made With Material Kit  -->
		<a href="/" class="made-with-mk">
			<div class="brand">BS</div>
			<div class="made-with">Bangun <strong>Tjipta Sunatan</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    <form action="<?php echo base_url().'pendaftaran/send';?>" method="post" enctype="multipart/form-data">
		                <!-- creat daftar  -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
										Pendaftaran Bangun Tjipta Sunatan
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">Data Pribadi Anak</a></li>
			                            <li><a href="#dataOrtu" data-toggle="tab">Data Pribadi Orang Tua</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <div class="row">
		                    
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="assets/daftar/assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" name="filefoto" id="wizard-picture">
		                                        	</div>
		                                        	<h6>Upload Picture</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Nama Lengkap *wajib</label>
			                                          <input name="nama_lengkap" type="text" class="form-control" required/>
			                                        </div>
												</div>
                                                
												<div class="input-group">
                                                <label style="margin-left: 16px;"><strong>Tanggal Lahir *wajib</strong></label>
													<span class="input-group-addon" style="padding-left: 2px;padding-right: 7px;padding-top: 24px;">
														<i class="material-icons" style="padding-right: 8px;">calendar_today</i>
													</span>
													<div class="form-group label-floating">
													  
													  <input name="tanggal_lahir" type="date" class="form-control" required/>
													</div>
												</div>
                                            </div>
                                            <!-- Berat Badan -->
                                            <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label><strong>Berat Badan Anak *wajib</strong></label>
                                                        <input type="number" name="berat_badan" class="form-control" placeholder="Tuliskan berat kg..." required/>
                                                    </div>
                                                </div>
                                                <!-- End Berat Badan -->
                                                <!-- Tinggi Badan -->
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label><strong>Tinggi Badan Anak *wajib</strong></label>
                                                        <input type="number" name="tinggi_badan" class="form-control" placeholder="Tuliskan tinggi cm..." required/>
                                                    </div>
                                                </div>
                                                <!-- End Tinggi Badan -->
                                                <!-- No Telp -->
                                                <!-- <div class="col-sm-10 col-sm-offset-1">
                                                    <label><strong>No. Telp Anak</strong></label>
                                                    <input type="number" class="form-control" name="no_telp_darurat" placeholder="Tulis nomor telepon disini..." >
                                                </div> -->
                                                <!-- End No Telp -->
                                                
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
                                                <!-- Agama -->
                                                <!-- <div class="radio">
                                                    <h5><strong>Agama Anak</strong></h5>
                                                    <label><input type="radio" name="agama" value="Islam"> Islam</label>
                                                    <label><input type="radio" name="agama" value="Protestan" > Protestan</label>
                                                    <label><input type="radio" name="agama" value="Katolik"> Katolik</label>
                                                    <label><input type="radio" name="agama" value="Hindu"> Hindu</label>
                                                    <label><input type="radio" name="agama" value="Budha"> Budha</label>
                                                    <label><input type="radio" name="agama" value="Konghucu"> Konghucu</label>
                                                </div> -->
                                                <!-- Agama -->
                                                </div>
                                                <!-- Ukuran Baju -->
                                                <div class="radio">
                                                    <h5><strong>Ukuran Kaos Anak</strong></h5>
                                                    <label><input type="radio" name="ukuran_baju" value="S Kids" id="rd2"> S Kids</label>
                                                    <label><input type="radio" name="ukuran_baju" value="M Kids" id="rd3"> M Kids</label>
                                                    <label><input type="radio" name="ukuran_baju" value="L Kids" id="rd4"> L Kids</label>
                                                    <label><input type="radio" name="ukuran_baju" value="XL Kids" id="rd5"> XL Kids</label>
                                                    <label><input type="radio" name="ukuran_baju" value="Xs Dewasa" id="rd5"> XS Dewasa</label>
                                                </div><br>
                                                <!-- End Ukuran Baju -->
                                                <!-- Tingkat Pendidikan -->
                                                <!-- <div class="radio">
                                                    <h5><strong>Tingkat Pendidikan Anak</strong></h5>
                                                    <label><input type="radio" name="tingakat_sekolah" value="Tidak Sekolah"> Tidak Sekolah</label>
                                                    <label><input type="radio" name="tingakat_sekolah" value="TK" id="rd3"> TK</label>
                                                    <label><input type="radio" name="tingakat_sekolah" value="SD" id="rd4"> SD</label>
                                                    <label><input type="radio" name="tingakat_sekolah" value="SMP" id="rd5"> SMP</label>
                                                </div><br> -->
                                                <!-- End Tingkat Pendidikan -->
                                                <!-- Golongan Darah  -->
                                                <div class="radio">
                                                    <h5><strong>Golongan Darah Anak</strong></h5>
                                                    <label><input type="radio" name="golongan_darah" value="A" id="rd2"> A</label>
                                                    <label><input type="radio" name="golongan_darah" value="B" id="rd3"> B</label>
                                                    <label><input type="radio" name="golongan_darah" value="O" id="rd4"> O</label>
                                                    <label><input type="radio" name="golongan_darah" value="AB" id="rd5"> AB</label>
                                                    <label><input type="radio" name="golongan_darah" value="Tidak Tahu" id="rd5"> Tidak Tahu</label>
                                                </div><br>
                                                <!-- End Golongan Darah -->
                                                
                                            </div>
                                            <!-- Memiliki Penyakit -->
                                            <!-- <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <div class="block radio">
                                                            <h5><strong>Apakah Memiliki Penyakit</strong></h5>
                                                            <label><input onclick="javascript:yesnoCheck();" type="radio" name="memiliki_penyakit" value="Ya" id="yesCheck"> Ya</label>
                                                            <label><input onclick="javascript:yesnoCheck();" type="radio" name="memiliki_penyakit" value="Tidak" id="yesCheck"> Tidak</label>
                                                                
                                                                <div class="form-group" id="ifYes" hidden>
                                                                   
                                                                    <input name="riwayat_penyakit" id='yes' rows="4" class="form-control" placeholder="Tulis keterangan riwayat penyakit disini...">
                                                                </div>
                                                                
                                                        </div>
                                                </div></div>
                                                <script type="text/javascript">
                                                    function yesnoCheck() {
                                                        if (document.getElementById('yesCheck').checked) {
                                                            document.getElementById('ifYes').style.display = 'block';
                                                        }
                                                        else document.getElementById('ifYes').style.display = 'none';
                                                    }
                                                </script> -->
                                                <!-- End Memiliki Penyakit -->
                                                <!-- Memiliki Alergi -->
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                    <div class="radio">
                                                        <h5><strong>Apakah Anaknya Memiliki Alergi</strong></h5>
                                                        <label><input onclick="javascript:yesAlergi();" type="radio" name="memiliki_alergi" value="Ya" id="yesChk"> Ya</label>
                                                        <label><input onclick="javascript:yesAlergi();" type="radio" name="memiliki_alergi" value="Tidak" id="yesChk"> Tidak</label>
                                                        <label><input onclick="javascript:yesAlergi();" type="radio" name="memiliki_alergi" value="Tidak Tahu" id="yesChk"> Tidak Tahu</label>
                                                            <!-- Alergi -->
                                                            <div class="form-group" id="ifElse" hidden>
                                                                <!-- <label for="exampleSelect1" class="bmd-label-floating"><strong>Riwayat Alergi</strong></label> -->
                                                                <input name="riwayat_alergi" id='yes' rows="4" class="form-control" placeholder="Tulis keterangan riwayat alergi disini...">
                                                            </div>
                                                            <!-- End Alergi -->
                                                    </div>
                                                </div></div>
                                                <script type="text/javascript">
                                                    function yesAlergi() {
                                                        if (document.getElementById('yesChk').checked) {
                                                            document.getElementById('ifElse').style.display = 'block';
                                                        }
                                                        else document.getElementById('ifElse').style.display = 'none';
                                                    }
                                                </script>
                                                <!-- End Memiliki Alergi -->
		                            	</div>
                                    </div>
                                    

		                            <div class="tab-pane" id="dataOrtu">
		                                <div class="row">

                                            <!-- Data Pribadi Orang Tua -->
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <h5><strong>Nama Orang Tua/Wali *wajib</strong></h5>
                                                    <input type="text" name="nama_ortu" class="form-control" placeholder="Tulis nama orang tau/wali disini..." required/>
                                                </div>
		                                    </div>
                                            <!-- End Data Pribadi Orang Tua -->
                                            
                                            
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <!-- Status Hubungan -->
                                                    <div class="radio">
                                                        <h5><strong>Status Hubungan Dengan Anak *wajib</strong></h5>
                                                        <label><input type="radio" name="status_hubungan" value="Orang Tua" id="rd2"> Orang Tua</label>
                                                        <label><input type="radio" name="status_hubungan" value="Saudara" id="rd3"> Saudara</label>
                                                        <label><input type="radio" name="status_hubungan" value="Guru" id="rd4"> Guru</label>
                                                    </div><br>
                                                    <!-- End Status Hubungan -->
		                                        </div>
                                            </div>


                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <!-- No. Identitas Diri (KTP) -->
                                                        <h5><strong>No. Identitas Diri (KTP) *wajib</strong></h5>
                                                        <input type="number" name="nik_ktp" class="form-control" placeholder="Tulis identitas diri/NIK disini..." required/>
                                                    <!-- No. Identitas Diri (KTP) -->
		                                        </div>
                                            </div>

                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <!-- No. Telp -->
                                                        <h5><strong>No. Telp Orang Tua/Wali/Ketua Kelompok *wajib</strong></h5>
                                                        <input type="number" name="no_telp_orangtua" class="form-control" placeholder="Tulis no telp disini..." required/>
                                                    <!-- No. Telp -->
		                                        </div>
                                            </div>
                                            
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <!-- Email -->
                                                        <h5><strong>Email Orang Tua/Wali/Ketua Kelompok *wajib</strong></h5>
                                                        <label><strong>Konformasi Registrasi Akan Dikirim Ke Email Orang Tua/Wali/Ketua Kelompok Pendaftar</strong></label>
                                                        <input type="email" name="email" class="form-control" placeholder="Tulis email disini..." required/>
                                                    <!-- End Email -->
		                                        </div>
                                            </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <!-- No. Alamat -->
		                                            <h5><strong>Alamat Sekarang</strong></h5>
                                                        <input type="text" name="alamat" class="form-control" placeholder="Tuliskan nama jalan sesuai KTP" required/>
                                                    <!-- No. Alamat -->
		                                        </div>
                                            </div>
                                            
                                          <!--  <div class="col-sm-10 col-sm-offset-1">-->
		                                        <!--<div class="form-group label-floating">-->
		                                            <!-- Pekerjaan -->
                                          <!--              <h5><strong>Pekerjaan</strong></h5>-->
                                          <!--              <input type="text" name="pekerjaan" class="form-control" placeholder="Tulis pekerjaan disini..." required/>-->
                                                    <!-- End Pekerjaan -->
		                                        <!--</div>-->
                                          <!--  </div>-->

                                            <!-- Pendapatan -->
                                            <!-- <div class="form-group">
                                                <label for="exampleSelect1" class="bmd-label-floating">Pendapatan</label>
                                                <select class="form-control" name="gaji" >
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
                                            </div> -->
                                            <!-- END Pendapatan -->

                                            <!-- Alamat -->
                                              <!--      <div class="col-sm-12">-->
        		                                    <!--    <h5 class="info-text"> <strong>Alamat Sekarang</strong> </h5>-->
        		                                    <!--</div>-->
        		                                    
                                              <!--      <div class="col-sm-5 col-sm-offset-1">-->
        		                                    <!--    <div class="form-group label-floating">-->
                                              <!--              <select class="form-control" name="propinsi" id="propinsi">-->
                                              <!--                  <option value="0">Pilih Propinsi</option>-->
                                              <!--                  <?php foreach($propinsi->result() as $row_propinsi): ?>-->
                                              <!--                  <option value="<?php echo $row_propinsi->id_propinsi; ?>"><?php echo $row_propinsi->nama; ?></option>-->
                                              <!--                  <?php endforeach; ?>-->
                                              <!--              </select>-->
                                              <!--          </div>-->
                                              <!--      </div>-->
                                                    
                                              <!--      <div class="col-sm-5">-->
        		                                    <!--    <div class="form-group label-floating">-->
                                              <!--              <select class="form-control" name="kota" id="kota">-->
                                              <!--                  <option value="0">Pilih Kabupaten</option>-->
                                              <!--              </select>-->
                                              <!--          </div>-->
                                              <!--      </div>-->
        
                                              <!--      <div class="col-sm-5 col-sm-offset-1">-->
        		                                    <!--    <div class="form-group label-floating">-->
                                              <!--              <select class="form-control" name="kecamatan" id="kecamatan">-->
                                              <!--                  <option value="0">Pilih Kecamatan</option>-->
                                              <!--              </select>-->
                                              <!--          </div>-->
                                              <!--      </div>-->
        
                                              <!--      <div class="col-sm-5">-->
        		                                    <!--    <div class="form-group label-floating">-->
                                              <!--              <select class="form-control" name="desa" id="desa">-->
                                              <!--                  <option value="0">Pilih Kelurahan</option>-->
                                              <!--              </select>-->
                                              <!--          </div>-->
                                              <!--      </div>-->
                                          
                                            <!-- <input type="number" mak="5" name="kode_pos" style="width: 40%;" class="form-control" placeholder="Kode pos" /> -->
                                            <!-- End Alamat -->

                                            <div class="col-sm-10 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<!-- Pilih Waktu Sunat -->
                                                    <div class="block radio">
                                                        <h5><strong>Rencana Sunat</strong></h5>
                                                        <label><input type="radio" name="sesi" value="Sesi 1 / 07:00 - 08:00 " id="rd2"> Sesi 1 / 07:00 - 08:00 </label><br>
                                                        <label><input type="radio" name="sesi" value="Sesi 2 / 08:00 - 10:00 " id="rd3"> Sesi 2 / 08:00 - 10:00 </label><br>
                                                        <label><input type="radio" name="sesi" value="Sesi 3 / 10:00 - 11:30 " id="rd4"> Sesi 3 / 10:00 - 11:30 </label><br>
                                                    </div><br>
                                                    <!-- End Pilih Waktu Sunat -->
	                                        	</div>
		                                    </div>
		                                    <div class="col-sm-10">
		                                        <div class="form-group label-floating">
                                                <div class="g-recaptcha" data-sitekey="6LfI_8AUAAAAAGA8HRAW5W316_PgzQoCMB68WTTi" required/></div>
		                                        </div>
		                                    </div>
                                            
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes" checked required/>
                                                            Saya telah membaca dan menyetujui Syarat & Ketentuan
                                                        </label>
                                                    </div>
		                                        </div>
		                                    </div>
                                            <div class="form-group" hidden>
                                                <input type="text" name="no_pendaftaran" class="form-control" value="<?= $kodeunik; ?>">
                                            </div>
		                                </div>
                                    </div>

                                </div>
                                
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Register' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
        <div class="container text-center">
	            <?php echo date('Y');?> © copyright <i class="fa fa-heart heart"></i> by <a href="<?php echo site_url('/')?>">Bangun Tjipta Sunatan</a>
	        </div>
	    </div>
	    </div>
	</div>


	<!--   Core JS Files   -->
    <script src="<?php echo base_url().'assets/daftar/assets/js/jquery-2.2.4.min.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/daftar/assets/js/bootstrap.min.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/daftar/assets/js/jquery.bootstrap.js'?>" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo base_url().'assets/daftar/assets/js/material-bootstrap-wizard.js'?>"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url().'assets/daftar/assets/js/jquery.validate.min.js'?>"></script>
   
    <script src="<?php echo site_url('assets/js/chained/jquery.chained.js?v=1.0.0'); ?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo site_url('assets/js/chained/jquery.chained.remote.js?v=1.0.0'); ?>" type="text/javascript" charset="utf-8"></script>
    
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
    
     <style>
        .g-recaptcha 
            {
            transform-origin: left top;
            -webkit-transform-origin: left top;
            margin-left: 63px;
            }
        @media screen and (max-width: 480px){
        .g-recaptcha 
            {
                transform:scale(0.77);
                -webkit-transform:scale(0.77);transform-origin:0 0;
                -webkit-transform-origin:0 0;
                margin-left: -3px;
            }
        }
    </style>
    
    </body>
</html>