<?php
class Stylist_model extends CI_Model{

    //function to insert the stylist
    public function recruit($id=0){
        $data=array(
            'name'=>$this->input->post('name'),
            'id'=>$id,
            'gender'=>$this->input->post('gender'),
            'email'=>$this->input->post('email'),
            'phone_number'=>$this->input->post('phoneno'),
            'hairstyle'=>$this->input->post('hairstyle')
        );
        if ($id == 0) {
            return $this->db->insert('stylist_table', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('stylist_table', $data);
        }

    }
     public function check_exist($id){
        // $query=$this->db->get_where('stylist_table',array('id'=>$id));
        // $result=$query->result_array();
        // return sizeof($result);
    }
    // function to update stylist
	// public function edit_stylist($name,$id,$gender,$email,$phone,$hairstyle){
	// 	$array = array(
	// 		'name' => "$name",
	// 		'gender'=>"$gender",
    //         'email'=>"$email",
    //         'phone_number'=>"$phone",
    //         'hairstyle'=>"$hairstyle"
	// 	  );
    //       $this->db->set($array);
    //       $this->db->where('id', $id);
    //         $this->db->insert('stylist_table');
	// }
}