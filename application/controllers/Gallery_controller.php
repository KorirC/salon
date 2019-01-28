<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Gallery_controller extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('templates/header');
        $this->load->view('gallery'); 
        $this->load->view('templates/footer'); 
       
    }  
}  
?>