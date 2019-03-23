<?php
class Earning_model extends CI_Model{

//function to insert earning
public function insert_earning($user,$amount,$stylist){
    $date=date("Y-m-d");
    $result=$this->db->insert('earning_table',array('user_id'=>$user,'amount'=>$amount,'stylist'=>$stylist,'date_served'=>$date));
    return $result;
}

//get earning per date
public function get_earning_by_date($date){
    $query=$this->db->get_where("earning_table", array("date_served"=>$date));
	return $query->result_array();
}
// display earnings
function display_earnings()
	{
	$query=$this->db->get("earning_table");
	return $query->result();
	}
	//get earning per date
public function get_earningby_date($date){
	$this->db->select('SUM(amount) AS amount, date_served');
	$this->db->from('earning_table');
	$this->db->group_by('date_served');
	$query=$this->db->get();
	return $query->result();
	
}
//total
public function total(){
	$this->db->select('SUM(amount)AS amount');
	$this->db->from('earning_table');
	$query=$this->db->get();
	return $query->result();
}
}
?>