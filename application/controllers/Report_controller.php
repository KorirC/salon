<?php
class Report_controller extends  CI_Controller {
      
    public function index(){
    //load the Report Wahu salon  
     $data=$this->Admstylists->display_records();
     $this->load->view('forms/report',['data'=>$data]);
    }
    //display single stylist details
    public function single_stylist($id){
      $data=$this->Admstylists->displayrecordsById($id);
      $this->load->view('forms/singlestylist_report',['data'=>$data]);
    }

    //Bookings report
    public function show_bookings(){
        $data=$this->Admbookings->display_records();
        $this->load->view('forms/report_bookings',['data'=>$data]);
    }
    //feedback
   public function show_feedback(){
    $data=$this->Admfeedback->display_records();
    $this->load->view('forms/report_feedback',['data'=>$data]);
   }
    //earnings
    public function show_earnings(){
      $data=$this->Earning_model->display_earnings();
      $this->load->view('forms/report_earnings',['data'=>$data]);
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
      $earning=$this->sum_earning($this->Earning_model-> get_earning_by_date($date));
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
 $earning=$this->sum_earning($this->Earning_model-> get_earning_by_date($date));
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