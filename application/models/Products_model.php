<?php
class Products_model extends CI_Model{

//function to insert earning
public function insert_earning($product,$amount){
    $date=date("Y-m-d");
    $result=$this->db->insert('products_table',array('product'=>$product,'amount'=>$amount,'date'=>$date));
    return $result;
}

//get earning per date
public function get_earning_by_date($date){
    $query=$this->db->get_where("products_table", array("date"=>$date));
	return $query->result_array();
}
}

?>