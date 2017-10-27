<?php
class Authentication extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('user');
        $this->load->model('auth');
        $this->load->model('user');
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
}