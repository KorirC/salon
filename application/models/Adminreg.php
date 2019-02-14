<?php
class Adminreg extends CI_Model{

    //function to insert the client
    public function insert_client($id,$name,$gender,$email,$phone,$password){
        $data=array(
            'id'=>$id,
            'name'=>$name,
            'gender'=>$gender,
            'email'=>$email,
            'phone_number'=>$phone,
            'user_level'=>"1",
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
    public function login($phone,$password){
        $query=$this->db->get_where('client_table',array('phone_number'=>$phone, 'password'=>$password),1);
        return $query;
    }  
}
?>