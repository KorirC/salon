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
            'status'=>"active"
            
        );
            return $this->db->insert('stylist_table', $data);
        }

        // function to check user exist
    public function check_exist($id){
        $query=$this->db->get_where('stylist_table',array('id'=>$id));
        $result=$query->result_array();
        return sizeof($result);
    }   
// get stylist
public function select_stylist(){
    $this->db->select('name','id');
    $this->db->from('stylist_table');
    $this->db->where('status','active');
    $query=$this->db->get();
    return $query->result();
}
    // public function count(){
 
    //     $this->db->select('stylist, COUNT(stylist) as total');
    //     $this->db->from('earning_table');
    //     $this->db->group_by('stylist'); 
    //     $query=$this->db->get();
    //     print_r($query->result_array()); 
    // }
       // count
public function count(){
    $this->db->from('stylist_table');
    $this->db->join('earning_table','earning_table.stylist=stylist_table.name');
    $this->db->select('stylist, COUNT(stylist) as total');
    $this->db->group_by('stylist');
    $this->db->set('served_clients','total');
    $query=$this->db->get();
    $total=$query;
    // print_r($query->result_array());
    // return $query->result();
    foreach($total as $print) {
		return $print;
	}
}
    }
?>