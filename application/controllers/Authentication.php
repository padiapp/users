<?php
class Authentication extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('user');
        $this->load->model('auth');
        $this->load->model('user');
        $this->load->library('email');
        $this->load->helper('mailing');
    }
    function generatepassword(){
        return random_string('alnum',5);
    }
    function resetpassword(){
        $this->load->view('commons/resetpassword');
    }
    function setresetpassword(){
        $params = $this->input->post();
        $password = $this->generatepassword();
        $auth = new Auth($password);
        $user = new User();
        $username = 'Dude';
        echo $user->update(array(
            'password2'=>$auth->password,
            'salt'=>$auth->salt,
            'email'=>$params['email'],
        ));
        $this->_welcomemail($username,$params['email'],$password);
    }
    function index(){
        //index
    }
    function testsalt(){
        $auth = new Auth('puji');
        echo $auth->password . '<br />';
        echo $auth->salt . '<br />';
    }
    function createpassword(){
        $username = 'mr ninja';
        $password = 'uenake';
        $email = 'heboh@padinet.com';
        $auth = new Auth($password);
        $user = new User();
        $user->save(array(
            'username'=>$username,
            'password2'=>$auth->password,
            'salt'=>$auth->salt,
            'email'=>$email
        ));
    }
    function login(){
        $params = $this->input->post();
        $auth = new Auth();
        if($auth->login($params['username'],$params['password'])){
            redirect('/');
        }else{
            redirect('/authentication/showlogin');
        }
    }
    function showlogin(){
        $this->load->view('commons/login');
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
}