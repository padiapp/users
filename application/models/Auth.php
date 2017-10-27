<?php
class Auth extends CI_Model{
    var $password,$salt;
    function __construct($password=''){
        parent::__construct();
        $this->salt = $this->_createsalt();
        $this->password = $this->createpassword($this->salt,$password);
    }
    function _createsalt(){
        return random_string('alnum',40);
    }
    function createpassword($salt,$password){
        return (sha1($salt.$password));
    }
    function login($email,$password){
        $sql = 'select email,password2,salt from users ';
        $sql.= 'where email="'.$email.'" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        if($que->num_rows()>0){
            $res = $que->result()[0];
            $_salt = $res->salt;
            $_pass = $res->password2;
            $salted = sha1($_salt.$password);
            if($salted===$_pass){
                return true;
            }
        }
        return false;
    }
}