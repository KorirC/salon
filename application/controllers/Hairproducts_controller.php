<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Hairproducts_controller extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('templates/homeheader');
        $this->load->view('products'); 
        $this->load->view('templates/footer'); 
       
    }  
}  
?>