<?php

class Checkbookings extends CI_Controller {
    public function index(){    
        $data['bookings']=$this->admbookings->display_records();
      $this->load->view('forms/admin_bookings',$data);
      }   
      public function displaydata()
      {
      $data['bookings']=$this->admbookings->display_records();
      $this->load->view('forms/admin_bookings',$data);
      }
}