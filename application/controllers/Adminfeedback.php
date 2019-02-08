<?php
class Adminfeedback extends CI_Controller {
    public function index()  
    {  
        $this->load->view('templates/header');
        $this->load->view('forms/feedback'); 
        $this->load->view('templates/footer'); 
       
    }  

}
?>