<?php
class Report_controller extends  CI_Controller {
      
    public function index(){
     // load the Report Wahu salon  
     $data=$this->Admstylists->display_records();
     $this->load->view('forms/report',['data'=>$data]);
    }

    //Bookings report
    public function show_bookings(){
        //report on bookings
        $data=$this->Admbookings->display_records();
        $this->load->view('forms/report_bookings',['data'=>$data]);
    }
}?>