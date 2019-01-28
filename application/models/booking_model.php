<?php
class Booking_model extends CI_Model{

    //function to insert the client
    public function appointment($id,$date,$service){
        $client=$this->get_user($id);
       
        $data=array(
            'id'=>"$id",
            'name'=>$client['name'],
            'email'=>$client['email'],
            'phone_number'=>$client['phone_number'],
            'date'=>$date,
            'service'=>$service
        );
 return $this->db->insert('booking_table',$data);
    }

    //get the user from db
    private function get_user($id){
        $query=$this->db->get_where('client_table',array('id'=>$id));
        $result=$query->row_array();
        return $result;
    }
}