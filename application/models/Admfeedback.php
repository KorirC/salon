<?php
class Admfeedback extends CI_Model{
// function to display records
   function display_records(){
    // $limit=$this->db->limit(10);

    $this->db->select('*')->from('feedback_table')->where("status",'unread')->limit(8);

    $query = $this->db->get(); 
    // $query=$this->db->get('feedback_table', array("status"=>'unread'));
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