<?php
class Admstylists extends CI_Model{
// function to display records
   function display_records(){
	$query=$this->db->query("select * from stylist_table");
	return $query->result();
	}

// function to delete the stylist
	function delete_stylist($id){
	return $this->db->delete('stylist_table', array('id'=>$id)); 
	}
// display records by ID	
	function displayrecordsById($id)
	{
		$query=$this->db->get_where('stylist_table',array('id'=>$id));
		return $query->result();
	}
// do the update
	function update_records($name,$gender,$email,$phone_number,$hairstyle,$id)
	{
		$array=array(
			'name'=> $name,
			'gender'=>$gender,
			'email'=>$email,
			'phone_number'=>$phone_number,
			'hairstyle'=>$hairstyle
		);
		
		echo $id;
		var_dump($array);
		$this->db->where('id',$id);
		$this->db->update('stylist_table',$array);

	}
 }	 
?>
