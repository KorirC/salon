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
// function to show specified data
	// function show_stylist_id($data){
	// 	$query=$this->db->get('stylist_table',array('id'=>$id,$data));
	// 	$result=$query->result();
	// 	return $result;
	// }

// function to update stylist
 function edit_stylist($postData,$id){
	// $name = ($postData['name']);
	// $gender = ($postData['gender']);
	// $email =($postData['email']);
	// $phone= ($postData['phone_number']);
	// $hairstyle = ($postData['hairstyle']);

	// if($name !='' && $gender !=''&& $email !='' && $phone !='' && $hairstyle !=''    ){
	$value=array('name'=>$name,'gender'=>$gender,'email'=>$email,'phone_number'=>$phone,'hairstyle'=>$hairstyle);
	$this->db->where('id',$id);
	$this->db->update('stylist_table',$value);
	// }
	
 }	 
}
