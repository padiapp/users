<?php
class User extends CI_Model{
    var $tablename;
    var $email;
    function __construct($email = ''){
        parent::__construct();
        $this->tablename = 'users';
        $this->email = $email;
    }
    function gets(){
        $sql = "select id,username,email,createdate,phone ";
        $sql.= "from " . $this->tablename . " A ";
        $que = $this->db->query($sql);
        return $que->result();
    }
    function save($params){
        $keys = array();$vals = array();
        foreach($params as $key=>$val){
            array_push($keys,$key);
            array_push($vals,$val);
        }
        $ci = & get_instance();
        $sql = "insert into users ";
        $sql.= "(".implode(",",$keys).") ";
        $sql.= "values ";
        $sql.= "('".implode("','",$vals)."') ";
        $ci->db->query($sql);
        return $ci->db->insert_id();
    }
    function update($params){
        $arr = array();
        foreach($params as $key=>$val){
            array_push($arr,''.$key.'="'.$val.'"');
        }
        $sql = 'update users set ';
        $sql.= implode(',',$arr);
        $sql.= 'where email="'.$params['email'].'" ';
        $ci = & get_instance();
        $ci->db->query($sql);
        return $sql;
    }
}