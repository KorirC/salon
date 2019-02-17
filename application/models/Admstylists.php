<?php
class Admstylists extends CI_Model{
// function to display records
   function display_records(){
	$query=$this->db->query("select * from stylist_table");
	return $query->result();
	}

// function to delete the stylist
	function delete_stylist($id){
	return $this->db->delete('stylist_table', array('auto'=>$id)); 
	}
// display records by ID	
	function displayrecordsById($id)
	{
		$query=$this->db->query("select * from stylist_table");
		return $query->result();
	// $this->db->select('*')->from('stylist_table')->where('auto',$id);
	// $query = $this->db->get();
	// return $query->result();
	}
// do the update
	function update_records($name,$id,$gender,$email,$phone_number,$hairstyle)
	{
		$array=array(
			'name'=> $name,
			'idno'=> $id,
			'gender'=>$gender,
			'email'=>$email,
			'phoneno'=>$phone_number,
			'hairstyle'=>$hairstyle
		);
		$where=array('auto'=>$id);
		$this->db->update('stylist_table',$array,$where);
	}
 }	 
?>
