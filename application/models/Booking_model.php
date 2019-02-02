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
    

    public function get_count($datepick){
        $date=date('d');
        
        $query=$this->db->get_where('booking_table',$columns_arr=('date'),$where_arr=('date'===$date));
        // $this->db->group_by('date');
        $result=$query->num_rows();
        $count = $result['COUNT(*)'];
        // return $result;
    }
   
   public function countbookings(){
       $date=date('d');
       $count=0;
       for($i=1;$i<=$date;$i++){
           $datepick=date('d'.$i);
           $count+=$this->get_count($datepick);
       }
       return $count;
   }
    
}

      
