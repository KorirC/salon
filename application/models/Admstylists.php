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
		// $this->db->from('stylist_table');
        // $this->db->join('earning_table','earning_table.stylist=stylist_table.name ');
        // $where=array(
        //     'stylist_table.id'=>$id,
        // );
		// $this->db->where($where);
		// $query=$this->db->get();
		// return $query->result();
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
		$this->db->where('id',$id);
		$this->db->update('stylist_table',$array);

	}
 }	 
?>
