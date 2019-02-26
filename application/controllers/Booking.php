<?php
class Booking extends CI_Controller {
    //check if the user is logged in
    private function is_logged_in(){
        $id=$this->session->userdata('userid');
        if(!isset($id)){
            // this user is not logged in

            redirect('login');

        }
    }
    public function index(){
            $this->is_logged_in();
           
                    $bookings['bookings']=$this->get_next_booking();
                    $this->load->view('templates/header');
                    $this->load->view('forms/booking',$bookings);
                    $this->load->view('templates/footer');
    }

  
//making appointments/ booking 
    public function book_service(){
    
        $id=$this->session->userdata('userid');
        $service=$this->input->post('service');
        $date=$this->input->post('date');

         $this->Booking_model->appointment($id,$date,$service);
         $this->client_appointment();

    }
    // function to return to booking page
    public function client_appointment(){
        $msg['message']='';
        $msg['bookings']=$this->get_next_booking();
        $this->load->view('templates/header');
        $this->load->view('forms/booking',$msg);
        $this->load->view('templates/footer');
    }
    //function to get booking from today and six more days
    public function get_next_booking(){
        $booking=array();
        $days=array();
        for($count=0;$count<7;$count++){
             $i=$count;
            $date=date('Y-m-d', strtotime("+".$i." days"));
            $book=$this->Admbookings-> filter_by_date($date);
            array_push($booking,sizeof($book));
            array_push($days,$date);
        }
          return array($days,$booking);
    }

     //function to convert date format
     private function convert_date($date){
        return $newDate = date("Y-m-d", strtotime($date));
      }
  
    
}