<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Gallery_controller extends CI_Controller {  
     //check if the user is logged in
     private function is_logged_in(){
        $id=$this->session->userdata('userid');
        if(!isset($id)){
            // this user is not logged in

            redirect('login');

        }
    }
      
    public function index()  

    {  
        $this->is_logged_in();
        $this->load->view('templates/homeheader');
        $this->load->view('gallery'); 
        $this->load->view('templates/footer'); 
       
    }  
}  
?>