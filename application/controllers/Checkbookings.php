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

         //function to accept the booking
          public function accept_booking($id,$userid){
            $data['auto_id']=$id;
            $data['user_id']=$userid;
             $this->load->view('templates/adminheader');
             $this->load->view('forms/amount',$data);

          }
            //function to reject the booking
          public function reject_booking($id){
            $this->Admbookings->change_status($id,"Rejected");
            redirect('admin_bookings');
          }

          //add earning
          public function insert_earning($autoid,$id){
            $amount=$this->input->post('amount');
            $this->Earning_model->insert_earning($id,$amount);
            $this->Admbookings->change_status($autoid,"Cleared");
            redirect('admin_bookings');
          }


}