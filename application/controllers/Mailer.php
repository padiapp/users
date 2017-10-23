<?php
class Mailer extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        echo 'this is index';
    }
    function sendmail(){
        $this->load->library('email');
        //$this->config->load('padimail');
        //$config['protocol'] = 'sendmail';
        //$config['mailpath'] = '/usr/sbin/sendmail';
        //$config['charset'] = 'iso-8859-1';
        //$config['wordwrap'] = false;
        


        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'pw.prayitno@gmail.com';
        $config['smtp_pass']    = '******';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      



        $this->email->initialize($config);
        $this->email->from('puji@padi.net.id');
        $this->email->to('pw.prayitno@gmail.com');
        $this->email->subject('Test Email');
        print_r($this->email->message($this->welcomeusertemplate('Puji','pw.prayitno@gmail.com','test')));
    }
    function welcomeusertemplate($username,$email,$password){
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