<?php
class User extends CI_Model{
    var $tablename;
    function __construct(){
        parent::__construct();
        $this->tablename = 'users';
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
}