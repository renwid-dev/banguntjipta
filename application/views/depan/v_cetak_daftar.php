<h3 align="center">Informasi Detail</h3><br>

    <?php
    foreach ($daftar as $in) :
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
    ?>

    <center><h2><strong>No Pendaftaran : <?php echo $no_pendaftaran; ?></strong></h2></center>
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
        <td width="30%"> No Telp Orang Tua/Wali/Ketua Kelompok </td>
        <td width="70%"><?php echo $no_telp_orangtua;?></td>
    </tr>

    <tr>
        <td width="30%"> Email</td>
        <td width="70%"><?php echo $email;?></td>
    </tr>

    <tr>
        <td width="30%"> Rencana Sunat </td>
        <td width="70%"><?php echo $sesi;?></td>
    </tr>

    </table>
<?php endforeach;?>