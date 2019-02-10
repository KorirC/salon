<?php
class Feedback_controller extends CI_Controller {
    private function is_logged_in(){
        $id=$this->session->userdata('userid');
        if(!isset($id)){
            // this user is not logged in

            redirect('login');

        }
    }
    // public function index(){
    //     $this->is_logged_in();
    //     $this->load->view('templates/header');
    //     $this->load->view('forms/feedback'); 
    //     $this->load->view('templates/footer'); 
    
    // }
    
    //function to enter feedback
    public function enter_feedback(){
        $id=$this->session->userdata('userid');
        $message=$this->input->post('message');

        $this->Feedback_model->enter_message($id,$message);
        $this->return_feedback();

    }
    // function to return the feedback page
    public function return_feedback(){  
        $msg['message']='';
        $this->load->view('templates/header');
        $this->load->view('forms/feedback',$msg); 
        $this->load->view('templates/footer'); 
       
    }  

}
?>