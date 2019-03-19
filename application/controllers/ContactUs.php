<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class ContactUs extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('templates/header');
        $this->load->view('contactus'); 
        $this->load->view('templates/footer'); 
       
    }  
}  
?>