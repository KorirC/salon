<?php
class Admbookings extends CI_Model{

   function display_records()
	{
	$query=$this->db->query("select * from booking_table");
	return $query->result();
	}

	//function to filter booking by date
	function filter_by_date($date)
	{
	$query=$this->db->get_where("booking_table", array("date"=>$date));
	return $query->result();
	}
}