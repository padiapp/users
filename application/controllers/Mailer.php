<?php
class Mailer extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function sendmail(){
        $this->load->library('email');
        $this->email->from('puji@padi.net.id');
        $this->email->to('pw.prayitno@gmail.com');
        $this->email->subject('Test Email');
        $this->email->message($this->welcomeusertemplate());
    }
    function welcomeusertemplate($username){
        $txt = 'Halo ' . $username . ' ' . PHP_EOL;
        $txt.= 'Berikut akun anda di PadiApp ' . PHP_EOL;
        $txt.= PHP_EOL;
        $txt.= 'login : ' . $email . ' ' . PHP_EOL;
        $txt.= 'password : ' . $password . ' ' . PHP_EOL;
        $txt.= 'tautan aplikasi https://database.padinet.com ' . PHP_EOL;
        $txt.= PHP_EOL;
        $txt.= 'terimakasih';
        $txt.= PHP_EOL;
        $txt.= PHP_EOL;
        $txt.= 'Admin PadiApp';
        $txt.= PHP_EOL;
        return $txt;        
    }
}