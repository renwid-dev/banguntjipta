<?php
class Contact extends CI_Controller{
  function __construct(){
		parent::__construct();
      $this->load->model('m_kontak');
      $this->load->model('m_pengunjung');
  		$this->m_pengunjung->count_visitor();
	}
	function index(){
		  $this->load->view('depan/v_contact');
	}

  function kirim_pesan(){
      $to =  $this->input->post('xemail');  // User email pass here
    $subject = 'Hi thaks for send contact me...';
    $from = 'admin@banguntjiptasunatan.com';  

    $config['mailpath'] = '/usr/sbin/sendmail';
    $config['protocol']    = 'sendmail';
    $config['smtp_host']    = 'ssl://mail.banguntjiptasunatan.com'; //smpt host
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'admin@banguntjiptasunatan.com';    //Important
    $config['smtp_pass']    = '@Admin2018';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 


    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message('<center><h3>Terimakasih telah mengirim pesan kepada kami.</h3></center><br><table border="1" width="100%" cellpadding="5">

            <tr>
                <td width="30%">Name</td>
                <td width="70%">'.$this->input->post('xnama').'</td>
            </tr>

            <tr>
                <td width="30%">Email</td>
                <td width="70%">'.$this->input->post('xemail').'</td>
            </tr>

            <tr>
                <td width="30%">No Telp</td>
                <td width="70%">'.$this->input->post('xphone').'</td>
            </tr>

            <tr>
                <td width="30%"> Pesan </td>
                <td width="70%">'.$this->input->post('xmessage').'</td>
            </tr>

            </table>');
        $this->email->cc('admin@banguntjiptasunatan.com');
        $this->email->bcc('admin@banguntjiptasunatan.com');
        $this->email->send();
        
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
      $kontak=htmlspecialchars($this->input->post('xphone',TRUE),ENT_QUOTES);
      $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
      $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
      echo $this->session->set_flashdata('msg','<p><strong> NB: </strong> Terima Kasih Telah Menghubungi Kami.</p>');
      redirect('contact');
  }

}
