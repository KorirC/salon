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
		// $query=$this->db->query("select * from stylist_table");
		// return $query->result();
		$query=$this->db->get_where('stylist_table',array('auto'=>$id));
		return $query->result();
	}
// do the update
	function update_records($name,$gender,$email,$phone_number,$hairstyle,$id)
	{
		$array=array(
			'name'=> $name,
			'gender'=>$gender,
			'email'=>$email,
			'phoneno'=>$phone_number,
			'hairstyle'=>$hairstyle
		);
		$this->db->set($array);
		$this->db->where(array('auto',$id));
		$this->db->update('stylist_table');
	
		
		// $where=array('auto'=>$id);
		// $this->db->insert('stylist_table',$array,$where);
	}
 }	 
?>
