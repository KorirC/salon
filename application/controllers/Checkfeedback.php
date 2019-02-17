<?php

class Checkfeedback extends CI_Controller {
    public function index(){    
        $data['feedback']=$this->Admfeedback->display_records();
        $this->load->view('templates/adminheader');
        $this->load->view('templates/topmenu');
        $this->load->view('forms/admin_feedback',$data);
      }   

        //function to have read the feedback
        public function read_message($id){
            $this->Admfeedback->change_status($id,"Read");
            redirect('admin_feedback');
          }
    }?>