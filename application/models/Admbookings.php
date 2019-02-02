<?php
class Admbookings extends CI_Model{
	//function to diplay records
   function display_records()
	{
	$query=$this->db->get_where("booking_table", array("status"=>'waiting'));
	return $query->result();
	}

	//function to filter booking by date
	function filter_by_date($date)
	{
	$query=$this->db->get_where("booking_table", array("date"=>$date,"status"=>'waiting'));
	return $query->result();
	}

	//function to change booking status
	public function change_status($id,$state){
		$data=array('status'=>$state);
		$where=array('auto'=>$id);
		$result=$this->db->update('booking_table', $data, $where);
		return $result;
	}
	
}