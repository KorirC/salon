<?php
defined('BASEPATH')OR exit('No direct script access allowed');
class Checkbookings extends CI_Controller {
  private function is_logged_in(){
    $id=$this->session->userdata('userid');
    if(!isset($id)){
        // this user is not logged in
        // echo "Unauthorized Access!!";
        redirect('login');

    }else{
      if($this->session->userdata('level')==='1'){
        $data['bookings']=$this->Admbookings->display_records();
          $this->load->view('templates/adminheader');
          $this->load->view('templates/topmenu');
          $this->load->view('forms/admin_bookings',$data);
      }else{
        
        redirect ('home');
      }
    }
}


  // function to load admin_bookings
    public function index(){  
   
     $this->is_logged_in();
    

       
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
            $data['groups'] = $this->Stylist_model->select_stylist();
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
                    $stylist=$this->input->post('stylist');
                    $this->Earning_model->insert_earning($id,$amount,$stylist);
                    $this->Admbookings->change_status($autoid,"Cleared");
                    redirect('admin_bookings');
                  }

          
          }
        
        
      ?>