<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Service_controller extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('templates/header');
        $this->load->view('service'); 
        $this->load->view('templates/footer'); 
       
    }  
}  
?>