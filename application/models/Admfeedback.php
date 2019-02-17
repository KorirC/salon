<?php
class Admfeedback extends CI_Model{
// function to display records
   function display_records(){
    $this->db->select('*')->from('feedback_table')->where("status",'unread')->limit(8);
    $query = $this->db->get(); 
	return $query->result();
	}
//function to change feedback status
public function change_status($id,$state){
    $data=array('status'=>$state);
    $where=array('auto'=>$id);
    $result=$this->db->update('feedback_table', $data, $where);
    return $result;
}	
	
 }	 
?>