<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function index(){
        $obj = new User();
        $data = array(
            'title'=>'PadiApp:Users',
            'breadcrumb'=>array(
                array('title'=>'PadiApp','url'=>'/'),
                array('title'=>'Users','url'=>'/users'),
            ),
            'currentuser'=>'Puji',
            'objs'=>$obj->gets(),
        );
        $this->load->view("users/users",$data);
    }
    function save(){
        $params = $this->input->post();
        $obj = new User();
        echo $obj->save($params);
    }
}