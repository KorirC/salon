<?php

class Checkstylists extends CI_Controller {
    public function index(){    
        $data['stylists']=$this->Admstylists->display_records();
      $this->load->view('forms/admin_stylists',$data);
      }   
      public function displaydata()
      {
      $data['stylists']=$this->Admstylists->display_records();
      $this->load->view('forms/admin_stylists',$data);
      }
}