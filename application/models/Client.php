<?php
class Client extends CI_Model{
    var $tablename;
    function __construct(){
        parent::__construct();
        $this->tablename = 'clients';
    }
    function getbycols($cols = array('id','name')){
        $cols = implode(",",$cols);
        $sql = "select " . $cols . " " ;
        $sql.= "from " . $this->tablename . " A ";
        $que = $this->db->query($sql);
        return $que->result();        
    }
}