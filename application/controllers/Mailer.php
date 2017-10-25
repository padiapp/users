<?php
class Mailer extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('mailing');
    }
    function index(){
        echo 'Mailer';
    }
    function welcomemail(){
        $params = $this->input->post();
        if($this->_welcomemail($params['username'],$params['email'],$params['password'])){
            echo 'sent mail succeed';
        }else{
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