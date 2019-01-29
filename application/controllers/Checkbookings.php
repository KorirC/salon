<?php

class Checkbookings extends CI_Controller {
    public function index(){    
        $data['bookings']=$this->Admbookings->display_records();
        $this->load->view('templates/adminheader');
        $this->load->view('templates/topmenu');
        $this->load->view('forms/admin_bookings',$data);
      }  
      
      public function displaydata()
      {
      $data['bookings']=$this->Admbookings->display_records();
      $this->load->view('templates/adminheader');
      $this->load->view('templates/topmenu');
      $this->load->view('forms/admin_bookings',$data);
      
      }

        //function to filter booking by date
        public function filter_by_date(){
            $date=$this->input->post("date");
           if(isset($date)){
            $this->load->view('templates/adminheader');
            $this->load->view('templates/topmenu');
            $data['bookings']=$this->Admbookings->filter_by_date($this->convert_date($date));
            $this->load->view('forms/admin_bookings',$data);

           }
           else{
            $data['bookings']=$this->Admbookings->display_records();
               $this->load->view('templates/adminheader');
               $this->load->view('templates/topmenu');
               $this->load->view('forms/admin_bookings',$data);
           }
         } 

         //function to convert date format
         private function convert_date($date){
           return $newDate = date("Y-m-d", strtotime($date));
         }

}