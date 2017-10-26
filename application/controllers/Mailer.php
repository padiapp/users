<?php
class Mailer extends CI_Controller{
    var $accounts;
    function __construct(){
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('mailing');
        $this->accounts = mailaccounts();
    }
    function index(){
        echo 'Mailer';
    }
    function error_report(){
        $params = $this->input->post();
        if($this->_error_report($params['recipient'])){
            echo 'send error report sukses';
        }else{
            echo 'send error report gagal';
        };
    }
    function _error_report($recipient){
        $data = array('recipient'=>$recipient);
        $this->email->initialize(setmailconfig());
        $this->email->from($this->accounts['developermail']);
        $this->email->to($this->accounts['developermail']);
        $this->email->subject('Error sending mail');
        $this->email->message($this->load->view('errormailtemplate',$data,true));
        return $this->email->send();
    }
    function welcomemail(){
        $params = $this->input->post();
        if($this->_welcomemail($params['username'],$params['email'],$params['password'])){
            echo 'sent mail succeed';
        }else{
            $this->_error_report($params['email']);
            echo 'sent mail not succeed'
            .$params['username']
            .$params['email']
            .$params['password'];
        };
    }
    function _welcomemail($username,$recipient,$password){
        $data = array(
            'username'=>$username,
            'email'=>$recipient,
            'password'=>$password
        );
        $_email = $this->email;
        $accounts = mailaccounts();
        $_email->initialize(setmailconfig());
        $_email->from($accounts['developermail']);
        $_email->reply_to($accounts['developermail']);
        $_email->to(array($recipient));
        $_email->bcc($accounts['bccmail']);
        $_email->subject('Akun PadiApp Anda');
        $_email->message($this->load->view('welcomemailtemplate',$data,true));
        return $_email->send();
    }
    function welcomemailtemplate(){
        $this->load->view('welcomemailtemplate');
    }
}