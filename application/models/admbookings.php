<?php
class Admbookings extends CI_Model{

   function display_records()
	{
	$query=$this->db->query("select * from booking_table");
	return $query->result();
	}

}