<?php
class Feedback_controller extends CI_Controller {
    private function is_logged_in(){
        $id=$this->session->userdata('userid');
        if(!isset($id)){
            // this user is not logged in

            redirect('login');

        }
    }
      // function for feed back
      public function enter_feedback(){
        $id=$this->session->userdata('userid');
        $message=$this->input->post('your_message');

        $this->Feedback_model->enter_message($id,$message);
        redirect('booking');
    }
    
}
?>