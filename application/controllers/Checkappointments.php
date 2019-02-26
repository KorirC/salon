<?php

class Checkappointments extends CI_Controller {
    public function index(){  
        if(count()<0){
        $id=$this->session->userdata('userid');
        $name=$this->session->userdata('username');
        $data['appointments']=$this->Myappointments_model->displayrecordsById($id);
        $this->load->view('templates/header');
        $this->load->view('forms/myappointments',$data);

        }else{
            echo 'No Appointments Made';
        }
        
      }
      
          //function to cancel appointment
          public function cancel(){
            $id=$this->session->userdata('userid');
            $this->Myappointments_model->cancel_appointment($id);
            $this->index();
          }
    }
?>