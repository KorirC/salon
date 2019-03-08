<?php
class Myappointments_model extends CI_Model{
	//function to diplay records
    function displayrecordsById($id)
	{
        $this->db->order_by('date','desc');
        $query=$this->db->get_where('booking_table',array('id'=>$id));
        return $query->result();
    }
    
    //function to cancel appointment
    function cancel_appointment($id){
        $this->db->where("status",'waiting');
        return $this->db->delete('booking_table', array('auto'=>$id)); 
    }
}?>