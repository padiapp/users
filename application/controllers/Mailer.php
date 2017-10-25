<?php
class Mailer extends CI_Controller{
    var 
    $smtp_host  = 'mail.padi.net.id',
    $smtp_port  = '25',
    $protocol   = 'smtp',
    $mailtype   = 'html';
    function __construct(){
        parent::__construct();
    }
    function index(){
        echo 'this is index';
    }
    function sendmail(){
        $this->load->library('email');
        $recipient = 'pw.prayitno@gmail.com';
        $subject = 'test';
        $cc = 'puji@padi.net.id';
        $data = array(
            'username'=>'Puji WP',
            'email'=>'puji@padi.net.id',
            'password'=>'puji'
        );
        $message = $this->load->view('welcomemailtemplate',$data,true);
        $config = $this->setmailconfig();
        $this->email->initialize($config);
        $this->email->from('PadiApp@padi.net.id<puji@padi.net.id>');
        $this->email->to(array($recipient));
        $this->email->cc($cc);
        $this->email->bcc("puji@padi.net.id");
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }
    function setmailconfig(){
        return array(
            'smtp_host'=>$this->smtp_host,
            'smtp_port'=>$this->smtp_port,
            'protocol'=>$this->protocol,
            'mailtype'=>$this->mailtype,
        );
    }
    function welcomemailtemplate(){
        $this->load->view('welcomemailtemplate');
    }
}