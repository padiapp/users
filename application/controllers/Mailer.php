<?php
class Mailer extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('mailing');
    }
    function index(){
        echo 'this is index';
    }
    function surveyresultmail(){
        $this->load->library('email');
        $accounts = mailaccounts();
        $recipient = 'pw.prayitno@gmail.com';
        $subject = 'Akun PadiApp anda';
        $cc = 'puji@padi.net.id';
        $data = array(
            'username'=>'Puji WP',
            'email'=>'puji@padi.net.id',
            'password'=>'puji'
        );
        $message = $this->load->view('welcomemailtemplate',$data,true);
        $config = $this->setmailconfig();
        $this->email->initialize($config);
        $this->email->from($this->accounts['supportmail']);
        $this->email->to(array($recipient));
        $this->email->cc($cc);
        $this->email->bcc($this->accounts['developermail']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }
    function welcomemail(){
        if($this->_welcomemail('Puji','puji@padi.net.id','xxxx')){
            echo 'sent mail succeed';
        }else{
            echo 'sent mail not succeed';
        };
    }
    function _welcomemail($username,$recipient,$password){
        $data = array(
            'username'=>$username,
            'email'=>$recipient,
            'password'=>$password
        );
        $accounts = mailaccounts();
        $this->email->initialize(setmailconfig());
        $this->email->from($accounts['supportmail']);
        $this->email->to(array($recipient));
        $this->email->bcc($accounts['developermail']);
        $this->email->subject('Akun PadiApp Anda');
        $this->email->message($this->load->view('welcomemailtemplate',$data,true));
        return $this->email->send();
    }
    function welcomemailtemplate(){
        $this->load->view('welcomemailtemplate');
    }
}