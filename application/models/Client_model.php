<?php
class Client_model extends CI_Model{

    //function to insert the client
    public function insert_client($id,$name,$gender,$email,$phone,$password){
        $data=array(
            'id'=>$id,
            'name'=>$name,
            'gender'=>$gender,
            'email'=>$email,
            'phone_number'=>$phone,
            'user_level'=>"2",
            'password'=>$password
        );
 return $this->db->insert('client_table',$data);
    }


    // function to check user exist
    public function check_exist($id){
        $query=$this->db->get_where('client_table',array('id'=>$id));
        $result=$query->result_array();
        return sizeof($result);
    }

    //function to login
    public function login($email,$password){
        $query=$this->db->get_where('client_table',array('email'=>$email, 'password'=>$password),1);
        return $query;
    } 
}
?>