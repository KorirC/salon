<?php
class Earning_model extends CI_Model{

//function to insert earning
public function insert_earning($user,$amount){
    $date=date("Y-m-d");
    $result=$this->db->insert('earning_table',array('user_id'=>$user,'amount'=>$amount,'date'=>$date));
    return $result;
}

}

?>