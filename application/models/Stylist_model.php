<?php
class Stylist_model extends CI_Model{

    //function to insert the stylist
    public function recruit($name,$id,$gender,$email,$phone,$hairstyle){
        $data=array(
            'name'=>$name,
            'id'=>$id,
            'gender'=>$gender,
            'email'=>$email,
            'phone_number'=>$phone,
            'hairstyle'=>$hairstyle,
            
        );
            return $this->db->insert('stylist_table', $data);
        }

        // function to check user exist
    public function check_exist($id){
        $query=$this->db->get_where('stylist_table',array('id'=>$id));
        $result=$query->result_array();
        return sizeof($result);
    }   

    // public function count($stylist){
    //     $this->db->select('stylist, COUNT(stylist)AS count');
    //     $this->db->from('earning_table');
    //     $this->db->where('stylist',$stylist);
    //     $this->db->group_by('stylist');
    //     $query = $this->db->get();
    //     // $rowcount = $query->num_rows();
	// 	return $query->result();

    // }
    //  public function add_count($clients){
    //      return $this->db->insert('stylist_table',array('served_clients'=>$clients));

    // }
       
    }
?>