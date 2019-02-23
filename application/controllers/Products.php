<?php
class Products extends  CI_Controller {
 public function index(){
    $data['thisearngs']=$this->get_thisWeek();
    $data['lastearngs']=$this->get_lastWeek();
    $this->load->view('templates/adminheader');
    $this->load->view('templates/topmenu');
    $this->load->view('hairproducts_view',$data);
   
 }

  //function to get last seven day earnings 
  public function get_lastWeek(){
        $earngs=array();
        $days=array();
        $wk=array();
        $start_date=$this->last_week_range(date('Y-m-d'));
      for($count=0;$count<7;$count++){
           $i=$count;
           $date=$this->addDayswithdate($start_date,$count+0);
          $earning=$this->sum_earning($this->Products_model-> get_earning_by_date($date));
          array_push($earngs,$earning);
          array_push($days,$date);
          $d=date("D",strtotime($days[$i]));
          array_push($wk,$d);
      }
        return array($days,$earngs,$wk);
  
}

public function get_thisWeek(){
   $earngs=array();
   $days=array();
   $wk=array();
   $start_date=$this->this_week_range();
 for($count=0;$count<7;$count++){
      $i=$count;
     $date=$this->addDayswithdate($start_date,$count+0);
     $earning=$this->sum_earning($this->Products_model-> get_earning_by_date($date));
     array_push($earngs,$earning);
     array_push($days,$date);
     $d=date("D",strtotime($days[$i]));
     array_push($wk,$d);
 }
   return array($days,$earngs,$wk);

}

// function to sum the ammount of each day
public function sum_earning($earngs){
   $total=0;
   for($i=0;$i<sizeof($earngs);$i++){
   $total=$total+$earngs[$i]['amount'];
   }
   return $total;
}
// returns last week's range
function last_week_range($date) {
   $ts = strtotime("$date - 7 days");
   $start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
         return  date('Y-m-d', $start);
}

//return this week range dates
function this_week_range() {
   $date=date('Y-m-d');
   $ts =strtotime("$date - 0 days");
   $start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
         return  date('Y-m-d', $start);
}


//function to convert date format
private function convert_date($date){
   return $newDate = date("Y-m-d", strtotime($date));
 }

//  adding days
 function addDayswithdate($date,$days){
   $date = strtotime("+".$days." days", strtotime($date));
   return  date("Y-m-d", $date);
}
}

   

?>