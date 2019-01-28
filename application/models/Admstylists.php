<?php
class Admstylists extends CI_Model{

   function display_records()
	{
	$query=$this->db->query("select * from stylist_table");
	return $query->result();
	}

}