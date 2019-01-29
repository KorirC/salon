<?php
class Admstylists extends CI_Model{
// function to display records
   function display_records()
	{
	$query=$this->db->query("select * from stylist_table");
	return $query->result();
	}
	function delete_data($id){
		$this->db->query("delete  from stylist_table where id='.$id.'");
	}
	 
}
