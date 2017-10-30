<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user');
        $this->load->model('auth');
    }
    function edit(){
        $obj = new User($this->uri->segment(3));
        $data = array(
            'title'=>'Edit User',
            'breadcrumb'=>array(
                array('title'=>'PadiApp','url'=>'/'),
                array('title'=>'Users','url'=>'/users'),
            ),
            'currentuser'=>'Puji',
            'obj'=>$obj->get(),
            'groups'=>$obj->getgroups(),
            'tschecked'=>'checked="checked"',
            'hunterchecked'=>'checked="checked"',
            'farmerchecked'=>'checked=checked'
        );
        $this->load->view('users/edit',$data);
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
        $auth = new Auth($params['password']);
        $params['password2'] = $auth->password;
        $params['salt'] = $auth->salt;
        echo $obj->save($params);
    }
}