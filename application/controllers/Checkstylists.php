<?php

class Checkstylists extends CI_Controller {
    public function index(){    
        $data['stylists']=$this->Admstylists->display_records();
        $this->load->view('templates/header');
        $this->load->view('templates/topmenu');
        $this->load->view('forms/admin_stylists',$data);
      }   
      // function to display data
      public function displaydata()
      {
      $data['stylists']=$this->Admstylists->display_records();
      $this->load->view('templates/header');
      $this->load->view('templates/topmenu');
      $this->load->view('forms/admin_stylists',$data);
      }
        //function to delete the stylist
      public function delete_stylist($id){
        $this->Admstylists->delete_stylist($id);
        $this->index();
      }

}