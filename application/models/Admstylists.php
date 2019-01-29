<?php
class Admstylists extends CI_Model{
// function to display records
   function display_records()
	{
	$query=$this->db->query("select * from stylist_table");
	return $query->result();
	}

// function to delete the stylist
	function delete_stylist($id){
	return $this->db->delete('stylist_table', array('id' => $id)); 
	}

	
	 
}
