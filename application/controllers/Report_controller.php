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
  }
?>