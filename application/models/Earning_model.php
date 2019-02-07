<?php
class Earning_model extends CI_Model{

//function to insert earning
public function insert_earning($user,$amount){
    $date=date("Y-m-d");
    $result=$this->db->insert('earning_table',array('user_id'=>$user,'amount'=>$amount,'date'=>$date));
    return $result;
}

//get earning per date
public function get_earning_by_date($date){
    $query=$this->db->get_where("earning_table", array("date"=>$date));
	return $query->result_array();
}
}

?>