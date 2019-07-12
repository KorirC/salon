<?php
class Myappointments_model extends CI_Model{
	//function to diplay records
    function displayrecordsById($id)
	{
        
        $this->db->from('booking_table');
        $this->db->join('earning_table','earning_table.user_id=booking_table.id AND earning_table.date_served=booking_table.date');
        $where=array(
            'id'=>$id,
            'status'=>"cleared"
        );
        $this->db->where($where);
        $this->db->group_by('date');
        $query=$this->db->get();

        return $query->result();
    }
    //service in waiting
    function displayserviceById($id){
     $query=$this->db->get_where('booking_table',array('id'=>$id,'status'=>"waiting"));
     return $query->result();
    }
    //function to cancel appointment
    function cancel_appointment($id){
        $this->db->where("status",'waiting');
        return $this->db->delete('booking_table', array('auto'=>$id)); 
    }
}?>