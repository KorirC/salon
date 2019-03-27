<?php
class Earning_model extends CI_Model{

//function to insert earning
public function insert_earning($user,$amount,$stylist){
    $date=date("Y-m-d");
    $result=$this->db->insert('earning_table',array('user_id'=>$user,'amount'=>$amount,'stylist'=>$stylist,'date_served'=>$date,'status_earnings'=>"paid"));
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
	// $query=$this->db->get("earning_table");
	$this->db->from('earning_table');
	$this->db->join('totals','totals.state=earning_table.status_earnings');
	$query=$this->db->get();
	return $query->result();
	}
	//get earning per date
public function get_earningby_date($date){
	$this->db->select('SUM(amount) AS amount, date_served');
	$this->db->from('earning_table');
	// $this->db->join('totals','totals.amounts=earning_table.amount');
	$this->db->group_by('date_served');
	$query=$this->db->get();
	return $query->result();
	
}
//total
public function total(){
	$this->db->select('SUM(amount)AS amount');
	$this->db->from('earning_table');
	$query=$this->db->get();
	$total= $query->row_array();
	// $data["add"] = $total;
	 foreach($total as $print) {
		return $print;
	}
}
public function update_totals(){
	$total=$this->total();
	$data=['amounts'=> $total];
	$where=array(
		'id'=>1
	);
    $this->db->where($where);
    $this->db->update('totals',$data);
  }
}
?>