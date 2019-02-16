<?php
class Feedback_model extends CI_Model{

      // function to enter message
      public function enter_message($id,$message){
        $client=$this->get_user($id);
        $data=array(
            'id'=>"",
            'name'=>$client['name'],
            'phone_number'=>$client['phone_number'],
            'message'=>$message
        );
        return $this->db->insert('feedback_table',$data);
    } 

      //get the user from db
      private function get_user($id){
        
        $query=$this->db->get_where('client_table',array('id'=>$id));
        $result=$query->row_array();
        return $result;
    }
}

?>