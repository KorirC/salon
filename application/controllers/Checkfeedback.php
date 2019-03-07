<?php

class Checkfeedback extends CI_Controller {
  private function is_logged_in(){
    $id=$this->session->userdata('userid');
    if(!isset($id)){
        // this user is not logged in
        echo "Unauthorized Access!!";
        // redirect('login');

    }else{
      if($this->session->userdata('level')==='1'){
        $data['feedback']=$this->Admfeedback->display_records();
        $this->load->view('templates/adminheader');
        $this->load->view('templates/topmenu');
        $this->load->view('forms/admin_feedback',$data);
      }else{
        echo "Unauthorized Access!!";
        // redirect ('login');
      }
    }
    
 }
    public function index(){    
       $this->is_logged_in();
      }   

        //function to have read the feedback
        public function read_message($id){
            $this->Admfeedback->change_status($id,"Read");
            redirect('admin_feedback');
          }
    }?>