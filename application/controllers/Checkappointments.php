<?php

class Checkappointments extends CI_Controller {

  //check if the user is logged in
  private function is_logged_in(){
    $id=$this->session->userdata('userid');
    if(!isset($id)){
        // this user is not logged in

        redirect('login');

    }
  }
  
  // display records
    public function index(){  
      $this->is_logged_in();
      
        $id=$this->session->userdata('userid');
        $data['appointments']=$this->Myappointments_model->displayrecordsById($id);
        $this->load->view('templates/header');
        $this->load->view('forms/myappointments',$data);
      }
  //display on queue services
  public function show_service_inwait(){
    $id=$this->session->userdata('userid');
        $data['appointments']=$this->Myappointments_model->displayserviceById($id);
        $this->load->view('templates/header');
        $this->load->view('forms/inwait',$data);

  }
          //function to cancel appointment
          public function cancel($id){
            $this->Myappointments_model->cancel_appointment($id);
            $this->show_service_inwait();
          }
          
    }
?>