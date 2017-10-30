<?php
class User extends CI_Model{
    var $tablename;
    var $id;
    function __construct($id = ''){
        parent::__construct();
        $this->tablename = 'users';
        $this->id = $id;
    }
    function get(){
        $sql = 'select id,username,email,date_format(dob,"%d %m %Y") dob from users ';
        $sql.= 'where id="'.$this->id.'"';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result()[0];
    }
    function gets(){
        $sql = "select id,username,email,createdate,phone ";
        $sql.= "from " . $this->tablename . " A ";
        $que = $this->db->query($sql);
        return $que->result();
    }
    function getgroups(){
        return array('3','4');
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